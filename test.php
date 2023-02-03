<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	<button onclick="REQUEST('POST')">POST</button>
	<button onclick="REQUEST('GET')">GET</button>
	<button onclick="REQUEST('PUT')">PUT</button>
	<button onclick="REQUEST('DELETE')">DELETE</button>

	
	<script src="js/jquery.js"></script>
	<script>
			
		function REQUEST(type){
			$.ajax({
				method: type,
				url: 'http://localhost/ricardoAPI/',
				data: {},
				success(e){
					console.log(e);
				}
			})
		}

	</script>
</body>
</html>