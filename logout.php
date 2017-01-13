<?php
require 'inc.server.php';
session_destroy();
header('Location: '.$http_referer);
?>