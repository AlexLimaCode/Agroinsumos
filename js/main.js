function locate() {

    var location = document.getElementById("location");
    var apiKey = 'f536d4c3330c0a1391370d1443cee848';
    var url = 'https://api.forecast.io/forecast/';
  
    navigator.geolocation.getCurrentPosition(success, error);
  
    function success(position) {
        latitude = position.coords.latitude;
        longitude = position.coords.longitude;
  
        $.getJSON("http://maps.googleapis.com/maps/api/geocode/json?latlng="+latitude + "," + longitude + "&language=en", function(data) {
            var fulladd = data.results[0].formatted_address.split(",");
            var count= fulladd.length;
  
            $('#countryInput').val(fulladd[count-1]);
            $('#cityInput').val(fulladd[count-2]);
        });
    }
  
    function error() {
        location.innerHTML = "Unable to retrieve your location";
    }
  }