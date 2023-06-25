<?php
// 获取通过GET请求传递的参数值
if (isset($_GET['name'])) {
    $name = $_GET['name'];
    echo "Hello, " . $name . "!";
} else {
    echo "Name parameter is missing.";
}
?>
