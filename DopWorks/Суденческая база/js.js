$(document).ready(function(){
   $("#sub").click(function(){
      var values = [];
      var elements = document.getElementsByClassName('info');
      for (var i = 0; i < elements.length; i++) {
      	   values[i] = elements[i].value;
      }
      if (check = $("#male").is(":checked")) {
           values[4] = $("#male").attr('value');
      }    
      else{
          values[4] = $("#famele").attr('value');
      }
      $.ajax({
         url: "test.php",
         data:({ values }),
         type: "POST",
         dataType: "html",
         success: function (data) {
            $("body").html(data); 
         }
      });
   });
   $(".delete").click(function(){
      var idElem = $(this).attr('id');
      var elem = $(this);
      $.ajax({
        url: "test.php",
        data: ({ del : idElem }),
        type: "POST",
        dataType: "html",
        success: function () {
             elem.detach();
        }
      });

   });
});