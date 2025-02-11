<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-b from-gray-50 to-white">
    <!-- Navigation Bar -->
    <nav class="sticky top-0 bg-black shadow-md py-4">
    <div class="max-w-7xl mx-auto px-4 flex justify-between items-center">
        <div class="text-2xl font-bold text-white">My Showcase</div>
        <div class="flex space-x-6">
            <a class="text-gray-300 hover:text-indigo-400 transition-colors" href="portfolio.php">Home</a>
            <a class="text-gray-300 hover:text-indigo-400 transition-colors" href="about.php">About Us</a>
            <a class="text-gray-300 hover:text-indigo-400 transition-colors" href="experience.php">Experience</a>
            <a class="text-gray-300 hover:text-indigo-400 transition-colors" href="gallery.php">Gallery</a>
            <a class="text-gray-300 hover:text-indigo-400 transition-colors" href="contact.php">Contact</a>
            <button id="loginButton" class="text-gray-300 hover:text-indigo-400 transition-colors">Login</button>
        </div>
    </div>
</nav> 