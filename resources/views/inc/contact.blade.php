<!-- BEGIN CONTACT SECTION -->
<section id="contact">
    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="heading-left-light">
                        <h2>Say hello to Educlex</h2>
                        <p>Send your queries and register with us <br> for your training needs</p>
                        <p>Contact No: +91-7053601998</p>
                    </div>
                </div>
                <div class="col-sm-6">
                  <form class="form" action="contact/submit" method="post" name="contact_form">

                    {{csrf_field()}}
                    <div class="form">
                        <div class="form-wrap">
                            <div class="form-wrap-group">
                                <input type="text" placeholder="Your Name" class="form-control" name="name">
                                <input type="text" placeholder="Subject" class="border-top-transparent form-control" name="subject">
                            </div>
                            <div class="form-wrap-group border-left-transparent">
                                <input type="text" placeholder="Your Email" class="form-control" name="email">
                                <input type="text" placeholder="Contact Phone" class="border-top-transparent form-control" name="phone">
                            </div>
                        </div>
                    </div>
                    <textarea rows="8" name="message" placeholder="Write comment here ..." class="border-top-transparent form-control"></textarea>
                    <button type="submit" class="btn-danger btn-md btn-block">Send it</button>
                </form>
                </div>
            </div><!-- //end row -->
        </div>
    </div>
    <!-- End Footer -->

    <!-- Footer Coypright -->
    <div class="footer-copyright">
        <div class="container">
            <h3>Verclex Network Pvt Ltd</h3>
            <ul class="copyright-socials">
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
            <P>All Rights Reserved.</P>
        </div>
    </div>
    <!-- End Footer Coypright -->
</section>
<!-- END CONTACT SECTION -->
