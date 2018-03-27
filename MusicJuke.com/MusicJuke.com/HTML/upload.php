<?php
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["file"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if file already exists
	if (file_exists($target_file)) {
	    echo "Sorry, file already exists.";
	    $uploadOk = 0;
	}
	// Check file size
	if ($_FILES["file"]["size"] > 1500000) {                //FOR RESTRICTING FILES OVER 1.5 MB
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "mp3") {
	    echo "Sorry, only mp3 files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
			$servername = "127.0.0.1";
			$dbusername = "root";	
			$dbpassword = "";
			$dbname = "exam";
			$con = new mysqli($servername,$dbusername ,$dbpassword ,$dbname );
			$sql = "INSERT INTO songs(name,author,path,listen_count) VALUES
('".$_POST['nameinfo']."','".$_POST['autherinfo']."','".$target_file."','0')";
			if($con->query($sql)==TRUE)
	{
	 echo $_POST['nameinfo']." Uploaded Successfuly.";
	}
	else
	{
		echo "ERROR" . $sql . "<br>" . $con->error;
	}

	       
			
	    } else {
	        echo "Sorry, there was an error uploading ".$_POST['nameinfo'];
	    }
	}
?>