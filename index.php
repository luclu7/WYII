<!DOCTYPE html>
<html>
<head>
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="@Luclu7Gaming" />
	<meta name="twitter:title" content="WYII" />
	<meta name="twitter:description" content="What year is it?" />
	<meta name="twitter:image" content="https://whatyearisit.date/wyii.png" />
	
	<meta charset="utf-8">
	
	<style>
	h1, .text-center, #text-center {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin: auto;
            font-size: 6em;
	}

	div .centered {
            display: flex;
            min-height: 85vh;
	}
	</style>
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	
	<title>WYIT?</title>
	<script>
		window.setInterval(function () {
			$('#year')
				.empty()
			;
			var d = new Date();
			var n = d.getFullYear();
			$('#year')
				.append(n)
			;
		}, 1);
	</script>
</head>
<body>

<div class="centered">
<h1 class=text-center>
	We are in&nbsp;<div id="year"></div>.
</h1>
</div>
	
</body>
</html>
<!-- Hello :D -->
