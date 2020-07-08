<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Prodotti</title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Nome Prodotto</th>
                    <th>Prezzo</th>
                    <th>Codice Prodotto</th>
                </tr>
                <tbody>
                    @foreach ($lista_prodotti as $prodotto)
                        <tr>
                            <td>{{ $prodotto->product_name}}</td>
                            <td>{{ $prodotto->price}}</td>
                            <td>{{ $prodotto->product_code}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </thead>
        </table>
    </body>
</html>
