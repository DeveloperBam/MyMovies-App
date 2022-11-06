<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/stylesheet.css">
    <title>MyMovies</title>
</head>
<body id="home">
    <?php require_once('./components/navbar.php') ?>
    <div id="landing">
        <h1>Your space for tracking films.</h1>
        <h2>Search, rate and review films all in one place.</h2>
        <form>
            <input type="text" name="search" id="search">
            <input type="submit" value="#">
        </form>
        <span> Explore now or <a href='#'> create an account here </a></span>
    </div>
</body>
</html>