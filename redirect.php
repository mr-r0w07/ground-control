<?php

require_once('config.php');

validate_secret();

$url = array_key_exists('url', $_GET) ? $_GET['url'] : '';

if(!is_string($url) || strlen($url) == 0) {
  halt_for_usage('/redirect.php?url=https://external-link.com/');
}

header('Location: ' . $url);