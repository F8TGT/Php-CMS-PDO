<?php

include "partials/admin/header.php";
include "partials/admin/navbar.php";

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
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if (!empty($userArticles)): ?>
                <?php
                foreach ($userArticles as $articleItem): ?>
                    <tr>
                        <td><?php
                            echo $articleItem->id; ?></td>
                        <td><?php
                            echo $articleItem->title; ?></td>
                        <td><?php
                            echo $_SESSION['username'] ?></td>
                        <td><?php
                            echo $article->formatCreatedAt($articleItem->created_at); ?></td>
                        <td><?php
                            echo $article->getExcerpt($articleItem->content); ?>
                        </td>
                        <td>
                            <a href="edit-article.php?id=<?php
                            echo $articleItem->id ?>" class="btn btn-sm btn-primary me-1">Edit</a>
                        </td>
                        <td>
                            <form method="POST" action="<?php
                            echo base_url("delete_article.php") ?>">
                                <input type="hidden" name="id" value="<?php
                                echo $articleItem->id; ?>">
                                <button class="btn btn-sm btn-danger" onclick="confirmDelete(1)">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php
                endforeach; ?>
            <?php
            endif; ?>
            </tbody>
        </table>
    </div>
</main>

<?php

include "partials/admin/footer.php";
?>
