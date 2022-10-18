 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title> <?php echo PAGE_TITLE ?> </title>
     <link rel="stylesheet" href="public/css/backstyle.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
 </head>

 <body>
     <header>
         <div class="page">
             <h1>Clínica de Nutrição</h1>
             <nav class="navbar navbar-expand-lg bg-light menu">
                 <div class="collapse navbar-collapse menu" id="navbarNav">
                     <?php if (is_authenticated()) : ?>
                         <ul class="navbar-nav">                            
                             <li class="nav-item">
                                 <a class="nav-link" href="<?php echo url_generate(['route' => 'user_cadastrar']); ?>">CADASTRAR</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="<?php echo url_generate(['route' => 'user_list']); ?>">LISTA DE CADASTROS</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="<?php echo url_generate(['route' => 'user_list_imc']); ?>">LISTA DE IMC</a>
                             </li>
                         </ul>
                     <?php endif; ?>
                     <ul class="navbar-nav">
                         <li class="nav-item">
                             <?php if (is_authenticated()) : ?>
                                 <a class="nav-link" href="<?php echo url_generate(['route' => 'logout']); ?>">LOGOUT</a>
                             <?php else : ?>
                                 <a class="nav-link" href="<?php echo url_generate(['route' => 'login']); ?>">LOGIN</a>
                             <?php endif; ?>
                         </li>
                     </ul>
                 </div>
             </nav>                            
         </div>
     </header>
     <?php if (get_flash_message()) : ?>
         <div class="page">
             <div class="alert alert-danger mb-0" role="alert">
                 <p class="text-center m-0"> <?php echo get_flash_message(); ?> </p>
             </div>
         </div>
     <?php endif; ?>