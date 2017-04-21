<?php include_once 'resource/session.php';
include_once 'resource/utilities.php';

session_destroy();
header('location: index.php');
