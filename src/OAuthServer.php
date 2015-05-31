<?php

namespace OAuthServer;

abstract class OAuthServer
{
    public abstract function requestToken();

    public abstract function verifySignature(Request $request);
}