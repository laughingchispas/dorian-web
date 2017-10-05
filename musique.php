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

        <div class="side-container">
            <div class="left-side">
                <div class="contact-image">
                    <img class="contact-image" src="assets/pages/musique.jpg">
                    <div class="agenda-image-title image-title">Musique</div>
                </div>
            </div>
            <div class="right-side-general">Petite sélection auditive et visuel.</div>
        </div>

        <div class="music-audio-title">VIDEO</div>
        <div class="music-video-box">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/wAVaBSlthrU?enablejsapi=1&showinfo" frameborder="0"></iframe>
            <div class="link-box">
                <a href="https://www.youtube.com/watch?v=DXWoRPvPuzI" target="_blank">Philémon</a>
                <a href="https://www.youtube.com/watch?v=2wuam6mD3sU" target="_blank">Blue Monday @ Bravo</a>
                <a href="https://www.youtube.com/watch?v=tUaYV9do9DQ" target="_blank">Blue monday you got me</a>
                <a href="https://www.youtube.com/watch?v=IVqxv4chdCk" target="_blank">Blue monday fireworks</a>
                <a href="https://www.youtube.com/watch?v=g28q5l-BZEY" target="_blank">Blue monday Sweat</a>
                <a href="https://www.youtube.com/watch?v=hhW5S5l1xs8&t=26s" target="_blank">JMO album they do it</a>
                <a href="https://www.youtube.com/watch?v=2YDr0VDe6O4" target="_blank">Brazùk Bain moussant clip </a>
            </div>
        </div>
        <div class="music-audio-title">AUDIO</div>
        <div class="music-audio-box">
            <iframe width="100%" height="100" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/279536274&amp;color=f2cc45&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
            <div class="link-box">
                <a href="https://soundcloud.com/dorian-dumont/eb-philemon-le-chien-qui-ne-voulait-pas-grandir-1er-album" target="_blank">Philemon Mib</a>
                <a href="https://soundcloud.com/dorian-dumont/i-got-it-bad-the-duke-session-with-ben-sauzereau-mathieu-robert-dorian-dumont-jazzstation" target="_blank">Matthieu</a>
                <a href="https://soundcloud.com/dorian-dumont/where-i-belong-blue-monday-people-album-empire-of-matches" target="_blank">Where I Belong</a>
                <a href="https://soundcloud.com/dorian-dumont/the-scent-of-honeysuckle-vines-blue-monday-people-album-empire-of-matches-composer-f-vaiana" target="_blank">Honey Suckle Vines</a>
                <a href="https://soundcloud.com/dorian-dumont/we-used-to-hunt-jens-maurits-orchestra-the-dubtapes-live-de-werf" target="_blank">We used to hunt</a>
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

</div>

<script src="js/transitions.js"></script>

</body>
</html>
