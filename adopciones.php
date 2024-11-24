<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registro de Mascotas y Usuarios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Registro de mascotas y usuarios para adopción" />
    <meta name="keywords" content="adopciones, mascotas, usuarios, registro" />
    <meta name="author" content="Patitas Papantecas" />

    <meta property="og:title" content="Patitas Papantecas" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="Patitas Papantecas" />
    <meta property="og:description" content="Transformamos vidas con amor por los animales." />
    <meta name="twitter:title" content="Patitas Papantecas" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="summary" />

    <link rel="shortcut icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Roboto:400,300,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="js/modernizr-2.6.2.min.js"></script>
</head>
<body>
<div id="fh5co-offcanvas">
		<a href="#" class="fh5co-close-offcanvas js-fh5co-close-offcanvas"><span><i class="icon-cross3"></i> <span>Close</span></span></a>
		<div class="fh5co-bio">
			<figure>
            <a href="index.html"><img src="images/logo1.jpg" class="img-responsive"></a>
			</figure>
			<h3 class="heading">Sobre nosotros</h3>
			<h2>Patitas papantecas</h2>
			<p>Transformamos vidas con pasión, responsabilidad y un profundo amor por los animales.</p>
			<ul class="fh5co-social">
				<li><a href="https://www.facebook.com/todossomospatitas/"><i class="icon-facebook"></i></a></li>
				<li><a href="https://www.instagram.com/patitaspapantecas/?hl=es-la"><i class="icon-instagram"></i></a></li>
			</ul>
		</div>

		<div class="fh5co-menu">
			<div class="fh5co-box">
				<h3 class="heading">Categorias</h3>
				<ul>
					<li><a href="single.html">Quiero adoptar</a></li>
					<li><a href="adopciones.php">Registrar una mascota/usuario</a></li>
					<li><a href="tips.html">Tips</a></li>
				</ul>
			</div>
		</div>
	</div>

    <header id="fh5co-header">
        <div class="container-fluid">
            <div class="row">
                <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                <ul class="fh5co-social">
                    <li><a href="https://www.facebook.com/todossomospatitas/"><i class="icon-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/patitaspapantecas/?hl=es-la"><i class="icon-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </header>

    <main class="container mt-5">
        <div class="divform rounded shadow-lg p-3 mb-5">
            <h1 class="text-center">Registrar Mascotas o Usuarios</h1>
            <hr>
            <div class="row">
                <!-- Formulario para mascotas -->
                <div class="col-md-6">
                    <h3 class="text-center">Registrar Mascota</h3>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Tipo de mascota:</label>
                            <input type="text" class="form-control" name="tipo_mascota" required pattern="^[A-Za-zÑñÁáÉéÍíÓóÚú\s]+$" title="El tipo solo puede contener letras y espacios">
                        </div>
                        <div class="form-group">
                            <label>Raza:</label>
                            <input type="text" class="form-control" name="raza" required pattern="^[A-Za-zÑñÁáÉéÍíÓóÚú\s]+$" title="La raza solo puede contener letras y espacios">
                        </div>
                        <div class="form-group">
                            <label>Nombre:</label>
                            <input type="text" class="form-control" name="nombre" required pattern="^[A-Za-zÑñÁáÉéÍíÓóÚú\s]+$" title="El nombre solo puede contener letras y espacios">
                        </div>
                        <div class="form-group">
                            <label>Edad:</label>
                            <input type="number" class="form-control" name="edad" required maxlength="2" min="1" max="20">
                        </div>
                        <div class="form-group">
                            <label>Descripción:</label>
                            <textarea class="form-control" name="descripcion" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Foto:</label>
                            <input type="file" class="form-control-file" name="imagen" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="enviarmascota">Registrar Mascota</button>
                    </form>
                </div>

                <!-- Formulario para usuarios -->
                <div class="col-md-6">
                    <h3 class="text-center">Registrar Usuario</h3>
                    <form method="POST">
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label>Contraseña:</label>
                            <input type="password" class="form-control" name="pass" required minlength="8">
                        </div>
                        <div class="form-group">
                            <label>Nombre Completo:</label>
                            <input type="text" class="form-control" name="nom_completo" required pattern="^[A-Za-zÑñÁáÉéÍíÓóÚú\s]+$" title="El nombre solo puede contener letras y espacios">
                        </div>
                        <div class="form-group">
                            <label>Edad:</label>
                            <input type="number" class="form-control" name="edad" required maxlength="2" min="18" max="99">
                        </div>
                        <div class="form-group">
                            <label>Dirección:</label>
                            <input type="text" class="form-control" name="direccion" required>
                        </div>
                        <div class="form-group">
                            <label>Género:</label>
                            <select name="genero" id="genero" required>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Otro">Otro</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <label>Teléfono:</label>
                            <input type="text" class="form-control" name="telefono" required maxlength="10" pattern="^[0-9]{10}$" title="El teléfono debe contener 10 dígitos numéricos">
                        </div>
                        <button type="submit" class="btn btn-primary" name="enviarusuario">Registrar Usuario</button>
                    </form>
                </div>

                <?php
                // Conexión a la base de datos
                $conn = new mysqli("localhost", "root", "", "adopciones");
                // Verificar la conexión
                if ($conn->connect_error) {
                    die("Error de conexión: " . $conn->connect_error);
                }

                //Mascota
                if (isset($_POST['enviarmascota'])) {
                $tipo_mascota = $conn->real_escape_string($_POST['tipo_mascota']);
                $raza = $conn->real_escape_string($_POST['raza']);
                $nombre = $conn->real_escape_string($_POST['nombre']);
                $edad = $_POST['edad'];
                $descripcion = $conn->real_escape_string($_POST['descripcion']);

                // Comprobar si el archivo fue subido
                if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
                // Obtener el nombre del archivo y la extensión
                $file = $_FILES['imagen']['name'];
                $file_tmp = $_FILES['imagen']['tmp_name'];
                $file_size = $_FILES['imagen']['size'];
                $file_ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));

                // Carpeta de destino
                $dest = 'images/animales/';

                // Validar el tipo de archivo
                $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
                if (!in_array($file_ext, $allowed_extensions)) {
                    echo "<h2 class='mensaje'>Error: Solo se permiten archivos JPG, JPEG, PNG o GIF.</h2>";
                } elseif ($file_size > 2000000) { // Limitar el tamaño
                    echo "<h2 class='mensaje'>Error: El archivo es demasiado grande. El tamaño máximo permitido es 2MB.</h2>";
                } else {
                // Mover el archivo subido a la carpeta de destino
                    $file_new_name = time() . "_" . $file;
                        if (move_uploaded_file($file_tmp, $dest . $file_new_name)) {
                        
                // Insertar datos en la base de datos
                    $sql = "INSERT INTO mascotas (tipo_mascota, raza, nombre, edad, descripcion, imagen)
                            VALUES ('$tipo_mascota', '$raza', '$nombre', $edad, '$descripcion', '$dest$file_new_name')";

                // Ejecutar la consulta
                if ($conn->query($sql) === TRUE) {
                    echo "<h2 class='mensaje'>Mascota añadida correctamente</h2>";
                    } else {
                        echo "<h2 class='mensaje'>No se pudo registrar la mascota: " . $conn->error . "</h2>";
                }
                } else {
                        echo "<h2 class='mensaje'>Error al mover el archivo. Por favor, inténtalo de nuevo.</h2>";
                }
                }
                } else {
                        echo "<h2 class='mensaje'>Error: No se ha subido ninguna imagen o el archivo está vacío.</h2>";
                    }
                }

                    //Usuario
                if (isset($_POST['enviarusuario'])) {
                    $email = $conn->real_escape_string($_POST['email']);
                    $pass = password_hash($_POST['pass'], PASSWORD_BCRYPT); // Cifrar la contraseña
                    $nom_completo = $conn->real_escape_string($_POST['nom_completo']);
                    $edad = $_POST['edad'];
                    $direccion = $conn->real_escape_string($_POST['direccion']);
                    $genero = $conn->real_escape_string($_POST['genero']);
                    $telefono = $conn->real_escape_string($_POST['telefono']);

                    // Insertar datos en la tabla
                    $sql = "INSERT INTO usuarios (email, pass, nom_completo, edad, direccion, genero, telefono)
                                VALUES ('$email', '$pass', '$nom_completo', $edad, '$direccion', '$genero', '$telefono')";

                        // Ejecutar la consulta
                        if ($conn->query($sql) === TRUE) {
                            echo "<h2 class='mensaje'>Usuario añadido correctamente</h2>";
                        } else {
                            echo "<h2 class='mensaje'>No se pudo registrar al usuario: " . $conn->error . "</h2>";
                        }
                    }

                    // Cerrar la conexión
                    $conn->close();
                ?>

            </div>
        </div>
    </main>
	<footer id="fh5co-footer">
		<p><small>&copy; 2024. Patitas papantecas. All Rights Reserverd.</small></p>
	</footer>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
