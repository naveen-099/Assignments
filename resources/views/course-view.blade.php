<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Course Details</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Course Type</th>
            <th>Course Name</th>
            <th>Course Id</th>

        </tr>
        </thead>
        <tbody>

        @foreach($data as $datas)
            <tr>
                <td>{{ $datas->course_type }}</td>
                <td>{{ $datas->course_name  }}</td>
                <td>{{ $datas->course_id }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
