<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Add Bootstrap CSS CDN link here -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Create an Account</title>
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- Custom Styles here -->
  <style>
    body {
      height: 100vh;
      margin: 0;
    }

    .form-container {
      max-width: 400px;
      border-radius: 15px;
    }

    /* Form Border */
    .form-control {
      width: 94%;
      padding: 0px;
      border: none;
      margin-left: 3%;
      border-radius: 0px;
      border-bottom: solid #a0a0a0 2px;
    }

    .form-control:focus {
      box-shadow: none;
      border-bottom: solid #0f71f0 2px;
    }

    .form-check-input:focus {
      box-shadow: none !important;
    }

    /* Question Mark Hoverchanges */
    .demo:hover {
      color: #ffcc00;
    }

    /*Submit Button  */
    .submit:hover {
      background-color: #fff488 !important;
    }

    .form-floating>.form-control {
      padding: 0;
    }

    /* Form Label Color Changes */
    .form-floating .form-control:focus+.form-label-clicked,
    .form-floating .form-control:not(:placeholder-shown)+.form-label-clicked {
      color: #0f71f0;
    }

    /* Form Circle Section */
    .form-check-section {
      border-radius: 5px;
      transition: border-color 0.3s;
      border: 2px solid transparent;
    }

    .form-check-section.active {
      border-radius: 5px;
      border-color: black;
    }

    .form-check-input:checked {
      background-color: #242e39;
    }

    @media screen and (max-width: 450px) {
      body {
        padding: 0px 30px;
      }
    }
    .error {
    color: #bb0000;
    font-size: 14px;
    margin-left: 10px;
    padding: 3px;
     }
     </style>
</head>

<body class="d-flex align-items-center" style="background-color:#f4f1ed;">
  <div class="container shadow-lg p-3 mb-5 bg-white form-container">
    <form id="forms">
      <h2 style="text-align:center; font-size:28px; line-height:40px; font-weight:800; font-family:inter; ">Create
        an Account</h2>
          <div class="form-floating mb-1" id="formContainer1">
               <input type="email" class="form-control email" id="email" placeholder="Confirm email address *" name="email">
               <label class="form-label-clicked" for="exampleInputConfirmEmail1">Email address *</label>
               <div class="tooltip-container"
                    style="position: absolute; top: 50%; right: 10px; cursor: pointer; transform: translateY(-50%);">
                    <i class="fa fa-question-circle demo" data-bs-toggle="tooltip" data-bs-placement="right"
                    title="Enter your email address"></i>
               </div>
          </div>
          <div class="error" id="erroremail"></div>
          <div class="form-floating mb-1" id="formContainer2">
               <input type="email" class="form-control reemail" id="confirm"  placeholder="Confirm email address *" name="confirmemail">
               <label class="form-label-clicked" for="exampleInputConfirmEmail1">Confirm email address *</label>
          </div>
          <div class="error" id="errorconfirm"></div>

          <div class="form-floating mb-1" id="formContainer3" style="position:relative;">
               <input type="password" class="form-control password" id="password" placeholder="Password" name="password">
               <label for="floatingPassword" class="form-label-clicked" for="exampleInputConfirmEmail1">Create a secure
               password</label>
               <i class="fa fa-eye toggle-password" style="position:absolute; top:50%; right: 10px; cursor: pointer; transform: translateY(-50%);"></i>
          </div>
          <div class="error" id="errorpassword"></div>
          
          <label class="form-label ms-2">Region</label>
          <select class="form-control" data-target=".selBox" role="listbox" aria-labelledby="lbl_country" id="country" name="country">
               <option value="United States" role="option">United States</option>
               <option value="Afghanistan" role="option">Afghanistan</option>
               <option value="Åland Islands" role="option">Åland Islands</option>
               <option value="Albania" role="option">Albania</option>
               <option value="Algeria" role="option">Algeria</option>
               <option value="American Samoa" role="option">American Samoa</option>
               <option value="Andorra" role="option">Andorra</option>
               <option value="Angola" role="option">Angola</option>
               <option value="Anguilla" role="option">Anguilla</option>
               <option value="Antarctica" role="option">Antarctica</option>
               <option value="Antigua And Barbuda" role="option">Antigua And Barbuda</option>
               <option value="Argentina" role="option">Argentina</option>
               <option value="Armenia" role="option">Armenia</option>
               <option value="Aruba" role="option">Aruba</option>
               <option value="Australia" role="option">Australia</option>
               <option value="Austria" role="option">Austria</option>
               <option value="Azerbaijan" role="option">Azerbaijan</option>
               <option value="Bahamas" role="option">Bahamas</option>
               <option value="Bahrain" role="option">Bahrain</option>
               <option value="Bangladesh" role="option">Bangladesh</option>
               <option value="Barbados" role="option">Barbados</option>
               <option value="Belarus" role="option">Belarus</option>
               <option value="Belgium" role="option">Belgium</option>
               <option value="Belize" role="option">Belize</option>
               <option value="Benin" role="option">Benin</option>
               <option value="Bermuda" role="option">Bermuda</option>
               <option value="Bhutan" role="option">Bhutan</option>
               <option value="Bolivia" role="option">Bolivia</option>
               <option value="Bonaire, Sint Eustatius and Saba" role="option">Bonaire, Sint Eustatius and Saba</option>
               <option value="Bosnia And Herzegovina" role="option">Bosnia And Herzegovina</option>
               <option value="Botswana" role="option">Botswana</option>
               <option value="Bouvet Island" role="option">Bouvet Island</option>
               <option value="Brazil" role="option">Brazil</option>
               <option value="British Indian Ocean Territory" role="option">British Indian Ocean Territory</option>
               <option value="Brunei Darussalam" role="option">Brunei Darussalam</option>
               <option value="Bulgaria" role="option">Bulgaria</option>
               <option value="Burkina Faso" role="option">Burkina Faso</option>
               <option value="Burundi" role="option">Burundi</option>
               <option value="KHCambodia" role="option">Cambodia</option>
               <option value="Cameroon" role="option">Cameroon</option>
               <option value="Canada" role="option">Canada</option>
               <option value="Cape Verde" role="option">Cape Verde</option>
               <option value="Cayman Islands" role="option">Cayman Islands</option>
               <option value="Central African Republic" role="option">Central African Republic</option>
               <option value="Chad" role="option">Chad</option>
               <option value="Chile" role="option">Chile</option>
               <option value="China Mainland" role="option">China Mainland</option>
               <option value="Christmas Island" role="option">Christmas Island</option>
               <option value="Cocos (Keeling) Islands" role="option">Cocos (Keeling) Islands</option>
               <option value="Colombia" role="option">Colombia</option>
               <option value="Comoros" role="option">Comoros</option>
               <option value="Congo" role="option">Congo</option>
               <option value="Congo, The Democratic Republic Of The" role="option">Congo, The Democratic Republic Of The</option>
               <option value="Cook Islands" role="option">Cook Islands</option>
               <option value="Costa Rica" role="option">Costa Rica</option>
               <option value="Cote D'ivoire" role="option">Cote D'ivoire</option>
               <option value="Croatia" role="option">Croatia</option>
               <option value="Curacao" role="option">Curacao</option>
               <option value="Cyprus" role="option">Cyprus</option>
               <option value="Czech Republic" role="option">Czech Republic</option>
               <option value="Denmark" role="option">Denmark</option>
               <option value="Djibouti" role="option">Djibouti</option>
               <option value="Dominica" role="option">Dominica</option>
               <option value="Dominican Republic" role="option">Dominican Republic</option>
               <option value="Ecuador" role="option">Ecuador</option>
               <option value="Egypt" role="option">Egypt</option>
               <option value="El Salvador" role="option">El Salvador</option>
               <option value="Equatorial Guinea" role="option">Equatorial Guinea</option>
               <option value="Eritrea" role="option">Eritrea</option>
               <option value="Estonia" role="option">Estonia</option>
               <option value="Ethiopia" role="option">Ethiopia</option>
               <option value="Falkland Islands (Malvinas)" role="option">Falkland Islands (Malvinas)</option>
               <option value="Faroe Islands" role="option">Faroe Islands</option>
               <option value="Fiji" role="option">Fiji</option>
               <option value="Finland" role="option">Finland</option>
               <option value="France" role="option">France</option>
               <option value="French Guiana" role="option">French Guiana</option>
               <option value="French Polynesia" role="option">French Polynesia</option>
               <option value="French Southern Territories" role="option">French Southern Territories</option>
               <option value="Gabon" role="option">Gabon</option>
               <option value="Gambia" role="option">Gambia</option>
               <option value="Georgia" role="option">Georgia</option>
               <option value="Germany" role="option">Germany</option>
               <option value="Ghana" role="option">Ghana</option>
               <option value="Gibraltar" role="option">Gibraltar</option>
               <option value="Greece" role="option">Greece</option>
               <option value="Greenland" role="option">Greenland</option>
               <option value="Grenada" role="option">Grenada</option>
               <option value="Guadeloupe" role="option">Guadeloupe</option>
               <option value="Guam" role="option">Guam</option>
               <option value="Guatemala" role="option">Guatemala</option>
               <option value="Guernsey" role="option">Guernsey</option>
               <option value="Guinea" role="option">Guinea</option>
               <option value="Guinea-Bissau" role="option">Guinea-Bissau</option>
               <option value="Guyana" role="option">Guyana</option>
               <option value="Haiti" role="option">Haiti</option>
               <option value="Heard Island And Mcdonald Islands" role="option">Heard Island And Mcdonald Islands</option>
               <option value="Holy See (Vatican City State)" role="option">Holy See (Vatican City State)</option>
               <option value="Honduras" role="option">Honduras</option>
               <option value="Hong Kong" role="option">Hong Kong</option>
               <option value="Hungary" role="option">Hungary</option>
               <option value="Iceland" role="option">Iceland</option>
               <option value="India" role="option">India</option>
               <option value="Indonesia" role="option">Indonesia</option>
               <option value="Iraq" role="option">Iraq</option>
               <option value="Ireland" role="option">Ireland</option>
               <option value="Isle of Man" role="option">Isle of Man</option>
               <option value="Israel" role="option">Israel</option>
               <option value="Italy" role="option">Italy</option>
               <option value="Jamaica" role="option">Jamaica</option>
               <option value="Japan" role="option">Japan</option>
               <option value="Jersey" role="option">Jersey</option>
               <option value="Jordan" role="option">Jordan</option>
               <option value="Kazakhstan" role="option">Kazakhstan</option>
               <option value="Kenya" role="option">Kenya</option>
               <option value="Kiribati" role="option">Kiribati</option>
               <option value="Korea, Republic Of" role="option">Korea, Republic Of</option>
               <option value="Kuwait" role="option">Kuwait</option>
               <option value="Kyrgyzstan" role="option">Kyrgyzstan</option>
               <option value="Lao People's Democratic Republic" role="option">Lao People's Democratic Republic</option>
               <option value="Latvia" role="option">Latvia</option>
               <option value="Lebanon" role="option">Lebanon</option>
               <option value="Lesotho" role="option">Lesotho</option>
               <option value="Liberia" role="option">Liberia</option>
               <option value="Libya" role="option">Libya</option>
               <option value="Liechtenstein" role="option">Liechtenstein</option>
               <option value="Lithuania" role="option">Lithuania</option>
               <option value="Luxembourg" role="option">Luxembourg</option>
               <option value="Macao" role="option">Macao</option>
               <option value="Macedonia, The Former Yugoslav Republic" role="option">Macedonia, The Former Yugoslav Republic</option>
               <option value="Madagascar" role="option">Madagascar</option>
               <option value="Malawi" role="option">Malawi</option>
               <option value="Malaysia" role="option">Malaysia</option>
               <option value="Maldives" role="option">Maldives</option>
               <option value="Mali" role="option">Mali</option>
               <option value="Malta" role="option">Malta</option>
               <option value="Marshall Islands" role="option">Marshall Islands</option>
               <option value="Martinique" role="option">Martinique</option>
               <option value="Mauritania" role="option">Mauritania</option>
               <option value="Mauritius" role="option">Mauritius</option>
               <option value="Mayotte" role="option">Mayotte</option>
               <option value="Mexico" role="option">Mexico</option>
               <option value="Micronesia, Federated States Of" role="option">Micronesia, Federated States Of</option>
               <option value="Moldova, Republic Of<" role="option">Moldova, Republic Of</option>
               <option value="Monaco" role="option">Monaco</option>
               <option value="Mongolia" role="option">Mongolia</option>
               <option value="Montenegro" role="option">Montenegro</option>
               <option value="Montserrat" role="option">Montserrat</option>
               <option value="Morocco" role="option">Morocco</option>
               <option value="Mozambique" role="option">Mozambique</option>
               <option value="Myanmar" role="option">Myanmar</option>
               <option value="Namibia" role="option">Namibia</option>
               <option value="Nauru" role="option">Nauru</option>
               <option value="Nepal" role="option">Nepal</option>
               <option value="Netherlands" role="option">Netherlands</option>
               <option value="New Caledonia" role="option">New Caledonia</option>
               <option value="New Zealand" role="option">New Zealand</option>
               <option value="Nicaragua" role="option">Nicaragua</option>
               <option value="Niger" role="option">Niger</option>
               <option value="Nigeria" role="option">Nigeria</option>
               <option value="Niue" role="option">Niue</option>
               <option value="Norfolk Island" role="option">Norfolk Island</option>
               <option value="Northern Mariana Islands" role="option">Northern Mariana Islands</option>
               <option value="Norway" role="option">Norway</option>
               <option value="Oman" role="option">Oman</option>
               <option value="Pakistan" role="option">Pakistan</option>
               <option value="Palau" role="option">Palau</option>
               <option value="Palestinian Territory" role="option">Palestinian Territory</option>
               <option value="Panama" role="option">Panama</option>
               <option value="Papua New Guinea" role="option">Papua New Guinea</option>
               <option value="Paraguay" role="option">Paraguay</option>
               <option value="Peru" role="option">Peru</option>
               <option value="Philippines" role="option">Philippines</option>
               <option value="Pitcairn" role="option">Pitcairn</option>
               <option value="Poland" role="option">Poland</option>
               <option value="Portugal" role="option">Portugal</option>
               <option value="Puerto Rico" role="option">Puerto Rico</option>
               <option value="Qatar" role="option">Qatar</option>
               <option value="Reunion" role="option">Reunion</option>
               <option value="Romania" role="option">Romania</option>
               <option value="Russian Federation" role="option">Russian Federation</option>
               <option value="Rwanda" role="option">Rwanda</option>
               <option value="Saint Barthelemy" role="option">Saint Barthelemy</option>
               <option value="Saint Helena" role="option">Saint Helena</option>
               <option value="Saint Kitts And Nevis" role="option">Saint Kitts And Nevis</option>
               <option value="Saint Lucia" role="option">Saint Lucia</option>
               <option value="Saint Martin" role="option">Saint Martin</option>
               <option value="Saint Pierre And Miquelon" role="option">Saint Pierre And Miquelon</option>
               <option value="Saint Vincent And The Grenadines" role="option">Saint Vincent And The Grenadines</option>
               <option value="Samoa" role="option">Samoa</option>
               <option value="San Marino" role="option">San Marino</option>
               <option value="Sao Tome And Principe" role="option">Sao Tome And Principe</option>
               <option value="Saudi Arabia" role="option">Saudi Arabia</option>
               <option value="Senegal" role="option">Senegal</option>
               <option value="Serbia" role="option">Serbia</option>
               <option value="Seychelles" role="option">Seychelles</option>
               <option value="Sierra Leone" role="option">Sierra Leone</option>
               <option value="Singapore" role="option">Singapore</option>
               <option value="Sint Maarten (Dutch part)" role="option">Sint Maarten (Dutch part)</option>
               <option value="Slovakia" role="option">Slovakia</option>
               <option value="Slovenia" role="option">Slovenia</option>
               <option value="Solomon Islands" role="option">Solomon Islands</option>
               <option value="Somalia" role="option">Somalia</option>
               <option value="South Africa" role="option">South Africa</option>
               <option value="South Georgia/SGSSI" role="option">South Georgia/SGSSI</option>
               <option value="Spain" role="option">Spain</option>
               <option value="Sri Lanka" role="option">Sri Lanka</option>
               <option value="Sudan" role="option">Sudan</option>
               <option value="Suriname" role="option">Suriname</option>
               <option value="Svalbard And Jan Mayen" role="option">Svalbard And Jan Mayen</option>
               <option value="Swaziland" role="option">Swaziland</option>
               <option value="Sweden" role="option">Sweden</option>
               <option value="Switzerland" role="option">Switzerland</option>
               <option value="Taiwan" role="option">Taiwan</option>
               <option value="Tajikistan" role="option">Tajikistan</option>
               <option value="Tanzania, United Republic Of" role="option">Tanzania, United Republic Of</option>
               <option value="Thailand" role="option">Thailand</option>
               <option value="Timor-Leste" role="option">Timor-Leste</option>
               <option value="Togo" role="option">Togo</option>
               <option value="Tokelau" role="option">Tokelau</option>
               <option value="Tonga" role="option">Tonga</option>
               <option value="Trinidad And Tobago" role="option">Trinidad And Tobago</option>
               <option value="Tunisia" role="option">Tunisia</option>
               <option value="Türkiye" role="option">Türkiye</option>
               <option value="Turkmenistan" role="option">Turkmenistan</option>
               <option value="Turks And Caicos Islands" role="option">Turks And Caicos Islands</option>
               <option value="Tuvalu" role="option">Tuvalu</option>
               <option value="Uganda" role="option">Uganda</option>
               <option value="Ukraine" role="option">Ukraine</option>
               <option value="United Arab Emirates" role="option">United Arab Emirates</option>
               <option value="United Kingdom" role="option">United Kingdom</option>
               <option value="United States Minor Outlying Islands" role="option">United States Minor Outlying Islands</option>
               <option value="Uruguay" role="option">Uruguay</option>
               <option value="Uzbekistan" role="option">Uzbekistan</option>
               <option value="Vanuatu" role="option">Vanuatu</option>
               <option value="Venezuela" role="option">Venezuela</option>
               <option value="Vietnam" role="option">Vietnam</option>
               <option value="Virgin Islands, British" role="option">Virgin Islands, British</option>
               <option value="Virgin Islands, U.S." role="option">Virgin Islands, U.S.</option>
               <option value="Wallis And Futuna" role="option">Wallis And Futuna</option>
               <option value="Western Sahara" role="option">Western Sahara</option>
               <option value="Yemen" role="option">Yemen</option>
               <option value="Zambia" role="option">Zambia</option>
               <option value="Zimbabwe" role="option">Zimbabwe</option>
          </select>

          <div class="form-check mb-2 mr-sm-2 mt-4 form-check-section">
               <input class="form-check-input rounded-circle" type="checkbox" id="check" style="margin-top: 15px;">
               <label class="form-check-label" for="inlineFormCheck"> Email me product updates, offers, and security newsletters
               </label>
          </div>
          <div class="error" id="errorcheck"></div>
          
      <button type="button" class="btn mt-3 submit btn-block button" style="border-radius:50px; border:solid 2px black; background-color: #feeb29; width: 100%; font-weight:800; font-size: 16px" onclick="handleSubmit()" id="submitButton">Create Account</button>

        <div id="result"></div>
    </form>
  </div>

  <!-- Password Eye Icon Show -->
  <script>
    function togglePassword() {
      var passwordInput = document.getElementById('floatingPassword');
      var icon = document.querySelector('.toggle-password');
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
      } else {
        passwordInput.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
      }
    }
  </script>


  <script>

    function emailValidate(email, emailErr) {
          var emailRegex = /^[a-zA-Z0-9]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
          if (email.value !== "" && emailRegex.test(email.value)) {
               emailErr.innerHTML = "";
               email.style.borderColor = "#ccc";
               emailflag = true;
          } else {
               email.style.borderColor = "#d9534f";
               emailErr.innerHTML = "*Please Enter your correct Email";
               email.placeholder = '*Please Enter your correct Email';
               emailflag = false;
          }
     }

     function emailConfirmValidate(email, confirm, emailErr) {
          var emailRegex = /^[a-zA-Z0-9]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
          if (email.value === confirm.value) {
               emailErr.innerHTML = "";
               email.style.borderColor = "#ccc";
               confirmflag = true;
          } else {
               email.style.borderColor = "#d9534f";
               emailErr.innerHTML = "*Email or Confirm email not matched";
               confirmflag = false;
          }
     }

     function requiredValidate(course, errorcourse) {
          if (course.value !== "") {
               errorcourse.innerHTML = "";
               errorcourse.style.borderColor = "#ccc";
               passwordflag = true;
          } else {
               errorcourse.style.borderColor = "#d9534f";
               errorcourse.innerHTML = "*Please Enter Your Password";
               passwordflag = false;
          }
     }

     function checkValidate(check, errorcheck){
      if(check.checked==true){
          console.log(1)
          errorcheck.innerHTML = "";
          checkflag = true;
      } else {
          console.log(0)
          errorcheck.innerHTML = "*Please Checked Security Check";
          checkflag = false;
      }
   }

    function handleSubmit() {
     const email = document.querySelector("#email");
     const confirm = document.querySelector("#confirm");
     const password = document.querySelector("#password");
     const region = document.querySelector("#region");
     const check = document.querySelector("#check");
     const forms = document.querySelector("#forms");
     const submitButton = document.querySelector("#submitButton");

     const erroremail = document.querySelector("#erroremail");
     const errorconfirm = document.querySelector("#errorconfirm");
     const errorpassword = document.querySelector("#errorpassword");
     const errorregion = document.querySelector("#errorregion");
     const errorcheck = document.querySelector("#errorcheck");

     emailValidate(email, erroremail);
     emailValidate(confirm, errorconfirm);
     if(emailflag){
          emailConfirmValidate(email, confirm, errorconfirm)
     }
     requiredValidate(password, errorpassword);
     checkValidate(check, errorcheck);
     if(emailflag && confirmflag && passwordflag  && checkflag){
          submitButton.disabled = true;
         submitButton.innerHTML = '<span>Please wait...</span>';
         const formData = $('form').serialize();
         console.log(formData)
          $.ajax({
            type: "POST",
            url: "process.php",
            data: formData,
            success: function(response) {
                // Display response in the result div
                $("#result").css({
                    'padding': '10px',
                    'border': '1px solid #ccc',
                    'margin-top': '10px',
                    'background-color': 'rgb(190 255 141)'
                });
                $("#result").html(response);
                
                forms.reset();
                submitButton.disabled = false;
            submitButton.innerHTML = '<span> Create Account </span>';
            },
            error: function(error) {
                console.log("Error:", error);
                submitButton.disabled = false;
            submitButton.innerHTML = '<span> Create Account </span>';
            }
        });
     } else {
          console.log("false");
     }
}
 </script>



  <!-- Bootstrap Link JS CDN -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>