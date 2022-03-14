<?php
require_once './databese/DB.php';
class User{
static public function createUser($data){
    $stmt=DB::connect()->prepare('INSERT INTO client (PrenomClent, EmailClent, NumPassport)
    VALUES(?,?,?)');
    $stmt->bindParam(1,$data['PrenomClent']);
    $stmt->bindParam(2,$data['EmailClent']);
    $stmt->bindParam(3,$data['NumPassport']);
    $stmt->execute();
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
    try{
      $query='SELECT * From admin_admin WHERE username=:username';
      $stmt=DB::connect()->prepare($query);
      $stmt->execute(array(':username'=>$username));  
      $user = $stmt->fetch(PDO::FETCH_OBJ);
      return $user;
      if($stmt->execute()){
      return 'ok';
      }
    }catch(PDOException $ex){
      echo 'erreur'.$ex->getMessage();
    }
      
  }
  public static function createAcc($data){
    // die(print_r($data['Lastname']));
    $query= 'INSERT INTO client( NomClient, PrenomClent, EmailClent, NumPassport, dateN, motdepass) 
     VALUES (?,?,?,?,?,?)';
      $stmt=DB::connect()->prepare($query);
      $stmt->bindParam(1,$data['Lastname']);
      $stmt->bindParam(2,$data['Firstname']);
      $stmt->bindParam(3,$data['email']);
      $stmt->bindParam(4,$data['Numpass']);
      $stmt->bindParam(5,$data['Datedenaissnce']);
      $stmt->bindParam(6,$data['motdepass']);
      if($stmt->execute()){
        return 'ok';
      }
      
  }
  public static function getacc($email){
    // die(var_dump($email));
    $query="SELECT * FROM client WHERE EmailClent =?";
    $stmt=DB::connect()->prepare($query);
    $stmt->bindParam(1,$email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
  
  return $user ; 
  }
  
}
?>