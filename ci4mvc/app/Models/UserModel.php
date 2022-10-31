<?php
namespace App\Models;
use App\Libraries\Token;

class UserModel extends \CodeIgniter\Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'password', 'activation_hash', 'reset_hash', 'reset_expires_at'];
    protected $returnType = 'App\Entities\User';
    protected $useTimestamps = true;
    protected $beforeInsert = ['hashPassword'];
    protected $hidden = ['created_at', 'updated_at', 'password', 'password_hash'];

    protected $validationRules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required'
    ];

    public function activateByToken($token)
    {
       $token = new Token($token);
       $token_hash = $token->getHash();

        $user = $this->where('activation_hash', $token_hash)->first();

        if ($user !== null) {
            $user->activate();

            $this->protect(false)->save();
        }
    }
    protected function hashPassword(array $data)
    {
        $data['data']['password_hash'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        unset($data['data']['password']);
        return $data;
    }

    public function findByEmail(string $email)
    {
        return $this->where('email', $email)->first();
    }
}