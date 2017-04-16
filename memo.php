<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Animated Stacked Pages</title>


  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Asul',rel='stylesheet'>

      <link rel="stylesheet" href="css/style.css">
<style>
html, body {
  margin: 0;
}

body {
  font-family: 'Asul';
  font-size: 22px;
  overflow: hidden;
  width: 100%;
  height: 100%;
  display: inline-block;
  background: #e9dfc4;
  background: -webkit-linear-gradient(left, #e9dfc4 0%, #e9dfc4 1%, #ede3c8 2%, #ede3c8 24%, #ebddc3 25%, #e9dfc4 48%, #ebddc3 49%, #e6d8bd 52%, #e6d8bd 53%, #e9dbc0 54%, #e6d8bd 55%, #e6d8bd 56%, #e9dbc0 57%, #e6d8bd 58%, #e6d8bd 73%, #e9dbc0 74%, #e9dbc0 98%, #ebddc3 100%);
  background: linear-gradient(left, #e9dfc4 0%, #e9dfc4 1%, #ede3c8 2%, #ede3c8 24%, #ebddc3 25%, #e9dfc4 48%, #ebddc3 49%, #e6d8bd 52%, #e6d8bd 53%, #e9dbc0 54%, #e6d8bd 55%, #e6d8bd 56%, #e9dbc0 57%, #e6d8bd 58%, #e6d8bd 73%, #e9dbc0 74%, #e9dbc0 98%, #ebddc3 100%);
  background-size: 120px;
  background-repeat: repeat;
}

mark {
  background-color: #FFFF00;
  border: 1px dashed #FFFF00;
}

.instruction {
  -webkit-transform: rotate(90deg) translateX(-50%);
          transform: rotate(90deg) translateX(-50%);
  -webkit-transform-origin: left top 0;
          transform-origin: left top 0;
  -webkit-transform-origin: 0 0;
          transform-origin: 0 0;
  position: absolute;
  left: 2.05em;
  text-align: center;
  letter-spacing: 1px;
  word-spacing: 1px;
  margin: 0;
  top: 50%;
  color: rgba(0, 0, 0, 0.7);
  background-color: rgba(255, 255, 255, 0.5);
  width: 200vw;
  padding: 1em;
  line-height: 0;
  display: inline-block;
}

button {
  border: none;
  background-color: rgba(80, 11, 6, 0.4);
  color: white;
  padding: 1.25em 2em;
  letter-spacing: 1px;
  text-transform: uppercase;
  cursor: pointer;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  position: fixed;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}

.all {
  width: 21em;
  position: relative;
  top: 2em;
  margin: 0 auto;
  max-width: calc(100vw - 6em);
}

section article {
  overflow: auto;
  margin: 0;
  opacity: 0;
  -webkit-transition: 1s opacity;
  transition: 1s opacity;
}

h1 {
  margin-top: 0;
}

section {
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  position: absolute;
  top: 0;
  height: 20em;
  max-height: calc(100vh - 10em);
  background-color: white;
  border: 1px solid black;
  padding: 3.5em 1.5em 1.5em 2.5em;
  overflow: auto;
  -webkit-transition: 1.5s opacity, 1.5s -webkit-transform;
  transition: 1.5s opacity, 1.5s -webkit-transform;
  transition: 1.5s transform, 1.5s opacity;
  transition: 1.5s transform, 1.5s opacity, 1.5s -webkit-transform;
  background-color: #fafafa;
}
section:before {
  display: block;
  font-size: 0.65em;
  min-width: 1em;
  text-align: center;
  position: absolute;
  top: 2em;
  right: 1.5em;
  background-color: rgba(80, 11, 6, 0.4);
  color: white;
  padding: 0.3em;
}

p:first-of-type {
  margin-top: 0;
}

section:nth-child(1) {
  z-index: 10;
  -webkit-transform: rotate(-3deg);
          transform: rotate(-3deg);
}
section:nth-child(1):before {
  content: "1";
}
section:nth-child(1).leave {
  -webkit-transform: rotate(-3deg) translateY(50em) scale3d(0.6, 0.6, 1);
          transform: rotate(-3deg) translateY(50em) scale3d(0.6, 0.6, 1);
  opacity: 0.3;
}
section.active {
  -webkit-transform: rotate(0);
          transform: rotate(0);
  background-color: #fff;
}
section.active article {
  opacity: 1;
}

section:nth-child(2) {
  z-index: 9;
  -webkit-transform: rotate(3deg);
          transform: rotate(3deg);
}
section:nth-child(2):before {
  content: "2";
}
section:nth-child(2).leave {
  -webkit-transform: rotate(3deg) translateY(50em) scale3d(0.6, 0.6, 1);
          transform: rotate(3deg) translateY(50em) scale3d(0.6, 0.6, 1);
  opacity: 0.3;
}
section.active {
  -webkit-transform: rotate(0);
          transform: rotate(0);
  background-color: #fff;
}
section.active article {
  opacity: 1;
}

section:nth-child(3) {
  z-index: 8;
  -webkit-transform: rotate(-4deg);
          transform: rotate(-4deg);
}
section:nth-child(3):before {
  content: "3";
}
section:nth-child(3).leave {
  -webkit-transform: rotate(-4deg) translateY(50em) scale3d(0.6, 0.6, 1);
          transform: rotate(-4deg) translateY(50em) scale3d(0.6, 0.6, 1);
  opacity: 0.3;
}
section.active {
  -webkit-transform: rotate(0);
          transform: rotate(0);
  background-color: #fff;
}
section.active article {
  opacity: 1;
}

section:nth-child(4) {
  z-index: 7;
  -webkit-transform: rotate(-2deg);
          transform: rotate(-2deg);
}
section:nth-child(4):before {
  content: "4";
}
section:nth-child(4).leave {
  -webkit-transform: rotate(-2deg) translateY(50em) scale3d(0.6, 0.6, 1);
          transform: rotate(-2deg) translateY(50em) scale3d(0.6, 0.6, 1);
  opacity: 0.3;
}
section.active {
  -webkit-transform: rotate(0);
          transform: rotate(0);
  background-color: #fff;
}
section.active article {
  opacity: 1;
}

section:nth-child(5) {
  z-index: 6;
  -webkit-transform: rotate(2deg);
          transform: rotate(2deg);
}
section:nth-child(5):before {
  content: "5";
}
section:nth-child(5).leave {
  -webkit-transform: rotate(2deg) translateY(50em) scale3d(0.6, 0.6, 1);
          transform: rotate(2deg) translateY(50em) scale3d(0.6, 0.6, 1);
  opacity: 0.3;
}
section.active {
  -webkit-transform: rotate(0);
          transform: rotate(0);
  background-color: #fff;
}
section.active article {
  opacity: 1;
}

section:nth-child(6) {
  z-index: 5;
  -webkit-transform: rotate(1deg);
          transform: rotate(1deg);
}
section:nth-child(6):before {
  content: "6";
}
section:nth-child(6).leave {
  -webkit-transform: rotate(1deg) translateY(50em) scale3d(0.6, 0.6, 1);
          transform: rotate(1deg) translateY(50em) scale3d(0.6, 0.6, 1);
  opacity: 0.3;
}
section.active {
  -webkit-transform: rotate(0);
          transform: rotate(0);
  background-color: #fff;
}
section.active article {
  opacity: 1;
}

section:nth-child(7) {
  z-index: 4;
  -webkit-transform: rotate(1deg);
          transform: rotate(1deg);
}
section:nth-child(7):before {
  content: "7";
}
section:nth-child(7).leave {
  -webkit-transform: rotate(1deg) translateY(50em) scale3d(0.6, 0.6, 1);
          transform: rotate(1deg) translateY(50em) scale3d(0.6, 0.6, 1);
  opacity: 0.3;
}
section.active {
  -webkit-transform: rotate(0);
          transform: rotate(0);
  background-color: #fff;
}
section.active article {
  opacity: 1;
}

section:nth-child(8) {
  z-index: 3;
  -webkit-transform: rotate(3deg);
          transform: rotate(3deg);
}
section:nth-child(8):before {
  content: "8";
}
section:nth-child(8).leave {
  -webkit-transform: rotate(3deg) translateY(50em) scale3d(0.6, 0.6, 1);
          transform: rotate(3deg) translateY(50em) scale3d(0.6, 0.6, 1);
  opacity: 0.3;
}
section.active {
  -webkit-transform: rotate(0);
          transform: rotate(0);
  background-color: #fff;
}
section.active article {
  opacity: 1;
}

section:nth-child(9) {
  z-index: 2;
  -webkit-transform: rotate(-1deg);
          transform: rotate(-1deg);
}
section:nth-child(9):before {
  content: "9";
}
section:nth-child(9).leave {
  -webkit-transform: rotate(-1deg) translateY(50em) scale3d(0.6, 0.6, 1);
          transform: rotate(-1deg) translateY(50em) scale3d(0.6, 0.6, 1);
  opacity: 0.3;
}
section.active {
  -webkit-transform: rotate(0);
          transform: rotate(0);
  background-color: #fff;
}
section.active article {
  opacity: 1;
}

section:nth-child(10) {
  z-index: 1;
  -webkit-transform: rotate(1deg);
          transform: rotate(1deg);
}
section:nth-child(10):before {
  content: "10";
}
section:nth-child(10).leave {
  -webkit-transform: rotate(1deg) translateY(50em) scale3d(0.6, 0.6, 1);
          transform: rotate(1deg) translateY(50em) scale3d(0.6, 0.6, 1);
  opacity: 0.3;
}
section.active {
  -webkit-transform: rotate(0);
          transform: rotate(0);
  background-color: #fff;
}
section.active article {
  opacity: 1;
}

</style>

</head>

<body>

<p class="instruction">Memory Moji</p>
<div class="all">
  <section class="active">
    <article>
      <h1>Memo 1</h1>
      <p>旅ロ利セムレ弱改フヨス波府かばぼ意送でぼ調掲察たス</p>
      <p>旅ロ京青利セムレ弱改フヨス波府かばぼ意送でぼ調掲察たス<sup>旅ロ京青利セムレ弱改フヨス波府かばぼ意送でぼ調掲察たス</sup> 旅ロ京青利セムレ弱改フヨス波府かばぼ意送でぼ調掲察たス <abbr title="multiple sclerosis">旅ロ京青利セムレ弱改フヨス波府かばぼ意送でぼ調掲察たス</abbr>.</p>
    </article>
  </section>
  <section>
    <article>
      <p>旅ロ京青利セムレ弱改フヨス波</p>
      <p>旅ロ京青利セムレ弱改フヨス波</p>
      <p>
        <q>旅ロ京青利セムレ弱改フヨス波</q>
      </p>
      <p>
        <q>旅ロ京青利セムレ弱改フヨス波.</q>
      </p>
      <p>旅ロ京青利セムレ弱改フヨス波&apos;旅ロ京青利セムレ弱改フヨス波.</p>
      <p>旅ロ京青利セムレ弱改フヨス波.</p>
    </article>
  </section>
  <section>
    <article>
      <p>旅ロ京青利セムレ弱改フヨス波</p>
    </article>
  </section>
  <section>
    <article>

      <p>旅ロ京青利セムレ弱改フヨス波.</p>
    </article>
  </section>
  <section>
    <article>
      <p>旅ロ京青利セムレ弱改フヨス波.</p>

        <q>旅ロ京青利セムレ弱改フヨス波 what?</q>
      <p> 旅ロ京青利セムレ弱改フヨス波!</p>
    </article>
  </section>
</div>
<button>Again</button>

    <script>
    var sections = document.querySelectorAll('section');

    function getNextSlideIndex() {
      var next_slide_index;

      Array.prototype.forEach.call(sections, function(section, index) {
        if (section.classList.contains('active')) {
          next_slide_index = (index + 1);
        }
      });

      return next_slide_index < sections.length ? next_slide_index : -1;
    }

    function sectionsHandler(section, index) {
      section.addEventListener('click', sectionClickHandler);
    }

    function sectionClickHandler() {
      var next_slide_index = getNextSlideIndex.call(this);

      if (this.classList.contains('active')) {
        if (next_slide_index > -1) {
          sections[next_slide_index].classList.add('active');
        }

        this.classList.add('leave');
        this.classList.remove('active');
      }
    }

    function resetHandler() {
      for (var i = sections.length-1; i >= 0; i--) {
        (function(index) {
          sections[index].classList.remove('leave');
          sections[index].scrollTop = 0;
        }(i));
      }
      sections[0].classList.add('active');
    }

    Array.prototype.forEach.call(sections, sectionsHandler);

    document.querySelector('button').addEventListener('click', resetHandler);</script>

</body>
</html>
