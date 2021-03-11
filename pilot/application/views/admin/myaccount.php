<?php
/**
 * Created by PhpStorm.
 * User: GaoComet
 * Date: 3/3/2018
 * Time: 2:12 PM
 */
?>
<!-- Content
	================================================== -->
<div class="dashboard-content">
    <!-- Titlebar -->
    <div id="titlebar">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo $this->lang->line('side_my_account');?></h2>
            </div>
        </div>
    </div>
    <div>
        <div class="col-md-12">

            <div class="tab-content">
                <div class="tab-pane fade active in" id="tab_profile">
                    <form id="form-profile" name="form-profile" class="horizontal-form" role="form" method="POST" action="saveMyProfile" novalidate="novalidate">
                        <input type="hidden" name="accountType" value="1">

                        <div class="alert alert-danger hide">
                            <button class="close" data-close="alert"></button>
                            <?php echo $this->lang->line('account_msg');?>
                        </div>

                        <div class="form-body">
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label class="control-label" for="name"> <?php echo $this->lang->line('name');?>  <span class="required" aria-required="true"> *</span></label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Ex: Jhon" value="<?php echo $user['name'];?>">
                                </div>
                            </div>



                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label class="control-label" for="email"> <?php echo $this->lang->line('email');?>  <span class="required" aria-required="true"> *</span></label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Ex: jhon" value="<?php echo $user['email'];?>" disabled="">
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="contact"> <?php echo $this->lang->line('contact_no');?>  </label>
                                    <input type="text" class="form-control" id="contact" name="contact" placeholder="Ex: +92345612" value="<?php echo $user['contact'];?>">
                                </div>
                            </div>



                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="countrySelection"> <?php echo $this->lang->line('country');?>  </label>
                                    <select id="countrySelection" name="countrySelection" class="form-control">
                                        <option value="1" <?php if($user['country'] == '1') echo ' selected'?>>Afghanistan</option>
                                        <option value="2" <?php if($user['country'] == '2') echo ' selected'?>>Albania</option>
                                        <option value="3" <?php if($user['country'] == '3') echo ' selected'?>>Algeria</option>
                                        <option value="4" <?php if($user['country'] == '4') echo ' selected'?>>American Samoa</option>
                                        <option value="5" <?php if($user['country'] == '5') echo ' selected'?>>Andorra</option>
                                        <option value="6" <?php if($user['country'] == '6') echo ' selected'?>>Angola</option>
                                        <option value="7" <?php if($user['country'] == '7') echo ' selected'?>>Anguilla</option>
                                        <option value="8" <?php if($user['country'] == '8') echo ' selected'?>>Antarctica</option>
                                        <option value="9" <?php if($user['country'] == '9') echo ' selected'?>>Antigua and Barbuda</option>
                                        <option value="10" <?php if($user['country'] == '10') echo ' selected'?>>Argentina</option>
                                        <option value="11" <?php if($user['country'] == '11') echo ' selected'?>>Armenia</option>
                                        <option value="12" <?php if($user['country'] == '12') echo ' selected'?>>Aruba</option>
                                        <option value="13" <?php if($user['country'] == '13') echo ' selected'?>>Australia</option>
                                        <option value="14" <?php if($user['country'] == '14') echo ' selected'?>>Austria</option>
                                        <option value="15" <?php if($user['country'] == '15') echo ' selected'?>>Azerbaijan</option>
                                        <option value="16" <?php if($user['country'] == '16') echo ' selected'?>>Bahamas</option>
                                        <option value="17" <?php if($user['country'] == '17') echo ' selected'?>>Bahrain</option>
                                        <option value="18" <?php if($user['country'] == '18') echo ' selected'?>>Bangladesh</option>
                                        <option value="19" <?php if($user['country'] == '19') echo ' selected'?>>Barbados</option>
                                        <option value="20" <?php if($user['country'] == '20') echo ' selected'?>>Belarus</option>
                                        <option value="21" <?php if($user['country'] == '21') echo ' selected'?>>Belgium</option>
                                        <option value="22" <?php if($user['country'] == '22') echo ' selected'?>>Belize</option>
                                        <option value="23" <?php if($user['country'] == '23') echo ' selected'?>>Benin</option>
                                        <option value="24" <?php if($user['country'] == '24') echo ' selected'?>>Bermuda</option>
                                        <option value="25" <?php if($user['country'] == '25') echo ' selected'?>>Bhutan</option>
                                        <option value="26" <?php if($user['country'] == '26') echo ' selected'?>>Bolivia</option>
                                        <option value="27" <?php if($user['country'] == '27') echo ' selected'?>>Bosnia and Herzegovina</option>
                                        <option value="28" <?php if($user['country'] == '28') echo ' selected'?>>Botswana</option>
                                        <option value="29" <?php if($user['country'] == '29') echo ' selected'?>>Bouvet Island</option>
                                        <option value="30" <?php if($user['country'] == '30') echo ' selected'?>>Brazil</option>
                                        <option value="31" <?php if($user['country'] == '31') echo ' selected'?>>British Indian Ocean Territory</option>
                                        <option value="32" <?php if($user['country'] == '32') echo ' selected'?>>Brunei Darussalam</option>
                                        <option value="33" <?php if($user['country'] == '33') echo ' selected'?>>Bulgaria</option>
                                        <option value="34" <?php if($user['country'] == '34') echo ' selected'?>>Burkina Faso</option>
                                        <option value="35" <?php if($user['country'] == '35') echo ' selected'?>>Burundi</option>
                                        <option value="36" <?php if($user['country'] == '36') echo ' selected'?>>Cambodia</option>
                                        <option value="37" <?php if($user['country'] == '37') echo ' selected'?>>Cameroon</option>
                                        <option value="38" <?php if($user['country'] == '38') echo ' selected'?>>Canada</option>
                                        <option value="39" <?php if($user['country'] == '39') echo ' selected'?>>Cape Verde</option>
                                        <option value="40" <?php if($user['country'] == '40') echo ' selected'?>>Cayman Islands</option>
                                        <option value="41" <?php if($user['country'] == '41') echo ' selected'?>>Central African Republic</option>
                                        <option value="42" <?php if($user['country'] == '42') echo ' selected'?>>Chad</option>
                                        <option value="43" <?php if($user['country'] == '43') echo ' selected'?>>Chile</option>
                                        <option value="44" <?php if($user['country'] == '44') echo ' selected'?>>China</option>
                                        <option value="45" <?php if($user['country'] == '45') echo ' selected'?>>Christmas Island</option>
                                        <option value="46" <?php if($user['country'] == '46') echo ' selected'?>>Cocos (Keeling) Islands</option>
                                        <option value="47" <?php if($user['country'] == '47') echo ' selected'?>>Colombia</option>
                                        <option value="48" <?php if($user['country'] == '48') echo ' selected'?>>Comoros</option>
                                        <option value="49" <?php if($user['country'] == '49') echo ' selected'?>>Congo</option>
                                        <option value="50" <?php if($user['country'] == '50') echo ' selected'?>>Congo, the Democratic Republic of the</option>
                                        <option value="51" <?php if($user['country'] == '51') echo ' selected'?>>Cook Islands</option>
                                        <option value="52" <?php if($user['country'] == '52') echo ' selected'?>>Costa Rica</option>
                                        <option value="53" <?php if($user['country'] == '53') echo ' selected'?>>Cote D'Ivoire</option>
                                        <option value="54" <?php if($user['country'] == '54') echo ' selected'?>>Croatia</option>
                                        <option value="55" <?php if($user['country'] == '55') echo ' selected'?>>Cuba</option>
                                        <option value="56" <?php if($user['country'] == '56') echo ' selected'?>>Cyprus</option>
                                        <option value="57" <?php if($user['country'] == '57') echo ' selected'?>>Czech Republic</option>
                                        <option value="58" <?php if($user['country'] == '58') echo ' selected'?>>Denmark</option>
                                        <option value="59" <?php if($user['country'] == '59') echo ' selected'?>>Djibouti</option>
                                        <option value="60" <?php if($user['country'] == '60') echo ' selected'?>>Dominica</option>
                                        <option value="61" <?php if($user['country'] == '61') echo ' selected'?>>Dominican Republic</option>
                                        <option value="62" <?php if($user['country'] == '62') echo ' selected'?>>Ecuador</option>
                                        <option value="63" <?php if($user['country'] == '63') echo ' selected'?>>Egypt</option>
                                        <option value="64" <?php if($user['country'] == '64') echo ' selected'?>>El Salvador</option>
                                        <option value="65" <?php if($user['country'] == '65') echo ' selected'?>>Equatorial Guinea</option>
                                        <option value="66" <?php if($user['country'] == '66') echo ' selected'?>>Eritrea</option>
                                        <option value="67" <?php if($user['country'] == '67') echo ' selected'?>>Estonia</option>
                                        <option value="68" <?php if($user['country'] == '68') echo ' selected'?>>Ethiopia</option>
                                        <option value="69" <?php if($user['country'] == '69') echo ' selected'?>>Falkland Islands (Malvinas)</option>
                                        <option value="70" <?php if($user['country'] == '70') echo ' selected'?>>Faroe Islands</option>
                                        <option value="71" <?php if($user['country'] == '71') echo ' selected'?>>Fiji</option>
                                        <option value="72" <?php if($user['country'] == '72') echo ' selected'?>>Finland</option>
                                        <option value="73" <?php if($user['country'] == '73') echo ' selected'?>>France</option>
                                        <option value="74" <?php if($user['country'] == '74') echo ' selected'?>>French Guiana</option>
                                        <option value="75" <?php if($user['country'] == '75') echo ' selected'?>>French Polynesia</option>
                                        <option value="76" <?php if($user['country'] == '76') echo ' selected'?>>French Southern Territories</option>
                                        <option value="77" <?php if($user['country'] == '77') echo ' selected'?>>Gabon</option>
                                        <option value="78" <?php if($user['country'] == '78') echo ' selected'?>>Gambia</option>
                                        <option value="79" <?php if($user['country'] == '79') echo ' selected'?>>Georgia</option>
                                        <option value="80" <?php if($user['country'] == '80') echo ' selected'?>>Germany</option>
                                        <option value="81" <?php if($user['country'] == '81') echo ' selected'?>>Ghana</option>
                                        <option value="82" <?php if($user['country'] == '82') echo ' selected'?>>Gibraltar</option>
                                        <option value="83" <?php if($user['country'] == '83') echo ' selected'?>>Greece</option>
                                        <option value="84" <?php if($user['country'] == '84') echo ' selected'?>>Greenland</option>
                                        <option value="85" <?php if($user['country'] == '85') echo ' selected'?>>Grenada</option>
                                        <option value="86" <?php if($user['country'] == '86') echo ' selected'?>>Guadeloupe</option>
                                        <option value="87" <?php if($user['country'] == '87') echo ' selected'?>>Guam</option>
                                        <option value="88" <?php if($user['country'] == '88') echo ' selected'?>>Guatemala</option>
                                        <option value="89" <?php if($user['country'] == '89') echo ' selected'?>>Guinea</option>
                                        <option value="90" <?php if($user['country'] == '90') echo ' selected'?>>Guinea-Bissau</option>
                                        <option value="91" <?php if($user['country'] == '91') echo ' selected'?>>Guyana</option>
                                        <option value="92" <?php if($user['country'] == '92') echo ' selected'?>>Haiti</option>
                                        <option value="93" <?php if($user['country'] == '93') echo ' selected'?>>Heard Island and Mcdonald Islands</option>
                                        <option value="94" <?php if($user['country'] == '94') echo ' selected'?>>Holy See (Vatican City State)</option>
                                        <option value="95" <?php if($user['country'] == '95') echo ' selected'?>>Honduras</option>
                                        <option value="96" <?php if($user['country'] == '96') echo ' selected'?>>Hong Kong</option>
                                        <option value="97" <?php if($user['country'] == '97') echo ' selected'?>>Hungary</option>
                                        <option value="98" <?php if($user['country'] == '98') echo ' selected'?>>Iceland</option>
                                        <option value="99" <?php if($user['country'] == '99') echo ' selected'?>>India</option>
                                        <option value="100" <?php if($user['country'] == '100') echo ' selected'?>>Indonesia</option>
                                        <option value="101" <?php if($user['country'] == '101') echo ' selected'?>>Iran, Islamic Republic of</option>
                                        <option value="102" <?php if($user['country'] == '102') echo ' selected'?>>Iraq</option>
                                        <option value="103" <?php if($user['country'] == '103') echo ' selected'?>>Ireland</option>
                                        <option value="104" <?php if($user['country'] == '104') echo ' selected'?>>Israel</option>
                                        <option value="105" <?php if($user['country'] == '105') echo ' selected'?>>Italy</option>
                                        <option value="106" <?php if($user['country'] == '106') echo ' selected'?>>Jamaica</option>
                                        <option value="107" <?php if($user['country'] == '107') echo ' selected'?>>Japan</option>
                                        <option value="108" <?php if($user['country'] == '108') echo ' selected'?>>Jordan</option>
                                        <option value="109" <?php if($user['country'] == '109') echo ' selected'?>>Kazakhstan</option>
                                        <option value="110" <?php if($user['country'] == '110') echo ' selected'?>>Kenya</option>
                                        <option value="111" <?php if($user['country'] == '111') echo ' selected'?>>Kiribati</option>
                                        <option value="112" <?php if($user['country'] == '112') echo ' selected'?>>Korea, Democratic People's Republic of</option>
                                        <option value="113" <?php if($user['country'] == '113') echo ' selected'?>>Korea, Republic of</option>
                                        <option value="114" <?php if($user['country'] == '114') echo ' selected'?>>Kuwait</option>
                                        <option value="115" <?php if($user['country'] == '115') echo ' selected'?>>Kyrgyzstan</option>
                                        <option value="116" <?php if($user['country'] == '116') echo ' selected'?>>Lao People's Democratic Republic</option>
                                        <option value="117" <?php if($user['country'] == '117') echo ' selected'?>>Latvia</option>
                                        <option value="118" <?php if($user['country'] == '118') echo ' selected'?>>Lebanon</option>
                                        <option value="119" <?php if($user['country'] == '119') echo ' selected'?>>Lesotho</option>
                                        <option value="120" <?php if($user['country'] == '120') echo ' selected'?>>Liberia</option>
                                        <option value="121" <?php if($user['country'] == '121') echo ' selected'?>>Libyan Arab Jamahiriya</option>
                                        <option value="122" <?php if($user['country'] == '122') echo ' selected'?>>Liechtenstein</option>
                                        <option value="123" <?php if($user['country'] == '123') echo ' selected'?>>Lithuania</option>
                                        <option value="124" <?php if($user['country'] == '124') echo ' selected'?>>Luxembourg</option>
                                        <option value="125" <?php if($user['country'] == '125') echo ' selected'?>>Macao</option>
                                        <option value="126" <?php if($user['country'] == '126') echo ' selected'?>>Macedonia, the Former Yugoslav Republic of</option>
                                        <option value="127" <?php if($user['country'] == '127') echo ' selected'?>>Madagascar</option>
                                        <option value="128" <?php if($user['country'] == '128') echo ' selected'?>>Malawi</option>
                                        <option value="129" <?php if($user['country'] == '129') echo ' selected'?>>Malaysia</option>
                                        <option value="130" <?php if($user['country'] == '130') echo ' selected'?>>Maldives</option>
                                        <option value="131" <?php if($user['country'] == '131') echo ' selected'?>>Mali</option>
                                        <option value="132" <?php if($user['country'] == '132') echo ' selected'?>>Malta</option>
                                        <option value="133" <?php if($user['country'] == '133') echo ' selected'?>>Marshall Islands</option>
                                        <option value="134" <?php if($user['country'] == '134') echo ' selected'?>>Martinique</option>
                                        <option value="135" <?php if($user['country'] == '135') echo ' selected'?>>Mauritania</option>
                                        <option value="136" <?php if($user['country'] == '136') echo ' selected'?>>Mauritius</option>
                                        <option value="137" <?php if($user['country'] == '137') echo ' selected'?>>Mayotte</option>
                                        <option value="138" <?php if($user['country'] == '138') echo ' selected'?>>Mexico</option>
                                        <option value="139" <?php if($user['country'] == '139') echo ' selected'?>>Micronesia, Federated States of</option>
                                        <option value="140" <?php if($user['country'] == '140') echo ' selected'?>>Moldova, Republic of</option>
                                        <option value="141" <?php if($user['country'] == '141') echo ' selected'?>>Monaco</option>
                                        <option value="142" <?php if($user['country'] == '142') echo ' selected'?>>Mongolia</option>
                                        <option value="143" <?php if($user['country'] == '143') echo ' selected'?>>Montserrat</option>
                                        <option value="144" <?php if($user['country'] == '144') echo ' selected'?>>Morocco</option>
                                        <option value="145" <?php if($user['country'] == '145') echo ' selected'?>>Mozambique</option>
                                        <option value="146" <?php if($user['country'] == '146') echo ' selected'?>>Myanmar</option>
                                        <option value="147" <?php if($user['country'] == '147') echo ' selected'?>>Namibia</option>
                                        <option value="148" <?php if($user['country'] == '148') echo ' selected'?>>Nauru</option>
                                        <option value="149" <?php if($user['country'] == '149') echo ' selected'?>>Nepal</option>
                                        <option value="150" <?php if($user['country'] == '150') echo ' selected'?>>Netherlands</option>
                                        <option value="151" <?php if($user['country'] == '151') echo ' selected'?>>Netherlands Antilles</option>
                                        <option value="152" <?php if($user['country'] == '152') echo ' selected'?>>New Caledonia</option>
                                        <option value="153" <?php if($user['country'] == '153') echo ' selected'?>>New Zealand</option>
                                        <option value="154" <?php if($user['country'] == '154') echo ' selected'?>>Nicaragua</option>
                                        <option value="155" <?php if($user['country'] == '155') echo ' selected'?>>Niger</option>
                                        <option value="156" <?php if($user['country'] == '156') echo ' selected'?>>Nigeria</option>
                                        <option value="157" <?php if($user['country'] == '157') echo ' selected'?>>Niue</option>
                                        <option value="158" <?php if($user['country'] == '158') echo ' selected'?>>Norfolk Island</option>
                                        <option value="159" <?php if($user['country'] == '159') echo ' selected'?>>Northern Mariana Islands</option>
                                        <option value="160" <?php if($user['country'] == '160') echo ' selected'?>>Norway</option>
                                        <option value="161" <?php if($user['country'] == '161') echo ' selected'?>>Oman</option>
                                        <option value="162" <?php if($user['country'] == '162') echo ' selected'?>>Pakistan</option>
                                        <option value="163" <?php if($user['country'] == '163') echo ' selected'?>>Palau</option>
                                        <option value="164" <?php if($user['country'] == '164') echo ' selected'?>>Palestinian Territory, Occupied</option>
                                        <option value="165" <?php if($user['country'] == '165') echo ' selected'?>>Panama</option>
                                        <option value="166" <?php if($user['country'] == '166') echo ' selected'?>>Papua New Guinea</option>
                                        <option value="167" <?php if($user['country'] == '167') echo ' selected'?>>Paraguay</option>
                                        <option value="168" <?php if($user['country'] == '168') echo ' selected'?>>Peru</option>
                                        <option value="169" <?php if($user['country'] == '169') echo ' selected'?>>Philippines</option>
                                        <option value="170" <?php if($user['country'] == '170') echo ' selected'?>>Pitcairn</option>
                                        <option value="171" <?php if($user['country'] == '171') echo ' selected'?>>Poland</option>
                                        <option value="172" <?php if($user['country'] == '172') echo ' selected'?>>Portugal</option>
                                        <option value="173" <?php if($user['country'] == '173') echo ' selected'?>>Puerto Rico</option>
                                        <option value="174" <?php if($user['country'] == '174') echo ' selected'?>>Qatar</option>
                                        <option value="175" <?php if($user['country'] == '175') echo ' selected'?>>Reunion</option>
                                        <option value="176" <?php if($user['country'] == '176') echo ' selected'?>>Romania</option>
                                        <option value="177" <?php if($user['country'] == '177') echo ' selected'?>>Russian Federation</option>
                                        <option value="178" <?php if($user['country'] == '178') echo ' selected'?>>Rwanda</option>
                                        <option value="179" <?php if($user['country'] == '179') echo ' selected'?>>Saint Helena</option>
                                        <option value="180" <?php if($user['country'] == '180') echo ' selected'?>>Saint Kitts and Nevis</option>
                                        <option value="181" <?php if($user['country'] == '181') echo ' selected'?>>Saint Lucia</option>
                                        <option value="182" <?php if($user['country'] == '182') echo ' selected'?>>Saint Pierre and Miquelon</option>
                                        <option value="183" <?php if($user['country'] == '183') echo ' selected'?>>Saint Vincent and the Grenadines</option>
                                        <option value="184" <?php if($user['country'] == '184') echo ' selected'?>>Samoa</option>
                                        <option value="185" <?php if($user['country'] == '185') echo ' selected'?>>San Marino</option>
                                        <option value="186" <?php if($user['country'] == '186') echo ' selected'?>>Sao Tome and Principe</option>
                                        <option value="187" <?php if($user['country'] == '187') echo ' selected'?>>Saudi Arabia</option>
                                        <option value="188" <?php if($user['country'] == '188') echo ' selected'?>>Senegal</option>
                                        <option value="189" <?php if($user['country'] == '189') echo ' selected'?>>Serbia and Montenegro</option>
                                        <option value="190" <?php if($user['country'] == '190') echo ' selected'?>>Seychelles</option>
                                        <option value="191" <?php if($user['country'] == '191') echo ' selected'?>>Sierra Leone</option>
                                        <option value="192" <?php if($user['country'] == '192') echo ' selected'?>>Singapore</option>
                                        <option value="193" <?php if($user['country'] == '193') echo ' selected'?>>Slovakia</option>
                                        <option value="194" <?php if($user['country'] == '194') echo ' selected'?>>Slovenia</option>
                                        <option value="195" <?php if($user['country'] == '195') echo ' selected'?>>Solomon Islands</option>
                                        <option value="196" <?php if($user['country'] == '196') echo ' selected'?>>Somalia</option>
                                        <option value="197" <?php if($user['country'] == '197') echo ' selected'?>>South Africa</option>
                                        <option value="198" <?php if($user['country'] == '198') echo ' selected'?>>South Georgia and the South Sandwich Islands</option>
                                        <option value="199" <?php if($user['country'] == '199') echo ' selected'?>>Spain</option>
                                        <option value="200" <?php if($user['country'] == '200') echo ' selected'?>>Sri Lanka</option>
                                        <option value="201" <?php if($user['country'] == '201') echo ' selected'?>>Sudan</option>
                                        <option value="202" <?php if($user['country'] == '202') echo ' selected'?>>Suriname</option>
                                        <option value="203" <?php if($user['country'] == '203') echo ' selected'?>>Svalbard and Jan Mayen</option>
                                        <option value="204" <?php if($user['country'] == '204') echo ' selected'?>>Swaziland</option>
                                        <option value="205" <?php if($user['country'] == '205') echo ' selected'?>>Sweden</option>
                                        <option value="206" <?php if($user['country'] == '206') echo ' selected'?>>Switzerland</option>
                                        <option value="207" <?php if($user['country'] == '207') echo ' selected'?>>Syrian Arab Republic</option>
                                        <option value="208" <?php if($user['country'] == '208') echo ' selected'?>>Taiwan, Province of China</option>
                                        <option value="209" <?php if($user['country'] == '209') echo ' selected'?>>Tajikistan</option>
                                        <option value="210" <?php if($user['country'] == '210') echo ' selected'?>>Tanzania, United Republic of</option>
                                        <option value="211" <?php if($user['country'] == '211') echo ' selected'?>>Thailand</option>
                                        <option value="212" <?php if($user['country'] == '212') echo ' selected'?>>Timor-Leste</option>
                                        <option value="213" <?php if($user['country'] == '213') echo ' selected'?>>Togo</option>
                                        <option value="214" <?php if($user['country'] == '214') echo ' selected'?>>Tokelau</option>
                                        <option value="215" <?php if($user['country'] == '215') echo ' selected'?>>Tonga</option>
                                        <option value="216" <?php if($user['country'] == '216') echo ' selected'?>>Trinidad and Tobago</option>
                                        <option value="217" <?php if($user['country'] == '217') echo ' selected'?>>Tunisia</option>
                                        <option value="218" <?php if($user['country'] == '218') echo ' selected'?>>Turkey</option>
                                        <option value="219" <?php if($user['country'] == '219') echo ' selected'?>>Turkmenistan</option>
                                        <option value="220" <?php if($user['country'] == '220') echo ' selected'?>>Turks and Caicos Islands</option>
                                        <option value="221" <?php if($user['country'] == '221') echo ' selected'?>>Tuvalu</option>
                                        <option value="222" <?php if($user['country'] == '222') echo ' selected'?>>Uganda</option>
                                        <option value="223" <?php if($user['country'] == '223') echo ' selected'?>>Ukraine</option>
                                        <option value="224" <?php if($user['country'] == '224') echo ' selected'?>>United Arab Emirates</option>
                                        <option value="225" <?php if($user['country'] == '225') echo ' selected'?>>United Kingdom</option>
                                        <option value="226" <?php if($user['country'] == '226') echo ' selected'?>>United States</option>
                                        <option value="227" <?php if($user['country'] == '227') echo ' selected'?>>United States Minor Outlying Islands</option>
                                        <option value="228" <?php if($user['country'] == '228') echo ' selected'?>>Uruguay</option>
                                        <option value="229" <?php if($user['country'] == '229') echo ' selected'?>>Uzbekistan</option>
                                        <option value="230" <?php if($user['country'] == '230') echo ' selected'?>>Vanuatu</option>
                                        <option value="231" <?php if($user['country'] == '231') echo ' selected'?>>Venezuela</option>
                                        <option value="232" <?php if($user['country'] == '232') echo ' selected'?>>Viet Nam</option>
                                        <option value="233" <?php if($user['country'] == '233') echo ' selected'?>>Virgin Islands, British</option>
                                        <option value="234" <?php if($user['country'] == '234') echo ' selected'?>>Virgin Islands, U.s.</option>
                                        <option value="235" <?php if($user['country'] == '235') echo ' selected'?>>Wallis and Futuna</option>
                                        <option value="236" <?php if($user['country'] == '236') echo ' selected'?>>Western Sahara</option>
                                        <option value="237" <?php if($user['country'] == '237') echo ' selected'?>>Yemen</option>
                                        <option value="238" <?php if($user['country'] == '238') echo ' selected'?>>Zambia</option>
                                        <option value="239" <?php if($user['country'] == '239') echo ' selected'?>>Zimbabwe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address"> <?php echo $this->lang->line('address');?>  </label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Ex: Dubai" value="<?php echo $user['address'];?>">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group hide">
                                    <label for="languageSelection"> <?php echo $this->lang->line('language');?>  </label>
                                    <select id="languageSelection" name="languageSelection" class="form-control" aria-invalid="false">
                                        <option value="1">English</option>
                                        <option value="2">Arabic</option>
                                    </select>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <div class="col-md-12 hide" >
                                <div class="form-group">
                                    <label class="checkbox-inline">
                                        <div class="checker" id="uniform-changePasswordCheck"><span><input type="checkbox" id="changePasswordCheck" name="changePasswordCheck" value="yes"></span></div>  Change Password
                                    </label>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <div class="col-md-4 hide">
                                <div class="form-group ">
                                    <label class="control-label" for="currentPassword"> <?php echo $this->lang->line('current_password');?>  </label>
                                    <input type="password" class="form-control" id="currentPassword" name="currentPassword" value="" disabled="">
                                </div>
                            </div>

                            <div class="col-md-4 hide">
                                <div class="form-group ">
                                    <label class="control-label" for="newPassword"> <?php echo $this->lang->line('new_password');?>  </label>
                                    <input type="password" class="form-control" id="newPassword" name="newPassword" value="" disabled="">
                                </div>
                            </div>

                            <div class="col-md-4 hide">
                                <div class="form-group ">
                                    <label class="control-label" for="confirmPassword"> <?php echo $this->lang->line('retype_password');?>  </label>
                                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" value="" disabled="">
                                </div>
                            </div>

                            <div class="clearfix"></div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="form-actions">
                            <button type="submit" class="btn green"><i class="fa fa-save"></i> <?php echo $this->lang->line('modal_save');?>  </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>