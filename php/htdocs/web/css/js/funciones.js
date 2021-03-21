function Acordeon_Sintaxis(argument) {

    let element = document.querySelectorAll(".acordeon_item");
    let context = [];
    for (var i = element.length - 1; i >= 0; i--) {

        element[i].addEventListener("click", function(argument) {

            for (var i = 0; i < this.childNodes.length; i++) {

                if (this.childNodes[i].nodeName == "#text") {

                } else {
                    context.push(this.childNodes[i]);

                }

            }

            if (context[1].className.indexOf("w3-show") == -1) {
                context[1].className += " w3-show";
            } else {
                context[1].className = context[1].className.replace(" w3-show", "");
            }
            context = [];

        });
    }

}