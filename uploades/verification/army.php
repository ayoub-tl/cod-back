<?php
function validate($filename, $path,$command){
  $input=[1,10,40,100,1000];
  $result=[1,5,17,73,977];
  // shell_exec(' cd '.$path);
 shell_exec(' cd '.$path.' &&gcc '.$filename.'.c -o '.$filename.'.exe' );
shell_exec('cd '.$path.' &&gcc '.$filename.'.cpp -o '.$filename.'.exe' );
shell_exec(' cd '.$path.' &&javac '.$filename.'.java' );
$filename= ltrim($filename,' ');
$inputfile='C:/Users/PC/Desktop/xamp/htdocs/New_folder/cod/uploades/verification/input.txt';
foreach ($input as $key => $value) {
  $f=fopen($inputfile,"w");
    fwrite($f,$value);
  if($command=='c'||$command=='cpp')
  {
    $b=shell_exec($path.''.$filename.'.exe<'.$inputfile);

}
  else if($command=='java')
  $b=shell_exec('java '.$path.''.$filename."<$inputfile ");
  else $b=shell_exec('py  '.$path.''.$filename.'.py< '.$inputfile );
  if($b!=$result[$key]) return false;
}
 return true;
}










 ?>
