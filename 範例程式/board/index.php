<?php
include_once('Guestbook.php');

if (isset($_POST['Submit'])) {

    $obj = new Guestbook;

    // 將Guestbook物件各個屬性，設定為表單各相對欄位的資料
    $obj->setProperties();

    switch ($_POST['Submit']) {
        case 'insert':
            // 新增一筆留言的資料
            $obj->Insert() || die('無法新增留言，請返回上一頁重新嘗試');

            header('location:' . $_SERVER['HTTP_REFERER']);
            break;

        case 'update':
            // 新增一筆留言的資料
            $obj->Update() || die('無法修改留言，請返回上一頁重新嘗試');

            header('location:' . $_SERVER['HTTP_REFERER']);
            break;
        case 'delete':
            // 新增一筆留言的資料
            $obj->Delete() || die('無法刪除留言，請返回上一頁重新嘗試');

            header('location:' . $_SERVER['HTTP_REFERER']);
            break;
        default:
            die('無效的操作，請返回上一頁重新嘗試');
            break;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>留言板</title>
</head>

<body>
    <div>
        <h1>新增留言</h1>
        <form method="POST" action="">
            <table>

            </table>
            暱稱：<input type="text" name="name" required="required" /><br>
            標題：<input type="text" name="title" required="required" /><br>
            內容：<br>
            <textarea rows="10" cols="20" name="content" required></textarea>
            <button type="submit" name="Submit" value="insert">送出</button>
        </form>
    </div>
    <hr />
    <hr />
    <div>
        <h1>留言板</h1>
        <hr />
        <?php
        $obj = new Guestbook;
        $recordset = $obj->Select();
        $num = count($recordset);
        foreach ($recordset as $record) { ?>
            <form name="form1" method="post" action="">
                <table>
                    <tr>
                        <td>
                            <h2>第<?= $num ?>樓</h2>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>姓名：</div>
                        </td>
                        <td><input name="name" type="text" id="name" value=<?= $record['name']; ?> required="required"></td>
                    </tr>
                    <tr>
                        <td>
                            <p>標題：</p>
                        </td>
                        <td><input name="title" type="text" id="title" value=<?= $record['title']; ?> required="required"></td>
                    </tr>
                    <tr>
                        <td>
                            <div>內容：</div>
                        </td>
                        <td><textarea name="content" cols="48" rows="5" id="content" required><?= $record['content']; ?></textarea></td>
                    </tr>
                </table>
                <div>
                    <input name="id" type="hidden" value=<?= $record['id']; ?>>
                    <button type="submit" name="Submit" value="update">修改</button>
                    <button type="submit" name="Submit" value="delete">刪除</button>
                </div>
            </form>
            <hr />
        <?php
            $num -= 1;
        }
        ?>
    </div>
</body>

</html>