<!DOCTYPE html>

<head>
    <?php
    $title = "Sign-in";
    include 'include/header.php';
    ?>
</head>

<body class="bg-dark">

    <?php
    include 'include/nav.php';
    ?>

    <div class="container">

        <div class="col-md-6 bg-light m-auto p-5">

            <form action="" method="post" class="">

                <?php
                if (isset($_POST['username'])) {
                    $u_name = $_POST['username'];
                    $u_pass = $_POST['pass'];

                    include 'database/conn.php';

                    $q =  "select * from users where username = '$u_name' and pass = '$u_pass';";

                    $r = mysqli_query($conn, $q);

                    if ($r && $r->num_rows > 0) {
                        $_SESSION['username'] = $_POST['username'];
                        header("location: myprofile.php");
                    } else {
                        echo "<h1>incorrect username or password!</h1>";
                    }
                }
                ?>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" aria-describedby="username_help" placeholder="Username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ""; ?>" required>
                </div>

                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" aria-describedby="pass" value="<?php echo isset($_POST['pass']) ? $_POST['pass'] : ""; ?>" required>
                </div>

                <button type="submit" name="submit" class="btn btn-primary ">Sign-in</button>

                <a name="sign-up" id="sign-up" class="btn btn-primary" href="signup.php" role="button">Sign-up</a>
            </form>

        </div>
    </div>



</body>