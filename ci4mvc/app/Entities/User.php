<?php

namespace App\Entities;

use \CodeIgniter\Entity\Entity;
use App\Libraries\Token;

class User extends Entity
{
    protected $attributes = [
        'id'         => null,
        'name'       => null, // Represents a username
        'email'      => null,
        'password'   => null,
        'created_at' => null,
        'updated_at' => null,
    ];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function verifyPassword(string $password)
    {
        return password_verify($password, $this->password_hash);
    }

    public function startActivation()
    {
        $token = new Token();
        $this->token  = $token->getValue();
        $this->activation_hash = $token->getHash();
    }

    public function activate()
    {
        $this->is_active = true;
        $this->activation_hash = null;
    }

    public function startPasswordReset()
    {
        $token = new Token();
        $this->reset_token = $token->getValue();
        $this->reset_token = $token->getHash();
        $this->reset_expires_at = date('Y-m-d H:i:s', time() + 7200);
    }
}