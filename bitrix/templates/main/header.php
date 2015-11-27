<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

$tplPath = $APPLICATION->GetTemplatePath();
global $tplPath;
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta charset="utf-8">
    <meta name="viewport" content-width="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <?$APPLICATION->ShowHead();?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?=$tplPath;?>/styles/build/build.css">
    <script type="text/javascript" src="<?=$tplPath;?>/scripts/build/build.js"></script>
  </head>
  <body>
		<?$APPLICATION->ShowPanel();?>
    <header>
      <div class="wrapper"><img src="<?=$tplPath;?>/img/logo.png">
        <nav id="menu">
          <ul>
            <li><a href="#application">Услуги</a></li>
            <li><a href="#termin">Технологии</a></li>
            <li><a href="#sales">Акция</a></li>
            <li><a href="#contacts">Контакты</a></li>
          </ul>
        </nav><a href="#form" class="btn"><span>Отправить заявку</span></a>
      </div>
    </header>
	<!--noindex-->
    <main class="content">
