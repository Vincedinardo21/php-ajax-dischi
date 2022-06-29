<main><?php
    foreach($dischi as $card){ ?>
        <img src="<?= $card["poster"] ?>" alt="">
        <h2><?= $card["title"] ?></h2>
        <div><?= $card["author"] ?></div> 
        <div><?= $card["year"] ?></div><?php       
    } ?>
</main>