<?php
session_start();
if (isset($_SESSION['username'])) {
    echo $_SESSION['username'];
}
?>


<nav class="navbar sticky-top navbar-expand-sm navbar-dark bg-dark">

    <a href="index.php" class="navbar-brand">Facebook</a>

    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div id="navbarMenu" class="collapse navbar-collapse">

        <ul class="navbar-nav">

            <li class="nav-item <?php if ($title == "Home") {
                                    echo "active";
                                } ?>">
                <a href="index.php" class="nav-link">Home</a>
            </li>

            <li class="nav-item <?php if ($title == "Users") {
                                    echo "active";
                                } ?>">
                <a href="users.php" class="nav-link">Users</a>
            </li>

        </ul>

        <ul class="navbar-nav ml-auto">

            <li class="nav-item <?php if ($title == "Sign-in") {
                                    echo "active";
                                } ?>">
                <a href="signin.php" class="nav-link">Sign-in</a>
            </li>

            <li class="nav-item <?php if ($title == "Sign-up") {
                                    echo "active";
                                } ?>">
                <a href="signup.php" class="nav-link">Sign-up</a>
            </li>

        </ul>

    </div>

</nav>