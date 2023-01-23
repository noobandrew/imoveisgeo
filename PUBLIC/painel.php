<?php

echo "<script>document.cookie('key=value; SameSite=None; Secure');</script>";

?>



<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">

  <head>

    <!--=========== meta ============-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">


    <!--leaflet js and css links--> 
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
    integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="crossorigin=""/>

    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
    crossorigin=""></script>

    <script src="../src/leaflet-geojson-selector.js"></script>

    <link rel="stylesheet" href="../src/leaflet-geojson-selector.css" />



    <!--jquery js link-->

    <script src="js/jquery.min.js"></script>



    <!--CRYPTOJS link-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/core.min.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/md5.js"></script>
    


    <!--Title-->
    <title>TOPOGRAPHIA | Client Map Interface</title>

    <!--icons(favicons)-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <!--================ CSS ================-->
    <link href="assets/css/theme.css" rel="stylesheet" />


  <body>



    <!--page top =============-->
    <main class="main" id="top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-5 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
    <div class="container"><a class="navbar-brand" href="https://www.topographia.com.br/"><img src="assets/img/logo.svg" height="34" alt="logo" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
    <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-lg-center align-items-start">
    <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#aindanao"><strong>Avalie nosso App</strong></a></li>
    <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#aindanao"><strong>Informações</strong></a></li>
    <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="https://www.topographia.com.br/contato"><strong>Contato</strong></a></li>
    <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="https://www.topographia.com.br/politica-privacidade"><strong>Política de Privacidade</strong></a></li>
    <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg" style="border-radius:0.3rem;" aria-labelledby="navbarDropdown">
    </ul>
    </li>
    </ul>
    </div>
    </div>
    </nav>
  
    <!--padding =============-->
    <section style="padding-top: 2rem;">
    <div class="bg-holder" style="background-image:url(assets/img/hero/hero-bg.svg);">
    </div>
    <!--end of padding ======-->

    <!--end of page top =========================-->

    </section>


    <!-- main begin ===============-->
    <section class="pt-5" id="destination">
    <div>
    <div class="mb-7 text-center">
    <h5>Visualize os limites da sua propriedade</h5>
    Controle o zoom utilizando os botões no canto superior esquerdo do mapa.
    </div>
    </div>


    <!--LEAFLET HTML part=========================-->



    <div id="map" style="height:500px; width: 600px; position:relative; justify-content:center; outline:none; margin-left:auto; margin-right:auto; display:block"
    class="leaflet-container leaflet-touch leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom"
    tabindex="0">
    <div class="leaflet-pane leaflet-map-pane"
    style="transform: translate3d(40px, 8px, 0px);">
    <div class="leaflet-pane leaflet-tile-pane">
    <div class="leaflet-layer " 
    style="z-index: 1; opacity: 1;">
    <div class="leaflet-tile-container leaflet-zoom-animated" 
    style="z-index: 19; transform: translate3d(0px, 0px, 0px) scale(1);">
    </div>
    </div>
    </div>
    <div class="leaflet-pane leaflet-overlay-pane"></div>
    <div class="leaflet-pane leaflet-shadow-pane"></div>
    <div class="leaflet-pane leaflet-marker-pane"></div>
    <div class="leaflet-pane leaflet-tooltip-pane"></div>
    <div class="leaflet-pane leaflet-popup-pane"></div>
    <div class="leaflet-proxy leaflet-zoom-animated" 
    style="transform: translate3d(1.04801e+06px, 697371px, 0px) scale(4096);"></div>
    </div>
    <div class="leaflet-control-container">
    <div class="leaflet-top leaflet-left">
    <div class="leaflet-control-zoom leaflet-bar leaflet-control">
    <a class="leaflet-control-zoom-in" href="#" title="Zoom in" role="button" aria-label="Zoom in" aria-disabled="false"><span aria-hidden="true">+</span></a>
    <a class="leaflet-control-zoom-out" href="#" title="Zoom out" role="button" aria-label="Zoom out" aria-disabled="false"><span aria-hidden="true">−</span></a></div></div>
    <div class="leaflet-top leaflet-right"></div>
    <div class="leaflet-bottom leaflet-left"></div>
    <div class="leaflet-bottom leaflet-right">
    <div class="leaflet-control-attribution leaflet-control">


      <!--leaflet html close=========================-->
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <!-- main section close ============================-->





    <!-- rodape begin ============================-->
    <section class="pb-0 pb-lg-4">
    <!--============================================ HTML DO LEAFLET ============================================-->
    <div class="container">
    <div class="row">
    <div class="col-lg-3 col-md-7 col-12 mb-4 mb-md-6 mb-lg-0 order-0"> <img class="mb-4" src="assets/img/logo2.svg" width="150" />
    <p class="fs--1 text-secondary mb-0 fw-medium">Topographia, Serviços Topográficos e Planejamento Rural.</p>
    </div>
    <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-1 order-md-2">
    <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">Sobre nós</h4>
    <ul class="list-unstyled mb-0">
    <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="https://www.topographia.com.br/nossa-empresa">Empresa</a></li>
    <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="https://www.topographia.com.br/servicos">Serviços</a></li>
    <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="https://www.topographia.com.br/clientes">Clientes</a></li>
    <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="https://www.topographia.com.br/blog">Blog</a></li>
    </ul>
    </div>
    <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-2 order-md-3">
    <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">Fale Conosco</h4>
    <ul class="list-unstyled mb-0">
    <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="https://www.topographia.com.br/informacoes">Informações</a></li>
    <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="https://www.topographia.com.br/contato">Contato</a></li>
    <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="https://www.topographia.com.br/politica-privacidade">Política de Privacidade</a></li>
    </ul>
    </div>
    </div>
    </div><!-- end of .container -->
    </section>
    <!-- rodape close ====================================================================================================================-->


    <div class="py-5 text-center">
    <p class="direitos">Todos os Direitos Reservados <i><strong><a href="mailto:contato@topographia.com.br">contato@topographia.com.br</a></strong><br> © 2022<a href="mailto:andrewhammelcontato@gmail.com"> Andrew Hammel</a></i> </p>
    </div>
    </main>
    <!--================ end of main ================-->


    <!--================ javascripts ==================-->
    <script
    src="https://example.com/example-framework.js"
    crossorigin="anonymous"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="assets/js/theme.js"></script>



    <!--=============== MAIN LEAFLET SCRIPT ===============-->
    <script>



     var cliente = <?php echo json_encode($_POST['login']); ?>; //ECHO do que o usuário digitou na pagina de login
     var cliente = CryptoJS.MD5(cliente); // encripta antes de pesquisar na database 


// ==============================================================================================================================>
// MAIN LEAFLET JAVASCRIPT CODE, GEOJSON AND ESRI TILELAYERS ====================================================================>
// ==============================================================================================================================>
// Aqui, defino, primeiramente, a parte básica do mapa, como as tilelayers.
// Em sequência, defino as coordenadas iniciais, o zoom e também qual será o arquivo .geojson a ser "puxado".

 var url = cliente + '.geojson';


 var json = (function () {
    var json = null;
    $.ajax({
        'async': false,
        'global': false,
        'url': cliente + '.json',
        'dataType': "json",
        'success': function (data) {
            json = data;
        }
    });
    return json;
})(); 

 let cent = json[0].CENTROIDE;
 let zoom = json[2].ZOOM;

console.log(cent);
console.log(zoom);




// linhas para testar se deu certo (INATIVAR QUANDO ESTIVER RODANDO PRA VALER)==========>
//window.onload = function teste(){
 // alert(feature.geometry.coordinates);
 // }
// =====================================================================================>


// ====== Variável que atribui o token do usuario (já c/ hash) à variável cliente para buscar o .geojson correto. =======>

// =====> AQUI DEVO: <======
// 1 - ATRIBUIR LngLat do Polígono do GEOJSON em alguma variável;  [DONE]
// 2 - Inverter a ordem dos arrays nessa variável; [NOT DONE]
// 3 - Atribuir essa variável ao setView; [DONE]


// ============================================ ONDE O MAPA COMEÇA E O ZOOM inicial ============================================

 map = L.map('map').setView(cent, zoom); 
 mapLink = '<a href="http://www.esri.com/">Esri</a>';
 wholink = 'i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community';

// =============================================================================================================================



// Fonte dos tiles e definição do zoom máximo ===========================================> 
L.tileLayer(
'http://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
attribution: '&copy; '+mapLink+', '+wholink,
maxZoom: 17,
}).addTo(map);
//========================================================================================>

// ==============================================================================================================================>
// PARTE QUE INTERESSA
// aqui é onde:  
// (1) nomeio as propriedades que o Leaflet irá pegar do .geojson 
// (2) escrevo o link das parcelas utilizando a propriedade 'parcela_co' 
function forEachFeature(feature, layer){
popupContent = "<strong>Nome da área</strong>: " + feature.properties.nome_area + "<br>" + 
"<strong>Município</strong>: " + feature.properties.munic + "<br>" +
"<strong>Área em Hectares</strong>: " + feature.properties.areaha + "<br>" +
'<strong>Link para consulta no SIGEF</strong>: ' +
'<a href="https://sigef.incra.gov.br/geo/parcela/detalhe/' + feature.properties.parcela_co + '"' + ">" + "Clique aqui" +  "</a>" + "<br>" +
"<strong>Detentor(es)</strong>: " + feature.properties.BC5PROPRIE

// "<strong>TESTE HASH MD5</strong>: " + cliente + "<br>" 
// =================================================================================================================================>











//=====> DAR UM JEITO DE INVERTER O ARRAY "FEATURE.GEOMETRY.COORDINATES" AQUI, ANTES DE ATRIBUIR NA FUNÇÃO FITBOUNDS <======== 

// bloco de teste da manipulação de array

// ======================================








// função 
//;
//;
// ======================================



// Configuração do Popup
if (feature.properties && feature.properties.popupContent) {
popupContent += feature.properties.popupContent;
}
layer.bindPopup(popupContent);

};



// não lembro exatamente o que eu quis fazer com esse bloco, mas o app não roda sem ele // 

 prop = L.geoJSON(null, {
onEachFeature: forEachFeature, 
pointToLayer: function (feature, latlng) {
return L.circleMarker(latlng, geojsonMarkerOptions);
}
});


// Get GeoJSON data and create features, IMPORTANTE DEMAIS (JQUERY) =======================================================

//$.getJSON(url, function(data) {
//prop.addData(data);
//}); 
//prop.addTo(map);



$.getJSON(url, function(data) {


  var geoLayer = L.geoJson(data).addTo(map);
  
  var geoList = new L.Control.GeoJSONSelector(geoLayer, {
    zoomToLayer: true,
    listItemBuild: function(layer) {
      return L.Util.template('<small><b>{name}</b><br>Length: {length} <br>Area: {area} </small>', layer.feature.properties);
    }
  }).addTo(map);

  geoList.on('selector:change', function(e) {

    var jsonObj = $.parseJSON( JSON.stringify(e.layers[0].feature.properties) );
    var html = 'Selection:<br /><table border="1">';
    $.each(jsonObj, function(key, value){
        html += '<tr>';
        html += '<td>' + key.replace(":", " ") + '</td>';
        html += '<td>' + value + '</td>';
        html += '</tr>';
    });
    html += '</table>';

    $('.selection').html(html);
  });
  

  map.addControl(function() {
    var c = new L.Control({position:'bottomright'});
    c.onAdd = function(map) {
        return L.DomUtil.create('pre','selection');
      };
    return c;
  }());
  
});









// ================================================================================================================
//    $$$$$$$$\ $$\   $$\ $$$$$$$\  
//    $$  _____|$$$\  $$ |$$  __$$\ 
//    $$ |      $$$$\ $$ |$$ |  $$ |
//    $$$$$\    $$ $$\$$ |$$ |  $$ |
//    $$  __|   $$ \$$$$ |$$ |  $$ |
//    $$ |      $$ |\$$$ |$$ |  $$ |
//    $$$$$$$$\ $$ | \$$ |$$$$$$$  |
//    \________|\__|  \__|\_______/   
//                             .-----.
//                            (       )  
//                           /   .-.  \
//                          /   /   \  \
//                         / `  )   (   )
//                        / `   )   ).  \
//                      .'  _.   \_/  . |
//     .--.           .' _.' )`.        |
//    (    `---...._.'   `---.'_)    ..  \
//     \            `----....___    `. \  |
//      `.           _ ----- _   `._  )/  |
//        `.       /"  \   /"  \`.  `._   |
//          `.    ((-)` ) ((-)` ) `.   `._\
//            `-- '`---'   `---' )  `.    `-.
//               /                  ` \      `-.
//             .'                      `.       `.
//            /                     `  ` `.       `-.
//     .--.   \ ===._____.======. `    `   `. .___.--`     .''''.
//    ' .` `-. `.                )`. `   ` ` \          .' . '   )
//   (   .  ` `-.`.               ( .  ` `  .`\      .'  '    ' /
//    \  `. `    `-.               ) ` .   ` ` \  .'   ' .  '  /
//     \ ` `.  ` . \`.    .--.     |  ` ) `   .``/   '  // .  /
//      `.  ``. .   \ \   .-- `.  (  ` /_   ` . / ' .  '/   .'
//        `. ` \  `  \ \  '-.   `-'  .'  `-.  `   .  .'/  .'
//          \ `.`.  ` \ \    ) /`._.`       `.  ` .  .'  /
//           |  `.`. . \ \  (.'               `.   .'  .'
//        __/  .. \ \ ` ) \                     \.' .. \__
// .-._.-'     '"  ) .-'   `.                   (  '"     `-._.--.
//(_________.-====' / .' /\_)`--..__________..-- `====-. _________)
// ================================================================================================================    

</script>



  

  
  </body>

</html>