<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </meta>
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="h&f.css">
    <title>Visitor Registration</title>
</head>

<body>
    <script src="register.js"></script>
    <header>
        <a href="https://www.microengine.net/">
            <img src="microengine-logo-22.jpg" alt="MicroEngine" style="width: 230px; height:106px;">
        </a>

        <div class="icon">
            <a target="_self" href="login.html">
                <img src="logout_icon.png">
            </a>
            <div class="desc">Logout</div>
        </div>

        <div class="icon">
            <a target="_self" href="record.html">
                <img src="record_icon.png">
            </a>
            <div class="desc">Record</div>
        </div>

        <div class="icon">
            <a target="_self" href="register.html">
                <img src="register_icon.png">
            </a>
            <div class="desc">Register</div>
        </div>
    </header>

    <article>
        <div class="box">
            <div class="container">
                <img src="office1.jpg" class="picdesign" width="80%" height="80%">
            </div>


            <div class="form">
                <!--this class tittle not useful at all also-->
                <h1>Visitor Registration</h1>

                <div id="alert">

                </div>
                <form name="visitorReg" method="post" action="Validation.php">
                  
   
                    <div class="register">
                        <div>
                            <a>Visitor Name</a><br><input type="text" class="input" id="name" name="name" placeholder="Full Name" />
                            <br><br>
                        </div>

                        <div>
                            <input type="checkbox" id="gender" name="option" value="male" onchange="uncheck(this) " /><a>
                                Male </a>
                            <input type="checkbox" id="gender" name="option" value="female" onchange="uncheck(this)" /><a></a> Female </a>
                            <input type="checkbox" id="gender" name="option" value="other" onchange="uncheck(this)" /><a>
                                Other </a>
                            <br><br>
                        </div>

                        <div>
                            <a>Visitor Phone Number</a> <br><input type="tel" class="input" name="hp" id="hp" placeholder="010-0000000" />
                            <br><br>
                        </div>

                        <div>
                            <a>Visitor IC Number</a><br><input type="text" class="input" id="ic" name="ic" placeholder="000000-00-0000" />
                            <br><br>
                        </div>

                        <div>
                            <a>Visitor Email</a><br><input type="email" class="input" id="email" name="email" placeholder="xxx@gmail.com" />
                            <br><br>
                        </div>

                        <div>
                            <a>Date Visit</a><br><input type="date" class="input" id="sdate" name="sdate" />
                            <br><br>
                        </div>

                        <div>
                            <a>End Date </a><br><input type="date" class="input" id="ndate" name="ndate" />
                            <br><br>
                        </div>

                        <div>
                            <a>Purpose of Visit</a><br><textarea id="purpose" name="purpose"></textarea>
                            <br><br>
                        </div>

                        <div>
                            <a>Visitor Company</a><br><input type="text" class="input" id="com" name="com" placeholder="xxx Sdn. Bhd." />
                            <br><br>
                        </div>

                        <div>
                            <a>Contact Department </a><br><input type="text" class="input" id="depart" name="depart" placeholder="Human Resources" />
                            <br><br>
                        </div>

                        <div>
                            <button class="button" type="submit" name="submit" onsubmit="return validateDate();"><b>Register</b></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </article>

    <footer>
        <div class="row">
            <div class="column">
                <h2>About Us</h2>
                <p>MicroEngine was established in December 2000. <br />The company formed a mission in providing total
                    computerized solution <br />and superior services for the Security Access Control Industry
                    <br />needs
                    to enhance corporate image.
            </div>

            <div class="column">
                <h2>Contact Us</h2>
                <p><strong>MicroEngine Technology Sdn Bhd (535550-U)</strong><br />
                    Unit 11-06, Block A, Phileo Damansara 2,<br />
                    Section 16, Jalan 16/11, Off Jalan Damansara,<br />
                    46350 Petaling Jaya, Selangor Darul Ehsan,<br />
                    Malaysia.<br /><br />
                    Tel : <a class="mobilesOnly" href="tel:+60379572008">(+603) 7957 2008</a>/<a class="mobilesOnly" href="tel:1300 88 3925">1300 88 3925</a><br />
                </p>
            </div>
        </div>
    </footer>
</body>

</html>