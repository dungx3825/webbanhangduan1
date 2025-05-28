<?php
session_start();

include 'app/database/database.php';
include 'app/Controller/Users/LoginUserController.php';
include 'app/Controller/Users/DashBoardController.php';

const BASE_URL = "http://localhost/duan1/";
include 'router/web.php';
?>