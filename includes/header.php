<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
 <link rel="icon" href="images/Logo.png" type="image/x-icon" />

 <!-- style dynamic -->
 <link rel="stylesheet" href="css/<?php echo isset($page_style) ? $page_style : "style.css" ?>">
 <!-- fredoka font -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">

 <title><?php echo isset($page_title) ? $page_title : 'Inventory System' ?></title>
</head>

<body>