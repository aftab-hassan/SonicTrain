<h3>Result:</h3>
<?php
$i=0;
extract($_POST);

///
/*$row = 1;
if (($uploadhandle = fopen("uploads/defaultinput.csv", "r")) !== FALSE) {
    //while (($data = fgetcsv($uploadhandle, 1000, ",")) !== FALSE) {
    $data = fgetcsv($uploadhandle, 1000, ",");
    $data = fgetcsv($uploadhandle, 1000, ",");
        $num = count($data);
        echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
    fclose($uploadhandle);
}*/
echo "<br>";
///

$my_file = 'predsFile.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
echo $_POST['fname']."<br>";
		  while($i<150)
		  {
		  $check="item".$i;
		  if(isset($$check))
		  {
		  $$check=$_POST['item'.$i]."\n";;
		/*  echo $$check;*/
		fwrite($handle, $$check);
		 


/*while($data = fgetcsv($handle, 1000, ","))
		  {
		  if($c==2)
		  {
		  echo $data[$i];
		  break;
		  }
		  $c++;
		  }
		  */
		  
		  
		  }
		  $i++;
		  }
		/*  $my_file = 'file.txt';
		$myfile = fopen($my_file, "r") or die("Unable to open file!");
 while($a=fread($myfile,filesize($my_file)))
 echo $a;*/
		  /*fclose($handle);
$debugfile = 'debugfile.txt';
$debugfilehandle = fopen($debugfile,'w') or die('Could not open'.$debugfile);
fwrite($debugfilehandle,print_r($data));
fclose($debugfilehandle);*/
		  ?>
