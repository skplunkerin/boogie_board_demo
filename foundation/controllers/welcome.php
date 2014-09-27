<?php

class Welcome {
  /* private $_vars; */

  public function __construct(){
    $current_page = '';
  }

  private function load_view( $page = 'home', $title = 'Boogie Board', $head_foot = TRUE ){
    # Set geomaticly content
    global $geomaticly;
    $geonav = $geomaticly->module('HARwcNCWU7Rr9uPz'); # Navigation
    $geoheader = $geomaticly->module('F9w6XqkDpCiFts8k'); # Header
    $geofooter = $geomaticly->module('CEmWNBOVEkJbmbBZ'); # Footer
    $geoproducts = $geomaticly->module('4q6YTMsOFduabnOM'); # Products
    $geoabout = $geomaticly->module('NYtN5tUhbicFNjPv'); # About us

    $current_page = $page;

    if ($head_foot){
      # Load default header/footer along with page
      include 'views/_inc/_header.inc';
      include 'views/welcome/' . $page . '.php';
      include 'views/_inc/_footer.inc';
    } else {
      # Just load page, don't load default header/footer
      include 'views/welcome/' . $page . '.php';
    }
  }

  public function index( $variables ){
    $this->load_view( 'home' );
  }

  public function about( $variables ){
    $this->load_view( 'about', 'About Us | Boogie Board' );
  }
}
