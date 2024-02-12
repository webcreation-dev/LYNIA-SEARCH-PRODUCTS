
<!doctype html>
<html class="no-js" lang="zxx">
    @include('layouts.head')
    <body>
        @include('layouts.header')



            <!--single product wrapper start-->
            <div class="single_product_wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6">
                            <div class="product_gallery">
                                <div class="tab-content produc_thumb_conatainer">

                                    {{-- @foreach ($product->images as $image)
                                        <div class="tab-pane fade {{ ($loop->index == 1) ? 'show active' : ''}} " id="p_tab{{$loop->index}}" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{ asset('$image->image') }}" alt=""></a>
                                            </div>
                                        </div>

                                    @endforeach --}}

                                    @foreach ($product->images as $image)
                                        <div class="tab-pane fade {{ ($loop->index == 1) ? 'show active' : ''}}" id="p_tab{{$loop->index}}" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{ asset($image->image) }}" alt=""></a>
                                            </div>
                                        </div>
                                    @endforeach


                                    {{-- <div class="tab-pane fade show active" id="p_tab1" role="tabpanel" >
                                        <div class="modal_img">
                                            <a href="#"><img src="{{asset('assets/img/product/bigimg1.jpg')}}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="p_tab2" role="tabpanel">
                                        <div class="modal_img">
                                            <a href="#"><img src="{{asset('assets/img/product/bigimg2.jpg')}}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="p_tab3" role="tabpanel">
                                        <div class="modal_img">
                                            <a href="#"><img src="{{asset('assets/img/product/bigimg3.jpg')}}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="p_tab4" role="tabpanel">
                                        <div class="modal_img">
                                            <a href="#"><img src="{{asset('assets/img/product/bigimg4.jpg')}}" alt=""></a>
                                        </div>
                                    </div> --}}
                                </div>

                                <div class="product_thumb_button">
                                    <ul class="nav product_d_button" role="tablist">
                                        {{-- <li >
                                            <a class="active" data-toggle="tab" href="#p_tab1" role="tab" aria-controls="p_tab1" aria-selected="false"><img src="{{asset('assets/img/cart/cart10.jpg')}}" alt=""></a>
                                        </li>
                                        <li>
                                             <a data-toggle="tab" href="#p_tab2" role="tab" aria-controls="p_tab2" aria-selected="false"><img src="{{asset('assets/img/cart/cart11.jpg')}}" alt=""></a>
                                        </li>
                                        <li>
                                           <a data-toggle="tab" href="#p_tab3" role="tab" aria-controls="p_tab3" aria-selected="false"><img src="{{asset('assets/img/cart/cart9.jpg')}}" alt=""></a>
                                        </li>
                                        <li>
                                           <a data-toggle="tab" href="#p_tab4" role="tab" aria-controls="p_tab4" aria-selected="false"><img src="{{asset('assets/img/cart/cart12.jpg')}}" alt=""></a>
                                        </li> --}}

                                        @foreach ($product->images as $image)
                                            <li >
                                                <a class="{{ ($loop->index == 1) ? 'active' : ''}}" data-toggle="tab" href="#p_tab{{$loop->index}}" role="tab" aria-selected="false">
                                                    <img src="{{ asset('$image->image') }}" alt="">
                                                </a>
                                            </li>

                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="product_details">
                                <h3>{{ $product->name }}</h3>
                                <div class="product_price">
                                    <span class="current_price">{{ $product->price }} CFA</span>
                                    {{-- <span class="old_price">$28.00</span> --}}
                                </div>
                                <div class="product_ratting">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="#">1 Review</a></li>
                                    </ul>
                                </div>
                               <div class="product_description">
                                   <p>
                                        {{ strlen($product->description) > 750 ? substr($product->description, 0, 750) . '...' : substr($product->description, 0, 800); }}
                                    </p>
                               </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--single product wrapper end-->


            @include('layouts.footer')



		<!-- all js here -->
        <script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('assets/js/popper.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
</html>
