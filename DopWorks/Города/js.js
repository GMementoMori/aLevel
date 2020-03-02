$(document).ready(function(){
	function del(){
   	     alert("Игра закончена!");
         $.ajax({
             url: "city.php",
             data:({ reset:'yes' }),
             type: "POST",
             dataType: "html",
             success: function (data) {
                $("body").html(data); 
             }
          });
    } 

  function add(){
         var city = $("#city").val();
      	 $.ajax({
             url: "city.php",
             data:({ city }),
             type: "POST",
             dataType: "html",
             success: function (data) {
                $("body").html(data); 
             }
          });
    }

   $("#reset").click(del);
   $("#sub").click(add);
});




