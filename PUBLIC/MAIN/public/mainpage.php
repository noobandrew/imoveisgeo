<!DOCTYPE html> 
<head> 
<title>| PAINEL |</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">


<!--CRYPTOJS link-->
<script src="js/core.min.js"></script>    
<script src="js/md5.js"></script>
<script src="js/sha3.js"></script>

<script src="js/crypto-js.js"></script>


<!-- ASPECT RATIO JS -->
<script src="js/ratio.js"></script>

<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">





<link rel="stylesheet" href="css/leaflet.css"/>



<link rel="stylesheet" href="src/leaflet-geojson-selector.css" />
<link rel="stylesheet" href="style.css" />
</head>

<body style="background-image: url('topo.jpeg');">
<div id="map" style="height:720px; position:relative; justify-content:center; outline:none; margin-left:10px; margin-right:10px; display:block"
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
<script src="src/leaflet-geojson-selector.js"></script>
<script>


	
var cliente = <?php echo json_encode($_POST['login']); ?>; //ECHO do que o usuário digitou na pagina de login




function _0x5bcd(_0x4d10d8, _0x1ea15d) {
    var _0x5bcdfa = _0x1ea1();
    return _0x5bcd = function (_0x54b3eb, _0x4cbb62) {
        _0x54b3eb = _0x54b3eb - 0x77;
        var _0x2c810e = _0x5bcdfa[_0x54b3eb];
        return _0x2c810e;
    }, _0x5bcd(_0x4d10d8, _0x1ea15d);
}
function _0x539f(_0x4d10d8, _0x1ea15d) {
    var _0x5bcdfa = _0x1ea1();
    return _0x539f = function (_0x54b3eb, _0x4cbb62) {
        _0x54b3eb = _0x54b3eb - 0x77;
        var _0x2c810e = _0x5bcdfa[_0x54b3eb];
        if (_0x539f['jEgRKu'] === undefined) {
            var _0x511390 = function (_0x537254) {
                var _0x441f43 = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789+/=';
                var _0x2b61f4 = '', _0x140ff7 = '';
                for (var _0x57b6ae = 0x0, _0x539f43, _0x288916, _0x2e2541 = 0x0; _0x288916 = _0x537254['charAt'](_0x2e2541++); ~_0x288916 && (_0x539f43 = _0x57b6ae % 0x4 ? _0x539f43 * 0x40 + _0x288916 : _0x288916, _0x57b6ae++ % 0x4) ? _0x2b61f4 += String['fromCharCode'](0xff & _0x539f43 >> (-0x2 * _0x57b6ae & 0x6)) : 0x0) {
                    _0x288916 = _0x441f43['indexOf'](_0x288916);
                }
                for (var _0x115251 = 0x0, _0x2f3e50 = _0x2b61f4['length']; _0x115251 < _0x2f3e50; _0x115251++) {
                    _0x140ff7 += '%' + ('00' + _0x2b61f4['charCodeAt'](_0x115251)['toString'](0x10))['slice'](-0x2);
                }
                return decodeURIComponent(_0x140ff7);
            };
            var _0x2cecea = function (_0x25fa1d, _0x122999) {
                var _0x383349 = [], _0x1ae253 = 0x0, _0x143258, _0x25728e = '';
                _0x25fa1d = _0x511390(_0x25fa1d);
                var _0x33efe0;
                for (_0x33efe0 = 0x0; _0x33efe0 < 0x100; _0x33efe0++) {
                    _0x383349[_0x33efe0] = _0x33efe0;
                }
                for (_0x33efe0 = 0x0; _0x33efe0 < 0x100; _0x33efe0++) {
                    _0x1ae253 = (_0x1ae253 + _0x383349[_0x33efe0] + _0x122999['charCodeAt'](_0x33efe0 % _0x122999['length'])) % 0x100, _0x143258 = _0x383349[_0x33efe0], _0x383349[_0x33efe0] = _0x383349[_0x1ae253], _0x383349[_0x1ae253] = _0x143258;
                }
                _0x33efe0 = 0x0, _0x1ae253 = 0x0;
                for (var _0x570848 = 0x0; _0x570848 < _0x25fa1d['length']; _0x570848++) {
                    _0x33efe0 = (_0x33efe0 + 0x1) % 0x100, _0x1ae253 = (_0x1ae253 + _0x383349[_0x33efe0]) % 0x100, _0x143258 = _0x383349[_0x33efe0], _0x383349[_0x33efe0] = _0x383349[_0x1ae253], _0x383349[_0x1ae253] = _0x143258, _0x25728e += String['fromCharCode'](_0x25fa1d['charCodeAt'](_0x570848) ^ _0x383349[(_0x383349[_0x33efe0] + _0x383349[_0x1ae253]) % 0x100]);
                }
                return _0x25728e;
            };
            _0x539f['PMFctg'] = _0x2cecea, _0x4d10d8 = arguments, _0x539f['jEgRKu'] = !![];
        }
        var _0x4a8cb3 = _0x5bcdfa[0x0], _0x2bf8e5 = _0x54b3eb + _0x4a8cb3, _0x2b6c79 = _0x4d10d8[_0x2bf8e5];
        return !_0x2b6c79 ? (_0x539f['rxabhE'] === undefined && (_0x539f['rxabhE'] = !![]), _0x2c810e = _0x539f['PMFctg'](_0x2c810e, _0x4cbb62), _0x4d10d8[_0x2bf8e5] = _0x2c810e) : _0x2c810e = _0x2b6c79, _0x2c810e;
    }, _0x539f(_0x4d10d8, _0x1ea15d);
}
function _0x2b6c(_0x4d10d8, _0x1ea15d) {
    var _0x5bcdfa = _0x1ea1();
    return _0x2b6c = function (_0x54b3eb, _0x4cbb62) {
        _0x54b3eb = _0x54b3eb - 0x77;
        var _0x2c810e = _0x5bcdfa[_0x54b3eb];
        if (_0x2b6c['awfkIh'] === undefined) {
            var _0x511390 = function (_0x2cecea) {
                var _0x537254 = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789+/=';
                var _0x441f43 = '', _0x2b61f4 = '';
                for (var _0x140ff7 = 0x0, _0x57b6ae, _0x539f43, _0x288916 = 0x0; _0x539f43 = _0x2cecea['charAt'](_0x288916++); ~_0x539f43 && (_0x57b6ae = _0x140ff7 % 0x4 ? _0x57b6ae * 0x40 + _0x539f43 : _0x539f43, _0x140ff7++ % 0x4) ? _0x441f43 += String['fromCharCode'](0xff & _0x57b6ae >> (-0x2 * _0x140ff7 & 0x6)) : 0x0) {
                    _0x539f43 = _0x537254['indexOf'](_0x539f43);
                }
                for (var _0x2e2541 = 0x0, _0x115251 = _0x441f43['length']; _0x2e2541 < _0x115251; _0x2e2541++) {
                    _0x2b61f4 += '%' + ('00' + _0x441f43['charCodeAt'](_0x2e2541)['toString'](0x10))['slice'](-0x2);
                }
                return decodeURIComponent(_0x2b61f4);
            };
            _0x2b6c['Ezxnag'] = _0x511390, _0x4d10d8 = arguments, _0x2b6c['awfkIh'] = !![];
        }
        var _0x4a8cb3 = _0x5bcdfa[0x0], _0x2bf8e5 = _0x54b3eb + _0x4a8cb3, _0x2b6c79 = _0x4d10d8[_0x2bf8e5];
        return !_0x2b6c79 ? (_0x2c810e = _0x2b6c['Ezxnag'](_0x2c810e), _0x4d10d8[_0x2bf8e5] = _0x2c810e) : _0x2c810e = _0x2b6c79, _0x2c810e;
    }, _0x2b6c(_0x4d10d8, _0x1ea15d);
}
function _0x1ea1() {
    var _0xcfdf75 = ['SHA3'];
    _0x1ea1 = function () {
        return _0xcfdf75;
    };
    return _0x1ea1();
}
var _0x143258 = _0x5bcd, cliente = CryptoJS[_0x143258('0x77')](cliente);

var url = cliente + '.geojson';

var drive = url.substring(0, 11);
console.log(drive);



var map = new L.Map('map', {
		layers: L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}'),
		maxZoom: 17, 
		attributionControl: false,
		zoomControl: false
	});

map.addControl(L.control.zoom({ position:'topright' }));

$.getJSON(url, function(json) {

var geoLayer = L.geoJson(json).addTo(map);

 geoList = new L.Control.GeoJSONSelector(geoLayer, {
	zoomToLayer: true,
	listItemBuild: function(layer) {
		return L.Util.template('<small><b>{nome_area}</b><br>Status: {status} <br>Area: {areaha}<br> {BC5PROPRIE} </small>',  layer.feature.properties);
	}
}).addTo(map);

function adjustMapHeight() {
  document.getElementById("map").style.height = window.innerHeight + "px";
  map.invalidateSize();
}

adjustMapHeight();



window.onresize = adjustMapHeight;



map.addControl(function() {
	 c = new L.Control({position:'bottomright'});
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

	
	
	// Configuração do Popup
	if (feature.properties && feature.properties.popupContent) {
	popupContent += feature.properties.popupContent;
	}
	layer.bindPopup(popupContent);
	

	geoList.on('selector:change', function(e) {
	 jsonObj = e.layers[0].feature.properties;
	 html = '<table border="1">';


//==============Função EACH do JQUERY - fica repetindo o conteúdo da função em cada uma das propriedades do GEOJSON=======================
	// $.each(jsonObj, function(key, value){
	// });

	html += '<tr>' + "<strong>Nome da área</strong>: " + jsonObj.nome_area + "<br>" + '</tr>';
	html += '<tr>' + "<strong>Município</strong>: " + jsonObj.munic + "<br>" + '</tr>';
	html += '<tr>' + "<strong>Área em Hectares</strong>: " + jsonObj.areaha + "<br>" + '</tr>';
	html += '<tr>' + "<strong>Detentor(es)</strong>: " + jsonObj.BC5PROPRIE + "<br>" + '</tr>';
	html += '<tr>' + '<a href="https://sigef.incra.gov.br/geo/parcela/detalhe/' +  jsonObj.parcela_co + '"' + ">" + "SIGEF" +  "</a>" + "<br>" + '</tr>';
	html += '<tr>' + '<a href="https://tinyurl.com/' +  drive + '"' + ">" + "Documentos no Drive" +  "</a>" + "<br>" + '</tr>';

	html += '</table>';
	$('.selection').html(html);
});

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
