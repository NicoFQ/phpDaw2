Alta de información
*******************

Un elemento fundamental de las aplicaciones es la sección de creación y gestión
de información. Si vemos este proceso desde lejos, en un nivel alto de
abstracción tenemos varias fases:

1º.- Presentar al usuario los elementos de UI para gestionar esta información
2º.- Validar los distintos datos: email, nombre usuario, fecha, etc.
3º.- Validación contra la base de datos: id único, fecha válida, etc.
4º.- Creación del elemento.
5º.- Mostrar al usuario la información o los errores

Vamos a distribuir estos elementos
1º -> vista
2º y 3º -> Dos opciones Model o clase especial para formularios
    Ejemplo:
      ModelNoticias
      ModelNoticiasForm

  En el punto de las validaciones existen muchos elementos comunes, podríamos
  construir una juego de campos que supiesen como validarse de tal forma
  que solo tengamos que definir que un campo es de tipo email y tuviera una
  validaciń contra una expresión regular.

4º -> Ocurrirá un save en el modelo
      Con lo que aquí ocurra deberemos meter información en los datos

5º -> La vista deberá soportar mostrar la información de cómo ha ido el nuevo
      alta.


Objeto para manejar Sesiones
******************************

Misma filosofía que en el Config, un diccionario de variables avanzado.
Vamos a utilizar el patrón Singleton para tener acceso a un único objeto
sesión en toda la aplicación.

<?php

class Session {

    private static $instance = null;

    // $ses = Session::getInstance();
    public static function getInstance() {
        if (self::$instance == null) {
          self::$instance = new Session();
        }
        return self::$instance;
    }

    // CONSTRUTOR PRIVADO PARA QUE NADIE LO PUEDA INSTANCIAR
    private function __construct()
    {
        session_start();
    }

    public function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    public function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    public function get($key) {
        if ( isset($_SESSION[$key]) ) {
            return $_SESSION[$key];
        }
        return null;
    }

    public function delete($key) {
        if ( isset($_SESSION[$key]) ) {
            unset($_SESSION[$key]);
        }
    }

    public function destroy() {
        session_destroy();
    }
}

?>



Autentificación y autorización
******************************

Este proceso es complejo y como hemos visto en anteriores temas, intervienen
distintos elementos de la tecnología web.


Por un lado tenemos que tener acceso a la información almacenada de los usuarios
tanto las credenciales usuario y password, como los distintos tokens de acceso.
Este parte de la autentificación tiene que ver con el almacenamiento de
información... ¿Dónde disponemos esto en MVC?

<?php
class ModelControlAcceso
{
    // Elementos privados


    public function isValidUser() {

    }

    public function isValidToken() {

    }
}
?>
