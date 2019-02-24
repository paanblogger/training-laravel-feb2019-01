<?php

namespace App\Processors;

class UserProcessor
{
    private $username;
    private $email;
    private $password;

    public function __construct($username, $email, $password)
    {
        $this->username = $username;
        $this->email    = $email;
        $this->password = $password;
    }

    public static function make($username, $email, $password)
    {
        return new self($username, $email, $password);
    }

    // validate
    // store
    // update
    // delete
    // avatar
    // ...
}
