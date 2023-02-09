<?php

abstract class AbstractController{
    protected int $id;
    protected string $username;
    protected string $password;


}


public function render(string $view, array $values) : void{
    
    $template= $view;
    $data=$value;
    require 'views/layout.phtml'
}
?>