<?php
require_once './databese/DB.php';
class Admin{
static public function createUser($data){
    $stmt=DB::connect()->prepare('INSERT INTO admin_admin (fullname,username,pass_word) 
    VALUES(?,?,?)');
    $stmt->bindParam(1,$data['fullname']);
    $stmt->bindParam(2,$data['username']);
    $stmt->bindParam(3,$data['pass_word']);
      if($stmt->execute()){
      return 'ok';
  }else{
      return 'error';
  }
 //$stmt->close();
  $stmt=null;
}

static public function login($data){
    $username=$data['username'];
    // $password=$data['pass_word'];

    try{
      $query='SELECT * From admin_admin WHERE username=:username';
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