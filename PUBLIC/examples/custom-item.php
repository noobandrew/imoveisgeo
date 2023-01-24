<!DOCTYPE html> 
<head> 
<title></title> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">

    <!--CRYPTOJS link-->

    <script src="js/core.min.js"></script>    
    <script src="js/md5.js"></script>
	<script src="js/crypto-js.js"></script>
</head>


<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="crossorigin=""/>



<link rel="stylesheet" href="../src/leaflet-geojson-selector.css" />
<link rel="stylesheet" href="style.css" />
</head>

<body>
<h3><a href="../">◄ Topographia</a></h3>

<h4>Visualize os limites da sua propriedade</h4>

<div id="map" style="height:700px; width: 500px; position:relative; justify-content:center; outline:none; margin-left:auto; margin-right:auto; display:block"
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
<div class="leaflet-top leaflet-right"></div>
<div class="leaflet-bottom leaflet-left"></div>
<div class="leaflet-bottom leaflet-right">
<div class="leaflet-control-attribution leaflet-control">
<pre id="selection">&nbsp;</pre>

<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
crossorigin=""></script>
<script src="//unpkg.com/jquery@3.3.1/dist/jquery.js"></script>
<script src="../src/leaflet-geojson-selector.js"></script>
<script>


	
	var cliente = <?php echo json_encode($_POST['login']); ?>; //ECHO do que o usuário digitou na pagina de login
	var cliente = CryptoJS.MD5(cliente); // encripta antes de pesquisar na database 
	var url = cliente + '.geojson';










	var map = new L.Map('map', {
			layers: L.tileLayer('http://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}'),
			attributionControl: false,
			zoomControl: false
		});

	map.addControl(L.control.zoom({ position:'topright' }));

	$.getJSON(url, function(json) {

		var geoLayer = L.geoJson(json).addTo(map);
		
		var geoList = new L.Control.GeoJSONSelector(geoLayer, {
			zoomToLayer: true,
			listItemBuild: function(layer) {
				return L.Util.template('<small><b>{nome_area}</b><br>Status: {status} <br>Area: {areaha} </small>', layer.feature.properties);
			}
		}).addTo(map);

		geoList.on('selector:change', function(e) {

			var jsonObj = e.layers[0].feature.properties;
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

	function forEachFeature(feature, layer){
		popupContent = "<strong>Nome da área</strong>: " + feature.properties.nome_area + "<br>" + 
		"<strong>Município</strong>: " + feature.properties.munic + "<br>" +
		"<strong>Área em Hectares</strong>: " + feature.properties.areaha + "<br>" +
		'<strong>Link para consulta no SIGEF</strong>: ' +
		'<a href="https://sigef.incra.gov.br/geo/parcela/detalhe/' + feature.properties.parcela_co + '"' + ">" + "Clique aqui" +  "</a>" + "<br>" +
		"<strong>Detentor(es)</strong>: " + feature.properties.BC5PROPRIE
		
		
		// "<strong>TESTE HASH MD5</strong>: " + cliente + "<br>" 
		// =================================================================================================================================>
		
		
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

		prop = L.geoJSON(null, {
			onEachFeature: forEachFeature, 
			pointToLayer: function (feature, latlng) {
			return L.circleMarker(latlng, geojsonMarkerOptions);
			}
			});
			
			
			// Get GeoJSON data and create features, IMPORTANTE DEMAIS (JQUERY) =======================================================
			
			$.getJSON(url, function(data) {
			prop.addData(data);
			}); 
			prop.addTo(map);




</script>

	
</body>
</html>