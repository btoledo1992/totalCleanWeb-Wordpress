<div align="center">

# 🧼 totalclean.com.ar

### Tema de WordPress a medida para un servicio de limpieza y mantenimiento profesional en Ushuaia, Tierra del Fuego

[![WordPress](https://img.shields.io/badge/WordPress-7.0-21759B?logo=wordpress&logoColor=white)](https://wordpress.org)
[![PHP](https://img.shields.io/badge/PHP-8.2%2B-777BB4?logo=php&logoColor=white)](https://php.net)
[![CSS3](https://img.shields.io/badge/CSS-Custom%20Properties-1572B6?logo=css3&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/CSS)
[![JavaScript](https://img.shields.io/badge/JavaScript-Vanilla-F7DF1E?logo=javascript&logoColor=black)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
[![License](https://img.shields.io/badge/Uso-Privado-lightgrey)]()

</div>

---

## 📸 Capturas

<div align="center">

**Inicio — Desktop**
<br>
<img width="1581" height="678" alt="image" src="https://github.com/user-attachments/assets/4cf4a89a-2fc9-4e6f-a69c-1092344e0ce4" />


<br><br>

| Mobile | Servicios |
|:---:|:---:|
| <img width="286" height="493" alt="image" src="https://github.com/user-attachments/assets/e3dde9d7-b0de-4302-8dff-0d3227d11743" /> | <img width="1578" height="732" alt="image" src="https://github.com/user-attachments/assets/f9ac8f1e-2d21-4ede-880b-153a5cc866ec" /> |

</div>

---

## ✨ Sobre el proyecto

**Total Clean** es un tema de WordPress construido **100% desde cero**, sin page builders (Elementor, Divi, etc.) ni frameworks de terceros — todo el maquetado, estilos e interactividad viven directo en PHP, CSS y JavaScript vanilla.

El sitio cuenta con 4 secciones principales (Inicio, Servicios, Quienes Somos, Contacto), diseño totalmente responsive, un sistema de diseño con variables CSS basado en una paleta de marca oficial, y un formulario de contacto real con protección anti-spam.

---

## 🚀 Características

- 🎨 **Diseño 100% custom**, con sistema de variables CSS para colores y tipografía
- 📱 **Totalmente responsive**, con menú hamburguesa propio en mobile
- 🖼️ **Carrusel de imágenes** en el hero, con autoplay y navegación táctil
- 🔄 **Comparador antes/después** interactivo (drag para comparar)
- ❓ **FAQ tipo acordeón**
- 🖱️ **Galería de trabajos** con scroll horizontal tipo carrusel
- 📊 **Tabla comparativa de servicios**
- 📬 **Formulario de contacto funcional** (Contact Form 7) con:
  - Autorespondedor de confirmación al cliente
  - Protección anti-spam con **Google reCAPTCHA v3** (invisible)
- 🗺️ **Mapa embebido** de Google Maps en la página de Contacto
- ⚡ **Imágenes optimizadas** (JPG comprimido, sin perder calidad visible)
- 🧩 Templates de página independientes por sección (`front-page.php`, `page-servicios.php`, `page-quienes-somos.php`, `page-contacto.php`)

---

## 🛠️ Stack tecnológico

| Capa | Tecnología |
|---|---|
| CMS | WordPress 7.0 |
| Backend | PHP 8.2+ (nativo, sin frameworks) |
| Estilos | CSS3 puro con Custom Properties (`:root`) |
| Interactividad | JavaScript vanilla (sin jQuery ni librerías) |
| Tipografía | [Manrope](https://fonts.google.com/specimen/Manrope) (Google Fonts) |
| Formularios | Contact Form 7 |
| Anti-spam | Google reCAPTCHA v3 |
| Entorno local | XAMPP (Apache + MySQL + PHP) |
| Editor | Visual Studio Code |

---

## 📁 Estructura del proyecto

```
totalclean/
├── style.css                  # Estilos + cabecera del tema
├── functions.php              # Menús, carga de assets
├── header.php                 # Ticker, logo, menú, íconos sociales
├── footer.php                 # Footer de 4 columnas + firma
├── front-page.php             # Página de Inicio
├── page-servicios.php         # Página Servicios
├── page-quienes-somos.php     # Página Quienes Somos
├── page-contacto.php          # Página Contacto (formulario + mapa)
├── page.php                   # Template genérico de respaldo
├── index.php                  # Requerido por WordPress
├── assets/
│   ├── js/main.js             # Todo el JS del tema
│   └── img/                   # Imágenes del sitio
└── DOCUMENTACION.txt          # Guía técnica interna completa
```

---

## 🎨 Paleta de colores

Sistema de diseño basado en variables CSS, siguiendo la guía de marca oficial:

| Variable | Color | Uso |
|---|:---:|---|
| `--navy` | ![#113F67](https://placehold.co/15x15/113F67/113F67.png) `#113F67` | Fondo principal, headers, footer |
| `--corp` | ![#34699A](https://placehold.co/15x15/34699A/34699A.png) `#34699A` | Hovers, botones secundarios |
| `--ice` | ![#58A0C8](https://placehold.co/15x15/58A0C8/58A0C8.png) `#58A0C8` | Acentos, íconos, hovers |
| `--mint` | ![#4FB7B3](https://placehold.co/15x15/4FB7B3/4FB7B3.png) `#4FB7B3` | Checks, detalles de mantenimiento |
| `--gold` | ![#FDF5AA](https://placehold.co/15x15/FDF5AA/FDF5AA.png) `#FDF5AA` | Acento en CTAs puntuales |
| `--ink` | ![#3B3B3B](https://placehold.co/15x15/3B3B3B/3B3B3B.png) `#3B3B3B` | Texto principal |

---

## ⚙️ Instalación en local

<details>
<summary>Click para ver el paso a paso completo (XAMPP)</summary>

<br>

1. Instalar [XAMPP](https://www.apachefriends.org) e iniciar Apache + MySQL.
2. Descargar [WordPress](https://wordpress.org) y descomprimirlo en `htdocs/tu-carpeta/`.
3. Crear una base de datos en `phpMyAdmin`.
4. Correr el instalador de WordPress desde el navegador.
5. Copiar la carpeta `totalclean/` dentro de `wp-content/themes/`.
6. Activar el tema desde **Apariencia → Temas**.
7. Crear las páginas **Inicio**, **Servicios**, **Quienes Somos** y **Contacto**.
8. Configurar **Inicio** como página estática de portada (Ajustes → Lectura).
9. Cambiar los enlaces permanentes a "Nombre de la entrada".
10. Crear el menú principal en **Apariencia → Menús**.

Guía completa y detallada en [`DOCUMENTACION.txt`](./DOCUMENTACION.txt).

</details>

---

## 📬 Formulario de contacto

El formulario funciona con **Contact Form 7**, con dos plantillas de correo (notificación interna + autorespondedor al cliente) y protección anti-spam mediante **Google reCAPTCHA v3**, invisible para el usuario.

> 🔒 Ninguna credencial, API key o dato sensible está hardcodeado en el código — toda la configuración vive en la base de datos de WordPress, gestionada desde el panel de administración.

---

## 👨‍💻 Autor

<div align="center">

```
btoledo@ush:~$ _
```
**desarrollo & infraestructura**

</div>

---

<div align="center">
<sub>Proyecto de uso privado — desarrollado a medida para Total Clean.</sub>
</div>
