     // function myFunction(id) {

     //     var x = document.getElementById(id);

     //     if (x.className.indexOf("w3-show") == -1) {
     //         x.className += " w3-show";
     //     } else {
     //         x.className = x.className.replace(" w3-show", "");
     //     }
     // }

     // function acordeon(argument) {
     //     let element = document.querySelectorAll(".acordeon_item");
     //     let context = [];
     //     for (var i = element.length - 1; i >= 0; i--) {
     //         element[i].addEventListener("click", function(argument) {
     //             console.log(this.childNodes);
     //             // console.log(this.NodeList[2]);

     //             for (var i = 0; i < this.childNodes.length; i++) {

     //                 if (this.childNodes[i].nodeName == "#text") {

     //                 } else {
     //                     context.push(this.childNodes[i]);
     //                     console.log(this.childNodes[i]);
     //                 }

     //             }

     //             if (context[1].className.indexOf("w3-show") == -1) {
     //                 context[1].className += " w3-show";
     //             } else {
     //                 context[1].className = context[1].className.replace(" w3-show", "");
     //             }
     //             context = [];

     //         });
     //     }

     // }

     // function imagen_modal(argument) {
     //     let image_click = document.querySelectorAll(".image_click");
     //     let modal = document.getElementById("modal");
     //     let modal_image = document.getElementById("modal_image");
     //     let btn_modal_close = document.getElementById("btn_modal_close");

     //     console.log(image_click);

     //     for (var i = 0; i < image_click.length; i++) {
     //         image_click[i].addEventListener("click", function(argument) {
     //             console.log(this.src);
     //             modal_image.src = this.src;
     //             modal.style.display = "block";

     //         })
     //     }

     //     btn_modal_close.addEventListener("click", function(argument) {
     //         modal.style.display = "none";
     //     })
     // }
     // // 
     // imagen_modal();

     function url_imagenes(argument) {
        let img= document.querySelectorAll("img");

         for (var i = 0; i < img.length; i++) {
            console.log(img[i]); 
         }
     }