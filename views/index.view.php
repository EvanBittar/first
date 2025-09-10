<?php require base_path('views/partlials/head.php'); ?>
<?php require base_path('views/partlials/nav.php'); ?>
<?php require base_path('views/partlials/bannner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        hallo <?=
        // dd($_SESSION);
        $_SESSION['user']['email']  ?? 'Guest' ?> this is the home page
    </div>
</main>

<?php require base_path('views/partlials/foot.php'); ?>
