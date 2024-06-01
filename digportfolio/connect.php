<?php
    $FullName= $_POST['FullName'];
    $Email= $_POST['Email'];
    $MobileNumber= $_POST['MobileNumber'];
    $message= $_POST['message'];

    //database connection
    $conn= new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('connection failed:'.$conn->connect_error);
    }else{
        $stmt= $conn->prepare("insert into registration('FullName,Email,MobileNumber,message) values(?,?,?,?)");
        $stmt->bind_param("ssis",$FullName,$Email,$MobileNumber,$message);
        $stmt->execute();
        echo "registration successful";
        $stmt->close();
        $conn->close();
    }

?>