<?php
include 'connect.php';
    
    $img = $_POST['image'];
    $empid = $_POST['eid'];
    $empid=strtoupper($empid);
    $folderPath = "uploads/log/";
    
    if($empid)
    {
        $query="SELECT * FROM `register` WHERE `emp_id`='$empid'";
	    $res=mysqli_query($con,$query);
        $counter=mysqli_num_rows($res);
        if($counter!=0)
        {
            $image_parts = explode(";base64,", $img);
    // $image_type_aux = explode("uploads/log/", $image_parts[0]);
    // $image_type = $image_type_aux[1];
  
    $image_base64 = base64_decode($image_parts[1]);
    
	date_default_timezone_set("Asia/Calcutta");  
    $time=date('His');
	$photo=$empid.'_'.date("dmY").'_'.$time ;
    $fileName =  $photo. '.png';
date_default_timezone_set("Asia/Calcutta");  
$ct=date('Y-m-d H:i:s');
  
    $file = $folderPath . $fileName;
    file_put_contents($file, $image_base64);
  
    //print_r($fileName);
    $query="insert into log(emp_id,photo,intime,outtime) values('$empid','$file','$ct','---')";
	$res=mysqli_query($con,$query);
     if($res)
	 {
    
		echo "<script>alert('Loged in successfully')</script>";
        echo"<script>document.location.href='login.php'</script>";
	 }
	 else
	 {
		echo "<script>alert(' NOT Loged in  Try Again')</script>";
        echo"<script>document.location.href='login.php'</script>";
	 }
 
        }

        else{
            echo "<script>alert('Employee Not Registerd ..Please Register Again  ')</script>";
            echo"<script>document.location.href='register.php'</script>";
        }

    }
  
    // $image_parts = explode(";base64,", $img);
    // // $image_type_aux = explode("uploads/log/", $image_parts[0]);
    // // $image_type = $image_type_aux[1];
  
    // $image_base64 = base64_decode($image_parts[1]);
    
	// date_default_timezone_set("Asia/Calcutta");  
    // $time=date('His');
	// $photo=$regno.date("dmY").$time ;
    // $fileName =  $photo. '.png';
  
    // $file = $folderPath . $fileName;
    // file_put_contents($file, $image_base64);
  
    // //print_r($fileName);
    // $query="insert into log(regno,photo,out_time) values('$regno','$file','---')";
	// $res=mysqli_query($con,$query);
    //  if($res)
	//  {
    
	// 	echo "<script>alert('Loged in successfully')</script>";
    //     echo"<script>document.location.href='login.php'</script>";
	//  }
	//  else
	//  {
	// 	echo "<script>alert(' NOT Loged in  Try Again')</script>";
    //     echo"<script>document.location.href='login.php'</script>";
	//  }
?>
