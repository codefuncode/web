<!DOCTYPE html>
<html lang="en">
  <?php include_once "comp/head.php";?>
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
        .cssHigh,.w3-code{
          border-color: #9CDB35 !important ;
        }

       .important ol {list-style-type: upper-roman;}
       ol,ul{
        font-weight: bold;
       }
       details{
        margin-bottom: 20px !important;
       }
       li{
        margin-bottom: 10px;
       }
       .secion_imagen {
        /*padding: 50px;*/
        margin-bottom: 50px;
       }
    </style>
    <!--     <div class="code_modal" id="code_myModal">
      <span class="code_close">
        ×
      </span>
      <img class="code_img_modal-content" id="code_img01"/>
      <div id="code_caption">
      </div>
    </div> -->
    <link href="css/img_modal.css" rel="stylesheet" type="text/css"/>
    <?php include_once 'comp/menu.php';?>
    <!-- Sidebar/menu -->
    <?php include_once 'comp/nav.php'?>
    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" id="myOverlay" onclick="w3_close()" style="cursor:pointer" title="close side menu">
    </div>
    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px;margin-top:43px;">
      <!-- Header -->
      <div class="w3-container w3-stretch">
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
          <!-- Sintaxis CSS -->
          <details style="margin-top: 25px !important;">
            <summary>
              Sintaxis CSS
            </summary>
            <div class="w3-container w3-card-4 w3-margin-top">
              <p>
                El objetivo básico del lenguaje de hojas de estilo en cascada (CSS) es permitir que un motor de navegador pinte elementos de la página con características específicas, como colores, posicionamiento o decoraciones. La sintaxis CSS refleja este objetivo y sus bloques de construcción básicos son:
              </p>
              <p>
                La propiedad que es un identificador, es decir, un nombre legible por humanos, que define qué característica se considera. El valor que describe cómo el motor debe manejar la característica. Cada propiedad tiene un conjunto de valores válidos, definidos por una gramática formal, así como un significado semántico, implementado por el motor del navegador.
              </p>
              <div class="w3-content secion_imagen" style="max-width:800px">
                <img class="w3-image w3-card w3-leftbar" src="img/all/cssdeclaracion.png" style="width: 100%; height: 100%; padding: 50px; border-color: #9CDB35 !important ;"/>
              </div>
              <h4>
                Declaraciones CSS
              </h4>
              <p>
                Establecer las propiedades de CSS en valores específicos es la función principal del lenguaje CSS. Un par de propiedad y valor se llama declaración, y cualquier motor de CSS calcula qué declaraciones se aplican a cada elemento de una página para diseñarlo adecuadamente y darle estilo. Tanto las propiedades como los valores no distinguen entre mayúsculas y minúsculas de forma predeterminada en CSS. El par está separado por dos puntos, ':', y los espacios en blanco antes, entre y después de las propiedades y valores, pero no necesariamente dentro, se ignoran.
              </p>
              <div class="w3-content secion_imagen" style="max-width:800px">
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
              <div class="w3-content secion_imagen" style="max-width:800px">
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
              <div class="w3-content secion_imagen" style="max-width:800px">
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
              <div class="w3-content secion_imagen" style="max-width:800px">
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
          </details>
          <!-- Regla CSS -->
          <details>
            <summary>
              Regla CSS
            </summary>
            <div class="w3-container w3-card-4 w3-margin-top">
              <h4>
                Normas
              </h4>
              <p>
                Las reglas at son declaraciones CSS que instruyen a CSS sobre cómo comportarse. Comienzan con un signo arroba, '@' , seguido de un identificador e incluye todo hasta el siguiente punto y coma, ';' , o el siguiente bloque CSS, lo que ocurra primero.
              </p>
              <div class="w3-content secion_imagen" style="max-width:800px">
                <img class="w3-image w3-card w3-leftbar" src="img/00002/reglas/00001.png" style="width: 100%; height: 50%; border-color: #9CDB35 !important ;"/>
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
              <div class="w3-content" style="max-width:800px">
                <img class="w3-image w3-card w3-leftbar" src="img/00002/reglas/00002.png" style="width: 100%; height: 50%; border-color: #9CDB35 !important ;"/>
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
          </details>
          <!-- Comentarios en CSS -->
          <details>
            <summary>
              Comentarios en CSS
            </summary>
            <div class="w3-container w3-card-4 w3-margin-top">
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
              <!--  Seccion_imagen -->
              <div class="w3-content secion_imagen" style="max-width:800px">
                <img class="w3-image w3-card w3-leftbar" src="img/00002/comentarios/00001.png" style="width: 100%; height: 50%; border-color: #9CDB35 !important ;"/>
              </div>
              <!--  Seccion_imagen -->
            </div>
          </details>
          <!-- Especificidad CSS -->
          <details>
            <summary>
              Especificidad CSS
            </summary>
            <div class="w3-container w3-card-4 w3-margin-top">
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
              <div class="w3-panel w3-card w3-pale-yellow w3-leftbar w3-border-blue w3-section" style=" border-color: #9CDB35 !important ;">
                <p class="negrita">
                  Nota:
                  <br/>
                  <span style="margin-left: 20px;">
                    La proximidad de los elementos en el árbol del documento no tiene ningún efecto sobre la especificidad.
                  </span>
                </p>
              </div>
              <div class="w3-container">
                <h4>
                  Tipos de selector
                </h4>
                <p>
                  La siguiente lista de tipos de selectores aumenta según la especificidad:
                </p>
                <ul class="">
                  <li>
                    Selectores de tipo (p. Ej., H1) y pseudoelementos (p. Ej., :: before).
                  </li>
                  <li>
                    Selectores de clases (p. Ej., .Example), selectores de atributos (p. Ej., [Type = 'radio']) y pseudoclases (p. Ej.,: Hover).
                  </li>
                  <li>
                    Selectores de ID (p. Ej., #Ejemplo).
                  </li>
                </ul>
                <p>
                  El selector universal (*), los combinadores (+,, , '', ||) y la pseudoclase de negación (: not ()) no tienen efecto sobre la especificidad. (Los selectores declarados dentro: not () hacen, sin embargo).
                </p>
                <p>
                  Para obtener más información, visite:
                  <a href="https://developer.mozilla.org/en-US/docs/Learn/CSS/Building_blocks/Cascade_and_inheritance#specificity_2" target="_blank">
                    'Especificidad' en 'Cascada y herencia'
                  </a>
                  , también puede visitar:
                  <a href="https://specifishity.com" target="_blank">
                    https://specifishity.com
                  </a>
                  https://specifishity.com Los estilos en línea agregados a un elemento (por ejemplo, style = 'font-weight: bold;') siempre sobrescriben cualquier estilo en hojas de estilo externas y, por lo tanto, se puede considerar que tienen la mayor especificidad.
                </p>
              </div>
              <div class="w3-container">
                <h4>
                  La excepción
                  <span class="w3-tag w3-green" style="font-size: 0.8em; font-weight: bold;">
                    ! important
                  </span>
                </h4>
                <p>
                  Cuando se usa una regla importante en una declaración de estilo, esta declaración anula cualquier otra declaración. Aunque técnicamente! Importante no tiene nada que ver con la especificidad, interactúa directamente con ella. Sin embargo, usar! Important es una mala práctica y debe evitarse porque dificulta la depuración al romper la cascada natural en sus hojas de estilo. Cuando se aplican dos declaraciones en conflicto con la regla! Important al mismo elemento, se aplicará la declaración con una mayor especificidad.
                </p>
                <p>
                  Algunas reglas generales:
                </p>
                <ul class="ul">
                  <li>
                    Siempre busque una forma de utilizar la especificidad antes de siquier considerar
                    <span class="w3-tag w3-green" style=" font-weight: bold;">
                      !important
                    </span>
                  </li>
                  <li>
                    Solo use
                    <span class="w3-tag w3-green" style=" font-weight: bold;">
                      !important
                    </span>
                    en CSS específico de la página que anula CSS externo (de bibliotecas externas, como Bootstrap o normalize.css).
                  </li>
                  <li>
                    Nunca use
                    <span class="w3-tag w3-green" style=" font-weight: bold;">
                      !important
                    </span>
                    cuando esté escribiendo un plugin / mashup.
                  </li>
                  <li>
                    Nunca use
                    <span class="w3-tag w3-green" style=" font-weight: bold;">
                      !important
                    </span>
                    en CSS para todo el sitio.
                  </li>
                </ul>
              </div>
              <div class="w3-container">
                <h4>
                  En lugar de usar
                  <span class="w3-tag w3-green" style=" font-weight: bold;">
                    !important
                  </span>
                  , considere:
                </h4>
                <ol>
                  <li>
                    Aproveche mejor la cascada de CSS
                  </li>
                  <li>
                    Utilice reglas más específicas. Al indicar uno o más elementos antes del elemento que está seleccionando, la regla se vuelve más específica y obtiene una mayor prioridad:
                  </li>
                  <div class="w3-content secion_imagen" style="max-width:800px">
                    <img class="w3-image w3-card w3-leftbar" src="img/00002/especificidad/00001.png" style="width: 100%; height: 50%; border-color: #9CDB35 !important ;"/>
                    <div class="w3-panel w3-card w3-pale-yellow w3-leftbar w3-border-blue w3-section" style=" border-color: #9CDB35 !important ;">
                      <p>
                        No importa el orden, el texto será verde porque esa regla es la más específica. (Además, la regla para el azul sobrescribe la regla para el rojo, independientemente del orden de las reglas)
                      </p>
                    </div>
                  </div>
                  <li>
                    Como caso especial sin sentido para (2), duplique selectores simples para aumentar la especificidad cuando no tenga nada más que especificar.
                  </li>
                  <div class="w3-content secion_imagen" style="max-width:800px">
                    <img class="w3-image w3-card w3-leftbar" src="img/00002/especificidad/00002.png" style="width: 100%; height: 50%; border-color: #9CDB35 !important ;"/>
                  </div>
                </ol>
              </div>
              <div class="w3-container important">
                <h4>
                  ¿Cómo se puede utilizar
                  <span class="w3-tag w3-green" style="font-size: 0.8em; font-weight: bold;">
                    ! important
                  </span>
                  ?
                </h4>
                <ol>
                  <li>
                    Reemplazo de estilos en líneas
                  </li>
                  <ol style="list-style-type: lower-latin;">
                    <li>
                      Su archivo CSS global que establece los aspectos visuales de su sitio globalmente puede ser sobrescrito por estilos en línea definidos directamente en elementos individuales. Tanto los estilos en línea como! Important se consideran una práctica muy mala, pero a veces es necesario que el último anule al primero.
                      <br/>
                      En este caso, puede establecer ciertos estilos en su archivo CSS global como
                      <span class="w3-tag w3-green" style=" font-weight: bold;">
                        !important
                      </span>
                      , anulando así los estilos en línea establecidos directamente en los elementos.
                    </li>
                    <div class="w3-content secion_imagen" style="max-width:800px">
                      <img class="w3-image w3-card w3-leftbar" src="img/00002/especificidad/00003.png" style="width: 100%; height: 50%; border-color: #9CDB35 !important ;"/>
                      <div class="w3-panel w3-card w3-pale-yellow w3-leftbar w3-border-blue w3-section" style=" border-color: #9CDB35 !important ;">
                        <p>
                          Muchos marcos y bibliotecas de JavaScript agregan estilos en línea. Usar
                          <!--  Inpottant -->
                          <span class="w3-tag w3-green" style="font-size: 0.8em; font-weight: bold;">
                            ! important
                          </span>
                          <!--  Inpottant -->
                          con un selector muy específico es una forma de anular estos estilos en línea.
                        </p>
                      </div>
                    </div>
                  </ol>
                  <li>
                    Anulando una alta especificidad
                  </li>
                  <div class="w3-content secion_imagen" style="max-width:800px">
                    <img class="w3-image w3-card w3-leftbar" src="img/00002/especificidad/00004.png" style="width: 100%; height: 50%; border-color: #9CDB35 !important ;"/>
                    <div class="w3-panel w3-card w3-pale-yellow w3-leftbar w3-border-blue w3-section" style=" border-color: #9CDB35 !important ;">
                      <p>
                        ¿Cómo puedes hacer que los párrafos increíbles siempre se vuelvan rojos, incluso los que están dentro de #someElement? Sin
                        <!--  Inpottant -->
                        <span class="w3-tag w3-green" style="font-size: 0.8em; font-weight: bold;">
                          ! important
                        </span>
                        <!--  Inpottant -->
                        , la primera regla tendrá más especificidad y prevalecerá sobre la segunda regla.
                      </p>
                    </div>
                  </div>
                </ol>
                <h4>
                  Cómo anular
                  <!--  Inpottant -->
                  <span class="w3-tag w3-green" style="font-size: 0.8em; font-weight: bold;">
                    ! important
                  </span>
                  <!--  Inpottant -->
                </h4>
                <ol>
                  <li>
                    Agrega otra regla CSS con! Important y dale al selector una mayor especificidad (agregando una etiqueta, id o clase al selector), o agrega una regla CSS con el mismo selector en un punto posterior al existente. Esto funciona porque en un empate de especificidad, gana la última regla definida.
                  </li>
                  <div class="w3-content secion_imagen" style="max-width:800px">
                    <div class="w3-panel w3-card w3-pale-yellow w3-leftbar w3-border-blue w3-section" style=" border-color: #9CDB35 !important ;">
                      <p>
                        Algunos ejemplos con mayor especificidad:
                      </p>
                    </div>
                    <img class="w3-image w3-card w3-leftbar" src="img/00002/especificidad/00005.png" style="width: 100%; height: 50%; border-color: #9CDB35 !important ;"/>
                  </div>
                  <li>
                    O agregue el mismo selector después del existente:
                  </li>
                  <div class="w3-content secion_imagen" style="max-width:800px">
                    <img class="w3-image w3-card w3-leftbar" src="img/00002/especificidad/00006.png" style="width: 100%; height: 50%; border-color: #9CDB35 !important ;"/>
                  </div>
                  <li>
                    O, preferiblemente, reescriba la regla original para evitar el uso de
                    <!--  Inpottant -->
                    <span class="w3-tag w3-green" style="font-size: 0.8em; font-weight: bold;">
                      ! important
                    </span>
                    <!--  Inpottant -->
                    por completo.
                  </li>
                  <div class="w3-content secion_imagen" style="max-width:800px">
                    <img class="w3-image w3-card w3-leftbar" src="img/00002/especificidad/00007.png" style="width: 100%; height: 50%; border-color: #9CDB35 !important ;"/>
                  </div>
                </ol>
              </div>
              <!--    <div class="w3-container">
                <h4>
                </h4>
              </div> -->
            </div>
          </details>
          <!-- Herencia CSS -->
          <!--     <details>
            <summary>
              Herencia CSS
            </summary>
            <div class="w3-container w3-card-4 w3-margin-top">
              <h4>
                xxxxxxxxxxx
              </h4>
              <p>
                Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Odit voluptatum mollitia vero dolorem, error molestias nulla eveniet necessitatibus beatae! Minus ratione aliquam quisquam iste, eum. Reprehenderit ex pariatur dolorum sed!
              </p>
            </div>
          </details> -->
          <!-- ================================================= -->
          <!--     <details>
            <summary>
              Herencia CSS
            </summary>
            <div class="w3-container w3-card-4 w3-margin-top">
              <h4>
                xxxxxxxxxxx
              </h4>
              <p>
                Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Odit voluptatum mollitia vero dolorem, error molestias nulla eveniet necessitatibus beatae! Minus ratione aliquam quisquam iste, eum. Reprehenderit ex pariatur dolorum sed!
              </p>
            </div>
          </details> -->
        </div>
        <!--  TODO -->
      </div>
      <?php include "comp/pie.php";?>
    </div>
    <?php include "comp/slidebar.php";?>
    <script src="js/img_modal.js" type="text/javascript">
    </script>
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
    <script src="js/test.js" type="text/javascript">
    </script>
    <script src="https://www.w3schools.com/lib/w3codecolor.js">
    </script>
    <script type="text/javascript">
      w3CodeColor();
      url_imagenes();
    </script>
  </body>
</html>
