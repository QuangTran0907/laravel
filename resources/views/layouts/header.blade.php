@php
use App\Models\User;
use App\Models\Cart_product;
use App\Models\Cart;


   
    $user = null;
    $cart = null;
    if(Auth::check()){
        $user = User::find(\auth()->id());
        $cart = Cart::where('user_id',$user->id)->first();
    }
   
   
    
    if($cart!=null)
    {
        $cart_product = Cart_product::where('cart_id',$cart->id)->get();
    }else{
        $cart_product = null;
    }
   


@endphp
<header class="header">
  <!-- Topbar - start -->
  <div class="header_top">
      <div class="container">
          <ul class="contactinfo nav nav-pills">
              <li>
                  <i class='fa fa-phone'></i> 0999999999
              </li>
              <li>
                  <i class="fa fa-envelope"></i> nhom06@gmail.com
              </li>
          </ul>
          <!-- Social links -->
          <ul class="social-icons nav navbar-nav">
              <li>
                  <a href="http://facebook.com" rel="nofollow" target="_blank">
                      <i class="fa fa-facebook"></i>
                  </a>
              </li>
              <li>
                  <a href="http://google.com" rel="nofollow" target="_blank">
                      <i class="fa fa-google-plus"></i>
                  </a>
              </li>
              <li>
                  <a href="http://twitter.com" rel="nofollow" target="_blank">
                      <i class="fa fa-twitter"></i>
                  </a>
              </li>
              <li>
                  <a href="http://vk.com" rel="nofollow" target="_blank">
                      <i class="fa fa-vk"></i>
                  </a>
              </li>
              <li>
                  <a href="http://instagram.com" rel="nofollow" target="_blank">
                      <i class="fa fa-instagram"></i>
                  </a>
              </li>
          </ul>		</div>
  </div>
  <!-- Topbar - end -->

  <!-- Logo, Shop-menu - start -->
  <div class="header-middle">
      <div class="container header-middle-cont">
          <div class="toplogo">
              <a href="/">
                  <img src="{{ asset('img/logo.png') }}" alt="AllStore - MultiConcept eCommerce Template">
              </a>
          </div>
          <div class="shop-menu">
              <ul>

                  

                

                  <li class="topauth">
                    @if (Auth::check())
                    
                        @if ($user->role==1)
                        <a href="/products">
                            <i class="fa fa-group"></i>
                        <span class="shop-menu-ttl">Admin</span>
                        @endif
                        <a href="/logout">

                        <i class="fa fa-sign-out"></i>
                        <span class="shop-menu-ttl">Logout</span>
                    </a>
                    @else
                    <a href="/register">
                        <i class="fa fa-lock"></i>
                        <span class="shop-menu-ttl">Registration</span>
                    </a>
                    <a href="/login">
                        <span class="shop-menu-ttl">Login</span>
                    </a>
                    @endif
                      
                  </li>

                  <li>
                      <div class="h-cart">
                          <a href="/cart">
                              <i class="fa fa-shopping-cart"></i>
                              <span class="shop-menu-ttl">Cart</span>
                              @if ($cart_product!=null)
                              (<b>{{  $cart_product->count()}}</b>)
                              @else
                              (<b>0</b>)
                              @endif
                          </a>
                      </div>
                  </li>

              </ul>
          </div>
      </div>
  </div>
  <!-- Logo, Shop-menu - end -->

  <!-- Topmenu - start -->
  <div class="header-bottom">
      <div class="container">
          <nav class="topmenu">

              <!-- Catalog menu - start -->
              <div class="topcatalog">
                  <a class="topcatalog-btn" href="catalog-list.html"><span>All</span> catalog</a>
                  <ul class="topcatalog-list">
                      <li>
                          <a href="catalog-list.html">
                              Women
                          </a>
                      </li>
                      <li>
                          <a href="catalog-list.html">
                              Men
                          </a>
                          
                      </li>
                      
                  </ul>
              </div>
              <!-- Catalog menu - end -->

              <!-- Main menu - start -->
              <button type="button" class="mainmenu-btn">Menu</button>

              <ul class="mainmenu">
                  <li>
                      <a href="index.html" class="active">
                          Home
                      </a>
                  </li>
 
                  <li class="menu-item-has-children">
                      <a href="product.html">
                          Product <i class="fa fa-angle-down"></i>
                      </a>
                      <ul class="sub-menu">
                          <li>
                              <a href="product.html">
                                  Product - Style 1 (Slider)
                              </a>
                          </li>
                          <li>
                              <a href="product-2.html">
                                  Product - Style 2 (Scroll)
                              </a>
                          </li>
                      </ul>
                  </li>
              
              </ul>
              <!-- Main menu - end -->

              <!-- Search - start -->
              <div class="topsearch">
                  <a id="topsearch-btn" class="topsearch-btn" href="#"><i class="fa fa-search"></i></a>
                  <form class="topsearch-form" action="#">
                      <input type="text" placeholder="Search products">
                      <button type="submit"><i class="fa fa-search"></i></button>
                  </form>
              </div>
              <!-- Search - end -->

          </nav>		</div>
  </div>
  <!-- Topmenu - end -->

</header>