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

   <link rel="apple-touch-icon" href="../../../app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="Css/app-assets/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="Css/app-assets/vendors/flag-icon/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="Css/app-assets/vendors/calendar/fullcalendar.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="Css/app-assets/css/themes/materialize.css">
    <link rel="stylesheet" type="text/css" href="Css/app-assets/css/themes/style.css">
    <link rel="stylesheet" type="text/css" href="Css/app-assets/vendors/calendar/app-calendar.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="Css/app-assets/css/custom/custom.css">






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

    <link rel="stylesheet" type="text/css" href="Css/app-calendar.css">

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
        
        <li><a   href="Menu.php"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="">Study</span></a>
          <div class="collapsible-body">
        </li>
        <li class="bold"><a class="collapsible-header waves-cyan " href="#"><i class="material-icons">dvr</i><span class="menu-title" data-i18n="">Pacotes PRO</span></a>
         
        </li>
        <li class="navigation-header"><a class="navigation-header-text">Materiais</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a  href="RedNote.php"><i class="material-icons">mail_outline</i><span class="menu-title" data-i18n="">RedNote</span></a>
        <li class="bold"><a class=" waves-cyan " href="TécnicasDeAprendizagem.php"><i class="material-icons">chat_bubble_outline</i><span class="menu-title" data-i18n="">Técnicas de aprendizagem</span></a>
        </li>
        <li class="bold"><a class="collapsible-body active" class=" waves-cyan " href="Cronogramas.php"><i class="material-icons">today</i><span class="menu-title" data-i18n="">Calendário / Cronogramas</span></a>
        </li>
        <li class="bold"><a class="waves-cyan " href="MapasMentais.php"><i class="material-icons">import_contacts</i><span class="menu-title" data-i18n="">Mapas mentais</span></a>
        </li>

        <li class="bold"><a class="collapsible-header waves-cyan " href="#"><i class="material-icons">add_shopping_cart</i><span class="menu-title" data-i18n="">Compras Web</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="collapsible-body" href="ProdutosDaPage.php" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Produtos da página</span></a>
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

   <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0">Calendário</h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="Menu.html">Menu</a>
                  </li>
                  </li>
                  <li class="breadcrumb-item active"> Calendário / Cronograma
                  </li>
                </ol>
              </div>
              
            </div>
          </div>
        </div>
        <div class="col s12">
          <div class="container">
            <!-- Full Calendar -->

<div id="app-calendar">

    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">
                        Calendário Básico 
                    </h4>
                    <div id="basic-calendar" class="fc fc-unthemed fc-ltr"><div class="fc-toolbar fc-header-toolbar"><div class="fc-left"><h2>Junho 2019</h2></div><div class="fc-right"><button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="">Dia</button><div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left" aria-label="prev"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right" aria-label="next"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div></div><div class="fc-center"></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-month-view fc-basic-view" style=""><table class=""><thead class="fc-head"><tr><td class="fc-head-container fc-widget-header"><div class="fc-row fc-widget-header"><table class=""><thead><tr><th class="fc-day-header fc-widget-header fc-sun"><span>Domingo</span></th><th class="fc-day-header fc-widget-header fc-mon"><span>Segunda</span></th><th class="fc-day-header fc-widget-header fc-tue"><span>Terça</span></th><th class="fc-day-header fc-widget-header fc-wed"><span>Quarta</span></th><th class="fc-day-header fc-widget-header fc-thu"><span>Quinta</span></th><th class="fc-day-header fc-widget-header fc-fri"><span>Sexta</span></th><th class="fc-day-header fc-widget-header fc-sat"><span>Sábado</span></th></tr></thead></table></div></td></tr></thead><tbody class="fc-body"><tr><td class="fc-widget-content"><div class="fc-scroller fc-day-grid-container" style="overflow: hidden; height: 470px;"><div class="fc-day-grid fc-unselectable"><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 78px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2019-05-26"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2019-05-27"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2019-05-28"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2019-05-29"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-past" data-date="2019-05-30"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-past" data-date="2019-05-31"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2019-06-01"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2019-05-26"><span class="fc-day-number">26</span></td><td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2019-05-27"><span class="fc-day-number">27</span></td><td class="fc-day-top fc-tue fc-other-month fc-past" data-date="2019-05-28"><span class="fc-day-number">28</span></td><td class="fc-day-top fc-wed fc-other-month fc-past" data-date="2019-05-29"><span class="fc-day-number">29</span></td><td class="fc-day-top fc-thu fc-other-month fc-past" data-date="2019-05-30"><span class="fc-day-number">30</span></td><td class="fc-day-top fc-fri fc-other-month fc-past" data-date="2019-05-31"><span class="fc-day-number">31</span></td><td class="fc-day-top fc-sat fc-past" data-date="2019-06-01"><span class="fc-day-number">1</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 78px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2019-06-02"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2019-06-03"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2019-06-04"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2019-06-05"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2019-06-06"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2019-06-07"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2019-06-08"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2019-06-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-mon fc-past" data-date="2019-06-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-tue fc-past" data-date="2019-06-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-wed fc-past" data-date="2019-06-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-thu fc-past" data-date="2019-06-06"><span class="fc-day-number">6</span></td><td class="fc-day-top fc-fri fc-past" data-date="2019-06-07"><span class="fc-day-number">7</span></td><td class="fc-day-top fc-sat fc-past" data-date="2019-06-08"><span class="fc-day-number">8</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 78px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-today " data-date="2019-06-09"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2019-06-10"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2019-06-11"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2019-06-12"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2019-06-13"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2019-06-14"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2019-06-15"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-today " data-date="2019-06-09"><span class="fc-day-number">9</span></td><td class="fc-day-top fc-mon fc-future" data-date="2019-06-10"><span class="fc-day-number">10</span></td><td class="fc-day-top fc-tue fc-future" data-date="2019-06-11"><span class="fc-day-number">11</span></td><td class="fc-day-top fc-wed fc-future" data-date="2019-06-12"><span class="fc-day-number">12</span></td><td class="fc-day-top fc-thu fc-future" data-date="2019-06-13"><span class="fc-day-number">13</span></td><td class="fc-day-top fc-fri fc-future" data-date="2019-06-14"><span class="fc-day-number">14</span></td><td class="fc-day-top fc-sat fc-future" data-date="2019-06-15"><span class="fc-day-number">15</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 78px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2019-06-16"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2019-06-17"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2019-06-18"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2019-06-19"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2019-06-20"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2019-06-21"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2019-06-22"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2019-06-16"><span class="fc-day-number">16</span></td><td class="fc-day-top fc-mon fc-future" data-date="2019-06-17"><span class="fc-day-number">17</span></td><td class="fc-day-top fc-tue fc-future" data-date="2019-06-18"><span class="fc-day-number">18</span></td><td class="fc-day-top fc-wed fc-future" data-date="2019-06-19"><span class="fc-day-number">19</span></td><td class="fc-day-top fc-thu fc-future" data-date="2019-06-20"><span class="fc-day-number">20</span></td><td class="fc-day-top fc-fri fc-future" data-date="2019-06-21"><span class="fc-day-number">21</span></td><td class="fc-day-top fc-sat fc-future" data-date="2019-06-22"><span class="fc-day-number">22</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 78px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2019-06-23"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2019-06-24"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2019-06-25"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2019-06-26"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2019-06-27"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2019-06-28"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2019-06-29"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2019-06-23"><span class="fc-day-number">23</span></td><td class="fc-day-top fc-mon fc-future" data-date="2019-06-24"><span class="fc-day-number">24</span></td><td class="fc-day-top fc-tue fc-future" data-date="2019-06-25"><span class="fc-day-number">25</span></td><td class="fc-day-top fc-wed fc-future" data-date="2019-06-26"><span class="fc-day-number">26</span></td><td class="fc-day-top fc-thu fc-future" data-date="2019-06-27"><span class="fc-day-number">27</span></td><td class="fc-day-top fc-fri fc-future" data-date="2019-06-28"><span class="fc-day-number">28</span></td><td class="fc-day-top fc-sat fc-future" data-date="2019-06-29"><span class="fc-day-number">29</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 80px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2019-06-30"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2019-07-01"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2019-07-02"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2019-07-03"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2019-07-04"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2019-07-05"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2019-07-06"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2019-06-30"><span class="fc-day-number">30</span></td><td class="fc-day-top fc-mon fc-other-month fc-future" data-date="2019-07-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-tue fc-other-month fc-future" data-date="2019-07-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2019-07-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2019-07-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2019-07-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2019-07-06"><span class="fc-day-number">6</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">
                        Conograma
                    </h4>
                    <div class="row">
                        <div class="col m3">
                            <div id="external-events">
                                <h5>Lembretes</h5>
                                <div class="fc-events-container">
                                    <div class="fc-event ui-draggable ui-draggable-handle" data-color="#009688" style="background-color: rgb(0, 150, 136); border-color: rgb(0, 150, 136);">Redação</div>
                                    <div class="fc-event ui-draggable ui-draggable-handle" data-color="#4CAF50" style="background-color: rgb(76, 175, 80); border-color: rgb(76, 175, 80);">Portugês</div>
                                    <div class="fc-event ui-draggable ui-draggable-handle" data-color="#00bcd4" style="background-color: rgb(0, 188, 212); border-color: rgb(0, 188, 212);">História</div>
                                    <div class="fc-event ui-draggable ui-draggable-handle" data-color="#ff5722" style="background-color: rgb(255, 87, 34); border-color: rgb(255, 87, 34);">Geográfia</div>
                                    <div class="fc-event ui-draggable ui-draggable-handle" data-color="#9c27b0" style="background-color: rgb(156, 39, 176); border-color: rgb(156, 39, 176);">Matématica</div>
                                    <div class="fc-event ui-draggable ui-draggable-handle" data-color="#e51c23" style="background-color: rgb(229, 28, 35); border-color: rgb(229, 28, 35);">Química</div>
                                    <div class="fc-event ui-draggable ui-draggable-handle" data-color="#e91e63" style="background-color: rgb(233, 30, 99); border-color: rgb(233, 30, 99);">Física</div>
                                    <div class="fc-event ui-draggable ui-draggable-handle" data-color="#3f51b5" style="background-color: rgb(63, 81, 181); border-color: rgb(63, 81, 181);">Biológia</div>
                                    <div class="fc-event ui-draggable ui-draggable-handle" data-color="#ffc107" style="background-color: rgb(255, 193, 7); border-color: rgb(255, 193, 7);">Filosofia</div>
                                    <div class="fc-event ui-draggable ui-draggable-handle" data-color="#4a148c" style="background-color: rgb(74, 20, 140); border-color: rgb(74, 20, 140);">Sociológia</div>
                                    <p>
                                        <label>
                                            <input type="checkbox">
                                            <span>Remover Sozinho</span>
                                        </label>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col m9">
                            <div id="fc-external-drag" class="fc fc-unthemed fc-ltr"><div class="fc-toolbar fc-header-toolbar"><div class="fc-left"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left fc-corner-right" aria-label="prev"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-left fc-corner-right" aria-label="next"><span class="fc-icon fc-icon-right-single-arrow"></span></button><button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="">Dias</button></div><div class="fc-right"><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-active">Mês</button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default fc-corner-left fc-corner-right">Ano</button><button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-left fc-corner-right">Dia</button></div><div class="fc-center"><h2>Junho 2019</h2></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-month-view fc-basic-view" style=""><table class=""><thead class="fc-head"><tr><td class="fc-head-container fc-widget-header"><div class="fc-row fc-widget-header" style="border-right-width: 1px; margin-right: 16px;"><table class=""><thead><tr><th class="fc-day-header fc-widget-header fc-sun"><span>Domingo</span></th><th class="fc-day-header fc-widget-header fc-mon"><span>Segunda</span></th><th class="fc-day-header fc-widget-header fc-tue"><span>Terça</span></th><th class="fc-day-header fc-widget-header fc-wed"><span>Quarta</span></th><th class="fc-day-header fc-widget-header fc-thu"><span>Quinta</span></th><th class="fc-day-header fc-widget-header fc-fri"><span>Sexta</span></th><th class="fc-day-header fc-widget-header fc-sat"><span>Sábado</span></th></tr></thead></table></div></td></tr></thead><tbody class="fc-body"><tr><td class="fc-widget-content"><div class="fc-scroller fc-day-grid-container" style="overflow: hidden scroll; height: 337px;"><div class="fc-day-grid fc-unselectable"><div class="fc-row fc-week fc-widget-content" style=""><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2019-05-26"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2019-05-27"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2019-05-28"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2019-05-29"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-past" data-date="2019-05-30"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-past" data-date="2019-05-31"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2019-06-01"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2019-05-26"><span class="fc-day-number">26</span></td><td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2019-05-27"><span class="fc-day-number">27</span></td><td class="fc-day-top fc-tue fc-other-month fc-past" data-date="2019-05-28"><span class="fc-day-number">28</span></td><td class="fc-day-top fc-wed fc-other-month fc-past" data-date="2019-05-29"><span class="fc-day-number">29</span></td><td class="fc-day-top fc-thu fc-other-month fc-past" data-date="2019-05-30"><span class="fc-day-number">30</span></td><td class="fc-day-top fc-fri fc-other-month fc-past" data-date="2019-05-31"><span class="fc-day-number">31</span></td><td class="fc-day-top fc-sat fc-past" data-date="2019-06-01"><span class="fc-day-number">1</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style=""><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2019-06-02"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2019-06-03"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2019-06-04"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2019-06-05"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2019-06-06"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2019-06-07"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2019-06-08"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2019-06-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-mon fc-past" data-date="2019-06-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-tue fc-past" data-date="2019-06-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-wed fc-past" data-date="2019-06-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-thu fc-past" data-date="2019-06-06"><span class="fc-day-number">6</span></td><td class="fc-day-top fc-fri fc-past" data-date="2019-06-07"><span class="fc-day-number">7</span></td><td class="fc-day-top fc-sat fc-past" data-date="2019-06-08"><span class="fc-day-number">8</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style=""><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-today " data-date="2019-06-09"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2019-06-10"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2019-06-11"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2019-06-12"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2019-06-13"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2019-06-14"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2019-06-15"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-today " data-date="2019-06-09"><span class="fc-day-number">9</span></td><td class="fc-day-top fc-mon fc-future" data-date="2019-06-10"><span class="fc-day-number">10</span></td><td class="fc-day-top fc-tue fc-future" data-date="2019-06-11"><span class="fc-day-number">11</span></td><td class="fc-day-top fc-wed fc-future" data-date="2019-06-12"><span class="fc-day-number">12</span></td><td class="fc-day-top fc-thu fc-future" data-date="2019-06-13"><span class="fc-day-number">13</span></td><td class="fc-day-top fc-fri fc-future" data-date="2019-06-14"><span class="fc-day-number">14</span></td><td class="fc-day-top fc-sat fc-future" data-date="2019-06-15"><span class="fc-day-number">15</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style=""><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2019-06-16"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2019-06-17"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2019-06-18"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2019-06-19"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2019-06-20"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2019-06-21"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2019-06-22"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2019-06-16"><span class="fc-day-number">16</span></td><td class="fc-day-top fc-mon fc-future" data-date="2019-06-17"><span class="fc-day-number">17</span></td><td class="fc-day-top fc-tue fc-future" data-date="2019-06-18"><span class="fc-day-number">18</span></td><td class="fc-day-top fc-wed fc-future" data-date="2019-06-19"><span class="fc-day-number">19</span></td><td class="fc-day-top fc-thu fc-future" data-date="2019-06-20"><span class="fc-day-number">20</span></td><td class="fc-day-top fc-fri fc-future" data-date="2019-06-21"><span class="fc-day-number">21</span></td><td class="fc-day-top fc-sat fc-future" data-date="2019-06-22"><span class="fc-day-number">22</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style=""><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2019-06-23"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2019-06-24"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2019-06-25"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2019-06-26"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2019-06-27"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2019-06-28"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2019-06-29"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2019-06-23"><span class="fc-day-number">23</span></td><td class="fc-day-top fc-mon fc-future" data-date="2019-06-24"><span class="fc-day-number">24</span></td><td class="fc-day-top fc-tue fc-future" data-date="2019-06-25"><span class="fc-day-number">25</span></td><td class="fc-day-top fc-wed fc-future" data-date="2019-06-26"><span class="fc-day-number">26</span></td><td class="fc-day-top fc-thu fc-future" data-date="2019-06-27"><span class="fc-day-number">27</span></td><td class="fc-day-top fc-fri fc-future" data-date="2019-06-28"><span class="fc-day-number">28</span></td><td class="fc-day-top fc-sat fc-future" data-date="2019-06-29"><span class="fc-day-number">29</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style=""><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2019-06-30"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2019-07-01"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2019-07-02"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2019-07-03"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2019-07-04"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2019-07-05"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2019-07-06"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2019-06-30"><span class="fc-day-number">30</span></td><td class="fc-day-top fc-mon fc-other-month fc-future" data-date="2019-07-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-tue fc-other-month fc-future" data-date="2019-07-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2019-07-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2019-07-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2019-07-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2019-07-06"><span class="fc-day-number">6</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- START RIGHT SIDEBAR NAV -->

            <!-- Intro -->


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
     <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script> 
       <script src="js/init.js"></script>
       <!--JavaScript-->
       <script type="text/javascript" src="js/materialize.min.js"></script>
       <script src="js/materialize.js"></script>






        <script src="Css/app-assets/js/vendors.min.js" type="text/javascript"></script>
    <script src="Css/app-assets/vendors/chartjs/chart.min.js" type="text/javascript"></script>
    <script src="Css/app-assets/vendors/chartist-js/chartist.min.js" type="text/javascript"></script>
    <script src="Css/app-assets/vendors/chartist-js/chartist-plugin-tooltip.js" type="text/javascript"></script>
    <script src="Css/app-assets/vendors/chartist-js/chartist-plugin-fill-donut.min.js" type="text/javascript"></script>
    <script src="Css/app-assets/js/plugins.js" type="text/javascript"></script>
    <script src="js/custom-script.js" type="text/javascript"></script>
    <script src="js/customizer.js" type="text/javascript"></script>
    <script src="Css/app-assets/js/scripts/dashboard-modern.js" type="text/javascript"></script>
    <script src="Css/app-assets/js/scripts/intro.js" type="text/javascript"></script>
    <!--JS-->
    <!--Jquery-->
       <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script> 
       <script src="js/init.js"></script>
       <!--JavaScript-->
       <script type="text/javascript" src="js/materialize.min.js"></script>
       <script src="js/materialize.js"></script>

       <script src="Css/app-assets/vendors/calendar/app-calendar.js" type="text/javascript"></script>
       <script src="Css/app-assets/vendors/calendar/fullcalendar.min.js" type="text/javascript"></script>
       <script src="Css/app-assets/vendors/calendar/jquery-ui.min.js" type="text/javascript"></script>
       <script src="Css/app-assets/vendors/calendar/moment.min.js" type="text/javascript"></script>
       <script src="" type="text/javascript"></script>
  </body>
</html>