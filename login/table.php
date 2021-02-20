<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
$host =  'localhost';
 $user = 'root';
 $password = '';
 $dbname = 'cod';
 $dsn = 'mysql:host='. $host .';dbname='. $dbname;
 $pdo = new PDO($dsn, $user, $password);
$sql="SELECT users.user_name,users.try_army,users.coorect_army,users.try_bomberan,users.coorect_bomberan,users.try_chess,users.coorect_chess,users.coorect_chess,users.try_coor,users.coorect_coor,users.try_gift,users.coorect_gift,users.try_google,users.coorect_google,users.try_grid,users.coorect_grid,users.try_meeting,users.coorect_meeting,points FROM `users` ORDER BY points DESC ";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$row= $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($row,JSON_PRETTY_PRINT);
// print_r($row)
 ?>
