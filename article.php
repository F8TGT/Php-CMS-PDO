<?php

include "partials/header.php";
include base_path("partials/navbar.php");
include base_path("partials/hero.php");

$articleId = isset($_GET["id"]) ? (int) $_GET["id"] : null;

if ($articleId) {
    $article = new Article();
    $articleData = $article->getArticleWithOwnerByID($articleId);
} else {
    echo "Article not found";
    exit;
}
?>

<!-- Main Content -->
<main class="container my-5">
    <!-- Featured Image -->
    <div class="mb-4">
        <?php
        if (!empty($articleData->image)): ?>
            <img
                    src="<?php
                    echo htmlspecialchars($articleData->image); ?>"
                    class="img-fluid w-100"
                    alt="Featured Image"
            >
        <?php
        else: ?>
            <img
                    src="https://placehold.co/1200x600"
                    class="img-fluid w-100"
                    alt="Featured Image"
            >
        <?php
        endif; ?>
    </div>

    <section>
        <div class="container">
            <h1 class="display-4"><?php
                echo $articleData->title; ?></h1>
            <small>
                By <a href="#"><?php
                    echo $articleData->author; ?></a>
                <span><?php
                    echo $article->formatCreatedAt($articleData->created_at) ?></span>
            </small>
        </div>
    </section>


    <!-- Article Content -->
    <article class="container my-5">
        <?php
        echo htmlspecialchars($articleData->content); ?>
    </article>

    <!-- Comments Section Placeholder -->
    <section class="mt-5">
        <h3>Comments</h3>
        <p>
            <!-- Placeholder for comments -->
            Comments functionality will be implemented here.
        </p>
    </section>

    <!-- Back to Home Button -->
    <div class="mt-4">
        <a href="index.php" class="btn btn-secondary">← Back to Home</a>
    </div>
</main>

<?php

include "partials/footer.php";
?>



