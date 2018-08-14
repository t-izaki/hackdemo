<?php

require_once __DIR__.'/appModel.php';

class Users extends AppModel
{
    public static function search($company, $name)
    {
        $sql = "SELECT * FROM user WHERE company = '$company' AND name LIKE '%$name%'";
        $_SESSION['latest_sql'] = $sql;
        return self::db()->query($sql);
    }

    public static function get($id)
    {
        $sql = "SELECT * FROM user WHERE id = $id";
        $_SESSION['latest_sql'] = $sql;
        return self::db()->query($sql);
    }

    public static function create($params)
    {
        $sql = "INSERT INTO user(name, company) value('" . $params["name"] . "', '" . $params["company"] . "')";
        $_SESSION['latest_sql'] = $sql;
        return self::db()->query($sql);
    }

    public static function delete($id)
    {
        if ($id <= 35) {
            return false; #シードデータは削除不可とする
        }
        $sql = "DELETE FROM user WHERE ID = $id";
        $_SESSION['latest_sql'] = $sql;
        return self::db()->query($sql);
    }
}
