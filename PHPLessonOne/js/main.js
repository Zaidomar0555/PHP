// this is for client side
$(document).ready(function() {
  var country = document.querySelector("#country").options;
  //var countries = document.getElementById("myCountry");
  var cities = document.querySelector("#city").options;
  var getInfo;
  //var counter = cities.length;
  var pickUSA = country[6].value;
  //console.log(pickUSA);
  console.log(cities.value);
  // $("#country").options.value


  function selectCity(country.value){
    for(var i = 0; i < cities.length; i++){

       if(cities[i].value == country.value){
         console.log(cities[i]);
         cities
         continue;
       }
    }
  }


  });
