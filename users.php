<!DOCTYPE html>

<head>

    <?php
    $title = "Users";
    include 'include/header.php';
    ?>
</head>

<body class="bg-dark">

    <?php
    include 'include/nav.php';
    ?>

    <div class="container">

        <div class="col-md-9 m-auto bg-light p-3">

            <h1>List of registered Users</h1>

            <?php
            include 'database/conn.php';

            $q = "SELECT * FROM users;";

            $r = mysqli_query($conn, $q);

            while ($r && $row = mysqli_fetch_assoc($r)) {
                $u_name = $row['username'];
                $u_name =  "<a href=\"user.php?name=$u_name\">$u_name</a>";
                echo '
            <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title">' . $u_name . '</h5>
                </div>
            </div>
                ';
            }
            ?>

        </div>
    </div>

</body>