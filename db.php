<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
        header('Content-Type: text/html; charset=utf-8'); // utf-8인코딩

        $db = new mysqli("localhost","root","!as123123","web");
        $db->set_charset("utf8");

        
        if (!function_exists('mq')) {
            function mq($sql)
            {
                global $db;
                return $db->query($sql);
            }
        }
    }
?>