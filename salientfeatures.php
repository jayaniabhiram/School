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
        .silent_head{
  text-align: center;
  padding-top:50px;

}

.list-type5{
    width:80%;
  /* margin:0 auto; */
    /* column-count:2; */
    /* background-color:pink; */
    border: 20px solid #ffffff;
    border-radius: 20px;
    /* box-shadow: 10px 25px 30px rgba(30,30,200,0.3); */
    position: relative;
    
    max-width:100%;
    /* left: 30px; */
    margin-top: 20px;
    margin: 0 auto;
    
    
    
  }
  
  .list-type5 h1{
    font-size:40px;
    text-align:center;

  }
  .list-type5 ol {
  list-style-type: none;
  /* list-style-type: decimal !ie; IE 7- hack */
  margin: 0;
  margin-left: 1em;
  padding: 0;
  counter-reset: li-counter;
    margin-top:20px;
    
    
  }
  .list-type5 ol li{
  position: relative;
  margin-bottom: 1.5em;
  padding: 0.5em;
  background-color: #F0D756;
  padding-left: 58px;
    overflow:hidden;
    
  }
  
  .list-type5 a{
  text-decoration:none;
  color:black;
  font-size:30px;
  font-family: 'Raleway', sans-serif;
  }
  
  .list-type5 li:hover{
  box-shadow:inset -1em 0 #6CD6CC;
  -webkit-transition: box-shadow 0.5s; /* For Safari 3.1 to 6.0 */
  transition: box-shadow 0.5s;
  }
  
  .list-type5 ol li:before {
  position: absolute;
  top: -0.3em;
  left: -0.5em;
  width: 1.8em;
  height: 1.2em;
  font-size: 2em;
  line-height: 1.2;
  font-weight: bold;
  text-align: center;
  color: white;
  background-color: #6CD6CC;
  transform: rotate(-20deg);
  -ms-transform: rotate(-20deg);
  -webkit-transform: rotate(-20deg);
  z-index: 99;
  overflow: hidden;
  content: counter(li-counter);
  counter-increment: li-counter;
  }
        </style>
</head>
<body>
<h1 class="silent_head">Our Salient Features</h1>

<div class="list-type5">

<ol>
<li><a href="#">Student Friendly Infrastructure.
 </a></li>
<li><a href="#">Innovative and fun-filled teaching methods to impart better education..
 </a></li>
<li><a href="#">Professionally trained, experienced and dedicated teaching staff.
</a></li>
  <li><a href="#"> To pay individual attention to students , the Teacher's to Students ratio is 1:25.
</a></li>
<li><a href="#"> Focus on all Round Development of child by Cultural and Co-curricular Activities.
</a></li>
<li><a href="#">Syllabus is strictly based on CBSE pattern.
</a></li>
<li><a href="#">Special stress on Oral English for good communication skills.
</a></li>
  <li><a href="#">Computer Practical Education with well equipped labs.
</a></li>
<li><a href="#">Smart Class (Audio - Visual teaching) to make learning interesting.</a></li>
<li><a href="#">Emphasis on Indian Moral Values, Culture and Heritage for overall development of the child.
 </a></li>
  <li><a href="#">Comparatively affordable and convenient fee structure .
 </a></li>
  <li><a href="#">School campus is under CCTV surveillance.
 </a></li>
</ol>
</div>





























<?php
include("footer.php");
include("footer2.php");
?>


</body>
</html>