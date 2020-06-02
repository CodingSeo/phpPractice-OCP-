<?php
class UserController
{
   protected $userService;
   protected $user;
   protected $TransFormer;
   
   public function __construct(UserService $userService, TransFormer $transformer,DTO $user)
   {
       $this->userService = $userService;
       $this->transformer = $transformer;
       $this->user  = $user;
   }

   public function show(Request $request)
   {
       $user = $this->userService->getUser($request->id);
       //DTO 삽입
       return $transformer->transform($user);
   }
}