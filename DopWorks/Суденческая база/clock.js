  var s = 0;
  var m = 0;
  var h = 0;
  function dateNow() {

   s++;
   if (s === 60) {
      s = 0;
      m +=1;
   }
   else if(m === 60){
      m = 0;
      h +=1;     
   }
   else if(h === 24){
      h = 0;
   }   
   var localdate = h + ':' + m + ":" + s + " - Прошло времени";

   $("span").text(localdate);
  }
  setInterval(dateNow, 1000);
