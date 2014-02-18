<?php

class RitaTools{

	public static $libs_callbacks = array();

/**
 * RitaTools::isLocalHost()
 * 
 * @return void
 */
	public static function inLocalhost() {
		
		
		if (strpos(env('REMOTE_ADDR'),'127.') === false) {
			return false;
		}
		return true;
	}





/**
 * RitaTools::libRepo()
 * 
 * @param mixed $name
 * @param bool $callback
 * @return
 */
	public static function libRepo($name, $callback = false) {
		
		if ($callback !== false and is_callable($callback)) {
			static::$libs_callbacks[$name] = $callback;
		} else {
			return static::$libs_callbacks[$name];
		}
		
	}
	
}