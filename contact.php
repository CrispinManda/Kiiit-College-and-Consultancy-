<?php
/**
 * Template Name: contact Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
   

<div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold mb-sm-3 mb-2">Contact Us</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Contact Us</li>
                </ul>
            </div>
        </section>
    </div>
    <!-- //inner banner -->
	<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->

 
</div>
    <!-- contact -->
    <section class="contact py-5" id="contact">
        <div class="container py-md-4 py-3">
            <div class="title-main text-center mx-auto mb-md-4">
                <h3 class="title-big">Get In Touch</h3>
                <p class="sub-title mt-2">Cum doctus civibus efficiantur in imperdiet deterruisset. Cras efficitur,
                    metus
                    gravida suscipit cursus, dui diam pre lorem id
                    lectus.</p>
            </div>
            <div class="main-grid-contact">
                <div class="row mt-5 mx-0">
                    <!-- map -->
                    <div class="col-lg-6 map mt-lg-0 mt-3">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d19997.197063424128!2d36.945046832760944!3d-0.42343639949982705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x18285e01f02c2aa3%3A0x6bd4c6b66b9e0413!2sBatian%20Building%2C%20Gakere%20Rd%2C%20Nyeri!3m2!1d-0.4234418!2d36.953322!4m5!1s0x18285e01f02c2aa3%3A0x6bd4c6b66b9e0413!2sBatian%20Building%2C%20Gakere%20Rd%2C%20Nyeri!3m2!1d-0.4234418!2d36.953322!5e0!3m2!1sen!2ske!4v1645980057060" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                    </div>
                    <div class="col-lg-6 content-form-right p-0">
                        <div class="form-w3ls p-md-5 p-4">
                            <h4 class="mb-4 sec-title-w3">Send us a message</h4>
                            <form id="contactForm" method="post" action="https://formspree.io/f/meqykzoq">
                                <div class="row">
                                    <div class="col-sm-6 form-group pr-sm-1">
                                        <input class="form-control" type="text" name="firstName" id="w3lFirstName" placeholder="First Name" required="">
                                    </div>
                                    <div class="col-sm-6 form-group pl-sm-1">
                                        <input class="form-control" type="text" name="lastName" id="w3lLastName" placeholder="Last Name" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="email" name="email" id="w3lEmail" placeholder="Email" required="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="tel" name="phoneNumber" id="w3lPhoneNumber" placeholder="Phone Number" required="">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="w3lMessage" placeholder="Message" required=""></textarea>
                                </div>
                                <div class="input-group1 text-right">
                                    <button class="btn button-style" type="submit" onclick="clearForm()">Submit
                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <script>
                        function clearForm() {
                            document.getElementById("contactForm").reset();
                        }
                    </script>

                </div>
            </div>
        </div>
    </section>
    <!-- //contact -->
	<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->
 
</div>
    <!-- support -->
    <div class="support py-5" id="support">
        <div class="container pb-md-5 pb-3">
            <h3 class="title-w3ls text-center mb-5">Help & Support</h3>
            <div class="row support-bottom text-center mb-5">
                <div class="col-lg-4 col-sm-6 support-grid">
                    <span class="fa fa-laptop"></span>
                    <h5 class="text-uppercase mt-3 mb-2">Online Support</h5>
                    <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
                    <a href="#call" class="btn button-style button-2 mt-4">
                        Call Now
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 support-grid mt-sm-0 mt-4">
                    <span class="fa fa-comments"></span>
                    <h5 class="text-uppercase mt-3 mb-2">Live Chat 24/7</h5>
                    <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
                    <a href="#chat" class="btn button-style button-2 mt-4">
                        Let's Chat
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 support-grid mt-lg-0 mt-4">
                    <span class="fa fa-question"></span>
                    <h5 class="text-uppercase mt-3 mb-2">Any Questions</h5>
                    <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
                    <a href="#ask" class="btn button-style button-2 mt-4">
                        Ask Now
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- support -->
	<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->
 
</div>
    <!-- footer -->

<?php get_footer()?>    