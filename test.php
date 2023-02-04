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

		/*
			POST needs: name,lastname,email,gender.
			GET needs: nothing or an id for searching a single user.
			PUT needs: name, lastname, email, gender, id.
			DELETE needs: id.
		*/
			
		function REQUEST(type){
			$.ajax({
				method: type,
				url: 'http://localhost/ricardoAPI/',
				data: {
					// id: '5',
					// name:'José',
					// lastname: 'Alvarado',
					// email: 'jose.a@hotmail.com',
					// gender: 'masculino'
				},
				success(e){
					console.log(e);
				}
			})
		}

	</script>
</body>
</html>