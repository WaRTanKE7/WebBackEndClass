<?php
class board
{
    function addMsg($msgData)
    {
        if (!empty($msgData["name"]) &&  !empty($msgData["title"]) && !empty($msgData["content"])) {
            echo "<div>"
                . "<h2>" . $msgData["name"] . "</h2>"
                . "<h3>" . $msgData["title"] . "</h3>"
                . "<p>" . $msgData["content"] . "</p>";
        }
    }
}
