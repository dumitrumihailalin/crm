<?php
namespace App\Models;

use App\Libraries\Token;

class RememberLoginModel extends \CodeIgniter\Model
{
    protected $table = 'remember_login';
    protected $primaryKey = 'id';
    protected $allowedFields = ['token_hash', 'user_id', 'expires_at'];


    public function rememberUserLogin($user_id)
    {
        $token = new Token();
        $token_hash = $token->getHash();
        $expiry = new \DateTime('+24 hours');
        $data = [
            'token_hash' => $token_hash,
            'user_id' => $user_id,
            'secure'   => true,
            'httponly' => true,
            'expires'  => $expiry
        ];
        $this->insert($data);
        return [
            $token->getValue(),
            $expiry
        ];
    }
}