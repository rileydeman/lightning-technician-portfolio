const menuIcon = document.getElementById("menuIcon");
const navigation = document.getElementById("navigation");
const menuLines = () => {
    let lines = [];

    menuIcon.childNodes.forEach(item => {
        if (item.nodeName == "SPAN") {
            lines.push(item);
        }
    })

    return lines;
};

menuIcon.addEventListener("click", () => {
    menuIcon.classList.toggle("menuIcon-open");

    if (navigation.style.maxHeight) {
        navigation.style.maxHeight = null;
    } else {
        navigation.style.maxHeight = (navigation.scrollHeight + 10) + "px";
    }
})