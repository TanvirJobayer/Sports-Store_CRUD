<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product | Sports Store</title>
</head>
<body>
    <h1>Add Product | Sports Store</h1>
    <hr>
    <p style="white-space: nowrap;">Click this button to go back to main menu: 👉 &nbsp;
        <button style="background-color: bisque; cursor:pointer;" onclick="window.location.href='/products'"> All Products </button>
    </p>
    <br>
    <form action="/products" method="post">
        @csrf
        @if ($errors->any())
            <div role="alert" style="color: #b91c1c;">
                <p>Please correct the following errors:</p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <fieldset style="width: fit-content">
            <legend>Add a new product: </legend>
            <br>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required maxlength="255" @error('name') aria-invalid="true" @enderror>
            @error('name') <span role="alert" style="color: #b91c1c;">{{ $message }}</span> @enderror
            <br><br>
            <label for="category">Category:</label>
            <input type="text" id="category" name="category" value="{{ old('category') }}" required maxlength="255" @error('category') aria-invalid="true" @enderror>
            @error('category') <span role="alert" style="color: #b91c1c;">{{ $message }}</span> @enderror
            <br><br>
            <label for="brand">Brand:</label>
            <input type="text" id="brand" name="brand" value="{{ old('brand') }}" maxlength="255" @error('brand') aria-invalid="true" @enderror>
            @error('brand') <span role="alert" style="color: #b91c1c;">{{ $message }}</span> @enderror
            <br><br>
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" value="{{ old('price') }}" min="0" step="0.01" required @error('price') aria-invalid="true" @enderror>
            @error('price') <span role="alert" style="color: #b91c1c;">{{ $message }}</span> @enderror
            <br><br>
            <label for="stock">Stock:</label>
            <input type="number" id="stock" name="stock" value="{{ old('stock') }}" min="0" step="1" required @error('stock') aria-invalid="true" @enderror>
            @error('stock') <span role="alert" style="color: #b91c1c;">{{ $message }}</span> @enderror
            <br><br>
            <label for="description">Description:</label>
            <input type="text" id="description" name="description" value="{{ old('description') }}" @error('description') aria-invalid="true" @enderror>
            @error('description') <span role="alert" style="color: #b91c1c;">{{ $message }}</span> @enderror
            <br><br>
            <hr><br>
            <button type="submit" style="background-color: rgb(182, 246, 182); display: block; margin: 0 auto; cursor:pointer; padding:0 .5in"> Save </button>
            <br><hr>
        </fieldset>
    </form>
</body>
</html>
