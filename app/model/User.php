<?php

class User extends Model
{
    public function findByEmail($email)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    public function updateLastLogin($id)
    {
        $stmt = $this->db->prepare(
            "UPDATE users SET last_login = NOW() WHERE id = :id"
        );
        $stmt->execute(['id' => $id]);
    }
}
