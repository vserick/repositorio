<?php 

// a constante LC_ALL faz com que todas as config. sejam alteradas para o idioma do proximo parametro
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo ucwords(strftime("%d %B %Y"));
?>