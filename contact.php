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

        <!---------------- contact content ---------------------------->
        <div class="side-container">
            <div class="left-side">
                <div class="contact-image"><img class="contact-image" src="assets/pages/contact.jpg">
                    <div class="contact-title image-title">Contact</div>
                </div>
            </div>
            <div class="right-side-general">
                Fonctionne également pour les lettres d’amour
            </div>
        </div>

        <div class="contact-info-container">
            <div class="contact-info">Contact Dorian Dumont : info@doriandumont.com</div>
            <div class="icon-container" id="contact-icon-container">
                <a class="contact-icon" href="https://www.facebook.com/dorian.dumont.96" target="_blank">
                    <i class="fa fa-facebook contact-icon"></i>
                </a>
                <a class="contact-icon" href="https://soundcloud.com/dorian-dumont" target="_blank">
                    <i class="fa fa-soundcloud contact-icon"></i>
                </a>
                <a class="contact-icon" href="https://www.youtube.com/channel/UCQEGIwUjPFRUMo1_3W5ABmQ" target="_blank">
                    <i class="fa fa-youtube-play contact-icon"></i>
                </a>
                <a class="contact-icon" href="http://www.twitter.com/dodumont" target="_blank">
                    <i class="fa fa-twitter contact-icon"></i>
                </a>
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
</div>

<script src="js/transitions.js"></script>

</body>
</html>