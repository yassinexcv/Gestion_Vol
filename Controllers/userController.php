<?php
class userController
{
    public function auth()
    {
        if (isset($_POST['submit'])) {
            $data['username'] = $_POST['username'];
            $result = User::login($data);
            if ($result->username === $_POST['username']) { //&& password_verify($_POST['password'],$result->password)
                $_SESSION['login'] = true;
                $_SESSION['username'] = $result->username;
                Redirect::to('home');
            } else {
                Session::set('error', 'votre nom ou mot de passe inccorrect');
                Redirect::to('login');
            }
        }
    }

    public function Creatacc()
    {
        $data=array(


           'Datedenaissnce' => $_POST['Datedenaissnce'] ,
           'Lastname' => $_POST['Lastname'] ,
           'Firstname' => $_POST['Firstname'], 
           'email' => $_POST['email'] ,
           'Numpass' => $_POST['Numpass'] ,
           'motdepass' => $_POST['motdepass'] 


        );
        // die(print_r($data));
        $repence=User::createAcc($data);
        if($repence==='ok'){
            Session::set('success', 'votre compte a etait bien crée');
            header(('location:login'));
        }

    }
    public function verfylog(){
        $email=$_POST['email'];
        $password=$_POST['motdepass'];
        $repence=User::getacc($email);
        if(!$repence){
            Session::set('error', 'votre email introuvable');
            header(('location:login'));
        }elseif( $repence['motdepass']===$password){
        //    Redirect::to('home');
        header(('location:HomeClient'));

        // echo 'hi';
        }
        else{
            Session::set('error', 'votre mot de pass incoreccte');
            header(('location:login'));
        }
        // die(var_dump($repence));
        }
}
