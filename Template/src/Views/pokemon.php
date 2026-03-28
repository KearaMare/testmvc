<?php foreach ($pokemons as $pokemon): ?>
    <div class="card">
        <h2><?= $pokemon->getNom(); ?></h2>
        <p>Type : <?= $pokemon->getType(); ?></p>
        <img src="<?= $pokemon->getImageUrl(); ?>" alt="">
    </div>
<?php endforeach; ?>