<?php

if(!function_exists('robi_sms'))
{
    function robi_sms(array $data)
    {
        return app('RobiSms')->send($data);
    }
}
