<?php

class Welcome {
  /* private $_vars; */

  public function __construct(){
    $current_page = '';
  }

  private function show( $page = 'home', $title = 'Boogie Board', $head_foot = TRUE ){
    global $geomaticly;
    $current_page = $page;

    if ($head_foot){
      // Load default header/footer along with page
      include 'views/_inc/_header.inc';
      include 'views/welcome/' . $page . '.php';
      include 'views/_inc/_footer.inc';
    } else {
      // Just load page, don't load default header/footer
      include 'views/welcome/' . $page . '.php';
    }
  }

  public function index( $variables ){
    $this->show( 'home' );
  }

  public function about( $variables ){
    $this->show( 'about', 'About Us | Boogie Board' );
  }
}
