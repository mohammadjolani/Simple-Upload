<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Simple File Upload</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/sticky-footer.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="js/ie-emulation-modes-warning.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Begin page content -->
        <div class="container"> 
            <div class="page-header">
                <h1>Simple File Upload</h1>
            </div>
            <p class="lead">Please select one file to upload</p>
            <p>You will find your Uploaded files <a href="uploads">here</a></p>
            <form class="form-signin" action="upload.php" method="post" enctype="multipart/form-data">
                <p>
                <div class="input-group">
                    <span class="input-group-btn">
                        <span class="btn btn-primary btn-file">
                            Browse&hellip; <input type="file" name="fileToUpload" id="fileToUpload">
                        </span>
                    </span>
                    <input type="text" class="form-control" readonly>
                </div>
                </p>
                <input class="btn btn-lg btn-primary btn-block" type="submit" value="Upload File" name="submit">
            </form>
        </div>
        <footer class="footer">
            <div class="container">
                <p class="text-muted">This tool developed by Mohammad Jolani <a href="mohammad@jolani.me">mohamad@jolani.me</a></p>
            </div>
        </footer>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
