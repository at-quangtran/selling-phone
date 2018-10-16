@extends('layouts.frontend')
@section('content')
<div class="main">
    <div class="content">
        <div class="content_top">
            <div class="back-links">
                <p><a href="{{ route('home.index') }}">Home</a>/<a href="{{ route('categories.showproduct', $category->id) }}">{{$category->name}}</a></p>
            </div>
            <div class="clear"></div>
        </div>
        <div class="section group">
            <div class="cont-desc span_1_of_2">                
                <div class="content_bottom">
                    <div class="heading">
                        <h3>{{$category->name}}</h3>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="section group">
                    @foreach($products as $product)
                    <div class="grid_1_of_4 images_1_of_4">
                        <a href="{{ route('home.product', $product->id) }}">
                        @foreach($product->images as $image)
                        <img src="{{url($image->name)}}" alt="" height="200px" />
                        @endforeach
                        </a>
                    <h2>{{$product->name}}</h2>
                    <div class="price-details">
                        <div class="price-number">
                            <p><span class="rupees price-red">{{$product->price}}đ</span></p>
                        </div>
                        <div class="add-cart">                              
                            <h4><a href="preview.html">Add to Cart</a></h4>
                         </div>
                     <div class="clear"></div>
                    </div>
             
                </div>
                    @endforeach
                </div>
            </div>
            <div class="rightsidebar span_3_of_1">
                <h2>CATEGORIES</h2>
                <ul class="side-w3ls">
                    @foreach($categories as $category)
                    <li><a href="{{route('categories.showproduct', $category->id)}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection