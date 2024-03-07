@foreach ($subCategories as $sub)
    <option value="{{ $sub->_id }}">{{ $sub->name }}</option>
@endforeach
