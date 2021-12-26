<!doctype html>
<html lang="en">
  <head>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Course Input Form</title>
  </head>

  <body>
    <div class="container-fluid">
      <h1>Course Details Input</h1>
      <br>
      <form action="courseAction.php" method="post">
        <div class="mb-3">
          <label for="courseID" class="form-label">Course ID</label>
          <input type="courseID" class="form-control" id="courseID" name="courseID" placeholder="Course ID">
        </div>
        <div class="mb-3">
          <label for="credit" class="form-label">Credit Hours</label>
          <input type="credit" class="form-control" id="credit" name="credit" placeholder="Credit Hours">
        </div>
        <div class="mb-3">
          <label for="courseName" class="form-label">Course Name</label>
          <input type="courseName" class="form-control" id="courseName" name="courseName" placeholder="Course Name">
        </div>
        <div class="mb-3">
          <label for="schoolID" class="form-label">School ID</label>
          <input type="schoolID" class="form-control" id="schoolID" name="schoolID" placeholder="School ID">
        </div>
        <br><br>
        <input type="submit" value="Submit"><br><hr>
      </form>
    </div>
  </body>
  </html>