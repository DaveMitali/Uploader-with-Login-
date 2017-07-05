<?php $user = Auth::user();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="L1JBMR3Ki2We40cq4cCTIKxsLsdLNjMdkh4rC9Yg">
    <title>File Uploader</title>
    <!-- Styles -->
    <link href="http://uploader.dev/css/app.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
              <h4><b><div align="right"><?php if ($user)
                                                                    {
                                                                    echo "Hello $user->name";
                                                                    } ?></div></b></h4>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                                        <a href="http://uploader.dev/logout"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           <b>Logout</b>
                                        </a>

                                        <form id="logout-form" action="http://uploader.dev/logout" method="POST" style="display: none;">{{ csrf_field() }}
                                            <input type="hidden" name="_token" value="L1JBMR3Ki2We40cq4cCTIKxsLsdLNjMdkh4rC9Yg">
                                        </form>
                                    </li>
                                </ul>
                            </li>
                                           
                </div>
            </div>
        </nav>

        <div class="container">
    <div class="row">
        <div class="col-md-12">
           <head><title>File Uploader</title></head>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<h2><center><u>Upload CSV Files to a MySQL Database</u></center></h2>
<hr>
<br>
<div class="container">
<div class="col-sm-8">
<form class="form-horizontal" action ='/response' method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="fname">File Name: </label>
    <input type="text" class="form-control" id="fname" name="fname" required>
  </div>
  <div class="form-group">
    <label for="pname">Project Name: </label>
    <input type="text" class="form-control" id="pname" name ="pname" required>
  </div>
  <div class="form-group">
    <label for="plname">Project Lead Name: </label>
    <input type="text" class="form-control" id="plname" name="plname" required>
  </div>
  <div class="form-group">
    <label for="fd">File Description: </label>
    <textarea class="form-control" id="fd" name="fd" rows="5" cols="40" required></textarea>
  </div>

  <div class="form-group">
    <label for="sharetype">Share Type (Public/Private): </label><br>
    <input type="radio" name="sharetype" value="Public" checked>Public<br>
    <input type="radio" name="sharetype" value="Private">Private<br>
  </div>
  <div class="form-group">
    <label for="file">Select a file to be uploaded: </label>
    <input type="file" id="file" name="file" required>
  </div>



<button type="submit" class="btn btn-primary">Upload</button>
</form> <br>

<form class="form-horizontal" action ='/view_files' method="post" enctype="multipart/form-data">
{{ csrf_field() }}
  <button type="submit" class="btn btn-primary">View Uploaded Files</button>
</form>

</div>
                
           
       


    <!-- Scripts -->
    <script src="http://uploader.dev/js/app.js"></script>
</body>
</html>
