<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>留言板</title>

    <?php

    include("board.php");

    $board = new board();

    ?>
</head>

<body>
    <div>
        <div>
            <h1>留言板</h1>
        </div>
        <div>
            <form action="" method="POST">
                <p>名字：<input id="name" type="text" name="name"></p>
                <p>標題：<input id="title" type="text" name="title"></p>
                <p>內容：</p>
                <textarea id="content" name="content" cols="30" rows="10"></textarea>
                <button id="addMsg" name="submit" type="submit">送出</button>
            </form>
        </div>
    </div>

    <br />

    <div>
        <div>
            <h1>所有留言</h1>
        </div>
        <div id="allMessage">
            <?php

            if (isset($_POST["submit"])) {
                $msgData = array(
                    "name" => $_POST["name"],
                    "title" => $_POST["title"],
                    "content" => $_POST["content"]
                );
                $board->addMsg($msgData);
            }

            ?>
        </div>
    </div>
</body>

</html>