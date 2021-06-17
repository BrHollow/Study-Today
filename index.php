<?php
    include "import.php";

    //Cadastro
        if (isset($_POST['comecar'])) {
            $Nome = $_POST['nome'];
            $Email = $_POST['email'];
            $Senha = $_POST['senha'];
            $ConfSenha = $_POST['Confsenha'];

            if($ConfSenha == $Senha){
                $consulta = mysqli_query($conn, "SELECT * FROM cadastro_login WHERE email='$Email'");
                $linha = mysqli_num_rows($consulta);
         
         
                if($linha == 1){
                    echo  "<script>alert('Este endereço de email já está sendo usado'); history.back();</script>";
                }
                else{
                    $hash = generateHash();
                    mysqli_query($conn, "INSERT INTO cadastro_login(nome, email, senha, hash) VALUES ('$Nome','$Email','$Senha', '$hash')");
                    
                }           
                }
            
            else{
                echo "<script>alert('Você digitou duas senhas diferentes'); history.back();</script>";
            }
        }


    //Login
        if (isset($_POST['confirmar'])) {
            $LogEmail = $_POST['Logemail'];
            $LogSenha = $_POST['Logsenha'];

            $consulta = mysqli_query($conn, "SELECT * FROM cadastro_login WHERE email = '$LogEmail'");

            if(mysqli_num_rows($consulta) > 0){
                    $arr = mysqli_fetch_array($consulta);
                    if ($LogSenha == $arr['senha']) {
                        setcookie("hash", $arr['hash']);
                        header("Location: Menu.php");
                    }
                }
                else{
                     echo "<script>alert('Você não está cadastrado');</script>";
                }           
        }

 ?>

<!DOCTYPE html>

<html lang="en">



<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Landing PAGE Html5 Template">

    <meta name="keywords" content="landing,startup,flat">

    <meta name="author" content="Made By GN DESIGNS">



    <title>Study Today</title>



    <!-- // Plugins (css files) // -->

    <link href="Layout/js/plugins/bootsnav_files/skins/color.css" rel="stylesheet">

    <link href="Layout/js/plugins/bootsnav_files/css/animate.css" rel="stylesheet">

    <link href="Layout/js/plugins/bootsnav_files/css/bootsnav.css" rel="stylesheet">

    <link href="Layout/js/plugins/bootsnav_files/css/overwrite.css" rel="stylesheet">

    <link href="Layout/js/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">

    <link href="Layout/js/plugins/owl-carousel/owl.theme.css" rel="stylesheet">

    <link href="Layout/js/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">

    <link href="Layout/js/plugins/Magnific-Popup-master/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">

    <!--// icones //-->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--// Boostrap e Main //-->

    <link href="Layout/bootstrap-3.3.7/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="Layout/css/main.css" rel="stylesheet">

</head>



<body>



    <!--======================================== 

           Tela de carregamento

    ========================================-->

    <div class="page-preloader">

        <div class="spinner">

            <div class="rect1"></div>

            <div class="rect2"></div>

            <div class="rect3"></div>

            <div class="rect4"></div>

            <div class="rect5"></div>

        </div>

    </div>



    <!--======================================== 

           Cabeçalho

    ========================================-->



    <!--//** Navegação **//-->

    <nav class="navbar navbar-default navbar-fixed white no-background bootsnav navbar-scrollspy" data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">



        <div class="container">

            <!-- começo do cabeçalho Navegação -->

            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">

                    <i class="fa fa-bars"></i>

                </button>

                <a class="navbar-brand" href="#brand">

                    <img src="Layout/img/logo.png" class="logo" alt="logo">

                </a>

            </div>

            <!-- Fim do cabeçalho navegação -->



            <!-- seleções -->

            <div class="collapse navbar-collapse" id="navbar-menu">

                <ul class="nav navbar-nav navbar-right">

                    <li class="active scroll"><a href="#home">Inicial</a></li>

                    <li class="scroll"><a href="#about">Detalhes</a></li>

                    <li class="scroll"><a href="#services">Servições</a></li>

                    <li class="scroll"><a href="#price">Vip</a></li>

                    <li class="scroll"><a href="#team">Equipe Study</a></li>

                    <li class="scroll"><a href="#clients">Patrocinadores</a></li>

                    <li class="scroll"><a href="#contact">Contato</a></li>

                    <li class="button-holder">

                        <button type="button" class="btn btn-blue navbar-btn" data-toggle="modal" data-target="#SignIn">Já é um Studioso? Click aqui!</button>

                    </li>

                </ul>

            </div>

            <!-- /.navbar-collapse -->

        </div>

    </nav>



    <!--//** Principal**//-->

    <section id="home">

        <div class="container">

            <div class="row">

                <div id="particles-js"></div>

                <!-- Introdução -->

                <div class="col-md-6 caption">

                    <h1>Study Today Te Ama!</h1>

                    <h2>

                           Aluno Study é nota 10
                            <span class="typed-cursor"></span>

                        </h2>

                    <p>Sempre em prol de sua aprendizagem de forma mais interativa.</p>

                    <a href="#" class="btn btn-transparent">Conhecer equipe</a>

                    <a class="btn btn-blue popup-youtube" href="">

                        <i class="material-icons">play_circle_filled</i>Canal Study Today

                    </a>

                </div>

                <!-- Sign Up -->

                <div class="col-md-5 col-md-offset-1">

                    <form class="signup-form" method="POST">

                        <h2 class="text-center">Virar um Studioso Show</h2>

                        <hr>

                        <div class="form-group">

                            <input type="text" class="form-control" placeholder="Seu nome" name="nome" required="required">

                        </div>

                        <div class="form-group">

                            <input type="email" class="form-control" placeholder="Seu e-mail" name="email" required="required">

                        </div>

                        <div class="form-group">

                            <input type="password" class="form-control" placeholder="Sua senha" name="senha" required="required">

                        </div>

                        <div class="form-group">

                            <input type="password" class="form-control" placeholder="Confirme sua senha" name="Confsenha" required="required">

                        </div>

                        <div class="form-group text-center">

                            <button type="submit" href="menu/Menu.html" class="btn btn-blue btn-block" name="comecar">Pronto</button>

                        </div>

                    </form>

                </div>

            </div>

        </div>



    </section>



    <!--======================================== 

           Detalhes

    ========================================-->




    <!--======================================== 

           História

    ========================================-->



    <section id="story">

        <div class="container-fluid">

            <div class="row">

                <!-- Img -->

                <div class="col-md-6 story-bg">

                </div>

                <!-- Story Caption -->

                <div class="col-md-6">

                    <div class="story-content">

                        <h2>Study Today Show</h2>

                        <p class="story-quote">

                            " A um passo para seus dias de sucesso, garanta seu 10"

                        </p>

                        <div class="story-text">

                            <p>A Study Today trás para você a melhor forma de aprendizagem, junto a seu metodo exclusivo e interativo de aprender, em breve com cursos curriculares.</p>

                        </div>

                        <a href="#" class="btn btn-white">Cadastrar</a>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!--======================================== 

           Servições

    ========================================-->



    <section id="services" class="section-padding">

        <div class="container">

            <h2>O que ofereçemos</h2>

          

            <div class="row">

                <div class="col-md-3">

                    <div class="icon-box">

                        <i class="material-icons">thumb_up</i>

                        <h4>Conteúdos de Qualidade</h4>

                       

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="icon-box">

                        <i class="material-icons">add_shopping_cart</i>

                        <h4>Compras Web</h4>
                     

                    </div>
     

                </div>

                <div class="col-md-3">

                    <div class="icon-box">

                        <i class="material-icons">view_carousel</i>

                        <h4>Páginas Interativas</h4>

                       

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!--======================================== 

              Sobre a Conta Vip          

    ========================================-->



    <section id="features">

        <div class="container">

            <div class="row">

                <div class="col-md-6">

                    <h2>Sobre sua conta Vip</h2>

                    <p>voçê terá acesso a conteúdos exclusivos, aulas online, e curso curricular, sem falar do simbolo vip que será exibido em seu perfil, se torne um Studioso Vip!</p>

                    <hr>

                    <div class="feat-media">

                        <!-- Pagamento -->

                        <div class="media">

                            <div class="media-left">

                                <a href="#">

                                    <i class="material-icons">monetization_on</i>

                                </a>

                            </div>

                            <div class="media-body">

                                <h4 class="media-heading">Fácil Pagamento</h4>

                                <p>Pagamento totalmente fácil, simples e seguro!</p>

                            </div>

                        </div>

                        <!-- Tempo -->

                        <div class="media">

                            <div class="media-left">

                                <a href="#">

                                    <i class="material-icons">access_time</i>

                                </a>

                            </div>

                            <div class="media-body">

                                <h4 class="media-heading">Tempo salvo em sua leitura</h4>

                                <p>Seu tempo e local aonde terminou sua leitura pela última vez serão salvas, assim como a páginas para que vocês possa continuar sua leitura melhor. </p>

                            </div>

                        </div>

                        <!-- Cursos -->

                        <div class="media">

                            <div class="media-left">

                                <a href="#">

                                    <i class="material-icons">computer</i>

                                </a>

                            </div>

                            <div class="media-body">

                                <h4 class="media-heading">Primeiro Curso</h4>

                                <p>Será privilegiado gratuitamente com seu primeiro curso, já pensou em se tornar técnico em informática? essa é a hora!</p>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Features Img -->

                <div class="col-md-6 col-md-push-2">

                    <img src="Layout/img/dashboard.png" class="img-responsive" alt="feature">

                </div>

            </div>

        </div>

    </section>



    <!--======================================== 

           Vip

    ========================================-->



   

    <section id="clients" class="section-padding">

        <div class="container">

            <div class="row">

                <h2>Nossos Patrocinadores</h2>

                <p>Empresas que nos patrocinam para que possamos dar tudo de melhor para nossos Studiosos.</p>

                <!--// Patrocinadores Imagens //-->

                <div class="clients-images">

                    <div id="owl-clients">

                        <div class="item"><img src="Layout/img/clients/c_logo01.png" class="center-block" alt="client"></div>

                        <div class="item"><img src="Layout/img/clients/c_logo02.png" class="center-block" alt="client"></div>

                        <div class="item"><img src="Layout/img/clients/c_logo03.png" class="center-block" alt="client"></div>

                        <div class="item"><img src="Layout/img/clients/c_logo04.png" class="center-block" alt="client"></div>

                        <div class="item"><img src="Layout/img/clients/c_logo05.png" class="center-block" alt="client"></div>

                        <div class="item"><img src="Layout/img/clients/c_logo06.png" class="center-block" alt="client"></div>

                    </div>

                </div>

                <!--// Clients Testimonials //-->

                <div id="owl-testimonials">

                    <div class="item">

                        <i class="material-icons">mood</i>

                        <p class="quote">É com enorme prazer que fechamos patrocinio com a Study Today, afim que juntos possamos ajudar mais ainda nossos jovens estudantes.</p>

                        <h4>-Carlos, Fárias Brito.</h4>

                    </div>

                    <div class="item">

                        <i class="material-icons">mood</i>

                        <p class="quote">É com enorme prazer que fechamos patrocinio com a Study Today, afim que juntos possamos ajudar mais ainda nossos jovens estudantes.</p>

                        <h4>-Ricardo, Macavi.</h4>

                    </div>

                    <div class="item">

                        <i class="material-icons">mood</i>

                        <p class="quote">É com enorme prazer que fechamos patrocinio com a Study Today, afim que juntos possamos ajudar mais ainda nossos jovens estudantes.</p>

                        <h4>-João Bosco, Loiro Variedades.</h4>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!--======================================== 

           Convite

    ========================================-->



    <section id="newsletter">

        <div class="container">

            <div class="row">

                <h3>Também deseja nos patrocinar?</h3>

                <div class="form-container">

                    <form class="form-inline">

                        <input type="email" class="form-control" id="newsletter-form" placeholder="Email" required="required">

                        <button type="submit" class="btn btn-white">Envie seu e-mail</button>

                    </form>

                </div>

            </div>

        </div>

    </section>



    <!--======================================== 

           Nossos Contatos

    ========================================-->



    <section id="contact" class="section-padding">

        <div class="container">

            <h2>Fale Conosco</h2>

            

        </div>

        <!-- Contato informações -->

        <div class="container contact-info">

            <div class="row">

                <div class="col-md-4">

                    <div class="icon-box">

                        <i class="material-icons">place</i>

                        <h4>Localização</h4>

                        <p>Baturité-CE</p>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="icon-box">

                        <i class="material-icons">phone</i>

                        <h4>Telefone</h4>

                        <p>55-834527694</p>

                        <p>55-834527694</p>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="icon-box">

                        <i class="material-icons">email</i>

                        <h4>Nosso E-mail</h4>

                        <p>StudyToday@gmail.com</p>

                    </div>

                </div>

            </div>

        </div>

        <div class="contact-forms">

            <div class="container">
<br>
<br>
                <h2>Deseja trabalhar na Study?</h2>

                <form class="contact-form">

                    <div class="col-md-6">

                        <div class="form-group">

                            <input type="text" class="form-control" placeholder="Seu nome" required="required">

                        </div>

                        <div class="form-group">

                            <input type="email" class="form-control" placeholder="Email" required="required">

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form-group">

                            <textarea class="form-control" rows="3" placeholder="Menssagem"></textarea>

                        </div>

                    </div>

                    <button type="submit" class="btn btn-blue">Enviar Menssagem</button>

                </form>

            </div>

        </div>

    </section>



    <!--======================================== 

           Roda Pé 

    ========================================-->



    <footer>

        <div class="container">

            <div class="row">

                <div class="footer-caption">

                    <img src="Layout/img/logo.png" class="img-responsive center-block" alt="logo">

                    <hr>

                    <h5 class="pull-left">Study Today, &copy;2019</h5>

                    <ul class="liste-unstyled pull-right">

                        <li><a href="#facebook"><i class="fa fa-facebook"></i></a></li>

                        <li><a href="#twitter"><i class="fa fa-twitter"></i></a></li>

                        <li><a href="#linkedin"><i class="fa fa-linkedin"></i></a></li>

                        <li><a href="#instagram"><i class="fa fa-instagram"></i></a></li>

                    </ul>

                </div>

            </div>

        </div>

    </footer>



    <!--======================================== 

           Login

    ========================================-->

    <!-- Login -->



    <div class="modal fade" id="SignIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    <h4 class="modal-title text-center" id="myModalLabel">Login</h4>

                </div>

                <div class="modal-body">

                    <form class="signup-form" method="POST">

                        <div class="form-group">

                            <input type="email" class="form-control" placeholder="Seu email" name="Logemail" required="required">

                        </div>

                        <div class="form-group">

                            <input type="password" class="form-control" placeholder="Sua senha" name="Logsenha" required="required">

                        </div>

                        <div class="form-group text-center">

                            <button type="submit" class="btn btn-blue btn-block" name="confirmar">Entrar</button>

                        </div>

                    </form>

                </div>

                <div class="modal-footer text-center">

                    <a href="#">Esqueceu sua senha? /</a>

                    <a href="#">Ajuda</a>

                </div>

            </div>

        </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="Layout/bootstrap-3.3.7/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

    <script src="Layout/js/plugins/owl-carousel/owl.carousel.min.js"></script>

    <script src="Layout/js/plugins/bootsnav_files/js/bootsnav.js"></script>

    <script src="Layout/js/plugins/typed.js-master/typed.js-master/dist/typed.min.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js"></script>

    <script src="Layout/js/plugins/Magnific-Popup-master/Magnific-Popup-master/dist/jquery.magnific-popup.js"></script>

    <script src="Layout/js/plugins/particles.js-master/particles.js-master/particles.min.js"></script>

    <script src="Layout/js/particales-script.js"></script>

    <script src="Layout/js/main.js"></script>

</body>



</html>