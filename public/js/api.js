/*=========================================================================================
  File Name: api.js
  Description: Get Result related Country, state and city.
  ----------------------------------------------------------------------------------------
  Item Name: Php Laravel Country,state & City List using Api.
  Version: 1.0
  Author: Tharani
  Author URL: 
==========================================================================================*/
//var api_url = window.location.protocol + "//" + window.location.host + "/country_list";
//var api_url = '{{ url("/")}}/';
  $(document).ready(function() {

      $.ajax({

       url : 'get_country_ajax',
       method : "get",
  	   success: function(data){
  		   var value="<option value=''>Select Country</option>";
         var data = data.data;
  		   data.forEach(function(element) {
  		    value +="<option value='"+element.id+"'>"+element.name+"</option>";
  		   });
  	     	$('#country').html(value);
  	     	$('#state').val('');
  	     	$('#city').val('');
  	  }
    });

  });

$(document).on('change','#country',function(){
  var id=$(this).val();
  $.ajax({
    type: "GET",
    url : 'get_state_ajax/'+id,
    dataType:'json',
    success: function(data){
      var value="<option value=''>Select State</option>";
      var data = data.data;
      data.forEach(function(element) {
      value +="<option value='"+element.id+"'>"+element.name+"</option>";
    });
      $('#state').html(value);
	    $('#city').val('');
    }
  });
});


$(document).on('change','#state',function(){
  var id=$(this).val();
  $.ajax({
    type: "GET",
    url : 'get_city_ajax/'+id,
    dataType:'json',
    success: function(data){
      var value="<option value=''>Select City</option>";
      var data = data.data;
      data.forEach(function(element) {
      value +="<option value='"+element.id+"'>"+element.name+"</option>";
    });
      $('#city').html(value);
    }
  });
});