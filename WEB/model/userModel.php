<?php


function getConnection(){
    $conn = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
    return $conn;
}

function login($username, $password){
    $conn = getConnection();
    $sql = "select * from users where username='{$username}' and password='{$password}'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if($count ==1){
        return true;
    }else{
        return false;
    }
} 

function addUser($username, $password, $email){
    $conn = getConnection();
    $sql = "insert into users VALUES('', '{$username}', '{$password}', '{$email}')";
    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }
}
function getAllUSer(){
    $conn = getConnection();
    $sql="select * from users";
    $result =mysqli_query($conn,$sql);
    $users=[];
    while($row = mysqli_fetch_assoc($result)){
            echo "<br>";
             print_r($row);
             array_push($users,$row);
             
         }
        
         return $users;



}

?>