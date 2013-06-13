<?php
	if (!isset($header)) $header = 'template/header';
	if (!isset($footer)) $footer = 'template/footer';
	$this->load->view($header);
	$this->load->view($content);
	$this->load->view($footer);
?>