<?php
namespace App\Providers;

use Illuminate\Http\Request;
use Dingo\Api\Routing\Route;
use Dingo\Api\Contract\Auth\Provider;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use App\User;


class ApiAuthProvider implements Provider
{
    public function authenticate(Request $request, Route $route)
    {
        $token = $request->token;
        $service_user = User::where('token', '=', $token)->first();
        if ($service_user) {
            return $service_user;
        } else {
            throw new UnauthorizedHttpException('Invalid token.', 'Invalid token.');
        }
    }
}