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
