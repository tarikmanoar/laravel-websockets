<?php

namespace App\Http\Responses;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\JsonResponse;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    /**
     * @return mixed
     */
    public function toResponse($request)
    {
        return $request->wantsJson()
                    ? new JsonResponse('', 204)
                    : redirect(RouteServiceProvider::HOME);
    }
}
