function code_aplica_modal_img(argument) {
    // Get the modal
    let modal = document.getElementById("code_myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a code_caption
    // let img = document.getElementById("code_myImg");
    let img = document.querySelectorAll(".w3-main img");
    let modalImg = document.getElementById("code_img01");
    let code_captionText = document.getElementById("code_caption");
    for (var i = 0; i < img.length; i++) {
        img[i].addEventListener("click", function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            // code_captionText.innerHTML = this.alt;
        });
    }

    // Get the <span> element that code_closes the modal
    let span = document.getElementsByClassName("code_close")[0];

    // When the user clicks on <span> (x), code_close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
}

code_aplica_modal_img();