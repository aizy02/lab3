<!DOCTYPE html>
<html lang="en">


<?php
$nickname = "Jay";
$age = 20;
$highSchool = "Senator Renato Compañero Cayetano Memorial Science and Technology High School, Taguig City";
$course = "BSCS – SF221";
$scholarship = "Yes, 50%, Public HS Graduate";
$transferee = "No";
?>


<?php
$feedback = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rawFeedback = $_POST["feedback"];
    // Use a simple regex to allow only letters, numbers, and basic punctuation
    $validatedFeedback = preg_replace("/[^a-zA-Z0-9,.!? ]/", "", $rawFeedback);
    $feedback = htmlspecialchars($validatedFeedback);
}
?>




<script>
        var profileModule = (function () {
            function displayDetails() {
                var detailsContainer = document.querySelector(".info ul");
                for (var key in personalDetails) {
                    var listItem = document.createElement("li");
                    listItem.innerHTML = "<strong>" + key.charAt(0).toUpperCase() + key.slice(1) + ":</strong> " + personalDetails[key];
                    detailsContainer.appendChild(listItem);
                }
            }

            return {
                displayDetails: displayDetails
            };
        })();

        profileModule.displayDetails();
    </script>
    
<script>
        async function fetchAdditionalInsights() {
            return new Promise((resolve) => {
                setTimeout(() => {
                    resolve("Currently, there are no additional aspects of note to share. My focus is on academic and personal development as I embark on this educational journey.");
                }, 1000);
            });
        }

        async function updateAdditionalInsights() {
            var additionalInsightsSection = document.querySelectorAll("section")[1];
            var additionalInsights = await fetchAdditionalInsights();

            var insightsParagraph = document.createElement("p");
            insightsParagraph.textContent = additionalInsights;
            additionalInsightsSection.appendChild(insightsParagraph);
        }

        updateAdditionalInsights();
    </script>
    
 <script>
        class ProfileAnimator {
            constructor(element) {
                this.element = element;
                this.setupListeners();
            }

            setupListeners() {
                this.element.addEventListener("click", () => {
                    this.element.style.transition = "transform 0.5s ease";
                    this.element.style.transform = "rotate(360deg)";
                });

                this.element.addEventListener("mouseover", () => {
                    this.element.style.transform = "scale(1.1)";
                    this.element.style.transition = "transform 0.5s ease";
                });

                this.element.addEventListener("mouseout", () => {
                    this.element.style.transform = "scale(1)";
                });
            }
        }

        var profileImage = document.querySelector(".profile img");
        var animator = new ProfileAnimator(profileImage);
    </script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reejay's Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="resources/images/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #3498db;
            margin: 0;
            padding: 0;
            color: #333;
            background-image: url('https://media1.tenor.com/m/X040Ybh-WyUAAAAd/anita-max-wynn.gif');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        header {
            background-color: #FDCDCD;
            padding: 15px;
            text-align: center;
        }

        h1 {
            color: #fff;
            margin-top: 0;
        }

        .profile {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin: 20px;
        }

        .profile img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        .info {
            flex: 1;
            margin-left: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        li {
            margin-bottom: 10px;
        }

        section {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 20px;
            margin: 20px;
        }

        h2 {
            color: #2980b9; 
            border-bottom: 2px solid #2980b9; 
            padding-bottom: 5px;
            margin-top: 0;
        }

        button {
            background-color: #aec0fc; 
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 20px;
        }

        footer {
            background-color: #FDCDCD;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        footer i {
            font-size: 24px;
            margin: 0 10px;
            transition: color 0.3s;
        }

        footer i:hover {
            color: #e6f7ff;
        }
    </style>
</head>

<body>

    
   <header>
    <h1 id="portfolioTitle">Reejay's Portfolio</h1>
</header>

<script>
    var portfolioTitle = "Reejay's Portfolio";
    var titleIndex = 0;

    document.getElementById("portfolioTitle").innerHTML = "";

    function typeWriterTitle() {
        if (titleIndex < portfolioTitle.length) {
            document.getElementById("portfolioTitle").innerHTML += portfolioTitle.charAt(titleIndex);
            titleIndex++;
            setTimeout(typeWriterTitle, 50);
        }
    }

    typeWriterTitle();
</script>

    <div class="profile">
        <img src="https://static.displate.com/857x1200/displate/2023-06-12/52d5e56e7e92064c138b734245586561_17e601e59e801c83f12f76e16621405d.jpg" alt="Profile Picture">
        <div class="info">
            <ul>
                <li><strong>Nickname:</strong> Jay</li>
                <li><strong>Age:</strong> 20</li>
                <li><strong>High School:</strong> Senator Renato Compañero Cayetano Memorial Science and Technology High School, Taguig City</li>
                <li><strong>Course:</strong> BSCS – SF221</li>
                <li><strong>Scholarship:</strong> Yes, 50%, Public HS Graduate</li>
                <li><strong>Transferee / Second course:</strong> No</li>
            </ul>
        </div>
    </div>

    <section>
        <h2>Motivation and Course Choice</h2>
        <p>Yes, I chose this course because of my inclination towards computer technology. I believe I have the potential to excel in this industry, and I am eager to learn and contribute to it.</p>

        <h2>I.T. Experience</h2>
        <p>I have experience with Visual Basic back in my junior high school years.</p>

        <h2>Hobbies / Interests / Libangan</h2>
        <p>I enjoy playing video games and spend time watching educational content on YouTube to upskill myself. Additionally, I make productive use of my free time by working on self-improvement, including regular gym sessions.</p>

        <h2>Academic Expectations</h2>
        <p>I expect to gain a comprehensive understanding of web programming and its practical applications. I aim to leverage this knowledge in my future career.</p>

        <h2>Life Goals and Dreams</h2>
        <p>My goals include personal growth, becoming a better individual, and excelling as a future employee or leader. Achieving financial freedom is also a significant objective.</p>
        <p>Yes, my dream is to own my dream house and car, signifying a milestone of personal achievement.</p>

        <h2>Additional Insights</h2>
        <p>Currently, there are no additional aspects of note to share. My focus is on academic and personal development as I embark on this educational journey.</p>
    </section>

    <section>
        <h2>Education</h2>
        <div>
            <h3>Kindergarten - Elementary</h3>
            <p>Sto. Niño Catholic School | 2010-2016</p>
        </div>
        <div>
            <h3>High School - Senior High School</h3>
            <p>Senator Rene Cayetano Science and Technology High School | 2016-2022</p>
        </div>
        <div>
            <h3>College</h3>
            <p>Asia Pacific College | 2022 - Present</p>
        </div>
    </section>
    
    <script>
        function myFunction() {
            var x = document.querySelectorAll("section");
            for (var i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
        }
    </script>

  <script>
    var header = document.querySelector("header");
    header.style.backgroundColor = "#FDCDCD";
</script>

<script>
    // Custom Fancy Feature
    var profileImage = document.querySelector(".profile img");

    profileImage.addEventListener("click", function () {
        this.style.transition = "transform 0.5s ease";
        this.style.transform = "rotate(360deg)";
    });
</script>

<script>
    var profileImage = document.querySelector(".profile img");
    profileImage.addEventListener("mouseover", function () {
        this.style.transform = "scale(1.1)";
        this.style.transition = "transform 0.5s ease";
    });

    profileImage.addEventListener("mouseout", function () {
        this.style.transform = "scale(1)";
    });
</script>
<script>
    function toggleSections() {
        var sections = document.querySelectorAll("section");
        for (var i = 0; i < sections.length; i++) {
            if (sections[i].style.display === "none" || sections[i].style.display === "") {
                sections[i].style.display = "block";
            } else {
                sections[i].style.display = "none";
            }
        }
    }
    
<?php
$showSections = true; 
?>
    var hideButton = document.querySelector("button");

    hideButton.addEventListener("click", toggleSections);
        <?php echo $showSections ? 'toggleSections()' : ''; ?>
    });
</script>

<button onclick="toggleSections()">>.<</button>

<script>
    var header = document.querySelector("header");
    var headerColors = ["#FF5733", "#3498db", "#2ecc71", "#e74c3c", "#f39c12"];

    header.addEventListener("mouseenter", function () {
        var randomColor = headerColors[Math.floor(Math.random() * headerColors.length)];
        this.style.transition = "background-color 0.5s ease";
        this.style.backgroundColor = randomColor;
    });

    header.addEventListener("mouseleave", function () {
        this.style.backgroundColor = "";
    });
</script>


<footer>
    <p id="socialMediaText">Find me on social media.</p>
    <script>
        var socialMediaText = "Find me on social media.";
        var index = 0;

        document.getElementById("socialMediaText").innerHTML = "";

        function typeWriter() {
            if (index < socialMediaText.length) {
                document.getElementById("socialMediaText").innerHTML += socialMediaText.charAt(index);
                index++;
                setTimeout(typeWriter, 50);
            }
        }
        typeWriter();
    </script>
    
<i class="fa fa-facebook-official animated"></i>
<i class="fa fa-instagram animated"></i>

<style>
    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0);
        }

        40% {
            transform: translateY(-20px);
        }

        60% {
            transform: translateY(-10px);
        }
    }

    .animated {
        animation: bounce 1s infinite;
    }
</style>

<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>



    
    
    <script>
    var footer = document.querySelector("footer");
    var footerColors = ["#FF5733", "#3498db", "#2ecc71", "#e74c3c", "#f39c12"];

    footer.addEventListener("mouseenter", function () {
        var randomColor = footerColors[Math.floor(Math.random() * footerColors.length)];
        this.style.transition = "background-color 0.5s ease";
        this.style.backgroundColor = randomColor;
    });

    footer.addEventListener("mouseleave", function () {
        this.style.backgroundColor = "";
    });
</script>
</footer>


<?php
$feedback = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $feedback = $_POST["feedback"];
}
?>

<section>
    <h2>Feedback</h2>
    <form method="post">
        <label for="feedback">Share your thoughts:</label>
        <textarea id="feedback" name="feedback" rows="4" cols="50"></textarea>
        <br>
        <input type="submit" value="Submit">
    </form>
</section>

