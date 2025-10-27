<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        table{width:100%;border-collapse:collapse}
        th,td{border:1px solid #ddd;padding:8px;text-align:left}
        img.avatar{width:60px;height:60px;object-fit:cover;border-radius:6px}
    </style>
</head>
<body>
    <h1>{{ $title ?? 'Trainer' }}</h1>
    <p>Fecha: {{ $date ?? now()->format('Y-m-d') }}</p>

    @if(isset($trainer) && $trainer)
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Avatar</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $trainer->id }}</td>
                    <td>
                        @if(!empty($trainer->avatar_base64))
                            <img class="avatar" src="{{ $trainer->avatar_base64 }}" alt="avatar">
                        @else
                            Sin foto
                        @endif
                    </td>
                    <td>{{ $trainer->nombre }}</td>
                    <td>{{ $trainer->apellido }}</td>
                </tr>
            </tbody>
        </table>
    @else
        <p>Trainer no encontrado.</p>
    @endif
</body>
</html>