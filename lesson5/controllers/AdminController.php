<?php

class AdminController {
    public function News_insert($data)
    {
        $data = $_POST;
        $res = Admin::News_insert($data);
    }
}