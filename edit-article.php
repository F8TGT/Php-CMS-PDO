<?php

include "partials/admin/header.php";
include "partials/admin/navbar.php";
?>

<!-- Main Content -->
<main class="container my-5">
    <h2>Edit Article</h2>
    <form action="admin.php" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Article Title *</label>
            <input type="text" class="form-control" id="title" value="Current Article Title" required>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author *</label>
            <input type="text" class="form-control" id="author" value="Current Author Name" required>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Published Date *</label>
            <input type="date" class="form-control" id="date" value="2045-01-01" required>
        </div>
        <div class="mb-3">
            <label for="excerpt" class="form-label">Excerpt *</label>
            <textarea class="form-control" id="excerpt" rows="3" required>Current article excerpt...</textarea>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content *</label>
            <textarea class="form-control" id="content" rows="10" required>Current article content...</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Featured Image URL</label>
            <input type="url" class="form-control" id="image" value="https://example.com/image.jpg">
        </div>
        <button type="submit" class="btn btn-primary">Update Article</button>
        <a href="admin.php" class="btn btn-secondary ms-2">Cancel</a>
    </form>
</main>

<?php

include "partials/admin/footer.php";
?>
