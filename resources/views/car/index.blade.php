@extends('car.layout.master')
@section('content')
<!-- Main jumbotron for a primary marketing message or call to action -->
{{--<section class="main-banner" style="background:#242c36 url('../job/img/slider-01.jpg') no-repeat">--}}
{{--    <div class="container">--}}
{{--        <div class="caption">--}}
{{--            <h2>Multiservice Application</h2>--}}
{{--            <form>--}}
{{--                <fieldset>--}}
{{--                    <div class="col-md-5 col-sm-4 no-pad">--}}
{{--                        <form class="form" action="/products/search" method="POST">--}}
{{--                            @csrf--}}
{{--                            <div class="control-group pb-3">--}}
{{--                                <input id="searchProduct" class="form-control border-right search-field" type="search" placeholder="Search jobs" name="query" />--}}

{{--                                --}}{{--                                    <a class="search-button" type="submit"> <i class="fa fa-search fa-lg"></i></a>--}}
{{--                                <button type="submit" class="btn">Submit<i class="fa fa-search fa-lg"></i></button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                        <input type="text" class="form-control border-right" placeholder="Skills, Designation, Companies" />--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 col-sm-3 no-pad">--}}
{{--                        <select class="selectpicker border-right">--}}
{{--                            <option>Experience</option>--}}
{{--                            <option>0 Year</option>--}}
{{--                            <option>1 Year</option>--}}
{{--                            <option>2 Year</option>--}}
{{--                            <option>3 Year</option>--}}
{{--                            <option>4 Year</option>--}}
{{--                            <option>5 Year</option>--}}
{{--                            <option>6 Year</option>--}}
{{--                            <option>7 Year</option>--}}
{{--                            <option>8 Year</option>--}}
{{--                            <option>9 Year</option>--}}
{{--                            <option>10 Year</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-5 col-sm-3 no-pad">--}}
{{--                        <select class="selectpicker">--}}
{{--                            <option>Select Category</option>--}}
{{--                            <option>Accounf & Finance</option>--}}
{{--                            <option>Information & Technology</option>--}}
{{--                            <option>Marketing</option>--}}
{{--                            <option>Food & Restaurent</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-2 col-sm-2 no-pad">--}}
{{--                        <input type="submit" class="btn seub-btn" value="submit" />--}}
{{--                    </div>--}}
{{--                </fieldset>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

{{--<section class="features">--}}
{{--    <div class="container">--}}
{{--        <div class="col-md-4 col-sm-4">--}}
{{--            <div class="features-content">--}}
{{--                <span class="box1"><span aria-hidden="true" class="icon-dial"></span></span>--}}
{{--                <h3>Create An Account</h3>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="col-md-4 col-sm-4">--}}
{{--            <div class="features-content">--}}
{{--                <span class="box1"><span aria-hidden="true" class="icon-search"></span></span>--}}
{{--                <h3>Search Desired Job</h3>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="col-md-4 col-sm-4">--}}
{{--            <div class="features-content">--}}
{{--                <span class="box1"><span aria-hidden="true" class="icon-printer"></span></span>--}}
{{--                <h3>Send Your Resume</h3>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="col-md-4 col-sm-4">--}}
{{--            <div class="features-content">--}}
{{--                <span class="box1"><span aria-hidden="true" class="icon-dial"></span></span>--}}
{{--                <h3>Create An Account</h3>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="col-md-4 col-sm-4">--}}
{{--            <div class="features-content">--}}
{{--                <span class="box1"><span aria-hidden="true" class="icon-search"></span></span>--}}
{{--                <h3>Search Desired Job</h3>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="col-md-4 col-sm-4">--}}
{{--            <div class="features-content">--}}
{{--                <span class="box1"><span aria-hidden="true" class="icon-printer"></span></span>--}}
{{--                <h3>Send Your Resume</h3>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</section>--}}

{{--<section class="counter">--}}
{{--    <div class="container">--}}
{{--        <div class="col-md-3 col-sm-3">--}}
{{--            <div class="counter-text">--}}
{{--                <span aria-hidden="true" class="icon-briefcase"></span>--}}
{{--                <h3>1000</h3>--}}
{{--                <p>Jobs Posted</p>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="col-md-3 col-sm-3">--}}
{{--            <div class="counter-text">--}}
{{--                <span class="box1"><span aria-hidden="true" class="icon-expand"></span></span>--}}
{{--                <h3>207</h3>--}}
{{--                <p>All Companies</p>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="col-md-3 col-sm-3">--}}
{{--            <div class="counter-text">--}}
{{--                <span class="box1"><span aria-hidden="true" class="icon-profile-male"></span></span>--}}
{{--                <h3>700+</h3>--}}
{{--                <p>Total Members</p>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="col-md-3 col-sm-3">--}}
{{--            <div class="counter-text">--}}
{{--                <span class="box1"><span aria-hidden="true" class="icon-sad"></span></span>--}}
{{--                <h3>802+</h3>--}}
{{--                <p>Happy Members</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

<div class="ads-grid">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">Rental Service
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
            </span>
        </h3>


        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            @foreach($catList as $menu_item)
                <li role="presentation" class="{{ $loop->first ? 'active' : '' }}"><a href="#tab-{{ $menu_item->id }}" aria-controls="home" role="tab" data-toggle="tab">{{ $menu_item->car_category }}</a></li>
            @endforeach
        </ul>

        <div class="tab-content">
            <div class="companies">
                @foreach($catList as $item)
            <div id="#tab-{{ $item->id }}" class="tab-pane fade in {{ $loop->first ? 'active' : '' }}">
{{--                <h3>{{$car->category->car_category}}</h3>--}}
                @foreach($item->cars as $car)
                <div class="company-list">
                    <div class="row">
                        <div class="col-md-2 col-sm-2">
                            <div class="company-logo">
                                <img src="/storage/images/carDetails/{{$car->image}}" class="img-responsive" alt="" />
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <div class="company-content">
                                <h3>{{$car->model}}<span class="full-time">{{$car->category->car_category}}</span></h3>
                                <p><span class="company-name"><i class="fa fa-seat"></i>{{$car->seats}} Seater</span><span class="company-location"><i class="fa fa-cog"></i> {{$car->description}}</span></p>
                                {{--                            <span class="package"><i class="fa fa-money"></i>{{$car->model}}</span>--}}
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2 pt-2">
                            @if(!Auth::user())
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out" data-toggle="modal" data-target="#myModal1">
                                    <input type="submit" name="submit" value="Rent" class="button" />
                                </div>
                            @else
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out" data-toggle="modal" data-target="#myModal4">
                                    <input type="submit" name="submit" value="Rent" class="button" />
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            @endforeach
{{--            <div id="menu1" class="tab-pane fade">--}}
{{--                <h3>Menu 1</h3>--}}
{{--                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>--}}
{{--            </div>--}}
{{--            <div id="menu2" class="tab-pane fade">--}}
{{--                <h3>Menu 2</h3>--}}
{{--                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>--}}
{{--            </div>--}}
{{--            <div id="menu3" class="tab-pane fade">--}}
{{--                <h3>Menu 3</h3>--}}
{{--                <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>--}}
{{--            </div>--}}
        </div>
        </div>

{{--        <div class="row heading">--}}
{{--            <h2>Find Popular Jobs</h2>--}}
{{--            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>--}}
{{--        </div>--}}
{{--        <div class="companies">--}}
{{--            @foreach($cars as $car)--}}
{{--            <div class="company-list">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-2 col-sm-2">--}}
{{--                        <div class="company-logo">--}}
{{--                            <img src="/storage/images/carDetails/{{$car->image}}" class="img-responsive" alt="" />--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-8 col-sm-8">--}}
{{--                        <div class="company-content">--}}
{{--                            <h3>{{$car->model}}<span class="full-time">{{$car->category->car_category}}</span></h3>--}}
{{--                            <p><span class="company-name"><i class="fa fa-seat"></i>{{$car->seats}} Seater</span><span class="company-location"><i class="fa fa-cog"></i> {{$car->description}}</span></p>--}}
{{--                            <span class="package"><i class="fa fa-money"></i>{{$car->model}}</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-2 col-sm-2 pt-2">--}}
{{--                        @if(!Auth::user())--}}
{{--                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out" data-toggle="modal" data-target="#myModal1">--}}
{{--                                <input type="submit" name="submit" value="Rent" class="button" />--}}
{{--                            </div>--}}
{{--                        @else--}}
{{--                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out" data-toggle="modal" data-target="#myModal4">--}}
{{--                                <input type="submit" name="submit" value="Rent" class="button" />--}}
{{--                            </div>--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            @endforeach--}}

{{--            <div class="company-list">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-2 col-sm-2">--}}
{{--                        <div class="company-logo">--}}
{{--                            <img src="job/img/microsoft.png" class="img-responsive" alt="" />--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-10 col-sm-10">--}}
{{--                        <div class="company-content">--}}
{{--                            <h3>Back-End developer<span class="part-time">Part Time</span></h3>--}}
{{--                            <p><span class="company-name"><i class="fa fa-briefcase"></i>Microsoft</span><span class="company-location"><i class="fa fa-map-marker"></i> 7th Avenue, New York, NY, United States</span><span class="package"><i class="fa fa-money"></i>$20,000-$52,000</span></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="company-list">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-2 col-sm-2">--}}
{{--                        <div class="company-logo">--}}
{{--                            <img src="job/img/apple.png" class="img-responsive" alt="" />--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-10 col-sm-10">--}}
{{--                        <div class="company-content">--}}
{{--                            <h3>UI/UX Designer<span class="freelance">Freelance</span></h3>--}}
{{--                            <p><span class="company-name"><i class="fa fa-briefcase"></i>Apple</span><span class="company-location"><i class="fa fa-map-marker"></i> 7th Avenue, New York, NY, United States</span><span class="package"><i class="fa fa-money"></i>$22,000-$50,000</span></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="company-list">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-2 col-sm-2">--}}
{{--                        <div class="company-logo">--}}
{{--                            <img src="job/img/wipro.png" class="img-responsive" alt="" />--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-10 col-sm-10">--}}
{{--                        <div class="company-content">--}}
{{--                            <h3>IOS developer<span class="internship">Intership</span></h3>--}}
{{--                            <p><span class="company-name"><i class="fa fa-briefcase"></i>Wipro</span><span class="company-location"><i class="fa fa-map-marker"></i> 8th Avenue, New York, NY, United States</span><span class="package"><i class="fa fa-money"></i>$24,000-$52,000</span></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="company-list">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-2 col-sm-2">--}}
{{--                        <div class="company-logo">--}}
{{--                            <img src="job/img/twitter.png" class="img-responsive" alt="" />--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-10 col-sm-10">--}}
{{--                        <div class="company-content">--}}
{{--                            <h3>Marketing Holder<span class="full-time">Full Time</span></h3>--}}
{{--                            <p><span class="company-name"><i class="fa fa-briefcase"></i>Twitter</span><span class="company-location"><i class="fa fa-map-marker"></i> 4th Avenue, New York, NY, United States</span><span class="package"><i class="fa fa-money"></i>$24,000-$48,000</span></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
{{--        <div class="row">--}}
{{--            <input type="button" class="btn brows-btn" value="Brows All Jobs" />--}}
{{--        </div>--}}
    </div>
</div>

{{--<section class="testimonials dark">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div id="testimonial-slider" class="owl-carousel">--}}
{{--                    <div class="testimonial">--}}
{{--                        <div class="pic">--}}
{{--                            <img src="job/img/client-1.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <p class="description">--}}
{{--                            " Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi facilis itaque minus non odio, quaerat ullam unde voluptatum? "--}}
{{--                        </p>--}}
{{--                        <h3 class="testimonial-title">williamson</h3>--}}
{{--                        <span class="post">Web Developer</span>--}}
{{--                    </div>--}}

{{--                    <div class="testimonial">--}}
{{--                        <div class="pic">--}}
{{--                            <img src="job/img/client-2.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <p class="description">--}}
{{--                            " Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi facilis itaque minus non odio, quaerat ullam unde voluptatum? "--}}
{{--                        </p>--}}
{{--                        <h3 class="testimonial-title">kristiana</h3>--}}
{{--                        <span class="post">Web Designer</span>--}}
{{--                    </div>--}}

{{--                    <div class="testimonial">--}}
{{--                        <div class="pic">--}}
{{--                            <img src="job/img/client-3.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <p class="description">--}}
{{--                            " Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi facilis itaque minus non odio, quaerat ullam unde voluptatum? "--}}
{{--                        </p>--}}
{{--                        <h3 class="testimonial-title">kristiana</h3>--}}
{{--                        <span class="post">Web Designer</span>--}}
{{--                    </div>--}}

{{--                    <div class="testimonial">--}}
{{--                        <div class="pic">--}}
{{--                            <img src="job/img/client-4.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <p class="description">--}}
{{--                            " Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi facilis itaque minus non odio, quaerat ullam unde voluptatum? "--}}
{{--                        </p>--}}
{{--                        <h3 class="testimonial-title">kristiana</h3>--}}
{{--                        <span class="post">Web Designer</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

{{--<section class="pricind">--}}
{{--    <div class="container">--}}
{{--        <div class="col-md-4 col-sm-4">--}}
{{--            <div class="package-box">--}}
{{--                <div class="package-header">--}}
{{--                    <i class="fa fa-cog" aria-hidden="true"></i>--}}
{{--                    <h3>Professional</h3>--}}
{{--                </div>--}}
{{--                <div class="package-info">--}}
{{--                    <ul>--}}
{{--                        <li>3 Designs</li>--}}
{{--                        <li>3 PSD Designs</li>--}}
{{--                        <li>4 color Option</li>--}}
{{--                        <li>10GB Disk Space</li>--}}
{{--                        <li>Full Support</li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="package-price">--}}
{{--                    <h2><sup>$ </sup>10<sub>/Month</sub></h2>--}}
{{--                </div>--}}
{{--                <button type="submit" class="btn btn-package">Sign Up</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-4 col-sm-4">--}}
{{--            <div class="package-box">--}}
{{--                <div class="package-header">--}}
{{--                    <i class="fa fa-star-half-o" aria-hidden="true"></i>--}}
{{--                    <h3>Standard</h3>--}}
{{--                </div>--}}
{{--                <div class="package-info">--}}
{{--                    <ul>--}}
{{--                        <li>3 Designs</li>--}}
{{--                        <li>3 PSD Designs</li>--}}
{{--                        <li>4 color Option</li>--}}
{{--                        <li>10GB Disk Space</li>--}}
{{--                        <li>Full Support</li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="package-price">--}}
{{--                    <h2><sup>$ </sup>110<sub>/Month</sub></h2>--}}
{{--                </div>--}}
{{--                <button type="submit" class="btn btn-package">Sign Up</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-4 col-sm-4">--}}
{{--            <div class="package-box">--}}
{{--                <div class="package-header">--}}
{{--                    <i class="fa fa-cube" aria-hidden="true"></i>--}}
{{--                    <h3>Premium</h3>--}}
{{--                </div>--}}
{{--                <div class="package-info">--}}
{{--                    <ul>--}}
{{--                        <li>3 Designs</li>--}}
{{--                        <li>3 PSD Designs</li>--}}
{{--                        <li>4 color Option</li>--}}
{{--                        <li>10GB Disk Space</li>--}}
{{--                        <li>Full Support</li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="package-price">--}}
{{--                    <h2><sup>$ </sup>170<sub>/Month</sub></h2>--}}
{{--                </div>--}}
{{--                <button type="submit" class="btn btn-package">Sign Up</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

{{--<section class="membercard dark">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-4 col-sm-4">--}}
{{--                <div class="left-widget-sidebar">--}}
{{--                    <div class="card-widget bg-white user-card">--}}
{{--                        <div class="u-img img-cover" style="background-image: url(img/bg-1.jpg);background-size:cover;"></div>--}}
{{--                        <div class="u-content">--}}
{{--                            <div class="avatar box-80">--}}
{{--                                <img class="img-responsive img-circle img-70 shadow-white" src="job/img/avatar3.jpg" alt="">--}}
{{--                                <i class="fa fa-circle-o fa-green"></i>--}}
{{--                            </div>--}}
{{--                            <h5>Sazzel Shi</h5>--}}
{{--                            <p class="text-muted">UX/ Designer</p>--}}
{{--                        </div>--}}
{{--                        <div class="user-social-profile">--}}
{{--                            <ul>--}}
{{--                                <li><a href=""><i class="fa fa-facebook"></i></a></li>--}}
{{--                                <li><a href=""><i class="fa fa-google-plus"></i></a></li>--}}
{{--                                <li><a href=""><i class="fa fa-twitter"></i></a></li>--}}
{{--                                <li><a href=""><i class="fa fa-instagram"></i></a></li>--}}
{{--                                <li><a href=""><i class="fa fa-linkedin"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4 col-sm-4">--}}
{{--                <div class="left-widget-sidebar">--}}
{{--                    <div class="card-widget bg-white user-card">--}}
{{--                        <div class="u-img img-cover" style="background-image: url('../job/img/bg-2.jpg');background-size:cover;"></div>--}}
{{--                        <div class="u-content">--}}
{{--                            <div class="avatar box-80">--}}
{{--                                <img class="img-responsive img-circle img-70 shadow-white" src="job/img/avatar2.jpg" alt="">--}}
{{--                                <i class="fa fa-circle-o fa-green"></i>--}}
{{--                            </div>--}}
{{--                            <h5>Daniel Dezox</h5>--}}
{{--                            <p class="text-muted">CEO Founder</p>--}}
{{--                        </div>--}}
{{--                        <div class="user-social-profile">--}}
{{--                            <ul>--}}
{{--                                <li><a href=""><i class="fa fa-facebook"></i></a></li>--}}
{{--                                <li><a href=""><i class="fa fa-google-plus"></i></a></li>--}}
{{--                                <li><a href=""><i class="fa fa-twitter"></i></a></li>--}}
{{--                                <li><a href=""><i class="fa fa-instagram"></i></a></li>--}}
{{--                                <li><a href=""><i class="fa fa-linkedin"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4 col-sm-4">--}}
{{--                <div class="left-widget-sidebar">--}}
{{--                    <div class="card-widget bg-white user-card">--}}
{{--                        <div class="u-img img-cover" style="background-image: url('../img/bg-3.jpg');background-size:cover;"></div>--}}
{{--                        <div class="u-content">--}}
{{--                            <div class="avatar box-80">--}}
{{--                                <img class="img-responsive img-circle img-70 shadow-white" src="job/img/avatar1.jpg" alt="">--}}
{{--                                <i class="fa fa-circle-o fa-green"></i>--}}
{{--                            </div>--}}
{{--                            <h5>Silp Sizzer</h5>--}}
{{--                            <p class="text-muted">Human Resource</p>--}}
{{--                        </div>--}}
{{--                        <div class="user-social-profile">--}}
{{--                            <ul>--}}
{{--                                <li><a href=""><i class="fa fa-facebook"></i></a></li>--}}
{{--                                <li><a href=""><i class="fa fa-google-plus"></i></a></li>--}}
{{--                                <li><a href=""><i class="fa fa-twitter"></i></a></li>--}}
{{--                                <li><a href=""><i class="fa fa-instagram"></i></a></li>--}}
{{--                                <li><a href=""><i class="fa fa-linkedin"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}


{{--<section class="newsletter">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">--}}
{{--                <h2>Want More Job & Latest Job? </h2>--}}
{{--                <p>Subscribe to our mailing list to receive an update when new Job arrive!</p>--}}
{{--                <div class="input-group">--}}
{{--                    <input type="text" class="form-control" placeholder="Type Your Email Address...">--}}
{{--                    <span class="input-group-btn">--}}
{{--							<button type="button" class="btn btn-default">subscribe!</button>--}}
{{--						</span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
@endsection

<!-- footer start -->

