<?php

include "partials/admin/header.php";
include "partials/admin/navbar.php";

$user = new User();

if (!$user->isLoggedIn()) {
    redirect("login.php");
}

$article = new Article();
$userId = $_SESSION["user_id"];
$userArticles = $article->getArticlesByUser($userId);
?>

<!-- Main Content -->
<main class="container my-5">
    <h2 class="mb-4">Welcome <?php
        echo $_SESSION['username'] ?> to your Admin Dashboard</h2>
    <!-- Articles Table -->
    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Published Date</th>
                <th>Excerpt</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <!-- Example Article Row -->
            <tr>
                <td>1</td>
                <td>Article Title 1</td>
                <td>Edwin Diaz</td>
                <td>January 1, 2045</td>
                <td>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus feugiat elit vitae enim
                    lacinia
                    semper...
                </td>
                <td>
                    <a href="edit-article.html?id=1" class="btn btn-sm btn-primary me-1">Edit</a>
                    <button class="btn btn-sm btn-danger" onclick="confirmDelete(1)">Delete</button>
                </td>
            </tr>
            <!-- Additional Article Rows -->
            <tr>
                <td>2</td>
                <td>Article Title 2</td>
                <td>Jose Diaz</td>
                <td>February 15, 2045</td>
                <td>
                    Quisque fermentum, nisl a pulvinar tincidunt, nunc purus laoreet massa, nec tempor arcu urna vel
                    nisi...
                </td>
                <td>
                    <a href="edit-article.html?id=2" class="btn btn-sm btn-primary me-1">Edit</a>
                    <button class="btn btn-sm btn-danger" onclick="confirmDelete(2)">Delete</button>
                </td>
            </tr>
            <!-- You can add more articles here -->
            </tbody>
        </table>
    </div>
</main>

<?php

include "partials/admin/footer.php";
?>
