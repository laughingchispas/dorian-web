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
        include 'partials/main-nav.php'
        ?>

        <!---------------- album content ---------------->
        <div class="side-container">
            <div class="left-side">
                <div class="contact-image"><img class="disc-image" src="assets/pages/albums.jpg">
                    <div class="albums-image-title image-title">Albums</div>
                </div>
                <div class="album-under-big-pic-content">
                    <div>En attendant qu’un système d’achat en ligne soit mis en place sur ce site, si vous voulez vous
                        procurez un disque envoyez tout simplement un mail à info@doriandumont.com
                    </div>
                    <div>Il vous sera délivré promptement.</div>
                    <div>(les tarifs sont indiqués dans les infos des albums)</div>
                </div>

                <!---------------they do it for a reason -------------->
                <div class="switcher-content">
                    <div class="large-album-format" id="sT-for-a-reason">
                        <div class="large-album-top">
                            <div class="large-image-container">
                                <img class="large-image" src="assets/tdif.jpg">
                            </div>
                            <div class="large-album-content-right">
                                <div>
                                    <div class="group">Jens Maurits Orchestra</div>
                                    <div class="title-album">They Do it For a Reason</div>
                                </div>
                                <div>CD + Livret</div>
                                <div class="label">suite 2016</div>
                            </div>
                        </div>
                        <div class="large-album-content-below">
                            <div><b>Jens Bouttery</b>: <i>batterie, compo</i></div>
                            <div><b>Daan Milius</b>: <i>texte</i></div>
                            <div><b>Lisa Gambey</b>: <i>livre</i></div>
                            <div><b>Benjamin Sauzereau</b>: <i>guitarre</i></div>
                            <div><b>Niels Van Heertum</b>: <i>euphonium</i></div>
                            <div><b>Rik Sturtewagen</b>: <i>violon</i></div>
                            <div><b>Lennart Heyndels</b>: <i>violoncelle, contrebasse</i></div>
                            <div><b>Joris Lindemans</b>: <i>violoncelle</i></div>
                            <div><b>Lucas Kramer</b>: <i>la bestia</i></div>
                        </div>
                        <div>
                            <div class="album-audio-link">
                                audio:
                                <a href="https://soundcloud.com/dorian-dumont/migration-jens-maurits-orchestra-album-they-do-it-for-a-reason"
                                   target="_blank">Migration</a>
                            </div>
                            <div class="album-video-link">
                                trailer:
                                <a href="https://vimeo.com/110868119" target="_blank">ici</a>
                            </div>
                            <div class="acheter">
                                Un lien pour acheter le disque : … à venir (voir plus haut)
                                <div class="tarif">(tarif 20€)</div>
                            </div>
                            <div class="presse-album-title">Presse :</div>
                            <div class="presse ">
                                <div class="review">
                                    Want het is pas dan, als je meegaat op die trektocht via precies uitgevoerde
                                    passages,
                                    met chaos flirtende momenten én ambientgetinte stromen, dat je je gewaar wordt van
                                    de
                                    verhalende boog die er in steekt, van de hypnotische kracht van sommige episodes en
                                    het
                                    opduiken van de stoorzenders, waarmee ze meer dan eens doen denken aan de helden van
                                    het
                                    ICP Orchestra. En dat zorgt ervoor dat de indrukken voortdurend wisselen; het ene
                                    moment
                                    kinds, lieflijk, dartel, absurd. Even later bedrukt, mysterieus, rafelig,
                                    uitnodigend...
                                </div>
                                <div class="reviewer">
                                    Revue par Guy Peters, Enola Magazine 06.07.2016
                                </div>
                            </div>
                            <div class="presse">
                                <div class="review">'Episode 1' zet Satie-achtig aan met een smachtende viool en een
                                    schitterende Niels Van Heertum op euphonium. 'Endorphins' wisselt percussie en
                                    strijkpartijen af. Andere stukken zijn meer klankcollages, soms ontwrichtend dan
                                    weer
                                    swingend...
                                </div>
                                <div class="reviewer">Review Karel Van Keymeulen, De Standaard 29.06.2016 ★★★★</div>
                            </div>
                            <div class="presse">
                                <div class="review">Het eindresultaat: een ontwrichtende luisterervaring waarbij licht
                                    epische grandeur al snel plaats moet ruimen voor de meest vreemdsoortige
                                    geluidscombinaties en natuurreferenties. Feeëriek en filmisch maar ook bijwijlen
                                    heel
                                    verontrustend en kervend...
                                </div>
                                <div class="reviewer">Review Georges-Tonla Briquet, Jazzmozaïek 06.2016 ★★★★★</div>
                            </div>
                            <div class="presse">
                                <div class="review">C’est tantôt hypnotique, tantôt déjanté, tantôt lyrique, tantôt
                                    débridé.
                                    Avec des sonorités très réussies, le Jens Maurits Orchestra raconte une histoire.
                                    Avec
                                    des péripéties, des emballements, des moments de calme, d’autres d’énervement. Ça
                                    suscite une belle écoute chez l’auditeur, qui veut connaître le reste de l’histoire
                                    et
                                    profiter de tous ses épisodes.
                                </div>
                                <div class="reviewer">Review Jean-Claude Vantroyen, Mad/Le Soir 29.06.2016 ★★★</div>
                            </div>
                            <div class="presse">
                                <div class="review"></div>
                                <div class="reviewer"></div>
                            </div>
                            <div class="presse">
                                <div class="review">Bouttery blijkt een volwaardig componist en doorstaat de
                                    vergelijking
                                    met veel hedendaags gecomponeerde muziek met glans. Een componist ook die de
                                    mogelijkheden van dit tentet optimaal benut en de rijke orkestratie maximaal
                                    uitbuit.
                                </div>
                                <div class="reviewer">Review by Ben Taffijn, Draai Om Je Oren, 27.01.2017</div>
                            </div>

                            <div>

                            </div>

                        </div>
                    </div>

                    <!--------------- phil --------------------------->
                    <div class="large-album-format" id="sT-philemon">
                        <div class="large-album-top">
                            <div class="large-image-container">
                                <img class="large-image" src="assets/phil_poche.jpg">
                            </div>
                            <div class="large-album-content-right">
                                <div>
                                    <div class="group">Philémon, le chien qui ne voulait pas grandir</div>
                                    <div class="title-album">Philémon, le chien qui ne voulait pas grandir</div>
                                </div>
                                <div class="label">suite 2016</div>
                            </div>
                        </div>
                        <div class="large-album-content-below">
                            <div><b>Benjamin Sauzereau</b>: <i>guitare</i></div>
                            <div><b>Mathieu Robert</b>: <i>sax soprano</i></div>
                            <div><b>Doorian Dumont</b>: <i>piano</i></div>
                            <div><b>Benoît Leseure</b>: <i>violon</i></div>
                            <div><b>Nicole Miller</b>: <i>algo</i></div>
                            <div><b>Annemie Osborne</b>: <i>violoncelle</i></div>
                        </div>
                        <div>
                            <div class="album-audio-link">
                                audio:
                                <a href=" https://soundcloud.com/dorian-dumont/eb-philemon-le-chien-qui-ne-voulait-pas-grandir-1er-album"
                                   target="_blank">Eb</a>
                            </div>
                            <div class="album-video-link">
                                video:
                                <a href="https://www.youtube.com/watch?v=DXWoRPvPuzI" target="_blank">Ouvert/Fermé</a>
                            </div>
                            <div class="acheter">
                                Un lien pour acheter le disque : … à venir (voir plus haut)
                                <div class="tarif">(tarif 15€)</div>
                            </div>
                            <div class="presse-album-title">Presse :</div>
                            <div class="presse ">
                                <div class="review">
                                    <div>Mêler des cordes et du jazz, c’est un pari que beaucoup de musiciens osent
                                        tenter.
                                        Souvent, le défi est raté : trop suave. Ici, c’est totalement réussi.
                                    </div>
                                    <div>Parce qu’il ne s’agit pas d’accompagner les mélodies jazzy mais de faire partie
                                        intégrante de la musique de Philémon…
                                    </div>
                                </div>
                                <div class="reviewer">
                                    Revue par Jean-Claude Vantroyen, Mad/Le Soir 11.05.2016 ★★★
                                </div>
                            </div>
                            <div class="presse">
                                <div class="review">Avec ce mélange de cordes et d’instruments plus jazz, le groupe
                                    propulse
                                    vers le public une sonorité pleine, chaude, sensuelle, soudain traversée de
                                    grincements
                                    de cordes à la Penderecki, de pizzicatos très tango ou bastringue au piano,
                                    d’accords
                                    veloutés à la guitare, d’échappées vertigineuses du sax, de mélodies qui
                                    s’échappent…
                                </div>
                                <div class="reviewer">Interview par Jean-Claude Vantroyen, Le Soir 11.05.2016</div>
                            </div>
                            <div class="presse">
                                <div class="review">Opvallend op dit album is het verhalende, bijna filmische element.
                                    De
                                    strijkers spelen daarbij een belangrijke rol en zorgen op menig moment voor een
                                    klassieke sfeer.
                                </div>
                                <div class="reviewer">Revue par Ben Taffijn, Draai Om Je Oren, 27.01.2017</div>
                            </div>
                            <div class="presse">
                                <div class="review">
                                    <div>
                                        Un sextet qui enchevêtre écriture et improvisation, rigueur et flâneries dans un
                                        univers poétique, mêlant les codes du jazz et de la musique de chambre.
                                    </div>
                                    <div>La formule résolument acoustique correspond à un concept raffiné qui, en
                                        musique et
                                        sans hermétisme, parle le langage des poètes.
                                    </div>
                                </div>
                                <div class="reviewer">http://www.plurio.net/5/outputlang,fr/eid,774388/agenda.html</div>
                            </div>
                        </div>
                    </div>

                    <!------------- Empire of Matches -------------------->
                    <div class="large-album-format" id="sT-matches">
                        <div class="large-album-top">
                            <div class="large-image-container">
                                <img class="large-image" src="assets/empire.jpg">
                            </div>
                            <div class="large-album-content-right">
                                <div>
                                    <div class="group">Blue Monday People</div>
                                    <div class="title-album">Empire of Matches</div>
                                </div>
                                <div class="label"> Talia asbl 2016</div>
                            </div>
                        </div>
                        <div class="large-album-content-below">
                            <div><b>François Vaiana</b>: <i>chant</i></div>
                            <div><b>Jens Bouttery</b>: <i>batterie</i></div>
                            <div><b>Dorian Dumont</b>: <i>piano</i></div>
                            <div><b>Benjamin Sauzereau</b>: <i>guitare</i></div>
                        </div>
                        <div>
                            <div class="album-audio-link">
                                audio:
                                <a href="https://soundcloud.com/bluemondaypeople/fireworks"
                                   target="_blank">Fireworks</a>
                            </div>
                            <!--<div class="album-video-link">
                                video :
                                <a href="https://vimeo.com/140090756" target="_blank">ici</a>
                            </div>-->
                            <div class="acheter">
                                Un lien pour acheter le disque : … à venir (voir plus haut)
                                <div class="tarif">(tarif 15€)</div>
                            </div>
                        </div>
                    </div>

                    <!--------------- lift 1st floor --------------------------->
                    <div class="large-album-format" id="sT-first-floor">
                        <div class="large-album-top">
                            <div class="large-image-container">
                                <img class="large-image" src="assets/lift.jpg">
                            </div>
                            <div class="large-album-content-right">
                                <div>
                                    <div class="group">Lift</div>
                                    <div class="title-album">1st floor</div>
                                </div>
                                <div class="label">autoproduction 2014</div>
                            </div>
                        </div>
                        <div class="large-album-content-below">
                            <div><b>Emily Allison</b>: <i>voix</i></div>
                            <div><b>Thomas Mayade</b>: <i>fuglehorn</i></div>
                            <div><b>Jérôme Klein</b>: <i>batterie</i></div>
                            <div><b>Dorian Dumont</b>: <i>Piano</i></div>
                            <div><b>Lennart Heyndels</b>: <i>contrebasse</i></div>
                        </div>
                        <div>Featuring -</div>
                        <div class="guest">
                            <div><b>David Linx</b>: <i>chant</i></div>
                            <div><b>Christophe Panzani</b>: <i>saxophone tenor</i></div>
                            <div><b>Sandrine Marchetti</b>: <i>piano</i></div>
                        </div>
                        <div>
                            <div class="album-video-link">
                                teaser:
                                <a href="https://www.youtube.com/watch?v=9IIkNobYpyo" target="_blank">ici</a>
                            </div>
                            <div class="acheter">
                                Un lien pour acheter le disque : … à venir (voir plus haut)
                                <div class="tarif">(tarif 15€)</div>
                            </div>
                        </div>
                    </div>

                    <!--------------------- dubtapes ------------------------->
                    <div class="large-album-format" id="sT-dubtapes">
                        <div class="large-album-top">
                            <div class="large-image-container">
                                <img class="large-image" src="assets/dub.jpg">
                            </div>
                            <div class="large-album-content-right">
                                <div>
                                    <div class="group">Jens Maurits Orchestra</div>
                                    <div class="title-album">The Dubtapes</div>
                                </div>
                                <div class="label">autoproduction 2013</div>
                            </div>
                        </div>
                        <div class="large-album-content-below">
                            <div><b>Jens Bouttery</b>: <i>batterie, compo</i></div>
                            <div><b>Daan Milius</b>: <i>vidéo, sampler</i></div>
                            <div><b>Dorian Dumont</b>: <i>piano</i></div>
                            <div><b>Benjamin Sauzereau</b>: <i>guitare</i></div>
                            <div><b>Niels Van Heertum</b>: <i>euphonium</i></div>
                            <div><b>Joris Lindemans</b>: <i>violoncelle</i></div>
                            <div><b>Gregor Siedl</b>: <i>clarinette, sax</i></div>
                        </div>
                        <div>
                            <div class="album-audio-link">
                                audio:
                                <a href=" https://soundcloud.com/dorian-dumont/we-used-to-hunt-jens-maurits-orchestra-the-dubtapes-live-de-werf"
                                   target="_blank">We Used to Hunt</a>
                            </div>
                            <div class="album-video-link">
                                teaser:
                                <a href="https://www.youtube.com/watch?v=bqPpH7cmLAQ" target="_blank">ici</a>
                            </div>
                            <div class="album-video-link">
                                video concert recording live:
                                <a href="https://vimeo.com/140090756" target="_blank">ici</a>
                            </div>
                            <div class="acheter">
                                Un lien pour acheter le disque : … à venir (voir plus haut)
                                <div class="tarif">(tarif 15€)</div>
                            </div>
                            <div class="presse-album-title">Presse :</div>
                            <div>images here</div>
                        </div>
                    </div>


                    <!----------- EPS------------------------->
                    <!------------ hibernation ------------------>
                    <div class="large-album-format" id="sT-hibernation">
                        <div class="large-album-top">
                            <div class="large-image-container">
                                <img class="large-image" src="assets/hibernation.jpg">
                            </div>
                            <div class="large-album-content-right">
                                <div>
                                    <div class="group">Charlotte Haesen Quintet</div>
                                    <div class="title-album">Hibernation</div>
                                </div>
                                <div class="label">LABEL????</div>
                            </div>
                        </div>
                        <div class="large-album-content-below">
                            <div><b>Charlotte Haesen</b>: <i>chant</i></div>
                            <div><b>Philip Breidenbach</b>: <i>guitare</i></div>
                            <div><b>Dorian Dumont</b>: <i>piano</i></div>
                            <div><b>Fil Caporali</b>: <i>contrebasse</i></div>
                            <div><b>Samuel Reisen</b>: <i>batterie</i></div>
                        </div>
                        <div>
                            <div class="album-audio-link">
                                audio:
                                <a href="https://soundcloud.com/charlottehaesen" target="_blank">You against me</a>
                            </div>
                            <div class="album-video-link">
                                video :
                                <a href="https://vimeo.com/140090756" target="_blank">La mer ?????????
                                    LINK????????? </a>
                            </div>
                            <div class="acheter">
                                Un lien pour acheter le disque : … à venir (voir plus haut)
                                <div class="tarif">(tarif 10€)</div>
                            </div>
                        </div>
                    </div>

                    <!------------------- effde ------------------->
                    <div class="large-album-format" id="sT-fendilles">
                        <div class="large-album-top">
                            <div class="large-image-container">
                                <img class="large-image" src="assets/effde_pochette.jpg">
                            </div>
                            <div class="large-album-content-right">
                                <div>
                                    <div class="group">Effdé</div>
                                    <div class="title-album">fendillés</div>
                                </div>
                                <div class="label">autoproduction 2017</div>
                            </div>
                        </div>
                        <div class="large-album-content-below">
                            <div><b>Fabrice Ducognon</b>: <i>chant</i></div>
                            <div><b>Dorian Dumont</b>: <i>piano</i></div>
                            <div><b>Romain Castéra</b>: <i>batterie</i></div>
                            <div><b>Charles Huck</b>: <i>contrebasse</i></div>
                        </div>
                        <div>
                            <div class="album-audio-link">
                                audio:
                                <a href="https://soundcloud.com/user-747916432/le-selfie-de-naruto"
                                   target="_blank">Naruto</a>
                            </div>
                            <div class="album-video-link">
                                video clip:
                                <a href="https://www.youtube.com/watch?v=2MjXuOrHtlo" target="_blank">Hume la mer</a>
                            </div>
                            <div class="acheter">
                                Un lien pour acheter le disque : … à venir (voir plus haut)
                                <div class="tarif">(tarif 10€)</div>
                            </div>
                            <div class="presse-album-title">Presse :</div>
                            <div class="presse ">
                                <div class="review">« Un EP finalement inclassable, qui montre le talent certain d’un
                                    artiste à suivre »
                                </div>
                                <div class="reviewer">
                                    Revue par Francofans, Février 2017
                                </div>
                            </div>
                            <div class="presse">
                                <div class="review">« Une voix chavirante, (…) Effdé pousse à la réflexion sans oublier
                                    la
                                    poésie »
                                </div>
                                <div class="reviewer">Revue par La Gazette de Montpellier, Décembre 2016</div>
                            </div>
                        </div>
                    </div>


                    <!---------------- Empire of Matches ------------------>
                    <div class="large-album-format" id="sT-matches-ep">
                        <div class="large-album-top">
                            <div class="large-image-container">
                                <img class="large-image" src="assets/love.jpg">
                            </div>
                            <div class="large-album-content-right">
                                <div>
                                    <div class="group">Blue Monday People</div>
                                    <div class="title-album">Empire of Matches</div>
                                </div>
                                <div class="label">autoproduction 2014</div>
                            </div>
                        </div>
                        <div class="large-album-content-below">
                            <div><b>François Vaiana</b>: <i>chant</i></div>
                            <div><b>Jens Bouttery</b>: <i>batterie</i></div>
                            <div><b>Dorian Dumont</b>: <i>piano</i></div>
                            <div><b>Benjamin Sauzereau</b>: <i>guitare</i></div>
                            <div><b>Lara Rossel</b>: <i>contrebasse</i></div>
                        </div>
                        <div>
                            <div class="album-audio-link">
                                audio:
                                <a href="https://soundcloud.com/dorian-dumont/you-got-me-blue-monday-people"
                                   target="_blank">You Got Me</a>
                            </div>
                            <!--<div class="album-video-link">
                                video :
                                <a href="https://vimeo.com/140090756" target="_blank">ici</a>
                            </div>-->
                            <div class="acheter">
                                Un lien pour acheter le disque : … à venir (voir plus haut)
                                <div class="tarif">(tarif 10€)</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="right-side-general">
                <div class="projets-info">Clique, donc, sur une pochette si tu veux en savoir +</div>
                <div data-switcher-content=".switcher-content">
                    <div class="small-album-format">
                        <div class="small-albums-container">
                            <div class="small-album-image-container">
                                <img src="assets/square.jpg" class="small-album-image">
                                <div class="small-album-container-title">
                                    <div>disques
                                        <div><i class="fa fa-chevron-down"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="small-albums-container">
                            <div class="small-album-image-container" data-switcher-target="#sT-for-a-reason">
                                <img src="assets/tdif.jpg" class="small-album-image">
                            </div>
                            <div class="small-album-image-container">
                                <img src="assets/phil_poche.jpg" class="small-album-image"
                                     data-switcher-target="#sT-philemon">
                            </div>
                            <div class="small-album-image-container">
                                <img src="assets/empire.jpg" class="small-album-image"
                                     data-switcher-target="#sT-matches">
                            </div>
                            <div class="small-album-image-container">
                                <img src="assets/lift.jpg" class="small-album-image"
                                     data-switcher-target="#sT-first-floor">
                            </div>
                            <div class="small-album-image-container">
                                <img src="assets/dub.jpg" class="small-album-image"
                                     data-switcher-target="#sT-dubtapes">
                            </div>
                        </div>
                    </div>

                    <div class="small-album-format">
                        <div class="small-albums-container">
                            <div class="small-album-image-container">
                                <img src="assets/square.jpg" class="small-album-image">
                                <div class="small-album-container-title">
                                    <div>E.P.(s)
                                        <div><i class="fa fa-chevron-down"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="small-albums-container">
                            <div class="small-album-image-container">
                                <img src="assets/hibernation.jpg" class="small-album-image"
                                     data-switcher-target="#sT-hibernation">
                            </div>
                            <div class="small-album-image-container">
                                <img src="assets/effde_pochette.jpg" class="small-album-image"
                                     data-switcher-target="#sT-fendilles">
                            </div>
                            <div class="small-album-image-container">
                                <img src="assets/love.jpg" class="small-album-image"
                                     data-switcher-target="#sT-matches-ep">
                            </div>
                        </div>
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
    <div class="nicole">
        website designed by nicole
    </div>

</div>

<script src="js/transitions.js"></script>

</body>
</html>