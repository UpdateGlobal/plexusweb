
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <title>PLEXUS - EDIFICIO CORPORATIVO</title>

    <meta name="description" content="Plexus es un edificio corporativo en el nuevo centro empresarial de lima con oficinas en venta en San Miguel amplios ambientes, vista panorámica." />
    <meta name="keywords" content="comodidad, oficinas a1, polo comercial, centro empresarial" />
    <meta name="DC.title" content="PLEXUS - EDIFICIO CORPORATIVO" />
    <meta name="DC.description" lang="es" content="Plexus es un edificio corporativo en el nuevo centro empresarial de lima con oficinas en venta en San Miguel amplios ambientes, vista panorámica." />
    <meta name="geo.region" content="PE-LIM" />
    <meta name="robots" content="INDEX,FOLLOW" />
    
    <meta property="og:title" content="PLEXUS - EDIFICIO CORPORATIVO" />
    <meta property="og:type" content="website.RealEstate" />
    <meta property="og:description" content="Plexus es un edificio corporativo en el nuevo centro empresarial de lima con oficinas en venta en San Miguel amplios ambientes, vista panorámica." />
    <meta property="og:url" content="" />
    <meta property="og:image" content="img/edificio.jpg" />

    <!-- for mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="format-detection" content="telephone=no" />

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/vnd.microsoft.icon" />
    <link rel="icon" href="images/favicon.ico" type="image/x-ico" />

    <link rel='stylesheet' href='css/layerslider.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/owl.carousel.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/owl.transitions.css' type='text/css' media='all' />
  <!--   <link rel='stylesheet' href='css/Pe-icon-7-stroke.css' type='text/css' media='all' /> -->
    <link rel='stylesheet' href='css/jquery.fancybox.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/fontello.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/media.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/js_composer_front_custom.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/font-awesome.css' type='text/css' media='all' />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato:100,300,regular,700,900%7COpen+Sans:300%7CIndie+Flower:regular%7COswald:300,regular,700&subset=latin,latin-ext' type='text/css' media='all' />
   <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700italic,700,800,800italic&ver=4.4.2' type='text/css' media='all' />
   <link rel='stylesheet' href='http:s//fonts.googleapis.com/css?family=Playfair+Display:400,700&ver=4.4.2' type='text/css' media='all' />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" />

    <link rel="stylesheet" href="css/custom.css" type='text/css' media='all' />
    <?php
        if (isset($_REQUEST['proceso'])) {
            $proceso    = $_POST['proceso'];
        } else {
            $proceso    = "";
        }

        if($proceso=="Registrar"){
            $nombre         = $_POST['nombres'];
            $email          = $_POST['email'];
            $telefono       = $_POST['telefono'];
            $comentario     = $_POST['mensaje'];
            $fecha_ingreso  = $_POST['fecha_ingreso'];

            $emailDestino = "mcampuzano@plexus.pe";
            $encabezado = "Enviado desde Plexus";
            $mensaje .= "Información del Contacto\n";
            $mensaje .= "------------------------\n";
            $mensaje .= "Nombres        :".$nombre."\n";
            $mensaje .= "Email          :".$email."\n";
            $mensaje .= "Telefono       :".$telefono."\n";
            $mensaje .= "Fecha          :".$fecha_ingreso."\n";
            $mensaje .= "Mensaje        :".$comentario."\n";

            $mailcabecera = "Desde: ".$email." <". $nombres. "> \n";
            $mailcabecera .= "Responder a: ".$email."\n\n";
            mail($emailDestino,$encabezado, $mensaje, $mailcabecera);
            header("Location:exitos.php");
        }
    ?>
    <script>
    function Validar(){
        
        if(document.contacto.nombres.value==""){
            alert("Debe ingresar su nombres");
            document.contacto.nombres.focus();
            return; 
        }
        if(document.contacto.telefono.value==""){
            alert("Debe ingresar su telefono");
            document.contacto.telefono.focus();
            return; 
        }
        if(document.contacto.email.value==""){
            alert("Debes ingresar un email");
            document.contacto.email.focus();
            return;
        }
        if (document.contacto.email.value.indexOf('@') == -1){
            alert ("La \"dirección de email\" no es correcta");
            document.contacto.email.focus();
            return;
        }
        if(document.contacto.mensaje.value==""){
            alert("Debe ingresar su mensaje");
            document.contacto.mensaje.focus();
            return; 
        }
        document.contacto.proceso.value="Registrar";
        document.contacto.action="index.php";
        document.contacto.submit();
    }
</script>
</head>

<body class="home page page-id-5 page-template-default wpb-js-composer js-comp-ver-4.9.2 vc_responsive">
        <div id="home"></div>
        <div id="header-wrapper" class="navbar" align="center">
            <!--menuDesktop-->
            <div class="logo">
                <a href="index.php" title=""><img  id="logoImageRetina" src="img/plexus.svg"/></a>
                <span class="baner_what"></a><a href="https://api.whatsapp.com/send?phone=51956088899" target="new"><i class="fab fa-whatsapp fa-2x">&nbsp;</i><b style="font-size: 28px;">956088899</b></a><br>mcampuzano@plexus.pe</span>
            </div>
            <!--menuDesktop-->

            <!--menuResponsive-->
            <a class="mobile-menu-show">
                <img src="img/plexus.svg" class="logom" >
            </a>
            <!--menuResponsive-->           
            <div class="clear"></div>
        </div>

        <!-- start container -->
        <div id="container">
            <div id="post-5" class="post-5 page type-page status-publish hentry">
                 <div class="vc_row wpb_row vc_row-fluid">
                        <style type="text/css">
                        @media screen and (max-width: 992px) {
                          .moviless {
                            display: none;
                          }
                        }
                        @media screen and (min-width: 992px) {
                          .deskless {
                            display: none;
                          }
                        }
                        </style>
                    <!--slideshow-->
                    <div class="wpb_wrapper">
                        <br><br>
                        <div class="wpb_layerslider_element wpb_content_element moviless" style="background: url('img/edificio.jpg') no-repeat; background-size: cover;">
                            <div id="layerslider_2_1456695929_1" class="ls-wp-container" style="width:1260px;height:580px;max-width:1260px;margin:0 auto;margin-bottom: 0px;">
                                <div class="ls-slide" data-ls="slidedelay:8000;transition2d:75,79;">
                                    <img class="ls-l" style="top:0px;left:0px;white-space: nowrap;" data-ls="offsetxin:0;durationin:2000;easingin:linear;offsetxout:0;durationout:6000;easingout:linear;fadeout:false;scalexout:0;scaleyout:0;"  alt="">
                                    <p class="ls-l" style="top:220px;left:87px;font-weight: 700; text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.4); letter-spacing: -2px;padding-left:20px;font-family:'Open Sans', sans-serif;;font-size:40px;line-height:52px;color:#ffffff;white-space: nowrap;" data-ls="durationin:1500;delayin:1300;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">CENTRO EMPRESARIAL<br>EN EL NUEVO POLO COMERCIAL DE LIMA</p>
                                    <p class="ls-l" style="top:340px;left:114px;font-weight: 400; text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.4); letter-spacing: -1px;font-family:'Open Sans', sans-serif;;font-size:25px;line-height:28px;color:#ffffff;white-space: nowrap;" data-ls="durationin:1500;delayin:2500;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">Visítanos en: Calle Martín de Murúa 150 - San Miguel.</p>
                                    <div class="ls-l" style="top:390px;left:114px;background: #000; padding: 20px 30px; font-weight: 700; text-transform: uppercase;; font-size: 13px; display: inline-block; color: #fff;white-space: nowrap;" data-ls="durationin:1500;delayin:3500;"><a href="#from" title="" target="_self" style="color: #fff;">Cotiza Aqui</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--slideshow-->
                    <style type="text/css">
                        a.portfolio-read {
                            background: #000;
                            padding: 9px 30px;
                            font-weight: 700;
                            text-transform: uppercase;
                            font-size: 13px;
                            /* display: inline-block; */
                            /* position: absolute; */
                            /* bottom: 50px; */
                            left: 50%;
                            /* margin-left: -70px; */
                            color: #fff;
                        }
                    </style>

                    <!--slideMovil-->
                    <div class="deskless" style="padding-top: 64px;">
                        <div class="home-wrapper">

                            <div class="pego-columns12 fl home-element2" align="center" style="background-color: #344f7c14; padding: 20px 0px;">
                                <h1 class="page-heading" style="margin-bottom: 17px;">OFICINAS EMPRESARIALES EN<span> EL NUEVO POLO COMERCIAL DE LIMA SAN MIGUEL</span></h1>

                                <a href="#from" class="portfolio-read">Cotiza Aqui</a>
                            </div>
              
                            <img src="img/edificio.jpg" style="width: 100%; height: 200px;">
                           

                        </div>
                    </div>
                    <!--slideMovil-->


                    <!--home-wrapper-->  
                    <div class="home-wrapper">
                            <!--bannerprincipal-->
                            <div class="pego-columns12 fl home-element2 heading_m" align="center" style="background-color: #344f7c14;">
                                <h1 class="page-heading">Porqué invertir en plexus<span>oficinas en san miguel</span></h1>
                            </div>
                            <!--bannerprincipal-->

                            <!--seccionUno-->   
                            <div class="container-wrapper">
                                <div class="pego-columns pego-columns6 fl home-element2">
                                    <h1 class="page-title">SAN MIGUEL <span>NUEVO POLO COMERCIAL DE LIMA</span></h1>
                                    <p class="page-summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                                <div class="pego-columns pego-columns3 fl colorsheme3  home-element3a">
                                    <a class="col-link" href="index.php#"><img width="315" height="290" src="pic/pelxus-1.jpg" class="attachment-full size-full" alt="free-consulting" style="height: 222px;" /></a>
                                </div>
                                <div class="pego-columns pego-columns3 fl   home-element3b" style="background-color: black !important;">
                                    <a class="col-link fancybox-media" href="https://youtu.be/7OVBKVTeySw" rel="media-gallery">
                                        <div class="page-vertical-alignment">
                                            <div class="page-icon-wrapper">
                                                <i class="far fa-play-circle fa-5x"></i>
                                                <br><br>
                                                <h1 class="page-title">¡REVISA EL VIDEO!</h1>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!--seccionUno-->              
                            <!--foldercontainer-->
                                <div class="container-wrapper">
                                    <div class="folio-view-wrapper">
                                        <!--ItemsInmubles-->
                                        <div class="pego-columns-auto-height  pego-columns6 fl folio-view isotope-item bner2">
                                                <div class="folio-view-item">
                                                    <a class="folio-view-thumb zoom">
                                                        <img src="pic/plexus-2.jpg" alt="Interior design in colors. Amazing!" />
                                                        <div class="arrow-up"></div>
                                                        <div class="folio-view-overlay-icon pe-7s-plus"></div>
                                                        <div class="folio-view-overlay-bg"></div>
                                                    </a>
                                                <div class="folio-view-desc">
                                                <div class="folio-view-categories">
                                                    <a href="#" rel="tag">AREAS COMUNES A1</a> </div>
                                                        <div class="folio-view-separator"> / </div>
                                                        <div class="folio-view-date">Mayo 11, 2018</div>
                                                        <div class="clear"></div>
                                                        <h1 class="single-folio-view-title"><a href="#" >COMODIDAD PARA TUS COLABORADORES</a></h1>
                                                        <p class="folio-view-summary">Lorems ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostr. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.quis nostr. velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                        <a href="#from" class="portfolio-read">Cotiza Aqui</a>
                                                </div>
                                                
                                            </div>
                                        </div>

                                        <div class="pego-columns-auto-height  pego-columns6 fl folio-view isotope-item bner2">
                                                <div class="folio-view-item">
                                                    <div class="folio-view-desc">
                                                        <div class="folio-view-categories">
                                                            <a href="#" rel="tag">Desde 42 mt2</a>, <a href="#" rel="tag">¿Entrega Inmediata!</a> </div>
                                                        <div class="folio-view-separator"> / </div>
                                                        <div class="folio-view-date">Mayo 11, 2018</div>
                                                        <div class="clear"></div>
                                                        <h1 class="single-folio-view-title"><a href="#" >Oﬁcinas A1 de acuerdo a las necesidades de tu empresa</a></h1>
                                                        <p class="folio-view-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostr. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</p>
                                                        <a href="#from" class="portfolio-read">Cotiza Aqui</a>
                                                    </div>

                                                    <a class="folio-view-thumb zoom">
                                                        <img src="pic/plexus-3.jpg" alt="Awesome interior design just before holidays" />
                                                        <div class="arrow-down"></div>
                                                        <div class="folio-view-overlay-icon pe-7s-plus"></div>
                                                        <div class="folio-view-overlay-bg"></div>
                                                    </a>
                                                </div>
                                              
                                        </div> 
                                        <!--ItemsInmubles-->   

                                        <!--itemInmublesMmovil--> 
                                        <div class="movil_bner2">
                                            <div class="pego-columns-auto-height  pego-columns6 fl folio-view isotope-item">
                                                <div class="folio-view-item">
                                                    
                                                    <a class="folio-view-thumb zoom">
                                                        <img src="pic/plexus-2.jpg" alt="Awesome interior design just before holidays" />
                                                        <div class="arrow-up"></div>
                                                        <div class="folio-view-overlay-icon pe-7s-plus"></div>
                                                        <div class="folio-view-overlay-bg"></div>
                                                    </a>
                                                    <div class="folio-view-desc">
                                                        <div class="folio-view-categories">
                                                            <a href="#" rel="tag">Desde 42 mt2</a>, <a href="#" rel="tag">¿Entrega Inmediata!</a> </div>
                                                        <div class="folio-view-separator"> / </div>
                                                        <div class="folio-view-date">Mayo 11, 2018</div>
                                                        <div class="clear"></div>
                                                        <h1 class="single-folio-view-title"><a href="#" >Oﬁcinas A1 de acuerdo a las necesidades de tu empresa</a></h1>
                                                        <p class="folio-view-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostr. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</p>
                                                        <a href="#from" class="portfolio-read">Cotiza Aqui</a>
                                                    </div>
                                                </div>
                                               
                                            </div>

                                            <div class="pego-columns-auto-height  pego-columns6 fl folio-view isotope-item">
                                                    <div class="folio-view-item">
                                                        <a class="folio-view-thumb zoom">
                                                            <img src="pic/plexus-3.jpg" alt="Interior design in colors. Amazing!" />
                                                            <div class="arrow-up"></div>
                                                            <div class="folio-view-overlay-icon pe-7s-plus"></div>
                                                            <div class="folio-view-overlay-bg"></div>
                                                        </a>
                                                    <div class="folio-view-desc">
                                                    <div class="folio-view-categories">
                                                        <a href="#" rel="tag">AREAS COMUNES A1</a> </div>
                                                            <div class="folio-view-separator"> / </div>
                                                            <div class="folio-view-date">Mayo 11, 2018</div>
                                                            <div class="clear"></div>
                                                            <h1 class="single-folio-view-title"><a href="#" >COMODIDAD PARA TUS COLABORADORES</a></h1>
                                                            <p class="folio-view-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostr. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</p>
                                                            <a href="#from" class="portfolio-read">Cotiza Aqui</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--itemInmublesMmovil-->

                                        <!--rowImgCarousel-->
                                        <div class="pego-columns pego-columns6 fl home-element5 colorsheme3"></div>
                                            <div class="pego-columns pego-columns6 fl home-element6">
                                                <div class="owl-carousel owl-theme portfolio-wrapper owl-item">
                                                     <div class="item">
                                                        <h1 class="portfolio-title"><span>CERCA</span> PLAZA SAN MIGUEL</h1>
                                                        <p class="portfolio-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostr. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</p>
                                                        <img src="upload/plaza-san-miguel.jpg" class="portfolio-image" alt="&lt;span&gt;Colored&lt;/span&gt; interior design" /><a href="index.php#" class="portfolio-read-more">Cotiza Aqui</a>
                                                        <div class="clear"></div></div>
                                                    <div class="item">
                                                        <h1 class="portfolio-title"><span>CERCA</span>METRO LA MARINA</h1>
                                                        <p class="portfolio-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostr. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</p><img src="upload/metrolamarina.jpg" class="portfolio-image" alt="&lt;span&gt;Family house&lt;/span&gt; in nature" /><a href="index.php#" class="portfolio-read-more">Cotiza Aqui</a>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="item">
                                                        <h1 class="portfolio-title"><span>30 MINUTOS</span> DEL AEROPUERTO</h1>
                                                        <p class="portfolio-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostr. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</p><img src="upload/aeropuerto-jorge-chavez.jpg" class="portfolio-image" alt="&lt;span&gt;Renovated&lt;/span&gt; interior house" /><a href="index.php#" class="portfolio-read-more">Cotiza Aqui</a>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="item">
                                                        <h1 class="portfolio-title"><span>20  MINUTOS PUERTO</span> DEL CALLAO</h1>
                                                        <p class="portfolio-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostr. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</p><img src="upload/puerto-callao.jpg" class="portfolio-image" alt="&lt;span&gt;Modern and&lt;/span&gt; square house" /><a href="index.php#" class="portfolio-read-more">Cotiza Aqui</a>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="item">
                                                        <h1 class="portfolio-title"><span>PRÓXIMIDAD</span>AV. LA MARINA</h1>
                                                        <p class="portfolio-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostr. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</p><img src="upload/lamarina.jpg" class="portfolio-image" alt="&lt;span&gt;Luxury&lt;/span&gt; House in Bali" /><a href="index.php#" class="portfolio-read-more">Cotiza Aqui</a>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>    
                                            </div>
                                        </div>
                                        <!--rowImgCarousel-->


                                        <!--seccionBannerMovil-->
                                        <div class="pego-columns pego-columns12 fl home-element2 movil_bner2" align="center" style="padding: 35px 40px 30px; height: 120px; background-color: black;">
                                            <h1 class="page-heading-2" style="font-size: 18px;">NO ESPERES MÁS COMUNÍCATE <br><span style="font-size: 19px;font-weight: 700;">SOLICITA TU COTIZACIÓN AQUÍ</span></h1>
                                        </div>
                                        <!--seccionBannerMovil-->


                                        <!--seecionBannerDesktop-->
                                        <div class="pego-columns pego-columns12 fl home-element2 bner2" align="center" style="padding: 35px 40px 30px; height: 180px; background-color: black;">
                                            <h1 class="page-heading-2">NO ESPERES MÁS COMUNÍCATE <br><span style="font-size: 52px;font-weight: 700;">SOLICITA TU COTIZACIÓN AQUÍ</span></h1>
                                        </div>  
                                        <!--seecionBannerDesktop-->

                                        <div class="about-wrapper">
                                            <div class="pego-columns-auto-height pego-columns6 fl about-element2 bner2"><img class="fl" src="pic/plexus-5.jpg" alt=""></div>
                                            <div class="pego-columns-auto-height pego-columns6 fl about-element1" id="from" >
                                                <h2 class="about-subtitle">BRÍNDANOS TUS DATOS Y</h2>
                                                <h1 class="about-title">TE CONTACTAMOS</h1>
                                                <div class="form-style-8" align="center">
                                                    <form name="contacto" id="contacto" method="post" action="">
                                                        <input type="text" id="nombres" name="nombres" placeholder="Nombre" />
                                                        <input type="text" id="telefono" name="telefono" placeholder="Celular" />
                                                        <input type="email" id="email" name="email" placeholder="Correo" />
                                                        <textarea id="mensaje" name="mensaje" placeholder="Comentario" ></textarea>
                                                        <br><br>
                                                        <div style="clear: both;"></div>
                                                        <!-- <input type="button" name="submit" onClick="javascript:Validar();" class="btn_enviar" value="Enviar" /> -->
                                                        <button type="button" onClick="javascript:Validar();" class="btn_enviar">Enviar</button>
                                                        <input type="hidden" name="proceso" />
                                                        <?php $fecha = date("Y-m-d"); ?>
                                                        <input type="hidden" name="fecha_ingreso" value="<?php echo $fecha ?>">
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <!--Formulario-->

                                        <!--Direccion-->
                                        <div class="pego-columns pego-columns12 fl home-element2 " align="center" style="height: 140px;vertical-align: middle;background-color: #344f7b;">
                                            <h1 class="page-heading address_color">La mejor ubicación para <span class="address_color">oficinas en san miguel</span></h1>
                                            <p class="address_color">Calle Martín de Murúa 150 - Edificio Empresarial PLEXUS San Miguel, LIMA - PERÚ</p>
                                        </div>
                                        <!--Direccion-->
                                        <div class="clear"></div>
                                    </div>
                                </div>    
                            <!--foldercontainer-->
                            <!--googleMaps-->
                            <div id="maps"></div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d975.38335528687!2d-77.09345382634368!3d-12.075590421389505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c96ff8023dc7%3A0xe2b0a2ebfb211589!2sPlexus+Centro+Empresarial!5e0!3m2!1ses-419!2spe!4v1525122313720" height="600" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                            <!--googleMaps-->
                    </div>
                    <!--home-wrapper-->

                </div>
            </div>
        </div>
        <!-- end container -->
        <!--footer-->
        <div class="footer">
            <img src="img/plexus.svg" width="250">
            <p>Las oficinas en venta de Plexus están ubicadas en el nuevo Polo Empresarial de Lima, San Miguel. Tienen vista panorámica y amplios ambientes</p>
            <div class="row img_foo">
                <a href="https://www.linkedin.com/company/update-global-marketing" target="_blank"><span class="social"> <i class="fab fa-linkedin-in"></i></span></a>
                <a href="https://www.facebook.com/updatemarketing/" target="_blank"><span class="social"> <i class="fab fa-facebook-f"></i></span></a>
            </div>
        </div>
        <div style="background-color: black;color: white; padding: 20px;" align="center">
            <p style="margin: 0px;color: white;"> Desarrollado por Update Global Marketing</p>
        </div>
  
      <!--botonesfixed-->
        <a href="#home" class="scroll-to-top" style="display: block;">
            <i class="fa fa-chevron-up" aria-hidden="true" style="margin-top: 7px;"></i> 
            <span class="sr-only">Ir arriba</span>
        </a>
        <a href="#from" class="scroll_mail" style="display: block;">
            <i class="far fa-envelope" style="margin-top: 7px;"></i>
            <span class="sr-only">Ir arriba</span>
        </a>
        <a href="//www.facebook.com/sharer.php?u=http%3A%2F%2Fplexus.grupo-update.com%2F%2F%3Fp%3D1263" class="scroll_social" style="display: block;">
            <i class="fab fa-facebook-f" style="margin-top: 7px;"></i>
            <span class="sr-only">Ir arriba</span>
        </a>
        <a href="https://api.whatsapp.com/send?phone=51956088899" class="scroll_top" style="display: block;">
            <i class="fab fa-whatsapp fa-2x" style="margin-top: 6px;font-size: 38px;margin-left: 9px;">&nbsp;</i>
            <span class="sr-only">Ir arriba</span>
        </a>
        <!--botonesfixed-->




    <script type='text/javascript' src='js/jquery/jquery.js'></script>
    <script type='text/javascript' src='js/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='js/greensock.js'></script>
    <script type='text/javascript' src='js/layerslider.kreaturamedia.jquery.js'></script>
    <script type='text/javascript' src='js/layerslider.transitions.js'></script>
    <script type='text/javascript' src='js/jquery/ui/core.min.js'></script>
    <script type='text/javascript' src='js/jquery/ui/widget.min.js'></script>
    <script type='text/javascript' src='js/jquery/ui/accordion.min.js'></script>
    <script type='text/javascript' src='js/superfish.js'></script>
    <script type='text/javascript' src='js/jquery.fancybox.js'></script>
    <script type='text/javascript' src='js/helpers/jquery.fancybox-media.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>
    <script type='text/javascript' src='js/js_composer_front.min.js'></script>
    <script type='text/javascript' src='js/owl.carousel.js'></script>

    <script data-cfasync="false" type="text/javascript">
        var lsjQuery = jQuery;
    </script>
    <script data-cfasync="false" type="text/javascript">
        lsjQuery(document).ready(function() {
            if (typeof lsjQuery.fn.layerSlider == "undefined") {
                lsShowNotice('layerslider_2_1456695929_1', 'jquery');
            } else {
                lsjQuery("#layerslider_2_1456695929_1").layerSlider({
                    startInViewport: false,
                    pauseOnHover: false,
                    forceLoopNum: false,
                    autoPlayVideos: true,
                    skinsPath: ''
                })
            }
        });
    </script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
        (function() {
            window.onload = function() {
                var pinkParksStyles = "";
                if (jQuery.browser.msie && parseInt(jQuery.browser.version, 10) === 8) {
                } else {
                    var pinkParksStyles = [];
                }
                var pinkMapType = new google.maps.StyledMapType(pinkParksStyles, {
                    name: "Our Location"
                });
                var mapOptions = {
                    zoom: 11,
                    center: new google.maps.LatLng(34.020500, -118.200496),
                    mapTypeControlOptions: {
                        mapTypeIds: [google.maps.MapTypeId.ROADMAP, "pink_parks"]
                    }
                };
                var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
                map.mapTypes.set("pink_parks", pinkMapType);
                map.setMapTypeId("pink_parks");
                var image = "images/map-pin.png";
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(34.020500, -118.200496),
                    map: map,
                    icon: image
                });
            }
        })();
    </script>
</body>
</html>