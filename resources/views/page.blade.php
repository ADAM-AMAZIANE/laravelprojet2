<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pour telecharger le fichier</title>
</head>
<body>
 <!-- la deuxieme -->
    <form action="{{route('download.file')}}" method="get">
        @csrf
        <button type="submit">telecharger</button>
    </form>

</body>
</html>
