# OLibrary

- Antoine Chiny (Chef de projet)
- Arnaud Lafon
- Thomas Bichon
- Paul-Michel Garzaro

OLibrary est un projet réaliser dans le cadre de la premiére année d'étude à Ingésup Bordeaux.
Nous devions réaliser un gestionnaire de fond documentaire en utilisant php.

## Pré-réquis

- Laravel     5.4
- PHP       7.1.5
- Composer  1.4.1
- Un serveur MySQL

## Installation

```
git clone https://github.com/TonyChG/OLibrary
cd OLibrary/website
composer update
```

Vous devez crée un .env du type en changeant les champs correspondant à votre base de donnée SQL :
```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

BROADCAST_DRIVER=log
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
```

Ensuite tapez les commandes suivante :
```
php artisan migrate:refresh --seed
php artisan serv
```
- Le serveur est lancée sur http://127.0.0.1:8000
- Compte de Test : 
```
Email : admin@admin.fr
Mot de passe : password
```
