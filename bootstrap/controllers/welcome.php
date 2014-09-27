<?php

class Welcome {
  /* private $_vars; */

  public function __construct(){
    $current_page = '';
  }

  public function load_view( $page = 'home', $title = 'Boogie Board', $head_foot = TRUE ){
    # Set geomaticly content
    global $geomaticly;
    $geonav = $geomaticly->module('HARwcNCWU7Rr9uPz'); # Navigation
    $geoheader = $geomaticly->module('F9w6XqkDpCiFts8k'); # Header
    $geofooter = $geomaticly->module('CEmWNBOVEkJbmbBZ'); # Footer
    $geoproducts = $geomaticly->module('4q6YTMsOFduabnOM'); # Products
    $geoabout = $geomaticly->module('NYtN5tUhbicFNjPv'); # About us
    $geocontact = $geomaticly->module('yXrd95G8JTJtFdcD'); # Contact Us

    if ($page === 'home'){
      $currentPage = 'main';
    } else {
      $currentPage = 'main';
    }

    if ($head_foot){
      # Load default header/footer along with page
      include 'views/_inc/_header.inc';
      include 'views/welcome/' . $currentPage . '.php';
      include 'views/_inc/_footer.inc';
    } else {
      # Just load page, don't load default header/footer
      include 'views/welcome/' . $currentPage . '.php';
    }
  }

  public function index( $variables ){
    $this->load_view( 'home', 'Boogie Board', TRUE );
  }
}
