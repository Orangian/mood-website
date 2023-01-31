<?php $include = "newstemplate"; include("header.php");?>
        <main>
            <!-- Inner Container -->
            <div class="inner">
                <img src=<?= $imgsrc ?> alt=<?= $imgalt ?>>
                <h2 class="heading"><?= $titlefancy ?></h2>
                    <a href="<?= $category ?>.php" class="nounderline"><p class="scrolltextcategory subhead" id="scrollgalleryleftcategory"><?= $categoryfancy ?></p></a>
                    <div class="subhead news"><?= $date ?></div>
                    <p class="text news"><?= $text ?></p>
            </div>
        </main>

<?php include("footer.php");?>