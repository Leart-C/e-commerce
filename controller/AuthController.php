<?php
class AuthController{

  
    function isAuthenticated(){
      return isset($_SESSION["is_authenticated"]);
    }


    function getAuthenticatedUser() {

      if($_SESSION['authenticated_user']){
        return $_SESSION['authenticated_user'];
      }

      return null;
    }


    function getAuthenticatedUserId(){
      $authUser = $this->getAuthenticatedUser();

      if($authUser){
        return $authUser['id'];
      }

      return null;
    }
   
}



?>