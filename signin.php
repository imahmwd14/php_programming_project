<!DOCTYPE html>

<head>
    <?php
    $title = "Sign-in";
    include 'include/header.php';
    ?>
</head>

<body class="bg-dark">

    <?php
    if (isset($_POST['username'])) {
        $_SESSION['username'] = $_POST['username'];
    }
    ?>

    <?php
    include 'include/nav.php';
    ?>

    <div class="container">

        <div class="col-md-6 bg-light m-auto p-5">

            <form action="" method="post" class="">

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