<!DOCTYPE html>
<html lang="en">
<?php
include 'partials/site-head.php';
?>
<body id="top">

<?php
include 'partials/header.php';
?>

<!--<div class="language">
    <div class="language-element-container">
        <div class="language-elements">
            <a class="language-element">Français</a>
            <div class="language-element">/</div>
            <a class="language-element">English</a>
        </div>
    </div>
</div>-->

<!-- smnall navigation!!! -->

<div id="mySidenav" class="sidenav">
    <a href="javascript: void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.php">home</a>
    <a href="dorian.php">dorian</a>
    <a href="agenda.php">agenda</a>
    <a href="albums.php">album</a>
    <a href="projets.php">projets</a>
    <a href="bonus.php">media</a>
    <a href="contact.php">contact</a>
</div>

<span id="open-box" onclick="openNav()">&#8801</span>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>

<!--end of nav ----->



<div class="panel-container">
    <?php
    include 'partials/left-panel.php';
    ?>

    <div class="right-panel">
        <?php
        include 'partials/main-nav.php';
        ?>

        <!---------------- presse content ---------------------------->
        <div class="side-container">
            <div class="left-side">
                    <div class="contact-image"><img class="projets-image contact-image" src="assets/pages/presse.jpg">
                        <div class="presse-image-title image-title">presse</div>
                    </div>

            </div>
            <div class="right-side-general"></div>
        </div>

        <?php
        //if "email" variable is filled out, send email
          if (isset($_REQUEST['email']))  {

          //Email information
          $admin_email = "info@doriandumont.com";
          $email = $_REQUEST['email'];
          $subject = "new email";


          //send email
          mail($admin_email, "$subject", "From:" . $email);


          //if "email" variable is not filled out, display the form
        }
          else  {
        ?>

        <div class="presse-content">
            <div>Cette section est en construction...</div><br>

            <form method="post">
                Si t’es pas content voici un espace pour t’exprimer : <input name="email" type="text" />
                <input type="submit" value="Submit" placeholder="en 13 caractères maximum" />
            </form>

            <?php
  }
?>
            <br>
            <div>
                <div>Par contre j’espère que tu es conscient que c’est envoyer l’équivalent d’un « poke » au cyber-espace</div><br>
                <div>
                    <div>C’est à dire que personne ne te lira.</div>
                    <div>C’est entre toi et ton clavier...</div>
                    <div>Donc régale toi bien et fais toi plaisir, c’est le moment de se lâcher (en 13 caractères).</div>
                </div>



            </div>
        </div>


    </div>
</div>


<div class="scroller ">
    <a href="#top" class="scrollTop navbar"> Clique ici si t’as la flemme de « scroller » jusqu’en haut pour voir le menu.</a>
</div>

<div class=footer-content>
    <div class="message-subliminal">
        =SUBTIL MESSAGE SUBLIMINAL= À chaque fois que vous écoutez ma musique, quelqu’un, quelque part, sauve un bébé panda. C’est forcément le cas sinon l’entropie accumulé de l’univers risquerait de nous engloutir tous. L’équilibre cosmique est à ce prix.
    </div>
    <div class="nicole">
        website designed by nicole
    </div>

</div>

<script src="js/transitions.js"></script>

</body>
</html>