<?php
$name = "Gilbert Khen";
$role = "Aspiring Web Developer";
$tagline = "I build practical, user-friendly web experiences while continuously learning and improving.";
$email = "mgilbertkhen@gmail.com";
$location = "Gumaca, Quezon Philippines";

$skills = [
    ["name" => "HTML", "status" => "Intermediate"],
    ["name" => "CSS", "status" => "Intermediate"],
    ["name" => "JavaScript", "status" => "Beginner–Intermediate"],
    ["name" => "PHP", "status" => "Beginner–Intermediate"],
    ["name" => "C++", "status" => "Beginner–Intermediate"],
    ["name" => "Java", "status" => "Currently Learning"],
    ["name" => "React", "status" => "Beginner"],
    ["name" => "MySQL", "status" => "Beginner–Intermediate"],
    ["name" => "Arduino / IoT", "status" => "Beginner"],
    ["name" => "Git & GitHub", "status" => "Beginner–Intermediate"]
];

$projects = [
    [
        "title" => "Clerk-Hospital-Management",
        "description" => "A web-based system for managing reservations and guest information, with records stored in a database.",
        "tools" => "PHP · MySQL · HTML · CSS",
        "link" => "https://github.com/GilbertMorito/Clerk-Hospital-Management.git"
    ],
    [
        "title" => "Recycle Vending Machine",
        "description" => "A Java-based recycling vending machine project designed to encourage recycling by allowing users to exchange recyclable materials through a vending machine system.",
        "tools" => "Java",
        "link" => "https://github.com/GilbertMorito/Recycling-Vending-Machine-.git"
    ],
    [
        "title" => "NEUST Hostel Management System",
        "description" => "A school project focused on managing hostel-related information and organizing student accommodation records.",
        "tools" => "PHP · MySQL · HTML · CSS",
        "link" => "https://github.com/GilbertMorito/Neust_Hostel.git"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($name) ?>'s personal web development portfolio">
    <title><?= htmlspecialchars($name) ?> | Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="site-header">
        <nav class="navbar container" aria-label="Main navigation">
            <a class="logo" href="#home"><?= htmlspecialchars($name) ?><span>.</span></a>

            <button class="menu-toggle" id="menuToggle" aria-label="Toggle navigation" aria-expanded="false">
                <span></span><span></span><span></span>
            </button>

            <ul class="nav-links" id="navLinks">
                <li><a class="nav-link active" href="#home">Home</a></li>
                <li><a class="nav-link" href="#about">About</a></li>
                <li><a class="nav-link" href="#skills">Skills</a></li>
                <li><a class="nav-link" href="#projects">Projects</a></li>
                <li><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero section" id="home">
            <div class="container hero-grid">
                <div class="hero-copy">
                    <p class="eyebrow">WELCOME TO MY PORTFOLIO</p>
                    <h1>Hi, I'm <span><?= htmlspecialchars($name) ?></span>.</h1>
                    <h2><?= htmlspecialchars($role) ?></h2>
                    <p class="hero-text"><?= htmlspecialchars($tagline) ?></p>
                    <div class="hero-actions">
                        <a class="btn btn-primary" href="#projects">View My Work</a>
                        <a class="btn btn-outline" href="#contact">Contact Me</a>
                    </div>
                    <p class="location"><span class="status-dot"></span> Based in <?= htmlspecialchars($location) ?></p>
                </div>
                <div class="hero-card" aria-label="Developer introduction card">
                    <div class="avatar"> &lt;/&gt; </div>
                    <p class="card-label">CURRENT FOCUS</p>
                    <h3>Learning by building</h3>
                    <p>Creating useful web projects and strengthening my development skills one step at a time.</p>
                    <div class="code-line"><span>const</span> goal = <b>"keep growing";</b></div>
                </div>
            </div>
        </section>

        <section class="section section-muted" id="about">
            <div class="container section-grid">
                <div>
                    <p class="eyebrow">GET TO KNOW ME</p>
                    <h2 class="section-title">About <span>Me</span></h2>
                </div>
                <div class="about-copy">
                    <p>I'm an aspiring web developer interested in building websites and applications that solve real problems. I enjoy learning how the front end and back end work together, from designing a clear interface to saving information in a database.</p>
                    <p>I'm currently developing my skills in PHP, JavaScript, and database-driven applications. I value continuous learning, clear communication, and improving through hands-on practice.</p>
                    <a class="text-link" href="#contact">Let's connect <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </section>
        
        <section class="section" id="skills">
            <div class="container">

                <div class="section-heading">
                    <p class="eyebrow">MY TECHNICAL SKILLS</p>
                    <h2 class="section-title">My <span>Skills</span></h2>
                    <p class="section-intro">
                        Programming languages, frameworks, and tools
                        I'm learning and working with.
                    </p>
                </div>

                <div class="skills-grid">
                    <?php foreach ($skills as $skill): ?>
                        <div class="skill-card">

                            <h3>
                                <?= htmlspecialchars($skill["name"]) ?>
                            </h3>

                            <span class="skill-status
                                <?= $skill["status"] === "Currently Learning"
                                    ? "learning-now"
                                    : "" ?>">
                                <?= htmlspecialchars($skill["status"]) ?>
                            </span>

                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>

        <section class="section section-muted" id="projects">
            <div class="container">
                <div class="section-heading">
                    <p class="eyebrow">A FEW THINGS I'VE WORKED ON</p>
                    <h2 class="section-title">Featured <span>Projects</span></h2>
                    <p class="section-intro">Replace or expand these examples with your own finished projects.</p>
                </div>
                <div class="projects-grid">
                    <?php foreach ($projects as $index => $project): ?>
                        <article class="project-card">
                            <div class="project-top">
                                <span class="project-number">0<?= $index + 1 ?></span>
                                <span class="project-symbol">&lt;/&gt;</span>
                            </div>
                            <h3><?= htmlspecialchars($project["title"]) ?></h3>
                            <p><?= htmlspecialchars($project["description"]) ?></p>
                            <p class="project-tools"><?= htmlspecialchars($project["tools"]) ?></p>
                            <a class="text-link" href="<?= htmlspecialchars($project["link"]) ?>">
                                Learn more <span aria-hidden="true">→</span>
                            </a>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="section contact-section" id="contact">
            <div class="container contact-panel">
                <p class="eyebrow">HAVE A PROJECT OR OPPORTUNITY?</p>
                <h2 class="section-title">Let's work <span>together.</span></h2>
                <p>I'm open to connecting, learning, and exploring opportunities to grow as a developer.</p>
                <a class="btn btn-primary" href="mailto:<?= htmlspecialchars($email) ?>">Email Me</a>
                <div class="contact-details">
                    <span><strong>Email:</strong> <?= htmlspecialchars($email) ?></span>
                    <span><strong>Location:</strong> <?= htmlspecialchars($location) ?></span>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container footer-inner">
            <p>© <?= date("Y") ?> <?= htmlspecialchars($name) ?>. Built with PHP, HTML, CSS, and JavaScript.</p>
            <a href="#home">Back to top ↑</a>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
