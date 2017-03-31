<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
        <script src="https://use.fontawesome.com/983b5cbe32.js"></script>
        <title>wendibranch</title>
    </head>
    <body>

        <?php include('partials/main-nav.php'); ?>
            <div id="video-bg">
                <div class="page-header">
                    <h1>get yourself informed. make your vote up.</h1>
                </div>
                <video id="video">
                    <source src="videos/" type="video/mp4">
                </video>
            </div>
            <div class="parties">
                <a><div class="large-3 medium-6 small-12 columns party p-img" data-party=""><p></p></div></a>
                <a><div class="large-3 medium-6 small-12 columns party p-img" data-party=""><p></p></div></a>
                <a><div class="large-3 medium-6 small-12 columns party p-img" data-party=""><p></p></div></a>
                <a><div class="large-3 medium-6 small-12 columns party p-img" data-party=""><p></p></div></a>
            </div>

        <div class="h-footer">
            <?php include('partials/footer.php'); ?>
        </div>

        <script type="text/javascript" src="js/video.js"></script>
        <!-- hola -->

    </body>
</html>
