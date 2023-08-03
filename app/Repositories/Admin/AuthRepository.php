<?php


namespace App\Repositories\Admin;

use App\Models\Admin\Admin;
use App\Notifications\ResetPasswordNotification;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;  
use Illuminate\Contracts\Hashing\Hasher as Hash;
use Illuminate\Support\Facades\Password;

class AuthRepository implements AuthRepositoryInterface
{
    private $model;

    /**      
     * @var Hash
     */
    private $hash;
    public function __construct(Admin $user, Hash $hash)
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
        $application = $data['app_type'] ?? null;

        if ($application == "mobile") {
            $user = $this->model->whereEmail($data['email'])->first();
            if ($user) {
                $otp = mt_rand(1000, 9999);
                $user->notify(new ResetPasswordNotification($otp, 'mobile'));
                DB::table('password_resets')
                    ->updateOrInsert(
                        ['email' => $data['email']],
                        ['token' => $otp]
                    );
            } else {
                return errorResponse(500,'Sorry! No such email found.');
            }
        } else {
            $this->broker()->sendResetLink($data);
        }
        return successResponse(null,200,'Successfully! Reset password email is sent.');
    }

    public function broker()
    {
        return Password::broker();
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
            return errorResponse(500,'Token does not match');
        }else{
            return successResponse(null,200,'Successfully! Otp is verified.');
        }
    }

    public function resetPassword($data)
    {
        $data['password'] =$this->hash->make($data['password']);
        $update=$this->model->whereEmail($data['email'])->update($data);
        if($update){
            return  successResponse(null,200,'Successfully! Password is reset.');
        }else{
            return errorResponse();
        }

    }
}
