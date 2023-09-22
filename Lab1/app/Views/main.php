    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Main Page</title>
        <!-- Include Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>

    <div class="container mt-4">
        <h1>Student List</h1>
        
        <!-- Add a new student form -->
        <div class="card mb-4">
            <div class="card-header">
                Add New Student
            </div>
            <div class="card-body">
                <form action="/save" method="post">
                    <input type="hidden" name="ID"  value="<?=$studentEdit['ID']?? ''?>" >
                    <br>
                    <div class="form-group">
                        <label for="StudID">ID</label>
                        <input type="text" class="form-control" id="StudID" name="StudID" value="<?=$studentEdit['StudID']?? ''?>">
                    </div>
                    <div class="form-group">
                        <label for="StudName">Name</label>
                        <input type="text" class="form-control" id="StudName" name="StudName" value="<?=$studentEdit['StudName']?? ''?>">
                    </div>
                    <div class="form-group">
                        <label for="StudGender">Gender</label>
                        <select class="form-control" id="StudGender" name="StudGender">
                            <?php foreach ($genders as $option): ?>
                                <option><?= $option ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="StudCourse">Course</label>
                        <input type="text" class="form-control" id="StudCourse" name="StudCourse" value="<?=$studentEdit['StudCourse']?? ''?>">
                    </div>
                    <div class="form-group">
                        <label for="StudSection">Section</label>
                        <input type="text" class="form-control" id="StudSection" name="StudSection" value="<?=$studentEdit['StudSection']?? ''?>">
                    </div>
                    <div class="form-group">
                        <label for="StudYear">Year</label>
                        <input type="text" class="form-control" id="StudYear" name="StudYear" value="<?=$studentEdit['StudYear']?? ''?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>

        <!-- Table to display students -->
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Course</th>
                    <th>Section</th>
                    <th>Year</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $student): ?>
                    <tr>
                        <td><?= $student['StudID'] ?></td>
                        <td><?= $student['StudName'] ?></td>
                        <td><?= $student['StudGender'] ?></td>
                        <td><?= $student['StudCourse'] ?></td>
                        <td><?= $student['StudSection'] ?></td>
                        <td><?= $student['StudYear'] ?></td>
                        <td>
                            <a href="/edit/<?= $student['ID'] ?>" class="btn btn-primary">Edit</a>
                            <a href="/delete/<?= $student['ID'] ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Include Bootstrap JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    </html>
