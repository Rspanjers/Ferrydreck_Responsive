
window.addEventListener("DOMContentLoaded", function() {
  document.getElementById("invoer").addEventListener("keyup", ajaxrequest);
  ajaxrequest();
});

function ajaxrequest(){
  var el = document.getElementById("mydiv");
  var xmlhttp = new XMLHttpRequest();
  el.innerHTML = '<img src="images/ajax-loader.gif">';

  xmlhttp.onreadystatechange=function() {
    
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
        el.innerHTML = xmlhttp.responseText;
      }
  }

  xmlhttp.open("GET","woonplaats.php?invoer=" + document.getElementById("invoer").value,true);
  xmlhttp.send();

 }

     



  