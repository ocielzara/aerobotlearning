<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');

    /** font-family: 'Bebas Neue', cursive; */

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
        list-style: none;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background-color: #1f1f1f;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .header {
        background-image: url(images/portada.png);
        background-position: center top;
        background-repeat: no-repeat;
        background-size: cover;
        min-height: 100vh;
        display: flex;
        align-items: center;
    }

    .menu {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        z-index: 1000;
    }

    .logo {
        font-size: 24px;
        color: #cf2d3a;
        font-weight: 800;
        text-transform: uppercase;
    }

    .menu .navbar ul li {
        position: relative;
        float: left;
    }

    .menu .navbar ul li a {
        font-size: 18px;
        padding: 20px;
        color: #ffffff;
        display: block;
    }

    .menu .navbar ul li a:hover {
        color: #cf2d3a;
    }

    /**Tengo duda */
    #menu {
        display: none;
    }

    .menu-icono {
        width: 25px;
    }

    .menu label {
        cursor: pointer;
        display: none;
    }

    .header-txt {
        text-align: center;
        margin-bottom: 45pxs;
    }

    .header-txt h1,
    span,
    h3 {
        font-size: 110px;
        letter-spacing: 5px;
        text-transform: uppercase;
        font-family: 'Bebas Neue', cursive;
        color: #CF2D3A;
        margin-bottom: 15px;
    }

    .header-txt span {
        font-size: 25px;
    }

    .header-txt p {
        color: white;
        padding: 0 250px;
        margin: 25px 0;
    }

    #btn-1 {
        display: inline-block;
        padding: 11px 25px;
        background-color: #D82E37;
        color: #FFFFFF;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-size: 20px;
        font-family: 'Bebas Neue', cursive;
        margin: 25px 0;
        border: 0;
    }

    #btn-1:hover {
        background-color: #b4272e;
    }

    .header-dir {
        display: flex;
        justify-content: space-between;
        text-align: center;
        margin-top: 20px;
    }

    .dir h3 {
        font-size: 18px;
    }

    .dir p {
        font-size: 22px;
        color: #ffffff;
        text-transform: uppercase;
    }

    .welcome {
        display: flex;
    }

    .welcome-1 {
        background-image: url(images/welcome.png);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        width: 50%;
    }

    .welcome-2 {
        width: 50%;
        padding: 150px 250px 150px 100px;
        background-color: #191919;
    }

    h2 {
        font-size: 90px;
        line-height: 100px;
        color: #ffffff;
        text-transform: uppercase;
        font-family: 'Bebas Neue', cursive;
        margin-bottom: 20px;
    }

    p {
        font-size: 16px;
        color: #AFAFAF;
        margin: 25px 0;
    }

    .b1 {
        color: #cf2d3a;
    }

    .services {
        padding: 100px 0;
        text-align: center;
    }

    .services-txt {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    hr {
        border: 1px solid #cf2d3a;
        width: 80px;
    }

    .services-txt p {
        padding: 20px 150px;
    }

    .services-group {
        display: flex;
        justify-content: space-between;
        margin: 45px 0;
    }

    .services-1 {
        background-color: #070707;
        padding: 35px 25px;
        margin: 0 10px;
        border-radius: 15px;
    }

    .services-1 img {
        width: 110px;
        margin-bottom: 15px;
    }

    .services-1 h3 {
        font-size: 25px;
        color: #ffffff;
    }

    .services-1 a {
        color: #cf2d3a;
        font-size: 16px;
    }

    .prices {
        display: flex;
    }


    .prices-1 {
        width: 50%;
        padding: 150px 250px 150px 100px;
        background-color: #191919;
    }

    table {
        margin: 50px 0;
        width: 100%;
        text-align: left;
        border-collapse: collapse;
    }

    tr {
        display: flex;
        justify-content: space-between;
        border-bottom: 1px solid #AFAFAF;
        margin-bottom: 20px;
    }

    th {
        color: #ffffff;
        padding-bottom: 15px;
    }

    td {
        color: #cf2d3a;
    }

    .prices-2 {
        background-image: url(images/precios.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        width: 50%;
    }

    .personal {
        padding: 100px 0;
        text-align: center;
    }

    .personal-txt {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        margin-bottom: 25px;
    }

    .personal-group {
        display: flex;
        justify-content: space-between;
        margin-bottom: 35px;
    }

    .personal-1 {
        text-align: center;
    }

    .personal-1 img {
        width: 250px;
        border-radius: 15px;
        margin-bottom: 25px;
    }

    .personal-1 h3 {
        font-size: 22px;
    }

    .personal-1 p {
        padding: 0 50px;
    }

    .personal-1 a {
        color: #cf2d3a;
    }

    .footer-bg {
        background-image: url();
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        text-align: center;
        padding: 100px 0;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .campo-1 {
        margin-bottom: 15px;
    }

    .campo {
        margin: 5px;
        padding: 20px 15px;
        width: 250px;
        background-color: #0e0e0e;
        border: 1px solid #cf2d3a;
        outline: none;
        border-radius: 10px;
        color: #ffffff;
        font-size: 14px;
    }

    textarea {
        width: 520px !important;
    }

    .footer-txt {
        text-align: center;
        padding: 10px;
        background-color: #070707;
    }

    /**Comentarios */
    /**
    .comments-section {
        margin-top: 50px;
        padding: 20px;
        background-color: #070707;
        border-radius: 10px;
    }
    */

    .comments-section strong {
        color: #cf2d3a;
    }

    .comments-section p {
        color: #ffffff;
        margin-bottom: 10px;
    }

    .comments-section .formatted-date {
        color: #AFAFAF;
        font-size: 14px;
    }

    @media(max-width:991px) {
        .menu {
            padding: 20px;
        }

        .menu-icono {
            width: 50px;
        }

        .menu label {
            display: initial;
        }

        .menu .navbar {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background-color: #1f1f1f;
            display: none;
        }

        .menu .navbar ul li {
            width: 100%;
        }

        #menu:checked~.navbar {
            display: initial;
        }

        .header {
            min-height: 0vh;
        }

        .header-content {
            padding: 80px 30px 50px 30px;
        }

        .header-txt {
            margin-bottom: 15px;
        }

        .header-txt h1 {
            font-size: 90px;
        }

        .header-txt p {
            padding: 0;
            margin: 15px 0;
        }

        .header-dir {
            flex-direction: column;
        }

        .dir p {
            font-size: 18px;
        }

        .welcome {
            flex-direction: column;
        }

        .welcome-1 {
            display: none;
        }

        .welcome-2 {
            width: 100%;
            padding: 30px;
            text-align: center;
        }

        h2 {
            font-size: 70px;
            line-height: 80px;
        }

        p {
            margin: 15px 0;
        }

        .services {
            padding: 0;
        }

        .services-txt p {
            padding: 0;
        }

        .services-group {
            flex-direction: column;
            margin: 0;
        }

        .services-1 {
            margin: 0 0 20px 0;
        }

        .prices {
            flex-direction: column;
        }

        .prices-1 {
            width: 100%;
            padding: 30px;
            text-align: center;
        }

        table {
            margin: 25px 0 0 0;
        }

        .prices-2 {
            display: none;
        }

        .personal {
            padding: 30px;
        }

        .personal-group {
            flex-direction: column;
            margin-bottom: 0;
        }

        .personal-1 {
            margin-bottom: 25px;
        }

        .footer-bg {
            padding: 30px;
        }

        textarea {
            width: 250px !important;
        }
    }
</style>

<body>





    <header class="header">
        <div class="menu container">
            <a href="" class="logo">Logo</a>
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="images/menu.png" alt="" class="menu-icono">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#prices">Servicio</a></li>
                    <li><a href="#productos">Productos</a></li>
                    <li><a href="#citas">Contacto</a></li>
                    <li><a href="sucursal2.php">Sede ...</a></li>
                </ul>
            </nav>
        </div>

        <div class="header-content container">
            <div class="header-txt">
                <h1>Carlo 83 barber</h1>
                <span>Mexico</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente recusandae repellat facilis maxime
                    sit, eveniet totam? Ipsum placeat similique mollitia dolorem fuga perspiciatis atque ipsam nemo,
                    iste soluta, quae ex!
                </p>
                <!--<a href="#" class="btn-1">Informacion</a>-->
            </div>
            <div class="header-dir">
                <div class="dir">
                    <h3>Direccion</h3>
                    <p>CDMX AV</p>
                </div>
                <div class="dir">
                    <h3>Telefono</h3>
                    <p>555555555</p>
                </div>
                <div class="dir">
                    <h3>Horario</h3>
                    <p>9am a 9pm</p>
                </div>
            </div>
        </div>
    </header>


    <section class="welcome">
        <div class="welcome-1"></div>
        <div class="welcome-2">
            <h2>Bienvenidos a Carlo 83 barber</h2>
            <p class="b1">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti repudiandae atque possimus veritatis
                consequuntur cum. Praesentium corporis beatae quidem consequatur molestiae ducimus assumenda expedita
                eaque, explicabo cum nulla quas culpa.
            </p>
            <!--<a href="#" class="btn-1">Informacion</a>-->
            <button id="btn-1" class="btn btn-primary btn-whatsapp" data-phone="2211479338"
                data-message="Hola, quisiera saber mas acerca de Carlo 83 barber">Informacion</button>
        </div>

    </section>


    <main class="services container" id="productos">
        <div class="services-txt">
            <h2>Nuestros productos</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat non qui illo voluptates ipsa facere
                architecto, veniam cum voluptatem nemo sed dicta itaque molestias mollitia quam fugit recusandae eaque
                odio.
            </p>
        </div>
        <div class="services-group">
            <div class="services-1">
                <img src="images/producto.png" alt="">
                <h3>Producto 1</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <a href="">$ 100</a>
            </div>
            <div class="services-1">
                <img src="images/producto.png" alt="">
                <h3>Producto 2</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <a href="">$ 120</a>
            </div>
            <div class="services-1">
                <img src="images/producto.png" alt="">
                <h3>Producto 3</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <a href="">$ 140</a>
            </div>
            <div class="services-1">
                <img src="images/producto.png" alt="">
                <h3>Producto 4</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <a href="">$ 160</a>
            </div>
            <div class="services-1">
                <img src="images/producto.png" alt="">
                <h3>Producto 5</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <a href="">$ 180</a>
            </div>
            <div class="services-1">
                <img src="images/producto.png" alt="">
                <h3>Producto 6</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <a href="">$ 200</a>
            </div>
        </div>
        <!--<a href="#" class="btn-1">Informacion</a>-->
        <button id="btn-1" class="btn btn-secondary btn-whatsapp" data-phone="2211479338"
            data-message="Hola, quisiera (saber por tal producto/preguntar por tal producto/o saber si tienen tal producto)">Saber
            mas</button>
    </main>



    <section class="prices" id="prices">
        <div class="prices-1">
            <h2>Lista de precios</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae vel, quasi maxime, modi et ullam,
                possimus necessitatibus cumque dignissimos expedita minima error nihil dolores? Eum minima ut
                consequuntur voluptatum necessitatibus.
            </p>
            <table>
                <tbody>
                    <tr>
                        <th>Corte</th>
                        <td>$180</td>
                    </tr>
                    <tr>
                        <th>Tinte</th>
                        <td>$180</td>
                    </tr>
                    <tr>
                        <th>A domicilio</th>
                        <td>$180</td>
                    </tr>
                    <tr>
                        <th>A domicilio</th>
                        <td>$180</td>
                    </tr>
                </tbody>
            </table>
            <!--<a href="#" class="btn-1">Informacion</a>-->
            <button id="btn-1" class="btn btn-success btn-whatsapp" data-phone="2211479338"
                data-message="Hola, quisiera cotizar otro corte o servicio.">Cotizar otro</button>
        </div>
        <div class="prices-2"></div>
    </section>

    <section class="personal-txt">
        <div class="personal-txt">
            <h2>Nuestros Estilistas</h2>
            <hr>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio consequuntur, suscipit omnis
                inventore ut assumenda facilis, voluptatibus temporibus quam vero iste atque enim quis iure veritatis
                officiis tempore illo nihil!
            </p>
        </div>
        <div class="personal-group">
            <div class="personal-1">
                <img src="images/estilista.jpg" alt="">
                <h3>Lorem</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <!--<a href="#">Saber mas</a>-->
            </div>
            <div class="personal-1">
                <img src="images/estilista.jpg" alt="">
                <h3>Lorem</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <!--<a href="#">Saber mas</a>-->
            </div>
            <div class="personal-1">
                <img src="images/estilista.jpg" alt="">
                <h3>Lorem</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <!--<a href="#">Saber mas</a>-->
            </div>
            <div class="personal-1">
                <img src="images/estilista.jpg" alt="">
                <h3>Lorem</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <!--<a href="#">Saber mas</a>-->
            </div>
            <div class="personal-1">
                <img src="images/estilista.jpg" alt="">
                <h3>Lorem</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <!--<a href="#">Saber mas</a>-->
            </div>
        </div>
        <!--<a href="#" class="btn-1">Informacion</a>-->
        <button id="btn-1" class="btn btn-info btn-whatsapp" data-phone="2211479338"
            data-message="Hola, me gustaría saber como puedo ser parte del equipo de estilistas.">Formar parte del
            equipo</button>
    </section>

    <footer>
        <div class="footer-bg" id="citas">
            <h2>Reserva una cita</h2>
            <form>
                <!--<div class="campo1">
                    <input type="text" class="campo">
                </div>
                <div class="campo1">
                    <input type="text" class="campo">
                </div>
                <textarea class="campo" name="" id="" cols="30" rows="10"></textarea>
                <input type="submit" class="btn-1" value="Enviar">-->
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio consequuntur, suscipit omnis
                    inventore ut assumenda facilis, voluptatibus temporibus quam vero iste atque enim quis iure
                    veritatis officiis tempore illo nihil!
                </p>
            </form>
            <button id="btn-1" class="btn btn-cita btn-whatsapp" data-phone="2211479338"
                data-message="Hola, me gustaría agendar una cita el dia...">Agendar cita</button>
        </div>

        <div class="comment-section">
            <div class="personal-txt">
                <h2>Deja tu comentario</h2>
            </div>
            <form action="php/guardar_comentario.php" method="POST">
                <label for="username" class="b1">Nombre:</label>
                <div class="campo1">
                    <input type="text" class="campo" id="username" name="username" required><br>
                </div>
                <label for="comment" class="b1">Comentario:</label>
                <textarea class="campo" id="comment" name="comment" rows="4" cols="50" required></textarea><br>
                <!-- Campo oculto para almacenar la fecha actual -->
                <input type="hidden" id="current-date" name="date">
                <button type="submit" id="btn-1">Publicar comentario</button>
            </form>
        </div>

        <div id="comments" class="comments-section">
            <?php
            include("php/conexion.php"); // Incluye el archivo de conexión a la base de datos
            
            // Realiza una consulta para seleccionar solo el año, mes y día de la fecha de la tabla 'comentarios'
            $result = mysqli_query($conexion, "SELECT username, comment, DATE(date) as formatted_date FROM comentarios");

            // Itera a través de los resultados y muestra los comentarios
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<p><strong>" . $row['username'] . ":</strong> " . $row['comment'] . " - <span class='formatted-date'>" . $row['formatted_date'] . "</span></p>";
            }

            // Cierra la conexión a la base de datos
            mysqli_close($conexion);
            ?>
        </div>

        <div class="footer-txt">
            <p>
                CodeWz for a better web
            </p>
        </div>
    </footer>


</body>
<script>
    //Whatsapp
    document.addEventListener("DOMContentLoaded", function () {
        var whatsappButtons = document.querySelectorAll(".btn-whatsapp");
        whatsappButtons.forEach(function (button) {
            button.addEventListener("click", function () {
                var phone = this.getAttribute("data-phone");
                var message = this.getAttribute("data-message");
                var whatsappLink = "https://wa.me/" + phone + "?text=" + encodeURIComponent(message);
                window.open(whatsappLink, "_blank");
            });
        });
    });
</script>

</html>