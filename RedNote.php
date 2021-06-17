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
        
        <li><a   href="Menu.php"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="">Study</span></a>
          <div class="collapsible-body">
        </li>
        <li class="bold"><a class="collapsible-header waves-cyan " href="#"><i class="material-icons">dvr</i><span class="menu-title" data-i18n="">Pacotes PRO</span></a>
          
        </li>
        <li class="navigation-header"><a class="navigation-header-text">Materiais</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan active " href="RedNote.php"><i class="material-icons">mail_outline</i><span class="menu-title" data-i18n="">RedNote</span></a>
        <li class="bold"><a class=" waves-cyan " href="TécnicasDeAprendizagem.php"><i class="material-icons">chat_bubble_outline</i><span class="menu-title" data-i18n="">Técnicas de aprendizagem</span></a>
        </li>
        <li class="bold"><a class=" waves-cyan " href="Cronogramas.php"><i class="material-icons">today</i><span class="menu-title" data-i18n="">Calendário / Cronogramas</span></a>
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

    <!-- HORA DOS BLOQUINHOS DO REDNOTE-->
     
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0">Nóticias para você produzir sua redação.</h5>
                <ol class="breadcrumbs mb-0">
                  <li><a href="Menu.html">Menu</a>
                  </li>
                  <li>RedNote
                  </li>
                </ol>
              </div>


              <div class="col s2 m6 l6">
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12">
          <div class="container">
            <div class="section mt-2" id="blog-list">
  <div class="row">
    <!-- Blog Style One -->




    <!-- Fashion Card -->
    <div class="col s12 m6 l4">
      <div class="card-panel border-radius-6 mt-10 card-animation-1">
        <a href="#"><img class="responsive-img border-radius-8 z-depth-4 image-n-margin" src="img/RedNote/1M.jpg"
            alt=""></a>
        <h6 class="deep-purple-text text-darken-3 mt-5"><a href="#">Dissertação</a></h6>
        <span>A maioria das provas escolhe a dissertação como gênero de texto, o que vai exigir do aluno um certo poder de argumentação. Além de ter argumentos, o estudante precisa saber conectar as ideias, o que no conjunto da obra dá uma boa noção ao avaliador sobre a capacidade de expressão do/a futuro/a universitário/a.</span>
        <div class="row mt-4">
          <div class="col s5 mt-1">
            <span class="pt-2">Study Today</span>
          </div>
        </div>
      </div>
    </div>





    <!-- Apple News -->
    <div class="col s12 m6 l4">
      <div class="card-panel border-radius-6 mt-10 card-animation-1">
        <a href="#"><img class="responsive-img border-radius-8 z-depth-4 image-n-margin" src="img/RedNote/2M.jpg"
            alt=""></a>
        <h6 class="deep-purple-text text-darken-3 mt-5"><a href="#">Barragem da Vale em risco de desmoronamento cria “terrorismo psicológico”</a></h6>
        <span>Barão de Cocais é uma cidade onde o medo se renova. Menos de dois meses depois de a barragem Sul Superior, da Vale, no município, ter seu nível de segurança elevado para 3 – o que significa ruptura a qualquer momento -, a população do município passou a ter motivo para se preocupar ainda mais. Agora, pelo risco do talude da cava da mina da empresa desmoronar, provocando abalo sísmico e uma possível ruptura da barragem Sul Superior, localizada a 1,5 quilômetro. o Ministério Público de Minas emitiu recomendação para que a empresa repasse a situação da barragem e diga aos moradores o que pode acontecer com a estrutura. Em nota ontem, a Vale disse que vem mantendo a população informada.As informações são do jornal O Estado de S. Paulo.<br>
        <h6>Filósofo da notícia:</h6>
        "A natureza fez o comer para o viver e a gula fez o comer muito para o viver pouco."<br>
        Padre Antônio Vieira

        </span>
        <div class="row mt-4">
          <div class="col s5 mt-1">
            <span class="pt-2">Study Today</span>
          </div>
        </div>
      </div>
    </div>






    <!-- Twitter News -->
    <div class="col s12 m6 l4">
      <div class="card-panel border-radius-6 mt-10 card-animation-1">
        <a href="#"><img class="responsive-img border-radius-8 z-depth-4 image-n-margin" src="img/RedNote/3M.jpg"
            alt=""></a>
        <h6 class="deep-purple-text text-darken-3 mt-5"><a href="#">Excesso de tecnologia pode atrapalhar desenvolvimento de crianças</a></h6>
        <span>A ciência concorda. “Na medida em que elas ficam voltadas para a tecnologia, elas deixam de exercitar uma coisa importante, que é aprender a lidar com a frustração. São coisas que você vai aprendendo e vai desenvolvendo o que a gente chama popularmente de inteligência emocional. Um indivíduo, uma criança, um jovem se torna dependente exatamente no momento onde ele começa a negligenciar atividades do seu cotidiano para preferir estar conectado ou interagindo com a tecnologia”, explica Cristiano Nabuco de Abreu, psicólogo e coordenador do grupo de dependência tecnológica do Hospital das Clínicas/SP.<br>
          <h6>Filósofo da notícia:</h6>
          Zygmunt Bauman<br>
          "O pensamento está sendo influenciado pela tecnologia. Há uma crise de atenção, por exemplo. Concentrar-se e se dedicar por um longo tempo é uma questão muito importante. Somos cada vez menos capazes de fazer isso da forma correta."

        </span>
        <div class="row mt-4">
          <div class="col s5 p-0 mt-1">
            <span class="pt-2">    Study Today</span>
          </div>
        </div>
      </div>
    </div>





    <!-- Blog Style Two -->
  </div>
  <div class="row">
    <!-- Share markets News -->
    <div class="col s12 m6 l4">
      <div class="card-panel border-radius-6 white-text gradient-45deg-deep-purple-blue card-animation-2">
        <h6 class="mt-5"><b><a href="#" class="white-text">Notícias falsas e o senso crítico</a></b></h6>
        <br>
        <span>As notícias falsas, também chamadas em inglês de fake news, têm ganhado proeminência em tempos de redes sociais. Provenientes de sites de humor, como O Bairrista e O Sensacionalista, ou de origem em páginas propositalmente mentirosas, essas notícias se espalham rapidamente e, via de regra, poucos se preocupam em checar sua veracidade. O problema é que as pessoas formam opiniões baseadas em informações incorretas, e acabam pautando certas ações em função desses dados inventados ou equivocados — daí alguns dizerem que “a internet nos deixa mais burros“. O tema de redação pode explorar a questão do senso crítico, do exercício de ler e entender e conectar várias informações para a formação da opinião.
        </span>
        <div class="row mt-4">
          <div class="col s5 mt-1">

            <span class="pt-2">Study Today</span>
          </div>
          <div class="col s7 mt-3 right-align social-icon">

          </div>
        </div>
      </div>
    </div>




    <!-- USA News -->
    <div class="col s12 m6 l4">
      <div class="card-panel border-radius-6 white-text gradient-45deg-purple-deep-orange card-animation-2">
        <h6 class="mt-5"><b><a href="#" class="white-text">Velhos contemporâneos e clássicos</a></b></h6><br>
        <span>A discussão acerca da aposentadoria pode trazer à tona outro tema ainda pouco discutido em meios de massa no Brasil, que é o cuidado com os mais velhos. Diferente da antiguidade clássica, em que os mais velhos eram os sábios, os anciãos, respeitados pelo conhecimento acumulado nos anos a mais que tinham de vida, tendemos hoje a ver a terceira idade como aquela em que as pessoas são “um fardo”, inúteis, incapazes. Outros estereótipos apresentam essa parcela da população como fonte de gastos, além de economicamente inativa, como necessitada de constantes cuidados médicos, até mesmo como culpada pela superlotação do sistema público de saúde. Essas visões colocam em choque uma série de ideias a respeito do que faz a humanidade da pessoa, quem merece cuidados, bens materiais, afetivos, direitos.
        </span>
        <div class="row mt-4">
          <div class="col s5 mt-1">
            <span class="pt-2">Study Today</span>
          </div>
        </div>
      </div>
    </div>





    <!-- Fasion News -->
    <div class="col s12 m6 l4">
      <div class="card-panel border-radius-6 white-text gradient-45deg-indigo-light-blue card-animation-2">
        <h6 class="mt-5"><b><a href="#" class="white-text">Direitos trabalhistas em perigo?</a></b></h6><br>
        <span>Aqui as possibilidades de abordagem são muito vastas, justamente porque há muitos projetos no Congresso que ganharam as páginas dos jornais no último ano e que buscam alterar um ou outro dos chamados direitos trabalhistas. Hoje, o termo é mais livremente associado à CLT (Consolidação das Leis do Trabalho), de 1943, período do Estado Novo da Era Vargas (ei, tem mais uma aula aqui sobre o assunto!). Férias remuneradas, 13° salário, FGTS, INSS, aposentadoria, todos são termos que parecem rodear o assunto. Por isso, acreditamos que vale você ter bem firme na cabeça o conceito de cada uma dessas coisas, para conseguir avançar nas ideias independente do que aparecer. Dá para adiantar que a reforma da previdência, ou seja, mudanças na aposentadoria, tende a ser uma forte candidata. Fique atento à história do benefício, ao contexto em que ele foi criado, semelhanças e diferenças com o momento atual, e especialmente as perspectivas dos especialistas de correntes politico-econômicas diferentes sobre o tema. Temos vários argumentos sobre isso nesse texto.
        </span>
        <div class="row mt-4">
          <div class="col s5 p-0 mt-1">
            <span class="pt-2">Study Today</span>
          </div>
        </div>
      </div>
    </div>
  </div>





 <!-- USA News -->
    <div class="col s12 m6 l4">
      <div class="card-panel border-radius-6 white-text gradient-45deg-purple-deep-orange card-animation-2">
        <h6 class="mt-5"><b><a href="#" class="white-text">Reforma do Ensino Médio</a></b></h6><br>
        <span>Mais uma vez, o aspecto histórico pode ser um viés para a argumentação. Vale lembrar que a escola começou restrita aos membros da igreja e da nobreza, lá na Europa, e que só a partir do humanismo renascentista foi estendida ao total da população. No Brasil, as universidades começaram para os filhos de nobres, e que apenas em 1946 a lei passou a obrigar o Estado a oferecer a educação (primária) gratuitamente. O financiamento estudantil do governo para universitários tem pouco mais de 15 anos de vida.
        </span>
        <div class="row mt-4">
          <div class="col s5 mt-1">
            <span class="pt-2">Study Today</span>
          </div>
        </div>
      </div>
    </div>


 

     <!-- Fasion News -->
    <div class="col s12 m6 l4">
      <div class="card-panel border-radius-6 white-text gradient-45deg-indigo-light-blue card-animation-2">
        <h6 class="mt-5"><b><a href="#" class="white-text">O mundo offline</a></b></h6><br>
        <span>OFFline?, você pode se perguntar ao ler o título. É claro que o mundo conectado, ONline, é um tema possível (e bem possível!), mas o Enem e os vestibulares têm mostrado uma tendência de abordar o outro lado de certas questões, problematizando tópicos em que haja uma certa visão comum. Muito se fala sobre o que a conectividade trouxe de mudanças nas últimas décadas, mas ainda há muito menos debate acerca daqueles que não têm acesso à internet. Dependendo da sua condição de vida, talvez a ideia de chegar em casa e não ter WiFi seja meio estranha, mas no Brasil apenas 26,7 milhões de pessoas se conecta via rede doméstica, segundo dados de janeiro de 2017 da Anatel. Uma pesquisa de 2017 encomendada pelo Facebook indica, porém, que 70,5 milhões de brasileiros sequer têm qualquer acesso à internet. Isso mesmo: nem WiFi, nem 3G/4G. Na África, os dados são ainda mais gritantes: 75% da população local não se conecta à nossa querida rede mundial de computadores.
        </span>
        <div class="row mt-4">
          <div class="col s5 p-0 mt-1">
            <span class="pt-2">Study Today</span>
          </div>
        </div>
      </div>
    </div>
  </div>



    <!-- Share markets News -->
    <div class="col s12 m6 l4">
      <div class="card-panel border-radius-6 white-text gradient-45deg-deep-purple-blue card-animation-2">
        <h6 class="mt-5"><b><a href="#" class="white-text">Presídios e direitos humanos</a></b></h6><br>
        <span>Se você é da opinião de que bandido bom é bandido morto, pare um segundo e respire antes de continuar a ler. Em 2016, o Enem trouxe a intolerância religiosa como tema; em 2015, a violência contra a mulher. Não é preciso que se diga, então, que temas polêmicos estão em alta, especialmente temas que têm os direitos humanos como pano de fundo. Intolerância, violência, preconceito, extremismo costumam andar muito próximos. E vale lembrar que o edital da prova alerta que apologia a violência, por exemplo, é eliminatória. Ou seja, você poderia argumentar em favor da pena de morte — onde “pena” pressupõe julgamento e condenação –, mas não dizer algo como “tem que fuzilar todo mundo”. Fascistas fuzilavam, governos ditatoriais fuzilam. Você é um/a aspirante a universitário/a, com o direito constitucional de livre expressão, mas que deve indicar também respeito às diversidades que vai encontrar no ambiente das universidades. Por isso o tema dos presídios pode ser bem escorregadio nesse aspecto dos direitos humanos (DH).
        </span>
        <div class="row mt-4">
          <div class="col s5 mt-1">

            <span class="pt-2">Study Today</span>
          </div>
          <div class="col s7 mt-3 right-align social-icon">

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
   data-tooltip="Veja nossa Loja!"
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