<?php

include_once "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>Gudang</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <style>
    body{
    margin: 0;
    padding: 0;
    font-family: 'montserrat', sans-serif;
    }

    header{
        background-color: rgb(106, 109, 94);
        text-align: center;
        padding: 20px;
        color: white;
    }

    .content{
        padding: 20px;
    }

    table{
        width: 100%;
        background-color: rgba(0,0,0,.03);
        border-top: 1px solid rgba(0,0,0,.125);
        border-left: 1px solid rgba(0,0,0,.125);
    }

    th, td{
        border-right: 1px solid rgba(0,0,0,.125);
        border-bottom: 1px solid rgba(0,0,0,.125);
        padding: 10px;
    }

    .btn {
        padding: 10px;
        border: none;
        border-radius: 5px;
        color: white;
        padding: 10px;
        display: inline-block;
        margin-bottom: 10px;
        text-decoration: none;
    }

    .btn-cokelat {
        background-color: chocolate;
    }

    .btn-blue {
        background-color: blue;
    }

    .btn-red {
        background-color: red;
    }


    .field {
        margin: 10px;
    }

    .field .label {
        display: block;
    }

    .field input {
        padding: 10px;
        display: block;
    }

    .field select {
        padding: 10px;
        font-size: 16px;
    }


    </style>
</head>
<body>
    <header>Gudang Warehouse</header>
    <div class="content">