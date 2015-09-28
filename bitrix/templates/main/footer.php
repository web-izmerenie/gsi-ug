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
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
	(function (d, w, c) {
	(w[c] = w[c] || []).push(function() {
	try {
	w.yaCounter32727385 = new Ya.Metrika({
	id:32727385,
	clickmap:true,
	trackLinks:true,
	accurateTrackBounce:true,
	webvisor:true
	});
	} catch(e) { }
	});

	var n = d.getElementsByTagName("script")[0],
	s = d.createElement("script"),
	f = function () { n.parentNode.insertBefore(s, n); };
	s.type = "text/javascript";
	s.async = true;
	s.src = "https://mc.yandex.ru/metrika/watch.js";

	if (w.opera == "[object Opera]") {
	d.addEventListener("DOMContentLoaded", f, false);
	} else { f(); }
	})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/32727385" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
