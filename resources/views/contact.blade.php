@extends('layouts.main')

@section('container')

<h1 class="mb-3">Halaman Contact</h1>
<img src="img/<?= $image; ?>" alt="<?= $name; ?>" width="150" class="img-tumbnail rounded-circle">
  <h4><?= $name; ?></h4>
  <p>NIM      : <?= $nim; ?></p>
  <p>Kelas    : <?= $kelas; ?></p>
  <p>Whatsapp : <?= $whatsapp; ?></p>
  <p>e-Mail   : <?= $email; ?></p>

@endsection
