# Guion para video demo - Proyecto Intermodular

Duracion maxima recomendada: 4 minutos y 30 segundos, dejando margen hasta los 5 minutos.

## 0:00 - 0:25 | Presentacion

Hola, soy [tu nombre] y en este video voy a presentar mi proyecto intermodular: una pagina web one-page inspirada en un banco digital estilo Revolut.

El objetivo del proyecto es mostrar una web financiera moderna, con una landing page completa, secciones informativas, planes de suscripcion y una estructura preparada para cargar contenido dinamico desde base de datos.

## 0:25 - 1:10 | Vista general de la web

En primer lugar, enseño la pagina principal.

La web esta organizada como una landing page. En la parte superior aparece el header con la navegacion principal y los accesos de usuario. Despues se muestra una seccion hero con imagenes, textos principales y llamadas a la accion.

Al hacer scroll, la pagina presenta diferentes bloques de contenido: referencias o premios, tarjetas, ahorro, seguridad, inversiones, informacion final, planes y enlaces de utilidad en el footer.

La intencion visual es transmitir una experiencia cercana a una aplicacion bancaria digital: clara, moderna y centrada en productos financieros.

## 1:10 - 1:55 | Interactividad y experiencia de usuario

Una parte importante del proyecto es la interactividad.

En el archivo `animations.js` se controla la animacion inicial del hero. Cuando el usuario hace scroll, las imagenes y grupos de texto cambian de posicion y opacidad para crear una transicion mas dinamica.

Tambien existe el archivo `sections.js`, que permite cambiar contenido dentro de algunas secciones mediante botones tipo pestaña. El script lee los datos asociados a cada seccion, localiza el titulo, texto, imagen y boton correspondientes, y actualiza la interfaz sin recargar la pagina.

Esto permite que la web no sea una pagina estatica simple, sino que tenga comportamiento dinamico en el navegador.

## 1:55 - 2:45 | Estructura tecnica del proyecto

A nivel tecnico, el proyecto esta organizado en varias carpetas.

La carpeta `public` contiene la entrada principal de la web, especialmente `index.php`, junto con los scripts JavaScript.

La carpeta `assets` contiene los estilos CSS y los recursos multimedia, como imagenes del hero, tarjetas, ahorro, seguridad e inversiones.

La carpeta `includes` contiene las secciones reutilizables de la pagina, por ejemplo `section-hero.php`, `section-savings.php`, `section-safety.php` y `section-plans.php`.

Dentro de `includes/components` hay funciones reutilizables para pintar elementos comunes como titulos, textos, imagenes, botones, enlaces, planes y controladores.

Por ultimo, la carpeta `config` contiene la conexion a base de datos, consultas y archivos JSON que definen el contenido de las secciones.

## 2:45 - 3:35 | Backend y contenido dinamico

El backend esta desarrollado con PHP y MySQL.

En `config/db.php` se configura la conexion con PDO a una base de datos MySQL llamada `pi`. PDO permite trabajar con la base de datos de una forma mas segura y estructurada.

En `config/queries.php` se recuperan las secciones dinamicas desde la tabla `secciones_dinamicas`, ordenadas por el campo `orden`. Cada seccion contiene un identificador HTML y un bloque JSON que se decodifica en PHP.

De esta forma, las secciones no dependen solo de contenido escrito directamente en el HTML, sino que pueden cargarse desde datos externos. Esto facilita ampliar la web o modificar contenido sin cambiar toda la estructura de la pagina.

## 3:35 - 4:15 | Diseño, responsividad y escalabilidad

En la parte de estilos, el CSS esta dividido en varios archivos para separar responsabilidades: variables, componentes, layouts generales, hero, enlaces, animaciones, media queries, utilidades y normalizacion.

Esta separacion ayuda a mantener el proyecto mas organizado.

El proyecto tambien esta pensado para crecer. Algunas mejoras futuras posibles son una calculadora de gastos, una calculadora de ingresos, una calculadora de prestamos, una comparadora de cuentas bancarias o una linea temporal de ingresos y gastos con graficos.

## 4:15 - 4:30 | Cierre

En resumen, este proyecto combina una landing page financiera con PHP, MySQL, contenido dinamico, componentes reutilizables, CSS modular y JavaScript para animaciones e interaccion.

Con esto queda presentada la funcionalidad principal, la estructura tecnica y las posibilidades de ampliacion del proyecto.

Gracias por ver la demo.

## Checklist antes de grabar

- Abrir la web en el navegador con XAMPP iniciado.
- Tener preparada la carpeta del proyecto para enseñar la estructura.
- Mostrar primero la experiencia visual y despues el codigo.
- No dedicar demasiado tiempo a leer codigo: explicar solo los archivos clave.
- Grabar a pantalla completa o con zoom suficiente para que se lea.
- Duracion objetivo: entre 4:00 y 4:30.
