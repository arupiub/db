<!doctype html>
<html lang="en">
  <head>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Department Input Form</title>
  </head>

  <body>
    <div class="container-fluid">
      <h1>Department Details Input</h1>
      <br>
      <form action="deptAction.php" method="post">
        <div class="mb-3">
          <label for="deptID" class="form-label">Department ID</label>
          <input type="deptID" class="form-control" id="deptID" name="deptID" placeholder="Department ID">
        </div>
        <div class="mb-3">
          <label for="deptName" class="form-label">Department Name</label>
          <input type="deptName" class="form-control" id="deptName" name="deptName" placeholder="Department Name">
        </div>
        <div class="mb-3">
          <label for="schooID" class="form-label">School ID</label>
          <input type="schoolID" class="form-control" id="schoolID" name="schoolID" placeholder="School ID">
        </div>
        <br><br>
        <input type="submit" value="Submit"><br><hr>
      </form>
    </div>
  </body>
  </html>