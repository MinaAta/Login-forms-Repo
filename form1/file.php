<?php
require_once("connectionfile.php");

try{
    $username      =  htmlspecialchars($_POST['username']);
    $userpassword =  htmlspecialchars($_POST['userpassword']);
    $useremail    =  htmlspecialchars($_POST['useremail']);

    if(isset($_POST['savedata'])){
        $insert_statment = "insert into user_info (user_name , user_password , user_email) values ('$username','$userpassword','$useremail')";
        $query = mysqli_query($conn , $insert_statment);
        if($query){
            echo "<br>"."insert_ query _statment is Done ... ";
        }
        else{
            throw new Error ("here some error");
        }
    }

}catch(Throwable $e){
  echo $e -> getMessage();
}
