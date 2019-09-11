<?php


namespace Laravelrotebal\LaravelNovaOauth2Login;


use Kronthto\LaravelOAuth2Login\OAuthProvider as DefaultOauthProvider;

class OAuth2Provider extends DefaultOauthProvider
{
    protected function getAllowedClientOptions(array $options)
    {
        return ['timeout', 'proxy', 'verify'];
    }
}