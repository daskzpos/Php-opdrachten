<?php

require("database.php");

$sql1 = "create database MyDB";

if($conn->query($sql1) === true){
    echo "Database created successfully";
} else {
    echo "Error creating database: " .$conn->error;
}

$sql = "create table MyGuests (
    id INT(6) unsigned auto_increment primary key,
    firstname varchar(30) not null,
    lastname varchar(30) not null,
    email varchar(50),
    reg_date tomestamp default current_timestamp on update current_timestamp
    )";

if($conn->query($sql) === true) {
    echo "Table created successfully";
}else{
    echo "Error creating database: " . $conn->error;
}
