<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width,initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 75%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
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
a {
  text-decoration: none; /* Remove underline */
  color: #04AA6D; /* Green color */
  font-weight: bold; /* Make the text bold */
  font-size: 1.17em; /* Set font size to match h3 */
}

a:hover {
  color: #028a50; /* Darker green on hover */
}

/* Specific styles for edit links */
.edit-link {
  color: #007BFF; /* Blue color for edit links */
  font-size: 1.17em; /* Set font size to match h3 */
}

.edit-link:hover {
  color: #0056b3; /* Darker blue on hover */
}
</style>
</head>
<body>

<h1>Products</h1>


<div>
        @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
        @endif
    </div>
    <div>
        <a href="{{route('product.create')}}">Create a New Product</a>
    </div> 

</div>
        <table id="customers">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($products as $product)
            <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->qty}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->description}}</td>
                    <td>
                        <a href="{{route('product.edit',['product'=> $product])}}"  class="edit-link" >Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('product.destroy',['product'=>$product])}} " class="delete-form">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
            </tr> 
            @endforeach
</table>
</div>

</body>
</html>