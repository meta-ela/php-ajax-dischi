<?php
include "db/db.php";
?>

<div class="row row-cols-5 g-3">
    <div class="col" v-for="album in albumList">
        <div class="card text-center">
            <div class="box_img">
                <img class="w-100 text-white" :src="album.poster" :alt="album.author">
            </div>
            <h4 class="text-white fw-bold text-uppercase">{{album.title}}</h4>
            <div class="mt-3">
                <h6>{{album.author}}</h6>
                <h6>{{album.year}}</h6>
            </div>
        </div>
    </div>

</div>