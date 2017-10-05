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

        <!---------------- projets content ---------------------------->
        <div class="side-container">
            <div class="left-side">
                <div class="contact-image">
                    <img class="projets-image" src="assets/pages/projets.jpg">
                    <div class="projets-image-title image-title">Projets</div>
                </div>
            </div>
            <div class="right-side-general">
                Clique donc sur une image si tu veux plus de détails
            </div>
        </div>

        <div class="projet-main">
            <div class="projets-supra-container"
                 data-switcher-content=".switcher-content">
                <div class="projets-container switcher-trigger" data-switcher-target="#sT-easy-pieces">
                    <div class="projet">Easy Pieces</div>
                    <img src="assets/easyside.jpg" class="projet-image-small">
                </div>
                <div class="projets-container switcher-trigger" data-switcher-target="#sT-philemon">
                    <div class="projet">Philemon</div>
                    <img src="assets/philside.jpg" class="projet-image-small">
                </div>
                <div class="projets-container switcher-trigger" data-switcher-target="#sT-blogpera">
                    <div class="projet">The Blogpera</div>
                    <img src="assets/jmoside.jpg" class="projet-image-small">
                </div>
                <div class="projets-container switcher-trigger" data-switcher-target="#sT-blue-monday">
                    <div class="projet">Blue Monday People</div>
                    <img src="assets/blueside.jpg" class="projet-image-small">
                </div>
                <div class="projets-container switcher-trigger" data-switcher-target="#sT-echt">
                    <div class="projet">SubChack</div>
                    <img src="assets/echtside.jpg" class="projet-image-small">
                </div>
                <div class="projets-container switcher-trigger" data-switcher-target="#sT-fd">
                    <div class="projet">Effdé</div>
                    <img src="assets/fdside.jpg" class="projet-image-small">
                </div>
                <div class="projets-container switcher-trigger" data-switcher-target="#sT-charlotte">
                    <div class="projet">Charlotte Haesen</div>
                    <img src="assets/chside.jpg" class="projet-image-small">
                </div>
                <div class="projets-container switcher-trigger" data-switcher-target="#sT-9-1">
                    <div class="projet">9 +1</div>
                    <img src="assets/9side.jpg" class="projet-image-small">
                </div>
            </div>

            <!-------------- easy pieces   -------------------------------------->
            <div class="switcher-content">
                <div id="sT-easy-pieces">
                    <div class="title">easy pieces</div>
                    <div class="project-content">
                        <img class="projet-image" src="assets/easy.jpg">
                        <div>
                            <div class="membre">membres</div>
                            <div class="group-description"><b>Benjamin Sauzereau</b>: <i>guitare</i></div>
                            <div class="group-description"><b>Hendrik Lasure</b>: <i>fender rhodes</i></div>
                            <div class="group-description"><b>Dorian Dumont</b>: <i>piano</i></div>
                        </div>
                    </div>
                    <p class="additional">Easy Pieces est un trio qui explore la rencontre de sons acoustiques et
                        amplifiés, autour de morceaux originaux écris pour cette instrumentation inhabituelle. Le groupe
                        travaille sur les unissons, alterne les ambiances, alliant des soundscapes vertigineux et des
                        mélodies ciselées, une écriture épurée avec une dimension improvisée, toujours au service d'une
                        collection de petits récits instrumentaux qui suggère des histoires mais laisse à l'auditeur le
                        soin de les imaginer.</p>
                    <p class="additional">Ces trois jeunes musiciens ont su trouver chez chacun une profonde
                        compréhension mutuelle au cours d'une série de concerts, et jouent avec les codes du trio où ces
                        trois instruments harmonique se passent les fonctions, s'entremêlent et s'affrontent avec une
                        énergie tantôt rock tantôt abstraite et toujours narrative.</p>
                    <p class="additional">Easy Pieces vient d’enregistrer son 1er album qui devrait sortir à l’automne
                        2017.</p>


                    <div class="additional">Ce que j'aime avec EASY PIECES c'est que j'ai parfois l'impression d'être
                        seulement un effet de l'un de des deux autres musiciens
                    </div>
                    <div class="additional">Comme si je me rétrécissais et que je devenais un tout petit rouage, comme
                        l'enjoliveur d'une voiture.
                    </div>
                    <div class="additional">Et que si j'ai envie je peux aussi prendre le volant et que c'est
                        confortable.
                    </div>
                    <div class="additional">Et d'un coup je conduit une Ferrari.</div>
                    <div class="additional">La 'lumière' de l'histoire musicale se projète sur tous les trois à la fois
                        souvent, sur l'un de nous parfois, ou encore tel une ombre sur aucun d'entre nous et jouant
                        seulement avec les reflets.
                    </div>
                    <div class="additional">Tour à tour je prends le pouvoir, je me fonds dans une note, une idée, un
                        son, j'accompagne, je bataille, je soutiens, je compose...
                    </div>
                    <div class="additional">Bref je joue tout simplement.</div>

                    <div class="eau">Mettez vous l’eau à la bouche:</div>
                    <div class="audio-video-container">
                        <div class="audio">un audio: <a href="https://www.youtube.com/watch?v=9IIkNobYpyo"
                                                        target="_blank">Little box</a></div>
                        <div class="video">& une video: <a href="https://www.youtube.com/watch?v=9IIkNobYpyo"
                                                           target="_blank">Algegre Aleatoire</a></div>
                    </div>

                    <div class="convincing-text"><b>Ce groupe vous intrigue ? Tu veux désespérément en savoir plus et
                            connaître les arcanes de cette formation ? L’alternance entre le tutoiement et le
                            vouvoiement vous perturbe bien comme il faut et tu ne sais plus où tu en es ? D’ailleurs :
                            où en êtes-vous ? Tu veux acheter un disque ? Tu n’en peux plus de toutes ces questions ?
                            Tout ça est très tourneboulant n’est-ce pas ? Ke-waaa? Tu veux des détails sur les concerts
                            à venir? Va donc sur leur </b><a class="projet-site" target="_blank"
                                                             href="https://soundcloud.com/easypiecesmusic">site
                            internet:</a></div>
                    <br>
                    <div class="convincing-text">Et bien ils ne possèdent malheureusement pas encore de site donc tu vas
                        devoir être patient.
                    </div>
                    <div class="convincing-text">C’est comme ça mais c’est en préparation</div>
                    <div class="convincing-text">Relax et prends une tisane.</div>
                </div>

                <!-------------------phil ---------------------->
                <div id="sT-philemon">
                    <div class="title">Philemon, le chien qui ne voulait pas grandir</div>
                    <div class="project-content">
                        <img class="projet-image" src="assets/phil.jpg">
                        <div>
                            <div class="membre">membres</div>
                            <div class="group-description"><b>Benjamin Sauzereau</b>: <i>guitare</i></div>
                            <div class="group-description"><b>Mathieu Robert</b>: <i>sax soprano</i></div>
                            <div class="group-description"><b>Dorian Dumont</b>: <i>piano</i></div>
                            <div class="group-description"><b>Benoît Leseure</b>: <i>violon</i></div>
                            <div class="group-description"><b>Nicole Miller</b>: <i>alto</i></div>
                            <div class="group-description"><b>Annemie Osborne</b>: <i>violoncelle</i></div>
                        </div>
                    </div>
                    <p class="additional">PHILÉMON est un sextet qui s’attache à une forme de chanson instrumentale,
                        tout en exploitant certains codes du jazz et de la musique de chambre comme de la musique
                        contemporaine.</p>
                    <p class="additional">"Résolument acoustique et tourné vers la simplicité, le groupe joue uniquement
                        de la musique originale, arrangée pour et par ses membres, qui surprend doucement par un univers
                        poétique très particulier.</p>

                    <div>1 album existant:</div>
                    <div class="additional"><a href="albums.php" class="album-name"><b>Philémon, le chien qui ne voulait
                                pas grandir</b></a> (suite 2015)
                    </div>
                    <div class="eau">Mettez vous l’eau à la bouche:</div>
                    <div class="audio-video-container">
                        <div class="audio">un audio: <a href="https://soundcloud.com/philemonlechien/eb-phil"
                                                        target="_blank">Eb</a></div>
                        <div class="video">& une video: <a href="https://www.youtube.com/watch?v=DXWoRPvPuzI"
                                                           target="_blank">Ouvert/Fermé</a></div>
                    </div>
                    <div class="convincing-text"><b>Ce groupe vous intrigue ? Tu veux désespérément en savoir plus et
                            connaître les arcanes de cette formation ? L’alternance entre le tutoiement et le
                            vouvoiement vous perturbe bien comme il faut et tu ne sais plus où tu en es ? D’ailleurs :
                            où en êtes-vous ? Tu veux acheter un disque ? Tu n’en peux plus de toutes ces questions ?
                            Tout ça est très tourneboulant n’est-ce pas ? Ke-waaa? Tu veux des détails sur les concerts
                            à venir? Va donc sur
                        </b><a class="projet-site" target="_blank" href="https://philemonchien.wordpress.com/">leur site
                            internet.</a></div>
                </div>

                <!-------------------- blogpera ---------------->
                <div id="sT-blogpera">
                    <div class="title">Jens Maurits Orchestra: The Blogpera</div>
                    <div class="project-content">
                        <img class="projet-image" src="assets/jmo.png">
                        <div>
                            <div class="membre">membres</div>
                            <div class="group-description"><b>Jens Bouttery</b>: <i>batterie</i></div>
                            <div class="group-description"><b>Dorian Dumont</b>: <i>piano</i></div>
                            <div class="group-description"><b>Lucas Kramer</b>: <i>'la bestia'</i></div>
                            <div class="group-description"><b>Daan Milius</b>: <i>dramaturge</i></div>
                        </div>
                    </div>
                    <p class="additional">Pourquoi faisons nous de la musique? </p>
                    <p class="additional">C’est la question qui a conduit le « Jens Maurits Orchestra » à interviewer
                        des scientifiques, à enquêter sur des mythes tribaux, à construire une machine à mémoire : « la
                        bestia » ainsi qu’à faire beaucoup de musique du coup.</p>
                    <p class="additional">Comme quoi il n’y a pas de secret.</p>
                    <p class="additional">Cette question infini, cette recherche sans fin, (tel « l’histoire ». Ah!
                        Falkor!) vous ait maintenant présenté sous la forme du « BLOGPERA » : un super BLOG interactif
                        dans lequel les spectateurs doivent choisir quel « aria » sera joué et quand et lesquels ne
                        seront pas joués du tout.</p>
                    <p class="additional">Comme quoi il n’y a pas de secret.</p>

                    <div>2 albums existants:</div>
                    <div class="additional"><a href="albums.php" class="album-name"><b>The Dubtapes</b></a> (2013)</div>
                    <div class="additional"><a href="albums.php" class="album-name"><b>They Do it For a Reason</b></a>
                        (suite 2016)
                    </div>
                    <div class="eau">Mettez vous l’eau à la bouche:</div>
                    <div class="audio-video-container">
                        <div class="audio">un audio:
                            https://soundcloud.com/jensbouttery/jens-maurits-orchestra-on-the-blogpera-by-leonie-reineke
                        </div>
                        <div class="video">& une video: https://www.youtube.com/watch?v=MK0clRHqmwk&t=6s</div>
                    </div>
                    <!--<div class="buy">
                      <div *ngFor="let buy of selectedProject.buy_fr"><b>{{buy.paragraph}}</b></div>
                    </div>-->
                    <div class="convincing-text"><b>Ce groupe vous intrigue ? Tu veux désespérément en savoir plus et
                            connaître les arcanes de cette formation ? L’alternance entre le tutoiement et le
                            vouvoiement vous perturbe bien comme il faut et tu ne sais plus où tu en es ? D’ailleurs :
                            où en êtes-vous ? Tu veux acheter un disque ? Tu n’en peux plus de toutes ces questions ?
                            Tout ça est très tourneboulant n’est-ce pas ? Ke-waaa? Tu veux des détails sur les concerts
                            à venir? Va donc sur leur site internet:
                        </b><a class="projet-site" target="_blank"
                               href="http://www.jensmauritsorchestra.com/projects.html#BLOGPERATITLE">TO SITE</a></div>
                </div>

                <!---- blue monday ------------------->
                <div id="sT-blue-monday">
                    <div class="title">Blue Monday People</div>
                    <div class="project-content">
                        <img class="projet-image" src="assets/blue.jpg">
                        <div>
                            <div class="membre">membres</div>
                            <div class="group-description"><b>Franois Vaiana</b>: <i>chant</i></div>
                            <div class="group-description"><b>Wendlavim Zabsonre</b>: <i>batterie</i></div>
                            <div class="group-description"><b>Dorian Dumont</b>: <i>piano</i></div>
                            <div class="group-description"><b>Benjamin Sauzereau</b>: <i>guitare</i></div>
                        </div>
                    </div>
                    <p class="additional">Blue Monday people est un groupe de Soul progressive de Bruxelles fondé par le
                        chanteur François Vaiana. Leur musique hybride est teinté de spleen Européen et imprégné de
                        blues d’Amérique. Les compositions de François sont des contes urbains profondément influencé
                        par le bon, le vilain, le sauvage et l’ordinaire.</p>

                    <div>1 album & 1 EP existants:</div>
                    <div class="additional"><a href="albums.php" class="album-name"><b>Empire of Matches</b></a>2016
                    </div>
                    <div class="additional"><a href="albums.php" class="album-name"><b>Love</b></a>2014</div>
                    <div class="eau">Mettez vous l’eau à la bouche:</div>
                    <div class="audio-video-container">
                        <div class="audio">un audio:</div>
                        <div class="video">& une video:</div>
                    </div>
                    <!--<div class="buy">
                      <div *ngFor="let buy of selectedProject.buy_fr"><b>{{buy.paragraph}}</b></div>
                    </div>-->
                    <div class="convincing-text"><b>Ce groupe vous intrigue ? Tu veux désespérément en savoir plus et
                            connaître les arcanes de cette formation ? L’alternance entre le tutoiement et le
                            vouvoiement vous perturbe bien comme il faut et tu ne sais plus où tu en es ? D’ailleurs :
                            où en êtes-vous ? Tu veux acheter un disque ? Tu n’en peux plus de toutes ces questions ?
                            Tout ça est très tourneboulant n’est-ce pas ? Ke-waaa? Tu veux des détails sur les concerts
                            à venir? Va donc sur leur site internet:
                        </b><a class="projet-site" target="_blank" href="http://www.bluemondaypeople.be/">TO SITE</a>
                    </div>
                </div>

                <!------------------- echt ------------------->
                <div id="sT-echt">
                    <div class="title">echt</div>
                    <div class="project-content">
                        <img class="projet-image" src="assets/ekt.jpg">
                        <div>
                            <div class="membre">membres</div>
                            <div class="group-description"><b>Florent Jeunieaux</b>: <i>guitare</i></div>
                            <div class="group-description"><b>Martin Méreau</b>: <i>batterie</i></div>
                            <div class="group-description"><b>Dorian Dumont</b>: <i>piano</i></div>
                            <div class="group-description"><b>Federico Pecoraro</b>: <i>basse</i></div>
                        </div>
                    </div>

                    <p class="additional">SubChak est un groupe composé de 4 Zinneke Bruxellois.</p>
                    <p class="additional">Leur style (parce qu’ils en ont) est très clair : c’est du pur
                        Groove-Electro-Trip-Hop mélangeant le brut, le vilain, le libre, l’audacieux et le
                        transcendant.</p>
                    <p class="additional">Tel une oeuvre de Georges Braque (j’ai googlé ce nom et c’est un pote à
                        Picasso) ils utilisent des collages musicaux et leur set s’enchaîne à la manière d’un DJ entre
                        leurs 8 mains habiles.</p>
                    <p class="additional">Le tout est une très bonne occasion de venir bouger ta tête et de te sentir en
                        joie, « enjaillé » comme dirait l’autre, et de faire la fête avec tes pieds.</p>
                    <p class="additional">Avec Martin Méreau à la batterie et à la mèche, Dorian Dumont aux claviers et
                        au rebond, Florent Jeunieaux à la guitare et aux couleurs et Federico Pecoraro à la basse et à
                        l’accent.</p>

                    <div>???????????</div>
                    <div class="additional"><a routerLink="#albums" class="album-name"><b>They Do it For a
                                Reason</b></a> (suite 2016)
                    </div>
                    <div class="eau">Mettez vous l’eau à la bouche:</div>
                    <div class="audio-video-container">
                        <div class="audio">un audio:</div>
                        <div class="video">& une video:</div>
                    </div>
                    <!--<div class="buy">
                      <div *ngFor="let buy of selectedProject.buy_fr"><b>{{buy.paragraph}}</b></div>
                    </div>-->
                    <div class="convincing-text"><b>Ce groupe vous intrigue ? Tu veux désespérément en savoir plus et
                            connaître les arcanes de cette formation ? L’alternance entre le tutoiement et le
                            vouvoiement vous perturbe bien comme il faut et tu ne sais plus où tu en es ? D’ailleurs :
                            où en êtes-vous ? Tu veux acheter un disque ? Tu n’en peux plus de toutes ces questions ?
                            Tout ça est très tourneboulant n’est-ce pas ? Ke-waaa? Tu veux des détails sur les concerts
                            à venir? Va donc sur leur site internet:</b><a class="projet-site" target="_blank" href="#">NO
                            SITE</a></div>
                    <br>
                    <div class="convincing-text">Et bien ils ne possèdent malheureusement pas encore de site donc tu vas
                        devoir être patient.
                    </div>
                    <div class="convincing-text">C’est comme ça mais c’est en préparation</div>
                    <div class="convincing-text">Relax et prends une tisane.</div>
                </div>

                <!------------------ FD ------------------------------------------->
                <div id="sT-fd">
                    <div class="title">Effdé</div>
                    <div class="project-content">
                        <img class="projet-image" src="assets/fd.jpg">
                        <div>
                            <div class="membre">membres</div>
                            <div class="group-description"><b>Fabrice Ducognon</b>: <i>chant</i></div>
                            <div class="group-description"><b>Dorian Dumont</b>: <i>piano</i></div>
                            <div class="group-description"><b>Romain Castéra</b>: <i>batterie</i></div>
                        </div>
                    </div>
                    <p class="additional">Après 15 années de nomadisme musical, consacrées à étudier le langage du jazz
                        et s’imprégner des musiques du monde , Effdé revient en 2016 à ses amours de jeunesse : la
                        chanson , le folk, et la pop musique.</p>
                    <p class="additional">Dans « Fendillés », son premier Ep sous ce nom, percent ça et là les couleurs
                        et les formes ramenées des ces différents voyages. Dans cet espace musical moderne s’harmonisent
                        les échos d’un Bashung de « L’Imprudence », les progressions harmoniques d’un Esbjorn Svenson
                        Trio ou l’existentialisme d’un Léonard Cohen.</p>
                    <p class="additional">L’écriture y tient le devant de la scène : elle interroge les mots, la langue,
                        sa polysémie, sa musique. Elle raconte le vieillissement, l’engagement, l’utopie, un pied dans
                        notre actualité, un autre dans ce qui fonde depuis toujours l’expérience envoûtante et
                        déstabilisante d’être au monde.</p>
                    <p class="additional">Entouré de compagnons de longue date, avec en premier chef Rom Castéra (
                        batterie ) qui réalise et produit ce premier opus, Dorian Dumont (piano) , Charlie Huck (
                        contrebasse ), le trio Zéphyr ( trio à cordes ), ainsi que la chanteuse Lola Baï, en featuring
                        sur un titre, Effdé dévoile une vision de la chanson qui s’engage- à questionner nos vies, à
                        rester alerte, à croire en l’homme, à croire, enfin, que la beauté est bien plus qu’un simple
                        divertissement du réél.</p>

                    <div>1 EP existant:</div>
                    <div class="additional"><a href="albums.php" class="album-name"><b>Fendillés</b></a> (2017)</div>
                    <div class="eau">Mettez vous l’eau à la bouche:</div>
                    <div class="audio-video-container">
                        <div class="audio">un audio: https://www.youtube.com/watch?v=2MjXuOrHtlo</div>
                        <div class="video">& une video: http://xn--effd-epa.com/musique</div>
                    </div>
                    <!--<div class="buy">
                      <div *ngFor="let buy of selectedProject.buy_fr"><b>{{buy.paragraph}}</b></div>
                    </div>-->
                    <div class="convincing-text"><b>Ce groupe vous intrigue ? Tu veux désespérément en savoir plus et
                            connaître les arcanes de cette formation ? L’alternance entre le tutoiement et le
                            vouvoiement vous perturbe bien comme il faut et tu ne sais plus où tu en es ? D’ailleurs :
                            où en êtes-vous ? Tu veux acheter un disque ? Tu n’en peux plus de toutes ces questions ?
                            Tout ça est très tourneboulant n’est-ce pas ? Ke-waaa? Tu veux des détails sur les concerts
                            à venir? Va donc sur leur site internet:
                        </b><a class="projet-site" target="_blank" href="http://xn--effd-epa.com/">TO SITE</a></div>
                </div>

                <!-------------------------- Charlotte ---------------------------->
                <div id="sT-charlotte">
                    <div class="title">Charlotte Haesen Quintet</div>
                    <div class="project-content">
                        <img class="projet-image" src="assets/ch5.jpg">
                        <div>
                            <div class="membre">membres</div>
                            <div class="group-description"><b>Charlotte Haesen</b>: <i>chant</i></div>
                            <div class="group-description"><b>Philip Breidenbach</b>: <i>guitare</i></div>
                            <div class="group-description"><b>Dorian Dumont</b>: <i>piano</i></div>
                            <div class="group-description"><b>Fil Caporali</b>: <i>contrebasse</i></div>
                            <div class="group-description"><b>Samuel Reisen</b>: <i>batterie</i></div>
                        </div>
                    </div>
                    <p class="additional">Les influences de la chanteuse hollando-franco-burundaise sont aussi
                        éclectiques que ses origines. Ses oreilles se sont laissées séduire par des voix et des
                        personnalités hors norme telles que Björk, Peggy Lee, Fay Claassen ou encore Joni Mitchell.</p>
                    <p class="additional">Six ans après la sortie de son premier album, la chanteuse Charlotte Haesen
                        remonte un troisième projet rêveur et apaisant aux accents jazz et singer-songwriting. Sur
                        Hibernation, le nouvel EP du quintet, la voix cristalline de Charlotte Haesen résonne avec plus
                        de liberté que jamais tout en gardant l'empreinte de son univers très personnel.</p>

                    <div class="additional">Le nouvel EP « Hibernation » est sortie en Avril 2017.</div>

                    <div>1 album existant:</div>
                    <div class="additional"><a href="albums.php" class="album-name"><b>Hibernation</b></a>(2017)</div>
                    <div class="eau">Mettez vous l’eau à la bouche:</div>
                    <div class="audio-video-container">
                        <div class="audio">un audio: https://soundcloud.com/charlottehaesen/you-against-me-charlotte
                        </div>
                        <div class="video">& une video: https://www.youtube.com/watch?v=vIR-ORe7ujc</div>
                    </div>
                    <!--<div class="buy">
                      <div *ngFor="let buy of selectedProject.buy_fr"><b>{{buy.paragraph}}</b></div>
                    </div>-->
                    <div class="convincing-text"><b>Ce groupe vous intrigue ? Tu veux désespérément en savoir plus et
                            connaître les arcanes de cette formation ? L’alternance entre le tutoiement et le
                            vouvoiement vous perturbe bien comme il faut et tu ne sais plus où tu en es ? D’ailleurs :
                            où en êtes-vous ? Tu veux acheter un disque ? Tu n’en peux plus de toutes ces questions ?
                            Tout ça est très tourneboulant n’est-ce pas ? Ke-waaa? Tu veux des détails sur les concerts
                            à venir? Va donc sur leur site internet:
                        </b><a class="projet-site" target="_blank" href="https://www.charlottehaesen.be/bands/">TO
                            SITE</a></div>
                </div>

                <!------------------------- 9+1 -------------------------------->
                <div id="sT-9-1">
                    <div class="title">9+1</div>
                    <div class="project-content">
                        <img class="projet-image" src="assets/9.jpg">
                        <div>
                            <div class="membre">membres</div>
                            <div class="group-description"><b>Tom Bourgeois</b>: <i>saxophones</i></div>
                            <div class="group-description"><b>Florent Jeunieaux</b>: <i>guitare</i></div>
                            <div class="group-description"><b>Dorian Dumontpiano</b>: <i></i></div>
                            <div class="group-description"><b>Thomas Mayade</b>: <i>trompette</i></div>
                            <div class="group-description"><b>Julien Delbrouck</b>: <i>sax baryton/clarinette basse</i>
                            </div>
                            <div class="group-description"><b>Quinten de Craecker</b>: <i>trombone</i></div>
                            <div class="group-description"><b>Thibault Dille</b>: <i>accordéon</i></div>
                            <div class="group-description"><b>Esinam Dogbaste</b>: <i>flûte/cajón</i></div>
                            <div class="group-description"><b>Victor Foulon</b>: <i>contrebasse</i></ic></div>
                            <div class="group-description"><b>Jelle van Giel</b>: <i>batterie</i></div>
                        </div>
                    </div>
                    <p class="additional">9+1 est le projet de Tom Bourgeois.</p>
                    <p class="additional">Et c’est beau.</p>

                    <div>???????????</div>
                    <div class="additional"><a routerLink="#albums" class="album-name"><b>They Do it For a
                                Reason</b></a> (suite 2016)
                    </div>
                    <div class="eau">Mettez vous l’eau à la bouche:</div>
                    <div class="audio-video-container">
                        <div class="audio">un audio:
                            https://soundcloud.com/tombourgeoismusic/05-soir-29-recital-mim-2015
                        </div>
                        <div class="video">& une video: https://www.youtube.com/watch?v=TrS5phNt5OE</div>
                    </div>
                    <!--<div class="buy">
                      <div *ngFor="let buy of selectedProject.buy_fr"><b>{{buy.paragraph}}</b></div>
                    </div>-->
                    <div class="convincing-text"><b>Ce groupe vous intrigue ? Tu veux désespérément en savoir plus et
                            connaître les arcanes de cette formation ? L’alternance entre le tutoiement et le
                            vouvoiement vous perturbe bien comme il faut et tu ne sais plus où tu en es ? D’ailleurs :
                            où en êtes-vous ? Tu veux acheter un disque ? Tu n’en peux plus de toutes ces questions ?
                            Tout ça est très tourneboulant n’est-ce pas ? Ke-waaa? Tu veux des détails sur les concerts
                            à venir? Va donc sur leur site internet:
                        </b><a class="projet-site" target="_blank" href="http://www.tombourgeois.com/bands">TO SITE</a>
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