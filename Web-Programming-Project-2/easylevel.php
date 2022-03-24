<!DOCTYPE>
<html>
<head>
<title>Word game</title>

<link type="text/css" rel="stylesheet" href="wordle.css"/>
<h1>Wordle</h1>
</head>

<body>
	<div class=letterrow>
		<div class=letterbox>H</div>
		<div class=wrongletter>A</div>
		<div class=correctletter>B</div>
	</div>
	<div class=letterrow>
		<div class=letterbox class=wrong></div>
		<div class=letterbox></div>
		<div class=letterbox></div>
	</div>
	<div class=letterrow>
		<div class=letterbox></div>
		<div class=letterbox></div>
		<div class=letterbox></div>
	</div>
	<div class=letterrow>
		<div class=letterbox></div>
		<div class=letterbox></div>
		<div class=letterbox></div>
	</div>
    <br>
	<form id="form" action="easylevel.php" method="POST">
		<input name="guess" type="text">
        <input type="button" name="guess" value="submit">
    </form>

</body>
</html>