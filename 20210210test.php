<!DOCTYPE html>
<html lang="en">
<?php
require_once 'connect.php';
$items = [
[
':code' => 'S00001',
':name' => 'コーラ',
':price' => 150,
':amount' => 500
],
[
':code' => 'T00001',
':name' => 'お茶',
':price' => 110,
':amount' => 800
],
[
':code' => 'T00002',
':name' => '紅茶',
':price' => 130,
':amount' => 300
],
];
$sql = "INSERT INTO items (code, name, price, amount, created_at) ";
$sql.= "VALUES (:code, :name, :price, :amount ,now())";
foreach ($items as $item) {
$prepare = $pdo->prepare($sql);
$results = $prepare->execute($item);
if ($prepare->execute($item)) {
echo '成功';
} else {
echo '失敗';
}
}