<?php
namespace Gt\Dom\Facade;

use Gt\Dom\HTMLCollection;
use Gt\Dom\HTMLFormControlsCollection;

/**
 * The callback passed to HTMLCollection's constructor must return a NodeList,
 * making the HTMLCollection "live".
 */
class HTMLCollectionFactory extends HTMLCollection {
	public static function create(callable $callback):HTMLCollection {
		return new HTMLCollection($callback);
	}

	public static function createHTMLFormControlsCollection(
		callable $callback
	):HTMLFormControlsCollection {
		return new HTMLFormControlsCollection($callback);
	}
}
