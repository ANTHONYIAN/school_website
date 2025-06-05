<?php
    include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATEMEX College of Saint Adeline</title>
    <style>
        nav-body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #4A90E2, #9013FE);
            line-height: 1.6;
        }

        nav-header {
            background: linear-gradient(to right, #4A90E2, #9013FE);
            color: white;
            padding: 30px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .logo {
            max-width: 150px; 
            height: auto;
            margin-bottom: 10px; 
        }

        nav {
            background: linear-gradient(to right, #4A90E2, #9013FE);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin: 0 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            transition: background 0.3s, color 0.3s;
        }

        nav ul li a:hover {
            background: #4A90E2;
            color: white;
            border-radius: 5px;
        }

        nav-main {
            padding: 20px;
            max-width: 1200px;
            margin: auto;
        }

        nav-section {
            background: white;
            margin: 20px 0;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #4A90E2;
            border-bottom: 2px solid #9013FE;
            padding-bottom: 10px;
        }

        h3 {
            color: #333;
        }

        footer {
            text-align: center;
            padding: 15px;
            background: #333;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
            margin-top: 20px;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.2);
        }

        footer p {
            margin: 5px 0;
        }

        footer a {
            color: #4A90E2;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
<head>
    <body>
    <img src="images 1.jpg" alt="DATEMEX College Logo" class="logo"><center>
        <h1>Welcome to DATEMEX College of Saint Adeline!</h1>
    </header>
    <nav>
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="about.html">About DCSA</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="programs.html">Programs</a></li>
            <li><a href="admission.html">Admissions</a></li>
        </ul>
    </nav>
    <main>
        <section id="home">
            <h2>Home</h2>
            <h3>Hero Section</h3>
            <p>Welcome to Datamex!</p>
            <h3>Advertisement</h3>
            <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fdatamexcollegeofstadeline%2Fvideos%2F1071032067920923%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
            <p>Check out our latest offers and updates.</p>
            <p>Here's a possible announcement:


Announcement: Datamex Enrollment


Attention students!


Datamex Institute is now accepting enrollments for various programs in Data Science, Artificial Intelligence, and Information Technology!


Programs Offered

Data Science: Learn data analysis, visualization, and machine learning.
Artificial Intelligence: Explore AI, machine learning, and natural language processing.
Information Technology: Study databases, programming, web development, cybersecurity, network engineering.


Benefits

Industry-recognized certifications
Hands-on training with real-world projects
Expert instructors with industry experience
Flexible scheduling (online/offline)
Career assistance and job placement

How to Enroll
Fill out the online application form
Submit required documents
Pay enrollment fee




Deadline

Enrollment deadline: August 15 2025


Don't miss this opportunity! Apply now and start your journey in data science and technology!</p>


Follow us on social media:


Facebook: @DatamexInstitute
Twitter: @DatamexPH
Instagram: @Datamex_Edu</p>
            <p>Stay tuned for important announcements.</p>
        </section> 
    </main>
    <footer>
        <p>&copy; 2024 DATEMEX College of Saint Adeline. All rights reserved.</p>
        <p>Follow us on social media: 
            <a href="https://www.facebook.com/datamexcollegeofstadeline/">Facebook</a> 
            <a href="https://www.instagram.com/explore/locations/564102351/datamex-institute-of-computer-technology/">Instagram</a> 
            <a href="https://www.youtube.com/watch?v=cYdwZ0Rchwo">Youtube</a>
            
        </p>
    </footer>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Collect and sanitize input
    $branch = htmlspecialchars(trim($_POST["branch_reference"]));
    $program = htmlspecialchars(trim($_POST["programs"]));
    $firstName = htmlspecialchars(trim($_POST["first_name"]));
    $middleName = htmlspecialchars(trim($_POST["middle_name"]));
    $lastName = htmlspecialchars(trim($_POST["last_name"]));
    $address = htmlspecialchars(trim($_POST["address"]));
    $contact = htmlspecialchars(trim($_POST["contact_no"]));
    $email = htmlspecialchars(trim($_POST["email_address"]));
    $dob = htmlspecialchars(trim($_POST["date_of_birth"]));
    $gender = htmlspecialchars(trim($_POST["gender"]));

    // Optional: store in a file or DB (this example writes to a file)
    $entry = "Branch: $branch\nProgram: $program\nName: $firstName $middleName $lastName\nAddress: $address\nContact: $contact\nEmail: $email\nDOB: $dob\nGender: $gender\n\n";

    $file = "submissions.txt";
    if (file_put_contents($file, $entry, FILE_APPEND | LOCK_EX)) {
        echo "<h2>🎉 Application Submitted Successfully!</h2>";
        echo "<p>Thank you, <strong>$firstName</strong>. Well get in touch with you soon.</p>";
        echo "<a href='admission.html'>← Back to Form</a>";
    } else {
        echo "<h2>⚠️ Error!</h2>";
        echo "<p>Sorry, we could save your submission. Please try again.</p>";
    }
} else {
    // Block non-POST access
    header("Location: admission.html");
    exit();
}
?>
