// this is for client side
$(document).ready(function() {
  var country = document.querySelector("#country").options;
  var countries = document.getElementById("myCountry");
  var cities = document.querySelector("#city").options;
  var getInfo;
  //var counter = cities.length;
  var pickUSA = country[4].value;
   //console.log(pickUSA);
  // console.log(cities);
  // $("#country").options.value


  for(var i = 0; i < cities.length; i++){
     if(cities[i].value == pickUSA){
       console.log(cities[i]);
      getInfo = cities[i];
      countries.textContent = getInfo;
       continue;
     }
  }

 //countries.textContent = getInfo;


  });
