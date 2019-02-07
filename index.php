<?php
header("X-XSS-Protection: 0");
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');

require("inc/functions.php");
$red = '';
if(isset($_GET['from']) && $_GET['from']!=''){
    $red = '_'.ucwords(getParam($_GET['from'], '')) ;
}
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="stylesheet" href="fonts/styles.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="js/owlcarousel/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <meta property="og:url"                content="http://web.pacificoseguros.com/seguroGPSsmart" />
    <meta property="og:type"               content="website" />
    <meta property="og:title"              content="Seguro Vehicular con GPS Smart" />
    <meta property="og:description"        content="Es el Seguro Vehicular que protege tu vehículo frente a robos y accidentes, además de resguardar a tu familia, terceros involucrados en un accidente vehicular, y a ti." />
    <meta property="og:image"              content="http://web.pacificoseguros.com/seguroGPSsmart/fb.jpg" />
    <!-- Facebook Pixel Code -->
    <script>
     !function(f,b,e,v,n,t,s)
     {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
     n.callMethod.apply(n,arguments):n.queue.push(arguments)};
     if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
     n.queue=[];t=b.createElement(e);t.async=!0;
     t.src=v;s=b.getElementsByTagName(e)[0];
     s.parentNode.insertBefore(t,s)}(window, document,'script',
     'https://connect.facebook.net/en_US/fbevents.js');
     fbq('init', '1717062378584697');
     fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1717062378584697&ev=PageView&noscript=1"/>
    </noscript>
   <!-- End Facebook Pixel Code -->
</head>
<body>

<div class="main">
    <div class="header">
        <div class="content">
            <a href="http://www.pacifico.com.pe/" class="logo" target="_blank"><img src="img/logo.png" alt=""></a>
            <a href="#" class="btn">Ingresa tus datos aquí</a>
            <ul class="desktop">
                <li><a href="#inicio" class="inicio" onclick="ga('send','event','Telmatica','Menu','inicio');">Inicio</a></li>
                <li><a href="#que-es-gps-smart" class="como-funciona" onclick="ga('send','event','Telmatica','Menu','que-es-gps-smart');">¿Qué es GPS Smart?</a></li>
                <li><a href="#como-obtengo-mi-nota" class="como-obtengo-mi-nota"  onclick="ga('send','event','Telmatica','Menu','como-obtengo-mi-idea');">¿Cómo obtengo mi nota?</a></li>
                <li><a href="#cuales-son-los-premios" class="cuales-son-los-premios" onclick="ga('send','event','Telmatica','Menu','cuales-son-los-premios');">¿Cuáles son los premios?</a></li>
                <li><a href="#preguntas-frecuentes" class="preguntas-frecuentes" onclick="ga('send','event','Telmatica','Menu','preguntas-frecuentes');">Preguntas frecuentes</a></li>
            </ul>
            <a href="#" class="burger"><img src="img/mobile/burger.png" alt=""></a>
            <ul class="mobile">
                <li><a href="#inicio" class="inicio" onclick="ga('send','event','Telmatica','Menu','inicio');">Inicio</a></li>
                <li><a href="#como-funciona" class="como-funciona" onclick="ga('send','event','Telmatica','Menu','como-funciona');">¿Cómo funciona?</a></li>
                <li><a href="#como-obtengo-mi-nota" class="como-obtengo-mi-nota"  onclick="ga('send','event','Telmatica','Menu','como-obtengo-mi-idea');">¿Cómo obtengo mi nota?</a></li>
                <li><a href="#cuales-son-los-premios" class="cuales-son-los-premios" onclick="ga('send','event','Telmatica','Menu','cuales-son-los-premios');">¿Cuáles son los premios?</a></li>
                <li><a href="#preguntas-frecuentes" class="preguntas-frecuentes" onclick="ga('send','event','Telmatica','Menu','preguntas-frecuentes');">Preguntas frecuentes</a></li>
            </ul>
        </div>
    </div>
    <div class="bg-form"></div>
    <div class="form">
        <a href="#" class="close"><img src="img/close_btn_mini.png" alt=""></a>
        <form name="registro" id="registro" method="post" action="">
            <div class="content">
                    <div class="group">
                        <div class="fields">
                    <div class="envio">
                        <p class="note">Nos comunicaremos contigo para ayudarte con tu compra.</p>
                        <span class="title">Lugar de residencia</span>
                        <p class="select">
                            <select name="departamento" id="departamento" data-valid="required">
                                <option value="">Seleccionar</option>
                                <option value="1">AMAZONAS</option>
                                <option value="2">ANCASH</option>
                                <option value="3">APURIMAC</option>
                                <option value="4">AREQUIPA</option>
                                <option value="5">AYACUCHO</option>
                                <option value="6">CAJAMARCA</option>
                                <option value="7">CALLAO</option>
                                <option value="8">CUSCO</option>
                                <option value="9">HUANCAVELICA</option>
                                <option value="10">HUANUCO</option>
                                <option value="11">ICA</option>
                                <option value="12">JUNIN</option>
                                <option value="13">LA LIBERTAD</option>
                                <option value="14">LAMBAYEQUE</option>
                                <option value="15">LIMA</option>
                                <option value="16">LORETO</option>
                                <option value="17">MADRE DE DIOS</option>
                                <option value="18">MOQUEGUA</option>
                                <option value="19">PASCO</option>
                                <option value="20">PIURA</option>
                                <option value="21">PUNO</option>
                                <option value="22">SAN MARTIN</option>
                                <option value="23">TACNA</option>
                                <option value="24">TUMBES</option>
                                <option value="25">UCAYALI</option>
                            </select>
                        </p>
                        <p class="input"><input name="nombre" id="nombre" placeholder="Nombres*" data-valid="required" maxlength="64"></p>
                        <p class="input"><input class="input-txt" name="apellidos" id="apellidos" placeholder="Apellidos*" data-valid="required" maxlength="64"></p>
                        <p class="select select-field">
                            <select name="tipo_documento" id="tipo_documento" data-valid="required">
                                <option value="">Tipo de documento*</option>
                                <option value="1">DNI</option>
                                <option value="2">Pasaporte</option>
                                <option value="3">RUC</option>
                                <option value="4">Carné de Extranjería</option>
                            </select>
                        </p>
                        <p class="input"><input name="num_documento" id="num_documento" placeholder="Número de documento*" data-valid="required" maxlength="8"></p>
                        <p class="input"><input name="email" id="email" placeholder="Correo electrónico*" data-valid="email" maxlength="128"></p>
                        <p class="input"><input name="telefono" id="telefono" placeholder="Teléfono*" data-valid="tel" maxlength="9"></p>
                        <p class="term1">
                            <input type="checkbox" name="terms" id="terms" />
                            <label for="terms">He leído y acepto las condiciones establecidas en la <a href="#cons-popup" class="open-popup-link proteccion" data-effect="mfp-zoom-in">cláusula de protección de datos personales</a>*:</label>
                        </p>
                        <p class="input text">* Campos obligatorios</p>
                        <!--<div class="g-recaptcha" data-sitekey="6LcRIxUUAAAAAD8sVA5Raw_3zVwhjVXEZyOssiPa"></div>-->
                        <input type="hidden" name="provincia" id="provincia" value="128">
                        <input type="hidden" name="plan" value="23" />
                        <input type="hidden" name="from" id="from" value="LandingGPS<?php echo $red; ?>"/>
                        <input type="hidden" name="campania" id="campania" value="1147"/>
                        <input type="hidden" name="es_cliente" id="es_cliente" value="0"/>

                        <a href="#" class="btn" onclick="ga('send','event','Telematica','Formulario','Botón - envía tus datos');">envía tus datos</a>
                    </div>
                    <div class="gracias">
                        <span class="line1">Datos enviados correctamente.</span>
                        <span class="line2">Gracias por tu interés.</span>
                        <span class="line3">Un asesor especializado te contactará directamente para brindarte la información que requieres.</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
                        <div class="clearfix"></div>
                    </div>
<!--                <div class="error-form">Ha ocurrido un error, inténtelo nuevamente.</div>-->
            </div>
        </form>
    </div>
    <div class="contenido">
        <div class="bg">
            <div class="blue">
                <div class="home">
                    <div class="sombra">
                        <div class="content">

                            <section id="inicio" class="section">
                                <div class="bgsombra">
                                    <div class="auto-home">
                                        <div class="content2">
                                            <div class="carro"><img src="img/letrero/home-auto.png" alt=""></div>
                                            <div class="y"><img src="img/letrero/basey.png" alt=""></div>
                                            <div class="bright-y"><img src="img/letrero/bright-y.png" alt=""></div>
                                            <div class="blue"><img src="img/letrero/blue.png" alt=""></div>
                                            <div class="base-stars"><img src="img/letrero/base-stars.png" alt=""></div>
                                            <div class="stars"><img src="img/letrero/stars.png" alt=""></div>
                                            <div class="bright-stars"><img src="img/letrero/bright-stars.png" alt=""></div>
                                            <div class="txt-neon"><img src="img/letrero/txt-neon.png" alt=""></div>
                                            <div class="light-on"><img src="img/letrero/light-on.png" alt=""></div>
                                            <div class="bright-gana"><img src="img/letrero/bright-gana.png" alt=""></div>
                                            <div class="llanta-izq"><img src="img/letrero/llanta-der.png" alt=""></div>
                                            <div class="llanta-der"><img src="img/letrero/llanta-izq.png" alt=""></div>
                                            <div class="sombra-car"><img src="img/letrero/sombra.png" alt=""></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="inner-content">
                                    <div class="text">
                                        <h1>
                                            <span class="line2">Seguro Vehicular</span>
                                            <span class="line3">con GPS Smart</span>
                                        </h1>
                                        <p>Premia tu estilo de manejo.</p>
                                    </div>
                                    <div class="text2">
                                        <img src="img/home-text2.png?id=1" alt="">
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="bottom">
                                        <ul>
                                            <li class="bottom1">
                                                <div class="left"><img src="img/icon1.png" alt=""></div>
                                                <div class="right">
                                                    <span class="line1">Pídelo<br>por teléfono al</span>
                                                    <span class="line2"><a href="tel:015135000">01 513-5000</a></span>
                                                </div>
                                            </li>
                                            <li class="bottom2">
                                                <div class="left"><img src="img/icon2.png" alt=""></div>
                                                <div class="right">
                                                    <span class="line1">Con tu</span>
                                                    <span class="line2">corredor</span>
                                                    <span class="line1">de seguros.</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </section>

                            <section id="que-es-gps-smart" class="section">
                                <div class="desc">
                                    <p>Es el Seguro Vehicular que protege tu vehículo frente a robos y accidentes, además de resguardar a tu familia, terceros involucrados en un accidente vehicular, y a ti.</p>
                                    <p>Además con el <strong>GPS Smart</strong> no solo podrás localizar tu auto en caso de robo, sino que brinda asistencia vial proactiva y evalúa tu estilo de manejo para que así puedas mejorarlo progresivamente y ganar premios.<br>
                                        Por eso <strong>¡Maneja bien y gana!</strong></p>
                                </div>

                                <div class="video-player">
                                    <h3 class="caption">Así funciona el GPS Smart.</h3>
                                    <div class="player">
                                        <div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/vR96VdAmrZg" style="position:absolute;width:100%;height:100%;left:0" width="485" height="283" frameborder="0" allowfullscreen></iframe></div>
                                    </div>
                                </div>
                            </section>

                            <section id="gps-smart">

                                <div class="led">
                                    <img src="img/led1.png">
                                    <div class="off"><img src="img/led1_off.png" alt=""></div>
                                    <div class="on"><img src="img/led1_on.png" alt=""></div>
                                    <p>Al contratar tu seguro deberás comprar un <strong>GPS Smart</strong> en <strong>TracklinkOcto</strong><br>llamando a (01) 6307575, ellos instalarán este dispositivo en tu carro.</p>
                                </div>

                                <div class="beneficios">
                                    <div class="block1">
                                        <h3>¿Qué beneficios tiene el GPS Smart?</h3>
                                    </div>
                                    <div class="cols">
                                        <div class="left">
                                            <img src="img/ben2.png" alt="">
                                            <h3>GPS</h3>
                                            <p>Nos permitirá localizar y<br>recuperar tu vehículo en<br>caso de robo en todo el<br>territorio nacional.</p>
                                        </div>
                                        <div class="center">
                                            <img src="img/ben3.png" alt="">
                                            <h3>eCall</h3>

                                            <p>Ante un choque grave se envía una alerta automática a la central de emergencia de <strong>GPS Smart</strong> para comunicarnos contigo y enviarte la asistencia necesaria.</p>
                                        </div>
                                        <div class="right">
                                            <img src="img/ben1.png" alt="">
                                            <h3>Premios</h3>
                                            <p>El <strong>GPS Smart</strong> te pone una nota<br>en base a 3 variables:</p>
                                            <ul>
                                                <li>Aceleraciones bruscas</li>
                                                <li>Curvas bruscas</li>
                                                <li>Frenadas fuertes</li>
                                            </ul>
                                            <p>Esta nota te puede hacer ganar hasta<br>US$200 en productos Pacífico y miles<br>de KMS. LATAM Pass.</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </section>

                            <section id="como-obtengo-mi-nota" class="section">

                                <div class="led2">
                                    <img src="img/led2.png">
                                    <div class="off"><img src="img/led1_off.png" alt=""></div>
                                    <div class="on"><img src="img/led1_on.png" alt=""></div>
                                    <div class="cols">
                                        <div class="left">
                                            <span>El <strong>GPS Smart</strong> califica tu estilo de manejo con una nota del 0 al 10. Todos tus viajes tendrán una calificación, midiendo 3 variables:</span>
                                            <img src="img/que_es1.png" alt="">
                                            <ul>
                                                <li>Aceleraciones bruscas</li>
                                                <li>Curvas bruscas</li>
                                                <li>Frenadas fuertes</li>
                                            </ul>
                                        </div>
                                        <div class="right">
                                            <span>Cada viaje te dará una nota, estas se promediarán semanalmente y cada 3 meses, según tu promedio, serás premiado.</span>
                                            <div class="auto">
                                                <div class="izq"><img src="img/rueda1.png" alt=""></div>
                                                <div class="der"><img src="img/rueda2.png" alt=""></div>
                                            </div>
                                            <span class="bot">¡Mientras mejor manejes,<br>mejor nota tendrás!</span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </section>

                            <section id="donde-veo-mi-nota">

                                <div class="led3">
                                    <img src="img/led3.png">
                                    <div class="off"><img src="img/led1_off.png" alt=""></div>
                                    <div class="on"><img src="img/led1_on.png" alt=""></div>
                                    <div class="cols">
                                        <div class="left">
                                            <span class="line1">Descarga nuestra <strong>App PACÍFICO GPS Smart</strong><br>
                                            en tu celular y regístrate con el usuario<br>
                                            y contraseña que te dará <strong>TracklinkOcto</strong>, así<br>tendrás el control de tu nota y podrás<br>revisarla cuando quieras.</span>
                                            <span class="line2">Recuerda que cada viaje<br>se promedia con el anterior,<br>mientras mejoras tu<br>estilo de manejo,<br>mejoras tu nota.</span>
                                        </div>
                                        <div class="center">
                                            <img src="img/bgapp.png" alt="">
                                        </div>
                                        <div class="right">
                                            <img src="img/screens_app.png" alt="">
                                            <span class="izq"><a href="https://goo.gl/DIR9Q1" target="_blank" oncick="ga('send','event','Telmatica','Menu', 'link-app-store' );"><img src="img/appstore.png" alt=""></a></span>
                                            <span class="der"><a href="https://goo.gl/sXtXhc" target="_blank" oncick="ga('send','event','Telmatica','Menu', 'link-play-store' );"><img src="img/googleplay.png" alt=""></a></span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </section>

                            <section id="cuales-son-los-premios" class="section">

                                <div class="led4">
                                    <img src="img/led4.png">
                                    <div class="off"><img src="img/led1_off.png" alt=""></div>
                                    <div class="on"><img src="img/led1_on.png" alt=""></div>
                                    <div class="cols">
                                        <div class="left">
                                            <span class="img"><img src="img/ganar1.png" alt=""></span>
                                            <span class="line1">¡Gran premio anual!</span>
                                            <span>Al finalizar el año de vigencia de tu seguro<br>de autos puedes ganar:</span>
                                            <span class="table">
                                                <span class="row">
                                                    <span class="izq1">Con una nota de:</span>
                                                    <span class="der1">Ganas:</span>
                                                </span>
                                                <span class="row">
                                                    <span class="izq2">
                                                        <span class="line">8</span>
                                                        <span class="line">9</span>
                                                        <span class="line">10</span>
                                                    </span>
                                                    <span class="der2">
                                                        <span class="line">US$50</span>
                                                        <span class="line">US$100</span>
                                                        <span class="line">US$200</span>
                                                    </span>
                                                </span>
                                                <span class="clearfix"></span>
                                            </span>
                                            <span class="legend">El bono se podrá usar en productos Pacífico Seguros o para la<br>renovación anual de tu póliza de autos.</span>
                                        </div>
                                        <div class="right">
                                            <span class="img"><img src="img/ganar2.png?id=1" alt=""></span>
                                            <span class="line1">Premios Trimestrales</span>
                                            <span>Cada trimestre desde la activación<br>de tu seguro de autos, puedes ganar:</span>
                                            <span class="table">
                                                <span class="row">
                                                    <span class="izq1">Con una nota de:</span>
                                                    <span class="der1">Ganas:</span>
                                                </span>
                                                <span class="row">
                                                    <span class="izq2">
                                                        <span class="line">8</span>
                                                        <span class="line">9</span>
                                                        <span class="line">10</span>
                                                    </span>
                                                    <span class="der2">
                                                        <span class="line">1,000 KM LATAM Pass</span>
                                                        <span class="line">2,000 KMS LATAM Pass</span>
                                                        <span class="line">3,000 KMS LATAM Pass</span>
                                                    </span>
                                                </span>
                                                <span class="clearfix"></span>
                                            </span>
                                            <span class="legend">¡Los KMS son acumulativos y puedes llegar a ganar hasta <strong>12,000 KMS LATAMPASS</strong> durante el año de vigencia de tu póliza! Y serán depositados en tu cuenta de LATAM Pass.</span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </section>
                            <div class="clearfix"></div>
                            <section id="preguntas-frecuentes" class="section">
                                <div class="led5">
                                    <img src="img/led5.png">
                                    <div class="off"><img src="img/led1_off.png" alt=""></div>
                                    <div class="on"><img src="img/led1_on.png" alt=""></div>
                                    <div class="cols">
                                        <ol>
                                            <li><a href="#">¿Cómo calculan mi nota?</a>
                                                <div>
                                                    <p>La nota es calculada de forma completamente automatizada y sin intervención humana por OctoTelematics, empresa europea que cuenta con la base de datos más grande del mundo de estilos de conducción, la cual asigna notas de estilos de conducción desde hace 14 años en 39 países. Un motor de inteligencia artificial con20 algoritmos independientes, procesa las aceleraciones bruscas, frenadas bruscas y curvas bruscas, cada una con múltiples niveles de intensidad. Todo esto es recopilado por el GPS Smart de TracklinkOcto que se instala en tu auto,  y asigna la nota cada semana.</p>
                                                    <p>Las notas semanales determinan la nota mensual, y las notas mensuales determinan la nota global, la cual aparece en la pantalla principal “MI NOTA” de la App que se puede descargar de App Store (iOS), Google Play (Android) o de la página web de Pacífico Seguroswww.pacifico.com.pe</p>
                                                    <p>Es importante resaltar que el GPS Smart de TracklinkOcto no recopila ningún tipo de infracción.</p>

                                                    <p>NOTA: Pacífico no tiene injerencia alguna en la asignación de la nota. </p>
                                                </div>
                                            </li>
                                            <li><a href="#">¿Cómo se calcula mi nota trimestral?</a>
                                                <div>
                                                    <p>La nota trimestral es la nota global que tendrás a los tres meses desde el inicio de vigencia de tu póliza. Después, la nota trimestral será a los 6, 9 y 12 meses desde el inicio de vigencia de tu póliza.</p>
                                                </div>
                                            </li>
                                            <li><a href="#">¿Por qué tengo nota desaprobada?</a>
                                                <div>
                                                    <p>No estás desaprobado, nadie está desaprobado. Para acceder a los beneficios de kilómetros LATAM Pass y dólares en productos Pacífico debes llegar a una nota mínima de 8, esto no quiere decir que las notas menores sean desaprobadas.</p>
                                                    <p>Recuerda que se trata de una evaluación en forma totalmente automatizada de tu estilo de manejo, basado en aceleraciones bruscas, curvas buscas y frenadas bruscas, por ello si mejoras tu estilo de manejo mejorarás tu nota.</p>
                                                    <p>NOTA: Pacífico no tiene injerencia alguna en la asignación de la nota.</p>
                                                </div>
                                            </li>
                                            <li><a href="#">¿Quién calcula mi nota?</a>
                                                <div>
                                                    <p>La nota es calculada de forma completamente automatizada y sin intervención humana por OctoTelematics, empresa europea que cuenta con la base de datos más grande del mundo de estilos de conducción, la cual asigna notas de estilos de conducción desde hace 14 años en 39 países.</p>
                                                    <p>Cuanto mayor es el porcentaje de kilómetros que usted maneja más tranquilo y sereno, más alta será su nota. Esto vale para la semana, mes, trimestre y año. </p>
                                                    <p>NOTA: Pacífico no tiene injerencia alguna en la asignación de la nota.</p>
                                                </div>
                                            </li>
                                            <li><a href="#">¿Cómo se calcula el promedio de mi nota?</a>
                                                <div>
                                                    <p>Cada viaje que realices es evaluado por el motor de inteligencia artificial de la empresa OctoTelematics. La nota asignada, por cada viaje, se promedia con el número de kilómetros.</p>
                                                    <p>Ejemplo: Si en la semana haces unos viajes cortos de forma un poco agresiva y unos viajes más largos con mayor prudencia, la nota semanal tendrá más en cuenta los viajes largos y prudentes, que los cortos y menos prudentes.</p>
                                                    <p>Tú haces los kilómetros que deseas y cuanto mayor es el porcentaje total de kilómetros, en los que manejas prudentemente, más alta será tu nota. Este promedio se desarrollará en la semana, mes, trimestre y año. </p>
                                                </div>
                                            </li>
                                            <li><a href="#">¿Dónde puedo ver qué hice mal para obtener una mejor nota?</a>
                                                <div>
                                                    <p>En la App Pacífico GPS SMART, lacual  se puede descargar de App Store (iOS), Google Play (Android) o de la página web www.pacifico.com.pe</p>
                                                    <p>En esta aplicación podrás ver todos los recorridos de tu auto. Solo tienes que entrar a ver el detalle “Recorridos”.</p>
                                                    <p>Podrás ver la cantidad e intensidad de aceleraciones bruscas, curvas bruscas y frenadas bruscas que hayas generado en cada recorrido para poder mejorar tu nota.</p>
                                                </div>
                                            </li>
                                            <li><a href="#">¿Qué y cómo gano?</a>
                                                <div>
                                                    <p>Se medirá la nota de tu estilo de manejo en diferentes momentos y se asignará los premios de la siguiente manera:</p>

                                                    <p>Durante la vigencia de la póliza.<p>
                                                    <p>Hasta 12,000 Kilómetros LATAM Pass entregados cada 3 meses. (Hasta 3,000 kilómetros LATAM Pass cada 3 meses).</p>

                                                    <p>Cada 3 meses desde el inicio de vigencia de la póliza se medirá la nota de tu estilo de manejo. Siempre y cuando el asegurado y el auto hayan tenido un mínimo de 2 meses con el servicio de GPS activo.</p>
                                                    <span class="table">
                                                        <span class="row">
                                                            <span class="izq1">Con una nota de:</span>
                                                            <span class="der1">Ganas:</span>
                                                        </span>
                                                        <span class="row">
                                                            <span class="izq2">
                                                                <span class="line">8</span>
                                                                <span class="line">9</span>
                                                                <span class="line">10</span>
                                                            </span>
                                                            <span class="der2">
                                                                <span class="line">1,000 KMS LATAM Pass</span>
                                                                <span class="line">2,000 KMS LATAM Pass</span>
                                                                <span class="line">3,000 KMS LATAM Pass</span>
                                                            </span>
                                                        </span>
                                                        <span class="clearfix"></span>
                                                    </span>
                                                    <p>Hasta 200 dólares en productos Pacífico Seguros o para la renovación de tu seguro.
                                                        15 días (calendario) antes de iniciar el último mes de tu póliza se tomará la nota promediada que tienes, si esta es 8,9 o 10 podrás ganar el bono Pacífico.</p>
                                                    <p>Siempre y cuando tú y tu auto hayan tenido un mínimo de 10 meses con el servicio de GPS activo y no hayan tenido <strong>ninguna siniestralidad</strong> durante el periodo de vigencia de la póliza.</p>
                                                    <span class="table">
                                                        <span class="row">
                                                            <span class="izq1">Con una nota de:</span>
                                                            <span class="der1">Ganas:</span>
                                                        </span>
                                                        <span class="row">
                                                            <span class="izq2">
                                                                <span class="line">8</span>
                                                                <span class="line">9</span>
                                                                <span class="line">10</span>
                                                            </span>
                                                            <span class="der2">
                                                                <span class="line">US$50</span>
                                                                <span class="line">US$100</span>
                                                                <span class="line">US$200</span>
                                                            </span>
                                                        </span>
                                                        <span class="clearfix"></span>
                                                    </span>
                                                    <ul>
                                                        <li>Pacífico Seguros tendrá hasta 30 días hábiles para entregar los Kilómetros LATAM Pass y los dólares Pacífico desde las fechas de medición de la nota.</li>
                                                        <li>Para recibir los premios es necesario que la póliza de auto esté vigente.</li>
                                                        <li>Deberás indicar obligatoriamente tu correo electrónico al momento de solicitar la póliza, para hacer efectiva la entrega de los premios.</li>
                                                        <li>Para cumplir con los tiempos de entrega de los Kilómetros LATAM Pass deberás registrarse como socio LATAM.</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="#">¿Cómo descargo la aplicación?</a>
                                                <div>
                                                    <p>Puedes descargar la App “PACIFICO GPS Smart”, directamente desde App Store (iOS) o Google play (Android) o en el link en la página web de Pacífico: www.pacifico.com.pe </p>
                                                </div>
                                            </li>
                                            <li><a href="#">¿Quién me da el usuario y clave para entra a la aplicación?</a>
                                                <div>
                                                    <p>El usuario y clave te la brinda TracklinkOcto. La ejecutiva comercial de TracklinkOcto asignada, te enviará la información dentro de las 24 horas de realizada la instalación del GPS Smart en tu auto. </p>
                                                </div>
                                            </li>

                                            <li><a href="#">¿Qué significa aceleraciones bruscas, curvas bruscas y frenadas fuertes?</a>
                                                <div>
                                                    <p>Cuando manejas debes acelerar, tomar curvas y frenar. El GPS Smart no recopila la data del manejo regular. Lo que recopila y procesa son sólo las aceleraciones bruscas, frenadas bruscas y curvas tomadas en forma brusca o agresiva, con 4 diferentes niveles de intensidad, definidos por una serie de sofisticados algoritmos matemáticos.</p>
                                                    <p><strong>Ejemplos de maniobras bruscas</strong></p>
                                                    <p>Son consideradas maniobras bruscas las que detectará el GPS SMART, que exceden los límites definidos como seguros o propios de un estilo de conducción tranquilo y sereno, con 4 diferentes niveles de intensidad. Estos parámetros están definidos por un modelo matemático-actuarial implementado en 39 países, con pesos diferentes dependiendo del país.</p>
                                                    <p>Aceleración brusca: Es el incremento de velocidad en un corto tiempo. Ejemplo: si usted va a una velocidad constante de 20 Km/h y en pocos segundos incrementa a 50 Km/h, se le considera una aceleración brusca, de acuerdo con los parámetros del modelo matemático-actuarial.</p>
                                                    <p>Frenada brusca: Es la disminución de velocidad en un corto tiempo. Ejemplo: si usted va a velocidad constante de 30 Km/h y por cualquier motivo frena improvisamente hasta detenerse en pocos segundos es considerado una frenada brusca, de acuerdo con los parámetros del modelo matemático-actuarial.</p>
                                                    <p>Curvas brusca: una curva brusca se da cuando es tomada con cierta agresividad, de acuerdo con los parámetros del modelo matemático-actuarial. También se considera curva brusca al cambio de carril repentino, el dispositivo GPS SMART detecta ese movimiento.</p>
                                                    <p>En la conducción regular las maniobras bruscas pueden ocurrir. Por ejemplo, puede ser necesario frenar bruscamente para evitar un peatón, o acelerar bruscamente para evitar un accidente, pero cuando superan un determinado número de eventos bruscos cada 100 kilómetros ya no son una excepción, sino más bien una constante. Esto podría significar un estilo de conducción agresivo que debemos buscar mejorar para no generar ni vernos involucrados en accidentes de tránsito. </p>

                                                </div>
                                            </li>
                                            <li><a href="#">¿Qué es el eCall?</a>
                                                <div>
                                                    <p>Es un Sistema europeo de detección automática de choques, operado por TracklinkOcto, que tiene como objetivo salvar vidas en caso de accidentes vehiculares, haciendo llegar ayuda médica y asistencia técnica en el menor tiempo posible.</p>
                                                    <p>Este sistema ha sido probado a lo largo de 10 años por la Unión Europea, y está presente en Estados Unidos, Canadá, África y Australia y ahora está en Perú.</p>
                                                </div>
                                            </li>
                                            <li><a href="#">¿Cómo funciona el eCall?</a>
                                                <div>
                                                    <p>Este servicio, operado por TracklinkOcto, en caso de un accidente automovilístico, el GPS Smart envía una alerta automática (en un promedio de 45 segundos a través del dispositivo instalado en tu auto, y siempre que haya cobertura de señal telefónica) a la Central de Emergencias de TracklinkOcto. Se recibirá la localización exacta y la gravedad del accidente por la intensidad del impacto.</p>
                                                    <p>Automáticamente nos comunicaremos contigo para saber cómo te encuentras y hacerte llegar  la asistencia necesaria. En caso no logremos ponernos en contacto contigo, enviaremos al lugar donde te encuentras asistencia para ayudarte en el menor tiempo posible.</p>
                                                </div>
                                            </li>
                                            <li><a href="#">¿Qué es el GPS Smart?</a>
                                                <div>
                                                    <p>El GPS Smart es un dispositivo que se instala en tu auto, como un GPS estándar, que además de ser el tradicional servicio GPS para la localización de vehículo en caso de robo, cuenta con una sofisticada tecnología que recopila y procesa aceleraciones bruscas, frenadas bruscas y curvas bruscas, con 4 diferentes niveles de intensidad cada una, para que el sistema pueda asignarle una nota a tu estilo de manejo.</p>
                                                    <p>El GPS Smart también cuenta con el servicio e-Call sistema de detección automática de choques graves, para hacer llegar ayuda médica y asistencia especializada en el menor tiempo posible.</p>
                                                    <p>Es importante resaltar que el GPS Smart de TracklinkOcto no recopila ningún tipo de infracción.</p>
                                                </div>
                                            </li>
                                            <li><a href="#">¿Cuánto cuesta el GPS Smart?</a>
                                                <div>
                                                    <p>El costo del GPS Smart es como el de un GPS tradicional, pero con muchos beneficios adicionales.  Puedes consultar a TracklinkOcto al teléfono (01) 630-7575.</p>
                                                </div>
                                            </li>
                                            <li><a href="#">¿Dónde puede solicitar que instalen el GPS Smart?</a>
                                                <div>
                                                    <p>TTendrás que solicitarlo directamente a TracklinkOcto al teléfono (01) 630-7575 o escribe al correo informes@tracklink.pe.</p>
                                                </div>
                                            </li>
                                            <li><a href="#">¿Quién es TracklinkOcto?</a>
                                                <div>
                                                    <p>TracklinkOcto es una empresa multinacional con base en Italia, presente en 39 países. Cuenta con la base de datos de estilos de conducción vehicular y la plataforma de internet de las cosas más grande del mundo, lo que permite calcular y certificar las notas de estilos de conducción vehicular de millones de vehículos de forma completamente automatizada. Usando un software de inteligencia artificial y sofisticados modelos matemático - actuariales, se puede obtener las notas de los estilos de conducción. </p>
                                                    <p>Además, ofrece el servicio europeo e-Call de Detección Automática de Choques graves, que tiene como objetivo salvar vidas en las vías peruanas en caso de accidentes vehiculares, haciendo llegar la ayuda médica especializada en el menor tiempo posible.</p>
                                                    <p>Incluye en todos los servicios el GPS con recuperación de vehículo en caso de robo.</p>
                                                </div>
                                            </li>
                                            <li><a href="#">¿Cuál es el proceso para la entrega de los KMS?</a>
                                                <div>
                                                    <p>Cada 3, 6, 9 y 12 meses de la vigencia de tu póliza se enviará un correo comunicando la calificación obtenida, para aplicar a los premios de KMS LATAM Pass debes tener instalado como mínimo 2 meses el GPS deTracklinkOcto.</p>
                                                </div>
                                            </li>
                                            <li><a href="#">¿Cuánto tiempo se demoran en entregarme el premio?</a>
                                                <div>
                                                    <p>Los KMS se abonarán en un plazo máximo de 30 días hábiles de cumplido el trimestre de la vigencia de tu póliza.</p>
                                                </div>
                                            </li>
                                            <li><a href="#">¿Cuál es el proceso para entrega del bono anual?</a>
                                                <div>
                                                    <p>El bono (dinero Pacífico) se entregará durante el primer mes de la renovación de tu póliza vehicular. Se te enviará un correo con el monto y este podrá aplicarse en cualquier producto de Pacífico Grupo Asegurador o para la renovación de la misma póliza.</p>
                                                </div>
                                            </li>
                                            <li><a href="#">¿En qué productos puedo utilizar mi dinero Pacífico y cómo lo aplico?</a>
                                                <div>
                                                    <p>Puedes aplicarlo en cualquier producto de Pacífico Grupo Asegurador. La aplicación del bono solo podrá ser solicitada por el asegurado, no por un tercero.</p>
                                                    <p>Podrás solicitar la aplicación a través del call, plataforma o correo a servicio al cliente. Recuerda que puedes aplicarlo en productos tanto en soles como en dólares, según tipo de cambio del día de la aplicación y lo puedes fraccionar para varios productos, no genera un saldo, todo debe usarse en un solo momento. Este bono tiene una vigencia de 3 meses.</p>
                                                </div>
                                            </li>
                                            <li><a href="#">¿Mi póliza aplica?</a>
                                                <div>
                                                    <p>Aplican todas las pólizas individuales de uso particular asegurado persona natural que cuenten con un dispositivo GPS de TracklinkOctoinstalado, pólizas emitidas o renovadas desde el 06 de marzo del 2017, de vigencia mínima de 12 meses. Aplican vehículos livianos: Automóviles y camionetas de hasta 8 asientos de timón original.<p>
                                                    <p>No aplican camionetas pick up y vehículos de timón cambiado o no original  <a href="http://www.pacifico.com.pe/documents/28730/112869/Restricciones-autos/66ac005e-dd51-4325-8326-8883a43ad817" target=”_blank” class="enlace">&raquo; Ver vehículos excluidos.</a></p>
                                                </div>
                                            </li>
                                            <li><a href="#">¿Cómo sé que estoy en la promoción?</a>
                                                <div>
                                                    <p>Si cumples con las indicaciones de la pregunta anterior, estas en esta promoción.</p>
                                                </div>
                                            </li>
                                            <li><a href="#">¿Mi información es privada?</a>
                                                <div>
                                                    <p>Si, tu información es privada. Lo que recopila el GPS Smart solo tiene la finalidad de poder otorgarte beneficios por ser cliente de Pacífico Seguros, y que tengas un estilo de conducción prudente y responsable o que lo mejores.</p>
                                                    <p>Pacífico Seguros no tendrá ningún acceso a tus recorridos.</p>
                                                </div>
                                            </li>
                                            <li><a href="#">¿Puedo participar de los premios con cualquier GPS?</a>
                                                <div>
                                                    <p>No, un GPS normal solo permite la localización y recuperación de auto en caso de robo.</p>
                                                    <p>Para acceder a los beneficios debes adquirir el servicio de GPS Smart de Tracklink Octo que incluye, además del GPS, una sofisticada tecnología que evalúa tu estilo de manejo de forma automatizada y te asigna una nota, y el sistema de detección automática de choque graves eCall.</p>
                                                </div>
                                            </li>
                                            <li class="double"><a href="#">¿Qué hago si ya tengo un GPS con otro proveedor desde el año pasado (caso de asegurado que renueva la póliza por el segundo o tercer año)?</a>
                                                <div>
                                                    <p>Debes de contar con el GPS Smart y no solo con un GPS tradicional. Lo que puedes hacer es adquirir el GPS Smart, que incluye además del servicio GPS, evalúa de forma completamente automatizada tu estilo de manejo y cuenta con el sistema eCallde detección automática de choques. Este GPS Smart te permite acceder a los beneficios de esta póliza.</p>
                                                </div>
                                            </li>
                                            <li><a href="#">¿Dónde se instala el GPS Smart?</a>
                                                <div>
                                                    <p>El GPS Smart se instala en el interior de tu auto y queda totalmente oculto.</p>
                                                    <p>La instalación la hace el proveedor Tracklink Octo.</p>
                                                    <p>No genera ningún problema de incompatibilidad o interferencias con el resto de sistemas del coche o teléfonos móviles.</p>
                                                </div>
                                            </li>
                                            <li><a href="#">¿Quién puede consultar mis recorridos?</a>
                                                <div>
                                                    <p>Solo tú podrás consultar tus recorridos, Pacífico Seguros no tendrá acceso alguno a información sobre los lugares donde te desplaces.</p>
                                                </div>
                                            </li>
                                            <li><a href="#">¿El servicio eCall funciona siempre?</a>
                                                <div>
                                                    <p>Sí, el servicio funciona las 24 horas del día, los 365 días del año a nivel nacional. El funcionamiento del servicio eCall está sujeto a la existencia de cobertura GSM/GPS en el lugar del accidente. El ámbito de cobertura del servicio es a nivel nacional.</p>
                                                </div>
                                            </li>
                                        </ol>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </section>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="cols">
                    <div class="left">
                        <a href="http://www.pacifico.com.pe/documents/28730/112869/Restricciones-autos/66ac005e-dd51-4325-8326-8883a43ad817" target="_blank" onclick="ga('send','event','Telematica','footer','Vehículos exluidos);">
                            <span class="img"><img src="img/footer1.png" alt=""></span>
                            <span class="text">VEHÍCULOS EXCLUIDOS</span>
                        </a>
                    </div>
                    <div class="right">
                        <a href="http://www.pacifico.com.pe/vive-pacifico/article/-/blogs/terminos-y-condiciones-de-la-campana-seguro-vehicular-con-gps-smart" target="_blank" onclick="ga('send','event','Telematica','footer','Términos y Condiciones');">
                            <span class="img"><img src="img/footer2.png" alt=""></span>
                            <span class="text">TÉRMINOS Y CONDICIONES</span>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

        </div>
    </div>
    <div class="contenido-mobile">
        <div class="bg">

            <div class="home inicio" id="inicio">
                <div class="content">
                    <img src="img/mobile/home1.png" alt="">
                    <div class="bottom">
                        <ul>
                            <li class="bottom1">
                                <div class="left"><img src="img/icon1.png" alt=""></div>
                                <div class="right">
                                    <span class="line1">Pídelo<br>por teléfono al</span>
                                    <span class="line2"><a href="tel:015135000">01 513-5000</a></span>
                                </div>
                            </li>
                            <li class="bottom2">
                                <div class="left"><img src="img/icon2.png" alt=""></div>
                                <div class="right">
                                    <span class="line1">Con tu</span>
                                    <span class="line2">corredor</span>
                                    <span class="line1">de seguros.</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="como-funciona" id="como-funciona">
                    <div class="desc">
                        <p>Es el Seguro Vehicular que protege tu vehículo frente a robos y accidentes, además de resguardar a tu familia, terceros involucrados en un accidente vehicular, y a ti.</p>
                        <p>Además con el <strong>GPS Smart</strong> no solo podrás localizar tu auto en caso de robo, sino que brinda asistencia vial proactiva y evalúa tu estilo de manejo para que así puedas mejorarlo progresivamente y ganar premios.</p>
                        <p>Por eso <strong>¡Maneja bien y gana!</strong></p>
                    </div>

                    <div class="video-player">
                        <h3 class="caption">Así funciona el GPS Smart.</h3>
                        <div class="player">
                            <div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/vR96VdAmrZg" style="position:absolute;width:100%;height:100%;left:0" width="485" height="283" frameborder="0" allowfullscreen></iframe></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="gps-smart" id="gps-smart">
                    <div class="led">
                        <img src="img/mobile/led1.png">
                        <p>Al contratar tu seguro deberás comprar un <strong>GPS Smart</strong> en <strong>TracklinkOcto</strong><br>llamando a (01) 6307575, ellos instalarán este dispositivo en tu carro.</p>
                    </div>

                    <div class="beneficios">
                        <div class="block1">
                            <h3>¿Qué beneficios tiene el GPS Smart?</h3>
                        </div>
                        <div class="cols owl-carousel owl-theme">
                            <div class="item left">
                                <img src="img/ben2.png" alt="">
                                <h3>GPS</h3>
                                <p>Nos permitirá localizar y<br>recuperar tu vehículo en<br>caso de robo en todo el<br>territorio nacional.</p>
                            </div>
                            <div class="item center">
                                <img src="img/ben3.png" alt="">
                                <h3>eCall</h3>

                                <p>Ante un choque grave se envía una alerta automática a la central de emergencia de <strong>GPS Smart</strong> para comunicarnos contigo y enviarte la asistencia necesaria.</p>
                            </div>
                            <div class="item right">
                                <img src="img/ben1.png" alt="">
                                <h3>Premios</h3>
                                <p>El <strong>GPS Smart</strong> te pone una nota<br>en base a 3 variables:</p>
                                <ul>
                                    <li>Aceleraciones bruscas</li>
                                    <li>Curvas bruscas</li>
                                    <li>Frenadas fuertes</li>
                                </ul>
                                <p>Esta nota te puede hacer ganar hasta<br>US$200 en productos Pacífico y miles<br>de KMS. LATAM Pass.</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="bgrepeat">

                    <div class="como-obtengo-mi-nota">
                        <img src="img/mobile/led2.png">
                        <div class="cols">
                            <div class="left">
                                <span>El <strong>GPS Smart</strong> califica tu estilo de manejo con una nota del 0 al 10. Todos tus viajes tendrán una calificación, midiendo 3 variables:</span>
                                <div class="col">
                                    <img src="img/que_es1.png" alt="" class="img">
                                    <ul>
                                        <li>Aceleraciones bruscas</li>
                                        <li>Curvas bruscas</li>
                                        <li>Frenadas fuertes</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="right">
                                <span>Cada viaje te dará una nota, estas se promediarán semanalmente y cada 3 meses, según tu promedio, serás premiado.</span>

                                <span class="bot">¡Mientras mejor manejes,<br>mejor nota tendrás!</span>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="donde-veo-mi-nota" id="donde-veo-mi-nota">

                        <div class="led3">
                            <img src="img/mobile/led3.png">
                            <div class="cols">
                                <div class="left2">
                                        <span class="line1">Descarga nuestra <strong>App Pacífico GPS Smart</strong><br>
                                        en tu celular y regístrate con el usuario<br>
                                        y contraseña que te dará <strong>TracklinkOcto</strong>, así<br>tendrás el control de tu nota y podrás<br>revisarla cuando quieras.</span>
                                </div>
                                <div class="center2">
                                    <img src="img/mobile/bgapp.png" alt="">
                                </div>
                                <span class="line2">Recuerda que cada viaje<br>se promedia con el anterior,<br>mientras mejoras tu<br>estilo de manejo,<br>mejoras tu nota.</span>
                                <div class="right2">
                                    <img src="img/screens_app.png" alt="">
                                    <span class="izq"><a href="https://goo.gl/DIR9Q1" target="_blank" oncick="ga('send','event','Telmatica','Menu', 'link-app-store' );"><img src="img/appstore.png" alt=""></a></span>
                                    <span class="der"><a href="https://goo.gl/sXtXhc" target="_blank" oncick="ga('send','event','Telmatica','Menu', 'link-play-store' );"><img src="img/googleplay.png" alt=""></a></span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>


                    <div id="cuales-son-los-premios" class="cuales-son-los-premios">

                        <div class="led4">
                            <img src="img/mobile/led4.png">
                            <div class="cols">
                                <div class="left">
                                    <span class="img"><img src="img/mobile/ganar1.png" alt=""></span>
                                    <span class="line1">¡Gran premio anual!</span>
                                    <span>Al finalizar el año de vigencia de tu seguro<br>de autos puedes ganar:</span>
                                    <span class="table">
                                            <span class="row">
                                                <span class="izq1">Con una nota de:</span>
                                                <span class="der1">Ganas:</span>
                                            </span>
                                            <span class="row">
                                                <span class="izq2">
                                                    <span class="line">8</span>
                                                    <span class="line">9</span>
                                                    <span class="line">10</span>
                                                </span>
                                                <span class="der2">
                                                    <span class="line">US$50</span>
                                                    <span class="line">US$100</span>
                                                    <span class="line">US$200</span>
                                                </span>
                                            </span>
                                            <span class="clearfix"></span>
                                        </span>
                                    <span class="legend">El bono se podrá usar en productos Pacífico Seguros o para la<br>renovación anual de tu póliza de autos.</span>
                                </div>
                                <div class="right">
                                    <span class="img"><img src="img/mobile/ganar2.png" alt=""></span>
                                    <span class="line1">Premios Trimestrales</span>
                                    <span>Cada trimestre desde la activación<br>de tu seguro de autos, puedes ganar:</span>
                                    <span class="table">
                                            <span class="row">
                                                <span class="izq1">Con una nota de:</span>
                                                <span class="der1">Ganas:</span>
                                            </span>
                                            <span class="row">
                                                <span class="izq2">
                                                    <span class="line">8</span>
                                                    <span class="line">9</span>
                                                    <span class="line">10</span>
                                                </span>
                                                <span class="der2">
                                                    <span class="line">1,000 KM LATAM Pass</span>
                                                    <span class="line">2,000 KMS LATAM Pass</span>
                                                    <span class="line">3,000 KMS LATAM Pass</span>
                                                </span>
                                            </span>
                                            <span class="clearfix"></span>
                                        </span>
                                    <span class="legend">¡Los KMS son acumulativos y puedes llegar a ganar hasta <strong>12,000 KMS LATAMPASS</strong> durante el año de vigencia de tu póliza! Y serán depositados en tu cuenta de LATAM Pass.</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                    <div class="clearfix"></div>


                    <div id="preguntas-frecuentes" class="preguntas-frecuentes">
                        <div class="led5">
                            <img src="img/mobile/led5.png">
                            <div class="cols">
                                <ol>
                                    <li><a href="#">¿Cómo calculan mi nota?</a>
                                        <div>
                                            <p>La nota es calculada de forma completamente automatizada y sin intervención humana por OctoTelematics, empresa europea que cuenta con la base de datos más grande del mundo de estilos de conducción, la cual asigna notas de estilos de conducción desde hace 14 años en 39 países. Un motor de inteligencia artificial con20 algoritmos independientes, procesa las aceleraciones bruscas, frenadas bruscas y curvas bruscas, cada una con múltiples niveles de intensidad. Todo esto es recopilado por el GPS Smart de TracklinkOcto que se instala en tu auto,  y asigna la nota cada semana.</p>
                                            <p>Las notas semanales determinan la nota mensual, y las notas mensuales determinan la nota global, la cual aparece en la pantalla principal “MI NOTA” de la App que se puede descargar de App Store (iOS), Google Play (Android) o de la página web de Pacífico Seguroswww.pacifico.com.pe</p>
                                            <p>Es importante resaltar que el GPS Smart de TracklinkOcto no recopila ningún tipo de infracción.</p>

                                            <p>NOTA: Pacífico no tiene injerencia alguna en la asignación de la nota. </p>
                                        </div>
                                    </li>
                                    <li><a href="#">¿Cómo se calcula mi nota trimestral?</a>
                                        <div>
                                            <p>La nota trimestral es la nota global que tendrás a los tres meses desde el inicio de vigencia de tu póliza. Después, la nota trimestral será a los 6, 9 y 12 meses desde el inicio de vigencia de tu póliza.</p>
                                        </div>
                                    </li>
                                    <li><a href="#">¿Por qué tengo nota desaprobada?</a>
                                        <div>
                                            <p>No estás desaprobado, nadie está desaprobado. Para acceder a los beneficios de kilómetros LATAM Pass y dólares en productos Pacífico debes llegar a una nota mínima de 8, esto no quiere decir que las notas menores sean desaprobadas.</p>
                                            <p>Recuerda que se trata de una evaluación en forma totalmente automatizada de tu estilo de manejo, basado en aceleraciones bruscas, curvas buscas y frenadas bruscas, por ello si mejoras tu estilo de manejo mejorarás tu nota.</p>
                                            <p>NOTA: Pacífico no tiene injerencia alguna en la asignación de la nota.</p>
                                        </div>
                                    </li>
                                    <li><a href="#">¿Quién calcula mi nota?</a>
                                        <div>
                                            <p>La nota es calculada de forma completamente automatizada y sin intervención humana por OctoTelematics, empresa europea que cuenta con la base de datos más grande del mundo de estilos de conducción, la cual asigna notas de estilos de conducción desde hace 14 años en 39 países.</p>
                                            <p>Cuanto mayor es el porcentaje de kilómetros que usted maneja más tranquilo y sereno, más alta será su nota. Esto vale para la semana, mes, trimestre y año. </p>
                                            <p>NOTA: Pacífico no tiene injerencia alguna en la asignación de la nota.</p>
                                        </div>
                                    </li>
                                    <li><a href="#">¿Cómo se calcula el promedio de mi nota?</a>
                                        <div>
                                            <p>Cada viaje que realices es evaluado por el motor de inteligencia artificial de la empresa OctoTelematics. La nota asignada, por cada viaje, se promedia con el número de kilómetros.</p>
                                            <p>Ejemplo: Si en la semana haces unos viajes cortos de forma un poco agresiva y unos viajes más largos con mayor prudencia, la nota semanal tendrá más en cuenta los viajes largos y prudentes, que los cortos y menos prudentes.</p>
                                            <p>Tú haces los kilómetros que deseas y cuanto mayor es el porcentaje total de kilómetros, en los que manejas prudentemente, más alta será tu nota. Este promedio se desarrollará en la semana, mes, trimestre y año. </p>
                                        </div>
                                    </li>
                                    <li><a href="#">¿Dónde puedo ver qué hice mal para obtener una mejor nota?</a>
                                        <div>
                                            <p>En la App Pacífico GPS SMART, lacual  se puede descargar de App Store (iOS), Google Play (Android) o de la página web www.pacifico.com.pe</p>
                                            <p>En esta aplicación podrás ver todos los recorridos de tu auto. Solo tienes que entrar a ver el detalle “Recorridos”.</p>
                                            <p>Podrás ver la cantidad e intensidad de aceleraciones bruscas, curvas bruscas y frenadas bruscas que hayas generado en cada recorrido para poder mejorar tu nota.</p>
                                        </div>
                                    </li>
                                    <li><a href="#">¿Qué y cómo gano?</a>
                                        <div>
                                            <p>Se medirá la nota de tu estilo de manejo en diferentes momentos y se asignará los premios de la siguiente manera:</p>

                                            <p>Durante la vigencia de la póliza.<p>
                                            <p>Hasta 12,000 Kilómetros LATAM Pass entregados cada 3 meses. (Hasta 3,000 kilómetros LATAM Pass cada 3 meses).</p>

                                            <p>Cada 3 meses desde el inicio de vigencia de la póliza se medirá la nota de tu estilo de manejo. Siempre y cuando el asegurado y el auto hayan tenido un mínimo de 2 meses con el servicio de GPS activo.</p>
                                            <span class="table">
                                                        <span class="row">
                                                            <span class="izq1">Con una nota de:</span>
                                                            <span class="der1">Ganas:</span>
                                                        </span>
                                                        <span class="row">
                                                            <span class="izq2">
                                                                <span class="line">8</span>
                                                                <span class="line">9</span>
                                                                <span class="line">10</span>
                                                            </span>
                                                            <span class="der2">
                                                                <span class="line">1,000 KMS LATAM Pass</span>
                                                                <span class="line">2,000 KMS LATAM Pass</span>
                                                                <span class="line">3,000 KMS LATAM Pass</span>
                                                            </span>
                                                        </span>
                                                        <span class="clearfix"></span>
                                                    </span>
                                            <p>Hasta 200 dólares en productos Pacífico Seguros o para la renovación de tu seguro.
                                                15 días (calendario) antes de iniciar el último mes de tu póliza se tomará la nota promediada que tienes, si esta es 8,9 o 10 podrás ganar el bono Pacífico.</p>
                                            <p>Siempre y cuando tú y tu auto hayan tenido un mínimo de 10 meses con el servicio de GPS activo y no hayan tenido <strong>ninguna siniestralidad</strong> durante el periodo de vigencia de la póliza.</p>
                                            <span class="table">
                                                        <span class="row">
                                                            <span class="izq1">Con una nota de:</span>
                                                            <span class="der1">Ganas:</span>
                                                        </span>
                                                        <span class="row">
                                                            <span class="izq2">
                                                                <span class="line">8</span>
                                                                <span class="line">9</span>
                                                                <span class="line">10</span>
                                                            </span>
                                                            <span class="der2">
                                                                <span class="line">US$50</span>
                                                                <span class="line">US$100</span>
                                                                <span class="line">US$200</span>
                                                            </span>
                                                        </span>
                                                        <span class="clearfix"></span>
                                                    </span>
                                            <ul>
                                                <li>Pacífico Seguros tendrá hasta 30 días hábiles para entregar los Kilómetros LATAM Pass y los dólares Pacífico desde las fechas de medición de la nota.</li>
                                                <li>Para recibir los premios es necesario que la póliza de auto esté vigente.</li>
                                                <li>Deberás indicar obligatoriamente tu correo electrónico al momento de solicitar la póliza, para hacer efectiva la entrega de los premios.</li>
                                                <li>Para cumplir con los tiempos de entrega de los Kilómetros LATAM Pass deberás registrarse como socio LATAM.</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="#">¿Cómo descargo la aplicación?</a>
                                        <div>
                                            <p>Puedes descargar la App “PACIFICO GPS Smart”, directamente desde App Store (iOS) o Google play (Android) o en el link en la página web de Pacífico: www.pacifico.com.pe </p>
                                        </div>
                                    </li>
                                    <li><a href="#">¿Quién me da el usuario y clave para entra a la aplicación?</a>
                                        <div>
                                            <p>El usuario y clave te la brinda TracklinkOcto. La ejecutiva comercial de TracklinkOcto asignada, te enviará la información dentro de las 24 horas de realizada la instalación del GPS Smart en tu auto. </p>
                                        </div>
                                    </li>

                                    <li><a href="#">¿Qué significa aceleraciones bruscas, curvas bruscas y frenadas fuertes?</a>
                                        <div>
                                            <p>Cuando manejas debes acelerar, tomar curvas y frenar. El GPS Smart no recopila la data del manejo regular. Lo que recopila y procesa son sólo las aceleraciones bruscas, frenadas bruscas y curvas tomadas en forma brusca o agresiva, con 4 diferentes niveles de intensidad, definidos por una serie de sofisticados algoritmos matemáticos.</p>
                                            <p><strong>Ejemplos de maniobras bruscas</strong></p>
                                            <p>Son consideradas maniobras bruscas las que detectará el GPS SMART, que exceden los límites definidos como seguros o propios de un estilo de conducción tranquilo y sereno, con 4 diferentes niveles de intensidad. Estos parámetros están definidos por un modelo matemático-actuarial implementado en 39 países, con pesos diferentes dependiendo del país.</p>
                                            <p>Aceleración brusca: Es el incremento de velocidad en un corto tiempo. Ejemplo: si usted va a una velocidad constante de 20 Km/h y en pocos segundos incrementa a 50 Km/h, se le considera una aceleración brusca, de acuerdo con los parámetros del modelo matemático-actuarial.</p>
                                            <p>Frenada brusca: Es la disminución de velocidad en un corto tiempo. Ejemplo: si usted va a velocidad constante de 30 Km/h y por cualquier motivo frena improvisamente hasta detenerse en pocos segundos es considerado una frenada brusca, de acuerdo con los parámetros del modelo matemático-actuarial.</p>
                                            <p>Curvas brusca: una curva brusca se da cuando es tomada con cierta agresividad, de acuerdo con los parámetros del modelo matemático-actuarial. También se considera curva brusca al cambio de carril repentino, el dispositivo GPS SMART detecta ese movimiento.</p>
                                            <p>En la conducción regular las maniobras bruscas pueden ocurrir. Por ejemplo, puede ser necesario frenar bruscamente para evitar un peatón, o acelerar bruscamente para evitar un accidente, pero cuando superan un determinado número de eventos bruscos cada 100 kilómetros ya no son una excepción, sino más bien una constante. Esto podría significar un estilo de conducción agresivo que debemos buscar mejorar para no generar ni vernos involucrados en accidentes de tránsito. </p>

                                        </div>
                                    </li>
                                    <li><a href="#">¿Qué es el eCall?</a>
                                        <div>
                                            <p>Es un Sistema europeo de detección automática de choques, operado por TracklinkOcto, que tiene como objetivo salvar vidas en caso de accidentes vehiculares, haciendo llegar ayuda médica y asistencia técnica en el menor tiempo posible.</p>
                                            <p>Este sistema ha sido probado a lo largo de 10 años por la Unión Europea, y está presente en Estados Unidos, Canadá, África y Australia y ahora está en Perú.</p>
                                        </div>
                                    </li>
                                    <li><a href="#">¿Cómo funciona el eCall?</a>
                                        <div>
                                            <p>Este servicio, operado por TracklinkOcto, en caso de un accidente automovilístico, el GPS Smart envía una alerta automática (en un promedio de 45 segundos a través del dispositivo instalado en tu auto, y siempre que haya cobertura de señal telefónica) a la Central de Emergencias de TracklinkOcto. Se recibirá la localización exacta y la gravedad del accidente por la intensidad del impacto.</p>
                                            <p>Automáticamente nos comunicaremos contigo para saber cómo te encuentras y hacerte llegar  la asistencia necesaria. En caso no logremos ponernos en contacto contigo, enviaremos al lugar donde te encuentras asistencia para ayudarte en el menor tiempo posible.</p>
                                        </div>
                                    </li>
                                    <li><a href="#">¿Qué es el GPS Smart?</a>
                                        <div>
                                            <p>El GPS Smart es un dispositivo que se instala en tu auto, como un GPS estándar, que además de ser el tradicional servicio GPS para la localización de vehículo en caso de robo, cuenta con una sofisticada tecnología que recopila y procesa aceleraciones bruscas, frenadas bruscas y curvas bruscas, con 4 diferentes niveles de intensidad cada una, para que el sistema pueda asignarle una nota a tu estilo de manejo.</p>
                                            <p>El GPS Smart también cuenta con el servicio e-Call sistema de detección automática de choques graves, para hacer llegar ayuda médica y asistencia especializada en el menor tiempo posible.</p>
                                            <p>Es importante resaltar que el GPS Smart de TracklinkOcto no recopila ningún tipo de infracción.</p>
                                        </div>
                                    </li>
                                    <li><a href="#">¿Cuánto cuesta el GPS Smart?</a>
                                        <div>
                                            <p>El costo del GPS Smart es como el de un GPS tradicional, pero con muchos beneficios adicionales.  Puedes consultar a TracklinkOcto al teléfono (01) 630-7575.</p>
                                        </div>
                                    </li>
                                    <li><a href="#">¿Dónde puede solicitar que instalen el GPS Smart?</a>
                                        <div>
                                            <p>TTendrás que solicitarlo directamente a TracklinkOcto al teléfono (01) 630-7575 o escribe al correo informes@tracklink.pe.</p>
                                        </div>
                                    </li>
                                    <li><a href="#">¿Quién es TracklinkOcto?</a>
                                        <div>
                                            <p>TracklinkOcto es una empresa multinacional con base en Italia, presente en 39 países. Cuenta con la base de datos de estilos de conducción vehicular y la plataforma de internet de las cosas más grande del mundo, lo que permite calcular y certificar las notas de estilos de conducción vehicular de millones de vehículos de forma completamente automatizada. Usando un software de inteligencia artificial y sofisticados modelos matemático - actuariales, se puede obtener las notas de los estilos de conducción. </p>
                                            <p>Además, ofrece el servicio europeo e-Call de Detección Automática de Choques graves, que tiene como objetivo salvar vidas en las vías peruanas en caso de accidentes vehiculares, haciendo llegar la ayuda médica especializada en el menor tiempo posible.</p>
                                            <p>Incluye en todos los servicios el GPS con recuperación de vehículo en caso de robo.</p>
                                        </div>
                                    </li>
                                    <li><a href="#">¿Cuál es el proceso para la entrega de los KMS?</a>
                                        <div>
                                            <p>Cada 3, 6, 9 y 12 meses de la vigencia de tu póliza se enviará un correo comunicando la calificación obtenida, para aplicar a los premios de KMS LATAM Pass debes tener instalado como mínimo 2 meses el GPS deTracklinkOcto.</p>
                                        </div>
                                    </li>
                                    <li><a href="#">¿Cuánto tiempo se demoran en entregarme el premio?</a>
                                        <div>
                                            <p>Los KMS se abonarán en un plazo máximo de 30 días hábiles de cumplido el trimestre de la vigencia de tu póliza.</p>
                                        </div>
                                    </li>
                                    <li><a href="#">¿Cuál es el proceso para entrega del bono anual?</a>
                                        <div>
                                            <p>El bono (dinero Pacífico) se entregará durante el primer mes de la renovación de tu póliza vehicular. Se te enviará un correo con el monto y este podrá aplicarse en cualquier producto de Pacífico Grupo Asegurador o para la renovación de la misma póliza.</p>
                                        </div>
                                    </li>
                                    <li><a href="#">¿En qué productos puedo utilizar mi dinero Pacífico y cómo lo aplico?</a>
                                        <div>
                                            <p>Puedes aplicarlo en cualquier producto de Pacífico Grupo Asegurador. La aplicación del bono solo podrá ser solicitada por el asegurado, no por un tercero.</p>
                                            <p>Podrás solicitar la aplicación a través del call, plataforma o correo a servicio al cliente. Recuerda que puedes aplicarlo en productos tanto en soles como en dólares, según tipo de cambio del día de la aplicación y lo puedes fraccionar para varios productos, no genera un saldo, todo debe usarse en un solo momento. Este bono tiene una vigencia de 3 meses.</p>
                                        </div>
                                    </li>
                                    <li><a href="#">¿Mi póliza aplica?</a>
                                        <div>
                                            <p>Aplican todas las pólizas individuales de uso particular asegurado persona natural que cuenten con un dispositivo GPS de TracklinkOctoinstalado, pólizas emitidas o renovadas desde el 06 de marzo del 2017, de vigencia mínima de 12 meses. Aplican vehículos livianos: Automóviles y camionetas de hasta 8 asientos de timón original.<p>
                                            <p>No aplican camionetas pick up y vehículos de timón cambiado o no original <a href="http://www.pacifico.com.pe/documents/28730/112869/Restricciones-autos/66ac005e-dd51-4325-8326-8883a43ad817" target=”_blank” class="enlace">Ver vehículos excluidos.</a></p>
                                        </div>
                                    </li>
                                    <li><a href="#">¿Cómo sé que estoy en la promoción?</a>
                                        <div>
                                            <p>Si cumples con las indicaciones de la pregunta anterior, estas en esta promoción.</p>
                                        </div>
                                    </li>
                                    <li><a href="#">¿Mi información es privada?</a>
                                        <div>
                                            <p>Si, tu información es privada. Lo que recopila el GPS Smart solo tiene la finalidad de poder otorgarte beneficios por ser cliente de Pacífico Seguros, y que tengas un estilo de conducción prudente y responsable o que lo mejores.</p>
                                            <p>Pacífico Seguros no tendrá ningún acceso a tus recorridos.</p>
                                        </div>
                                    </li>
                                    <li><a href="#">¿Puedo participar de los premios con cualquier GPS?</a>
                                        <div>
                                            <p>No, un GPS normal solo permite la localización y recuperación de auto en caso de robo.</p>
                                            <p>Para acceder a los beneficios debes adquirir el servicio de GPS Smart de Tracklink Octo que incluye, además del GPS, una sofisticada tecnología que evalúa tu estilo de manejo de forma automatizada y te asigna una nota, y el sistema de detección automática de choque graves eCall.</p>
                                        </div>
                                    </li>
                                    <li class="double"><a href="#">¿Qué hago si ya tengo un GPS con otro proveedor desde el año pasado (caso de asegurado que renueva la póliza por el segundo o tercer año)?</a>
                                        <div>
                                            <p>Debes de contar con el GPS Smart y no solo con un GPS tradicional. Lo que puedes hacer es adquirir el GPS Smart, que incluye además del servicio GPS, evalúa de forma completamente automatizada tu estilo de manejo y cuenta con el sistema eCallde detección automática de choques. Este GPS Smart te permite acceder a los beneficios de esta póliza.</p>
                                        </div>
                                    </li>
                                    <li><a href="#">¿Dónde se instala el GPS Smart?</a>
                                        <div>
                                            <p>El GPS Smart se instala en el interior de tu auto y queda totalmente oculto.</p>
                                            <p>La instalación la hace el proveedor Tracklink Octo.</p>
                                            <p>No genera ningún problema de incompatibilidad o interferencias con el resto de sistemas del coche o teléfonos móviles.</p>
                                        </div>
                                    </li>
                                    <li><a href="#">¿Quién puede consultar mis recorridos?</a>
                                        <div>
                                            <p>Solo tú podrás consultar tus recorridos, Pacífico Seguros no tendrá acceso alguno a información sobre los lugares donde te desplaces.</p>
                                        </div>
                                    </li>
                                    <li><a href="#">¿El servicio eCall funciona siempre?</a>
                                        <div>
                                            <p>Sí, el servicio funciona las 24 horas del día, los 365 días del año a nivel nacional. El funcionamiento del servicio eCall está sujeto a la existencia de cobertura GSM/GPS en el lugar del accidente. El ámbito de cobertura del servicio es a nivel nacional.</p>
                                        </div>
                                    </li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>

                </div>

            </div>
        </div>
        <div class="footer">
            <div class="cols">
                <div class="left">
                    <a href="http://www.pacifico.com.pe/documents/28730/112869/Restricciones-autos/66ac005e-dd51-4325-8326-8883a43ad817" target="_blank" onclick="ga('send','event','Telematica','footer','Vehículos exluidos);">
                        <span class="img"><img src="img/footer1.png" alt=""></span>
                    </a>
                </div>
                <div class="center">
                    <a href="http://www.pacifico.com.pe/vive-pacifico/article/-/blogs/terminos-y-condiciones-de-la-campana-seguro-vehicular-con-gps-smart" target="_blank" onclick="ga('send','event','Telematica','footer','Términos y Condiciones');">
                        <span class="img"><img src="img/footer2.png" alt=""></span>
                    </a>
                </div>
                <div class="right">
                    <a href="#" target="_blank" onclick="ga('send','event','Telematica','footer','Formulario');">
                        <span class="img"><img src="img/mobile/footer3.png" alt=""></span>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
</div>

<div id="cons-popup" class="mfp-hide mfp-with-anim">
    <h4>Cláusula de protección de datos</h4>
    <p>Usted acepta mantener actualizada su información, especialmente su nacionalidad, lugar de residencia, situación fiscal y composición accionaria de ser el caso; y nos autoriza a incorporarla en la base de datos de usuarios de responsabilidad de Pacífico, a darle tratamiento y a transferirla a las empresas del grupo económico Credicorp y socios comerciales nacionales listados en la página web de Pacífico, para que le ofrezcan productos y servicios. Pacífico conservará, usará y podrá transferir su información personal hasta diez años después de finalizada la relación contractual. Usted podrá acceder a su información, rectificarla, cancelarla u oponerse a su uso, dirigiéndose a Pacífico de forma presencial en cualquiera de sus oficinas a nivel nacional en el horario establecido para la atención al público, a través de la página web de Pacífico www.pacifico.com.pe o por teléfono.</p>
</div>
<div class="overlay-component">
    <div class="window">
        <div class="btn-close">
            <img src="img/close-modal.png" alt="">
        </div>
        <img src="img/img-modal.jpg" alt="">
    </div>
</div>

<div class="preloader"></div>

<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/TweenMax.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/owlcarousel/owl.carousel.min.js"></script>
<script src="js/jquery.alphanumeric.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js?id=1"></script>

<!-- Google Analytics Universal code --> <script>(function(m,l,g,i,k,n,a){m.GoogleAnalyticsObject=k;m[k]=m[k]||function(){(m[k].q=m[k].q||[]).push(arguments)},m[k].l=1*new Date();n=l.createElement(g),a=l.getElementsByTagName(g)[0];n.async=1;n.src=i;a.parentNode.insertBefore(n,a)})(window,document,"script","https://www.google-analytics.com/analytics.js","ga");ga("create","UA-5870251-5","auto",{allowLinker:true});ga("require","linker");ga("require","displayfeatures");ga("linker:autoLink",["pacificoseguros.com","site.pacificoseguros.com","web.pacificoseguros.com"]);ga("send","pageview");</script> <!-- End Google Analytics code -->

</body>
</html>
