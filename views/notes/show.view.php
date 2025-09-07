<?php require ( __DIR__ . '/../partlials/head.php'); ?>
<?php require ( __DIR__ . '/../partlials/nav.php'); ?>
<?php require ( __DIR__ . '/../partlials/bannner.php'); ?>
<main>
<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <p class="mb-6">
        <a href="notes" class="text-blue-500 hover:underline">go back to notes</a>
    </p>
    <p><?= htmlspecialchars($note['body']) ?></p>
    
    <form class="mt-6" method="post">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="id" value="<?= $note['id'] ?>">
        <button class="text-sm text-red-500">Delete</button>
    </form>
    
    <!-- <footer class="mt-6">
        <a href="edit.php?id=<?= $note['id'] ?>" class="rounded-md bg-gray-500 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" 
        >Edit</a>
    </footer> -->
</div>
</main>
<?php require ( __DIR__ . '/../partlials/foot.php');?>