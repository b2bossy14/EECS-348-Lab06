function applyStyles() {
    var paragraph = document.getElementById("paragraph");

    var border_R = document.getElementById("border_R").value;
    var border_G = document.getElementById("border_G").value;
    var border_B = document.getElementById("border_B").value;

    var border_width = document.getElementById("border_width").value;

    var bg_R = document.getElementById("bg_R").value;
    var bg_G = document.getElementById("bg_G").value;
    var bg_B = document.getElementById("bg_B").value;

    if (border_R && border_G && border_B) {
        paragraph.style.borderColor = "rgb(" + border_R + "," + border_G + "," + border_B + ")";
    }

    if (border_width) {
        paragraph.style.borderWidth = border_width + "px";
    }

    if (bg_R && bg_G && bg_B) {
        paragraph.style.backgroundColor = "rgb(" + bg_R + "," + bg_G + "," + bg_B + ")";
    }
}
