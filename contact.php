<?php

include "partials/header.php";
include "partials/navbar.php";
include "partials/hero.php";
?>

<!-- Main Content -->
<main class="container my-5">
    <div class="row">
        <!-- Contact Form -->
        <div class="col-md-6">
            <h2>Get in Touch</h2>
            <form action="mailto:edwin@edwindiaz.com.com" method="post" enctype="text/plain">
                <div class="mb-3">
                    <label for="name" class="form-label">Name *</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email *</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message *</label>
                    <textarea class="form-control" id="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
        <!-- Contact Information -->
        <div class="col-md-6">
            <h2>Contact Information</h2>
            <p>
                Feel free to reach out to us through any of the following methods.
            </p>
            <ul class="list-unstyled">
                <li>
                    <strong>Email:</strong> <a href="mailto:email@email.com">email@email.com</a>
                </li>
                <li>
                    <strong>Phone:</strong> (123) 456-7890
                </li>
                <li>
                    <strong>Address:</strong> 123 Blog Street, City, Country
                </li>
            </ul>
            <h2>Follow Us</h2>
            <a href="#" class="text-decoration-none me-3">
                <i class="fab fa-facebook fa-2x"></i>
            </a>
            <a href="#" class="text-decoration-none me-3">
                <i class="fab fa-twitter fa-2x"></i>
            </a>
            <a href="#" class="text-decoration-none me-3">
                <i class="fab fa-instagram fa-2x"></i>
            </a>
        </div>
    </div>
</main>

<?php

include "partials/footer.php";
?>
