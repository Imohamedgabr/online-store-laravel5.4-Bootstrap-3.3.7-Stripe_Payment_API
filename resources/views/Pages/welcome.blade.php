
@extends('main')
<!-- main is the name of the page under views -->

@section('title',' | HomePage ')

@section('content')


    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Shop Name</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Category 1</a>
                    <a href="#" class="list-group-item">Category 2</a>
                    <a href="#" class="list-group-item">Category 3</a>
                    
                    {{-- serch form --}}
                    <form action="" class="search" role="search">
                        <div class="input-group">
                            <input type="text" name="term" id="term" class="form-control" placeholder="Search for item">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-9">
                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>
                
                
                <div class="row">
                @foreach($products as $product)
                    
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="{{$product->imagePath}} " alt="">
                            <div class="caption">
                                <h4 class="pull-right">${{$product->price}}</h4>
                                <h4><a href="#">{{$product->title}}</a>
                                </h4>
                                <p>{{$product->description}} </p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                       
                    </div>
                    @endforeach
                    

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Have a question?</a>
                        </h4>
                        <p>Please Contact Us</p>
                        <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">Contact</a>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->            

@endsection 