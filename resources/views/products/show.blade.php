 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Detail | Sports Store</title>
</head>
<body>
    <h1>Product Detail | Sports Store</h1>
    <hr>
    <p>Click this button to go back to main menu: 👉 &nbsp;
        <button style="background-color: bisque; cursor:pointer;" onclick="window.location.href='/products'"> All Products </button>
    </p>
    <br>
    <table border="1" cellspacing="0" cellpadding="10">
        <thead>
            <tr>
                <th colspan="2">Product Detail</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>ID</td>
                <td>{{$product->id}}</td>
                <td rowspan="7" style="white-space: nowrap" align="center">
                    <button style="background-color: rgb(138, 174, 251); cursor:pointer;" onclick="window.location.href='/products/{{$product->id}}/edit'"> Edit </button>
                    <br><br>
                    <form action="/products/{{$product->id}}" method="post"  style="display:inline">
                        @csrf
                        @method('delete')
                        <button style="background-color: rgb(229, 92, 92); cursor:pointer;"> Delete </button>
                    </form>
                </td>
            </tr>
            <tr>
                <td>Name</td>
                <td>{{$product->name}}</td>
            </tr>
            <tr>
                <td>Category</td>
                <td>{{$product->category}}</td>
            </tr>
            <tr>
                <td>Brand</td>
                <td>{{$product->brand}}</td>
            </tr>
            <tr>
                <td>Price</td>
                <td>{{$product->price}}</td>
            </tr>
            <tr>
                <td>Stock</td>
                <td>{{$product->stock}}</td>
            </tr>
            <tr>
                <td>Description</td>
                <td>{{$product->description}}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
