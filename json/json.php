<?php

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

echo '
{"concerten":
[
	{"datum":"1-1-2015","plaats":"Best","tijd":"21:00","entreeprijs":"25.00"},
	{"datum":"9-5-2015","plaats":"Oirschot","tijd":"23:00","entreeprijs":"21.00"},
	{"datum":"4-2-2016","plaats":"Amsterdam","tijd":"21:00","entreeprijs":"28.00"},
	{"datum":"6-3-2016","plaats":"Utrecht","tijd":"21:00","entreeprijs":"23.00"},
	{"datum":"12-9-2016","plaats":"Maastricht","tijd":"11:00","entreeprijs":"12.00"}
]
}
'
?>