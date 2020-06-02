<?php
class UserService
{
   protected $userRepository;

   public function __construct(UserRepository $userRepository)
   {
       $this->userRepository = $userRepository;
   }

   public function getUser($id)
   {
       $user = $this->userRepository->getUserById($id);
       return $user;
   }
}