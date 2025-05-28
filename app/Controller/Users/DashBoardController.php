<?php
class DashBoardController {
    public function dashboard(){
        $categoryModel = new CategoryUserModel();
        $listCategory = $categoryModel -> getCategoryDashboard(); 
    }
}