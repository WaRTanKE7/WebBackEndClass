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
    echo "<thead>"
        . $tr
        . $td . $td_end
        . $td . $week[1] . $td_end
        . $td . $week[2] . $td_end
        . $td . $week[3] . $td_end
        . $td . $week[4] . $td_end
        . $td . $week[5] . $td_end
        . $tr_end
        . "</thead>";
    // 標題 end

    echo "<tbody>";

    echo $tr
        . $td . "一" . $td_end
        . $td . $td_end
        . $td . $td_end
        . $td . $td_end
        . $td . $td_end
        . $td . $td_end
        . $tr_end;

    echo $tr
        . $td . "二" . $td_end
        . $td . $td_end
        . $td . $td_end
        . $td . $td_end
        . $td . $td_end
        . $td . $class["HMI"] . $td_end
        . $tr_end;

    echo $tr
        . $td . "三" . $td_end
        . $td . $class["PE"] . $td_end
        . $td . $class["liberalEdu"] . $td_end
        . $td . $td_end
        . $td . $td_end
        . $td . $class["HMI"] . $td_end
        . $tr_end;

    echo $tr
        . $td . "四" . $td_end
        . $td . $class["PE"] . $td_end
        . $td . $class["liberalEdu"] . $td_end
        . $td . $td_end
        . $td . $td_end
        . $td . $class["HMI"] . $td_end
        . $tr_end;

    echo $tr
        . '<td colspan="6">午休</td>'
        . $tr_end;

    echo $tr
        . $td . "五" . $td_end
        . $td . $td_end
        . $td . $class["app"] . $td_end
        . $td . $td_end
        . $td . $td_end
        . $td . $td_end
        . $tr_end;

    echo $tr
        . $td . "六" . $td_end
        . $td . $td_end
        . $td . $class["app"] . $td_end
        . $td . $td_end
        . $td . $td_end
        . $td . $td_end
        . $tr_end;

    echo $tr
        . $td . "七" . $td_end
        . $td . $td_end
        . $td . $class["app"] . $td_end
        . $td . $td_end
        . $td . $td_end
        . $td . $td_end
        . $tr_end;

    echo $tr
        . $td . "八" . $td_end
        . $td . $td_end
        . $td . $td_end
        . $td . $class["webSafe"] . $td_end
        . $td . $td_end
        . $td . $td_end
        . $tr_end;

    echo $tr
        . $td . "九" . $td_end
        . $td . $td_end
        . $td . $td_end
        . $td . $class["webSafe"] . $td_end
        . $td . $td_end
        . $td . $td_end
        . $tr_end;

    echo $tr
        . $td . "十" . $td_end
        . $td . $td_end
        . $td . $td_end
        . $td . $class["webSafe"] . $td_end
        . $td . $td_end
        . $td . $td_end
        . $tr_end;

    echo $tr
        . $td . "十一" . $td_end
        . $td . $td_end
        . $td . $td_end
        . $td . $td_end
        . $td . $td_end
        . $td . $td_end
        . $tr_end;

    echo "</tbody>";

    echo "</table>";

    echo "</div>";
    ?>

</body>

</html>