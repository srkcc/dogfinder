<?php
    $name = null;
    $doge = null;
    
    if (!empty($_GET['uname'])) $name = $_GET['uname'];
    else die('I need your name before you get your doge!');

    if (!empty($_GET['udoge'])) $doge = $_GET['udoge'];
    else die('I need your preferred doge!');

    function doge_response($doge) {
        switch ($doge) {
            case 'Shibe':
            case 'Golden':
            case 'Pom':
            case 'Sammy':
                echo 'Hey, ', $name, '! ', $doge, ' Doges are my favorite too!';
                break;
            default:
                echo 'Oh no...';
                break;
        }
    }

    function doge_image($doge) {
        switch ($doge) {
            case 'Shibe':
            case 'Golden':
            case 'Pom':
            case 'Sammy':
                echo $doge, 'img/', $doge, 'doge.jpg';
                break;
            default:
                echo 'img/angerydoge.jpg';
                break;
        }
    }