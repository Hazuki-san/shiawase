<?php

class URL {
	public static function Avatar() {
		global $URL;

		return isset($URL['avatar']) ? $URL['avatar'] : 'https://a.verge.moe';
	}

	public static function Server() {
		global $URL;

		return isset($URL['server']) ? $URL['server'] : 'https://verge.moe';
	}
	
	public static function Bancho() {
		global $URL;

		return isset($URL['bancho']) ? $URL['bancho'] : 'http://c.verge.moe';
	}
}
