<?php
namespace Misfit\Robisms;

use GuzzleHttp\Client as GuzzleHttpClient;
use SimpleXMLElement;

class RobiSms implements RobiSmsInterface{

    public function send(array $data)
    {
        $config = config('robisms');

        $client = new GuzzleHttpClient(['base_uri' => 'https://api.mobireach.com.bd', 'timeout' => $config['timeout']]);
        try{
        $response = $client->request('GET', 'SendTextMessage', [
            'query' => [
                'Username' => $config['username'],
                'Password' => $config['password'],
                'From'     => $config['from'],
                'To'       => '88'.$data['mobile_no'],
                'Message'  => $data['msg']
            ],

        ]);
        dd($response);
        if ($response->getStatusCode() == 200) {
            $xml_response = $response->getBody()->getContents();

            $xml = new SimpleXMLElement($xml_response);

            $data = $xml->ServiceClass;

            $return_data = [];

            foreach ($data->children() as $node) {
                $return_data[$node->getName()] = is_array($node) ? simplexml_to_array($node) : (string) $node;
            }

            // if ($return_data['StatusText'] == 'success') {
            //     setting(['sms_credit' => $return_data['CurrentCredit'] ?? 0]);
            // }

            return $return_data;

        } else {
            return null;
        }
    } catch (\GuzzleHttp\Exception\ClientException $e){
            dd($e->getResponse()->getBody()->getContents());
        }

    }
}
