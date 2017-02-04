@extends('layouts.master')

@section('content')
<div id="slideshow">
            <div class="fullwidthbanner-container">
                <div class="revolution-slider rev_slider" style="height: 0; overflow: hidden;">
                    <ul>    <!-- SLIDE  -->
                        <!-- Slide1 -->
                        <li data-transition="zoomin" data-slotamount="7" data-masterspeed="1500">
                            <!-- MAIN IMAGE -->
                            <img src="http://placehold.it/2080x646" alt="">
                        </li>
                        
                        <!-- Slide2 -->
                        <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1500">
                            <!-- MAIN IMAGE -->
                            <img src="http://placehold.it/2080x646" alt="">
                        </li>
                        
                        <!-- Slide3 -->
                        <li data-transition="slidedown" data-slotamount="7" data-masterspeed="1500">
                            <!-- MAIN IMAGE -->
                            <img src="http://placehold.it/2080x646" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
            
        <section id="content">
            <div class="search-box-wrapper">
                <div class="search-box container">
                    <ul class="search-tabs clearfix">
                        <li class="active"><a href="#hotels-tab" data-toggle="tab">HOTELS</a></li>
                        <li><a href="#flights-tab" data-toggle="tab">FLIGHTS</a></li>
                        <li><a href="#flight-and-hotel-tab" data-toggle="tab">FLIGHT &amp; HOTELS</a></li>
                        <li><a href="#cars-tab" data-toggle="tab">CARS</a></li>
                        <li><a href="#cruises-tab" data-toggle="tab">CRUISES</a></li>
                        <li><a href="#flight-status-tab" data-toggle="tab">FLIGHT STATUS</a></li>
                        <li><a href="#online-checkin-tab" data-toggle="tab">ONLINE CHECK IN</a></li>
                    </ul>
                    <div class="visible-mobile">
                        <ul id="mobile-search-tabs" class="search-tabs clearfix">
                            <li class="active"><a href="#hotels-tab">HOTELS</a></li>
                            <li><a href="#flights-tab">FLIGHTS</a></li>
                            <li><a href="#flight-and-hotel-tab">FLIGHT &amp; HOTELS</a></li>
                            <li><a href="#cars-tab">CARS</a></li>
                            <li><a href="#cruises-tab">CRUISES</a></li>
                            <li><a href="#flight-status-tab">FLIGHT STATUS</a></li>
                            <li><a href="#online-checkin-tab">ONLINE CHECK IN</a></li>
                        </ul>
                    </div>
                    
                    <div class="search-tab-content">
                        <div class="tab-pane fade active in" id="hotels-tab">
                            <form action="hotel-list-view.html" method="post">
                                <div class="row">
                                    <div class="form-group col-sm-6 col-md-3">
                                        <h4 class="title">Where</h4>
                                        <label>Your Destination</label>
                                        <input type="text" class="input-text full-width" placeholder="enter a destination or hotel name" />
                                    </div>
                                    
                                    <div class="form-group col-sm-6 col-md-4">
                                        <h4 class="title">When</h4>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <label>Check In</label>
                                                <div class="datepicker-wrap">
                                                    <input type="text" name="date_from" class="input-text full-width" placeholder="mm/dd/yy" />
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <label>Check Out</label>
                                                <div class="datepicker-wrap">
                                                    <input type="text" name="date_to" class="input-text full-width" placeholder="mm/dd/yy" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-sm-6 col-md-3">
                                        <h4 class="title">Who</h4>
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <label>Rooms</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <label>Adults</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <label>Kids</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-sm-6 col-md-2 fixheight">
                                        <label class="hidden-xs">&nbsp;</label>
                                        <button type="submit" class="full-width icon-check animated" data-animation-type="bounce" data-animation-duration="1">SEARCH NOW</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="flights-tab">
                            <form action="flight-list-view.html" method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="title">Where</h4>
                                        <div class="form-group">
                                            <label>Leaving From</label>
                                            <input type="text" class="input-text full-width" placeholder="city, distirct or specific airpot" />
                                        </div>
                                        <div class="form-group">
                                            <label>Going To</label>
                                            <input type="text" class="input-text full-width" placeholder="city, distirct or specific airpot" />
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <h4 class="title">When</h4>
                                        <label>Departing On</label>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <div class="datepicker-wrap">
                                                    <input type="text" name="date_from" class="input-text full-width" placeholder="mm/dd/yy" />
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">anytime</option>
                                                        <option value="2">morning</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <label>Arriving On</label>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <div class="datepicker-wrap">
                                                    <input type="text" name="date_to" class="input-text full-width" placeholder="mm/dd/yy" />
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">anytime</option>
                                                        <option value="2">morning</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <h4 class="title">Who</h4>
                                        <div class="form-group row">
                                            <div class="col-xs-3">
                                                <label>Adults</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
                                                <label>Kids</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <label>Promo Code</label>
                                                <input type="text" class="input-text full-width" placeholder="type here" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-xs-3">
                                                <label>Infants</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 pull-right">
                                                <label>&nbsp;</label>
                                                <button class="full-width icon-check">SERACH NOW</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <div class="tab-pane fade" id="flight-and-hotel-tab">
                            <form action="flight-list-view.html" method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="title">Where</h4>
                                        <div class="form-group">
                                            <label>Leaving From</label>
                                            <input type="text" class="input-text full-width" placeholder="city, distirct or specific airpot" />
                                        </div>
                                        <div class="form-group">
                                            <label>Going To</label>
                                            <input type="text" class="input-text full-width" placeholder="city, distirct or specific airpot" />
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <h4 class="title">When</h4>
                                        <label>Departing On</label>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <div class="datepicker-wrap">
                                                    <input type="text" name="date_from" class="input-text full-width" placeholder="mm/dd/yy" />
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">anytime</option>
                                                        <option value="2">morning</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <label>Arriving On</label>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <div class="datepicker-wrap">
                                                    <input type="text" name="date_to" class="input-text full-width" placeholder="mm/dd/yy" />
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">anytime</option>
                                                        <option value="2">morning</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <h4 class="title">Who</h4>
                                        <div class="form-group row">
                                            <div class="col-xs-3">
                                                <label>Adults</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
                                                <label>Kids</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <label>Promo Code</label>
                                                <input type="text" class="input-text full-width" placeholder="type here" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-xs-3">
                                                <label>Rooms</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 pull-right">
                                                <label>&nbsp;</label>
                                                <button class="full-width icon-check">SERACH NOW</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <div class="tab-pane fade" id="cars-tab">
                            <form action="car-list-view.html" method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="title">Where</h4>
                                        <div class="form-group">
                                            <label>Pick Up</label>
                                            <input type="text" class="input-text full-width" placeholder="city, distirct or specific airpot" />
                                        </div>
                                        <div class="form-group">
                                            <label>Drop Off</label>
                                            <input type="text" class="input-text full-width" placeholder="city, distirct or specific airpot" />
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <h4 class="title">When</h4>
                                        <div class="form-group">
                                            <label>Pick-Up Date / Time</label>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="datepicker-wrap">
                                                        <input type="text" name="date_from" class="input-text full-width" placeholder="mm/dd/yy" />
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="selector">
                                                        <select class="full-width">
                                                            <option value="1">anytime</option>
                                                            <option value="2">morning</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Drop-Off Date / Time</label>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="datepicker-wrap">
                                                        <input type="text" name="date_to" class="input-text full-width" placeholder="mm/dd/yy" />
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="selector">
                                                        <select class="full-width">
                                                            <option value="1">anytime</option>
                                                            <option value="2">morning</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <h4 class="title">Who</h4>
                                        <div class="form-group row">
                                            <div class="col-xs-3">
                                                <label>Adults</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
                                                <label>Kids</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <label>Promo Code</label>
                                                <input type="text" class="input-text full-width" placeholder="type here" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <label>Car Type</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="">select a car type</option>
                                                        <option value="economy">Economy</option>
                                                        <option value="compact">Compact</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <label>&nbsp;</label>
                                                <button class="full-width icon-check">SERACH NOW</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <div class="tab-pane fade" id="cruises-tab">
                            <form action="cruise-list-view.html" method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="title">Where</h4>
                                        <div class="form-group">
                                            <label>Your Destination</label>
                                            <input type="text" class="input-text full-width" placeholder="enter a destination or hotel name" />
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <h4 class="title">When</h4>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <label>Departure Date</label>
                                                <div class="datepicker-wrap">
                                                    <input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <label>Cruise Length</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="">select length</option>
                                                        <option value="1">1-2 Nights</option>
                                                        <option value="2">3-4 Nights</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <h4 class="title">Who</h4>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <label>Cruise Line</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="">select cruise line</option>
                                                        <option>Azamara Club Cruises</option>
                                                        <option>Carnival Cruise Lines</option>
                                                        <option>Celebrity Cruises</option>
                                                        <option>Costa Cruise Lines</option>
                                                        <option>Cruise &amp; Maritime Voyages</option>
                                                        <option>Crystal Cruises</option>
                                                        <option>Cunard Line Ltd.</option>
                                                        <option>Disney Cruise Line</option>
                                                        <option>Holland America Line</option>
                                                        <option>Hurtigruten Cruise Line</option>
                                                        <option>MSC Cruises</option>
                                                        <option>Norwegian Cruise Line</option>
                                                        <option>Oceania Cruises</option>
                                                        <option>Orion Expedition Cruises</option>
                                                        <option>P&amp;O Cruises</option>
                                                        <option>Paul Gauguin Cruises</option>
                                                        <option>Peter Deilmann Cruises</option>
                                                        <option>Princess Cruises</option>
                                                        <option>Regent Seven Seas Cruises</option>
                                                        <option>Royal Caribbean International</option>
                                                        <option>Seabourn Cruise Line</option>
                                                        <option>Silversea Cruises</option>
                                                        <option>Star Clippers</option>
                                                        <option>Swan Hellenic Cruises</option>
                                                        <option>Thomson Cruises</option>
                                                        <option>Viking River Cruises</option>
                                                        <option>Windstar Cruises</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <label>&nbsp;</label>
                                                <button class="icon-check full-width">SEARCH NOW</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <div class="tab-pane fade" id="flight-status-tab">
                            <form action="flight-list-view.html" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="title">Where</h4>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <label>Leaving From</label>
                                                <input type="text" class="input-text full-width" placeholder="enter a city or place name" />
                                            </div>
                                            <div class="col-xs-6">
                                                <label>Going To</label>
                                                <input type="text" class="input-text full-width" placeholder="enter a city or place name" />
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-6 col-md-2">
                                        <h4 class="title">When</h4>
                                        <div class="form-group">
                                            <label>Departure Date</label>
                                            <div class="datepicker-wrap">
                                                <input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-6 col-md-2">
                                        <h4 class="title">Who</h4>
                                        <div class="form-group">
                                            <label>Flight Number</label>
                                            <input type="text" class="input-text full-width" placeholder="enter flight number" />
                                        </div>
                                    </div>
                                    <div class="form-group col-md-2 fixheight">
                                        <label class="hidden-xs">&nbsp;</label>
                                        <button class="icon-check full-width">SEARCH NOW</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <div class="tab-pane fade" id="online-checkin-tab">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="title">Where</h4>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <label>Leaving From</label>
                                                <input type="text" class="input-text full-width" placeholder="enter a city or place name" />
                                            </div>
                                            <div class="col-xs-6">
                                                <label>Going To</label>
                                                <input type="text" class="input-text full-width" placeholder="enter a city or place name" />
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-6 col-md-2">
                                        <h4 class="title">When</h4>
                                        <div class="form-group">
                                            <label>Departure Date</label>
                                            <div class="datepicker-wrap">
                                                <input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-6 col-md-2">
                                        <h4 class="title">Who</h4>
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input type="text" class="input-text full-width" placeholder="enter your full name" />
                                        </div>
                                    </div>
                                    <div class="form-group col-md-2 fixheight">
                                        <label class="hidden-xs">&nbsp;</label>
                                        <button class="icon-check full-width">SEARCH NOW</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Popuplar Destinations -->
            <div class="destinations section">
                <div class="container">
                    <h2>Popular Destinations</h2>
                    <div class="row image-box style1 add-clearfix">
                        <div class="col-sms-6 col-sm-6 col-md-3">
                            <article class="box">
                                <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1">
                                    <a href="ajax/slideshow-popup.html" title="" class="hover-effect popup-gallery"><img src="http://placehold.it/270x160" alt="" width="270" height="160" /></a>
                                </figure>
                                <div class="details">
                                    <span class="price"><small>FROM</small>$490</span>
                                    <h4 class="box-title"><a href="hotel-detailed.html">Atlantis - The Palm<small>Paris</small></a></h4>
                                </div>
                            </article>
                        </div>
                        <div class="col-sms-6 col-sm-6 col-md-3">
                            <article class="box">
                                <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                                    <a href="ajax/slideshow-popup.html" title="" class="hover-effect popup-gallery"><img src="http://placehold.it/270x160" alt="" width="270" height="160" /></a>
                                </figure>
                                <div class="details">
                                    <span class="price"><small>FROM</small>$170</span>
                                    <h4 class="box-title"><a href="hotel-detailed.html">Hilton Hotel<small>LONDON</small></a></h4>
                                </div>
                            </article>
                        </div>
                        <div class="col-sms-6 col-sm-6 col-md-3">
                            <article class="box">
                                <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.6">
                                    <a href="ajax/slideshow-popup.html" title="" class="hover-effect popup-gallery"><img src="http://placehold.it/270x160" alt="" width="270" height="160" /></a>
                                </figure>
                                <div class="details">
                                    <span class="price"><small>FROM</small>$130</span>
                                    <h4 class="box-title"><a href="hotel-detailed.html">MGM Grand<small>LAS VEGAS</small></a></h4>
                                </div>
                            </article>
                        </div>
                        <div class="col-sms-6 col-sm-6 col-md-3">
                            <article class="box">
                                <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.9">
                                    <a href="ajax/slideshow-popup.html" title="" class="hover-effect popup-gallery"><img src="http://placehold.it/270x160" alt="" width="270" height="160" /></a>
                                </figure>
                                <div class="details">
                                    <span class="price"><small>FROM</small>$290</span>
                                    <h4 class="box-title"><a href="hotel-detailed.html">Crown Casino<small>ASUTRALIA</small></a></h4>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Honeymoon -->
            <div class="honeymoon section global-map-area promo-box parallax" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="col-sm-6 content-section description pull-right">
                        <h1 class="title">Popular Destinations for Honeymoon</h1>
                        <p>Nunc cursus libero purusac congue arcu cursus utsed vitae pulvinar massa idporta neque purusac Etiam elerisque mi id faucibus iaculis vitae pulvinar.</p>
                        <div class="row places image-box style9">
                            <div class="col-sms-4 col-sm-4">
                                <article class="box">
                                    <figure>
                                        <a href="hotel-list-view.html" title="" class="hover-effect yellow middle-block animated" data-animation-type="fadeInUp" data-animation-duration="1">
                                            <img src="http://placehold.it/370x170" alt="" /></a>
                                    </figure>
                                    <div class="details">
                                        <h4 class="box-title">Paris<small>(990 PLACES)</small></h4>
                                        <a href="hotel-list-view.html" title="" class="button">SEE ALL</a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-sms-4 col-sm-4">
                                <article class="box">
                                    <figure>
                                        <a href="hotel-list-view.html" title="" class="hover-effect yellow middle-block animated" data-animation-type="fadeInUp" data-animation-duration="1" data-animation-delay="0.4"><img src="http://placehold.it/370x170" alt="" /></a>
                                    </figure>
                                    <div class="details">
                                        <h4 class="box-title">Greece<small>(990 PLACES)</small></h4>
                                        <a href="hotel-list-view.html" title="" class="button">SEE ALL</a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-sms-4 col-sm-4">
                                <article class="box">
                                    <figure>
                                        <a href="hotel-list-view.html" title="" class="hover-effect yellow middle-block animated" data-animation-type="fadeInUp" data-animation-duration="1" data-animation-delay="0.8"><img src="http://placehold.it/370x170" alt="" /></a>
                                    </figure>
                                    <div class="details">
                                        <h4 class="box-title">Australia<small>(990 PLACES)</small></h4>
                                        <a href="hotel-list-view.html" title="" class="button">SEE ALL</a>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 image-container no-margin">
                        <img src="http://placehold.it/524x540" alt="" class="animated" data-animation-type="fadeInUp" data-animation-duration="2">
                    </div>
                </div>
            </div>
            
            <!-- Did you Know? section -->
            <div class="offers section">
                <div class="container">
                    <h1 class="text-center">Did you know?</h1>
                    <p class="col-xs-9 center-block no-float text-center">Mauris ullamcorper nibh quis leo ultrices in hendrerit velit tristiqueut augue in nulla lacinia bibendum liberoras rutrum ac purus ut tristique.
Nullam placerat lacinia dolor quis pretium. Phasellus vitae lacinia quam, at pellentesque lorem. Sed euismod turpis quis mattis fringilla.</p>
                    <div class="row image-box style2">
                        <div class="col-md-6">
                            <article class="box">
                                <figure class="animated" data-animation-type="fadeInLeft" data-animation-duration="1">
                                    <a href="#" title=""><img src="http://placehold.it/270x192" alt="" width="270" height="192" /></a>
                                </figure>
                                <div class="details">
                                    <h4>Hire Cars</h4>
                                    <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id.</p>
                                    <a href="#" title="" class="button">SEE ALL</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6">
                            <article class="box">
                                <figure class="animated" data-animation-type="fadeInLeft" data-animation-duration="1" data-animation-delay="0.4">
                                    <a href="#" title=""><img src="http://placehold.it/270x192" alt="" width="270" height="192" /></a>
                                </figure>
                                <div class="details">
                                    <h4>Cruise Deals</h4>
                                    <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id.</p>
                                    <a href="#" title="" class="button">SEE ALL</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6">
                            <article class="box">
                                <figure class="animated" data-animation-type="fadeInLeft" data-animation-duration="1">
                                    <a href="#" title=""><img src="http://placehold.it/270x192" alt="" width="270" height="192" /></a>
                                </figure>
                                <div class="details">
                                    <h4>Things To Do</h4>
                                    <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id.</p>
                                    <a href="#" title="" class="button">SEE ALL</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6">
                            <article class="box">
                                <figure class="animated" data-animation-type="fadeInLeft" data-animation-duration="1" data-animation-delay="0.4">
                                    <a href="#" title=""><img src="http://placehold.it/270x192" alt="" width="270" height="192" /></a>
                                </figure>
                                <div class="details">
                                    <h4>Fly in Comfort</h4>
                                    <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id.</p>
                                    <a href="#" title="" class="button">SEE ALL</a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Features section -->
            <div class="features section global-map-area parallax" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row image-box style7">
                        <div class="col-sms-6 col-sm-6 col-md-3">
                            <article class="box">
                                <figure class="middle-block">
                                    <img src="http://placehold.it/300x120" alt="" class="middle-item" />
                                    <span class="opacity-wrapper"></span>
                                </figure>
                                <div class="details">
                                    <h4><a href="#">Best Price Guarantee</a></h4>
                                    <p>
                                        Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam elerisque mi id faucibus iaculis vitae pulvinar.
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="col-sms-6 col-sm-6 col-md-3">
                             <article class="box">
                                <figure class="middle-block">
                                    <img src="http://placehold.it/300x120" alt="" class="middle-item" />
                                    <span class="opacity-wrapper"></span>
                                </figure>
                                <div class="details">
                                    <h4><a href="#">Travel Insurance</a></h4>
                                    <p>
                                        Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam elerisque mi id faucibus iaculis vitae pulvinar.
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="col-sms-6 col-sm-6 col-md-3">
                             <article class="box">
                                <figure class="middle-block">
                                    <img src="http://placehold.it/300x120" alt="" class="middle-item" />
                                    <span class="opacity-wrapper"></span>
                                </figure>
                                <div class="details">
                                    <h4><a href="#">Why Chose Us</a></h4>
                                    <p>
                                        Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam elerisque mi id faucibus iaculis vitae pulvinar.
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="col-sms-6 col-sm-6 col-md-3">
                             <article class="box">
                                <figure class="middle-block">
                                    <img src="http://placehold.it/300x120" alt="" class="middle-item" />
                                    <span class="opacity-wrapper"></span>
                                </figure>
                                <div class="details">
                                    <h4><a href="#">Need Help?</a></h4>
                                    <p>
                                        Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam elerisque mi id faucibus iaculis vitae pulvinar.
                                    </p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
