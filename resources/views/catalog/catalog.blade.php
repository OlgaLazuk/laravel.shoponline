@extends('layouts.shop')
@section('content')
    {{--   @dump($showWishList)--}}



    <div class="shop_sidebar_area">

        <!-- ##### Single Widget ##### -->
        <div class="widget catagory mb-50">
            <!-- Widget Title -->
            <h6 class="widget-title mb-30"><a href="{{route('catalog')}}">Категории</a></h6>

            <!--  Catagories  -->
            <div class="catagories-menu">
                <ul>
                    @foreach($categories as $category)
                        <li class="active"><a
                                href="{{route('catalog_category', [$category->id])}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>

        <!-- ##### Single Widget ##### -->
        <div class="widget brands mb-50">
            <!-- Widget Title -->
            <h6 class="widget-title mb-30">Бренды</h6>

            <div class="widget-desc">
                <!-- Single Form Check -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="amado">
                    <label class="form-check-label" for="amado">Amado</label>
                </div>
                <!-- Single Form Check -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="ikea">
                    <label class="form-check-label" for="ikea">Ikea</label>
                </div>
                <!-- Single Form Check -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="furniture">
                    <label class="form-check-label" for="furniture">Furniture Inc</label>
                </div>
                <!-- Single Form Check -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="factory">
                    <label class="form-check-label" for="factory">The factory</label>
                </div>
                <!-- Single Form Check -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="artdeco">
                    <label class="form-check-label" for="artdeco">Artdeco</label>
                </div>
            </div>
        </div>

        <!-- ##### Single Widget ##### -->
        <div class="widget color mb-50">
            <!-- Widget Title -->
            <h6 class="widget-title mb-30">Color</h6>

            <div class="widget-desc">
                <ul class="d-flex">
                    <li><a href="#" class="color1"></a></li>
                    <li><a href="#" class="color2"></a></li>
                    <li><a href="#" class="color3"></a></li>
                    <li><a href="#" class="color4"></a></li>
                    <li><a href="#" class="color5"></a></li>
                    <li><a href="#" class="color6"></a></li>
                    <li><a href="#" class="color7"></a></li>
                    <li><a href="#" class="color8"></a></li>
                </ul>
            </div>
        </div>

        <!-- ##### Single Widget ##### -->
        <div class="widget price mb-50">
            <!-- Widget Title -->
            <h6 class="widget-title mb-30">Price</h6>
            <div class="widget-desc">
                <div class="slider-range">
                    <div data-min="10" data-max="1000" data-unit="$"
                         class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                         data-value-min="10" data-value-max="1000" data-label-result="">
                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                    </div>
                    <div class="range-price">$10 - $1000</div>
                </div>
            </div>
        </div>
    </div>
    <div class="amado_product_area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="product-topbar d-xl-flex align-items-end justify-content-between">
                        <!-- Total Products -->
                        <div class="total-products">
                            <p>Показать 1-6 из 12</p>
                            <div class="view d-flex">
                                <a href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <!-- Sorting -->

                        <div class="product-sorting d-flex">

                            <div class="sort-by-date d-flex align-items-center mr-15">
                                <p>Sort by</p>

                                <form action="{{route('sort')}}" method="get">
                                    @csrf


                                        <select name="select" id="sortBydate">
                                            <option value="value">Date</option>
                                            <option value="value">Newest</option>
                                            <option value="value">Popular</option>
                                        </select>



                                </form>
                            </div>



                            <div class="view-product d-flex align-items-center">
                                <p>View</p>
                                <form action="#" method="get">
                                    <select name="select" id="viewProduct">
                                        <option value="value">6</option>
                                        <option value="value">12</option>
                                        <option value="value">24</option>
                                        <option value="value">48</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            @foreach($products as $product)
                <!-- Single Product Area -->
                    <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{$product->pagePhoto}}" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/product2.jpg" alt="">
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">${{$product->price}}</p>
                                    <a href="product-details.html">
                                        <h6>{{$product->name}}</h6>
                                    </a>
                                </div>


                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>

                                    <div class="cart">
                                        <form action="{{route('add_to_wishlist')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{$product->id}}">
                                            <button type="submit" class="btn btn-light"><a data-toggle="tooltip"
                                                                                           data-placement="left"
                                                                                           title="Добавить в избранное"><img
                                                        src="{{asset('img/core-img/favorites.png')}}" alt=""></a>
                                            </button>
                                        </form>
                                    </div>

                                    <div class="cart">
                                        <form action="{{route('add_to_cart')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{$product->id}}">
                                            <button type="submit" class="btn btn-light"><a data-toggle="tooltip"
                                                                                           data-placement="left"
                                                                                           title="Добавить в корзину"><img
                                                        src="{{asset('img/core-img/cart.png')}}" alt=""></a>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Pagination -->
                    <nav aria-label="navigation">
                        <ul class="pagination justify-content-end mt-50">
                            {{ $products->links("pagination::bootstrap-4") }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection