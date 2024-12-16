<?= view('Layout/Header') ?>   <!-- Includes Header -->
<?= view('Layout/Navbar') ?>   <!-- Includes Navbar -->
    
     <!-- Hero Section -->
     <div class="bg-light text-center py-5">
        <div class="container">
            <h1 class="display-4">Welcome to MyWebsite</h1>
            <p class="lead">Explore amazing features and manage your profile easily.</p>
            <a href="/features" class="btn btn-primary btn-lg">Explore Features</a>
        </div>
    </div>

    <!-- Features Section -->
    <div class="container my-5">
        <h2 class="text-center mb-4">What We Offer</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="bi bi-person-circle display-4 text-primary"></i>
                        <h5 class="card-title mt-3">User Profile</h5>
                        <p class="card-text">Manage your profile and preferences effortlessly.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="bi bi-speedometer2 display-4 text-primary"></i>
                        <h5 class="card-title mt-3">Dashboard</h5>
                        <p class="card-text">Access your dashboard and track your activities in one place.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="bi bi-chat-dots display-4 text-primary"></i>
                        <h5 class="card-title mt-3">Support</h5>
                        <p class="card-text">Get support and connect with our team anytime you need help.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>