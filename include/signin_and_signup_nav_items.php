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