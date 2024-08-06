<?php

namespace app\Models;

use app\core\Database;
use app\core\Modelbase;

class User extends Modelbase
{
    protected string $table = 'users';

    public function insert(array $data)
    {
        try {
            $connect = Database::connect();
            $prepare = $connect->prepare("INSERT INTO $this->table(name, email, password) VALUES(:name, :email, :password)");
            return $prepare->execute([
                ':name' => $data['name'],
                ':email' => $data['email'],
                ':password' => $data['password']
            ]);
        } catch (\PDOException $th) {
            var_dump($th->getMessage());
            return false;
        }
    }
}
