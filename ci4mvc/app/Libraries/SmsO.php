<?php

namespace App\Libraries;

class SmsO
{
    private int $sender  = 4;
    private string $message;

    public function sendMsg(string $device_model, string $customer_phone, string $device_name, string $status)
    {
        $client = \Config\Services::curlrequest();

        $this->message = 'Dispozitivul ' . $device_name . ',  model ' . $device_model . ', se afla in stadiul de ' . $status . ' poate fi verificat si pe https://procomputer.ro/';
        $client->request('POST', 'https://app.smso.ro/api/v1/send/', [
            'headers' => [
                'X-Authorization' => '3KKWOxOX29H55mUSXvaMXXpBic2LzVOblfxUgn8l',
            ],
            'form_params' => [
                'to' => '+4'. $customer_phone,
                'body' => $this->message,
                'sender' => $this->sender,
            ],
        ]);
    }
}