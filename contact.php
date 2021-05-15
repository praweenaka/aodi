  <?php
include("header.php");
?>
        <!-- end of headerdd -->


        <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>Contact</h2>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li>Contact</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->


        <!-- start contact-pg-section -->
        <section class="contact-pg-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-3">
                        <div class="contact-info">
                            <ul>
                                <li>
                                    <div class="icon"><i class="fa fa-phone"></i></div>
                                    <p><span>Hotline</span> +94 777008982 </p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa fa-envelope"></i></div>
                                    <p><span>Email</span> kelum.aodi@outlook.com  </p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa fa-clock-o"></i></div>
                                    <p><span>Working Hours:</span> 8 Am to 5 Pm </p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa fa-location-arrow"></i></div>
                                    <p><span>Office</span> 263,Temple Road, Biyagama. </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-md-offset-1 col-md-8">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.1559546699627!2d79.98368671477328!3d6.990904894949843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2f89f4e0beb11%3A0x96d1b84efa78838!2sTemple%20Road!5e0!3m2!1sen!2slk!4v1618042912021!5m2!1sen!2slk" width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        
                    </div>
                </div> <!-- end row -->
                <div class="row">
                    <div class="col col-xs-12">
                        <form class="contact-form form contact-validation-active row" id="contact-form-s2">
                            <div class="col col-sm-6">
                                <label for="f-name">First Name</label>
                                <input type="text" class="form-control" id="f-name" name="f_name">
                            </div>
                            <div class="col col-sm-6">
                                <label for="l-name">Last Name</label>
                                <input type="text" class="form-control" id="l-name" name="l_name">
                            </div>
                            <div class="col col-sm-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="col col-sm-6">
                                <label for="phone">Phone No</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="col col-sm-12">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" name="note"></textarea>
                            </div>
                            <div class="col col-sm-12 submit-btn">
                                <button class="theme-btn">Submit</button>
                                <div id="loader">
                                    <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                                </div>
                            </div>
                            <div class="error-handling-messages">
                                <div id="success">Thank you</div>
                                <div id="error"> Error occurred while sending email. Please try again later. </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end contact-pg-section -->


        <?php include "footer.php" ?>