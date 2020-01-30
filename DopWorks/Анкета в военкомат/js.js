$(document).ready(function(){
   $("#sub").click(function(){
      var values = [];
      var keys = [];
      var arr = [];
      var elements = document.getElementsByClassName('info');
      for (var i = 0; i < elements.length; i++) {
      	   values[i] = elements[i].value;
      }
      console.log(values);  
      $.ajax({
         url: "test.php",
         data:({ values }),
         type: "POST",
         dataType: "html",
         success: function (data) {
            $("body").html(data);   //как вывести результат?!
         }

      });
    });
});