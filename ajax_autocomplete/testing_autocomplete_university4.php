<?php
$db = mysqli_connect("localhost", "root", "mysql", "autocomplete");

if (!empty($_GET["prev_uni_keyword"])) {
    $keyword = $_GET["prev_uni_keyword"];
    $sql = 'SELECT * FROM university_list WHERE university LIKE "%' . $keyword . '%"ORDER BY `university_code` ASC';
    $res = mysqli_query($db, $sql);
    $print = '<ul id="prev_uni">';
    if ($res) {
        while ($row = mysqli_fetch_assoc($res)) {
            $print .= '<li onclick="select_prev_uni(\'' . $row['university'] . '\')" >' . $row['university'] . '</li>';
        }
    }
    $print .= '</ul>';
    echo $print;
} else {
    $sql = 'SELECT * FROM university_list ORDER BY `university_code` ASC';
    $res = mysqli_query($db, $sql);
    $print = '<ul id="prev_uni">';
    if ($res) {
        while ($row = mysqli_fetch_assoc($res)) {
            $print .= '<li onclick="select_prev_uni(\'' . $row['university'] . '\')" >' . $row['university'] . '</li>';
        }
    }
    $print .= '</ul>';
    echo $print;
}
?>
