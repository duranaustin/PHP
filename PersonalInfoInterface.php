
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Personal Info Interface</title>
        <link href="/CSIS2440/CodeEx/view.css" rel="stylesheet" type="text/css">
    <h1>Please Enter Your Information</h1>
          <script type="text/javascript">
            function validate()
            {
                console.log("We are validating");
                console.log(document.myForm.firstName.value);
                var errorArray = new Array();
                expressionName = /^[a-zA-Z]+$/;
                console.log(expressionName.test(document.myForm.firstName.value))
                if (!expressionName.test(document.getElementById("FirstName").value)){
                    alert("Please provide the correct format for your first name!");
                    document.myForm.firstName.focus();
                    errorArray.push("You need the right format for your first name")
                    //return false;
                }
                expressionName = /^[a-zA-Z]+$/;
                console.log(expressionName.test(document.myForm.lastName.value))
                if (!expressionName.test(document.getElementById("LastName").value)){
                    alert("Please provide the correct format for your last name!");
                    document.myForm.lastName.focus();
                    errorArray.push("You need the right format for your last name")
                    //return false;
                }
                expression = /^[0-9]+$/;
                console.log(expression.test(document.myForm.phoneNumber.value))
                if (!expression.test(document.getElementById("PhoneNumber").value)){
                    alert("Please provide the correct format for your phone number!");
                    document.myForm.phoneNumber.focus();
                    errorArray.push("You need the right format for your phone number")
                    //return false;
                }
                if (document.myForm.address.value == "") {

                    alert("Please provide your address!");
                    document.myForm.address.focus();
//                    return false;
                    errorArray.push("You need an address")
                }
                if (document.myForm.city.value == "") {

                    alert("Please provide your city!");
                    document.myForm.city.focus();
//                    return false;
                    errorArray.push("You need a city")
                }
                if (document.myForm.state.value == "") {

                    alert("Please provide your state!");
                    document.myForm.state.focus();
//                    return false;
                    errorArray.push("You need a state")
                }
                if (document.myForm.zipCode.value == "" || isNaN(document.myForm.zipCode.value.length != 5)){
                    alert("Please provide a zip in the format #####.");
                    document.myForm.zipCode.focus();
//                    return false;
                    errorArray.push("You need a Zip Code")
                }
                if (document.myForm.birthDate.value == "") {

                    alert("Please provide your birth date!");
                    document.myForm.birthDate.focus();
//                    return false;
                    errorArray.push("You need a birth date")
                }
                if (document.myForm.userName.value == "") {

                    alert("Please provide your username!");
                    document.myForm.userName.focus();
//                    return false;
                    errorArray.push("You need a username")
                }
                if (document.myForm.password.value == "") {

                    alert("Please provide your password!");
                    document.myForm.password.focus();
//                    return false;
                    errorArray.push("You need a password")
                }
                if (document.myForm.sex.value == "") {

                    alert("Please provide your gender!");
                    document.myForm.sex.focus();
//                    return false;
                    errorArray.push("You need a gender")
                }
                if (document.myForm.relationship.value == "") {

                    alert("Please provide your relationship!");
                    document.myForm.relationship.focus();
//                    return false;
                    errorArray.push("You need a relationship")
                }      
                if (errorArray.length > 0){
                    var errorReport = document.getElementById("errorlog");
                    errorString = "<ul>"
                    for (i = 0; i < errorArray.length; i++){
                        errorString = errorString + "<li>" + errorArray[i] + "</li>"
                    }
                    errorString = errorString + "</ul>"
                    errorReport.innerHTML = errorString
                    return false;
                }
                return (true);

            }
      </script>   
    </head>

    <body>
        <div class="col-md-5 col-sm-5">
            <form action="PersonalInfoResult.php" name="myForm" method="post" role="form" onsubmit="return(validate());">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="form-group">
                            <label for="firstName">First Name:</label>
                            <input name="firstName" type="text" id="FirstName" class="form-control">
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group">
                            <label for="lastName">Last Name:</label>
                                <input type="text" name="lastName" id="LastName" class="form-control">
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group">
                            <label for="phoneNumber">Phone Number:</label>
                                <input type="number" name="phoneNumber" id="PhoneNumber" class="form-control">
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" name="address" class="form-control">
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group">
                            <label for="city">City:</label>
                            <input name="city" type="text" class="form-control">
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group">
                            <label for="state">State:</label>
                            <select name="state" class="form-control">
                                <option value="--">--</option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="DC">District Of Columbia</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group">
                            <label for="zipCode">ZipCode:</label>
                            <input type="number" name="zipCode" class="form-control">
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group">
                            <label for="birthDate">Birth Date:</label>
                            <input type="text" name="birthDate" class="form-control">
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group">
                            <label for="userName">UserName:</label>
                            <input type="text" name="userName" class="form-control">
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="text" name="password" class="form-control">
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group">
                            <label for="sex">Sex:</label>
                            <input type="text" name="sex" class="form-control">
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group">
                            <label for="relationship">Relationship:</label>
                            <input type="text" name="relationship" class="form-control">
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group">
                            <input type="submit" value="insert" name="action" class="btn btn-default">
                            <input type="submit" value="update" name="action" class="btn btn-default">
                            <input type="submit" value="search" name="action" class="btn btn-default">
                        </div>
                    </li>
                </ul>
            </form>
        </div>    
    </body>              
