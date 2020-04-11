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
                    <form method="post" action="/search-post">
                        @csrf
                        <div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-md-offset-0">
                                <div class="input-style-1 min-324">
                                    <img src="img/loc_icon_small.png" alt="">
                                    <input type="text" placeholder="Enter a destination or hotel name" name="searchInput" id="searchInput" required>
                                    <ul id="filterData"></ul>
                                    <input type="hidden" id="filterValue" name="filterValue">
                                </div>
                                <div class="input-style-1 min-204">
                                    <img src="img/calendar_icon.png" alt="">
                                    <input type="text" placeholder="Check In" class="datepicker" id="checkIn" name="checkIn" required>
                                </div>
                                <div class="input-style-1 min-204">
                                    <img src="img/calendar_icon.png" alt="">
                                    <input type="text" placeholder="Check Out" class="datepicker" id="checkOut" name="checkOut" required>
                                </div>
                                <div class="submit">
                                    <input class="c-button b-60 bg-white hv-orange" type="submit" value="search now">
                                </div>
                        </div>
                    </form>
                </div>
            </div>  	  
            </div>
        </div>
    </div>
</div>