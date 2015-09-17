<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
</main>
<footer>
	<div class="wrapper">
		<div class="copy">© ГидроСтройИзоляция, 2015-2016 </div>
		<div class="develop"><a href="http://web-izmerenie.ru">Сделано в</a></div>
	</div>
</footer>
<div class="overlay"></div>
<div id="form" class="animated">
	<form method="POST" action="ajax/mail.php">
		<label>Ваше имя:</label>
		<input type="text" name="name" maxlength="45" required>
		<label>Телефон или e-mail:</label>
		<input type="text" name="tel" maxlength="45" required>
		<label>Опишите вашу задачу:</label>
		<textarea type="text" name="message" maxlength="300" required></textarea>
		<div class="error">Сообщение не отправлено. Пожалуйста, заполните все поля».</div>
		<a href="#submit" class="btn"><span>Отправить заявку</span></a>
	</form>
	<div class="sucsess">Спасибо за ваше обращение.<br>
		Мы свяжемся с вами в ближайшее время.
	</div>
</div>
</body>
</html>
