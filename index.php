<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo "GLQ-2C"; ?>
    </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="logo/glq-2C (900 x 500 px).svg" alt="GLQ-2C">
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <script>
        window.addEventListener("scroll", function () {
            let header = document.querySelector("header");
            if (window.scrollY > 50) {
                header.classList.add("scrolled");
            } else {
                header.classList.remove("scrolled");
            }
        });
    </script>

    <section class="hero" id="hero">
        <div class="hero-container">
            <div class="hero-left">
                <h1>Bringing Creativity to Life – Your Vision, Our Expertise</h1>
                <p>We craft stunning visuals, compelling stories, and impactful designs to elevate your brand.</p>
                <button id="seeWorkBtn">Discover Our Work</button>
            </div>
            <div class="hero-right">
                <div class="img1-container">
                    <img src="img/img1.jpg" alt="">
                </div>
            </div>  
        </div>
    </section>


    <div id="workModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>PROJECTS</h2>
                <span class="close">&times;</span>
            </div>
            <div class="modal-grid">
                <div> <p>View</p> </div>
                <div><p>View</p></div>
                <div><p>View</p></div>
                <div><p>View</p></div>
                <div><p>View</p></div>
            </div>
            <button class="modal-more">More</button>
        </div>
    </div>

    <script>
        document.getElementById("seeWorkBtn").addEventListener("click", function() {
            let modal = document.getElementById("workModal");
            modal.style.display = "block";
            
            setTimeout(() => {
                modal.classList.add("show");
            }, 10);
        });

        document.querySelector(".close").addEventListener("click", function() {
            let modal = document.getElementById("workModal");
            modal.classList.remove("show");
            
            setTimeout(() => {
                modal.style.display = "none";
            }, 200);
        });

        window.addEventListener("click", function(event) {
            let modal = document.getElementById("workModal");
            if (event.target === modal) {
                modal.classList.remove("show");
                setTimeout(() => {
                    modal.style.display = "none";
                }, 200);
            }
        });
    </script>

    
    <section class="about" id="about">
        <div class="about-title">
            <h2>About Us</h2>
            <p>At GLQ-2C, we blend creativity with strategy to craft impactful visuals, compelling stories, and engaging designs.</p>
        </div>

        <div class="about-content">
            <div class="about-left-img">
                <img src="img/about2.2.png" alt="Image 2">
            </div>
            <div class="about-story">
                <h3>Our Story</h3>
                <p>Every great company begins with a vision, and for us, it was simple—blend creativity with strategy to help businesses tell their stories. <br><br>
                What started as a small, passionate team has grown into a dynamic creative agency, working with brands across different industries. With every project, we challenge ourselves to push the boundaries of design, motion, and storytelling.<br><br>
                What was once just an idea is now a trusted creative partner for brands that want to stand out and make a lasting impact.</p>
            </div>
            <div class="line"></div>
            <div class="about-mission-vision">
                <div class="about-mission">
                    <h3>Our Mission</h3>
                    <p>To help brands stand out through high-quality design, storytelling, and content creation.</p>
                </div>
                <div class="about-vision">
                    <h3>Our Vision</h3>
                    <p>To be a leading creative agency known for innovative and effective brand solutions.</p>
                </div>
            </div>
            <div class="about-right-img">
                <img src="img/about1.png" alt="Image 3">
            </div>

        </div>
        
    </section>
    
    <div ></div>
    <section class="services" id="services">
        <div class="services-left">
            <h2>Our Services</h2>
        </div>
        <div class="services-mid">
            <ul>
                <li> 
                    <h3>Graphic Design</h3>
                    <p>Elevate your brand with stunning visuals</p>
                </li>
                <li> 
                    <h3>Photography & Videography</h3>
                    <p>Capture moments that tell a story</p>
                </li>
                <li> 
                    <h3>Motion Graphics & Animation</h3>
                    <p>Bring ideas to life with motion</p>
                </li>
                <button>See all our services</button>
            </ul>
        </div>
        <div class="services-right">
            <img src="logo/glq-2C_black.svg" alt="Services">
        </div>
        
    </section>

    <footer id="contact">
        <div class="contact-left">
            <div class="contact-text">
                <h2>Ready to Elevate Your Brand?</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nisi ex officiis eius vel aliquam voluptatem blanditiis natus numquam quisquam sit, laborum neque consequatur esse odit fugiat nesciunt eaque corporis?</p>    
            </div>

            <div class="contact-info">
                <div class="loc-container">
                    <img src="icons/location.png" alt="Location">
                    <a href="https://maps.app.goo.gl/K26ZZdkegViPd9Mb8">43-25 43rd Street in Long Island City, New York</a>
                </div>
                <div class="phone-container">
                    <img src="icons/phone-receiver-silhouette.png" alt="Phone">
                    <a href="tel:+1-123-456-7890">+63-900-000-0000</a>
                </div>
                <div class="email-container">
                    <img src="icons/email.png" alt="Email">
                    <a href="mailto:glq.2C@gmail.com">glq.2C@gmail.com</a>
                </div>
            </div>

            <div class="socmed-container">
                <p>FOLLOW US</p>
                <div class="socmed-logo">
                    <a href="https://www.facebook.com/"><img src="icons/facebook.png" alt="Facebook"></a>
                    <a href="https://www.instagram.com/"><img src="icons/instagram.png" alt="Instagram"></a>
                    <a href="https://www.tiktok.com/"><img src="icons/tiktok.png" alt="TikTok"></a>
                    <a href="https://www.youtube.com/"><img src="icons/youtube.png" alt="Youtube"></a>
                </div>
            </div>

        </div>

        <div class="contact-right">
            <h3>Your Details</h3>
            <p>Let us know how to get back to you.</p>
            <form action="" method="POST">
                
                <div class="form-group">
                    <div class="for-name">
                        <label for="name">NAME</label>
                        <input type="text" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="for-email">
                        <label for="email">EMAIL ADDRESS</label>
                        <input type="email" name="email" placeholder="Your Email" required>
                    </div>
                </div>
                <div class="for-subject">
                    <label for="subject">SUBJECT</label>
                    <input type="text" name="subject" placeholder="Subject" required>
                </div>
                
                <div class="for-comment">
                    <label for="message">COMMENTS/QUESTIONS</label>
                    <textarea name="message" placeholder="Question" required></textarea>
                </div>
                <div class="button-container">
                    <button type="submit">Contact Us</button>
                </div>
            </form>
        </div>

    </footer>
    
    <?php
        $messages = [];

        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            $messages[] = [
                'name' => $name,
                'email' => $email,
                'subject' => $subject,
                'message' => $message
            ];
        }

        if (!empty($messages)) {
            $alertMessage = "Thank you for contacting us!\\n\\n";

            foreach ($messages as $msg) {
                $alertMessage = $alertMessage . "Name: " . $msg['name'] . "\\n";
                $alertMessage = $alertMessage . "Email: " . $msg['email'] . "\\n";
                $alertMessage = $alertMessage . "Subject: " . $msg['subject'] . "\\n";
                $alertMessage = $alertMessage . "Message: " . $msg['message'] . "\\n\\n";
            }

            echo "<script>alert('$alertMessage');</script>";
        }
    ?>




</body>
</html>