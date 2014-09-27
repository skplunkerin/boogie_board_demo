<div class="row">
  <div class="large-12 columns">
    <img src="<?php echo $geoheader["cta_image_1"]; ?>">
    <hr>
  </div>
</div>
 
<div class="row">
  <div class="large-12 columns">
    <h4>Products</h4>
    <div class="row">
      <div class="large-4 columns">
        <a href="<?php echo BASE_URL; ?>products/1">
          <img src="<?php echo $geoproducts['product_image_1']; ?>">
        </a>
      </div>
      
      <div class="large-4 columns">
        <p><?php echo $geoproducts['product_intro_1']; ?></p>
        <a href="<?php echo BASE_URL; ?>products/1"><?php echo $geoproducts['product_title_1']; ?></a>
      </div>

      <div class="large-4 columns">
        <p><?php echo $geoproducts['product_intro_2']; ?></p>
        <a href="<?php echo BASE_URL; ?>products/2"><?php echo $geoproducts['product_title_2']; ?></a>
      </div>
    </div>
  </div>
</div>
<br />
 
<div class="row">
  <div class="large-8 columns">
    <h4><?php echo $geoabout['title_1']; ?></h4>
    <p>
      <?php echo $geoabout['paragraph_1']; ?>
    </p>
    <p>
      <?php echo $geoabout['paragraph_2']; ?>
    </p>
    <a href="<?php echo BASE_URL; ?>welcome/about">Read more</a>
  </div>
  <div class="large-4 columns">
    <img src="<?php echo $geoabout['image_1']; ?>">
  </div>
</div>
