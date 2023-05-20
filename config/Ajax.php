<?php

include_once 'init.php';

if (isset($_POST['action'])){
    $action = $_POST['action'];

    switch ($action) {

        case 'add_data':

            break;

        default:
            echo "Unknown request";
    }
}