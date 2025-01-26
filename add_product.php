<!DOCTYPE html>
<html lang="ar" dir="rtl">
	<head>
		<title>website</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="format-detection" content="telephone=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="author" content="">
		<meta name="keywords" content="">
		<meta name="description" content="">

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/vendor.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">


		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

	</head>
	<body>
		<?php include('view\header.php');?>
	
		<section class="checkout spad">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
						</h6>
					</div>
				</div>
				<div class="checkout__form">
					<h4>إضافة محل</h4>
					<form id = "add_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
						<div class="row">
							<div class="col-lg-8 col-md-6">
								<div class="checkout__input">
									<p>إسم المحل<span>*</span></p>
									<input type="text" name="store_name" id="store_name" placeholder="اسم المحل">
								</div>
								<div class="checkout__input">
									<p>العنوان<span>*</span></p>
									<input type="text" name="city" id="city"  placeholder="المدينة" class="checkout__input__add">
									<input type="text" name="area" id="area"  placeholder="المنطقة" class="checkout__input__add">
									<input type="text" name="address" id="adress"  placeholder="رقم الشارع - رقم البناية -رقم الشقة">
								</div>
								<div class="checkout__input">
									<p>رقم الهاتف<span>*</span></p>
									<select class="form-select" id="phone_code" name="phone_code">
    <option value="">إختار الدولة</option>
    <option value="93">Afghanistan +93</option>
    <option value="358">Aland Islands +358</option>
    <option value="355">Albania +355</option>
    <option value="213">Algeria +213</option>
    <option value="1684">American Samoa +1684</option>
    <option value="376">Andorra +376</option>
    <option value="244">Angola +244</option>
    <option value="1264">Anguilla +1264</option>
    <option value="672">Antarctica +672</option>
    <option value="1268">Antigua and Barbuda +1268</option>
    <option value="54">Argentina +54</option>
    <option value="374">Armenia +374</option>
    <option value="297">Aruba +297</option>
    <option value="61">Australia +61</option>
    <option value="43">Austria +43</option>
    <option value="994">Azerbaijan +994</option>
    <option value="1242">Bahamas +1242</option>
    <option value="973">Bahrain +973</option>
    <option value="880">Bangladesh +880</option>
    <option value="1246">Barbados +1246</option>
    <option value="375">Belarus +375</option>
    <option value="32">Belgium +32</option>
    <option value="501">Belize +501</option>
    <option value="229">Benin +229</option>
    <option value="1441">Bermuda +1441</option>
    <option value="975">Bhutan +975</option>
    <option value="591">Bolivia +591</option>
    <option value="599">Bonaire, Sint Eustatius and Saba +599</option>
    <option value="387">Bosnia and Herzegovina +387</option>
    <option value="267">Botswana +267</option>
    <option value="55">Bouvet Island +55</option>
    <option value="55">Brazil +55</option>
    <option value="246">British Indian Ocean Territory +246</option>
    <option value="673">Brunei Darussalam +673</option>
    <option value="359">Bulgaria +359</option>
    <option value="226">Burkina Faso +226</option>
    <option value="257">Burundi +257</option>
    <option value="855">Cambodia +855</option>
    <option value="237">Cameroon +237</option>
    <option value="1">Canada +1</option>
    <option value="238">Cape Verde +238</option>
    <option value="1345">Cayman Islands +1345</option>
    <option value="236">Central African Republic +236</option>
    <option value="235">Chad +235</option>
    <option value="56">Chile +56</option>
    <option value="86">China +86</option>
    <option value="61">Christmas Island +61</option>
    <option value="672">Cocos (Keeling) Islands +672</option>
    <option value="57">Colombia +57</option>
    <option value="269">Comoros +269</option>
    <option value="242">Congo +242</option>
    <option value="242">Congo, Democratic Republic of the Congo +242</option>
    <option value="682">Cook Islands +682</option>
    <option value="506">Costa Rica +506</option>
    <option value="225">Cote D'Ivoire +225</option>
    <option value="385">Croatia +385</option>
    <option value="53">Cuba +53</option>
    <option value="599">Curacao +599</option>
    <option value="357">Cyprus +357</option>
    <option value="420">Czech Republic +420</option>
    <option value="45">Denmark +45</option>
    <option value="253">Djibouti +253</option>
    <option value="1767">Dominica +1767</option>
    <option value="1809">Dominican Republic +1809</option>
    <option value="593">Ecuador +593</option>
    <option value="20">Egypt +20</option>
    <option value="503">El Salvador +503</option>
    <option value="240">Equatorial Guinea +240</option>
    <option value="291">Eritrea +291</option>
    <option value="372">Estonia +372</option>
    <option value="251">Ethiopia +251</option>
    <option value="500">Falkland Islands (Malvinas) +500</option>
    <option value="298">Faroe Islands +298</option>
    <option value="679">Fiji +679</option>
    <option value="358">Finland +358</option>
    <option value="33">France +33</option>
    <option value="594">French Guiana +594</option>
    <option value="689">French Polynesia +689</option>
    <option value="262">French Southern Territories +262</option>
    <option value="241">Gabon +241</option>
    <option value="220">Gambia +220</option>
    <option value="995">Georgia +995</option>
    <option value="49">Germany +49</option>
    <option value="233">Ghana +233</option>
    <option value="350">Gibraltar +350</option>
    <option value="30">Greece +30</option>
    <option value="299">Greenland +299</option>
    <option value="1473">Grenada +1473</option>
    <option value="590">Guadeloupe +590</option>
    <option value="1671">Guam +1671</option>
    <option value="502">Guatemala +502</option>
    <option value="44">Guernsey +44</option>
    <option value="224">Guinea +224</option>
    <option value="245">Guinea-Bissau +245</option>
    <option value="592">Guyana +592</option>
    <option value="509">Haiti +509</option>
    <option value="39">Holy See (Vatican City State) +39</option>
    <option value="504">Honduras +504</option>
    <option value="852">Hong Kong +852</option>
    <option value="36">Hungary +36</option>
    <option value="354">Iceland +354</option>
    <option value="91">India +91</option>
    <option value="62">Indonesia +62</option>
    <option value="98">Iran, Islamic Republic of +98</option>
    <option value="964">Iraq +964</option>
    <option value="353">Ireland +353</option>
    <option value="44">Isle of Man +44</option>
    <option value="39">Italy +39</option>
    <option value="1876">Jamaica +1876</option>
    <option value="81">Japan +81</option>
    <option value="44">Jersey +44</option>
    <option value="962">Jordan +962</option>
    <option value="7">Kazakhstan +7</option>
    <option value="254">Kenya +254</option>
    <option value="686">Kiribati +686</option>
    <option value="850">Korea, Democratic People's Republic of +850</option>
    <option value="82">Korea, Republic of +82</option>
    <option value="381">Kosovo +383</option>
    <option value="965">Kuwait +965</option>
    <option value="996">Kyrgyzstan +996</option>
    <option value="856">Lao People's Democratic Republic +856</option>
    <option value="371">Latvia +371</option>
    <option value="961">Lebanon +961</option>
    <option value="266">Lesotho +266</option>
    <option value="231">Liberia +231</option>
    <option value="218">Libyan Arab Jamahiriya +218</option>
    <option value="423">Liechtenstein +423</option>
    <option value="370">Lithuania +370</option>
    <option value="352">Luxembourg +352</option>
    <option value="853">Macao +853</option>
    <option value="389">Macedonia, the Former Yugoslav Republic of +389</option>
    <option value="261">Madagascar +261</option>
    <option value="265">Malawi +265</option>
    <option value="60">Malaysia +60</option>
    <option value="960">Maldives +960</option>
    <option value="223">Mali +223</option>
    <option value="356">Malta +356</option>
    <option value="692">Marshall Islands +692</option>
    <option value="596">Martinique +596</option>
    <option value="222">Mauritania +222</option>
    <option value="230">Mauritius +230</option>
    <option value="262">Mayotte +262</option>
    <option value="52">Mexico +52</option>
    <option value="691">Micronesia, Federated States of +691</option>
    <option value="373">Moldova, Republic of +373</option>
    <option value="377">Monaco +377</option>
    <option value="976">Mongolia +976</option>
    <option value="382">Montenegro +382</option>
    <option value="1664">Montserrat +1664</option>
    <option value="212">Morocco +212</option>
    <option value="258">Mozambique +258</option>
    <option value="95">Myanmar +95</option>
    <option value="264">Namibia +264</option>
    <option value="674">Nauru +674</option>
    <option value="977">Nepal +977</option>
    <option value="31">Netherlands +31</option>
    <option value="599">Netherlands Antilles +599</option>
    <option value="687">New Caledonia +687</option>
    <option value="64">New Zealand +64</option>
    <option value="505">Nicaragua +505</option>
    <option value="227">Niger +227</option>
    <option value="234">Nigeria +234</option>
    <option value="683">Niue +683</option>
    <option value="672">Norfolk Island +672</option>
    <option value="1670">Northern Mariana Islands +1670</option>
    <option value="47">Norway +47</option>
    <option value="968">Oman +968</option>
    <option value="92">Pakistan +92</option>
    <option value="680">Palau +680</option>
    <option value="970">Palestinian +970</option>
    <option value="507">Panama +507</option>
    <option value="675">Papua New Guinea +675</option>
    <option value="595">Paraguay +595</option>
    <option value="51">Peru +51</option>
    <option value="63">Philippines +63</option>
    <option value="64">Pitcairn +64</option>
    <option value="48">Poland +48</option>
    <option value="351">Portugal +351</option>
    <option value="1787">Puerto Rico +1787</option>
    <option value="974">Qatar +974</option>
    <option value="262">Reunion +262</option>
    <option value="40">Romania +40</option>
    <option value="7">Russian Federation +7</option>
    <option value="250">Rwanda +250</option>
    <option value="590">Saint Barthelemy +590</option>
    <option value="290">Saint Helena +290</option>
    <option value="1869">Saint Kitts and Nevis +1869</option>
    <option value="1758">Saint Lucia +1758</option>
    <option value="590">Saint Martin +590</option>
    <option value="508">Saint Pierre and Miquelon +508</option>
    <option value="1784">Saint Vincent and the Grenadines +1784</option>
    <option value="684">Samoa +684</option>
    <option value="378">San Marino +378</option>
    <option value="239">Sao Tome and Principe +239</option>
    <option value="966">Saudi Arabia +966</option>
    <option value="221">Senegal +221</option>
    <option value="381">Serbia +381</option>
    <option value="381">Serbia and Montenegro +381</option>
    <option value="248">Seychelles +248</option>
    <option value="232">Sierra Leone +232</option>
    <option value="65">Singapore +65</option>
    <option value="721">Sint Maarten +721</option>
    <option value="421">Slovakia +421</option>
    <option value="386">Slovenia +386</option>
    <option value="677">Solomon Islands +677</option>
    <option value="252">Somalia +252</option>
    <option value="27">South Africa +27</option>
    <option value="500">South Georgia and the South Sandwich Islands +500</option>
    <option value="211">South Sudan +211</option>
    <option value="34">Spain +34</option>
    <option value="94">Sri Lanka +94</option>
    <option value="249">Sudan +249</option>
    <option value="597">Suriname +597</option>
    <option value="47">Svalbard and Jan Mayen +47</option>
    <option value="268">Swaziland +268</option>
    <option value="46">Sweden +46</option>
    <option value="41">Switzerland +41</option>
    <option value="963">Syrian Arab Republic +963</option>
    <option value="886">Taiwan, Province of China +886</option>
    <option value="992">Tajikistan +992</option>
    <option value="255">Tanzania, United Republic of +255</option>
    <option value="66">Thailand +66</option>
    <option value="670">Timor-Leste +670</option>
    <option value="228">Togo +228</option>
    <option value="690">Tokelau +690</option>
    <option value="676">Tonga +676</option>
    <option value="1868">Trinidad and Tobago +1868</option>
    <option value="216">Tunisia +216</option>
    <option value="90">Turkey +90</option>
    <option value="7370">Turkmenistan +7370</option>
    <option value="1649">Turks and Caicos Islands +1649</option>
    <option value="688">Tuvalu +688</option>
    <option value="256">Uganda +256</option>
    <option value="380">Ukraine +380</option>
    <option value="971">United Arab Emirates +971</option>
    <option value="44">United Kingdom +44</option>
    <option value="1">United States +1</option>
    <option value="1">United States Minor Outlying Islands +1</option>
    <option value="598">Uruguay +598</option>
    <option value="998">Uzbekistan +998</option>
    <option value="678">Vanuatu +678</option>
    <option value="58">Venezuela +58</option>
    <option value="84">Viet Nam +84</option>
    <option value="1284">Virgin Islands, British +1284</option>
    <option value="1340">Virgin Islands, U.s. +1340</option>
    <option value="681">Wallis and Futuna +681</option>
    <option value="212">Western Sahara +212</option>
    <option value="967">Yemen +967</option>
    <option value="260">Zambia +260</option>
    <option value="263">Zimbabwe +263</option>
</select>
									<input type="text" name="phone" id="phone" placeholder="5550115">
								</div>
								<div class="checkout__input">
									<p>البريد الالكتروني<span>*</span></p>
									<input type="text" type="email" name="email" id="email" placeholder="user@mail.com">
								</div>
								<div class="checkout__input__checkbox">
									<label for="addProduct">
										<input type="checkbox" id="addProduct" onclick="toggleProductFields()">
										أضف منتج جديد
										<span class="checkmark"></span>
									</label>
								</div>
								<div id="ProductFields" ></div>
								<button type="submit" id="save_form" class="formbold-btn">حفظ </button>
								
							</div>
                    </div>
                </form>
            </div>
        </div>
    </section>
	
	
		<?php include('view\footer.php');?>
		<script src="js/jquery-1.11.0.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
		<script src="js/plugins.js"></script>
		<script src="js/script.js"></script>
		<script>
			let ProductIndex = 0;

			function toggleProductFields() {
				let ProductFields = document.getElementById("ProductFields");
	
				if (document.getElementById("addProduct").checked) {
					let producthead = document.createElement("div");
					producthead.className = "formbold-main-wrapper";
			
					let productnameInput = document.createElement("div");
					productnameInput.className = "checkout__input";
		
					let productDesInput = document.createElement("div");
					productDesInput.className = "checkout__input";
		
					let productImageInput = document.createElement("div");
					productImageInput.className = "checkout__input";
		
					let productRemoveInput = document.createElement("div");
					productRemoveInput.className = "checkout__input";
		
					let productPriceInput = document.createElement("div");
					productnameInput.className = "checkout__input";
        
					let tablehead = document.createElement("h4");;
		
					let tableDataNameLabel = document.createElement("div");
					let tableDataNameInput = document.createElement("div");
		
					let tableDataDesLabel = document.createElement("div");
					let tableDataDesInput = document.createElement("div");
		
					let tableDataImageLabel = document.createElement("div");
					let tableDataImageInput = document.createElement("div");
		
					let tableDataPriceLabel = document.createElement("div");
					let tableDataPriceInput = document.createElement("div");
			
					let tableDataButton = document.createElement("div");
		
					let moreInfo = document.createElement("tr");
					let moreInfos = document.createElement("tr");
		
		
					tablehead.innerHTML = `<h4>إضافة منتج</h4>`;
		
					tableDataNameLabel.innerHTML = `
						<p for="productName_${ProductIndex}" >إسم المنتج<span>*</span></p>`;
					tableDataNameInput.innerHTML = `
						<input type="text" name="product[name][]" id="productName_${ProductIndex}" placeholder="إسم المنتج" />
						`;
		
					tableDataDesLabel.innerHTML = `<p for="productDes_${ProductIndex}">معلومات المنتج<span>*</span></p>`;
					tableDataDesInput.innerHTML = `
						<textarea name="product[desc][]" id="productDes_${ProductIndex}"  rows="4" cols="50" placeholder="معلومات المنتج" ></textarea>
						`;

					tableDataImageLabel.innerHTML = `<p for="productImage_${ProductIndex}">صورة المنتج<span>*</span></p>`;
					tableDataImageInput.innerHTML = `
						<input type="file" name="photo[]" id="productImage_${ProductIndex}" accept="image/*" placeholder="معلومات المنتج"/>
						`;
		
					tableDataPriceLabel.innerHTML = `<p for="productPrice_${ProductIndex}">سعر المنتج<span>*</span></p>`;
					tableDataPriceInput.innerHTML = `
						<input type="text" name="product[price][]" id="productPrice_${ProductIndex}" placeholder="السعر" />`;
		
					tableDataButton.innerHTML = `
						<button type="button" class="formbold-btn" onclick="removeProductField(this)">إزالة</button>
					`;
					moreInfo.innerHTML = `
						<input type="checkbox" id="addProduct" onclick="toggleProductFields()"> أضف منتج جديد
						`;
		
					productnameInput.appendChild(tableDataNameLabel);
					productDesInput.appendChild(tableDataDesLabel);
					productPriceInput.appendChild(tableDataPriceLabel);
					productImageInput.appendChild(tableDataImageLabel);
					productRemoveInput.appendChild(tableDataButton);
					productnameInput.appendChild(tableDataNameInput);
					productDesInput.appendChild(tableDataDesInput);
					productPriceInput.appendChild(tableDataPriceInput);
					productImageInput.appendChild(tableDataImageInput);
		
					moreInfos.appendChild(moreInfo);
		
					ProductFields.parentNode.insertBefore(tablehead, document.getElementById("save_form"));
					ProductFields.parentNode.insertBefore(productnameInput, document.getElementById("save_form"));
					ProductFields.parentNode.insertBefore(productDesInput, document.getElementById("save_form"));
					ProductFields.parentNode.insertBefore(productPriceInput, document.getElementById("save_form"));
					ProductFields.parentNode.insertBefore(productImageInput, document.getElementById("save_form"));
					ProductFields.parentNode.insertBefore(productRemoveInput, document.getElementById("save_form"));
					ProductFields.parentNode.insertBefore(moreInfos, document.getElementById("save_form"));
		 
					ProductIndex++;
		
				}
			}

			function removeProductField(element) {
				element.parentElement.parentElement.remove();
			}

			function validateForm() {
				// Perform your form validation here
				// Return true if the form is valid, false otherwise
				//document.getElementById("add_form").
				var formData = new FormData(this);

				// Convert FormData object to a plain object
				var formObject = {};
				formData.forEach(function(value, key){
					formObject[key] = value;
				});

				console.log(formObject);
				return true;
			}
		</script>

	</body>
</html>

<?php
// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Process the form data
    $store_name = $_POST['store_name'];
    $address = $_POST['city'] . $_POST['area'] . $_POST['address'];
    $phone = "+" . $_POST['phone_code'] . $_POST['phone'];
    $email = $_POST['email'];
	
	include('config\db_func.php');
	$var = new DataBaseImplementation();
	$id = $var->add_store(1, 1, $store_name, 1, $address,$phone,$email);
	
	$product = $_POST['product'];
	$photoDetails = $_FILES['photo'];
	
	echo "store: " . $store_name . "address: " . $address . " - phone: " . $phone . " - email: " . $email  . "<br>";

   if (!empty($product['name'])) {
         foreach ($product['name'] as $key => $name) {
			$var->add_product($id, $product['desc'][$key], $product['price'][$key], $product['price'][$key], $photoDetails['tmp_name'][$key], $photoDetails['type'][$key]);
        }
    }

    // You can perform further processing here based on the form data

    // Send a simple response back
    $response = ['message' => 'Form data received successfully'];
    echo json_encode($response);
} else {
    // Handle requests other than POST method
    http_response_code(405); // Method Not Allowed
    echo json_encode(['error' => 'Invalid request method']);
}
?>

	
	