<?php
abstract class RepositoryInterface
{
   protected $user;

   public function __construct(User $user)
   {
       $this->user = $user;
   }

   public function getUserById($id)
   {
       return $this->userModel->findOrFail($id);
   }
}