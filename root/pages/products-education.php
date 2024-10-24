<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="/root/scripts/header.js"></script>
  <link rel="stylesheet" href="../css/global.css" type="text/css">
  <title>Circle Solutions</title>
</head>

<body class="healthcareEducationBody">
  <?php
  include "../sections/header.html";
  ?>
  <div class="healthcareEducationContainer">
    <h1 class="healthcareEducationH1">Education</h1>

    <!-- Faculty Section -->
    <div class="faculty-section">
      <div class="healthcareEducationImg">
        <img src="../images/faculty.png" alt="Faculty Image" />
      </div>
      <div class="faculty-text">
        <h2 class="healthcareEducationH2">Faculty</h2>
        <p>
          <b><i>Empower faculty with the news and information they need</i></b>
        </p>
        <p>
          Ensure your faculty feel connected to the institution, their peers,
          and the information they need to succeed.
        </p>
        <p>Why faculty loves Circle Solutions:</p>
        <ul class="educationUl">
          <li>Centralized info hubs for department news</li>
          <li>One-click access to key tools and links</li>
          <li>Targeted newsletters that reduce inbox clutter</li>
        </ul>
      </div>
    </div>

    <!-- Student Section -->
    <div class="student-section">
      <div class="student-text">
        <h2 class="healthcareEducationH2">Students</h2>
        <p>
          <i><b>Create a safe, cohesive community for students</b></i>
        </p>
        <p>
          Circle Solutions ensures students are connected to your comms, and
          special student pricing makes it easy.
        </p>
        <p>Why students love Circle Solutions:</p>
        <ul class="educationUl">
          <li>Communities to engage with campus organizations</li>
          <li>Critical notifications during emergencies</li>
          <li>Accessible university news and event registrations</li>
        </ul>
      </div>
      <div class="healthcareEducationImg">
        <img src="../images/students.png" alt="Student Image" />
      </div>
    </div>
    <div class="educationBtn">
      <a href="./packages.html"><button class="healthcareEducation-seePackages">See packages</button></a>
    </div>
  </div>

  <?php
  include "../sections/footer.html";
  ?>

</body>

</html>
