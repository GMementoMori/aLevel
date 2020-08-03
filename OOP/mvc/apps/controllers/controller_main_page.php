<?php
  session_start();
  require_once("../views/button_exit.phtml");
  class Content
  {
	protected $url;

	function __construct($url)
	{
		if (isset($url)) {
           $this -> url = $url;
		}
	}
	public function get_content(){
		require_once("../../public/html/header.phtml");
		require_once("../views/{$this -> url}.phtml");
		require_once("../../public/html/footer.phtml");
	}
	public function death(){
        header("Location: ../../index.php");
        session_destroy();
	}
  }

  $obj = new Content($_SESSION['url']);
  $obj -> get_content();

  if (isset($_POST['exit'])) {
	$obj -> death();
  }


?>