<html>
<head>
	<title>Processed</title>
</head>
<body>


<?php

     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "database";

	 $SKU=$_POST['SKU'];
	 $Name=$_POST['Name'];
	 $Price=$_POST['Price'];
	 $Type=$_POST['Type'];
     $Size=$_POST['Size'];
     $Weight=$_POST['Weight'];
     $Height=$_POST['Height'];
     $Width=$_POST['Width'];
     $Length=$_POST['Length'];

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

    switch ($Type) {

        case 'DVD':
                $query = " INSERT INTO $Type (`SKU`, `Name`, `Price`, `Type`, `Size`) VALUES ('$SKU' , '$Name' , '$Price' , '$Type' , '$Size') ";
            break;

        case 'Book':
                $query = " INSERT INTO $Type (`SKU`, `Name`, `Price`, `Type`, `Weight`) VALUES ('$SKU' , '$Name' , '$Price' , '$Type' , '$Weight') ";
            break;

        case 'Furniture':
                $query = " INSERT INTO $Type (`SKU`, `Name`, `Price`, `Type`, `Height`, `Width`, `Length`) VALUES ('$SKU' , '$Name' , '$Price' , '$Type' , '$Height', '$Width', '$Length') ";
            break;
        default:
            echo "error";
    }

if ($conn->query($query) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}
$conn->close();

?>

<script>
    setTimeout(myFunction, 1500);

    function myFunction() {
        window.location = 'http://localhost/index.html';
    }

</script>

</body>
</html>