<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Meu Site Institucional</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="quem-somos.html">Quem Somos</a></li>
                <li><a href="contato.html">Contato</a></li>
            </ul>
        </nav>
    </header>
    
    <section id="conteudo">
        <!-- Conteúdo da página -->
    </section>
    
    <footer>
        <p>&copy; 2023 Meu Site Institucional</p>
    </footer>
</body>
</html>
