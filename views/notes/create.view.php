<?php require (__DIR__ . '/../partlials/head.php'); ?>
<?php require (__DIR__ . '/../partlials/nav.php'); ?>
<?php require (__DIR__ . '/../partlials/bannner.php'); ?>
<main>
<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
<form method="POST" >
    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="col-span-full">
        <label for="body" class="block text-sm/6 font-medium text-gray-900">Body</label>
        <div class="mt-2">
            <textarea name="body" id="body" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
            ><?= $_POST['body']?? '' ?></textarea>
            <?php if(!empty($errore['body'])): ?>
                <p class="text-red-500 text-xs mt-2" ><?= $errore['body'] ?></p>
            <?php endif ?>
        </div>
        </div>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
</div>
</form>
</div>
</main>
<?php require (__DIR__ . '/../partlials/foot.php');?>