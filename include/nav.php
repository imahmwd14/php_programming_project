<nav class="navbar sticky-top navbar-expand-sm navbar-dark bg-dark">

    <a href="index.php" class="navbar-brand">Mahmoud Darwish's Facebook</a>

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

            <li class="nav-item <?php if ($title == "About") {
                                    echo "active";
                                } ?>">
                <a href="about.php" class="nav-link">About The Author Mahmoud Darwish</a>
            </li>

        </ul>

        <?php

        if (!isset($_SESSION['username'])) {
            include 'signin_and_signup_nav_items.php';
        } else {
            include 'profile_and_logout.php';
        }

        ?>

    </div>

</nav>