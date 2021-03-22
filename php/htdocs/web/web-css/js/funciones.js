function Acordeon_Sintaxis(argument) {

    // let element = document.querySelectorAll(".acordeon_item");
    let btn = document.querySelectorAll(".btn_sintaxis_css");
    let context = [];

    for (var i = 0; i < btn.length; i++) {
        btn[i].addEventListener("click", function(argument) {

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
            context = [];

        });
    }

}