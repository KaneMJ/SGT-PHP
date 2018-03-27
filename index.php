<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
    <meta name="viewport" content="initial-scale=1, user-scalable=no">
</head>
<body>
<div class="container">
    <div class="row page-header">
            <!-- only show this element when the isnt on mobile -->
            <h1 class="hidden-xs hidden-sm">Student Grade Table
                <small class="pull-right">Grade Average : <span class="avgGrade label label-default">0</span></small>
            </h1>
            <!-- only show this element when the user gets to a mobile version -->
            <h3 class="hidden-lg hidden-md">Student Grade Table
                <small class="pull-right">Grade Average : <span class="avgGrade label label-default">0</span></small>
            </h3>
    </div>
    <div class="row">
        <div class="student-add-form form-group pull-right col-lg-4 col-xs-12">
            <h4>Add Student</h4>
            <form class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" class="form-control" name="studentName" id="studentName" placeholder="Student Name">
                </div>
            </form>
            <form class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                    <input type="text" class="form-control" name="course" id="course" placeholder="Student Course">
                </div>
            </form>
            <form class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                    <input type="text" class="form-control" name="studentGrade" id="studentGrade" placeholder="Student Grade">
                </div>
            </form>
            <button type="button" class="btn btn-success add">Add</button>
            <button type="button" class="btn btn-default cancel">Cancel</button>
            <button type="button" class="btn btn-default getServerData">Get Server Data</button>
        </div>
        <div class="student-list-container col-lg-8 col-xs-12">
            <table class="student-list table table-hover">
                <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Student Course</th>
                    <th>Student Grade</th>
                    <th>Operations</th>
                </tr>
                </thead>
                <tbody id="studentList">
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>