
@extends('layouts.master')

@section('content')

<div class="inner-banner">
    <img class="center-image" src="img/tour_list/inner_banner_1.jpg" alt="">
    <div class="vertical-align">
        <div class="container">
            <ul class="banner-breadcrumb color-white clearfix">
                <li><a class="link-blue-2" href="#">home</a> /</li>
                <li><a class="link-blue-2" href="#">tours</a> /</li>
                <li><span class="color-blue-2">list tours</span></li>
            </ul>
            <h2 class="color-white">all tours for you</h2>
            <h4 class="color-white">We found: <span>640</span> tours</h4>
        </div>
    </div>
</div>

<div class="list-wrapper bg-grey-2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="sidebar bg-white clearfix">
                    
                    <div class="sidebar-block">
                        <h4 class="sidebar-title color-dark-2">price range</h4>
                        <div class="slider-range color-1 clearfix" data-counter="$" data-position="start" data-from="0" data-to="1500" data-min="0" data-max="2000">
                            <div class="range"></div>
                            <input type="text" class="amount-start" readonly value="$0">
                            <input type="text" class="amount-end" readonly value="$1500">						
                        </div>
                        <input type="submit" class="c-button b-40 bg-blue-2 hv-blue-2-o" value="search">				
                    </div>
                    <div class="sidebar-block">
                        <h4 class="sidebar-title color-dark-2">star rating</h4>
                        <div class="sidebar-rating">
                            <div class="input-entry color-1">
                                <input class="checkbox-form" id="star-5" type="checkbox" name="checkbox" value="climat control">
                                <label class="clearfix" for="star-5" >
                                    <span class="sp-check"><i class="fa fa-check"></i></span>
                                    <span class="rate">
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="input-entry color-1">
                                <input class="checkbox-form" id="star-4" type="checkbox" name="checkbox" value="climat control">
                                <label class="clearfix" for="star-4" >
                                    <span class="sp-check"><i class="fa fa-check"></i></span>
                                    <span class="rate">
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="input-entry color-1">
                                <input class="checkbox-form" id="star-3" type="checkbox" name="checkbox" value="climat control">
                                <label class="clearfix" for="star-3" >
                                    <span class="sp-check"><i class="fa fa-check"></i></span>
                                    <span class="rate">
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="input-entry color-1">
                                <input class="checkbox-form" id="star-2" type="checkbox" name="checkbox" value="climat control">
                                <label class="clearfix" for="star-2" >
                                    <span class="sp-check"><i class="fa fa-check"></i></span>
                                    <span class="rate">
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="input-entry color-1">
                                <input class="checkbox-form" id="star-1" type="checkbox" name="checkbox" value="climat control">
                                <label class="clearfix" for="star-1" >
                                    <span class="sp-check"><i class="fa fa-check"></i></span>
                                    <span class="rate">
                                        <span class="fa fa-star color-yellow"></span>
                                    </span>
                                </label>
                            </div>
                        </div>											
                    </div>
                    <div class="sidebar-block">
                        <h4 class="sidebar-title color-dark-2">Facility</h4>
                        <div class="sidebar-rating">
                            <div class="input-entry color-1">
                                <input class="checkbox-form" id="text-1" type="checkbox" name="checkbox" value="climat control">
                                <label class="clearfix" for="text-1" >
                                    <span class="sp-check"><i class="fa fa-check"></i></span>
                                    <span class="checkbox-text">Pet allowed</span>
                                </label>
                            </div>
                            <div class="input-entry color-1">
                                <input class="checkbox-form" id="text-2" type="checkbox" name="checkbox" value="climat control">
                                <label class="clearfix" for="text-2" >
                                    <span class="sp-check"><i class="fa fa-check"></i></span>
                                    <span class="checkbox-text">Groups allowed</span>
                                </label>
                            </div>
                            <div class="input-entry color-1">
                                <input class="checkbox-form" id="text-3" type="checkbox" name="checkbox" value="climat control">
                                <label class="clearfix" for="text-3" >
                                    <span class="sp-check"><i class="fa fa-check"></i></span>
                                    <span class="checkbox-text">Tour guides</span>
                                </label>
                            </div>
                            <div class="input-entry color-1">
                                <input class="checkbox-form" id="text-4" type="checkbox" name="checkbox" value="climat control">
                                <label class="clearfix" for="text-4" >
                                    <span class="sp-check"><i class="fa fa-check"></i></span>
                                    <span class="checkbox-text">Access for disabled</span>
                                </label>
                            </div>
                            <div class="input-entry color-1">
                                <input class="checkbox-form" id="text-5" type="checkbox" name="checkbox" value="climat control">
                                <label class="clearfix" for="text-5" >
                                    <span class="sp-check"><i class="fa fa-check"></i></span>
                                    <span class="checkbox-text">Pet allowed</span>
                                </label>
                            </div>
                            <div class="input-entry color-1">
                                <input class="checkbox-form" id="text-6" type="checkbox" name="checkbox" value="climat control">
                                <label class="clearfix" for="text-6" >
                                    <span class="sp-check"><i class="fa fa-check"></i></span>
                                    <span class="checkbox-text">Groups allowed</span>
                                </label>
                            </div>
                            <div class="input-entry color-1">
                                <input class="checkbox-form" id="text-7" type="checkbox" name="checkbox" value="climat control">
                                <label class="clearfix" for="text-7" >
                                    <span class="sp-check"><i class="fa fa-check"></i></span>
                                    <span class="checkbox-text">Access for disabled</span>
                                </label>
                            </div>																
                        </div>											
                    </div>
                    <div class="sidebar-block">
                        <h4 class="sidebar-title color-dark-2">Review Score</h4>
                        <div class="sidebar-score">
                            <div class="input-entry type-2 color-2">
                                <input class="checkbox-form" id="score-5" type="checkbox" name="checkbox" value="climat control">
                                <label class="clearfix" for="score-5" >
                                    <span class="checkbox-text">
                                        5
                                        <span class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                        </span>
                                    </span>									
                                    <span class="sp-check"><i class="fa fa-check"></i></span>
                                </label>
                            </div>
                            <div class="input-entry type-2 color-2">
                                <input class="checkbox-form" id="score-4" type="checkbox" name="checkbox" value="climat control">
                                <label class="clearfix" for="score-4" >
                                    <span class="checkbox-text">
                                        4
                                        <span class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                        </span>
                                    </span>									
                                    <span class="sp-check"><i class="fa fa-check"></i></span>
                                </label>
                            </div>
                            <div class="input-entry type-2 color-2">
                                <input class="checkbox-form" id="score-3" type="checkbox" name="checkbox" value="climat control">
                                <label class="clearfix" for="score-3" >
                                    <span class="checkbox-text">
                                        3
                                        <span class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                        </span>
                                    </span>									
                                    <span class="sp-check"><i class="fa fa-check"></i></span>
                                </label>
                            </div>
                            <div class="input-entry type-2 color-2">
                                <input class="checkbox-form" id="score-2" type="checkbox" name="checkbox" value="climat control">
                                <label class="clearfix" for="score-2" >
                                    <span class="checkbox-text">
                                        2
                                        <span class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                        </span>
                                    </span>									
                                    <span class="sp-check"><i class="fa fa-check"></i></span>
                                </label>
                            </div>
                            <div class="input-entry type-2 color-2">
                                <input class="checkbox-form" id="score-1" type="checkbox" name="checkbox" value="climat control">
                                <label class="clearfix" for="score-1" >
                                    <span class="checkbox-text">
                                        1
                                        <span class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                        </span>
                                    </span>									
                                    <span class="sp-check"><i class="fa fa-check"></i></span>
                                </label>
                            </div>
                        </div>							
                    </div>					
                </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-9">
                <div class="list-header clearfix">
                    <div class="drop-wrap drop-wrap-s-4 color-4 list-sort">
                        <div class="drop">
                            <b>Sort by price</b>
                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                            <span>
                                <a href="#">ASC</a>
                                <a href="#">DESC</a>
                            </span>
                        </div>
                    </div>
                    <div class="drop-wrap drop-wrap-s-4 color-4 list-sort">
                        <div class="drop">
                            <b>Sort by ranking</b>
                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                            <span>
                                <a href="#">ASC</a>
                                <a href="#">DESC</a>
                            </span>
                        </div>
                    </div>
                    
                </div>
                <div class="grid-content clearfix">
                    <div class="list-item-entry">
                        <div class="hotel-item style-3 bg-white">
                            <div class="table-view">
                                <div class="radius-top cell-view">
                                    <img src="img/tour_list/tour_grid_1.jpg" alt="">          	 	 
                                </div>
                                <div class="title hotel-middle clearfix cell-view">
                                    <div class="date list-hidden">July <strong>19th</strong> to July <strong>26th</strong></div>
                                    <div class="date grid-hidden"><strong>19.07 - 26.07 / 7</strong> night</div>
                                    <h4><b>tours in greece</b></h4>
                                        <div class="rate-wrap">
                                            <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            </div>
                                            <i>485 rewies</i> 
                                        </div> 
                                    <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus ac congue arcu.</p>
                                </div>
                                <div class="title hotel-right clearfix cell-view"> 
                                    <div class="hotel-person color-dark-2">from <span class="color-blue">$273</span> person</div>
                                    <a class="c-button b-40 bg-blue hv-blue-o grid-hidden" href="#">view more</a>
                                </div>
                            </div>
                        </div>  						
                    </div>
                    <div class="list-item-entry">
                        <div class="hotel-item style-3 bg-white">
                            <div class="table-view">
                                <div class="radius-top cell-view">
                                    <img src="img/tour_list/tour_grid_2.jpg" alt="">          	 	 
                                </div>
                                <div class="title hotel-middle clearfix cell-view">
                                    <div class="date list-hidden">July <strong>19th</strong> to July <strong>26th</strong></div>
                                    <div class="date grid-hidden"><strong>19.07 - 26.07 / 7</strong> night</div>
                                    <h4><b>tours in monaco</b></h4>
                                        <div class="rate-wrap">
                                            <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            </div>
                                            <i>485 rewies</i> 
                                        </div> 
                                    <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus ac congue arcu.</p>
                                </div>
                                <div class="title hotel-right clearfix cell-view"> 
                                    <div class="hotel-person color-dark-2">from <span class="color-blue">$703</span> person</div>
                                    <a class="c-button b-40 bg-blue hv-blue-o grid-hidden" href="#">view more</a>
                                </div>
                            </div>
                        </div>  						
                    </div>
                    <div class="list-item-entry">
                        <div class="hotel-item style-3 bg-white">
                            <div class="table-view">
                                <div class="radius-top cell-view">
                                    <img src="img/tour_list/tour_grid_3.jpg" alt="">          	 	 
                                </div>
                                <div class="title hotel-middle clearfix cell-view">
                                    <div class="date list-hidden">July <strong>19th</strong> to July <strong>26th</strong></div>
                                    <div class="date grid-hidden"><strong>19.07 - 26.07 / 7</strong> night</div>
                                    <h4><b>tours in italy</b></h4>
                                        <div class="rate-wrap">
                                            <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            </div>
                                            <i>485 rewies</i> 
                                        </div> 
                                    <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus ac congue arcu.</p>
                                </div>
                                <div class="title hotel-right clearfix cell-view"> 
                                    <div class="hotel-person color-dark-2">from <span class="color-blue">$300</span> person</div>
                                    <a class="c-button b-40 bg-blue hv-blue-o grid-hidden" href="#">view more</a>
                                </div>
                            </div>
                        </div>  						
                    </div>
                    <div class="list-item-entry">
                        <div class="hotel-item style-3 bg-white">
                            <div class="table-view">
                                <div class="radius-top cell-view">
                                    <img src="img/tour_list/tour_grid_4.jpg" alt="">          	 	 
                                </div>
                                <div class="title hotel-middle clearfix cell-view">
                                    <div class="date list-hidden">July <strong>19th</strong> to July <strong>26th</strong></div>
                                    <div class="date grid-hidden"><strong>19.07 - 26.07 / 7</strong> night</div>
                                    <h4><b>tours in miami</b></h4>
                                        <div class="rate-wrap">
                                            <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            </div>
                                            <i>485 rewies</i> 
                                        </div> 
                                    <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus ac congue arcu.</p>
                                </div>
                                <div class="title hotel-right clearfix cell-view"> 
                                    <div class="hotel-person color-dark-2">from <span class="color-blue">$400</span> person</div>
                                    <a class="c-button b-40 bg-blue hv-blue-o grid-hidden" href="#">view more</a>
                                </div>
                            </div>
                        </div>  						
                    </div> 
                    <div class="list-item-entry">
                        <div class="hotel-item style-3 bg-white">
                            <div class="table-view">
                                <div class="radius-top cell-view">
                                    <img src="img/tour_list/tour_grid_5.jpg" alt="">          	 	 
                                </div>
                                <div class="title hotel-middle clearfix cell-view">
                                    <div class="date list-hidden">July <strong>19th</strong> to July <strong>26th</strong></div>
                                    <div class="date grid-hidden"><strong>19.07 - 26.07 / 7</strong> night</div>
                                    <h4><b>tours in USA</b></h4>
                                        <div class="rate-wrap">
                                            <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            </div>
                                            <i>485 rewies</i> 
                                        </div> 
                                    <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus ac congue arcu.</p>
                                </div>
                                <div class="title hotel-right clearfix cell-view"> 
                                    <div class="hotel-person color-dark-2">from <span class="color-blue">$273</span> person</div>
                                    <a class="c-button b-40 bg-blue hv-blue-o grid-hidden" href="#">view more</a>
                                </div>
                            </div>
                        </div>  						
                    </div>
                    <div class="list-item-entry">
                        <div class="hotel-item style-3 bg-white">
                            <div class="table-view">
                                <div class="radius-top cell-view">
                                    <img src="img/tour_list/tour_grid_6.jpg" alt="">          	 	 
                                </div>
                                <div class="title hotel-middle clearfix cell-view">
                                    <div class="date list-hidden">July <strong>19th</strong> to July <strong>26th</strong></div>
                                    <div class="date grid-hidden"><strong>19.07 - 26.07 / 7</strong> night</div>
                                    <h4><b>tours in santorini</b></h4>
                                        <div class="rate-wrap">
                                            <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            </div>
                                            <i>485 rewies</i> 
                                        </div> 
                                    <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus ac congue arcu.</p>
                                </div>
                                <div class="title hotel-right clearfix cell-view"> 
                                    <div class="hotel-person color-dark-2">from <span class="color-blue">$500</span> person</div>
                                    <a class="c-button b-40 bg-blue hv-blue-o grid-hidden" href="#">view more</a>
                                </div>
                            </div>
                        </div>  						
                    </div>
                    <div class="list-item-entry">
                        <div class="hotel-item style-3 bg-white">
                            <div class="table-view">
                                <div class="radius-top cell-view">
                                    <img src="img/tour_list/tour_grid_7.jpg" alt="">          	 	 
                                </div>
                                <div class="title hotel-middle clearfix cell-view">
                                    <div class="date list-hidden">July <strong>19th</strong> to July <strong>26th</strong></div>
                                    <div class="date grid-hidden"><strong>19.07 - 26.07 / 7</strong> night</div>
                                    <h4><b>tours in monaco</b></h4>
                                        <div class="rate-wrap">
                                            <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            </div>
                                            <i>485 rewies</i> 
                                        </div> 
                                    <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus ac congue arcu.</p>
                                </div>
                                <div class="title hotel-right clearfix cell-view"> 
                                    <div class="hotel-person color-dark-2">from <span class="color-blue">$273</span> person</div>
                                    <a class="c-button b-40 bg-blue hv-blue-o grid-hidden" href="#">view more</a>
                                </div>
                            </div>
                        </div>  						
                    </div>
                    <div class="list-item-entry">
                        <div class="hotel-item style-3 bg-white">
                            <div class="table-view">
                                <div class="radius-top cell-view">
                                    <img src="img/tour_list/tour_grid_8.jpg" alt="">          	 	 
                                </div>
                                <div class="title hotel-middle clearfix cell-view">
                                    <div class="date list-hidden">July <strong>19th</strong> to July <strong>26th</strong></div>
                                    <div class="date grid-hidden"><strong>19.07 - 26.07 / 7</strong> night</div>
                                    <h4><b>tours in paris</b></h4>
                                        <div class="rate-wrap">
                                            <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            </div>
                                            <i>485 rewies</i> 
                                        </div> 
                                    <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus ac congue arcu.</p>
                                </div>
                                <div class="title hotel-right clearfix cell-view"> 
                                    <div class="hotel-person color-dark-2">from <span class="color-blue">$300</span> person</div>
                                    <a class="c-button b-40 bg-blue hv-blue-o grid-hidden" href="#">view more</a>
                                </div>
                            </div>
                        </div>  						
                    </div>
                    <div class="list-item-entry">
                        <div class="hotel-item style-3 bg-white">
                            <div class="table-view">
                                <div class="radius-top cell-view">
                                    <img src="img/tour_list/tour_grid_9.jpg" alt="">          	 	 
                                </div>
                                <div class="title hotel-middle clearfix cell-view">
                                    <div class="date list-hidden">July <strong>19th</strong> to July <strong>26th</strong></div>
                                    <div class="date grid-hidden"><strong>19.07 - 26.07 / 7</strong> night</div>
                                    <h4><b>tours in brasil</b></h4>
                                        <div class="rate-wrap">
                                            <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            </div>
                                            <i>485 rewies</i> 
                                        </div> 
                                    <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus ac congue arcu.</p>
                                </div>
                                <div class="title hotel-right clearfix cell-view"> 
                                    <div class="hotel-person color-dark-2">from <span class="color-blue">$300</span> person</div>
                                    <a class="c-button b-40 bg-blue hv-blue-o grid-hidden" href="#">view more</a>
                                </div>
                            </div>
                        </div>  						
                    </div>
                    <div class="list-item-entry">
                        <div class="hotel-item style-3 bg-white">
                            <div class="table-view">
                                <div class="radius-top cell-view">
                                    <img src="img/tour_list/tour_grid_10.jpg" alt="">          	 	 
                                </div>
                                <div class="title hotel-middle clearfix cell-view">
                                    <div class="date list-hidden">July <strong>19th</strong> to July <strong>26th</strong></div>
                                    <div class="date grid-hidden"><strong>19.07 - 26.07 / 7</strong> night</div>
                                    <h4><b>tours in monte carlo</b></h4>
                                        <div class="rate-wrap">
                                            <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            </div>
                                            <i>485 rewies</i> 
                                        </div> 
                                    <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus ac congue arcu.</p>
                                </div>
                                <div class="title hotel-right clearfix cell-view"> 
                                    <div class="hotel-person color-dark-2">from <span class="color-blue">$200</span> person</div>
                                    <a class="c-button b-40 bg-blue hv-blue-o grid-hidden" href="#">view more</a>
                                </div>
                            </div>
                        </div>  						
                    </div>
                    <div class="list-item-entry">
                        <div class="hotel-item style-3 bg-white">
                            <div class="table-view">
                                <div class="radius-top cell-view">
                                    <img src="img/tour_list/tour_grid_11.jpg" alt="">          	 	 
                                </div>
                                <div class="title hotel-middle clearfix cell-view">
                                    <div class="date list-hidden">July <strong>19th</strong> to July <strong>26th</strong></div>
                                    <div class="date grid-hidden"><strong>19.07 - 26.07 / 7</strong> night</div>
                                    <h4><b>tours in bora bora</b></h4>
                                        <div class="rate-wrap">
                                            <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            </div>
                                            <i>485 rewies</i> 
                                        </div> 
                                    <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus ac congue arcu.</p>
                                </div>
                                <div class="title hotel-right clearfix cell-view"> 
                                    <div class="hotel-person color-dark-2">from <span class="color-blue">$333</span> person</div>
                                    <a class="c-button b-40 bg-blue hv-blue-o grid-hidden" href="#">view more</a>
                                </div>
                            </div>
                        </div>  						
                    </div>
                    <div class="list-item-entry">
                        <div class="hotel-item style-3 bg-white">
                            <div class="table-view">
                                <div class="radius-top cell-view">
                                    <img src="img/tour_list/tour_grid_12.jpg" alt="">          	 	 
                                </div>
                                <div class="title hotel-middle clearfix cell-view">
                                    <div class="date list-hidden">July <strong>19th</strong> to July <strong>26th</strong></div>
                                    <div class="date grid-hidden"><strong>19.07 - 26.07 / 7</strong> night</div>
                                    <h4><b>tours in france</b></h4>
                                        <div class="rate-wrap">
                                            <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            </div>
                                            <i>485 rewies</i> 
                                        </div> 
                                    <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus ac congue arcu.</p>
                                </div>
                                <div class="title hotel-right clearfix cell-view"> 
                                    <div class="hotel-person color-dark-2">from <span class="color-blue">$250</span> person</div>
                                    <a class="c-button b-40 bg-blue hv-blue-o grid-hidden" href="#">view more</a>
                                </div>
                            </div>
                        </div>  						
                    </div>
                    <div class="list-item-entry">
                        <div class="hotel-item style-3 bg-white">
                            <div class="table-view">
                                <div class="radius-top cell-view">
                                    <img src="img/tour_list/tour_grid_13.jpg" alt="">          	 	 
                                </div>
                                <div class="title hotel-middle clearfix cell-view">
                                    <div class="date list-hidden">July <strong>19th</strong> to July <strong>26th</strong></div>
                                    <div class="date grid-hidden"><strong>19.07 - 26.07 / 7</strong> night</div>
                                    <h4><b>tours in spaine</b></h4>
                                        <div class="rate-wrap">
                                            <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            </div>
                                            <i>485 rewies</i> 
                                        </div> 
                                    <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus ac congue arcu.</p>
                                </div>
                                <div class="title hotel-right clearfix cell-view"> 
                                    <div class="hotel-person color-dark-2">from <span class="color-blue">$750</span> person</div>
                                    <a class="c-button b-40 bg-blue hv-blue-o grid-hidden" href="#">view more</a>
                                </div>
                            </div>
                        </div>  						
                    </div>
                    <div class="list-item-entry">
                        <div class="hotel-item style-3 bg-white">
                            <div class="table-view">
                                <div class="radius-top cell-view">
                                    <img src="img/tour_list/tour_grid_14.jpg" alt="">          	 	 
                                </div>
                                <div class="title hotel-middle clearfix cell-view">
                                    <div class="date list-hidden">July <strong>19th</strong> to July <strong>26th</strong></div>
                                    <div class="date grid-hidden"><strong>19.07 - 26.07 / 7</strong> night</div>
                                    <h4><b>tours in marmaris</b></h4>
                                        <div class="rate-wrap">
                                            <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            </div>
                                            <i>485 rewies</i> 
                                        </div> 
                                    <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus ac congue arcu.</p>
                                </div>
                                <div class="title hotel-right clearfix cell-view"> 
                                    <div class="hotel-person color-dark-2">from <span class="color-blue">$273</span> person</div>
                                    <a class="c-button b-40 bg-blue hv-blue-o grid-hidden" href="#">view more</a>
                                </div>
                            </div>
                        </div>  						
                    </div>
                    <div class="list-item-entry">
                        <div class="hotel-item style-3 bg-white">
                            <div class="table-view">
                                <div class="radius-top cell-view">
                                    <img src="img/tour_list/tour_grid_15.jpg" alt="">          	 	 
                                </div>
                                <div class="title hotel-middle clearfix cell-view">
                                    <div class="date list-hidden">July <strong>19th</strong> to July <strong>26th</strong></div>
                                    <div class="date grid-hidden"><strong>19.07 - 26.07 / 7</strong> night</div>
                                    <h4><b>tours in monaco</b></h4>
                                        <div class="rate-wrap">
                                            <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            </div>
                                            <i>485 rewies</i> 
                                        </div> 
                                    <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus ac congue arcu.</p>
                                </div>
                                <div class="title hotel-right clearfix cell-view"> 
                                    <div class="hotel-person color-dark-2">from <span class="color-blue">$503</span> person</div>
                                    <a class="c-button b-40 bg-blue hv-blue-o grid-hidden" href="#">view more</a>
                                </div>
                            </div>
                        </div>  						
                    </div>
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

