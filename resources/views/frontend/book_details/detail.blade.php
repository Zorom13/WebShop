@extends('frontend.app')

@section('Book Details', $item->id)

@section('content')
    <div class="detail-container">
        <div class="body-content outer-top-xs">
            <div class='container'>
                <div class='row single-product'>
                    <div class="breadcrumb">
                        <div class="container">
                            <div class="breadcrumb-inner">
                                <ul class="list-inline list-unstyled">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ route('item.showItemPage') }}">Shop</a></li>
                                    <li class="active">Book</li>

                                </ul>
                            </div>
                            <!-- /.breadcrumb-inner -->
                        </div>
                        <!-- /.container -->
                    </div>

                    <div class='col-md-3 sidebar'>
                        <div class="sidebar-module-container">
                            <div class="home-banner outer-top-n">
                                <img src="{{ asset('frontend/assets/img/' . $item->image_name) }}" alt="Image">
                            </div>
                        </div>
                    </div><!-- /.sidebar -->
                    <div class='mar col-md-9'>
                        <div class="detail-block">
                            <div class="row  wow fadeInUp">
                                <div class='col-sm-6 col-md-7 product-info-block'>
                                    <div class="product-info">
                                        <h1 class="name">{{ $item->title }}</h1>
                                        <p>{{ $item->author }}</p>

                                        <div class="rating-reviews m-t-20">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="rating rateit-small"></div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="reviews">
                                                        <a href="#" class="lnk">(13 Reviews)</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.row -->
                                        </div><!-- /.rating-reviews -->

                                        <div class="stock-container info-container m-t-10">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <div class="stock-box">
                                                        <span class="label">Availability </span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="stock-box">
                                                        <span class="value">In Stock</span>
                                                    </div>
                                                </div>
                                            </div><!-- /.row -->
                                        </div><!-- /.stock-container -->

                                        <div class="description-container m-t-20">
                                            {{ $item->description }}
                                        </div><!-- /.description-container -->

                                        <div class="price-container info-container m-t-20">
                                            <div class="row">


                                                <div class="col-sm-6">
                                                    <div class="price-box">
                                                        <span class="price">???45.99</span>
                                                        <span class="price-strike">{{ $item->price }}</span>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="favorite-button m-t-10">
                                                        <a class="btn-primary" data-toggle="tooltip" data-placement="right"
                                                            title="Wishlist" href="#">
                                                            <i class="fa-solid fa-heart"></i>


                                                        </a>
                                                        <a class="btn-primary" data-toggle="tooltip" data-placement="right"
                                                            title="Share" href="#">
                                                            <i class="fa-solid fa-share-nodes"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div><!-- /.row -->
                                        </div><!-- /.price-container -->

                                        <div class="quantity-container info-container">
                                            <div class="row">

                                                <div class="col-sm-2">
                                                    <span class="label">Qty :</span>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="cart-quantity">
                                                        <div class="quant-input">
                                                            <input type="number" value="1" name="quantity"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-7">
                                                    {{-- @if ($cart->where('id', $item->id)->count())
                                                        In Cart
                                                    @else --}}
                                                    <form action="{{ route('orderItem.index') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                                                        <input type="hidden" name="title" value="{{ $item->title }}">
                                                        <input type="hidden" name="price" value="{{ $item->price }}">


                                                        <button type="submit" class=" btn-primary"> ADD TO
                                                            CART</button>
                                                    </form>
                                                    {{-- @endif --}}
                                                </div>


                                            </div><!-- /.row -->
                                        </div><!-- /.quantity-container -->






                                    </div><!-- /.product-info -->
                                </div><!-- /.col-sm-7 -->
                            </div><!-- /.row -->
                        </div>

                        <div class="product-tabs inner-bottom-xs  wow fadeInUp">
                            <div class="row">
                                <div class="col-sm-3">
                                    <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                                        <li><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
                                        <li><a data-toggle="tab" href="#review">REVIEW</a></li>
                                        <li><a data-toggle="tab" href="#tags">TAGS</a></li>
                                    </ul><!-- /.nav-tabs #product-tabs -->
                                </div>
                                <div class="col-sm-9">

                                    <div class="tab-content">

                                        <div id="description" class="tab-pane in active">
                                            <div class="product-tab">{{ $item->description }}
                                                <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit, sed
                                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                                    in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                                    officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat.<br><br> Duis aute irure dolor in reprehenderit in voluptate
                                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                                    mollit anim id est laborum.</p>
                                            </div>
                                        </div><!-- /.tab-pane -->

                                        <div id="review" class="tab-pane">
                                            <div class="product-tab">

                                                <div class="product-reviews">
                                                    <h4 class="title">Customer Reviews</h4>

                                                    <div class="reviews">
                                                        <div class="review">
                                                            <div class="review-title"><span class="summary">We love
                                                                    this
                                                                    product</span><span class="date"><i
                                                                        class="fa fa-calendar"></i><span>1 days
                                                                        ago</span></span></div>
                                                            <div class="text">"Lorem ipsum dolor sit amet,
                                                                consectetur
                                                                adipiscing elit.Aliquam suscipit."</div>
                                                        </div>

                                                    </div><!-- /.reviews -->
                                                </div><!-- /.product-reviews -->



                                                <div class="product-add-review">
                                                    <h4 class="title">Write your own review</h4>
                                                    <div class="review-table">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="cell-label">&nbsp;</th>
                                                                        <th>1 star</th>
                                                                        <th>2 stars</th>
                                                                        <th>3 stars</th>
                                                                        <th>4 stars</th>
                                                                        <th>5 stars</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="cell-label">Quality</td>
                                                                        <td><input type="radio" name="quality"
                                                                                class="radio" value="1"></td>
                                                                        <td><input type="radio" name="quality"
                                                                                class="radio" value="2"></td>
                                                                        <td><input type="radio" name="quality"
                                                                                class="radio" value="3"></td>
                                                                        <td><input type="radio" name="quality"
                                                                                class="radio" value="4"></td>
                                                                        <td><input type="radio" name="quality"
                                                                                class="radio" value="5"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="cell-label">Price</td>
                                                                        <td><input type="radio" name="quality"
                                                                                class="radio" value="1"></td>
                                                                        <td><input type="radio" name="quality"
                                                                                class="radio" value="2"></td>
                                                                        <td><input type="radio" name="quality"
                                                                                class="radio" value="3"></td>
                                                                        <td><input type="radio" name="quality"
                                                                                class="radio" value="4"></td>
                                                                        <td><input type="radio" name="quality"
                                                                                class="radio" value="5"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="cell-label">Value</td>
                                                                        <td><input type="radio" name="quality"
                                                                                class="radio" value="1"></td>
                                                                        <td><input type="radio" name="quality"
                                                                                class="radio" value="2"></td>
                                                                        <td><input type="radio" name="quality"
                                                                                class="radio" value="3"></td>
                                                                        <td><input type="radio" name="quality"
                                                                                class="radio" value="4"></td>
                                                                        <td><input type="radio" name="quality"
                                                                                class="radio" value="5"></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table><!-- /.table .table-bordered -->
                                                        </div><!-- /.table-responsive -->
                                                    </div><!-- /.review-table -->

                                                    <div class="review-form">
                                                        <div class="form-container">
                                                            <form role="form" class="cnt-form">

                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="exampleInputName">Your Name <span
                                                                                    class="astk">*</span></label>
                                                                            <input type="text" class="form-control txt"
                                                                                id="exampleInputName" placeholder="">
                                                                        </div><!-- /.form-group -->
                                                                        <div class="form-group">
                                                                            <label for="exampleInputSummary">Summary <span
                                                                                    class="astk">*</span></label>
                                                                            <input type="text" class="form-control txt"
                                                                                id="exampleInputSummary" placeholder="">
                                                                        </div><!-- /.form-group -->
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="exampleInputReview">Review <span
                                                                                    class="astk">*</span></label>
                                                                            <textarea class="form-control txt txt-review" id="exampleInputReview" rows="4" placeholder=""></textarea>
                                                                        </div><!-- /.form-group -->
                                                                    </div>
                                                                </div><!-- /.row -->

                                                                <div class="action text-right">
                                                                    <button class="btn btn-primary btn-upper">SUBMIT
                                                                        REVIEW</button>
                                                                </div><!-- /.action -->

                                                            </form><!-- /.cnt-form -->
                                                        </div><!-- /.form-container -->
                                                    </div><!-- /.review-form -->

                                                </div><!-- /.product-add-review -->

                                            </div><!-- /.product-tab -->
                                        </div><!-- /.tab-pane -->

                                        <div id="tags" class="tab-pane">
                                            <div class="product-tag">

                                                <h4 class="title">Product Tags</h4>
                                                <form role="form" class="form-inline form-cnt">
                                                    <div class="form-container">

                                                        <div class="form-group">
                                                            <label for="exampleInputTag">Add Your Tags: </label>
                                                            <input type="email" id="exampleInputTag"
                                                                class="form-control txt">


                                                        </div>

                                                        <button class="btn btn-upper btn-primary" type="submit">ADD
                                                            TAGS</button>
                                                    </div><!-- /.form-container -->
                                                </form><!-- /.form-cnt -->

                                                <form role="form" class="form-inline form-cnt">
                                                    <div class="form-group">
                                                        <label>&nbsp;</label>
                                                        <span class="text col-md-offset-3">Use spaces to separate tags. Use
                                                            single quotes (') for phrases.</span>
                                                    </div>
                                                </form><!-- /.form-cnt -->

                                            </div><!-- /.product-tab -->
                                        </div><!-- /.tab-pane -->

                                    </div><!-- /.tab-content -->
                                </div><!-- /.col -->
                            </div><!-- /.row -->
                        </div><!-- /.product-tabs -->


                    </div><!-- /.col -->
                    <div class="clearfix"></div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.body-content -->
        <!-- ============================================================= CONTENT : END ============================================================= -->
    </div>
@endsection
