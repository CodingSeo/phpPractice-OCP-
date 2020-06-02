<?php
abstract class RepositoryInterface
{
   protected $user;

   public function __construct(User $user)
   {
       $this->user = $user;
   }

}