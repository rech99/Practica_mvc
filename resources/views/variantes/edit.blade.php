<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Variant</title>
</head>
<body>
    <h1>Edit Variant</h1>
    @if (Session::has('success'))
        <p style="color: green;"> {{Session::get('success')}} </p>
    @endif
    @if (Session::has('error'))
        <p style="color: red;"> {{Session::get('error')}} </p>
    @endif
    <a href="{{route('variantes.index')}}"> Back to list </a>
    <form method="post" action="{{route('variantes.update', $variante -> id)}}">
        @csrf
        @method('put')
        <label>Lineage</label>
        <input type ="text" name="lineage" value="{{$variante->lineage}}">
        <br>
        <label>Common Countries</label>
        <textarea type ="text" name="common_countries"  rows="6" >{{$variante->common_countries}}</textarea>
        <br>
        <label>Earliest Date</label>
        <input type ="text" name="earliest_date" value="{{$variante->earliest_date}}">
        <br>
        <label>Designated Number</label>
        <input type ="text" name="designated_number" value="{{$variante->designated_number}}">
        <br>
        <label>Assigned Number</label>
        <input type ="text" name="assigned_number" value="{{$variante->assigned_number}}">
        <br>
        <label>Description</label>
        <textarea type ="text" name="description" rows="6">{{$variante->description}}</textarea>
        <br>
        <label>WHO Name</label>
        <input type ="text" name="who_name" value="{{$variante->who_name}}">
        <br>
        <button type="submit">Update</button>
    </form>

</body>
</html>
