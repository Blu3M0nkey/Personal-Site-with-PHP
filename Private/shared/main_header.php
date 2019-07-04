<?php
    if(!isset($title)){$title = 'Sam Medina';}
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <title> <?= $title;?></title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://fonts.googleapis.com/css?family=Adamina|Gabriela" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href= "<?= url_for('/style/design.css')?>">
    
    <?php if(isset($script)){echo $script;} ?>
    
</head>
<body> 
    