<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Products | Sports Store</title>
</head>
<body>
    <h1>All Products | Sports Store</h1>
    <hr>
    <p>Click this button to add new product: 👉 &nbsp;
        <button style="background-color: bisque" onclick="window.location.href='/products/create'"> Add Products </button>
    </p>
    <br>
    <table border="1" cellspacing="0" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->category}}</td>
                <td>{{$product->brand}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->stock}}</td>
                <td>{{$product->description}}</td>
                <td style="white-space: nowrap">
                    <button style="background-color: rgb(182, 246, 182)" onclick="window.location.href='/products/{{$product->id}}'"> Show </button>
                    |
                    <button style="background-color: rgb(138, 174, 251)" onclick="window.location.href='/products/{{$product->id}}/edit'"> Edit </button>
                    |
                    <form action="/products/{{$product->id}}" method="post"  style="display:inline">
                        @csrf
                        @method('delete')
                        <button style="background-color: rgb(229, 92, 92)"> Delete </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8" align="center"> No Data Found </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
