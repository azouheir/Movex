<?php 
    require_once '../Model/Classes/Admin.php';
    require_once '../Model/Classes/User.php';
    require_once '../Model/Classes/UserDB.php'; 

    session_start();
    if(isset($_POST['login']) & isset($_POST['pass']))
    { 
        $login = $_POST['login'];
        $mdp = $_POST['pass'];
    
        $uDB = new UserDB();
        $user = $uDB->get($login,$mdp);
    
        if($user != null){
            if(is_a($user,User)){
                $_SESSION['type']="User";
                $_SESSION['id']= $user->getId();
                $_SESSION['nomcomplet']=$user->getNomcomplet();
                $_SESSION['login']=$user->getEmail();
                $_SESSION['solde']=$user->getSolde();
                header("Location: ../index.php");
            }else{
                $_SESSION['type']="Admin";
                $_SESSION['id']=$user->getId();
                $_SESSION['login']=$user->getLogin();
                $_SESSION['nomcomplet']="Admin";
                header("Location: ../admin.php");
            }
        }else header("Location: ../login.php?err=1");
    }else header("Location: ../login.php")
?>