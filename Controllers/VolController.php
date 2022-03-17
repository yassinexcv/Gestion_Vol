<?php 
class VolController{ 
    public function getAllVol(){
        $vol= Vol::getAll();
        return $vol;
    }
    public function getOneVol($idVol){
        // die(var_dump($idVol));
          
            $vol=vol::getVol($idVol); 
            // die(print_r($vol))  ;
            return $vol; 
        
  
    }
    ////////////////////recherche///////////////////////////////
 public function findVol(){
     if(isset($_POST['search'])){
         $data=array('search' => $_POST['search']);
     }
     $vol=vol::searchVol($data);
     return $vol;
 }
 ////////////////////////////////////////////////////////////////////
public function AddVol(){
    if(isset($_POST['submit'])){
        $data=array(
        //   'idVol' =>$_POST['idVol'],
          'LieuDepart' =>$_POST['LieuDepart'],
          'LieuArrivé' => $_POST['LieuArrivé'],
          'DateDepart' =>$_POST['DateDepart'],
          'DateArrive' =>$_POST['DateArrive'],
          'NbPlace' =>$_POST['NbPlace'],
          'Prix' =>$_POST['Prix'],
          'choix' =>$_POST['choix'],
        );
        // die(print_r($data));
        $result=Vol::add($data);
        if($result === 'ok'){
            Session::set('success','Ajouter Vol');
            Redirect::to('home');
        }else{
            echo $result;
        }
    }
}
public function UpdateVol(){
    if(isset($_POST['submit'])){
        $data=array(
          'idVol' =>$_POST['idVol'],
          'LieuDepart' =>$_POST['LieuDepart'],
          'LieuArrivé' => $_POST['LieuArrivé'],
          'DateDepart' =>$_POST['DateDepart'],
          'DateArrive' =>$_POST['DateArrive'],
          'NbPlace' =>$_POST['NbPlace'],
          'Prix' =>$_POST['Prix'],
          'choix' =>$_POST['choix'],
        );
        // die(print_r($data));
        $result=Vol::update($data);
        if($result === 'ok'){
            Session::set('success','Modifier Vol');
            Redirect::to('home');
        }else{
            echo $result;
        }
    }
}
public function deletVol(){
        if(isset($_POST['idVol'])){
            $data['idVol'] = $_POST['idVol'];
            $result = Vol::delete($data);
            if($result === 'ok'){
                Session::set('success','supprimer Vol');
            //header('location:'.BASE_URL);
            Redirect::to('home');
            }else{
            echo $result;
            }
        }
}
public function addRes($id,$idVol,$choix)
{
    // die(var_dump($id));
   $a= Resrvation ::  addResrvation($id,$idVol,$choix);
   $b= Vol::updateOn($idVol);
    if ( $a==='ok' && $b==='ok'){
        Session::set('success', 'votre reservation a etait bien enregistré');
        Redirect::to('profil');
    }

}
public function annuler($idres){
    $a =Resrvation:: annuler($idres);
    // die(var_dump($a));
if ($a === 'ok')
{
    Session::set('success', 'votre reservation a etait bien annuler');
    Redirect::to('HomeClient');
}
}
}
?>