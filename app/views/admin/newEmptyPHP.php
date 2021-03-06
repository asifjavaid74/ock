<?php
  <div class="info_white1 border_bottom">
                <div class="container">
                    <div class="row-fluid">
                        <div class="span12">
                             <h5>Position Applied: Business Development Executive</h5>
                             @if (Session::has('eror_message'))
                             <div class="alert alert-error">
                               {{ Session::get('eror_message') }} 
                            </div>
                             @endif
                              @if (Session::has('message'))
                            <div class="alert alert-success">
                                {{ Session::get('message') }}
                            </div>
                               @endif
                              {{ Form::open(array('url' => 'Add_Application',"method" => "post","class"=>"form-horizontal")) }}
                             <form id="form" action="#">
                                <div class="span6">
                                    <h6>Name <span class="red-title">*</span></h6>
                                     {{ Form::text('Name', Input::old('Name'), array('class' => 'input-xxlarge','placeholder' => 'Your Name'))}}
                                 
                                    <h6>Date of Birth <span class="red-title">*</span></h6>
                                    {{ Form::text('DOB', Input::old('DOB'), array('class' => 'input-xxlarge','placeholder' => 'DD/MM/YYYY'))}}
                                    
                                    <h6>E-mail Address <span class="red-title">*</span></h6>
                                     {{ Form::text('Email', Input::old('Email'), array('class' => 'input-xxlarge','placeholder' => 'E-mail Address'))}}
                                        <h6>Contact Number <span class="red-title">*</span></h6>
                                         {{ Form::text('Phone', Input::old('Phone'), array('class' => 'input-xxlarge','placeholder' => 'Contact Number'))}}
                                  
                                    <h6>Mobile Number <span class="red-title">*</span></h6>
                                    {{ Form::text('MPhone', Input::old('MPhone'), array('class' => 'input-xxlarge','placeholder' => 'Mobile Number'))}}
                                  
                                  
                                  <div class="clearfix"></div>
                                  
                                    <h6>Education Level <span class="red-title">*</span></h6>
                                    {{Form::select("Education_Level", $education_data,array('id'=>'subject') )}}
                                   
                                    
                                    <h6 class="margin_top_10px">Attach Your CV <span class="red-title">*</span></h6>
                                    {{ Form::file('CV_docs',array('class' => 'button btn-small'));}}
                                    (PDF, RTF, MS Word or JPEG file). Max file size: 2MB
                                    
                                    <p class="margin_top_10px">Please enter the text you see in the below box:<br/>
                                    <img src="{{ URL::asset('assets/img/img_reCAPTCHA.png')}}" alt="recaptcha"></p>
                                    
                                     <div class="clearfix"></div>
                                     <div class="margin_top_10px">{{ Form::submit('Submit Your Application', array('class' => 'button')) }}</div>
                                     
                                    <div id="result"></div>  
                                </div>
        
                                <div class="span6">
                                
                                    <h6>Address <span class="red-title">*</span></h6>
                                    {{ Form::text('Address', Input::old('Address'), array('class' => 'input-xxlarge','placeholder' => 'Address'))}}
                                    
                                    <h6>City <span class="red-title">*</span></h6>
                                    {{ Form::text('City', Input::old('City'), array('class' => 'input-xxlarge','placeholder' => 'City'))}}
                                    
                                    <h6>State <span class="red-title">*</span></h6>
                                     {{ Form::text('State', Input::old('State'), array('class' => 'input-xxlarge','placeholder' => 'State'))}}
                                    
                                    <h6>Postal Code <span class="red-title">*</span></h6>
                                     {{ Form::text('Postal_Code', Input::old('Postal_Code'), array('class' => 'input-xxlarge','placeholder' => 'Postal Code'))}}
                                    
                                    <h6>Country <span class="red-title">*</span></h6>
                                     {{Form::select("Country", $country_data,array('id'=>'DDLCountry') )}}
                                    <select name="DDLCountry" id="DDLCountry" class="input-xlarge">
                                              <option value="Afghanistan">Afghanistan</option>
                                              <option value="Albania">Albania</option>
                                              <option value="Algeria">Algeria</option>
                                              <option value="American Samoa">American Samoa</option>
                                              <option value="Andorra">Andorra</option>
                                              <option value="Angola">Angola</option>
                                              <option value="Anguilla">Anguilla</option>
                                              <option value="Antarctica">Antarctica</option>
                                              <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                              <option value="Argentina">Argentina</option>
                                              <option value="Armenia">Armenia</option>
                                              <option value="Aruba">Aruba</option>
                                              <option value="Australia">Australia</option>
                                              <option value="Austria">Austria</option>
                                              <option value="Azerbaijan">Azerbaijan</option>
                                              <option value="Bahamas">Bahamas</option>
                                              <option value="Bahrain">Bahrain</option>
                                              <option value="Bangladesh">Bangladesh</option>
                                              <option value="Barbados">Barbados</option>
                                              <option value="Belarus">Belarus</option>
                                              <option value="Belgium">Belgium</option>
                                              <option value="Belize">Belize</option>
                                              <option value="Benin">Benin</option>
                                              <option value="Bermuda">Bermuda</option>
                                              <option value="Bhutan">Bhutan</option>
                                              <option value="Bolivia">Bolivia</option>
                                              <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                              <option value="Botswana">Botswana</option>
                                              <option value="Bouvet Island">Bouvet Island</option>
                                              <option value="Brazil">Brazil</option>
                                              <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                              <option value="Brunei">Brunei</option>
                                              <option value="Bulgaria">Bulgaria</option>
                                              <option value="Burkina Faso">Burkina Faso</option>
                                              <option value="Burundi">Burundi</option>
                                              <option value="Cambodia">Cambodia</option>
                                              <option value="Cameroon">Cameroon</option>
                                              <option value="Canada">Canada</option>
                                              <option value="Cape Verde">Cape Verde</option>
                                              <option value="Cayman Islands">Cayman Islands</option>
                                              <option value="Central African Republic">Central African Republic</option>
                                              <option value="Chad">Chad</option>
                                              <option value="Chile">Chile</option>
                                              <option value="China">China</option>
                                              <option value="Christmas Island">Christmas Island</option>
                                              <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                              <option value="Colombia">Colombia</option>
                                              <option value="Comoros">Comoros</option>
                                              <option value="Congo">Congo</option>
                                              <option value="Congo (DRC)">Congo (DRC)</option>
                                              <option value="Cook Islands">Cook Islands</option>
                                              <option value="Costa Rica">Costa Rica</option>
                                              <option value="C&Atilde;&acute;te d`Ivoire">C&#244;te d`Ivoire</option>
                                              <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                              <option value="Cuba">Cuba</option>
                                              <option value="Cyprus">Cyprus</option>
                                              <option value="Czech Republic">Czech Republic</option>
                                              <option value="Denmark">Denmark</option>
                                              <option value="Djibouti">Djibouti</option>
                                              <option value="Dominica">Dominica</option>
                                              <option value="Dominican Republic">Dominican Republic</option>
                                              <option value="East Timor">East Timor</option>
                                              <option value="Ecuador">Ecuador</option>
                                              <option value="Egypt">Egypt</option>
                                              <option value="El Salvador">El Salvador</option>
                                              <option value="Equatorial Guinea">Equatorial Guinea</option>
                                              <option value="Eritrea">Eritrea</option>
                                              <option value="Estonia">Estonia</option>
                                              <option value="Ethiopia">Ethiopia</option>
                                              <option value="Falkland Islands (Islas Malvinas)">Falkland Islands (Islas Malvinas)</option>
                                              <option value="Faroe Islands">Faroe Islands</option>
                                              <option value="Fiji Islands">Fiji Islands</option>
                                              <option value="Finland">Finland</option>
                                              <option value="France">France</option>
                                              <option value="French Guiana">French Guiana</option>
                                              <option value="French Polynesia">French Polynesia</option>
                                              <option value="French Southern and Antarctic Lands">French Southern and Antarctic Lands</option>
                                              <option value="Gabon">Gabon</option>
                                              <option value="Gambia">Gambia</option>
                                              <option value="Georgia">Georgia</option>
                                              <option value="Germany">Germany</option>
                                              <option value="Ghana">Ghana</option>
                                              <option value="Gibraltar">Gibraltar</option>
                                              <option value="Greece">Greece</option>
                                              <option value="Greenland">Greenland</option>
                                              <option value="Grenada">Grenada</option>
                                              <option value="Guadeloupe">Guadeloupe</option>
                                              <option value="Guam">Guam</option>
                                              <option value="Guatemala">Guatemala</option>
                                              <option value="Guinea">Guinea</option>
                                              <option value="GuineaBissau">GuineaBissau</option>
                                              <option value="Guyana">Guyana</option>
                                              <option value="Haiti">Haiti</option>
                                              <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                                              <option value="Honduras">Honduras</option>
                                              <option value="Hong Kong SAR">Hong Kong SAR</option>
                                              <option value="Hungary">Hungary</option>
                                              <option value="Iceland">Iceland</option>
                                              <option value="India">India</option>
                                              <option value="Indonesia">Indonesia</option>
                                              <option value="Iran">Iran</option>
                                              <option value="Iraq">Iraq</option>
                                              <option value="Ireland">Ireland</option>
                                              <option value="Israel">Israel</option>
                                              <option value="Italy">Italy</option>
                                              <option value="Ivory Coast">Ivory Coast</option>
                                              <option value="Jamaica">Jamaica</option>
                                              <option value="Japan">Japan</option>
                                              <option value="Jordan">Jordan</option>
                                              <option value="Kazakhstan">Kazakhstan</option>
                                              <option value="Kenya">Kenya</option>
                                              <option value="Kiribati">Kiribati</option>
                                              <option value="Korea">Korea</option>
                                              <option value="Kuwait">Kuwait</option>
                                              <option value="Kyrgyzstan">Kyrgyzstan</option>
                                              <option value="Laos">Laos</option>
                                              <option value="Latvia">Latvia</option>
                                              <option value="Lebanon">Lebanon</option>
                                              <option value="Lesotho">Lesotho</option>
                                              <option value="Liberia">Liberia</option>
                                              <option value="Libya">Libya</option>
                                              <option value="Liechtenstein">Liechtenstein</option>
                                              <option value="Lithuania">Lithuania</option>
                                              <option value="Luxembourg">Luxembourg</option>
                                              <option value="Macau SAR">Macau SAR</option>
                                              <option value="Macedonia Former Yugoslav Republic of">Macedonia Former Yugoslav Republic of</option>
                                              <option value="Madagascar">Madagascar</option>
                                              <option value="Malawi">Malawi</option>
                                              <option selected="selected" value="Malaysia">Malaysia</option>
                                              <option value="Maldives">Maldives</option>
                                              <option value="Mali">Mali</option>
                                              <option value="Malta">Malta</option>
                                              <option value="Marshall Islands">Marshall Islands</option>
                                              <option value="Martinique">Martinique</option>
                                              <option value="Mauritania">Mauritania</option>
                                              <option value="Mauritius">Mauritius</option>
                                              <option value="Mayotte">Mayotte</option>
                                              <option value="Mexico">Mexico</option>
                                              <option value="Micronesia">Micronesia</option>
                                              <option value="Moldova">Moldova</option>
                                              <option value="Monaco">Monaco</option>
                                              <option value="Mongolia">Mongolia</option>
                                              <option value="Montserrat">Montserrat</option>
                                              <option value="Morocco">Morocco</option>
                                              <option value="Mozambique">Mozambique</option>
                                              <option value="Myanmar">Myanmar</option>
                                              <option value="Namibia">Namibia</option>
                                              <option value="Nauru">Nauru</option>
                                              <option value="Nepal">Nepal</option>
                                              <option value="Netherlands">Netherlands</option>
                                              <option value="Netherlands Antilles">Netherlands Antilles</option>
                                              <option value="New Caledonia">New Caledonia</option>
                                              <option value="New Zealand">New Zealand</option>
                                              <option value="Nicaragua">Nicaragua</option>
                                              <option value="Niger">Niger</option>
                                              <option value="Nigeria">Nigeria</option>
                                              <option value="Niue">Niue</option>
                                              <option value="Norfolk Island">Norfolk Island</option>
                                              <option value="North Korea">North Korea</option>
                                              <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                              <option value="Norway">Norway</option>
                                              <option value="Oman">Oman</option>
                                              <option value="Pakistan">Pakistan</option>
                                              <option value="Palau">Palau</option>
                                              <option value="Palestine">Palestine</option>
                                              <option value="Panama">Panama</option>
                                              <option value="Papua New Guinea">Papua New Guinea</option>
                                              <option value="Paraguay">Paraguay</option>
                                              <option value="Peru">Peru</option>
                                              <option value="Philippines">Philippines</option>
                                              <option value="Pitcairn Islands">Pitcairn Islands</option>
                                              <option value="Poland">Poland</option>
                                              <option value="Portugal">Portugal</option>
                                              <option value="Puerto Rico">Puerto Rico</option>
                                              <option value="Qatar">Qatar</option>
                                              <option value="Reunion">Reunion</option>
                                              <option value="Romania">Romania</option>
                                              <option value="Russia">Russia</option>
                                              <option value="Rwanda">Rwanda</option>
                                              <option value="Saipan">Saipan</option>
                                              <option value="Samoa">Samoa</option>
                                              <option value="San Marino">San Marino</option>
                                              <option value="S&Atilde;&pound;o Tom&Atilde;&copy; and Pr&Atilde;&shy;ncipe">S&#227;o Tom&#233; and Pr&#237;ncipe</option>
                                              <option value="Saudi Arabia">Saudi Arabia</option>
                                              <option value="Senegal">Senegal</option>
                                              <option value="Serbia &amp; Montenegro">Serbia &amp; Montenegro</option>
                                              <option value="Seychelles">Seychelles</option>
                                              <option value="Sierra Leone">Sierra Leone</option>
                                              <option value="Singapore">Singapore</option>
                                              <option value="Slovakia">Slovakia</option>
                                              <option value="Slovenia">Slovenia</option>
                                              <option value="Solomon Islands">Solomon Islands</option>
                                              <option value="Somalia">Somalia</option>
                                              <option value="South Africa">South Africa</option>
                                              <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                              <option value="Spain">Spain</option>
                                              <option value="Sri Lanka">Sri Lanka</option>
                                              <option value="St. Helena">St. Helena</option>
                                              <option value="St. Kitts and Nevis">St. Kitts and Nevis</option>
                                              <option value="St. Lucia">St. Lucia</option>
                                              <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                              <option value="St. Vincent and the Grenadines">St. Vincent and the Grenadines</option>
                                              <option value="Sudan">Sudan</option>
                                              <option value="Suriname">Suriname</option>
                                              <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                              <option value="Swaziland">Swaziland</option>
                                              <option value="Sweden">Sweden</option>
                                              <option value="Switzerland">Switzerland</option>
                                              <option value="Syria">Syria</option>
                                              <option value="Taiwan">Taiwan</option>
                                              <option value="Tajikistan">Tajikistan</option>
                                              <option value="Tanzania">Tanzania</option>
                                              <option value="Thailand">Thailand</option>
                                              <option value="Togo">Togo</option>
                                              <option value="Tokelau">Tokelau</option>
                                              <option value="Tonga">Tonga</option>
                                              <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                              <option value="Tunisia">Tunisia</option>
                                              <option value="Turkey">Turkey</option>
                                              <option value="Turkmenistan">Turkmenistan</option>
                                              <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                              <option value="Tuvalu">Tuvalu</option>
                                              <option value="Uganda">Uganda</option>
                                              <option value="Ukraine">Ukraine</option>
                                              <option value="United Arab Emirates">United Arab Emirates</option>
                                              <option value="United Kingdom">United Kingdom</option>
                                              <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                              <option value="United States of America">United States of America</option>
                                              <option value="Uruguay">Uruguay</option>
                                              <option value="Uzbekistan">Uzbekistan</option>
                                              <option value="Vanuatu">Vanuatu</option>
                                              <option value="Vatican City">Vatican City</option>
                                              <option value="Venezuela">Venezuela</option>
                                              <option value="Vietnam">Vietnam</option>
                                              <option value="Virgin Islands">Virgin Islands</option>
                                              <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                              <option value="Wallis and Futuna">Wallis and Futuna</option>
                                              <option value="Yemen">Yemen</option>
                                              <option value="Yugoslavia">Yugoslavia</option>
                                              <option value="Zaire">Zaire</option>
                                              <option value="Zambia">Zambia</option>
                                              <option value="Zimbabwe">Zimbabwe</option>
                                  </select>
                                  
                                  
                                  
                                    
                                   
                                </div>
                      {{ Form::close() }}
                        </div>

                    </div>
                </div>
                <i class="icon-briefcase right"></i>
            </div> 




{{ Form::open(array('url' => 'businesses_create',"method" => "post","class"=>"form-horizontal")) }}
                              <div id="modal-edit-core-business-{{$Busi->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                <div class="modal-dialog modal-wide-width">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                      <h4 id="modal-login-label2" class="modal-title">Edit Core Business</h4>
                                    </div>
                                    <div class="modal-body">
                                      <div class="form">
                                       
                                          
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Icon <span class='require'>*</span></label>
                                            <div class="col-md-6">
                                                {{ Form::text('job_title', $Busi->icon, array('placeholder' => 'Icon','class'=>'form-control')) }}
                                                 {{ Form::text('icon', Input::old('icon'), array('class' => 'form-control','placeholder' => 'Icon')) }}
                                              
                                              <div class="help-block">Please refer here for more <a href="icons.html" target="_blank">icon options.</a></div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Title <span class='require'>*</span></label>
                                            <div class="col-md-6">
                                                {{ Form::text('title', Input::old('title'), array('class' => 'form-control','placeholder' => 'Trading of Telco <br/>&amp; IT Products')) }}
                                              
                                            </div>
                                          </div>
                                          
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Website URL </label>
                                            <div class="col-md-6">
                                              <div class="input-icon"><i class="fa fa-link"></i>
                                                  {{ Form::text('url', Input::old('url'), array('class' => 'form-control','placeholder' => 'http:'))}}
                                                 
                                              </div>
                                            </div>
                                            
                                          </div>
                                          
                                          <div class="form-actions">
                                              
                                            <div class="col-md-offset-5 col-md-8">{{ Form::submit('Save &nbsp;', array('class' => 'btn btn-red')) }} <i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                          </div>
                                       
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                             {{ Form::close() }}




@extends('layouts.admin')
@section('content')

<!--BEGIN PAGE WRAPPER-->
<div id="page-wrapper"><!--BEGIN PAGE HEADER & BREADCRUMB-->
       
        <div class="page-header-breadcrumb">
          <div class="page-heading hidden-xs">
            <h1 class="page-title">Index</h1>
          </div>
          <ol class="breadcrumb page-breadcrumb">
            <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
            <li class="active">Index - Edit</li>
          </ol>
        </div>
          
        <!--END PAGE HEADER & BREADCRUMB-->
        <!--BEGIN CONTENT-->
        {{ Form::open(array('url' => 'adminsavepage')) }}
        <div class="page-content">
          <div class="row">
            <div class="col-lg-12">
              <h2>Index <i class="fa fa-angle-right"></i> Edit</h2>
              <div class="clearfix"></div>
              <div class="alert alert-success alert-dismissable">
                <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>The information has been saved/updated successfully.</p>
              </div>
              <div class="alert alert-danger alert-dismissable">
                <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                <i class="fa fa-times-circle"></i> <strong>Error!</strong>
                <p>The information has not been saved/updated. Please correct the errors.</p>
              </div>
              
              <div class="pull-left"> Last updated: <span class="text-blue">15 Sept, 2014 @ 12.00PM</span> </div>
              <div class="clearfix"></div>
              <p></p>
              
              
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Page Content</div>
                  <br/>
                  <span class="text-blue text-12px">You can edit the content by clicking the text section below.</span>
                  <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                </div>
                <div class="portlet-body"> note to programmer: the below inline editor, please follow 100% css style in front end, inlcuding text, bullet style, icon style, text color, label style, and page layout etc...
                  
                <!-- Info title-->
                <div class="row-fluid info_title">
                    <div class="vertical_line">
                        <div class="circle_top"></div>
                    </div>
                  <div class="info_vertical">  
                    <div class="col-lg-6">
                        <div class="row-fluid">
                          <div contenteditable="true">
                          	<h2 class="red-title"><span>Driving Network Solution</span></h2>
                          </div>
                          <div contenteditable="true">
                          	<p>Established in 2000, OCK Group is principally involved in the provision of telecommunications network services. We are able to provide full turnkey services in that respect.</p> 
                          </div>
                        </div>
                    </div>
                    </div>
                    <div style="clear:both"></div>
                    <div class="vertical_line"></div>
    
                    <i class="icon-cogs right"></i>
                </div>
                <!-- End Info title-->
                  
                  
                <div class="clearfix"></div>
                <!-- Info Resalt-->
                <div class="info_resalt border_top">

                        <div class="row text-center service-process">
                            <div class="info_vertical">
                                <div contenteditable="true">
                                	<h2 class="red-title"><span>Core Business</span></h2>
                                </div>
                                <div contenteditable="true">
                                	<p>Network planning, design and optimization, network deployment, network operations and maintenance, energy management, infrastructure management, and other professional services.</p>
                                </div>
                            </div>
                            <br/>
                            <!-- Step 1 --> 
                            @foreach ($businesses_create as $Busi)
        <div id="modal-edit-core-business-2" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                <div class="modal-dialog modal-wide-width">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                      <h4 id="modal-login-label2" class="modal-title">Edit Core Business</h4>
                                    </div>
                                    <div class="modal-body">
                                      <div class="form">
                                       
                                          {{ Form::open(array('url' => 'businesses_create',"method" => "post","class"=>"form-horizontal")) }}
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Icon <span class='require'>*</span></label>
                                            <div class="col-md-6">
                                                 {{ Form::text('icon', Input::old('icon'), array('class' => 'form-control','placeholder' => 'Icon')) }}
                                              
                                              <div class="help-block">Please refer here for more <a href="icons.html" target="_blank">icon options.</a></div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Title <span class='require'>*</span></label>
                                            <div class="col-md-6">
                                                {{ Form::text('title', Input::old('title'), array('class' => 'form-control','placeholder' => 'Trading of Telco <br/>&amp; IT Products')) }}
                                              
                                            </div>
                                          </div>
                                          
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Website URL </label>
                                            <div class="col-md-6">
                                              <div class="input-icon"><i class="fa fa-link"></i>
                                                  {{ Form::text('url', Input::old('url'), array('class' => 'form-control','placeholder' => 'http:'))}}
                                                 
                                              </div>
                                            </div>
                                            
                                          </div>
                                          
                                          <div class="form-actions">
                                              
                                            <div class="col-md-offset-5 col-md-8">{{ Form::submit('Save &nbsp;', array('class' => 'btn btn-red')) }} <i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                          </div>
                                        {{ Form::close() }}
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                             <div class="col-lg-3">
                                           <div class="thumbnail">
                                             <div class="caption-head">

                                                   <a href="#" data-placement="top" data-target="#modal-edit-core-business-1" data-toggle="modal" title="Edit">
                                                       <em class="caption-icon icon-sitemap icon-big"></em>                            
                                                       <h4 class="caption-title">{{$Busi->title}}</h4>
                                                   </a>
                                             </div>
                                           </div>
                                       </div>     
                            @endforeach 
                                                 
    
                            <!-- Step 2 -->                        
                              <div class="col-lg-3">
                                  <div class="thumbnail">
                                    <div class="caption-head">
                                       <a href="#" data-placement="top" data-target="#modal-edit-core-business-2" data-toggle="modal" title="Edit">
                                        <em class="caption-icon icon-laptop icon-big"></em>
                                        <h4 class="caption-title">Trading of Telco <br/>&amp; IT Products</h4>
                                       </a>
                                    </div>
                                  </div>
                              </div>                        
    
                            <!-- Step 3 -->
                            <div class="col-lg-3">
                                <div class="thumbnail">
                                  <div class="caption-head">
                                     <a href="#" data-placement="top" data-target="#modal-edit-core-business-3" data-toggle="modal" title="Edit"> 
                                      <em class="caption-icon icon-leaf icon-big"></em>
                                      <h4 class="caption-title">Green Technology <br/>&amp; Solar</h4>
                                     </a>
                                  </div>
                                </div>
                            </div>
    
                            <!-- Step 4 -->
                            <div class="col-lg-3">
                                <div class="thumbnail">
                                  <div class="caption-head">
                                     <a href="#" data-placement="top" data-target="#modal-edit-core-business-4" data-toggle="modal" title="Edit"> 
                                      <em class="caption-icon icon-wrench icon-big"></em>
                                      <h4 class="caption-title">M&amp;E Engineering Works</h4>
                                     </a>
                                  </div>                           
                                </div>
                            </div>                    
                        </div>
                        
                        
                        <!--Modal edit core business 1 start-->
                              <div id="modal-edit-core-business-1" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                <div class="modal-dialog modal-wide-width">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                      <h4 id="modal-login-label2" class="modal-title">Edit Core Business</h4>
                                    </div>
                                    <div class="modal-body">
                                      <div class="form">
                                        <form class="form-horizontal">
                                          
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Icon <span class='require'>*</span></label>
                                            <div class="col-md-6">
                                              <input type="text" class="form-control" id="inputContent" value="icon-sitemap">
                                              <div class="help-block">Please refer here for more <a href="icons.html" target="_blank">icon options.</a></div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Title <span class='require'>*</span></label>
                                            <div class="col-md-6">
                                              <textarea name="inputContent" rows="2" class="form-control" id="inputContent">Telco Network Services</textarea>
                                            </div>
                                          </div>
                                          
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Website URL </label>
                                            <div class="col-md-6">
                                              <div class="input-icon"><i class="fa fa-link"></i>
                                                  <input type="text" placeholder="http://" class="form-control" value="http://www.ock.com.my/services_telecommunications_network.html"/>
                                              </div>
                                            </div>
                                            
                                          </div>

                                          <div class="form-actions">
                                            <div class="col-md-offset-5 col-md-8"> <a href="#" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--END MODAL edit core business 1-->
                              
                              <!--Modal edit core business 2 start-->
                              <div id="modal-edit-core-business-2" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                <div class="modal-dialog modal-wide-width">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                      <h4 id="modal-login-label2" class="modal-title">Edit Core Business</h4>
                                    </div>
                                    <div class="modal-body">
                                      <div class="form">
                                       
                                          {{ Form::open(array('url' => 'businesses_create',"method" => "post","class"=>"form-horizontal")) }}
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Icon <span class='require'>*</span></label>
                                            <div class="col-md-6">
                                                 {{ Form::text('icon', Input::old('icon'), array('class' => 'form-control','placeholder' => 'Icon')) }}
                                              
                                              <div class="help-block">Please refer here for more <a href="icons.html" target="_blank">icon options.</a></div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Title <span class='require'>*</span></label>
                                            <div class="col-md-6">
                                                {{ Form::text('title', Input::old('title'), array('class' => 'form-control','placeholder' => 'Trading of Telco <br/>&amp; IT Products')) }}
                                              
                                            </div>
                                          </div>
                                          
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Website URL </label>
                                            <div class="col-md-6">
                                              <div class="input-icon"><i class="fa fa-link"></i>
                                                  {{ Form::text('url', Input::old('url'), array('class' => 'form-control','placeholder' => 'http:'))}}
                                                 
                                              </div>
                                            </div>
                                            
                                          </div>
                                          
                                          <div class="form-actions">
                                              
                                            <div class="col-md-offset-5 col-md-8">{{ Form::submit('Save &nbsp;', array('class' => 'btn btn-red')) }} <i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                          </div>
                                        {{ Form::close() }}
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--END MODAL edit core business 2-->
                              
                              <!--Modal edit core business 3 start-->
                              <div id="modal-edit-core-business-3" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                <div class="modal-dialog modal-wide-width">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                      <h4 id="modal-login-label2" class="modal-title">Edit Core Business</h4>
                                    </div>
                                    <div class="modal-body">
                                      <div class="form">
                                        <form class="form-horizontal">
                                          
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Icon <span class='require'>*</span></label>
                                            <div class="col-md-6">
                                              <input type="text" class="form-control" id="inputContent" value="icon-leaf">
                                              <div class="help-block">Please refer here for more <a href="icons.html" target="_blank">icon options.</a></div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Title <span class='require'>*</span></label>
                                            <div class="col-md-6">
                                              <textarea name="inputContent" rows="2" class="form-control" id="inputContent">Green Technology <br/>&amp; Solar</textarea>
                                            </div>
                                          </div>
                                          
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Website URL </label>
                                            <div class="col-md-6">
                                              <div class="input-icon"><i class="fa fa-link"></i>
                                                  <input type="text" placeholder="http://" class="form-control" value="http://www.ock.com.my/services_green_technology_solar.html"/>
                                              </div>
                                            </div>
                                            
                                          </div>

                                          <div class="form-actions">
                                            <div class="col-md-offset-5 col-md-8"> <a href="#" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--END MODAL edit core business 3-->
                              
                              <!--Modal edit core business 4 start-->
                              <div id="modal-edit-core-business-4" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                <div class="modal-dialog modal-wide-width">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                      <h4 id="modal-login-label2" class="modal-title">Edit Core Business</h4>
                                    </div>
                                    <div class="modal-body">
                                      <div class="form">
                                        <form class="form-horizontal">
                                          
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Icon <span class='require'>*</span></label>
                                            <div class="col-md-6">
                                              <input type="text" class="form-control" id="inputContent" value="icon-wrench">
                                              <div class="help-block">Please refer here for more <a href="icons.html" target="_blank">icon options.</a></div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Title <span class='require'>*</span></label>
                                            <div class="col-md-6">
                                              <textarea name="inputContent" rows="2" class="form-control" id="inputContent">M&amp;E Engineering Works</textarea>
                                            </div>
                                          </div>
                                          
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Website URL </label>
                                            <div class="col-md-6">
                                              <div class="input-icon"><i class="fa fa-link"></i>
                                                  <input type="text" placeholder="http://" class="form-control" value="http://www.ock.com.my/services_me_engineering_works.html"/>
                                              </div>
                                            </div>
                                            
                                          </div>

                                          <div class="form-actions">
                                            <div class="col-md-offset-5 col-md-8"> <a href="#" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--END MODAL edit core business 4-->
                              <div class="clearfix"></div>
  
                </div>
                <!-- End Info Resalt-->
                
                
                
                </div>
                <!-- end portlet body-->
              </div>
              <!-- End portlet-->
              
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Montage Listing</div>
                  <br/>
                  <p class="margin-top-10px"></p>
                  <a href="#" data-target="#modal-add-montage" data-toggle="modal" class="btn btn-success">Add New Montage &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary">Delete</button>
                    <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                    <ul role="menu" class="dropdown-menu">
                      <li><a href="#" data-target="#modal-delete-selected" data-toggle="modal">Delete selected item(s)</a></li>
                      <li class="divider"></li>
                      <li><a href="#" data-target="#modal-delete-all" data-toggle="modal">Delete all</a></li>
                    </ul>
                  </div>
                   
				  <div class="tools"> 
                  	<i class="fa fa-chevron-up"></i> 
                  </div>
                  <!--Modal Add New Montage start-->
                  <div id="modal-add-montage" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog modal-wide-width">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label2" class="modal-title">Add New Montage</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form">
                            <form class="form-horizontal">
                              <div class="form-group">
                                <label class="col-md-3 control-label">Status</label>
                                <div class="col-md-6">
                                  <div data-on="success" data-off="primary" class="make-switch">
                                    <input type="checkbox" checked="checked"/>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group has-error">
                                <label class="col-md-3 control-label">Title </label>
                                <div class="col-md-6">
                                  <input id="text" type="text" class="form-control" placeholder="Banner 1">
                                </div>
                                <div class="col-md-3">
                                      <div class="popover popover-validator right">
                                        <div class="arrow"></div>
                                        <div class="popover-content">
                                          <p class="mbn">Title is empty!</p>
                                        </div>
                                      </div>
                                    </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Banner Text </label>
                                <div class="col-md-9">
                                	<div class="text-blue border-bottom">You can edit the content by clicking the text section below.</div>
                                  <div contenteditable="true">
                                  	 <div class="camera_caption fadeFromLeft">

                                        <div class="row-fluid">                                
                                                <h1 class="animated fadeInDown">Full Turnkey Solutions <br>for <span>Telecom Client</span>.</h1>
                                                <p class="animated fadeInUp">Network planning, design &amp; optimization, network deployment, network operations &amp; maintenance</p>
                                        </div>  
                                    </div>                                                                                         

                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Upload Banner <span class='require'>*</span></label>
                                <div class="col-md-9">
                                  <div class="text-15px margin-top-10px">
                                    <input id="exampleInputFile1" type="file"/>
                                    <br/>
                                    <span class="help-block">(Image dimension: min. 1700 x 1000 pixels, JPEG/GIF/PNG only, Max. 1MB) </span> </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Enable Explore More Button</label>
                                <div class="col-md-6">
                                  <div data-on="success" data-off="primary" class="make-switch">
                                    <input type="checkbox" />
                                  </div>
                                  <div class="clearfix"></div>
								  note to programmer: the below URL link box is only appeared  when the above enable explore more button is on.
                                  <div class="input-icon margin-top-10px"><i class="fa fa-link"></i>
                                     <input type="text" placeholder="http://" class="form-control"/>
                                  </div>
                                </div>
                                
                                
                              </div>
                              
                              <div class="form-actions">
                                <div class="col-md-offset-5 col-md-8"> <a href="#" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--END MODAL Add New Montage-->
                  <!--Modal delete selected items start-->
                  <div id="modal-delete-selected" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
                        </div>
                        <div class="modal-body">
                          <p><strong>#1:</strong> Banner 1</p>
                          <div class="form-actions">
                            <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- modal delete selected items end -->
                  <!--Modal delete all items start-->
                  <div id="modal-delete-all" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete all items? </h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-actions">
                            <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- modal delete all items end -->
                </div>
                <div class="portlet-body">
                  <div class="form-inline pull-left">
                    <div class="form-group">
                      <select name="select" class="form-control">
                        <option>10</option>
                        <option>20</option>
                        <option selected="selected">30</option>
                        <option>50</option>
                        <option>100</option>
                      </select>
                      &nbsp;
                      <label class="control-label">Records per page</label>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <br/>
                  <br/>
                  <table class="table table-hover table-striped">
                    <thead>
                      <tr>
                        <th width="1%"><input type="checkbox"/></th>
                        <th>#</th>
                        <th>Status</th>
                        <th>Title</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="checkbox"/></td>
                        <td>1</td>
                        <td><span class="label label-sm label-success">Active</span></td>
                        <td>Banner 1</td>
                        <td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-montage" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-1" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                          <!--Modal Edit Montage start-->
                          <div id="modal-edit-montage" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                            <div class="modal-dialog modal-wide-width">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                  <h4 id="modal-login-label2" class="modal-title">Edit Montage</h4>
                                </div>
                                <div class="modal-body">
                                  <div class="form">
                                    <form class="form-horizontal">
                                      <div class="form-group">
                                        <label class="col-md-3 control-label">Status</label>
                                        <div class="col-md-6">
                                          <div data-on="success" data-off="primary" class="make-switch">
                                            <input type="checkbox" checked="checked"/>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-md-3 control-label">Title </label>
                                        <div class="col-md-6">
                                          <input id="text" type="text" class="form-control" placeholder="Banner 1" value="Banner 1">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-md-3 control-label">Banner Text </label>
                                        <div class="col-md-9">
                                            <div class="text-blue border-bottom">You can edit the content by clicking the text section below.</div>
                                          <div contenteditable="true">
                                             <div class="camera_caption fadeFromLeft">
        
                                                <div class="row-fluid">                                
                                                        <h1 class="animated fadeInDown">Full Turnkey Solutions <br>for <span>Telecom Client</span>.</h1>
                                                        <p class="animated fadeInUp">Network planning, design &amp; optimization, network deployment, network operations &amp; maintenance</p>
                                                </div>  
                                            </div>                                                                                         
        
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-md-3 control-label">Upload Banner <span class='require'>*</span></label>
                                        <div class="col-md-9">
                                          <div class="text-15px margin-top-10px">
                                          	<img src="../img/slide/slides/img1.jpg" alt="Banner" class="img-responsive"><br/>
                                            <input id="exampleInputFile1" type="file"/>
                                            <br/>
                                            <span class="help-block">(Image dimension: min. 1700 x 1000 pixels, JPEG/GIF/PNG only, Max. 1MB) </span> </div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-md-3 control-label">Enable Explore More Button</label>
                                        <div class="col-md-6">
                                          <div data-on="success" data-off="primary" class="make-switch">
                                            <input type="checkbox" />
                                          </div>
                                          note to programmer: the below URL link box is only appeared  when the above enable explore more button is on.
                                          <div class="input-icon margin-top-10px"><i class="fa fa-link"></i>
                                             <input type="text" placeholder="http://" class="form-control" value="http://www.ock.com.my/services_telecommunications_network.html"/>
                                          </div>
                                          
                                        </div>
                                      </div>
                                      
                                      <div class="form-actions">
                                        <div class="col-md-offset-5 col-md-8"> <a href="#" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--END MODAL Edit Montage-->
                            <!--Modal delete start-->
                            <div id="modal-delete-1" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                    <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this banner? </h4>
                                  </div>
                                  <div class="modal-body">
                                    <p><strong>#1:</strong> Banner 1</p>
                                    <div class="form-actions">
                                      <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <!-- modal delete end -->
                           
                        </td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan="5"></td>
                      </tr>
                    </tfoot>
                  </table>
                  <div class="tool-footer text-right">
                    <p class="pull-left">Showing 1 to 10 of 57 entries</p>
                    <ul class="pagination pagination mtm mbm">
                      <li class="disabled"><a href="#">&laquo;</a></li>
                      <li class="active"><a href="#">1</a></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">4</a></li>
<li><a href="#">5</a></li>
<li><a href="#">&raquo;</a></li>
</ul>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <!-- End porlet -->
              
              <div class="form-actions none-bg"> 
                  {{ Form::submit('Save &amp; Preview', array('class' => 'btn btn-red')) }}&nbsp; {{ Form::submit('Save &amp; Publish', array('class' => 'btn btn-blue')) }}&nbsp; <a href="#" class="btn btn-green">Cancel &nbsp;</a> </div>
            </div>
          </div>
        </div>
        {{ Form::close() }}
        <!--END CONTENT-->
            
            <!--BEGIN FOOTER-->
            <div class="page-footer">
                <div class="copyright"><span class="text-15px">2014 © <a href="http://www.webqom.com" target="_blank">Webqom Technologies Sdn Bhd.</a> Any queries, please contact <a href="mailto:support@webqom.com">Webqom Support</a>.</span>
                	<div class="pull-right"><img src="images/logo_webqom.png" alt="Webqom Technologies"></div>
                </div>
            </div>
    <!--END FOOTER--></div>

@stop
?>
