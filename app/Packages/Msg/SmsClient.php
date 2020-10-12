<?php

namespace App\Packages\Msg;
use GuzzleHttp\Client as Guzzle;

class SmsClient {

    const ENDPOINT_SMS = 'http://api.msg91.com/api/v2/sendsms';
    const ENDPOINT_OTP = 'http://control.msg91.com/api/sendotp.php';
    const ENDPOINT_OTP_VERIFY = 'http://api.msg91.com/api/verifyRequestOTP.php';

     /**
     * @var Guzzle
     */
    protected $http;
    /**
     * @var string
     */
    protected $key;
    /**
     * Client constructor.
     * @param string $key
     */
    public function __construct($key)
    {
        $this->http = new Guzzle(['http_errors' => false]);
        $this->key = $key;
    }
    
     /**
     * @param string|array $number
     * @param string $message
     * @param string $sender
     * @param int|null $route
     * @param string|null $country
     * @return string|false
     */
    public function send($number, $message, $sender = null, $route = null, $country = null)
    {
        $response = $this->http->post(self::ENDPOINT_SMS, [
            'headers' => ['authkey' => $this->key],
            'json' => [
                'country' => $country ?? config('services.msg91.default_country'),
                'route' => $route ?? config('services.msg91.default_route'),
                'sender' => $sender ?? config('services.msg91.default_sender'),
                'sms' => [[
                    'message' => $message,
                    'to' => (array) $number,
                ]],
            ],
        ]);
        if ($response->getStatusCode() === 200) {
            $body = json_decode((string) $response->getBody(), true);
            return isset($body['type']) && ($body['type'] === 'success') ? $body['message'] : false;
        }
        return false;
    }


    public function sendotp($number,  $message = null, $otp = null, $sender = null)
    {
       $body=array(           
        'authkey' => $this->key,
        'message' => $message,
        'mobile' => $number,
        'sender' => $sender ?? config('services.msg91.default_sender'),
        );
        if ($otp) {
            $body['otp']=$otp;
        }
   
        $response = $this->http->post(self::ENDPOINT_OTP, [
            'form_params'  => $body
        ]);
        if ($response->getStatusCode() === 200) {
            $body = json_decode((string) $response->getBody(), true);
            return isset($body['type']) && ($body['type'] === 'success');
        }
        return false;
    }


    public function verify($number, $otp)
    {
        $response = $this->http->post(self::ENDPOINT_OTP_VERIFY, [
           'form_params'  => [
                'authkey' => $this->key,
                'mobile' => $number,
                'otp' => $otp,
            ]
        ]);
        if ($response->getStatusCode() === 200) {
            $body = json_decode((string) $response->getBody(), true);
            return isset($body['type']) && ($body['type'] === 'success');
        }
        return false;
    }



}