<html><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>FIND YOUR COLLEGE</title>
<link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<section class="header">
    <nav>
    <a href="index.html"><video width="150" height="120" autoplay="autoplay" muted="" loop="infinity" align="left">
        <source src="fyc.mp4" type="video/mp4"></video></a>
        <div class="nav-links" id="navLinks">
        <i class="fa fa-times" onclick="hideMenu()"></i>
        <ul>
            <li><a href="">HOME</a></li>
            <li><a href="">COURSE</a></li>
            <li><a href="">ABOUT</a></li>
            <li><a href="">BLOG</a></li>
            <li><a href="">CONTACT</a></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    
    <div class="text-box">
    <h1>FIND YOUR COLLEGE</h1>
        <p>An Interactive website which would help you find your ideal college</p>
        <a href="" class="visit-btn">Visit us offline to know more</a>
    </div>
    </section>
    
    <section class="course">
        <h1>Courses</h1>
        <p>The Three Major Courses of Engineering</p>
        <div class="row">
            <div class="course-col">
                <h3>B.E</h3>
                <p>Bachelor of Engineering, or B.E., is a professional degree programme of the undergraduate level that is dedicated entirely to the field of engineering. The duration of a B.E. programme is four years and it reaches up to five years if the student has enrolled in the integrated dual-degree course.</p>
            </div>
            <div class="course-col">
                <h3>B.Tech</h3>
                <p>Bachelor of Technology (BTech) is a professional undergraduate engineering degree programme awarded to candidates after they complete four years of study in the field.</p>
            </div>
            <div class="course-col">
                <h3>Diploma</h3>
                <p>Masters Degrees in Engineering provide the advanced skills and training needed to work as a qualified engineer in various specialised fields. Many programmes are officially accredited, giving you the opportunity to become a registered professional.</p>
            </div>
        
        </div>
    </section>
    
    
    
    
    
    
    <section class="location">
     <script>
        function goPython(){
            $.ajax({
              url: "script.py",
             context: document.body
            }).done(function() {
             alert('finished python script');;
            });
        }
    </script>
    <h1>Location of Colleges</h1>    
        
        <div class="row">
            <div class="location-col">
                <a href="maharashtra.html"><img src="maharashtra.png"></a>
                 <a href="" target="login.html"><div class="layer"></a>
                    <h3>MAHARASHTRA</h3>
                </div>
            </div>
            <div class="location-col">
                <img src="karnataka.png">
                <div class="layer">
                    <h3>KARNATAKA</h3>
                </div>
            </div>
            <div class="location-col">
            <img src="delhi.png">
                <div class="layer">
                    <h3>DELHI</h3>
                </div>
            </div>
        </div>  
    </section>
    
    
    
    
    <section class="footer">
    <h4>About Us</h4>
        <p>
            We are a group of 4 students whose combined will and hardwork has helped<br>make this strong, powerful and beautiful website.
        
        </p>
        <div class="icons">
        <i class="fa fa-facebook"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-linkedin"></i>
        
        </div>
        <p>Made by <i class="fa fa-heart-o"></i> Psuedo Hackers</p>
    </section>
    
    
    
    <!-----JavaScript for Toggle Menu----->
    <script>
    var navLinks=document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right="0";
        }
        function hideMenu(){
            navLinks.style.right="-200px";
        }
        
    </script>    
    
    
    

























   













<iframe id="tidio-chat-code" title="Tidio Chat code" style="display: none;"></iframe><div id="tidio-chat"><iframe title="Tidio Chat" id="tidio-chat-iframe" style="display: block; border: none; position: fixed; inset: auto 0px 0px auto; width: 428px; height: 264px; opacity: 1; background: none transparent !important; margin: 0px; max-height: 100vh; max-width: 100vw; transform: translateY(0px); transition: none 0s ease 0s !important; visibility: visible; z-index: 999999999 !important; border-radius: 47px 30px 47px 47px;"></iframe></div>


</body></html>