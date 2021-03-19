<!DOCTYPE html>
<html lang="en">
  <?php include_once "comp/heder.php";?>
  <!--End of Tawk.to Script-->
  <body>
    <?php include_once 'comp/menu.php';?>
    <!-- Sidebar/menu -->
    <?php include_once 'comp/nav.php'?>
    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" id="myOverlay" onclick="w3_close()" style="cursor:pointer" title="close side menu">
    </div>
    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px;margin-top:43px;">
      <!-- Header -->
      <div class="w3-container">
        <header class="w3-container" style="padding-top:22px">
          <h2>
            Introduccion a CSS
          </h2>
        </header>
        <div class="w3-container w3-padding-large">
          <h3>
            CSS es el lenguaje que usamos para diseñar una página web.
          </h3>
          <h4>
            ¿Qué es CSS?
          </h4>
          <ul class="w3-ul">
            <li class="w3-padding-small">
              CSS son las siglas de Cascading Style Sheets
            </li>
            <li class="w3-padding-small">
              CSS describe cómo se mostrarán los elementos HTML en la pantalla, el papel o en otros medios.
            </li>
            <li class="w3-padding-small">
              CSS describe cómo se mostrarán los elementos HTML en la pantalla, el papel o en otros medios.
            </li>
            <li class="w3-padding-small">
              CSS ahorra mucho trabajo. Puede controlar el diseño de varias páginas web a la vez
            </li>
            <li class="w3-padding-small">
              CSS ahorra mucho trabajo. Puede controlar el diseño de varias páginas web a la vez
            </li>
            <li class="w3-padding-small">
              Las hojas de estilo externas se almacenan en archivos CSS
            </li>
          </ul>
        </div>
        <div class="w3-container w3-padding-large">
          <p>
            Las hojas de estilo en cascada, a las que se hace referencia cariñosamente como CSS, es un lenguaje de diseño simple destinado a simplificar el proceso de hacer que las páginas web sean presentables.
          </p>
          <p>
            CSS maneja la apariencia y el funcionamiento de una página web. Con CSS, puede controlar el color del texto, el estilo de las fuentes, el espacio entre párrafos, el tamaño y la disposición de las columnas, las imágenes o colores de fondo que se utilizan, los diseños de diseño, las variaciones en la visualización para diferentes dispositivos y tamaños de pantalla. así como una variedad de otros efectos.
          </p>
          <p>
            CSS es fácil de aprender y comprender, pero proporciona un control poderoso sobre la presentación de un documento HTML. Más comúnmente, CSS se combina con los lenguajes de marcado HTML o XHTML.
          </p>
          <h3>
            Ventajas de CSS
          </h3>
          <p>
            CSS ahorra tiempo: puede escribir CSS una vez y luego reutilizar la misma hoja en varias páginas HTML. Puede definir un estilo para cada elemento HTML y aplicarlo a tantas páginas web como desee.
          </p>
          <p>
            Las páginas se cargan más rápido: si usa CSS, no es necesario que escriba atributos de etiquetas HTML cada vez. Simplemente escriba una regla CSS de una etiqueta y aplíquela a todas las apariciones de esa etiqueta. Por lo tanto, menos código significa tiempos de descarga más rápidos.
          </p>
          <p>
            Fácil mantenimiento: para realizar un cambio global, simplemente cambie el estilo y todos los elementos de todas las páginas web se actualizarán automáticamente.
          </p>
          <p>
            Estilos superiores a HTML: CSS tiene una gama de atributos mucho más amplia que HTML, por lo que puede darle un aspecto mucho mejor a su página HTML en comparación con los atributos HTML.
          </p>
          <p>
            Compatibilidad con varios dispositivos: las hojas de estilo permiten optimizar el contenido para más de un tipo de dispositivo. Al usar el mismo documento HTML, se pueden presentar diferentes versiones de un sitio web para dispositivos portátiles como PDA y teléfonos celulares o para imprimir.
          </p>
          <p>
            Estándares de web globales: ahora los atributos HTML están en desuso y se recomienda utilizar CSS. Por lo tanto, es una buena idea comenzar a usar CSS en todas las páginas HTML para hacerlas compatibles con futuros navegadores.
          </p>
          <h3>
            ¿Quién crea y mantiene CSS?
          </h3>
          <p>
            CSS se crea y mantiene a través de un grupo de personas dentro del W3C llamado Grupo de Trabajo de CSS. El Grupo de Trabajo CSS crea documentos llamados especificaciones. Cuando una especificación ha sido discutida y ratificada oficialmente por los miembros del W3C, se convierte en una recomendación.
          </p>
          <p>
            Estas especificaciones ratificadas se denominan recomendaciones porque el W3C no tiene control sobre la implementación real del lenguaje. Empresas y organizaciones independientes crean ese software.
          </p>
          <p>
            NOTA: El Consorcio World Wide Web, o W3C, es un grupo que hace recomendaciones sobre cómo funciona Internet y cómo debería evolucionar.
          </p>
          <h3>
            Versiones CSS
          </h3>
          <p>
            El nivel 1 de hojas de estilo en cascada (CSS1) salió de W3C como una recomendación en diciembre de 1996. Esta versión describe el lenguaje CSS así como un modelo de formato visual simple para todas las etiquetas HTML.
          </p>
          <p>
            CSS2 se convirtió en una recomendación del W3C en mayo de 1998 y se basa en CSS1. Esta versión agrega soporte para la hoja de estilo, específicamente la para medios, Ej. Impresoras y dispositivos auditivos, fuentes descarga-bles, posicionamiento de elementos y tablas.
          </p>
        </div>
        <div class="w3-container w3-padding-large">
          <div class="w3-row">
            <div class="w3-container w3-col m1">
              <img alt="Lights" class="w3-image" src="img/all/html5.png"/>
            </div>
            <div class="w3-container w3-col m1">
              <img alt="Lights" class="w3-image" src="img/all/css3.png"/>
            </div>
            <div class="w3-container w3-col m1">
              <img alt="Lights" class="w3-image" src="img/all/js.png"/>
            </div>
          </div>
          <h3>
            ¿Qué es el CSS?
          </h3>
          <p>
            Las hojas de estilo en cascada (CSS, cascading style sheets) permiten crear páginas web atractivas. Pero ¿cómo funcionan realmente? En este artículo explicaremos qué es el CSS con un ejemplo de sintaxis sencillo y describiremos algunos términos clave sobre este lenguaje.
          </p>
          <p>
            <span class="negrita">
              Prerrequisitos:
            </span>
            Conocimientos básicos de informática, tener instalado el software básico, conocimientos básicos de cómo trabajar con archivos y nociones de HTML
          </p>
          <p>
            <span class="negrita">
              Objetivo:
            </span>
            Aprender qué es CSS.
          </p>
          <p>
            En el módulo Introducción al HTML, exponemos qué es el HTML y cómo se usa para definir documentos destinados a leerse en un navegador web. Los títulos se verán más grandes que el texto y los párrafos empezarán en una línea nueva y habrá un espacio entre ellos. Los enlaces aparecerán en un color diferente y subrayados para distinguirlos del resto del texto. Vienen predeterminados por el navegador y, en la práctica, son estilos muy básicos que el navegador aplica al HTML para asegurarse, básicamente, de que sean legibles incluso si el autor de la página no especifica un estilo explícito.
          </p>
          <p>
          </p>
          <p>
          </p>
          <p>
          </p>
          <p>
          </p>
          <p>
          </p>
          <p>
          </p>
          <p>
          </p>
          <p>
          </p>
          <p>
          </p>
          <p>
          </p>
          <p>
          </p>
          <p>
          </p>
          <p>
          </p>
          <p>
          </p>
          <p>
          </p>
          <p>
          </p>
        </div>
        <div class="w3-container w3-padding-large">
          <?php include "comp/pie.php";?>
        </div>
      </div>
    </div>
    <!-- End page content -->
    <?php include "comp/slidebar.php";?>
  </body>
</html>
