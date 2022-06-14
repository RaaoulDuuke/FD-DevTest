function paintRed() {
    console.log("RED");
    const houses = document.getElementsByClassName('house');
    for(let house of houses){
        house.style.color = "red";
    }
}