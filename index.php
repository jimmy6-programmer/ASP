<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Artist Summer Promotion</title>
    <meta name="description" content="Free bootstrap template Atlas">
    <link rel="icon" href="img/other_contents/SUMMER PROMOTION F [Recovered].png" sizes="32x32" type="image/png">
    <!-- custom.css -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- bootstrap.min.css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- font-awesome -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    
    <!-- AOS -->
    <link rel="stylesheet" href="css/aos.css">
    <style>
        #banner {
            position: relative;
            width: 100%;
            min-height: 100vh;
            overflow: hidden;
            display: flex;
            align-items: center;
        }
        
        .bg-blur {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('img/banner-bk.jpg');
            background-size: cover;
            background-position: center;
            filter: blur(10px);
            z-index: 1;
        }
        
        #content {
            position: relative;
            z-index: 2;
            color: white;
            padding: 20px;
        }
        
        .video-wrapper {
            position: relative;
            text-align: center;
        }
        
        .promo-video {
            width: 100%; 
            max-width: 100%; /* Ensure video fits within the column */
            border-radius: 15px; 
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3); 
        }
        
        .play-icon, .play-again {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            cursor: pointer;
            z-index: 2; /* Ensure it is above the video */
        }

        .play-icon, .play-again::before{
            display: none;
        }

        .play-icon img, .play-again img {
            width: 60px; /* Adjust size as needed */
            height: 60px; /* Adjust size as needed */
        }
        

        /* Ensure text and video do not overlap */
        @media (min-width: 992px) {
            #content {
                padding: 40px; /* Increase padding on larger screens */
            }
            
            .display-3 {
                font-size: 3.5rem; /* Ensure text size is appropriate for large screens */
            }
            
            .lead {
                font-size: 1.5rem; /* Increase the lead text size on larger screens */
            }
        }

        .contestant-card {
            background-color: #00274d; /* Dark blue color */
            color: white;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
        }
        
        .contestant-card .btn {
            background-color: #004080; /* Slightly different shade for the button */
            color: white;
            border: none;
        }
        
        .contestant-card .btn:hover {
            background-color: #003366; /* Darker shade on hover */
        }
        #feature-last{
            height: 300px;
        }
        
        
        
    </style>
</head>

<body>
    <!-- banner -->
    <div class="jumbotron jumbotron-fluid" id="banner">
        <div class="bg-blur"></div>
        <div class="container text-center text-md-left" id="content">
            <header>
                <div class="row justify-content-between">
                    <div class="col-2">
                        <img src="img/other_contents/SUMMER PROMOTION F [Recovered].png" alt="logo">
                    </div>
                    <div class="col-6 align-self-center text-right">
                        <!-- <a href="#" class="text-white lead">Get Early Access</a> -->
                    </div>
                </div>
            </header>
            
            <!-- Video Embed -->
            <div class="video-wrapper">
                <video id="promo-video" class="promo-video" autoplay muted playsinline loop>
                    <source src="img/other_contents/ARTIST SUMMER PROMOTIONmp4.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="play-icon" onclick="playFeatureVideo()">
                    <img src="img/play.png" alt="Play Video">
                </div>
                
            </div>
            
            <h1 data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="display-3 text-white font-weight-bold my-5">
                Support Your Favorite Artist<br>
                Cast Your Vote Now!
            </h1>
            <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-white my-4">
                Your voice matters! Choose the artist who deserves to win and help them reach the top. It's easy, quick, and every vote counts. Be a part of their journey to stardom by casting your vote today.
            </p>
            <a href="#contestants" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="btn my-4 font-weight-bold atlas-cta cta-green">Vote Now</a>
        </div>
    </div>
    
    
    
    <!-- three-blcok -->
    <div class="container my-5 py-2">
        <h2 class="text-center font-weight-bold my-5">How to Vote for Your Favorite Artist</h2>
        <div class="row">
            <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <img src="img/icons8-elections-100.png" alt="Step 1: Choose an Artist" class="mx-auto">
                <h4>Step 1: Choose an Artist</h4>
                <p>Browse through the list of artists and select the one you want to vote for.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <img src="img/icons8-approval-100.png" alt="Step 2: Cast Your Vote" class="mx-auto">
                <h4>Step 2: Cast Your Vote</h4>
                <p>Click on the vote button and follow the prompts to confirm your vote.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <img src="img/icons8-cash-in-hand-100.png" alt="Step 3: Pay for Your Vote" class="mx-auto">
                <h4>Step 3: Pay for Your Vote</h4>
                <p>Complete the payment process to finalize your vote. An email confirmation will be sent to you.</p>
            </div>
        </div>
    </div>
    
    <!-- feature (skew background) -->
<div class="jumbotron jumbotron-fluid feature" id="feature-first">
    <div class="container my-5">
        <div class="row justify-content-between text-center text-md-left">
            <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6">
                <h2 class="font-weight-bold">Discover How to Vote</h2>
                <p class="my-4">Learn about the simple and exciting process of voting for your favorite artist in our music contest.
                    <br> Explore the steps and be part of the action to help your favorite artist win!</p>
            </div>
            
            <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" class="col-md-6 align-self-center">
                <div class="video-wrapper">
                    <video id="feature-video" class="promo-video" autoplay playsinline>
                        <source src="img/other_contents/SUMMER PROMOTION final.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="play-icon" onclick="playFeatureVideo()">
                        <img src="img/play.png" alt="Play Video">
                    </div>
                    <div class="play-again" onclick="playFeatureVideo()">
                        <img src="img/play.png" alt="Play Again">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- feature (green background) -->

<!-- -->


<div class="jumbotron jumbotron-fluid feature" id="feature-last">
    <div class="container">
        <div class="row justify-content-between text-center text-md-left">
            <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" class="col-md-6 flex-md-last">
                <h2 class="font-weight-bold">Your Votes Matter</h2>
                <p class="my-4">
                We ensure a secure and reliable voting process for all participants.
                <br> Your votes are safely counted and contribute to the fair selection of the winning artist.
                </p>
            </div>
            <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6 align-self-center flex-md-first d-none d-md-block" id="logo">
                <img src="img/other_contents/SUMMER PROMOTION F [Recovered].png" alt="Your Votes Matter" class="mx-auto d-block" style="margin-top:-40%;">
            </div>
        </div>
    </div>
</div>

    <!-- YouTube Videos Section -->
    <div class="container video-section">
    <h2 class="text-center font-weight-bold">Watch These Videos</h2>
    <div class="row">
        <div class="col-12 col-md-4 d-flex justify-content-center mb-4 mb-md-0">
            <iframe class="mx-auto" src="https://www.youtube.com/embed/m53vqJ2IPuM" allowfullscreen></iframe>
        </div>
        <div class="col-12 col-md-4 d-flex justify-content-center mb-4 mb-md-0">
            <iframe class="mx-auto" src="https://www.youtube.com/embed/bi6MffCZ0Fw" allowfullscreen></iframe>
        </div>
        <div class="col-12 col-md-4 d-flex justify-content-center">
            <iframe class="mx-auto" src="https://www.youtube.com/embed/lVJ_VZ17ldU" allowfullscreen></iframe>
        </div>
    </div>
    <div class="text-center mt-4">
        <a href="highlights.html" class="see-all-highlights btn btn-success">See All Highlights</a>
    </div>
</div>



    <!-- price table -->
    <div class="container my-5 py-2" id="contestants">
        <h2 class="text-center font-weight-bold d-block mb-3">Meet Our Contestants</h2>
        <div class="row justify-content-between">
            <?php
            // Database connection
            $conn = new mysqli('localhost', 'root', '', 'voting_system');

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch contestants
            $sql = "SELECT * FROM contestants";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Loop through each contestant and display
                while($row = $result->fetch_assoc()) {
                    echo '
                    <div data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center py-4 mt-5 contestant-card">
                        <img src="' . $row['image'] . '" alt="' . $row['name'] . '" class="img-fluid rounded-circle mx-auto mb-3" style="width: 150px; height: 150px;">
                        <h4 class="my-4">' . $row['name'] . '</h4>
                        <p class="font-weight-bold">Age: ' . $row['age'] . '</p>
                        <p>Specialty: ' . $row['specialty'] . '</p>
                        <p>From: ' . $row['origin'] . '</p>
                        <a href="vote.html?id=' . $row['id'] . '" class="btn my-4 font-weight-bold atlas-cta cta-blue">Vote</a>
                    </div>';
                }
            } else {
                echo '<p class="text-center">No contestants found.</p>';
            }

            $conn->close();
            ?>
        </div>
    </div>
    
    
    <!-- client -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="img/1.png" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="img/2.png" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="img/3.png" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="img/4.png" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="img/5.png" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="img/6.png" class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>
    <!-- contact -->
    <div class="jumbotron jumbotron-fluid" id="contact" style="background-image: url(img/contact-bk.jpg);">
        <div class="container my-5">
            <div class="row justify-content-between">
                <div class="col-md-6 text-white">
                    <h2 class="font-weight-bold">Contact Us</h2>
                    <p class="my-4">
                        Have any questions or need assistance? 
                        <br> We're here to help. Reach out to us, and we'll get back to you as soon as possible.
                    </p>                    
                    <ul class="list-unstyled">
                        <li>Phone : (+250) 788 518 845</li>
                        <li>Address : Kigali,Remera,Giporoso</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <form>
                    	<div class="row">
	                        <div class="form-group col-md-6">
	                            <label for="name">Your Name</label>
	                            <input type="name" class="form-control" id="name">
	                        </div>
	                        <div class="form-group col-md-6">
	                            <label for="Email">Your Email</label>
	                            <input type="email" class="form-control" id="Email">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="message">Message</label>
	                        <textarea class="form-control" id="message" rows="3"></textarea>
	                    </div>
                        <button type="submit" class="btn font-weight-bold atlas-cta atlas-cta-wide cta-green my-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

	<!-- copyright -->
	<div class="jumbotron jumbotron-fluid" id="copyright">
        <div class="container">
            <div class="row justify-content-between">
            	<div class="col-md-6 text-white align-self-center text-center text-md-left my-2">
                    Copyright © 2024 Future focus ltd.
                </div>
                <div class="col-md-6 align-self-center text-center text-md-right my-2" id="social-media">
                    <a href="#" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-medium" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- AOS -->
    <script src="js/aos.js"></script>
    <script>
      AOS.init({
      });
    </script>
    <script>
        function playFeatureVideo() {
            var video = document.getElementById('feature-video');
            var playIcon = document.querySelector('.play-icon');
            var playAgain = document.querySelector('.play-again');
        
            if (video.paused) {
                video.play();
                playIcon.style.display = 'none'; // Hide play icon when video starts
                playAgain.style.display = 'none'; // Ensure play again button is hidden when video is playing
            } else {
                video.pause();
                playIcon.style.display = 'block'; // Show play icon when video is paused
                playAgain.style.display = 'none'; // Ensure play again button is hidden when video is paused
            }
        }
        
        // Show play again button when the video ends
        document.getElementById('feature-video').addEventListener('ended', function() {
            document.querySelector('.play-again').style.display = 'block'; // Show play again button
        });
        
        
        
    </script>            
</body>

</html>