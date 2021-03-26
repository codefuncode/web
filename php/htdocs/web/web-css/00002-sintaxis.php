<!DOCTYPE html>
<html lang="en">
  <?php include_once "comp/heder.php";?>
  <!--End of Tawk.to Script-->
  <body>
    <style>
      .acordeon_item {
        padding-bottom: 15px;
        }
        .pointer{
        padding: 13px !important;
        }
        .acordeon .w3-container h4 {
        font-weight: bold;
        margin-top: 40px ;
        /*color: white !important ;*/
        /*text-shadow: 2px 2px 4px #68DF15; */
        /*text-shadow: 2px 2px 4px #68DF15;*/

        }
        .acordeon .w3-container li {
        margin-bottom: 10px;
        }
        .en_desuso {
        /*text-decoration:line-through;*/
        /*color:  #ff8c66;*/
           /*text-shadow: 1px 1px black;*/
        }      .experimental {
        /*text-decoration:line-through;*/
        /*color: #4da6ff;*/
         /*text-shadow: 1px 1px black;*/
        }

        .depercated_icon{
        width: 20px; height: 20px;
        }
        .negrita{
          font-weight: bold;
        }
    </style>
    <?php include_once 'comp/menu.php';?>
    <!-- Sidebar/menu -->
    <?php include_once 'comp/nav.php'?>
    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" id="myOverlay" onclick="w3_close()" style="cursor:pointer" title="close side menu">
    </div>
    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px;margin-top:43px;">
      <!-- Header -->
      <div class="w3-container ">
        <header class="w3-container" style="padding-top:22px">
          <h1 class="w3-serif">
            <i>
              Sintaxis de CSS
            </i>
          </h1>
        </header>
        <div class="w3-container ">
          <h4 class="w3-serif">
            <i>
              Como escribir CSS
            </i>
          </h4>
          <p>
            CSS tiene su propia sintaxis  y en este tutorial veremos la manera correcta de escribirlo. Usaremos referencias a la documentación de MDN  ya  que esta es la mas completa de la Internet. En algunos casos, por experiencia no esta la sección que explica alguna que ora propiedad, concepto u otro termino. En ese caso haré una investigación y colocare en esta pagina todas las investigaciones referentes a el tema
          </p>
          <h4 class="w3-serif">
            <i>
              Lo que aprenderás sobre la sintaxis de CSS
            </i>
          </h4>
          <p>
            Pulsa en los elementos para ver su definición.
          </p>
          <div class="w3-container acordeon" style="margin-top: 20px;">
            <div class="acordeon_item ">
              <div class="w3-block w3-left-align w3-card-4 w3-padding pointer btn_sintaxis_css ">
                Sintaxis CSS
              </div>
              <div class="w3-container w3-hide">
                <h4>
                  Sintaxis CSS
                </h4>
                <p>
                  El objetivo básico del lenguaje de hojas de estilo en cascada (CSS) es permitir que un motor de navegador pinte elementos de la página con características específicas, como colores, posicionamiento o decoraciones. La sintaxis CSS refleja este objetivo y sus bloques de construcción básicos son:
                </p>
                <p>
                  La propiedad que es un identificador, es decir, un nombre legible por humanos, que define qué característica se considera. El valor que describe cómo el motor debe manejar la característica. Cada propiedad tiene un conjunto de valores válidos, definidos por una gramática formal, así como un significado semántico, implementado por el motor del navegador.
                </p>
                <div class="w3-content" style="max-width:800px">
                  <img class="w3-image w3-card w3-leftbar" src="img/all/cssdeclaracion.png" style="width: 100%; height: 100%; margin-top: 50px; margin-bottom: 50px; padding: 50px; border-color: #9CDB35 !important ;"/>
                </div>
                <h4>
                  Declaraciones CSS
                </h4>
                <p>
                  Establecer las propiedades de CSS en valores específicos es la función principal del lenguaje CSS. Un par de propiedad y valor se llama declaración, y cualquier motor de CSS calcula qué declaraciones se aplican a cada elemento de una página para diseñarlo adecuadamente y darle estilo. Tanto las propiedades como los valores no distinguen entre mayúsculas y minúsculas de forma predeterminada en CSS. El par está separado por dos puntos, ':', y los espacios en blanco antes, entre y después de las propiedades y valores, pero no necesariamente dentro, se ignoran.
                </p>
                <div class="w3-content" style="max-width:800px">
                  <img class="w3-image w3-card w3-leftbar" src="https://developer.mozilla.org/en-US/docs/Web/CSS/Syntax/css_syntax_-_declaration.png" style="width: 100%; height: 50%; margin-top: 50px; margin-bottom: 50px;  padding: 50px; border-color: #9CDB35 !important ;"/>
                </div>
                <h4>
                  Bloques de declaración CSS
                </h4>
                <p>
                  Las declaraciones se agrupan en bloques, es decir en una estructura delimitada por una llave de apertura, '{'  y una de cierre, '}'. A veces, los bloques se pueden anidar, por lo que las llaves de apertura y cierre deben coincidir.
                </p>
                <p>
                  Estos bloques se denominan naturalmente bloques de declaración y las declaraciones dentro de ellos están separadas por un punto y coma, ';' (U + 003B SEMICOLON). Un bloque de declaración puede estar vacío, que contiene una declaración nula. Los espacios en blanco alrededor de las declaraciones se ignoran. La última declaración de un bloque no necesita terminar con un punto y coma, aunque a menudo se considera un buen estilo hacerlo, ya que evita que se olvide de agregarlo al extender el bloque con otra declaración. Un bloque de declaración CSS se visualiza en el diagrama siguiente.
                </p>
                <div class="w3-content" style="max-width:800px">
                  <img class="w3-image w3-card w3-leftbar" src="https://developer.mozilla.org/en-US/docs/Web/CSS/Syntax/css_syntax_-_block.png" style="width: 100%; height: 50%; margin-top: 50px; margin-bottom: 50px; padding: 50px; border-color: #9CDB35 !important ;"/>
                </div>
                <h4>
                  Conjuntos de reglas CSS
                </h4>
                <p>
                  Si las hojas de estilo solo pudieran aplicar una declaración a cada elemento de una página web, serían bastante inútiles. El objetivo real es aplicar diferentes declaraciones a diferentes partes del documento.
                </p>
                <p>
                  CSS permite esto asociando condiciones con bloques de declaraciones. Cada bloque de declaración (válido) está precedido por uno o más selectores separados por comas, que son condiciones que seleccionan algunos elementos de la página. Un grupo selector y un bloque de declaraciones asociado, juntos, se denominan conjunto de reglas o, a menudo, regla.
                </p>
                <p>
                  Un conjunto de reglas CSS (o regla) se visualiza en el diagrama a continuación.
                </p>
                <p>
                  Como un elemento de la página puede coincidir con varios selectores y, por lo tanto, con varias reglas que potencialmente contienen una propiedad determinada varias veces, con valores diferentes, el estándar CSS define cuál tiene prioridad sobre el otro y debe aplicarse: esto se llama el algoritmo en cascada.
                </p>
                <div class="w3-content" style="max-width:800px">
                  <img class="w3-image w3-card w3-leftbar" src="https://developer.mozilla.org/en-US/docs/Web/CSS/Syntax/declaration-block.png" style="width: 100%; height: 50%; margin-top: 50px; margin-bottom: 50px; padding: 50px; border-color: #9CDB35 !important ;"/>
                </div>
                <h4>
                  Declaraciones CSS
                </h4>
                <p>
                  Los conjuntos de reglas son los bloques de construcción principales de una hoja de estilo, que a menudo consta solo de una gran lista de ellos. Pero hay otra información que un autor web desea transmitir en la hoja de estilo, como el conjunto de caracteres, otras hojas de estilo externas para importar, las descripciones de la fuente o el contador de listas y muchos más. Utilizará otros tipos específicos de declaraciones para hacer eso.
                </p>
                <p>
                  Una declaración es un bloque de construcción que comienza con cualquier carácter sin espacio y termina en la primera llave de cierre o punto y coma (fuera de una cadena, sin escape y no incluido en otro par {}, () o []).
                </p>
                <div class="w3-content" style="max-width:800px">
                  <img class="w3-image w3-card w3-leftbar" src="https://developer.mozilla.org/en-US/docs/Web/CSS/Syntax/css_syntax_-_statements_venn_diag.png" style="width: 100%; height: 50%; margin-top: 50px; margin-bottom: 50px; padding: 50px; border-color: #9CDB35 !important ;"/>
                </div>
                <h5>
                  Hay dos tipos de declaraciones:
                </h5>
                <ul>
                  <li>
                    Conjuntos de reglas (o reglas) que, como se ve, asocian una colección de declaraciones CSS a una condición descrita por un selector.
                  </li>
                  <li>
                    Reglas de arroba que comienzan con un signo de arroba, '@' (U + 0040 COMMERCIAL AT), seguidas de un identificador y luego continúan hasta el final de la declaración, es decir, hasta el siguiente punto y coma (;) fuera de un bloque, o el final del siguiente bloque. Cada tipo de reglas at, definidas por el identificador, puede tener su propia sintaxis interna y, por supuesto, semántica. Se utilizan para transmitir información de metadatos (como @charset o @import), información condicional (como @media o @document) o información descriptiva (como @ font-face).
                  </li>
                </ul>
                <p>
                  Cualquier declaración que no sea un conjunto de reglas o una regla at no es válida y se ignora.
                </p>
                <p>
                  Hay otro grupo de declaraciones: las declaraciones anidadas. Estas son declaraciones que se pueden usar en un subconjunto específico de reglas at: las reglas de grupo condicional. Estas declaraciones solo se aplican si se cumple una condición específica: el contenido de @media at-rule se aplica solo si el dispositivo en el que se ejecuta el navegador coincide con la condición expresada; el contenido de @document at-rule se aplica solo si la página actual cumple algunas condiciones, y así sucesivamente. En CSS1 y CSS2.1, solo se pueden usar conjuntos de reglas dentro de las reglas de grupo condicionales. Eso fue muy restrictivo y esta restricción se eliminó en CSS Conditionals Level 3. Ahora, aunque todavía es experimental y no es compatible con todos los navegadores, las reglas de grupo condicionales pueden contener una gama más amplia de contenido: conjuntos de reglas, pero también algunas, pero no todas, reglas at .
                </p>
                <!--   <p style="margin-bottom:30px;">
                </p> -->
              </div>
            </div>
            <div class="acordeon_item ">
              <div class="w3-block w3-left-align w3-card-4 w3-padding pointer btn_sintaxis_css">
                Regla CSS
              </div>
              <div class="w3-container w3-hide">
                <h4>
                  Normas
                </h4>
                <p>
                  Las reglas at son declaraciones CSS que instruyen a CSS sobre cómo comportarse. Comienzan con un signo arroba, '@' , seguido de un identificador e incluye todo hasta el siguiente punto y coma, ';' , o el siguiente bloque CSS, lo que ocurra primero.
                </p>
                <div class="">
                  <div class="w3-code cssHigh notranslate ">
                    /* Estructura general */
                    <br/>
                    @IDENTIFIER (RULE);
                    <br/>
                    /* Ejemplo: le dice al navegador
                    <br/>
                    que use el juego de caracteres UTF-8 */
                    <br/>
                    @charset "utf-8";
                    <br/>
                  </div>
                </div>
                <p>
                  Hay varias reglas at regulares, designadas por sus identificadores, cada una con una sintaxis diferente:
                </p>
                <ul>
                  <li>
                    <span style="font-weight: bold;">
                      @charset:
                    </span>
                    Define el conjunto de caracteres utilizado por la hoja de estilo.
                  </li>
                  <li>
                    <span style="font-weight: bold; ">
                      @import:
                    </span>
                    Le dice al motor CSS que incluya una hoja de estilo externa.
                  </li>
                  <li>
                    <span style="font-weight: bold; ">
                      @namespace:
                    </span>
                    Le dice al motor CSS que todo su contenido debe considerarse como prefijo con un espacio de nombres XML.
                  </li>
                </ul>
                <h4>
                  Anidado
                </h4>
                <div class="">
                  <div class="w3-code cssHigh notranslate ">
                    @IDENTIFIER (RULE) {
                    <br/>
                    <br/>
                    }
                    <br/>
                    <br/>
                  </div>
                </div>
                <p>
                  Un subconjunto de declaraciones anidadas, que se puede utilizar como una declaración de una hoja de estilo, así como dentro de las reglas de grupo condicionales.
                </p>
                <ul>
                  <li>
                    <span style="font-weight: bold;">
                      @media:
                    </span>
                    Una regla de grupo condicional que aplicará su contenido si el dispositivo cumple los criterios de la condición definida mediante una consulta de medios.
                  </li>
                  <li>
                    <span style="font-weight: bold;">
                      @supports:
                    </span>
                    una regla de grupo condicional que aplicará su contenido si el navegador cumple los criterios de la condición dada.
                  </li>
                  <li class="en_desuso">
                    <span style="font-weight: bold;">
                      @document:
                    </span>
                    Una regla de grupo condicional que aplicará su contenido si el documento en el que se aplica la hoja de estilo cumple los criterios de la condición dada. (diferido al nivel 4 de la especificación CSS)
                    <img class="depercated_icon w3-image" src="../../img/all/trach.png"/>
                  </li>
                  <li>
                    <span style="font-weight: bold;">
                      @page:
                    </span>
                    Describe el aspecto de los cambios de diseño que se aplicarán al imprimir el documento.
                  </li>
                  <li>
                    <span style="font-weight: bold;">
                      @font-face:
                    </span>
                    Describe el aspecto de una fuente externa que se va a descargar.
                  </li>
                  <li>
                    <span style="font-weight: bold;">
                      @keyframes:
                    </span>
                    Describe el aspecto de los pasos intermedios en una secuencia de animación CSS.
                  </li>
                  <li class="en_desuso">
                    <span style="font-weight: bold;">
                      @viewport:
                    </span>
                    Describe los aspectos de la ventana gráfica para dispositivos de pantalla pequeña. (actualmente en la etapa de Borrador de Trabajo)
                  </li>
                  <li>
                    <span style="font-weight: bold;">
                      @counter-style:
                    </span>
                    Define estilos de contador específicos que no forman parte del conjunto predefinido de estilos. (en la etapa de recomendación candidata, pero solo implementado en Gecko en el momento de la redacción)
                  </li>
                  <li>
                    <span style="font-weight: bold;">
                      @font-feature-values  ​​(más @swash, @ornaments, @annotation, @stylistic, @styleset y @ character-variant):
                    </span>
                    Defina nombres comunes en font-variant-alternates para la función activada de manera diferente en OpenType. (en la etapa de recomendación candidata, pero solo implementado en Gecko en el momento de la redacción)
                  </li>
                  <li class="experimental">
                    <span style="font-weight: bold;">
                      @property:
                    </span>
                    Describe el aspecto de las propiedades y variables personalizadas. (actualmente en la etapa de Borrador de Trabajo)
                    <img class="depercated_icon w3-image" src="../../img/all/tuboensayo.png"/>
                  </li>
                </ul>
                <h4>
                  Reglas de grupo condicionales
                </h4>
                <p>
                  Al igual que los valores de las propiedades, cada regla at tiene una sintaxis diferente. No obstante, varios de ellos pueden agruparse en una categoría especial denominada reglas de grupo condicionales. Estas declaraciones comparten una sintaxis común y cada una de ellas puede incluir declaraciones anidadas, ya sean conjuntos de reglas o reglas at anidadas. Además, todos transmiten un significado semántico común: todos vinculan algún tipo de condición, que en cualquier momento se evalúa como verdadera o falsa. Si la condición se evalúa como verdadera, se aplicarán todas las declaraciones dentro del grupo.
                </p>
                <p>
                  Las reglas de grupo condicionales se definen en CSS Conditionals Level 3 y son:
                </p>
                <ul>
                  <li>
                    @media
                  </li>
                  <li>
                    @supports
                  </li>
                  <li>
                    @document (diferido al nivel 4 de la especificación CSS)
                    <img class="depercated_icon w3-image" src="../../img/all/trach.png"/>
                  </li>
                </ul>
              </div>
            </div>
            <!-- -->
            <div class="acordeon_item ">
              <div class="w3-block w3-left-align w3-card-4 w3-padding pointer btn_sintaxis_css">
                Comentarios en CSS
              </div>
              <div class="w3-container w3-hide">
                <h4>
                  Comentarios
                </h4>
                <p>
                  Un comentario CSS se utiliza para agregar notas explicativas al código o para evitar que el navegador interprete partes específicas de la hoja de estilo. Por diseño, los comentarios no tienen ningún efecto sobre el diseño de un documento.
                </p>
                <h4>
                  Sintaxis
                </h4>
                <p>
                  Los comentarios se pueden colocar donde se permita el espacio en blanco dentro de una hoja de estilo. Se pueden utilizar en una sola línea o atravesar varias líneas.
                </p>
                <div class="">
                  <div class="w3-code cssHigh notranslate">
                    /* A one-line comment */
                    <br/>
                    <br/>
                    /*
                    <br/>
                    Un comentario
                    <br/>
                    que se estira
                    <br/>
                    sobre muchos
                    <br/>
                    líneas
                    <br/>
                    */
                    <br/>
                    <br/>
                    /* El comentario a continuación se usa para deshabilitar un estilo específico */
                    <br/>
                    <br/>
                    /*
                    <br/>
                    span {
                    <br/>
                    color: blue;
                    <br/>
                    font-size: 1.5em;
                    <br/>
                    }
                    <br/>
                    */
                    <br/>
                  </div>
                </div>
              </div>
            </div>
            <div class="acordeon_item ">
              <div class="w3-block w3-left-align w3-card-4 w3-padding pointer btn_sintaxis_css">
                Especificidad CSS
              </div>
              <div class="w3-container w3-hide">
                <h4>
                  Especificidad
                </h4>
                <p>
                  La especificidad es el medio por el cual los navegadores deciden qué valores de propiedad CSS son los más relevantes para un elemento y, por lo tanto, se aplicarán. La especificidad se basa en las reglas de coincidencia que se componen de diferentes tipos de selectores CSS.
                </p>
                <h4>
                  ¿Cómo se calcula la especificidad?
                </h4>
                <p>
                  La especificidad es un peso que se aplica a una declaración CSS dada, determinada por el número de cada tipo de selector en el selector coincidente. Cuando varias declaraciones tienen la misma especificidad, la última declaración encontrada en el CSS se aplica al elemento. La especificidad solo se aplica cuando el mismo elemento es el objetivo de varias declaraciones. Según las reglas de CSS, los elementos directamente dirigidos siempre tendrán prioridad sobre las reglas que un elemento hereda de su antepasado.
                </p>
                <div class="w3-panel w3-pale-blue w3-leftbar w3-border-blue w3-section">
                  <p class="negrita">
                    Nota: la proximidad de los elementos en el árbol del documento no tiene ningún efecto sobre la especificidad.
                  </p>
                </div>
              </div>
            </div>
            <div class="acordeon_item ">
              <div class="w3-block w3-left-align w3-card-4 w3-padding pointer btn_sintaxis_css">
                Herencia CSS
              </div>
              <div class="w3-container w3-hide">
                <h4>
                  xxxxxxxxxxx
                </h4>
                <p>
                  Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Odit voluptatum mollitia vero dolorem, error molestias nulla eveniet necessitatibus beatae! Minus ratione aliquam quisquam iste, eum. Reprehenderit ex pariatur dolorum sed!
                </p>
              </div>
            </div>
            <div class="acordeon_item ">
              <div class="w3-block w3-left-align w3-card-4 w3-padding pointer btn_sintaxis_css">
                Modelo de caja básica CSS
              </div>
              <div class="w3-container w3-hide">
                <h4>
                  xxxxxxxxxxx
                </h4>
                <p>
                  Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Odit voluptatum mollitia vero dolorem, error molestias nulla eveniet necessitatibus beatae! Minus ratione aliquam quisquam iste, eum. Reprehenderit ex pariatur dolorum sed!
                </p>
              </div>
            </div>
            <div class="acordeon_item ">
              <div class="w3-block w3-left-align w3-card-4 w3-padding pointer btn_sintaxis_css">
                Modo de diseño
              </div>
              <div class="w3-container w3-hide">
                <h4>
                  xxxxxxxxxxx
                </h4>
                <p>
                  Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Odit voluptatum mollitia vero dolorem, error molestias nulla eveniet necessitatibus beatae! Minus ratione aliquam quisquam iste, eum. Reprehenderit ex pariatur dolorum sed!
                </p>
              </div>
            </div>
            <div class="acordeon_item ">
              <div class="w3-block w3-left-align w3-card-4 w3-padding pointer btn_sintaxis_css">
                Modelo de formato visual
              </div>
              <div class="w3-container w3-hide">
                <h4>
                  xxxxxxxxxxx
                </h4>
                <p>
                  Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Odit voluptatum mollitia vero dolorem, error molestias nulla eveniet necessitatibus beatae! Minus ratione aliquam quisquam iste, eum. Reprehenderit ex pariatur dolorum sed!
                </p>
              </div>
            </div>
            <div class="acordeon_item ">
              <div class="w3-block w3-left-align w3-card-4 w3-padding pointer btn_sintaxis_css">
                Dominar el colapso de márgenes
              </div>
              <div class="w3-container w3-hide">
                <h4>
                  xxxxxxxxxxx
                </h4>
                <p>
                  Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Odit voluptatum mollitia vero dolorem, error molestias nulla eveniet necessitatibus beatae! Minus ratione aliquam quisquam iste, eum. Reprehenderit ex pariatur dolorum sed!
                </p>
              </div>
            </div>
            <div class="acordeon_item ">
              <div class="w3-block w3-left-align w3-card-4 w3-padding pointer btn_sintaxis_css">
                Valor calculado
              </div>
              <div class="w3-container w3-hide">
                <h4>
                  xxxxxxxxxxx
                </h4>
                <p>
                  Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Odit voluptatum mollitia vero dolorem, error molestias nulla eveniet necessitatibus beatae! Minus ratione aliquam quisquam iste, eum. Reprehenderit ex pariatur dolorum sed!
                </p>
              </div>
            </div>
            <div class="acordeon_item ">
              <div class="w3-block w3-left-align w3-card-4 w3-padding pointer btn_sintaxis_css">
                Valor específico
              </div>
              <div class="w3-container w3-hide">
                <h4>
                  xxxxxxxxxxx
                </h4>
                <p>
                  Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Odit voluptatum mollitia vero dolorem, error molestias nulla eveniet necessitatibus beatae! Minus ratione aliquam quisquam iste, eum. Reprehenderit ex pariatur dolorum sed!
                </p>
              </div>
            </div>
            <div class="acordeon_item ">
              <div class="w3-block w3-left-align w3-card-4 w3-padding pointer btn_sintaxis_css">
                Valor usado
              </div>
              <div class="w3-container w3-hide">
                <h4>
                  xxxxxxxxxxx
                </h4>
                <p>
                  Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Odit voluptatum mollitia vero dolorem, error molestias nulla eveniet necessitatibus beatae! Minus ratione aliquam quisquam iste, eum. Reprehenderit ex pariatur dolorum sed!
                </p>
              </div>
            </div>
            <div class="acordeon_item ">
              <div class="w3-block w3-left-align w3-card-4 w3-padding pointer btn_sintaxis_css">
                Valor actual
              </div>
              <div class="w3-container w3-hide">
                <h4>
                  xxxxxxxxxxx
                </h4>
                <p>
                  Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Odit voluptatum mollitia vero dolorem, error molestias nulla eveniet necessitatibus beatae! Minus ratione aliquam quisquam iste, eum. Reprehenderit ex pariatur dolorum sed!
                </p>
              </div>
            </div>
            <div class="acordeon_item ">
              <div class="w3-block w3-left-align w3-card-4 w3-padding pointer btn_sintaxis_css">
                Sintaxis de definición de valor
              </div>
              <div class="w3-container w3-hide">
                <h4>
                  xxxxxxxxxxx
                </h4>
                <p>
                  Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Odit voluptatum mollitia vero dolorem, error molestias nulla eveniet necessitatibus beatae! Minus ratione aliquam quisquam iste, eum. Reprehenderit ex pariatur dolorum sed!
                </p>
              </div>
            </div>
            <div class="acordeon_item ">
              <div class="w3-block w3-left-align w3-card-4 w3-padding pointer btn_sintaxis_css">
                Propiedades de taquigrafía
              </div>
              <div class="w3-container w3-hide">
                <h4>
                  xxxxxxxxxxx
                </h4>
                <p>
                  Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Odit voluptatum mollitia vero dolorem, error molestias nulla eveniet necessitatibus beatae! Minus ratione aliquam quisquam iste, eum. Reprehenderit ex pariatur dolorum sed!
                </p>
              </div>
            </div>
            <div class="acordeon_item ">
              <div class="w3-block w3-left-align w3-card-4 w3-padding pointer btn_sintaxis_css">
                Elementos reemplazados
              </div>
              <div class="w3-container w3-hide">
                <h4>
                  xxxxxxxxxxx
                </h4>
                <p>
                  Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Odit voluptatum mollitia vero dolorem, error molestias nulla eveniet necessitatibus beatae! Minus ratione aliquam quisquam iste, eum. Reprehenderit ex pariatur dolorum sed!
                </p>
              </div>
            </div>
            <!--          <div class="w3-container">
              <h2>
                W3.CSS Animated Modal
              </h2>
              <button class="w3-button w3-black" onclick="document.getElementById('id01').style.display='block'">
                Fade In Modal
              </button>
              <div class="w3-modal w3-animate-opacity" id="id01">
                <div class="w3-modal-content w3-card-4" style="width: 95%; height:50%;">
                  <header class="w3-container w3-teal">
                    <span class="w3-button w3-large w3-display-topright" onclick="document.getElementById('id01').style.display='none'">
                      ×
                    </span>
                  </header>
                  <img class="w3-image" src="img/all/cssdeclaracion.png" style="width: 100%; height: 100%;"/>
                </div>
              </div>
            </div> -->
          </div>
        </div>
        <div class="w3-container">
          <?php include "comp/pie.php";?>
        </div>
      </div>
    </div>
    <?php include "comp/slidebar.php";?>
    <script type="text/javascript">
      Acordeon_Sintaxis();
      function Acordeon_Sintaxis(argument) {
      // let element = document.querySelectorAll(".acordeon_item");
      let btn = document.querySelectorAll(".btn_sintaxis_css");
       let context = [];

      for (var i = 0; i < btn.length; i++) {
      btn[i].addEventListener("click", function(argument) {

        console.log(this);

      // this..parentElement

      for (var i = 0; i < this.parentElement.childNodes.length; i++) {

      if (this.parentElement.childNodes[i].nodeName == "#text") {

      } else {
      context.push(this.parentElement.childNodes[i]);

      }

      }

      if (context[1].className.indexOf("w3-show") == -1) {
      context[1].className += " w3-show";
      } else {
      context[1].className = context[1].className.replace(" w3-show", "");
      }
       console.log(context);
        context = [];

      });


      }

      }
    </script>
    <script src="https://www.w3schools.com/lib/w3codecolor.js">
    </script>
    <script type="text/javascript">
      w3CodeColor();
    </script>
  </body>
</html>