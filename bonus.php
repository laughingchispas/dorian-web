<!DOCTYPE html>
<html lang="en">
<?php
include 'partials/site-head.php';
?>
<body id="top" class="page-bonus">

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

        <!---------------- bonus content ---------------------------->
        <div class="side-container">
            <div class="left-side">
                <div class="bonus-image-container">
                    <div class="contact-image bonus-image"><img class="contact-image" src="assets/pages/bonus.jpg">
                        <div class="bonus-image-title image-title">bonus?!</div>
                    </div>
                </div>
            </div>
            <div class="right-side-general">
                Clique sur une icône pour des surprises
            </div>
        </div>

        <div class="bonus-content">
            <div class="gallerie">
                <div class="gallerie-title">
                    <a><i class="fa fa-wpexplorer"></i></a>
                    <div class="title">gallerie</div>
                    <div id="hideshow-gallery"><i id="gallery" class="fa fa-plus"></i></div>
                </div>
                <div class="content content-gallery" style="display: none">On dois parler de ce qu'on va mettre ici et comment :)</div>
            </div>

            <!--------------------------- chique --------------->

            <div class="chic">
                <div class="chic-title">
                    <a><i class="fa fa-grav"></i></a>
                    <div class="title">LE CHIC CLIC DU MOIS SELON MOI</div>
                    <a id="hideshow-chique"><i id="chic" class="fa fa-plus"></i></a>
                </div>

                <div class="content">Chaque mois, je vous ferais partager l’un de mes coups de coeur musical du moment avec, en prime, un lien vers leur site internet. C’est pas beautiful, ça?</div>
                <br>
                <div class="content-chique" style="display: none;"><div class="amatic">OCTOBRE 2017</div>
                    <div>On peut être jeune et aimer la musique classique. </div>
                    <div>Dans le cas de ces 4 filles dans le vent (oui je sais, elle est facile celle-là mais parfois il faut accepter l’évidence tout simplement) elles ont toutes fait un parcours classique et continue chacune de porter cette musique en elle.</div>
                    <div>Néanmoins ce quatuor se veut « Trans-genre » et elles ont bien l’intention de collaborer dans le plus de directions possible et avec le plus de gens différents possible, pourvu qu’elles soient emballés.</div>
                    <div>Emballant.</div>
                    <br>
                    <div class="amatic" id="bonus-anchor">LEUR SITE :</div>
                    <a style="color: black">http://inpraiseoffolly.co/index.html</a>
                </div>
            </div>

            <!------------------- jouez-moi ------------->
            <div class="jouez-moi">
                <div class="jouez-moi-title">
                    <a><i class="fa fa-cubes"></i></a>
                    <div class="title">jouez-moi</div>
                    <div><i id="hideshow-moi" class="fa fa-plus"></i></div>
                </div>
                <div class="content content-moi" style="display: none">
                    <div class="pdf-block" style="color: black">
                        <a class="pdf" href="assets/pdf/moi/mad.pdf" target="_blank" style="color: black; text-decoration: underline;">Mad pdf</a>
                        <a class="pdf" href="assets/pdf/moi/mad.wav" target="_blank" style="color: black; text-decoration: underline;">Mad audio</a>
                    </div>
                </div>
            </div>

            <!------------------- jouez-les ----------------------------->
            <div class="jouez-lez">
                <div class="jouez-lez-title">
                    <a><i class="fa fa-barcode"></i></a>
                    <div class="title">jouez-les</div>
                    <div><i id="hideshow-les" class="fa fa-plus"></i></div>
                </div>
                <div class="content content-les" style="display: none">
                    <div class="pdf-block">
                        <a class="pdf" href="assets/pdf/les/1612_Vulfpeck.pdf" target="_blank" style="color: black; text-decoration: underline;">Vulfpeck 1612</a>
                        <a class="pdf" href="assets/pdf/les/April_14.pdf" target="_blank" style="color: black; text-decoration: underline;">April 14th</a>
                        <a class="pdf" href="assets/pdf/les/desbemols.pdf" target="_blank" style="color: black; text-decoration: underline;">Des bémols et des dieses</a>
                    </div>
                </div>
            </div>

            <!--------------- thanks ---------------------------->
            <div class="thanks">
                <div class="thanks-title">
                    <a><i class="fa fa-hand-peace-o"></i></a>
                    <div class="title">remerciements</div>
                    <a><i id="hideshow-thanks" class="fa fa-plus"></i></a>
                    <div></div>
                </div>
                <div class="content content-thanks" style="display: none;">
                    <div>
                        <div class="thanks-par">J’ai beaucoup de gens auxquels je tiens à dédier ces quelques lignes sur ce site. C’est plutôt une chouette occasion de le faire.</div>
                        <div class="thanks-par">Et ça me fait plaisir.</div>
                        <div class="thanks-par">Je pense à eux car ils me « portent » et en grande partie, ils m’ont « fait » tel que je suis aujourd’hui.</div>
                        <div class="thanks-par">Et parfois, grâce à eux je dors mieux, et je parviens même à perdre l’habitude de mettre des « guillemets » à tout va.</div>
                        <div class="thanks-par">Et ça me fait plaisir.</div>
                        <div class="thanks-par">Merci pour ça déjà.</div>
                        </br>

                        <div class="thanks-par">Séquence émotion.</div>
                        <div class="thanks-par">Préparez les kleenex (et hop placement de produit) :</div>

                        </br>
                        <div class="thanks-par">Je tiens à remercier mes parents pour leur amour, leur soutien et leur écoute. Ils m’ont porté et poussé dans les moments où j’en avais besoin.</div>
                        <div class="thanks-par">Décisif.</div>
                        <div class="thanks-par">Une pensée pour Célia qui est la personne que j’écoute le plus et avec qui je partage tout: la vie, les joies, les peines, nos passions et aussi notre fils.</div>
                        <div class="thanks-par">Un énorme merci à Nicole Miller, sa jovialité et son enthousiasme et sans qui ce site n’aurait pas vu le jour (au moins pas avant quelques années et sûrement pas aussi beau)</div>
                        <div class="thanks-par">Je tiens aussi à remercier Roger Vantilt pour ses photos et son regard.</div>

                        </br></br>
                        <div class="thanks-par">Et puis, tant qu’on y est, je tiens à remercier Solal d’être là et pour son sourire.</div>
                        <div class="thanks-par">J’adresse aussi un grand salut à Diederik Wissels, un grand professeur et une grande personne tout simplement. (et je ne parle ni de taille -alors qu’il est plutôt grand- ni de l’âge -alors qu’il est plus vieux que moi- ici).</div>

                        </br>
                        <div class="thanks-par">Et aussi une immense pensée pour ses amis qui font du bien:</div>

                        </br></br>
                        <div class="thanks-par">José pour son bouc.</div>
                        <div class="thanks-par">Alex parce que c’est le même sang et puis Tournemine.</div>
                        <div class="thanks-par">Ben pour l’inspiration qu’il me donne et pour sa justesse (excepté sur sa guitare. Et big le tacle! Sinon c’est trop bisounours)</div>
                        <div class="thanks-par">J-B pour la patience et l’impatience, les wiches lorraines et ce parfum de garrigue.</div>
                        <div class="thanks-par">Xavier parce que le monde aime bien les surfeurs.</div>
                        <div class="thanks-par">Jens pour la stimulation et une belle intransigeance. Jésus! Et puis les « tricks » et les bruits.</div>
                        <div class="thanks-par">Julia pour ses pulls.</div>
                        <div class="thanks-par">Marion « Coco » pour ses cheveux.</div>
                        <div class="thanks-par">François/Frizzle parce qu’il sont deux (non je n’ai pas oublié le « s »).</div>
                        <div class="thanks-par">Aloyse pour les poukak (je me comprends et c’est le principal) et puis Rocky</div>
                        <div class="thanks-par">Brazùk pour son contresens, son talent et ses jeux de mots pas si foireux.</div>
                        <div class="thanks-par">Matthias pour les yams ainsi qu’une belle mauvaise foi de sudiste comme on les aime. Et puis il est là quand il faut.</div>
                        <div class="thanks-par">Julie et les plus beaux « ben quoi? » de wallonie (sans conteste). Une « echt ».</div>
                        <div class="thanks-par">Patou « Alfie » Pat, parce que dans la vie il y a des cactus. Et puis le Pérou…</div>
                        <div class="thanks-par">Le Druide pour son sens des mots.</div>
                        <div class="thanks-par">Lois pour sa folie. Et les réveils douloureux.</div>
                        <div class="thanks-par">Bao-Ahn pour son sens de la ponctuation.</div>
                        <div class="thanks-par">Daan pour ses idées foisonnantes.</div>
                        <div class="thanks-par">Joany parce qu’il faut des warrior.</div>
                        <div class="thanks-par">Jérôme pour son instinct, ses jeux de mots foireux et tous ces services rendus. Tululu.</div>
                        <div class="thanks-par">Martin parce que Ricky et Aston et Lobos et puis le belge c’est bon M’chou (M Majuscule).</div>
                        <div class="thanks-par">Margaux pour son énergie et parce qu’il n’y en a qu’une.</div>
                        <div class="thanks-par">Emily pour le 370 et tous les numéros qui suivront.</div>
                        <div class="thanks-par">Thomas, numéro bis (comme dans Astérix) et pour ses jeux de mots très foireux (comme quoi il y a des trucs qui reviennent).</div>
                        <div class="thanks-par">Rom parce que les gitans c’est bon.</div>
                        <div class="thanks-par">Kelzang parce que le Porto aussi.</div>
                        <div class="thanks-par">Marion C pour son rire et ses coups de crayons (sur mon mur ils resteront).</div>
                        <div class="thanks-par">Florent pour sa finesse.</div>
                        <div class="thanks-par">Maayan pour son accent.</div>
                        <div class="thanks-par">Gregor pour sa clarinette</div>
                        <div class="thanks-par">Annemie pour son sourire.</div>
                        <div class="thanks-par">Mathieu et Hendrik pour leur tranquillité unique (COMBO! avec points bonus pour l’anachronisme).</div>
                        <div class="thanks-par">Benoit pour les chemins tracés.</div>
                        <div class="thanks-par">Niels pour les histoires.</div>
                        <div class="thanks-par">Et Jérémy pour sa frénésie.</div>
                        <div class="thanks-par">(Toujours finir par une rime. Jean-Michel Parprincipe pour moi. Il est pote avec Pascal Disgression. Ils habitent dans ma tête. Ça se passe bien)</div>
                        <div class="thanks-par">Et à tous ceux que je n’ai pas citer (parce que ceci est une liste non exhaustive. Les vrais ne sont pas là.)</div>

                        </br></br>
                        <div class="thanks-par">Et enfin merci à toi, lecteur de ces lignes. Ta patience est d’or. Ta curiosité est un gouffre sans fin (pour preuve tu lis ces lignes de remerciements jusqu’au bout. Fou que tu es). Ou alors ta souris est cassé, ou tu as atterris ici par hasard, tu cherchais à acheter un frigo en ligne et tu t’es perdue dans le cyber-espace.</div>
                        <div class="thanks-par">Ou tu es simplement un aficionados de la parenthèse.</div>


                        </br></br>
                        <div class="thanks-par">Quoiqu’il en soit ton intérêt pour ma musique me donne le courage de m’entêter dans la poursuite de mes aspirations artistiques.</div>
                        <div class="thanks-par">Et je tiens publiquement à te témoigner mon admiration pour ta vivacité d’esprit et ton bon goût.</div>
                        <div class="thanks-par">Grand bien vous fasse</div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>


<div class="scroller" id="bonus-scroller">
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
    $('#hideshow-gallery').click(function() {
        $('.content-gallery').toggle("slide");
    });
});

$(document).ready(function() {
    $('#hideshow-chique').click(function() {
        $('.content-chique').toggle("slide");
    });
});

$(document).ready(function() {
    $('#hideshow-les').click(function() {
        $('.content-les').toggle("slide");
    });
});

$(document).ready(function() {
    $('#hideshow-moi').click(function() {
        $('.content-moi').toggle("slide");
    });
});


$(document).ready(function() {
    $('#hideshow-thanks').click(function() {
        $('.content-thanks').toggle("slide");
    });
});



</script>

</body>
</html>