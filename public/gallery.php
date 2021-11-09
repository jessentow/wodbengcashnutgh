
<?php $title = 'Products'; include_once './layouts/header.php';
?>

<body>
    <!-- header-start -->
<?php include_once './layouts/Navbar.php'; ?>
<div class="space"></div>
<div class="space"></div>


        <div class="gallery-container">
        <div class="jumbotron jumbotron-fluid" style="position: relative; top:30px;">
        <h1>Products Gallery</h1>
        </div>
        <div class="product-text container d-none">
            <h4>Products Gallery</h4>
        </div>
        <br>
        <div class="gallery">
                <div class="img-container">
                      <img src="./img/dickpics/1.jpeg" alt="about1" srcset="" data-original="single_blog_1.png">
                </div>

         <div class="img-container">
        <img src="./img/dickpics/2.png" alt="cashew fruit" srcset="" data-original="single_blog_2.png">
       </div>

       <div class="img-container">
       <img src="./img/dickpics/3.PNG" alt="about3" srcset="" data-original="single_blog_3.png">
      </div>
      <div class="img-container">
            <img src="./img/dickpics/sack.png" alt="about3" srcset="" data-original="single_blog_4.png">
      </div>
      <div class="img-container">
            <img src="./img/dickpics/8.jpeg" alt="about3" srcset="" data-original="single_blog_4.png">
      </div>
      <div class="img-container">
            <img src="./img/dickpics/w320.jpg" alt="about3" srcset="" data-original="single_blog_4.png">
      </div>
      <!-- <div class="img-container">
            <img src="./img/dickpics/5.PNG" alt="about3" srcset="" data-original="single_blog_4.png">
      </div> -->
      <div class="img-container">
            <img src="./img/dickpics/6.PNG" alt="about3" srcset="" data-original="single_blog_4.png">
      </div>
      <!-- <div class="img-container">
            <img src="./img/dickpics/7.PNG" alt="about3" srcset="" data-original="single_blog_4.png">
      </div> -->

      <!-- <div class="img-container">
            <img src="./img/dickpics/4.PNG" alt="about3" srcset="" data-original="single_blog_4.png">
      </div> -->
    
    </div>


        </div>
        <div class="space">
            <style>
                .space{
                    height: 10vh;
                }
            </style>
        </div>

        <style>
            .gallery-container{
                width: 90%;
                /* height: 60vh; */
                /* position:absolute; */
                text-align: center;
                margin: auto;
            }

            .gallery{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            min-height: 100vh;
            grid-gap: 0.5rem;

        }
        .img-container {
            overflow: hidden;
        }
        .img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.3s ease-out;
            cursor: pointer;
        }
        .img-container img:hover{
            transform: scale(1.2);
            /* position: fixed; */
        }

        @media (max-width: 567px) {
        .product-text{
            display: flex;
        }
        .jumbotron{
            display: none;
        }
        }
        </style>
    






<?php include_once './layouts/footer.php';