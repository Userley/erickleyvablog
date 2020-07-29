<?php

include_once('conex.php');

// $dat = filas($Cn, "select * from publicaciones");
$data = mysqli_query($Cn, "select idpublicacion,titulo,contenido,DATE_FORMAT(fecha,'%d %M %Y') as fecha from publicaciones order by idpublicacion desc");


// while ($datos = mysqli_fetch_assoc($dat)) {
//     echo $datos["nombres"];
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Blog cualquiera</title>
</head>

<body class="">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Erick Leyva Blog.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="fotos.php">Fotos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="videos.php">Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="utiles.php">Utiles</a>
                </li>
            </ul>
        </div>
    </nav>
    <main class="container-fluid">

        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 p-3 order-md-1 order-lg-2 order-sm-1 order-xl-2">
                <div class="flex-wrap">
                    <div class="overflow-auto " style="max-width: 100%; max-height: 680px;">

                        <?php

                        while ($valores = mysqli_fetch_assoc($data)) {
                            echo "<div class='card m-2 shadow'>
                            <div class='card-body'>
                            <h5 class='card-title link'><a href='post.php?id=" . $valores["idpublicacion"] . "'> " . $valores["titulo"] . "</a></h5>
                            <p>" . str_replace("img", "img class='img-fluid' ", str_replace("<iframe", "<iframe class='embed-responsive embed-responsive-16by9' ", $valores["contenido"])) . "</p>
                            </div>
                            <div class='card-footer'>
                            <span id='like' ><span id='cantidad'> </span><strong><i id='ico' style='font-size:17px;color:blue' class='fa fa-thumbs-o-up' aria-hidden='true'></i> ¡Está chévere! </strong> </span> - 
                            <i class='fa fa-calendar text-danger' aria-hidden='true'></i> " . $valores["fecha"] . "           
                            </div>
                            </div>";
                        }


                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 order-md-2 order-lg-1 order-sm-2 order-xl-1">
                <div class="card m-2 shadow">
                    <div class="card-body text-center ">
                        <img src="assets/img/userley.jpg" alt="" class="img shadow">
                        <div class="text-center mt-3">
                            <strong>
                                <a href="https://api.whatsapp.com/send?phone=+51993762254" target="_blank"> <i class="fa fa-whatsapp" style="color:green; font-size: 20px;" aria-hidden="true"></i></a>
                                <a href="https://www.facebook.com/userley.diaz.7/" target="_blank"><i class="fa fa-facebook-official" style="font-size: 20px;" aria-hidden="true"></i></a>
                                <a href="https://twitter.com/Userley" target="_blank"><i class="fa fa-twitter" style="color:#1DA1F2;font-size: 20px;" aria-hidden="true"></i></a>
                            </strong>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3 col-sm-12"><label for=""><strong>Nombre:</strong></label></div>
                            <div class="col-md-9 col-sm-12">Erick Martin Leyva Díaz</div>
                            <div class="col-md-3 col-sm-12"><label for=""><strong>Profesión:</strong></label></div>
                            <div class="col-md-9 col-sm-12">Ingeniero de Sistemas</div>
                            <div class="col-md-3 col-sm-12"><label for=""><strong>Trabajo:</strong></label></div>
                            <div class="col-md-9 col-sm-12">Analista de Sistemas</div>
                            <div class="col-md-3 col-sm-12"><label for=""><strong>Correo:</strong></label></div>
                            <div class="col-md-9 col-sm-12">userley.diaz@gmail.com</div>
                            <div class="col-md-3 col-sm-12"><label for=""><strong>Celular:</strong></label></div>
                            <div class="col-md-9 col-sm-12">993.762.254</div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <input type="button" class="btn btn-primary btn-md" value="¡Descargar CV!">
                    </div>
                </div>
                <div class="card m-2 shadow">
                    <div class="card-body">
                        <h5 class="card-title">Links de musicales</h5>
                        <marquee direction="up" onmouseout="this.start()" onmouseover="this.stop()" scrollamount="2">
                            <ul>
                                <li>Link 1</li>
                                <li>Link 2</li>
                                <li>Link 3</li>
                                <li>Link 4</li>
                                <li>Link 5</li>
                            </ul>
                        </marquee>
                    </div>

                </div>
            </div>


            <div class="col-lg-3 col-md-12 col-sm-12 order-md-3 order-lg-3 order-sm-3 order-xl-3">
                <div class="card m-2 shadow">
                    <div class="card-body">
                        <h5 class="card-title"><a class="twitter-timeline" href="https://twitter.com/Userley?ref_src=twsrc%5Etfw">Tweets by Userley</a> </h5>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>
        </div>

    </main>
</body>

</html>