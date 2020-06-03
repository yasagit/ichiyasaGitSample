<?php

require_once(LIBPATH. 'address.php');
require_once(LIBPATH.'Chromephp.php');

// echo  '<p>' .'addlist.php ' . date( "Y/m/d (D) H:i:s", time() ) ."</p>\n";
 echo "<pre>". 'post ' ;
print_r($_POST);
echo "</pre>";
echo "<pre>". 'session  ';
print_r($_SESSION);
echo "</pre>";
echo "<pre>". 'get  ';
   print_r($_GET);
 echo "</pre>";
//===========================================
// addlist   class
//===========================================
class post_check01 extends view  {
  //property
  var $smarty;
  //==========================================
  //  constructor
  //===========================================
  function __construct() {
      $this->smarty = parent::__construct();
  }  // end_construct
  //===========================================
  //  pamph 一覧表示
  //===========================================
  function main() {
      ChromePhp::log('post_check01');
	  //$this -> smarty -> assign('add_id', $addid);
	  $this -> smarty -> assign('xxx', 'test');
	  $this -> smarty -> display('head.html');
		//$add_ins->dbend();

        //--------------------------------------------------------
  } // end_fucntion

} // end_class
 ?>

