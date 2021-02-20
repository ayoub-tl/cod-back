<?php

function validate($filename, $path,$command){
  // echo$path."<br>".$filename."<br>";
  $result=2084;
  $c=[];
  // echo $filename;
  shell_exec(' cd '.$path);
 shell_exec(' cd '.$path.' &&gcc '.$filename.'.c -o '.$filename.'.exe' );
 // echo ' cd '.$path.' &&gcc '.$filename.'.cpp -o '.$filename.'.exe';
shell_exec('cd '.$path.' &&gcc '.$filename.'.cpp -o '.$filename.'.exe' );
shell_exec(' cd '.$path.' &&javac '.$filename.'.java' );
$filename= ltrim($filename,' ');
if($command=='c'||$command=='cpp')
 {
   $b=shell_exec($path.''.$filename.'.exe');
//  echo "C:/Users/PC/Desktop/xamp/htdocs/New_folder/cod/".$path.''.$filename.'.exe';
  // exec($path.''.$filename.'.exe',$c);
 }
 else if($command=='java')
 $b=shell_exec('java '.$path.''.$filename);
 else $b=shell_exec('py  '.$path.''.$filename.'.py');
 // echo ' cd '.$path.' &&gcc '.$filename.'.c -o '.$filename.'.exe';
 // echo $b;
 // echo $path.$filename.'.exe';
// print_r($c);
 if($b!=$result) return false;
else return true;
}

 ?>
