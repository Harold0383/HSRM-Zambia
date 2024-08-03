<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>HSRM</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main">
        <h1 class="head">Covid19</h1>

        <div class="hero">

            <div class="form">
                <form action="submit.php" method="post">
                    <div class="subheading">
                        <h2>Health System Response Monitor Zambia</h2>
                        <h4>Details Form</h4>
                    </div>


                    <h3></h3>
                    <div class="input-group">
                        <input type="text" id="FullName" name="fullNames" required />
                        <label for="fullname">Full name:</label>

                    </div>


                    <div class="row">
                        <div class="input-group">
                            <input type="text" id="phoneNumber" name="citizen_phone" required />
                            <label for="tel">Phone:</label>
                        </div>

                        <div class="input-group">
                            <input type="text" name="citizen_address" required />
                            <label for="address">Address:</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-group">
                            <input type="text" id="townName" name="town_name" required />
                            <label for="town">Town:</label>

                        </div>

                        <div class="input-group">
                            <input type="text" id="districtName" name="district_name" required />
                            <label for="district">District:</label>
                        </div>
                    </div>

                    <div class="row">

                        <div class="input-group">
                            <input type="datetime-local" id="localtime" name="date_time" required />
                            <label for="date_time"></label>

                        </div>
                        <div class="input-group">
                            <input type="text" id="provinceName" name="province_name" required />
                            <label for="district">Province:</label>
                        </div>


                    </div>


                    <div class="input-group">
                        <textarea id="responce" name="Response" required></textarea>
                        <label for="response">Response</label>
                    </div>
                    <a href="National.html">
                        <div class="button"><input type="submit" value="SUBMIT" id="footer-email-btn" name="submit"></div>
                    </a>


                </form>

            </div>

        </div>
    </div>

    <div class="footer-container">
        <div class="footer">
            <div class="footer-heading footer-1">
                <h3>About us</h3>
                <a href="#">Harold Nhlane</a>
                <a href="#">haroldnhlne@yahoo.com</a>
                <a href="#">+260 968611795</a>
                <a href="#">2104346036</a>
            </div>

            <div class="footer-email-form">
                <h3>Join our news letter</h3>
                <div class="email-input"><input type="email" placeholder="enter your email" id="footer email"><input type="submit" value="sign up" id="footer-email-btn">
                </div>



            </div>
        </div>
    </div>

</body>

</html>
