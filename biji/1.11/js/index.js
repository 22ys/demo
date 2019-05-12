window.onload = function () {
   var i=0
   var a=0
   var b=0
    var str ="如果，爱一个人，守一份爱情，可以在早春一起去踏青，可以在盛夏一起去赏荷，可以在浅秋一起去观月，可以在深冬一起去寻梅，不厌倦，却欢乐，不平凡，却平淡。那么，此生便无憾了。";
     var sty ="I Love You";
     var ste ="money";
    function typing(){
      var mydiv =document.getElementById("text_content");
      mydiv.innerHTML +=str.charAt(i);
      i++;
       setTimeout(typing,100);
      }
      typing();


         function bbd(){ 
      var mydiv =document.getElementById("money");
      mydiv.innerHTML +=ste.charAt(b);
     b++;
      setTimeout(bbd,1200);
        function bbc(){ 
      var mydiv =document.getElementById("ys");
      mydiv.innerHTML +=sty.charAt(a);
     a++;
      setTimeout(bbc,300);






      }
      bbc();
      }
      bbd();

     
  }
