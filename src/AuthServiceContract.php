<?php

namespace Dpc\SansModelAuth;


interface AuthServiceContract
{
    /**
     * Determines if current user is authenticated
     */
    public function check() : bool;

    public function setUser(): void;

    public function checkCredentials($credentials): bool;

    public function onLogout(): void;
}