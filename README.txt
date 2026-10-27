PHP ONE-PAGE PORTFOLIO

FILES
- index.php: portfolio content and PHP variables
- style.css: responsive layout and design
- script.js: mobile navigation and active-link highlighting

HOW TO RUN LOCALLY
Option A: XAMPP
1. Install and open XAMPP.
2. Copy the php_one_page_portfolio folder into:
   C:\xampp\htdocs\
3. Start Apache in the XAMPP Control Panel.
4. Open this address in your browser:
   http://localhost/php_one_page_portfolio/

Option B: PHP built-in development server
1. Install PHP and make sure the php command works in your terminal.
2. Open a terminal in this project folder.
3. Run:
   php -S localhost:8000
4. Open:
   http://localhost:8000

PERSONALIZE IT
Open index.php and edit:
- $name
- $role
- $tagline
- $email
- $location
- $skills
- $projects

Replace the sample project descriptions with your real projects and add links to GitHub repositories or live demos. The sample project links are placeholders.

NAVIGATION
The navigation uses links like href="#projects" that point to section IDs. CSS enables smooth scrolling, and JavaScript highlights the section currently being viewed. The page remains a single page; it does not open separate HTML/PHP pages.

NOTE
This is a front-end portfolio template. The contact button opens the visitor's email application; it does not submit a server-side contact form.
