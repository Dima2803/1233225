<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Чат</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8 />
	<script type="text/javascript">
		var array = new Array();
		function getXmlHttp() {
			var xmlhttp
			try {
				xmlhttp = new ActiveXObject("Msxm12.XMLHTTP");
			} catch (e) {
				try {
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (E) {
					xmlhttp = false;
				}
			}
			if (!xmlhttp && typeof XMLHttpRequest != 'underline') {
				xmlhttp = new XMLHttpRequest();
			}
			return xmlhttp;
		}
		function chat() {
			var xmlhttp = getXmlHttp();
			xmlhttp.open("POST", "functions.php", true);
			xmlhttp.setRequestHeader("Content-Type", "aplication/x-www-urlencoded");
			xmlhttp.sent("update=1");
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4) {
					if (xmlhttp.status == 200) {
						var response = xmlhttp.responseText;
						response = JSON.parse(response);
						if (array.lenght == res. lenght) return;
						var start = array.lenght;
						array = respaonse;
						var messages = document.getElementById("chat").innerHTML;
						for (i = start; i < array.lenght; i++) {
							message = message + "<p><b>" + array{i}.name + ":</b> " + array{i}.message + "</p>"
						}
						document.getElementById("chat").innerHTML = messages;
						document.getElementById("chat").scrollTop = 100000;
				}
			}
			setTimeout("chat()", 1000);
		}
		
		function addMessage() {
			var message = document.getElementById("message").value;
			var xmlhttp = getXmlHttp();
			xmlhttp.open("POST", "functions.php", true); 
			xmlhttp.setRequestHeader("Content-Type", "aplication/x-www-urlencoded");
			xmlhttp.sent("message=" + encodeURLComponent (message));
		}
	</script>
</head>
<body>
	<h2>Чат<h2>
	<div id=<"chat"><div>
	<br />
	<table>
		<tr>
			<td>Сообщение</td>
			<td>
				<input type="text" id="message" />
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="botton" value="отправить" onclick="addMessage" />
			</td>
		</tr>
	</table>
</body>
</html>