<?php
include_once 'partial/header.php';
include_once 'resource/session.php';
include_once 'partial/parseProfile.php';
 ?>
<?php
var_dump($encode_id);
$htmlString= $encode_id;?>


<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>

  <link rel="stylesheet" href="css/reset.min.css">

  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>

<style media="screen">
/*@import url(https://fonts.googleapis.com/css?family=Pacifico);
@import url(https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700,300);*/
* {
  box-sizing: border-box;
}

body {
  background: lightgray;
  font-family: 'Yanone Kaffeesatz', sans-serif;
}

.row {
  margin: 0 -15px;
}
.row:after, .row:before {
  content: '';
  display: table;
  clear: both;
}

.col-1 {
  width: 33.333%;
  padding: 0 15px;
  float: left;
}

.col-2 {
  width: 66.666%;
  padding: 0 15px;
  float: left;
}

.col-3 {
  width: 100%;
  padding: 0 15px;
  float: left;
}

.wrapper {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  min-height: 100vh;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  padding: 50px 50px;
}
.wrapper_container {
  width: 1000px;
  max-height: 1000px;
  border-radius: 10px;
}

.site-wrapper {
  min-height: 500px;
  background: #ECECEC;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.23);
  padding-left: 80px;
  padding-right: 30px;
  padding-top: 85px;
  padding-bottom: 30px;
  position: relative;
  -webkit-transition: padding .3s linear;
  transition: padding .3s linear;
}
.site-wrapper_left-col {
  position: absolute;
  background: #34495E;
  width: 45px;
  height: 100%;
  top: 0;
  left: 0;
  -webkit-transition: width .3s ease-in-out;
  transition: width .3s ease-in-out;
  overflow: hidden;
  z-index: 20;
  border-radius: 10px 0 0 10px;
}
.site-wrapper_left-col .logo {
  display: block;
  background: #3498DB;
  padding: 15px;
  font-family: 'Pacifico', cursive;
  font-size: 24px;
  text-decoration: none;
  color: transparent;
  text-align: center;
  -webkit-transition: background .2s linear;
  transition: background .2s linear;
}
.site-wrapper_left-col .logo:before {
  content: 'L';
  color: rgba(255, 255, 255, 0.6);
  opacity: 1;
}
.site-wrapper_left-col .logo:hover, .site-wrapper_left-col .logo:focus {
  background: #217dbb;
  text-decoration: none;
}
.site-wrapper_left-col .left-nav a {
  display: block;
  line-height: 45px;
  border-left: 0 solid #34495E;
  padding: 0 15px;
  text-transform: uppercase;
  font-weight: bold;
  color: rgba(255, 255, 255, 0.6);
  text-decoration: none;
  letter-spacing: 2px;
  border-bottom: 1px solid #2C3E50;
  -webkit-transition: all .2s ease-in-out;
  transition: all .2s ease-in-out;
  white-space: nowrap;
}
.site-wrapper_left-col .left-nav a i {
  width: 35px;
}
.site-wrapper_left-col .left-nav a:hover, .site-wrapper_left-col .left-nav a:focus, .site-wrapper_left-col .left-nav a.active {
  background: #2C3E50;
  border-left-color: #3498DB;
  border-left-width: 5px;
}
.site-wrapper_top-bar {
  height: 54px;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  background: #fff;
  z-index: 10;
  box-shadow: 0 2px 2px rgba(0, 0, 0, 0.15);
  text-align: right;
}
.site-wrapper_top-bar a {
  display: inline-block;
  vertical-align: middle;
  width: 55px;
  height: 55px;
  line-height: 55px;
  text-align: center;
  -webkit-transition: all .2s linear;
  transition: all .2s linear;
  color: #3498DB;
}
.site-wrapper_top-bar a:hover, .site-wrapper_top-bar a.active {
  background: #3498DB;
  color: rgba(255, 255, 255, 0.6);
}
.site-wrapper.active {
  padding-left: 230px;
}
.site-wrapper.active .site-wrapper_left-col {
  width: 200px;
}
.site-wrapper.active .site-wrapper_left-col .logo {
  color: rgba(255, 255, 255, 0.6);
}
.site-wrapper.active .site-wrapper_left-col .logo:before {
  opacity: 0;
  position: absolute;
}

.user-item {
  background: #fff;
  overflow: hidden;
  border-radius: 10px;
  margin-bottom: 30px;
}
.user-item_photo {
  overflow: hidden;
  position: relative;
}
.user-item_photo:after {
  content: '';
  width: 150px;
  height: 150px;
  display: block;
  position: absolute;
  background: rgba(255, 255, 255, 0.5);
  z-index: 20;
  top: -80px;
  right: -80px;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
}
.user-item_photo img {
  max-width: 100%;
}
.user-item_info {
  padding: 15px;
  text-align: center;
}
.user-item_info .name {
  color: #34495E;
  font-size: 20px;
  letter-spacing: 1px;
  font-weight: bold;
  margin-bottom: 5px;
}
.user-item_info .sub {
  color: #AFAFAF;
}
.user-item_info .controls {
  padding-top: 15px;
}
.user-item_info .controls a {
  display: inline-block;
  width: 40px;
  height: 40px;
  border-radius: 25px;
  background: #3498DB;
  color: rgba(255, 255, 255, 0.6);
  text-decoration: none;
  line-height: 40px;
  font-size: 16px;
  text-align: center;
  margin: 0 5px;
  -webkit-transition: background .3s linear, -webkit-transform .3s ease-in-out;
  transition: background .3s linear, -webkit-transform .3s ease-in-out;
  transition: background .3s linear, transform .3s ease-in-out;
  transition: background .3s linear, transform .3s ease-in-out, -webkit-transform .3s ease-in-out;
}
.user-item_info .controls a:hover {
  background: #196090;
  -webkit-transform: scale(1.2);
          transform: scale(1.2);
}

.chat {
  min-height: 354px;
  background: #fff;
  overflow: hidden;
  border-radius: 10px;
  position: relative;
  padding-top: 60px;
  padding-bottom: 75px;
}
.chat .head {
  line-height: 45px;
  background: #3498DB;
  padding: 0 15px;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  letter-spacing: 1px;
  color: rgba(255, 255, 255, 0.6);
  font-weight: bold;
  border-radius: 10px 10px 0 0;
}
.chat .head i {
  margin-right: 10px;
}
.chat .footer {
  height: 60px;
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  background: #34495E;
  text-align: center;
  padding: 10px 15px;
  border-radius: 0 0 10px 10px;
}
.chat .footer input[type="text"] {
  display: inline-block;
  background: rgba(255, 255, 255, 0.15);
  border-radius: 5px;
  vertical-align: middle;
  border: 0;
  height: 40px;
  padding: 0 15px;
  margin: 0 5px;
  width: 100%;
  max-width: 250px;
  outline: none;
  -webkit-transition: all .1s linear;
  transition: all .1s linear;
  color: gray;
}
.chat .footer input[type="text"]:focus {
  background: #fff;
}
.chat .footer button {
  background: #3498DB;
  border: 0;
  display: inline-block;
  vertical-align: middle;
  color: rgba(255, 255, 255, 0.6);
  width: 40px;
  height: 40px;
  border-radius: 20px;
  cursor: pointer;
  -webkit-transition: background .2s linear;
  transition: background .2s linear;
  outline: none;
}
.chat .footer button:hover {
  background: #196090;
}

.chat_inner-item {
  padding: 10px 30px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
}
.chat_inner-item .photo {
  width: 40px;
  height: 40px;
  border-radius: 20px;
  overflow: hidden;
  margin-right: 10px;
}
.chat_inner-item .photo img {
  width: 40px;
  height: 40px;
  display: block;
  -o-object-fit: cover;
     object-fit: cover;
}
.chat_inner-item .message {
  padding: 12px 20px;
  background-color: #ECECEC;
  border-radius: 5px;
  color: #808080;
  letter-spacing: 1px;
}
.chat_inner-item.right {
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
}

</style>


</head>

<body>
  <div class="wrapper">
  <div class="wrapper_container">
  <!-- start  -->
    <div class="site-wrapper active" id="target">
      <div class="site-wrapper_left-col">
        <a href="#" class="logo">Logo</a>
        <div class="left-nav">
          <a href="#" id="home-link"><i class="fa fa-home test"></i>Home</a>
          <a href="#" id="dash-link"><i class="fa fa-pie-chart"></i>Dashboard</a>
          <a href="#" id="profile-link"><i class="fa fa-user active"></i>Profile</a>
          <a href="#" id="mess-link"><i class="fa fa-comment"></i>Message</a>
          <a href="#" id="set-link"><i class="fa fa-cog"></i>Settings</a>
        </div>
      </div>
      <div class="site-wrapper_top-bar">
        <a href="#" id="toggle"><i class="fa fa-bars"></i></a>
      </div>
      <!-- inner  -->
      <div class="row">
        <div class="col-1">
          <div class="user-item">
            <div class="user-item_photo">
              <img src="<?php if(isset($profile_picture)) echo $profile_picture; ?>">
            </div>
            <div class="user-item_info">
              <p class="name"><?php echo $_SESSION['username']; ?></p>
              <p class="sub">Member</p>
              <div class="controls">
                <a href="javascript: openwindow()"><i class="fa fa-camera"></i></a>
                <a href="javascript: openwindow()"><i class="fa fa-pencil"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-2" id="col2">
            <div class="chat">
              <div class="head">
                <i class="fa fa-comment"></i>
                Message
              </div>
              <div class="chat_inner">
                <div class="chat_inner-item">
                  <div class="photo">

                    <img src="<?php if(isset($profile_picture)) echo $profile_picture; ?>">
                  </div>
                  <div class="message">
                    Hello, World!
                  </div>
                </div>
                <div class="chat_inner-item right">
                  <div class="photo">
                    <img src="uploads/default.png" alt="myphoto" />
                  </div>
                  <div class="message">
                    Hello, World!
                  </div>
                </div>
                <div class="chat_inner-item">
                  <div class="photo">
                    <img src="uploads/default.png" alt="myphoto" />
                  </div>
                  <div class="message">
                    Hello, World!
                  </div>
                </div>
              </div>
              <div class="footer">
                <input type="text" placeholder="Your Message">
                <button><i class="fa fa-paper-plane"></i></button>
              </div>
            </div>
          </div>
      </div>
      <!-- end inner content -->

      <div class="col-2" id="col3">
        <p>asdasdas</p>
      </div
    </div>
  <!-- end content -->
  </div>
</div>


    <script>  $(function(){
        $('#toggle').click(function(){
          $('#target').toggleClass('active');
        });
      });
      $(function(){
          $('#home-link').click(function(){
            $( ".chat" ).fadeOut(2000);
          });
        });
        $(function(){
            $('#mess-link').click(function(){
              $( ".chat" ).fadeIn(2000);
            });
          });

      </script>


      <script type="text/javascript">
    var url = "<?php echo $encode_id; ?>";

function openwindow()
{
window.open("edit-profile.php?user_identity="+url,"mywindow","menubar=1,resizable=1,width=350,height=250");
}

      </script>






</body>
</html>
