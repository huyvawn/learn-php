<?php
function connect(){
    $config= file_get_contents("app_setting.json"); // return string
    $config = json_decode($config);
    $host=$config->host;
    $user= $config->user;
    $pass=$config->password;
    $db=$config->db;
    $conn= new mysqli($host,$user,$pass,$db);
    if($conn->error){
        die("Connect refused!");
    }
    return $conn;
}

function select($sql){
    $conn = connect();
    $result=$conn->query($sql);
    $data = [];
    while($row = $result->fetch_assoc()){
        $data[]= $row;
    }
    return $data;
}

function findById($sql){
    $data= select($sql); // return array with 0 or 1 element
    if(count($data)>0){
        return $data[0];
    }
    return null;
}

function insert($sql){
    $conn= connect();
    if($conn->query($sql) === TRUE) {
        $last_id= $conn->insert_id;
        return $last_id;
    }
    return null;
}