<?php

namespace PHP;

class User
{
    private $id;
    private $email;
    private $password;
    /**
     * @var $DBconnector
     */
    private $dbconnector;
    /**
     * @var $ServiceProvider
     */
    private $serviceprovider;

    /**
     * Get the value of id
     */
    public function __construct(DBconnector $dbconnector, ServiceProvider $serviceprovider)
    {
        $this->dbconnector = $dbconnector;
        $this->serviceprovider = $serviceprovider;
    }
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
    /**
     * Set the value of dbconnector
     *
     * @return  self
     */
    public function setDbconnector(DBconnector $dbconnector)
    {
        $this->dbconnector = $dbconnector;
    }
    public function setServiceProvider(ServiceProvider $serviceprovider)
    {
        $this->serviceprovider = $serviceprovider;
    }

    public function shout()
    {
        echo ($this->dbconnector->connect() . ' ');
        echo ($this->serviceprovider->getName());
    }
}
