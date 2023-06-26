<?php

declare(strict_types=1);

namespace App\Exceptions;

class AuthenticationException extends \Exception {

    protected $message = 'There Was Some Error in Auth';
}