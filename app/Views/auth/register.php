<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link rel="stylesheet" href="/css/register.css">
</head>
<body>
    <div class="outer-container">
        <a href="/" class="home-link">Home</a>
        <div class="inner-container">
            <h2>Register</h2>
            <div id="message" class="message" style="display: none;"></div>
            <form method="post" action="/register">                
                <input type="text" id="name" name="name" placeholder="username" required value="<?= isset($_SESSION['form_data']['name']) ? htmlspecialchars($_SESSION['form_data']['name'], ENT_QUOTES) : ''; ?>">
                <input type="email" id="email" name="email" placeholder="e-mail" required value="<?= isset($_SESSION['form_data']['email']) ? htmlspecialchars($_SESSION['form_data']['email'], ENT_QUOTES) : ''; ?>">
                <input type="password" id="password" name="password" placeholder="password" required value="<?= isset($_SESSION['form_data']['password']) ? htmlspecialchars($_SESSION['form_data']['password'], ENT_QUOTES) : ''; ?>">
                <input type="password" id="confirmPassword" name="confirmPassword" placeholder="confirm password" required value="<?= isset($_SESSION['form_data']['confirmPassword']) ? htmlspecialchars($_SESSION['form_data']['confirmPassword'], ENT_QUOTES) : ''; ?>">
                <input type="submit" value="Register">
            </form>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            <?php if (isset($_SESSION['message'])): ?>
                const messageDiv = document.getElementById('message');
                messageDiv.textContent = "<?= htmlspecialchars($_SESSION['message']); ?>";
                messageDiv.classList.add('<?= htmlspecialchars($_SESSION['message_type']); ?>');
                messageDiv.style.display = 'block';
                <?php unset($_SESSION['message'], $_SESSION['message_type']); ?>

                <?php if (isset($_SESSION['redirect']) && $_SESSION['redirect'] === true): ?>
                    setTimeout(function() {
                        window.location.href = '/login';
                    }, 3000); // Redireciona após 3 segundos
                    <?php unset($_SESSION['redirect']); ?>
                <?php endif; ?>
            <?php endif; ?>
        });
    </script>
</body>
</html>


<?php
/*
if (isset($_SESSION['message'])): ?>
    <div id="message" class="<?= $_SESSION['isError'] ? 'error' : 'success' ?>">
        <?= $_SESSION['message'] ?>
    </div>
    <?php unset($_SESSION['message'], $_SESSION['isError']); ?>
<?php endif;
*/
?>
