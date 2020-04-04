@section('scripts')
    <script src="{{ mix('/js/searchBar.js') }}"></script>
@endsection()
<div class="vertical-align">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
            <div class="main-title">
                <h1>welcome<br> to let’s travel</h1>
                <p>Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse id pharetra lacus, et hendrerit mi quis leo elementum. Lorem ipsum dolor sit amet, labore et dolore magna aliqua.</p>
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-md-offset-0">
                            <div class="input-style-1 min-324">
                                <img src="img/loc_icon_small.png" alt="">
                                <input type="text" placeholder="Enter a destination or hotel name" id="searchInput">
                            </div>
                            <div class="input-style-1 min-204">
                                <img src="img/calendar_icon.png" alt="">
                                <input type="text" placeholder="Check in" class="datepicker" id="checkIn">
                            </div>
                            <div class="input-style-1 min-204">
                                <img src="img/calendar_icon.png" alt="">
                                <input type="text" placeholder="Check in" class="datepicker" id="checkOut">
                            </div>
                            <div class="submit">
                            <input class="c-button b-60 bg-white hv-orange" onClick="searchInput()" type="button" value="search now">
                            </div>
                    </div>
                </div>
            </div>  	  
            </div>
        </div>
    </div>
</div>