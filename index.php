<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rimor Capital</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <nav class="navbar">
        <div class="content">
            <div class="logo"><a href="#">Rimor Capital</a></div>
            <ul class="menu-list">
                <div class="icon cancel-btn">
                    <i class="fas fa-times"></i>
                </div>
                <li><a href="#summary">Summary</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact_fund">Contact</a></li>
                <li><a href="#contact">Social Media</a></li>
            </ul>
            <div class="icon menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
    <div class="banner">
        <div class="banner_overlay">
            <div class="overlay">
                <div class ="title_banner">AUM</div>
                <div class="date_banner">As of 2022-07-01</div>
                <div class="value_banner">$18,000</div>
            </div>
            <div class="overlay">
                <div class ="title_banner">YTD Return</div>
                <div class="date_banner">As of 2022-07-01</div>
                <div class="value_banner">41.4%</div>
            </div>
            <div class="overlay">
                <div class ="title_banner">Return Since Inception</div>
                <div class="date_banner">As of 2022-07-01 - Est Nov 2021</div>
                <div class="value_banner">50%</div>
            </div>
            <div class="overlay">
                <div class ="title_banner">1-Month Return</div>
                <div class="date_banner">As of 2022-07-01</div>                
                <div class="value_banner">-25%</div>
            </div>
        </div>
        <!-- I want to add an overlay here to display our YTD return and return since inception -->
    </div>
    <div id="summary" class="summary">
        <div class="content">
            <div class="title" id="sum">Summary</div>
            <p>We are incredibly excited to announce the formation of Rimor Capital.</p> 
            <p></p>
            <p>Initially created in November of 2021, our team strives to identify and take advantage of market inefficiencies to produce handsome returns. Utilizing extensive research, quantitative analysis, and evaluation of global macroeconomic trends, our fund is set to cultivate returns outpacing our competitors.</p>
            <p></p>
            <p>Our fund is run by an elite group of young, energetic, and highly dedicated traders that work tirelessly to find smaller companies with high upside potential.</p> 
            <p></p>    
            <p>We can’t wait to showcase what our team is capable of.</p> <!--, and we invite you to take this journey with us.-->
        </div>
    </div>
    <div id="portfolio" class="portfolio">
        <div class="content">
            <div class="title">Portfolio</div>
            <p>Energy</p>
            <div class="container">
                <div class="skills energy">38.54%</div>
            </div>

            <p>Agriculture</p>
            <div class="container">
                <div class="skills Agriculture">36.97%</div>
            </div>

            <p>Base Metals</p>
            <div class="container">
                <div class="skills basemetals">13.03%</div>
            </div>

            <p>Precious Metals</p>
            <div class="container">
                <div class="skills preciousmetals">11.44%</div>
            </div>
        </div>
    </div>
    <!-- <div id="team" class="team">
        <div class="content">
            <div class="title">Meet the Team</div>
            <div class="column">
                <div class="card">
                    <img src="profile_aidan.jpg" alt="Aidan" style="width:100%" >
                    <div class="team_container">
                        <h2>Aidan Gray</h2>
                        <div class="about">Fund Manager</div>
                         <a href="mailto:gray@mines.edu"> 
                        <p><button class="button">Contact</button></p> 
                        </a>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="profile_sam.jpg" alt="Sam" style="width:100%">
                    <div class="team_container">
                        <h2>Samuel Gray</h2>
                        <div class="about">Fund Manager</div>
                        <a href="mailto:samgray2001@gmail.com"> 
                         <p><button class="button">Contact</button></p> 
                        </a>                   
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="profile_john.jpeg" alt="John" style="width:100%">
                    <div class="team_container">
                        <h2>John Henzler</h2>
                        <div class="about">Fund Manager</div>
                        <a href="mailto:johenzler@gmail.com"> 
                         <p><button class="button">Contact</button></p> 
                        </a>                    
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div id="contact_fund" class="contact_fund">
            <div class="content" >
                <div class="title">Contact</div>
                <div class="fcf-body">
                    <div id="fcf-form">            
                    <!-- <form id="fcf-form-id" class="fcf-form-class"> -->
                    <form method="post" action="https://formspree.io/f/xdojgawl">
                        <div class="fcf-form-group">
                            <label for="Name" class="fcf-label">Your name</label>
                            <div class="fcf-input-group">
                                <input type="text" id="Name" name="Name" class="fcf-form-control" required>
                            </div>
                        </div>
                        <div class="fcf-form-group">
                            <label for="Email" class="fcf-label">Your email address</label>
                            <div class="fcf-input-group">
                                <input type="email" id="Email" name="email" class="fcf-form-control" required>
                            </div>
                        </div>
                        <div class="fcf-form-group">
                            <label for="Message" class="fcf-label">Your message</label>
                            <div class="fcf-input-group">
                                <textarea id="Message" name="message" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
                            </div>
                        </div>
                        <div class="fcf-form-group">
                            <button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Send Message</button>
                        </div>
                    </form>
                    <!-- </form> -->
                    </div>        
                </div>
            </div>
    </div>
    <div class="contact" id ="socials1">
        <div id="contact" class="content_socials">
            <h3><span>Social Media</span></h3>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" >
            <a href="https://www.instagram.com/rimor_capital/" target="_blank" class="fa fa-instagram" rel="noopener" ></a>
            <a href="https://twitter.com/CapitalRimor" target="_blank" class="fa fa-twitter" rel="noopener"></a>
            <a href="https://www.linkedin.com/company/rimor-capital/" target="_blank" class="fa fa-linkedin" rel="noopener"></a>
        </div>
    </div>
    <div class="banner">
    </div>
    <script>
        const body = document.querySelector("body");
        const navbar = document.querySelector(".navbar");
        const menu = document.querySelector(".menu-list");
        const menuBtn = document.querySelector(".menu-btn");
        const cancelBtn = document.querySelector(".cancel-btn");
        menuBtn.onclick = ()=>{
            navbar.classList.add("show");
            menuBtn.classList.add("hide");
            body.classList.add("disabled");
        }
        cancelBtn.onclick = ()=>{
            body.classList.remove("disabled");
            navbar.classList.remove("show");
            menuBtn.classList.remove("hide");
        }
        menu.onclick = ()=>{
            body.classList.remove("enabled");
            navbar.classList.remove("show");
            menuBtn.classList.remove("hide");
        }
        window.onscroll = ()=>{
            this.scrollY > 20 ? navbar.classList.add("sticky"): navbar.classList.remove("sticky");
        }
        // window.addEventListener("hashchange", function() { scrollBy(0, -70) })
    </script>

</body>

</html>