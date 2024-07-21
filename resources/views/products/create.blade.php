<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width,initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
</head>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    box-sizing: border-box;
    margin-top: 20px;
    margin-left: 20px;
}

h1 {
    margin: 20px;
    font-size: 24px;
    color: #333;
}

div {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #333;
}

input[type="text"] {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
    color: #333;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #28a745;
    border: none;
    border-radius: 4px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #218838;
}

ul {
    list-style-type: none;
    padding: 0;
    margin: 0 0 15px 0;
}

li {
    color: red;
    margin-bottom: 5px;
}

@media (max-width: 600px) {
    form {
        width: 100%;
        padding: 10px;
    }
}
h1 {
    margin-bottom: 20px;
    font-size: 32px; /* Increase the font size for better visibility */
    text-align: left; /* Center align the text */
    color: #333; /* Use a dark color for the text */
    font-weight: bold; /* Make the text bold */
    text-transform: uppercase; /* Transform the text to uppercase */
    letter-spacing: 2px; /* Add some letter spacing for better readability */
    padding-bottom: 10px; /* Add some padding at the bottom */
    border-bottom: 2px solid #ccc; /* Add a border at the bottom for emphasis */
}
</style>
<body>

<h1>Create a product</h1>

<div>
    @if($errors->any())
    <ul>
        @foreach(@errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
   @endif
</div>
<form method="post" action="{{route('product.store')}}" >
    @csrf
    @method("post")
    <div>
        <label>Name</label>
        <input type="text" name="name" placeholder="name"/>
    </div>
    <div>
        <label>Qty</label>
        <input type="text" name="qty" placeholder="qty"/>
    </div>
    <div>
        <label>Price</label>
        <input type="text" name="price" placeholder="price"/>
    </div>
    <div>
        <label>description</label>
        <input type="text" name="description" placeholder="description"/>
    </div>
    <div>
        <input type="submit" value="Save a New Product"/>
    </div>
</form>

</body>
</html>