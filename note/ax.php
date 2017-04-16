   <style type="text/css">

     @font-face {
  font-family: "JF Flat Regular";
  src: url("http://f9ir.github.io/acc/acc/font/JF-Flat-regular.eot");
  src: url("http://f9ir.github.io/acc/acc/font/JF-Flat-regular.eot?#iefix") format("embedded-opentype"), url("http://f9ir.github.io/acc/acc/font/JF-Flat-regular.svg#JF Flat Regular") format("svg"), url("http://f9ir.github.io/acc/acc/font/JF-Flat-regular.woff") format("woff"), url("http://f9ir.github.io/acc/acc/font/JF-Flat-regular.ttf") format("truetype");
  font-weight: normal;
  font-style: normal;
}
body {
  background: #f6704b;
}

* {
  margin: 0;
  padding: 0;
}

.accordion {
  margin: 50px auto;
  width: 380px;
  background: #ccc;
  cursor: pointer;
}
.accordion .item {
  height: 100px;
}
.accordion .item h3 {
  display: inline-block;
  vertical-align: middle;
  height: 100%;
  padding-left: 50px;
  font-family: "JF Flat Regular";
  font-size: 20px;
  font-weight: 400;
}
.accordion .item img {
  padding-left: 15px;
  width: 30px;
  vertical-align: middle;
}
.accordion .item h3:before {
  content: "";
  display: inline-block;
  vertical-align: middle;
  height: 100%;
}
.accordion .item:first-of-type {
  background: #620808;
  color: #f4ce74;
}
.accordion .item:nth-of-type(2) {
  background: #a53f3f;
  color: #ffe9c1;
}
.accordion .item:nth-of-type(3) {
  background: #f4ce74;
  color: #620808;
}
.accordion .item:nth-of-type(4) {
  background: #ffe9c1;
  color: #d5441c;
}
.accordion .item:last-of-type {
  background: #d5441c;
  color: #ffe9c1;
}
.accordion p {
  font-family: "JF Flat Regular";
  font-size: 18px;
  font-weight: 400;
  padding: 15px;
  display: none;
  box-shadow: inset 0 3px 7px rgba(0, 0, 0, 0.2);
}
.accordion p:first-of-type {
  background: #620808;
  color: #f4ce74;
}
.accordion p:nth-of-type(2) {
  background: #a53f3f;
  color: #ffe9c1;
}
.accordion p:nth-of-type(3) {
  background: #f4ce74;
  color: #620808;
}
.accordion p:nth-of-type(4) {
  background: #ffe9c1;
  color: #d5441c;
}
.accordion p:last-of-type {
  background: #d5441c;
  color: #ffe9c1;
}

   </style>

   <section class="accordion">
       <div class="item">
            <img src="Location-Pin.png" alt="">
            <h3>Specific section</h3>
       </div>
            <p>Chapter, unit? Teacher should write its here</p>
        <div class="item">
            <img src="Headphones.png" alt="">
            <h3>Podcasts of teacher</h3>
       </div>
        <p>If the course has podcasts recorded by the teacher it should be attached here</p>
        <div class="item">
            <img src="Lightbulb.png" alt="">
            <h3>Notes</h3>
       </div>
            <p>Notes of teacher</p>
        <div class="item">
            <img src="Bookmarks.png" alt="">
            <h3>Related Books </h3>
       </div>
            <p>Recommended resources for student like books, blogs, websites, TV shows, videos, ...</p>
        <div class="item">
            <img src="Lightning-Bolt.png" alt="">
            <h3>Do it yourself</h3>
       </div>
           <p>For student! established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
   </section>

   <script src="jquery.min.js"></script>

   <script type="text/javascript">

     (function ($) {
    'use strict';
    $('.item').on("click", function () {
        $(this).next().slideToggle(100);
        $('p').not($(this).next()).slideUp('fast');
    });
}(jQuery));
   </script>
