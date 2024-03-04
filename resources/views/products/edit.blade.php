<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form @if ($product)action="/product/{{$product->_id}}" @else action="/product"@endif method="POST">
        @csrf
        
        @if ($product)
            @method('PUT')
        @endif

        <div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="name" value="{{$product->name ?? ''}}">
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" placeholder="description" rows="20">{{$product->description ?? ''}}</textarea>
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" placeholder="price" value="{{$product->price ?? ''}}">
        </div>
        <div>
            <label for="imageUrl">Image Url</label>
            <input type="text" name="imageUrl" placeholder="imageUrl" value="{{$product->imageUrl ?? ''}}">
        </div>
        <div>
            <label for="amount">Amount</label>
            <input type="number" name="amount" placeholder="amount" value="{{$product->amount ?? ''}}">
        </div>
        <div>
            <label for="availability">Available</label>
            @if($product)
                <input type="hidden" name="availability" value="0">
            @endif
                <input type="checkbox" name="availability" placeholder="availability" @if($product && $product->availability) checked @endif>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>