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
        .sub_head{
  /* background-color: #15a8d4; */
  padding:50px;
}
.form-docs h2 {
  text-align:center;
   padding:10px;
   font-size: 40px;
   
 }
 .form-docs h4 {
   padding-left:20px;
   font-size: 30px;
   padding-bottom:50px;
   padding-top:20px;
   
   
 }
 .form-docs ul{
  background-color: white;
   margin:0 auto;
   width:80%;
   border: 20px solid #ffffff;
   border-radius: 20px;
   /* box-shadow: 10px 25px 30px rgba(30,30,200,0.3); */
   margin-top: 20px;
   
 }
 
 
 .form-docs div.boys,.form-docs div.girls {
  display: inline-block;
 /*  margin:20px; */
  box-sizing: border-box;
  border: solid black 2px;
  border-radius: 0.25em;
 /*  padding: 0 1em; */
  text-align: left;
  vertical-align: top;
   width:40%;
   margin-left:100px;
   
 }
 
 .form-docs div.boys, .form-docs div.girls {
   padding-bottom: 1.15em;
 }
 
 
 .form-docs div.boys h3,.form-docs div.girls h3{
   padding-left: 1em;
 } 
 
 
 
 
 
 
 
 
 @media screen and (max-width: 48em) {
   .form-docs {
     text-align: center;
     height: 100%;
   }
   .form-docs .count h3 {
     font-size: 1.5em;
   }
   .form-docs .cont h3 {
     font-size: 1.25em;
   }
 }
  
 @media screen and (max-width: 42em) {
   .form-docs div.boys, .form-docs div.girls {
     padding-bottom: 0;
   }
 }
   

        </style>
</head>
<body>
<div class="form-docs">
    <div class="sub_head">
    <h2 >Summers</h2>
</div>
  <h4>Monday , Tuesday, Thursday , Friday:</h4>
  <div class="boys">
    <h3>For boys</h3>
    <ul>
      <li>Checks School Shirt
</li>
      <li>Red Half Pants
</li>
      <li>School Belt</li>
      <li>Black Shoes - Red Socks 
      </li>
    </ul>
  </div>
  <div class="girls">
    <h3>For girls </h3>
    <ul>
      <li>Checks School Shirt </li>
      <li>Red Bib  Skirt - School Belt</li>
      
      <li>Black Shoes - Red Socks </li>
      <li>Ponytail with Red Rubber band / ribbons
</li>
      
    </ul>
  </div>
  <h4>Wednesday and Saturday</h4>

  <div class="boys">
    <h3>For boys</h3>
    <ul>
      <li>White T - shirt 
</li>
      <li>White Trousers
</li>
      <li>White Shoes - Red Socks </li>
    </ul>
  </div>
  <div class="girls">
    <h3>For girls</h3>
    <ul>
      <li>White T - shirt -White Trousers
</li>
      
      <li>White Shoes - Red Socks 
</li>
      <li>Ponytail with Red Rubber band / ribbons</li>
    </ul>
  </div>
  <div class="sub_head">
  <h2>Winters</h2>

</div>

  <div class="boys">
    <h3>For boys</h3>
    <ul>
      <li> School Track Suit</li>
      <li>Black Shoes - Red Socks </li>
      <li> Red Winter Cap</li>
    </ul>
  </div>
  <div class="girls">
    <h3>For girls</h3>
    <ul>
      <li>School Track Suit - Red Winter Cap
</li>
      <li>Black Shoes - Red Socks </li>
      <li> Ponytail with Red Rubber band / ribbons
</li>
      
    </ul>
  </div>


</div>
    













































<?php
include("footer.php");
include("footer2.php");
?>


</body>
</html>