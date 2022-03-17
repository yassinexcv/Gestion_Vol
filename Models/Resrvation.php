 <?php 


class Resrvation {
    

    public static function addResrvation($id,$idVol,$choix)
    {
        $query = "INSERT INTO `reservation`( `idClient`, `idVol`,`A-L`) VALUES ($id,$idVol,$choix)";
        $stmt=DB::connect()->prepare($query);
        
        if ($stmt->execute()){

           return 'ok';
        }
    }

    public function getRes($id){
        $query  = "SELECT * FROM `reservation` WHERE idClient =$id";
  $stmt=DB::connect()->prepare($query);
  $stmt->execute();
  $user= $stmt->fetch(PDO::FETCH_ASSOC);
  return $user;
    }

    public static function annuler($idres)
    {
        $query="DELETE FROM `reservation` WHERE idReservation=$idres";
        $stmt=DB::connect()->prepare($query);
        if($stmt->execute()){
            return 'ok';
        }
    }
}