<?php

    namespace App;
    session_start();
    include(__DIR__ . '/app/views/mainview.php');
    $mainview = new MainView;
    include(__DIR__ . '/app/views/pages/login.php');
