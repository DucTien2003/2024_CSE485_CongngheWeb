<?php
require_once APP_ROOT . '/app/models/User.php';
require_once APP_ROOT . '/app/config/database.php';

class HomeService
{
    public function getHomeInfo()
    {
        $conn = connectDB();
        $users = [];
        if ($conn) {
        } else {
            return [];
        }
    }
}
