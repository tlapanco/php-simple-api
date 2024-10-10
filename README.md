PHP - Consumo de API

![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)

Práctica de PHP para el consumo de una API que devuelve la siguiente producción de Marvel, usando un sencillo motor de plantillas con PHP puro.

➡️ Ver [Demo](https://tl-developer-site.infinityfreeapp.com/next-marvel-film/)

## Requisitos

**PHP:** [v8](https://www.php.net/downloads)

## Para empezar

Verifica la versión de `php` que tengas, esta debe de ser v8 o superior. Puedes hacerlo abriendo una terminal y ejecutar el siguiente comando:

```bash
#Muestra la versión instalada de PHP
php -v
```
Verás algo similar a:

```bash
 > php -v #Comando ejecutado
PHP 8.2.12 (cli) (built: Oct 24 2023 21:15:15) (ZTS Visual C++ 2019 x64)
Copyright (c) The PHP Group
Zend Engine v4.2.12, Copyright (c) Zend Technologies

```

El número que aparece después de la palabra PHP indica el número de la versión, en el caso anterior es `8.2.12`. Sí el número al inicio sea 7 o menor, deberás actualizar PHP para continuar.

Ahora para poder iniciar el proyecto deberás desde una terminal ubicarte dentro de la carpeta del proyecto:

```bash
#En este caso el proyecto está dentro de la carpeta desktop
c:\users\admin\desktop\php-simple-api>
```

Después, ejecutarás el siguiente comando:

```bash
#Ejecuta un servidor web incorporado 
 php -S localhost:3000
```

El número `3000` en el comando anterior, es el puerto por el cual podremos visualizar nuestro proyecto. Puedes cambiarlo en caso de que este ocupado por otro servicio y tener un error o a tu preferencia.

Un posible error que puedas cometer, es el escribir `-s` en minúscula, lo cual es muy diferente a `-S` en mayúscula para PHP. Verifica la escritura del comando y prueba una vez más.

Finalmente, abre el navegador de tu preferencia y escribe en la barra de direcciones `localhost:3000`, presiona enter.

Verás algo similar a lo siguiente:

![Demo API](https://github.com/user-attachments/assets/8028d4b3-47fa-4541-bb62-9699c90b21f7)

## Enlaces de interés

URL de la API: [When is the next MCU film](https://whenisthenextmcufilm.com/api)

