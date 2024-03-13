<?php
class User
{
    private $username;
    private $password;
    private $role;
    private $id;


    public function __construct(array $data)
    {
        $this->username = $data['Username'] ?? null;
        $this->password = $data['Password'] ?? null;
        $this->role = $data['Role'] ?? null;
        $this->id = $data['EmployeeId'] ?? null;
    }

    public function getUsername()
    {
        return $this->username;
    }
    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getRole()
    {
        return $this->role;
    }
    public function setRole($role)
    {
        $this->role = $role;
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
}
