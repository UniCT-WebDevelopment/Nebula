var flkty = new Flickity(".carousel", {
  pageDots: false
});

flkty.on("select", () => {
  flkty.element.querySelector(".item.is-before-selected") &&
  flkty.element.querySelector(".item.is-before-selected").classList.remove("is-before-selected");
  
  flkty.element.querySelector(".item.is-after-selected") && 
  flkty.element.querySelector(".item.is-after-selected").classList.remove("is-after-selected");
  
  flkty.element.querySelector(".item.is-selected").previousSibling && 
  flkty.element.querySelector(".item.is-selected").previousSibling.classList.add("is-before-selected");
  
  flkty.element.querySelector(".item.is-selected").nextSibling &&
  flkty.element.querySelector(".item.is-selected").nextSibling.classList.add("is-after-selected");
  
  [...flkty.element.querySelectorAll(".item h1")]
    .forEach(h1 => h1.style.transform = "")
  
})
flkty.resize()

flkty.on("scroll", (event, totalProgress) => {
  for(let content of flkty.element.querySelectorAll(".item .content")){
    let progressFactor = 
        (flkty.x + flkty.selectedCell.target) /
        flkty.selectedCell.size.width;
    console.log(progressFactor);
    content.style.marginLeft =
    `calc( 
      (
        (100vw - ${content.offsetWidth}px})/2 +
        5vw
      )*${progressFactor*-1}
    )`
  }
}); 