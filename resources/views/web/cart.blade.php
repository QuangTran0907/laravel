
@extends('layouts.web')
 @section('content')
<main>
    <section class="container stylization maincont">


        <ul class="b-crumbs">
            <li>
                <a href="index.html">
                    Home
                </a>
            </li>
            <li>
                <span>Cart</span>
            </li>
        </ul>
        <h1 class="main-ttl"><span>Cart</span></h1>
        <!-- Cart Items - start -->
        <form action="#">

            <div class="cart-items-wrap">
                <table class="cart-items">
                    <thead>
                    <tr>
                        <td class="cart-image">Photo</td>
                        <td class="cart-ttl">Products</td>
                        <td class="cart-price">Price</td>
                        <td class="cart-quantity">Quantity</td>
                        <td class="cart-summ">Sum</td>
                        <td class="cart-del">&nbsp;</td>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $sum = 0;
                        @endphp
                        @if ($cart_products != null)
                        @foreach ($cart_products as $item)
                            
                        <tr>
                            <td class="cart-image">
                                <a href="product.html">
                                    <img src="{{ asset('images/'.$item->product->image_path) }}" alt="Quod soluta corrupti">
                                </a>
                            </td>
                            <td class="cart-ttl">
                                <a href="product.html">{{ $item->product->name }}</a>
                            </td>
                            <td class="cart-price">
                                <b>{{ $item->product->price }} $</b>
                            </td>
                            <td class="cart-quantity">          
                                <p class="cart-qnt">
                                    <input value="{{ $item->amount }}" type="text">
                                    <a href="add_product/{{ $item->product->id }}" class="cart-plus"><i class="fa fa-angle-up"></i></a>
                                    <a href="minus_product/{{ $item->product->id }}" class="cart-minus"><i class="fa fa-angle-down"></i></a>
                                </p>
                            </td>
                            <td class="cart-summ">
                                <b>{{ $item->product->price*$item->amount }} $</b>
                                @php
                                    $sum = $sum + $item->product->price*$item->amount;
                                @endphp
                            </td>
                            <td class="cart-del">
                                <a href="delete/{{ $item->id }}" class="cart-remove"></a>
                            </td>
                        </tr>
                        @endforeach
                       
                        @endif
                        
                       
                    
                    </tbody>
                </table>
            </div>
            <ul class="cart-total">
                <li class="cart-summ">TOTAL: <b>{{ $sum }} $</b></li>
            </ul>
            <div class="cart-submit">
                <div class="cart-coupon">
                    <input placeholder="your coupon" type="text">
                    <a class="cart-coupon-btn" href="#"><img src="img/ok.png" alt="your coupon"></a>
                </div>
                <div>
                    <a href="/order" class="cart-submit-btn">Checkout</a>

                    <a href="/delete_all" class="cart-clear">Clear cart</a>
                </div>
                
               
            </div>
        </form>
        <!-- Cart Items - end -->

    </section>
</main>
@endsection