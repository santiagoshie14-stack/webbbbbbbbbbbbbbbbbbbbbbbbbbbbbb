<?php
 session_start();
    include"../../config/database.php";
    //Only Admin Can Access to this page
    if(!isset($_SESSION["role"]) || $_SESSION["role"] != "admin"){
        header("Location: ../../index.php");
        exit;
    }
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    
    //delete sql
    mysqli_query($conn, "DELETE FROM users 
    WHERE id=$id and role='student'");

    header('Location: index.php');
    exit;
?>