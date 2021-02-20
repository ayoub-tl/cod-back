<?php

function validate($filename, $path,$command){
  // echo$path."<br>".$filename."<br>";
  $result=7130034;
  // echo $filename;
  shell_exec(' cd '.$path);
 shell_exec(' cd '.$path.' &&gcc '.$filename.'.c -o '.$filename.'.exe' );
shell_exec('cd '.$path.' &&gcc '.$filename.'.cpp -o '.$filename.'.exe' );
shell_exec(' cd '.$path.' &&javac '.$filename.'.java' );
$filename= ltrim($filename,' ');
// echo"b=$b";
if($command=='c'||$command=='cpp')
 {
// exec($path.''.$filename.'.exe',$c);
   $b=shell_exec($path.''.$filename.'.exe');
 // echo $path.''.$filename.'.exe';
// printr($c);
}
 else if($command=='java')
 $b=shell_exec('java '.$path.''.$filename);
 else $b=shell_exec('py  '.$path.''.$filename.'.py');
 // echo ' cd '.$path.' &&gcc '.$filename.'.c -o '.$filename.'.exe';
 // echo $b;
 // echo $path.$filename.'.exe';
// echo $b;
 if($b!=$result) return false;
else return true;
}

 ?>
