<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product | Sports Store</title>
</head>
<body>
    <h1>Edit Product | Sports Store</h1>
    <hr>
    <p>Click this button to go back to main menu: 👉 &nbsp;
        <button style="background-color: bisque; cursor:pointer;" onclick="window.location.href='/products'"> All Products </button>
    </p>
    <br>
    <form action="/products/{{$product->id}}" method="post">
        @csrf
        @method('put')
        <fieldset style="width: fit-content">
            <legend>Edit product: </legend>
            <br>
            <label for="name">Name:</label>
            <input type="text" name="name" value="{{$product->name}}">
            <br><br>
            <label for="category">Category:</label>
            <input type="text" name="category" value="{{$product->category}}">
            <br><br>
            <label for="brand">Brand:</label>
            <input type="text" name="brand" value="{{$product->brand}}">
            <br><br>
            <label for="price">Price:</label>
            <input type="decimal" name="price" value="{{$product->price}}">
            <br><br>
            <label for="stock">Stock:</label>
            <input type="integer" name="stock" value="{{$product->stock}}">
            <br><br>
            <label for="description">Description:</label>
            <input type="text" name="description" value="{{$product->description}}">
            <br><br>
            <hr><br>
            <button type="submit" style="background-color: rgb(182, 246, 182); display: block; margin: 0 auto; cursor:pointer; padding:0 .5in"> Save Changes </button>
            <br><hr>
        </fieldset>
    </form>
</body>
</html>

