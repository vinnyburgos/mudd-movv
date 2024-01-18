<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zenture</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,600;0,700;1,100;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src='https://code.jquery.com/jquery-3.4.1.min.js' integrity='sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=' crossorigin='anonymous'></script>
    <script src="js/global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11387401505">
    </script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'AW-11387401505');
    </script>


</head>
<body>
    <section class="webdoor">
        <div class="center">
            <div class="left">
                <h1 class="titulo"><img src="images/141.png" alt=""></h1>
                <h3 class="subtitulo">UM ESTILO DE VIDA LUXUOSO NO ZENTURE BOTAFOGO.</b></h3>
                <!-- <p class="asterisco">*financiamento direto com a taxa de 5,9%.</p> -->
                <img class="logos" src="images/logosTopo.png" alt="">
            </div>
            <div class="right">
                <div class="wrapForm" id="formulario">
                    <p class="tituloForm">Cadastre-se para<br> saber mais!</p>
                    <form id="formularioTopo" action="envia.php" method="post">
                        <input type="text" name="nome" placeholder="Nome completo">
                        <input type="email" name="email" placeholder="E-mail">
                        <input id="telefone" type="text" name="telefone" placeholder="DDD + Número">
                        <input type="hidden" id="interesse" name="interesse" value="Zenture">
                        <p class="avisoDados">Seus dados estão seguros com a gente</p>
                        <input id="enviaForm" type="submit" value="Enviar">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div class="clear"></div>

    <section class="subBanner">
        <div class="center">
            <div class="wrapPoints">
                <div class="point">
                    <div class="innerIntegral innerPoint">
                        <img src="images/tickTopo.png" alt="tick"><p>Somente 27 unidades</p>
                    </div>
                </div>
                <div class="point">
                    <div class="innerIntegral innerPoint">
                        <img src="images/tickTopo.png" alt="tick"><p>3 e 4 quartos com suites</p>
                    </div>
                </div>
                <div class="point">
                    <div class="innerIntegral innerPoint">
                        <img src="images/tickTopo.png" alt="tick"><p>Apartamentos Tipo e Coberturas Duplex</p>
                    </div>
                </div>
                <div class="point">
                    <div class="innerIntegral innerPoint">
                        <img src="images/tickTopo.png" alt="tick"><p>Lazer completo</p>
                    </div>
                </div>
                <div class="point">
                    <div class="innerIntegral innerPoint">
                        <img src="images/tickTopo.png" alt="tick"><p>2 e 3 vagas de garagem</p>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <div class="clear"></div>

    <section class="mosaico">
        <div class="centerMosaico">
            <div class="left">

                <div class="mobile"><img style="width:100%;" src="images/mosaico.png" alt=""></div>


                <h3>Sobre o empreendimento</h3>

                <p class="content">Um estilo de vida no Zenture Botafogo, o lançamento mais recente em uma das regiões mais charmosas de Botafogo.<br><br>
                
                Com apartamentos de 125m2 à 416m2, 3 e 4 quartos, e comodidades como lazer completo e segurança avançada, este empreendimento é perfeito para famílias que buscam conforto e praticidade.<br><br>
            
                Conheça o Zenture e encante-se com a harmonia e modernidade em cada detalhe.</p>

                <a href="#formulario"><div class="btn btnCta">Agende sua visita</div></a>
            </div>
            <div class="right">
                <div class="wrapMosaico">
                    <div class="desktop"><img src="images/mosaico.png" alt=""></div>
                </div>
            </div>
        </div>
    </section>

    <?php include '../mudd-conteudo-comum.php'?>
    <?php include '../resposta-modal.php'; ?>

</body>
</html>