<?php

class DB
{
    var $insert_sql;
    var $update_sql;
    var $delete_sql;
    var $select_sql;
    var $retrieve_sql;

    private $conn;

    function DB()
    {
        $this->init();
    }

    function init()
    {
        $this->conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE, DB_PORT);
        if (!$this->conn) {
            die("MySql連線錯誤：" . mysqli_connect_error());
        }
        mysqli_select_db($this->conn, DB_DATABASE)
            || die('無法選擇資料庫：' . DB_DATABASE);
    }

    function setSQL()
    {
        $this->select_sql = "SELECT * FROM message ORDER BY id DESC";
        $this->insert_sql = "INSERT INTO message (name, title, content) VALUES ('$this->name', '$this->title', '$this->content')";
        $this->update_sql = "UPDATE message SET name = '$this->name', title = '$this->title', content = '$this->content' WHERE id = '$this->id'";
        $this->delete_sql = "DELETE FROM message WHERE id = '$this->id'";
    }

    function Insert()
    {
        if (!empty($_POST['name']) && !empty($_POST['title']) && !empty($_POST['content'])) {
            $this->setSQL();
            $result = mysqli_query($this->conn, $this->insert_sql);
            mysqli_close($this->conn);
            return $result;
        }
    }

    function Update()
    {
        $this->setSQL();
        return mysqli_query($this->conn, $this->update_sql);
    }

    function Delete()
    {
        $this->setSQL();
        return mysqli_query($this->conn, $this->delete_sql);
    }

    function Select()
    {
        $this->setSQL();
        return $this->recordset($this->select_sql);
    }

    function recordset($sql)
    {
        $rs = array();
        $result = mysqli_query($this->conn, $sql);
        if ($result) {
            while ($record = mysqli_fetch_assoc($result)) {
                array_push($rs, $record);
            }
            return $rs;
        } else {
            return false;
        }
    }
}
