<!DOCTYPE html>
<html lang="en" class="js" style="height: auto;"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Enigma | 2017</title>
  <meta name="description" content="">
  <meta name="author" content="kira0204">

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
  <script type="text/javascript" src="jquery/dist/jquery.js"></script>

  <!-- Stylesheet
  ================================================== -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="SlotMachine/jquery.slotmachine.css" type="text/css" media="screen" />
  <link href="http://fonts.googleapis.com/css?family=Lato:400,700,900,3a00" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300" rel="stylesheet" type="text/css">
  <script type="text/javascript">

  $(document).ready(function() {

    console.log($('#registerForm'));

    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("signupp");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
      modal.style.display = "block";
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }


    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

  });


  </script>

  <!-- Regex -->
  <script type="text/javascript">
    function checkName(){
      if($('#name').val()!==''){
        $('#correct-name').html('<img src="img/tick.png" width="25" height="25"/>');
      }
      else{
        $('#correct-name').html('<img src="img/cross.png" width="25" height="25"/>');
      }
    }
      function checkEmail(){
      var re=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      if(($('#emailReg').val()).match(re)){
        $('#correct-emailReg').html('<img src="img/tick.png" width="25" height="25"/>');
      }
      else{
        $('#correct-emailReg').html('<img src="img/cross.png" width="25" height="25"/>');
      }
    }
    function checkReg(){
      var reg = /^[1][0-9][a-zA-Z]{3}\d{4}$/
      if(($('#registration').val()).match(reg)){
        $('#correct-reg').html('<img src="img/tick.png" width="25" height="25"/>');
      }
      else{
        $('#correct-reg').html('<img src="img/cross.png" width="25" height="25"/>');
      }
    }
      function checkPh(){
      var phoneno=/^\d{10}$/;
      if(($('#contact').val()).match(phoneno)){
        $('#correct-contact').html('<img src="img/tick.png" width="25" height="25"/>');
            }
    else{
        $('#correct-contact').html('<img src="img/cross.png" width="25" height="25"/>');
        }
      }
function confirmPass(){
        if((($('#passwordReg').val())!=($('#conf_pass').val()))){
          document.getElementById('conf_pass').style.color="red";
          $('#correct-conf_pass').html('<img src="img/cross.png" width="25" height="25"/>');
        }
        else
        {
          $('#correct-passwordReg').html('<img src="img/tick.png" width="25" height="25"/>');
          $('#correct-conf_pass').html('<img src="img/tick.png" width="25" height="25"/>');
        }
      }
    function checkPassword(){
        if((($('#conf_pass').val())=='')){
          $('#correct-conf_pass').html('<img src="img/cross.png" width="25" height="25"/>');
        }
        pass=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$/;
        if(!($('#passwordReg').val()).match(pass))
          $('#correct-passwordReg').html('<img src="img/cross.png" width="25" height="25"/>');
        if(($('#passwordReg').val())==''){
          $('#correct-passwordReg').html('<img src="img/cross.png" width="25" height="25"/>');
        }
        else
          $('#correct-passwordReg').html('<img src="img/tick.png" width="25" height="25"/>');
    }

  </script>
</head>

<body id="page-top" style="overflow: visible;">

  <!-- Preloader -->
  <div id="preloader" style="display: none;">
    <div id="status" style="display: none;">&nbsp;</div>
  </div>

  <!-- About Section -->
  <div id="head" class="text-center" style="">
    <div style="float:right; margin-right: 20px; margin-top: 25px; font-size: 20px;">
      <button id="myBtn" class="btn-default" onmouseover="popup()">Login</button>
      <button id="signupp" class="btn-default">Signup</button>
      <div class="popup">
        <div class="popuptext" id="myPopup">

          <h1>Login</h1>
          <!-- <p id="login_line"> Lorem Ipsum Dolor.</p> -->

          <div class="section-title center">
            <div class="col-md-8 col-md-offset-2" style="margin-left: 16.677%; width: 66.66666667%";>
              <div id="login_error" style="margin-bottom: 16.677%"></div>
              <form name="login_form" id="loginForm" enctype="application/json" method="post">
                <div class="row">
                  <div class="form-group">
                    <input type="text" id="email" name="email" class="form-control" placeholder="Email" required="required">
                    <p class="help-block text-danger"></p>
                  </div>

                  <div class="form-group">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="required">
                    <p class="help-block text-danger"></p>
                  </div>

                </div>
                <div id="loader_login" style="display: none;"><img src="img/login.gif"></div>
                <div id="success_login"></div>
                <button id="loginButton" type="submit" class="dark_btn btn btn-default">Login</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- The Modal -->
      <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="login modal-content" id="register">
          <span class="close">&times;</span>
          <h1>Register</h1>
          <p id="login_line"></p>

          <div class="section-title center">
            <div class="col-md-8 col-md-offset-2">
              <form name="register_form" id="registerForm" method="post">
                <div class="row" style="margin-left: 2%;">

                  <div class="form-group" style="display: flex;">
                    <div class="input-field">
                      <input type="text" id="name" name="name" class="form-control" placeholder="Name" size="30" onkeyup="checkName()" required="required">
                    </div>
                    <div class="image-container">
                      <span id="correct-name" style="float: right;">
                        <img src="img/blank.png" width="25" height="25">
                      </span>
                    </div>
                  </div>

                  <div class="form-group" style="display: flex;">
                    <div class="input-container">
                      <input type="text" id="emailReg" name="email" class="form-control" placeholder="Email" size="30" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" oninvalid="setCustomValidity('Please enter a valid email Id')" onchange="try{setCustomValidity('')}catch(e){}" onkeyup="checkEmail()" required="required"></div>
                    <div class="image-container">
                      <span id="correct-emailReg" style="float: right;">
                        <img src="img/blank.png" width="25" height="25">
                      </span></div>

                  </div>

                  <div class="form-group" style="display: flex;">
                    <div class="input-container">
                      <input type="text" id="registration" name="reg_no" class="form-control" placeholder="Registration number" size="30" onkeyup="checkReg()" required="required">
                    </div>
                    <div class="image-container">
                      <span id="correct-reg" style="float: right;">
                        <img src="img/blank.png" width="25" height="25">
                      </span>
                    </div>
                  </div>

                  <div class="form-group" style="display: flex;">
                    <div class="input-container">
                      <input type="text" id="contact" name="contact" class="form-control" placeholder="Phone no." size="30" onkeyup="checkPh()" required="required"></div>
                    <div class="image-container">
                      <span id="correct-contact" style="float: right;">
                        <img src="img/blank.png" width="25" height="25">
                      </span>
                    </div>
                  </div>

                  <div class="form-group" style="display: flex;">
                    <div class="input-container">
                      <input type="password" id="passwordReg" name="password" class="form-control" placeholder="Enter new Password" size="30" onkeyup="checkPassword()" required="required"></div>
                      <div class="image-container">
                        <span id="correct-passwordReg" style="float: right;">
                          <img src="img/blank.png" width="25" height="25">
                        </span>
                      </div>
                  </div>

                  <div class="form-group" style="display: flex;" >
                    <div class="input-container">
                      <input type="password" id="conf_pass" class="form-control" placeholder="Confirm Password" size="30" onkeyup="confirmPass()" required="required"></div>
                    <div class="image-container">
                        <span id="correct-conf_pass" style="float: right;">
                          <img src="img/blank.png" width="25" height="25">
                        </span>
                    </div>
                  </div>

                </div>
                <div id="loader_reg"  style="display: none;"><img src="img/default.gif"></div>
                <div id="success"></div>

                <button id="signupButton" type="submit" class="btn btn-default" onclick="check()" >Submit</button>
              </form>
            </div>
          </div>
        </div>
        </div>
        </div>

      <div id="" class="container" style="height: 620px;">
      <div class="section-title text-center center">

      </div>
      <!-- ENIGMA Scroll -->
      <div class="content" style="display: inline;">
        <table class="" style="width: 50%; margin-right: auto;margin-left: auto; margin-top: 210px;">
          <tr>
            <td>
              <div id="textMachine" style="text-align: center; height: 50px; font-size: 40px;">
                <div>3</div>
                <div>E</div>
                <div>3</div>
                <div>E</div>
                <div>3</div>
                <div>E</div>

              </div>
              <script>
              $(document).ready(function(){
                $("#textMachine").slotMachine({
                  active  : 0,
                  delay : 450,
                  auto  : 4500,
                  direction: 'down'
                });
              });
              </script>
            </td>

            <td>
              <div id="textMachine1" style="text-align: center; height: 50px; font-size: 40px;">

                <div>N</div>
                <div>N</div>
                <div>N</div>
                <div>N</div>
                <div>N</div>
                <div>N</div>
              </div>
              <script>
              $(document).ready(function(){
                $("#textMachine1").slotMachine({
                  active  : 0,
                  delay : 450,
                  auto  : 4500
                });
              });
              </script>
            </td>
            <td>
              <div id="textMachine2" style="text-align: center; height: 50px; font-size: 40px;">
                <div>1</div>
                <div>I</div>
                <div>1</div>
                <div>I</div>
                <div>1</div>
                <div>I</div>
              </div>
              <script>
              $(document).ready(function(){
                $("#textMachine2").slotMachine({
                  active  : 0,
                  delay : 450,
                  auto  : 4500,
                  direction: 'down'
                });
              });
              </script>
            </td>
            <td>
              <div id="textMachine3" style="text-align: center; height: 50px; font-size: 40px;">
                <div>2</div>
                <div>G</div>
                <div>2</div>
                <div>G</div>
                <div>2</div>
                <div>G</div>

              </div>
              <script>
              $(document).ready(function(){
                $("#textMachine3").slotMachine({
                  active  : 0,
                  delay : 450,
                  auto  : 4500
                });
              });
              </script>
            </td>

            <td>
              <div id="textMachine4" style="text-align: center; height: 50px; font-size: 40px;">
                <div>W</div>
                <div>M</div>
                <div>W</div>
                <div>M</div>
                <div>W</div>
                <div>M</div>

              </div>
              <script>
              $(document).ready(function(){
                $("#textMachine4").slotMachine({
                  active  : 0,
                  delay : 450,
                  auto  : 4500,
                  direction: 'down'
                });
              });
              </script>
            </td>
            <td>
              <div id="textMachine5" style="text-align: center; height: 50px ;font-size: 40px;">
                <div>V</div>
                <div>A</div>
                <div>V</div>
                <div>A</div>
                <div>V</div>
                <div>A</div>
              </div>
              <script>
              $(document).ready(function(){
                $("#textMachine5").slotMachine({
                  active  : 0,
                  delay : 450,
                  auto  : 4500
                });
              });
              </script>
            </td>
          </tr>
        </table>
        <!-- End -->
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="about-text">
            </div>
            <p class="scrollto--arrow">
              <a href="#about" class="page-scroll"><img src="img/down.png" alt="scroll down arrow" id="enig_arrow"></a>
            </p>
          </div>
        </div>
      </div>
    </div>



    <!-- About Section -->
    <div id="about" class="text-center">
      <div class="container">
        <div class="section-title text-center center">
          <h2>About</h2>
          <hr>
        </div>
        <div class="row">

          <div class="col-md-8 col-md-offset-2">
            <div class="about-text">
              <p>
                “The path lies empty, epiphany seeks the devoted”
              </p>
              <p>We’ve been waiting, we’ve been watching and now the most awaited cryptic hunt is back. Enigma 2017, a second edition of its kind, this time on an    international platform. The search for highly intelligent individuals continues as Enigma 2.0 launches its pressure tests on participants from around the world with its puzzles and ciphers. The questions will differ vastly in their nature and require different types of logic to be employed in order to decrypt them – no technical skills required, just the ability to think out of the box!
              </p>
              <p>
                ~Your enlightenment awaits you~<br>
                May the odds be ever in your favour.
              </p>

            </div>
            <p class="scrollto--arrow"><a href="#rules" class="page-scroll"><img src="img/down.png" alt="scroll down arrow"></a></p>
          </div>
        </div>
      </div>
    </div>

    <!-- Rules and regulations Section -->
    <div id="rules" class="text-center">
      <div class="container">
        <div class="section-title center">
          <h2>Rules and Regulations</h2>
          <hr>
          <div class="rules-text" >

            <ol style="color: white; list-style: decimal; list-style-position: inside; text-align: center;">
              <li >The event shall be held over _ days, from _ to _</li><br>
              <li>Participation is open to students of VIT University. Each participant represents himself/herself only.</li><br>
              <li>The participants' aim is to crack the levels as quickly as they can so as to place themselves at the top of the leaderboard.</li><br>
              <li>The event entails an Online Cryptic Hunt in which participants must make their way through a series of levels filled with cryptic questions.</li><br>
              <li>At each level, the participants will encounter a number of clues which shall, altogether, point to one answer. Each level has one and only one correct answer.</li><br>
              <li style="letter-spacing: 1px;">Answers will always be lowercase, alphanumeric and may contain spaces. Special characters are allowed.</li><br>
              <li>Official clues may be released on the Facebook event if and when deemed necessary by the organizers.</li><br>
              <li>Beware of the spelling you enter, we won't auto correct your spellings.</li><br>
            </ol>

          </div>
          <p class="scrollto--arrow"><a href="#enig2016" class="page-scroll"><img src="img/down.png" alt="scroll down arrow"></a></p>
        </div>
      </div>
    </div>

    <!-- Enigma 2016 section -->

    <div id="enig2016" class="text-center">
      <div class="container">
        <div class="section-title center">
          <h2>Enigma 2016</h2>
          <hr>
        </div>
        <div>
          <p>
            On 5th august 2016 Enigma, the first of its kind, went live and 100 hours, 750+ participants later…our quest for finding that one brilliant mind was complete. There were a total of 30 questions in all, whose difficulty progressively increased and the participants had to solve each question to proceed to the next one, a dynamic update of the leaderboard position took it to a whole new level.
          </p>
          <p>
            A perfect blend of technical awareness and cool logic, it now stands as one of the most novel online events conducted in the university.
            Even the winner not being able to decrypt all the questions, in 2016, Enigma won. Let’s see what 2017 has in store for us.
          </p>
          <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay="100ms"> <!--Dont change the time, as it is set according to the number-->
            <div class="enig2016-box"> <span class="count">773</span>
              <h4>Participants</h4>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay="200ms">
            <div class="enig2016-box"> <span class="count">72</span>
              <h4>Hours of Journey</h4>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay="400ms">
            <div class="enig2016-box"> <span class="count">30</span>
              <h4>Questions</h4>
            </div>
          </div>
        </div>
        <p class="scrollto--arrow"><a href="#contact_us" class="page-scroll"><img src="img/down.png" alt="scroll down arrow"></a></p>
      </div>
    </div>

    <!-- Contact us -->
    <div id="contact_us" class="text-center">
      <div class="container">
        <div class="section-title center">
          <h2>Contact Us</h2>
          <hr>
          <div class="col-md-8 col-md-offset-2">
            <h3>Leave us a message</h3>
            <form name="sentMessage" id="contactForm" novalidate="">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required=""></textarea>
                <p class="help-block text-danger"></p>
              </div>
              <div id="success"></div>
              <button type="submit" class="dark_btn btn btn-default" id="contact_btn">Send Message</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!--Footer Section -->
    <div id="footer">
      <div class="container text-center">
        <div class="fnav">
          <p>Copyright © 2017 <a href="http://www.facebook.com/ieeevit" target="_blank">IEEE-VIT</a></p>
          </div>
        </div>
      </div>
      <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
      <script type="text/javascript" src="js/bootstrap.js"></script>
      <script type="text/javascript" src="js/SmoothScroll.js"></script>
      <script type="text/javascript" src="js/jquery.counterup.js"></script>
      <script type="text/javascript" src="js/waypoints.js"></script>
      <script type="text/javascript" src="js/connections.js"></script>
      <script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
      <script type="text/javascript" src="js/main.js"></script>
      <script type="text/javascript" src="js/js.cookie.js"></script>
      <script type="text/javascript" src="SlotMachine/jquery.slotmachine.js"></script>

      <!-- jQuery Plugin
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
      <script type="text/javascript">

      $(window).on('load', function() { // makes sure the whole site is loaded
        $('#status').fadeOut(); // will first fade out the loading animation
        $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
        $('body').delay(350).css({'overflow':'visible'});
      })
      </script>
    </body>
    </html>
