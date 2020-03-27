

<nav class="navbar navbar-expand-sm navbar-dark">
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation" >
            <span class="navbar-toggler-icon" style=" position: relative;left: -30px; border: 1px solid #7084E8 !important; width: 45px;height: 37px;border-radius: 3px; background-color: #7084E8!important;"></span>
            </button>

            <div class="navbar-collapse collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <?php if($url == "index"){?>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php" title="Ir a inicio">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <?php } else {?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php" title="Ir a inicio">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <?php } ?>
                    <?php if($url == "sobre-mi"){?>
                    <li class="nav-item active">
                        <a class="nav-link" href="sobre-mi.php" title="Sobre mi">Sobre mi <span class="sr-only">(current)</span></a>
                    </li>
                    <?php } else {?>
                    <li class="nav-item">
                        <a class="nav-link" href="sobre-mi.php" title="Sobre mi">Sobre mi <span class="sr-only">(current)</span></a>
                    </li>
                    <?php } ?>
                    <?php if($url == "proyectos"){?>
                    <li class="nav-item active">
                        <a class="nav-link" href="proyectos.php" title="Ver mis proyectos">Proyectos <span class="sr-only">(current)</span></a>
                    </li>
                    <?php } else {?>
                    <li class="nav-item">
                        <a class="nav-link" href="proyectos.php" title="Ver mis proyectos">Proyectos <span class="sr-only">(current)</span></a>
                    </li>
                    <?php } ?>
                    <?php if($url == "contacto"){?>
                    <li class="nav-item active">
                        <a class="nav-link" href="contacto.php" title="Contacto">Contacto <span class="sr-only">(current)</span></a>
                    </li>
                    <?php } else {?>
                    <li class="nav-item ">
                        <a class="nav-link" href="contacto.php" title="Contacto">Contacto <span class="sr-only">(current)</span></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
</nav>

