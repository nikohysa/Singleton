<?php

namespace Singleton;

abstract class AbstractSingleton implements SingletonInterface {

	private static $instance;

	private function __construct() {

	}
	final public static function getInstance() {
		if (static::$instance === null) {
			static::$instance = new static();
		}
		return static::$instance;
	}
}
