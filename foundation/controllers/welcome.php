<?php

class Welcome {
  /* private $_vars; */

  public function __construct(){
    $current_page = '';
  }

  public function show( $page = 'home', $title = 'Boogie Board', $head_foot = TRUE ){
    if ($page === 'home'){
      $currentPage = 'main';
    } else {
      $currentPage = 'main';
    }

    if ($head_foot){
      // Load default header/footer along with page
      include 'views/_inc/_header.inc';
      include 'views/welcome/' . $currentPage . '.php';
      include 'views/_inc/_footer.inc';
    die('hams');
    } else {
      // Just load page, don't load default header/footer
      include 'views/welcome/' . $currentPage . '.php';
    }
  }

  public function index( $variables ){
    $this->show( 'home', 'Boogie Board', TRUE );
  }
}
