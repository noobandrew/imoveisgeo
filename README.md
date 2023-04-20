# WebApp para a leitura de GeoJSON + propriedades relativas ao imóvel/polígono em questão
## _A união do Geoprocessamento com o Desenvolvimento Web_ (e suporte mobile)




ImoveisGeo é um WebApp desenvolvido por mim para a empresa Topographia, realizado e idealizado sob a supervisão do Tecnólogo em Geoprocessamento Aécio Dambrowski, que me ajudou a entender sobre o mundo do Geoprocessamento e me ensinou quais os tipos de dados/arquivos com os quais eu teria de lidar, além de me tornar ciente de qual eram as expectativas dos clientes. No subtítulo "Tech" listarei os plug-ins que serviram como inspiração ou para composição do código.

## Techs Utilizadas/Inspiração

A ideia foi dada, como já disse, pelo Aécio Dambrowski, pois ele acreditou ser um Feature interessante para a empresa e para os seus clientes. Durante o ImoveisGeo, foram utilizadas diversas tecnologias e plug-ins, tanto em trechos de código como inspiração, listo aqui as mais notáveis:


- [AutoCAD Civil 2018 3D](https://www.autodesk.com.br/products/autocad/overview) - Principal Software utilizado pelos profissionais da empresa. É dele que saem os arquivos originais, os .shp e .dbf utilizados para gerar os .geoJSON. 
- [Google MyMaps](https://www.google.com/maps/d/u/0/) - Host dos Mapas do Site
- [LeafletJS](https://github.com/Leaflet) - Leaflet é uma biblioteca JavaScript de código aberto usada para criar aplicativos de mapeamento da web.
- PHP - Utilizado para lidar com os formulários.
- MariaDB - Utilizado para base de dados.
- jQuery - Utilizado para chamar os arquivos.


*[DEMO](https://imoveisgeo.com.br)* - Faça login com o código "1234". O link para os Documentos no Drive não funciona, pois a base de dados ainda não foi upada. Por conta disso, o mapa também não, mas deveria estar onde fica aquele retângulo maior. Em breve farei deploy de uma demo completa.

Sinta-se livre para abrir o app em seu celular. Eu tornei o leaflet dentro dele responsivo. Inclusive, um .apk com webview será publicado em breve.


Essa é a terceira versão do aplicativo, outras duas foram descontinuadas para que o app ficasse mais alinhado com a necessidade da empresa.


_______________________________________
### English Version
# WebApp for reading GeoJSON + properties on the property/polygon in question
## _The Union of Geoprocessing with Web Development (and mobile support)_




ImoveisGeo is a WebApp developed by me for the company Topographia, realized and idealized under the supervision of the Technologist in Geoprocessing Aécio Dambrowski, who helped me to understand about the world of Geoprocessing and taught me what types of data/files I would have to deal with, as well as becoming aware of what the customers' expectations were. In the "Tech" subtitle I will list the plug-ins that served as inspiration or for composing the code.

## Techs Used/Inspiration

The idea was given, as I said, by Aécio Dambrowski, as he believed it to be an interesting resource for the company and its customers. During ImoveisGeo, several technologies and plug-ins were used, both in code snippets and inspiration, listed here as the most notable:


- [AutoCAD Civil 2018 3D](https://www.autodesk.com.br/products/autocad/overview) - Main software used by company professionals. This is where the original files come from, the .shp and .dbf used to generate the .geoJSON.
- [LeafletJS](https://github.com/Leaflet) - Leaflet is an open source JavaScript library used to build web mapping applications.
- [Google MyMaps](https://www.google.com/maps/d/u/0/) - WebApp Maps Host
- PHP - Used to handle the forms.
- MariaDB - Used as database.
- jQuery - Used to call the files.


*[DEMO](https://imoveisgeo.com.br)* - Log in with the code "1234". The link to "Documentos no Drive" does not work, as the database has not yet been uploaded. Because of that, neither does the map, but it should be where that larger rectangle is. Soon I will deploy a complete demo.

Feel free to open the app on your phone. I made the leaflet inside it responsive. Even an .apk with webview will be published soon.


This is the third version of the app, two others have been discontinued so that the app is more in line with the company's needs.
