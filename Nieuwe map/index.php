<html>
<head>
<script>

function showResult(x) {
  if (x.length==0) { 
    document.getElementById("mydiv").innerHTML="";
    document.getElementById("mydiv").style.border="0px";
    return;
  }

  if (window.XMLHttpRequest) {
    xmlhttp=new XMLHttpRequest();
  } 

  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("mydiv").innerHTML=xmlhttp.responseText;
      document.getElementById("mydiv");
    }
  }

  xmlhttp.open("GET","livesearch.php?invoer="+x,true);
  xmlhttp.send();
}
</script>
</head>
<body>

<form>
<input type="text" size="30" onkeyup="showResult(this.value)">
<div id="mydiv"></div>
</form>

</body>
</html>