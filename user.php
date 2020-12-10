<!DOCTYPE html>

<head>

    <?php
    $title = $_GET['name'] . "'s Profile";
    include 'include/header.php';
    ?>
</head>

<body class="bg-dark">

    <?php
    include 'include/nav.php';
    ?>

    <div class="container">

        <div class="col-md-9 m-auto bg-light p-3">

            <h1>Latest posts made by <?php echo $_GET['name'] ?></h1>

            <?php
            include 'database/conn.php';

            $u_name = $_GET['name'];

            $q = "SELECT *, DATE_FORMAT(posts.time_made, '%W, %d/%M/%Y') AS time from posts inner join users on users.id = posts.user_id and users.username = '$u_name' order by posts.id desc limit 100;";

            $r = mysqli_query($conn, $q);

            while ($row = mysqli_fetch_assoc($r)) {
                $u_name = $row['username'];
                $t_made = $row['time'];
                $content = $row['content'];

                echo '
            <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title">' . $u_name . '</h5>
                  <h6 class="card-subtitle mb-2 text-muted">' . $t_made . '</h6>
                  <p class="card-text">' . $content . '</p>
                </div>
            </div>
                ';
            }
            ?>

        </div>

    </div>

</body>