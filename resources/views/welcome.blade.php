<x-layout  bodyClass="g-sidenav-show bg-gray-200">
<x-navbars.sidebar activePage="user-management"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage='User Profile'></x-navbars.navs.auth>
        <!-- End Navbar -->

	<!doctype html>
	<html lang="en">
		<head>
			<title>Registration!</title>
			<!-- Required meta tags -->
			<meta charset="utf-8">
			<meta name="viewport" content="w
			idth=device-width, initial-scale=1, shrink-to-fit=no">

			<!-- Bootstrap CSS -->
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
			<div class="container text-right">
			<h2 class="text-container"> ERP.</h2>
			<!--<h3 class="text-container">The first step to ace in your business.</h3>
		--></div>
		</head>

		<body>

			<form action="{{url('/proceed1')}}/{{$customer_id}}" method="post">
				@csrf  
				
				<div class="card card-body">
				  <div class="card card-plain h-100">
				    <div class="card-header pb-0 p-3">
                        <div class="row">
							<div class="col-md-8 d-flex align-items-center">
								<h6 class="mb-2">Welcome seller, Where are you? {{$customer_id}}</h6>
							</div>
						</div>
					</div>
					
				
                    <div class="col-md-6 mb-3">
						
						<label for="">Business Address:</label>
						<input type="text" id="bus_address" name="bus_address" value='{{ old('bus_address', $customer_id ? $customer_id->bus_address : '') }}'>
						<span class="text-danger">
						@error('bus_address')
							{{$message}}
						@enderror  
						</span><br>
					</div>
						
                    <div class="col-md-6 mb-3">
						<label for="">City:</label>
						<input type="text" id="city" name="city" value='{{ old('city', $customer_id ? $customer_id->city : '') }}'><br>
					</div>

					<div class="col-md-6 mb-3">
						<label for="">Zip-Code:</label>
						<input type="text" id="zipcode" name="zipcode" value='{{ old('zipcode', $customer_id ? $customer_id->zipcode : '') }}'><br>
					</div>

					<div class="col-md-6 mb-3">
						<label for="">State:</label>
						<input type="text" id="state" name="state" value='{{ old('state', $customer_id ? $customer_id->state : '') }}'><br>
					</div>

					<div class="col-md-6 mb-3">
						<label for="">Country:</label>
						<input type="text" id="country" name="country" value='{{ old('country', $customer_id ? $customer_id->country : '') }}'><br>
					</div>	
						
							<!-- @php
							$countries = array(
							"Afghanistan","Albania","Algeria","Andorra","Angola","Antigua and Barbuda","Argentina","Armenia","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bhutan","Bolivia","Bosnia and Herzegovina","Botswana","Brazil","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Central African Republic","Chad","Chile","China","Colombi","Comoros","Congo (Brazzaville)","Congo","Costa Rica","Cote d'Ivoire","Croatia","Cuba","Cyprus","Czech Republic","Denmark","Djibouti",
							"Dominica","Dominican Republic","East Timor (Timor Timur)","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Fiji","Finland","France","Gabon","Gambia, The","Georgia","Germany","Ghana","Greece","Grenada","Guatemala",
							"Guinea",
							"Guinea-Bissau",
							"Guyana",
							"Haiti",
							"Honduras",
							"Hungary",
							"Iceland",
							"India",
							"Indonesia",
							"Iran",
							"Iraq",
							"Ireland",
							"Israel",
							"Italy",
							"Jamaica",
							"Japan",
							"Jordan",
							"Kazakhstan",
							"Kenya",
							"Kiribati",
							"Korea, North",
							"Korea, South",
							"Kuwait",
							"Kyrgyzstan",
							"Laos",
							"Latvia",
							"Lebanon",
							"Lesotho",
							"Liberia",
							"Libya",
							"Liechtenstein",
							"Lithuania",
							"Luxembourg",
							"Macedonia",
							"Madagascar",
							"Malawi",
							"Malaysia",
							"Maldives",
							"Mali",
							"Malta",
							"Marshall Islands",
							"Mauritania",
							"Mauritius",
							"Mexico",
							"Micronesia",
							"Moldova",
							"Monaco",
							"Mongolia",
							"Morocco",
							"Mozambique",
							"Myanmar",
							"Namibia",
							"Nauru",
							"Nepal",
							"Netherlands",
							"New Zealand",
							"Nicaragua",
							"Niger",
							"Nigeria",
							"Norway",
							"Oman",
							"Pakistan",
							"Palau",
							"Panama",
							"Papua New Guinea",
							"Paraguay",
							"Peru",
							"Philippines",
							"Poland",
							"Portugal",
							"Qatar",
							"Romania",
							"Russia",
							"Rwanda",
							"Saint Kitts and Nevis",
							"Saint Lucia",
							"Saint Vincent",
							"Samoa",
							"San Marino",
							"Sao Tome and Principe",
							"Saudi Arabia",
							"Senegal",
							"Serbia and Montenegro",
							"Seychelles",
							"Sierra Leone",
							"Singapore",
							"Slovakia",
							"Slovenia",
							"Solomon Islands",
							"Somalia",
							"South Africa",
							"Spain",
							"Sri Lanka",
							"Sudan",
							"Suriname",
							"Swaziland",
							"Sweden",
							"Switzerland",
							"Syria",
							"Taiwan",
							"Tajikistan",
							"Tanzania",
							"Thailand",
							"Togo",
							"Tonga",
							"Trinidad and Tobago",
							"Tunisia",
							"Turkey",
							"Turkmenistan",
							"Tuvalu",
							"Uganda",
							"Ukraine",
							"United Arab Emirates",
							"United Kingdom",
							"United States",
							"Uruguay",
							"Uzbekistan",
							"Vanuatu",
							"Vatican City",
							"Venezuela",
							"Vietnam",
							"Yemen",
							"Zambia",
							"Zimbabwe"
							);
							@endphp

							<select>
							@foreach($countries as $key => $country)
								<option value="{{intval($key) + 1}}" id="country" name="country">{{$country}}</option>
							@endforeach    
							</select><br> -->


						

						<button class="btn btn-primary">Proceed</button>

			    </div>   
			</form>

		    <div class="container text-center"> 
			<a href=""> <button class="btn btn-primary">Go Back</button> </a>
		    </div>

		</body>
	<x-footers.auth></x-footers.auth>
    
    <x-plugins></x-plugins>
	
	</html>
</x-layout>


@php <!--

                                <div class="mb-3 col-md-6">
                                    <label for="floatingTextarea2">About</label>
                                    <textarea class="form-control border border-2 p-2" placeholder="Say something about yourself" id="floatingTextarea2" name="about"
                                        rows="9" cols="50">{{ old('about', $user ? $user->about : '') }}</textarea>
                                        @error('about')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                </div>-->

								@php<!--
                    <div class="card card-plain h-100">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-md-8 d-flex align-items-center">
                                    <h6 class="mb-2">Business Information</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">GSTIN</label>
                                    <input type="text" name="gstin" class="form-control border border-2 p-2" value='{{ old('gstin', $user ? $user->gstin : '') }}'>
                                    @error('gstin')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">GSTIN Type</label>
                                    <select name="gstin_type" class="form-control border border-2 p-2">
                                        <option value=""> -- Select Option -- </option>
                                        @foreach (['Regular'] as $gstin_type)
                                            <option value="{{ $gstin_type }}" @selected(old('gstin_type', $user ? $user->gstin_type : '') == $gstin_type)>
                                                {{ $gstin_type }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('gstin_type')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Legal Name</label>
                                    <input type="text" name="legal_name" class="form-control border border-2 p-2" value='{{ old('legal_name', $user ? $user->legal_name : '') }}'>
                                    @error('legal_name')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Store Name</label>
                                    <input type="text" name="store_name" class="form-control border border-2 p-2" value='{{ old('store_name', $user ? $user->store_name : '') }}'>
                                    @error('store_name')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label">Address</label>
                                    <input type="text" name="address" class="form-control border border-2 p-2" value='{{ old('address', $user ? $user->address : '') }}'>
                                    @error('address')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Pincode</label>
                                    <input type="text" name="pincode" class="form-control border border-2 p-2" value='{{ old('pincode', $user ? $user->pincode : '') }}'>
                                    @error('pincode')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">City</label>
                                    <input type="text" name="city" class="form-control border border-2 p-2" value='{{ old('city', $user ? $user->city : '') }}'>
                                    @error('city')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">State</label>
                                    <input type="text" name="state" class="form-control border border-2 p-2" value='{{ old('state', $user ? $user->state : '') }}'>
                                    @error('state')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">GSTIN Certificate (pdf, png, jpg, gif)</label>
                                    <input type="file" name="certificate" class="form-control border border-2 p-2" accept=".jpg,.gif,.png,.pdf">
                                    @error('certificate')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>-->