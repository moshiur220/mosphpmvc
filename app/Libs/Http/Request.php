<?php
namespace App\Libs\Http;
use Symfony\Component\HttpFoundation\Request as Rs;

class Request extends Rs
{

    public static function request(){
        return Request::createFromGlobals();
    }

}