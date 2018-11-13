<!DOCTYPE html>
<html lang="en">
@include('head', ['title' => "Contact Us"])
    <body>
      @include('header', ['title' => "Contact Us"])
        <!--contact-page-conent-area start -->
        <div class="contact-page-conent-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-7">
                       <div class="contact-page-form">
                           <h3>Get in touch</h3>
                           <form action="/contact-details" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                               <div class="row">
                                   <div class="col-md-6">
                                       <label for="contact-us-name">Name*</label>
                                       <input id="contact-us-name" name="name" type="text">
                                   </div>
                                   <div class="col-md-6">
                                       <label for="contact-us-email">Mobile Number*</label>
                                       <input id="contact-us-email" name="number" type="text">
                                   </div>
                               </div>
                               <label for="contact-us-subject">Subject*</label>
                               <input id="contact-us-subject" name="subject" type="text">
                               <label for="contact-us-message">Message*</label>
                               <textarea name="message" id="contact-us-message" cols="30" rows="10"></textarea>
                               <button type="submit" class="pink-btn">Submit</button>
                           </form>

                       </div> 
                    </div>
                    <div class="col-md-4 col-sm-5">
                        <div class="contact-us-right-area">
                            <h3>Contact Us</h3>
                            <a class="contact-info-box" href="#"><i class="zmdi zmdi-home"></i>Kimaya Travel Managemnet</a>
                            <a class="contact-info-box" href="#"><i class="zmdi zmdi-phone"></i>96 7749 9655 <br>96 0000 6409</a>
                            <a class="contact-info-box" href="#"><i class="zmdi zmdi-email"></i>kimaya.asia@gmail.com <br>bookings@kimaya.asia</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--contact-page-conent-area end -->
        <!--contact-page-socials-area start -->
        <div class="contact-page-socials-area text-center padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="social-links-icon">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--contact-page-socials-area end -->
@include('footer')
@include('script')
    </body>
</html>
