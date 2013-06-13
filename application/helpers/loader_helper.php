<?php

function load_js($script, $path='js/') {
		return '<script type="text/javascript" src="'.$path.$script.'"></script>';
	}

function load_css($css, $path='css/') {
	return '<link rel="stylesheet" type="text/css" media="screen" href="'.$path.$css.'">';
}