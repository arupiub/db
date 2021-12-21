<!doctype html>
<html lang="en">
  <head>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Classroom Input Form</title>
  </head>

  <body>
    <div class="container-fluid">
      <h1>Classroom Details Input</h1>
      <br>
      <form action="classroomAction.php" method="post">
        <div class="mb-3">
          <label for="roomNo" class="form-label">Room No</label>
          <input type="roomNo" class="form-control" id="roomNo" name="roomNo" placeholder="Room No">
        </div>
        <div class="mb-3">
          <label for="roomCapacity" class="form-label">Room Capacity</label>
          <input type="roomCapacity" class="form-control" id="roomCapacity" name="roomCapacity" placeholder="Room Capacity">
        </div>
        <br><br>
        <input type="submit" value="Submit"><br><hr>
      </form>
    </div>
  </body>
  </html>