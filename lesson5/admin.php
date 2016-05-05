<?php
require_once __DIR__ . '/autoload.php';

if (!empty($_POST)) {
    $data = $_POST;
    $admin = new AdminController();
    $admin->News_insert($data);
}



require_once __DIR__ . '/views/admin/admin.php';
