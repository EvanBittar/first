<?php require __DIR__ . '/../partlials/head.php' ; ?>
<?php require (__DIR__ . '/../partlials/nav.php'); ?>
<?php require (__DIR__ . '/../partlials/bannner.php'); ?>
<main>
<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
<ul>
    <?php foreach($notes as $note): ?>
        <li>
            <a href="show?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">    
                <?= htmlspecialchars($note['body']) ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
<p class="mt-6">
    <a href="notes/create" class="text-blue-500 hover:underline ">create</a>
</p>
</div>
</main>

<?php require (__DIR__ . '/../partlials/foot.php');?>