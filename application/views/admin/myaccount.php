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
                <h2><?php echo $this->lang->line('view')." ".$this->lang->line('side_my_account');?></h2>
            </div>
        </div>
    </div>
    <div>
        <div class="col-md-12">

            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#tab_profile" data-toggle="tab" aria-expanded="true">
                        <?php echo $this->lang->line('my_profile');?>   </a>
                </li>
                <li class="">
                    <a href="#tab_notification" data-toggle="tab" aria-expanded="false">
                        <?php echo $this->lang->line('notifications');?>   </a>
                </li>

            </ul>
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
                                    <label for="countrySelection"> <?php echo $this->lang->line('country');?>   </label>
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
                            <button type="submit" class="btn green"><i class="fa fa-save"></i> Save  </button>
                        </div>
                    </form>
                </div>

                <div class="tab-pane fade" id="tab_notification">
                    <form id="form-notification-settings" name="form-notification-settings" class="horizontal-form" role="form" method="POST" action="saveMyProfile">
                         <input type="hidden" name="accountType" value="2">
                        <div class="form-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="timezoneSelection"> Time Zone  </label>
                                    <select id="timezoneSelection" name="timezoneSelection" class="form-control">
                                        <option value="1,+00:00" <?php if($user['timezone'] == '1,+00:00') echo ' selected'?>>Africa/Abidjan</option>
                                        <option value="2,+00:00" <?php if($user['timezone'] == '2,+00:00') echo ' selected'?>>Africa/Accra</option>
                                        <option value="3,+03:00" <?php if($user['timezone'] == '3,+03:00') echo ' selected'?>>Africa/Addis_Ababa</option>
                                        <option value="4,+01:00" <?php if($user['timezone'] == '4,+01:00') echo ' selected'?>>Africa/Algiers</option>
                                        <option value="5,+03:00" <?php if($user['timezone'] == '5,+03:00') echo ' selected'?>>Africa/Asmara</option>
                                        <option value="6,+03:00" <?php if($user['timezone'] == '6,+03:00') echo ' selected'?>>Africa/Asmera</option>
                                        <option value="7,+00:00" <?php if($user['timezone'] == '7,+00:00') echo ' selected'?>>Africa/Bamako</option>
                                        <option value="8,+01:00" <?php if($user['timezone'] == '8,+01:00') echo ' selected'?>>Africa/Bangui</option>
                                        <option value="9,+00:00" <?php if($user['timezone'] == '9,+00:00') echo ' selected'?>>Africa/Banjul</option>
                                        <option value="10,+00:00" <?php if($user['timezone'] == '10,+00:00') echo ' selected'?>>Africa/Bissau</option>
                                        <option value="11,+02:00" <?php if($user['timezone'] == '11,+02:00') echo ' selected'?>>Africa/Blantyre</option>
                                        <option value="12,+01:00" <?php if($user['timezone'] == '12,+01:00') echo ' selected'?>>Africa/Brazzaville</option>
                                        <option value="13,+02:00" <?php if($user['timezone'] == '13,+02:00') echo ' selected'?>>Africa/Bujumbura</option>
                                        <option value="14,+02:00" <?php if($user['timezone'] == '14,+02:00') echo ' selected'?>>Africa/Cairo</option>
                                        <option value="15,+00:00" <?php if($user['timezone'] == '15,+00:00') echo ' selected'?>>Africa/Casablanca</option>
                                        <option value="16,+01:00" <?php if($user['timezone'] == '16,+01:00') echo ' selected'?>>Africa/Ceuta</option>
                                        <option value="17,+00:00" <?php if($user['timezone'] == '17,+00:00') echo ' selected'?>>Africa/Conakry</option>
                                        <option value="18,+00:00" <?php if($user['timezone'] == '18,+00:00') echo ' selected'?>>Africa/Dakar</option>
                                        <option value="19,+03:00" <?php if($user['timezone'] == '19,+03:00') echo ' selected'?>>Africa/Dar_es_Salaam</option>
                                        <option value="20,+03:00" <?php if($user['timezone'] == '20,+03:00') echo ' selected'?>>Africa/Djibouti</option>
                                        <option value="21,+01:00" <?php if($user['timezone'] == '21,+01:00') echo ' selected'?>>Africa/Douala</option>
                                        <option value="22,+00:00" <?php if($user['timezone'] == '22,+00:00') echo ' selected'?>>Africa/El_Aaiun</option>
                                        <option value="23,+00:00" <?php if($user['timezone'] == '23,+00:00') echo ' selected'?>>Africa/Freetown</option>
                                        <option value="24,+02:00" <?php if($user['timezone'] == '24,+02:00') echo ' selected'?>>Africa/Gaborone</option>
                                        <option value="25,+02:00" <?php if($user['timezone'] == '25,+02:00') echo ' selected'?>>Africa/Harare</option>
                                        <option value="26,+02:00" <?php if($user['timezone'] == '26,+02:00') echo ' selected'?>>Africa/Johannesburg</option>
                                        <option value="27,+03:00" <?php if($user['timezone'] == '27,+03:00') echo ' selected'?>>Africa/Juba</option>
                                        <option value="28,+03:00" <?php if($user['timezone'] == '28,+03:00') echo ' selected'?>>Africa/Kampala</option>
                                        <option value="29,+03:00" <?php if($user['timezone'] == '29,+03:00') echo ' selected'?>>Africa/Khartoum</option>
                                        <option value="30,+02:00" <?php if($user['timezone'] == '') echo ' selected'?>>Africa/Kigali</option>
                                        <option value="31,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Africa/Kinshasa</option>
                                        <option value="32,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Africa/Lagos</option>
                                        <option value="33,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Africa/Libreville</option>
                                        <option value="34,+00:00" <?php if($user['timezone'] == '') echo ' selected'?>>Africa/Lome</option>
                                        <option value="35,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Africa/Luanda</option>
                                        <option value="36,+02:00" <?php if($user['timezone'] == '') echo ' selected'?>>Africa/Lubumbashi</option>
                                        <option value="37,+02:00" <?php if($user['timezone'] == '') echo ' selected'?>>Africa/Lusaka</option>
                                        <option value="38,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Africa/Malabo</option>
                                        <option value="39,+02:00" <?php if($user['timezone'] == '') echo ' selected'?>>Africa/Maputo</option>
                                        <option value="40,+02:00" <?php if($user['timezone'] == '') echo ' selected'?>>Africa/Maseru</option>
                                        <option value="41,+02:00" <?php if($user['timezone'] == '') echo ' selected'?>>Africa/Mbabane</option>
                                        <option value="42,+03:00" <?php if($user['timezone'] == '') echo ' selected'?>>Africa/Mogadishu</option>
                                        <option value="43,+00:00" <?php if($user['timezone'] == '') echo ' selected'?>>Africa/Monrovia</option>
                                        <option value="44,+03:00" <?php if($user['timezone'] == '') echo ' selected'?>>Africa/Nairobi</option>
                                        <option value="45,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Africa/Ndjamena</option>
                                        <option value="46,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Africa/Niamey</option>
                                        <option value="47,+00:00" <?php if($user['timezone'] == '') echo ' selected'?>>Africa/Nouakchott</option>
                                        <option value="48,+00:00" <?php if($user['timezone'] == '') echo ' selected'?>>Africa/Ouagadougou</option>
                                        <option value="49,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Africa/Porto-Novo</option>
                                        <option value="50,+00:00" <?php if($user['timezone'] == '') echo ' selected'?>>Africa/Sao_Tome</option>
                                        <option value="51,+00:00" <?php if($user['timezone'] == '') echo ' selected'?>>Africa/Timbuktu</option>
                                        <option value="52,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Africa/Tripoli</option>
                                        <option value="53,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Africa/Tunis</option>
                                        <option value="54,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Africa/Windhoek</option>
                                        <option value="55,−09:00" <?php if($user['timezone'] == '') echo ' selected'?>>AKST9AKDT</option>
                                        <option value="56,−10:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Adak</option>
                                        <option value="57,−09:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Anchorage</option>
                                        <option value="58,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Anguilla</option>
                                        <option value="59,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Antigua</option>
                                        <option value="60,−03:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Araguaina</option>
                                        <option value="61,−03:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Argentina/Buenos_Aires</option>
                                        <option value="62,−03:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Argentina/Catamarca</option>
                                        <option value="63,−03:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Argentina/ComodRivadavia</option>
                                        <option value="64,−03:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Argentina/Cordoba</option>
                                        <option value="65,−03:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Argentina/Jujuy</option>
                                        <option value="66,−03:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Argentina/La_Rioja</option>
                                        <option value="67,−03:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Argentina/Mendoza</option>
                                        <option value="68,−03:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Argentina/Rio_Gallegos</option>
                                        <option value="69,−03:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Argentina/Salta</option>
                                        <option value="70,−03:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Argentina/San_Juan</option>
                                        <option value="71,−03:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Argentina/San_Luis</option>
                                        <option value="72,−03:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Argentina/Tucuman</option>
                                        <option value="73,−03:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Argentina/Ushuaia</option>
                                        <option value="74,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Aruba</option>
                                        <option value="75,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Asuncion</option>
                                        <option value="76,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Atikokan</option>
                                        <option value="77,−10:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Atka</option>
                                        <option value="78,−03:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Bahia</option>
                                        <option value="79,−06:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Bahia_Banderas</option>
                                        <option value="80,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Barbados</option>
                                        <option value="81,−03:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Belem</option>
                                        <option value="82,−06:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Belize</option>
                                        <option value="83,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Blanc-Sablon</option>
                                        <option value="84,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Boa_Vista</option>
                                        <option value="85,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Bogota</option>
                                        <option value="86,−07:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Boise</option>
                                        <option value="87,−03:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Buenos_Aires</option>
                                        <option value="88,−07:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Cambridge_Bay</option>
                                        <option value="89,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Campo_Grande</option>
                                        <option value="90,−06:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Cancun</option>
                                        <option value="91,−04:30">America/Caracas</option>
                                        <option value="92,−03:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Catamarca</option>
                                        <option value="93,−03:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Cayenne</option>
                                        <option value="94,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Cayman</option>
                                        <option value="95,−06:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Chicago</option>
                                        <option value="96,−07:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Chihuahua</option>
                                        <option value="97,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Coral_Harbour</option>
                                        <option value="98,−03:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Cordoba</option>
                                        <option value="99,−06:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Costa_Rica</option>
                                        <option value="100,−07:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Creston</option>
                                        <option value="101,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Cuiaba</option>
                                        <option value="102,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Curacao</option>
                                        <option value="103,+00:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Danmarkshavn</option>
                                        <option value="104,−08:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Dawson</option>
                                        <option value="105,−07:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Dawson_Creek</option>
                                        <option value="106,−07:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Denver</option>
                                        <option value="107,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Detroit</option>
                                        <option value="108,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Dominica</option>
                                        <option value="109,−07:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Edmonton</option>
                                        <option value="110,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Eirunepe</option>
                                        <option value="111,−06:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/El_Salvador</option>
                                        <option value="112,−08:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Ensenada</option>
                                        <option value="113,−03:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Fortaleza</option>
                                        <option value="114,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Fort_Wayne</option>
                                        <option value="115,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Glace_Bay</option>
                                        <option value="116,−03:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Godthab</option>
                                        <option value="117,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Goose_Bay</option>
                                        <option value="118,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Grand_Turk</option>
                                        <option value="119,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Grenada</option>
                                        <option value="120,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Guadeloupe</option>
                                        <option value="121,−06:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Guatemala</option>
                                        <option value="122,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Guayaquil</option>
                                        <option value="123,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Guyana</option>
                                        <option value="124,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Halifax</option>
                                        <option value="125,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Havana</option>
                                        <option value="126,−07:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Hermosillo</option>
                                        <option value="127,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Indiana/Indianapolis</option>
                                        <option value="128,−06:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Indiana/Knox</option>
                                        <option value="129,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Indiana/Marengo</option>
                                        <option value="130,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Indiana/Petersburg</option>
                                        <option value="131,−06:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Indiana/Tell_City</option>
                                        <option value="132,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Indiana/Vevay</option>
                                        <option value="133,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Indiana/Vincennes</option>
                                        <option value="134,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Indiana/Winamac</option>
                                        <option value="135,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Indianapolis</option>
                                        <option value="136,−07:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Inuvik</option>
                                        <option value="137,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Iqaluit</option>
                                        <option value="138,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Jamaica</option>
                                        <option value="139,−03:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Jujuy</option>
                                        <option value="140,−09:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Juneau</option>
                                        <option value="141,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Kentucky/Louisville</option>
                                        <option value="142,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Kentucky/Monticello</option>
                                        <option value="143,−06:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Knox_IN</option>
                                        <option value="144,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Kralendijk</option>
                                        <option value="145,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/La_Paz</option>
                                        <option value="146,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Lima</option>
                                        <option value="147,−08:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Los_Angeles</option>
                                        <option value="148,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Louisville</option>
                                        <option value="149,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Lower_Princes</option>
                                        <option value="150,−03:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Maceio</option>
                                        <option value="151,−06:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Managua</option>
                                        <option value="152,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Manaus</option>
                                        <option value="153,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Marigot</option>
                                        <option value="154,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Martinique</option>
                                        <option value="155,−06:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Matamoros</option>
                                        <option value="156,−07:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Mazatlan</option>
                                        <option value="157,−03:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Mendoza</option>
                                        <option value="158,−06:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Menominee</option>
                                        <option value="159,−06:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Merida</option>
                                        <option value="160,−08:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Metlakatla</option>
                                        <option value="161,−06:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Mexico_City</option>
                                        <option value="162,−03:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Miquelon</option>
                                        <option value="163,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Moncton</option>
                                        <option value="164,−06:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Monterrey</option>
                                        <option value="165,−03:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Montevideo</option>
                                        <option value="166,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Montreal</option>
                                        <option value="167,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Montserrat</option>
                                        <option value="168,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Nassau</option>
                                        <option value="169,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/New_York</option>
                                        <option value="170,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Nipigon</option>
                                        <option value="171,−09:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Nome</option>
                                        <option value="172,−02:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Noronha</option>
                                        <option value="173,−06:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/North_Dakota/Beulah</option>
                                        <option value="174,−06:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/North_Dakota/Center</option>
                                        <option value="175,−06:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/North_Dakota/New_Salem</option>
                                        <option value="176,−07:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Ojinaga</option>
                                        <option value="177,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Panama</option>
                                        <option value="178,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Pangnirtung</option>
                                        <option value="179,−03:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Paramaribo</option>
                                        <option value="180,−07:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Phoenix</option>
                                        <option value="181,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Port-au-Prince</option>
                                        <option value="182,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Porto_Acre</option>
                                        <option value="183,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Porto_Velho</option>
                                        <option value="184,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Port_of_Spain</option>
                                        <option value="185,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Puerto_Rico</option>
                                        <option value="186,−06:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Rainy_River</option>
                                        <option value="187,−06:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Rankin_Inlet</option>
                                        <option value="188,−03:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Recife</option>
                                        <option value="189,−06:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Regina</option>
                                        <option value="190,−06:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Resolute</option>
                                        <option value="191,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Rio_Branco</option>
                                        <option value="192,−03:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Rosario</option>
                                        <option value="193,−03:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Santarem</option>
                                        <option value="194,−08:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Santa_Isabel</option>
                                        <option value="195,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Santiago</option>
                                        <option value="196,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Santo_Domingo</option>
                                        <option value="197,−03:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Sao_Paulo</option>
                                        <option value="198,−01:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Scoresbysund</option>
                                        <option value="199,−07:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Shiprock</option>
                                        <option value="200,−09:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Sitka</option>
                                        <option value="201,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/St_Barthelemy</option>
                                        <option value="202,−03:30">America/St_Johns</option>
                                        <option value="203,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/St_Kitts</option>
                                        <option value="204,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/St_Lucia</option>
                                        <option value="205,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/St_Thomas</option>
                                        <option value="206,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/St_Vincent</option>
                                        <option value="207,−06:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Swift_Current</option>
                                        <option value="208,−06:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Tegucigalpa</option>
                                        <option value="209,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Thule</option>
                                        <option value="210,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Thunder_Bay</option>
                                        <option value="211,−08:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Tijuana</option>
                                        <option value="212,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Toronto</option>
                                        <option value="213,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Tortola</option>
                                        <option value="214,−08:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Vancouver</option>
                                        <option value="215,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Virgin</option>
                                        <option value="216,−08:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Whitehorse</option>
                                        <option value="217,−06:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Winnipeg</option>
                                        <option value="218,−09:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Yakutat</option>
                                        <option value="219,−07:00" <?php if($user['timezone'] == '') echo ' selected'?>>America/Yellowknife</option>
                                        <option value="220,+11:00" <?php if($user['timezone'] == '') echo ' selected'?>>Antarctica/Casey</option>
                                        <option value="221,+05:00" <?php if($user['timezone'] == '') echo ' selected'?>>Antarctica/Davis</option>
                                        <option value="222,+10:00" <?php if($user['timezone'] == '') echo ' selected'?>>Antarctica/DumontDUrville</option>
                                        <option value="223,+11:00" <?php if($user['timezone'] == '') echo ' selected'?>>Antarctica/Macquarie</option>
                                        <option value="224,+05:00" <?php if($user['timezone'] == '') echo ' selected'?>>Antarctica/Mawson</option>
                                        <option value="225,+12:00" <?php if($user['timezone'] == '') echo ' selected'?>>Antarctica/McMurdo</option>
                                        <option value="226,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>Antarctica/Palmer</option>
                                        <option value="227,−03:00" <?php if($user['timezone'] == '') echo ' selected'?>>Antarctica/Rothera</option>
                                        <option value="228,+12:00" <?php if($user['timezone'] == '') echo ' selected'?>>Antarctica/South_Pole</option>
                                        <option value="229,+03:00" <?php if($user['timezone'] == '') echo ' selected'?>>Antarctica/Syowa</option>
                                        <option value="230,+06:00" <?php if($user['timezone'] == '') echo ' selected'?>>Antarctica/Vostok</option>
                                        <option value="231,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Arctic/Longyearbyen</option>
                                        <option value="232,+03:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Aden</option>
                                        <option value="233,+06:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Almaty</option>
                                        <option value="234,+03:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Amman</option>
                                        <option value="235,+12:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Anadyr</option>
                                        <option value="236,+05:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Aqtau</option>
                                        <option value="237,+05:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Aqtobe</option>
                                        <option value="238,+05:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Ashgabat</option>
                                        <option value="239,+05:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Ashkhabad</option>
                                        <option value="240,+03:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Baghdad</option>
                                        <option value="241,+03:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Bahrain</option>
                                        <option value="242,+04:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Baku</option>
                                        <option value="243,+07:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Bangkok</option>
                                        <option value="244,+02:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Beirut</option>
                                        <option value="245,+06:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Bishkek</option>
                                        <option value="246,+08:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Brunei</option>
                                        <option value="247,+05:30">Asia/Calcutta</option>
                                        <option value="248,+08:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Choibalsan</option>
                                        <option value="249,+08:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Chongqing</option>
                                        <option value="250,+08:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Chungking</option>
                                        <option value="251,+05:30">Asia/Colombo</option>
                                        <option value="252,+06:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Dacca</option>
                                        <option value="253,+02:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Damascus</option>
                                        <option value="254,+06:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Dhaka</option>
                                        <option value="255,+09:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Dili</option>
                                        <option value="256,+04:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Dubai</option>
                                        <option value="257,+05:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Dushanbe</option>
                                        <option value="258,+02:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Gaza</option>
                                        <option value="259,+08:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Harbin</option>
                                        <option value="260,+02:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Hebron</option>
                                        <option value="261,+08:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Hong_Kong</option>
                                        <option value="262,+07:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Hovd</option>
                                        <option value="263,+07:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Ho_Chi_Minh</option>
                                        <option value="264,+09:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Irkutsk</option>
                                        <option value="265,+02:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Istanbul</option>
                                        <option value="266,+07:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Jakarta</option>
                                        <option value="267,+09:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Jayapura</option>
                                        <option value="268,+02:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Jerusalem</option>
                                        <option value="269,+04:30">Asia/Kabul</option>
                                        <option value="270,+12:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Kamchatka</option>
                                        <option value="271,+05:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Karachi</option>
                                        <option value="272,+08:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Kashgar</option>
                                        <option value="273,+05:45">Asia/Kathmandu</option>
                                        <option value="274,+05:45">Asia/Katmandu</option>
                                        <option value="275,+05:30">Asia/Kolkata</option>
                                        <option value="276,+08:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Krasnoyarsk</option>
                                        <option value="277,+08:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Kuala_Lumpur</option>
                                        <option value="278,+08:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Kuching</option>
                                        <option value="279,+03:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Kuwait</option>
                                        <option value="280,+08:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Macao</option>
                                        <option value="281,+08:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Macau</option>
                                        <option value="282,+12:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Magadan</option>
                                        <option value="283,+08:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Makassar</option>
                                        <option value="284,+08:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Manila</option>
                                        <option value="285,+04:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Muscat</option>
                                        <option value="286,+02:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Nicosia</option>
                                        <option value="287,+07:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Novokuznetsk</option>
                                        <option value="288,+07:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Novosibirsk</option>
                                        <option value="289,+07:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Omsk</option>
                                        <option value="290,+05:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Oral</option>
                                        <option value="291,+07:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Phnom_Penh</option>
                                        <option value="292,+07:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Pontianak</option>
                                        <option value="293,+09:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Pyongyang</option>
                                        <option value="294,+03:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Qatar</option>
                                        <option value="295,+06:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Qyzylorda</option>
                                        <option value="296,+06:30">Asia/Rangoon</option>
                                        <option value="297,+03:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Riyadh</option>
                                        <option value="298,+07:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Saigon</option>
                                        <option value="299,+11:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Sakhalin</option>
                                        <option value="300,+05:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Samarkand</option>
                                        <option value="301,+09:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Seoul</option>
                                        <option value="302,+08:00" <?php if($user['timezone'] == '302,+08:00') echo ' selected'?>>Asia/Shanghai</option>
                                        <option value="303,+08:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Singapore</option>
                                        <option value="304,+08:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Taipei</option>
                                        <option value="305,+05:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Tashkent</option>
                                        <option value="306,+04:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Tbilisi</option>
                                        <option value="307,+03:30">Asia/Tehran</option>
                                        <option value="308,+02:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Tel_Aviv</option>
                                        <option value="309,+06:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Thimbu</option>
                                        <option value="310,+06:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Thimphu</option>
                                        <option value="311,+09:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Tokyo</option>
                                        <option value="312,+08:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Ujung_Pandang</option>
                                        <option value="313,+08:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Ulaanbaatar</option>
                                        <option value="314,+08:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Ulan_Bator</option>
                                        <option value="315,+08:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Urumqi</option>
                                        <option value="316,+07:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Vientiane</option>
                                        <option value="317,+11:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Vladivostok</option>
                                        <option value="318,+10:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Yakutsk</option>
                                        <option value="319,+06:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Yekaterinburg</option>
                                        <option value="320,+04:00" <?php if($user['timezone'] == '') echo ' selected'?>>Asia/Yerevan</option>
                                        <option value="321,−01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Atlantic/Azores</option>
                                        <option value="322,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>Atlantic/Bermuda</option>
                                        <option value="323,+00:00" <?php if($user['timezone'] == '') echo ' selected'?>>Atlantic/Canary</option>
                                        <option value="324,−01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Atlantic/Cape_Verde</option>
                                        <option value="325,+00:00" <?php if($user['timezone'] == '') echo ' selected'?>>Atlantic/Faeroe</option>
                                        <option value="326,+00:00" <?php if($user['timezone'] == '') echo ' selected'?>>Atlantic/Faroe</option>
                                        <option value="327,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Atlantic/Jan_Mayen</option>
                                        <option value="328,+00:00" <?php if($user['timezone'] == '') echo ' selected'?>>Atlantic/Madeira</option>
                                        <option value="329,+00:00" <?php if($user['timezone'] == '') echo ' selected'?>>Atlantic/Reykjavik</option>
                                        <option value="330,−02:00" <?php if($user['timezone'] == '') echo ' selected'?>>Atlantic/South_Georgia</option>
                                        <option value="331,−03:00" <?php if($user['timezone'] == '') echo ' selected'?>>Atlantic/Stanley</option>
                                        <option value="332,+00:00" <?php if($user['timezone'] == '') echo ' selected'?>>Atlantic/St_Helena</option>
                                        <option value="333,+10:00" <?php if($user['timezone'] == '') echo ' selected'?>>Australia/ACT</option>
                                        <option value="334,+09:30">Australia/Adelaide</option>
                                        <option value="335,+10:00" <?php if($user['timezone'] == '') echo ' selected'?>>Australia/Brisbane</option>
                                        <option value="336,+09:30">Australia/Broken_Hill</option>
                                        <option value="337,+10:00" <?php if($user['timezone'] == '') echo ' selected'?>>Australia/Canberra</option>
                                        <option value="338,+10:00" <?php if($user['timezone'] == '') echo ' selected'?>>Australia/Currie</option>
                                        <option value="339,+09:30">Australia/Darwin</option>
                                        <option value="340,+08:45">Australia/Eucla</option>
                                        <option value="341,+10:00" <?php if($user['timezone'] == '') echo ' selected'?>>Australia/Hobart</option>
                                        <option value="342,+10:30">Australia/LHI</option>
                                        <option value="343,+10:00" <?php if($user['timezone'] == '') echo ' selected'?>>Australia/Lindeman</option>
                                        <option value="344,+10:30">Australia/Lord_Howe</option>
                                        <option value="345,+10:00" <?php if($user['timezone'] == '') echo ' selected'?>>Australia/Melbourne</option>
                                        <option value="346,+09:30">Australia/North</option>
                                        <option value="347,+10:00" <?php if($user['timezone'] == '') echo ' selected'?>>Australia/NSW</option>
                                        <option value="348,+08:00" <?php if($user['timezone'] == '') echo ' selected'?>>Australia/Perth</option>
                                        <option value="349,+10:00" <?php if($user['timezone'] == '') echo ' selected'?>>Australia/Queensland</option>
                                        <option value="350,+09:30">Australia/South</option>
                                        <option value="351,+10:00" <?php if($user['timezone'] == '') echo ' selected'?>>Australia/Sydney</option>
                                        <option value="352,+10:00" <?php if($user['timezone'] == '') echo ' selected'?>>Australia/Tasmania</option>
                                        <option value="353,+10:00" <?php if($user['timezone'] == '') echo ' selected'?>>Australia/Victoria</option>
                                        <option value="354,+08:00" <?php if($user['timezone'] == '') echo ' selected'?>>Australia/West</option>
                                        <option value="355,+09:30">Australia/Yancowinna</option>
                                        <option value="356,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>Brazil/Acre</option>
                                        <option value="357,−02:00" <?php if($user['timezone'] == '') echo ' selected'?>>Brazil/DeNoronha</option>
                                        <option value="358,−03:00" <?php if($user['timezone'] == '') echo ' selected'?>>Brazil/East</option>
                                        <option value="359,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>Brazil/West</option>
                                        <option value="360,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>Canada/Atlantic</option>
                                        <option value="361,−06:00" <?php if($user['timezone'] == '') echo ' selected'?>>Canada/Central</option>
                                        <option value="362,−06:00" <?php if($user['timezone'] == '') echo ' selected'?>>Canada/East-Saskatchewan</option>
                                        <option value="363,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>Canada/Eastern</option>
                                        <option value="364,−07:00" <?php if($user['timezone'] == '') echo ' selected'?>>Canada/Mountain</option>
                                        <option value="365,−03:30">Canada/Newfoundland</option>
                                        <option value="366,−08:00" <?php if($user['timezone'] == '') echo ' selected'?>>Canada/Pacific</option>
                                        <option value="367,−06:00" <?php if($user['timezone'] == '') echo ' selected'?>>Canada/Saskatchewan</option>
                                        <option value="368,−08:00" <?php if($user['timezone'] == '') echo ' selected'?>>Canada/Yukon</option>
                                        <option value="369,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>CET</option>
                                        <option value="370,−04:00" <?php if($user['timezone'] == '') echo ' selected'?>>Chile/Continental</option>
                                        <option value="371,−06:00" <?php if($user['timezone'] == '') echo ' selected'?>>Chile/EasterIsland</option>
                                        <option value="372,−06:00" <?php if($user['timezone'] == '') echo ' selected'?>>CST6CDT</option>
                                        <option value="373,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>Cuba</option>
                                        <option value="374,+02:00" <?php if($user['timezone'] == '') echo ' selected'?>>EET</option>
                                        <option value="375,+02:00" <?php if($user['timezone'] == '') echo ' selected'?>>Egypt</option>
                                        <option value="376,+00:00" <?php if($user['timezone'] == '') echo ' selected'?>>Eire</option>
                                        <option value="377,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>EST</option>
                                        <option value="378,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>EST5EDT</option>
                                        <option value="379,+00:00" <?php if($user['timezone'] == '') echo ' selected'?>>Etc./GMT</option>
                                        <option value="380,+00:00" <?php if($user['timezone'] == '') echo ' selected'?>>Etc./GMT+0</option>
                                        <option value="381,+00:00" <?php if($user['timezone'] == '') echo ' selected'?>>Etc./UCT</option>
                                        <option value="382,+00:00" <?php if($user['timezone'] == '') echo ' selected'?>>Etc./Universal</option>
                                        <option value="383,+00:00" <?php if($user['timezone'] == '') echo ' selected'?>>Etc./UTC</option>
                                        <option value="384,+00:00" <?php if($user['timezone'] == '') echo ' selected'?>>Etc./Zulu</option>
                                        <option value="385,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Amsterdam</option>
                                        <option value="386,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Andorra</option>
                                        <option value="387,+02:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Athens</option>
                                        <option value="388,+00:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Belfast</option>
                                        <option value="389,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Belgrade</option>
                                        <option value="390,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Berlin</option>
                                        <option value="391,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Bratislava</option>
                                        <option value="392,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Brussels</option>
                                        <option value="393,+02:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Bucharest</option>
                                        <option value="394,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Budapest</option>
                                        <option value="395,+02:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Chisinau</option>
                                        <option value="396,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Copenhagen</option>
                                        <option value="397,+00:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Dublin</option>
                                        <option value="398,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Gibraltar</option>
                                        <option value="399,+00:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Guernsey</option>
                                        <option value="400,+02:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Helsinki</option>
                                        <option value="401,+00:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Isle_of_Man</option>
                                        <option value="402,+02:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Istanbul</option>
                                        <option value="403,+00:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Jersey</option>
                                        <option value="404,+03:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Kaliningrad</option>
                                        <option value="405,+02:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Kiev</option>
                                        <option value="406,+00:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Lisbon</option>
                                        <option value="407,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Ljubljana</option>
                                        <option value="408,+00:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/London</option>
                                        <option value="409,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Luxembourg</option>
                                        <option value="410,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Madrid</option>
                                        <option value="411,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Malta</option>
                                        <option value="412,+02:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Mariehamn</option>
                                        <option value="413,+03:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Minsk</option>
                                        <option value="414,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Monaco</option>
                                        <option value="415,+04:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Moscow</option>
                                        <option value="416,+02:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Nicosia</option>
                                        <option value="417,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Oslo</option>
                                        <option value="418,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Paris</option>
                                        <option value="419,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Podgorica</option>
                                        <option value="420,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Prague</option>
                                        <option value="421,+02:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Riga</option>
                                        <option value="422,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Rome</option>
                                        <option value="423,+04:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Samara</option>
                                        <option value="424,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/San_Marino</option>
                                        <option value="425,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Sarajevo</option>
                                        <option value="426,+02:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Simferopol</option>
                                        <option value="427,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Skopje</option>
                                        <option value="428,+02:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Sofia</option>
                                        <option value="429,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Stockholm</option>
                                        <option value="430,+02:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Tallinn</option>
                                        <option value="431,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Tirane</option>
                                        <option value="432,+02:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Tiraspol</option>
                                        <option value="433,+02:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Uzhgorod</option>
                                        <option value="434,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Vaduz</option>
                                        <option value="435,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Vatican</option>
                                        <option value="436,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Vienna</option>
                                        <option value="437,+02:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Vilnius</option>
                                        <option value="438,+04:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Volgograd</option>
                                        <option value="439,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Warsaw</option>
                                        <option value="440,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Zagreb</option>
                                        <option value="441,+02:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Zaporozhye</option>
                                        <option value="442,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>Europe/Zurich</option>
                                        <option value="443,+00:00" <?php if($user['timezone'] == '') echo ' selected'?>>GB</option>
                                        <option value="444,+00:00" <?php if($user['timezone'] == '') echo ' selected'?>>GB-Eire</option>
                                        <option value="445,+00:00" <?php if($user['timezone'] == '') echo ' selected'?>>GMT</option>
                                        <option value="446,+00:00" <?php if($user['timezone'] == '') echo ' selected'?>>GMT+0</option>
                                        <option value="447,+00:00" <?php if($user['timezone'] == '') echo ' selected'?>>GMT-0</option>
                                        <option value="448,+00:00" <?php if($user['timezone'] == '') echo ' selected'?>>GMT0</option>
                                        <option value="449,+00:00" <?php if($user['timezone'] == '') echo ' selected'?>>Greenwich</option>
                                        <option value="450,+08:00" <?php if($user['timezone'] == '') echo ' selected'?>>Hong Kong</option>
                                        <option value="451,−10:00" <?php if($user['timezone'] == '') echo ' selected'?>>HST</option>
                                        <option value="452,+00:00" <?php if($user['timezone'] == '') echo ' selected'?>>Iceland</option>
                                        <option value="453,+03:00" <?php if($user['timezone'] == '') echo ' selected'?>>Indian/Antananarivo</option>
                                        <option value="454,+06:00" <?php if($user['timezone'] == '') echo ' selected'?>>Indian/Chagos</option>
                                        <option value="455,+07:00" <?php if($user['timezone'] == '') echo ' selected'?>>Indian/Christmas</option>
                                        <option value="456,+06:30">Indian/Cocos</option>
                                        <option value="457,+03:00" <?php if($user['timezone'] == '') echo ' selected'?>>Indian/Comoro</option>
                                        <option value="458,+05:00" <?php if($user['timezone'] == '') echo ' selected'?>>Indian/Kerguelen</option>
                                        <option value="459,+04:00" <?php if($user['timezone'] == '') echo ' selected'?>>Indian/Mahe</option>
                                        <option value="460,+05:00" <?php if($user['timezone'] == '') echo ' selected'?>>Indian/Maldives</option>
                                        <option value="461,+04:00" <?php if($user['timezone'] == '') echo ' selected'?>>Indian/Mauritius</option>
                                        <option value="462,+03:00" <?php if($user['timezone'] == '') echo ' selected'?>>Indian/Mayotte</option>
                                        <option value="463,+04:00" <?php if($user['timezone'] == '') echo ' selected'?>>Indian/Reunion</option>
                                        <option value="464,+03:30">Iran</option>
                                        <option value="465,+02:00" <?php if($user['timezone'] == '') echo ' selected'?>>Israel</option>
                                        <option value="466,−05:00" <?php if($user['timezone'] == '') echo ' selected'?>>Jamaica</option>
                                        <option value="467,+09:00" <?php if($user['timezone'] == '') echo ' selected'?>>Japan</option>
                                        <option value="468,+09:00" <?php if($user['timezone'] == '') echo ' selected'?>>JST-9</option>
                                        <option value="469,+12:00" <?php if($user['timezone'] == '') echo ' selected'?>>Kwajalein</option>
                                        <option value="470,+02:00" <?php if($user['timezone'] == '') echo ' selected'?>>Libya</option>
                                        <option value="471,+01:00" <?php if($user['timezone'] == '') echo ' selected'?>>MET</option>
                                        <option value="472,−08:00" <?php if($user['timezone'] == '') echo ' selected'?>>Mexico/BajaNorte</option>
                                        <option value="473,−07:00" <?php if($user['timezone'] == '') echo ' selected'?>>Mexico/BajaSur</option>
                                        <option value="474,−06:00" <?php if($user['timezone'] == '') echo ' selected'?>>Mexico/General</option>
                                        <option value="475,−07:00" <?php if($user['timezone'] == '') echo ' selected'?>>MST</option>
                                        <option value="476,−07:00" <?php if($user['timezone'] == '476,−07:00') echo ' selected'?>>MST7MDT</option>
                                        <option value="477,−07:00" <?php if($user['timezone'] == '477,−07:00') echo ' selected'?>>Navajo</option>
                                        <option value="478,+12:00" <?php if($user['timezone'] == '478,+12:00') echo ' selected'?>>NZ</option>
                                        <option value="479,+12:45" <?php if($user['timezone'] == '479,+12:45') echo ' selected'?>>NZ-CHAT</option>
                                        <option value="480,+13:00" <?php if($user['timezone'] == '480,+13:00') echo ' selected'?>>Pacific/Apia</option>
                                        <option value="481,+12:00" <?php if($user['timezone'] == '481,+12:00') echo ' selected'?>>Pacific/Auckland</option>
                                        <option value="482,+12:45" <?php if($user['timezone'] == '482,+12:45') echo ' selected'?>>Pacific/Chatham</option>
                                        <option value="483,+10:00" <?php if($user['timezone'] == '483,+10:00') echo ' selected'?>>Pacific/Chuuk</option>
                                        <option value="484,−06:00" <?php if($user['timezone'] == '484,−06:00') echo ' selected'?>>Pacific/Easter</option>
                                        <option value="485,+11:00" <?php if($user['timezone'] == '485,+11:00') echo ' selected'?>>Pacific/Efate</option>
                                        <option value="486,+13:00" <?php if($user['timezone'] == '486,+13:00') echo ' selected'?>>Pacific/Enderbury</option>
                                        <option value="487,+13:00" <?php if($user['timezone'] == '487,+13:00') echo ' selected'?>>Pacific/Fakaofo</option>
                                        <option value="488,+12:00" <?php if($user['timezone'] == '488,+12:00') echo ' selected'?>>Pacific/Fiji</option>
                                        <option value="489,+12:00" <?php if($user['timezone'] == '489,+12:00') echo ' selected'?>>Pacific/Funafuti</option>
                                        <option value="490,−06:00" <?php if($user['timezone'] == '490,−06:00') echo ' selected'?>>Pacific/Galapagos</option>
                                        <option value="491,−09:00" <?php if($user['timezone'] == '491,−09:00') echo ' selected'?>>Pacific/Gambier</option>
                                        <option value="492,+11:00" <?php if($user['timezone'] == '492,+11:00') echo ' selected'?>>Pacific/Guadalcanal</option>
                                        <option value="493,+10:00" <?php if($user['timezone'] == '493,+10:00') echo ' selected'?>>Pacific/Guam</option>
                                        <option value="494,−10:00" <?php if($user['timezone'] == '494,−10:00') echo ' selected'?>>Pacific/Honolulu</option>
                                        <option value="495,−10:00" <?php if($user['timezone'] == '495,−10:00') echo ' selected'?>>Pacific/Johnston</option>
                                        <option value="496,+14:00" <?php if($user['timezone'] == '496,+14:00') echo ' selected'?>>Pacific/Kiritimati</option>
                                        <option value="497,+11:00" <?php if($user['timezone'] == '497,+11:00') echo ' selected'?>>Pacific/Kosrae</option>
                                        <option value="498,+12:00" <?php if($user['timezone'] == '498,+12:00') echo ' selected'?>>Pacific/Kwajalein</option>
                                        <option value="499,+12:00" <?php if($user['timezone'] == '499,+12:00') echo ' selected'?>>Pacific/Majuro</option>
                                        <option value="500,−09:30" <?php if($user['timezone'] == '500,−09:30') echo ' selected'?>>Pacific/Marquesas</option>
                                        <option value="501,−11:00" <?php if($user['timezone'] == '501,−11:00') echo ' selected'?>>Pacific/Midway</option>
                                        <option value="502,+12:00" <?php if($user['timezone'] == '502,+12:00') echo ' selected'?>>Pacific/Nauru</option>
                                        <option value="503,−11:00" <?php if($user['timezone'] == '503,−11:00') echo ' selected'?>>Pacific/Niue</option>
                                        <option value="504,+11:30" <?php if($user['timezone'] == '504,+11:30') echo ' selected'?>>Pacific/Norfolk</option>
                                        <option value="505,+11:00" <?php if($user['timezone'] == '505,+11:00') echo ' selected'?>>Pacific/Noumea</option>
                                        <option value="506,−11:00" <?php if($user['timezone'] == '506,−11:00') echo ' selected'?>>Pacific/Pago_Pago</option>
                                        <option value="507,+09:00" <?php if($user['timezone'] == '507,+09:00') echo ' selected'?>>Pacific/Palau</option>
                                        <option value="508,−08:00" <?php if($user['timezone'] == '508,−08:00') echo ' selected'?>>Pacific/Pitcairn</option>
                                        <option value="509,+11:00" <?php if($user['timezone'] == '509,+11:00') echo ' selected'?>>Pacific/Pohnpei</option>
                                        <option value="510,+11:00" <?php if($user['timezone'] == '510,+11:00') echo ' selected'?>>Pacific/Ponape</option>
                                        <option value="511,+10:00" <?php if($user['timezone'] == '511,+10:00') echo ' selected'?>>Pacific/Port_Moresby</option>
                                        <option value="512,−10:00" <?php if($user['timezone'] == '512,−10:00') echo ' selected'?>>Pacific/Rarotonga</option>
                                        <option value="513,+10:00" <?php if($user['timezone'] == '513,+10:00') echo ' selected'?>>Pacific/Saipan</option>
                                        <option value="514,−11:00" <?php if($user['timezone'] == '514,−11:00') echo ' selected'?>>Pacific/Samoa</option>
                                        <option value="515,−10:00" <?php if($user['timezone'] == '515,−10:00') echo ' selected'?>>Pacific/Tahiti</option>
                                        <option value="516,+12:00" <?php if($user['timezone'] == '516,+12:00') echo ' selected'?>>Pacific/Tarawa</option>
                                        <option value="517,+13:00" <?php if($user['timezone'] == '517,+13:00') echo ' selected'?>>Pacific/Tongatapu</option>
                                        <option value="518,+10:00" <?php if($user['timezone'] == '518,+10:00') echo ' selected'?>>Pacific/Truk</option>
                                        <option value="519,+12:00" <?php if($user['timezone'] == '519,+12:00') echo ' selected'?>>Pacific/Wake</option>
                                        <option value="520,+12:00" <?php if($user['timezone'] == '520,+12:00') echo ' selected'?>>Pacific/Wallis</option>
                                        <option value="521,+10:00" <?php if($user['timezone'] == '521,+10:00') echo ' selected'?>>Pacific/Yap</option>
                                        <option value="522,+01:00" <?php if($user['timezone'] == '522,+01:00') echo ' selected'?>>Poland</option>
                                        <option value="523,+00:00" <?php if($user['timezone'] == '523,+00:00') echo ' selected'?>>Portugal</option>
                                        <option value="524,+08:00" <?php if($user['timezone'] == '524,+08:00') echo ' selected'?>>PRC</option>
                                        <option value="525,−08:00" <?php if($user['timezone'] == '525,−08:00') echo ' selected'?>>PST8PDT</option>
                                        <option value="526,+08:00" <?php if($user['timezone'] == '526,+08:00') echo ' selected'?>>ROC</option>
                                        <option value="527,+09:00" <?php if($user['timezone'] == '527,+09:00') echo ' selected'?>>ROK</option>
                                        <option value="528,+08:00" <?php if($user['timezone'] == '528,+08:00') echo ' selected'?>>Singapore</option>
                                        <option value="529,+02:00" <?php if($user['timezone'] == '529,+02:00') echo ' selected'?>>Turkey</option>
                                        <option value="530,+00:00" <?php if($user['timezone'] == '530,+00:00') echo ' selected'?>>UCT</option>
                                        <option value="531,+00:00" <?php if($user['timezone'] == '531,+00:00') echo ' selected'?>>Universal</option>
                                        <option value="532,−09:00" <?php if($user['timezone'] == '532,−09:00') echo ' selected'?>>US/Alaska</option>
                                        <option value="533,−10:00" <?php if($user['timezone'] == '533,−10:00') echo ' selected'?>>US/Aleutian</option>
                                        <option value="534,−07:00" <?php if($user['timezone'] == '534,−07:00') echo ' selected'?>>US/Arizona</option>
                                        <option value="535,−06:00" <?php if($user['timezone'] == '535,−06:00') echo ' selected'?>>US/Central</option>
                                        <option value="536,−05:00" <?php if($user['timezone'] == '536,−05:00') echo ' selected'?>>US/East-Indiana</option>
                                        <option value="537,−05:00" <?php if($user['timezone'] == '537,−05:00') echo ' selected'?>>US/Eastern</option>
                                        <option value="538,−10:00" <?php if($user['timezone'] == '538,−10:00') echo ' selected'?>>US/Hawaii</option>
                                        <option value="539,−06:00" <?php if($user['timezone'] == '539,−06:00') echo ' selected'?>>US/Indiana-Starke</option>
                                        <option value="540,−05:00" <?php if($user['timezone'] == '540,−05:00') echo ' selected'?>>US/Michigan</option>
                                        <option value="541,−07:00" <?php if($user['timezone'] == '541,−07:00') echo ' selected'?>>US/Mountain</option>
                                        <option value="542,−08:00" <?php if($user['timezone'] == '542,−08:00') echo ' selected'?>>US/Pacific</option>
                                        <option value="543,−08:00" <?php if($user['timezone'] == '543,−08:00') echo ' selected'?>>US/Pacific-New</option>
                                        <option value="544,−11:00" <?php if($user['timezone'] == '544,−11:00') echo ' selected'?>>US/Samoa</option>
                                        <option value="545,+00:00" <?php if($user['timezone'] == '545,+00:00') echo ' selected'?>>UTC</option>
                                        <option value="546,+04:00" <?php if($user['timezone'] == '546,+04:00') echo ' selected'?>>W-SU</option>
                                        <option value="547,+00:00" <?php if($user['timezone'] == '547,+00:00') echo ' selected'?>>WET</option>
                                        <option value="548,+00:00" <?php if($user['timezone'] == '548,+00:00') echo ' selected'?>>Zulu</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="notifyAt"> Notify At  </label>
                                    <div class="input-group">
                                        <input type="text" id="notifyAt" name="notifyAt" class="form-control timepicker timepicker-no-seconds" value="<?php echo $user['notifyat'];?>">
                                        <span class="input-group-btn">
                                                            <button class="btn default" type="button"><i class="fa fa-clock-o"></i></button>
                                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="alertDocGroupBySelection"> Group notifications by </label>
                                    <select id="alertDocGroupBySelection" name="alertDocGroupBySelection" class="form-control">
                                        <option value="0" <?php if($user['notifygroup'] == '0') echo ' selected'?>> None </option>
                                        <option value="1" <?php if($user['notifygroup'] == '1') echo ' selected'?>>By Company</option>
                                        <option value="2" <?php if($user['notifygroup'] == '2') echo ' selected'?>>Categories</option>
                                    </select>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <h4 class="block"> Email </h4>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="customHeaderText"> Header Text  </label>
                                    <input type="text" class="form-control" id="customHeaderText" name="customHeaderText" placeholder="Following items are due. Please click on the View button to view/change this item" value="<?php echo $user['header'];?>">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="customFooterText"> Footer Text  </label>
                                    <input type="text" class="form-control" id="customFooterText" name="customFooterText" placeholder="You are recieving this notification since you have enabled email notifications in your account. If you would like to turn off the email notifications, please go to the categories's settings and switch Alert Enabled to Off. If you have any questions, contact us at support@aladdinpro.com" value="<?php echo $user['footer'];?>">
                                </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="form-actions">
                            <button type="submit" class="btn green"><i class="fa fa-save"></i>  Save  </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>