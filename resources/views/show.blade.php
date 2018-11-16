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
            <th> Actions </th>
        </tr>
        </thead>
        <tbody>

        @foreach($res_array['elements'] as $key =>  $results)
        <tr>
                <td>{{ $results['courseType'] }}</td>
                <td>{{ $results['name']  }}</td>
                <td>{{ $results['id'] }}</td>
            <td> <a class="btn btn-primary btn-sm" href="{{ action('ApiController@save',$results) }}"> Save </a></td>
            <td> <a class="btn btn-primary btn-sm" href="{{ action('ApiController@show',$results['id']) }}"> View </a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
