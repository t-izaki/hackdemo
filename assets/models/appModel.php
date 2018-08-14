<?php

class AppModel
{
    protected static function db()
    {
        return new mysqli('localhost', 'root', 'root', 'hackdemo');
    }
}
