<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>kimweb</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/vendor.css">
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>
</head>

<body id="top">
    <header>
        <div class="row">

            <div class="top-bar">
                <a class="menu-toggle" href="#"><span>Menu</span></a>

                <div class="logo">
                </div>

                <nav id="main-nav-wrap">
                    <ul class="main-navigation">
                        <li><a href="/index.html" title="">home</a></li>
                    </ul>
                </nav>
            </div>

        </div>
    </header>




    <section id="contact">

        <div class="row section-intro">
            <div class="col-twelve">

                <h5>Contact</h5>
                <h1>I'd Love To Hear From You.</h1>

                <p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p>

            </div>
        </div>

        <div class="row contact-form">

            <div class="col-twelve">


                <form name="contactForm" id="contactForm" method="post" action="">
                    <fieldset>

                        <div class="form-field">
                            <input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="">
                        </div>
                        <div class="form-field">
                            <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="">
                        </div>
                        <div class="form-field">
                            <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
                        </div>
                        <div class="form-field">
                            <textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required=""></textarea>
                        </div>
                        <div class="form-field">
                            <button class="submitform">Submit</button>
                            <div id="submit-loader">
                                <div class="text-loader">Sending...</div>
                                <div class="s-loader">
                                    <div class="bounce1"></div>
                                    <div class="bounce2"></div>
                                    <div class="bounce3"></div>
                                </div>
                            </div>
                        </div>

                    </fieldset>
                </form>


                <div id="message-warning">
                </div>

                <div id="message-success">
                    <i class="fa fa-check"></i>Your message was sent, thank you!<br>
                </div>

            </div>

        </div>

        <div class="row contact-info">

            <div class="col-four tab-full">

                <div class="icon">
                    <i class="icon-pin"></i>
                </div>

                <h5>Where to find me</h5>

                <p>
                    17 rue Mauritanie quartier smara<br>
                    Youssoufia, Morocco<br>
                    46300
                </p>

            </div>

            <div class="col-four tab-full collapse">

                <div class="icon">
                    <i class="icon-mail"></i>
                </div>

                <h5>Email Me At</h5>

                <p>contact.nouaouri@gmail.com<br>
                    k.nouaouri@gmail.com
                </p>

            </div>

            <div class="col-four tab-full">

                <div class="icon">
                    <i class="icon-phone"></i>
                </div>

                <h5>Call Me At</h5>

                <p>Phone: (+212) 626 565 101<br>
                    Mobile: (+212) 638 746 084<br>

                </p>

            </div>

        </div>





        <footer>
            <div class="row">

                <div class="col-six tab-full pull-right social">

                    <ul class="footer-social">
                        <?php
                        if ($Call['twitter'] != "") {
                        ?>
                            <a href="<?= $Call['twitter'] ?>" class="twitter"><i class="icofont-twitter"></i></a>
                        <?php
                        }
                        if ($Call['facebook'] != "") {
                        ?>
                            <a href="<?= $Call['facebook'] ?>" class="facebook"><i class="fa fa-facebook"></i></a>
                        <?php
                        }
                        if ($Call['instagram'] != "") {
                        ?>
                            <a href="<?= $Call['instagram'] ?>" class="instagram"><i class="fa fa-instagram"></i></a>
                        <?php
                        }
                        if ($Call['skype'] != "") {
                        ?>
                            <a href="<?= $Call['instagram'] ?>" class="google-plus"><i class="fa fa-skype"></i></a>
                        <?php
                        }
                        if ($Call['linkedin'] != "") {
                        ?>
                            <a href="<?= $Call['linkedin'] ?>" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        <?php
                        }
                        if ($Call['github'] != "") {
                        ?>
                            <a href="<?= $Call['instagram'] ?>" class="github"><i class="fa fa-github"></i></a>
                        <?php
                        }
                        ?>
                    </ul>

                </div>

                <div class="col-six tab-full">
                    <div class="copyright">
                        <span>© Copyright kimweb 2020.</span>
                        <span>Design by <a href="http://www.youcode.ma/">kimweb</a></span>
                    </div>
                </div>

                <div id="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
                </div>

            </div>
        </footer>

        <div id="preloader">
            <div id="loader"></div>
        </div>


        <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

</body>

</html>