<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice Board</title>
    <link rel="icon" type="image/x-icon" href="photo/favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Notable&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="menubar" style="background-image: none; height: 65px;">
            <div id="navbar" style="transition: 0s;">
                <div class="logo" style="display: inline; float: left;">

                    <img src="photo/logo.png">
                </div>

                <div class="nav">
                    <ul>
                        <a href="index.php">
                            <li class="menubarItems">Home</li>
                        </a>
                        <a href="about.php">
                            <li class="menubarItems">About Us</li>
                        </a>
                        <a href="notice.php">
                            <li class="menubarItems">Notice</li>
                        </a>
                        <a href="schedule.php">
                            <li class="menubarItems">Schedule</li>
                        </a>
                        <a href="contact_form.php">
                            <li class="menubarItems">Contact</li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bannersec">
            <div class="titlesec">
                <p style="font-family: 'Notable', sans-serif;">NOTICE BOARD AND <br>RESULTS</p>
            </div>
        </div>
        <section class="about">
            <div class="container" style="margin: 0 auto; top: 0px;">
                <p class="servicetitle" style="text-align: center;">Keep Up With Us</p>
            </div>
        </section>
        <div class="container" style="top: 10px;">
            <p class="servicetext" style="text-align: center; float: none;"><i>See what plans we have and what events we
                    are looking forward to.<br>
                    Results are also published here so be sure to check them out.</i></p>
        </div>

        <div class="container">
            <div style="display: flex; align-items: center;">
                <div class="noticeboard">
                    <div
                        style="position: sticky;width: 100%;top: 0;background-color: rgba(237, 237, 237, 1);z-index: 2;">
                        <p class="servicetitle" style="text-align: center;color: #B8B683; margin: 20px;">Notice Board
                        </p>
                    </div>

                    <div class="noticesection" onmouseover="textchange(0)" onmouseout="textrevert(0)"
                        onclick="openpopup(0)">
                        <p class="noticetitle">Notice 1</p>
                        <p class="noticedate">Posted On: 7th July 2023</p>
                        <p class="noticetext">See what plans we have and what events we are looking forward to.
                            Results are also published here so be sure to check them out.See what plans we have and what
                            events we are looking forward to.
                            Results are also published here so be sure to check them out.See what plans we have and what
                            events we are looking forward to.
                            Results are also published here so be sure to check them out.</p>
                    </div>
                    <div class="noticesection" onmouseover="textchange(1)" onmouseout="textrevert(1)"
                        onclick="openpopup(1)">
                        <p class="noticetitle">Notice 2</p>
                        <p class="noticedate">Posted On: 7th July 2023</p>
                        <p class="noticetext">See what plans we have and what events we are looking forward to.
                            Results are also published here so be sure to check them out.See what plans we have and what
                            events we are looking forward to.
                            Results are also published here so be sure to check them out.See what plans we have and what
                            events we are looking forward to.
                            Results are also published here so be sure to check them out.</p>
                    </div>
                    <div class="noticesection" onmouseover="textchange(2)" onmouseout="textrevert(2)"
                        onclick="openpopup(2)">
                        <p class="noticetitle">Notice 3</p>
                        <p class="noticedate">Posted On: 7th July 2023</p>
                        <p class="noticetext">See what plans we have and what events we are looking forward to.
                            Results are also published here so be sure to check them out.See what plans we have and what
                            events we are looking forward to.
                            Results are also published here so be sure to check them out.See what plans we have and what
                            events we are looking forward to.
                            Results are also published here so be sure to check them out.</p>
                    </div>
                    <div class="noticesection" onmouseover="textchange(3)" onmouseout="textrevert(3)"
                        onclick="openpopup(3)">
                        <p class="noticetitle">Notice 4</p>
                        <p class="noticedate">Posted On: 7th July 2023</p>
                        <p class="noticetext">See what plans we have and what events we are looking forward to.
                            Results are also published here so be sure to check them out.See what plans we have and what
                            events we are looking forward to.
                            Results are also published here so be sure to check them out.See what plans we have and what
                            events we are looking forward to.
                            Results are also published here so be sure to check them out.</p>
                    </div>
                    <div class="noticesection" onmouseover="textchange(4)" onmouseout="textrevert(4)"
                        onclick="openpopup(4)">
                        <p class="noticetitle">Notice 5</p>
                        <p class="noticedate">Posted On: 7th July 2023</p>
                        <p class="noticetext">See what plans we have and what events we are looking forward to.
                            Results are also published here so be sure to check them out.See what plans we have and what
                            events we are looking forward to.
                            Results are also published here so be sure to check them out.See what plans we have and what
                            events we are looking forward to.
                            Results are also published here so be sure to check them out.</p>
                    </div>
                </div>
                <div class="resultsboard">
                    <p class="servicetitle" style="text-align: center;color: #B8B683;">Results</p>
                    <div class="resultslist">
                        <ul>
                            <p class="noticetitle" style="margin: 5px;">Notice 1</p>
                            <a href="resultstest/Official Proposal.pdf" target="_blank" rel="noopener noreferrer">
                                <li>Result 1</li>
                            </a>
                            <a href="resultstest/Official Proposal.pdf" target="_blank" rel="noopener noreferrer">
                                <li>Result 1</li>
                            </a>
                            <a href="resultstest/Official Proposal.pdf" target="_blank" rel="noopener noreferrer">
                                <li>Result 1</li>
                            </a>
                            <a href="resultstest/Official Proposal.pdf" target="_blank" rel="noopener noreferrer">
                                <li>Result 1</li>
                            </a>
                            <a href="resultstest/Official Proposal.pdf" target="_blank" rel="noopener noreferrer">
                                <li>Result 1</li>
                            </a>
                        </ul>
                        <ul>
                            <p class="noticetitle" style="margin: 5px;">Notice 1</p>
                            <a href="resultstest/Official Proposal.pdf" target="_blank" rel="noopener noreferrer">
                                <li>Result 1</li>
                            </a>
                            <a href="resultstest/Official Proposal.pdf" target="_blank" rel="noopener noreferrer">
                                <li>Result 1</li>
                            </a>
                            <a href="resultstest/Official Proposal.pdf" target="_blank" rel="noopener noreferrer">
                                <li>Result 1</li>
                            </a>
                            <a href="resultstest/Official Proposal.pdf" target="_blank" rel="noopener noreferrer">
                                <li>Result 1</li>
                            </a>
                            <a href="resultstest/Official Proposal.pdf" target="_blank" rel="noopener noreferrer">
                                <li>Result 1</li>
                            </a>
                        </ul>
                        <ul>
                            <p class="noticetitle" style="margin: 5px;">Notice 1</p>
                            <a href="resultstest/Official Proposal.pdf" target="_blank" rel="noopener noreferrer">
                                <li>Result 1</li>
                            </a>
                            <a href="resultstest/Official Proposal.pdf" target="_blank" rel="noopener noreferrer">
                                <li>Result 1</li>
                            </a>
                            <a href="resultstest/Official Proposal.pdf" target="_blank" rel="noopener noreferrer">
                                <li>Result 1</li>
                            </a>
                            <a href="resultstest/Official Proposal.pdf" target="_blank" rel="noopener noreferrer">
                                <li>Result 1</li>
                            </a>
                            <a href="resultstest/Official Proposal.pdf" target="_blank" rel="noopener noreferrer">
                                <li>Result 1</li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="popupnotice" id="popup0">
            <div class="popupcontent">
                <img src="photo/FloodedKabulwide.png">
                <p class="noticetitle" style="margin: 5px;text-align: left;font-size: 24px;">Notice 1</p>
                <p class="noticedate" style="margin: 5px;text-align: left;">Posted On: 7th July 2023</p>
                <p class="noticetext"
                    style="margin: 5px; height: 90px;text-align: left;overflow: hidden;overflow-y: scroll;">See what
                    plans we have and what events we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.</p>
                <button type="button" onclick="closepopup(0)">Close</button>
            </div>
        </div>
        <div class="popupnotice" id="popup1">
            <div class="popupcontent">
                <img src="photo/FloodedKabulwide.png">
                <p class="noticetitle" style="margin: 5px;text-align: left;font-size: 24px;">Notice 2</p>
                <p class="noticedate" style="margin: 5px;text-align: left;">Posted On: 7th July 2023</p>
                <p class="noticetext"
                    style="margin: 5px; height: 90px;text-align: left;overflow: hidden;overflow-y: scroll;">See what
                    plans we have and what events we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.</p>
                <button type="button" onclick="closepopup(1)">Close</button>
            </div>
        </div>
        <div class="popupnotice" id="popup2">
            <div class="popupcontent">
                <img src="photo/FloodedKabulwide.png">
                <p class="noticetitle" style="margin: 5px;text-align: left;font-size: 24px;">Notice 3</p>
                <p class="noticedate" style="margin: 5px;text-align: left;">Posted On: 7th July 2023</p>
                <p class="noticetext"
                    style="margin: 5px; height: 90px;text-align: left;overflow: hidden;overflow-y: scroll;">See what
                    plans we have and what events we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.</p>
                <button type="button" onclick="closepopup(2)">Close</button>
            </div>
        </div>
        <div class="popupnotice" id="popup3">
            <div class="popupcontent">
                <img src="photo/FloodedKabulwide.png">
                <p class="noticetitle" style="margin: 5px;text-align: left;font-size: 24px;">Notice 4</p>
                <p class="noticedate" style="margin: 5px;text-align: left;">Posted On: 7th July 2023</p>
                <p class="noticetext"
                    style="margin: 5px; height: 90px;text-align: left;overflow: hidden;overflow-y: scroll;">See what
                    plans we have and what events we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.</p>
                <button type="button" onclick="closepopup(3)">Close</button>
            </div>
        </div>
        <div class="popupnotice" id="popup4">
            <div class="popupcontent">
                <img src="photo/FloodedKabulwide.png">
                <p class="noticetitle" style="margin: 5px;text-align: left;font-size: 24px;">Notice 5</p>
                <p class="noticedate" style="margin: 5px;text-align: left;">Posted On: 7th July 2023</p>
                <p class="noticetext"
                    style="margin: 5px; height: 90px;text-align: left;overflow: hidden;overflow-y: scroll;">See what
                    plans we have and what events we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.See what plans we have and what events
                    we are looking forward to.
                    Results are also published here so be sure to check them out.</p>
                <button type="button" onclick="closepopup(4)">Close</button>
            </div>
        </div>


        <div class="footer-clean">
            <footer>
              <div class="responsive-container-block">
                <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12" style="width:80%;">
                  <div class="maps" style="position: relative; float: left;">
                    <iframe
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3534.4475013421393!2d85.31652587497275!3d27.641623228388042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb17e23effe8e7%3A0x59718c25400cd926!2sAim%20Gurkha%20Training%20Centre!5e0!3m2!1sen!2sus!4v1688035424975!5m2!1sen!2sus"
                      width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"></iframe>
      
                  </div>
                  <div style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; text-align: left;padding: 30px;">
      
      
                    <div style="position: relative;">
                      <h3 class="introtitle" style="text-align:left;padding-left: 0px;margin-left: 0px;">Services</h3>
                      <ul style="text-align:left;">
                        <li><a href="#">Web design</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Hosting</a></li>
                      </ul>
      
                    </div>
                    <div style="position: relative;">
                      <h3 class="introtitle" style="text-align:left;padding-left: 0px;margin-left: 0px;">About</h3>
                      <ul style="text-align:left;">
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Legacy</a></li>
                      </ul>
                    </div>
                    <div style="position: relative;">
                      <h3 class="introtitle" style="text-align:left;padding-left: 0px;margin-left: 0px;">Careers</h3>
                      <ul style="text-align:left;">
                        <li><a href="#">Job openings</a></li>
                        <li><a href="#">Employee success</a></li>
                        <li><a href="#">Benefits</a></li>
                      </ul>
                    </div>
                    <div style="position: relative;">
                      <h3 class="introtitle" style="text-align:left;padding-left: 0px;margin-left: 0px;">Aim Gurkha</h3>
                      <ul style="text-align:left;">
                        <li><a href="#">Dholahity, Lalitpur</a></li>
                        <li><a href="#">aimgurkha@email.com.np</a></li>
                        <li><a href="#">01-5574095/9851046632</a></li>
      
                      </ul>
                    </div>
                  </div>
      
                  <div style="clear:both;"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i
                        class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a
                      href="#"><i class="icon ion-social-instagram"></i></a>
                    <p class="copyright" >Aim Gurkha <br> ©2023 All Rights Reserved</p>
                  </div>
                </div>
              </div>
            </footer>
          </div>
    </div>

    <script src="jscript.js"></script>
    <script>
        function textchange(i) {
            document.getElementsByClassName("noticetext")[i].style.color = "#CDCEC8";

        }

        function textrevert(i) {
            document.getElementsByClassName("noticetext")[i].style.color = "#505541";

        }


        function openpopup(i) {
            let popup = document.getElementById("popup" + i);
            popup.classList.add("open-popup");
        }

        function closepopup(i) {
            let popup = document.getElementById("popup" + i);
            popup.classList.remove("open-popup");
        }
    </script>
</body>

</html>