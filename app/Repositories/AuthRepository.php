<?php


namespace App\Repositories;

use App\Mail\ForgotPasswordEmail;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Hashing\Hasher as Hash;
use App\Mail\Reset;
use App\Models\Page;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;

class AuthRepository implements AuthRepositoryInterface
{
    private $model;

    /**
     * @var Hash
     */
    private $hash;

    public function __construct(User $user, Hash $hash)
    {
        $this->model = $user;
        $this->hash = $hash;
    }

    public function attempt($credentials)
    {
        $user = $this->model->whereEmail($credentials['email'])->first();
        if (!$user) {
            $error = ValidationException::withMessages([
                'email' => ['The selected email is not valid'],
            ]);
            throw $error;
        }
        $passwordMatched = $this->hash->check($credentials['password'], $user->password);
        if (!$passwordMatched) {
            $error = ValidationException::withMessages([
                'password' => ['The selected password is not valid'],
            ]);
            throw $error;
        }
        return $user;
    }

    public function forgot($data)
    {
        $application = $data['app_type'] ?? "web";

        if ($application == "mobile") {
            $user = $this->model->whereEmail($data['email'])->where('type', 'user')->first();
            if ($user) {
                $page = Page::where('title', 'forgot')->first();
                $otp = mt_rand(100000, 999999);
                $objDemo = new \stdClass();
                $objDemo->otp = $otp;
                $objDemo->icon = $page->description1_image;
                $objDemo->title = $page->description1_heading;
                $objDemo->title1 = $page->description2_heading;
                $objDemo->body = $page->description1;
                Mail::to($user->email)->send(new ForgotPasswordEmail($objDemo));

                // $user->notify(new ResetPasswordNotification($otp, 'mobile'));
                DB::table('password_resets')
                    ->updateOrInsert(
                        ['email' => $data['email']],
                        ['token' => $otp]
                    );
            } else {
                return errorResponse(500, 'Sorry! No such email found.');
            }
        } else {
            $this->broker()->sendResetLink($data);
        }
        return successResponse(null, 200, 'Successfully! Reset password email is sent.');
    }

    public function broker()
    {
        return Password::broker('users');
    }

    /**
     * @param $data
     */
    public function optVerify($data)
    {
        $item = DB::table('password_resets')->where([
            'email' => $data['email'],
            'token' => $data['token']
        ])->first();
        if (!$item) {
            return abort(422,'Token does not match');
        } else {
            return successResponse(null, 200, 'Successfully! Otp is verified.');
        }
    }

    public function resetPassword($data)
    {
        $data['password'] = $this->hash->make($data['password']);
        $update = $this->model->whereEmail($data['email'])->where('type', 'user')->update(array('email' => $data['email'], 'password' => $data['password']));
        if ($update) {

            $tokenMatch = DB::table('password_resets')
                ->where(['email' => $data['email'], 'token' => $data['token']])->first();
            if ($tokenMatch) {

                DB::table('password_resets')
                    ->updateOrInsert(
                        ['email' => $data['email']],
                        ['token' => '']
                    );

                // if ($data['status'] == 'rejected') {
                $page = Page::where('title', 'reset')->first();
                $objDemo = new \stdClass();
                $user = User::whereEmail($data['email'])->first();
                $objDemo->receiver = $user->name;
                $sender = 'HtReg';
                $objDemo->sender = $sender;

                $objDemo->icon = $page->description1_image;
                $objDemo->title1 = $page->description2_heading;
                $objDemo->body = $page->description1;
                // $objDemo->password = $data['password'];
                Mail::to($data['email'])->send(new Reset($objDemo));
                return successResponse(null, 200, 'Successfully! Password is reset.');
            } else {
                return response()->json(['code' => '404', 'status' => 'failed', 'message' => 'Token does not match.'], 422);
            }
        } else {
            return response()->json(['code' => '404', 'status' => 'failed', 'message' => 'Email does not match.'], 422);
        }
    }
}
