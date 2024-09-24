<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>

<style>
.custom-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease; /* Animation */
      border-radius: 15px; /* Rounded corners */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Initial shadow */
      overflow: hidden;
      background-color:skyblue;
    }

    .custom-card:hover {
      transform: scale(1.05); /* Zoom effect */
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3); /* Shadow on hover */
    }

    /* Icon and card title styling */
    .custom-card .fa-check {
      font-size: 40px;
      color: black;
      margin-top: 15px;
    }

    .custom-card .card-title {
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 2px;
      color: #333;
      margin-top: 10px;
    }

    /* Body content styling */
    .custom-card .card-body {
      padding: 20px;
      font-size: 14px;
      color: #777;
      background-color: #f8f9fa;
      height:150px;
    }



    .card-detail{
        border: 2px solid transparent; 
  border-radius: 10px; 
  box-shadow: 0 0 5px rgba(255, 255, 255, 0.9), /* Thin white glow */
              0 0 15px rgba(255, 255, 255, 0.9); /* Slightly larger outer glow */
  transition: box-shadow 0.9s ease; /
  

    }

</style>

<style>
    /* Custom scrollable vertical container */
    .scrollable-vertical {
      max-height: 450px;   /* Limit the height */
      overflow-y: auto;    /* Enable vertical scrolling */
      overflow-x: hidden;  /* Disable horizontal scrolling */
    }

    /* Optional: hide scrollbar in webkit browsers */
    .scrollable-vertical::-webkit-scrollbar {
      display: none;
    }
  </style>

<!-- Page Header Start -->
 <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Legal Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Additional Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Legal Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <div class="container text-center my-5" style="max-width:1000px;">
        <div class="container">
          <h1 style="font-size:50px;">Your Financial & Legal Matters, Simplified </h3>
          <h5 style=""><strong>Expert Legal Solutions for Your Financial Peace of Mind.
             Navigate legal complexities with confidence, backed by MFeasy's trusted legal advisors.</strong></h5>
         
      
          <a class="btn btn-lg outline-primary p-2 my-3" style="background-color:blue;color:white;letter-spacing:2.3px" href="">Get Legal Advice Now !</a>

    </div>
  </div>


  <section class="double-content" style="background-color:skyblue;">
    <div class="container">
   <div class="row my-5" >

   <div class="col-md-6 my-5" style="">
    <h5>What we <strong> offer</strong></h5>
    <h2 style="font-size:40px;">Comprehensive Legal Services:</h2>
    <a href="#" class="btn btn-outline-dark border-2" style="font-weight:bold;letter-spacing:2.3px;">Get Advice Now !</a>
     
   </div>

   <div class="col-md-6">

   <div class="container mt-5">
  <!-- <h2>Scrollable Paragraph</h2> -->
  <div class="scrollable-vertical">
    <li style="font-size:20px;line-height:30.4px;letter-spacing:2.6px;max-width:500px;text-decoration:justify;">We provide expert guidance and representation for a wide range of legal matters related to your finances and investments. Our team of experienced lawyers specializes in:</li>
  </div>

  <br>
  <div class="scrollable-vertical">
    <ul style="font-size:18px; font-weight:bold;letter-spacing:3.9px;list-style-type:circle">
      <li>Due Diligence </li>
      <li>Documentation</li>
      <li>RERA Compliance</li>
      <li>Arbitration</li>
      <li>Loan Settlement</li>
      <li>Income Tax Appeals</li>
      <li>SARFAESI Act Matters</li>
      <li>Real Estate Consultancy</li>
      <li>GST Appeals</li>
      <li>Wealth Tax</li>
      <li>Wills and Estate Planning</li>
      <li>Property Registration</li>
      <li>Property Registration</li>
      <li>Legal Research</li>
      <!-- <li>Item 15</li> -->
    </ul>
  </div>
</div>

</div>

   </div>
   </div>

</section>




<div class="container my-5" style="padding-bottom:30px;">
     <div class="mt-5" style="padding-top:60px;">
     <h1>Why Choose Our Company Legal Services?</h1>

        <div class="row my-5">
            <div class="col-md-3">
                    <div class="card custom-card text-center">
                        <i class="fa fa-check"></i> <!-- Stylish icon -->
                        <div class="card-title">Expert Guidance:</div> <!-- Stylish card title -->
                            <div class="card-body" style="letter-spacing:1.6px">
                            Our team of experienced lawyers is dedicated to providing you with personalized and reliable legal advice.
                            </div>
                   </div>

            </div>

            <div class="col-md-3">
                    <div class="card custom-card text-center">
                        <i class="fa fa-check"></i> <!-- Stylish icon -->
                        <div class="card-title">Efficient Solutions:</div> <!-- Stylish card title -->
                            <div class="card-body" style="letter-spacing:1.6px">
                            We strive to resolve your legal matters promptly and effectively, saving you time and resources.
                            </div>
                   </div>

            </div>

            <div class="col-md-3">
                    <div class="card custom-card text-center">
                        <i class="fa fa-check"></i> <!-- Stylish icon -->
                        <div class="card-title">Transparent Pricing:</div> <!-- Stylish card title -->
                            <div class="card-body" style="letter-spacing:1.6px">
                            We offer competitive and transparent pricing with no hidden costs.
                            </div>
                   </div>

            </div>

            <div class="col-md-3">
                    <div class="card custom-card text-center">
                        <i class="fa fa-check"></i> <!-- Stylish icon -->
                        <div class="card-title">Confidentiality:</div> <!-- Stylish card title -->
                            <div class="card-body" style="letter-spacing:1.6px">
                            We maintain the highest standards of confidentiality to protect your sensitive information.
                            </div>
                   </div>

            </div>

            </div>


    </div>
</div>    

    
 <hr>
  <!-- Features Start -->
  <div class="container-xxl feature py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <!-- <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3"></p> -->
                    <h1 class="display-5 mb-4">How We Can Help</h1>
                    <p class="mb-4">At Our Company, our experienced legal team simplifies complex 
                        financial and investment-related legal matters for you. We offer expert
                         guidance, personalized solutions, and dedicated support throughout the 
                         legal process. Whether you need assistance with documentation, compliance, 
                         disputes, or any other legal concern, we’re here to protect your interests 
                         and ensure your financial peace of mind.
                    </p>
                    <a class="btn btn-outline-primary" href="">Get to know more!</a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="feature-box border rounded p-4">
                                        <i class="fa fa-crown fa-3x text-dark mb-3"></i>
                                        <h4 class="mb-3">Assessment:</h4>
                                        <p class="mb-3">We'll assess your case and provide you with a clear understanding of your legal options.</p>
                                         <!-- <a class="fw-semi-bold" href="">Read More <i 
                                                class="fa fa-arrow-right ms-1"></i></a> -->
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="feature-box border rounded p-4">
                                        <i class="fa fa-crown fa-3x text-dark mb-3"></i>
                                        <h4 class="mb-3">Resolution: </h4>
                                        <p class="mb-3">We'll work diligently to achieve the best possible outcome for your case.</p>
                                        <!-- <a class="fw-semi-bold" href="">Read More <i
                                                class="fa fa-arrow-right ms-1"></i></a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="feature-box border rounded p-4">
                                <i class="fa fa-crown fa-3x text-dark mb-3"></i>
                                <h4 class="mb-3">Consultation:</h4>
                                <p class="mb-3">Schedule a free consultation with our legal experts to discuss your legal concerns.
                                    </p>
                                <!-- <a class="fw-semi-bold" href="">Read More <i class="fa fa-arrow-right ms-1"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->



    <div class="container-fluid my-5" style="padding-bottom:30px;background-color:black;">
     <div class="mt-5" style="padding-top:60px;padding-bottom:60px;">
           <h4 class="text-light">Investing for Success:</h4>
           <h3 class="text-white" style="font-size:57px;">Why Choose Our Company for Your Bond Investments?</h3>
           <hr style="padding:2px;">
          <!-- <a href="#" class="btn btn-light">Register now to Enlist.</a> -->

          <div class="row my-5">
            
          <div class="col-md-4" height="250px">
                <div class="card text-center card-detail">
                    <div class="card-title my-4 title-detail"> <h2>Expert Guidance:</h2></div>
                    <div class="card-body card-body-detail">
                    <p>Our Experienced financial advisors will help you choose the right
                        bond options based on your financial goals and risk profile.
                    </p>
                    </div>
                
                </div>
            </div>

            <div class="col-md-4">
            <div class="card text-center card-detail">
                    <div class="card-title my-4 title-detail"> <h2>Seamless Process:</h2></div>
                    <div class="card-body card-body-detail">
                    <p>We offer a convenient online platform for investing in bonds,
                        making the process easy and hassle-free<br>.
                    </p>
                    </div>
                
                </div>
            </div>

            

            <div class="col-md-4">
            <div class="card text-center card-detail">
                    <div class="card-title my-4 title-detail"> <h2>Transparent Pricing:</h2></div>
                    <div class="card-body card-body-detail">
                    <p>We provide clear and upfront information about bound prices,
                        yield and associated fees<br>.
                    </p>
                    </div>
                
                </div>
           </div>   

          </div>
</div>
</div>


<div class="container text-center my-5" style="max-width:1000px;">
        <div class="container">
          <h2 style="font-size:44px;">Let Our Company Help You </h2>
          <h5 style="">Don't wait to prioritize your financial future.
             Our Company is here to guide you on your investment journey, 
             offering expert advice, personalized solutions, and a wide range 
             of financial products to help you achieve your long-term goals.
             <strong>Get started today!</strong></h5>
         
      
          <span><a class="btn btn-lg btn-outline-dark p-2 my-3 border-2" style="letter-spacing:2.3px;font-size:12px;font-weight:bold;" href="#">Allow us to call you !</a>&nbsp;&nbsp;
          <a class="btn btn-lg btn-outline-dark p-2 my-3 border-2" style="color:letter-spacing:2.3px;font-size:12px;font-weight:bold;" href="#">Visit us Directory !</a></span>

    </div>
  </div>

    
    
    
    
    <?php include('includes/footer.php'); ?>