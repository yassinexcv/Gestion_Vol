<?php
require_once './databese/DB.php';
class Client{

    public static function Login($data){
        $username=$data['username'];
        // $password=$data['pass_word'];
    
        try{
          $query='SELECT * From client WHERE username=:username';
          $stmt=DB::connect()->prepare($query);
          $stmt->execute(array(':username'=>$username ));  
          $user = $stmt->fetch(PDO::FETCH_OBJ);
          return $user;
        }catch(PDOException $ex){
          echo 'erreur'.$ex->getMessage();
        }

    }
      
  
}
?>