@extends('master')
@section('content')
<div class="container">
            <div class="row">
                <h3 class="text-center">Trending Products</h3>
                @foreach($products as $item)
                <div class="col-sm-4 text-center">
                    <img src="{{$item['gallery']}}" class="image img-fluid">
                    <h3>{{ $item['name']}}</h3>
                </div>
                @endforeach
            </div>
        
    </div>
</div>
@endsection