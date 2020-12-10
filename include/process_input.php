<html>

<head>

    <title>Information Processing</title>

</head>

<body>

    <p>

        <?php

#        $db = mysqli_connect("localhost", "root", "", "tweeter");
#
#        $user = $_GET["user"];
#        $pass = $_GET["pass"];
#
#        $q = "insert into users (name, pass) values ('$user','$pass');";
#
#        mysqli_query($db, $q);
#
#        $r = mysqli_query($db, "select * from users;");
#
#        print_r(mysqli_fetch_array($r));

        ?>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "tweeter";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"] . " - Name: " . $row["name"] . " " . $row["pass"] . "<br>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </p>

    <h1>POST variable dump:</h1>
    <?php
    var_dump($_POST);
    ?>
</body>

</html>