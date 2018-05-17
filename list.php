<html>
<head>
    <title>List</title>
    <style>
        body{
        background-color: lightblue;
        }
        ul{
            list-style-type: none;
            float: left;
            padding: 10px;
            background: #3399ff;
            border: black;
            margin: 5px;
        }

        ul li{
            background: #cce5ff;
            padding: 2px;
            margin: 5px;
        }

    </style>
</head>
<body>
    <h1>Product List</h1>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "database";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT SKU, Name, Price, Size FROM dvd ";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "
                <ul><li>SKU: "
                . $row["SKU"].
                "</li><li>Name: "
                . $row["Name"].
                "</li><li>Price: "
                . $row["Price"].
                "$</li><li>Size:"
                .$row["Size"].
                " MB</li></ul>";
        }
    } else {
        echo "0 results";
    }



    $query = "SELECT SKU, Name, Price, Weight FROM book ";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "
                <ul><li>SKU: "
                . $row["SKU"].
                "</li><li>Name: "
                . $row["Name"].
                "</li><li>Price: "
                . $row["Price"].
                "$</li><li>Weight:"
                .$row["Weight"].
                "KG</li></ul>";
        }
    } else {
        echo "0 results";
    }


    $query = "SELECT SKU, Name, Price, Height, Width, Length FROM furniture ";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "
                <ul><li>SKU: "
                . $row["SKU"].
                "</li><li>Name: "
                . $row["Name"].
                "</li><li>Price: "
                . $row["Price"].
                "$</li><li>Dimention:"
                .$row["Height"].
                "x"
                . $row["Width"].
                "x "
                . $row["Length"].
                "</li></ul>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();


    ?>

<form action="index.html">
    <input type="submit" value="Add product">
</form>
</body>
</html>