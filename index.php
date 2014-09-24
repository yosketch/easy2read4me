<!DOCTYPE html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>easy2read4me</title>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if lt IE 9]>
<script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- <link rel="stylesheet" href=""> -->
<!-- <link rel="shortcut icon" href=""> -->
</head>
<body>

<h1>easy2read4me</h1>

<div id="input-box" class="boxes">
<h2>Input</h2>
<form name="input" method="get" action="">
<textarea rows="20" cols="60" id="input-text" name="input">
</textarea>
<br>
<input type="button" onclick="doAction();" value=" convert ">
</form>
</div>

<div id="output-box" class="boxes">
<h2>Output</h2>
<form name="output" method="" action="">
<textarea rows="20" cols="60" id="output-text">
</textarea>
</form>
</div>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
<!--
function doAction() {
  var text = $('#input-text').val();
  $.ajax({
    type: "POST",
    url: 'convert.php',
    data: {text:text},
    success: function(data, textStatus){
      $('#output-text').text(data.text);
    }
  });
}
//-->
</script>
</body>
</html>

