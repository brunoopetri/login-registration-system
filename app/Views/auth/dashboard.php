<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/css/dashboard.css">
</head>
<body>
    <div class="outer-container">
        <a class="dashboard-link" href="/account">Dashboard</a>
        <div class="inner-container">
        <h1>Bem-vindo, <span id="name"><?= htmlspecialchars($name ?? '') ?></span>, ao futuro!</h1>
        </div>
        <a class="signout" href="/logout">Sign out</a>
    </div>
</body>
</html>
