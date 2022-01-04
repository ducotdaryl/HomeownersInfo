<?php

require 'connection.php';

//adding task 
if(isset($_POST['submit_btn'])){
    $task = $_POST['information'];

    $sql = "INSERT INTO information ( Fullname) VALUES ('$task')";
    $sql_run = mysqli_query($connection, $sql);

    if($sql_run){
        header('location: index.php');
    } else {
        echo "Error";
        header('location: index.php');
    }
}

// updating task
if(isset($_POST['update_btn'])){
    $id = $_POST['updt_id'];
    $task = $_POST['information'];

    $sql = "UPDATE information SET information = '$task' WHERE id = '$id' LIMIT 1 ";
    $sql_run = mysqli_query($connection, $sql);

    if($sql_run){
        header('location: index.php');
    } else {
        echo "Error";
        header('location: index.php');
    }
}

// deleting task
if(isset($_POST['delete_btn'])){
    $id = $_POST['delete_id'];

    $sql = "DELETE FROM information WHERE id = '$id' ";
    $sql_run = mysqli_query($connection, $sql);

    if($sql_run){
        header('location: index.php');
    } else {
        echo "Error";
        header('location: index.php');
    }
}

?>