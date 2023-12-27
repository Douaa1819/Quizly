<?php
session_start();

if (isset($_POST['submit'])) {
    $pseudo = $_POST['pseudo'];

    if (!empty($pseudo)) {
        $_SESSION['pseudo'] = $pseudo;
        header('location: quiz.php');
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <title>Quizzly</title>
</head>

<body class="bg-center bg-no-repeat bg-cover" style="background-image: url('../img/image.jpg');">

<div class="w-9/12 mx-auto bg-gray-200 rounded-full h-2.5 my-4 dark:bg-gray-700">
    <div class="bg-purple-600 h-2.5 rounded-full dark:bg-purple-500" style="width: 30%"></div>
</div>
    <div class="flex items-center justify-center min-h-screen">
        
        <div class="bg-black bg-opacity-40 p-6 rounded-md shadow-md w-full max-w-md">
            <div class="relative">
                <img src="../img/logo.png" alt="pseudo photos"
                    class=" flex items-center justify-center w-52 h-48 object-center object-cover rounded-md mb-1 mx-16 ">
            </div>
            <h1 class="text-3xl font-semibold mb-8 text-center text-white">Testez vos connaissances</h1>
            <form method="post">
                <div class="relative rounded-md overflow-hidden bg-white border-2 border-purple-700 mb-4">
                    <input type="text" id="pseudo" name="pseudo"
                        class="w-full px-4 py-2 focus:outline-none focus:ring focus:border-blue-500 bg-black  bg-opacity-70 text-black"
                        placeholder="Entrez votre pseudo...">
                </div>
                <button
                    class="bg-purple-900 hover:bg-purple-700 text-white px-6 py-2 rounded-md mb-5 flex justify-center"
                    name="submit">Commencer</button>
            </form>
        </div>
    </div>
</body>

</html>
