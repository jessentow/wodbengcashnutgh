<!-- footer start -->
<footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="./logo-a-bg.png" width="120" alt="logo">

                                </a>
                            </div>
                            <p>
                                Exports raw cashew nuts
                            </p>
                            <!-- <p> -->
                                <!-- Firmament morning sixth subdue darkness -->
                                <!-- creeping gathered divide. -->
                            <!-- </p> -->
                            <!-- <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div> -->

                        </div>
                    </div>
                    <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Services
                            </h3>
                            <ul>
                                <li><a href="#">Exports raw cashew nuts</a></li>
                                <li><a href="#">Export muskmelon seeds</a></li>
                                <!-- <li><a href="#">Finance</a></li> -->
                            </ul>

                        </div>
                    </div>
                
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Address
                            </h3>
                            <ul>
                                    <li> East Legon Hills, Accra - Ghana</li>
                                    <li>+233-24 362 1621</li>
                                    <li><a href="#"> contact@wodbengcashnut.com</a></li>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Wodbeng</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->

    <!-- link that opens popup -->

    <!-- form itself end-->
    <form id="test-form contact-form" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="popup_header">
                    <h3>Send us a description of your inquiry</h3>
                </div>
                <div class="custom_form">
                        <div class="row">
                                <div class="col-xl-12">
                                    <input type="text" placeholder="Your Name">
                                </div>
                                <div class="col-xl-12">
                                    <input type="email" placeholder="Email">
                                </div>
                                <div class="col-xl-12">
                                    <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                                </div>
                                <div class="col-xl-12">
                                    <button type="submit" class="boxed-btn3">Send</button>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </form>
    <!-- form itself end -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/slick.min.js"></script>
    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>

    <script>
        
        $(function () {
            
            console.log('hi');
            console.log('jq works');

          });

        // ajax call
          let postData = {
            'name' : "new user kwame",
            'message' : "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora ipsam sed assumenda illo quod veritatis quam veniam deleniti vero saepe nulla unde tempore voluptatum aliquam nostrum, excepturi error consectetur aliquid sunt hic non dolorum? Inventore maxime nulla ea fugit est aliquam eius fuga eum et fugiat dolorum animi dicta ab, maiores ipsam veritatis ratione officia, repellat magnam velit vitae quasi eaque doloribus provident. Aperiam deleniti consectetur voluptates amet, obcaecati exercitationem aliquam porro quam dolor illum ad quisquam tempora vel ipsa. 078954645",

          }



        $.ajax({
          type: "POST",
          url: "./route.php?func=sendMail",
          data: postData,
          success: function (response) {
            console.log(response);
            
          },
          error : function (response) {
            console.log(response);
          }
        });
      

    </script>

    <!-- added css -->
        <style>
            .font-this{
                color: white; font-size:22px;  font-weight:300;
            }
            body > div.about_btn.container{
        /* visibility: hidden; */
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 50px;
        margin-bottom: 50px;
        margin-left: auto;
        margin-right: auto;
    }

    body > div.about_btn.container > a{
        font-size: 22px;
        width: 200px;
        height: 10vh;
        padding: auto;
    }
    </style>

    <link rel="stylesheet" href="../addedstyles.css">

<script src="https://unpkg.com/vue@next"></script>

<script>
        $('#sticky-header').css('background-color', 'white'); 

</script>
