<?php
session_start();
$username = "";
$email = "";
$errors = [];

$conn = new mysqli('localhost', 'root', '', 'int301');
