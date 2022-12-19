var hash = CryptoJS.MD5("FD02SVAOAS");
  
  
  
  window.onload = function cript(){
    alert(hash);
  }
  
  
  
  // =============== Variável que (1) define o código do cliente e, por consequência, o nome do .geojson a ser buscado e =============>
  // =============== (2) puxa esse código já encriptado por MD5 na função presente no cabeçalho do arquivo .js =======================>
  var cliente = hash;
  // =============== POST hash to server.php and return the name of the client (to be done)


    
  // ==============================================================================================================================>
  // MAIN LEAFLET JAVASCRIPT CODE, GEOJSON AND ESRI TILELAYERS ====================================================================>
  // ==============================================================================================================================>
  // Aqui, defino, primeiramente, a parte básica do mapa, como as tilelayers.
  // Em sequência, defino as coordenadas iniciais, o zoom e também qual será o arquivo .geojson a ser "puxado".

  var url = cliente + '.geojson';
  var map = L.map('map').setView([-29.60114361, -54.74733389], 14);  -53.78912306, -29.75566278
  var mapLink = '<a href="http://www.esri.com/">Esri</a>';
  var wholink = 'i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community';


  L.tileLayer(
  'http://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
  attribution: '&copy; '+mapLink+', '+wholink,
  maxZoom: 17,
  }).addTo(map);


  var geojsonMarkerOptions = {
  'radius':6,
  'opacity':.5,
  'color':"red",
  'fillColor': "blue",
  'fillOpacity': 0.8
  };


  // ==============================================================================================================================>
  // PARTE QUE INTERESSA
  // aqui é onde:  
  // (1) nomeio as propriedades que o Leaflet irá pegar do .geojson 
  // (2) escrevo o link das parcelas utilizando a propriedade 'parcela_co' 
  function forEachFeature(feature, layer){
  var popupContent = "<strong>Nome da área</strong>: " + feature.properties.nome_area + "<br>" + 
  "<strong>Município</strong>: " + feature.properties.munic + "<br>" +
  "<strong>Área em Hectares</strong>: " + feature.properties.areaha + "<br>" +
  '<strong>Link para consulta no SIGEF</strong>: ' +
  '<a href="https://sigef.incra.gov.br/geo/parcela/detalhe/' + feature.properties.parcela_co + '"' + ">" + "Clique aqui" +  "</a>" + "<br>" +
  "<strong>Detentor(es)</strong>: " + feature.properties.BC5PROPRIE  + "<br>" +
  "<strong>TESTE HASH MD5</strong>: " + cliente + "<br>" 
  ;
  ;
  // ===============================================================================================================================>


  
  // Configuração do Popup
  if (feature.properties && feature.properties.popupContent) {
  popupContent += feature.properties.popupContent;
  }
  layer.bindPopup(popupContent);
  };


  //var bbTeam = L.geoJSON(null, {onEachFeature: forEachFeature, style: style});
  var bbTeam = L.geoJSON(null, {
  onEachFeature: forEachFeature, 
  pointToLayer: function (feature, latlng) {
  return L.circleMarker(latlng, geojsonMarkerOptions);
  }
  });

  
  // Get GeoJSON data and create features.
  $.getJSON(url, function(data) {
  bbTeam.addData(data);
  }); 
  bbTeam.addTo(map);

  //============= end of LEAFLET JAVASCRIPT CODE, GEOJSON AND ESRI TILELAYERS =================>;


  




    