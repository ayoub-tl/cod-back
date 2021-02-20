<?php
header('Access-Control-Allow-Origin: *');
// header('Content-Type: application/json');
$host =  'localhost';
 $user = 'root';
 $password = '';
 $dbname = 'cod';
 $dsn = 'mysql:host='. $host .';dbname='. $dbname;
 $pdo = new PDO($dsn, $user, $password);
 // $_POST['algo']='grid';
 // $_POST['user_id']=1;
 // $_POST['user_token']=6;
 // $_POST['result']='true';
 if(isset($_POST['algo'])&&isset($_POST['user_id'])&&isset($_POST['user_token'])&&isset($_POST['result']))
 $exo=$_POST['algo'];
 $team_id=($_POST['user_id']);
 if($_POST['result']=='true')
 $sql = ' UPDATE users SET  users.try_'.$exo.' = users.try_'.$exo.' +1,coorect_'.$exo.'="true"  WHERE  users.user_id='.$team_id;
 else  $sql = ' UPDATE users SET  users.try_'.$exo.' = users.try_'.$exo.' +1,coorect_'.$exo.'="false"  WHERE  users.user_id='.$team_id;

echo $sql;
 $stmt = $pdo->prepare($sql);
 $stmt->execute();





 ?>
