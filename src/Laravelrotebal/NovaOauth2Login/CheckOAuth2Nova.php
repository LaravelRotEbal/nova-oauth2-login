<?php


namespace Laravelrotebal\NovaOauth2Login;


use Illuminate\Http\Request;
use Kronthto\LaravelOAuth2Login\CheckOAuth2;

class CheckOAuth2Nova extends CheckOAuth2
{

    protected function getAuthRedirect(Request $request)
    {
        if($request->expectsJson()) {
            return response()->json(['message' => 'Unauthorised'], 401);
        } else {
            $authorizationUrl = $this->oauthService->getProvider()->getAuthorizationUrl();

            session()->put(config('oauth2login.session_key_state'), $this->oauthService->getProvider()->getState());
            return redirect()->guest($authorizationUrl);
        }
    }

}