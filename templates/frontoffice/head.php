<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo PAGE_TITLE; ?></title>
    <link rel="stylesheet" href="public/css/frontstyle.css">
</head>

<body>
<header>
        <div class="page"> 
            <nav class="menu flex flex-justify-space-between">                
                <ul class="flex" >
                    
                    <li><a href="<?php echo url_generate(['route' => 'home']); ?>">HOME</a></li> 
                    <li><a href="<?php echo url_generate(['route' => 'about']); ?>">ABOUT US</a></li> 

                </ul>
            
            </nav>
        </div>
</header>