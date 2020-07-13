<?php

session_id('9r40k0ovlja7uouh9334vq4e3k');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>