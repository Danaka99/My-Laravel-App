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

<h1>Edit A Product</h1>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width,initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
</head>
<body>

<form method="post" action="{{route('product.update',['product'=>$product])}}">
    @csrf
    @method("put")
    <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{$product->name}}">
        </div>

        <div>
            <label>Qty</label>
            <input type="text" name="qty" placeholder="Qty" value="{{$product->qty}}">
        </div>

        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="Price" value="{{$product->price}}">
        </div>

        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description" value="{{$product->description}}">
        </div>

        <div>
            <label>Save</label>
            <input type="submit" value="Update">
        </div>

</form>

</body>
</html>