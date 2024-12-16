<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <strong>
            <a class="navbar-brand" href="#">SenrinSim</a>
        </strong>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
            <div class="auth">
                <?php
                $session = session();
                if ($session->get('isLoggedIn')) : ?>
                    <a class="btn btn-outline-light" id="logout" href="/logout" onclick="return confirmLogout()">Logout</a>
                <?php else: ?>
                    <a class="btn btn-outline-light" href="/signin">Login</a>
                    <a class="btn btn-primary" href="/signup">Register</a>
                <?php endif;?>
            </div>
        </div>
    </div>
</nav>

<script>
    function confirmLogout() {
        // Show confirmation dialog
        return confirm("Are you sure you want to logout?");
    }
</script>