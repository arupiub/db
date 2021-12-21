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
          <label for="secID" class="form-label">Section ID</label>
          <input type="secID" class="form-control" id="secID" name="secID" placeholder="Section ID">
        </div>
        <div class="mb-3">
          <label for="facultyID" class="form-label">Faculty ID</label>
          <input type="facultyID" class="form-control" id="facultyID" name="facultyID" placeholder="Faculty id">
        </div>
        <div class="mb-3">
          <label for="roomNo" class="form-label">Room No</label>
          <input type="roomNo" class="form-control" id="roomNo" name="roomNo" placeholder="Room No">
        </div>
        <div class="mb-3">
          <label for="startTime" class="form-label">Start Time</label>
          <input type="startTime" class="form-control" id="startTime" name="startTime" placeholder="Start Time">
        </div>
        <div class="mb-3">
          <label for="endTime" class="form-label">End Time</label>
          <input type="endTime" class="form-control" id="endTime" name="endTime" placeholder="End Time">
        </div>
        <div class="mb-3">
          <label for="days" class="form-label">Days</label>
          <input type="days" class="form-control" id="days" name="days" placeholder="Days">
        </div>
        <br><br>
        <input type="submit" value="Submit"><br><hr>
      </form>
    </div>
  </body>
  </html>