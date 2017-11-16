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

<!-- small navigation!!! -->

<div id="mySidenav" class="sidenav">
    <a href="javascript: void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.php">home</a>
    <a href="dorian.php">dorian</a>
    <a href="agenda.php">agenda</a>
    <a href="albums.php">albums</a>
    <a href="projets.php">projets</a>
    <a href="musique.php">musique</a>
    <a href="bonus.php">bonus</a>
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

<div class="panel-container">
    <?php
    include 'partials/left-panel.php';
    ?>

    <div class="right-panel">
        <?php
        include 'partials/main-nav.php';
        ?>

        <!---------------- home content ---------------------------->

        <div class="home-image">
            <img src="assets/pages/home.jpg">
        </div>

        <div class="bottom-home-main-container">
            <div class="bottom-home-title">nouvelles fraîches</div>

            <div class="nouvelle-fraiche">
                <div>le 20 novembre 2017,</div>
                <br>
                <div> Ça y est, nous y sommes!</div>
                <div> Ce site est aujourd’hui officiellement ouvert.</div>
                <div>C’est beau.</div>
                <div>Après pas mal de temps et d’effort. J’en profite pour adresser un immense merci à Nicole Miller qui
                    l’a créé avec beaucoup de patience et de travail. Personnellement j’ai conceptualisé l’affaire et
                    j’ai donné des ordres -de ma voix la plus charmante possible- mais c’est tout.
                </div>
                <div>Donc encore merci à elle.</div>
                <div>Si seulement elle était bouddhiste, sa prochaine ré-incarnation serait un aigle royal.</div>
                <div>Au minimum.</div>
                <div>De mon côté je m’engage maintenant à faire vivre ce site et à l’alimenter le plus possible en
                    contenu intéressant et en nouvelles fraîches et ce, avec -je l’espère- l’exactitude d’un horloger
                    suisse.
                </div>
                <br>
                <div>Merci de votre visite et n’hésitez pas à me faire un retour si vous le souhaitez ou à me demander
                    l’une ou l’autre chose (du type « comment vous donner de l’argent? » ou « comment vous remercier
                    pour toutes ces belles choses? ») en vous rendant dans la page « CONTACT » là-haut dans le menu.
                </div>
            </div>
        </div>
    </div>
</div>


</div>


<div class="scroller ">
    <a href="#top" class="scrollTop navbar"> Clique ici si t’as la flemme de « scroller » jusqu’en haut pour voir le
        menu.</a>
</div>

<div class=footer-content>
    <div class="message-subliminal">
        =SUBTIL MESSAGE SUBLIMINAL= À chaque fois que vous écoutez ma musique, quelqu’un, quelque part, sauve un bébé
        panda. C’est forcément le cas sinon l’entropie accumulé de l’univers risquerait de nous engloutir tous.
        L’équilibre cosmique est à ce prix.
    </div>

</div>

<script src="js/transitions.js"></script>

</body>
</html>
