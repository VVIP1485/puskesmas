
<h1>Detail Tim</h1>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Nama Tim: <?= $team['name']; ?></h5>
        <p class="card-text"><strong>Wilayah:</strong> <?= $team['region']; ?></p>
        <p class="card-text"><strong>ID Tim:</strong> <?= $team['id']; ?></p>
        <p class="card-text"><strong>Tanggal Dibuat:</strong> <?= $team['created_at']; ?></p>
    </div>
</div>

<a href="/teams" class="btn btn-secondary mt-3">Kembali ke Daftar Tim</a>

