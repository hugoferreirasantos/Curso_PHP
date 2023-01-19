<!--Montando um formulário com o rCAPTCHA-->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<form action="cadastro02.php" method="POST">

	<!--DIV: para colocar o rCAPTCHA no formulário-->

	<div class="g-recaptcha" data-sitekey="6LcCpgIkAAAAAJVlxv8E1mKboHuUdiUPzAW2yoXQ"></div>
	
	<input type="email" name="inputEmail"> 
	<button type="submit">Enviar</button>

</form>