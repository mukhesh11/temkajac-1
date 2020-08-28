<!DOCTYPE html> 
<html>
    <html lang="en">

        <!--  ------------------------Header Section ---------------------------- -->   



        <body data-spy="scroll" data-target=".bs-docs-sidebar">
        <?php
        session_start();
        include("header.php");
        include_once("controllers/functions.php");
        
        echo "Entered :";
        $user_array = null;
        if (isset($_SESSION['status'])) {
            $user_array = unserialize($_SESSION['usersearch']);
            $status = $_SESSION['status'];
            
            echo "Session Data Successful:". $user_array;
        }
        ?> 

            <!-- Subhead
          ================================================== -->
            <section id="subintro">
                <div class="jumbotron subhead" id="overview">
                    <div class="container">
                        <div class="row">
                            <div class="span12">
                                <div class="centered">
                                    <h3>Members</h3>
                                    <p>
                                        A list of all members of TEMKA JAC.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="breadcrumb">
                <div class="container">
                    <div class="row">
                        <div class="span12">
                            <ul class="breadcrumb notop">
                                <li><a href="index.php">Home</a><span class="divider">/</span></li>
                                <li class="active">Search Member</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span12">
                            <div class="row-fluid">
                                <div class="thumbnail">
                                    <!--  ===============MAIN Search Table ==============================-->
                                    
                                    <form method="post" id="searchMemberForm" name="searchMemberForm" action="./controllers/MemberSearchController.php" 
                                            class="bs-docs-example form-inline" enctype="multipart/form-data">
                                        
                                        <table class="container centered" >
                                            <tr>
                                                <td><label class="control-label alignright" >Name</label></td>
                                                <td><input type="text" id="name" class="input-xlarge"></td>
                                                <td><label class="control-label alignright" >Surname</label></td>
                                                <td><input type="text" id="surname"class="input-xlarge"></td>
                                            </tr>
                                            <tr>
                                                <td><label class="control-label alignright" >Father/ Husband Name</label></td>
                                                <td><input type="text" id="relation" class="input-xlarge"></td>
                                                <td><label class="control-label alignright" >Mother Name</label></td>
                                                <td><input type="text" id="mothername" class="input-xlarge"></td>
                                            </tr>
                                            <tr>
                                                <td><label class="control-label alignright" >Mobile Number</label></td>
                                                <td><input type="text" id="mobileNumber" class="input-xlarge"></td>
                                                <td><label class="control-label alignright" >Email ID</label></td>
                                                <td><input type="text" id="emailID" class="input-xlarge"></td>
                                            </tr>

                                            <tr>
                                                <td><label class="control-label alignright" >Country</label></td>
                                                <td>
                                                    <select id="country" name="country" class="input-xlarge" >
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
                                                        $con->close();
                                                        ?>
                                                    </select>

                                                </td>
                                                <td><label class="control-label alignright" >State</label></td>
                                                <td> <div class="controls" id="region_div" name="region_div" >
                                                        <input id="region" name="region" type="text" placeholder="State/Region" class="input-xlarge" >
                                                    </div></td>
                                            </tr>
                                            <tr>
                                                <td><label class="control-label alignright" >District/ Province</label></td>
                                                <td><div class="controls" id="district_div" name="district_div">
                                                        <input id="district" name="district" type="text" placeholder="District/ Province" class="input-xlarge">
                                                    </div></td>
                                                <td><label class="control-label alignright" >Loksabha Constituency</label></td>
                                                <td><div class="controls" id="lok_div" name="lok_div">
                                                        <input id="lok_consty" name="lok_consty" type="text" placeholder="Loksabha Constituency" class="input-xlarge">
                                                    </div></td>
                                            </tr>
                                            <tr>
                                                <td><label class="control-label alignright" >Assembly Constituency</label></td>
                                                <td><div class="controls" id="asbly_div" name="asbly_div">
                                                        <input id="asbly_consty" name="asbly_consty" type="text" placeholder="Assembly Constituency" class="input-xlarge">
                                                    </div></td>
                                                <td><label class="control-label alignright" >Mandal</label></td>
                                                <td><div class="controls"  id="mandal_div" name="mandal_div">
                                                        <input id="mandal" name="mandal" type="text" placeholder="Mandal" class="input-xlarge">
                                                    </div></td>
                                            </tr>
                                            <tr>
                                                <td><label class="control-label alignright" >City/ Village</label></td>
                                                <td> <div class="controls">
                                                        <input id="city" name="city" type="text" placeholder="City/ Village Name" class="input-xlarge" >
                                                    </div></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" style="alignment-adjust: central">
                                                    <div class="controls"> 
                                                        <button type="submit" class="btn btn-success input-medium">Search</button> 
                                                        <button type="button" class="btn input-medium">Reset</button> 
                                                    </div>          
                                                </td>
                                            </tr>  
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="contents">
                <div class="container">
                    <div class="row">
                        <div class="span12">
                            <div class="thumbnail">
                                <!--  ===============Table ==============================-->
                                <table id="searchTable" class="table" style="width:100%"> 
                                    <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Surname</th>
                                            <th>Father Name</th>
                                            <th>Mother Name</th>
                                            <th>Phone Number</th>
                                            <th>Email ID</th>
                                            <th>Mandal</th>
                                            <th>Assembly Constituency</th>
                                            <th>Loksabha Constituency</th>
                                            <th>District/ Province</th>
                                            <th>State</th>
                                            <th>Country</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php
                                if ($user_array != null) {
                                for ($i = 0; $i < count($user_array); $i++) {
                                    $userdata =  $user_array[$i];
                                ?>
                                        <tr>
                                        <td><?php  echo $userdata->name ?></td>
                                        <td><?php  echo $userdata->getSurname() ?></td>
                                        <td><?php  echo $userdata->getRelation() ?></td>
                                        <td><?php echo  $userdata->getMother_name() ?></td>
                                        <td><?php  echo $userdata->getMob_no() ?> </td>
                                        <td><?php  echo $userdata->getEmail() ?> </td>
                                        <td><?php  echo $userdata->getMandalDesc() ?> </td>
                                        <td><?php  echo $userdata->getAssembly_constyDesc() ?> </td>
                                        <td><?php  echo $userdata->getLoksabha_constyDesc() ?> </td>
                                        <td><?php  echo $userdata->getDistrictDesc() ?> </td>
                                        <td><?php  echo $userdata->getRegionDesc() ?> </td>
                                        <td><?php  echo $userdata->getCountryDesc() ?> </td>
                                        </tr>

                           <?php  }
                            } ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>

            </section>





            <!-- Footer  ================================================== -->
            <?php include 'footer.php'; ?> 


            <!-- JavaScript Library Files -->
            <script src="assets/js/jquery.min.js"></script>
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

            <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>

            <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">


            <!-- Template Custom JavaScript File -->
            <script src="assets/js/custom.js"></script>

            <script type="text/javascript">
                $(document).ready(function () {

                    //Search Datatable Integration.
                    $('#searchTable').DataTable();

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
                                $("#mandal").empty();
                                $("#region_div").children().remove();
                                //$("#asbly_div").children().remove();
                                //$("#lok_div").children().remove();
                                //$("#mandal_div").children().remove();
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

                });

            </script>
        </body> 
    </html>