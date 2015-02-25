@extends('layouts.master')
@section('content')
    <div style="height:126px;display:block;"></div>
     <div id="list">
     <div id="registration" class="fullscreen" style="color:#555;background:#fff;">
        <div class="wrapper">            
            <div class="row">
                <div class="wrapper">
                    <div class="title">
                        <h1>Edit User Details</h1>
                    </div>
                    <div class="content"><br>
                        <div class="alert alert-success alert-dismissable" style="display:none;">
                            <strong>Success!</strong> user details has been updated
                        </div>
                        <div class="alert alert-danger alert-dismissable" style="display:none;">
                            Please fill up all fields
                        </div>
                        <form id="edituser">
                            <input name="user_id" type="hidden" value="{{$user->id}}"/>
                            <input name="reference_code" type="hidden" value="{{$user->reference_code}}"/>
                            <div class="row clear">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">Reference Code:&nbsp;</label>
                                                <strong>{{$user->reference_code}}</strong>
                                            </div>    
                                        </div>
                                    </div>
                                    <!-- names -->
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label class="control-label" for="lastname">Last Name</label>
                                                <input type="text" id="lastname" name="lastname" class="form-control" value="{{$user->lastname}}"/>
                                            </div>    
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label class="control-label" for="firstname">First Name</label>
                                                <input type="text" id="firstname" name="firstname" class="form-control" value="{{$user->firstname}}"/>
                                            </div>  
                                        </div>
                                         <div class="col-md-2">
                                            <div class="form-group">
                                            <label class="control-label" for="mi">M.I</label>
                                                <input type="text" id="mi" name="mi" class="form-control" value="{{$user->mi}}"/>
                                            </div>  
                                        </div>
                                    </div>
                                    <!-- address -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label" for="address">Address</label>
                                                <input type="text" id="address" name="address" class="form-control" value="{{$user->address}}"/>
                                            </div>    
                                        </div>
                                    </div>
                                    <!-- email and contact number -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label" for="phone">Contact Number</label>
                                                <input type="text" id="phone" name="phone" class="form-control" value="{{$user->phone}}"/>
                                            </div>    
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label" for="email">Email Address</label>
                                                <input type="email" id="email" name="email"email class="form-control" value="{{$user->email}}"/>
                                            </div>  
                                        </div>
                                    </div>
                                    <!-- civil status and gender -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="control-label" for="age">Age</label>
                                                <input id="age" name="age" type="text" class="form-control" value="{{$user->age}}">
                                            </div>  
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                Civil Status<br>
                                                <label><input type="radio" name="civil_status" value="single" {{($user->civil_status=='single') ? 'checked' : ''}}/> Single</label>
                                                <label><input type="radio" name="civil_status" value="married" {{($user->civil_status=='married') ? 'checked' : ''}}/> Married</label>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                Gender<br>
                                                <label><input type="radio" name="gender" value="male" {{($user->gender=='male') ? 'checked' : ''}}/> Male</label>
                                                <label><input type="radio" name="gender" value="female" {{($user->gender=='female') ? 'checked' : ''}}/> Female</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- occupation and immediate family members -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label" for="occupation">Occupation/Industry</label>
                                                <input type="text" id="occupation" name="occupation" class="form-control" value="{{$user->occupation}}"/>
                                            </div>    
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label" for="or_number">OR Number</label>
                                                <input type="text" id="or_number" name="or_number" class="form-control" value="{{$user->or_number}}"/>
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label" for="branch_code">Control Code (provided by dealer)</label>
                                                <input type="text" id="branch_code" name="branch_code" class="form-control" value="{{$user->branch_code}}">
                                            </div>    
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label" for="area">Area</label>
                                                <select id="area" name="area" class="form-control">
                                                    <option value="">Area</option>
                                                    @foreach($locations as $location)
                                                    <option value="{{$location->id}}" {{($user->branch->location->id == $location->id) ? 'selected' : ''}}>{{$location->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div> 
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label" for="dealer">Dealer</label>
                                                <select id="dealer" name="dealer" class="form-control">
                                                    <option value="">Dealer</option>
                                                    @foreach($user->branch->location->branches as $branch)
                                                        <option value="{{$branch->code}}" {{($branch->code == $user->branch_code) ? 'selected' : '' }}>{{$branch->name}} ({{$branch->company}})</option>
                                                    @endforeach
                                                </select>
                                            </div> 
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">                            
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label" for="model">Preferred model/Variant</label>
                                                <select id="model" name="model" class="form-control">
                                                    <option value="">Preferred model/Variant</option>
                                                    <option value="GL 4x2 M/T" {{($user->model == 'GL 4x2 M/T') ? 'selected' : ''}}>GL 4x2 M/T</option>
                                                    <option value="GLX 4x2 M/T" {{($user->model == 'GLX 4x2 M/T') ? 'selected' : ''}}>GLX 4x2 M/T</option>
                                                    <option value="GLX V 4x2 A/T" {{($user->model == 'GLX V 4x2 A/T') ? 'selected' : ''}}>GLX V 4x2 A/T</option>
                                                    <option value="GL 4x4 M/T" {{($user->model == 'GL 4x4 M/T') ? 'selected' : ''}}>GL 4x4 M/T</option>
                                                    <option value="GLS V 4x4 M/T" {{($user->model == 'GLS V 4x4 M/T') ? 'selected' : ''}}>GLS V 4x4 M/T</option>
                                                    <option value="GLS Sport V 4x4 A/T" {{($user->model == 'GLS Sport V 4x4 A/T') ? 'selected' : ''}}>GLS Sport V 4x4 A/T</option>
                                                </select>
                                            </div>  
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label" for="sales">Sales Executive</label>
                                                <input type="text" id="sales" name="sales" class="form-control" value="{{$user->sales}}"/>
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
                                                    <option value="Quartz Brown Metallic" {{($user->color1 == 'Quartz Brown Metallic' ? 'selected' : '')}}>Quartz Brown Metallic</option>
                                                    <option value="Impulse Blue Metallic" {{($user->color1 == 'Impulse Blue Metallic' ? 'selected' : '')}}>Impulse Blue Metallic</option>
                                                    <option value="Earth Green Metallic" {{($user->color1 == 'Earth Green Metallic' ? 'selected' : '')}}>Earth Green Metallic</option>
                                                    <option value="Rosita Red" {{($user->color1 == 'Rosita Red' ? 'selected' : '')}}>Rosita Red</option>
                                                    <option value="Virgil Gray" {{($user->color1 == 'Virgil Gray' ? 'selected' : '')}}>Virgil Gray</option>
                                                    <option value="Sterling Silver Metallic" {{($user->color1 == 'Sterling Silver Metallic' ? 'selected' : '')}}>Sterling Silver Metallic</option>
                                                    <option value="Polar White" {{($user->color1 == 'Polar White' ? 'selected' : '')}}>Polar White</option>
                                                    <option value="Savanna White" {{($user->color1 == 'Savanna White' ? 'selected' : '')}}>Savanna White</option>
                                                    <option value="Pyrenese Black" {{($user->color1 == 'Pyrenese Black' ? 'selected' : '')}}>Pyrenese Black</option>
                                                </select>
                                            </div>    
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label style="display:none;" class="control-label" for="color2"></label>
                                                <label class="small">2nd Priority</label>
                                                <select id="color2" name="color2" class="form-control">
                                                    <option value="">Select Color</option>
                                                    <option value="Quartz Brown Metallic" {{($user->color2 == 'Quartz Brown Metallic' ? 'selected' : '')}}>Quartz Brown Metallic</option>
                                                    <option value="Impulse Blue Metallic" {{($user->color2 == 'Impulse Blue Metallic' ? 'selected' : '')}}>Impulse Blue Metallic</option>
                                                    <option value="Earth Green Metallic" {{($user->color2 == 'Earth Green Metallic' ? 'selected' : '')}}>Earth Green Metallic</option>
                                                    <option value="Rosita Red" {{($user->color2 == 'Rosita Red' ? 'selected' : '')}}>Rosita Red</option>
                                                    <option value="Virgil Gray" {{($user->color2 == 'Virgil Gray' ? 'selected' : '')}}>Virgil Gray</option>
                                                    <option value="Sterling Silver Metallic" {{($user->color2 == 'Sterling Silver Metallic' ? 'selected' : '')}}>Sterling Silver Metallic</option>
                                                    <option value="Polar White" {{($user->color2 == 'Polar White' ? 'selected' : '')}}>Polar White</option>
                                                    <option value="Savanna White" {{($user->color2 == 'Savanna White' ? 'selected' : '')}}>Savanna White</option>
                                                    <option value="Pyrenese Black" {{($user->color2 == 'Pyrenese Black' ? 'selected' : '')}}>Pyrenese Black</option>
                                                </select>
                                            </div>    
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label style="display:none;" class="control-label" for="color3"></label>
                                                <label class="small">3rd Priority</label>
                                                <select id="color3" name="color3" class="form-control">
                                                    <option value="">Select Color</option>
                                                    <option value="Quartz Brown Metallic" {{($user->color3 == 'Quartz Brown Metallic' ? 'selected' : '')}}>Quartz Brown Metallic</option>
                                                    <option value="Impulse Blue Metallic" {{($user->color3 == 'Impulse Blue Metallic' ? 'selected' : '')}}>Impulse Blue Metallic</option>
                                                    <option value="Earth Green Metallic" {{($user->color3 == 'Earth Green Metallic' ? 'selected' : '')}}>Earth Green Metallic</option>
                                                    <option value="Rosita Red" {{($user->color3 == 'Rosita Red' ? 'selected' : '')}}>Rosita Red</option>
                                                    <option value="Virgil Gray" {{($user->color3 == 'Virgil Gray' ? 'selected' : '')}}>Virgil Gray</option>
                                                    <option value="Sterling Silver Metallic" {{($user->color3 == 'Sterling Silver Metallic' ? 'selected' : '')}}>Sterling Silver Metallic</option>
                                                    <option value="Polar White" {{($user->color3 == 'Polar White' ? 'selected' : '')}}>Polar White</option>
                                                    <option value="Savanna White" {{($user->color3 == 'Savanna White' ? 'selected' : '')}}>Savanna White</option>
                                                    <option value="Pyrenese Black" {{($user->color3 == 'Pyrenese Black' ? 'selected' : '')}}>Pyrenese Black</option>
                                                </select>
                                            </div>    
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label" for="current_brand_model">Are you a current pick-up owner? If yes, what brand and model?</label>
                                                <input id="current_brand_model" name="current_brand_model" type="text" class="form-control question" value="{{$user->current_brand_model}}">
                                            </div>    
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label" for="like_most">What do you like most about the Strada?</label>
                                                <input id="like_most" name="like_most" type="text" class="form-control question" value="{{$user->like_most}}">
                                            </div>    
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label" for="other_brand_model">Did you check out another pick-up brands? If yes, what brands and models?</label>
                                                <input id="other_brand_model" name="other_brand_model" type="text" class="form-control question" value="{{$user->other_brand_model}}">
                                            </div>    
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label" for="learn_source">Where did you learn about the Strada?</label>
                                                <input id="learn_source" name="learn_source" type="text" class="form-control question" value="{{$user->learn_source}}">
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                            </div>              
                            <div class="row">
                                <div class="col-md-12" style="text-align:center;padding-top:20px;">
                                    <button type="submit" class="custom-btn">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<div style="height:126px;display:block;"></div>
@stop