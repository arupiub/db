<!doctype html>
<html lang="en">
  <head>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>School Input Form</title>
  </head>

  <body>
    <div class="container-fluid">
      <h1>School Details Input</h1>
      <br>
      <form action="schoolAction.php" method="post">
        <div class="mb-3">
          <label for="schooID" class="form-label">School ID</label>
          <input type="schoolID" class="form-control" id="schoolID" name="schoolID" placeholder="School ID">
        </div>
        <div class="mb-3">
          <label for="schoolName" class="form-label">School Name</label>
          <input type="schoolName" class="form-control" id="schoolName" name="schoolName" placeholder="School Name">
        </div>
        <br><br>
        <input type="submit" value="Submit"><br><hr>
      </form>
    </div>
  </body>
  </html>