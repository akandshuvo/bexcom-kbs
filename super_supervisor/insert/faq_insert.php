
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

$question=$_POST['question'];
$answer=$_POST['answer'];
$category=$_POST['category'];


$sql = "INSERT INTO faq (
                          id,
                          question,
                          answer,
                          category
                        )


                  VALUES (
                          '',
                          '$question',
                          '$answer',
                          '$category'

                        )";



if ($conn->query($sql) === TRUE) {
    echo "<script>
                alert('Successfully Done');
                location.reload();
            </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
