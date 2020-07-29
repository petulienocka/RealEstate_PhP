<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="nav.css">
  <script src="http://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

  <script src='https://api.mapbox.com/mapbox-gl-js/v1.2.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.2.0/mapbox-gl.css' rel='stylesheet' />

  <title>SEARCH</title>
</head>
<body>

<nav> 
    <a href = "index.html"><img src="logo.png" alt="logo" class="logo"></a>
    <ul>
        <h3>+45 21 34 13 69</h3>
        <h4>kbhreinfo@kbhrealestate.dk</h4>
    </ul>

  <div class="container">
  <form action= "search.php">
      <input type="text" placeholder= "Search your property by address on map..." name="search">
        <button type ="submit" class="buttonsubmit"><i class="fas fa-search"></i></button>
</form>
  
</div>
 </nav>

  <div id="map_properties">

    <div id='map'></div>

    <div id="properties">

      <div id="V-P1" class="property" >
        <img src="p1.jpg">
        <br>
        <br>
        <h1>550 000 dkk</h1>
        <br>
        <p>Jagtvej 86, 2200 København, Danmark</p>
        <br>
        <br>
      </div>


      <div id="V-P2" class="property" >
        <img src="p2.jpg">
        <br>
        <br>
         <h1>1 500 000 dkk</h1>
        <br>
        <p>Blegdamsvej, 2100 København, Danmark</p>
        <br>
        <br>
      </div>



      <div id="V-P3" class="property" >
        <img src="p3.jpg">
        <br>
        <br>
         <h1>3 499 999 dkk</h1>
        <br>
        <p>Lykkesholms Allé 24, 1902 Frederiksberg, Danmark</p>
        <br>
        <br>
      </div>

      <div id="V-P4" class="property" >
        <img src="p4.jpg">
        <br>
        <br>
         <h1>750 000 dkk</h1>
        <br>
        <p>Sønder Blvd. 52, 1720 København, Danmark</p>
        <br>
        <br>
      </div>

      <div id="V-P5" class="property" >
        <img src="p5.jpg">
        <br>
        <br>
         <h1>1 200 000 dkk</h1>
        <br>
        <p>Tom Kristensens Vej, 2300 København, Danmark</p>
        <br>
        <br>
      </div>

      <div id="V-P6" class="property" >
        <img src="p6.jpg">
        <br>
        <br>
         <h1>2 399 000 dkk</h1>
        <br>
        <p>Krusemyntegade 25-1, 1306 København, Danmark</p>
        <br>
        <br>
      </div>

      <div id="V-P7" class="property" >
        <img src="p7.jpg">
        <br>
        <br>
         <h1>600 000 dkk</h1>
        <br>
        <p>Kronborggade 13-1, 2200 København, Danmark</p>
        <br>
        <br>
      </div>

      <div id="V-P8" class="property" >
        <img src="p8.jpg">
        <br>
        <br>
         <h1>899 000 dkk</h1>
        <br>
        <p>Frederikssundsvej 43, 2400 København, Danmark</p>
        <br>
        <br>
      </div>

      <div id="V-P9" class="property" >
        <img src="p9.jpg">
        <br>
        <br>
         <h1>4 550 000 dkk</h1>
        <br>
        <p>Ørestads Blvd., 2300 København, Danmark</p>
        
        <br>
        <br>
      </div>

      <div id="V-P10" class="property" >
        <img src="p10.jpg">
        <br>
        <br>
         <h1>550 000 dkk</h1>
        <br>
        <p>Jagtvej 124, 2200 København, Danmark</p>
        <br>
        <br>
      </div>

    </div>

  </div>
  <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.1/mapbox-gl-geocoder.min.js'></script>
<link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.1/mapbox-gl-geocoder.css' type='text/css' />
<div id='map'></div>
<div id='geocoder' class='geocoder'></div>
  <script>
      
      mapboxgl.accessToken = 'pk.eyJ1IjoicGV0cmFwaWtub3ZhIiwiYSI6ImNrMGM1ZjV4bzB5cjIzYm53bzJ1eWxmZ3QifQ.qcKb5bskADu6uhfLVFZFyQ';
      var map = new mapboxgl.Map({
      container: 'map',
      center: [12.555050, 55.704001], // starting position
      zoom: 12, // starting zoom
      style: 'mapbox://styles/petrapiknova/ck0c6jysj4a541clrg2860wt3'
      
      });

      var geocoder = new MapboxGeocoder({
accessToken: mapboxgl.accessToken,
mapboxgl: mapboxgl
});
      
document.getElementById('geocoder').appendChild(geocoder.onAdd(map));

      var nav = new mapboxgl.NavigationControl();
map.addControl(nav, 'bottom-left' );




      let marker = {
        "geometry":{
          "coordinates":[12.552108, 55.697234],
          "type":"Point"
        },
        "properties":{
          "iconSize":[20,20],
          "message":"Foo"
        },
        "type":"Feature",
        "id" : "P1"
      }

      var el = document.createElement('div');
      el.className = 'marker'
      el.style.backgroundImage = 'url(marker.png)';
      el.style.width = "50px"
      el.style.height = "50px"
      el.id = marker.id



      let marker1 = {
        "geometry":{
          "coordinates":[12.573030, 55.697163],   
          "type":"Point"
        },
        "properties":{
          "iconSize":[20,20],
          "message":"Foo"
        },
        "type":"Feature",
        "id" : "P2"
      }

      var el1 = document.createElement('div');
      el1.className = 'marker'
      el1.style.backgroundImage = 'url(marker.png)';
      el1.style.width = "50px"
      el1.style.height = "50px"
      el1.id = marker1.id



      let marker2 = {
        "geometry":{
          "coordinates":[12.548820, 55.678060],   
          "type":"Point"
        },
        "properties":{
          "iconSize":[20,20],
          "message":"Foo"
        },
        "type":"Feature",
        "id" : "P3"
      }

      var el2 = document.createElement('div');
      el2.className = 'marker'
      el2.style.backgroundImage = 'url(marker.png)';
      el2.style.width = "50px"
      el2.style.height = "50px"
      el2.id = marker2.id


      let marker3 = {
        "geometry":{
          "coordinates":[12.552419, 55.666374],   
          "type":"Point"
        },
        "properties":{
          "iconSize":[20,20],
          "message":"Foo"
        },
        "type":"Feature",
        "id" : "P4"
      }

      var el3 = document.createElement('div');
      el3.className = 'marker'
      el3.style.backgroundImage = 'url(marker.png)';
      el3.style.width = "50px"
      el3.style.height = "50px"
      el3.id = marker3.id




      let marker4 = {
        "geometry":{
          "coordinates":[12.583480, 55.659341],    
          "type":"Point"
        },
        "properties":{
          "iconSize":[20,20],
          "message":"Foo"
        },
        "type":"Feature",
        "id" : "P5"
      }

      var el4 = document.createElement('div');
      el4.className = 'marker'
      el4.style.backgroundImage = 'url(marker.png)';
      el4.style.width = "50px"
      el4.style.height = "50px"
      el4.id = marker4.id


      let marker5 = {
        "geometry":{
          "coordinates":[12.584707, 55.688394],   
          "type":"Point"
        },
        "properties":{
          "iconSize":[20,20],
          "message":"Foo"
        },
        "type":"Feature",
        "id" : "P6"
      }

      var el5 = document.createElement('div');
      el5.className = 'marker'
      el5.style.backgroundImage = 'url(marker.png)';
      el5.style.width = "50px"
      el5.style.height = "50px"
      el5.id = marker5.id




      let marker6 = {
        "geometry":{
          "coordinates":[12.545309, 55.691129], 
          "type":"Point"
        },
        "properties":{
          "iconSize":[20,20],
          "message":"Foo"
        },
        "type":"Feature",
        "id" : "P7"
      }

      var el6 = document.createElement('div');
      el6.className = 'marker'
      el6.style.backgroundImage = 'url(marker.png)';
      el6.style.width = "50px"
      el6.style.height = "50px"
      el6.id = marker6.id




      let marker7 = {
        "geometry":{
          "coordinates":[12.530976, 55.702671],   
          "type":"Point"
        },
        "properties":{
          "iconSize":[20,20],
          "message":"Foo"
        },
        "type":"Feature",
        "id" : "P8"
      }

      var el7 = document.createElement('div');
      el7.className = 'marker'
      el7.style.backgroundImage = 'url(marker.png)';
      el7.style.width = "50px"
      el7.style.height = "50px"
      el7.id = marker7.id

      let marker8 = {
        "geometry":{
          "coordinates":[12.586487, 55.665953],   
          "type":"Point"
        },
        "properties":{
          "iconSize":[20,20],
          "message":"Foo"
        },
        "type":"Feature",
        "id" : "P9"
      }

      var el8 = document.createElement('div');
      el8.className = 'marker'
      el8.style.backgroundImage = 'url(marker.png)';
      el8.style.width = "50px"
      el8.style.height = "50px"
      el8.id = marker8.id

      let marker9 = {
        "geometry":{
          "coordinates":[12.556166, 55.700000],
          "type":"Point"
        },
        "properties":{
          "iconSize":[20,20],
          "message":"Foo"
        },
        "type":"Feature",
        "id" : "P10"
      }

      var el9 = document.createElement('div');
      el9.className = 'marker'
      el9.style.backgroundImage = 'url(marker.png)';
      el9.style.width = "50px"
      el9.style.height = "50px"
      el9.id = marker9.id





      el.addEventListener('click', function() {
        console.log(`Highlight property with ID ${this.id} `);
        removeActiveClassFromProperty()
        document.getElementById(this.id).classList.add('active')
        document.getElementById('V-'+this.id).classList.add('active')
      });


      el1.addEventListener('click', function() {
        console.log(`Highlight property with ID ${this.id} `);
        removeActiveClassFromProperty()
        document.getElementById(this.id).classList.add('active')
        document.getElementById('V-'+this.id).classList.add('active')
      });



      el2.addEventListener('click', function() {
        console.log(`Highlight property with ID ${this.id} `);
        removeActiveClassFromProperty()
        document.getElementById(this.id).classList.add('active')
        document.getElementById('V-'+this.id).classList.add('active')
      });


      el3.addEventListener('click', function() {
        console.log(`Highlight property with ID ${this.id} `);
        removeActiveClassFromProperty()
        document.getElementById(this.id).classList.add('active')
        document.getElementById('V-'+this.id).classList.add('active')
      });

      el4.addEventListener('click', function() {
        console.log(`Highlight property with ID ${this.id} `);
        removeActiveClassFromProperty()
        document.getElementById(this.id).classList.add('active')
        document.getElementById('V-'+this.id).classList.add('active')
      });

      el5.addEventListener('click', function() {
        console.log(`Highlight property with ID ${this.id} `);
        removeActiveClassFromProperty()
        document.getElementById(this.id).classList.add('active')
        document.getElementById('V-'+this.id).classList.add('active')
      });

      el6.addEventListener('click', function() {
        console.log(`Highlight property with ID ${this.id} `);
        removeActiveClassFromProperty()
        document.getElementById(this.id).classList.add('active')
        document.getElementById('V-'+this.id).classList.add('active')
      });


      el7.addEventListener('click', function() {
        console.log(`Highlight property with ID ${this.id} `);
        removeActiveClassFromProperty()
        document.getElementById(this.id).classList.add('active')
        document.getElementById('V-'+this.id).classList.add('active')
      });


      el8.addEventListener('click', function() {
        console.log(`Highlight property with ID ${this.id} `);
        removeActiveClassFromProperty()
        document.getElementById(this.id).classList.add('active')
        document.getElementById('V-'+this.id).classList.add('active')
      });


      el9.addEventListener('click', function() {
        console.log(`Highlight property with ID ${this.id} `);
        removeActiveClassFromProperty()
        document.getElementById(this.id).classList.add('active')
        document.getElementById('V-'+this.id).classList.add('active')
      });

    // add marker to map
    new mapboxgl.Marker(el).setLngLat(marker.geometry.coordinates).addTo(map);      
    new mapboxgl.Marker(el1).setLngLat(marker1.geometry.coordinates).addTo(map);      
    new mapboxgl.Marker(el2).setLngLat(marker2.geometry.coordinates).addTo(map);
    new mapboxgl.Marker(el3).setLngLat(marker3.geometry.coordinates).addTo(map);
    new mapboxgl.Marker(el4).setLngLat(marker4.geometry.coordinates).addTo(map);
    new mapboxgl.Marker(el5).setLngLat(marker5.geometry.coordinates).addTo(map);
    new mapboxgl.Marker(el6).setLngLat(marker6.geometry.coordinates).addTo(map);
    new mapboxgl.Marker(el7).setLngLat(marker7.geometry.coordinates).addTo(map);
    new mapboxgl.Marker(el8).setLngLat(marker8.geometry.coordinates).addTo(map);
    new mapboxgl.Marker(el9).setLngLat(marker9.geometry.coordinates).addTo(map);


    // $('.active').removeClass('.active')
    function removeActiveClassFromProperty(){
      let properties = document.querySelectorAll('.active')
      properties.forEach( function( oPropertyDiv ) {
        oPropertyDiv.classList.remove('active')
      } )
    }  


    </script>





  <script src="app.js"></script>

</body>
</html>