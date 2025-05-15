<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Header -->
    <header id="header">
        <div class="container">
            <nav>
                <a href="#" class="logo">MyPortfolio</a>
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <button class="Button"><a href="../AdminUI/adminLogin.php" style="text-decoration: none; color: #f9f9f9;">Log In</a></button>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Hi, I'm <span class="highlight">Pheinz Magnun</span></h1>
                <p>I'm a starting Web Developer fascinates in beautiful and user-friendly websites.</p>
                <a href="#contact" class="btn">Contact Me</a>
            </div>
        </div>
        <div class="hero-shape"></div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="about-container">
                <div class="about-img">
                    <img src="#" alt="About Me">
                </div>
                <div class="about-content">
                    <h2 class="section-title">About Me</h2>
                    <p>Hi! I'm a passionate and motivated beginner in the world of web and software development.
                        I'm currently building my skills in HTML/CSS, MySQL, PHP, Javascript, Java and C++. I enjoy creating simple,
                        functional websites and learning how to make them better every day. I've worked on small projects
                        like a student attendance system, a basic bank management program in C++, and a portfolio website to
                        apply what I've learned. These projects have helped me understand how the front-end and back-end work
                        together to create complete applications. I'm always eager to learn new technologies and improve my coding skills.
                        My goal is to become a full-stack developer and contribute to real-world projects that make a difference.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills">
        <div class="container">
            <div class="skills-container">
                <h2 class="section-title text-center">My Skills</h2>
                <p>This is the skills im learning and status.</p>

                <div class="skills-grid">
                    <div class="skill-card">
                        <div class="skill-icon">💻</div>
                        <h3 class="skill-title">HTML/CSS</h3>
                        <p>Creating responsive, standards-compliant websites with modern CSS techniques.</p>
                        <div class="skill-progress">
                            <div class="progress-bar" data-width="60"></div>
                        </div>
                    </div>

                    <div class="skill-card">
                        <div class="skill-icon">📱</div>
                        <h3 class="skill-title">JavaScript</h3>
                        <p>Beginner.</p>
                        <div class="skill-progress">
                            <div class="progress-bar" data-width="10"></div>
                        </div>
                    </div>

                    <div class="skill-card">
                        <div class="skill-icon">🐘</div>
                        <h3 class="skill-title">PHP</h3>
                        <p>Beginner.</p>
                        <div class="skill-progress">
                            <div class="progress-bar" data-width="10"></div>
                        </div>
                    </div>

                    <div class="skill-card">
                        <div class="skill-icon">🗃️</div>
                        <h3 class="skill-title">MySQL</h3>
                        <p>Above Beginner.</p>
                        <div class="skill-progress">
                            <div class="progress-bar" data-width="40"></div>
                        </div>
                    </div>

                    <div class="skill-card">
                        <div class="skill-icon">🔧</div>
                        <h3 class="skill-title">C++</h3>
                        <p> Just so so.</p>
                        <div class="skill-progress">
                            <div class="progress-bar" data-width="30"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects">
        <div class="container">
            <div class="projects-container">
                <h2 class="section-title text-center">Projects</h2>
                <p>Here are some of my projects.</p>

                <div class="projects-grid">
                    <div class="project-card">
                        <div class="project-img">
                            <img src="../Images/AttendanceSystem.png" alt="">
                        </div>
                        <div class="project-info">
                            <h3 class="project-title">Attendace System</h3>
                            <p>This project is an Attendance System designed to streamline and
                                automate the process of tracking student. The system was developed
                                to replace traditional manual methods with a more accurate and efficient
                                digital solution. It allows users to record, view, and manage attendance records in real-time.</p>
                            <div class="project-tags">
                                <span class="project-tag">HTML/CSS</span>
                                <span class="project-tag">JavaScript</span>
                                <span class="project-tag">MySQL</span>
                                <span class="project-tag">PHP</span>
                            </div>
                        </div>
                    </div>

                    <div class="project-card">
                        <div class="project-img">
                            <img src="../Images/MyPortfolio.png" alt="Project 2">
                        </div>
                        <div class="project-info">
                            <h3 class="project-title">Portfolio Website</h3>
                            <p>A clean and modern portfolio website for a professional photographer with gallery and contact form.</p>
                            <div class="project-tags">
                                <span class="project-tag">HTML/CSS</span>
                                <span class="project-tag">JavaScript</span>
                                <span class="project-tag">PHP</span>
                            </div>
                        </div>
                    </div>

                    <div class="project-card">
                        <div class="project-img">
                            <img src="#" alt="Project 3">
                        </div>
                        <div class="project-info">
                            <h3 class="project-title">Bank Management App</h3>
                            <p>This project is a Bank Management System developed using C++
                                that simulates core banking operations in a console-based environment.
                                It allows users to perform basic banking functions such as creating accounts,
                                viewing account details, depositing money and withdrawing money.</p>
                            <div class="project-tags">
                                <span class="project-tag">C++</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2 class="section-title text-center">Contact Me</h2>
            <p class="text-center">Feel free to contact me for any work or suggestions.</p>

            <div class="contact-container">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">📧</div>
                        <div class="contact-detail">
                            <h4>Email</h4>
                            <p>pheinz.magnun@gmail.com</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">📱</div>
                        <div class="contact-detail">
                            <h4>Phone</h4>
                            <p>09936929775</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">📍</div>
                        <div class="contact-detail">
                            <h4>Location</h4>
                            <p>Zamboanga City, Philippines</p>
                        </div>
                    </div>
                </div>

                <div class="contact-form">
                    <h3>Send Me a Message</h3>
                    <form id="contactForm">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" placeholder="Subject">
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" id="message" placeholder="Your Message" required></textarea>
                        </div>

                        <button type="submit" class="btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2025 Pheinz Magnun. All Rights Reserved.</p>
            <div class="social-links">
                <a href="https://github.com/Reneilrp" title="GitHub">Github</a>
                <a href="https://web.facebook.com/pheinz.magnun">Facebook</a>
            </div>
        </div>
    </footer>

    <script src="Script.js"></script>
</body>

</html>