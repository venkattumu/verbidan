<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>localstorage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body onload="fetchDetail()">

    <div class="jumbotron container mt-3 bg-info text-light text-center">
        <h1 class="display-4">Student Page</h1>
        <p class="lead">Course Name</p>                
    </div>

    <div class="container mt-2">
        <div class="row">
            <div class="col-md-6 bg-dark">
                <form class="p-5 text-light" id="courseInputForm">
                    <h3 class="text-info mb-4">Student Registration Form</h3>
                    <div class="form-group">
                      <label for="Sname" >Student Name</label>
                      <input type="text" class="form-control" id="Sname" placeholder="Student Name">
                    </div>
                    <div class="form-group">
                        <label for="Cname" >Course Name</label>
                        <input type="text" class="form-control" id="Cname" placeholder="Course Name">
                      </div>
                    <div class="form-group">
                      <label for="Cnumber">Course Number</label>
                      <input type="text" class="form-control" id="Cnumber" placeholder="Course Number">
                    </div>
                    <div class="form-group">
                        <label for="room">Room</label>
                        <input type="text" class="form-control" id="room" placeholder="Room Number">
                      </div>                    
                    <button type="submit" class="btn btn-primary" onclick="addCourse()">Register</button>
                  </form>
            </div>
            <div class="col-md-6 bg-light ">
                <button id="clear" class="btn btn-danger float-right m-2" onclick="clearData()">Clear Data</button>
                <table class="table table-bordered mt-2" id="enrolled">
                        <thead >
                          <tr class="table-danger" id="titleRow">
                            <th scope="col" >Student Name</th>
                            <th scope="col">Course Name</th>
                            <th scope="col">Course No.</th>
                            <th scope="col">Room No.</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr id="cell1"></tr>
                          <tr id="cell2"></tr>
                          <tr id="cell3"></tr>
                          <tr id="cell4"></tr>
                      </tbody>
                </table>
            </div>
        </div>
    </div>
    


    <script src="app.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>



