<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #9F2B68;">
    <div class="container-lg">
        <a class="navbar-brand" href="."><i class="bi bi-file-medical-fill"></i>HealthPoli</a>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <?php 

                            echo $hasil ['username'];
                        ?>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end nt-2">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-person-fill"></i>Profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-gear-wide-connected"></i>Setting</a>
                        </li>
                        <li><a class="dropdown-item" href="logout"><i class="bi bi-door-closed-fill"></i>Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>