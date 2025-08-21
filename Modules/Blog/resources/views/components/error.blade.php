@props(['error'])
@if ($error)
    <ul {{ $attributes->merge(['class' => '','style'=>'color:red;']) }}>
        @foreach ((array) $error as $item)
            <p>{{ $item }}</p>
        @endforeach
    </ul>
@endif
