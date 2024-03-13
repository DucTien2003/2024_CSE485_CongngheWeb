<?php

require_once APP_ROOT . '/app/services/HomeService.php';

class HomeController
{
    public function index()
    {
        $homeService = new HomeService();
        // $employees = $employeeService->getAllEmployees();
        require APP_ROOT . '/app/views/home.blade.php';
    }
}
