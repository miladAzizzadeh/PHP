<?php
require_once('main.php');
session_destroy();
header("Location: index.php");