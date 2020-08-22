<!DOCTYPE html>
<!--  ------------------------Header Section ---------------------------- -->   
<?php
session_start();
include("header.php");
include_once("controllers/functions.php");

?> 

<html lang="en">
    <head>
        <script src="assets/js/jquery-1.12.0.min.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                
                /**
                 * Country Ajax Dropdown Start 
                 */
                $("#country").change(function () {
                    var codeVal = $(this).val();
                    var typeid = 'STATE';
                    //alert("Country Selected :" + codeVal);

                    $.ajax({
                        url: './utils/location.php',
                        type: 'post',
                        data: {type: typeid, code: codeVal},
                        dataType: 'json',
                        success: function (response) {
                            var len = response.length;
                            //alert("States Size :" + len);
                            $("#region").empty();
                            $("#district").empty();
                            $("#lok_consty").empty();
                            $("#asbly_consty").empty();
                            $("#region_div").children().remove();
                            if (len > 0) {
                                $("#region_div").append("<select id='region' name='region' class='input-xlarge'><option value='0'>- Select -</option></select>");
                                for (var i = 0; i < len; i++) {
                                    var code = response[i]['code'];
                                    var description = response[i]['description'];
                                    $("#region").append("<option value='" + code + "'>" + description + "</option>");
                                }
                            } else {
                                $("#region_div").append("<input id='region' name='region' type='text' placeholder='state / province / region' class='input-xlarge'> </p>");
                                //id="region_div"
                            }
                        },
                        error: function (exception) {
                            //var responseText=JSON.parse(exception.responseText);
                            //alert("Error(s) in file:\n"+responseText.messages);
                            alert('Exception:' + exception.responseText);
                        }
                    });
                });
                /**
                 * Country Ajax Dropdown Stop 
                 */

                $('#region_div').on('change', '#region', function () {
                    var codeVal = $(this).val();
                    var typeid = 'DISTRICTS';
                    var lokTypeid = 'LOK_CONSTY';
                    //alert("State Selected :" + codeVal);

                    $.ajax({
                        url: './utils/location.php',
                        type: 'post',
                        data: {type: typeid, code: codeVal},
                        dataType: 'json',
                        success: function (response) {
                            var len = response.length;
                            //alert("Districts :" + len);
                            $("#district").empty();

                            $("#district_div").children().remove();
                            if (len > 0) {
                                $("#district_div").append("<select id='district' name='district' class='input-xlarge'><option value='0'>- Select -</option></select>");
                                for (var i = 0; i < len; i++) {
                                    var code = response[i]['code'];
                                    var description = response[i]['description'];
                                    $("#district").append("<option value='" + code + "'>" + description + "</option>");
                                }
                            } else {
                                $("#district_div").append("<input id='district' name='district' type='text' placeholder='District' class='input-xlarge'> </p>");
                                //id="region_div"
                            }
                        },
                        error: function (exception) {
                            //var responseText=JSON.parse(exception.responseText);
                            //alert("Error(s) in file:\n"+responseText.messages);
                            alert('Exception:' + exception.responseText);
                        }
                    });

                    $.ajax({
                        url: './utils/location.php',
                        type: 'post',
                        data: {type: lokTypeid, code: codeVal},
                        dataType: 'json',
                        success: function (response) {
                            var len = response.length;
                            //alert("Loksabha Constinuencies :" + len);
                            $("#lok_consty").empty();

                            $("#lok_div").children().remove();
                            if (len > 0) {
                                $("#lok_div").append("<select id='lok_consty' name='lok_consty' class='input-xlarge'><option value='0'>- Select -</option></select>");
                                for (var i = 0; i < len; i++) {
                                    var code = response[i]['code'];
                                    var description = response[i]['description'];
                                    $("#lok_consty").append("<option value='" + code + "'>" + description + "</option>");
                                }
                            } else {
                                $("#lok_div").append("<input id='lok_consty' name='lok_consty' type='text' placeholder='Loksabha Constituency' class='input-xlarge'> </p>");
                            }
                        },
                        error: function (exception) {
                            //var responseText=JSON.parse(exception.responseText);
                            //alert("Error(s) in file:\n"+responseText.messages);
                            alert('Exception:' + exception.responseText);
                        }
                    });
                });
                $('#district_div').on('change', '#district', function () {
                    var codeVal = $(this).val();
                    var asyTypeid = 'ASBLY_CONSTY';
                    var mandalid = 'MANDALS';

                    //alert("District Selected :" + codeVal);

                    $.ajax({
                        url: './utils/location.php',
                        type: 'post',
                        data: {type: asyTypeid, code: codeVal},
                        dataType: 'json',
                        success: function (response) {
                            var len = response.length;
                            //alert("Assembly Constinuencies :" + len);
                            $("#asbly_consty").empty();

                            $("#asbly_div").children().remove();
                            if (len > 0) {
                                $("#asbly_div").append("<select id='asbly_consty' name='asbly_consty' class='input-xlarge'><option value='0'>- Select -</option></select>");
                                for (var i = 0; i < len; i++) {
                                    var code = response[i]['code'];
                                    var description = response[i]['description'];
                                    $("#asbly_consty").append("<option value='" + code + "'>" + description + "</option>");
                                }
                            } else {
                                $("#asbly_div").append("<input id='asbly_consty' name='asbly_consty' type='text' placeholder='Loksabha Constituency' class='input-xlarge'> </p>");
                            }

                        },
                        error: function (exception) {
                            //var responseText=JSON.parse(exception.responseText);
                            //alert("Error(s) in file:\n"+responseText.messages);
                            alert('Exception:' + exception.responseText);
                        }
                    });
                    $.ajax({
                        url: './utils/location.php',
                        type: 'post',
                        data: {type: mandalid, code: codeVal},
                        dataType: 'json',
                        success: function (response) {
                            var len = response.length;
                            //alert("Mandals :" + len);
                            $("#mandal").empty();

                            $("#mandal_div").children().remove();
                            if (len > 0) {
                                $("#mandal_div").append("<select id='mandal' name='mandal' class='input-xlarge'><option value='0'>- Select -</option></select>");
                                for (var i = 0; i < len; i++) {
                                    var code = response[i]['code'];
                                    var description = response[i]['description'];
                                    $("#mandal").append("<option value='" + code + "'>" + description + "</option>");
                                }
                            } else {
                                $("#mandal_div").append("<input id='mandal' name='mandal' type='text' placeholder='Loksabha Constituency' class='input-xlarge'> </p>");
                            }
                        },
                        error: function (exception) {
                            //var responseText=JSON.parse(exception.responseText);
                            //alert("Error(s) in file:\n"+responseText.messages);
                            alert('Exception:' + exception.responseText);
                        }
                    });


                });

                // Initialize form validation on the registration form.
                // It has the name attribute "registration"
                
                $('form[id="registerationForm"]').validate({
                    // Specify validation rules
                    rules:{
                        // The key name on the left side is the name attribute
                        // of an input field. Validation rules are defined
                        // on the right side
                        fullName:"required",
                        surname:"required",
                        relation:"required",
                        motherName:"required",
                        motherMaidenName:"required",
                        country:"required",
                        region:"required",
                        city:"required",
                        address1:"required",
                        email:{
                            required: true,
                            // Specify that email should be validated
                            // by the built-in "email" rule
                            email: true
                        },
                        password:{
                            minlength: 8
                        },
                        cpassword:{
                            minlength: 8,
                            equalTo: "#password"
                        },
                        aadharNumber:{
                            required: true,
                            minlength: 12
                        },
                        mobileNumber:{
                            required: true,
                            minlength: 10,
                            maxlength: 10,
                            number: true
                        },
                        postal_code:{
                            required: true,
                            minlength: 6,
                            number: true
                        }
                    },
                    messages:{
                        email: "Enter a valid email address",
                        password: {
                            required: "Enter your password",
                            minlength: "Your password must contain more than 8 characters"
                        },
                        cpassword:  {
                            required: "Enter confirm password",
                            minlength: "Your password must contain more than 8 characters",
                            passwordMatch: "Your Passwords Must Match" // custom message for mismatched passwords
                        },
                        fullName: "Enter your full name",
                        surname: "Enter your surname",
                        relation: "Enter your relation",
                        motherName: "Enter your mother's name",
                        motherMaidenName: "Enter your mothers maiden name",
                        aadharNumber: "Enter valid aadhar number",
                        mobileNumber: "Enter valid mobile number",
                        country: "Enter your country",
                        region: "Enter your state/ region",
                        city: "Enter your city/ village name",
                        address1: "Enter valid address",
                        postal_code: "Enter valid pincode"
                    },
                    // Make sure the form is submitted to the destination defined
                    // in the "action" attribute of the form when valid
                    submitHandler: function (form) {
                        form.submit();
                    }
                });


            });
        </script>
    </head>
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
                    <form method="post" id="registerationForm" name="registerationForm" action="./controllers/registerController.php" class="bs-docs-example form-inline" enctype="multipart/form-data">
                        <legend>Registration Form:</legend>
                        <div class="form-horizontal">
                            <?php 
                                $status = null;
                                $msg = null;
                                if (isset($_SESSION['status1'])) {
                                    $status = $_SESSION['status1'];
                                    $msg = $_SESSION['message'];
                                    ?>
                                    <h3 class="text-error">Submit Failed. Reason: <?php echo $msg?></h3>
                                <?php
                                }
                            ?>
                            
                            <div class="control-group">
                                <label class="control-label">Email ID <span class="asteriskField">*</span> </label> 
                                <div class="controls">
                                    <div class="input-append">
                                        <input type="email" id="emailID" name="emailID" placeholder="Enter Your Email ID" class="input-xlarge"  required>
                                        <span class="add-on">@</span>
                                    </div>
                                    <span class="help-block">Use your email ID as login ID in application.</span>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Password <span class="asteriskField">*</span> </label> 
                                <div class="controls">
                                    <input type="password" id="password" name="password" autocomplete=​"new-password" placeholder="Enter Password.." class="input-xlarge"  required>
                                    <span class="help-block">Password should be a minimum of 8 characters, with minimum of one number or special character.</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Confirm Password <span class="asteriskField">*</span> </label> 
                                <div class="controls">
                                    <input type="password" id="cpassword" name="cpassword" autocomplete=​"new-password" placeholder="Confirm Password.." class="input-xlarge"  required> 
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Full Name <span class="asteriskField">*</span> </label> 
                                <div class="controls">
                                    <input type="text" id="fullName" name="fullName" placeholder="Enter Full Name.." class="input-xlarge"  required> 
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Surname <span class="asteriskField">*</span> </label>
                                <div class="controls">
                                    <input type="text" id="surname" name="surname" placeholder="Enter Surname" class="input-xlarge" required> 
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
                                    <input type="text" id="relation"  name="relation" placeholder="Father Name or Husband Name" class="input-xlarge" required> 
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Mother Name</label> 
                                <div class="controls">
                                    <input type="text" id="motherName" name="motherName" placeholder="Enter Mother Name" class="input-xlarge" required>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Mother Maiden Name</label> 
                                <div class="controls">
                                    <input type="text" id="motherMaidenName" name="motherMaidenName" placeholder="Enter Mother Maiden Name" class="input-xlarge" required>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Upload Photo</label> 
                                <div class="controls">
                                    <input type="hidden" id="filename" name="filename" value="">
                                    <input type="file" id="uploadphoto" name="uploadphoto" class="form-control form-control-sm" >
                                    <span class="help-block">Photo size more than 1 MB is not allowed. Kindly limit the size of file being uploaded.</span>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Aadhar Number <span class="asteriskField">*</span> </label> 
                                <div class="controls">
                                    <input type="number" id="aadharNumber" name="aadharNumber" placeholder="Enter 12 digit Aadhar Number" class="input-xlarge"  required>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Mobile Number <span class="asteriskField">*</span> </label> 
                                <div class="controls">
                                    <div class="input-append">
                                        <input type="number" id="mobileNumber" name="mobileNumber" placeholder="Enter Mobile Number" class="input-xlarge"  required>
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
                                                <input type="date" id="dateOfBirth" name="dateOfBirth" class="input-xlarge" placeholder="DD/MM/YYY"   />
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

                                <!-- country select -->
                                <div class="control-group">
                                    <label class="control-label">Country <span class="asteriskField">*</span> </label>
                                    <div class="controls">
                                        <select id="country" name="country" class="input-xlarge" required>
                                            <option value="" selected="selected">(Please select a Country)</option>

                                            <?php
                                            // Fetch Department
                                            $con = db_connect();
                                            $sql_country = "select CODE, DESCRIPTION from LOCATION where TYPE='COUNTRY'";
                                            $country_data = mysqli_query($con, $sql_country);
                                            while ($row = mysqli_fetch_assoc($country_data)) {
                                                $id = $row['CODE'];
                                                $name = $row['DESCRIPTION'];

                                                // Option
                                                echo "<option value='" . $id . "' >" . $name . "</option>";
                                            }
                                           // $con->close();
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- region input-->
                                <div class="control-group">
                                    <label class="control-label">State/Region<span class="asteriskField">*</span> </label>
                                    <div class="controls" id="region_div" name="region_div" >
                                        <input id="region" name="region" type="text" placeholder="State/Region" class="input-xlarge" required>
                                        <p class="help-block"></p>
                                    </div>
                                </div>

                                <!-- district input-->
                                <div class="control-group">
                                    <label class="control-label">District/ Province <span class="asteriskField">*</span> </label>
                                    <div class="controls" id="district_div" name="district_div">
                                        <input id="district" name="district" type="text" placeholder="District/ Province" class="input-xlarge">
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                                <!-- lok sabha constituency input-->
                                <div class="control-group">
                                    <label class="control-label">Loksabha Constituency </label>
                                    <div class="controls" id="lok_div" name="lok_div">
                                        <input id="lok_consty" name="lok_consty" type="text" placeholder="Loksabha Constituency" class="input-xlarge">
                                        <p class="help-block"></p>
                                    </div>
                                </div>  
                                <!-- assembly constituency input-->
                                <div class="control-group">
                                    <label class="control-label">Assembly Constituency </label>
                                    <div class="controls" id="asbly_div" name="asbly_div">
                                        <input id="asbly_consty" name="asbly_consty" type="text" placeholder="Assembly Constituency" class="input-xlarge">
                                        <p class="help-block"></p>
                                    </div>
                                </div>  
                                <!-- Mandal input-->
                                <div class="control-group">
                                    <label class="control-label">Mandal </label>
                                    <div class="controls"  id="mandal_div" name="mandal_div">
                                        <input id="mandal" name="mandal" type="text" placeholder="Mandal" class="input-xlarge">
                                        <p class="help-block"></p>
                                    </div>
                                </div>  
                                <!-- City/ Village input-->
                                <div class="control-group">
                                    <label class="control-label">City/ Village <span class="asteriskField">*</span> </label>
                                    <div class="controls">
                                        <input id="city" name="city" type="text" placeholder="City/ Village Name" class="input-xlarge" required>
                                        <p class="help-block"></p>
                                    </div>
                                </div>                                  
                                <!-- Address form -->
                                <div class="control-group">
                                    <label class="control-label">Address Line 1 <span class="asteriskField">*</span> </label> 
                                    <div class="controls">
                                        <input type="text" class="input-xlarge" id="address1" name="address1" placeholder="Enter Your Address" required/>
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
                                    <label class="control-label">Zip / Postal Code <span class="asteriskField">*</span> </label>
                                    <div class="controls">
                                        <input id="postal_code" name="postal_code" type="text" placeholder="Zip or Postal Code"
                                               class="input-xlarge" required>
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
            });
        </script>
    </body>
</html>
