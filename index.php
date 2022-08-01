<?php 
    if(isset($_POST["submit"])) {
      $username = $_POST["name"];
      $email = $_POST["email"];
      $number = $_POST["number"];
      $comment = $_POST["comment"];

    $to = $email;
    $subject = $message;

    $message = "Phone: {}" .$message;
    

    
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    // More headers
    $headers .= 'From: radhey2016purohit@gmail.com';  "\r\n";
    
    $mail = mail($to,$subject,$message,$headers);

    if($mail){
      echo "<script>alert('Mail Send.');</script>";
      }else{
        echo "<script>alert('Mail Not Send.')</script>";
      }
   }
    ?>



<!doctype html>
<html lang="en" style="overflow-x: hidden;">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./bootstrap/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="page.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="icon" href="Logo.png" type="image/icon type">
  <title>SaveKar</title>
</head>

<body>

  <div class="header">
    <nav class="navbar navbar-expand-sm justify-content-center pt-4  ">
      <a class="navbar-brand text-light text-center" href="https://calendly.com/savekar/">
        <p class="pd-5">Book One-on-One Free Consultation</p>
      </a>
    </nav>
    <nav class="nav bar" id="nav1">
      <img
        src="https://img1.wsimg.com/isteam/ip/9a5b1c33-a686-421b-9e90-374e47a416e4/blob-0001.png/:/rs=w:200,h:200,cg:true,m/cr=w:200,h:200/qt=q:100/ll"
        alt="icon" class="img-fluid1 mx-auto d-block" style="position:relative">
    </nav>


    <div class="background">
      <div class="backtext">
        <div class=" mt-5 pt-5 ">
          <backtext class=" ms-3 ps-2 text secondary" id="text">
            Accounting & Taxation Made Easy
          </backtext>
          <div class="but2"> <a href="#section1" class="btn btn-lg  text-light mt-5 " id="btn2"
              style=" border: white ">Services</a>
            <a href="#section2" class="btn secondary btn-lg  text-light mt-5 ms-4" id="btn2">About Us</a>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <h2 class="text-center mt-5 pt-3 pb-3" id="section1">Services</h2>

    <div class="row mt-5">
      <div class="col-sm-6 ">
        <img src="image1.webp" alt="" class="img-fluid" width="auto" height="500px">
      </div>

      <div class="col-sm-6 ">
        <h3 class="mt-5 pt-5 " data-wow-duration="1s">Company/Business formation in india</h3>
        <br>
        <p>Start working on your business idea, we will help you to complete all requirements for registering your:
        </p>
        <ul>
          <li>
            <p>Proprietorship firm.</p>
          </li>
          <li>
            <p>Partnership entity
            </p>
          </li>
          <li>
            <p>LLP firm
            </p>
          </li>

          <li>
            <p>One person company or </p>
          </li>
          <li>
            <p>Private limited company</p>
          </li>
        </ul>
      </div>
    </div>

    <div class="row text-us ">
      <div class=" col-sm-6">
        <h3 class="mt-5 pt-5">Accounting Advisory
        </h3>
        <br>
        <ul>
          <li>
            <p>Accounting and financial reporting advice
            </p>
          </li>
          <li>
            <p>Support to domestic and international clients on a wide range of transactions & events
            </p>
          </li>
        </ul>
      </div>
      <div class="col-sm-6 has-animation animation-rtl" data-delay="2000">
        <img src="coin.webp" alt="coin" width="auto" height="500px" class="img-fluid">
      </div>
    </div>

    <div class="row  ">
      <div class="col-sm-6">
        <img src="men.webp" alt="men" width="auto" height="500px" class="img-fluid">
      </div>
      <div class="col-sm-6  ">
        <h3 class="mt-5 pt-5">Income Tax
        </h3>
        <br>
        <ul>
          <li>
            <p>Personal Tax (ITRs) - Filing of Income Tax & TDS returns</p>
          </li>
          <li>
            <p>Corporate Tax - Filing of Income Tax & TDS Returns</p>
          </li>
          <li>
            <p>Legal structure of business entities for Operations in India</p>
          </li>
          <li>
            <p>Transactional advisory - Consultancy & cross-border restructuring</p>
          </li>
          <li>
            <p>Tax Due Diligence</p>
          </li>
        </ul>
      </div>
    </div>

    <div class="row text-good">
      <div class="col-sm-6">
        <h3 class="mt-5 pt-5">Goods & Service tax (GST)
        </h3>
        <br>
        <p>Start working on your business idea, we will help you to complete all requirements for registering your:
        </p>
        <ul>
          <li>
            <p>GST - Obtaining GSTIN.</p>
          </li>
          <li>
            <p>Liability calculation.</p>
          </li>
          <li>
            <p>Periodic filings - Monthly, Quarterly & Annually.</p>
          </li>
          <li>
            <p>Statutory & Internal audits.</p>
          </li>
        </ul>
      </div>
      <div class="col-sm-6">
        <img src="rupee.webp" alt="rupe" width="auto" height="500px" class="img-fluid">
      </div>
    </div>
  </div>
  </div>
  <br>
  <br>
  <br>
  <hr>

  <div class="container">
    <div class="row about-us">
      <div class="col-sm-6">
        <h2 class="mt-3 pt-4 text-center" id="section2">About us</h2>
        <p class="mt-4 pt-4">We are a group of young, dedicated, research-oriented and skilled professionals
          uniquely
          positioned to help individuals and business owners to fulfill their financial and legal obligations.
        </p>

        <p class="mt-4 pt-4">Driven by the motto of “Client Comes First”, our firm of chartered accountants
          represents
          a
          coalition of specialized skills that is geared to offer sound financial & legal advisory to clients.
        </p>

        <p class="mt-4 pt-4">Our vision is to save your time, efforts & money for our clients by providing services
          in
          the area of Company Formation, Income Tax, GST, Accounting & Regulatory Filings to individuals and
          companies.
        </p>
      </div>

      <div class="col-sm-6">
        <img src="newabout.webp" alt="image" width="100%" height="474px">
      </div>

    </div>
  </div>

  <br>
  <br>
  <br>
  <br>
  <div class="container">
    <h2 class="text-center">Carrers We're Hiring!</h2>
    <br>
    <h3 class="text-center mt-5">Join Us!</h3>
    <br>
    <p class="text-center">If you're interested in joining our team, apply below with your latest resume
    </p>
     

 
  <form class="contact100-form validate-form">
<div class="wrap-input100 validate-input" data-validate="Name is required">
<span class="label-input100">Full Name:</span>
<input class="input100" type="text" name="name" placeholder="Enter full name">
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
<span class="label-input100">Email:</span>
<input class="input100" type="text" name="email" placeholder="Enter email addess">
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 validate-input" data-validate="Phone is required">
<span class="label-input100">Phone:</span>
<input class="input100" type="number" name="phone" placeholder="Enter phone number">
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 validate-input" data-validate="Message is required">
<span class="label-input100">Message:</span>
<textarea class="input100" name="message" placeholder="Your Comment..."></textarea>
<span class="focus-input100"></span>
</div>
<div class="mb-3">
  <label for="formFileSm" class="form-label" >Add Attachment</label>

  <input class="form-control form-control-sm" id="formFileSm" style="   border: none;" type="file">
</div>
<div class="container-contact100-form-btn ">
<button class="contact100-form-btn">
<span>
Submit
<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
</span>
</button>
</div>
</form>
    
  
</div>


    
  </div>
 
  <Br>
  <Br>
  <div class="container">
    <div class="row mapup">
      <div class="col-sm-6 contactcol">
        <br><br><br>
        <h2 class="ms-2 ">Contact Us</h2>
        <h2 class="mt-5 ms-2 pt-3">Better yet, see us in person!
        </h2>
        <p1 class="mt-3 ms-2">We love our clients, so feel free to visit us at below coordiates.
        </p1>
        <br>
        <br>
        <br>
        <button class="btn2 ms-2 " style="background-color: rgb(69, 90, 100); text-color:#ffff ; size: 40px;"><img
            src="whatsapp.gif" alt="logo" style="background: transparent;
          width: 40px; margin-bottom: 8px;">
          <a href="https://api.whatsapp.com/send?phone=8290534301" style="color: #ffff; text-decoration: none; ">
            Drop Message</a></button>

        <br><br>
        <h2 class="mt-3 ms-2 pt-3">Save Kar</h2>
        <br>
        <p1 class="mt-2 ms-2 pt-3">Lodha S.M. Complex, University Road, Shakti Nagar, Udaipur, Rajasthan, India</p1>
        <a class="footer-link-text ms-5 pt-3 text-decoration-none text-dark" href="tel:8290534301" style="text-decoration:none" target="_blank">
          <br>
          <br>
          <i class="fa fa-phone icon" aria-hidden="true">
          </i > +918290534301 </a>
        <h2 class="mt-1 ms-2 pt-3">Hours
        </h2>


        <div class="dropdown dropdown1">
          <button>Open Today <br> 09:00 am - 05:00 pm</button>
          <div class="dropdown-content">
            <ul>
              <li>Mon 09:00 am-05:00 pm</li>
              <li> Tue
                09:00 am - 05:00 pm</li>
              <li>Wed
                09:00 am - 05:00 pm</li>
              <li> Thu
                09:00 am - 05:00 pm</li>
              <li> Fri
                09:00 am - 05:00 pm</li>
              <li>Sat
                09:00 am - 05:00 pm</li>
              <li> Sun
                Closed</li>
            </ul>
          </div>
        </div>

      </div>

      <div class="col-sm-6 mt-5">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58053.218801729745!2d73.69319795177528!3d24.57793705198027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3967e8bccf78fd29%3A0xb2ee125eb6b78ae6!2sHQ99%2B32C%2C%20Udaipur%2C%20Rajasthan%20313003!5e0!3m2!1sen!2sin!4v1657715465158!5m2!1sen!2sin"
          width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen=""></iframe>
      </div>
    </div>
  </div>
  <g fill="currentColor"><rect x="4" y="6" width="16" height="10.222" rx="1.129"></rect><path d="M8.977 18.578l.2-2.722a.564.564 0 01.564-.523h3.61c.548 0 .774.705.327 1.024l-3.81 2.721a.564.564 0 01-.89-.5z"></path></g>
  <hr>

  <div class="conatiner">
    <h2 class="text-center mt-5 pd-5">Social</h2>
    <div class="img text-center mt-2 pt-3">
      <br>
      <br>
      <br>
      <a href="https://www.linkedin.com/company/savekar/">
        <img alt="linkedin" src="icons8-linkedin-circled.gif" height="60px">
      </a>
    </div>
    <br>
    <br>
    <br>
    <div>
      <nav class="navbar1 navbar-dark text-center mb-3 bg-dark w-100 h-70 ">
        <br>
        <br>
        <p1 class="text-light mt-4 pt-2">Copyright © 2022 SaveKar - All Rights Reserved.
        </p1>
        <br>
        <br>

        <div>
          <p1 class="text-light text-center mb-0">Privacy Policy Terms and Conditions</p1>
      </nav>
    </div>
  </div>
  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset: 100,
        callback: function (box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function () {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
    $(document).ready(function () {
      $('.has-animation').each(function (index) {
        $(this).delay($(this).data('delay')).queue(function () {
          $(this).addClass('animate-in');
        });
      });
    });

  </script>
  <script src="./bootstrap/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>

</html>