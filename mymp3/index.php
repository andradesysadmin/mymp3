<?php

    namespace App;
    session_start();
    include('app/views/mainview.php');
    $mainview = new MainView;
    include $mainview::view('login');
