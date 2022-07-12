<?php
include "api/db.php";
?>

<div class="row row-cols-5 g-3">
    <?php
    foreach ($dischi["response"] as $album) {
        $img = $album["poster"];
        $title = $album["title"];
        $author = $album["author"];
        $year = $album["year"];
        /* var_dump($img); */
    ?>
        <div class="col">
            <div class="card text-center">
                <div class="box_img">
                    <img class="w-100 text-white" src="<?php echo $img ?>" alt="Album image: <?php echo $title ?>">
                </div>
                <h4 class="text-white fw-bold text-uppercase"><?php echo $title ?></h4>
                <div class="mt-3">
                    <h6><?php echo $author ?></h6>
                    <h6><?php echo $year ?></h6>
                </div>
            </div>
        </div>
    <?php } ?>

</div>