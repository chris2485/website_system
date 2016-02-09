<!DOCTYPE html>
<!-- saved from url=(0022)http://localhost:1223/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Informatics College</title>
    <link href="http://localhost:1223/Content/images/info_logo.png" rel="shortcut icon">
    <link href="./files/main.css" rel="stylesheet" type="text/css">
    <link href="./files/web.css" rel="stylesheet" type="text/css">
    <link href="./files/device.css" rel="stylesheet" type="text/css">
    <script src="./files/jquery-2.1.4.min.js" type="text/javascript"></script>
</head>

<body>


<div id="web">
    <div class="lx_menu">
        <ul>
            <li><a href="http://localhost:1223/">HOME <img src="./files/house.png"></a></li>
            <li><span class="course_b">COURSES <img src="./files/books.png"></span></li>
            <li><span class="branch_b">BRANCH <img src="./files/location.png"></span></li>
            <li><span class="about_b">ABOUT <img src="./files/person_circle.png"></span></li>
            <li><span class="contact_b">CONTACT US <img src="./files/paper_clip.png"></span></li>
            <li><a href="http://localhost/website_system/public/blog">iLIFE <img src="./files/ilife.png"></a></li>
        </ul>
    </div>

    <div class="lx_side_panel">
        <div class="title">
            <a href="http://localhost:1223/"><img src="./files/informatics.png"></a>
        </div>
        <div class="content">
            <div class="why_who">
                <h1>WHY<br><span>INFORMATICS?</span></h1>
                <p class="paragraph">Informatics Philippines is the leading international provider of ICT training and education in the Philippines, since 1994. Informatics Philippines offers corporate productivity, business solutions, higher education from undergraduate to postgraduate...</p>
                <p style="text-align: right; margin-top: 10px"><button class="button" id="why_b">READ MORE</button></p>
            </div>

            <div class="why_who">
                <h1>WHO ARE<br><span>INFORMATICS?</span></h1>
                <p class="paragraph">People who go to Informatics are SHS, BS, foreign-exchange students, game designers, animators, mobile and wed developers; people who train for office skills, call center TESDA...</p>
                <p style="text-align: right; margin-top: 10px"><button class="button" id="who_b">READ MORE</button></p>
            </div>

            <div class="follow">
                <table>
                    <tbody><tr>
                        <td><a href="https://www.facebook.com/pages/Informatics-Eastwood"><img src="./files/fb.png"></a></td>
                        <td><a href="http://www.youtube.com/"><img src="./files/yt.png"></a></td>
                        <td><a href="http://www.twitter.com/"><img src="./files/twt.png"></a></td>
                    </tr>
                    </tbody></table>
            </div>
        </div>
    </div>
    <div class="lx_slider">
        <div class="prev_next" style="margin-top: 70px">
            <div class="mip">
                <div class="prev" onclick="Prev()">
                    <p>&lt;</p>
                </div>
                <div class="next" onclick="Next()">
                    <p>&gt;</p>
                </div>
            </div>
        </div>
        <div class="slides">
            <div class="image" id="1" style="display: block; background-image: url('files/1.jpg')">
                <div class="blacker"></div>
                <div class="message">
                    <div class="mid">
                        <h1>NOW ACCEPTING<br><span>SENIOR HIGH SCHOOL</span><br>STUDENTS</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p><a href="http://localhost:1223/#"><button class="button apply_b">APPLY NOW</button></a></p>
                    </div>
                </div>
            </div>
            <div class="image" id="2" style="background-image: url('files/2.jpg')">
                <div class="blacker"></div>
                <div class="message">
                    <div class="mid">
                        <h1>The <span>RIGHT</span> course for you is based on your <span>TYPE</span> of personality.</h1>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p><a href="http://localhost:1223/#"><button class="button personality_b">PERSONALITY TEST</button></a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="lx_buttons">
            <div class="selected" id="b-1" onclick="Goto(1)"></div>
            <div id="b-2" onclick="Goto(2)"></div>
        </div>
    </div>

    <script type="text/javascript">

        sliderInt = 1;
        sliderNext = 2;

        $('#web .lx_slider .slides .image#1').fadeIn('slow');
        StartSlider();

        $('#web .lx_slider .slides .image').hover(function () {
            window.clearInterval(loop);
        }, function () {
            StartSlider();
        });

        function Goto(num) {
            if (sliderInt != num) {
                window.clearInterval(loop);

                $('#web .lx_slider .slides .image').fadeOut('slow');
                $('#web .lx_slider .slides .image#' + num).fadeIn('slow');

                $('.lx_buttons div').removeClass('selected');
                $('.lx_buttons div#b-' + num).addClass('selected');

                sliderInt = num;
                sliderNext = num + 1;

                StartSlider();
            }
        }

        function Prev() {
            newSlide = sliderInt - 1;
            ShowSlider(newSlide);
        }

        function Next() {
            newSlide = sliderInt + 1;
            ShowSlider(newSlide);
        }

        function ShowSlider(num) {
            window.clearInterval(loop);
            if (num > count) {
                num = 1;
            }
            else if (num < 1) {
                num = count;
            }

            $('.lx_slider .slides .image').fadeOut('slow');
            $('.lx_slider .slides .image#' + num).fadeIn('slow');

            $('.lx_buttons div').removeClass('selected');
            $('.lx_buttons div#b-' + num).addClass('selected');

            sliderInt = num;
            sliderNext = num + 1;

            StartSlider();
        }

        function StartSlider() {
            count = 2;

            loop = setInterval(function () {
                if (sliderNext > count) {
                    sliderInt = 1;
                    sliderNext = 1;
                }

                $('#web .lx_slider .slides .image').fadeOut('slow');
                $('#web .lx_slider .slides .image#' + sliderNext).fadeIn('slow');

                $('.lx_buttons div').removeClass('selected');
                $('.lx_buttons div#b-' + sliderNext).addClass('selected');

                sliderInt = sliderNext;
                sliderNext++;
            }, 15000);
        }

    </script>
    <div class="RGBABG">
        <div class="mid">
            <div class="panel fadeInDown" style="width: 400px">
                <div id="why_output" style="display: none">
                    <h1>WHY<br><span>INFORMATICS?</span></h1>
                    <p>Informatics Philippines is the leading international provider of ICT training and education in the Philippines, since 1994. Informatics Philippines offers corporate productivity, business solutions, higher education from undergraduate to postgraduate degree completions; and now senior high school. Informatics Philippines is part of the Informatics Group of Singapore and is associated with member campuses and universities worldwide.</p>
                    <img src="./files/why.png">
                </div>
                <div id="who_output" style="display: none">
                    <h1>WHO ARE<br><span>INFORMATICS?</span></h1>
                    <p>People who go to Informatics are SHS, BS, foreign-exchange students, game designers, animators, mobile and wed developers; people who train for office skills, call center TESDA-accreditation and other international IT certificates for working abroad; as well as entrepreneurs, housewives and senior citizens who want to learn short courses in ICT.</p>
                    <img src="./files/why.png">
                </div>
            </div>
        </div>
    </div>

    <div id="lx_contact_left">
    </div>
    <div id="lx_contact_right">
        <div class="container">
            <div class="mid">
                <p style="margin-bottom: 40px"><button id="back_contact">BACK</button></p>
                <h1><span>CONTACT</span> US</h1>
                <h2>We will appreciate this very much.</h2>
                <br><br>
                <form action="http://localhost:1223/Home/SendMessage" method="post">                    <p class="message">
                        <input class="textbox" data-val="true" data-val-required="The sender_name field is required." id="contacts_sender_name" name="contacts.sender_name" placeholder="Name" type="text" value="">
                        <input class="textbox" data-val="true" data-val-required="The sender_email field is required." id="contacts_sender_email" name="contacts.sender_email" placeholder="Email" type="text" value="">
                        <br>
                        <textarea cols="20" id="contacts_sender_message" name="contacts.sender_message" placeholder="Message" rows="5"></textarea>
                        <br>
                        <input type="submit" value="SUBMIT" class="button">
                        <br><br>
                    </p>
                </form>                <table class="address">
                    <tbody><tr>
                        <td style="padding-bottom: 5px"><img src="./files/address.png"></td>
                        <td style="padding-left: 5px">
                            <strong>ADDRESS</strong><br>
                            ICITE Building Cyberpark Eastwood City, <br>
                            Fourth District Bagumbayan, Libis, <br>
                            Quezon City, 1200, Metro Manila<br>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top: 20px"><img src="./files/telephone.png"></td>
                        <td style="padding-top: 20px; padding-left: 5px">(02) 667 3095</td>
                    </tr>
                    </tbody></table>
                <table class="follow">
                    <tbody><tr>
                        <th colspan="3" style="padding-bottom: 10px"><strong>Find</strong> us: </th>
                    </tr>
                    <tr>
                        <td><a href="https://www.facebook.com/pages/Informatics-Eastwood"><img src="./files/fb.png"></a></td>
                        <td style="padding: 0px 10px"><a href="http://www.youtube.com/"><img src="./files/yt.png"></a></td>
                        <td><a href="http://www.twitter.com/"><img src="./files/twt.png"></a></td>
                    </tr>
                    </tbody></table>
            </div>
        </div>
    </div>

    <div id="lx_course_left">
        <div class="left">
            <div class="container">
                <div class="mid">
                    <div>&lt;</div>
                    <p>
                        <span>SHS</span>
                        <img src="./files/shs_head.png" onclick="ChangeTao(1)">
                    </p>
                    <p>
                        <span>B.S.</span>
                        <img src="./files/bs_head.png" onclick="ChangeTao(2)">
                    </p>
                    <p>
                        <span>Foreign</span>
                        <img src="./files/foreign_head.png" onclick="ChangeTao(3)">
                    </p>
                    <p>
                        <span style="margin-top: 15px">Skills Dev't</span>
                        <img src="./files/skills_head.png" onclick="ChangeTao(4)">
                    </p>
                    <p>
                        <span style="margin-top: 5px">Call Center Training</span>
                        <img src="./files/cct_head.png" onclick="ChangeTao(5)">
                    </p>
                    <p>
                        <span style="margin-top: 5px">Web &amp; Mobile</span>
                        <img src="./files/wm_head.png" onclick="ChangeTao(6)">
                    </p>
                    <p>
                        <span style="margin-top: 10px">Short Course</span>
                        <img src="./files/short_head.png" onclick="ChangeTao(7)">
                    </p>
                    <div>&gt;</div>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="container">
                <div class="mid">
                    <img id="img_1" src="./files/shs.png">
                    <img id="img_2" src="./files/bs.png">
                    <img id="img_3" src="./files/foreign.png">
                    <img id="img_4" src="./files/skills.png">
                    <img id="img_5" src="./files/cct.png">
                    <img id="img_6" src="./files/wm.png">
                    <img id="img_7" src="./files/short.png">
                </div>
            </div>
        </div>
    </div>
    <div id="lx_course_right">
        <div class="container">
            <p><button class="button" id="back_course" style="margin-bottom: 20px">BACK</button></p>
            <div id="tao_1" class="info">
                <h1>Senior High School (SHS)</h1>
                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h2>
                <table class="features">
                    <tbody><tr>
                        <th colspan="2">LESSONS: </th>
                    </tr>
                    <tr>
                        <td><img src="./files/android.png"></td>
                        <td>SYSTEMS AND APPLICATION DEVELOPMENT</td>
                    </tr>
                    <tr>
                        <td><img src="./files/businessman.png"></td>
                        <td>ACCOUNTANCY AND BUSINESS MANAGEMENT</td>
                    </tr>
                    <tr>
                        <td><img src="./files/paintbrush.png"></td>
                        <td>ANIMATION AND ILLUSTRATION</td>
                    </tr>
                    </tbody></table>
                <table class="informations" cellspacing="0">
                    <tbody><tr>
                        <th colspan="2">INFORMATION: </th>
                    </tr>
                    <tr>
                        <td style="width: 150px"><strong>Investment Costs: </strong></td>
                        <td>
                            <div class="percentage_bg">
                                <div class="percentage_val" style="width: 76%">
                                    <div class="mid">
                                        76%
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 150px"><strong>Requirements: </strong></td>
                        <td>
                            <div class="percentage_bg">
                                <div class="percentage_val" style="width: 68%">
                                    <div class="mid">
                                        68%
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 150px"><strong>Skills: </strong></td>
                        <td>
                            <div class="percentage_bg">
                                <div class="percentage_val" style="width: 86%">
                                    <div class="mid">
                                        86%
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody></table>
            </div>
            <div id="tao_2" class="info">
                <h1>Bachelor of Science (B. S.)</h1>
                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h2>
                <table class="features">
                    <tbody><tr>
                        <th colspan="2">LESSONS: </th>
                    </tr>
                    <tr>
                        <td><img src="./files/android.png"></td>
                        <td>SYSTEMS AND APPLICATION DEVELOPMENT</td>
                    </tr>
                    <tr>
                        <td><img src="./files/businessman.png"></td>
                        <td>ACCOUNTANCY AND BUSINESS MANAGEMENT</td>
                    </tr>
                    <tr>
                        <td><img src="./files/paintbrush.png"></td>
                        <td>ANIMATION AND ILLUSTRATION</td>
                    </tr>
                    </tbody></table>
                <table class="informations" cellspacing="0">
                    <tbody><tr>
                        <th colspan="2">INFORMATION: </th>
                    </tr>
                    <tr>
                        <td style="width: 150px"><strong>Investment Costs: </strong></td>
                        <td>
                            <div class="percentage_bg">
                                <div class="percentage_val" style="width: 84%">
                                    <div class="mid">
                                        84%
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 150px"><strong>Requirements: </strong></td>
                        <td>
                            <div class="percentage_bg">
                                <div class="percentage_val" style="width: 75%">
                                    <div class="mid">
                                        75%
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 150px"><strong>Skills: </strong></td>
                        <td>
                            <div class="percentage_bg">
                                <div class="percentage_val" style="width: 98%">
                                    <div class="mid">
                                        98%
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody></table>
            </div>

            <div style="clear: both"></div>

            <table class="buttons">
                <tbody><tr>
                    <td><button class="button">DEMO</button></td>
                    <td style="padding-left: 10px"><button class="button">APPLY NOW!</button></td>
                </tr>
                </tbody></table>
        </div>
    </div>

    <div id="lx_branch">
        <div class="container"><p>0, -1232</p></div>
    </div>

    <div id="apply_icon">
        <span class="apply_b">
            <span class="arrow"><span></span>APPLY NOW!</span>
            <img src="./files/owl.png">
        </span>
    </div>

    <div id="lx_apply">
        <div class="panel">
            <div style="padding: 0px 20px">
                <h1>Application Form</h1>
            </div>
            <form action="http://localhost:1223/Index/Apply" method="post">                <h2 style="margin-top: 10px">Academic Information</h2>
                <p>
                    Branch: <select class="textbox" id="branch_id" name="apply.branch_id" style="width: 88.9%"><option value="2">Caloocan - Informatics College</option>
                        <option value="1">Manila - Informatics College</option>
                    </select>
                </p>
                <p id="course_output">
                    Course: <select class="textbox" id="apply_course_id" name="apply.course_id" style="width: 88.9%"><option value="1">BSIT</option>
                    </select>
                </p>
                <h2 style="margin-top: 10px">Personal Background</h2>
                <p>
                    <input checked="true" data-val="true" data-val-required="The gender field is required." id="apply_gender" name="apply.gender" type="radio" value="Mr."> Mr.
                    <input id="apply_gender" name="apply.gender" type="radio" value="Ms."> Ms.
                    <input id="apply_gender" name="apply.gender" type="radio" value="Mrs."> Mrs.
                </p>
                <p>
                    <input class="textbox" data-val="true" data-val-required="The firstname field is required." id="apply_firstname" maxlength="45" name="apply.firstname" placeholder="Firstname" style="width: 30%" type="text" value="">
                    <input class="textbox" id="apply_middlename" maxlength="45" name="apply.middlename" placeholder="Middlename" style="width: 25.3%" type="text" value="">
                    <input class="textbox" data-val="true" data-val-required="The lastname field is required." id="apply_lastname" maxlength="45" name="apply.lastname" placeholder="Lastname" style="width: 30%" type="text" value="">
                </p>
                <p>
                    <input class="textbox" id="apply_telephone" maxlength="15" name="apply.telephone" placeholder="Telephone" style="width: 229px" type="text" value="">
                    <input class="textbox" data-val="true" data-val-required="The mobile field is required." id="apply_mobile" maxlength="15" name="apply.mobile" placeholder="Mobile" style="width: 229px" type="text" value="">
                </p>
                <p>
                    <input class="textbox" data-val="true" data-val-required="The email field is required." id="apply_email" maxlength="45" name="apply.email" placeholder="Email" style="width: 483px" type="email" value="">
                </p>
                <p>
                    <input class="textbox" data-val="true" data-val-required="The address field is required." id="apply_address" maxlength="200" name="apply.address" placeholder="Home Address" style="width: 483px" type="text" value="">
                </p>
                <h2 style="margin-top: 10px">Educational Background</h2>
                <p>
                    <input class="textbox" data-val="true" data-val-required="The hea field is required." id="apply_hea" maxlength="200" name="apply.hea" placeholder="Highest Educational Attainment" style="width: 483px" type="text" value="">
                </p>
                <p>
                    <input class="textbox" data-val="true" data-val-required="The lsa field is required." id="apply_lsa" maxlength="100" name="apply.lsa" placeholder="Last School Attended" style="width: 483px" type="text" value="">
                </p>
                <p>
                    <input class="textbox" data-val="true" data-val-required="The sa field is required." id="apply_sa" maxlength="200" name="apply.sa" placeholder="School Address" style="width: 483px" type="text" value="">
                </p>
                <table cellspacing="0" style="padding: 10px 20px; float: right">
                    <tbody><tr>
                        <td><input type="submit" value="SUBMIT" class="button"></td>
                        <td style="padding-top: 1px; padding-left: 5px"><span id="back_apply" class="button">CANCEL</span></td>
                    </tr>
                    </tbody></table>
            </form>        </div>
    </div>


    <div id="lx_about">
        <div class="header">
            <table cellspacing="0">
                <tbody><tr>
                    <td><h1>ABOUT US</h1></td>
                    <td>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </td>
                </tr>
                </tbody></table>
            <div class="content">
                <div class="panel">
                    <div class="image">
                        <img src="./files/male.png">
                    </div>
                    <div class="info">
                        <h1>MR. FIRSTNAME LASTNAME</h1>
                        <h2>President</h2>
                    </div>
                </div>
                <div class="panel">
                    <div class="image">
                        <img src="./files/female.png">
                    </div>
                    <div class="info">
                        <h1>MS. FIRSTNAME LASTNAME</h1>
                        <h2>Vice President - Sales</h2>
                    </div>
                </div>
                <div class="panel">
                    <div class="image">
                        <img src="./files/female.png">
                    </div>
                    <div class="info">
                        <h1>MS. FIRSTNAME LASTNAME</h1>
                        <h2>Vice President - Production</h2>
                    </div>
                </div>
                <div class="panel">
                    <div class="image">
                        <img src="./files/female.png">
                    </div>
                    <div class="info">
                        <h1>MS. FIRSTNAME LASTNAME</h1>
                        <h2>Vice President - Marketing</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./files/about.js" type="text/javascript"></script></div>
<div id="device">
    <p>Under Construction</p>
</div>

<script src="./files/process.js" type="text/javascript"></script>
<script src="./files/branch.js" type="text/javascript"></script>
<script src="./files/course.js" type="text/javascript"></script>
<script src="./files/contacts.js" type="text/javascript"></script>
<script src="./files/apply.js" type="text/javascript"></script>
<script type="text/javascript">
    $('#branch_id').change(function () {
        var id = $('#branch_id').val();
        $('#course_output').load('/Home/BranchCourse/' + id);
    });

    /*********************/

    $('#apply_icon').hover(function () {
        $('#apply_icon img').prop('src', 'files/owl_hand.png');
        $('#apply_icon .arrow').css({ display: 'initial' }).after(function () {
            $('#apply_icon .arrow').addClass('zoomIn').one('animationend', function () {
                $('#apply_icon .arrow').removeClass('zoomIn');
            });
        });
    }, function () {
        $('#apply_icon img').prop('src', 'files/owl.png');
        $('#apply_icon .arrow').css({ display: 'none' });
    });
</script>


</body></html>