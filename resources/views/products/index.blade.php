<h1>Hello</h1>
<div class="container">
    <a href="/product/create">Add new product</a>
    <table>
    @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->decription }}</td>
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
 
{{ $products->links() }}