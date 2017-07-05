
<?php
 $path = storage_path();
 ?>
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
<head>
  <title>View Uploaded Files</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Uploaded Files</h2>
    
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>File Name</th>
        <th>Project Name</th>
        <th>Project Lead Name</th>
        <th>File Description</th>
        <th>Share Type</th>
        <th>Download File</th>
      </tr>
    </thead>
    <tbody>
      @foreach($request_data as $row)
          <tr> 
              <td>{{$row->id}}</td>
              <td>{{$row->file_name}}</td>
              <td>{{$row->project_name}}</td>
              <td>{{$row->project_lead_name}}</td>
              <td>{{$row->file_description}}</td>
              <td>{{$row->share_type}}</td>
              
              <td><a href="{{ url('/download/'.$row->stored_file_name) }}">Download</a></td>
          </tr>
      @endforeach 
    </tbody>
  </table>
</div>
<br>
<div class="container">
<div class="col-sm-8">
  <form class="form-horizontal" action ='/home' method="post" enctype="multipart/form-data">
{{ csrf_field() }}
  <button type="submit" class="btn btn-primary">Go Back</button>
</form>
</div>
</body>
