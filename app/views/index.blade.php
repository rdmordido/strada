@extends('layouts.master')
@section('content')
 <div id="banner" class="fullscreen">
        <div class="wrapper">
            <div id="the-banner">
                <div id="banner-text">
                    <h1>₱55,000</h1>
                    <h2>Pre-Order Exclusive</h2>
                    <h3>Reserve an all-new Mitsubishi Strada now!</h3>
                    <p>Pay a reservation fee of P10,000 from February 25 to March 22, 2015 to avail of the <strong>Pre-Order Exclusive</strong>.  Register  on or before March 22, 2015 to activate the <strong>Pre-Order Exclusive</strong>.</p>
                    <a href="#" class="register-btn">REGISTER NOW</a>
                </div>
                <div id="banner-footer" class="clear">
                    <div class="social-media-icons">
                        <a href="#"><img src="/assets/img/fb.png" /></a>
                        <a href="#"><img src="/assets/img/tw.png" /></a>
                        <span>Copyright Mitsubishi Motors Philippines 2013</span>
                    </div>
                    <div class="mitsubishi-logo">
                        <img src="/assets/img/mitsu.png" />
                    </div>
                </div>
            </div>
        </div>
    </div>
<div id="registration" class="fullscreen">
        <div class="wrapper">
            <div class="title">
                <h1>REGISTRATION</h1>
            </div>
            <div class="content">
                <p class="form-title">Personal Information</p>
				<div class="alert alert-success alert-dismissable" style="display:none;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Success!</strong> You have been registered
                </div>                
                <form id="register">
                    <div class="clear">
                        <div class="col-md-6">
                            <!-- coupon code and or number -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="coupon" name="coupon" class="form-control" placeholder="Coupon Code" />
                                    </div>    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="reservation" name="reservation" class="form-control" placeholder="Reservation OR Number" />
                                    </div>  
                                </div>
                            </div>
                            <!-- names -->
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name*" />
                                    </div>    
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First Name*" />
                                    </div>  
                                </div>
                                 <div class="col-md-2">
                                    <div class="form-group">
                                        <input type="text" id="mi" name="mi" class="form-control" placeholder="M.I." />
                                    </div>  
                                </div>
                            </div>
                            <!-- address -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" id="address" name="address" class="form-control" placeholder="Address " />
                                    </div>    
                                </div>
                            </div>
                            <!-- email and contact number -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Contact Number*" />
                                    </div>    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" id="email" name="email"email class="form-control" placeholder="Email*" />
                                    </div>  
                                </div>
                            </div>
                            <!-- civil status and gender -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        Civil Status &nbsp;&nbsp;
                                        <label><input type="radio" name="civil_status" value="single" checked/> Single</label>
                                        <label><input type="radio" name="civil_status" value="married"/> Married</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        Gender  &nbsp;&nbsp;
                                        <label><input type="radio" name="gender" value="male" checked/> Male</label>
                                        <label><input type="radio" name="gender" value="female" /> Female</label>
                                    </div>
                                </div>
                            </div>
                            <!-- occupation and immediate family members -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="occupation" name="occupation" class="form-control" placeholder="Occupation/Industry" />
                                    </div>    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="family" name="family" class="form-control" placeholder="No. of immediate family members" />
                                    </div>  
                                </div>
                            </div>
                            <!-- where did you learn strada robert? tell me robert where? -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select id="learn_source" name="learn_source" class="form-control">
                                            <option value="">Where did you learn about the Mirage G4?</option>
                                            <option value="Friends/Family">Friends/Family</option>
                                            <option value="Print Ad">Print Ad</option>
                                            <option value="Billboard/Flyer">Billboard/Flyer</option>
                                            <option value="TV">TV</option>
                                          </select>
                                        </select>
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <!-- end of first column -->                        
                        <div class="col-md-6">
                            <!-- coupon code and or number -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label style="display:none;" class="control-label" for="area"></label>
                                        <select id="area" name="area" class="form-control">
                                            <option value="">Area</option>
                                            @foreach($locations as $location)
                                            <option value="{{$location->id}}">{{$location->name}}</option>
                                            @endforeach
                                        </select>
                                    </div> 
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label style="display:none;" class="control-label" for="area"></label>
                                        <select id="dealer" name="dealer" class="form-control">
                                            <option value="">Dealer</option>
                                        </select>
                                    </div> 
                                </div>
                            </div>
                            <!-- names -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label style="display:none;" class="control-label" for="area"></label>
                                        <select id="model" name="model" class="form-control">
                                            <option value="">Preferred model/Variant</option>
                                            <option value="GL 4x2 M/T">GL 4x2 M/T</option>
                                            <option value="GLX 4x2 M/T">GLX 4x2 M/T</option>
                                            <option value="GLX V 4x2 A/T">GLX V 4x2 A/T</option>
                                            <option value="GL 4x4 M/T">GL 4x4 M/T</option>
                                            <option value="GLS V 4x4 M/T">GLS V 4x4 M/T</option>
                                            <option value="GLS Sport V 4x4 A/T">GLS Sport V 4x4 A/T</option>
                                        </select>
                                    </div>  
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="sales" name="sales" class="form-control" placeholder="Sales Executive" />
                                    </div>  
                                </div>
                            </div>
                            <!-- address -->
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="small">Top 3 color choices: (choose from the colors below)</p>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="small">1st Priority</label>
                                        <select id="color1" name="color1" class="form-control">
                                            <option value="">Select Color</option>
                                            <option value="Gemstone Grey Mica">Gemstone Grey Mica</option>
                                            <option value="Pyrenese Black">Pyrenese Black</option>
                                            <option value="Aurora White">Aurora White</option>
                                            <option value="Cool Silver">Cool Silver</option>
                                        </select>
                                    </div>    
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="small">2nd Priority</label>
                                        <select id="color2" name="color2" class="form-control">
                                            <option value="">Select Color</option>
                                            <option value="Gemstone Grey Mica">Gemstone Grey Mica</option>
                                            <option value="Pyrenese Black">Pyrenese Black</option>
                                            <option value="Aurora White">Aurora White</option>
                                            <option value="Cool Silver">Cool Silver</option>
                                        </select>
                                    </div>    
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="small">3rd Priority</label>
                                        <select id="color2" name="color2" class="form-control">
                                            <option value="">Select Color</option>
                                            <option value="Gemstone Grey Mica">Gemstone Grey Mica</option>
                                            <option value="Pyrenese Black">Pyrenese Black</option>
                                            <option value="Aurora White">Aurora White</option>
                                            <option value="Cool Silver">Cool Silver</option>
                                        </select>
                                    </div>    
                                </div>
                            </div>
                            <!-- email and contact number -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select id="car_order" name="car_order" class="form-control">
                                            <option value="">Is this your first, second or replacement car?</option>
                                            <option value="First">First</option>
                                            <option value="Replacement">Replacement</option>
                                            <option value="Additional">Additional</option>
                                        </select>
                                    </div>    
                                </div>
                            </div>
                            <!-- civil status and gender -->
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="small">Please rank each feature of the Strada based on your personal preference. 1 = Highest, 5 = Lowest</p>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="small">Price</label>
                                        <select id="price" name="price" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>    
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="small">Design</label>
                                        <select id="design" name="design" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>    
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="small">Size</label>
                                        <select id="size" name="size" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>    
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="small">Features</label>
                                        <select id="features" name="features" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>    
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="small">Brand</label>
                                        <select id="brand" name="brand" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>    
                                </div>
                            </div>
                            <!-- occupation and immediate family members -->
                        </div>
                        <!-- end of second column -->
                        <div class="col-md-12"> 
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="small">Which other car models are you considering to purchase? Separate multiple entries with a comma.</p>
                                    <div class="form-group">
                                        <input type="text" id="other_models" name="other_models" class="form-control" placeholder="Occupation/Industry" />
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>              
                    <div class="form-bottom-img">
                        <img src="/assets/img/vehicles.png" width="100%" />
                    </div>
                    <div class="form-submit-btn">
                        <button type="submit" class="btn">SEND</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="features" class="fullscreen">
        <div class="wrapper">
            <div class="title">
                <h1>FEATURES</h1>
            </div>
            <div class="content">
                <h2 align="center">Coming Soon! </h2>
            </div>
        </div>
    </div>
    <div id="mechanics" class="fullscreen">
        <div class="wrapper">
            <div class="title">
                <h1>PROMO MECHANICS</h1>
            </div>
            <div class="content">
                <div class="mechanics-text">
                    <h4>All New Mitsubishi Strada Online Reservation</h4>
                    <ol>
                    <li>Customers who make a reservation payment of P10, 000 on the 2015 All-New Mitsubishi Strada are entitled to avail of the P55, 000 Pre-Order Incentive. <br />
                        This effectively reserves their unit and ensures priority delivery of their preferred color and variant when it becomes available.  The reservation fee of P10,000 <br />
                        will not be deducted from the car’s SRP.
                    </li>
                    
                    <li>The Pre-Order Incentive can be redeemed in Mitsubishi Motors dealers nationwide. <br />
                        P55,000 Pre-Order Incentive will be redeemed on the day the car purchase.</li>
                    
                    <li>Reservation must be done from February 25 to March 22, 2015 only.</li>
                    
                    <li>Vehicle must be purchased and delivered on or before April 30, 2015.</li>
                    
                    </ol>
                    <h4>HOW TO QUALIFY FOR THE P55,000 DISCOUNT</h4>
                    
                    <oL>
                        <li>Upon reservation payment at the Mitsubishi Motors dealer, customer should log on to: www.allnewstrada.ph  to register their purchase and qualify for the discount.                       <br />They should complete/fill-up the registration form with the following details:
                            <ul>
                                <li>Name</li>
                                <li>Address</li>
                                <li>Contact Number</li>
                                <li>Email Address</li>
                                <li>Civil Status</li>
                                <li>Age</li>
                                <li>Gender</li>
                                <li>Occupation / Industry</li>
                                <li>OR Number </li>
                                <li>Dealer/Branch/Dealer Email address </li>
                                <li>Sales Executive</li>
                                <li>Preferred Model / Variant</li>
                                <li>Top 3 Color Choices</li>
                                <li>Are you a current pick-up owner?   If yes, what brand and model?</li>
                                <li>What you like most about the Strada?</li>
                                <li>Did you check out another pick-up brand? If yes, what brand and model?</li>
                                <li>Where did you learn about the Strada?</li>
                            </ul>
                        </li>
                        <li>A message acknowledging your entry will appear on the screen. </li>
                    
                        <li>After registration, customer will receive acknowledgment email with the following details:
                            <ul>
                                <li>Name of customer</li>
                                <li>Address</li>
                                <li>Contact Number</li>
                                <li>Color of vehicle</li>
                                <li>Dealer name</li>
                            </ul>
                        </li>
                        <li>Reservation is transferable to immediate family members only (father, mother, brother, sister, husband, wife, son or daughter) and they should present <br />
                        valid ID’s as support. Reservation is refundable.</li>
                        
                    
                        <li>Deadline for online registration for the pre-order incentive will be on March 22, 2015 at 11:59PM.</li>
                    
                    </oL>
                    <p>All employees of Mitsubishi Motors Philippines Corporation, Beginnings Communications, Inc. and all employees of participating Mitsubishi dealers, including their relatives up to the second degree of affinity or consanguinity are disqualified from joining the promotion.</p>
                    
                    
                    <p>Per DTI FTEB SPD Permit Number      , Series of 2015.</p>
                </div>
            </div>
        </div>
    </div>
@stop