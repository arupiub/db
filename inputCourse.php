<!doctype html>
<html lang="en">
  <head>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Semester Input Form</title>
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
          <label for="credits" class="form-label">Credit Hours</label>
          <input type="credits" class="form-control" id="credits" name="credits" placeholder="Credit Hours">
        </div>
        <div class="mb-3">
          <label for="courseName" class="form-label">Course Name</label>
          <input type="courseName" class="form-control" id="courseName" name="courseName" placeholder="Course Name">
        </div>
        <div class="mb-3">
          <label for="semID" class="form-label">Semester ID</label>
          <input type="semID" class="form-control" id="semID" name="semID" placeholder="Semester ID">
        </div>
        <br><br>
        <input type="submit" value="Submit"><br><hr>
      </form>
    </div>
  </body>
  </html>