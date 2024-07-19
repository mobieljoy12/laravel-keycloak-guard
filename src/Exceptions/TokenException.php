<?php

namespace KeycloakGuard\Exceptions;

use Illuminate\Http\JsonResponse;

class TokenException extends KeycloakGuardException
{
    public function render($request): JsonResponse
    {
        return response()->json([
            'error' => $this->message,
        ], 401);
    }
}
