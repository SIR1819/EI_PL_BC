<?php
$users[]='ana';
$users[]='anabela';
$users[]='anabola';
$users[]='anabala';
$users[]='anali';
$users[]='anatomia';
$users[]='analise';
$users[]='analisa';
$users[]='ananas';

if (isset($_GET['username'])) {
    $user = trim($_GET['username']);
} else {
    $user = "";
}

$result = array();

if (in_array($user,$users)) {
    $result['status'] = false;
} else {
    $result['status'] = true;
}

echo json_encode($result);
?>