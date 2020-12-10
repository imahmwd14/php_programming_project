<!DOCTYPE html>

<head>
    <?php
    session_reset();
    $title = "Home";
    include 'include/header.php';
    ?>
</head>

<body class="bg-dark">

    <?php
    include 'include/nav.php';
    ?>

    <div class="container">

        <div class="col-md-9 m-auto bg-light p-3">

            <h1>Latest posts made</h1>

            <?php
            include 'database/conn.php';

            $q = "SELECT *, DATE_FORMAT(posts.time_made, '%W, %d/%M/%Y') AS time from posts inner join users on users.username = posts.user_name order by posts.id desc limit 100;";

            $r = mysqli_query($conn, $q);

            while ($row = mysqli_fetch_assoc($r)) {
                $u_name = $row['name'];
                $t_made = $row['time'];
                $content = $row['content'];

                $u_name =  "<a href=\"user.php?name=$u_name\">$u_name</a>";

                echo '
            <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title">Poster: ' . $u_name . '</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Time: ' . $t_made . '</h6>
                  <p class="card-text">' . $content . '</p>
                </div>
            </div>
                ';
            }
            ?>

        </div>

    </div>

</body>