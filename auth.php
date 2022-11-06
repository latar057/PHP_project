<?php
// установка cookie-файлов
// параметры функции - название, значение, время хранения, на каких путях 
// будет работать, <можно дописать на каких доменах будет работать>
// setcookie("user", "Да", time() + 3600, "/");
// header("Location: /");

if($_COOKIE["user"] == "Да")
	setcookie("user", "Да", time() - 3600, "/");
else
	setcookie("user", "Да", time() + 3600, "/");

header("Location: /");
