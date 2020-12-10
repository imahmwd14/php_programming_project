<!DOCTYPE html>

<head>

    <?php
    $title = "Sign-up";
    include 'include/header.php';
    ?>
</head>

<body class="bg-dark">

    <?php
    include 'include/nav.php';
    ?>

    <div class="container">

        <div class="col-md-6 bg-light m-auto p-5">

            <form action="" method="post">

                <?php

                if (isset($_POST['submit'])) {

                    $username_db = $_POST['username'];
                    $name = $_POST['name'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];

                    include 'database/insert.php';

                    if ($insertion_reult) {
                        echo "<h3> you have successfully registered! " . "<a href=\"signin.php\">Sign-in</a> </h3>";
                    } else {
                        echo "<h3>there was a problem, please try again " . $_POST['name'] . "</h3>";
                    }
                }
                ?>

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="<?php echo isset($_POST['name']) && !$insertion_reult ? $_POST['name'] : ""; ?>" class="form-control" placeholder="Name" aria-describedby="name_help" required>
                </div>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control <?php echo isset($_POST['username']) && !$insertion_reult ? "is-invalid" : ""; ?>" name="username" id="username" value="<?php echo isset($_POST['username']) && !$insertion_reult ? $_POST['username'] : ""; ?>" aria-describedby="username_help" placeholder="Username" required>
                    <div class="invalid-feedback">Please Provide a different username. <?php echo isset($_POST['username']) ? "<b>" . $_POST['username'] . " </b> has been already used!" : "" ?></div>
                </div>

                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" name="pass" id="pass" value="<?php echo isset($_POST['pass']) && !$insertion_reult ? $_POST['pass'] : ""; ?>" class="form-control" placeholder="Password" aria-describedby="pass" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="<?php echo isset($_POST['email']) && !$insertion_reult ? $_POST['email'] : ""; ?>" aria-describedby="email_help" placeholder="example@example.org" required>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Sign-up</button>

                <a name="sign-in" id="sign-in" class="btn btn-primary" href="signin.php" role="button">Sign-in</a>
            </form>
        </div>

        <?php
        // $username_db = "dfgdfgdf" . random_int(0, 100);
        // $name = "asdds";
        // $pass = "asdds";
        // $email = "asdds";

        // include 'database/insert.php'
        ?>

    </div>

</body>