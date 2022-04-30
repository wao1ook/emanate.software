<!doctype html>
<html lang="en">

<?php include 'inc/head.php'; ?>

<body>
<?php include 'inc/preloader.php'; ?>

<?php include 'inc/menu.php'; ?>

<header class="page-header">
    <div class="video-bg">
        <img src="images/hello.jpg" alt="Emanate Software">
    </div>
    <div class="container">
        <h1>Howdy</h1>
        <p>TO CREATE A POWERFUL PROJECT ONCE, A BIT OF LUCK IS ENOUGH</p>
    </div>
    <?php include 'inc/aside.php' ?>
</header>

<section class="hello">
    <div class="container">
        <div class="row">
            <div class="col-12 wow fadeIn">
                <h6>LET'S HAVE COFFEE TOGETHER</h6>
                <h2 data-text="Howdy">Come visit us and say hello !!</h2>
            </div>
            <div class="col-md-4 wow fadeIn">
                <address>
                    <b>Address</b>
                    <p>Dae es Salaam, Tanzania</p>
                </address>
            </div>
            <div class="col-md-4 wow fadeIn" data-wow-delay="0.05s">
                <address>
                    <b>Phone</b>
                    <p>+255 656 791 558<br>+255 766 130 227</p>
                </address>
            </div>
            <div class="col-md-4 wow fadeIn" data-wow-delay="0.10s">
                <address>
                    <b>Email</b>
                    <a href="#">hello@emanate.software</a>
                </address>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-12 wow fadeIn" data-wow-delay="0.05s">
                <form class="row inner" id="contact" name="contact" method="post">
                    <div class="form-group col-sm-6 col-12">
                        <label for="first_name"><span>First Name</span></label>
                        <input type="text" name="first_name" id="first_name" required>
                    </div>
                    <div class="form-group col-sm-6 col-12">
                        <label for="last_name"><span>Last Name</span></label>
                        <input type="text" name="last_name" id="last_name" required>
                    </div>
                    <div class="form-group col-sm-6 col-12">
                        <label for="email"><span>Email Address</span></label>
                        <input type="text" name="email" id="email" required>
                    </div>
                    <div class="form-group col-sm-6 col-12">
                        <label for="subject"><span>Subject</span></label>
                        <input type="text" name="subject" id="subject" required>
                    </div>
                    <div class="form-group col-12">
                        <label for="message"><span>Your message</span></label>
                        <textarea name="message" id="message" required></textarea>
                    </div>
                    <div class="form-group col-12">
                        <button id="submit" type="submit" name="submit">SUBMIT</button>
                    </div>
                </form>
                <div id="success" class="alert alert-success" role="alert"> Your message was sent successfully! We will
                    be in touch as soon as we can.
                </div>
                <div id="error" class="alert alert-danger" role="alert"> Something went wrong, try refreshing and
                    submitting the form again.
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'inc/footer.php'; ?>

<?php include 'inc/scripts.php' ?>
</body>
</html>