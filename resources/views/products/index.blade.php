<h1>Products</h1>
<div class="container">
    <a href="/product/create">Add new product</a>
    <table >
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Availability</th>
            <th>Amount</th>
            <th>Image URL</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->availability }}</td>
            <td>{{ $product->amount }}</td>
            <td>{{ $product->imageUrl}}</td>
            <td><a href="/product/{{$product->_id}}/edit">Edit</td>

            <td>
                <form action="/product/{{$product->_id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>            
    @endforeach
    </table>
</div>
<style>
    table,td, th{
        border: 1px solid black;
    }
   
</style>
 
{{ $products->links() }}