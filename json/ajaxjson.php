<!DOCTYPE html>
<html>
<head>
	       <script>
        window.onload = function()
        {
            ajaxrequest();
        }

        function ajaxrequest(){
          var el = document.getElementById("concerten");
          var xmlhttp = new XMLHttpRequest();

          xmlhttp.onreadystatechange=function() {
                if (xmlhttp.readyState==4 && xmlhttp.status==200) 
                {
                    el.innerHTML=xmlhttp.responseText;
                    var result = "";
                    var obj = JSON.parse(xmlhttp.responseText);
                
                    for(i=0;i<obj.concerten.length;i++)
                    {
                        result += "<h1>" + obj.concerten[i].plaats + "</h1>"
                        result += obj.concerten[i].datum + "<br/>";
                        result += obj.concerten[i].tijd + "<br />";
                        result += obj.concerten[i].entreeprijs + "<br />";
                    }
                    document.getElementById("concerten").innerHTML = result;
                }
            }
              xmlhttp.open("GET","json/json.php",true);
              xmlhttp.send();
            }

       </script>
</head>
<body>

<div id="mydiv"></div>



</body>
</html>
