<ul class="navbar-nav ml-auto">

    <li class="nav-item <?php if ($title == "My Profile") {
                            echo "active";
                        } ?>">
        <a href="myprofile.php" class="nav-link">My Profile</a>
    </li>

    <li class="nav-item <?php echo ($title == "Sign-up") ? "active" : ""; ?>">
        <a href="include/logout.php" class="nav-link">Logout</a>
    </li>

</ul>