<main><?php
    foreach($dischi as $card){ ?>
        <h2><?= $card["album"] ?></h2>
        <div><?= $card["author"] ?></div> 
        <div><?= $card["year"] ?></div><?php       
    } ?>
</main>