/**
 * External dependencies
 */
import 'bootstrap';

/**
 * Internal dependencies
 */
import hello from './modules/hello';

/* global $ */
$( document ).ready( () => {
	hello.init();
} );
