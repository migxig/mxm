<?php

namespace mxm;

class mxm {
	private static $rootPath = '';
	private static $configPath = '';

	public static function run($rootPath, $configPath) {
		self::$rootPath = $rootPath;
		self::$configPath = $configPath;
		spl_autoload_register(__CLASS__ . '::autoLoadFile');

		return route::jump();
	} 

	public static function autoLoadFile($class) {
		$file = str_replace('\\', '/', $class).".class.php";

		$pathArr = [
			self::$rootPath,
			self::$rootPath.'/apps',
		];

		foreach ($pathArr as $path) {
			$classPath = $path.'/'.$file;
			if(is_file($classPath)) {
				require_once($classPath);
			}
		}
	}


}
?>