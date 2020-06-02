<?php
abstract class RepositoryInterface
{
   protected $Repository;

   public function __construct(User $user)
   {
       $this->userModel = $user;
   }

   public function getUserById($id)
   {
       return $this->userModel->findOrFail($id);
   }
}