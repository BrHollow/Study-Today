<?php
    include "import.php";
    $hash = $_COOKIE['hash'];
    $consulta = mysqli_query($conn, "SELECT * FROM cadastro_login WHERE hash = '$hash'");
    $arr = mysqli_fetch_array($consulta);

 ?>

<!DOCTYPE html>
<html>
  <!--Head-->
  <head>    
    <meta charset="utf-8">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="Css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="Css/custom.css">
      <link rel="stylesheet" type="text/css" href="Css/index.css">
      <link rel="icon" href="img/iconS.png">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style type="text/css">/* Chart.js */
      @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>

    <title>Study Today</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="Css/app-assets/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="Css/app-assets/vendors/animate-css/animate.css">
    <link rel="stylesheet" type="text/css" href="Css/app-assets/vendors/chartist-js/chartist.min.css">
    <link rel="stylesheet" type="text/css" href="Css/app-assets/vendors/chartist-js/chartist-plugin-tooltip.css">

    <link rel="stylesheet" type="text/css" href="Css/app-assets/css/themes/materialize.css">
    <link rel="stylesheet" type="text/css" href="Css/app-assets/css/themes/style.css">
    <link rel="stylesheet" type="text/css" href="Css/app-assets/css/pages/dashboard-modern.css">
    <link rel="stylesheet" type="text/css" href="Css/app-assets/css/pages/intro.css">

    <link rel="stylesheet" type="text/css" href="Css/app-assets/css/custom/custom.css">
    <link rel="stylesheet" type="text/css" href="Css/app-assets/icons/MaterialIcons-Regular.ttf">

  </head>
  <!--Head-->

  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 2-columns" data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

    <!--Header-->
    <header class="page-topbar" id="header">
      <div class="navbar navbar-fixed"> 
        <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-indigo-purple no-shadow">
          <div class="nav-wrapper">

            <div class="header-search-wrapper hide-on-med-and-down"><i class="material-icons">search</i>
              <input class="header-search-input z-depth-2" type="text" name="Search" placeholder="Explore Today">
            </div>
            <ul class="navbar-list right">
              
              <li class="hide-on-med-and-down"><a class="toggle-fullscreen" href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>
              <li class="hide-on-large-only"><a class=" search-button" href="javascript:void(0);"><i class="material-icons">search</i></a></li>
              <li><a class="notification-button" href="javascript:void(0);"data-target="notifications-dropdown"><i class="material-icons">notifications_none<small class="notification-badge">S</small></i></a></li>
              <li><a class="profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="img/iconS.png" alt="avatar"><i></i></span></a></li>
              <li><a class="sidenav-trigger" href="#" data-target="slide-out-right"><i class="material-icons">format_indent_increase</i></a></li>
            </ul>
      
            <!-- notifications-dropdown-->
            <ul class="dropdown-content" id="notifications-dropdown">
              <li>
                <h6>NOTIFICAÇÕES<span class=" badge">5</span></h6>
              </li>
              <li class="divider"></li>
              <li><a class="grey-text text-darken-2" href="#!"><span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> Seus pedidos foram salvos!</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 horas atrás</time>
              </li>
              <li><a class="grey-text text-darken-2" href="#!"><span class="material-icons icon-bg-circle red small">stars</span> Complete seu novo desafio!</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 dias atrás</time>
              </li>
              <li><a class="grey-text text-darken-2" href="#!"><span class="material-icons icon-bg-circle teal small">settings</span> Novas configurações foram atualizadas!</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 dias atrás</time>
              </li>
              <li><a class="grey-text text-darken-2" href="#!"><span class="material-icons icon-bg-circle deep-orange small">today</span> O dia chegou!</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 dias atrás</time>
              </li>
              <li><a class="grey-text text-darken-2" href="#!"><span class="material-icons icon-bg-circle amber small">trending_up</span> Confira seus gráficos</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 mês atrás</time>
              </li>
            </ul>
            <!-- profile-dropdown-->
            <ul class="dropdown-content" id="profile-dropdown">
              <li><a class="grey-text text-darken-1" href="#"><i class="material-icons">person_outline</i> Perfil</a></li>
              <li><a class="grey-text text-darken-1" href="#"><i class="material-icons">chat_bubble_outline</i> Bate-Papo</a></li>
              <li><a class="grey-text text-darken-1" href="#"><i class="material-icons">help_outline</i> Ajuda</a></li>
              <li class="divider"></li>
              <li><a class="grey-text text-darken-1" href="#"><i class="material-icons">lock_outline</i> Segurança</a></li>
              <li><a class="grey-text text-darken-1" href="sair.php"><i class="material-icons">keyboard_tab</i> Sair</a></li>
            </ul>
          </div>
          <nav class="display-none search-sm">
            <div class="nav-wrapper">
              <form>
                <div class="input-field">
                  <input class="search-box-sm" type="search" required="">
                  <label class="label-icon" for="search"><i class="material-icons search-sm-icon">search</i></label><i class="material-icons search-sm-close">close</i>
                </div>
              </form>
            </div>
          </nav>
        </nav>
      </div>
    </header>
    <!--Header-->

    <!--SideNav-->
    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
      <div class="brand-sidebar">
        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="Menu.php"><span class="logo-text hide-on-med-and-down">Study Today</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
      </div>

      <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow ps ps--active-y" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion" style="transform: translateX(20px);">
      	
        <li class="active bold"><a class="collapsible-body active" class="collapsible-header waves-cyan " href="Menu.php"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="">Study</span></a>
          <div class="collapsible-body">
            
          </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-cyan " href="#"><i class="material-icons"></i><span class="menu-title" data-i18n="">Pacotes PRO</span></a>

        </li>
        <li class="navigation-header"><a class="navigation-header-text">Materiais</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class=" waves-cyan " href="RedNote.php"><i class="material-icons">mail_outline</i><span class="menu-title" data-i18n="">RedNot</span></a>
        </li>
        <li class="bold"><a class=" waves-cyan " href="TécnicasDeAprendizagem.php"><i class="material-icons">chat_bubble_outline</i><span class="menu-title" data-i18n="">Técnicas de aprendizagem</span></a>
        </li>
        <li class="bold"><a class=" waves-cyan " href="Cronogramas.php"><i class="material-icons">today</i><span class="menu-title" data-i18n="">Calendário / Cronogramas</span></a>
        </li>
        <li class="bold"><a class="waves-cyan " href="MapasMentais.php"><i class="material-icons">import_contacts</i><span class="menu-title" data-i18n="">Mapas mentais</span></a>
        </li>
        </li>
        <li class="bold"><a class="collapsible-header waves-cyan " href="#"><i class="material-icons">add_shopping_cart</i><span class="menu-title" data-i18n="">Compras Web</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="collapsible-body" href="ProdutosDaPage.php" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Produtos da página</span></a>
          
          </div>
        </li>
        <li class="bold"><a class=" waves-cyan " href="suporte.php"><i class="material-icons">help_outline</i><span class="menu-title" data-i18n="">Support</span></a>
        </li>
      </ul>
      <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium  waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="col s12">
          <div class="container">
            <!--card stats start-->
<div id="card-stats">
   <div class="row">
      <div class="col s12 m6 l6 xl3">
         <div class="card gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text animate fadeLeft">
            <div class="padding-4">
               <div class="col s7 m7">
                <p>"Aprender é a única coisa que a mente nunca se cansa, nunca tem medo e nunca se arrepende"</p>
               </div>
               <div class="col s5 m5 right-align">
                  <h5 class="mb-0 white-text"></h5>
                  <p class="no-margin"></p>
                  <p></p>
               </div>
            </div>
         </div>
      </div>
      <div class="col s12 m6 l6 xl3">
         <div class="card gradient-45deg-red-pink gradient-shadow min-height-100 white-text animate fadeLeft">
            <div class="padding-4">
               <div class="col s7 m7">
                  
                  <p>"Se todo mundo pensa diferente, oque faz todo mundo aprender igual?"</p>
               </div>
               <div class="col s5 m5 right-align">
                  <h5 class="mb-0 white-text"></h5>
                  <p class="no-margin"></p>
                  <p></p>
               </div>
            </div>
         </div>
      </div>
      <div class="col s12 m6 l6 xl3">
         <div class="card gradient-45deg-amber-amber gradient-shadow min-height-100 white-text animate fadeRight">
            <div class="padding-4">
               <div class="col s7 m7">
                  
                  <p>"Aquele que não luta pelo futuro que quer, deve aceitar o futuro que vier"</p>
               </div>
               <div class="col s5 m5 right-align">
                  <h5 class="mb-0 white-text"></h5>
                  <p class="no-margin"></p>
                  <p></p>
               </div>
            </div>
         </div>
      </div>
      <div class="col s12 m6 l6 xl3">
         <div class="card gradient-45deg-green-teal gradient-shadow min-height-100 white-text animate fadeRight">
            <div class="padding-4">
               <div class="col s7 m7">
                 
                  <p>"É fazendo que se aprende, aquilo que se deve aprender a fazer"</p>
               </div>
               <div class="col s5 m5 right-align">
                  <h5 class="mb-0 white-text"></h5>
                  <p class="no-margin"></p>
                  <p></p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--card stats end-->
<!--yearly & weekly revenue chart start-->
<div id="sales-chart">
   <div class="row">
      <div class="col s12 m8 l8">
         <div id="revenue-chart" class="card animate fadeUp">
            <div class="card-content">
               <h4 >
                  Aqui é onde sua aprendizagem:
                  <span class="purple-text small text-darken-1 ml-1">
                     <i class="material-icons">keyboard_arrow_up</i>Sobe</span>
               </h4>
               <div class="row">
                  <div class="col s12">
                     <div class="yearly-revenue-chart">
                        <h1>Bem Vindo(a) a Study Today, <?php echo $arr['nome']; ?></h1>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col s12 m4 l4">
         <div id="weekly-earning" class="card animate fadeUp">
            <div class="card-content">
              <center><h5>Novas Nóticias</h5></center>
              <img src="img/TecAp/3M.jpg" alt="" class="responsive-img" />
                  <center><a href="RedNote.html" class="waves-effect waves-light btn gradient-45deg-purple-deep-orange gradient-shadow">Vizualizar</a></center>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--yearly & weekly revenue chart end-->
<!-- Member online, Currunt Server load & Today's Revenue Chart start -->
<div id="daily-data-chart">
   <div class="row">
      <div class="col s12 m4 l4">
         <div class="card pt-0 pb-0 animate fadeLeft">
            <div class="padding-2 ml-2">
               <span class=" badge gradient-45deg-light-blue-cyan gradient-shadow mt-2 mr-2">Cheque as novas técnicas de aprendizagem</span>
               <p class="mt-2 mb-0"></p>
               <p class="no-margin grey-text lighten-3"></p>
               <br><h5>Organizar é não procrastinar!</h5>
               <img src="img/TecAp/2M.jpg" alt="" class="responsive-img" />
            </div>
            <div class="row">
               <div class="sample-chart-wrapper" style="margin-bottom: -14px; margin-top: -75px;">
                  <canvas id="custom-line-chart-sample-one" class="center"></canvas>
               </div>
            </div>
         </div>
      </div>
      <div class="col s12 m4 l4 animate fadeUp">
         <div class="card pt-0 pb-0">
            <div class="padding-2 ml-2">
               <span class=" badge gradient-45deg-purple-deep-orange gradient-shadow mt-2 mr-2">Feliz dia dos namorados! Aproveite nosso site</span>
               <p class="mt-2 mb-0"></p>
               <p class="no-margin grey-text lighten-3"></p>
               <h5>Namore os livros</h5>
               <img src="img/Menu/1M.jpg" alt="" class="responsive-img" />
            </div>
            <div class="row">
               <div class="sample-chart-wrapper" style="margin-bottom: -14px; margin-top: -75px;">
                  <canvas id="custom-line-chart-sample-two" class="center"></canvas>
               </div>
            </div>
         </div>
      </div>
      <div class="col s12 m4 l4">
         <div class="card pt-0 pb-0 animate fadeRight">
            <div class="padding-2 ml-2">
               <span class="badge gradient-45deg-amber-amber gradient-shadow mt-2 mr-2">+ 12 Visitantes</span>
               <p class="mt-2 mb-0">Página cresce</p>
               <p class="no-margin grey-text lighten-3">Mês: Junho</p>
               <h5>Semana: + 7</h5>
            </div>
            <div class="row">
               <div class="sample-chart-wrapper" style="margin-bottom: -14px; margin-top: -75px;">
                  <canvas id="custom-line-chart-sample-three" class="center"></canvas>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Member online, Currunt Server load & Today's Revenue Chart start -->
<!-- ecommerce product start-->
<div id="ecommerce-product">
   <div class="row">
      <div class="col s12 m4">
         <div class="card animate fadeLeft">
            <div class="card-content  center">
               <h6 class="card-title font-weight-400 mb-0">Confira na loja!</h6>
               <img src="img/Menu/2M.jpg" alt="" class="responsive-img" />

               <p><b>clique aqui!</b></p>
               
            </div>
            <div class="card-action border-non center">
               <a class="waves-effect waves-light btn gradient-45deg-light-blue-cyan box-shadow">Ver</a>
            </div>
         </div>
      </div>
      <div class="col s12 m4">
         <div class="card animate fadeUp">
            <div class="card-content">
               <span class="card-title center-align">Novos itens!</span>
               <img src="img/Menu/3M.jpg" alt="" class="responsive-img" />

            </div>
            <div class="card-action pt-0">
               <p class=""><img src="img/Menu/5M.jpg" alt="" class="responsive-img" />
</p>
            </div>
            <div class="card-action pt-0">
               <p class=""></p>
               <div class="switch">
               </div>
            </div>
         </div>
      </div>
      <div class="col s12 m4">
         <div class="card animate fadeRight">
            <div class="card-content center">
               <h6 class="card-title font-weight-400 mb-0">Não perca!</h6>
               <img src="img/Menu/4M.jpg" alt="" class="responsive-img" />
            </div>
            <div class="card-action border-non center">
               <a class="waves-effect waves-light btn gradient-45deg-red-pink box-shadow">Ver</a>
            </div>
         </div>
      </div>
   </div>
   <!-- ecommerce product end-->
   
<!-- START RIGHT SIDEBAR NAV -->

            <!-- Intro -->

<div id="intro">
    <div class="row">
        <div class="col s12">

            <div id="img-modal" class="modal white">
                <div class="modal-content">
                    <div class="bg-img-div"></div>
                    <p class="modal-header right modal-close">
                        Sair <span class="right"><i class="material-icons right-align">clear</i></span>
                    </p>
                    <div class="carousel carousel-slider center intro-carousel">
                        <div class="carousel-fixed-item center middle-indicator">
                            <div class="left">
                                <button class="movePrevCarousel middle-indicator-text btn btn-flat purple-text waves-effect waves-light btn-prev">
                                    <i class="material-icons">navigate_before</i> <span class="hide-on-small-only">Voltar</span>
                                </button>
                            </div>

                            <div class="right">
                                <button class=" moveNextCarousel middle-indicator-text btn btn-flat purple-text waves-effect waves-light btn-next">
                                    <span class="hide-on-small-only">Avançar</span> <i class="material-icons">navigate_next</i>
                                </button>
                            </div>
                        </div>
                        <div class="carousel-item slide-1">
                            <img src="img/ss fundo.png" alt="" class="responsive-img animated fadeInUp slide-1-img">
                            <h5 class="intro-step-title mt-7 center animated fadeInUp">Welcome to Study Today</h5>
                            <p class="intro-step-text mt-5 animated fadeInUp">Study Today é um site voltado a aprender a aprender
                                Somos especialistas em organizar e viabilizar seus estudos
                                Aproveite sua navegação em nossa webpage</p>
                        </div>
                        <div class="carousel-item slide-2">
                            <img src="#" alt="" class="responsive-img slide-2-img">
                            <h5 class="intro-step-title mt-7 center">Vamos alterar ao seu gosto</h5>
                            <p class="intro-step-text mt-5">Nosso website é customizavel de acordo com o usuário!</p>
                            <div class="row">
                                <div class="col s6">
                                    <div class="input-field">
                                        <label for="first_name">Nome</label>
                                        <input placeholder="Name" id="first_name" type="text" class="validate">
                                    </div>
                                </div>
                                <div class="col s6">
                                    <div class="input-field">
                                        <select>
                                            <option value="" disabled selected>Escolha uma opção</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                        </select>
                                        <label>Selecionar estilo</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item slide-3">
                            
                            <h5 class="intro-step-title mt-7 center">Disponibilizamos</h5>
                            <div class="row">
                                <div class="col m5 offset-m1 s12">
                                    <ul class="feature-list left-align">
                                        <li><i class="material-icons">check</i> Conteúdo Redação</li>
                                        <li><i class="material-icons">check</i> Técnicas de aprendizagem</li>
                                        <li><i class="material-icons">check</i> Cronogramas</li>
                                    </ul>
                                </div>
                                <div class="col m6 s12">
                                    <ul class="feature-list left-align">
                                        <li><i class="material-icons">check</i> Mapas mentais</li>
                                        <li><i class="material-icons">check</i> Calendário notificante</li>
                                        <li><i class="material-icons">check</i> E muito mais...</li>
                                    </ul> 
                                </div>
                                <div class="row">
                                    <div class="col s12 center">
                                        <button class="get-started btn waves-effect waves-light gradient-45deg-purple-deep-orange mt-3 modal-close">Vamos lá.</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Intro-->
          </div>
        </div>
      </div>
    </div>
    <!--Page Main-->

    <!--Customizável-->

<a
   href="#"
   data-target="theme-cutomizer-out"
   class="btn btn-customizer pink accent-2 white-text sidenav-trigger theme-cutomizer-trigger"
   ><i class="material-icons">settings</i></a
>

<div id="theme-cutomizer-out" class="theme-cutomizer sidenav row">
   <div class="col s12">
      <a class="sidenav-close" href="#!"><i class="material-icons">close</i></a>
      <h5 class="theme-cutomizer-title">Customizador</h5>
      <p class="medium-small">Customize a seu modo</p>
      <div class="menu-options">
         <h6 class="mt-6">Opções de menu</h6>
         <hr class="customize-devider" />
         <div class="menu-options-form row">
            <div class="input-field col s12 menu-color mb-0">
               <p class="mt-0">Cores</p>
               <div class="gradient-color center-align">
                  <span class="menu-color-option gradient-45deg-indigo-blue" data-color="gradient-45deg-indigo-blue"></span>
                  <span
                     class="menu-color-option gradient-45deg-purple-deep-orange"
                     data-color="gradient-45deg-purple-deep-orange"
                  ></span>
                  <span
                     class="menu-color-option gradient-45deg-light-blue-cyan"
                     data-color="gradient-45deg-light-blue-cyan"
                  ></span>
                  <span
                     class="menu-color-option gradient-45deg-purple-amber"
                     data-color="gradient-45deg-purple-amber"
                  ></span>
                  <span
                     class="menu-color-option gradient-45deg-purple-deep-purple"
                     data-color="gradient-45deg-purple-deep-purple"
                  ></span>
                  <span
                     class="menu-color-option gradient-45deg-deep-orange-orange"
                     data-color="gradient-45deg-deep-orange-orange"
                  ></span>
                  <span class="menu-color-option gradient-45deg-green-teal" data-color="gradient-45deg-green-teal"></span>
                  <span
                     class="menu-color-option gradient-45deg-indigo-light-blue"
                     data-color="gradient-45deg-indigo-light-blue"
                  ></span>
                  <span class="menu-color-option gradient-45deg-red-pink" data-color="gradient-45deg-red-pink"></span>
               </div>
               <div class="solid-color center-align">
                  <span class="menu-color-option red" data-color="red"></span>
                  <span class="menu-color-option purple" data-color="purple"></span>
                  <span class="menu-color-option pink" data-color="pink"></span>
                  <span class="menu-color-option deep-purple" data-color="deep-purple"></span>
                  <span class="menu-color-option cyan" data-color="cyan"></span>
                  <span class="menu-color-option teal" data-color="teal"></span>
                  <span class="menu-color-option light-blue" data-color="light-blue"></span>
                  <span class="menu-color-option amber darken-3" data-color="amber darken-3"></span>
                  <span class="menu-color-option brown darken-2" data-color="brown darken-2"></span>
               </div>
            </div>
            <div class="input-field col s12 menu-bg-color mb-0">
               <p class="mt-0">Cores de fundo</p>
               <div class="gradient-color center-align">
                  <span
                     class="menu-bg-color-option gradient-45deg-indigo-blue"
                     data-color="gradient-45deg-indigo-blue"
                  ></span>
                  <span
                     class="menu-bg-color-option gradient-45deg-purple-deep-orange"
                     data-color="gradient-45deg-purple-deep-orange"
                  ></span>
                  <span
                     class="menu-bg-color-option gradient-45deg-light-blue-cyan"
                     data-color="gradient-45deg-light-blue-cyan"
                  ></span>
                  <span
                     class="menu-bg-color-option gradient-45deg-purple-amber"
                     data-color="gradient-45deg-purple-amber"
                  ></span>
                  <span
                     class="menu-bg-color-option gradient-45deg-purple-deep-purple"
                     data-color="gradient-45deg-purple-deep-purple"
                  ></span>
                  <span
                     class="menu-bg-color-option gradient-45deg-deep-orange-orange"
                     data-color="gradient-45deg-deep-orange-orange"
                  ></span>
                  <span class="menu-bg-color-option gradient-45deg-green-teal" data-color="gradient-45deg-green-teal"></span>
                  <span
                     class="menu-bg-color-option gradient-45deg-indigo-light-blue"
                     data-color="gradient-45deg-indigo-light-blue"
                  ></span>
                  <span class="menu-bg-color-option gradient-45deg-red-pink" data-color="gradient-45deg-red-pink"></span>
               </div>
               <div class="solid-color center-align">
                  <span class="menu-bg-color-option red" data-color="red"></span>
                  <span class="menu-bg-color-option purple" data-color="purple"></span>
                  <span class="menu-bg-color-option pink" data-color="pink"></span>
                  <span class="menu-bg-color-option deep-purple" data-color="deep-purple"></span>
                  <span class="menu-bg-color-option cyan" data-color="cyan"></span>
                  <span class="menu-bg-color-option teal" data-color="teal"></span>
                  <span class="menu-bg-color-option light-blue" data-color="light-blue"></span>
                  <span class="menu-bg-color-option amber darken-3" data-color="amber darken-3"></span>
                  <span class="menu-bg-color-option brown darken-2" data-color="brown darken-2"></span>
               </div>
            </div>
            <div class="input-field col s12">
               <div class="switch">
                  Menu Escuro
                  <label class="float-right"
                     ><input class="menu-dark-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                  ></label>
               </div>
            </div>
            <div class="input-field col s12">
               <div class="switch">
                  Menu Livre
                  <label class="float-right"
                     ><input class="menu-collapsed-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                  ></label>
               </div>
            </div>
            <div class="input-field col s12">
               <div class="switch">
                  <p class="mt-0">Aba de Seleções</p>
                  <label>
                     <input
                        class="menu-selection-radio with-gap"
                        value="sidenav-active-square"
                        name="menu-selection"
                        type="radio"
                     />
                     <span>Quadrado</span>
                  </label>
                  <label>
                     <input
                        class="menu-selection-radio with-gap"
                        value="sidenav-active-rounded"
                        name="menu-selection"
                        type="radio"
                     />
                     <span>Circular</span>
                  </label>
                  <label>
                     <input class="menu-selection-radio with-gap" value="" name="menu-selection" type="radio" />
                     <span>Normal</span>
                  </label>
               </div>
            </div>
         </div>
      </div>
      <h6 class="mt-6">Barra de exploração</h6>
      <hr class="customize-devider" />
      <div class="navbar-options row">
         <div class="input-field col s12 navbar-color mb-0">
            <p class="mt-0">Cores</p>
            <div class="gradient-color center-align">
               <span class="navbar-color-option gradient-45deg-indigo-blue" data-color="gradient-45deg-indigo-blue"></span>
               <span
                  class="navbar-color-option gradient-45deg-purple-deep-orange"
                  data-color="gradient-45deg-purple-deep-orange"
               ></span>
               <span
                  class="navbar-color-option gradient-45deg-light-blue-cyan"
                  data-color="gradient-45deg-light-blue-cyan"
               ></span>
               <span class="navbar-color-option gradient-45deg-purple-amber" data-color="gradient-45deg-purple-amber"></span>
               <span
                  class="navbar-color-option gradient-45deg-purple-deep-purple"
                  data-color="gradient-45deg-purple-deep-purple"
               ></span>
               <span
                  class="navbar-color-option gradient-45deg-deep-orange-orange"
                  data-color="gradient-45deg-deep-orange-orange"
               ></span>
               <span class="navbar-color-option gradient-45deg-green-teal" data-color="gradient-45deg-green-teal"></span>
               <span
                  class="navbar-color-option gradient-45deg-indigo-light-blue"
                  data-color="gradient-45deg-indigo-light-blue"
               ></span>
               <span class="navbar-color-option gradient-45deg-red-pink" data-color="gradient-45deg-red-pink"></span>
            </div>
            <div class="solid-color center-align">
               <span class="navbar-color-option red" data-color="red"></span>
               <span class="navbar-color-option purple" data-color="purple"></span>
               <span class="navbar-color-option pink" data-color="pink"></span>
               <span class="navbar-color-option deep-purple" data-color="deep-purple"></span>
               <span class="navbar-color-option cyan" data-color="cyan"></span>
               <span class="navbar-color-option teal" data-color="teal"></span>
               <span class="navbar-color-option light-blue" data-color="light-blue"></span>
               <span class="navbar-color-option amber darken-3" data-color="amber darken-3"></span>
               <span class="navbar-color-option brown darken-2" data-color="brown darken-2"></span>
            </div>
         </div>
         <div class="input-field col s12">
            <div class="switch">
               Barra escura
               <label class="float-right"
                  ><input class="navbar-dark-checkbox" type="checkbox"/> <span class="lever ml-0"></span
               ></label>
            </div>
         </div>
         <div class="input-field col s12">
            <div class="switch">
               Barra fixada
               <label class="float-right"
                  ><input class="navbar-fixed-checkbox" type="checkbox" checked/> <span class="lever ml-0"></span
               ></label>
            </div>
         </div>
      </div>
      <h6 class="mt-6">Rodapé Opções</h6>
      <hr class="customize-devider" />
      <div class="navbar-options row">
         <div class="input-field col s12">
            <div class="switch">
               Rodapé escuro
               <label class="float-right"
                  ><input class="footer-dark-checkbox" type="checkbox"/> <span class="lever ml-0"></span
               ></label>
            </div>
         </div>
         <div class="input-field col s12">
            <div class="switch">
               Rodapé fixo
               <label class="float-right"
                  ><input class="footer-fixed-checkbox" type="checkbox"/> <span class="lever ml-0"></span
               ></label>
            </div>
         </div>
      </div>
   </div>
</div>
<!--Customizável-->

<a
   href="#"
   target="_blank"
   class="btn btn-buy-now gradient-45deg-indigo-purple gradient-shadow white-text tooltipped buy-now-animated tada"
   data-position="left"
   data-tooltip="Buy Now!"
   ><i class="material-icons">add_shopping_cart</i></a
>
    
    <!-- Footer-->

    <footer class="page-footer footer footer-static footer-dark gradient-45deg-indigo-purple gradient-shadow navbar-border navbar-shadow">
      <div class="footer-copyright">
        <div class="container"><span>&copy; 2019  <a href="#" target="_blank">Study Today</a> All rights reserved.</span><span class="right hide-on-small-only">Design and Developed by <a href="www.studyT.com.br">Study Today</a></span></div>
      </div>
    </footer>
    <!--Footer-->
    

    <!-- JS-->
    <script src="Css/app-assets/js/vendors.min.js" type="text/javascript"></script>
    <script src="Css/app-assets/vendors/chartjs/chart.min.js" type="text/javascript"></script>
    <script src="Css/app-assets/vendors/chartist-js/chartist.min.js" type="text/javascript"></script>
    <script src="Css/app-assets/vendors/chartist-js/chartist-plugin-tooltip.js" type="text/javascript"></script>
    <script src="Css/app-assets/vendors/chartist-js/chartist-plugin-fill-donut.min.js" type="text/javascript"></script>
    <script src="Css/app-assets/js/plugins.js" type="text/javascript"></script>
    <script src="Css/app-assets/js/custom/custom-script.js" type="text/javascript"></script>
    <script src="Css/app-assets/js/scripts/customizer.js" type="text/javascript"></script>
    <script src="Css/app-assets/js/scripts/dashboard-modern.js" type="text/javascript"></script>
    <script src="Css/app-assets/js/scripts/intro.js" type="text/javascript"></script>
    <!--JS-->
    <!--Jquery-->
       <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script> 
       <script src="js/init.js"></script>
       <!--JavaScript-->
       <script type="text/javascript" src="js/materialize.min.js"></script>
       <script src="js/materialize.js"></script>
  </body>
</html>