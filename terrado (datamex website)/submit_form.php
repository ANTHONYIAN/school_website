

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
