<?php
session_start();
session_destroy();
header('Location: Test2.html');
?>