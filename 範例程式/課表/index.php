<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        h1,
        tr {
            text-align: center;
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
            border: 1px solid black;
        }

        td {
            font-size: larger;
            width: 80px;
            border: 1px solid black;
        }
    </style>
</head>

<body>

    <?php
    $title = "1091課表";
    $class = array(
        "PE" => "保齡球",
        "liberalEdu" => "通識",
        "app" => "行動應用",
        "webSafe" => "網路安全",
        "HMI" => "人機介面"
    );
    $week = array(
        1 => "星期一",
        2 => "星期二",
        3 => "星期三",
        4 => "星期四",
        5 => "星期五"
    );
    $tr = "<tr>";
    $tr_end = "</tr>";

    $td = "<td>";
    $td_end = "</td>";

    echo "<div>";
    echo "<h1>" . $title . "</h1>";

    echo "<table>";

    // 標題
    echo "<thead><tr>";
    for ($i = 0; $i < 6; $i++) {
        if ($i > 0)
            echo $td . $week[$i] . $td_end;
        else
            echo $td . $td_end;
    }
    echo "</tr></thead>";
    // 標題 end

    echo "<tbody>";

    echo $tr;
    for ($i = 0; $i < 6; $i++) {
        if ($i === 0)
            echo $td . "一" . $td_end;
        else
            echo $td . $td_end;
    }
    echo $tr_end;

    echo $tr;
    for ($i = 0; $i < 6; $i++) {
        if ($i === 0)
            echo $td . "二" . $td_end;
        else if ($i === 5)
            echo $td . $class["HMI"] . $td_end;
        else
            echo $td . $td_end;
    }
    echo $tr_end;


    for ($i = 0; $i < 2; $i++) {
        echo $tr;
        if ($i === 0)
            echo $td . "三" . $td_end;
        else
            echo $td . "四" . $td_end;

        for ($j = 1; $j < 6; $j++) {
            if ($j === 1)
                echo $td . $class["PE"] . $td_end;
            else if ($j === 2)
                echo $td . $class["liberalEdu"] . $td_end;
            else if ($j === 5)
                echo $td . $class["HMI"] . $td_end;
            else
                echo $td . $td_end;
        }
        echo $tr_end;
    }

    echo $tr
        . '<td colspan="6">午休</td>'
        . $tr_end;

    for ($i = 0; $i < 3; $i++) {
        echo $tr;
        if ($i === 0)
            echo $td . "五" . $td_end;
        else if ($i === 1)
            echo $td . "六" . $td_end;
        else
            echo $td . "七" . $td_end;

        for ($j = 1; $j < 6; $j++) {

            if ($j === 2)
                echo $td . $class["app"] . $td_end;
            else
                echo $td . $td_end;
        }
        echo $tr_end;
    }

    for ($i = 0; $i < 3; $i++) {
        echo $tr;
        if ($i === 0)
            echo $td . "八" . $td_end;
        else if ($i === 1)
            echo $td . "九" . $td_end;
        else
            echo $td . "十" . $td_end;

        for ($j = 1; $j < 6; $j++) {

            if ($j === 3)
                echo $td . $class["webSafe"] . $td_end;
            else
                echo $td . $td_end;
        }
        echo $tr_end;
    }

    echo $tr;
    for ($i = 0; $i < 6; $i++) {
        if ($i === 0)
            echo $td . "十一" . $td_end;
        else
            echo $td . $td_end;
    }
    echo $tr_end;

    echo "</tbody>";

    echo "</table>";

    echo "</div>";
    ?>

</body>

</html>