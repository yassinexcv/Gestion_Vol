<?php
class AdminController{
    public function auth(){
        if(isset($_POST['submit'])){
            $data['username'] = $_POST['username'];
            $res=Client::Login($data);
            $result = Admin::login($data);
            if($result->username ===$_POST['username'] && password_verify($_POST['password'],$result->pass_word)){ //&& password_verify($_POST['password'],$result->password)    && $result->password === $_POST['password']
              $_SESSION['login']=true;
              //$_SESSION['idVol']=$result->idVol;
              $_SESSION['username']=$result->username;

           Redirect::to('home');
            }else{
             Session::set('error','votre nom ou mot de passe inccorrect');
             Redirect::to('login');
            }
        }
    }

public function register(){
    if(isset($_POST['submit'])){
         $options=[
            'cost' => 12
         ];
    $password= password_hash($_POST['password'],PASSWORD_DEFAULT,$options);
        $data=array(
          'fullname' =>$_POST['fullname'],
          'username' =>$_POST['username'],
          'pass_word' =>$password,

        );
        // die(print_r($data));
        $result=Admin::createUser($data);
        if($result === 'ok'){
            Session::set('success','Compte crée');
            Redirect::to('login');
        }else{
            echo $result;
        }
    }
}

}