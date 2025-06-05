<?php
    include("submit_form.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admissions</title>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&family=Roboto&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Orbitron', sans-serif;
      background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
      color: #fff;
      overflow-x: hidden;
    }

    header, nav, footer {
      text-align: center;
      padding: 20px;
      background: rgba(0, 0, 0, 0.6);
      backdrop-filter: blur(5px);
      border-bottom: 1px solid #00f2ff;
    }

    nav ul {
      list-style: none;
      display: flex;
      justify-content: center;
      gap: 30px;
      padding: 0;
    }

    nav a {
      text-decoration: none;
      color: #00f2ff;
      font-weight: bold;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #ffffff;
    }

    main {
      padding: 60px 20px;
      text-align: center;
    }

    button {
      padding: 14px 28px;
      font-size: 18px;
      background: #00f2ff;
      color: #000;
      border: none;
      border-radius: 30px;
      cursor: pointer;
      box-shadow: 0 0 20px #00f2ff;
      transition: transform 0.3s ease;
    }

    button:hover {
      transform: scale(1.1);
    }

    .popup-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      background: rgba(0, 0, 0, 0.85);
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 999;
      backdrop-filter: blur(5px);
    }

    .popup-form {
      background: #111;
      padding: 40px;
      border-radius: 20px;
      max-width: 800px;
      width: 95%;
      box-shadow: 0 0 30px rgba(0, 242, 255, 0.5);
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
      animation: zoomIn 0.5s ease-in-out;
    }

    @keyframes zoomIn {
      from { transform: scale(0.8); opacity: 0; }
      to { transform: scale(1); opacity: 1; }
    }

    .popup-form h2, .popup-form p {
      grid-column: span 2;
      text-align: center;
      margin-bottom: 10px;
    }

    .popup-form label {
      text-align: left;
      font-weight: 500;
    }

    .popup-form input, .popup-form select {
      width: 100%;
      padding: 10px;
      background: #1a1a1a;
      border: 1px solid #00f2ff;
      border-radius: 10px;
      color: #fff;
      font-size: 14px;
    }

    .popup-form input[type="submit"] {
      grid-column: span 2;
      background: #00f2ff;
      color: #000;
      font-weight: bold;
      transition: background 0.3s;
    }

    .popup-form input[type="submit"]:hover {
      background: #0ff;
    }

    .gender-option {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    footer {
      margin-top: 50px;
      border-top: 1px solid #00f2ff;
    }

    a {
      color: #00f2ff;
    }
  </style>
</head>
<body>
  <header>
    <h1>👨‍🎓📚💻 DATEMEX College of Saint Adeline 👨‍🎓📚💻</h1>
    <p>Where your future begins... in style 🌌</p>
  </header>

  <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About DCSA</a></li>
      <li><a href="contact.html">Contact</a></li>
      <li><a href="programs.html">Programs</a></li>
      <li><a href="admission.html">Admissions</a></li>
    </ul>
  </nav>

  <main>
    <button onclick="document.getElementById('formPopup').style.display='flex'">☛ Apply now click here thank you! ☚</button>

    <div class="popup-overlay" id="formPopup" style="display:none">
      <form action="submit_form.php" method="POST" class="popup-form">
        <h2>✅ Reserve Your Spot Now</h2>
        <p>Be part of a next-gen learning experience.</p>

        <label for="branch">Branch Reference</label>
        <input type="text" id="branch" name="branch" required>

        <label for="programs">Select Program</label>
        <select id="programs" name="programs" required>
          <option value="" disabled selected>Select a Program</option>
          <option value="ACT">ACT</option>
          <option value="BSIT">BSIT</option>
          <option value="BSTM">BSTM</option>
          <option value="BSOA">BSOA</option>
          <option value="BSHM">BSHM</option>
          <option value="ICT">ICT</option>
          <option value="HE">HE</option>
          <option value="ABM">ABM</option>
          <option value="GAS">GAS</option>
          <option value="HUMSS">HUMSS</option>
          <option value="STEM">STEM</option>
        </select>

        <label for="first-name">First Name</label>
        <input type="text" id="first-name" name="first-name" required>

        <label for="middle-name">Middle Name</label>
        <input type="text" id="middle-name" name="middle-name" required>

        <label for="last-name">Last Name</label>
        <input type="text" id="last-name" name="last-name" required>

        <label for="address">Address</label>
        <input type="text" id="address" name="address" required>

        <label for="contact">Contact No.</label>
        <input type="tel" id="contact" name="contact" required>

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required>

        <label for="dob">Date of Birth</label>
        <input type="date" id="dob" name="dob" required>

        <label>Gender</label>
        <div class="gender-option">
          <input type="radio" name="gender" value="male" required> Male
          <input type="radio" name="gender" value="female"> Female
          <input type="radio" name="gender" value="other"> Other
        </div>
 
        <input type="submit" value="🚀🗳✅ Submit Application">
      </form>
    </div>
  </main>

  <footer>
    <p>&copy; 2024 DATEMEX College of Saint Adeline. All rights reserved.</p>
    <p>Follow us on 
      <a href="https://www.facebook.com/datamexcollegeofstadeline/">Facebook</a> |
      <a href="https://www.instagram.com/explore/locations/564102351/datamex-institute-of-computer-technology/">Instagram</a> |
      <a href="https://www.youtube.com/watch?v=cYdwZ0Rchwo">YouTube</a>
    </p>
  </footer>
</body>
</html>