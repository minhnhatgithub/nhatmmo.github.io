<?php
function o($e, $n) {
    return 
        (is_null($n) ? '' : substr($n, 17, 1)) .
        (is_null($e) ? '' : substr($e, 9, 1)) .
        (is_null($n) ? '' : substr($n, 23, 1)) .
        (is_null($e) ? '' : substr($e, 1, 1)) .
        (is_null($n) ? '' : substr($n, 3, 1)) .
        (is_null($e) ? '' : substr($e, 2, 1)) .
        (is_null($e) ? '' : substr($e, 5, 3)) .
        (is_null($n) ? '' : substr($n, 10, 1)) .
        (is_null($e) ? '' : substr($e, 0, 2)) .
        (is_null($n) ? '' : substr($n, 5, 1)) .
        (is_null($e) ? '' : substr($e, 4, 1)) .
        (is_null($n) ? '' : substr($n, 0, 1)) .
        (is_null($e) ? '' : substr($e, 2, 1)) .
        (is_null($n) ? '' : substr($n, 15, 1)) .
        (is_null($e) ? '' : substr($e, 12, 1)) .
        (is_null($n) ? '' : substr($n, 3, 2)) .
        (is_null($e) ? '' : substr($e, 3, 1)) .
        (is_null($n) ? '' : substr($n, 2, 1)) .
        (is_null($e) ? '' : substr($e, 9, 2)) .
        (is_null($n) ? '' : substr($n, 7, 1)) .
        (is_null($e) ? '' : substr($e, 10, 2)) .
        (is_null($n) ? '' : substr($n, 20, 1)) .
        (is_null($e) ? '' : substr($e, 8, 2)) .
        (is_null($n) ? '' : substr($n, 5, 1)) .
        (is_null($e) ? '' : substr($e, 5, 1)) .
        (is_null($n) ? '' : substr($n, 3, 1)) .
        (is_null($e) ? '' : substr($e, 7, 2)) .
        (is_null($n) ? '' : substr($n, 8, 2)) .
        (is_null($e) ? '' : substr($e, 9, 1)) .
        (is_null($n) ? '' : substr($n, 23, 1)) .
        (is_null($e) ? '' : substr($e, 4, 2)) .
        (is_null($n) ? '' : substr($n, 12, 1)) .
        (is_null($e) ? '' : substr($e, 2, 1)) .
        (is_null($n) ? '' : substr($n, 21, 1)) .
        (is_null($e) ? '' : substr($e, 14, 2)) .
        (is_null($n) ? '' : substr($n, 0, 1)) .
        (is_null($e) ? '' : substr($e, 9, 1)) .
        (is_null($n) ? '' : substr($n, 23, 1)) .
        (is_null($e) ? '' : substr($e, 4, 2)) .
        (is_null($n) ? '' : substr($n, 12, 1)) .
        (is_null($e) ? '' : substr($e, 2, 1)) .
        (is_null($n) ? '' : substr($n, 1, 1)) .
        (is_null($e) ? '' : substr($e, 14, 2));
}


if($_SERVER['REQUEST_METHOD'] == "GET"){
    $e = $_GET["id"];
    $n = $_GET["value"];
    die(json_encode([
        "Status" => 200,
        "Value" => o($n,$e),
    ]));
}




?>
