<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Jahaira's Portfolio</title>
  <link rel="stylesheet" href="style.css" />
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

</head>
<body>

  <nav>
    <a href="#home">Home</a>
    <a href="#about">About Me</a>
    <a href="#skillset">Skillset</a>
    <a href="#projects">Projects</a>
    <a href="#contact">Contact</a>
  </nav>

  <section id="home">
  <div class="home-container">
    <div class="intro-text">
       <h1>Hi, I'm <span class="highlight-name">Jahaira</span></h1>
      <h1>Web Designer and Developer<h1>
    
  <div class="social-links">
  <a href="https://mail.google.com/mail/jahairaampaso7@gmail.com">
    <div class="icon-container">
      <box-icon name="envelope" type="solid"></box-icon>
    </div>
  </a>
  <a href="https://instagram.com/jaaaiii_a" target="_blank">
    <div class="icon-container">
      <box-icon name="instagram-alt" type="logo"></box-icon>
    </div>
  </a>
  <a href="https://github.com/Jahairaz" target="_blank">
    <div class="icon-container">
      <box-icon name="github" type="logo"></box-icon>
    </div>
  </a>
</div>
</div>
  
    <div class="profile-pic">
      <img src="images/jai.jpg" alt="Profile Picture">
    </div>
  </div>
</section>

  <main>
    <section id="about">
      <h2>About Me</h2>
      <p>
         I'm a passionate web developer with a strong eye for design and a knack for turning ideas<br>
         into functional websites. I love building projects that are both beautiful and efficient,<br>
         always focusing on creating seamless user experiences. Whether it's a dynamic web application<br>
         or a simple, sleek site, I enjoy crafting solutions that meet both aesthetic and technical needs.<br>
         With a deep understanding of modern web technologies, I continuously strive to improve my skills <br>
         and stay on top of the latest trends in development.<br>
        </p>
    </section>

    <section id="skillset">
  <h2>Skillset</h2>
  <div class="skill">
    <label>HTML / CSS</label>
    <div class="bar">
      <div class="progress" style="width: 95%;">95%</div>
    </div>
  </div>
  <div class="skill">
    <label>PHP</label>
    <div class="bar">
      <div class="progress" style="width: 80%;">80%</div>
    </div>
  </div>
  <div class="skill">
    <label>MySQL</label>
    <div class="bar">
      <div class="progress" style="width: 90%;">90%</div>
    </div>
  </div>
  <div class="skill">
    <label>C++</label>
    <div class="bar">
      <div class="progress" style="width: 85%;">85%</div>
    </div>
  </div>
</section>

    <section id="projects">
  <h2>Projects</h2>
  <div class="project-grid">
    <div class="project-item">
      <img src="images/wed.png" alt="Project 1 Screenshot">
      <h3>Wedding Scheduling</h3>
    </div>
    <div class="project-item">
      <img src="images/watch.png" alt="Project 2 Screenshot">
      <h3>Watch Catalog</h3>
    </div>
    <div class="project-item">
      <img src="images/car.png" alt="Project 3 Screenshot">
      <h3>Car Rental</h3>
    </div>
  </div>
</section>


    <section id="contact">
  <h2>Contact Me</h2>
  <form id="contactForm">
    <input type="text" name="name" placeholder="Your Name" required />
    <input type="email" name="email" placeholder="Your Email" required />
    <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
    <button type="submit">Send Message</button>
  </form>

  <!-- Modal -->
  <div id="messageModal" style="display:none; position:fixed; top:20%; left:50%; transform:translateX(-50%); background:#fff; padding:20px; border-radius:10px; box-shadow:0 0 10px rgba(0,0,0,0.3); z-index:9999;">
    <h2>Message Sent!</h2>
    <p id="modalContent"></p>
    <button onclick="document.getElementById('messageModal').style.display='none'">Close</button>
  </div>
</section>

<!-- Add this just before </body> or after the section -->
<script>
document.getElementById("contactForm").addEventListener("submit", function (e) {
  e.preventDefault();
  var formData = new FormData(this);

  fetch("send_message.php", {
    method: "POST",
    body: formData,
  })
    .then((res) => res.text())
    .then((data) => {
      document.getElementById("modalContent").innerHTML = data;
      document.getElementById("messageModal").style.display = "block";
      document.getElementById("contactForm").reset();
    })
    .catch((err) => {
      document.getElementById("modalContent").innerHTML = "Something went wrong.";
      document.getElementById("messageModal").style.display = "block";
    });
});
</script>


  <footer>
    <p>&copy; <?php echo date('Y'); ?> All rights reserved.</p>
  </footer>

<script>
  const sections = document.querySelectorAll("section");
  const navLinks = document.querySelectorAll("nav a");

  window.addEventListener("scroll", () => {
    let current = "";

    sections.forEach((section) => {
      const sectionTop = section.offsetTop - 100;
      const sectionHeight = section.clientHeight;
      if (pageYOffset >= sectionTop && pageYOffset < sectionTop + sectionHeight) {
        current = section.getAttribute("id");
      }
    });

    navLinks.forEach((link) => {
      link.classList.remove("active");
      if (link.getAttribute("href") === `#${current}`) {
        link.classList.add("active");
      }
    });
  });
</script>


</body>
</html>
