<?php
echo $_FILES["my_file"]["tmp_name"];
echo "<br/>";
echo $_FILES["my_file"]["name"];

if(move_uploaded_file( $_FILES["my_file"]["tmp_name"],$_FILES["my_file"]["name"]))
			echo "success";
else
			echo "error";	
echo "<img src='". $_FILES["my_file"]["name"] ."' />";			
			
if(move_uploaded_file( $_FILES["txt_file"]["tmp_name"],$_FILES["txt_file"]["name"]))
			echo "success";
else
			echo "error";
$file = fopen("sample_text.txt","r");	

while(!feof($file))
{
	echo fgets($file);
	echo "<br>";
}
$file = fopen("sample.txt","w");
fwrite($file,"hello");
?>