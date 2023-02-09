<?php

 class UserController extends AbstractController {
    
    
  private UserManager $manager;

 public function __construct()
    {
        $this->manager= new UserManager()  ;
    
       
        
    }



public function index (): array{
    
$this->manager->getAllUsers()
$this->manager->render()
}
 }   

?>