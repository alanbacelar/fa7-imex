<?php 

namespace ImEx\Core;

class Router {
	function add($route, callable $controller) {
		$this->route[$route] = $controller;
	}

	function run() {
		$server = $_SERVER;
		$info = 'PATH_INFO';
		$page = isset($server[$info]) ? $server[$info] : '/';
		echo $this->route[$page]();
	}
}