<?php
// cookie
setcookie('user', 'David', time()+3600);
setcookie('email', 'email@email.com', time()+3600);
setcookie('ultima_pesquisa', 'tenis adidas', time()+3600);

var_dump($_COOKIE);