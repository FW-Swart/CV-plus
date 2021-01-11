<!DOCTYPE html>

<html lang="en">

    <!-- SWART head = top all pages -->
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- SWART include Bootstrap -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
            crossorigin="anonymous"
        >

        <!-- SWART include custom fonts from google -->
        <link 
            rel="stylesheet" 
            href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@500&display=swap" 
        >
        <link 
            rel="preconnect" 
            href="https://fonts.gstatic.com"
        >
        <link 
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap" 
        >
        <link 
            rel="preconnect" 
            href="https://fonts.gstatic.com"
        >
        <link 
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap"
        >          

        <!-- SWART include landingspage.css-->
        <link rel="stylesheet" 
            href="static/css/style-all.css" 
            type="text/css"
        >
        <!-- SWART include page specific.css -->
        <link rel="stylesheet" 
            href=<?= $pagecss ?> 
            type="text/css"
        >

        <!-- SWART include browser-tab icon -->
        <link 
            rel="icon" 
            href="static/img/Highlightmarker-green.png" 
            sizes="32x32" 
            alt="icon green marker"
        >

        <!-- SWART include action-button.js file all pages-->
        <script 
            src="static/js/action-button.js" 
            defer>
        </script>
        <!-- SWART include app-style.js file all pages -->
        <script 
            src="static/js/app-style.js" 
            defer>
        </script>
        <!-- SDWART scroll table .js for CV-pages-->
        <script 
            src="static/js/sorttable.js">
        </script>

        <!-- SWART ???? check why this is in use ????? -->
        <script 
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
        </script>


        <title> <?= $pagetitle ?> </title>

    </head>

    <body>