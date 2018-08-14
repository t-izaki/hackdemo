<?php

function require_unauthenticated()
{
    session_start();
    if (isset($_SESSION['username'])) {
        header('Location: index.php');
        exit;
    }
}

function require_authenticated()
{
    session_start();
    if (!isset($_SESSION['username'])) {
        header('Location: login.php');
        exit;
    }
}

function authenticate($username, $password)
{
    $admin = Admins::checkAuth($username, $password)->fetch_assoc();
    if (isset($admin)) {
        set_session($admin);
        return true;
    } else {
        return false;
    }
}

function set_session($admin)
{
    $_SESSION['username'] = $admin['name'];
    $_SESSION['company'] = $admin['company'];
}
