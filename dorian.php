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

<!--end of nav ----->



<div class="panel-container">
    <?php
    include 'partials/left-panel.php';
    ?>

    <div class="right-panel">
        <?php
        include 'partials/main-nav.php';
        ?>

        <!---------------- dorian content ---------------------------->
        <div class="side-container">
            <div class="left-side">
                <div class="contact-image">
                    <img class="projets-image contact-image" src="assets/pages/dorian.jpg">
                </div>
            </div>
            <div class="right-side-general">Si tu veux connaître la petite histoire</div>

        </div>
        <div class="containerbio" id="bio-title-phrase">Sachez qu’après avoir lu tout ça vous ne saurez malheureusement pas tout sur Dorian Dumont (qui est un être complexe) mais vous en saurez tout de même plus que la plupart des gens. Ce qui est quand même pas mal, vous en conviendrez.</div>

        <div id="bio-title">bio</div>

        <div class="containerbio">
            <div class="bio">Né le 08 juin 1988 à Montpellier, Dorian Dumont se passionne très tôt pour la musique, cet art de combiner les sons, en suivant certaines règles. Ou non...</div>
            </br>
            <div class="bio">Comme il faut quand même bien les apprendre quelque part ces règles, Dorian commence le piano classique à 7 ans au Conservatoire National de Région de Montpellier (France). Avec une sacré pédagogue : Mireille Michaud, une personne qui aime la musique et qui a compris qu’on obtient rien sans rien et surtout qui sait le faire comprendre aux autres.</div>
            <div class="bio">Pour suivre avec Susan Campbell qui se chargera de peaufiner finement tout ça. Ainsi que son prix de Solfège décrochant ainsi son Diplôme d’Études Musicales: D.E.M.</div>
            </br>
            <div class="bio">À Montpellier, il obtient en 2005 la Médaille d’Or en Piano: Mention très bien à l’unanimité avec les félicitations du jury et aussi en Musique de Chambre avec la même mention.Dorian sera même le soliste interprète du Concerto pour Piano en Ré Majeur de Haydn avec l’Orchestre Symphonique de la Faculté de Montpellier en 2005.</div>
            </br>
            <div class="bio">Ce n’est qu’en 2006, à l’âge de 18 ans que, tout en continuant son perfectionnement au classique, Dorian commence à s’intéresser au Jazz et à la musique improvisé.</div>
            <div class="bio">Il intègre l’atelier jazz de Montpellier qui a lieu une fois par mois et où Pierre de Bethmann, François Théberge, Stéphane Foucher et Peter Giron sont les intervenants.</div>
            </br>
            </br>
            <div class="bio">Après s’être férocement (tel un lion) nourris de musique classique, il s’oriente définitivement vers le jazz en quittant Montpellier, ses cigales et sa garrigue pour la capitale du plat pays: Bruxelles, son ciel bas et sa bonhomie contagieuse.</div>
            <div class="bio">Là il entre au Conservatoire Royal de Musique en 2007 avec Éric Legnini comme professeur.</div>
            </br>
            <div class="bio">Il y restera 2 ans avant de passer au Conservatoire Flamand, au Koninklijk Conservatorium of Brussels où il étudie avec Diederik Wissels, Kris Defoort, David Linx, Natalie Loriers, John Ruocco... Pour en sortir diplôme en poche en 2012.</div>
            </br>
            </br>
            <div class="bio">Bruxelles, ville accueillante, cité cosmopolite et carrefour européen (s’il en est) sera la plateforme de la plupart des formations futures de Dorian.</div>
            <div class="bio">Ainsi que son lieu de vie.</div>
            <div class="bio">Ce qui rend la chose très pratique.</div>
            </br>
            <div class="bio">Cultivant sa curiosité musicale, il participe à de nombreux projets aux styles divers:</div>
            </br>
            </br>
            <div class="bio">Jazz avec « Easy Pieces » un trio à la formation inhabituel avec 2 piano et 1 guitare avec Hendrik Lasure et Ben Sauzereau. Ils prévoient de sortir leur 1er Album en avril 2017.</div>
            </br>
            <div class="bio">Jazz aussi mais avec une approche plus débridé et pas mal d’improvisation libre sur des concepts de jeu différents et originaux avec « Jens Maurits Orchestra » et ses différents projets:</div>
            <div class="bio">-« Jens Maurits Orchestra : The Dubtapes » avec Jens Bouttery aux compositions et qui a pensé le concept avec Daan Milius qui s’occupe aussi de la vidéo sur le projet.</div>
            <div class="bio">Ensemble, ils réalisent une tournée « JazzLab Series » en 2013. L’album ainsi que le DVD « the Dubtapes » est paru en septembre 2013. Enregistré lors d’un live à De Werf, à Bruges.</div>
            <div class="bio">Dorian est également accompagné sur scène de: Niels Van Heertum, Gregor Siedl, Ben Sauzereau et Joris Lindemans.</div>
            </br>
            <div class="bio">-« Jens Maurits Orchestra : Triggers & Thresholds » ce projet pose la question « d’où vient la musique? » et de ce qui l’a « déclenché » avec Jens Bouttery à la baguette et aux compositions toujours, accompagné une nouvelle fois de Daan Milius le vidéaste dans une formule élargie avec Rik Sturtewagen, Lennart Heyndels, et Lucas Kramer qui se rajoutent à l’équipe.</div>
            <div class="bio">Ils ont sortis un CD-Book: « They do it for a reason » paru en septembre 2016. Ils se sont produits au « Rataplan » notamment ainsi que dans de nombreux festivals comme « Follow the Sound » ou encore « Balzaal Vooruit ».</div>
            </br>
            <div class="bio">-« Jens Maurits Orchestra : The Blogpera » qui est une extension du précédent projet mais dans une formule plus compact et ludique. Il forme un trio sur scène avec Jens Bouttery à la batterie et Lucas Kramer qui les accompagnent sur sa machine « la Bestia ». Avec « The Blogpera », Dorian a joué aussi bien en Hollande qu’en Allemagne et ils ont notamment été sélectionnés comme lauréat de la masterclass au festival la Ruhrtriennale.</div>
            </br>
            <div class="bio">Jazz encore avec « Lift » dont l’album « 1rst Floor » est sortie en janvier 2014 avec Thomas Mayade, Emily Allison, Jérôme Klein, Lennart Heyndels et David Linx et Christophe Panzani. Groupe avec lequel il se produit à « Jazz à Vienne » et aussi où il remporte le concours « Jazz à Ixelles » en 2012 et avec lequel il sera également lauréat du concours à « Crest Jazz Vocal » en 2013.</div>
            </br>
            <div class="bio">Parmi ses premiers groupes on retrouve également:</div>
            <div>« Paradigm Junction » avec Pat Cleaver et Jérôme Klein.</div>
            </br>
            <div class="bio">Ou « Blindsight » avec Maayan Smith, Lionel Beuvens et Hendrik Vanattenhoven.</div>
            </br>
            </br>
            <div class="bio">Ou encore avec « Philémon, le chien qui ne voulait pas grandir » dans un style plus proche de la musique de chambre avec Ben Sauzereau, Mathieu Robert, Benoît Leseure, Nicolle Miller et Annemie Osborne. Le 1er album est parue en avril 2016 sur le label suite.</div>
            </br>
            <div class="bio">Ainsi qu’avec « Charlotte Haesen Quintet » avec Charlotte Haesen, Fil Caporali, Phillip Breidenbach et Samuel Reisen. Dans une esthétique plus « pop » et « world music ». Ensemble ils prévoient d’enregistrer leur 1er album au printemps 2017.</div>
            </br>
            <div class="bio">Mais aussi Chanson-Française avec « Brazùk » avec lequel il sera Lauréat de la Biennale de la Chanson Française à Bruxelles en 2008 ainsi que «Coup de Coeur» des Trois Baudets 2009 à Paris. Et dans le même style, Dorian se produit de temps en temps avec l’inimitable « Karim Gharbi ».Et il fais partis du goupe « Effdé » du chanteur Fabrice Ducognon, avec Romain Castéra. Formation avec laquelle Dorian a enregistré un EP « Fendillés » paru en novembre 2016.</div>
            </br>
            <div class="bio">Également un projet plutôt Progressive Soul/Pop/Rock/Groove (c’est dur de mettre des étiquettes sur la musique qui est faîtes parfois) avec « Blue Monday People » le projet de François Vaiana avec Wendlavim Zabsonre et Ben Sauzereau. Après un EP « Love », ils ont sortis un album « Empire of Matches » en janvier 2016 au CC Jacques Franq.</div>
            </br>
            </br>
            <div class="bio">Dorian n’a donc pas peur de l’éclectisme. Bien au contraire. Ni des grands écarts.</div>
            </br>
            </br>
            <div class="bio">Il part et repart (tel un mars), vers de nouvelles perspectives d’expérimentation musicale armé d’un appétit (glouton) de découverte jamais rassasié. Et, tout en préparant l’élaboration de son propre projet (à venir...), il se produit à divers moments et en diverses occasions avec ces diverses personnes sus-nommées ou d’autres divers personnages encore, qu’ils soient dix ou moins ou vert ou autre, en hiver ou non, tous très divers en tout cas, envers et contre tout, et d’horizons lointains ou même parfois proche, vers là, on verra dit-il, pour jouer dans divers styles toutes ces musiques très diverses.</div>
            </br>
            <div class="bio">Allant vers et allant droit.</div>
            </br>
            <div class="bio">Et le tout en divers endroits.</div>
            </br>
            <div class="bio">« dit: vert. M’ont-ils dit. » dit-il. Alors il le fit.</div>
            </br>
            <div class="bio">En vers et sans verre (sans rire).</div>
            </br>
            </br>
            </br>
            <div class="bio">Et finissons par une citation qui claque, comme dans les plus beaux devoirs de philo ou les films avec Bruce Willis dedans:</div>
            <div class="bio">« Pour moi, l’art, la musique surtout, consiste à nous élever le plus loin possible au-dessus de ce qui est. »</div>
            <div class="bio">Gabriel Fauré</div>
            </br>
            <div class="bio">Toi même tu sais. </div>
            </br>
            </br>
            <div class="bio">Plussoie si tu l’oses</div>
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
