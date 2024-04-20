<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="/blog.me/" class="text-blue-500 underline">Go back to all posts</a>
        </p>

        <p><?= $post['body'] ?></p>

        <form method="POST">
            <!-- Hidden input to pass the post ID -->
            <input type="hidden" name="post_id" value="<?= $post['id'] ?>">

            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                <button type="submit"
                        class="inline-flex justify-center rounded-md border border-transparent bg-red-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                    Delete
                </button>
            </div>
        </form>
    </div>
</main>

<?php require('partials/footer.php') ?>
