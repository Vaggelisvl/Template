<!DOCTYPE html>
<html>
<head>
	<title>You have been Hacked !</title>
	<style>
		body {
			background-color: black;
			color: white;
			font-size: 10vw;
			text-align: center;
			margin: 0;
			padding: 0;
			overflow: hidden;
		}
	</style>
	<script type="text/javascript">
		var text = "You have been Hacked !";
		var index = 0;
		var speed = 100; // milliseconds per character

		function typeWriter() {
			if (index < text.length) {
				document.body.innerHTML += text.charAt(index);
				index++;
				setTimeout(typeWriter, speed);
			}
		}

		window.onload = typeWriter;
	</script>
</head>
<body>
</body>
</html>
