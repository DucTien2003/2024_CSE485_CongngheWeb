<?php
class Employee
{
    private $employeeID;
    private $fullName;
    private $address;
    private $email;
    private $mobilePhone;
    private $position;
    private $avatar;
    private $departmentID;
    private $departmentName;

    public function __construct(array $data)
    {
        $this->employeeID = $data['EmployeeID'] ?? null;
        $this->fullName = $data['FullName'] ?? null;
        $this->address = $data['Address'] ?? null;
        $this->email = $data['Email'] ?? null;
        $this->mobilePhone = $data['MobilePhone'] ?? null;
        $this->position = $data['Position'] ?? null;
        $this->avatar = $data['Avatar'] ?? null;
        $this->departmentID = $data['DepartmentID'] ?? null;
        $this->departmentName = $data['DepartmentName'] ?? null;
    }

    public function getEmployeeID()
    {
        return $this->employeeID;
    }
    public function setEmployeeID($employeeID)
    {
        $this->employeeID = $employeeID;
    }

    public function getFullName()
    {
        return $this->fullName;
    }
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }

    public function getAddress()
    {
        return $this->address;
    }
    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }
    public function setMobilePhone($mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;
    }

    public function getPosition()
    {
        return $this->position;
    }
    public function setPosition($position)
    {
        $this->position = $position;
    }

    public function getAvatar()
    {
        return $this->avatar;
    }
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    public function getDepartmentID()
    {
        return $this->departmentID;
    }
    public function setDepartmentID($departmentID)
    {
        $this->departmentID = $departmentID;
    }

    public function getDepartmentName()
    {
        return $this->departmentName;
    }
    public function setDepartmentName($departmentName)
    {
        $this->departmentName = $departmentName;
    }
}
