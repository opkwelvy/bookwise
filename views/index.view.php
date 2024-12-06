<h1 class="mt-6 font-bold text-lg">Explorar</h1>
<form class="w-full flex space-x-2">
    <input type="text" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 " placeholder="Pesquisar...">
    <button type="submit">🔎</button>
</form>
<section class="grid gap-4 grid-cols-1: grid-cols-2: grid-cols-3: grid-cols-4 ">
    <?php foreach ($livros as $livro): ?>
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
    <?php endforeach; ?>
</section>