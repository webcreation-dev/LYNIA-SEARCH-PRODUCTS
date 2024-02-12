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
                            <input wire:model.live="searchBook" placeholder="Rechercher un produit..." type="text">
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
                                                <a href="#" data-toggle="modal" data-target="#modal_box{{ $product->id }}" title="Voir le produit">
                                                    <i class="ion-ios-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_ratting">
                                                <ul>
                                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <h3><a href="product-details.html"> {{$product->name}} </a></h3>
                                            <div class="product_price">
                                                <span class="current_price"> {{$product->price}} CFA  </span>
                                            </div>
                                            <div class="product_action">
                                                <ul>
                                                    <li class="product_cart"><a  href="#" data-toggle="modal" data-target="#modal_box{{ $product->id }}" title="Voir le produit">Voir le produit</a></li>
                                                    <li class="add_links"><a href="#" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                    <li class="add_links"><a href="#" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="modal_box{{ $product->id }}" tabindex="-1" role="dialog"  aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                            <div class="modal_body">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-lg-5 col-md-5 col-sm-12">
                                                            <div class="modal_tab">
                                                                <div class="tab-content product-details-large">
                                                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" >
                                                                        <div class="modal_tab_img">
                                                                            <a href="#">
                                                                                @if ($product->images->isNotEmpty())
                                                                                    <img src= "{{ $product->images->first()->image }}" alt="">
                                                                                @endif
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    {{-- <div class="tab-pane fade" id="tab2" role="tabpanel">
                                                                        <div class="modal_tab_img">
                                                                            <a href="#"><img src="assets/img/product/product45.jpg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                                                                        <div class="modal_tab_img">
                                                                            <a href="#"><img src="assets/img/product/product46.jpg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="tab4" role="tabpanel">
                                                                        <div class="modal_tab_img">
                                                                            <a href="#"><img src="assets/img/product/product47.jpg" alt=""></a>
                                                                        </div>
                                                                    </div>

                                                                    @foreach ($product->images as $image)
                                                                        <div class="tab-pane fade {{ ($loop->index == 1) ? 'show active' : ''}} " id="tab{{$loop->index}}" role="tabpanel">
                                                                            <div class="modal_tab_img">
                                                                                <a href="#"><img src="{{ $image->image }}" alt=""></a>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach --}}
                                                                </div>
                                                                <div class="modal_tab_button">
                                                                    <ul class="nav product_navactive owl-carousel" role="tablist">
                                                                        {{-- <li >
                                                                            <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="assets/img/cart/cart5.jpg" alt=""></a>
                                                                        </li>
                                                                        <li>
                                                                             <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="assets/img/cart/cart6.jpg" alt=""></a>
                                                                        </li>
                                                                        <li>
                                                                           <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="assets/img/cart/cart7.jpg" alt=""></a>
                                                                        </li>
                                                                        <li>
                                                                           <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="assets/img/cart/cart8.jpg" alt=""></a>
                                                                        </li> --}}

                                                                        @foreach ($product->images as $image)
                                                                            <li >
                                                                                <a class="nav-link {{ ($loop->index == 1) ? 'active' : ''}}" data-toggle="tab" href="#tab1" role="tab{{$loop->index}}" aria-controls="tab{{$loop->index}}" aria-selected="false">
                                                                                    <img src="{{ $image->image }}" alt="">
                                                                                </a>
                                                                            </li>

                                                                        @endforeach

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 col-md-7 col-sm-12">
                                                            <div class="modal_right">
                                                                <div class="modal_title mb-10">
                                                                    <h2> {{ $product->name }} </h2>
                                                                </div>
                                                                <div class="modal_price mb-10">
                                                                    <span class="new_price"> {{ $product->price }} </span>
                                                                </div>


                                                                <div class="modal_description mb-15">
                                                                    <p>
                                                                       {{ strlen($product->description) > 750 ? substr($product->description, 0, 750) . '...' : substr($product->description, 0, 800); }}
                                                                    </p>
                                                                </div>
                                                                <div class="modal_social">
                                                                    <h2>Share this product</h2>
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6"></div>
                        <div class="col-6">
                            <div class="pagination_style fullwidth">
                                <ul>
                                    {{-- <li class="current_number">1</li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">»</a></li> --}}
                                    {{ $products->links() }}
                                </ul>
                            </div>
                        </div>

                    </div>


                </div>
            </div>

        </div>
    </div>

</div>


<!-- modal area start-->

{{-- @foreach ($products as $product )

@endforeach --}}
<!-- modal area start-->
