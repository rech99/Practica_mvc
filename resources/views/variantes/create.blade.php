<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Variant</title>
</head>
<body>
    <h1>Create Variant</h1>
    <a href="{{route('variantes.index')}}"> Back to list </a>
    <form method="post" action="{{route('variantes.store')}}">
        @csrf
        <label>Lineage</label>
        <input type ="text" name="lineage">
        <br>
        <label>Common Countries</label>
        <textarea type ="text" name="common_countries" rows="6"></textarea>
        <br>
        <label>Earliest Date</label>
        <input type ="text" name="earliest_date">
        <br>
        <label>Designated Number</label>
        <input type ="text" name="designated_number">
        <br>
        <label>Assigned Number</label>
        <input type ="text" name="assigned_number">
        <br>
        <label>Description</label>
        <textarea type ="text" name="description" rows="6"></textarea>
        <br>
        <label>WHO Name</label>
        <input type ="text" name="who_name">
        <br>
        <button type="submit">Save new variant</button>
    </form>

</body>
</html>
