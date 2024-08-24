<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Contestant</title>
    <link rel="icon" href="img/other_contents/SUMMER PROMOTION F [Recovered].png" sizes="32x32" type="image/png">
    <!-- custom.css -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin-top: 20px;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-control {
            border-radius: 4px;
            border: 1px solid #ced4da;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            padding: 10px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            color: #fff;
            padding: 10px 20px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            color: #fff;
        }
        .btn-primary:focus {
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center font-weight-bold mb-4">Add New Contestant</h2>
        <form action="process_insert_contestant.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required class="form-control">
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required class="form-control">
            </div>
            <div class="form-group">
                <label for="specialty">Specialty:</label>
                <input type="text" id="specialty" name="specialty" required class="form-control">
            </div>
            <div class="form-group">
                <label for="origin">Origin:</label>
                <input type="text" id="origin" name="origin" required class="form-control">
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" id="image" name="image" accept="image/*" required class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Add Contestant</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies (optional, if needed) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
