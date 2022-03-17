<?php
 require_once './databese/DB.php';
class Vol{
    static public function getAll(){
        $stmt=DB::connect()->prepare('SELECT * FROM vol where NbPlace>1');
        $stmt->execute();
        return $stmt->fetchAll();
      // $stmt->close();
        $stmt = null;
    }
    // fonction Updat
    static public function getVol($idVol){
    // die(var_dump($idVol));
      try{
        $query="SELECT * From vol WHERE idVol=$idVol";
        $stmt=DB::connect()->prepare($query);
        $stmt->execute();  
        $vol=$stmt->fetch(PDO::FETCH_OBJ);
        return $vol;
      }catch(PDOException $ex){
        echo 'erreur'.$ex->getMessage();
      }
        
      
    }
   static public function add($data){
    $stmt=DB::connect()->prepare('INSERT INTO vol (LieuDepart,LieuArrivé,DateDepart,DateArrive,NbPlace,Prix,choix) 
    VALUES(?,?,?,?,?,?,?)');
    // $stmt->bindParam(':idVol',$data['idVol']);
    $stmt->bindParam(1,$data['LieuDepart']);
    $stmt->bindParam(2,$data['LieuArrivé']);
    $stmt->bindParam(3,$data['DateDepart']);
    $stmt->bindParam(4,$data['DateArrive']);
    $stmt->bindParam(5,$data['NbPlace']);
    $stmt->bindParam(6,$data['Prix']);
    $stmt->bindParam(7,$data['choix']);
    
      if($stmt->execute()){
      return 'ok';
  }else{
      return 'error';
  }
 // $stmt->close();
  $stmt=null;
   }
   static public function update($data){
    $stmt=DB::connect()->prepare(
      'UPDATE  vol SET LieuDepart =:LieuDepart ,DateDepart =:DateDepart,DateArrive =:DateArrive,NbPlace =:NbPlace,Prix =:Prix,choix =:choix WHERE idVol=:idVol');
    $stmt->bindParam(':idVol',$data['idVol']);
    $stmt->bindParam(':LieuDepart',$data['LieuDepart']);
    // $stmt->bindParam(':LieuArrivé',$data['LieuArrivé']);
    $stmt->bindParam(':DateDepart',$data['DateDepart']);
    $stmt->bindParam(':DateArrive',$data['DateArrive']);
    $stmt->bindParam(':NbPlace',$data['NbPlace']);
    $stmt->bindParam(':Prix',$data['Prix']);
    $stmt->bindParam(':choix',$data['choix']);
  //die(print_r($data));
    //$stmt->execute();
      if($stmt->execute()){
      return 'ok';
  }else{
      return 'error';
  }
  //$stmt->close();
  $stmt=null;
}
static public function delete($data){
  $id=$data['idVol'];
  try{
    $query='DELETE From vol WHERE idVol=:idVol';
    $stmt=DB::connect()->prepare($query);
    $stmt->execute(array(':idVol'=>$id));  
    $stmt->execute();
    if($stmt->execute()){
    return 'ok';
    }
  }catch(PDOException $ex){
    echo 'erreur'.$ex->getMessage();
  }
    
}
////////////////Recherche////////////////////////////
static public function searchVol($data){
  $search=$data['search'];
 // die(print_r($data));
  try{
    $query='SELECT * FROM vol WHERE LieuDepart LIKE ?';
    $stmt=DB::connect()->prepare($query);
    $stmt->execute(array('%'.$search.'%'));  
     $vol=$stmt->fetchAll();
     return $vol;
  }catch(PDOException $ex){
    echo 'erreur'.$ex->getMessage();
  }
}
public static function updateOn($idVol)
{
  $query = " UPDATE  vol SET NbPlace= NbPlace-1";
  $stmt=DB::connect()->prepare($query);
 if( $stmt->execute()){
   return 'ok';
 }

}
/////////////////////////////////////////////////////
}
   


