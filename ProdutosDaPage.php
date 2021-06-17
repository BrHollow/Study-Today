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
                <h6>NOTIFICAÇÕES<span class="new badge">5</span></h6>
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
          </div>
          <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow ps ps--active-y" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion" style="transform: translateX(20px);">
        
        <li><a href="Menu.php"  ><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="">Study</span></a>
          <div class="collapsible-body">
        </li>
        <li class="bold"><a class="collapsible-header waves-cyan " href="#"><i class="material-icons">dvr</i><span class="menu-title" data-i18n="">Pacotes PRO</span></a>
          
        </li>
        <li class="navigation-header"><a class="navigation-header-text">Materiais</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a  href="RedNote.php"><i class="material-icons">mail_outline</i><span class="menu-title" data-i18n="">RedNote</span></a>
        <li class="bold"><a class=" waves-cyan " href="TécnicasDeAprendizagem.php"><i class="material-icons">chat_bubble_outline</i><span class="menu-title" data-i18n="">Técnicas de aprendizagem</span></a>
        </li>
        <li class="bold"><a class=" waves-cyan " href="Cronogramas.php"><i class="material-icons">today</i><span class="menu-title" data-i18n="">Calendário / Cronogramas</span></a>
        </li>
        <li class="bold"><a class="waves-cyan " href="MapasMentais.php"><i class="material-icons">import_contacts</i><span class="menu-title" data-i18n="">Mapas mentais</span></a>
        <li class="bold"><a class="collapsible-header waves-cyan " href="#"><i class="material-icons">add_shopping_cart</i><span class="menu-title" data-i18n="">Compras Web</span></a>
          <div>
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="collapsible-body active" class="collapsible-body" href="ProdutosDaPage.php" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Produtos da página</span></a>
              </li>

            </ul>
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
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0">Produtos da Página</h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="index.html">Menu</a>
                  </li>
                  <li class="breadcrumb-item active">Produtos
                  </li>
                </ol>
              </div>

            </div>
          </div>
        </div>

<div id="ecommerce-product">
   <div class="row">
      <div class="col s12 m4">
         <div class="card animate fadeLeft">
            <div class="card-content  center">
               <h6 class="card-title font-weight-400 mb-0">Blusa Study</h6>
               <img src="img/Menu/2M.jpg" alt="" class="responsive-img" />
               <p><b></b></p>
               <p>Sinta-se um Studioso</p>
            </div>
            <div class="card-action border-non center">
               <a class="waves-effect waves-light btn gradient-45deg-light-blue-cyan box-shadow">R$ 13.99</a>
            </div>
         </div>
      </div>
      
      <div class="col s12 m4">
         <div class="card animate fadeRight">
            <div class="card-content center">
               <h6 class="card-title font-weight-400 mb-0">Blusa Study</h6>
               <img src="img/Menu/4M.jpg" alt="" class="responsive-img" />
               <p><b>Sinta-se um Studioso</b></p>
               <p>Offical</p>
            </div>
            <div class="card-action border-non center">
               <a class="waves-effect waves-light btn gradient-45deg-red-pink box-shadow">R$ 15.99</a>
            </div>
         </div>
      </div>
   </div>


   <div id="ecommerce-product">
   <div class="row">
      <div class="col s12 m4">
         <div class="card animate fadeLeft">
            <div class="card-content  center">
               <h6 class="card-title font-weight-400 mb-0">Blusa Study</h6>
               <img src="img/Menu/3M.jpg" alt="" class="responsive-img" />
               <p><b></b></p>
               <p>motivacional</p>
            </div>
            <div class="card-action border-non center">
               <a class="waves-effect waves-light btn gradient-45deg-light-blue-cyan box-shadow">R$ 10.99</a>
            </div>
         </div>
      </div>
      <div class="col s12 m4">
         <div class="card animate fadeUp">
            
      </div>
      <div class="col s12 m4">
         <div class="card animate fadeRight">
            
           
            </div>
         </div>
      </div>
   </div>


   <div id="ecommerce-product">
   <div class="row">
      <div class="col s12 m4">
         <div class="card animate fadeLeft">
            <div class="card-content  center">
               <h6 class="card-title font-weight-400 mb-0">Livro</h6>
               <img src="img/Menu/5M.jpg" alt="" class="responsive-img" />
               <p><b></b></p>
               <p>Sinta-se um Studioso</p>
            </div>
            <div class="card-action border-non center">
               <a class="waves-effect waves-light btn gradient-45deg-light-blue-cyan box-shadow">R$ 25.99</a>
            </div>
         </div>
      </div>

      <div id="ecommerce-product">
   <div class="row">
      <div class="col s12 m4">
         <div class="card animate fadeLeft">
            <div class="card-content  center">
               <h6 class="card-title font-weight-400 mb-0">Blusa Study</h6>
               <img src="img/Menu/2M.jpg" alt="" class="responsive-img" />
               <p><b></b></p>
               <p>Sinta-se um Studioso</p>
            </div>
            <div class="card-action border-non center">
               <a class="waves-effect waves-light btn gradient-45deg-light-blue-cyan box-shadow">R$ 13.99</a>
            </div>
         </div>
      </div>
      
      <div class="col s12 m4">
         <div class="card animate fadeRight">
            <div class="card-content center">
               <h6 class="card-title font-weight-400 mb-0">Blusa Study</h6>
               <img src="img/Menu/4M.jpg" alt="" class="responsive-img" />
               <p><b>Sinta-se um Studioso</b></p>
               <p>Offical</p>
            </div>
            <div class="card-action border-non center">
               <a class="waves-effect waves-light btn gradient-45deg-red-pink box-shadow">R$ 15.99</a>
            </div>
         </div>
      </div>
   </div>


   <div id="ecommerce-product">
   <div class="row">
      <div class="col s12 m4">
         <div class="card animate fadeLeft">
            <div class="card-content  center">
               <h6 class="card-title font-weight-400 mb-0">Blusa Study</h6>
               <img src="img/Menu/3M.jpg" alt="" class="responsive-img" />
               <p><b></b></p>
               <p>motivacional</p>
            </div>
            <div class="card-action border-non center">
               <a class="waves-effect waves-light btn gradient-45deg-light-blue-cyan box-shadow">R$ 10.99</a>
            </div>
         </div>
      </div>
      <div class="col s12 m4">
         <div class="card animate fadeUp">
            
      </div>
      <div class="col s12 m4">
         <div class="card animate fadeRight">
            
           
            </div>
         </div>
      </div>
   </div>












<!-- START RIGHT SIDEBAR NAV -->

            <!-- Intro -->

    <!--Customizável-->

<a
   href="#"
   data-target="theme-cutomizer-out"
   class="btn btn-customizer pink accent-2 white-text sidenav-trigger theme-cutomizer-trigger"
   ><i class="material-icons">settings</i></a
>

<div  id="theme-cutomizer-out" class="theme-cutomizer sidenav row">
   <div class="col s12">
      <a class="sidenav-close" href="#"><i class="material-icons">close</i></a>
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