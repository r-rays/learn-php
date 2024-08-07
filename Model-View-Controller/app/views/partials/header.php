<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data["title"]; ?></title>
    <link rel="stylesheet" href="<?= baseURL; ?>/css/bootstrap.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary mb-2" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= baseURL; ?>">PHP MVC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= baseURL; ?>/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= baseURL; ?>/mahasiswa">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= baseURL; ?>/about">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>