<?php
include("Passwords.php");
function auth(){
    global $passwords;
    if(!isset($_SESSION['admin']) || $_SESSION['admin'] === 0){
        if(get('admin:auth')){
            if (!isset($_SERVER['PHP_AUTH_USER'])) {
                header("WWW-Authenticate: Basic realm=\"Go Round - Admin Access\"");
                header("HTTP/1.0 401 Unauthorized");
                echo '401 Unauthorized - No username/password supplied.';
                exit;
            } else {
                if(!isset($passwords[$_SERVER['PHP_AUTH_USER']]) || md5($_SERVER['PHP_AUTH_PW']) != $passwords[$_SERVER['PHP_AUTH_USER']]){
                    header("WWW-Authenticate: Basic realm=\"Go Round - Admin Access\"");
                    header("HTTP/1.0 401 Unauthorized");
                    echo "401 Unauthorized - Incorrect username/password.";
                    exit;
                }
            }
        }
        $_SESSION['user'] = $_SERVER['PHP_AUTH_USER'];
        $_SESSION['thing'] = md5(
            $_SESSION['user'] . $_SERVER['PHP_AUTH_PW']
        );
        $_SESSION['admin'] = 1;
    } else {
        if($_SESSION['thing'] !== md5(
            $_SESSION['user'] . $passwords[$_SESSION['user']]
        )){
        $_SESSION['admin'] = 0;
        header("WWW-Authenticate: Basic realm=\"Go Round - Admin Access\"");
        header("HTTP/1.0 401 Unauthorized");
        exit('401 Unauthorized - Session authentication failed.');
        }
    }
}