<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Записная книжка</title>
</head>
<body>
<div class='div-table'>
    <table class='table table-hover'>
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Фамилия</th>
            <th scope="col">Имя</th>
            <th scope="col">Отчество</th>
            <th scope="col">Компания</th>
            <th scope="col">Телефон</th>
            <th scope="col">Почта</th>
            <th scope="col">Дата рождения</th>
            <th scope="col">Фото</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($notes as $note)
            <tr>
                <td> {{ $note->id }} </td>
                <td> {{ $note->surname }} </td>
                <td> {{ $note->name }} </td>
                <td> {{ $note->patronymic }} </td>
                <td> {{ $note->company }} </td>
                <td> {{ $note->phone }} </td>
                <td> {{ $note->email }} </td>
                <td> {{ $note->birth_date }} </td>
                <td>
                    <img width="75" src="{{ asset('storage') .'/images/'.$note->photo}}">
                </td>
                <td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $notes->links('pagination::bootstrap-4') }}
</div>

</body>
</html>
