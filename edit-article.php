<?php

include "partials/admin/header.php";
include "partials/admin/navbar.php";

$articleId = isset($_GET['id']) ? (int) $_GET['id'] : null;
$article = new Article();
$articleData = $article->getArticleById($articleId);
?>

<!-- Main Content -->
<main class="container my-5">
    <h2>Update Article</h2>
    <form method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="title" class="form-label">Article Title *</label>
            <input name="title" type="text" class="form-control" id="title" placeholder="Enter article title"
                   value="<?php
                   echo $articleData->title; ?>" required>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Published Date *</label>
            <input name="date" type="date" class="form-control" id="date" value="<?php
            echo htmlspecialchars(date('Y-m-d', strtotime($articleData->created_at))); ?>" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content *</label>
            <textarea name="content" class="form-control" id="content" rows="10" placeholder="Enter article content"
                      required><?php
                echo $articleData->content; ?></textarea>
        </div>
        <?php
        if (!empty($articleData->image)): ?>
            <div class="mb-3">
                <label for="image" class="form-label">Current Featured Image</label><br>
                <img class="img-fluid mb-2" style="width: 100px;" src="<?php
                echo htmlspecialchars($articleData->image); ?>" alt="">
            </div>
        <?php
        endif; ?>
        <div class="mb-3">
            <label for="image" class="form-label">Featured Image URL</label>
            <input name="featured_image" type="file" class="form-control" id="image" placeholder="Enter image URL">
        </div>
        <button type="submit" class="btn btn-success">Update Article</button>
        <a href="admin.php" class="btn btn-secondary ms-2">Cancel</a>
    </form>
</main>

<?php

include "partials/admin/footer.php";
?>
