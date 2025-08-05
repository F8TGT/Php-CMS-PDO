<?php

?>

<!-- Footer -->
<footer class="bg-light py-4">
    <div class="container text-center">
        <p class="text-muted mb-0">&copy; 2045 CMS PDO System. All rights reserved by Edwin Diaz from EdwinDiaz.com</p>
    </div>
</footer>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function confirmDelete(articleId) {
        if(confirm("Are you sure you want to delete this article?")){
           alert("Article " + articleId + " deleted.");
        }
    }
</script>
</body>
</html>

