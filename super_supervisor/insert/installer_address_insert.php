
<?php
$servername = "localhost";
$username = "root";
$password = "digicon@123";
$dbname = "bexcom";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$division=$_POST['division'];
$district=$_POST['district'];
$upazilla=$_POST['upazilla'];
$thana=$_POST['thana'];
$post_code=$_POST['post_code'];
$area_village=$_POST['area_village'];



$sql = "INSERT INTO installer_address (
                                    id,
                                    division,
                                    district,
                                    upazilla,
                                    thana,
                                    post_code,
                                    area_village

                                  )


                  VALUES (
                          '',
                          '$division',
                          '$district',
                          '$upazilla',
                          '$thana',
                          '$post_code',
                          '$area_village'
                        )";



if ($conn->query($sql) === TRUE) {
    echo "<script>
                alert('Successfully Done');

            </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
