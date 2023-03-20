<!DOCTYPE html>
<html>

<head>
    <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    </style>
</head>

<body>

    <h2>HTML Table</h2>

    <table>
        <tr>
            <th>name</th>
            <th>description</th>
            <th>Buttons</th>
        </tr>
        @if(isset($task))
        @foreach($task as $tasks)
        <tr>
            <td>{{$tasks->name}}</td>
            <td>{{$tasks->description}}</td>
            @can('task_edit')
            <td> i can edit task</td>
            @endcan
        </tr>
        @endforeach
        @endif
    </table>

</body>

</html>