<script>
   // window.location "./blank.php";
</script>

<?php $title = 'Home'; include_once './layouts/header.php';
?>

<body>
    <!-- header-start -->
<?php include_once './layouts/Navbar.php'; ?>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_2 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                            
                                     <h4 class="font-this">
                                         We supply cashew nuts, muskmelon seeds, and more</h4> <br>
                                      <h4 class="font-this">   We support the local community farmers, supply fertilizer, provide help   <br>
                                      with harvesting the cashew as well as advice on fertile land production and more. </h4>
                                         
                        <br>
                        <br>
                                         <!-- <p>  We provide solution for farmers that integrates with cooperatives,<br> producer organizations, agro-processors, small and medium enterprises, <br> and other organizations that work directly with family farmers</p> -->
                                <div class="video_service_btn">
                                    <!-- <a href="#" class="boxed-btn3">Our Servic</a> -->
                                    <a href="./contact.php" class="boxed-btn3-white"> <i class="fa fa-play"></i>
                                        contact us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- slider_area_end -->

      <!-- service_area_start -->
      <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50">
                        <h3>Cashew nuts Exports </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_service service_bg_1">
                        <div class="service_hover">
                            <!-- <img src="img/svg_icon/legal-paper.svg" alt=""> -->
                            <!-- <h3>Mellon Seeds</h3> -->
                            <div class="hover_content">
                                <div class="hover_content_inner">
                                    <!-- <h4>extra-text</h4> -->
                                    
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam in laborum iure nihil doloremque maxime voluptatem, aliquid ratione earum eligendi aspernatur nulla!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cash-text caption"><h3> Raw Cashew Nuts</h3></div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service service_bg_2">
                        <div class="service_hover">
                            <!-- <img src="img/svg_icon/case.svg" alt=""> -->
                            <!-- <h3>Dry Cashew Nuts</h3> -->
                            <div class="hover_content">
                                    <div class="hover_content_inner">
                                    <!-- <h4>extra-text</h4> -->
                                    
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam in laborum iure nihil doloremque maxime voluptatem, aliquid ratione earum eligendi aspernatur nulla!
                                    </p>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="cash-text"><h3>Staged Cashew Nuts</h3></div>

                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service service_bg_3">
                        <div class="service_hover">
                            <!-- <img src="img/svg_icon/survey.svg" alt=""> -->
                            <!-- <h3>Local</h3> -->
                            <div class="hover_content">
                                    <div class="hover_content_inner">
                                    <!-- <h4>extra-text</h4> -->
                                    
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam in laborum iure nihil doloremque maxime voluptatem, aliquid ratione earum eligendi aspernatur nulla!
                                    </p>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="cash-text"><h3> W320</h3></div>

                </div>
   
            </div>
        </div>
    </div>
    <!-- service_area_end -->


  
            </div>
        <!-- </div> -->
    </div>
    <!-- service_area_end -->



  

    <!-- about  -->
    <div class="fresh-background">

    <div class="about_btn container">
    <a class="boxed-btn3" href="about.php">About Us</a>
    </div>
    <!-- about  -->
    <div class="about_area ">
        <div class="container-fluid p-0">
            <div class="row no-gutters align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="about_image">
                        <img src="img/about/about.png" alt="" style="border-radius: 25px;">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about_info">
                    <h3 >Portfolio </h3> <br>
                        <h5 class="cool-fontp">CEO and Founder of Wodbeng Company.</h5>
                        <span class="text-muted"> Nana Dwobeng</span> <br>
                      The company has a great portfolio. 
We initially began by supporting the local community farmers with fertilizers and finance in order to
 meet our client’s demands, also supplying the raw cashew nuts and muskmelon seeds in shell with the local companies, small and medium enterprises, and other organizations that work directly with family farmers in Ghana and abroad. 
We are a company of farmers, working for farmers. We are united across the world, integrating agricultural produce and services through local and global supply chains.
                <br>
                    <h3>Main Business</h3>
                        <ul>
                            <li> We export cashew nut and muskmelon seeds </li>
                            <li> We do delivery of cashew nuts and muskmellon  </li>
                            <li> We supply fertilizer for cashew farm production</li>
                        </ul>
                   
                </div>
            </div>
        </div>
    
    <!--/ about  -->

    <!-- gallery -->

    <script>

        const imgContent = document.querySelectorAll('.img-content-hover');

function showImgContent(e) {
  for(var i = 0; i < imgContent.length; i++) {
    x = e.pageX;
    y = e.pageY;
    imgContent[i].style.transform = `translate3d(${x}px, ${y}px, 0)`;
  }
};

document.addEventListener('mousemove', showImgContent);
    </script>
    <!--/ gallery -->

   
   <!-- financial_solution -->
   <div class="financial_solution_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="financial" style="margin: auto;">
                        <h3> Shipping Policy</h3> 
                        <span class="cool-font">i.</span>  Copies of shipment documents are uploaded by the vendor within three hours of handling over the cargo to the shipping agent. 
 The hard copies will be sent by EMX to your doorstep before arrival of your goods.  
In case you need any special documents or additional paperwork please inform us in advance and we will confirm if those documents can be provide. <br> 

<br> 
<h3> Telegraphic Transfer</h3>
<span class="cool-font">ii.</span> We kindly ask clients to wire the prepaid amount to Wodbeng bank accounts payment confirmation such as bank swift to Wodbeng email on the invoice. 
Clients are encouraged to raise any issues/reservations they might have regarding making payments from their countries.
 <br> 
 <br> 
 <h3> Cancellations</h3>
<span class="cool-font">iii.</span> In the event that an order is canceled, the client will be responsible for all the cost incurred by vendor up to the point of cancellation.
                 
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="finance_thumb">
                        <img src="img/about/finance.png" alt="" style="border-radius: 25px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <!--/ financial_solution -->
    <!-- project  -->
    <div class="project_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="project_info text-center">
                        <p>Wodbeng we deliver to your doorstep</p>
                        <a href="./contact-form" class="boxed-btn3-white">Delivery</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ project  -->

    <?php include './layouts/footer.php'; ?>
    

    <style>
        .font-this{
            font-weight: 400;
            color:white;
        }
        .cool-font{
            font-weight: bold;
            font-size: 1.2rem;
            margin-left: 4px;
        }
        .single_service{
            margin-top: -10px;
            margin-bottom: -45px;
            cursor: pointer;
        }
        .cash-text{
            /* background-color:red; */
            display: flex;
            justify-content: center;
            justify-items: center;
            margin: auto;
            position: relative;
            top: -20px;
        }
        @media (max-width: 600px){

            div.slider_text {
            position: relative;
                bottom: -100px;
            }
        }
    </style>

    <script>
        $('.single_service').click(function (e) { 
            e.preventDefault();
            window.location = './gallery.php';
        });
    </script>
</body>

</html>