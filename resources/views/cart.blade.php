@extends('layouts.shop')
@section('content')

    <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="cart-title mt-50">
                        <h2>ВАША КОРЗИНА</h2>
                    </div>

                    <div class="cart-table clearfix">
                        <table class="table table-responsive">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Товар</th>
                                <th>Стоимость</th>
                                <th>Количество</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>

                                    <td class="cart_product_img">
                                        <a href="#"><img src="{{$product->pagePhoto}}" alt="Product"></a>
                                    </td>
                                    <td class="cart_product_desc">
                                        <h5>{{$product->name}}</h5>
                                    </td>
                                    <td class="price">
                                        <span>${{$product->price}}</span>
                                    </td>


                                    <td class="qty">
                                        <div class="qty-btn d-flex">
{{--                                            <p>Кол-во</p>--}}

                                            <div class="quantity">

                                                <span class="qty-minus"
                                                      onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i
                                                        class="fa fa-minus" aria-hidden="true"></i></span>

                                                <input type="number" class="qty-text" id="qty" step="1" min="1"
                                                       max="300" name="quantity" value="1">
                                                <span class="qty-plus"
                                                      onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i
                                                        class="fa fa-plus" aria-hidden="true"></i></span>
                                            </div>
                                            <form action="{{route('delete_to_cart', ['id' => $product->id])}}" method="post">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                                <button type="submit" class="btn btn-light"><a data-toggle="tooltip"
                                                                                               data-placement="left"
                                                                                               title="Удалить товар"><img
                                                            src="{{asset('img/core-img/delete_image.png')}}" alt=""></a>
                                                </button>

                                            </form>


                                        </div>
                                    </td>

                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="cart-summary">
                        <h5>Cart Total</h5>
                        <ul class="summary-table">
                            <li><span>subtotal:</span> <span>$140.00</span></li>
                            <li><span>delivery:</span> <span>Free</span></li>
                            <li><span>total:</span> <span>$140.00</span></li>
                        </ul>
                        <div class="cart-btn mt-100">
                            <a href="cart.html" class="btn amado-btn w-100">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
