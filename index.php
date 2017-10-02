<!DOCTYPE html>
<?php include('perch/runtime.php'); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no">
        <link rel='stylesheet' href='styles/main.css'>
        <link rel='stylesheet' href='styles/header.css'>
        <title>A test for Perch</title>
    </head>
    <body>
        <?php include('includes/header.php'); ?>
        <article>
            <h1>front page</h1>
            <h2>subheading</h2>
            <p><?php perch_content('FrontPage'); ?></p>
        </article>
        
        
        
        
        
    </body>
</html>
