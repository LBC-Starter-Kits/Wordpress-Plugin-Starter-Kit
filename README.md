# WordPress Plugin Starter Kit

**WordPress Plugin Starter Kit** es una plantilla de código boilerplate para facilitar el desarrollo de plugins de WordPress utilizando herramientas modernas como Composer, npm/pnpm, y Webpack. Este kit incluye configuraciones preestablecidas para manejar estilos Sass, scripts ES6 y otras funcionalidades esenciales para el desarrollo ágil de plugins.

## Características

-  **Soporte para Composer**: Añade y gestiona dependencias PHP fácilmente.
-  **Sass**: Escribe estilos utilizando Sass y compílalos a CSS.
-  **ES6 Support**: Usa la sintaxis moderna de JavaScript (ES6+) en tu plugin.
-  **npm/pnpm**: Añade dependencias y paquetes JavaScript a tu plugin.
-  **Webpack**: Empaqueta, transpila y optimiza tu código JS, CSS y Sass automáticamente.
-  **Plantilla estructurada**: Estructura de archivos y carpetas lista para empezar.

## Prerrequisitos

Antes de empezar, asegúrate de tener instaladas las siguientes herramientas:

1. **PHP** >= 7.4
2. **Composer**: [Instalar Composer](https://getcomposer.org/download/)
3. **Node.js**: Recomendamos la versión LTS más reciente
   -  Puedes instalar Node.js desde [aquí](https://nodejs.org/).
4. **npm** o **pnpm**:
   -  npm se incluye automáticamente con Node.js. Si prefieres usar pnpm, instálalo globalmente ejecutando:
      ```bash
      npm install -g pnpm
      ```
5. **Webpack**: Ya está configurado en el proyecto, pero es necesario que tengas las herramientas anteriores instaladas.

## Instalación para desarrollo

Sigue estos pasos para configurar el entorno de desarrollo para tu nuevo plugin de WordPress.

1. **Crea el repositorio de proyecto**:

   -  Crea un nuevo repositorio Github a partir de la plantilla y clónalo en tu máquina local:
      ```bash
      git clone https://github.com/tu-usuario/<tu_repositorio_de_proyecto>.git
      cd <tu_repositorio_de_proyecto>
      ```

2. **Instala dependencias PHP**:

   -  Ejecuta el siguiente comando para instalar las dependencias de Composer:
      ```bash
      composer install
      ```

3. **Edita la información del plugin**:
   -  Abre el archivo `package.json` y edita los campos relevantes como `name`, `description`, `author`, etc.
4. **Instala dependencias de Node.js**:

   -  Usa npm o pnpm para instalar las dependencias de JavaScript:
      ```bash
      npm install
      ```

5. **Configura el nombre del plugin**:

   -  Renombra el directorio del plugin y asegúrate de que el nombre del archivo principal coincida con el nombre de tu plugin. Cambia el nombre del archivo `Wordpress-Plugin-Starter-Kit.php` a algo más descriptivo, como `mi-plugin.php`.

6. **Configura Webpack**:

   -  Abre el archivo `webpack.config.js` y edita la configuración según las necesidades de tu proyecto. Asegúrate de cambiar el nombre de los archivos de salida si es necesario.

7. **Compila tus archivos**:

   -  Si deseas compilar tus estilos y scripts, ejecuta:

      ```bash
      npm run build
      ```

   -  Para compilar en modo de desarrollo y observar cambios automáticamente:
      ```bash
      npm run watch
      ```

## Ejemplos de uso

### Añadir funcionalidades con Composer

El kit está preparado para que utilices **Composer** y gestionas tus dependencias PHP. Por ejemplo, si quieres añadir una biblioteca como `monolog/monolog` para el logging, simplemente ejecuta:

```bash
composer require monolog/monolog
```
