# proyecto_intermodular
One-Page Web

Temática: Banco digital estilo Revolut
Objetivo: una web de un banco online que además de sus productos financieros ofrece herramientas de cálculo y seguimiento.

Landing page con diversas secciones:
    Header con acceso a diferentes secciones y login.
    Main sección con un ejemplo del producto y enlace a la app móvil.
    Warning de indicador de riesgo 1/6.
    Más información, premios obtenidos.
    Ejemplo de servicio 1º.
    Ejemplo de servicio 2º.
    Ejemplo de beneficios 1º.
    Ejemplo de beneficios 2º.
    Seguridad y letra pequeña.
    Planes (desde Gratis hasta Ultra Premium).
    Enlaces de utilidad divididos por secciones.
    Footer con iconos a RRSS, política de privacidad, reclamaciones, cookies….

Posibilidades de extender el proyecto:
    Calculadora de Gastos.
    Calculadora de Ingresos.
    Calculadora de préstamos.
    Comparadora de cuentas bancarias.
    Timeline de ingresos-gastos, previsiones con gráficos.


📊 Analisis del proyecto en su estado actual según Github Copilot:
 Análisis del Proyecto
He realizado un análisis completo de tu proyecto. Aquí está el resumen:

📋 Descripción General
Nombre: proyecto_intermodular
Tipo: One-Page Web (Landing Page)
Temática: Banco digital estilo Revolut
Objetivo: Presentar productos financieros con herramientas de cálculo y seguimiento de ingresos-gastos.

🏗️ Arquitectura del Proyecto
Frontend: HTML + CSS + JavaScript (Responsive)
Backend: PHP con MySQL (PDO)
Base de Datos: MySQL (base de datos 'pi')

📁 Estructura de Carpetas
Carpeta	Contenido
public/	Archivos públicos - Landing page y formularios
assets/	Recursos (CSS, imágenes/media, futuros JS)
config/	Configuración de base de datos
includes/	Código reutilizable (actualmente vacío)

📄 Archivos Principales
Frontend:
Archivo	Propósito
index.html	Landing page principal con hero, secciones de servicios, planes y footer
HeroAnim.js	Script de animación de hero interactivo con scroll controlado
styles.css	Estilos globales (diseño responsive, componentes base)

Backend:
Archivo	Propósito
db.php	Conexión a BD MySQL usando PDO
index.php	Página que muestra galería de fotos desde BD
insertar.php	Formulario para insertar nuevas fotos en la BD


🎨 Características Actuales
✅ Landing Page Completa:

Header con menú de navegación y botones de login/registro
Hero section con animación interactiva de scroll
Indicador de riesgo
Información sobre el banco (premios, usuarios)
4 secciones de ejemplo de servicios/beneficios
Footer con planes (Estándar, Premium, Ultra Premium)
Múltiples enlaces de utilidad organizados por secciones

✅ Interactividad:

Animación hero: el scroll controla una imagen que se desplaza/amplía
Bloqueo de scroll durante animación
Responde al movimiento de la rueda del ratón
✅ Base de Datos:

Tabla fotos con: id, titulo, nombre_archivo, descripcion, fecha_subida
Operaciones: INSERT y SELECT

🔑 Estado del Código
Fortalezas:

Estructura clara y modular
Uso de PDO para mayor seguridad (prepared statements)
Responsive design
Código HTML semántico
Áreas a Mejorar:

⚠️ CSS incompleto (falta sección .hero-content-* para hero)
⚠️ Rutas inconsistentes en imágenes (mezcla ../assets/media/ con ../assets\media\)
⚠️ Folder includes vacío (oportunidad para componentes reutilizables)
⚠️ Faltan estilos media queries para mobile
⚠️ JavaScript hero sin fallback si CSS falta

📈 Posibilidades de Expansión (según README)
Calculadora de Gastos
Calculadora de Ingresos
Calculadora de Préstamos
Comparadora de Cuentas Bancarias
Timeline de ingresos/gastos con gráficos

🛠️ Recomendaciones Inmediatas
Completar CSS del hero (estilos .hero-*)
Normalizar rutas de imágenes (usar / en lugar de \)
Agregar validación frontend en formularios
Implementar componentes en la carpeta includes
Organizar JavaScript en módulos
Agregar manejo de errores más robusto en PHP