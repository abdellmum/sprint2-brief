<!DOCTYPE html>
 <html lang="fr">

 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <script src="https://kit.fontawesome.com/30fc5c8b68.js" crossorigin="anonymous"></script>
   <link href="https://fonts.googleapis.com/css2?family=Oleo+Script:wght@400;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
   <link rel="stylesheet" href="../dist/css/style.css">
   <script src="../dist/js/all.js"></script>
   <title>youfood</title>
   <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script>window.jQuery || document.write('<script src="../dist/js/jquery-3.1.1.slim.min.js"><\/script>');</script>
    <script>
        $(document).ready(function(){
          $('#icon').click(function(){
            $('ul').toggleClass('show');
            
          });
        });

  
  
  </script>
 </head>

 <body>
   
   <div class="container">
     <section class="header">
       <div class="header__container">

         <nav id="navbar" class="nav">
        <label class="logo" >youfood</label>
        <ul>
           <li>  <a href="../dist/index.php" class="active">Accueil</a></li>
           <li> <a href="../dist/menu.php">Menu</a></li>
           <li> <a href="../dist/contact.php">Contact</a></li>
           <li>   <a href="../admin/login.php">connexion</a></li>
        </ul>
       <labdel id="icon"> <i class="fas fa-bars"></i></labdel>

    </nav>
  </div>
    </section>
     
  
       