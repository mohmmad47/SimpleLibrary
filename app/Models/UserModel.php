<?php

declare(strict_types=1);

namespace App\Models;

use App\DB;
use PDO;


class UserModel
{
    public function SignUp($full_name, $email, $password, DB $dbConnection) : bool
    {

        try {

            $date = date("Y-m-d H:i:s");

            $query = "INSERT INTO users (full_name, email, created_at, password) 
            VALUES (:full_name, :email, :created_at, :password)";

            $stmt = $dbConnection->prepare($query);
            $stmt->bindParam("full_name", $full_name);
            $stmt->bindParam("email", $email, );
            $stmt->bindParam("password", $password);
            $stmt->bindParam("created_at", $date);
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }

        } catch (\Exception $e) {
            echo $e;
            return false;
        }


    }
    public function getUserByEmail($email, DB $db)
    {
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}