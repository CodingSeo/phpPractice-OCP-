<?php
class UserController
{
   protected $userService;
   protected $TransFormer;
   
   public function __construct(UserService $userService, TransFormer $transformer)
   {
       $this->userService = $userService;
       $this->transformer = $transformer;
   }

   public function show(Request $request)
   {
       $user = $this->userService->getUser($request->id);
       return $transformer->transform($user);
   }
}