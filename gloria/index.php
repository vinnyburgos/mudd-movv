<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5WXM4HCN');</script>
<!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glória</title>
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
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5WXM4HCN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <section class="webdoor">
        <div class="center">
            <div class="right">
                <div class="wrapForm" id="formulario">
                    <p class="tituloForm">Cadastre-se para<br> saber mais!</p>
                    <form id="formularioTopo" action="envia.php" method="post">
                        <input type="text" name="nome" placeholder="Nome completo">
                        <input type="email" name="email" placeholder="E-mail">
                        <input id="telefone" type="text" name="telefone" placeholder="DDD + Número">
                        <input type="hidden" id="interesse" name="interesse" value="Glória">
                        <p class="avisoDados">Seus dados estão seguros com a gente</p>
                        <input id="enviaForm" type="submit" value="Enviar">
                    </form>
                </div>
            </div>
            <div class="left">
                <h1 class="titulo"><img src="images/141.png" alt=""></h1>
                <h3 class="subtitulo">More ou invista no projeto<br>mais icônico da história do Rio de Janeiro.</h3>
                <!-- <p class="asterisco">*financiamento direto com a taxa de 5,9%.</p> -->
                <img class="logos" src="images/logosTopo.png" alt="">
            </div>
        </div>
    </section>

    <div class="clear"></div>

    <section class="subBanner">
        <div class="center">
            <div class="wrapPoints">
                <div class="point">
                    <div class="innerIntegral innerPoint">
                        <img src="images/tickTopo.png" alt="tick"><p>Apartamentos de até 4 suítes</p>
                    </div>
                </div>
                <div class="point">
                    <div class="innerIntegral innerPoint">
                        <img src="images/tickTopo.png" alt="tick"><p>Até 3 vagas na garagem</p>
                    </div>
                </div>
                <div class="point">
                    <div class="innerIntegral innerPoint">
                        <img src="images/tickTopo.png" alt="tick"><p>Lazer com experiência de 5 estrelas.</p>
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


                <h3>Sobre o Empreendimento</h3>

                <p class="content">Muito mais que um residencial. Um verdadeiro presente do Rio de Janeiro.<br><br>

Com uma vista privilegiada e lazer completo no rooftop, o Glória Residencial é a opção ideal para você e sua família com toda a exclusividade, sofisticação, conforto e bem-estar digno de um Hotel 5 estrelas.</p>

                <a href="#formulario"><div class="btn btnCta">Agende sua visita ao decorado!</div></a>
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