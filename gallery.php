<?php
include("navbar.php");
include("topbutton.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
  text-align:center;
  padding:50px;
}




header h2{
  color:red;
}
.gallery-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  background-color: #fff;
  box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.3);
  width: 80%;
  margin: 0 auto;
  padding: 10px;
}
.gallery-item {
  flex-basis: 32.7%;
  margin-bottom: 6px;
  opacity: .85;
  cursor: pointer;
}
.gallery-item:hover {
  opacity: 1;
}
.gallery-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.gallery-content {
  font-size: .8em;
}

.lightbox {
  position: fixed;
  display: none;
  background-color: rgba(0, 0, 0, 0.8);
  width: 100%;
  height: 100%;              
  overflow: auto;
  top: 0;
  left: 0;
}
.lightbox-content {
  position: relative;
  width: 70%;
  height: 70%;
  margin: 5% auto;
}
.lightbox-content img {
  border-radius: 7px;
  box-shadow: 0 0 3px 0 rgba(225, 225, 225, .25);
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.lightbox-prev,
.lightbox-next {
  position: absolute;
  background-color: rgba(0, 0, 0, 0.8);
  color: #fff;
  padding: 7px;
  top: 45%;
  cursor: pointer;
}
.lightbox-prev {
  left: 0;
}
.lightbox-next {
  right: 0;
}
.lightbox-prev:hover,
.lightbox-next:hover {
  opacity: .8;
}

@media (max-width: 767px) {
  .gallery-container {
      width: 100%;
  }
  .gallery-item {
      flex-basis: 49.80%;
      margin-bottom: 3px;
  }
  .lightbox-content {
      width: 80%;
      height: 60%;
      margin: 15% auto;
  }
}
@media (max-width: 480px) {
  .gallery-item {
      flex-basis: 100%;
      margin-bottom: 1px;
  }
  .lightbox-content {
      width: 90%;
      margin: 20% auto;
  }
}

        
        </style>

    
</head>
<body>
    <!-- <header>
        <h2>Gallery</h2>
</header> -->
  <h1> Annual Cultural Fest </h1>
  <div class="gallery-container">
      <div class="gallery-item" data-index="1">
          <img src="img\school\1.jpg">
      </div>
      <div class="gallery-item" data-index="2">
          <img src="img\school\5.jpg">
      </div>
      <div class="gallery-item" data-index="3">
          <img src="img\school\6.jpg">
      </div>
      <div class="gallery-item" data-index="4">
          <img src="img\picnic\11.jpg">
      </div>
      <div class="gallery-item" data-index="5">
          <img src="img\picnic\7.jpg">
      </div>
      <div class="gallery-item" data-index="6">
          <img src="img\picnic\9.jpg">
      </div>
  </div>
  <h1>Sports Events</h1>
  <div class="gallery-container">
      <div class="gallery-item" data-index="1">
          <img src="img\school\25.jpg">
      </div>
      <div class="gallery-item" data-index="2">
          <img src="img\school\27.jpg">
      </div>
      <div class="gallery-item" data-index="3">
          <img src="img\school\28.jpg">
      </div>
      <div class="gallery-item" data-index="4">
          <img src="img\school\29.jpg">
      </div>
      <div class="gallery-item" data-index="5">
          <img src="img\school\30.jpg">
      </div>
      <div class="gallery-item" data-index="6">
          <img src="img\school\31.jpg">
      </div>
  </div>

  <h1>School Picnic</h1>
  <div class="gallery-container">
      <div class="gallery-item" data-index="1">
          <img src="img\school\9.jpg">
      </div>
      <div class="gallery-item" data-index="2">
          <img src="img\school\11.jpg">
      </div>
      <div class="gallery-item" data-index="3">
          <img src="img\school\13.jpg">
      </div>
      <div class="gallery-item" data-index="4">
          <img src="img\school\14.jpg">
      </div>
      <div class="gallery-item" data-index="5">
          <img src="img\school\15.jpg">
      </div>
      <div class="gallery-item" data-index="6">
          <img src="img\school\16.jpg">
      </div>
  </div>

  <h1>In class Activities</h1>
  <div class="gallery-container">
      <div class="gallery-item" data-index="1">
          <img src="img\school\36.jpg">
      </div>
      <div class="gallery-item" data-index="2">
          <img src="img\school\38.jpg">
      </div>
      <div class="gallery-item" data-index="3">
          <img src="img\school\42.jpg">
      </div>
      <div class="gallery-item" data-index="4">
          <img src="img\school\47.jpg">
      </div>
      <div class="gallery-item" data-index="5">
          <img src="img\school\43.jpg">
      </div>
      <div class="gallery-item" data-index="6">
          <img src="img\school\44.jpg">
      </div>
  </div>

  <h1>Cocurricular Activities</h1>
  <div class="gallery-container">
      <div class="gallery-item" data-index="1">
          <img src="img\co_cirricular_activities\3.jpg">
      </div>
      <div class="gallery-item" data-index="2">
          <img src="img\anual_fest\2.jpg">
      </div>
      <div class="gallery-item" data-index="3">
          <img src="img\anual_fest\5.jpg">
      </div>
      <div class="gallery-item" data-index="4">
          <img src="img\school\39.jpg">
      </div>
      <div class="gallery-item" data-index="5">
          <img src="img\school\18.jpg">
      </div>
      <div class="gallery-item" data-index="6">
          <img src="img\school\21.jpg">
      </div>
  </div>

  <h1>Republic Day</h1>
  <div class="gallery-container">
      <div class="gallery-item" data-index="1">
          <img src="img\picnic\12.jpg">
      </div>
      <div class="gallery-item" data-index="2">
          <img src="img\republic_day\2.jpg">
      </div>
      <div class="gallery-item" data-index="3">
          <img src="img\anual_fest\3.jpg">
      </div>
      <div class="gallery-item" data-index="4">
          <img src="img\anual_fest\4.jpg">
      </div>
      <div class="gallery-item" data-index="5">
          <img src="img\janmastami\1.jpg">
      </div>
      <div class="gallery-item" data-index="6">
          <img src="img\janmastami\2.jpg">
      </div>
  </div>

  <script>
    const galleryItem = document.getElementsByClassName("gallery-item");
const lightBoxContainer = document.createElement("div");
const lightBoxContent = document.createElement("div");
const lightBoxImg = document.createElement("img");
const lightBoxPrev = document.createElement("div");
const lightBoxNext = document.createElement("div");

lightBoxContainer.classList.add("lightbox");
lightBoxContent.classList.add("lightbox-content");
lightBoxPrev.classList.add("fa", "fa-angle-left", "lightbox-prev");
lightBoxNext.classList.add("fa", "fa-angle-right", "lightbox-next");

lightBoxContainer.appendChild(lightBoxContent);
lightBoxContent.appendChild(lightBoxImg);
lightBoxContent.appendChild(lightBoxPrev);
lightBoxContent.appendChild(lightBoxNext);

document.body.appendChild(lightBoxContainer);

let index = 1;

function showLightBox(n) {
    if (n > galleryItem.length) {
        index = 1;
    } else if (n < 1) {
        index = galleryItem.length;
    }
    let imageLocation = galleryItem[index-1].children[0].getAttribute("src");
    lightBoxImg.setAttribute("src", imageLocation);
}

function currentImage() {
    lightBoxContainer.style.display = "block";

    let imageIndex = parseInt(this.getAttribute("data-index"));
    showLightBox(index = imageIndex);
}
for (let i = 0; i < galleryItem.length; i++) {
    galleryItem[i].addEventListener("click", currentImage);
}

function slideImage(n) {
    showLightBox(index += n);
}
function prevImage() {
    slideImage(-1);
}
function nextImage() {
    slideImage(1);
}
lightBoxPrev.addEventListener("click", prevImage);
lightBoxNext.addEventListener("click", nextImage);

function closeLightBox() {
    if (this === event.target) {
        lightBoxContainer.style.display = "none";
    }
}
lightBoxContainer.addEventListener("click", closeLightBox);
    </script>






















































<?php
include("footer.php");
include("footer2.php");
?>





  
  
  


    
</body>
</html>