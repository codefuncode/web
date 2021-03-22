<div class="w3-row-padding w3-margin-bottom w3-hide-small">
  <!--   <div class="w3-five">
    <div class="w3-container ">
      <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn3.iconfinder.com%2Fdata%2Ficons%2Fsocial-media-logos-flat-colorful-1%2F2048%2F5351_-_CSS3-512.png&f=1&nofb=1"/>
    </div>
  </div> -->
  <div class="w3-rest">
    <h4>
      ¿Cómo funciona CSS realmente?
    </h4>
    <p>
      Cuando un navegador muestra un documento, debe combinar el contenido del documento con su información de estilo. Procesa el documento en varias etapas, que enumeramos a continuación. Tenga en cuenta que esta es una versión muy simplificada de lo que sucede cuando un navegador carga una página web, y que diferentes navegadores manejarán el proceso de diferentes maneras. Pero esto es más o menos lo que sucede.
    </p>
    <p>
    </p>
    <ul class="w3-ul">
      <li class="w3-padding-small">
        El navegador carga el HTML (por ejemplo, lo recibe de la red).
      </li>
      <li class="w3-padding-small">
        Convierte el HTML en un DOM (Document Object Model). El DOM representa el documento en la memoria de la computadora.
      </li>
      <li class="w3-padding-small">
        Luego, el navegador recupera la mayoría de los recursos a los que está vinculado el documento HTML, como imágenes y videos incrustados ... ¡y CSS vinculado!
      </li>
      <li class="w3-padding-small">
        El navegador analiza el CSS obtenido y clasifica las diferentes reglas por sus tipos de selector en diferentes 'depósitos', p. Ej. elemento, clase, ID, etc. En función de los selectores que encuentra, determina qué reglas se deben aplicar a qué nodos en el DOM y les adjunta estilo según sea necesario (este paso intermedio se denomina árbol de renderizado).
      </li>
      <li class="w3-padding-small">
        El árbol de renderizado se presenta en la estructura en la que debería aparecer después de que se le hayan aplicado las reglas. La presentación visual de la página se muestra en la pantalla (esta etapa se llama pintura).
      </li>
    </ul>
  </div>
</div>
