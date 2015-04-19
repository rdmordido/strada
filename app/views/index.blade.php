@extends('layouts.master')
@section('content')
<div id="banner" class="fullscreen" style="text-align:center">
    <img src="/assets/img/launch print ad.jpg" width="90%" />
</div>
<?php /*
 <div id="banner" class="fullscreen">
        <div class="wrapper">
            <div id="the-banner">
                <div id="banner-text">
                    <h1>₱55,000</h1>
                    <h2>Pre-Order Savings Exclusive</h2>
                    <h3>Reserve an all-new Mitsubishi Strada now!</h3>
                    <p>Pay a reservation fee of P10,000 until April 1, 2015 to avail of the <strong>Pre-Order Exclusive</strong>.</p>
                    <!-- <a href="javascript:;" class="register-btn" data-href="registration">REGISTER NOW</a> -->
                </div>

                <div id="banner-footer" class="clear">

                    <div class="social-media-icons">
						<!--
                        <a href="#"><img src="/assets/img/fb.png" /></a>

                        <a href="#"><img src="/assets/img/tw.png" /></a>
						-->
                        <span>Copyright Mitsubishi Motors Philippines 2015</span>

                    </div>

                    <div class="mitsubishi-logo">

                        <img src="/assets/img/mitsu.png" />

                    </div>

                </div>

            </div>
        </div>
    </div>
*/?>
<?php /* <div id="registration" class="fullscreen">
        <div class="wrapper">
            <div class="title">
                <h1>REGISTRATION</h1>
            </div>
            <div class="content">
                <p class="form-title">Personal Information</p>
				<div class="alert alert-success alert-dismissable" style="display:none;">                    
                    <strong>Success!</strong> You have been registered
                </div>
                <div class="alert alert-danger alert-dismissable" style="display:none;">
                </div>
                <form id="register">
                    <div class="clear">
                        <div class="col-md-6">
                            <!-- names -->
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label style="display:none;" class="control-label" for="lastname"></label>
                                        <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name" />
                                    </div>    
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label style="display:none;" class="control-label" for="firstname"></label>
                                        <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First Name" />
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
                                        <label style="display:none;" class="control-label" for="address"></label>
                                        <input type="text" id="address" name="address" class="form-control" placeholder="Address" />
                                    </div>    
                                </div>
                            </div>
                            <!-- email and contact number -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label style="display:none;" class="control-label" for="phone"></label>
                                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Contact Number" />
                                    </div>    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label style="display:none;" class="control-label" for="email"></label>
                                        <input type="email" id="email" name="email"email class="form-control" placeholder="Email" />
                                    </div>  
                                </div>
                            </div>
                            <!-- civil status and gender -->
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label style="display:none;" class="control-label" for="age"></label>
                                        <input id="age" name="age" type="text" class="form-control" placeholder="Age">
                                    </div>  
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        Civil Status &nbsp;&nbsp;
                                        <label><input type="radio" name="civil_status" value="single" checked/> Single</label>
                                        <label><input type="radio" name="civil_status" value="married"/> Married</label>
                                    </div>
                                </div>
                                <div class="col-md-5">
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
                                        <label style="display:none;" class="control-label" for="occupation"></label>
                                        <input type="text" id="occupation" name="occupation" class="form-control" placeholder="Occupation/Industry" />
                                    </div>    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label style="display:none;" class="control-label" for="or_number"></label>
                                        <input type="text" id="or_number" name="or_number" class="form-control" placeholder="OR Number" />
                                    </div>  
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="display:none;" class="control-label" for="branch_code"></label>
                                        <input type="text" id="branch_code" name="branch_code" class="form-control" placeholder="7 Characters Control Code (provided by dealer)" maxlength="7">
                                    </div>    
                                </div>
                            </div>
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
                                        <label style="display:none;" class="control-label" for="dealer"></label>
                                        <select id="dealer" name="dealer" class="form-control">
                                            <option value="">Dealer</option>
                                        </select>
                                    </div> 
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label style="display:none;" class="control-label" for="model"></label>
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
                                        <label style="display:none;" class="control-label" for="sales"></label>
                                        <input type="text" id="sales" name="sales" class="form-control" placeholder="Sales Executive" />
                                    </div>  
                                </div>
                            </div>                            
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="small">Top 3 color choices: (choose from the colors below)</p>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label style="display:none;" class="control-label" for="color1"></label>
                                        <label class="small">1st Priority</label>
                                        <select id="color1" name="color1" class="form-control">
                                            <option value="">Select Color</option>
                                            <option value="Quartz Brown Metallic">Quartz Brown Metallic</option>
                                            <option value="Impulse Blue Metallic">Impulse Blue Metallic</option>
                                            <option value="Earth Green Metallic">Earth Green Metallic</option>
                                            <option value="Rosita Red">Rosita Red</option>
                                            <option value="Virgil Gray">Virgil Gray</option>
                                            <option value="Sterling Silver Metallic">Sterling Silver Metallic</option>
                                            <option value="Polar White">Polar White</option>
                                            <option value="Savanna White">Savanna White</option>
                                            <option value="Pyrenese Black">Pyrenese Black</option>
                                        </select>
                                    </div>    
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label style="display:none;" class="control-label" for="color2"></label>
                                        <label class="small">2nd Priority</label>
                                        <select id="color2" name="color2" class="form-control">
                                            <option value="">Select Color</option>
                                            <option value="Quartz Brown Metallic">Quartz Brown Metallic</option>
                                            <option value="Impulse Blue Metallic">Impulse Blue Metallic</option>
                                            <option value="Earth Green Metallic">Earth Green Metallic</option>
                                            <option value="Rosita Red">Rosita Red</option>
                                            <option value="Virgil Gray">Virgil Gray</option>
                                            <option value="Sterling Silver Metallic">Sterling Silver Metallic</option>
                                            <option value="Polar White">Polar White</option>
                                            <option value="Savanna White">Savanna White</option>
                                            <option value="Pyrenese Black">Pyrenese Black</option>
                                        </select>
                                    </div>    
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label style="display:none;" class="control-label" for="color3"></label>
                                        <label class="small">3rd Priority</label>
                                        <select id="color3" name="color3" class="form-control">
                                            <option value="">Select Color</option>
                                            <option value="Quartz Brown Metallic">Quartz Brown Metallic</option>
                                            <option value="Impulse Blue Metallic">Impulse Blue Metallic</option>
                                            <option value="Earth Green Metallic">Earth Green Metallic</option>
                                            <option value="Rosita Red">Rosita Red</option>
                                            <option value="Virgil Gray">Virgil Gray</option>
                                            <option value="Sterling Silver Metallic">Sterling Silver Metallic</option>
                                            <option value="Polar White">Polar White</option>
                                            <option value="Savanna White">Savanna White</option>
                                            <option value="Pyrenese Black">Pyrenese Black</option>
                                        </select>
                                    </div>    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="display:none;" class="control-label" for="current_brand_model"></label>
                                        <input id="current_brand_model" name="current_brand_model" type="text" class="form-control question" placeholder="Are you a current pick-up owner? If yes, what brand and model?">
                                    </div>    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="display:none;" class="control-label" for="like_most"></label>
                                        <input id="like_most" name="like_most" type="text" class="form-control question" placeholder="What do you like most about the Strada?">
                                    </div>    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="display:none;" class="control-label" for="other_brand_model"></label>
                                        <input id="other_brand_model" name="other_brand_model" type="text" class="form-control question" placeholder="Did you check out another pick-up brands? If yes, what brands and models?">
                                    </div>    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="display:none;" class="control-label" for="learn_source"></label>
                                        <input id="learn_source" name="learn_source" type="text" class="form-control question" placeholder="Where did you learn about the Strada?">
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>              
                    <div class="form-bottom-img">
                        <img src="/assets/img/vehicles.png" width="100%" />
                    </div>
                    <div class="form-submit-btn">
                        <button type="submit" class="custom-btn">SEND</button>
                    </div>
                </form>
            </div>
        </div>
    </div> */ ?>

<?php /*
   <div id="mechanics" class="fullscreen">
        <div class="wrapper">
            <div class="title">
                <h1>PROMO MECHANICS</h1>
            </div>
            <div class="content">
                <div class="mechanics-text">
                    <h4>All-new Mitsubishi Strada Pre-Order Savings Exclusive Reservation</h4>
                    <ol>
                    <li>Customers who make a reservation payment of Php 10,000 for the All-New Mitsubishi Strada AND register in the Pre-Order Savings Exclusive registration site are entitled to a Php 55,000 Pre-Order Savings Exclusive. This effectively reserves their unit and ensures priority in delivery of their preferred color and variant once available. The Php 10,000 reservation payment will be deducted from the SRP.
                    </li>
                    
                    <li>The Php 55,000 Pre-Order Savings Exclusive can be redeemed in the same Mitsubishi Motors dealership where the reservation payment was made.
                        <ul>
                            <li>The Php 55,000 Pre-Order Savings exclusive can be deducted from the down payment, OR divided in the monthly amortization.</li>
                        </ul>
                    
                    </li>
                    
                    <li>Reservation must be made from February 25 to April 1, 2015 only.</li>
                    
                    <li>The all-new Strada must be purchased on or before April 30, 2015 end of business hours.</li>
                    </ol>
                    <h4>Pre-Order Savings Exclusive Registration</h4>
                    
                    <oL>
                        <li>Upon payment of the reservation fee at a Mitsubishi Motors dealership, their Sales Executives will fill out the customer information form for them. The Sales Executives will log on to www.allnewstrada.ph to register their customers for the Pre-Order Savings Exclusive. Customers should provide the following details:
                            <ul>
                                <li>Name</li>
                                <li>Address</li>
                                <li>Contact Number</li>
                                <li>Email Address</li>
                                <li>Civil Status</li>
                                <li>Age</li>
                                <li>Gender</li>
                                <li>Occupation / Industry</li>
                                <li>Reservation Payment O.R. Number </li>
                                <li>Control Code (dealership/SE will input the control code)</li>
                                <li>Dealer / Branch</li>
                                <li>Sales Executive</li>
                                <li>Preferred Model / Variant</li>
                                <li>Top 3 Color Choices</li>
                                <li>Answer these simple surveys:
                                	<ul>
                                        <li>Are you a current pick-up owner?   If yes, what brand and model?</li>
                                        <li>What do you like most about the all-new 2015 Mitsubishi Strada?</li>
                                        <li>Did you check out other pick-up models? If yes, what brand and model?</li>
                                        <li>Where did you learn about the all-new 2015 Mitsubishi Strada?</li>
                                    </ul>
                                </li>
                            </ul>
                            
                            <!-- <p>Note: Customers who made reservation payments but fail to register online will have their Php 55,000 Pre-Order Savings Exclusive forfeited.</p> -->
                        </li>
                        <li>After registration, the customer will receive an acknowledgment e-mail with the following details:
                            <ul>
                                <li>Name of customer</li>
                                <li>Address</li>
                                <li>Contact Number</li>
                                <li>Color of vehicle</li>
                                <li>Dealer name</li>
                                <li>Control Code</li>
                            </ul>
                        </li>
                        <li>Customers should check their e-mails for the confirmation e-mail. Customers are advised to check their Spam folder in case their confirmation email inadvertently goes to the Spam folder.</li>
                        <li>If the customer has not received his/her confirmation email within a day or two after making the reservation at the dealership, he/she is advised to contact their Sales Executive for follow up.</li>
                        <li>Reservation is transferable to immediate family members only (father, mother, brother, sister, husband, wife, son, or daughter). Immediate family members must present a photocopy of the registrant’s valid ID and their own when using the reservation.</li>
                        <li>The reservation payment is refundable.</li>
                        <li>Deadline for online registration for the Pre-Order Exclusive will be on April 1, 2015 at 11:59PM.</li>
                    
                    </oL>
                    <!-- <p>All employees of Mitsubishi Motors Philippines Corporation, Beginnings Communications, Inc. and all employees of participating Mitsubishi dealers, including their relatives up to the second degree of affinity or consanguinity are disqualified from joining the promotion.</p> -->
                    
                    
                    <p>Per DTI FTEB SPD Permit Number 1490, Series of 2015.</p>
                </div>
            </div>
        </div>
    </div>
*/?>
    <div id="stradafeatures" class="fullscreen" style="margin-top:105px;">
        <div class="wrapper">
            <div class="title">
                <h1>FEATURES</h1>
            </div>
            <div class="content">
            	<!--
                <p><img src="/assets/img/stradaflyer.jpg" width="100%" /></p>
                <p><a href="/assets/downloads/2015_Strada info flyer-new-02 FA 2182015.jpg" class="register-btn">DOWNLOAD BROCHURE FRONT</a> &nbsp; <a href="/assets/downloads/2015_Strada info flyer-new-01 FA 2182015.jpg" class="register-btn">DOWNLOAD BROCHURE BACK</a></p>
                -->
                <div id="features-box" class="clearfix">
                	<div class="sidebar">
                    	<div class="sidebar-nav">
                        	<ul>
                            	<li><a href="javascript:;" class="parent" data-href="jline">J-Line</a></li>
                                <li><a href="javascript:;" class="parent" data-href="mes">Interior Comfort</a>
                                	<ul>
                                    	<li><a href="javascript:;" class="child" data-href="mes">Multimedia Entertainment System </a></li>
                                        <li><a href="javascript:;" class="child" data-href="ffsw">Full-Featured Steering Wheel</a></li>
                                        <li><a href="javascript:;" class="child" data-href="cs">Cabin Space </a></li>
                                        <li><a href="javascript:;" class="child" data-href="nsd">New Seat Design  </a></li>
                                        <li><a href="javascript:;" class="child" data-href="sss">Start/Stop System </a></li>
                                        <li><a href="javascript:;" class="child" data-href="kos">Keyless Operation System </a></li>
                                        <li><a href="javascript:;" class="child" data-href="dzacc">Dual Zone Auto Climate Control </a></li>
                                        <li><a href="javascript:;" class="child" data-href="edd">Ergonomically Designed Dashboard</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:;" class="parent" data-href="eds">Electronic Dial SS4-II</a></li>
                                <li><a href="javascript:;" class="parent" data-href="ip">Improved Powertrain</a></li>
                                <li><a href="javascript:;" class="parent" data-href="nsg">New Suspension Geometry</a></li>
                                <li><a href="javascript:;" class="parent" data-href="ws">Water Screen</a></li>
                                <li><a href="javascript:;" class="parent" data-href="tr">5.9m Turning Radius and 3.8 Lock to Lock Steering</a></li>
                                <li><a href="javascript:;" class="parent" data-href="ad">Aerodynamic Design</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="features-panel">
                    	<div id="jline" class="the-panel active">
                        	<div class="panel-box">
                                <div class="panel-img">
                                	<img src="/assets/features/strada specs-01.jpg" width="100%" />
                                </div>
                                <div class="panel-text">
                                    <h4>Engineering for comfort, space and maneuverability.</h4>
									<p>The J-line is a clever engineering design to shorten wheelbase and maximize interior space. The increased space results in class-leading legroom for maximum comfort, making the all-new Strada a joy to drive.</p>
                                </div>
                            </div>
                        </div>
                        <div id="mes" class="the-panel">
                        	<div class="panel-box">
                                <div class="panel-img">
                                	<img src="/assets/features/Multimedia Entertainment System.jpg" width="100%" />
                                </div>
                                <div class="panel-text">
                                    <h4>Multimedia Entertainment System</h4>
									<p>Wherever you're driving, the all-new Strada's assortment of entertainment features such as 6.75 inch QVGA touch panel display, USB/iPod compatibility, Bluetooth, GPS Navigation, AM/FM/CD Player, and MP3/WMA/AAC will make ride a lot more enjoyable.</p>
                                </div>
                            </div>
                        </div>
                        <div id="ffsw" class="the-panel">
                        	<div class="panel-box">
                                <div class="panel-img">
                                	<img src="/assets/features/Strada-Steeringwheel.jpg" width="100%" />
                                </div>
                                <div class="panel-text">
                                    <h4>Full-Featured Steering Wheel</h4>
									<p>The all-new Strada’s steering wheel makes driving a lot more enjoyable. Paddle shifters simulate the excitement of manual driving. Its audio controls let your thumbs do the music shuffling while you do the driving. And lastly, cruise control makes long drives a lot more relaxing.</p>
                                </div>
                            </div>
                        </div>
                        <div id="cs" class="the-panel">
                        	<div class="panel-box">
                                <div class="panel-img">
                                	<img src="/assets/features/Cabin Space.jpg" width="100%" />
                                </div>
                                <div class="panel-text">
                                    <h4>Cabin Space</h4>
									<p>The all-new Strada boasts car-like comfort like no other pick-up in the market can. With this tough-truck’s class-leading legroom and a wider cabin, you’re in for surprising comfort.</p>
                                </div>
                            </div>
                        </div>
                        <div id="nsd" class="the-panel">
                        	<div class="panel-box">
                                <div class="panel-img">
                                	<img src="/assets/features/Gls Sport Seat-WEB.jpg" width="100%" />
                                </div>
                                <div class="panel-text">
                                    <h4>New Seat Design</h4>
									<p>The all-new Strada's improved seat design lets you comfortably conquer the road. </p>
                                </div>
                            </div>
                        </div>
                        <div id="sss" class="the-panel">
                        	<div class="panel-box">
                                <div class="panel-img">
                                	<img src="/assets/features/Start-Stop.jpg" width="100%" />
                                </div>
                                <div class="panel-text">
                                    <h4>Start/Stop System</h4>
									<p>An awesome driving experience all begins with just a press of your finger. One push and you’re good to go!</p>
                                </div>
                            </div>
                        </div>
                        <div id="kos" class="the-panel">
                        	<div class="panel-box">
                                <div class="panel-img">
                                	<img src="/assets/features/Keyless.jpg" width="100%" />
                                </div>
                                <div class="panel-text">
                                    <h4>Keyless Operation System</h4>
									<p>As long as you have the intelligent key with you, the driver-side door will open with just a press of a button. This will also let you start the engine without having to use the keys.</p>
                                </div>
                            </div>
                        </div>
                        <div id="dzacc" class="the-panel">
                        	<div class="panel-box">
                                <div class="panel-img">
                                	<img src="/assets/features/aircon.jpg" width="100%" />
                                </div>
                                <div class="panel-text">
                                    <h4>Dual  Zone Auto Climate-Control</h4>
									<p>Enhance your drive by keeping cool. This AC system lets you program different temperatures for the driver and the passenger.</p>
                                </div>
                            </div>
                        </div>
                        <div id="edd" class="the-panel">
                        	<div class="panel-box">
                                <div class="panel-img">
                                	<img src="/assets/features/Dashboard.jpg" width="100%" />
                                </div>
                                <div class="panel-text">
                                    <h4>Ergonomically-designed dashboard</h4>
									<p>This aesthetically-pleasing black and grey dashboard is cleverly designed to have everything you need within sight and reach. </p>
                                </div>
                            </div>
                        </div>
                        <div id="eds" class="the-panel">
                        	<div class="panel-box">
                                <div class="panel-img">
                                	<img src="/assets/features/strada specs-02.jpg" width="100%" />
                                </div>
                                <div class="panel-text">
                                    <h4>Electronic Dial SS4-II</h4>
									<p>Technology for outstanding off-road performance and superior handling with the turn of a knob.</p>
                                    <p>The Electronic Dial of the Super Select 4WD II not only gives you the advantage of full-time 4WD, but also offers 4 drive settings that allow you to react to whatever road conditions you may encounter. Not only does the system feature a center differential lock for outstanding off-road performance, but also controls the torque distribution between front and rear (40:60) for superior handling and easy operation.</p>
                                </div>
                            </div>
                        </div>
                        <div id="ip" class="the-panel">
                        	<div class="panel-box">
                                <div class="panel-img">
                                	<img src="/assets/features/strada specs-08.jpg" width="100%" />
                                </div>
                                <div class="panel-text">
                                    <h4>Improved Powertrain</h4>
									<p>Technology for proven performance, power, and reliability with the improved high performance 4D56 engine.</p>
                                    <p>Mitsubishi Motors’ reliable 2.5L Common Rail Direct Injection Diesel engine with Variable Geometry Turbo puts out an impressive 400 N-m of torque. Given the all-new Strada’s lightweight body, the engine has more than enough power to pull you out of tight spots or tow your favorite weekend craft.</p>
                                </div>
                            </div>
                        </div>
                        <div id="nsg" class="the-panel">
                        	<div class="panel-box">
                                <div class="panel-img">
                                	<img src="/assets/features/strada specs-03.jpg" width="100%" />
                                </div>
                                <div class="panel-text">
                                    <h4>New Suspension Geometry</h4>
									<p>Engineering for durability, comfort, and a more refined ride.</p>
                                    <p>New rear leaf spring geometry and extended length has been designed to give you added comfort without compromising load bearing ability of the all-new Strada. Still a workhorse with a one ton load capacity, the Strada still manages to achieve car-like ride comfort.</p>
                                </div>
                            </div>
                        </div>
                        <div id="ws" class="the-panel">
                        	<div class="panel-box">
                                <div class="panel-img">
                                	<img src="/assets/features/strada specs-04.jpg" width="100%" />
                                </div>
                                <div class="panel-text">
                                    <h4>Water Screen</h4>
									<p>Technology for better visibility and safer driving in inclement weather.</p>
                                    <p>An improved bumper design directs water spray outward when driving through puddles. This keeps the windshield clear so you can see what’s ahead.</p>
                                </div>
                            </div>
                        </div>
                        <div id="tr" class="the-panel">
                        	<div class="panel-box">
                                <div class="panel-img">
                                	<img src="/assets/features/strada specs-05.jpg" width="100%" />
                                </div>
                                <div class="panel-text">
                                    <h4>5.9m Turning Radius and 3.8 Lock-to-Lock Steering</h4>
									<p>Technology for easy maneuverability with a best in its class turning radius.</p>
                                    <p>The shortened wheelbase together with the 3.8 turn lock to lock steering give the all-new Strada an impressive 5.9 meter turning radius, the best in its class. This allows the all-new Strada to take some of the tightest turns and make getting in and out of tight spots a breeze. </p>
                                </div>
                            </div>
                        </div>
                        <div id="ad" class="the-panel">
                        	<div class="panel-box">
                                <div class="panel-img">
                                	<img src="/assets/features/strada specs-07.jpg" width="100%" />
                                </div>
                                <div class="panel-text">
                                    <h4>Aerodynamic Design</h4>
                                    <p>Engineering for better noise reduction and fuel efficiency through improved aerodynamics.</p>
									<p>The all-new Strada has been designed not only to look good, but with an eye on improving its aerodynamic profile. Top to bottom aerodynamics reduce air turbulence for quieter running performance, and better fuel efficiency.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="pricelist" class="fullscreen">
    	<div class="wrapper">
        	<div class="title">
				<h1>PRICE LIST</h1>
            </div>
            <div class="content">
            	<br /><br /><br /><br />
            	<table width="100%" class="price-list-table" border="1">
                	<tr><td colspan="2" class="bgbgbg">ALL NEW STRADA SRP</td></tr>
                    <tr><td>GL 4x2 M/T</td><td>               P 950,000 </td></tr>
                    <tr><td>GLX 4x2 M/T</td><td>                P 1,058,000 </td></tr>
                    <tr><td>GLX V 4x2 A/T</td><td>           P 1,158,000 </td></tr>
                    <tr><td>GL 4x4 M/T</td><td>     P 1,125,000 </td></tr>
                    <tr><td>GLS V 4x4 M/T</td><td>           P 1,320,000 </td></tr>
                    <tr><td>GLS Sport V 4x4 A/T</td><td>      P 1,440,000 </td></tr>
                </table>
            </div>
        </div>
    </div>

@stop
