<?php

    namespace App;

    class MainView{

        public static function view($file){
            return('app/views/pages/'.$file.'.php');
        }
    }