<?php echo $livro['title'] ?>
<div class="border-stone-800 border-2 p-2 rounded bg-stone-900">
    <div class="flex">
        <div class="w-1/3">imagem</div>
        <div>
            <a href="/livro.php?id=<?= $livro['id'] ?>" class="font-semibold"><?= $livro['title'] ?></a>
            <div class="text-xs italic"><?= $livro['author'] ?></div>
            <div class="text-xs italisc">avaliação</div>
        </div>

    </div>
    <div class="text-sm">
        <?= $livro['description'] ?>
    </div>
</div>