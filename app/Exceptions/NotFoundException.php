<?php

namespace App\Exceptions;

use Exception;

class NotFoundException extends Exception
{
    public function render($request)
    {
        return response()->json(['error' => 'Not Found'], 404);
    }
}
