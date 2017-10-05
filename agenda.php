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
                    <img class="contact-image" src="assets/pages/agenda.jpg">
                    <div class="agenda-image-title image-title">Agenda</div>
                </div>
            </div>
            <div class="right-side-general">Clique sur <u>+ d’infos</u> pour plus d’infos… (logique implacable)</div>
        </div>

        <div class="agenda-sub-pic-text">Tous les concerts à venir ainsi qu’une liste non-exhaustive des concerts passés pour les nostalgiques ou les aficionados de statistiques (il y en a)</div>
        <div class="concert-container">
             <div class="concert-container-title">Concerts du futur</div>
            <div class="table-heading table">
                <div class="date" id="date">date</div>
                <div class="place" id="place">lieu</div>
                <div class="more"></div>
                <div class="projet-agenda" id="projet-agenda">projet</div>
            </div>
            <div  class="table-contents table">


                <div class="table-row">
                    <div class="date">24.09.17</div>
                    <div class="place">Bonnefooi</div>
                    <div class="more">+ d'infos</div>
                    <div href="https://philemonchien.wordpress.com/" class="project" target="_blank">ECHT !</div>
                </div>
                <div class="more-agenda">
                    <div class="table-row">
                        <div class="date"></div>
                        <div>ça commence à 20h45 et voici l’adresse : <span class="address"><i>8, rue des pierres, Bruxelles</i></span></div>
                    </div>
                    <div class="table-row">
                        <div class="date"></div>
                        <div>
                            site du lieu <a href="http://www.jazzstation.be/?lang=fr" target="_blank"> ici</a>
                        </div>
                    </div>
                </div>


                <div class="table-row">
                    <div class="date">15.10.17</div>
                    <div class="place">Atelier rue Verte</div>
                    <div class="more">+ d'infos</div>
                    <div href="https://philemonchien.wordpress.com/" class="project" target="_blank">BLUE MONDAY PEOPLE</div>
                </div>
                <div class="more-agenda">
                    <div class="table-row">
                        <div class="date"></div>
                        <div>ça commence à 20h45 et voici l’adresse : <span class="address"><i>8, rue des pierres, Bruxelles</i></span></div>
                    </div>
                    <div class="table-row">
                        <div class="date"></div>
                        <div>
                            site du lieu <a href="http://www.jazzstation.be/?lang=fr" target="_blank"> ici</a>
                        </div>
                    </div>
                </div>


                <div class="table-row">
                    <div class="date">18.10.17</div>
                    <div class="place">Sounds</div>
                    <div class="more">+ d'infos</div>
                    <div href="https://philemonchien.wordpress.com/" class="project" target="_blank">EASY PIECES</div>
                </div>
                <div class="more-agenda">
                    <div class="table-row">
                        <div class="date"></div>
                        <div>ça commence à 20h45 et voici l’adresse : <span class="address"><i>8, rue des pierres, Bruxelles</i></span></div>
                    </div>
                    <div class="table-row">
                        <div class="date"></div>
                        <div>
                            site du lieu <a href="http://www.jazzstation.be/?lang=fr" target="_blank"> ici</a>
                        </div>
                    </div>
                </div>


                <div class="table-row">
                    <div class="date">06.02.18</div>
                    <div class="place">Zinnema</div>
                    <div class="more">+ d'infos</div>
                    <div class="project" target="_blank">BLUE MONDAY PEOPLE</div>
                </div>
                <div class="more-agenda">
                    <div class="table-row">
                        <div class="date"></div>
                        <div>ça commence à 20h45 et voici l’adresse : <span class="address"><i>8, rue des pierres, Bruxelles</i></span></div>
                    </div>
                    <div class="table-row">
                        <div class="date"></div>
                        <div>
                            site du lieu <a href="http://www.jazzstation.be/?lang=fr" target="_blank"> ici</a>
                        </div>
                    </div>
                </div>


                <div class="table-row">
                    <div class="date">07.02.18</div>
                    <div class="place">Zinnema</div>
                    <div class="more">+ d'infos</div>
                    <div class="project" target="_blank">BLUE MONDAY PEOPLE</div>
                </div>
                <div class="more-agenda">
                    <div class="table-row">
                        <div class="date"></div>
                        <div>ça commence à 20h45 et voici l’adresse : <span class="address"><i>8, rue des pierres, Bruxelles</i></span></div>
                    </div>
                    <div class="table-row">
                        <div class="date"></div>
                        <div>
                            site du lieu <a href="http://www.jazzstation.be/?lang=fr" target="_blank"> ici</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>


        <!--<div class="concert-container">
            <div class="concert-container-title">Concerts du passé</div>
            <div class="table-heading table" *ngFor="let title of content.tableTitle_Fr">
                <div class="date"> date </div>
                <div class="place">lieu</div>
                <a href="#" class="projet">projet</a>
            </div>
            <div  class="table-contents table">
                <div class="table-row">
                    <div class="date">24.09.17</div>
                    <div href="http://www.jazzstation.be/?lang=fr" class="place" target="_blank">Bonnefooi</div>
                    <div href="https://philemonchien.wordpress.com/" class="project" target="_blank">ECHT !</div>
                </div>
                <div class="table-row">
                    <div class="date">15.10.17</div>
                    <div href="http://www.jazzstation.be/?lang=fr" class="place" target="_blank">Atelier rue Verte</div>
                    <div href="https://philemonchien.wordpress.com/" class="project" target="_blank">BLUE MONDAY PEOPLE</div>
                </div>
                <div class="table-row">
                    <div class="date">18.10.17</div>
                    <div href="http://www.jazzstation.be/?lang=fr" class="place" target="_blank">Sounds</div>
                    <div href="https://philemonchien.wordpress.com/" class="project" target="_blank">BLUE MONDAY PEOPLE</div>
                </div>
                <div class="table-row">
                    <div class="date">06.02.18</div>
                    <div href="http://www.jazzstation.be/?lang=fr" class="place" target="_blank">Zinnema</div>
                    <div class="project" target="_blank">BLUE MONDAY PEOPLE</div>
                </div>
                <div class="table-row">
                    <div class="date">07.02.18</div>
                    <div href="http://www.jazzstation.be/?lang=fr" class="place" target="_blank">Zinnema</div>
                    <div class="project" target="_blank">BLUE MONDAY PEOPLE</div>
                </div>
                </div>
            </div>
        </div>-->

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