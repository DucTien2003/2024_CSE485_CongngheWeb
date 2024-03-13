<?php
class Department
{
    private $departmentID;
    private $departmentName;
    private $address;
    private $email;
    private $phone;
    private $logo;
    private $website;
    private $parentDepartmentID;

    public function __construct(array $data)
    {
        $this->departmentID = $data['DepartmentID'] ?? null;
        $this->departmentName = $data['DepartmentName'] ?? null;
        $this->address = $data['Address'] ?? null;
        $this->email = $data['Email'] ?? null;
        $this->phone = $data['Phone'] ?? null;
        $this->logo = $data['Logo'] ?? null;
        $this->website = $data['Website'] ?? null;
        $this->parentDepartmentID = $data['ParentDepartmentID'] ?? null;
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

    public function getPhone()
    {
        return $this->phone;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getLogo()
    {
        return $this->logo;
    }
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

    public function getWebsite()
    {
        return $this->website;
    }
    public function setWebsite($website)
    {
        $this->website = $website;
    }

    public function getParentDepartmentID()
    {
        return $this->parentDepartmentID;
    }
    public function setParentDepartmentID($parentDepartmentID)
    {
        $this->parentDepartmentID = $parentDepartmentID;
    }
}
