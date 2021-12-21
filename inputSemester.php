<!doctype html>
<html lang="en">
  <head>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Semester Input Form</title>
  </head>

  <body>
    <div class="container-fluid">
      <h1>Semester Details Input</h1>
      <br>
      <form action="semesterAction.php" method="post">
        <div class="mb-3">
          <label for="semID" class="form-label">Semester ID</label>
          <input type="semID" class="form-control" id="semID" name="semID" placeholder="Semester ID">
        </div>
        <div class="mb-3">
          <label for="semester" class="form-label">Semester</label>
          <input type="semester" class="form-control" id="semester" name="semester" placeholder="Semester">
        </div>
        <div class="mb-3">
          <label for="year" class="form-label">Year</label>
          <input type="year" class="form-control" id="year" name="year" placeholder="Year">
        </div>
        <br><br>
        <input type="submit" value="Submit"><br><hr>
      </form>
    </div>
  </body>
  </html>