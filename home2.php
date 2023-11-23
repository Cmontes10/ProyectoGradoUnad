<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>CLEM</title>
</head>
<body>
    <?php include_once('header2.php'); ?>

<br><br><br>
    <div class="container-fluid espacio">
        <div class="row" >
            <div class="col-lg-2" id="smoll">
                <!-- Contenido de la sección más grande -->
                <div class="list-group">
                    <button onclick="Mostrar()" class="list-group-item list-group-item-action list-group-item-success">Seccion Noticias</button>
                    <button onclick="Mostrar2()" class="list-group-item list-group-item-action list-group-item-primary">Seccion labor</button>
                    <button onclick="Mostrar3()" class="list-group-item list-group-item-action list-group-item-secondary">Seccion Sedes</button>
                    <button onclick="Mostrar4()" class="list-group-item list-group-item-action list-group-item-danger">Seccion Conejos</button>
                    <button onclick="Mostrar5()" class="list-group-item list-group-item-action list-group-item-warning">Seccion Aves</button>
                    <button onclick="Mostrar6()" class="list-group-item list-group-item-action list-group-item-info">Nuestro block</button>
                    <button onclick="Mostrar7()" class="list-group-item list-group-item-action list-group-item-success">Video Clem</button>
                </div>
            </div>

            <div class="col-lg-8">
                <!-- Contenido de la sección más pequeña -->
                <h2 id="centrado">Sección Noticias</h2>
                    <div id="mostrar" >
                        <div>
                            <img src="img/inicio.png" class="img-fluid img-thumbnail rounded" alt="Responsive image" style=" " id="centrado">
                            <br>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae deleniti, esse odit beatae dolorem eos voluptatibus exercitationem explicabo doloremque omnis eligendi quos numquam vero, harum at. Sint magni ab architecto.
                            </p>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae deleniti, esse odit beatae dolorem eos voluptatibus exercitationem explicabo doloremque omnis eligendi quos numquam vero, harum at. Sint magni ab architecto.
                        </p>
                        </div>

                         <div>
                            <img src="img/clem.png" class="img-fluid img-thumbnail rounded" alt="Responsive image" style=" " id="centrado">
                            <br>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae deleniti, esse odit beatae dolorem eos voluptatibus exercitationem explicabo doloremque omnis eligendi quos numquam vero, harum at. Sint magni ab architecto.
                            </p>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae deleniti, esse odit beatae dolorem eos voluptatibus exercitationem explicabo doloremque omnis eligendi quos numquam vero, harum at. Sint magni ab architecto.
                            </p>
                        </div>

                        <div>
                            <img src="img/espmenor2.png" class="img-fluid img-thumbnail rounded" alt="Responsive image" style=" " id="centrado">
                            <br>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae deleniti, esse odit beatae dolorem eos voluptatibus exercitationem explicabo doloremque omnis eligendi quos numquam vero, harum at. Sint magni ab architecto.
                            </p>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae deleniti, esse odit beatae dolorem eos voluptatibus exercitationem explicabo doloremque omnis eligendi quos numquam vero, harum at. Sint magni ab architecto.
                            </p>
                        </div>
                  </div>

                <div id="mostrar2" style="display: none;">
                        <img src="img/labor1.png" class="img-fluid img-thumbnail rounded" alt="Responsive image" style=" " id="centrado">
                        <br>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae deleniti, esse odit beatae dolorem eos voluptatibus exercitationem explicabo doloremque omnis eligendi quos numquam vero, harum at. Sint magni ab architecto.
                        </p>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae deleniti, esse odit beatae dolorem eos voluptatibus exercitationem explicabo doloremque omnis eligendi quos numquam vero, harum at. Sint magni ab architecto.
                        </p>
                    </div>

                <div id="mostrar3" style="display: none;">
                    <img src="img/sedes.png" class="img-fluid img-thumbnail rounded" alt="Responsive image" style=" " id="centrado">
                    <br>
                     <p>
                         Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae deleniti, esse odit beatae dolorem eos voluptatibus exercitationem explicabo doloremque omnis eligendi quos numquam vero, harum at. Sint magni ab architecto.
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae deleniti, esse odit beatae dolorem eos voluptatibus exercitationem explicabo doloremque omnis eligendi quos numquam vero, harum at. Sint magni ab architecto.
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae deleniti, esse odit beatae dolorem eos voluptatibus exercitationem explicabo doloremque omnis eligendi quos numquam vero, harum at. Sint magni ab architecto.
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae deleniti, esse odit beatae dolorem eos voluptatibus exercitationem explicabo doloremque omnis eligendi quos numquam vero, harum at. Sint magni ab architecto.
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae deleniti, esse odit beatae dolorem eos voluptatibus exercitationem explicabo doloremque omnis eligendi quos numquam vero, harum at. Sint magni ab architecto.
                    </p>
                </div>
                
                <div id="mostrar4" style="display: none;">
                        <div class="row">
                            <div class="card">
                                <img src="img/secion4-1.gif" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h5 class="card-title">Conejos</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Leer mas</a>
                                </div>
                            </div>
                            <br/> <br/>
                        </div>
                    <br>
                     <p>
                         Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae deleniti, esse odit beatae dolorem eos voluptatibus exercitationem explicabo doloremque omnis eligendi quos numquam vero, harum at. Sint magni ab architecto.
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae deleniti, esse odit beatae dolorem eos voluptatibus exercitationem explicabo doloremque omnis eligendi quos numquam vero, harum at. Sint magni ab architecto.
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae deleniti, esse odit beatae dolorem eos voluptatibus exercitationem explicabo doloremque omnis eligendi quos numquam vero, harum at. Sint magni ab architecto.
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae deleniti, esse odit beatae dolorem eos voluptatibus exercitationem explicabo doloremque omnis eligendi quos numquam vero, harum at. Sint magni ab architecto.
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae deleniti, esse odit beatae dolorem eos voluptatibus exercitationem explicabo doloremque omnis eligendi quos numquam vero, harum at. Sint magni ab architecto.
                    </p>
                </div>     
                
                <div id="mostrar5" style="display: none;">
                        <div class="row">
                            <div class="card">
                                <img src="img/seccion4-2.webp" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h5 class="card-title">Aves</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Leer mas</a>
                                </div>
                            </div>
                            <br/> <br/>
                        </div>
                    <br>
                     <p>
                         Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae deleniti, esse odit beatae dolorem eos voluptatibus exercitationem explicabo doloremque omnis eligendi quos numquam vero, harum at. Sint magni ab architecto.
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae deleniti, esse odit beatae dolorem eos voluptatibus exercitationem explicabo doloremque omnis eligendi quos numquam vero, harum at. Sint magni ab architecto.
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae deleniti, esse odit beatae dolorem eos voluptatibus exercitationem explicabo doloremque omnis eligendi quos numquam vero, harum at. Sint magni ab architecto.
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae deleniti, esse odit beatae dolorem eos voluptatibus exercitationem explicabo doloremque omnis eligendi quos numquam vero, harum at. Sint magni ab architecto.
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae deleniti, esse odit beatae dolorem eos voluptatibus exercitationem explicabo doloremque omnis eligendi quos numquam vero, harum at. Sint magni ab architecto.
                    </p>
                </div>  
                
                <div id="mostrar6" style="display: none;">
                    <iframe src="https://sena-clem.blogspot.com/" width="1250" height="700" allow="fullscreen"></iframe>
                </div>    
                
                <div id="mostrar7" style="display: none;">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/watch?v=nqahvhDkpqE" title="YouTube video" allowfullscreen></iframe>
                    </div>
                </div> 

            </div>

            <div class="col-lg-2">
                <!-- Contenido de la sección más pequeña -->
                <h2>Comentarios</h2>
                    <div class="row g-0 bg-body-secondary position-relative">
                        <div class="col-md-6 mb-md-0 p-md-4">
                            <img src="img/clem.png" class="w-100" alt="...">
                        </div>
                    <div class="col-md-6 p-4 ps-md-0">
                        <h5 class="mt-0">Comentarios</h5>
                        <p>Another instance of placeholder content for this other custom component. It is intended to mimic what some real-world content would look like, and we're using it here to give the component a bit of body and size.</p>
                        <a href="#" class="stretched-link">Go somewhere</a>
                    </div>

                    <div class="row g-0 bg-body-secondary position-relative">
                        <div class="col-md-6 mb-md-0 p-md-4">
                            <img src="img/chat.png" class="w-100" alt="...">
                        </div>
                        <div class="col-md-6 p-4 ps-md-0">
                            <h5 class="mt-0">Sugerencias</h5>
                            <p>Another instance of placeholder content for this other custom component. It is intended to mimic what some real-world content would look like, and we're using it here to give the component a bit of body and size.</p>
                            <a href="#" class="stretched-link">Go somewhere</a>
                        </div>
                    </div>

                    <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header">César Augusto Montes Camino</div>
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card text-bg-info mb-3" style="max-width: 18rem;">
                            <div class="card-header">Sebastian Correa M</div>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
            </div>

        </div>
  </div> 

</body>
</html>

<script>
    function Mostrar(){
        document.getElementById('mostrar').style.display = 'block';
        document.getElementById('mostrar2').style.display = 'none';
        document.getElementById('mostrar3').style.display = 'none';
        document.getElementById('mostrar4').style.display = 'none';
        document.getElementById('mostrar5').style.display = 'none';
        document.getElementById('mostrar6').style.display = 'none';
        document.getElementById('mostrar7').style.display = 'none';
     }
     function Mostrar2(){
        document.getElementById('mostrar2').style.display = 'block';
        document.getElementById('mostrar').style.display = 'none';
        document.getElementById('mostrar3').style.display = 'none';
        document.getElementById('mostrar4').style.display = 'none';
        document.getElementById('mostrar5').style.display = 'none';
        document.getElementById('mostrar6').style.display = 'none';
        document.getElementById('mostrar7').style.display = 'none';
     }
     function Mostrar3(){
        document.getElementById('mostrar3').style.display = 'block';
        document.getElementById('mostrar2').style.display = 'none';
        document.getElementById('mostrar').style.display = 'none';
        document.getElementById('mostrar4').style.display = 'none';
        document.getElementById('mostrar5').style.display = 'none';
        document.getElementById('mostrar6').style.display = 'none';
        document.getElementById('mostrar7').style.display = 'none';
     }
     function Mostrar4(){
        document.getElementById('mostrar4').style.display = 'block';
        document.getElementById('mostrar2').style.display = 'none';
        document.getElementById('mostrar').style.display = 'none';
        document.getElementById('mostrar3').style.display = 'none';
        document.getElementById('mostrar5').style.display = 'none';
        document.getElementById('mostrar6').style.display = 'none';
        document.getElementById('mostrar7').style.display = 'none';
     }

     function Mostrar5(){
        document.getElementById('mostrar5').style.display = 'block';
        document.getElementById('mostrar2').style.display = 'none';
        document.getElementById('mostrar').style.display = 'none';
        document.getElementById('mostrar3').style.display = 'none';
        document.getElementById('mostrar4').style.display = 'none';
        document.getElementById('mostrar6').style.display = 'none';
        document.getElementById('mostrar7').style.display = 'none';
     }    

     function Mostrar6(){
        document.getElementById('mostrar6').style.display = 'block';
        document.getElementById('mostrar2').style.display = 'none';
        document.getElementById('mostrar').style.display = 'none';
        document.getElementById('mostrar3').style.display = 'none';
        document.getElementById('mostrar4').style.display = 'none';
        document.getElementById('mostrar5').style.display = 'none';
        document.getElementById('mostrar7').style.display = 'none';
     }     

     function Mostrar7(){
        document.getElementById('mostrar7').style.display = 'block';
        document.getElementById('mostrar2').style.display = 'none';
        document.getElementById('mostrar').style.display = 'none';
        document.getElementById('mostrar3').style.display = 'none';
        document.getElementById('mostrar4').style.display = 'none';
        document.getElementById('mostrar5').style.display = 'none';
        document.getElementById('mostrar6').style.display = 'none';
     }       
</script>
