<!DOCTYPE html>
  <html>
    <body>
      <p id="demo">Clique no botão para receber sua localização em Latitude e Longitude:</p>
      <button onclick="getLocation()">Clique Aqui</button>
      
      <script>
      var x=document.getElementById("demo");
      function getLocation(){
        if (navigator.geolocation){
          navigator.geolocation.getCurrentPosition(showPosition);
        }
        else{
          x.innerHTML="O seu navegador não suporta Geolocalização.";
        }
      }
      function showPosition(position){
          x.innerHTML="Latitude: " + position.coords.latitude +
          "<br>Longitude: " + position.coords.longitude; 
      }
      </script>
      
    </body>

</html>