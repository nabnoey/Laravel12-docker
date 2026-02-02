<?php
'smtp' => [
'transport' => 'smtp',
'url' => env('MAIL_URL'),
'host' => env('MAIL_HOST', 'mailhog'),
'port' => env('MAIL_PORT', 1025),
'encryption' => env('MAIL_ENCRYPTION', 'tls'),
'username' => env('MAIL_USERNAME'),
'password' => env('MAIL_PASSWORD'),
'timeout' => null,
'local_domain' => env('MAIL_EHLO_DOMAIN', parse_url(env('APP_URL', 'http://localhost'), PHP_URL_HOST)),
],