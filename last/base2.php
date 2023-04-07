<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body onload="slider()">
    <header class="header">
        <img src="logo.png" alt="Our main logo" class="logo">
        <nav class="navbar">
            <ul class="navbar-lists">
                <li><a href="base1.html" class="navbar-link home-link">Home</a></li>
                <li><a href="select.html" class="navbar-link about-link">Problems</a></li>
                <li><a href="#container-2" class="navbar-link contact-link">Feedback</a></li>
                <li><a href="profile1.php" class="navbar-link profile-link">Profile</a></li>
            </ul>
        </nav>
    </header>

    <!-- ===========our main hero saction=========== -->
    <!-- <div class="holder">
        <div class="imgslide">
           <img src="img1.jpg" alt="" id="slideimg">
        </div>
    </div> -->
   


    


     <!-- -------bio-data section right side------ -->

     

       <!-- ---------bio right data-------- -->
       
       
    <section class="section section-work-data">
        <div class="overlay"></div>
        <div class="container grid grid-four-column">
             <div>
                 <h2 class="counter-numbers">10000+</h2>
                 <p>Total visitor</p>
             </div>
             <div>
                <h2 class="counter-numbers">7000+</h2>
                <p>Happy Clients</p>
            </div>
            <div>
                <h2 class="counter-numbers">3000+</h2>
                <p>Total Advisor</p>
            </div>
            <div>
                <h2 class="counter-numbers">2000+</h2>
                <p>Active Users</p>
            </div>
        </div>

    </section>

    <section class="section section-contact" >
       <div class="container">
        <h2 class="common-heading" id="container-2">Any Suggetion</h2>
       </div>

       <div class="section-contact-main contact-container">
             <form action="Feedback.html">
                <div class="grid grid-two-column">
                    <div>
                        <label for="username"></label>
                      <input type="text" name="username" id="username" placeholder="Name">
                    </div>
                    <div>
                        <label for="email"></label>
                      <input type="text" name="email" id="email" placeholder="Email Id">
                    </div>
                </div>
                <div>
                    <label for="subject"></label>
                    <input type="text" name="subject" id="subject" placeholder="subject">
                </div>
                <div>
                    <label for="textarea"></label>
                    <textarea name="textarea" id="textarea" cols="30" rows="10" placeholder="Message"></textarea>
                </div>
                <div>
                  <input type="submit" name="submit" id="submit" class="btn">
                </div>
             </form>
       </div>
    </section>
    <section class="section section-footer">
        <footer>
               <div class="grid grid-five-column">
                   <div class="footer-ul">
                      <ul style="justify-content: center;">
                        <li>Home </li>
                        <li>AboutUs</li>
                        <li>ContactUs</li>
                        <li>Profile</li>
                        <li>Topics</li>
                      </ul>
                   </div>
                   <div>
                    <ul>
                      <li>Home </li>
                      <li>AboutUs</li>
                      <li>ContactUs</li>
                      <li>Profile</li>
                      <li>Topics</li>
                    </ul>
                 </div>
                 <div>
                    <ul>
                      <li>Home </li>
                      <li>AboutUs</li>
                      <li>ContactUs</li>
                      <li>Profile</li>
                      <li>Topics</li>
                    </ul>
                 </div>
                 <div>
                    <ul>
                      <li>Home </li>
                      <li>AboutUs</li>
                      <li>ContactUs</li>
                      <li>Profile</li>
                      <li>Topics</li>
                    </ul>
                 </div>
               </div>
        </footer>
    </section>
    <script src="base.js"></script>
</body>

</html>