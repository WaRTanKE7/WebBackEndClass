<?php

include_once('config.php');
include_once('DB.php');

class Guestbook extends DB
{
    var $id;
    var $name;
    var $title;
    var $content;

    function Guestbook()
    {
        $this->DB();
    }

    function setProperties()
    {
        $this->id = htmlspecialchars(isset($_POST['id']) ? $_POST['id'] : "");
        $this->name = htmlspecialchars($_POST['name']);
        $this->title = htmlspecialchars($_POST['title']);
        $this->content = htmlspecialchars($_POST['content']);
    }
}
