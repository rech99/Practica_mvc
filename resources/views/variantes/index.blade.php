<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Variant List Covid 19</title>
</head>
<body>
    <h1>Variant List Covid19</h1>
    @if (Session::has('success'))
        <p style="color: green;"> {{Session::get('success')}} </p>
    @endif
    @if (Session::has('error'))
        <p style="color: red;"> {{Session::get('error')}} </p>
    @endif
    <p>*Updated January 28</p>
    <a href="{{route('variantes.create')}}">Add Variant</a>
    <table>
        <thead>
            <th>Lineage</th>
            <th>Common Countries</th>
            <th>Earliest Date</th>
            <th>Designated Number</th>
            <th>Assigned Number</th>
            <th>Description</th>
            <th>WHO Name</th>
            <th>Actions</th>
        </thead>

        <tbody>
            @foreach($variantes as $variante)
                <tr>
                    <td>{{$variante->lineage}}</td>
                    <td>{{$variante->common_countries}}</td>
                    <td>{{$variante->earliest_date}}</td>
                    <td>{{$variante->designated_number}}</td>
                    <td>{{$variante->assigned_number}}</td>
                    <td>{{$variante->description}}</td>
                    <td>{{$variante->who_name}}</td>
                    <td><a href="{{route('variantes.edit', $variante->id)}}">Edit</td>
                    <td>
                        <a>
                        <form method="post" action ="{{route('variantes.destroy', $variante->id)}}">
                            @csrf
                            @method('delete')
                            <button type="submit"> Delete </button>
                        </form>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
