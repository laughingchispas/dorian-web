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

        <div class="side-container">
            <div class="left-side">
                <div class="contact-image">
                    <img class="contact-image" src="assets/pages/agenda.jpg">
                </div>
            </div>
            <div class="right-side-general">Clique sur <u>+ d’infos</u> pour plus d’infos… (logique implacable)</div>
        </div>

        <div class="agenda-sub-pic-text">Tous les concerts à venir ainsi qu’une liste non-exhaustive des concerts passés pour les nostalgiques ou les aficionados de statistiques (il y en a)</div>
        <div class="concert-container">
             <div class="concert-container-title">Concerts du futur</div>
            <div class="table-heading table">
                <div class="date" id="date" style="color: #F2CC45;">date</div>
                <div class="place" id="place" style="color: #F2CC45;">lieu</div>
                <div class="more"></div>
                <div class="projet-agenda" id="projet-agenda" style="color: #F2CC45;">projet</div>
            </div>
            <div  class="table-contents table">
                <div class="table-row">
                    <div class="date">29.11.17</div>
                    <div class="place">Sounds</div>
                    <div id="hideshow-date-1" class="more">+ d'infos</div>
                    <a href="projets.php" class="project" target="_blank" style="text-decoration: underline; text-transform: uppercase;">Easy Pieces</a>
                </div>
                <div class="more-agenda new-date-1" style="display: none">
                    <div class="table-row">
                        <div class="date"></div>
                        <div>ça commence à <span class="address">21h30</span> et voici l’adresse : <span class="address"><span>28, Rue de la Tulipe, Bruxelles</span></span></div>
                    </div>
                    <div class="table-row">
                        <div class="date"></div>
                        <div>
                            site du lieu : <a href="https://www.soundsjazzclub.be/index.php/fr/" target="_blank"> ici</a>
                        </div>
                    </div>
                </div>

                <div class="table-row">
                    <div class="date">07.12.17</div>
                    <div class="place">Ancienne Belgique</div>
                    <div id="hideshow-date-2" class="more">+ d'infos</div>
                    <a href="projets.php" class="project" target="_blank" style="text-decoration: underline; text-transform: uppercase;">Echt!</a>
                </div>
                <div class="more-agenda new-date-2" style="display: none">
                    <div class="table-row">
                        <div class="date"></div>
                        <div>ça commence à <span class="address">20h</span> et voici l’adresse : <span class="address"><span>110, Boulevard Anspach, Bruxelles</span></span></div>
                    </div>
                    <div class="table-row">
                        <div class="date"></div>
                        <div>
                            site du lieu :<a href="https://www.abconcerts.be/fr/" target="_blank"> ici</a>
                        </div>
                    </div>
                </div>


                <div class="table-row">
                    <div class="date">07.12.17</div>
                    <div class="place">Bruggenhuis, Geraardsbergen</div>
                    <div id="hideshow-date-3" class="more">+ d'infos</div>
                    <a href="projets.php" class="project" target="_blank" style="text-decoration: underline; text-transform: uppercase;">Philémon</a>
                </div>
                <div class="more-agenda new-date-3" style="display: none">
                    <div class="table-row">
                        <div class="date"></div>
                        <div>ça commence à <span class="address">20h</span> et voici l’adresse : <span class="address"><span>50, Majoor Van Lierdelaan,</span><span></br>9500 Geraardsbergen (Overboelare),  BELGIQUE</span></span></div>
                    </div>
                    <div class="table-row">
                        <div class="date"></div>
                        <div>
                            site du lieu :<a href="https://www.hetbruggenhuis.be/" target="_blank"> ici</a>
                        </div>
                    </div>
                </div>


                <div class="table-row">
                    <div class="date">14.02.18</div>
                    <div class="place">Jazz Station</div>
                    <div id="hideshow-date-4" class="more">+ d'infos</div>
                    <a href="projets.php" class="project" target="_blank" style="text-decoration: underline; text-transform: uppercase;">Blue Monday People</a>
                </div>
                <div class="more-agenda new-date-4" style="display: none">
                    <div class="table-row">
                        <div class="date"></div>
                        <div>ça commence à <span class="address">20h</span> et voici l’adresse : <span class="address"><span>193A-195, Chaussée de Louvain, 1210 Bruxelles</span></span></div>
                    </div>
                    <div class="table-row">
                        <div class="date"></div>
                        <div>
                            site du lieu :<a href="http://www.jazzstation.be/" target="_blank"> ici</a>
                        </div>
                    </div>
                </div>

                <div class="table-row">
                    <div class="date">22.02.18</div>
                    <div class="place">La Cellule 133</div>
                    <div id="hideshow-date-5" class="more">+ d'infos</div>
                    <div href="projets.php" class="project" target="_blank">Harold/Tadam</div>
                </div>
                <div class="more-agenda new-date-5" style="display: none">
                    <div class="table-row">
                        <div class="date"></div>
                        <div>ça commence à <span class="address">2h</span> et voici l’adresse : <span class="address"><span>133a, Avenue Ducpétiaux, Bruxelles</span></span></div>
                    </div>
                    <div class="table-row">
                        <div class="date"></div>
                        <div>
                            site du lieu <a href="http://www.cellule133a.be/" target="_blank"> ici</a>
                        </div>
                    </div>
                </div>

                <div class="table-row">
                    <div class="date">29.30.18</div>
                    <div class="place">La Cellule 133</div>
                    <div id="hideshow-date-6" class="more">+ d'infos</div>
                    <div href="projets.php" class="project" target="_blank">Harold/Tadam</div>
                </div>
                <div class="more-agenda new-date-6" style="display: none">
                    <div class="table-row">
                        <div class="date"></div>
                        <div>ça commence à <span class="address">2h</span> et voici l’adresse : <span class="address"><span>133a, Avenue Ducpétiaux, Bruxelles</span></span></div>
                    </div>
                    <div class="table-row">
                        <div class="date"></div>
                        <div>
                            site du lieu <a href="http://www.cellule133a.be/" target="_blank"> ici</a>
                        </div>
                    </div>
                </div>

                <div class="table-row">
                    <div class="date">31.05.18</div>
                    <div class="place">La Cellule 133</div>
                    <div id="hideshow-date-7" class="more">+ d'infos</div>
                    <div href="projets.php" class="project" target="_blank">Harold/Tadam</div>
                </div>
                <div class="more-agenda new-date-7" style="display: none">
                    <div class="table-row">
                        <div class="date"></div>
                        <div>ça commence à <span class="address">2h</span> et voici l’adresse : <span class="address"><span>133a, Avenue Ducpétiaux, Bruxelles</span></span></div>
                    </div>
                    <div class="table-row">
                        <div class="date"></div>
                        <div>
                            site du lieu <a href="http://www.cellule133a.be/" target="_blank"> ici</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    <!--concerts du passé a rajouter -->
        <!--<div class="concert-container">
            <div class="concert-container-title">Concerts du passé</div>
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
                    <div id="hideshow-date-1" class="more">+ d'infos</div>
                    <div href="https://philemonchien.wordpress.com/" class="project" target="_blank">ECHT !</div>
                </div>
                <div class="more-agenda new-date-1" style="display: none">
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
                    <div id="hideshow-date-2" class="more">+ d'infos</div>
                    <div href="https://philemonchien.wordpress.com/" class="project" target="_blank">BLUE MONDAY PEOPLE</div>
                </div>
                <div class="more-agenda new-date-2" style="display: none">
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
                    <div id="hideshow-date-3" class="more">+ d'infos</div>
                    <div href="https://philemonchien.wordpress.com/" class="project" target="_blank">EASY PIECES</div>
                </div>
                <div class="more-agenda new-date-3" style="display: none">
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
                    <div id="hideshow-date-4" class="more">+ d'infos</div>
                    <div class="project" target="_blank">BLUE MONDAY PEOPLE</div>
                </div>
                <div class="more-agenda new-date-4" style="display: none">
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
                    <div id="hideshow-date-5" class="more">+ d'infos</div>
                    <div class="project" target="_blank">BLUE MONDAY PEOPLE</div>
                </div>
                <div class="more-agenda new-date-5" style="display: none">
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
        </div>-->   <!--end concerts du passé a rajouter -->
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

<script>

$(document).ready(function() {
    $('#hideshow-date-1').click(function() {
        $('.new-date-1').toggle("slide");
    });
});

$(document).ready(function() {
    $('#hideshow-date-2').click(function() {
        $('.new-date-2').toggle("slide");
    });
});

$(document).ready(function() {
    $('#hideshow-date-3').click(function() {
        $('.new-date-3').toggle("slide");
    });
});

$(document).ready(function() {
    $('#hideshow-date-4').click(function() {
        $('.new-date-4').toggle("slide");
    });
});


$(document).ready(function() {
    $('#hideshow-date-5').click(function() {
        $('.new-date-5').toggle("slide");
    });
});

$(document).ready(function() {
    $('#hideshow-date-6').click(function() {
        $('.new-date-6').toggle("slide");
    });
});

$(document).ready(function() {
    $('#hideshow-date-7').click(function() {
        $('.new-date-7').toggle("slide");
    });
});




</script>

</body>

</html>
