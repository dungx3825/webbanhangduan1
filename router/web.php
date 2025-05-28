<?php
$role = isset($_GET['role']) ? $_GET['role'] : 'user';
$act = isset($_GET['']) ? $_GET['act'] : "";

if ($role == 'users') {
    switch ($act) {
        case ''; {
                $dashBoardController = new DashBoardController();
                $dashBoardController->dashboard();
                break;
            }
        case 'login'; {
                $loginController = new LoginUserController();
                $loginController->login();
            }
    }
}
