var slideIndex_desc_actu = 0;


var slideIndex_campus = 0;


function showSlides_desc_actu() {
  var i;
  var slides_desc_actu = document.getElementsByClassName("mySlides-desc-actu");
  for (i = 0; i < slides_desc_actu.length; i++) {
    slides_desc_actu[i].style.display = "none";
  }
  slideIndex_desc_actu++;
  if (slideIndex_desc_actu > slides_desc_actu.length) {slideIndex_desc_actu = 1}
  slides_desc_actu[slideIndex_desc_actu-1].style.display = "block";
  setTimeout(showSlides_desc_actu, 3000); // Change image every 2 seconds
} 


function showSlides_campus() {
  var i_campus;
  var slides_campus = document.getElementsByClassName("mySlides-campus");
  for (i = 0; i < slides_campus.length; i++) {
    slides_campus[i].style.display = "none";
  }
  slideIndex_campus++;
  if (slideIndex_campus > slides_campus.length) {slideIndex_campus = 1}
  slides_campus[slideIndex_campus-1].style.display = "block";
  setTimeout(showSlides_campus, 3000); // Change image every 2 seconds
} 