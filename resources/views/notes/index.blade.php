<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Listado de notas</title>
    </head>
    <body>
        <table border="2">
            <thead>
                <th>ID</th>
                <th>Título</th>
                <th>Acción</th>
            </thead>
            <tbody>
                @foreach ($notes as $note)
                    <tr>
                        <td>{{ $note->id }}</td>
                        <td>{{ $note->title }}</td>
                        <td>
                            @role('Administrador')
                                <a href="{{ route('notes.destroy', $note->id)}}">Eliminar nota</a>
                            @else
                                Usted no puede eliminar esta nota
                            @endrole
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
