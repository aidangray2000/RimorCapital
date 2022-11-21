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
    <?php include 'RC_nav.php';?>
    <?php include 'RC_banner.php';?>
    <?php include 'RC_summary.php'; ?>
    <?php include 'RC_portfolio.php'; ?>
    <?php include 'RC_contact.php'; ?>
    <?//php include 'RC_info.php'; ?>
    <?php include 'RC_socials.php'; ?>
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