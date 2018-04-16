<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>

    <link rel="stylesheet" href="google.css">
    <noscript>
        <meta http-equiv="refresh" content="0;url=no-js.php">
    </noscript>
</head>
<?php  $pages = 'contact'; include 'header.php'; ?>
    <div id="gc-wrapper">
        <div class="devsite-main-content clearfix">
            <section class="background-grey full-bleed-section">
                <div class="contact-form">
                    <form id="mktForm_1167" action="https://lp.google-mkto.com/index.php/leadCapture/save" method="post" name="form" enctype="application/x-www-form-urlencoded" ng-submit="contactForm.submit(form, $event)" novalidate="" class="ng-pristine ng-invalid ng-invalid-required ng-valid-email">
                        <h3 class="contact-info" id="contact-info">CONTACT INFO</h3>
                        <div class="contact-info-box">

                            <div class="field">
                                <input id="first-name" type="text" name="FirstName" ng-model="contactForm.user.firstName" required="" autofocus="" field-blur-validation="form.FirstName.validatable" placeholder="First Name*" class="ng-pristine ng-empty ng-invalid ng-invalid-required validatable ng-touched">
                                <div class="errors">
                                    <!-- ngIf: form.FirstName.validatable &&
                        form.FirstName.$error.required --><span class="error ng-scope" ng-if="form.FirstName.validatable &amp;&amp;
                        form.FirstName.$error.required">
                  This is required
                </span>
                                    <!-- end ngIf: form.FirstName.validatable &&
                        form.FirstName.$error.required -->
                                </div>
                            </div>
                            <div class="field">
                                <input id="last-name" type="text" name="LastName" ng-model="contactForm.user.lastName" placeholder="Last Name*" field-blur-validation="form.LastName.validatable" required="" class="ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required">
                                <div class="errors">
                                    <!-- ngIf: form.LastName.validatable &&
                    form.LastName.$error.required -->
                                </div>
                            </div>

                            <div class="field">
                                <input id="job-title" type="text" name="Title" ng-model="contactForm.user.Title" placeholder="Job Title*" field-blur-validation="form.Title.validatable" required="" class="ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required">
                                <div class="errors">
                                    <!-- ngIf: form.Title.validatable &&
                    form.Title.$error.required -->
                                </div>
                            </div>
                            <div class="field">
                                <input id="email" type="email" name="Email" ng-model="contactForm.user.email" placeholder="Business Email*" field-blur-validation="form.Email.validatable" email-validation="" required="" class="ng-pristine ng-untouched ng-empty ng-valid-email ng-invalid ng-invalid-required">
                                <!-- ngIf: form.Email.validatable -->
                            </div>

                            <div class="field">
                                <div class="phone-number-field" ng-class="{'phone-invalid': form.Phone.validatable,
                  'phone-valid': form.Phone.$valid}">
                                    <div class="devsite-table-wrapper">
                                        <table class="i18n_phone_number_input i18n_phone_number_input-empty">
                                            <tbody>
                                                <tr>
                                                    <td class="i18n_phone_number_input-input">
                                                        <input id="phone-number" type="tel" name="Phone" ng-model="contactForm.user.phoneNumber" phone-number-input="" phone-number-locale="en_ALL" user-country="CA" phone-number-country="contactForm.user.country" phone-number-state="contactForm.user.state" placeholder="Phone number*" required="" class="ng-pristine ng-untouched ng-isolate-scope i18n_phone_number_input-inner_input ng-empty ng-invalid ng-invalid-required">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- ngIf: form.Phone.validatable -->
                            </div>
                        </div>
                        <h3 class="company" id="company">COMPANY</h3>
                        <div class="company-box">
                            <div class="field">
                                <input id="company" type="text" name="Company" ng-model="contactForm.user.company" field-blur-validation="form.Company.validatable" required="" placeholder="Business Name*" class="ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required">
                                <div class="errors">
                                    <!-- ngIf: form.Company.validatable &&
                    form.Company.$error.required -->
                                </div>
                            </div>
                            <div class="field">
                                <div class="select-box" ng-class="{'invalid': form.Industry.validatable &amp;&amp;
                                         !form.Industry.$valid}">
                                    <div class="arrow"></div>
                                    <select id="industry" name="Industry" ng-model="contactForm.user.industry" field-blur-validation="form.Industry.validatable" required="" class="ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required">
                                        <option selected="" value="">Industry*</option>
                                        <option value="Business Services">Business Services</option>
                                        <option value="Education - school/university">Education - school/university</option>
                                        <option value="Education - other">Education - other</option>
                                        <option value="Energy, Chemicals &amp; Utilities">Energy, Chemicals &amp; Utilities</option>
                                        <option value="Farming, Forestry, Fishing">Farming, Forestry, Fishing</option>
                                        <option value="Financial Services">Financial Services</option>
                                        <option value="Government">Government</option>
                                        <option value="Health &amp; Social Care">Health &amp; Social Care</option>
                                        <option value="Holding Companies">Holding Companies</option>
                                        <option value="Manufacturing">Manufacturing</option>
                                        <option value="Media &amp; Entertainment">Media &amp; Entertainment</option>
                                        <option value="Mining &amp; Construction">Mining &amp; Construction</option>
                                        <option value="Non-profit">Non-profit</option>
                                        <option value="Retail &amp; Wholesale Trade">Retail &amp; Wholesale Trade</option>
                                        <option value="Technology">Technology</option>
                                        <option value="Travel &amp; Transport">Travel &amp; Transport</option>
                                    </select>
                                </div>
                                <div class="errors">
                                    <!-- ngIf: form.Industry.validatable &&
                                           form.Industry.$error.required -->
                                </div>
                            </div>
                            <div class="field">
                                <div class="select-box">
                                    <div class="arrow"></div>
                                    <select id="country" type="text" name="Country" ng-model="contactForm.user.country" class="ng-pristine ng-untouched ng-valid ng-not-empty">
                                        <option selected="" value="">Country*</option>
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
                                        <option value="AC">Ascension Island</option>
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
                                        <option value="BQ">Bonaire, Sint Eustatius, and Sab</option>
                                        <option value="BA">Bosnia and Herzegovina</option>
                                        <option value="BW">Botswana</option>
                                        <option value="BV">Bouvet Island</option>
                                        <option value="BR">Brazil</option>
                                        <option value="IO">British Indian Ocean Territory</option>
                                        <option value="VG">British Virgin Islands</option>
                                        <option value="BN">Brunei</option>
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
                                        <option value="CC">Cocos [Keeling] Islands</option>
                                        <option value="CO">Colombia</option>
                                        <option value="KM">Comoros</option>
                                        <option value="CD">Congo [DRC]</option>
                                        <option value="CG">Congo [Republic]</option>
                                        <option value="CK">Cook Islands</option>
                                        <option value="CR">Costa Rica</option>
                                        <option value="CI">Côte d’Ivoire</option>
                                        <option value="HR">Croatia</option>
                                        <option value="CU">Cuba</option>
                                        <option value="CW">Curaçao</option>
                                        <option value="CY">Cyprus</option>
                                        <option value="CZ">Czech Republic</option>
                                        <option value="DK">Denmark</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DM">Dominica</option>
                                        <option value="DO">Dominican Republic</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EG">Egypt</option>
                                        <option value="SV">El Salvador</option>
                                        <option value="GQ">Equatorial Guinea</option>
                                        <option value="ER">Eritrea</option>
                                        <option value="EE">Estonia</option>
                                        <option value="ET">Ethiopia</option>
                                        <option value="FK">Falkland Islands [Islas Malvinas]</option>
                                        <option value="FO">Faroe Islands</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="FI">Finland</option>
                                        <option value="FR">France</option>
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
                                        <option value="HM">Heard Island and McDonald Islands</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HK">Hong Kong</option>
                                        <option value="HU">Hungary</option>
                                        <option value="IS">Iceland</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IR">Iran</option>
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
                                        <option value="KW">Kuwait</option>
                                        <option value="KG">Kyrgyzstan</option>
                                        <option value="LA">Laos</option>
                                        <option value="LV">Latvia</option>
                                        <option value="LB">Lebanon</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LY">Libya</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="MO">Macau</option>
                                        <option value="MK">Macedonia [FYROM]</option>
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
                                        <option value="FM">Micronesia</option>
                                        <option value="MD">Moldova</option>
                                        <option value="MC">Monaco</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="ME">Montenegro</option>
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
                                        <option value="KP">North Korea</option>
                                        <option value="MP">Northern Mariana Islands</option>
                                        <option value="NO">Norway</option>
                                        <option value="OM">Oman</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PW">Palau</option>
                                        <option value="PS">Palestine</option>
                                        <option value="PA">Panama</option>
                                        <option value="PG">Papua New Guinea</option>
                                        <option value="PY">Paraguay</option>
                                        <option value="PE">Peru</option>
                                        <option value="PH">Philippines</option>
                                        <option value="PN">Pitcairn Islands</option>
                                        <option value="PL">Poland</option>
                                        <option value="PT">Portugal</option>
                                        <option value="PR">Puerto Rico</option>
                                        <option value="QA">Qatar</option>
                                        <option value="RE">Réunion</option>
                                        <option value="RO">Romania</option>
                                        <option value="RU">Russia</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="BL">Saint Barthélemy</option>
                                        <option value="SH">Saint Helena</option>
                                        <option value="KN">Saint Kitts and Nevis</option>
                                        <option value="LC">Saint Lucia</option>
                                        <option value="ML">Saint Martin</option>
                                        <option value="PM">Saint Pierre and Miquelon</option>
                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                        <option value="WS">Samoa</option>
                                        <option value="SM">San Marino</option>
                                        <option value="ST">São Tomé and Príncipe</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SN">Senegal</option>
                                        <option value="RS">Serbia</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SL">Sierra Leone</option>
                                        <option value="SG">Singapore</option>
                                        <option value="SX">Sint Maarten</option>
                                        <option value="SK">Slovakia</option>
                                        <option value="SI">Slovenia</option>
                                        <option value="SB">Solomon Islands</option>
                                        <option value="SO">Somalia</option>
                                        <option value="ZA">South Africa</option>
                                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                                        <option value="KR">South Korea</option>
                                        <option value="SS">South Sudan</option>
                                        <option value="ES">Spain</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="SD">Sudan</option>
                                        <option value="SR">Suriname</option>
                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                        <option value="SZ">Swaziland</option>
                                        <option value="SE">Sweden</option>
                                        <option value="CH">Switzerland</option>
                                        <option value="SY">Syria</option>
                                        <option value="TW">Taiwan</option>
                                        <option value="TJ">Tajikistan</option>
                                        <option value="TZ">Tanzania</option>
                                        <option value="TH">Thailand</option>
                                        <option value="TL">Timor-Leste</option>
                                        <option value="TG">Togo</option>
                                        <option value="TK">Tokelau</option>
                                        <option value="TO">Tonga</option>
                                        <option value="TT">Trinidad and Tobago</option>
                                        <option value="TN">Tunisia</option>
                                        <option value="TR">Turkey</option>
                                        <option value="TM">Turkmenistan</option>
                                        <option value="TC">Turks and Caicos Islands</option>
                                        <option value="TV">Tuvalu</option>
                                        <option value="UM">U.S. Outlying Islands</option>
                                        <option value="VI">U.S. Virgin Islands</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UA">Ukraine</option>
                                        <option value="AE">United Arab Emirates</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="US">United States</option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UZ">Uzbekistan</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="VA">Vatican City</option>
                                        <option value="VE">Venezuela</option>
                                        <option value="VN">Vietnam</option>
                                        <option value="WF">Wallis and Futuna</option>
                                        <option value="EH">Western Sahara</option>
                                        <option value="YE">Yemen</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>

                                    </select>
                                </div>
                                <div class="errors">
                                    <!-- ngIf: form.Country.$valid !== true -->
                                </div>
                            </div>
                            <!-- ngIf: contactForm.user.country == 'CA' -->
                        </div>

                        <h3 class="inquiry" id="inquiry">INQUIRY</h3>
                        <div class="inquiry-box">
                            <div class="field full">
                                <textarea id="additional-info" name="Additional_Information__c" class="optional ng-pristine ng-untouched ng-valid ng-empty" ng-model="contactForm.user.additionalInfo" placeholder="How can we help you?"> </textarea>
                            </div>
                            <div class="field full opt-in-news">
                                <!-- ngIf: contactForm.user.country != 'US' && contactForm.user.country !='IN' -->
                            </div>
                        </div>
                        <div class="bottom submit">
                            <button class="button" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </section>
            <?php include 'footer.php' ?>
        </div>
    </div>