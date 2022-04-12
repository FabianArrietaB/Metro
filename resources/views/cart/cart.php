<?php require_once('../resources/views/home/header.php') ?>

<nav class="navbar navbar-expand-sm navbar-primary bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/Metropolisweb/public">
      <img src="../img/logo2.png" alt="Logo" style="width:50px;" class="rounded-pill">
    </a>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="navbar-brand px-1" href="#"><i class="fas fa-envelope fa-2x"></i></a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand px-1" href="#"><i class="fas fa-bell fa-2x"></i></a>
        </li>
      </ul>
      <div class="container-fluid">
        <div class="col-sm-12">
          <div class="input-group">
              <input class="form-control form-control-dark w-90" type="text" placeholder="Buscar" aria-label="Search">  
              <button type="button" class="btn btn-primary" href="#"><i class="fas fa-search"></i></button>
          </div>
        </div>
      </div>
        <div class="nav-item text-nowrap">
          <ul class="dropdown navbar-nav me-auto">
            <a type="button" class="navbar-brand" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" href="#">
              <strong>Usuario</strong><img src="../img/logo2.png" alt="Logo" style="width:50px;" class="rounded-pill">
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Datos</a></li>
              <li><a class="dropdown-item" href="#">Permisos</a></li>
              <li><a class="dropdown-item" href="#">Salir</a></li>
            </ul>
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>

<section class="pt-5 pb-5">
<div class="container">
  <!-- Page Heading -->
  <div class="row">
    <div class="col-12">
      <h1 class="page-header">Shopping Cart</h1>
    </div>
  </div>
  <!-- /.row -->

  

  <!-- Cart Table -->
  <div class="row">
    <div class="col-lg-8 mb-4">
      <form id="cart-update-form" method="post" action="/cart/update">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Product</th>
                <th class="mob-hide"></th>
                <th class="mob-hide">Unit Price</th>
                <th class="table-qty">Qty</th>
                <th>Subtotal</th>
                <th></th>
              </tr>
            </thead>
            
            
            <tbody><tr>
              <td>
                <h3>Smartphone MTK6572 </h3>
                
              </td>
              <td class="text-center mob-hide">
                <a href="/smartphone-mtk6572" class="trsn" title="Smartphone MTK6572 ">
                  
                  <img src="https://cdnx.jumpseller.com/bootstrap/image/429445/resize/120/150?1439529548" alt="Smartphone MTK6572 " title="Smartphone MTK6572 ">
                  
                </a>
              </td>
              <td class="mob-hide">
                
                <span class="order-product-price">$500.000</span>
                
              </td>
              <td>
                <select class="select select-qty form-control" name="104018403" title="Qty" onchange="$('#cart-update-form').submit();return false;">
                  
                  
                  <option value="1" selected="selected">1</option>
                  
                  <option value="2">2</option>
                  
                  <option value="3">3</option>
                  
                  <option value="4">4</option>
                  
                  <option value="5">5</option>
                  
                  <option value="6">6</option>
                  
                  <option value="7">7</option>
                  
                  <option value="8">8</option>
                  
                  <option value="9">9</option>
                  
                  <option value="10">10</option>
                  
                  <option value="11">11</option>
                  
                  <option value="12">12</option>
                  
                  <option value="13">13</option>
                  
                  <option value="14">14</option>
                  
                  <option value="15">15</option>
                  
                  <option value="16">16</option>
                  
                  <option value="17">17</option>
                  
                  <option value="18">18</option>
                  
                  <option value="19">19</option>
                  
                  <option value="20">20</option>
                  
                  <option value="21">21</option>
                  
                  <option value="22">22</option>
                  
                  <option value="23">23</option>
                  
                  <option value="24">24</option>
                  
                  <option value="25">25</option>
                  
                  <option value="26">26</option>
                  
                  <option value="27">27</option>
                  
                  <option value="28">28</option>
                  
                  <option value="29">29</option>
                  
                  <option value="30">30</option>
                  
                  <option value="31">31</option>
                  
                </select>
              </td>
              <td>
                <span class="order-product-subtotal">$500.000</span>
              </td>
              <td clas="text-right"> <a href="/cart/remove_product/104018403" class="cart-product-remove" title="Remove Product"><i class="fas fa-times-circle"></i></a></td>
            </tr>
            
          </tbody></table>
        </div>
      <input type="hidden"></form>
      <hr class="my-3">
      <div class="row">
        
        <div class="cart-discount text-center col-md-6 offset-md-3">
          <div class="card">
            <div class="card-body">
              <h4>Have a discount code?</h4>
              <form action="/cart/coupon" accept-charset="UTF-8" id="coupon_form" autocomplete="off" method="post">  <div class="form-group"><input id="coupon_code" name="code" type="text" class="text form-control"></div>
  <input id="set_coupon_code_button" type="submit" value="Apply" class="btn btn-outline-secondary btn-block">
  
<input type="hidden"></form>
            </div>
          </div>
        </div>
        
      </div>
    </div>

    <!-- Cart Options -->
    <div class="col-lg-4 mb-4">
      <div class="row">
        
        <div class="col-sm-12 col-md-12 cart-estimate">
          <div class="card mb-3">
            <div class="card-header">
              <h2 class="card-title">Estimate Shipping Costs</h2>
            </div>
            <div class="card-body">
              <div class="card-text"><div id="estimate_shipping">
<form action="/cart/estimate" accept-charset="UTF-8" id="estimate_shipping_form" autocomplete="off" method="post">    <!-- Country -->
    <div class="form-group"><label for="estimate_shipping_country">Country</label><select name="estimate[country]" id="estimate_shipping_country" class="select form-control"><option value=""></option>
<option value="AF">Afghanistan</option>
<option value="AX">Åland Islands</option>
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
<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
<option value="BA">Bosnia and Herzegovina</option>
<option value="BW">Botswana</option>
<option value="BV">Bouvet Island</option>
<option value="BR">Brazil</option>
<option value="IO">British Indian Ocean Territory</option>
<option value="BN">Brunei Darussalam</option>
<option value="BG">Bulgaria</option>
<option value="BF">Burkina Faso</option>
<option value="BI">Burundi</option>
<option value="CV">Cabo Verde</option>
<option value="KH">Cambodia</option>
<option value="CM">Cameroon</option>
<option value="CA">Canada</option>
<option value="KY">Cayman Islands</option>
<option value="CF">Central African Republic</option>
<option value="TD">Chad</option>
<option value="CL">Chile</option>
<option value="CN">China</option>
<option value="CX">Christmas Island</option>
<option value="CC">Cocos (Keeling) Islands</option>
<option value="CO" selected="selected">Colombia</option>
<option value="KM">Comoros</option>
<option value="CG">Congo</option>
<option value="CD">Congo, The Democratic Republic of the</option>
<option value="CK">Cook Islands</option>
<option value="CR">Costa Rica</option>
<option value="CI">Côte d'Ivoire</option>
<option value="HR">Croatia</option>
<option value="CU">Cuba</option>
<option value="CW">Curaçao</option>
<option value="CY">Cyprus</option>
<option value="CZ">Czechia</option>
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
<option value="SZ">Eswatini</option>
<option value="ET">Ethiopia</option>
<option value="FK">Falkland Islands (Malvinas)</option>
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
<option value="GG">Guernsey</option>
<option value="GN">Guinea</option>
<option value="GW">Guinea-Bissau</option>
<option value="GY">Guyana</option>
<option value="HT">Haiti</option>
<option value="HM">Heard Island and McDonald Islands</option>
<option value="VA">Holy See (Vatican City State)</option>
<option value="HN">Honduras</option>
<option value="HK">Hong Kong</option>
<option value="HU">Hungary</option>
<option value="IS">Iceland</option>
<option value="IN">India</option>
<option value="ID">Indonesia</option>
<option value="IR">Iran, Islamic Republic of</option>
<option value="IQ">Iraq</option>
<option value="IE">Ireland</option>
<option value="IM">Isle of Man</option>
<option value="IL">Israel</option>
<option value="IT">Italy</option>
<option value="JM">Jamaica</option>
<option value="JP">Japan</option>
<option value="JE">Jersey</option>
<option value="JO">Jordan</option>
<option value="KZ">Kazakhstan</option>
<option value="KE">Kenya</option>
<option value="KI">Kiribati</option>
<option value="KW">Kuwait</option>
<option value="KG">Kyrgyzstan</option>
<option value="LA">Lao People's Democratic Republic</option>
<option value="LV">Latvia</option>
<option value="LB">Lebanon</option>
<option value="LS">Lesotho</option>
<option value="LR">Liberia</option>
<option value="LY">Libya</option>
<option value="LI">Liechtenstein</option>
<option value="LT">Lithuania</option>
<option value="LU">Luxembourg</option>
<option value="MO">Macao</option>
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
<option value="NC">New Caledonia</option>
<option value="NZ">New Zealand</option>
<option value="NI">Nicaragua</option>
<option value="NE">Niger</option>
<option value="NG">Nigeria</option>
<option value="NU">Niue</option>
<option value="NF">Norfolk Island</option>
<option value="KP">North Korea</option>
<option value="MK">North Macedonia</option>
<option value="MP">Northern Mariana Islands</option>
<option value="NO">Norway</option>
<option value="OM">Oman</option>
<option value="PK">Pakistan</option>
<option value="PW">Palau</option>
<option value="PS">Palestine, State of</option>
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
<option value="RE">Réunion</option>
<option value="RO">Romania</option>
<option value="RU">Russian Federation</option>
<option value="RW">Rwanda</option>
<option value="BL">Saint Barthélemy</option>
<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
<option value="KN">Saint Kitts and Nevis</option>
<option value="LC">Saint Lucia</option>
<option value="MF">Saint Martin (French part)</option>
<option value="PM">Saint Pierre and Miquelon</option>
<option value="VC">Saint Vincent and the Grenadines</option>
<option value="WS">Samoa</option>
<option value="SM">San Marino</option>
<option value="ST">Sao Tome and Principe</option>
<option value="SA">Saudi Arabia</option>
<option value="SN">Senegal</option>
<option value="RS">Serbia</option>
<option value="SC">Seychelles</option>
<option value="SL">Sierra Leone</option>
<option value="SG">Singapore</option>
<option value="SX">Sint Maarten (Dutch part)</option>
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
<option value="SE">Sweden</option>
<option value="CH">Switzerland</option>
<option value="SY">Syrian Arab Republic</option>
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
<option value="VN">Vietnam</option>
<option value="VG">Virgin Islands, British</option>
<option value="VI">Virgin Islands, U.S.</option>
<option value="WF">Wallis and Futuna</option>
<option value="EH">Western Sahara</option>
<option value="YE">Yemen</option>
<option value="ZM">Zambia</option>
<option value="ZW">Zimbabwe</option>
</select></div>
    

    <!-- Region -->
      <div class="form-group"><label for="estimate_shipping_region">Region</label><select name="estimate[region]" id="estimate_shipping_region" class="select form-control"><option value="01">Amazonas</option>
<option value="02">Antioquia</option>
<option value="03">Arauca</option>
<option value="04">Atlántico</option>
<option value="35">Bolívar</option>
<option value="36">Boyacá</option>
<option value="37">Caldas</option>
<option value="34">Capital District</option>
<option value="08">Caquetá</option>
<option value="32">Casanare</option>
<option value="09">Cauca</option>
<option value="10">Cesar</option>
<option value="11">Chocó</option>
<option value="12">Córdoba</option>
<option value="33">Cundinamarca</option>
<option value="15">Guainía</option>
<option value="14">Guaviare</option>
<option value="16">Huila</option>
<option value="17">La Guajira</option>
<option value="38">Magdalena</option>
<option value="19">Meta</option>
<option value="20">Nariño</option>
<option value="21">Norte de Santander</option>
<option value="22">Putumayo</option>
<option value="23">Quindío</option>
<option value="24">Risaralda</option>
<option value="25">San Andrés &amp; Providencia</option>
<option value="26">Santander</option>
<option value="27">Sucre</option>
<option value="28">Tolima</option>
<option value="29">Valle del Cauca</option>
<option value="30">Vaupés</option>
<option value="31">Vichada</option>
</select></div>
      

    <!-- Municipality -->
      <div class="form-group"><label for="estimate_shipping_municipality" style="">Municipality</label><select name="estimate[municipality]" id="estimate_shipping_municipality" class="select form-control" style=""><option value=""></option><option value="9172023">El Encanto</option><option value="9172025">La Chorrera</option><option value="9172026">La Pedrera</option><option value="9172266">La Victoria</option><option value="9172028">Leticia</option><option value="9172030">Miriti - Paraná</option><option value="9609512">Puerto Alegría</option><option value="9609513">Puerto Arica</option><option value="9172031">Puerto Nariño</option><option value="9172033">Puerto Santander</option><option value="9172034">Tarapacá</option></select></div>
      

    <!-- Postal -->

    <!-- Other Fields -->
    

    <div class="estimate_shipping_buttons">
      <input id="estimate_shipping_button" type="submit" value="Estimate Shipping &amp; Tax" class="btn btn-outline-secondary btn-block form-control">
    </div>
<input type="hidden"></form>

  <!-- Postal JS -->

  <!-- Municipality JS -->
    <!-- CSS pseudo elements on selects can't be hidden with Javascript -->
    <style>.municipality-hide:after, .municipality-hide:before{ display: none; }</style>
    <script>// define new Rule for Municipality field
var municipality_rule = JSON.parse('[{"dependency":"country","value":["AR","CL","CO","PE","MX","IE"],"function":"municipality_change"}]')[0];

// define array of functions to be called
if(rules_functions === undefined){ var rules_functions = []; }
rules_functions.push(municipality_rule['function']);

// define Municipality Rule function
window[municipality_rule['function']] = function(){
  if(municipality_rule['value'].indexOf($("select[name*=" + municipality_rule['dependency'] + "]").val()) > -1){
    $('label[for=estimate_shipping_municipality], select#estimate_shipping_municipality').show();
    $('select#estimate_shipping_municipality').parent('div').show();
    $("select#estimate_shipping_municipality").removeClass("municipality-hide").parent().removeClass("municipality-hide");

    if($('#estimate_shipping_municipality').val() == null){
      Jumpseller.getMunicipalities('#estimate_shipping_municipality', $('select#estimate_shipping_region').val(), $('select#estimate_shipping_country').val(), null);
    }
  }
  else {
    $('label[for=estimate_shipping_municipality], select#estimate_shipping_municipality').hide();
    $('select#estimate_shipping_municipality').parent('div').hide();
    $("select#estimate_shipping_municipality").addClass("municipality-hide").parent().addClass("municipality-hide");
  }
}
</script>
</div>
</div>
            </div>
          </div>
        </div>
        

        <div class="col-12 cart-totals">
          <table class="table table-striped">

            

            
            <tbody><tr class="totals">
              <td colspan="1" class="text-left">Shipping</td>
              <td colspan="1" class="text-right">$0</td>
            </tr>
            

            

            

            <tr class="totals key">
              <td colspan="1" class="text-left"><strong>Total</strong></td>
              <td colspan="1" class="text-right"><strong>$500.000</strong></td>
            </tr>

          </tbody></table>

          <div class="text-center cart-actions">
            
            <a href="http://localhost/Metropolisweb/public/cars" class="btn btn-primary btn-block" title="Proceed to Checkout">Proceed to Checkout</a>
            

            <a href="/" class="btn btn-link btn-block" title="← Continue Shopping">← Continue Shopping</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>

<?php require_once('../resources/views/home/footer.php') ?>