
<nav class="navbar navbar-expand-lg " color-on-scroll="500">
    <div class="container-fluid">

        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/?view=account-detail&id=<?php echo $_SESSION['loggedIn']?>">
                        <span class="no-icon">Account</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/?view=logout">
                        <span class="no-icon">Log out</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
