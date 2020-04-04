<?php
require_once("core/error.php");
class Router
{
	protected $url;
	function __construct($url)
	{
		if (isset($url)) {
           $this -> url = $url;
		}
	}
	public function call_controller(){
		session_start();
		$_SESSION['url'] = $this -> url;
		header('Location:apps/controllers/controller_main_page.php');
	}
}
require_once("apps/views/form.phtml");

if (isset($_POST['url'])) {
	$obj = new Router($_POST['url']);
	$obj -> call_controller();
}
unset($_POST);
?>