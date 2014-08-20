<?php
$geonav = $geomaticly->module('HARwcNCWU7Rr9uPz');
?>
<div class="row">
  <div class="large-3 columns">
    <h1>
      <a href="<?php echo BASE_URL; ?>">
        <img src="http://placehold.it/400x100&text=Logo">
      </a>
    </h1>
    </div>
    <div class="large-9 columns">
      <ul class="button-group right">
        <li><a href="<?php echo BASE_URL; ?>" class="button"><?php echo $geonav["home"]; ?></a></li>
        <li><a href="<?php echo BASE_URL; ?>products" class="button"><?php echo $geonav["products"]; ?></a></li>
        <li><a href="<?php echo BASE_URL; ?>welcome/about" class="button"><?php echo $geonav["about"]; ?></a></li>
        <li><a href="<?php echo BASE_URL; ?>contact" class="button"><?php echo $geonav["contact"]; ?></a></li>
      </ul>
  </div>
</div>
