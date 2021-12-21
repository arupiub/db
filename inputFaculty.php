<!doctype html>
<html lang="en">
  <head>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Semester Input Form</title>
  </head>

  <body>
    <div class="container-fluid">
      <h1>Section-Room Details Input</h1>
      <br>
      <form action="sectionRoomAction.php" method="post">
        <div class="mb-3">
          <label for="facultyID" class="form-label">Faculty ID</label>
          <input type="facultyID" class="form-control" id="facultyID" name="facultyID" placeholder="Faculty id">
        </div>
        <div class="mb-3">
          <label for="facultyName" class="form-label">Faculty Name</label>
          <input type="facultyName" class="form-control" id="facultyName" name="facultyName" placeholder="Faculty Name">
        </div>
        <div class="mb-3">
          <label for="deptID" class="form-label">Department ID</label>
          <input type="deptID" class="form-control" id="deptID" name="deptID" placeholder="Department ID">
        </div>
        <br><br>
        <input type="submit" value="Submit"><br><hr>
      </form>
    </div>
  </body>
  </html>