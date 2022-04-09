<?php
    session_start();
    unset($_SESSION['error']);
    require_once "connect.php";
    $db=mysqli_connect($DBhost,$DBuser,$DBpass,$DBname);
    $login=$_POST['login'];
    $pass=$_POST['pass'];

    $login=htmlentities($login,ENT_QUOTES,"UTF-8");
    $pass=htmlentities($pass,ENT_QUOTES,"UTF-8");
    mysqli_real_escape_string($db,$login);
    mysqli_real_escape_string($db,$pass);

    $sql=mysqli_query($db,"SELECT * from uzytkownicy WHERE email='$login' AND haslo='$pass'");
    $row=mysqli_fetch_array($sql);
    if($row>0)
    {
        $_SESSION['logged']=true;
        $_SESSION['id']=$row['id'];
        $_SESSION['nick']=$row['nick'];
        $_SESSION['email']=$row['email'];
        header("Location: logged.php");
        $db->close();
    }
    else
    {
        $_SESSION['error']='<div style="color:red">Wrong login or password</div>';
        header("Location: index.php");
        exit();
    }
?>
