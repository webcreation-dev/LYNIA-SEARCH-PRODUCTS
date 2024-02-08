<div>
    <header class="header_area">

        <div class="header_top">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6 col-md-6">
                        <div class="welcome_text">
                            <p>High Tech, Sport, Beauté, Bien-être et santé.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="top_right text-right">
                            <ul>
                                <li class="currency"><a href="#">CFA</a>
                                </li>
                                <li class="language"><a href="#"><img src="assets/img/logo/cigar.jpg" alt=""> Bénin - France</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header_middel">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4">
                        <div class="logo">
                            <a href="index.html"><img src="assets/lynia.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-5">
                        <div class="search_bar">
                            <form action="#">
                            <input wire:model.live="searchBook" placeholder="Search entire store here..." type="text">
                            <button type="submit"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="cart_area">
                            <div class="wishlist_link">
                                <a href="#"><i class="ion-ios-heart-outline"></i></a>
                            </div>
                            <div class="cart_link">
                                <a href="#"><i class="ion-ios-cart-outline"></i>Panier</a>
                                <span class="cart_count">2</span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="shop_wrapper shop_fullwidth">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="shop_toolbar">

                        <div class="list_button">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#large" role="tab" aria-controls="large" aria-selected="true"><i class="ion-grid"></i></a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false"><i class="ion-android-menu"></i></a>
                                </li>
                            </ul>
                        </div>

                        <div class="select_option">
                            <form action="#">
                                <label>Filtrer par</label>
                                <select name="orderby" id="short1">
                                    <option selected value="1">Position</option>
                                    <option value="1">Price: Lowest</option>
                                    <option value="1">Price: Highest</option>
                                    <option value="1">Product Name:Z</option>
                                    <option value="1">Sort by price:low</option>
                                    <option value="1">Product Name: Z</option>
                                    <option value="1">In stock</option>
                                    <option value="1">Product Name: A</option>
                                    <option value="1">In stock</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="shop_tab_product">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="large" role="tabpanel">
                        <div class="row">
                            @foreach ( $products as $product )
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a href="product-details.html">


                                                @if ($product->images->isNotEmpty())
                                                    <img src= "{{ $product->images->first()->image }}" alt="">
                                                @else
                                                <img src= "assets/img/product/product6.jpg" alt="">
                                                @endif

                                            </a>
                                            <div class="btn_quickview">
                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_ratting">
                                                <ul>
                                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <h3><a href="product-details.html"> {{$product->name}} </a></h3>
                                            <div class="product_price">
                                                <span class="current_price"> {{$product->price}} CFA  </span>
                                            </div>
                                            <div class="product_action">
                                                <ul>
                                                    <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                    <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                    <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>

</div>
