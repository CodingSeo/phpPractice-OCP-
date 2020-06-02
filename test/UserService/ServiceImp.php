<?php
abstract class UserServiceImp
{
   protected $userRepository;

   public function __construct(Repository $Repository)
   {
       $this->Repository = $Repository;
   }

   abstract function getUser($id);
}