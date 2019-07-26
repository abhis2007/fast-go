<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Register your shop</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .btn-success {
            margin-left: 50%;
        }

        #header {
            color: coral;
            font-family: cursive;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="header">
            <div class="row">
                <div class="col-xs-4"></div>
                <div class="col-xs-4">
                    <div class="h1"><span id="header">Register you as chef</span></div>
                </div>
                <div class="col-xs-4"></div>
            </div>
        </div>
        <form action="chef_account.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label class="h3">Chef name</label>
                <input type="text" class="form-control" placeholder="your name" name="chefname" />
            </div>

            <div class="form-group">
                <label class="h3">Temporaory address:</label>
                <input type="text" class="form-control" placeholder="state,city,street,locality pincose etc.." name="tmp_address" />
            </div>
            <div class="form-group">
                <label class="h3">Permanent address:</label>
                <input type="text" class="form-control" placeholder="state,city,street,locality pincose etc.." name="perm_address" />
                <label class="h3">upload relevant shop address proof</label>
                <input type="file" name="location"/>
            </div>
            <div class="form-group">
                <label class="h3">Upoad your image</label>
                <input type="file" name="image" />
            </div>
            <div class="form-group">
                <label class="h3">Upload your adhar </label>
                <input type="file" name="adhar" />
            </div>
            <div class="form-group">
                <label class="h3">Upload pan card</label>
                <input type="file" name="pan" />
            </div>
            <button class="btn btn-lg btn-success" type="submit" name="submit">submit</button>
        </form>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>