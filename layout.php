<?php
// layout.php - shared layout for LochStudios pages
if (!isset($title)) {
    $title = 'LochStudios';
}
if (!isset($activePage)) {
    $activePage = '';
}
if (!isset($content)) {
    $content = '';
}

// Function to generate a UUID v4 for cache busting
function uuidv4() {
    return bin2hex(random_bytes(4));
}
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></title>
    <link rel="icon" href="4803712.png" type="image/png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/1.0.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <link rel="stylesheet" href="custom.css?v=<?php echo uuidv4(); ?>">
</head>
<body>
<!-- Start Top Bar -->
<nav class="navbar is-fixed-top modern-navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="index.php">
            <img src="4803712.png" alt="LochStudios Logo" style="max-height: 40px;">
        </a>
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item has-text-weight-medium <?php echo ($activePage === 'home') ? 'is-active' : ''; ?>" href="index.php#about">About</a>
            <a class="navbar-item has-text-weight-medium <?php echo ($activePage === 'home') ? 'is-active' : ''; ?>" href="index.php#websites">Our Websites</a>
            <a class="navbar-item has-text-weight-medium <?php echo ($activePage === 'home') ? 'is-active' : ''; ?>" href="index.php#contact">Contact</a>
            <a class="navbar-item has-text-weight-medium <?php echo ($activePage === 'home') ? 'is-active' : ''; ?>" href="index.php#faq">FAQs</a>
            <a class="navbar-item has-text-weight-medium <?php echo ($activePage === 'privacy') ? 'is-active' : ''; ?>" href="privacy-policy.php">Privacy Policy</a>
            <a class="navbar-item has-text-weight-medium <?php echo ($activePage === 'terms') ? 'is-active' : ''; ?>" href="terms-conditions.php">Terms &amp; Conditions</a>
        </div>
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a target="_blank" href="https://www.facebook.com/lochstudios/" class="button is-light is-rounded">
                        <span class="icon"><i class="fab fa-facebook-f"></i></span>
                    </a>
                    <a target="_blank" href="https://twitter.com/LochStudios" class="button is-light is-rounded">
                        <span class="icon"><i class="fab fa-x-twitter"></i></span>
                    </a>
                    <a target="_blank" href="https://www.instagram.com/lochstudiosau/" class="button is-light is-rounded">
                        <span class="icon"><i class="fab fa-instagram"></i></span>
                    </a>
                    <a target="_blank" href="https://github.com/LochStudios" class="button is-light is-rounded">
                        <span class="icon"><i class="fab fa-github"></i></span>
                    </a>
                    <a href="mailto:customercare@lochstudios.com" class="button modern-button is-rounded">
                        <span class="icon"><i class="fas fa-envelope"></i></span>
                        <span>Contact Us</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- End Top Bar -->
<!-- Main content (injected from page) -->
<main>
<?php echo $content; ?>
</main>
<footer class="footer has-background-dark">
    <div class="content has-text-centered has-text-white">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column">
                    <img src="4803712.png" alt="LochStudios Logo" style="max-height: 60px; margin-bottom: 1rem;">
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <h4 class="title is-5 has-text-white">Quick Links</h4>
                    <div class="content">
                        <a href="index.php#about" class="has-text-light">About</a><br>
                        <a href="index.php#websites" class="has-text-light">Our Websites</a><br>
                        <a href="index.php#contact" class="has-text-light">Contact</a><br>
                        <a href="index.php#faq" class="has-text-light">FAQs</a>
                    </div>
                </div>
                <div class="column">
                    <h4 class="title is-5 has-text-white">Legal</h4>
                    <div class="content">
                        <a href="privacy-policy.php" class="has-text-light">Privacy Policy</a><br>
                        <a href="terms-conditions.php" class="has-text-light">Terms &amp; Conditions</a>
                    </div>
                </div>
                <div class="column">
                    <h4 class="title is-5 has-text-white">Connect With Us</h4>
                    <div class="buttons is-centered">
                        <a target="_blank" href="https://www.facebook.com/lochstudios/" class="button is-light is-rounded">
                            <span class="icon"><i class="fab fa-facebook-f"></i></span>
                        </a>
                        <a target="_blank" href="https://twitter.com/LochStudios" class="button is-light is-rounded">
                            <span class="icon"><i class="fab fa-x-twitter"></i></span>
                        </a>
                        <a target="_blank" href="https://www.instagram.com/lochstudiosau/" class="button is-light is-rounded">
                            <span class="icon"><i class="fab fa-instagram"></i></span>
                        </a>
                        <a target="_blank" href="https://github.com/LochStudios" class="button is-light is-rounded">
                            <span class="icon"><i class="fab fa-github"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <hr style="background-color: rgba(255,255,255,0.1);">
            <p class="has-text-grey-light">
                Copyright &copy; <?php echo date("Y"); ?> All rights reserved.<br>
                <strong class="has-text-white">LochStudios</strong> and any of <strong class="has-text-white">LochStudios</strong> subsidiaries are registered under ABN: <strong class="has-text-warning">20 447 022 747</strong>.
            </p>
        </div>
    </div>
</footer>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', () => {
        const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
        if ($navbarBurgers.length > 0) {
            $navbarBurgers.forEach( el => {
                el.addEventListener('click', () => {
                    const target = el.dataset.target;
                    const $target = document.getElementById(target);
                    el.classList.toggle('is-active');
                    if ($target) $target.classList.toggle('is-active');
                });
            });
        }
    });
</script>
</body>
</html>
