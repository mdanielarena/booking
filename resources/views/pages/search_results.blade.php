
@extends('layouts.master')

@section('scripts')
    <script src="{{ mix('/js/searchBar.js') }}"></script>
    <script src="{{ mix('/js/searchResults.js') }}"></script>
@endsection()

@section('content')

<div class="list-wrapper bg-grey-2">
    <div class="container">
        <div class="row">
            
            @include('pages.search_results_left_nav')

            <div class="col-xs-12 col-sm-8 col-md-9">

                @include('pages.search_results_top_nav')                

                <div class="grid-content clearfix">

                    @for($x = 0;$x < count($value['results']);$x++)
                        @if(isset($value['results'][$x]['hotel_info']))

                            <?php $code = encrypt($value['results'][$x]['products'][0]['code']);?>
                            
                            <div class="list-item-entry" onclick="hotelAvailability('<?php echo $code ?>','<?php echo $key ?>')">
                                <div class="hotel-item style-3 bg-white">
                                    <div class="table-view">
                                        <div class="radius-top cell-view">
                                            <img src="{{$value['results'][$x]['hotel_info']['images']['large']}}" alt="">          	 	 
                                        </div>
                                        <div class="title hotel-middle clearfix cell-view">
                                            <h4><b>{{$value['results'][$x]['hotel_info']['name']}} </b></h4>
                                                <div class="rate-wrap">
                                                    <div class="rate">
                                                    <span class="fa fa-star color-yellow"></span>
                                                    <span class="fa fa-star color-yellow"></span>
                                                    <span class="fa fa-star color-yellow"></span>
                                                    <span class="fa fa-star color-yellow"></span>
                                                    <span class="fa fa-star color-yellow"></span>
                                                    </div>
                                                    <i>{{$value['results'][$x]['hotel_info']['stars']}} stars</i> 
                                                </div> 
                                            <p class="f-14 grid-hidden">{{$value['results'][$x]['hotel_info']['address']}}</p>
                                        </div>
                                        <div class="title hotel-right clearfix cell-view"> 
                                            <div class="hotel-person color-dark-2">from <span class="color-blue">EUR {{$value['results'][$x]['products'][0]['price']}}</span></div>
                                            <a class="c-button b-40 bg-blue hv-blue-o grid-hidden" href="#">view more</a>
                                        </div>
                                    </div>
                                </div>  						
                            </div>
                        @endif
                    @endfor

                </div>

                <div class="c_pagination clearfix padd-120">
                    <a href="#" class="c-button b-40 bg-blue-2 hv-blue-2-o fl">prev page</a>
                    <a href="#" class="c-button b-40 bg-blue-2 hv-blue-2-o fr">next page</a>
                    <ul class="cp_content color-1">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">10</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()

