@extends('frontend.main_master')
@section('content')
@section('title')
@endsection
</div>
</div>
</div>
<div class="best-deal wow fadeInUp outer-bottom-xs">
    <h3 class="section-title">Best seller</h3>
    <div class="sidebar-widget-body outer-top-xs">
        <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
            <div class="container ml-4">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div class="card">
                            <div class="card-header">{{ __('Feedback List') }}</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Category</th>
                                                <th>Vote Count</th>
                                                <th>Submitted by</th>
                                                <th>FeedBack</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($feedbackItems as $feedbackItem)
                                                <tr>
                                                    <td>{{ $feedbackItem->title }}</td>
                                                    <td>{{ $feedbackItem->category }}</td>
                                                    <td>{{ $feedbackItem->vote_count }}</td>
                                                    <td>{{ $feedbackItem->user->name }}</td>
                                                    <td>
                                                        <a href="{{ route('feedback',Crypt::encrypt($feedbackItem->id)) }}" class="btn btn-info" title="Feedback"><i class="fa fa-commenting-o"></i></a>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                {{ $feedbackItems->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <!-- /.sidebar-widget-body -->
</div>
<!-- /.sidebar-widget -->
<!-- ============================================== BEST SELLER : END ============================================== -->

<!-- ============================================== BLOG SLIDER ============================================== -->

<!-- /.section -->
<!-- ============================================== BLOG SLIDER : END ============================================== -->

<!-- ============================================== FEATURED PRODUCTS ============================================== -->

<!-- /.section -->
<!-- ============================================== FEATURED PRODUCTS : END ============================================== -->

</div>
<!-- /.homebanner-holder -->
<!-- ============================================== CONTENT : END ============================================== -->
</div>
<!-- /.row -->
<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<div id="brands-carousel" class="logo-slider wow fadeInUp">
    <div class="logo-slider-inner">
        <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
            <div class="item m-t-15"> <a href="#" class="image"> <img
                        data-echo="{{ asset('frontend/assets/images/brands/brand1.png') }}"
                        src="assets/images/blank.gif" alt=""> </a> </div>
            <!--/.item-->

            <div class="item m-t-10"> <a href="#" class="image"> <img
                        data-echo="{{ asset('frontend/assets/images/brands/brand2.png') }}"
                        src="{{ asset('frontend/assets/images/blank.gif') }}" alt=""> </a> </div>
            <!--/.item-->

            <div class="item"> <a href="#" class="image"> <img
                        data-echo="{{ asset('frontend/assets/images/brands/brand3.png') }}"
                        src="{{ asset('frontend/assets/images/blank.gif') }}" alt=""> </a> </div>
            <!--/.item-->

            <div class="item"> <a href="#" class="image"> <img
                        data-echo="{{ asset('frontend/assets/images/brands/brand4.png') }}"
                        src="{{ asset('frontend/assets/images/blank.gif') }}" alt=""> </a> </div>
            <!--/.item-->

            <div class="item"> <a href="#" class="image"> <img
                        data-echo="{{ asset('frontend/assets/images/brands/brand5.png') }}"
                        src="{{ asset('frontend/assets/images/blank.gif') }}" alt=""> </a> </div>
            <!--/.item-->

            <div class="item"> <a href="#" class="image"> <img
                        data-echo="{{ asset('frontend/assets/images/brands/brand6.png') }}"
                        src="{{ asset('frontend/assets/images/blank.gif') }}" alt=""> </a> </div>
            <!--/.item-->

            <div class="item"> <a href="#" class="image"> <img
                        data-echo="{{ asset('frontend/assets/images/brands/brand2.png') }}"
                        src="{{ asset('frontend/assets/images/blank.gif') }}" alt=""> </a> </div>
            <!--/.item-->

            <div class="item"> <a href="#" class="image"> <img
                        data-echo="{{ asset('frontend/assets/images/brands/brand4.png') }}"
                        src="{{ asset('frontend/assets/images/blank.gif') }}" alt=""> </a> </div>
            <!--/.item-->

            <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand1.png"
                        src="{{ asset('frontend/assets/images/blank.gif') }}" alt=""> </a> </div>
            <!--/.item-->

            <div class="item"> <a href="#" class="image"> <img
                        data-echo="{{ asset('frontend/assets/images/brands/brand5.png') }}"
                        src="{{ asset('frontend/assets/images/blank.gif') }}" alt=""> </a> </div>
            <!--/.item-->
        </div>
        <!-- /.owl-carousel #logo-slider -->
    </div>
    <!-- /.logo-slider-inner -->

</div>
<!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
</div>
<!-- /.container -->
</div>
@endsection
