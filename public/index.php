<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact V3</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="images\icons\favicon.ico">

<link rel="stylesheet" type="text/css" href="vendor\bootstrap\css\bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="fonts\font-awesome-4.7.0\css\font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="vendor\animate\animate.css">

<link rel="stylesheet" type="text/css" href="vendor\css-hamburgers\hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="vendor\select2\select2.min.css">

<link rel="stylesheet" type="text/css" href="css\util.css">
<link rel="stylesheet" type="text/css" href="css\main.css">

<meta name="robots" content="noindex, follow">
</head>
<body>
<div class="bg-contact3" style="background-image: url('images/bg-01.jpeg');">
<div class="container-contact3">
<div class="wrap-contact3">
<form class="contact3-form validate-form">
<span class="contact3-form-title">
Új hibajegy
</span>
<div class="wrap-input3 validate-input" data-validate="Cégnév kitöltése kötelező">
<input class="input3" type="text" name="name" placeholder="Cégnév">
<span class="focus-input3"></span>
</div>
<div class="wrap-input3 validate-input" data-validate="Valid email kötelező: ex@abc.xyz">
<input class="input3" type="text" name="email" placeholder="E-mail">
<span class="focus-input3"></span>
</div>
<div class="wrap-input3 validate-input" data-validate="Tárgy kitöltése kötelező">
<input class="input3" type="text" name="subject" placeholder="Tárgy">
<span class="focus-input3"></span>
</div>
<div class="wrap-input3 validate-input" data-validate="Tartalom kitöltése kötelező">
<textarea class="input3" name="message" placeholder="Hibajegy tartalma"></textarea>
<span class="focus-input3"></span>
</div>
<div class="container-contact3-form-btn">
<button class="contact3-form-btn">
Küldés
</button>
</div>
</form>
</div>
</div>
</div>
<div id="dropDownSelect1"></div>

<script src="vendor\jquery\jquery-3.2.1.min.js"></script>

<script src="vendor\bootstrap\js\popper.js"></script>
<script src="vendor\bootstrap\js\bootstrap.min.js"></script>

<script src="vendor\select2\select2.min.js"></script>
<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>

<script src="js\main.js"></script>

<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7e4b80c20e023265","version":"2023.4.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
</body>
</html>
