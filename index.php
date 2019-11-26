<?php 

$confirm_submit="";

if (isset($_POST['submit'])) {
    $destinataire="trainoir@gmail.com";
    $objet="Contact CV";
    $message = $_POST['user_message'];
    $expediteur = filter_var(htmlspecialchars(trim($_POST['user_mail'])), FILTER_VALIDATE_EMAIL);
    if(mail($destinataire, $objet, $message, $expediteur)){
        $confirm_submit="Votre message a bien été envoyé !";
    }
    else{
        $confirm_submit="Une erreur s'est produite, réessayez plus tard.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>    
    <link rel = "stylesheet" type = "text/css" href = "style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CV Morgan Trainoir</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

</head>
<body>

<!-- HEADER -->

    <section>
        
        <h1>Morgan Trainoir</h1>
        <p>CV Développeur Web en formation</p>
    
    </section>
    <nav>
        <ul>
            <li>
                <a href="#about-me" title="go to a propos">À PROPOS</a>
            </li>
            <li>
                <a href="#carousel" title="go to cv">CV</a>
            </li>
            <li>
                <a href="#contact" title="go to contact">CONTACT</a>
            </li>

        </ul>
    </nav>
        
    

<!-- ABOUT ME -->

    <section id="about-me">
        <h2>À propos</h2>
        <div>
            <img src="avatar.jpg" alt="avatar" style="width:200px;height:200px;">                    
            <p>Lorem ipsum dolor sit amet,<br> consectetur adipisicing elit. <br>Ipsum beatae vel corrupti placeat est optio quibusdam<br> commodi suscipit fuga id debitis voluptas<br> accusamus quae hic unde tempora distinctio, aliquam<br> voluptatem!</p>
        </div>
    </section>

<!-- CAROUSEL -->

    <!--Here's our main wrapper.
Since our carousel items get their size from their parent,
we have to specify its height.-->
<div id="carousel" class="carousel-wrapper" style="height: 400px;">
  <!--The carousel uses regular links to cycle through each item.
  The links actually target these display: none; spans so our page doesn't
  jump like it normally would when using jump links.-->
  <span id="target-item-1"></span>
  <span id="target-item-2"></span>
  <span id="target-item-3"></span>
  <!--Here are our carousel items.
  Each has a 'carousel-item' class, which we use for shared styling
  and an item-# class, which we use to control its opacity
  depending on which target-item-# is currently targeted-->
  <div class="carousel-item item-1" style="background-color: #f4f4f4;">
    <!--We can add any content in here, just make sure that
    your .carousel-wrapper is big enough to hold all the content.-->
    <div class="title-carousel">
        <h2>Formations</h2>
    </div>
    
    <div class="content-carousel">
        <p>DAEU B,<br>
        Aix-en-Provence<br>
        2016-2017<br><br>
        Equivalence au Bac Scientifique</p>
        <p>Développeur web,<br>
        Utoplab, La Ciotat<br>
        2019-2020<br><br>
        Formation intensive au métier de développeur web<br> et web mobile labélisée Grande Ecole du Numérique
        </p>
    </div>
    
    <!--Here are the links that control the carousel! Make sure
    the href of each one is pointing to the right target-item-#
    so that the carousel cycles in sequence.-->
    <a class="arrow arrow-prev" href="#target-item-3"></a>
    <a class="arrow arrow-next" href="#target-item-2"></a>
  </div>
  <!--And here are a couple more carousel items so that
  we have some content to scroll to. Notice the 'light' class?
  Royal blue is a pretty dark background color, so we'll add a CSS
  rule to make the text white if a carousel item has this class-->
  <div class="carousel-item item-2" style="background-color: #f4f4f4;">
        <div class="title-carousel">
            <h2>Expériences</h2>
        </div> 
    <p>Content goes here.</p>
    <a class="arrow arrow-prev" href="#target-item-1"></a>
    <a class="arrow arrow-next" href="#target-item-3"></a>
  </div>
  <div class="carousel-item item-3" style="background-color: #f4f4f4;">
        <div class="title-carousel">
            <h2>Intérêts</h2>
        </div>
    <p>Content goes here.</p>
    <a class="arrow arrow-prev" href="#target-item-2"></a>
    <a class="arrow arrow-next" href="#target-item-1"></a>
  </div>
  
</div>

<!-- CONTACT -->

<section id="contact">
    <h2>Contactez-moi</h2>
    <div>
        <div>
            <p>
                Besoin de renseignements ? <br><br>
                Pour tous renseignements sur mon profil ou pour me rencontrer.<br>
                N'hésitez pas a me contacter    
            </p>
            <form action="index.php" method="post">
                <input type="text" id="name" name="user_name" placeholder="Nom">    
                <input type="email" id="mail" name="user_mail" placeholder="email">
                <textarea id="msg" name="user_message" placeholder="Message"></textarea>    
                <span><?php echo $confirm_submit; ?></span>
                <input type="submit" name="submit" value="Envoyer">    
            </form>
        </div>    
        <p>
            Mes coordonées <br> <br>
            <strong>Tel:</strong> <a href="tel:+33760124309">07 60 12 43 09</a> <br><br>
            <strong>Mail:</strong> <a href="trainoir@gmail.com"> trainoir@gmail.com</a> <br><br>
            <strong>Site cv:</strong> <a href="#">morgantrainoir.fr</a>
        </p>

        <p>
            Zone de travail <br> <br>
            Disponible dans la région Marseillaise pour prise de rendez-vous. 
            Je suis aussi disponible pour du travail à distance.
        </p>
    </div>

</section>
</body>
</html>