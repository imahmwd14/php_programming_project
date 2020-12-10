<!DOCTYPE html>

<head>

    <?php
    $title = "My Profile";
    include 'include/header.php';
    ?>
</head>

<body class="bg-dark">

    <?php
    include 'include/nav.php';
    ?>

    <?php
    if (isset($_POST['submit']) && isset($_POST['content'])) {
        include 'database/insert_post.php';
    }

    ?>

    <div class="container">

        <div class="col-md-9 m-auto bg-light p-3">
            <form action="" method="POST">
                <div class="form-group">
                    <label class="h1" for="content">Make a post</label>
                    <textarea class="form-control" name="content" id="content" rows="3"></textarea>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Post</button>
            </form>

            <h1>My posts</h1>
            <?php
            include 'database/conn.php';

            $u_name = $_SESSION['username'];

            $q = "SELECT *, DATE_FORMAT(posts.time_made, '%W, %d/%M/%Y') AS time from posts inner join users on users.username = posts.user_name and posts.user_name = '$u_name' order by posts.id desc limit 100;";

            $r = mysqli_query($conn, $q);

            while ($row = mysqli_fetch_assoc($r)) {
                $u_name = $row['username'];
                $t_made = $row['time'];
                $content = $row['content'];

                $u_name =  "<a href=\"user.php?name=$u_name\">$u_name</a>";

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