<div class="box-left mr">
  <div class="row mb">
    <div class="banner">
      <img src="products/1004.jpg" alt="">
    </div>
  </div>
  <div class="row1">

    <?php

    for ($i = 0; $i < count($spnew); $i++) {

      $product_name = $spnew[$i]["name"];
      $product_price = $spnew[$i]["price"];
      $name_image = $spnew[$i]["img"];
      $image = $image_path . $name_image;
      $id =  $spnew[$i]["id"];
      $url_productDetail = "index.php?act=productDetail&id=$id";

    ?>
      <div class="box-products ">
        <div class="row img"> <img src="<?= $image ?>" alt=""></div>
        <p><?= number_format($product_price); ?></p>
        <a href="#">
          <?= $product_name ?>
        </a>
      </div>

    <?php } ?>


   
  </div>
</div>

<?php
include "box_right.php";
?>