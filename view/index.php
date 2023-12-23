<?php
session_start();
    if (isset($_POST['submit'])) {
    
        $_SESSION['pseudo'] = $_POST['pseudo'];
        if (isset($_SESSION['pseudo'])) {
            header('location:testquiz.php');
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Quizzly</title>
</head>

<body class="bg-gradient-to-r from-purple-400 via-purple-500 to-purple-900 text-white">
    <nav class="bg-violet-700 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <img src="../img/logos.png" alt="logo" width="100px" height="100px">
        </div>
    </nav>
    <div class="container mx-auto flex justify-center items-center min-h-screen">
        <div class="bg-purple-300 p-8 rounded-md shadow-md w-full max-w-md">
            <h1 class="text-3xl font-semibold mb-4 text-center text-black">Testez vos connaissances</h1>
            <form method="post">
                <div class="relative rounded-md overflow-hidden bg-white border-2 border-purple-700 mb-4">
                    <input type="text" id="pseudo" name="pseudo" class="w-full px-4 py-2 focus:outline-none focus:ring focus:border-blue-500 text-black" placeholder="Entrez votre pseudo..." >
                </div>
                <button class="bg-purple-900 hover:bg-purple-700 text-white px-6 py-2 rounded-md mb-5 flex justify-center" name="submit">Commencer</button>
            </form>
        </div>
    </div>
</body>

</html>
