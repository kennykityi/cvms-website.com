<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </meta>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="h&f.css">
    <title> Login </title>
</head>

<body>
    <script src="Validate.js"></script>
    <header>
        <a href="https://www.microengine.net/">
            <img src="microengine-logo-22.jpg" alt="MicroEngine" style="width:220px;height:100px">
        </a>
    </header>

    <div class="box">
        <div class="container">
            <video autoplay muted loop width="100%" height="100%">
                <source src="VMS.mp4" type="video/mp4">
            </video>
        </div>

        <div class="form">
            <h1>LOGIN</h1>
            <form name="loginForm" onsubmit="return validateUser()">
                <label for="name" style="font-size: 20px;">Username : </label><br>
                <input type="text" id="name" name="name" placeholder="abcd" required><br><br>
                <label for="pass" style="font-size: 20px;">Password :</label><br>
                <input type="password" id="pass" name="pass" placeholder="abc123?" required><br><br>
                <button class="button" type="submit">Login</button>
            </form>
        </div>
    </div>

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
                    Tel : <a class="mobilesOnly" href="tel:+60379572008">(+603) 7957 2008</a>/<a class="mobilesOnly"
                        href="tel:1300 88 3925">1300 88 3925</a><br />
                </p>
            </div>
        </div>
    </footer>
</body>

</html>