// this is for client side
$(document).ready(function() {
  // var country = document.querySelector("#country").options;
  // var myText = $( "#country option:selected" ).text(country);
  // console.log(myText);
  // $("#myCountry").text(myText);
//--------------------------------------
$("#citiesSelection").hide();

 $("#city").children('option:gt(0)').hide();
  $("#country").change(function() {
     $("#citiesSelection").show();
     //var optionValue = $( "#country option:selected");
      $("#city").children('option').hide();
      $("#city").children("option[value^=" + $(this).val() + "]").show()


  });




  $("#city").change(function() {
               var value = $("#city option:selected");

              // var city = value.text();
              //console.log('city name is: ' + value.text() + ' and the value of that city is: ' + value.val());
                //alert('city name is: ' + value.text() + ' and the value of that city is: ' + value.val() );
                //console.log(lengthstring)
                $("#showCity").text("The city selected is: " + value.text());
                // var getID = document.getElementById("showCity");
                // getID.textContent = "";
            });

  $("#login").hide();

  $("#loginButoon").click(function(){

         $("#login").show();
           $("#signUp").hide();

  });

  $("#buttonLogin").click(function(){


          window.location.reload();

  });

  button


  });
