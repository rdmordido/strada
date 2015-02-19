@extends('layouts.master')
@section('content')

		<div class="row">
			<div class="col-md-12">
				<h2>Personal Information</h2>
			</div>
		</div>
		<div class="row">
			<form id="register">
				<div class="alert alert-success alert-dismissable" style="display:none;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Success!</strong> You have been registered
                </div>
				  <div class="col-md-6">
			  			<div class="row">
			  				<div class="col-md-6">
			  					<input id="coupon" name="coupon" type="text" class="form-control" placeholder="Coupon code">
			  				</div>
			  				<div class="col-md-6">
			  					<input id="reservation" name="reservation" type="text" class="form-control" placeholder="Reservation OR Number">
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-md-5">
				  				<div class="form-group" style="margin:0px;">
		                            <label style="display:none;" class="control-label" for="lastname"></label>
		                            <input id="lastname" name="lastname" type="text" class="form-control" placeholder="Last Name*">
		                        </div>
			  				</div>
			  				<div class="col-md-5">
			  					<div class="form-group" style="margin:0px;">
		                            <label style="display:none;" class="control-label" for="firstname"></label>
		                            <input id="firstname" name="firstname" type="text" class="form-control" placeholder="First Name*">
		                        </div>
			  				</div>
			  				<div class="col-md-2">
			  					<input id="mi" name="mi" type="text" class="form-control" placeholder="M.I.">
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-md-12">
			  					<div class="form-group" style="margin:0px;">
		                            <label style="display:none;" class="control-label" for="address"></label>
		                            <input id="address" name="address" type="text" class="form-control" placeholder="Address*">
		                        </div>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-md-6">
			  					<div class="form-group" style="margin:0px;">
		                            <label style="display:none;" class="control-label" for="phone"></label>
		                            <input id="phone" name="phone" type="text" class="form-control" placeholder="Contact Number*">
		                        </div>
			  				</div>
			  				<div class="col-md-6">
			  					<div class="form-group" style="margin:0px;">
		                            <label style="display:none;" class="control-label" for="email"></label>
		                            <input id="email" name="email" type="text" class="form-control" placeholder="Email*">
		                        </div>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-md-6">
			  					<label>Civil Status</label>
			  					<span>Single</span><input name="civil_status" type="radio" value="single" checked>
			  					<span>Married</span><input name="civil_status" type="radio" value="married">
			  				</div>
			  				<div class="col-md-6">
			  					<label>Gender</label>
			  					<span>Male</span><input name="gender" type="radio" value="male" checked>
			  					<span>Female</span><input name="gender" type="radio" value="female">
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-md-6">
			  					<input id="occupation" name="occupation" type="text" class="form-control" placeholder="Occupation/Industry">
			  				</div>
			  				<div class="col-md-6">
			  					<input id="family" name="family" type="text" class="form-control" placeholder="No. of immediate family members" onkeypress="return event.charCode === 0 || /\d/.test(String.fromCharCode(event.charCode));">
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-md-12">
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
				  <div class="col-md-6">
				  		<div class="row">
			  				<div class="col-md-6">
			  					<div class="form-group" style="margin:0px;">
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
			  					<div class="form-group" style="margin:0px;">
		                            <label style="display:none;" class="control-label" for="area"></label>
		                            <select id="dealer" name="dealer" class="form-control">
		                                <option value="">Dealer</option>
	                        		</select>
		                        </div>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-md-6">
			  					<div class="form-group" style="margin:0px;">
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
			  					<input id="sales" name="sales" type="text" class="form-control" placeholder="Sales Executive">
			  				</div>
			  				<h4 style="margin-left:10px;">Top 3 color choices: (choose from the colors below)</h4>
			  				<div class="col-md-4">
			  					<span>1st Priority</span><br>
			  					<select id="color1" name="color1" class="form-control">
	                                <option value="">Select Color</option>
	                                <option value="Gemstone Grey Mica">Gemstone Grey Mica</option>
	                                <option value="Pyrenese Black">Pyrenese Black</option>
	                                <option value="Aurora White">Aurora White</option>
	                                <option value="Cool Silver">Cool Silver</option>
                        		</select>
			  				</div>
			  				<div class="col-md-4">
			  					<span>2nd Priority</span><br>
			  					<select id="color2" name="color2" class="form-control">
	                                <option value="">Select Color</option>
	                                <option value="Gemstone Grey Mica">Gemstone Grey Mica</option>
	                                <option value="Pyrenese Black">Pyrenese Black</option>
	                                <option value="Aurora White">Aurora White</option>
	                                <option value="Cool Silver">Cool Silver</option>
                        		</select>
			  				</div>
			  				<div class="col-md-4">
			  					<span>3rd Priority</span><br>
			  					<select id="color3" name="color3" class="form-control">
	                                <option value="">Select Color</option>
	                                <option value="Gemstone Grey Mica">Gemstone Grey Mica</option>
	                                <option value="Pyrenese Black">Pyrenese Black</option>
	                                <option value="Aurora White">Aurora White</option>
	                                <option value="Cool Silver">Cool Silver</option>
                        		</select>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-md-12">
			  					<select id="car_order" name="car_order" class="form-control">
	                                <option value="">Is this your first, second or replacement car?</option>
	                                <option value="First">First</option>
                                    <option value="Replacement">Replacement</option>
                                    <option value="Additional">Additional</option>
                        		</select>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<p style="margin-left:10px">
			  					<span>Please rank each feature of the Mirage G4 based on your personal preference.</span><br>
			  					<span>1 = Highest, 5 = Lowest</span>
			  				</p>
			  				<div class="col-md-2">
			  					<span>Price</span><br>
			  					<select id="price" name="price" class="form-control">
			  						<option value=""></option>
	                                <option value="5">5</option>
	                                <option value="4">4</option>
	                                <option value="3">3</option>
	                                <option value="2">2</option>
	                                <option value="1">1</option>
                        		</select>
			  				</div>
			  				<div class="col-md-2">
			  					<span>Design</span><br>
			  					<select id="design" name="design" class="form-control">
			  						<option value=""></option>
	                                <option value="5">5</option>
	                                <option value="4">4</option>
	                                <option value="3">3</option>
	                                <option value="2">2</option>
	                                <option value="1">1</option>
                        		</select>
			  				</div>
			  				<div class="col-md-2">
			  					<span>Size</span><br>
			  					<select id="size" name="size" class="form-control">
			  						<option value=""></option>
	                                <option value="5">5</option>
	                                <option value="4">4</option>
	                                <option value="3">3</option>
	                                <option value="2">2</option>
	                                <option value="1">1</option>
                        		</select>
			  				</div>
			  				<div class="col-md-2">
			  					<span>Features</span><br>
			  					<select id="features" name="features" class="form-control">
			  						<option value=""></option>
	                                <option value="5">5</option>
	                                <option value="4">4</option>
	                                <option value="3">3</option>
	                                <option value="2">2</option>
	                                <option value="1">1</option>
                        		</select>
			  				</div>
			  				<div class="col-md-2">
			  					<span>Brand</span><br>
			  					<select id="brand" name="brand" class="form-control">
			  						<option value=""></option>
	                                <option value="5">5</option>
	                                <option value="4">4</option>
	                                <option value="3">3</option>
	                                <option value="2">2</option>
	                                <option value="1">1</option>
                        		</select>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<p style="margin-left:10px">
			  					<span>Which other car models are you considering to purchase?</span>
			  					<span>Seperate multiple entries with a comma</span>
			  				</p>
			  				<div class="col-md-12">
			  					<input id="other_models" name="other_models" type="text" class="form-control" placeholder="">
			  				</div>
			  			</div>
				  </div>
				  <div class="col-md-12" style="margin-top:20px;text-align:center;">
				  <button type="submit" class="btn btn-primary btn-lg">Submit</button>
				  </div>
			</form>
		</div>

@stop