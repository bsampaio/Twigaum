<?php
namespace Library;

class Utils {

	public static function getTwig() {

		$loader = new \Twig_Loader_Filesystem([
			__DIR__ . '/../app/view/',
			__DIR__ . '/../templates/'
		]);

		$twig = new \Twig_Environment($loader, array(
		    //'cache' => '/path/to/compilation_cache',
		));

		return $twig;
	}
}