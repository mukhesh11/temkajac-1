<!DOCTYPE html>
<html lang="en">

    <!--  ------------------------Header Section ---------------------------- -->   
    <?php include("header.php"); ?> 

    <body data-spy="scroll" data-target=".bs-docs-sidebar">

        <!-- Subhead  ================================================== -->
        <section id="subintro">
            <div class="jumbotron subhead" id="overview">
                <div class="container">
                    <div class="row">
                        <div class="span12">
                            <div class="centered">
                                <h3>Register Now !!!</h3>
                                <p>
                                    Register with TEMKA JAC to avail full benefits of our association.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="intro">
            <div class="container" style="position:relative">
                <div class="row">
                    <form method="post" id="registerationForm" action="./controllers/registerController.php" class="bs-docs-example form-inline" enctype="multipart/form-data">
                        <legend>Registration Form:</legend>
                        <div class="form-horizontal">

                            <div class="control-group">
                                <label class="control-label">Email ID <span class="asteriskField">*</span> </label> 
                                <div class="controls">
                                    <div class="input-append">
                                        <input type="email" id="emailID" name="emailID" placeholder="Enter Your Email ID" class="input-xlarge">
                                        <span class="add-on">@</span>
                                    </div>
                                    <span class="help-block">Use your email ID as login ID in application.</span>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Password <span class="asteriskField">*</span> </label> 
                                <div class="controls">
                                    <input type="password" id="password" name="password" placeholder="Enter Password.." class="input-xlarge">
                                    <span class="help-block">Password should be a minimum of 8 characters, with minimum of one number or special character.</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Confirm Password <span class="asteriskField">*</span> </label> 
                                <div class="controls">
                                    <input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password.." class="input-xlarge"> 
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Full Name <span class="asteriskField">*</span> </label> 
                                <div class="controls">
                                    <input type="text" id="fullName" name="fullName" placeholder="Enter Full Name.." class="input-xlarge"> 
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Surname <span class="asteriskField">*</span> </label>
                                <div class="controls">
                                    <input type="text" id="surname" name="surname" placeholder="Enter Surname" class="input-xlarge"> 
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label"> Gender  <span class="asteriskField">*</span> </label> 
                                <div class="controls">
                                    <label class="radio"> <input type="radio" id="gender" name="gender" value="Male" checked> Male </label>
                                    <label class="radio"> <input type="radio" id="gender" name="gender" value="Female"> Female </label>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">
                                    <select class="span1">
                                        <option>S/o</option>
                                        <option>W/o</option>
                                        <option>D/o</option>
                                    </select>
                                </label> 
                                <div class="controls">
                                    <input type="text" id="relation"  name="relation" placeholder="Father Name or Husband Name" class="input-xlarge"> 
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Mother Name</label> 
                                <div class="controls">
                                    <input type="text" id="motherName" name="motherName" placeholder="Enter Mother Name" class="input-xlarge">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Mother Maiden Name</label> 
                                <div class="controls">
                                    <input type="text" id="motherMaidenName" name="motherMaidenName" placeholder="Enter Mother Maiden Name" class="input-xlarge">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Upload Photo</label> 
                                <div class="controls">
                                    <input type="hidden" id="filename" name="filename" value="">
                                    <input type="file" id="uploadphoto" name="uploadphoto" class="form-control form-control-sm">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Aadhar Number <span class="asteriskField">*</span> </label> 
                                <div class="controls">
                                    <input type="number" id="aadharNumber" name="aadharNumber" placeholder="Enter 12 digit Aadhar Number" class="input-xlarge" >
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Mobile Number <span class="asteriskField">*</span> </label> 
                                <div class="controls">
                                    <div class="input-append">
                                        <input type="number" id="mobileNumber" name="mobileNumber" placeholder="Enter Mobile Number" class="input-xlarge" >
                                        <span class="add-on"><i class="icon-phone"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Date of Birth <span class="asteriskField">*</span> </label> 
                                <div class="controls">
                                    <div class='input-group'>
                                        <div class="input-group-addon">
                                            <div class="input-append">
                                                <input type="date" id="dateOfBirth" name="dateOfBirth" class="input-xlarge" placeholder="DD/MM/YYY"  />
                                                <span class="add-on"><i class="icon-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Marital Status</label> 
                                <div class="controls">
                                    <select id="maritalStatus" name="maritalStatus" class="input-xlarge">
                                        <option>Single</option>
                                        <option>Married</option>
                                        <option>Divorced</option>
                                        <option>Widow</option>
                                    </select>
                                </div>
                            </div>
                            <fieldset>
                                <!-- Address form -->
                                <legend>Profession:</legend>
                                <div class="control-group">
                                    <label class="control-label">Category</label> 
                                    <div class="controls">
                                        <select id="profession_category" name="profession_category" class="input-xlarge">
                                            <option> </option>
                                            <option>Arts &amp; crafts</option>
                                            <option>Agriculture, Food &amp Natural Resources</option>
                                            <option>Architecture &amp; Construction</option>
                                            <option>Armed Forces</option>
                                            <option>Baby Products</option>
                                            <option>Beauty and fragrances</option>
                                            <option>Books and magazines</option>
                                            <option>Clothing, accessories, and shoes</option>
                                            <option>Computers, accessories, and services</option>
                                            <option>Education & Training</option>
                                            <option>Electronics</option>
                                            <option>Entertainment and media</option>
                                            <option>Financial services and products</option>
                                            <option>Food retail and service</option>
                                            <option>Government &amp; Public Administration </option>
                                            <option>Gifts and flowers</option>
                                            <option>Health Science</option>
                                            <option>Home and garden</option>
                                            <option>Hospitality &amp; Tourism</option>
                                            <option>Industrial Equipment &amp; Parts</option>
                                            <option>Information Technology</option>
                                            <option>Jewelry &amp; Accessories</option>
                                            <option>Law, Public Safety &amp; Security</option>
                                            <option>Manufacturing</option>
                                            <option>Marketing &amp; Sales</option>
                                            <option>Nonprofit</option>
                                            <option>Packaging</option>
                                            <option>Pets and animals</option>
                                            <option>Politician</option>
                                            <option>Printing</option>
                                            <option>Retail  (not elsewhere classified)</option>
                                            <option>Professional Services - other</option>
                                            <option>Science, Technology, Engineering &amp; Mathematics </option>                                              
                                            <option>Sports and outdoors</option>
                                            <option>Toys and hobbies</option>
                                            <option>Transportation, Logistics </option>
                                            <option>Vehicle sales &amp; services</option>
                                            <option>Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Organization Name</label> 
                                    <div class="controls">
                                        <input type="text" class="input-xlarge" id="organizationName" name="organizationName" placeholder="Enter name of organization" />
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Occupation Role</label> 
                                    <div class="controls">
                                        <input type="text" class="input-xlarge" id="occupationRole" name="occupationRole" placeholder="Enter role in organization" />
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Address</label> 
                                    <div class="controls">
                                        <textarea rows="3" class="input-xlarge" id="organizationAddress" name="organizationAddress" placeholder="Enter role in organization"></textarea>
                                    </div>
                                </div>
  
                                
                            </fieldset>

                            <fieldset>
                                <legend>Address:</legend>
                                <!-- trying to add drop down box using jquery
                                <div class="frmDronpDown">
	<div class="row">
		<label>Country:</label><br/>
		<select name="country" id="country-list" class="demoInputBox" onChange="getState(this.value);">
		<option value="">Select Country</option>
		<?php
		foreach($results as $country) {
		?>
		<option value="<?php echo $country["id"]; ?>"><?php echo $country["name"]; ?></option>
		<?php
		}
		?>
		</select>
	</div>
	<div class="row">
		<label>State:</label><br/>
		<select name="state" id="state-list" class="demoInputBox">
		<option value="">Select State</option>
		</select>
	</div>
</div> -->
                                
                                <!-- country select -->
                                <div class="control-group">
                                    <label class="control-label">Country <span class="asteriskField">*</span> </label>
                                    <div class="controls">
                                        <select id="country" name="country" class="input-xlarge">
                                            <option value="" selected="selected">(please select a country)</option>
                                            <option value="IN">India</option>
                                            <option value="">------------</option>
                                            <option value="AF">Afghanistan</option>
                                            <option value="AL">Albania</option>
                                            <option value="DZ">Algeria</option>
                                            <option value="AS">American Samoa</option>
                                            <option value="AD">Andorra</option>
                                            <option value="AO">Angola</option>
                                            <option value="AI">Anguilla</option>
                                            <option value="AQ">Antarctica</option>
                                            <option value="AG">Antigua and Barbuda</option>
                                            <option value="AR">Argentina</option>
                                            <option value="AM">Armenia</option>
                                            <option value="AW">Aruba</option>
                                            <option value="AU">Australia</option>
                                            <option value="AT">Austria</option>
                                            <option value="AZ">Azerbaijan</option>
                                            <option value="BS">Bahamas</option>
                                            <option value="BH">Bahrain</option>
                                            <option value="BD">Bangladesh</option>
                                            <option value="BB">Barbados</option>
                                            <option value="BY">Belarus</option>
                                            <option value="BE">Belgium</option>
                                            <option value="BZ">Belize</option>
                                            <option value="BJ">Benin</option>
                                            <option value="BM">Bermuda</option>
                                            <option value="BT">Bhutan</option>
                                            <option value="BO">Bolivia</option>
                                            <option value="BA">Bosnia and Herzegowina</option>
                                            <option value="BW">Botswana</option>
                                            <option value="BV">Bouvet Island</option>
                                            <option value="BR">Brazil</option>
                                            <option value="IO">British Indian Ocean Territory</option>
                                            <option value="BN">Brunei Darussalam</option>
                                            <option value="BG">Bulgaria</option>
                                            <option value="BF">Burkina Faso</option>
                                            <option value="BI">Burundi</option>
                                            <option value="KH">Cambodia</option>
                                            <option value="CM">Cameroon</option>
                                            <option value="CA">Canada</option>
                                            <option value="CV">Cape Verde</option>
                                            <option value="KY">Cayman Islands</option>
                                            <option value="CF">Central African Republic</option>
                                            <option value="TD">Chad</option>
                                            <option value="CL">Chile</option>
                                            <option value="CN">China</option>
                                            <option value="CX">Christmas Island</option>
                                            <option value="CC">Cocos (Keeling) Islands</option>
                                            <option value="CO">Colombia</option>
                                            <option value="KM">Comoros</option>
                                            <option value="CG">Congo</option>
                                            <option value="CD">Congo, the Democratic Republic of the</option>
                                            <option value="CK">Cook Islands</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="CI">Cote d'Ivoire</option>
                                            <option value="HR">Croatia (Hrvatska)</option>
                                            <option value="CU">Cuba</option>
                                            <option value="CY">Cyprus</option>
                                            <option value="CZ">Czech Republic</option>
                                            <option value="DK">Denmark</option>
                                            <option value="DJ">Djibouti</option>
                                            <option value="DM">Dominica</option>
                                            <option value="DO">Dominican Republic</option>
                                            <option value="TP">East Timor</option>
                                            <option value="EC">Ecuador</option>
                                            <option value="EG">Egypt</option>
                                            <option value="SV">El Salvador</option>
                                            <option value="GQ">Equatorial Guinea</option>
                                            <option value="ER">Eritrea</option>
                                            <option value="EE">Estonia</option>
                                            <option value="ET">Ethiopia</option>
                                            <option value="FK">Falkland Islands (Malvinas)</option>
                                            <option value="FO">Faroe Islands</option>
                                            <option value="FJ">Fiji</option>
                                            <option value="FI">Finland</option>
                                            <option value="FR">France</option>
                                            <option value="FX">France, Metropolitan</option>
                                            <option value="GF">French Guiana</option>
                                            <option value="PF">French Polynesia</option>
                                            <option value="TF">French Southern Territories</option>
                                            <option value="GA">Gabon</option>
                                            <option value="GM">Gambia</option>
                                            <option value="GE">Georgia</option>
                                            <option value="DE">Germany</option>
                                            <option value="GH">Ghana</option>
                                            <option value="GI">Gibraltar</option>
                                            <option value="GR">Greece</option>
                                            <option value="GL">Greenland</option>
                                            <option value="GD">Grenada</option>
                                            <option value="GP">Guadeloupe</option>
                                            <option value="GU">Guam</option>
                                            <option value="GT">Guatemala</option>
                                            <option value="GN">Guinea</option>
                                            <option value="GW">Guinea-Bissau</option>
                                            <option value="GY">Guyana</option>
                                            <option value="HT">Haiti</option>
                                            <option value="HM">Heard and Mc Donald Islands</option>
                                            <option value="VA">Holy See (Vatican City State)</option>
                                            <option value="HN">Honduras</option>
                                            <option value="HK">Hong Kong</option>
                                            <option value="HU">Hungary</option>
                                            <option value="IS">Iceland</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IR">Iran (Islamic Republic of)</option>
                                            <option value="IQ">Iraq</option>
                                            <option value="IE">Ireland</option>
                                            <option value="IL">Israel</option>
                                            <option value="IT">Italy</option>
                                            <option value="JM">Jamaica</option>
                                            <option value="JP">Japan</option>
                                            <option value="JO">Jordan</option>
                                            <option value="KZ">Kazakhstan</option>
                                            <option value="KE">Kenya</option>
                                            <option value="KI">Kiribati</option>
                                            <option value="KP">Korea, Democratic People's Republic of</option>
                                            <option value="KR">Korea, Republic of</option>
                                            <option value="KW">Kuwait</option>
                                            <option value="KG">Kyrgyzstan</option>
                                            <option value="LA">Lao People's Democratic Republic</option>
                                            <option value="LV">Latvia</option>
                                            <option value="LB">Lebanon</option>
                                            <option value="LS">Lesotho</option>
                                            <option value="LR">Liberia</option>
                                            <option value="LY">Libyan Arab Jamahiriya</option>
                                            <option value="LI">Liechtenstein</option>
                                            <option value="LT">Lithuania</option>
                                            <option value="LU">Luxembourg</option>
                                            <option value="MO">Macau</option>
                                            <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                            <option value="MG">Madagascar</option>
                                            <option value="MW">Malawi</option>
                                            <option value="MY">Malaysia</option>
                                            <option value="MV">Maldives</option>
                                            <option value="ML">Mali</option>
                                            <option value="MT">Malta</option>
                                            <option value="MH">Marshall Islands</option>
                                            <option value="MQ">Martinique</option>
                                            <option value="MR">Mauritania</option>
                                            <option value="MU">Mauritius</option>
                                            <option value="YT">Mayotte</option>
                                            <option value="MX">Mexico</option>
                                            <option value="FM">Micronesia, Federated States of</option>
                                            <option value="MD">Moldova, Republic of</option>
                                            <option value="MC">Monaco</option>
                                            <option value="MN">Mongolia</option>
                                            <option value="MS">Montserrat</option>
                                            <option value="MA">Morocco</option>
                                            <option value="MZ">Mozambique</option>
                                            <option value="MM">Myanmar</option>
                                            <option value="NA">Namibia</option>
                                            <option value="NR">Nauru</option>
                                            <option value="NP">Nepal</option>
                                            <option value="NL">Netherlands</option>
                                            <option value="AN">Netherlands Antilles</option>
                                            <option value="NC">New Caledonia</option>
                                            <option value="NZ">New Zealand</option>
                                            <option value="NI">Nicaragua</option>
                                            <option value="NE">Niger</option>
                                            <option value="NG">Nigeria</option>
                                            <option value="NU">Niue</option>
                                            <option value="NF">Norfolk Island</option>
                                            <option value="MP">Northern Mariana Islands</option>
                                            <option value="NO">Norway</option>
                                            <option value="OM">Oman</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="PW">Palau</option>
                                            <option value="PA">Panama</option>
                                            <option value="PG">Papua New Guinea</option>
                                            <option value="PY">Paraguay</option>
                                            <option value="PE">Peru</option>
                                            <option value="PH">Philippines</option>
                                            <option value="PN">Pitcairn</option>
                                            <option value="PL">Poland</option>
                                            <option value="PT">Portugal</option>
                                            <option value="PR">Puerto Rico</option>
                                            <option value="QA">Qatar</option>
                                            <option value="RE">Reunion</option>
                                            <option value="RO">Romania</option>
                                            <option value="RU">Russian Federation</option>
                                            <option value="RW">Rwanda</option>
                                            <option value="KN">Saint Kitts and Nevis</option>
                                            <option value="LC">Saint LUCIA</option>
                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                            <option value="WS">Samoa</option>
                                            <option value="SM">San Marino</option>
                                            <option value="ST">Sao Tome and Principe</option>
                                            <option value="SA">Saudi Arabia</option>
                                            <option value="SN">Senegal</option>
                                            <option value="SC">Seychelles</option>
                                            <option value="SL">Sierra Leone</option>
                                            <option value="SG">Singapore</option>
                                            <option value="SK">Slovakia (Slovak Republic)</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="SB">Solomon Islands</option>
                                            <option value="SO">Somalia</option>
                                            <option value="ZA">South Africa</option>
                                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                                            <option value="ES">Spain</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SH">St. Helena</option>
                                            <option value="PM">St. Pierre and Miquelon</option>
                                            <option value="SD">Sudan</option>
                                            <option value="SR">Suriname</option>
                                            <option value="SJ">Svalbard and Jan Mayen Islands</option>
                                            <option value="SZ">Swaziland</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="SY">Syrian Arab Republic</option>
                                            <option value="TW">Taiwan, Province of China</option>
                                            <option value="TJ">Tajikistan</option>
                                            <option value="TZ">Tanzania, United Republic of</option>
                                            <option value="TH">Thailand</option>
                                            <option value="TG">Togo</option>
                                            <option value="TK">Tokelau</option>
                                            <option value="TO">Tonga</option>
                                            <option value="TT">Trinidad and Tobago</option>
                                            <option value="TN">Tunisia</option>
                                            <option value="TR">Turkey</option>
                                            <option value="TM">Turkmenistan</option>
                                            <option value="TC">Turks and Caicos Islands</option>
                                            <option value="TV">Tuvalu</option>
                                            <option value="UG">Uganda</option>
                                            <option value="UA">Ukraine</option>
                                            <option value="AE">United Arab Emirates</option>
                                            <option value="GB">United Kingdom</option>
                                            <option value="US">United States</option>
                                            <option value="UM">United States Minor Outlying Islands</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="UZ">Uzbekistan</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="VE">Venezuela</option>
                                            <option value="VN">Viet Nam</option>
                                            <option value="VG">Virgin Islands (British)</option>
                                            <option value="VI">Virgin Islands (U.S.)</option>
                                            <option value="WF">Wallis and Futuna Islands</option>
                                            <option value="EH">Western Sahara</option>
                                            <option value="YE">Yemen</option>
                                            <option value="YU">Yugoslavia</option>
                                            <option value="ZM">Zambia</option>
                                            <option value="ZW">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                                    <!-- region input-->
                                <div class="control-group">
                                    <label class="control-label">State / Province / Region<span class="asteriskField">*</span> </label>
                                    <div class="controls">
                                        <input id="region" name="region" type="text" placeholder="state / province / region"
                                               class="input-xlarge">
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                                        
                                    <!-- city input-->
                                <div class="control-group">
                                    <label class="control-label">City / Town <span class="asteriskField">*</span> </label>
                                    <div class="controls">
                                        <input id="city" name="city" type="text" placeholder="city" class="input-xlarge">
                                        <p class="help-block"></p>
                                    </div>
                                </div>  
                                    <!-- Address form -->
                                <div class="control-group">
                                    <label class="control-label">Address Line 1 <span class="asteriskField">*</span> </label> 
                                    <div class="controls">
                                        <input type="text" class="input-xlarge" id="address1" name="address1" placeholder="Enter Your Address" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Address Line 2</label> 
                                    <div class="controls">
                                        <input type="text" class="input-xlarge" id="address2" name="address2" placeholder="Enter Your Address" />
                                    </div>
                                </div>
                                
                               
                                    <!-- postal-code input-->
                                <div class="control-group">
                                    <label class="control-label">Zip / Postal Code</label>
                                    <div class="controls">
                                        <input id="postal_code" name="postal_code" type="text" placeholder="zip or postal code"
                                               class="input-xlarge">
                                        <p class="help-block"></p>
                                    </div>
                                </div>        
                            </fieldset>
                            <fieldset>
                                    <!-- Address form -->
                                <legend>Access Request:</legend>
                                <div class="control-group">
                                    <label class="control-label">Job Opportunities</label> 
                                    <div class="controls">
                                        <input type="checkbox" id="jobAccess" name="jobAccess" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Matrimony</label> 
                                    <div class="controls">
                                        <input type="checkbox" id="matrimonyAccess" name="matrimonyAccess" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Business Promotions</label> 
                                    <div class="controls">
                                        <input type="checkbox" id="businessAccess" name="businessAccess" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Blood Donation</label> 
                                    <div class="controls">
                                        <input type="checkbox" id="bloodDonation" name="bloodDonation" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Monthly Newsletter</label> 
                                    <div class="controls">
                                        <input type="checkbox" id="newsletter" name="newsletter" />
                                    </div>
                                </div>
                            </fieldset>


                            <div class="control-group"> 
                                <div class="controls"> 
                                   <!-- <label class="checkbox"> <input type="checkbox"> Remember me </label> -->
                                    <button type="submit" id="submit" name="submit" class="btn btn-success">Submit</button> 
                                    <button type="button" class="btn">Cancel</button>
                                </div> 
                            </div> 
                        </div> 
                    </form>
                </div>
            </div>
        </section>
        <!-- Footer  ================================================== -->
        <?php include 'footer.php'; ?> 

        <!-- JavaScript Library Files -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
        <script src="assets/js/jquery.easing.js"></script>
        <script src="assets/js/google-code-prettify/prettify.js"></script>
        <script src="assets/js/modernizr.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/jquery.elastislide.js"></script>
        <script src="assets/js/sequence/sequence.jquery-min.js"></script>
        <script src="assets/js/sequence/setting.js"></script>
        <script src="assets/js/jquery.prettyPhoto.js"></script>
        <script src="assets/js/application.js"></script>
        <script src="assets/js/jquery.flexslider.js"></script>
        <script src="assets/js/hover/jquery-hover-effect.js"></script>
        <script src="assets/js/hover/setting.js"></script>

        <!-- Template Custom JavaScript File -->
        <script src="assets/js/custom.js"></script>

        <!-- Bootstrap Date-Picker Plugin -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

        <script>
            $(document).ready(function () {
                var date_input = $('input[name="dateOfBirth"]'); //our date input has the name "date"
                var container = $('.container form').length > 0 ? $('.container form').parent() : "body";
                var options = {
                    format: 'dd/mm/yyyy',
                    container: container,
                    todayHighlight: true,
                    autoclose: true
                };
                date_input.datepicker(options);

                $('form[id="registerationForm"]').validate({
                    errorMessagePosition : 'top', // Instead of inline' which is default
                    rules: {
                        emailID: {
                            required: true,
                            email: true
                        },
                        password: {
                            required: true,
                            minlength: 8
                        },
                        cpassword: {
                            required: true,
                            equalTo: "#password",
                            minlength: 8
                        },
                        fullName: 'required',
                        surname: 'required',
                        gender: 'required',
                        aadharNumber: {
                            required:true,
                           minlength:12,
                           maxlength:12
                        },
                        mobileNumber: {
                            required:true,
                            pattern:"[0-9]{10}",
                            matches:"[0-9]",
                            minlength:10,
                            maxlength:10
                        },
                        dateOfBirth: 'required',
                        address1: 'required',
                        city: 'required',
                        region: 'required',
                        country: 'required'
                    },
                    messages: {
                        emailID: 'Enter a valid email',
                        password: {
                            minlength: 'Password must be at least 8 characters long'
                        },
                        cpassword: {
                            minlength: 'Password must be at least 8 characters long'
                        },
                        fullName: 'This field is required',
                        surname: 'This field is required',
                        gender: 'This field is required',
                        aadharNumber: {
                            minlength: 'Aadhar number must be 12 digits'
                        },
                        mobileNumber: 'This field is required',
                        dateOfBirth: 'This field is required',
                        address1: 'This field is required',
                        city: 'This field is required',
                        region: 'This field is required',
                        country: 'This field is required'
                    },
                    // Called when the element is invalid:
                    highlight: function(element) {
                        $(element).css('background', '#ffdddd');
                    },

                    // Called when the element is valid:
                    unhighlight: function(element) {
                        $(element).css('background', '#ffffff');
                    },
                    submitHandler: function (form) {
                        form.submit();
                    }

                })；
            });
        </script>
    </body>
</html>
