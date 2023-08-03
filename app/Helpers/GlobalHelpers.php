<?php

use App\Mail\BaseEmail;
use App\Models\Logintext;
use App\Models\Message;
use App\Models\Notification;
use App\Models\Page;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;

/**
 * Send success response to the request.
 *
 * @param array $data
 * @param int $code
 * @param string $message
 * @return \Illuminate\Http\JsonResponse
 */
function successResponse($data = [], $code = 200, $message = null)
{
    if (!$message) {
        $message = __('httpmessages.200');
    }
    if (gettype($data) == 'object' && ("App\Resources\BaseResource" == get_parent_class(get_class($data)) || "Illuminate\Http\Resources\Json\ResourceCollection" == get_parent_class(get_class($data)))) {
        $status = [
            'status' => [
                'success' => true,
                'code' => $code,
                'message' => $message
            ],
        ];
        return $data->additional($status);
    } else {
        return response()->json(
            [
                'status' => [
                    'success' => true,
                    'code' => $code,
                    'message' => $message,
                ],
                'data' => $data,
            ]
        );
    }
}

function notification($token, $key, $title, $user = null)
{
    $pushSettings = $user->userSettings->where("type", 'push')->where('key', $key)->first();
    if ($pushSettings && $pushSettings->value == 1) {
        $pagePayment = Page::where('title', $title)->first();
    }
    $payload = array(
        'to' => $token,
        'title' => $pagePayment->description1_heading . '  ' . $user->name,
        'sound' => 'default',
        'body' => $pagePayment->description1,
        "priority" => "high",
        "enableSound" => 'true',
        "sound" => "default"
    );

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://exp.host/--/api/v2/push/send",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($payload),
        CURLOPT_HTTPHEADER => array(
            "Accept: application/json",
            "Accept-Encoding: gzip, deflate",
            "Content-Type: application/json",
            "cache-control: no-cache",
            "host: exp.host"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    \App\Models\PushNotification::create([
        'user_id' => $user->id,
        'module' => 'shop',
        'title' => $payload['title'],
        'body' => $payload['body'],
    ]);

    if ($err) {
        return $err;
    }
}

function email($receiver, $key, $title, $url, $slug = null)
{
    $settings = $receiver->userSettings;
    $objDemo = null;
    if ($settings) {
        $objDemo = new \stdClass();
        $objDemo->receiver = $receiver->name;
        $sender = User::where('id', auth()->id())->first();
        $objDemo->sender = $sender ? $sender->name : "htreg";
        $objDemo->siteURL = $url;
        $userEmailSettings = $settings->where("type", 'email')->where('key', $key)->first();
        if ($userEmailSettings && $userEmailSettings->value == 1 && $userEmailSettings->value == "1") {
            $page = Page::where('slug', $slug)->orWhere('title', $title)->first();
        }

        $objDemo->icon = $page->description1_image;
        $objDemo->title = $page->description1_heading;
        $objDemo->title1 = $page->description2_heading;
        $objDemo->body = $page->description1;
        return $objDemo;
    } else {
        return $objDemo;
    }
}

// function successResponse($data = [], $code = 200, $message = 'OK')
// {
// return response()->json(
//     [
//         'success' => true,
//         'code' => $code,
//         'message' => $message,
//         'data' => $data,
//     ],
//     $code
// );
// }

/**
 * Send error response to the request.
 *
 * @param array $error
 * @param int $code
 * @param string $message
 * @return \Illuminate\Http\JsonResponse
 */


function errorResponse($error = [], $code = 200, $message = null)
{
    if (!$message) {
        $message = __('httpmessages.500');
    }
    return response()->json(
        [
            'status' => [
                'success' => false,
                'code' => $code,
                'message' => $message,
            ],
            'error' => $error,
        ]
    );
}

function user_logo()
{
    $logo = Logintext::where('user_logo', '!=', null)->first();
    return $logo;
}
function messages_count()
{
    $message = Message::where('receiver_id', auth()->id())->where('status', '0')->count();
    return $message;
}
function notification_count()
{
    $notificaiton = Notification::where('status', 0)->count();
    return $notificaiton;
}
function messages()
{
    $messages = Notification::where('status', 0)->orderBy('message', 'desc')->paginate(5);
    return $messages;
}

function SMTP_email($subject, $body, $to_name, $to_email, $smtp_host, $smtp_port, $smtp_username, $smtp_password, $smtp_from_name, $smtp_from_email, $smtp_ssl)
{
    try {
        $mail = new PHPMailer();
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = $smtp_host;  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = $smtp_username;                 // SMTP username
        $mail->Password = $smtp_password;                           // SMTP password
        $mail->SMTPSecure = $smtp_ssl;                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = $smtp_port;                                    // TCP port to connect to
        $mail->SMTPOptions = array('ssl' => array('verify_host' => false, 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true));
        $mail->setFrom($smtp_from_email, $smtp_from_name);
        $mail->addAddress($to_email, $to_name);     // Add a recipient
        $mail->CharSet = 'UTF-8';

        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $body;

        if (!$mail->send()) {
            return $mail->ErrorInfo;
        } else {
            return '1';
        }
    } catch (Exception $e) {
        //echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
}
