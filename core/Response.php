<?php

namespace app\core;

class Response
{
    public function setStateCode(int $code)
    {
        http_response_code($code);
    }
}
