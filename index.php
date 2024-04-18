
<?php
include_once('hms/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='index.php'</script>";

} ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> DIETWISEPRO </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
     <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="about.css" />
</head>

    <body>

    <!-- ################# Header Starts Here#######################--->
    
      <header id="menu-jk">
    
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3  col-sm-12" style="color:#000;font-weight:bold; font-size:42px; margin-top: 1% !important; padding-top: 15px;" >SHRI
                       <a data-toggle="collapse" data-target="#menu" href="#menu" ><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#services">Features</a></li>
                            <li><a href="#about_us">About Us</a></li>
                            <li><a href="#gallery">DietChart</a></li>
                            <li><a href="#contact_us">Contact Us</a></li>
                            <li><a href="#logins">Logins</a></li>  
                        </ul>
                    </div>
                    <div class="col-sm-2 d-none d-lg-block appoint">
                        <a class="btn btn-success" href="hms/user-login.php">Book an Appointment</a>
                    </div>
                </div>

            </div>
        </div>
    </header>
    
     <!-- ################# Slider Starts Here#######################--->

     <div class="slider-detail">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>





    <div class="carousel-inner">
        <div class="carousel-item ">
            <img class="d-block w-100" src="https://www.healthkart.com/connect/wp-content/uploads/2022/07/900x500_thumbnail_HK-how-to-have-a-balanced-diet-1.png" alt="Second slide" style= "height:630px" >
            <div class="carousel-cover"></div>
            <div class="carousel-caption vdg-cur d-none d-md-block">
                <h5 class="animated bounceInDown">Shri, Dietician</h5>
    
                 
            
            </div>
        </div>
        
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://t3.ftcdn.net/jpg/00/71/17/86/360_F_71178629_W5OlftPXKPIIibMivzQCDppfGgXQ3WiQ.jpg" alt="Third slide"  style= "height:630px">
              <div class="carousel-cover"></div>
            <div class="carousel-caption vdg-cur d-none d-md-block">
                <h5 class="animated bounceInDown">Shri, Dietician</h5>
    
                 
            
            </div>
      
        </div>
        
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


</div>
    
  <!--  ************************* Logins ************************** -->
    
    
     <section id="logins" class="our-blog container-fluid">
        <div class="container">
        <div class="inner-title">

                <h2>Logins</h2>
            </div>
            <div class="col-sm-12 blog-cont">
                <div class="row no-margin">
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="https://media.istockphoto.com/id/1211634969/photo/female-dumbbells-vegetables-and-fruit.jpg?s=612x612&w=0&k=20&c=CVhZjSpT3nlHiIhJDUk8yNpBZ6yqx9a7-tcbv2ct0-Q=" alt="">

                            <div class="blog-single-det">
                                <h6>Patient Login</h6>
                                <a href="hms/user-login.php" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="https://media.istockphoto.com/id/1204583112/photo/nutritionist-is-consulting-the-patient-about-healthy-diet-with-vegetables-and-fruits.jpg?s=612x612&w=0&k=20&c=9xqlMsfAvyJ_rbWXmICrJgFAIalLhPe-7uUehX3wdnk=" alt="">

                            <div class="blog-single-det">
                                <h6>Doctors login</h6>
                                <a href="hms/doctor" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="https://media.istockphoto.com/id/1317632720/photo/nutritionist-at-work-planning-well-balanced-diet.jpg?s=612x612&w=0&k=20&c=c-aLooU58vkq99fj14S26MWfZPxl2waOukcGxQ0p_VQ=" alt="">

                            <div class="blog-single-det">
                                <h6>Admin Login</h6>
                    
                                <a href="hms/admin" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    
                    

                    
                    
                </div>
            </div>
            
        </div>
    </section>  







    <!-- ################# Our Departments Starts Here#######################--->


    <section id="services" class="key-features department">
        <div class="container">
            <div class="inner-title">

                <h2>Our Key Features</h2>
                <p>Take a look at some of our key features</p>
            </div>

            <section class="articles">
    <article>
      <div class="article-wrapper">
        <figure>
          <img src="https://media.istockphoto.com/id/641963334/photo/young-healthy-girl-on-home-scales.webp?b=1&s=170667a&w=0&k=20&c=oeiwa6FtCOm5U7GxoiL44_MLkbJFwItZftVsx_vHkeM=" alt="" />
        </figure>
        <div class="article-body">
          <h2>Weight Loss </h2>
          <p>
          "Effective weight loss involves a balanced diet and regular exercise. It's about making sustainable, healthy choices to achieve your goals."          </p>
          <a href="#" class="read-more">
            Read more <span class="sr-only">about this is some title</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
    </article>
    <article>
  
      <div class="article-wrapper">
        <figure>
          <img src="https://images.unsplash.com/photo-1628619876503-2db74e724757?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8ZGlhYmV0ZXN8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=800&q=60" alt="" />
        </figure>
        <div class="article-body">
          <h2>Diabetes</h2>
          <p>
          "Diabetes is a chronic condition that affects how your body manages blood sugar levels. It requires lifelong management through medication, diet, and lifestyle adjustments."          </p>
          <a href="#" class="read-more">
            Read more <span class="sr-only">about this is some title</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
    </article>
    <article>
  
      <div class="article-wrapper">
        <figure>
          <img src="https://media.istockphoto.com/id/475105054/photo/she-loves-eat-fresh-fruit.jpg?s=612x612&w=0&k=20&c=EEZzOhBLEnI36orq0RlQIPF6X5i_spmsddS030N-MEs=" alt="" />
        </figure>
        <div class="article-body">
          <h2>Child Nutrition</h2>
          <p>
          "Child nutrition is vital for healthy growth and development. A balanced diet rich in essential nutrients like vitamins, minerals, and proteins is crucial to support a child's physical and cognitive development."          </p>
          <a href="#" class="read-more">
            Read more <span class="sr-only">about this is some title</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
    </article>
  </section>
 <section class="articles">
    <article>
      <div class="article-wrapper">
        <figure>
          <img src="https://media.istockphoto.com/id/1088407524/photo/beautiful-pregnant-woman.jpg?s=612x612&w=0&k=20&c=sDbq7U5fX_e0Hu0geIHzkTg1_xZJeVU13KfkVwGCl28=" alt="" />
        </figure>
        <div class="article-body">
          <h2>Pre & Post Pregnancy Nutrition</h2>
          <p>
          "Pre-pregnancy nutrition lays the foundation for a healthy pregnancy, emphasizing folate, iron, and a balanced diet. Post-pregnancy, nutrition is crucial for recovery and breastfeeding, focusing on nutrient-rich foods to support both mother and baby's well-being."          </p>
          <a href="#" class="read-more">
            Read more <span class="sr-only">about this is some title</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
    </article>
    <article>
  
      <div class="article-wrapper">
        <figure>
          <img src="https://media.istockphoto.com/id/1299421209/photo/diet-and-exercise-for-weight-loss.jpg?s=612x612&w=0&k=20&c=eaXOUJmICKlcSo7idrgCOBH6ZkPP3LX8IPHpeas50Rc=" alt="" />
        </figure>
        <div class="article-body">
          <h2>Sports Nutrition</h2>
          <p>
          "Sports nutrition optimizes athletic performance by fueling the body with the right balance of nutrients and hydration. It helps athletes achieve their goals and recover effectively through proper diet and supplementation."          </p>
          <a href="#" class="read-more">
            Read more <span class="sr-only">about this is some title</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
    </article>
    <article>
  
      <div class="article-wrapper">
        <figure>
          <img src="https://media.istockphoto.com/id/1129664861/photo/writing-a-diet-plan-on-the-table-full-of-healthy-food.jpg?s=612x612&w=0&k=20&c=XlaT6bipzQrfuO3dUe1WnT72LrJFv3bgqShzaLsVwXY=" alt="" />
        </figure>
        <div class="article-body">
          <h2>Vegan Diet Plan</h2>
          <p>

          "A vegan diet plan excludes all animal products, emphasizing plant-based foods like fruits, vegetables, grains, legumes, and nuts. It offers potential health benefits and aligns with ethical and environmental concerns."          </p>
          <a href="#" class="read-more">
            Read more <span class="sr-only">about this is some title</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
    </article>
  </section>

        </div>

    </section>
    
    
  
    
    <!--  ************************* About Us Starts Here ************************** -->
    <section id="about_us" class="key-features department">   
    <section class="about-us">
    <div class="about">
      <img src="https://media.istockphoto.com/id/512051072/photo/smiling-nutritionist-in-her-office.webp?b=1&s=170667a&w=0&k=20&c=x05uQhtz5tZRCLoQ5nMd4aVCxwDe0OxxhaWFX1f8fLA=" class="pic">
      <div class="text">
        <h2>About Us</h2>
        <h5><Span>Shri, Dietician</Span></h5>
            <p>Welcome to Shri Dietician, We specialize in providing personalized dietary guidance and promoting a healthy lifestyle. Our dedicated team is committed to helping you achieve your health and wellness goals. Let's embark on a journey towards better health together.</p>

        <div class="data">
        <a href="#" class="hire">Connect with us</a>
        </div>
      </div>
    </div>
  </section>
  </section>
    
    
            <!--  ************************* Gallery Starts Here ************************** -->
                

                <!--  ************************* Gallery Starts Here ************************** -->
            
              <div id="gallery" class="gallery">    
        <div class="container">
            <div class="inner-title">
                <h2>Diet chart</h2>
            </div>
            <div class="row">
                <div class="gallery-filter d-none d-sm-block">
                    <button class="btn btn-default filter-button" data-filter="all">All</button>
                    <button class="btn btn-default filter-button" data-filter="hdpe">Weight Loss</button>
                    <button class="btn btn-default filter-button" data-filter="sprinkle">Diabetes</button>
                    <button class="btn btn-default filter-button" data-filter="spray">Child Nutrition</button>
                    <button class="btn btn-default filter-button" data-filter="irrigation">Pregnancy Nutrition</button>
                    <button class="btn btn-default filter-button" data-filter="sample">Sports Nutrition </button>
                </div>
                <br/>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <div class="card">
                        <img src="https://imgs.search.brave.com/NNL4PxuKwUhjR9GM-fSacE04yAcD05tFerHmOxSal8Q/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pMC53/cC5jb20vZml0ZWxv/LmNvL3dwLWNvbnRl/bnQvdXBsb2Fkcy9X/ZWlnaHQtTG9zcy1E/aWV0LUNoYXJ0Lndl/YnA_Zml0PTkzNCw0/ODEmc3NsPTE" class="card-img-top" alt="Weight Loss">
                        <div class="card-body">
                            <h5 class="card-title">Weight Loss</h5>
                            <p class="card-text">
                            "Eat Smart, Feel Light – Embrace the Weight Loss Diet Chart Tonight."

                                <span id="moreText" style="display:none;">
                                    <!-- Add the txt here -->
                                </span>
                            </p>
                            <button onclick="toggleText()" id="readMoreBtn" class="btn btn-link"> <a href="Dietchart/weightLoss.html"  target="_blank">Read More</a></button>
                        </div>
                    </div>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                    <div class="card">
                        <img src="https://imgs.search.brave.com/6a6fOamxW4pUg_5KqSRRzMuen52foGyySFowdTFdW8I/rs:fit:500:0:0/g:ce/aHR0cHM6Ly93d3cu/bmV0bWVkcy5jb20v/aW1hZ2VzL2Ntcy9t/YWdlZmFuX2Jsb2cv/MjAxNy8xMi8yNzE1/Mjk1NC9EaWV0Xzg5/OC5qcGc" class="card-img-top" alt="Weight Loss" style="height:180px;">
                        <div class="card-body">
                            <h5 class="card-title">Diabetes</h5>
                            <p class="card-text">
                            "Healthy choices, steady sugars – embrace the diabetes diet for a brighter future."
                             
      
                                <span id="moreText" style="display:none;">
                                    <!-- Add the txt here -->       
                                </span>
                            </p>
                            <button onclick="toggleText()" id="readMoreBtn" class="btn btn-link"><a href="Dietchart/Diabetes.html"  target="_blank">Read More</a></button>
                        </div>
                    </div>
              </div>

              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                    <div class="card">
                        <img src="https://imgs.search.brave.com/gltIHSEFz56CHwQaEXTlzbXsZjMaIR1Y-DF7Hjmgvb0/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9pMC53/cC5jb20vd2hhdHBh/cmVudHNhc2suY29t/L3dwLWNvbnRlbnQv/dXBsb2Fkcy8yMDIw/LzA1L2RpZXQtY2hh/cnQtZm9yLWEtMTIt/eWVhci1vbGQtY2hp/bGQuanBnP3Jlc2l6/ZT03NzgsNDQ1JnNz/bD0x" class="card-img-top" alt="Weight Loss"style="height:200px;">
                        <div class="card-body">
                            <h5 class="card-title">Child Nutrition</h5>
                            <p class="card-text">
                            "A balanced diet for a child is a recipe for a lifetime of well-being."

                                 <span id="moreText" style="display:none; "> 
                                     Add the txt here 
                                </span>
                            </p>
                            <button onclick="toggleText()" id="readMoreBtn" class="btn btn-link"><a href="Dietchart/Child.html"  target="_blank">Read More</a></button>
                        </div>
                    </div>
              </div>



              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                    <div class="card">
                        <img src="https://imgs.search.brave.com/yPmTA2zI8JjahKLHIUo4xc2HYFH65V5FtZAcCB4iIdY/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9tYXgt/d2Vic2l0ZTIwLWlt/YWdlcy5zMy5hcC1z/b3V0aC0xLmFtYXpv/bmF3cy5jb20vbWF4/X2luZm9ncmFwaGlj/X3doYXRfdG9fZWF0/X2F2b2lkX3VwZGF0/ZWRfZDYyNWQxZDhi/My5qcGc" class="card-img-top" alt="Weight Loss"style="height:180px;">
                        <div class="card-body">
                            <h5 class="card-title">Pregnancy Nutrition</h5>
                            <p class="card-text">
                            "Eating for two means choosing wisely; the pregnancy diet chart is your guide to a thriving motherhood."
                                <span id="moreText" style="display:none;">
                                    <!-- Add the txt here -->
                                </span>
                            </p>
                            <button onclick="toggleText()" id="readMoreBtn" class="btn btn-link"><a href="Dietchart/Pregnancy.html"  target="_blank">Read More</a></button>
                        </div>
                    </div>
              </div>





              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sample">
                    <div class="card">
                        <img src="https://imgs.search.brave.com/JEyIcFyQVW9dmaZpO3Ok2o4TF81-lpG5PHh6K2shFSI/rs:fit:500:0:0/g:ce/aHR0cHM6Ly93d3cu/c2kuY29tLy5pbWFn/ZS9jX2xpbWl0LGNz/X3NyZ2IscV9hdXRv/Omdvb2Qsd183MDAv/TVRrd05ERXdNekV3/T1RJd09EUXdORFF4/L21heW8tY2xpbmlj/LWRpZXQucG5n" class="card-img-top" alt="Weight Loss"style="height:200px;">
                        <div class="card-body">
                            <h5 class="card-title">Sports Nutrition</h5>
                            <p class="card-text">
                            "Eat like a champion, perform like a legend – follow the sports nutrition chart for peak performance."
                                <span id="moreText" style="display:none;">
                                    <!-- Add the txt here -->
                                </span>
                            </p>
                            <button onclick="toggleText()" id="readMoreBtn" class="btn btn-link"><a href="Dietchart/Sports.html"  target="_blank">Read More</a></button>
                        </div>
                    </div>
              </div>





              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <div class="card">
                        <img src="https://imgs.search.brave.com/2wzOhW_crfSZzwsJXoTEudbwX_rdJq5Zp7qYPyvMw1U/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMuY3RmYXNzZXRz/Lm5ldC91d2YwbjFq/NzFhN2ovNkk3QTdS/eWtkVjdRaURLWWhh/MFVwNC9hMWQ2M2U1/NTU5NmI3NmQ0MmRm/NGY5NGRkNWJlYmEx/Yi9iZXN0LWRpZXQt/Y2hhcnQtZm9yLXdl/aWdodC1sb3NzLnBu/Zz93PTM4NDAmcT03/NQ" class="card-img-top" alt="Weight Loss" style="height:200px;">
                        <div class="card-body">
                            <h5 class="card-title">Weight Loss</h5>
                            <p class="card-text">
                            "Small choices, big results – the weight loss diet chart helps you find your way to a better you."
                                <span id="moreText" style="display:none;">
                                    <!-- Add the txt here -->
                                </span>
                            </p>
                            <button onclick="toggleText()" id="readMoreBtn" class="btn btn-link"><a href="Dietchart/wigt.html"  target="_blank">Read More</a></button>
                        </div>
                    </div>
              </div>

  
                <!-- Repeat the same structure for other filter categories -->
            </div>
        </div>
    </div>


    

    <!-- Add Bootstrap JS and jQuery CDN links here -->
        <!-- ######## Gallery End ####### -->
    
    
     <!--  ************************* Contact Us Starts Here ************************** -->
    
    <section id="contact_us" class="contact-us-single">
        <div class="row no-margin">

            <div  class="col-sm-12 cop-ck">
                <form method="post">
                <h2 >Contact Form</h2>
                    <div class="row cf-ro">
                        <div  class="col-sm-3"><label>Enter Name :</label></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="fullname" class="form-control input-sm" required ></div>
                    </div>
                    <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Email Address :</label></div>
                        <div class="col-sm-8"><input type="text" name="emailid" placeholder="Enter Email Address" class="form-control input-sm"  required></div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Mobile Number:</label></div>
                        <div class="col-sm-8"><input type="text" name="mobileno" placeholder="Enter Mobile Number" class="form-control input-sm" required ></div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Enter  Message:</label></div>
                        <div class="col-sm-8">
                          <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm" name="description" required></textarea>
                        </div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                         <button class="btn btn-success btn-sm" type="submit" name="submit">Send Message</button>
                        </div>
                </div>
            </form>
            </div>
     
        </div>
    </section>
    
    
    
    
    <!-- ################# Footer Starts Here#######################--->


    <footer class="footer">
        <div class="container">
            <div class="row">
       
                <div class="col-md-6 col-sm-12">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="#about">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="portfolio" href="#services">Features</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="products" href="#logins">Logins</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="gallery" href="#gallery">DietChart</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="contact" href="#contact">Contact us</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>
                
            </div>
        </div>
        

    </footer>
    <div class="copy">
            <div class="container">
       
                
     
            </div>

        </div>
    
    </body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-nav/js/jquery.easing.min.js"></script>
<script src="assets/plugins/scroll-nav/js/scrolling-nav.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // JavaScript function to toggle visibility of additional diet charts
        function toggleAdditionalDietCharts() {
            var additionalCharts = document.querySelectorAll('.extra-diet-chart');

            additionalCharts.forEach(function(chart) {
                chart.classList.toggle('d-none'); // Toggle the 'd-none' class to show/hide
            });
        }

        // Add a click event listener to the "See more" button
        var seeMoreButton = document.getElementById('seeMoreButton');
        seeMoreButton.addEventListener('click', toggleAdditionalDietCharts);
    </script>
<script src="assets/js/script.js"></script>



</html>