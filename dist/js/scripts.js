function MenuToggle(){
    var x = document.getElementById("Nav-Menu");
    var top = document.getElementById("burger-menu-top");
    var middle = document.getElementById("burger-menu-middle");
    var bottom = document.getElementById("burger-menu-bottom");
    if (x.style.right === "0vw") {
        x.style.display = "flex";
        x.style.right = "200vw";
        top.style.transform = "rotatez(0deg)";
        bottom.style.transform = "rotatez(0deg)";
        bottom.style.position = "unset";
        top.style.position = "unset";
        middle.style.display = "block";
      } else {
        x.style.right = "0vw";
        top.style.transform = "rotatez(0deg)";
        middle.style.display = "block";
        bottom.style.position = "unset";
        top.style.position = "unset";
        top.style.transform = "rotatez(45deg)";
        middle.style.display = "none";
        bottom.style.position = "absolute";
        top.style.position = "absolute";
        bottom.style.transform = "rotatez(-45deg)";
        bottom.style.top = "25px";
        top.style.top = "25px";
        bottom.style.left = "10px";
        top.style.left = "10px";
      }
}

