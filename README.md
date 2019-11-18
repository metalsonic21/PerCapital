# Per Capital

## Table of Contents

- [Per Capital](#per-capital)
  - [Table of Contents](#table-of-contents)
  - [ENGLISH](#english)
  - [About The Project](#about-the-project)
    - [Built With](#built-with)
  - [Getting Started](#getting-started)
    - [Prerequisites](#prerequisites)
    - [Installation](#installation)
  - [ESPAÑOL](#espa%c3%91ol)
  - [Acerca del proyecto](#acerca-del-proyecto)
    - [Hecho con](#hecho-con)
  - [Iniciar](#iniciar)
    - [Prerequisitos](#prerequisitos)
    - [Instalación](#instalaci%c3%b3n)


## ENGLISH

<!-- ABOUT THE PROJECT -->
## About The Project

<!--[![Product Name Screen Shot][product-screenshot]](https://example.com)-->

*Smart Finance - The time is now - Invest, move forward*

We offer asset management services, advice and consulting in personal, corporate and institutional finance.

PER CAPITAL offers easy access to Premium investment portfolios in Capital Markets, Real Estate and Venture Capital Projects, previously evaluated and approved by our experts, for institutional and private investors.

In any economy it is important to take actions to protect the asset value, preserve the capital and take advantage of the opportunities offered by the market.

### Built With

* [Laravel 6](https://laravelcollective.com/docs/6.0/html)
* [Vue JS](https://vuejs.org/v2/guide/)
* [Bootstrap 4](https://getbootstrap.com/docs/4.3/getting-started/download/)
* [MySQL](https://dev.mysql.com/downloads/)



<!-- GETTING STARTED -->
## Getting Started

To get a local copy up and running follow these simple steps.

### Prerequisites

1. [PHP 7.3+](https://www.php.net/manual/en/install.windows.php)
2. [Composer](https://getcomposer.org/download/)
3. [MySQL](https://dev.mysql.com/downloads/)
4. [Node JS](https://nodejs.org/en/download/)

### Installation
 
1. Clone the repo
   
```sh
git clone https:://github.com/metalsonic21/PerCapital.git
```
2. Install Composer packages
```sh
composer install
```
3. Install NPM packages
```sh
npm install
```
4. Go to phpMyAdmin in the user accounts tab and create an user with the following:
```sh
Username: FrankHesse
Password: metalsonic21
```

All privileges

5. Go to phpMyAdmin and create a database with the following name:
```sh
PerCapital
```
6. In the root directory create a .env file with the following content
```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:6kdwL6a+DOw17LrAM0kOnDNDqQlzy4lkHLa3/K4zw/4=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=PerCapital
DB_USERNAME=FrankHesse
DB_PASSWORD=metalsonic21

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```

7. Run the following commands:
```sh
php artisan migrate
php artisan serve
```

## ESPAÑOL


<!-- ABOUT THE PROJECT -->
## Acerca del proyecto

<!--[![Product Name Screen Shot][product-screenshot]](https://example.com)-->

*Finanzas inteligentes – El momento es ahora – Invierte, avanza*

Ofrecemos servicios de administración de E.I.C, asesoría y consultoría en finanzas personales, corporativas e institucionales.

PER CAPITAL ofrece fácil acceso a oportunidades de inversión Premium en el mercado de Capitales,Inmobiliario y de Capital de Riesgo, previamente evaluadas y aprobadas por nuestros expertos, para inversionistas institucionales y público en general.

En cualquier economia es importante tomar acciones para proteger el patrimonio, preservar el capital y aprovechar las oportunidades que brinda el mercado.

### Hecho con

* [Laravel 6](https://laravelcollective.com/docs/6.0/html)
* [Vue JS](https://vuejs.org/v2/guide/)
* [Bootstrap 4](https://getbootstrap.com/docs/4.3/getting-started/download/)
* [MySQL](https://dev.mysql.com/downloads/)



<!-- GETTING STARTED -->
## Iniciar

Para obtener una copia local sigue estos pasos:

### Prerequisitos

1. [PHP 7.3+](https://www.php.net/manual/en/install.windows.php)
2. [Composer](https://getcomposer.org/download/)
3. [MySQL](https://dev.mysql.com/downloads/)
4. [Node JS](https://nodejs.org/en/download/)

### Instalación
 
1. Clonar repositorio
   
```sh
git clone https:://github.com/metalsonic21/PerCapital.git
```
2. Instalar paquetes de composer
```sh
composer install
```
3. Instalar paquetes de npm
```sh
npm install
```
4. En phpmyadmin selecciona la pestaña cuentas de usuario, crear una cuenta con las siguientes credenciales
```sh
Username: FrankHesse
Password: metalsonic21
```
Todos los privilegios.

5. En phpmyadmin crea una base de datos con el siguiente nombre:
```sh
PerCapital
```

6. En el directorio padre crear un archivo .env con el siguiente contenido
```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:6kdwL6a+DOw17LrAM0kOnDNDqQlzy4lkHLa3/K4zw/4=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=PerCapital
DB_USERNAME=FrankHesse
DB_PASSWORD=metalsonic21

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```
7. Ejecuta los siguientes comandos en consola:
```sh
php artisan migrate
php artisan serve
```
