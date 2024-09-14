<?php

namespace App\Exceptions;

use Exception;

class InternalServerErrorException extends Exception
{
    public function render($request)
    {
        return response()->json(['error' => 'Internal Server Error'], 500);
    }
}
