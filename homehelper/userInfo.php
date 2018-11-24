<!DOCTYPE html>
<!--
Author: Code Apes.
-->
<html>
<head>
	<title>Account Information</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link type="text/css" rel="stylesheet" href="styles/styles.css">
	<link type="text/css" rel="stylesheet" href="styles/account.css">
	<script>
	function EditPhone(){
		var content = document.getElementById("phone").innerHTML;
		document.getElementById("phoneEdit").innerHTML=
		'<div class="button btn btn-small" onclick="RevertPhone()">Confirm</div>';
		document.getElementById("phone").innerHTML=
		'<input type="text" id="phoneInput" minlength="8" maxlength="16" placeholder="Your contact number.." onkeydown="if(event.keyCode==13){RevertPhone()}" onchange="RevertPhone()">';
		document.getElementById("phoneInput").value=content;
	}
	function RevertPhone(){
		document.getElementById("phoneEdit").innerHTML= 
		'<div class="button btn btn-small" onclick="EditUname()">Edit</div>';
		document.getElementById("phone").innerHTML = document.getElementById("phoneInput").value;
		// And send it to database, or else throw error;
	}
	
	function EditEmail(){
		var content = document.getElementById("email").innerHTML;
		document.getElementById("emailEdit").innerHTML=
		'<div class="button btn btn-small" onclick="RevertEmail()">Confirm</div>';
		document.getElementById("email").innerHTML=
		'<input type="text" id="emailInput" placeholder="Your email address.." onkeydown="if(event.keyCode==13){RevertEmail()}" onchange="RevertEmail()">';
		document.getElementById("emailInput").value=content;
	}
	function RevertEmail(){
		document.getElementById("emailEdit").innerHTML= 
		'<div class="button btn btn-small" onclick="EditEmail()">Edit</div>';
		document.getElementById("email").innerHTML = document.getElementById("emailInput").value;
		// And send it to database, or else throw error;
	}
	
	function EditGender(){
		document.getElementById("genderEdit").innerHTML=
		'<div class="button btn btn-small" onclick="RevertGender()">Confirm</div>'
		document.getElementById("gender").innerHTML = 
		'<select id="genderInput">'
		+ '<option value="Male">Male</option>'
		+ '<option value="Female">Female</option>'
		+ '<option value="Other">Other</option>'
		+ '</select>';
	}
	function RevertGender(){
		document.getElementById("genderEdit").innerHTML= 
		'<div class="button btn btn-small" onclick="EditGender()">Edit</div>';
		document.getElementById("gender").innerHTML = document.getElementById("genderInput").value;
		// And send it to database, or else throw error;
	}
	
	function EditAge(){
		document.getElementById("ageEdit").innerHTML=
		'<div class="button btn btn-small" onclick="RevertAge()">Confirm</div>'
		document.getElementById("age").innerHTML = 
		'<select id="ageInput">'
		 + '<option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option><option value="60">60</option><option value="61">61</option><option value="62">62</option><option value="63">63</option><option value="64">64</option><option value="65">65</option><option value="66">66</option><option value="67">67</option><option value="68">68</option><option value="69">69</option><option value="70">70</option><option value="71">71</option><option value="72">72</option><option value="73">73</option><option value="74">74</option><option value="75">75</option><option value="76">76</option><option value="77">77</option><option value="78">78</option><option value="79">79</option><option value="80">80</option><option value="81">81</option><option value="82">82</option><option value="83">83</option><option value="84">84</option><option value="85">85</option><option value="86">86</option><option value="87">87</option><option value="88">88</option><option value="89">89</option><option value="90">90</option><option value="91">91</option><option value="92">92</option><option value="93">93</option><option value="94">94</option><option value="95">95</option><option value="96">96</option><option value="97">97</option><option value="98">98</option><option value="99">99</option><option value="100">100</option>'
		 + '</select>';	
	}
	function RevertAge(){
		document.getElementById("ageEdit").innerHTML= 
		'<div class="button btn btn-small" onclick="EditAge()">Edit</div>';
		document.getElementById("age").innerHTML = document.getElementById("ageInput").value;
		// And send it to database, or else throw error;
	}
	
	function EditCountry(){
		document.getElementById("countryEdit").innerHTML=
		'<div class="button btn btn-small" onclick="RevertCountry()">Confirm</div>'
		document.getElementById("country").innerHTML = 
		'<select id="countryInput">'
						+ '<option value="">Country...</option>'
						+ '<option value="Afganistan">Afghanistan</option>'
						+ '<option value="Albania">Albania</option>'
						+ '<option value="Algeria">Algeria</option>'
						+ '<option value="American Samoa">American Samoa</option>'
						+ '<option value="Andorra">Andorra</option>'
						+ '<option value="Angola">Angola</option>'
						+ '<option value="Anguilla">Anguilla</option>'
						+ '<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>'
						+ '<option value="Argentina">Argentina</option>'
						+ '<option value="Armenia">Armenia</option>'
						+ '<option value="Aruba">Aruba</option>'
						+ '<option value="Australia">Australia</option>'
						+ '<option value="Austria">Austria</option>'
						+ '<option value="Azerbaijan">Azerbaijan</option>'
						+ '<option value="Bahamas">Bahamas</option>'
						+ '<option value="Bahrain">Bahrain</option>'
						+ '<option value="Bangladesh">Bangladesh</option>'
						+ '<option value="Barbados">Barbados</option>'
						+ '<option value="Belarus">Belarus</option>'
						+ '<option value="Belgium">Belgium</option>'
						+ '<option value="Belize">Belize</option>'
						+ '<option value="Benin">Benin</option>'
						+ '<option value="Bermuda">Bermuda</option>'
						+ '<option value="Bhutan">Bhutan</option>'
						+ '<option value="Bolivia">Bolivia</option>'
						+ '<option value="Bonaire">Bonaire</option>'
						+ '<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>'
						+ '<option value="Botswana">Botswana</option>'
						+ '<option value="Brazil">Brazil</option>'
						+ '<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>'
						+ '<option value="Brunei">Brunei</option>'
						+ '<option value="Bulgaria">Bulgaria</option>'
						+ '<option value="Burkina Faso">Burkina Faso</option>'
						+ '<option value="Burundi">Burundi</option>'
						+ '<option value="Cambodia">Cambodia</option>'
						+ '<option value="Cameroon">Cameroon</option>'
						+ '<option value="Canada">Canada</option>'
						+ '<option value="Canary Islands">Canary Islands</option>'
						+ '<option value="Cape Verde">Cape Verde</option>'
						+ '<option value="Cayman Islands">Cayman Islands</option>'
						+ '<option value="Central African Republic">Central African Republic</option>'
						+ '<option value="Chad">Chad</option>'
						+ '<option value="Channel Islands">Channel Islands</option>'
						+ '<option value="Chile">Chile</option>'
						+ '<option value="China">China</option>'
						+ '<option value="Christmas Island">Christmas Island</option>'
						+ '<option value="Cocos Island">Cocos Island</option>'
						+ '<option value="Colombia">Colombia</option>'
						+ '<option value="Comoros">Comoros</option>'
						+ '<option value="Congo">Congo</option>'
						+ '<option value="Cook Islands">Cook Islands</option>'
						+ '<option value="Costa Rica">Costa Rica</option>'
						+ '<option value="Cote DIvoire">Cote D Ivoire</option>'
						+ '<option value="Croatia">Croatia</option>'
						+ '<option value="Cuba">Cuba</option>'
						+ '<option value="Curaco">Curacao</option>'
						+ '<option value="Cyprus">Cyprus</option>'
						+ '<option value="Czech Republic">Czech Republic</option>'
						+ '<option value="Denmark">Denmark</option>'
						+ '<option value="Djibouti">Djibouti</option>'
						+ '<option value="Dominica">Dominica</option>'
						+ '<option value="Dominican Republic">Dominican Republic</option>'
						+ '<option value="East Timor">East Timor</option>'
						+ '<option value="Ecuador">Ecuador</option>'
						+ '<option value="Egypt">Egypt</option>'
						+ '<option value="El Salvador">El Salvador</option>'
						+ '<option value="Equatorial Guinea">Equatorial Guinea</option>'
						+ '<option value="Eritrea">Eritrea</option>'
						+ '<option value="Estonia">Estonia</option>'
						+ '<option value="Ethiopia">Ethiopia</option>'
						+ '<option value="Falkland Islands">Falkland Islands</option>'
						+ '<option value="Faroe Islands">Faroe Islands</option>'
						+ '<option value="Fiji">Fiji</option>'
						+ '<option value="Finland">Finland</option>'
						+ '<option value="France">France</option>'
						+ '<option value="French Guiana">French Guiana</option>'
						+ '<option value="French Polynesia">French Polynesia</option>'
						+ '<option value="French Southern Ter">French Southern Ter</option>'
						+ '<option value="Gabon">Gabon</option>'
						+ '<option value="Gambia">Gambia</option>'
						+ '<option value="Georgia">Georgia</option>'
						+ '<option value="Germany">Germany</option>'
						+ '<option value="Ghana">Ghana</option>'
						+ '<option value="Gibraltar">Gibraltar</option>'
						+ '<option value="Great Britain">Great Britain</option>'
						+ '<option value="Greece">Greece</option>'
						+ '<option value="Greenland">Greenland</option>'
						+ '<option value="Grenada">Grenada</option>'
						+ '<option value="Guadeloupe">Guadeloupe</option>'
						+ '<option value="Guam">Guam</option>'
						+ '<option value="Guatemala">Guatemala</option>'
						+ '<option value="Guinea">Guinea</option>'
						+ '<option value="Guyana">Guyana</option>'
						+ '<option value="Haiti">Haiti</option>'
						+ '<option value="Hawaii">Hawaii</option>'
						+ '<option value="Honduras">Honduras</option>'
						+ '<option value="Hong Kong">Hong Kong</option>'
						+ '<option value="Hungary">Hungary</option>'
						+ '<option value="Iceland">Iceland</option>'
						+ '<option value="India">India</option>'
						+ '<option value="Indonesia">Indonesia</option>'
						+ '<option value="Iran">Iran</option>'
						+ '<option value="Iraq">Iraq</option>'
						+ '<option value="Ireland">Ireland</option>'
						+ '<option value="Isle of Man">Isle of Man</option>'
						+ '<option value="Israel">Israel</option>'
						+ '<option value="Italy">Italy</option>'
						+ '<option value="Jamaica">Jamaica</option>'
						+ '<option value="Japan">Japan</option>'
						+ '<option value="Jordan">Jordan</option>'
						+ '<option value="Kazakhstan">Kazakhstan</option>'
						+ '<option value="Kenya">Kenya</option>'
						+ '<option value="Kiribati">Kiribati</option>'
						+ '<option value="Korea North">Korea North</option>'
						+ '<option value="Korea Sout">Korea South</option>'
						+ '<option value="Kuwait">Kuwait</option>'
						+ '<option value="Kyrgyzstan">Kyrgyzstan</option>'
						+ '<option value="Laos">Laos</option>'
						+ '<option value="Latvia">Latvia</option>'
						+ '<option value="Lebanon">Lebanon</option>'
						+ '<option value="Lesotho">Lesotho</option>'
						+ '<option value="Liberia">Liberia</option>'
						+ '<option value="Libya">Libya</option>'
						+ '<option value="Liechtenstein">Liechtenstein</option>'
						+ '<option value="Lithuania">Lithuania</option>'
						+ '<option value="Luxembourg">Luxembourg</option>'
						+ '<option value="Macau">Macau</option>'
						+ '<option value="Macedonia">Macedonia</option>'
						+ '<option value="Madagascar">Madagascar</option>'
						+ '<option value="Malaysia">Malaysia</option>'
						+ '<option value="Malawi">Malawi</option>'
						+ '<option value="Maldives">Maldives</option>'
						+ '<option value="Mali">Mali</option>'
						+ '<option value="Malta">Malta</option>'
						+ '<option value="Marshall Islands">Marshall Islands</option>'
						+ '<option value="Martinique">Martinique</option>'
						+ '<option value="Mauritania">Mauritania</option>'
						+ '<option value="Mauritius">Mauritius</option>'
						+ '<option value="Mayotte">Mayotte</option>'
						+ '<option value="Mexico">Mexico</option>'
						+ '<option value="Midway Islands">Midway Islands</option>'
						+ '<option value="Moldova">Moldova</option>'
						+ '<option value="Monaco">Monaco</option>'
						+ '<option value="Mongolia">Mongolia</option>'
						+ '<option value="Montserrat">Montserrat</option>'
						+ '<option value="Morocco">Morocco</option>'
						+ '<option value="Mozambique">Mozambique</option>'
						+ '<option value="Myanmar">Myanmar</option>'
						+ '<option value="Nambia">Nambia</option>'
						+ '<option value="Nauru">Nauru</option>'
						+ '<option value="Nepal">Nepal</option>'
						+ '<option value="Netherland Antilles">Netherland Antilles</option>'
						+ '<option value="Netherlands">Netherlands (Holland, Europe)</option>'
						+ '<option value="Nevis">Nevis</option>'
						+ '<option value="New Caledonia">New Caledonia</option>'
						+ '<option value="New Zealand">New Zealand</option>'
						+ '<option value="Nicaragua">Nicaragua</option>'
						+ '<option value="Niger">Niger</option>'
						+ '<option value="Nigeria">Nigeria</option>'
						+ '<option value="Niue">Niue</option>'
						+ '<option value="Norfolk Island">Norfolk Island</option>'
						+ '<option value="Norway">Norway</option>'
						+ '<option value="Oman">Oman</option>'
						+ '<option value="Pakistan">Pakistan</option>'
						+ '<option value="Palau Island">Palau Island</option>'
						+ '<option value="Palestine">Palestine</option>'
						+ '<option value="Panama">Panama</option>'
						+ '<option value="Papua New Guinea">Papua New Guinea</option>'
						+ '<option value="Paraguay">Paraguay</option>'
						+ '<option value="Peru">Peru</option>'
						+ '<option value="Phillipines">Philippines</option>'
						+ '<option value="Pitcairn Island">Pitcairn Island</option>'
						+ '<option value="Poland">Poland</option>'
						+ '<option value="Portugal">Portugal</option>'
						+ '<option value="Puerto Rico">Puerto Rico</option>'
						+ '<option value="Qatar">Qatar</option>'
						+ '<option value="Republic of Montenegro">Republic of Montenegro</option>'
						+ '<option value="Republic of Serbia">Republic of Serbia</option>'
						+ '<option value="Reunion">Reunion</option>'
						+ '<option value="Romania">Romania</option>'
						+ '<option value="Russia">Russia</option>'
						+ '<option value="Rwanda">Rwanda</option>'
						+ '<option value="St Barthelemy">St Barthelemy</option>'
						+ '<option value="St Eustatius">St Eustatius</option>'
						+ '<option value="St Helena">St Helena</option>'
						+ '<option value="St Kitts-Nevis">St Kitts-Nevis</option>'
						+ '<option value="St Lucia">St Lucia</option>'
						+ '<option value="St Maarten">St Maarten</option>'
						+ '<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>'
						+ '<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>'
						+ '<option value="Saipan">Saipan</option>'
						+ '<option value="Samoa">Samoa</option>'
						+ '<option value="Samoa American">Samoa American</option>'
						+ '<option value="San Marino">San Marino</option>'
						+ '<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>'
						+ '<option value="Saudi Arabia">Saudi Arabia</option>'
						+ '<option value="Senegal">Senegal</option>'
						+ '<option value="Serbia">Serbia</option>'
						+ '<option value="Seychelles">Seychelles</option>'
						+ '<option value="Sierra Leone">Sierra Leone</option>'
						+ '<option value="Singapore">Singapore</option>'
						+ '<option value="Slovakia">Slovakia</option>'
						+ '<option value="Slovenia">Slovenia</option>'
						+ '<option value="Solomon Islands">Solomon Islands</option>'
						+ '<option value="Somalia">Somalia</option>'
						+ '<option value="South Africa">South Africa</option>'
						+ '<option value="Spain">Spain</option>'
						+ '<option value="Sri Lanka">Sri Lanka</option>'
						+ '<option value="Sudan">Sudan</option>'
						+ '<option value="Suriname">Suriname</option>'
						+ '<option value="Swaziland">Swaziland</option>'
						+ '<option value="Sweden">Sweden</option>'
						+ '<option value="Switzerland">Switzerland</option>'
						+ '<option value="Syria">Syria</option>'
						+ '<option value="Tahiti">Tahiti</option>'
						+ '<option value="Taiwan">Taiwan</option>'
						+ '<option value="Tajikistan">Tajikistan</option>'
						+ '<option value="Tanzania">Tanzania</option>'
						+ '<option value="Thailand">Thailand</option>'
						+ '<option value="Togo">Togo</option>'
						+ '<option value="Tokelau">Tokelau</option>'
						+ '<option value="Tonga">Tonga</option>'
						+ '<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>'
						+ '<option value="Tunisia">Tunisia</option>'
						+ '<option value="Turkey">Turkey</option>'
						+ '<option value="Turkmenistan">Turkmenistan</option>'
						+ '<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>'
						+ '<option value="Tuvalu">Tuvalu</option>'
						+ '<option value="Uganda">Uganda</option>'
						+ '<option value="Ukraine">Ukraine</option>'
						+ '<option value="United Arab Erimates">United Arab Emirates</option>'
						+ '<option value="United Kingdom">United Kingdom</option>'
						+ '<option value="United States of America">United States of America</option>'
						+ '<option value="Uraguay">Uruguay</option>'
						+ '<option value="Uzbekistan">Uzbekistan</option>'
						+ '<option value="Vanuatu">Vanuatu</option>'
						+ '<option value="Vatican City State">Vatican City State</option>'
						+ '<option value="Venezuela">Venezuela</option>'
						+ '<option value="Vietnam">Vietnam</option>'
						+ '<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>'
						+ '<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>'
						+ '<option value="Wake Island">Wake Island</option>'
						+ '<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>'
						+ '<option value="Yemen">Yemen</option>'
						+ '<option value="Zaire">Zaire</option>'
						+ '<option value="Zambia">Zambia</option>'
						+ '<option value="Zimbabwe">Zimbabwe</option>'
	}
	function RevertCountry(){
		document.getElementById("countryEdit").innerHTML= 
		'<div class="button btn btn-small" onclick="EditCountry()">Edit</div>';
		document.getElementById("country").innerHTML = document.getElementById("countryInput").value;
		// And send it to database, or else throw error;
	}
	</script>
</head>
<body>
<?php
require('header.php');
?>
<div class="container">
	<!-- main body -->
	<main>
		<?php
		require('account_sidebar.php');
		?>
		<div class="content" style="text-align:center;">
		<h1>Personal Information</h1><hr>
		<table>
		<tr>
		  <td><h3>Username:</h3></td>
		  <td><h3 id="uname">#Username</h3></td><!-- Username cannot be changed-->
		  <td></td>
		</tr>
		<tr>
		  <td><h3>Contact number:</h3></td>
		  <td><h3 id="phone">#Contact number</h3></td>
		  <td id="phoneEdit"><div class="btn-inverse" onclick="EditPhone()">Edit</div></td>
		</tr>
		<tr>
		  <td><h3>Age:</h3></td>
		  <td><h3 id="age">#Age</h3></td>
		  <td id="ageEdit"><div class="btn-inverse" onclick="EditAge()">Edit</div></td>
		</tr>
		<tr>
		  <td><h3>Email:</h3></td>
		  <td><h3 id="email">#Email </h3></td>
		  <td id="emailEdit"><div class="btn-inverse" onclick="EditEmail()">Edit</div></td>
		</tr>		
		<tr>
		  <td><h3>Nationality:</h3></td>
		  <td><h3 id="country">#Email </h3></td>
		  <td id="countryEdit"><div class="btn-inverse" onclick="EditCountry()">Edit</div></td>
		</tr>
		</table><br>
		</div>
	</main>
</div>
<?php
require('footer.php');
?>
</body>
</html>