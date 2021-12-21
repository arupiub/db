<!doctype html>
<html lang="en">
  <head>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Section Input Form</title>
  </head>

  <body>
    <div class="container-fluid">
      <h1>Section Details Input</h1>
      <br>
      <form action="sectionAction.php" method="post">
        <div class="mb-3">
          <label for="secID" class="form-label">Section ID</label>
          <input type="secID" class="form-control" id="secID" name="secID" placeholder="Section ID">
        </div>
        <div class="mb-3">
          <label for="secNo" class="form-label">Section No</label>
          <input type="secNo" class="form-control" id="secNo" name="secNo" placeholder="Section No">
        </div>
        <div class="mb-3">
          <label for="secCapacity" class="form-label">Section Capacity</label>
          <input type="secCapacity" class="form-control" id="secCapacity" name="secCapacity" placeholder="Section Capacity">
        </div>
        <div class="mb-3">
          <label for="enrolled" class="form-label">Enrolled</label>
          <input type="enrolled" class="form-control" id="enrolled" name="enrolled" placeholder="Enrolled">
        </div>
        <div class="mb-3">
          <label for="courseID" class="form-label">Course ID</label>
          <input type="courseID" class="form-control" id="courseID" name="courseID" placeholder="Course ID">
        </div>
        <br><br>
        <input type="submit" value="Submit"><br><hr>
      </form>
    </div>
  </body>
  </html>