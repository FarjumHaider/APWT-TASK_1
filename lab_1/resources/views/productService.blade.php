@extends('layouts.app')

@section('content')
    <h1>This is Product service Page</h1>
    
    @foreach($productData as $product)
    {{ $product }} <br>
    @endforeach
    
@endsection

