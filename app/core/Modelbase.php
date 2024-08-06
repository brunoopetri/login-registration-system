<?php

namespace app\core;

use app\core\Database;

abstract class Modelbase
{
    protected string $table;

    public function findBy(string $field, mixed $value)
    {
        try {
            $connect = Database::connect();
            $prepare = $connect->prepare("SELECT * FROM $this->table WHERE $field = :$field");
            $prepare->execute([
                $field => $value,
            ]);

            return $prepare->fetchObject();
        } catch (\Throwable $th) {
            var_dump($th->getMessage());
        }
    }
}
