<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <?php 
        include 'librerias.php'; 
        session_start();
        include 'control_session.php';
    ?>
    <title>Dashboard <?php echo $_SESSION["nombre_pers"]; ?></title>
</head>
<body>
    <div id="app">
        <div class="wrapper">
            <nav id="sidebar">
                    <div class="sidebar-header">
                        <h3><img src="img/user.png" alt="usuario" width="100" height="100"></h3>
                        <strong>BE</strong>
                    </div>

                    <ul class="list-unstyled components">
                        <li class="active">
                            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false"><?php echo $_SESSION["nombre_pers"]; ?></a>
                            <ul class="collapse list-unstyled" id="homeSubmenu">
                                <li>
                                    <a href="#"><i class="fas fa-home"></i> Inicio</a>
                                    <a href="#" onclick="">
                                     <i class="fas fa-walking"></i>
                                    cerrar
                                    </a>
                                    <form id="logout-form" action="#" method="POST" style="display: none;">
                                        
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                Datos Personales
                            </a>
                            <a href="#">
                                Informacion Academica
                            </a>
                            <a href="#">
                                Experiencia Laboral
                            </a>
                        </li>
                </nav>
                <div id="content">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                                <div class="navbar-header">
                                    <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                        <i class="fas fa-align-justify"></i>
                                    </button>
                                </div>
                        </div>
                    </nav>
                </div>
                <?php include 'datos_personales.php' ?>
        </div>
    </div>
<!-- Creando un footer para las paginas-->
<footer class="py-3" style="background-color: #193338;">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; Bambusa.Digital 2018</p>
  </div>
</footer>
</body>
</html>