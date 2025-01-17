@extends('layout.master')
@section('title', 'Leads')
@section('css')

<link href="/assets/plugins/select2/select2.css" rel="stylesheet" type="text/css" />

@endsection
@section('main-content')
<div class="wrapper main-wrapper row" style=''>

    <div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">Create Lead</h1>
                <!-- PAGE HEADING TAG - END -->
            </div>

            <div class="pull-right hidden-xs">
                <ol class="breadcrumb">
                    <li>
                        <a href="/"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li>
                        <a href="#">Leads</a>
                    </li>
                    <li class="active">
                        <strong>Create Lead</strong>
                    </li>
                </ol>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
    <!-- MAIN CONTENT AREA STARTS -->

    <div class="col-md-12">

        <div class="card">

            <div class="card-body">

                <div class="panel-body">
                    <div class="w-full">
                        <div class="w-full">
                            
                            <div class="w-full flex gap-10">


                                <div class="form-group w-full select-placeholder">
                                    <label for="rel_type" class="control-label">Type</label>
                                    <select name="type" id="rel_type" class="form-control form-control-solid py-2 select2">
                                        <option value="person">Person </option>
                                        <option value="company">Company </option>
                                    </select>
                                </div>

                                <div class="form-group w-full select-placeholder">
                                    <label for="rel_type" class="control-label">Source</label>
                                    <select name="type" id="rel_type" class="form-control form-control-solid py-2 select2">
                                        @foreach ($leadSources as $source)
                                        <option value="{{$source->source_id}}">{{$source->name}} </option>
                                        @endforeach
                                        <option value="company">Company </option>
                                    </select>
                                </div>
                                
                                <div class="w-full form-group select-placeholder ">
                                    <label for="status" class="control-label">Status</label>
                                    <select name="status" class="select2 form-control form-control-solid py-2" >
                                        <option value="6">Draft </option>
                                        <option value="4">Sent </option>
                                        <option value="1">Open </option>
                                        <option value="5">Revised </option>
                                        <option value="2">Declined </option>
                                        <option value="3">Accepted </option>
                                    </select>
                                </div>

                            </div>
                            <div class="w-full flex gap-10">

                                <div class="select-placeholder form-group w-full" >
                                        <label for="assigned" class="control-label">Assigned To</label>
                                        <select id="assigned" name="assigned_to" class="select2 form-control form-control-solid py-2" >
                                        <option value=""></option>
                                    </select></div>
                                    <div class="form-group w-full" app-field-wrapper="date"><label for="date"
                                            class="control-label">Date</label>
                                        <div class="input-group date"><input type="text" id="date" name="date"
                                                class="form-control datepicker" value="2024-11-18" autocomplete="off">
                                            <div class="input-group-addon">
                                                <i class="fa-regular fa-calendar fa mt-3"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                            </div>
                            
                            
                        </div>
                        <div class="w-full">
                                
                            <div class="w-full flex gap-10">
                                <div class="form-group w-full" app-field-wrapper="subject"><label for="subject"
                                    class="control-label">First name</label>
                                    <input type="text" id="fname" name="first_name"
                                    class="form-control form-control-solid" autofocus="1" value=""></div>
                                
                                    
                                <div class="form-group w-full" ><label for="subject"
                                        class="control-label">Last name</label>
                                        <input type="text" id="lname" name="last_name"
                                        class="form-control form-control-solid" autofocus="1" value=""></div> 
                                        
                            </div>

                            <div class="w-full flex gap-10">
                                
                                <div class="w-full">
                                    <div class="form-group" app-field-wrapper="email"><label for="email"
                                            class="control-label">Email</label><input type="text" id="email"
                                            name="email" class="form-control form-control-solid " value=""></div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group" app-field-wrapper="phone"><label for="phone"
                                            class="control-label">Phone</label><input type="text" id="phone"
                                            name="phone" class="form-control form-control-solid " value=""></div>
                                </div>
                            </div>
                            
                            <div class="w-full flex gap-10">
                                    
                                <div class="form-group w-full" ><label for="address"
                                        class="control-label">Company</label><input type="text" id="company" name="company"
                                        class="form-control form-control-solid " value=""></div>

                                <div class="form-group w-full" ><label for="city"
                                        class="control-label">Position</label><input type="text" id="Position" name="position"
                                        class="form-control form-control-solid " value=""></div>

                            </div>

                            <div class="w-full flex gap-10">
                                    
                                <div class="form-group w-full" ><label for="address"
                                        class="control-label">Address</label><input type="text" id="address" name="address"
                                        class="form-control form-control-solid " value=""></div>

                                <div class="form-group w-full" ><label for="city"
                                        class="control-label">City</label><input type="text" id="city" name="city"
                                        class="form-control form-control-solid " value=""></div>

                            </div>
                            <div class="w-full flex gap-10">

                                <div class="w-full form-group" ><label for="state"
                                        class="control-label">State</label><input type="text" id="state"
                                        name="state" class="form-control form-control-solid " value=""></div>
                                <div class="w-full">
                                    <div class="select-placeholder form-group" app-field-wrapper="country"><label
                                            for="country" class="control-label">Country</label><select id="country"
                                            name="country" class="select2 form-control form-control-solid py-2" >
                                            <option value=""></option>
                                            <option value="1" data-subtext="AF">Afghanistan</option>
                                            <option value="2" data-subtext="AX">Aland Islands</option>
                                            <option value="3" data-subtext="AL">Albania</option>
                                            <option value="4" data-subtext="DZ">Algeria</option>
                                            <option value="5" data-subtext="AS">American Samoa</option>
                                            <option value="6" data-subtext="AD">Andorra</option>
                                            <option value="7" data-subtext="AO">Angola</option>
                                            <option value="8" data-subtext="AI">Anguilla</option>
                                            <option value="9" data-subtext="AQ">Antarctica</option>
                                            <option value="10" data-subtext="AG">Antigua and Barbuda</option>
                                            <option value="11" data-subtext="AR">Argentina</option>
                                            <option value="12" data-subtext="AM">Armenia</option>
                                            <option value="13" data-subtext="AW">Aruba</option>
                                            <option value="14" data-subtext="AU">Australia</option>
                                            <option value="15" data-subtext="AT">Austria</option>
                                            <option value="16" data-subtext="AZ">Azerbaijan</option>
                                            <option value="17" data-subtext="BS">Bahamas</option>
                                            <option value="18" data-subtext="BH">Bahrain</option>
                                            <option value="19" data-subtext="BD">Bangladesh</option>
                                            <option value="20" data-subtext="BB">Barbados</option>
                                            <option value="21" data-subtext="BY">Belarus</option>
                                            <option value="22" data-subtext="BE">Belgium</option>
                                            <option value="23" data-subtext="BZ">Belize</option>
                                            <option value="24" data-subtext="BJ">Benin</option>
                                            <option value="25" data-subtext="BM">Bermuda</option>
                                            <option value="26" data-subtext="BT">Bhutan</option>
                                            <option value="27" data-subtext="BO">Bolivia</option>
                                            <option value="28" data-subtext="BQ">Bonaire, Sint Eustatius and Saba
                                            </option>
                                            <option value="29" data-subtext="BA">Bosnia and Herzegovina</option>
                                            <option value="30" data-subtext="BW">Botswana</option>
                                            <option value="31" data-subtext="BV">Bouvet Island</option>
                                            <option value="32" data-subtext="BR">Brazil</option>
                                            <option value="33" data-subtext="IO">British Indian Ocean Territory</option>
                                            <option value="34" data-subtext="BN">Brunei</option>
                                            <option value="35" data-subtext="BG">Bulgaria</option>
                                            <option value="36" data-subtext="BF">Burkina Faso</option>
                                            <option value="37" data-subtext="BI">Burundi</option>
                                            <option value="38" data-subtext="KH">Cambodia</option>
                                            <option value="39" data-subtext="CM">Cameroon</option>
                                            <option value="40" data-subtext="CA">Canada</option>
                                            <option value="41" data-subtext="CV">Cape Verde</option>
                                            <option value="42" data-subtext="KY">Cayman Islands</option>
                                            <option value="43" data-subtext="CF">Central African Republic</option>
                                            <option value="44" data-subtext="TD">Chad</option>
                                            <option value="45" data-subtext="CL">Chile</option>
                                            <option value="46" data-subtext="CN">China</option>
                                            <option value="47" data-subtext="CX">Christmas Island</option>
                                            <option value="48" data-subtext="CC">Cocos (Keeling) Islands</option>
                                            <option value="49" data-subtext="CO">Colombia</option>
                                            <option value="50" data-subtext="KM">Comoros</option>
                                            <option value="51" data-subtext="CG">Congo</option>
                                            <option value="52" data-subtext="CK">Cook Islands</option>
                                            <option value="53" data-subtext="CR">Costa Rica</option>
                                            <option value="54" data-subtext="CI">Cote d'ivoire (Ivory Coast)</option>
                                            <option value="55" data-subtext="HR">Croatia</option>
                                            <option value="56" data-subtext="CU">Cuba</option>
                                            <option value="57" data-subtext="CW">Curacao</option>
                                            <option value="58" data-subtext="CY">Cyprus</option>
                                            <option value="59" data-subtext="CZ">Czech Republic</option>
                                            <option value="60" data-subtext="CD">Democratic Republic of the Congo
                                            </option>
                                            <option value="61" data-subtext="DK">Denmark</option>
                                            <option value="62" data-subtext="DJ">Djibouti</option>
                                            <option value="63" data-subtext="DM">Dominica</option>
                                            <option value="64" data-subtext="DO">Dominican Republic</option>
                                            <option value="65" data-subtext="EC">Ecuador</option>
                                            <option value="66" data-subtext="EG">Egypt</option>
                                            <option value="67" data-subtext="SV">El Salvador</option>
                                            <option value="68" data-subtext="GQ">Equatorial Guinea</option>
                                            <option value="69" data-subtext="ER">Eritrea</option>
                                            <option value="70" data-subtext="EE">Estonia</option>
                                            <option value="71" data-subtext="ET">Ethiopia</option>
                                            <option value="72" data-subtext="FK">Falkland Islands (Malvinas)</option>
                                            <option value="73" data-subtext="FO">Faroe Islands</option>
                                            <option value="74" data-subtext="FJ">Fiji</option>
                                            <option value="75" data-subtext="FI">Finland</option>
                                            <option value="76" data-subtext="FR">France</option>
                                            <option value="77" data-subtext="GF">French Guiana</option>
                                            <option value="78" data-subtext="PF">French Polynesia</option>
                                            <option value="79" data-subtext="TF">French Southern Territories</option>
                                            <option value="80" data-subtext="GA">Gabon</option>
                                            <option value="81" data-subtext="GM">Gambia</option>
                                            <option value="82" data-subtext="GE">Georgia</option>
                                            <option value="83" data-subtext="DE">Germany</option>
                                            <option value="84" data-subtext="GH">Ghana</option>
                                            <option value="85" data-subtext="GI">Gibraltar</option>
                                            <option value="86" data-subtext="GR">Greece</option>
                                            <option value="87" data-subtext="GL">Greenland</option>
                                            <option value="88" data-subtext="GD">Grenada</option>
                                            <option value="89" data-subtext="GP">Guadaloupe</option>
                                            <option value="90" data-subtext="GU">Guam</option>
                                            <option value="91" data-subtext="GT">Guatemala</option>
                                            <option value="92" data-subtext="GG">Guernsey</option>
                                            <option value="93" data-subtext="GN">Guinea</option>
                                            <option value="94" data-subtext="GW">Guinea-Bissau</option>
                                            <option value="95" data-subtext="GY">Guyana</option>
                                            <option value="96" data-subtext="HT">Haiti</option>
                                            <option value="97" data-subtext="HM">Heard Island and McDonald Islands
                                            </option>
                                            <option value="98" data-subtext="HN">Honduras</option>
                                            <option value="99" data-subtext="HK">Hong Kong</option>
                                            <option value="100" data-subtext="HU">Hungary</option>
                                            <option value="101" data-subtext="IS">Iceland</option>
                                            <option value="102" data-subtext="IN">India</option>
                                            <option value="103" data-subtext="ID">Indonesia</option>
                                            <option value="104" data-subtext="IR">Iran</option>
                                            <option value="105" data-subtext="IQ">Iraq</option>
                                            <option value="106" data-subtext="IE">Ireland</option>
                                            <option value="107" data-subtext="IM">Isle of Man</option>
                                            <option value="108" data-subtext="IL">Israel</option>
                                            <option value="109" data-subtext="IT">Italy</option>
                                            <option value="110" data-subtext="JM">Jamaica</option>
                                            <option value="111" data-subtext="JP">Japan</option>
                                            <option value="112" data-subtext="JE">Jersey</option>
                                            <option value="113" data-subtext="JO">Jordan</option>
                                            <option value="114" data-subtext="KZ">Kazakhstan</option>
                                            <option value="115" data-subtext="KE">Kenya</option>
                                            <option value="116" data-subtext="KI">Kiribati</option>
                                            <option value="117" data-subtext="XK">Kosovo</option>
                                            <option value="118" data-subtext="KW">Kuwait</option>
                                            <option value="119" data-subtext="KG">Kyrgyzstan</option>
                                            <option value="120" data-subtext="LA">Laos</option>
                                            <option value="121" data-subtext="LV">Latvia</option>
                                            <option value="122" data-subtext="LB">Lebanon</option>
                                            <option value="123" data-subtext="LS">Lesotho</option>
                                            <option value="124" data-subtext="LR">Liberia</option>
                                            <option value="125" data-subtext="LY">Libya</option>
                                            <option value="126" data-subtext="LI">Liechtenstein</option>
                                            <option value="127" data-subtext="LT">Lithuania</option>
                                            <option value="128" data-subtext="LU">Luxembourg</option>
                                            <option value="129" data-subtext="MO">Macao</option>
                                            <option value="131" data-subtext="MG">Madagascar</option>
                                            <option value="132" data-subtext="MW">Malawi</option>
                                            <option value="133" data-subtext="MY">Malaysia</option>
                                            <option value="134" data-subtext="MV">Maldives</option>
                                            <option value="135" data-subtext="ML">Mali</option>
                                            <option value="136" data-subtext="MT">Malta</option>
                                            <option value="137" data-subtext="MH">Marshall Islands</option>
                                            <option value="138" data-subtext="MQ">Martinique</option>
                                            <option value="139" data-subtext="MR">Mauritania</option>
                                            <option value="140" data-subtext="MU">Mauritius</option>
                                            <option value="141" data-subtext="YT">Mayotte</option>
                                            <option value="142" data-subtext="MX">Mexico</option>
                                            <option value="143" data-subtext="FM">Micronesia</option>
                                            <option value="144" data-subtext="MD">Moldava</option>
                                            <option value="145" data-subtext="MC">Monaco</option>
                                            <option value="146" data-subtext="MN">Mongolia</option>
                                            <option value="147" data-subtext="ME">Montenegro</option>
                                            <option value="148" data-subtext="MS">Montserrat</option>
                                            <option value="149" data-subtext="MA">Morocco</option>
                                            <option value="150" data-subtext="MZ">Mozambique</option>
                                            <option value="151" data-subtext="MM">Myanmar (Burma)</option>
                                            <option value="152" data-subtext="NA">Namibia</option>
                                            <option value="153" data-subtext="NR">Nauru</option>
                                            <option value="154" data-subtext="NP">Nepal</option>
                                            <option value="155" data-subtext="NL">Netherlands</option>
                                            <option value="156" data-subtext="NC">New Caledonia</option>
                                            <option value="157" data-subtext="NZ">New Zealand</option>
                                            <option value="158" data-subtext="NI">Nicaragua</option>
                                            <option value="159" data-subtext="NE">Niger</option>
                                            <option value="160" data-subtext="NG">Nigeria</option>
                                            <option value="161" data-subtext="NU">Niue</option>
                                            <option value="162" data-subtext="NF">Norfolk Island</option>
                                            <option value="163" data-subtext="KP">North Korea</option>
                                            <option value="130" data-subtext="MK">North Macedonia</option>
                                            <option value="164" data-subtext="MP">Northern Mariana Islands</option>
                                            <option value="165" data-subtext="NO">Norway</option>
                                            <option value="166" data-subtext="OM">Oman</option>
                                            <option value="167" data-subtext="PK">Pakistan</option>
                                            <option value="168" data-subtext="PW">Palau</option>
                                            <option value="169" data-subtext="PS">Palestine</option>
                                            <option value="170" data-subtext="PA">Panama</option>
                                            <option value="171" data-subtext="PG">Papua New Guinea</option>
                                            <option value="172" data-subtext="PY">Paraguay</option>
                                            <option value="173" data-subtext="PE">Peru</option>
                                            <option value="174" data-subtext="PH">Philippines</option>
                                            <option value="175" data-subtext="PN">Pitcairn</option>
                                            <option value="176" data-subtext="PL">Poland</option>
                                            <option value="177" data-subtext="PT">Portugal</option>
                                            <option value="178" data-subtext="PR">Puerto Rico</option>
                                            <option value="179" data-subtext="QA">Qatar</option>
                                            <option value="180" data-subtext="RE">Reunion</option>
                                            <option value="181" data-subtext="RO">Romania</option>
                                            <option value="182" data-subtext="RU">Russia</option>
                                            <option value="183" data-subtext="RW">Rwanda</option>
                                            <option value="184" data-subtext="BL">Saint Barthelemy</option>
                                            <option value="185" data-subtext="SH">Saint Helena</option>
                                            <option value="186" data-subtext="KN">Saint Kitts and Nevis</option>
                                            <option value="187" data-subtext="LC">Saint Lucia</option>
                                            <option value="188" data-subtext="MF">Saint Martin</option>
                                            <option value="189" data-subtext="PM">Saint Pierre and Miquelon</option>
                                            <option value="190" data-subtext="VC">Saint Vincent and the Grenadines
                                            </option>
                                            <option value="191" data-subtext="WS">Samoa</option>
                                            <option value="192" data-subtext="SM">San Marino</option>
                                            <option value="193" data-subtext="ST">Sao Tome and Principe</option>
                                            <option value="194" data-subtext="SA">Saudi Arabia</option>
                                            <option value="195" data-subtext="SN">Senegal</option>
                                            <option value="196" data-subtext="RS">Serbia</option>
                                            <option value="197" data-subtext="SC">Seychelles</option>
                                            <option value="198" data-subtext="SL">Sierra Leone</option>
                                            <option value="199" data-subtext="SG">Singapore</option>
                                            <option value="200" data-subtext="SX">Sint Maarten</option>
                                            <option value="201" data-subtext="SK">Slovakia</option>
                                            <option value="202" data-subtext="SI">Slovenia</option>
                                            <option value="203" data-subtext="SB">Solomon Islands</option>
                                            <option value="204" data-subtext="SO">Somalia</option>
                                            <option value="205" data-subtext="ZA">South Africa</option>
                                            <option value="206" data-subtext="GS">South Georgia and the South Sandwich
                                                Islands</option>
                                            <option value="207" data-subtext="KR">South Korea</option>
                                            <option value="208" data-subtext="SS">South Sudan</option>
                                            <option value="209" data-subtext="ES">Spain</option>
                                            <option value="210" data-subtext="LK">Sri Lanka</option>
                                            <option value="211" data-subtext="SD">Sudan</option>
                                            <option value="212" data-subtext="SR">Suriname</option>
                                            <option value="213" data-subtext="SJ">Svalbard and Jan Mayen</option>
                                            <option value="214" data-subtext="SZ">Swaziland</option>
                                            <option value="215" data-subtext="SE">Sweden</option>
                                            <option value="216" data-subtext="CH">Switzerland</option>
                                            <option value="217" data-subtext="SY">Syria</option>
                                            <option value="218" data-subtext="TW">Taiwan</option>
                                            <option value="219" data-subtext="TJ">Tajikistan</option>
                                            <option value="220" data-subtext="TZ">Tanzania</option>
                                            <option value="221" data-subtext="TH">Thailand</option>
                                            <option value="222" data-subtext="TL">Timor-Leste (East Timor)</option>
                                            <option value="223" data-subtext="TG">Togo</option>
                                            <option value="224" data-subtext="TK">Tokelau</option>
                                            <option value="225" data-subtext="TO">Tonga</option>
                                            <option value="226" data-subtext="TT">Trinidad and Tobago</option>
                                            <option value="227" data-subtext="TN">Tunisia</option>
                                            <option value="228" data-subtext="TR">Turkey</option>
                                            <option value="229" data-subtext="TM">Turkmenistan</option>
                                            <option value="230" data-subtext="TC">Turks and Caicos Islands</option>
                                            <option value="231" data-subtext="TV">Tuvalu</option>
                                            <option value="232" data-subtext="UG">Uganda</option>
                                            <option value="233" data-subtext="UA">Ukraine</option>
                                            <option value="234" data-subtext="AE">United Arab Emirates</option>
                                            <option value="235" data-subtext="GB">United Kingdom</option>
                                            <option value="236" data-subtext="US">United States</option>
                                            <option value="237" data-subtext="UM">United States Minor Outlying Islands
                                            </option>
                                            <option value="238" data-subtext="UY">Uruguay</option>
                                            <option value="239" data-subtext="UZ">Uzbekistan</option>
                                            <option value="240" data-subtext="VU">Vanuatu</option>
                                            <option value="241" data-subtext="VA">Vatican City</option>
                                            <option value="242" data-subtext="VE">Venezuela</option>
                                            <option value="243" data-subtext="VN">Vietnam</option>
                                            <option value="244" data-subtext="VG">Virgin Islands, British</option>
                                            <option value="245" data-subtext="VI">Virgin Islands, US</option>
                                            <option value="246" data-subtext="WF">Wallis and Futuna</option>
                                            <option value="247" data-subtext="EH">Western Sahara</option>
                                            <option value="248" data-subtext="YE">Yemen</option>
                                            <option value="249" data-subtext="ZM">Zambia</option>
                                            <option value="250" data-subtext="ZW">Zimbabwe</option>
                                        </select></div>
                                </div>
                                
                            </div>
                            <div class="w-full flex gap-10">

                                <div class=" w-full">
                                    <div class="form-group" app-field-wrapper="zip"><label for="zip"
                                            class="control-label">Zip Code</label><input type="text" id="zip" name="zip"
                                            class="form-control form-control-solid " value=""></div>
                                </div>
                                
                            </div>
                            
                            <div class="form-group w-full" >
                                    <label for="address"
                                        class="control-label">About</label><textarea id="about" name="about"
                                        class="form-control form-control-solid " rows="4"></textarea></div>

                                        
                        </div>
                    </div>
                    <div
                        class="btn-bottom-toolbar bottom-transaction text-right sm:tw-flex sm:tw-items-center sm:tw-justify-between">
                        <p class="no-mbot pull-left mtop5 btn-toolbar-notice tw-hidden sm:tw-block">
                            Include proposal items with merge field anywhere in proposal content as
                            <b>{proposal_items}</b> </p>
                        <div>
                            <a href="{{route('Leads')}}"
                                class="btn btn-default mleft10 proposal-form-submit save-and-send transaction-submit">
                                Back </a>
                            <button class="btn btn-primary mleft5 proposal-form-submit transaction-submit"
                                type="button">
                                Save </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>


    <!-- MAIN CONTENT AREA ENDS -->
</div>
@endsection

@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

<script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>
<script src="{{asset('assets/plugins/select2/select2.min.js')}}"></script>


<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection