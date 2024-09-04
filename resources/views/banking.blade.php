
<!doctype html>
    <html lang="en">
      <head>
        <title>Registration!</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <div class="container text-right">
          <h2 class="text-container"> ERP.</h2>
          <!--<h3 class="text-container">The first step to ace in your business.</h3>-->
        </div>
      </head>
      
      <body>

          <form action="{{url('/proceed2')}}/{{$customer_id}}" method="post">
            @csrf
            @if($user)
                    @method('PUT')
             @endif
            
            <div class="card card-plain h-100">
              <div class="card-header pb-0 p-3">
                <div class="row">
                  <div class="col-md-8 d-flex align-items-center">
                        <h6 class="mb-2">Business Information</h6>
                    </div>
                </div>
              </div>  
                

            
                <div class="col-md-6 mb-3">

                  <label for="">GSTIN No.:</label>
                      <input type="text" id="gstin" name="gstin" pattern="[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}[Z]{1}[0-9A-Z]{1}" >
                      <span class="text-danger">
                        @error('gstin')
                          {{$message}}
                        @enderror  
                      </span><br>

            
                  <label for="">PAN No.:</label>
                      <input type="text" id="pan" name="pan" pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}" >
                      <span class="text-danger">
                        @error('pan')
                          {{$message}}
                        @enderror  
                      </span><br> 
                 </div>
                    



                  <div class="col-md-6 mb-3">
                      <!--<h3 class="text-container ">Banking Details</h3>-->
                      <hr>

                    <label for="">Select your Bank:</label>
                  
                    @php
                    $banks = array(
                        "ABHYUDAYA CO-OP BANK LTD",
                        "ABU DHABI COMMERCIAL BANK",
                        "AKOLA DISTRICT CENTRAL CO-OPERATIVE BANK",
                        "AKOLA JANATA COMMERCIAL COOPERATIVE BANK",
                        "ALLAHABAD BANK",
                        "ALMORA URBAN CO-OPERATIVE BANK LTD.",
                        "ANDHRA BANK",
                        "ANDHRA PRAGATHI GRAMEENA BANK",
                        "APNA SAHAKARI BANK LTD",
                        "AUSTRALIA AND NEW ZEALAND BANKING GROUP LIMITED.",
                        "AXIS BANK",
                        "BANK INTERNASIONAL INDONESIA",
                        "BANK OF AMERICA",
                        "BANK OF BAHRAIN AND KUWAIT",
                        "BANK OF BARODA",
                        "BANK OF CEYLON",
                        "BANK OF INDIA",
                        "BANK OF MAHARASHTRA",
                        "BANK OF TOKYO-MITSUBISHI UFJ LTD.",
                        "BARCLAYS BANK PLC",
                        "BASSEIN CATHOLIC CO-OP BANK LTD",
                        "BHARATIYA MAHILA BANK LIMITED",
                        "BNP PARIBAS",
                        "CALYON BANK",
                        "CANARA BANK",
                        "CAPITAL LOCAL AREA BANK LTD.",
                        "CATHOLIC SYRIAN BANK LTD.",
                        "CENTRAL BANK OF INDIA",
                        "CHINATRUST COMMERCIAL BANK",
                        "CITIBANK NA",
                        "CITIZENCREDIT CO-OPERATIVE BANK LTD",
                        "CITY UNION BANK LTD",
                        "COMMONWEALTH BANK OF AUSTRALIA",
                        "CORPORATION BANK",
                        "CREDIT SUISSE AG",
                        "DBS BANK LTD",
                        "DENA BANK",
                        "DEUTSCHE BANK",
                        "DEUTSCHE SECURITIES INDIA PRIVATE LIMITED",
                        "DEVELOPMENT CREDIT BANK LIMITED",
                        "DHANLAXMI BANK LTD",
                        "DICGC",
                        "DOMBIVLI NAGARI SAHAKARI BANK LIMITED",
                        "FIRSTRAND BANK LIMITED",
                        "GOPINATH PATIL PARSIK JANATA SAHAKARI BANK LTD",
                        "GURGAON GRAMIN BANK",
                        "HDFC BANK LTD",
                        "HSBC",
                        "ICICI BANK LTD",
                        "IDBI BANK LTD",
                        "IDRBT",
                        "INDIAN BANK",
                        "INDIAN OVERSEAS BANK",
                        "INDUSIND BANK LTD",
                        "INDUSTRIAL AND COMMERCIAL BANK OF CHINA LIMITED",
                        "ING VYSYA BANK LTD",
                        "JALGAON JANATA SAHKARI BANK LTD",
                        "JANAKALYAN SAHAKARI BANK LTD",
                        "JANASEVA SAHAKARI BANK (BORIVLI) LTD",
                        "JANASEVA SAHAKARI BANK LTD. PUNE",
                        "JANATA SAHAKARI BANK LTD (PUNE)",
                        "JPMORGAN CHASE BANK N.A",
                        "KALLAPPANNA AWADE ICH JANATA S BANK",
                        "KAPOL CO OP BANK",
                        "KARNATAKA BANK LTD",
                        "KARNATAKA VIKAS GRAMEENA BANK",
                        "KARUR VYSYA BANK",
                        "KOTAK MAHINDRA BANK",
                        "KURMANCHAL NAGAR SAHKARI BANK LTD",
                        "MAHANAGAR CO-OP BANK LTD",
                        "MAHARASHTRA STATE CO OPERATIVE BANK",
                        "MASHREQBANK PSC",
                        "MIZUHO CORPORATE BANK LTD",
                        "MUMBAI DISTRICT CENTRAL CO-OP. BANK LTD.",
                        "NAGPUR NAGRIK SAHAKARI BANK LTD",
                        "NATIONAL AUSTRALIA BANK",
                        "NEW INDIA CO-OPERATIVE BANK LTD.",
                        "NKGSB CO-OP BANK LTD",
                        "NORTH MALABAR GRAMIN BANK",
                        "NUTAN NAGARIK SAHAKARI BANK LTD",
                        "OMAN INTERNATIONAL BANK SAOG",
                        "ORIENTAL BANK OF COMMERCE",
                        "PARSIK JANATA SAHAKARI BANK LTD",
                        "PRATHAMA BANK",
                        "PRIME CO OPERATIVE BANK LTD",
                        "PUNJAB AND MAHARASHTRA CO-OP BANK LTD.",
                        "PUNJAB AND SIND BANK",
                        "PUNJAB NATIONAL BANK",
                        "RABOBANK INTERNATIONAL (CCRB)",
                        "RAJGURUNAGAR SAHAKARI BANK LTD.",
                        "RAJKOT NAGARIK SAHAKARI BANK LTD",
                        "RESERVE BANK OF INDIA",
                        "SBERBANK",
                        "SHINHAN BANK",
                        "SHRI CHHATRAPATI RAJARSHI SHAHU URBAN CO-OP BANK LTD",
                        "SOCIETE GENERALE",
                        "SOLAPUR JANATA SAHKARI BANK LTD.SOLAPUR",
                        "SOUTH INDIAN BANK",
                        "STANDARD CHARTERED BANK",
                        "STATE BANK OF BIKANER AND JAIPUR",
                        "STATE BANK OF HYDERABAD",
                        "STATE BANK OF INDIA",
                        "STATE BANK OF MAURITIUS LTD",
                        "STATE BANK OF MYSORE",
                        "STATE BANK OF PATIALA",
                        "STATE BANK OF TRAVANCORE",
                        "SUMITOMO MITSUI BANKING CORPORATION",
                        "SYNDICATE BANK",
                        "TAMILNAD MERCANTILE BANK LTD",
                        "THANE BHARAT SAHAKARI BANK LTD",
                        "THE A.P. MAHESH CO-OP URBAN BANK LTD.",
                        "THE AHMEDABAD MERCANTILE CO-OPERATIVE BANK LTD.",
                        "THE ANDHRA PRADESH STATE COOP BANK LTD",
                        "THE BANK OF NOVA SCOTIA",
                        "THE BANK OF RAJASTHAN LTD",
                        "THE BHARAT CO-OPERATIVE BANK (MUMBAI) LTD",
                        "THE COSMOS CO-OPERATIVE BANK LTD.",
                        "THE DELHI STATE COOPERATIVE BANK LTD.",
                        "THE FEDERAL BANK LTD",
                        "THE GADCHIROLI DISTRICT CENTRAL COOPERATIVE BANK LTD",
                        "THE GREATER BOMBAY CO-OP. BANK LTD",
                        "THE GUJARAT STATE CO-OPERATIVE BANK LTD",
                        "THE JALGAON PEOPLES CO-OP BANK",
                        "THE JAMMU AND KASHMIR BANK LTD",
                        "THE KALUPUR COMMERCIAL CO. OP. BANK LTD.",
                        "THE KALYAN JANATA SAHAKARI BANK LTD.",
                        "THE KANGRA CENTRAL CO-OPERATIVE BANK LTD",
                        "THE KANGRA COOPERATIVE BANK LTD",
                        "THE KARAD URBAN CO-OP BANK LTD",
                        "THE KARNATAKA STATE APEX COOP. BANK LTD.",
                        "THE LAKSHMI VILAS BANK LTD",
                        "THE MEHSANA URBAN COOPERATIVE BANK LTD",
                        "THE MUNICIPAL CO OPERATIVE BANK LTD MUMBAI",
                        "THE NAINITAL BANK LIMITED",
                        "THE NASIK MERCHANTS CO-OP BANK LTD. NASHIK",
                        "THE RAJASTHAN STATE COOPERATIVE BANK LTD.",
                        "THE RATNAKAR BANK LTD",
                        "THE ROYAL BANK OF SCOTLAND N.V",
                        "THE SAHEBRAO DESHMUKH CO-OP. BANK LTD.",
                        "THE SARASWAT CO-OPERATIVE BANK LTD",
                        "THE SEVA VIKAS CO-OPERATIVE BANK LTD (SVB)",
                        "THE SHAMRAO VITHAL CO-OPERATIVE BANK LTD",
                        "THE SURAT DISTRICT CO OPERATIVE BANK LTD.",
                        "THE SURAT PEOPLES CO-OP BANK LTD",
                        "THE SUTEX CO.OP. BANK LTD.",
                        "THE TAMILNADU STATE APEX COOPERATIVE BANK LIMITED",
                        "THE THANE DISTRICT CENTRAL CO-OP BANK LTD",
                        "THE THANE JANATA SAHAKARI BANK LTD",
                        "THE VARACHHA CO-OP. BANK LTD.",
                        "THE VISHWESHWAR SAHAKARI BANK LTD. PUNE",
                        "THE WEST BENGAL STATE COOPERATIVE BANK LTD",
                        "TJSB SAHAKARI BANK LTD.",
                        "TUMKUR GRAIN MERCHANTS COOPERATIVE BANK LTD.",
                        "UBS AG",
                        "UCO BANK",
                        "UNION BANK OF INDIA",
                        "UNITED BANK OF INDIA",
                        "UNITED OVERSEAS BANK",
                        "VASAI VIKAS SAHAKARI BANK LTD.",
                        "VIJAYA BANK",
                        "WEST BENGAL STATE COOPERATIVE BANK",
                        "WESTPAC BANKING CORPORATION",
                        "WOORI BANK",
                        "YES BANK LTD",
                        "ZILA SAHKARI BANK LTD GHAZIABAD",
                        "IDFC First Bank"

                      );
                    @endphp


                        <select name="bank">
                        @foreach($banks as $key => $bank)
                            <option value="{{intval($key) + 1}}" id="bank" >{{$bank}}</option>
                        @endforeach    
                        </select><br>

                    <label for="">Account No.:</label>
                        <input type="number" id="account" name="account" pattern="[0-9]{9,18}" >
                        <span class="text-danger">
                          @error('email')
                            {{$message}}
                          @enderror  
                        </span><br> 

                  <div class="container text-center">
                      <a href="">Setup Online Banking Details</a>
                      
                      <hr>


                    <button class="btn btn-primary">Proceed</button>
                  </div>
            </div>        
            
          </form>

          <div class="container text-center"> 
          <a href=""> <button class="btn btn-primary">Go Back</button> </a>
          </div>
      
      </body>

    
    </html>
  