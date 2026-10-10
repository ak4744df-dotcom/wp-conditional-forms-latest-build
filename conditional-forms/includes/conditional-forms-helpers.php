<?php
/**
 * Utilidades auxiliares para Conditional Forms.
 *
 * @package Conditional_Forms
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function conditional_forms_helper_defaults() {
	return array(
		'cache'      => true,
		'debug'      => false,
		'version'    => '1.0.0',
	);
}
