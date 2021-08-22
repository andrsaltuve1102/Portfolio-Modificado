<header>
        <nav class="navbar navbar-expand-md mb-4">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0 mt-2">

                    <li class="nav-item">
                        <a class="nav-link px-4 py-1 <?php echo ($pg == "inicio") ? "active" : "" ?>" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4 py-1 <?php echo ($pg == "sobre-mi") ? "active" : "" ?>" href="sobre-mi.php">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4 py-1 <?php echo ($pg == "proyectos") ? "active" : "" ?>" href="proyectos.php">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4 py-1 <?php echo ($pg == "contacto") ? "active" : "" ?>" href="contacto.php">Contact</a>
                    </li>
                    </ul>

                    <form class="btn btn-cv">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">

                            <li class="nav-item">
                                <a class="nav-link" href="./lang.php?idk=es">ES</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="./lang.php?idk=en">EN</a>
                            </li>

                        </ul>
                    </form>

                </div>
            </div>
        </nav>
    </header>