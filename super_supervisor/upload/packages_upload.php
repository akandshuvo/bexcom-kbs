<?php
include_once '../../dbconfig.php';



/*packs 1 and 2*/
if(isset($_POST['packs']))
{

	$file =$_FILES['file']['name']."-".rand(1000,100000);
  $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="../../docs/package/packs_1&2/";
	$root="package";
	$sub_root="packs_1&2";

	// new file size in KB
	$new_size = $file_size/1024;
	// new file size in KB

	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case

	$final_file=str_replace(' ','-',$new_file_name);

	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT INTO upload_location(file,type,size,location,root,sub_root) VALUES('$final_file','$file_type','$new_size','$folder','$root','$sub_root')";
		$sql2="INSERT INTO archive(file,type,size,location,root,sub_root) VALUES('$final_file','$file_type','$new_size','$folder','$root','$sub_root')";
		mysql_query($sql);
		mysql_query($sql2);
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='../packages.php';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='../packages.php';
        </script>
		<?php
	}
}



/*PRICE*/
if(isset($_POST['price']))
{

	$file =$_FILES['file']['name']."-".rand(1000,100000);
  $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="../../docs/package/price/";
	$root="package";
	$sub_root="price";

	// new file size in KB
	$new_size = $file_size/1024;
	// new file size in KB

	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case

	$final_file=str_replace(' ','-',$new_file_name);

	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT INTO upload_location(file,type,size,location,root,sub_root) VALUES('$final_file','$file_type','$new_size','$folder','$root','$sub_root')";
		$sql2="INSERT INTO archive(file,type,size,location,root,sub_root) VALUES('$final_file','$file_type','$new_size','$folder','$root','$sub_root')";
		mysql_query($sql);
		mysql_query($sql2);
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='../packages.php';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='../packages.php';
        </script>
		<?php
	}
}




/*channel*/
if(isset($_POST['channel']))
{

	$file =$_FILES['file']['name']."-".rand(1000,100000);
  $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="../../docs/package/channel/";
	$root="package";
	$sub_root="channel";

	// new file size in KB
	$new_size = $file_size/1024;
	// new file size in KB

	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case

	$final_file=str_replace(' ','-',$new_file_name);

	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT INTO upload_location(file,type,size,location,root,sub_root) VALUES('$final_file','$file_type','$new_size','$folder','$root','$sub_root')";
		$sql2="INSERT INTO archive(file,type,size,location,root,sub_root) VALUES('$final_file','$file_type','$new_size','$folder','$root','$sub_root')";
		mysql_query($sql);
		mysql_query($sql2);
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='../packages.php';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='../packages.php';
        </script>
		<?php
	}
}



/*add_ons*/
if(isset($_POST['add_ons']))
{

	$file =$_FILES['file']['name']."-".rand(1000,100000);
  $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="../../docs/package/add_ons/";
	$root="package";
	$sub_root="add_ons";

	// new file size in KB
	$new_size = $file_size/1024;
	// new file size in KB

	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case

	$final_file=str_replace(' ','-',$new_file_name);

	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT INTO upload_location(file,type,size,location,root,sub_root) VALUES('$final_file','$file_type','$new_size','$folder','$root','$sub_root')";
		$sql2="INSERT INTO archive(file,type,size,location,root,sub_root) VALUES('$final_file','$file_type','$new_size','$folder','$root','$sub_root')";
		mysql_query($sql);
		mysql_query($sql2);
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='../packages.php';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='../packages.php';
        </script>
		<?php
	}
}
?>
