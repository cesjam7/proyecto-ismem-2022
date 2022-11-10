# Proyecto ISMEM 2022

Un proyecto laravel que se sube a github oculta algunos
archivos y carpetas por dos motivos:

- Por que pesan demasiado (vendor y node_modules)
- Por seguridad (.env)

## Qué son la carpeta VENDOR y NODE_MODULES

Los proyectos que se crean a partir de frameworks (como laravel) necesitan muchas librerias para funcionar. Estas librerias si son PHP se guardan en la carpeta "vendor" y sin son de NodeJs se guardan en "node_modules".

El peso de esas carpetas es inmenso y por ello no se acostumbra pushearlo. La mejor forma de compartir esas librerias a otro programador es enviandole su archivo de instalación.

En el caso de PHP es el composer.json que SI SE PUSHEA ya que ahi esta escrito todas las librerias necesarias. Una vez clonado el proyecto para consguir esas librerias, sólo necesitas ejecutar el siguiente comando: "composer install".

Y en el caso de NodeJS el archivo de instalación es "package.json" que se instala con el siguiente comando: "npm install".

## Levantar el proyecto laravel

Una vez hayamos instalado las dependencias en vendor y node_modules nos faltaría instalar la base de datos. En este mismo repositorio se ha guardado el archivo "base-de-datos-sistema.sql" el que tendrán que descargar e IMPORTAR en su base de datos local llamado "sistemas". Es necesario, tener prendido el XAMPP con apache y mysql.

Ya con la base de datos instalada. Solo nos queda levantar el proyecto laravel y las dependencias de NodeJS. Para ello abriremos DOS TERMINALES y ejecutaremos cada codigo en una terminal diferente:

    - php artisan serve
    - npm run dev

Si se hizo todo correctamente, abrimos el navegador y entramos a la dirección: localhost:8000