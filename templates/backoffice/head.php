
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title> <?php echo PAGE_TITLE ?> </title> 
     <link rel="stylesheet" href="public/css/backstyle.css"> 
 </head>

 <body>

     <header>
        
         <div class="page">
         <h1>Clínica de Nutrição</h1>
             <nav class="menu flex flex-justify-space-between">
                
              
                 <ul class="height">
        

                     <?php if (is_authenticated()) : ?>

                         <ul class="d-flex">

                             <li><a href="<?php echo url_generate(['route' => 'user_cadastrar']); ?>">CADASTRAR</a></li>
                             <li><a href="<?php echo url_generate(['route' => 'user_list']); ?>">LISTA DE CADASTROS</a></li>
                             <li><a href="<?php echo url_generate(['route' => 'user_list_imc']); ?>">LISTA DE IMC</a></li>

                         </ul>

                     <?php endif; ?>
                 </ul>
                 <ul class="d-flex">
                     
                     <li>
                         
                         <?php if (is_authenticated()) : ?>
                             

                             <a class="user-login-button" href="<?php echo url_generate(['route' => 'logout']); ?>">LOGOUT</a>
                         <?php else : ?>
                             

                             <a class="user-login-button" href="<?php echo url_generate(['route' => 'login']); ?>">LOGIN</a>
                         <?php endif; ?>
                     </li>
                 </ul>
             </nav>
         </div>
     </header>

     
     <?php if (get_flash_message()) : ?>
         
         <div class="page">
             <div class="flash-messages">
                 <p> <?php echo get_flash_message(); ?> </p> 
             </div>
         </div>
     <?php endif; ?>