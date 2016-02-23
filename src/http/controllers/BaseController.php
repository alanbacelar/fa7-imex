<?php 

namespace ImEx\Http\Controllers;

use Twig_Environment;
use Twig_Loader_Filesystem;

class BaseController extends Twig_Environment {
	private $_loader;

	function __construct() {
		$views_path = __DIR__ . '/../views';
		parent::__construct(new Twig_Loader_Filesystem($views_path));
	}

	function index() {
		return $this->render('index.html', array('name' => 'ImEx'));
	}
}