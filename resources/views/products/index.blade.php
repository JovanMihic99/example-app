<h1>Hello</h1>
<div class="container">
    @foreach ($products as $product)
        {{ $product->name }}
    @endforeach
</div>
 
{{ $products->links() }}