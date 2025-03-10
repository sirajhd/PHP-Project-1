<?php 
session_start();
if(isset($_SESSION["users"])){
    header("Location: index2.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ARU TECHNO CLUB is a community for tech enthusiasts, focused on sharing knowledge, organizing events, and learning about the latest technology trends.">
    <meta name="author" content="ARU Tech Club Team">
    <meta name="keywords" content="technology, club, events, learning, ARU">
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>ARU TECHNO CLUB</title>
</head>

<body>
    <header>
        <div class="logo">ARUTECH</div>
        <nav>
            <ul class="nav-links">
                <li><a href="#HOME">Home</a></li>
                <li><a href="#ABOUT">About</a></li>
                <li><a href="#Event">Events</a></li>
                <li><a href="#GALLERY">Gallery</a></li>
                <li><a href="#Schedule">Schedule</a></li>
                <li><a href="#SignUp">Sign Up</a></li>
            </ul>
        </nav>
    </header>

<!-- Sidebar -->
    <div id="sidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeSidebar()">&times;</a>
        <a href="#HOME">Home</a>
        <a href="#ABOUT">About</a>
        <a href="#Event">Events</a>
        <a href="#GALLERY">Gallery</a>
        <a href="#Schedule">Schedule</a>
        <a href="#SignUp">Sign Up</a>
    </div>
 <!-- Button to toggle the sidebar -->
    <button id="sidebarToggle" class="openbtn">&#9776; Menu</button>

    <section class="Home" id="HOME">
        <div class="hometext">
            <h1 class="well">WELCOME TO <br>ARSI UNIVERSITY</br> TECHNOLOGY CLUB</h1>
        </div>
    </section>

    
    <h2 class="gall" id="ABOUT">ABOUT</h2>
     <!-- About Section -->
    
    <section class="AboutSection">
        <div class="aboutImage">
            <img src="./IMAGE/about.jpg" alt="About ARU TECH">
        </div>
        <div class="AboutPara">
        <p>
                    The <b>ARU TECH</b> club is a dynamic community of technology enthusiasts at <b>Asella,</b>
                    dedicated to fostering innovation, collaboration, and learning in the fields of computing, software
                    development, cybersecurity,AI,graphics design and emerging technologies. The club provides a
                    platform for students to enhance their technical skills through hands-on workshops, coding
                    <s>challenges</s>, hackathons, and
                    industry guest lectures. Whether you're a beginner looking to explore the world of tech or an
                    experienced coder aiming to expand your expertise, <b>ARU -TECH</b> Club offers a supportive
                    environment to
                    grow, network, and stay updated with the latest technological advancements. Through teamwork and
                    creativity, members work on exciting projects, contribute to open-source initiatives, and prepare
                    for successful careers in the tech industry.
                </p>
        </div>
    </section>

    <!-- Events Section -->
    <h2 id="Event">EVENTS</h2>
    <section class="event-section">
            <div class="event-content">
                <div class="event-img">
                    <img src="./IMAGE/image3.jpg" alt="Event Image">
                </div>
                <div class="event-text">
                    <h3> Computation Event 2017</h3>
                    <p>
                      <strong>Arsi University</strong> students from the  <u>ARU Techno Club </u>, have actively participated in the <strong>Ethiopian Collegiate Programming Contest (ETCPC)</strong>, showcasing their talent, problem-solving skills, and teamwork in competitive programming. Representing <strong>Arsi University (ARU)</strong>, these students engage in rigorous training sessions, algorithmic problem-solving, and coding challenges to compete with some of the best programmers from universities across Ethiopia. Their participation in ETCPC not only enhances their logical thinking and coding proficiency but also fosters innovation and collaboration within the ARU Techno Club. By taking part in such competitions, they contribute to the university’s growing reputation in <strong>computer science and technology</strong>, inspiring future students to pursue excellence in programming and software development. 🚀💻
                    </p>
                </div>
            </div>
        </section>
        <section class="event-section">
            <div class="event-content">
                <div class="event-img">
                    <img src="./IMAGE/photo_18_2025-01-29_03-55-05.jpg" alt="Event Image">
                </div>
                <div class="event-text" id="Event2">
                    <h3>Welcome Event 2017</h3>
                    <p>
                        The ARU Techno Club proudly hosted a grand Welcome Event for the Batch of 2017, creating a
                        vibrant and
                        engaging atmosphere for the new students. The day was filled with exciting tech demonstrations,
                        interactive sessions, and motivational talks from senior members and faculty. Fun activities,
                        ice-breaking games, and networking sessions helped students feel at home while fostering a sense
                        of
                        community. The highlight of the event was a special tech showcase, where students explored AI
                        projects,
                        web development works. The event concluded with an inspiring address from the club’s leaders,
                        encouraging the newcomers to actively participate in future projects and competitions.
                    </p>
                </div>
            </div>
        </section>
         <!-- gallery section -->
         <section class="gallerySection">
            <h2 class="gall" id="GALLERY">GALLERY</h2>
            <div class="gallery">
                <a href="#AI" id="img1"><img src="./IMAGE/teme.jpg" alt="Gallery Image 1"></a>
                <a href="#Event" id="img2"><img src="./IMAGE/edit.jpg" alt="Gallery Image 2"></a>
                <a href="#Photo" id="img3"><img src="./IMAGE/photo2.jpg" alt="Gallery Image 3"></a>
                <a href="#Event2" id="img4"><img src="./IMAGE/photo_11_2025-01-29_03-55-05.jpg" alt="Gallery Image 4"></a>
                <a href="#Web" id="img5"><img src="./IMAGE/photo_4.jpg" alt="Gallery Image 5"></a>
                <a href="#DuplicateEvent" id="img6"><img src="./IMAGE/photo2.jpg" alt="Gallery Image 6"></a>
            </div>
        </section>

      <!-- Table section -->

      <section class="table-section">
            <h2 id="Schedule">Course Schedule</h2>
            <table id="scheduleTable">
                <tr>
                    <th>
                        <h3>Time</h3>
                    </th>
                    <th>
                        <h3 id="Web">Web Programming</h2>
                    </th>
                    <th>
                        <h3>Graphic Design</h2>
                    </th>
                    <th >
                        <h3 id="AI">AI</h2>
                    </th>
                    <th>
                        <h3>Cyber Security</h2>
                    </th>
                </tr>
                <tr>
                    <td>Round One</td>
                    <td>HTML & CSS Basics</td>
                    <td>Introduction to Design</td>
                    <td>Machine Learning Basics</td>
                    <td>Network Security Basics</td>
                </tr>
                <tr>
                    <td>Round Two</td>
                    <td>JavaScript & React</td>
                    <td>Photoshop & Illustrator</td>
                    <td>Deep Learning Fundamentals</td>
                    <td>Penetration Testing</td>
                </tr>
                <tr>
                    <td>Round Three</td>
                    <td>Backend Development</td>
                    <td>UI/UX Design Principles</td>
                    <td>AI Model Deployment</td>
                    <td>Ethical Hacking</td>
                </tr>
                <tr>
                    <td>Round Four</td>
                    <td>Full-Stack Project</td>
                    <td>Branding & Identity</td>
                    <td>Natural Language Processing</td>
                    <td>Cybersecurity Strategies</td>
                </tr>
            </table>
        </section>   

    
    <!-- Registration Form -->
    <div class="container">
        <?php
        if (isset($_POST["submit"])) {
            $fullname = $_POST["fullname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $passwordRepeat = $_POST["repeat_password"];
            $passwordhash = password_hash($password, PASSWORD_DEFAULT);

            $errors = array();
            if (empty($fullname) || empty($email) || empty($password) || empty($passwordRepeat)) {
                array_push($errors, "All fields are required");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Email is not valid");
            }
            if (strlen($password) < 8) {
                array_push($errors, "Password must be at least 8 characters long");
            }
            if ($password !== $passwordRepeat) {
                array_push($errors, "Password does not match");
            }

            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                array_push($errors, "Email already exists!");
            }

            if (Count($errors) > 0) {
                foreach ($errors as $error) {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            } else {
                $sql = "INSERT INTO users (full_name, email, password) VALUES (?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if(mysqli_stmt_prepare($stmt, $sql)){
                    mysqli_stmt_bind_param($stmt, "sss", $fullname, $email, $passwordhash);
                    mysqli_stmt_execute($stmt);
                    echo "<div class='alert alert-success'>You are registered successfully.</div>";
                } else {
                    die("Something went wrong");
                }
            }
        }
        ?>
        <h2 id="SignUp">REGISTRATION FORM</h2>
        <form action="" method="post">
            <div class="form-group">
                <input class="form-control" type="text" name="fullname" placeholder="Full Name">
            </div>
            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="repeat_password" placeholder="Repeat Password">
            </div>
            <div class="form-group">
                <input class="btn" type="submit" value="Register" name="submit">
            </div>
        </form>
        <div><p>Already Registered? <a href="login.php">Login Here</a></p></div>
    </div>

    <footer>
        <div class="footer-content">
            <p>&copy; 2025 ARU TECHNO CLUB. All rights reserved.</p>
            <ul class="social-links">
                <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i> LinkedIn</a></li>
                <li><a href="#" target="_blank"><i class="fab fa-telegram-plane"></i> Telegram</a></li>
                <li><a href="#" target="_blank"><i class="fab fa-facebook"></i> Facebook</a></li>
            </ul>
        </div>
    </footer>

    <script src="JS/scripts.js"></script>
</body>
</html>
