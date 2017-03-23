# Twigaum
Repositório contendo um código simples que integra o League Route com o Twig

#Instalação
Modificar o arquivo .htaccess
```sh
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteBase /estudos/Twig

    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^ index.php [QSA,L]
</IfModule>
```

Modificar o **RewriteBase**  para o caminho do seu projeto
É necessário realizar a mesma modificação no arquivo index.php
```php

$uri = '/estudos/Twig';
$_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], (strlen($uri)));

```
