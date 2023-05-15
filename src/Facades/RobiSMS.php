<?php
namespace Misfit\Robisms\Facades;
use Illuminate\Support\Facades\Facade;

class RobiSMS extends Facade
{
    protected static function getFacadeAccessor() {
        return 'RobiSms';
    }
}
