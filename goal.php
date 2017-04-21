    <style>
    *, *:before, *:after {
      box-sizing: border-box;
    }

    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      width: 100%;
    }

    body {
      background: -webkit-linear-gradient(-45deg, #fffe99, #b6feb7);
      background: linear-gradient(-45deg, #fffe99, #b6feb7);
    }

    .calorie-counter {
      background: -webkit-linear-gradient(top left, #4d4d4d, #000);
      background: linear-gradient(to bottom right , #4d4d4d, #000);
      -webkit-animation: load 1s ease-out forwards;
      -moz-animation: load 1s ease-out forwards;
      animation: load 1s ease-out forwards;
      -webkit-transform: translate3d(-50%, -40%, 0);
      -moz-transform: translate3d(-50%, -40%, 0);
      -ms-transform: translate3d(-50%, -40%, 0);
      -o-transform: translate3d(-50%, -40%, 0);
      transform: translate3d(-50%, -40%, 0);
      background-color: #4d4d4d;
      border-radius: 4px;
      box-shadow: 36px 36px 76px 0px rgba(0, 0, 0, 0.26), 36px 36px 136px 0px #0b2b08;
      color: #fff;
      height: 640px;
      font-family: "proxima-nova-soft", sans-serif;
      font-weight: 500;
      left: 50%;
      opacity: 0;
      padding: 38px 46px;
      position: absolute;
      text-align: center;
      top: 50%;
      width: 400px;
    }
    .calorie-counter__title {
      color: #666;
      font-size: 18px;
      margin-bottom: 10px;
    }
    .calorie-counter__date {
      font-size: 22px;
      margin-bottom: 50px;
    }

    .chart svg {
      height: 100%;
      width: 100%;
    }
    .chart__background {
      fill: none;
      height: 100%;
      position: relative;
      stroke: #5a5a59;
      stroke-width: 20px;
      width: 100%;
    }
    .chart__foreground {
      -webkit-transform: rotate(180deg);
      -moz-transform: rotate(180deg);
      -ms-transform: rotate(180deg);
      -o-transform: rotate(180deg);
      transform: rotate(180deg);
      -webkit-transition: stroke-dashoffset 1s ease-in;
      -moz-transition: stroke-dashoffset 1s ease-in;
      transition: stroke-dashoffset 1s ease-in;
      fill: none;
      height: 100%;
      left: 0;
      position: absolute;
      stroke-dasharray: 630px;
      stroke-dashoffset: 630px;
      stroke-linecap: round;
      stroke-width: 20px;
      stroke: #b6feb7;
      top: 0;
      width: 100%;
    }
    .chart__count {
      color: #999;
      font-size: 16px;
      position: relative;
    }
    .chart__count div {
      color: #fff;
      font-size: 22px;
    }
    .chart .chart__container {
      display: inline-block;
      height: 100%;
      position: relative;
      width: 100%;
    }
    .chart--calorie .chart__container {
      height: 220px;
      width: 220px;
    }
    .chart--calorie .chart__count {
      top: -135px;
    }
    .chart--protein, .chart--carbs {
      float: left;
      margin-bottom: 50px;
      text-align: left;
      width: 50%;
    }
    .chart--protein .chart__container, .chart--carbs .chart__container {
      height: 30px;
      width: 30px;
    }
    .chart--protein .chart__foreground, .chart--carbs .chart__foreground {
      stroke: #b1fff8;
    }
    .chart--protein .chart__count, .chart--carbs .chart__count {
      color: #999;
      display: inline-block;
      font-size: 14px;
      padding-left: 10px;
      position: relative;
      text-align: left;
      top: 2px;
      overflow: hidden;
    }
    .chart--protein .chart__count div, .chart--carbs .chart__count div {
      color: #fff;
      font-size: 14px;
    }
    .chart--carbs {
      float: none;
      overflow: hidden;
    }
    .chart--carbs .chart__foreground {
      stroke: #fec6a8;
    }

    .calorie__count {
      background-color: #b584ff;
      padding: 23px;
    }
    .calorie__count__consumed, .calorie__count__remaining {
      font-size: 16px;
    }
    .calorie__count__consumed span, .calorie__count__remaining span {
      display: block;
      font-size: 22px;
    }
    .calorie__count__consumed {
      overflow: hidden;
    }
    .calorie__count__remaining {
      background-color: #fff;
      box-shadow: 19px 19px 49px 0px rgba(0, 0, 0, 0.36);
      color: #4d4d4d;
      float: right;
      padding: 24px;
      position: relative;
      right: -15px;
      top: -35px;
      width: 60%;
    }

    @-webkit-keyframes load {
      from {
        -webkit-transform: translate3d(-50%, -40%, 0);
        opacity: 0;
      }
      to {
        -webkit-transform: translate3d(-50%, -50%, 0);
        opacity: 1;
      }
    }
    @-moz-keyframes load {
      from {
        -moz-transform: translate3d(-50%, -40%, 0);
        opacity: 0;
      }
      to {
        -moz-transform: translate3d(-50%, -50%, 0);
        opacity: 1;
      }
    }
    @keyframes load {
      from {
        -webkit-transform: translate3d(-50%, -40%, 0);
        -moz-transform: translate3d(-50%, -40%, 0);
        -ms-transform: translate3d(-50%, -40%, 0);
        -o-transform: translate3d(-50%, -40%, 0);
        transform: translate3d(-50%, -40%, 0);
        opacity: 0;
      }
      to {
        -webkit-transform: translate3d(-50%, -50%, 0);
        -moz-transform: translate3d(-50%, -50%, 0);
        -ms-transform: translate3d(-50%, -50%, 0);
        -o-transform: translate3d(-50%, -50%, 0);
        transform: translate3d(-50%, -50%, 0);
        opacity: 1;
      }
    }
    </style>



<div class="calorie-counter">
	<div class="calorie-counter__title">Summary</div>

	<div class="calorie-counter__date">Previous day Apr 16, 2017</div>


	<div class="chart chart--calorie js-chart" data-goal="1700" data-count="550">
		<div class="chart__container">

			<svg class="chart__background" x="0px" y="0px" height="220px" viewBox="0 0 220 220">
				<g>
					<path d="M110,210c-55.1,0-100-44.9-100-100C10,54.9,54.9,10,110,10s100,44.9,100,100C210,165.1,165.1,210,110,210z" />
				</g>
			</svg>
			<!-- /.cchart__background -->

			<svg class="chart__foreground" x="0px" y="0px" height="220px" viewBox="0 0 220 220">
				<g>
					<path d="M110,210c-55.1,0-100-44.9-100-100C10,54.9,54.9,10,110,10s100,44.9,100,100C210,165.1,165.1,210,110,210z" />
				</g>
			</svg>
			<!-- /.chart__foreground -->

		</div>
		<!--  /.chart__container -->

		<div class="chart__count">
			<div>
				<span class="js-count" data-count="525">0</span> / <span class="js-count" data-count="1700">0</span>
			</div>
			Your goal
		</div>
		<!--  /.chart__count -->

	</div>
	<!-- /.chart .chart--calorie -->

	<div class="chart chart--protein js-chart" data-goal="37" data-count="30">
		<div class="chart__container">

			<svg class="chart__background" x="0px" y="0px" height="220px" viewBox="0 0 220 220">
				<g>
					<path d="M110,210c-55.1,0-100-44.9-100-100C10,54.9,54.9,10,110,10s100,44.9,100,100C210,165.1,165.1,210,110,210z" />
				</g>
			</svg>
			<!-- /.chart__background -->

			<svg class="chart__foreground" x="0px" y="0px" height="220px" viewBox="0 0 220 220">
				<g>
					<path d="M110,210c-55.1,0-100-44.9-100-100C10,54.9,54.9,10,110,10s100,44.9,100,100C210,165.1,165.1,210,110,210z" />
				</g>
			</svg>
			<!-- /.chart__foreground -->

		</div>
		<!--  /.chart__container -->

		<div class="chart__count .chart__count--protein">
			<div>
				<span class="js-count" data-count="30">0</span> / <span class="js-count" data-count="45">0</span>
			</div>
			Tasks
		</div>


	</div>


	<div class="chart chart--carbs js-chart" data-goal="120" data-count="35">
		<div class="chart__container">

			<svg class="chart__background" x="0px" y="0px" height="220px" viewBox="0 0 220 220">
				<g>
					<path d="M110,210c-55.1,0-100-44.9-100-100C10,54.9,54.9,10,110,10s100,44.9,100,100C210,165.1,165.1,210,110,210z" />
				</g>
			</svg>
			<!-- /.chart__background -->

			<svg class="chart__foreground" x="0px" y="0px" height="220px" viewBox="0 0 220 220">
				<g>
					<path d="M110,210c-55.1,0-100-44.9-100-100C10,54.9,54.9,10,110,10s100,44.9,100,100C210,165.1,165.1,210,110,210z" />
				</g>
			</svg>
			<!-- /.chart__foreground -->

		</div>
		<!--  /.chart__container -->

		<div class="chart__count .chart__count--carbs">
			<div>
				<span class="js-count" data-count="35">0</span> / <span class="js-count" data-count="120">0</span>
			</div>
			Quizes
		</div>
		<!--  /.chart__count--carbs -->

	</div>
	<!--  /.chart  chart--carbs -->

	<div class="calorie__count">

		<div class="calorie__count__remaining">
			<span class="js-count" data-count="1150">0</span>

			Remaining
		</div>


		<div class="calorie__count__consumed">
			<span class="js-count" data-count="550">0</span>

			Finished
		</div>


	</div>


</div>
