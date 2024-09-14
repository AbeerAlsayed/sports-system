<?php

namespace App\Exceptions;

use Exception;

class ForbiddenException extends Exception
{
    public function render($request)
    {
        return response()->json(['error' => 'Forbidden'], 403);
    }
}
