<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
<body>

<h2>Users Table</h2>

<table>
    <tr>
        <th>Ad</th>
        <th>Fiyat</th>
        <th>Ekleyen</th>
    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->user[0]->name}}</td>

        </tr>
    @endforeach

</table>
