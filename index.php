<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>LifeSaver - Blood Donation System</title>

<style>

/* ===== GLOBAL STYLING ===== */
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: 'Segoe UI', sans-serif;
}

body{
    background:#f8f9fa;
    color:#333;
}

/* ===== NAVBAR ===== */
header{
    background:#b30000;
    color:white;
    padding:15px 40px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

header h1{
    font-size:24px;
}

nav ul{
    list-style:none;
    display:flex;
}

nav ul li{
    margin-left:20px;
}

nav ul li a{
   margin-left:20px;
}

nav ul li a{
    text-decoration:none;
    color:white;
    font-weight:500;
    transition:0.3s;
}

nav ul li a:hover{
    color:#ffd6d6;
}

/* ===== HERO SECTION ===== */
.hero{
    height:90vh;
    background:linear-gradient(rgba(179,0,0,0.7), rgba(179,0,0,0.7)),
    url('https://images.unsplash.com/photo-1588776814546-1ffcf47267a5');
    background-size:cover;
    background-position:center;
    display:flex;
    justify-content:center;
    align-items:center;
    text-align:center;
    color:white;
    padding:20px;
}

.hero h2{
    font-size:50px;
    margin-bottom:20px;
}

.hero p{
    font-size:20px;
    margin-bottom:30px;
}

.btn{
 background:white;
    color:#b30000;
    padding:12px 25px;
    border:none;
    border-radius:30px;
    font-weight:bold;
    cursor:pointer;
    transition:0.3s;
}

.btn:hover{
    background:#ffd6d6;
}

/* ===== SECTION STYLING ===== */
section{
    padding:60px 10%;
}

section h2{
    text-align:center;
    margin-bottom:40px;
    font-size:32px;
    color:#b30000;
}

/* ===== CARDS ===== */
.cards{
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(250px,1fr));
    gap:20px;
}

.card{
    background:white;
    padding:25px;
    border-radius:10px;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
    text-align:center;
    transition:0.3s;
}

.card:hover{
    transform:translateY(-5px);
}
/* ===== FORM ===== */
form{
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
    max-width:600px;
    margin:auto;
}

form input, form select, form textarea{
    width:100%;
    padding:10px;
    margin:10px 0;
    border-radius:5px;
    border:1px solid #ccc;
}

form button{
    width:100%;
    padding:12px;
    background:#b30000;
    color:white;
    border:none;
    border-radius:5px;
    cursor:pointer;
    font-weight:bold;
}

form button:hover{
    background:#800000;
}

/* ===== FOOTER ===== */
footer{
    background:#111;
    color:white;
    text-align:center;
    padding:20px;
    margin-top:40px;
}

/* ===== RESPONSIVE ===== */
@media(max-width:768px){
    .hero h2{
        font-size:30px;
    }
}

</style>
</head>

<body>

<!-- NAVBAR -->
<header>
    <h1>LifeSaver</h1>
    <nav>
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#eligibility">Eligibility</a></li>
            <li><a href="#process">Process</a></li>
            <li><a href="#register">Donate</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
</header>

<!-- HERO -->
<div class="hero">
    <div>
        <h2>Donate Blood, Save Lives</h2>
        <p>Your one donation can give someone another chance at life.</p>
        <button class="btn" onclick="document.getElementById('register').scrollIntoView()">Become a Donor</button>
    </div>
</div>

<!-- ABOUT -->
<section id="about">
    <h2>About Blood Donation</h2>
    <div class="cards">
        <div class="card">
            <h3>Why Donate?</h3>
            <p>Every 2 seconds someone needs blood. Your donation helps accident victims, surgeries, and cancer patients.</p>
        </div>
        <div class="card">
            <h3>Safe & Simple</h3>
            <p>The donation process is safe, quick and supervised by medical professionals.</p>
        </div>
        <div class="card">
      <h3>Community Impact</h3>
            <p>Help your community stay healthy and prepared for emergencies.</p>
        </div>
    </div>
</section>

<!-- ELIGIBILITY -->
<section id="eligibility">
    <h2>Eligibility Criteria</h2>
    <div class="cards">
        <div class="card">
            <p>✔ Age between 18 - 65 years</p>
        </div>
        <div class="card">
            <p>✔ Minimum weight 50kg</p>
        </div>
        <div class="card">
            <p>✔ Good general health condition</p>
        </div>
    </div>
</section>

<!-- PROCESS -->
<section id="process">
    <h2>Donation Process</h2>
    <div class="cards">
        <div class="card">
            <h3>1. Registration</h3>
            <p>Fill out donor registration form.</p>
        </div>
        <div class="card">
            <h3>2. Health Check</h3>
            <p>Basic medical screening for safety.</p>
        </div>
        <div class="card">
            <h3>3. Donation</h3>
            <p>Blood collection takes only 8-10 minutes.</p>
        </div>
    </div>
</section>
<!-- REGISTRATION FORM -->
<section id="register">
    <h2>Donor Registration</h2>
    <form method="POST" action="register.php">
        <input type="text" name="name" placeholder="FullName" required>
        <input type="number" name="age"placeholder="Age" required>
        <select name="blood_group" required>
            <option value="">Select Blood Group</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select>
        <input type="tel" name="phone" placeholder="Phone Number" required>
        <input type="email" name="email" placeholder="Email Address" required>
        <textarea name="address" placeholder="Enter Address" required></textarea>
        <button type="submit" name="register">Register Now</button>
    </form>
</section>

<!-- CONTACT -->
<section id="contact">
    <h2>Contact Us</h2>
    <form>
        <input type="text" placeholder="Your Name">
        <input type="email" placeholder="Your Email">
        <textarea placeholder="Your Message"></textarea>
        <button type="submit" name="contact">Send Message</button>
    </form>
</section>

<!-- FOOTER -->
<footer>
    © 2026 LifeSaver Blood Donation System | Designed for Community Care ❤️
</footer>

</body>
</html>