<?php

include "partials/header.php";
include "partials/navbar.php";
include "partials/hero.php";
?>

<!-- Main Content -->
<main class="container my-5">
    <h2 class="text-center mb-4">Login</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="dashboard.html" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address *</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password *</label>
                    <input type="password" class="form-control" id="password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
            <p class="mt-3 text-center">
                Don't have an account? <a href="register.html">Register here</a>.
            </p>
        </div>
    </div>
</main>

<?php

include "partials/footer.php";
?>
