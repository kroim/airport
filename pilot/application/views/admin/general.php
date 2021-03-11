<?php
/**
 * Created by PhpStorm.
 * User: GaoComet
 * Date: 3/4/2018
 * Time: 4:17 AM
 */
?>

<div class="dashboard-content">
    <!-- Titlebar -->
    <div id="titlebar">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo $this->lang->line('view')." ".$this->lang->line('side_general');?></h2>
            </div>
        </div>
    </div>
    <div>
        <div class="col-md-12">

            <ul class="nav nav-tabs">
                <li class="<?php echo $indexOfTab == '1' ? "active": "";?>">
                    <a href="#tab_general_notification" data-toggle="tab" aria-expanded="false">
                        Notifications   </a>
                </li>
                <li class="<?php echo $indexOfTab == '2' ? "active": "";?>">
                    <a href="#tab_general_group" data-toggle="tab" aria-expanded="true">
                        Group  </a>
                </li>
                <li class="<?php echo $indexOfTab == '3' ? "active": "";?>">
                    <a href="#tab_general_custom" data-toggle="tab" aria-expanded="true">
                        Custommize  </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade <?php echo $indexOfTab == '1' ? "active in": "";?>" id="tab_general_notification">
                    <form id="form-notification-settings" name="form-notification-settings" class="horizontal-form" role="form" method="POST" action="saveGeneral">
                        <input type="hidden" name="generalType" value="1">
                        <div class="form-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="timezoneSelection"> Time Zone  </label>
                                    <select id="timezoneSelection" name="timezoneSelection" class="form-control">
                                        <option value="Africa/Abidjan">Africa/Abidjan</option>
                                        <option value="Africa/Accra">Africa/Accra</option>
                                        <option value="Africa/Addis_Ababa">Africa/Addis_Ababa</option>
                                        <option value="Africa/Algiers">Africa/Algiers</option>
                                        <option value="5,+03:00">Africa/Asmara</option>
                                        <option value="Africa/Asmera">Africa/Asmera</option>
                                        <option value="Africa/Bamako">Africa/Bamako</option>
                                        <option value="Africa/Bangui">Africa/Bangui</option>
                                        <option value="Africa/Banjul">Africa/Banjul</option>
                                        <option value="Africa/Bissau">Africa/Bissau</option>
                                        <option value="Africa/Blantyre">Africa/Blantyre</option>
                                        <option value="Africa/Brazzaville">Africa/Brazzaville</option>
                                        <option value="Africa/Bujumbura">Africa/Bujumbura</option>
                                        <option value="Africa/Cairo">Africa/Cairo</option>
                                        <option value="Africa/Casablanca">Africa/Casablanca</option>
                                        <option value="Africa/Ceuta">Africa/Ceuta</option>
                                        <option value="Africa/Conakry">Africa/Conakry</option>
                                        <option value="Africa/Dakar">Africa/Dakar</option>
                                        <option value="Africa/Dar_es_Salaam">Africa/Dar_es_Salaam</option>
                                        <option value="Africa/Djibouti">Africa/Djibouti</option>
                                        <option value="Africa/Douala">Africa/Douala</option>
                                        <option value="Africa/El_Aaiun">Africa/El_Aaiun</option>
                                        <option value="Africa/Freetown">Africa/Freetown</option>
                                        <option value="Africa/Gaborone">Africa/Gaborone</option>
                                        <option value="Africa/Harare">Africa/Harare</option>
                                        <option value="Africa/Johannesburg">Africa/Johannesburg</option>
                                        <option value="Africa/Juba">Africa/Juba</option>
                                        <option value="Africa/Kampala">Africa/Kampala</option>
                                        <option value="Africa/Khartoum">Africa/Khartoum</option>
                                        <option value="Africa/Kigali">Africa/Kigali</option>
                                        <option value="Africa/Kinshasa">Africa/Kinshasa</option>
                                        <option value="Africa/Lagos">Africa/Lagos</option>
                                        <option value="Africa/Libreville">Africa/Libreville</option>
                                        <option value="Africa/Lome">Africa/Lome</option>
                                        <option value="Africa/Luanda">Africa/Luanda</option>
                                        <option value="Africa/Lubumbashi">Africa/Lubumbashi</option>
                                        <option value="Africa/Lusaka">Africa/Lusaka</option>
                                        <option value="Africa/Malabo">Africa/Malabo</option>
                                        <option value="Africa/Maputo">Africa/Maputo</option>
                                        <option value="Africa/Maseru">Africa/Maseru</option>
                                        <option value="Africa/Mbabane">Africa/Mbabane</option>
                                        <option value="Africa/Mogadishu">Africa/Mogadishu</option>
                                        <option value="Africa/Monrovia">Africa/Monrovia</option>
                                        <option value="Africa/Nairobi">Africa/Nairobi</option>
                                        <option value="Africa/Ndjamena">Africa/Ndjamena</option>
                                        <option value="Africa/Niamey">Africa/Niamey</option>
                                        <option value="Africa/Nouakchott">Africa/Nouakchott</option>
                                        <option value="Africa/Ouagadougou">Africa/Ouagadougou</option>
                                        <option value="Africa/Porto-Novo">Africa/Porto-Novo</option>
                                        <option value="Africa/Sao_Tome">Africa/Sao_Tome</option>
                                        <option value="Africa/Timbuktu">Africa/Timbuktu</option>
                                        <option value="Africa/Tripoli">Africa/Tripoli</option>
                                        <option value="Africa/Tunis">Africa/Tunis</option>
                                        <option value="Africa/Windhoek">Africa/Windhoek</option>
                                        <option value="America/Adak">America/Adak</option>
                                        <option value="America/Anchorage">America/Anchorage</option>
                                        <option value="America/Anguilla">America/Anguilla</option>
                                        <option value="America/Antigua">America/Antigua</option>
                                        <option value="America/Araguaina">America/Araguaina</option>
                                        <option value="America/Argentina/Buenos_Aires">America/Argentina/Buenos_Aires</option>
                                        <option value="America/Argentina/Catamarca">America/Argentina/Catamarca</option>
                                        <option value="America/Argentina/ComodRivadavia">America/Argentina/ComodRivadavia</option>
                                        <option value="America/Argentina/Cordoba">America/Argentina/Cordoba</option>
                                        <option value="America/Argentina/Jujuy">America/Argentina/Jujuy</option>
                                        <option value="America/Argentina/La_Rioja">America/Argentina/La_Rioja</option>
                                        <option value="America/Argentina/Mendoza">America/Argentina/Mendoza</option>
                                        <option value="America/Argentina/Rio_Gallegos">America/Argentina/Rio_Gallegos</option>
                                        <option value="America/Argentina/Salta">America/Argentina/Salta</option>
                                        <option value="America/Argentina/San_Juan">America/Argentina/San_Juan</option>
                                        <option value="America/Argentina/San_Luis">America/Argentina/San_Luis</option>
                                        <option value="America/Argentina/Tucuman">America/Argentina/Tucuman</option>
                                        <option value="America/Argentina/Ushuaia">America/Argentina/Ushuaia</option>
                                        <option value="America/Aruba">America/Aruba</option>
                                        <option value="America/Asuncion">America/Asuncion</option>
                                        <option value="America/Atikokan">America/Atikokan</option>
                                        <option value="America/Atka">America/Atka</option>
                                        <option value="America/Bahia">America/Bahia</option>
                                        <option value="America/Bahia_Banderas">America/Bahia_Banderas</option>
                                        <option value="America/Barbados">America/Barbados</option>
                                        <option value="America/Belem">America/Belem</option>
                                        <option value="America/Belize">America/Belize</option>
                                        <option value="America/Blanc-Sablon">America/Blanc-Sablon</option>
                                        <option value="America/Boa_Vista">America/Boa_Vista</option>
                                        <option value="America/Bogota">America/Bogota</option>
                                        <option value="America/Boise">America/Boise</option>
                                        <option value="America/Buenos_Aires">America/Buenos_Aires</option>
                                        <option value="America/Cambridge_Bay">America/Cambridge_Bay</option>
                                        <option value="America/Campo_Grande">America/Campo_Grande</option>
                                        <option value="America/Cancun">America/Cancun</option>
                                        <option value="America/Caracas">America/Caracas</option>
                                        <option value="America/Catamarca">America/Catamarca</option>
                                        <option value="America/Cayenne">America/Cayenne</option>
                                        <option value="America/Cayman">America/Cayman</option>
                                        <option value="America/Chicago">America/Chicago</option>
                                        <option value="America/Chihuahua">America/Chihuahua</option>
                                        <option value="America/Coral_Harbour">America/Coral_Harbour</option>
                                        <option value="America/Cordoba">America/Cordoba</option>
                                        <option value="America/Costa_Rica">America/Costa_Rica</option>
                                        <option value="America/Creston">America/Creston</option>
                                        <option value="America/Cuiaba">America/Cuiaba</option>
                                        <option value="America/Curacao">America/Curacao</option>
                                        <option value="America/Danmarkshavn">America/Danmarkshavn</option>
                                        <option value="America/Dawson">America/Dawson</option>
                                        <option value="America/Dawson_Creek">America/Dawson_Creek</option>
                                        <option value="America/Denver">America/Denver</option>
                                        <option value="America/Detroit">America/Detroit</option>
                                        <option value="America/Dominica">America/Dominica</option>
                                        <option value="America/Edmonton">America/Edmonton</option>
                                        <option value="America/Eirunepe">America/Eirunepe</option>
                                        <option value="America/El_Salvador">America/El_Salvador</option>
                                        <option value="America/Ensenada">America/Ensenada</option>
                                        <option value="America/Fortaleza">America/Fortaleza</option>
                                        <option value="America/Fort_Wayne">America/Fort_Wayne</option>
                                        <option value="America/Glace_Bay">America/Glace_Bay</option>
                                        <option value="America/Godthab">America/Godthab</option>
                                        <option value="America/Goose_Bay">America/Goose_Bay</option>
                                        <option value="America/Grand_Turk">America/Grand_Turk</option>
                                        <option value="America/Grenada">America/Grenada</option>
                                        <option value="America/Guadeloupe">America/Guadeloupe</option>
                                        <option value="America/Guatemala">America/Guatemala</option>
                                        <option value="America/Guayaquil">America/Guayaquil</option>
                                        <option value="America/Guyana">America/Guyana</option>
                                        <option value="America/Halifax">America/Halifax</option>
                                        <option value="America/Havana">America/Havana</option>
                                        <option value="America/Hermosillo">America/Hermosillo</option>
                                        <option value="America/Indiana/Indianapolis">America/Indiana/Indianapolis</option>
                                        <option value="America/Indiana/Knox">America/Indiana/Knox</option>
                                        <option value="America/Indiana/Marengo">America/Indiana/Marengo</option>
                                        <option value="America/Indiana/Petersburg">America/Indiana/Petersburg</option>
                                        <option value="America/Indiana/Tell_City">America/Indiana/Tell_City</option>
                                        <option value="America/Indiana/Vevay">America/Indiana/Vevay</option>
                                        <option value="America/Indiana/Vincennes">America/Indiana/Vincennes</option>
                                        <option value="America/Indiana/Winamac">America/Indiana/Winamac</option>
                                        <option value="America/Indianapolis">America/Indianapolis</option>
                                        <option value="America/Inuvik">America/Inuvik</option>
                                        <option value="America/Iqaluit">America/Iqaluit</option>
                                        <option value="America/Jamaica">America/Jamaica</option>
                                        <option value="America/Jujuy">America/Jujuy</option>
                                        <option value="America/Juneau">America/Juneau</option>
                                        <option value="America/Kentucky/Louisville">America/Kentucky/Louisville</option>
                                        <option value="America/Kentucky/Monticello">America/Kentucky/Monticello</option>
                                        <option value="America/Knox_IN">America/Knox_IN</option>
                                        <option value="America/Kralendijk">America/Kralendijk</option>
                                        <option value="America/La_Paz">America/La_Paz</option>
                                        <option value="America/Lima">America/Lima</option>
                                        <option value="America/Los_Angeles">America/Los_Angeles</option>
                                        <option value="America/Louisville">America/Louisville</option>
                                        <option value="America/Lower_Princes">America/Lower_Princes</option>
                                        <option value="America/Maceio">America/Maceio</option>
                                        <option value="America/Managua">America/Managua</option>
                                        <option value="America/Manaus">America/Manaus</option>
                                        <option value="America/Marigot">America/Marigot</option>
                                        <option value="America/Martinique">America/Martinique</option>
                                        <option value="America/Matamoros">America/Matamoros</option>
                                        <option value="America/Mazatlan">America/Mazatlan</option>
                                        <option value="America/Mendoza">America/Mendoza</option>
                                        <option value="America/Menominee">America/Menominee</option>
                                        <option value="America/Merida">America/Merida</option>
                                        <option value="America/Metlakatla">America/Metlakatla</option>
                                        <option value="America/Mexico_City">America/Mexico_City</option>
                                        <option value="America/Miquelon">America/Miquelon</option>
                                        <option value="America/Moncton">America/Moncton</option>
                                        <option value="America/Monterrey">America/Monterrey</option>
                                        <option value="America/Montevideo">America/Montevideo</option>
                                        <option value="America/Montreal">America/Montreal</option>
                                        <option value="America/Montserrat">America/Montserrat</option>
                                        <option value="America/Nassau">America/Nassau</option>
                                        <option value="America/New_York">America/New_York</option>
                                        <option value="America/Nipigon">America/Nipigon</option>
                                        <option value="America/Nome">America/Nome</option>
                                        <option value="America/Noronha">America/Noronha</option>
                                        <option value="America/North_Dakota/Beulah">America/North_Dakota/Beulah</option>
                                        <option value="America/North_Dakota/Center">America/North_Dakota/Center</option>
                                        <option value="America/North_Dakota/New_Salem">America/North_Dakota/New_Salem</option>
                                        <option value="America/Ojinaga">America/Ojinaga</option>
                                        <option value="America/Panama">America/Panama</option>
                                        <option value="America/Pangnirtung">America/Pangnirtung</option>
                                        <option value="America/Paramaribo">America/Paramaribo</option>
                                        <option value="America/Phoenix">America/Phoenix</option>
                                        <option value="America/Port-au-Prince">America/Port-au-Prince</option>
                                        <option value="America/Porto_Acre">America/Porto_Acre</option>
                                        <option value="America/Porto_Velho">America/Porto_Velho</option>
                                        <option value="America/Port_of_Spain">America/Port_of_Spain</option>
                                        <option value="America/Puerto_Rico">America/Puerto_Rico</option>
                                        <option value="America/Rainy_River">America/Rainy_River</option>
                                        <option value="America/Rankin_Inlet">America/Rankin_Inlet</option>
                                        <option value="America/Recife">America/Recife</option>
                                        <option value="America/Regina">America/Regina</option>
                                        <option value="America/Resolute">America/Resolute</option>
                                        <option value="America/Rio_Branco">America/Rio_Branco</option>
                                        <option value="America/Rosario">America/Rosario</option>
                                        <option value="America/Santarem">America/Santarem</option>
                                        <option value="America/Santa_Isabel">America/Santa_Isabel</option>
                                        <option value="America/Santiago">America/Santiago</option>
                                        <option value="America/Santo_Domingo">America/Santo_Domingo</option>
                                        <option value="America/Sao_Paulo">America/Sao_Paulo</option>
                                        <option value="America/Scoresbysund">America/Scoresbysund</option>
                                        <option value="America/Shiprock">America/Shiprock</option>
                                        <option value="America/Sitka">America/Sitka</option>
                                        <option value="America/St_Barthelemy">America/St_Barthelemy</option>
                                        <option value="America/St_Johns">America/St_Johns</option>
                                        <option value="America/St_Kitts">America/St_Kitts</option>
                                        <option value="America/St_Lucia">America/St_Lucia</option>
                                        <option value="America/St_Thomas">America/St_Thomas</option>
                                        <option value="America/St_Vincent">America/St_Vincent</option>
                                        <option value="America/Swift_Current">America/Swift_Current</option>
                                        <option value="America/Tegucigalpa">America/Tegucigalpa</option>
                                        <option value="America/Thule">America/Thule</option>
                                        <option value="America/Thunder_Bay">America/Thunder_Bay</option>
                                        <option value="America/Tijuana">America/Tijuana</option>
                                        <option value="America/Toronto">America/Toronto</option>
                                        <option value="America/Tortola">America/Tortola</option>
                                        <option value="America/Vancouver">America/Vancouver</option>
                                        <option value="America/Virgin">America/Virgin</option>
                                        <option value="America/Whitehorse">America/Whitehorse</option>
                                        <option value="America/Winnipeg">America/Winnipeg</option>
                                        <option value="America/Yakutat">America/Yakutat</option>
                                        <option value="America/Yellowknife">America/Yellowknife</option>
                                        <option value="Antarctica/Casey">Antarctica/Casey</option>
                                        <option value="Antarctica/Davis">Antarctica/Davis</option>
                                        <option value="Antarctica/DumontDUrville">Antarctica/DumontDUrville</option>
                                        <option value="Antarctica/Macquarie">Antarctica/Macquarie</option>
                                        <option value="Antarctica/Mawson">Antarctica/Mawson</option>
                                        <option value="Antarctica/McMurdo">Antarctica/McMurdo</option>
                                        <option value="Antarctica/Palmer">Antarctica/Palmer</option>
                                        <option value="Antarctica/Rothera">Antarctica/Rothera</option>
                                        <option value="Antarctica/South_Pole">Antarctica/South_Pole</option>
                                        <option value="Antarctica/Syowa">Antarctica/Syowa</option>
                                        <option value="Antarctica/Vostok">Antarctica/Vostok</option>
                                        <option value="Arctic/Longyearbyen">Arctic/Longyearbyen</option>
                                        <option value="Asia/Aden">Asia/Aden</option>
                                        <option value="Asia/Almaty">Asia/Almaty</option>
                                        <option value="Asia/Amman">Asia/Amman</option>
                                        <option value="Asia/Anadyr">Asia/Anadyr</option>
                                        <option value="Asia/Aqtau">Asia/Aqtau</option>
                                        <option value="Asia/Aqtobe">Asia/Aqtobe</option>
                                        <option value="Asia/Ashgabat">Asia/Ashgabat</option>
                                        <option value="Asia/Ashkhabad">Asia/Ashkhabad</option>
                                        <option value="Asia/Baghdad">Asia/Baghdad</option>
                                        <option value="Asia/Bahrain">Asia/Bahrain</option>
                                        <option value="Asia/Baku">Asia/Baku</option>
                                        <option value="Asia/Bangkok">Asia/Bangkok</option>
                                        <option value="Asia/Beirut">Asia/Beirut</option>
                                        <option value="Asia/Bishkek">Asia/Bishkek</option>
                                        <option value="Asia/Brunei">Asia/Brunei</option>
                                        <option value="Asia/Calcutta">Asia/Calcutta</option>
                                        <option value="Asia/Choibalsan">Asia/Choibalsan</option>
                                        <option value="Asia/Chongqing">Asia/Chongqing</option>
                                        <option value="Asia/Chungking">Asia/Chungking</option>
                                        <option value="Asia/Colombo">Asia/Colombo</option>
                                        <option value="Asia/Dacca">Asia/Dacca</option>
                                        <option value="Asia/Damascus">Asia/Damascus</option>
                                        <option value="Asia/Dhaka">Asia/Dhaka</option>
                                        <option value="Asia/Dili">Asia/Dili</option>
                                        <option value="Asia/Dubai">Asia/Dubai</option>
                                        <option value="Asia/Dushanbe">Asia/Dushanbe</option>
                                        <option value="Asia/Gaza">Asia/Gaza</option>
                                        <option value="Asia/Harbin">Asia/Harbin</option>
                                        <option value="Asia/Hebron">Asia/Hebron</option>
                                        <option value="Asia/Hong_Kong">Asia/Hong_Kong</option>
                                        <option value="Asia/Hovd">Asia/Hovd</option>
                                        <option value="Asia/Ho_Chi_Minh">Asia/Ho_Chi_Minh</option>
                                        <option value="Asia/Irkutsk">Asia/Irkutsk</option>
                                        <option value="Asia/Istanbul">Asia/Istanbul</option>
                                        <option value="Asia/Jakarta">Asia/Jakarta</option>
                                        <option value="Asia/Jayapura">Asia/Jayapura</option>
                                        <option value="Asia/Jerusalem">Asia/Jerusalem</option>
                                        <option value="Asia/Kabul">Asia/Kabul</option>
                                        <option value="Asia/Kamchatka">Asia/Kamchatka</option>
                                        <option value="Asia/Karachi">Asia/Karachi</option>
                                        <option value="Asia/Kashgar">Asia/Kashgar</option>
                                        <option value="Asia/Kathmandu">Asia/Kathmandu</option>
                                        <option value="Asia/Katmandu">Asia/Katmandu</option>
                                        <option value="Asia/Kolkata">Asia/Kolkata</option>
                                        <option value="Asia/Krasnoyarsk">Asia/Krasnoyarsk</option>
                                        <option value="Asia/Kuala_Lumpur">Asia/Kuala_Lumpur</option>
                                        <option value="Asia/Kuching">Asia/Kuching</option>
                                        <option value="Asia/Kuwait">Asia/Kuwait</option>
                                        <option value="Asia/Macao">Asia/Macao</option>
                                        <option value="Asia/Macau">Asia/Macau</option>
                                        <option value="Asia/Magadan">Asia/Magadan</option>
                                        <option value="Asia/Makassar">Asia/Makassar</option>
                                        <option value="Asia/Manila">Asia/Manila</option>
                                        <option value="Asia/Muscat">Asia/Muscat</option>
                                        <option value="Asia/Nicosia">Asia/Nicosia</option>
                                        <option value="Asia/Novokuznetsk">Asia/Novokuznetsk</option>
                                        <option value="Asia/Novosibirsk">Asia/Novosibirsk</option>
                                        <option value="Asia/Omsk">Asia/Omsk</option>
                                        <option value="Asia/Oral">Asia/Oral</option>
                                        <option value="Asia/Phnom_Penh">Asia/Phnom_Penh</option>
                                        <option value="Asia/Pontianak">Asia/Pontianak</option>
                                        <option value="Asia/Pyongyang">Asia/Pyongyang</option>
                                        <option value="Asia/Qatar">Asia/Qatar</option>
                                        <option value="Asia/Qyzylorda">Asia/Qyzylorda</option>
                                        <option value="Asia/Rangoon">Asia/Rangoon</option>
                                        <option value="Asia/Riyadh">Asia/Riyadh</option>
                                        <option value="Asia/Saigon">Asia/Saigon</option>
                                        <option value="Asia/Sakhalin">Asia/Sakhalin</option>
                                        <option value="Asia/Samarkand">Asia/Samarkand</option>
                                        <option value="Asia/Seoul">Asia/Seoul</option>
                                        <option value="Asia/Shanghai">Asia/Shanghai</option>
                                        <option value="Asia/Singapore">Asia/Singapore</option>
                                        <option value="Asia/Taipei">Asia/Taipei</option>
                                        <option value="Asia/Tashkent">Asia/Tashkent</option>
                                        <option value="Asia/Tbilisi">Asia/Tbilisi</option>
                                        <option value="Asia/Tehran">Asia/Tehran</option>
                                        <option value="Asia/Tel_Aviv">Asia/Tel_Aviv</option>
                                        <option value="Asia/Thimbu">Asia/Thimbu</option>
                                        <option value="Asia/Thimphu">Asia/Thimphu</option>
                                        <option value="Asia/Tokyo">Asia/Tokyo</option>
                                        <option value="Asia/Ujung_Pandang">Asia/Ujung_Pandang</option>
                                        <option value="Asia/Ulaanbaatar">Asia/Ulaanbaatar</option>
                                        <option value="Asia/Ulan_Bator">Asia/Ulan_Bator</option>
                                        <option value="Asia/Urumqi">Asia/Urumqi</option>
                                        <option value="Asia/Vientiane">Asia/Vientiane</option>
                                        <option value="Asia/Vladivostok">Asia/Vladivostok</option>
                                        <option value="Asia/Yakutsk">Asia/Yakutsk</option>
                                        <option value="Asia/Yekaterinburg">Asia/Yekaterinburg</option>
                                        <option value="Asia/Yerevan">Asia/Yerevan</option>
                                        <option value="Atlantic/Azores">Atlantic/Azores</option>
                                        <option value="Atlantic/Bermuda">Atlantic/Bermuda</option>
                                        <option value="Atlantic/Canary">Atlantic/Canary</option>
                                        <option value="Atlantic/Cape_Verde">Atlantic/Cape_Verde</option>
                                        <option value="Atlantic/Faeroe">Atlantic/Faeroe</option>
                                        <option value="Atlantic/Faroe">Atlantic/Faroe</option>
                                        <option value="Atlantic/Jan_Mayen">Atlantic/Jan_Mayen</option>
                                        <option value="Atlantic/Madeira">Atlantic/Madeira</option>
                                        <option value="Atlantic/Reykjavik">Atlantic/Reykjavik</option>
                                        <option value="Atlantic/South_Georgia">Atlantic/South_Georgia</option>
                                        <option value="Atlantic/Stanley">Atlantic/Stanley</option>
                                        <option value="Atlantic/St_Helena">Atlantic/St_Helena</option>
                                        <option value="Australia/ACT">Australia/ACT</option>
                                        <option value="Australia/Adelaide">Australia/Adelaide</option>
                                        <option value="Australia/Brisbane">Australia/Brisbane</option>
                                        <option value="Australia/Broken_Hill">Australia/Broken_Hill</option>
                                        <option value="Australia/Canberra">Australia/Canberra</option>
                                        <option value="Australia/Currie">Australia/Currie</option>
                                        <option value="Australia/Darwin">Australia/Darwin</option>
                                        <option value="Australia/Eucla">Australia/Eucla</option>
                                        <option value="Australia/Hobart">Australia/Hobart</option>
                                        <option value="Australia/LHI">Australia/LHI</option>
                                        <option value="Australia/Lindeman">Australia/Lindeman</option>
                                        <option value="Australia/Lord_Howe">Australia/Lord_Howe</option>
                                        <option value="Australia/Melbourne">Australia/Melbourne</option>
                                        <option value="Australia/North">Australia/North</option>
                                        <option value="Australia/NSW">Australia/NSW</option>
                                        <option value="Australia/Perth">Australia/Perth</option>
                                        <option value="Australia/Queensland">Australia/Queensland</option>
                                        <option value="Australia/South">Australia/South</option>
                                        <option value="Australia/Sydney">Australia/Sydney</option>
                                        <option value="Australia/Tasmania">Australia/Tasmania</option>
                                        <option value="Australia/Victoria">Australia/Victoria</option>
                                        <option value="Australia/West">Australia/West</option>
                                        <option value="Australia/Yancowinna">Australia/Yancowinna</option>
                                        <option value="Brazil/Acre">Brazil/Acre</option>
                                        <option value="Brazil/DeNoronha">Brazil/DeNoronha</option>
                                        <option value="Brazil/East">Brazil/East</option>
                                        <option value="Brazil/West">Brazil/West</option>
                                        <option value="Canada/Atlantic">Canada/Atlantic</option>
                                        <option value="Canada/Central">Canada/Central</option>
                                        <option value="Canada/East-Saskatchewan">Canada/East-Saskatchewan</option>
                                        <option value="Canada/Eastern">Canada/Eastern</option>
                                        <option value="Canada/Mountain">Canada/Mountain</option>
                                        <option value="Canada/Newfoundland">Canada/Newfoundland</option>
                                        <option value="Canada/Pacific">Canada/Pacific</option>
                                        <option value="Canada/Saskatchewan">Canada/Saskatchewan</option>
                                        <option value="Canada/Yukon">Canada/Yukon</option>
                                        <option value="CET">CET</option>
                                        <option value="Chile/Continental">Chile/Continental</option>
                                        <option value="Chile/EasterIsland">Chile/EasterIsland</option>
                                        <option value="CST6CDT">CST6CDT</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="EET">EET</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="Eire">Eire</option>
                                        <option value="EST">EST</option>
                                        <option value="EST5EDT">EST5EDT</option>
                                        <option value="Etc/GMT">Etc/GMT</option>
                                        <option value="Etc/GMT+0">Etc/GMT+0</option>
                                        <option value="Etc/UCT">Etc/UCT</option>
                                        <option value="Etc/Universal">Etc/Universal</option>
                                        <option value="Etc/UTC">Etc/UTC</option>
                                        <option value="Etc/Zulu">Etc/Zulu</option>
                                        <option value="Europe/Amsterdam">Europe/Amsterdam</option>
                                        <option value="Europe/Andorra">Europe/Andorra</option>
                                        <option value="Europe/Athens">Europe/Athens</option>
                                        <option value="Europe/Belfast">Europe/Belfast</option>
                                        <option value="Europe/Belgrade">Europe/Belgrade</option>
                                        <option value="Europe/Berlin">Europe/Berlin</option>
                                        <option value="Europe/Bratislava">Europe/Bratislava</option>
                                        <option value="Europe/Brussels">Europe/Brussels</option>
                                        <option value="Europe/Bucharest">Europe/Bucharest</option>
                                        <option value="Europe/Budapest">Europe/Budapest</option>
                                        <option value="Europe/Chisinau">Europe/Chisinau</option>
                                        <option value="Europe/Copenhagen">Europe/Copenhagen</option>
                                        <option value="Europe/Dublin">Europe/Dublin</option>
                                        <option value="Europe/Gibraltar">Europe/Gibraltar</option>
                                        <option value="Europe/Guernsey">Europe/Guernsey</option>
                                        <option value="Europe/Helsinki">Europe/Helsinki</option>
                                        <option value="Europe/Isle_of_Man">Europe/Isle_of_Man</option>
                                        <option value="Europe/Istanbul">Europe/Istanbul</option>
                                        <option value="Europe/Jersey">Europe/Jersey</option>
                                        <option value="Europe/Kaliningrad">Europe/Kaliningrad</option>
                                        <option value="Europe/Kiev">Europe/Kiev</option>
                                        <option value="Europe/Lisbon">Europe/Lisbon</option>
                                        <option value="Europe/Ljubljana">Europe/Ljubljana</option>
                                        <option value="Europe/London">Europe/London</option>
                                        <option value="Europe/Luxembourg">Europe/Luxembourg</option>
                                        <option value="Europe/Madrid">Europe/Madrid</option>
                                        <option value="Europe/Malta">Europe/Malta</option>
                                        <option value="Europe/Mariehamn">Europe/Mariehamn</option>
                                        <option value="Europe/Minsk">Europe/Minsk</option>
                                        <option value="Europe/Monaco">Europe/Monaco</option>
                                        <option value="Europe/Moscow">Europe/Moscow</option>
                                        <option value="Europe/Nicosia">Europe/Nicosia</option>
                                        <option value="Europe/Oslo">Europe/Oslo</option>
                                        <option value="Europe/Paris">Europe/Paris</option>
                                        <option value="Europe/Podgorica">Europe/Podgorica</option>
                                        <option value="Europe/Prague">Europe/Prague</option>
                                        <option value="Europe/Riga">Europe/Riga</option>
                                        <option value="Europe/Rome">Europe/Rome</option>
                                        <option value="Europe/Samara">Europe/Samara</option>
                                        <option value="Europe/San_Marino">Europe/San_Marino</option>
                                        <option value="Europe/Sarajevo">Europe/Sarajevo</option>
                                        <option value="Europe/Simferopol">Europe/Simferopol</option>
                                        <option value="Europe/Skopje">Europe/Skopje</option>
                                        <option value="Europe/Sofia">Europe/Sofia</option>
                                        <option value="Europe/Stockholm">Europe/Stockholm</option>
                                        <option value="Europe/Tallinn">Europe/Tallinn</option>
                                        <option value="Europe/Tirane">Europe/Tirane</option>
                                        <option value="Europe/Tiraspol">Europe/Tiraspol</option>
                                        <option value="Europe/Uzhgorod">Europe/Uzhgorod</option>
                                        <option value="Europe/Vaduz">Europe/Vaduz</option>
                                        <option value="Europe/Vatican">Europe/Vatican</option>
                                        <option value="Europe/Vienna">Europe/Vienna</option>
                                        <option value="Europe/Vilnius">Europe/Vilnius</option>
                                        <option value="Europe/Volgograd">Europe/Volgograd</option>
                                        <option value="Europe/Warsaw">Europe/Warsaw</option>
                                        <option value="Europe/Zagreb">Europe/Zagreb</option>
                                        <option value="Europe/Zaporozhye">Europe/Zaporozhye</option>
                                        <option value="Europe/Zurich">Europe/Zurich</option>
                                        <option value="GB">GB</option>
                                        <option value="GB-Eire">GB-Eire</option>
                                        <option value="GMT">GMT</option>
                                        <option value="GMT+0">GMT+0</option>
                                        <option value="GMT-0">GMT-0</option>
                                        <option value="GMT0">GMT0</option>
                                        <option value="Greenwich">Greenwich</option>
                                        <option value="HongKong">HongKong</option>
                                        <option value="HST">HST</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="Indian/Antananarivo">Indian/Antananarivo</option>
                                        <option value="Indian/Chagos">Indian/Chagos</option>
                                        <option value="Indian/Christmas">Indian/Christmas</option>
                                        <option value="Indian/Cocos">Indian/Cocos</option>
                                        <option value="Indian/Comoro">Indian/Comoro</option>
                                        <option value="Indian/Kerguelen">Indian/Kerguelen</option>
                                        <option value="Indian/Mahe">Indian/Mahe</option>
                                        <option value="Indian/Maldives">Indian/Maldives</option>
                                        <option value="Indian/Mauritius">Indian/Mauritius</option>
                                        <option value="Indian/Mayotte">Indian/Mayotte</option>
                                        <option value="Indian/Reunion">Indian/Reunion</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="JST-9">JST-9</option>
                                        <option value="Kwajalein">Kwajalein</option>
                                        <option value="Libya">Libya</option>
                                        <option value="MET">MET</option>
                                        <option value="Mexico/BajaNorte">Mexico/BajaNorte</option>
                                        <option value="Mexico/BajaSur">Mexico/BajaSur</option>
                                        <option value="Mexico/General">Mexico/General</option>
                                        <option value="MST">MST</option>
                                        <option value="MST7MDT">MST7MDT</option>
                                        <option value="Navajo">Navajo</option>
                                        <option value="NZ">NZ</option>
                                        <option value="NZ-CHAT">NZ-CHAT</option>
                                        <option value="Pacific/Apia">Pacific/Apia</option>
                                        <option value="Pacific/Auckland">Pacific/Auckland</option>
                                        <option value="Pacific/Chatham">Pacific/Chatham</option>
                                        <option value="Pacific/Chuuk">Pacific/Chuuk</option>
                                        <option value="Pacific/Easter">Pacific/Easter</option>
                                        <option value="Pacific/Efate">Pacific/Efate</option>
                                        <option value="Pacific/Enderbury">Pacific/Enderbury</option>
                                        <option value="Pacific/Fakaofo">Pacific/Fakaofo</option>
                                        <option value="Pacific/Fiji">Pacific/Fiji</option>
                                        <option value="Pacific/Funafuti">Pacific/Funafuti</option>
                                        <option value="Pacific/Galapagos">Pacific/Galapagos</option>
                                        <option value="Pacific/Gambier">Pacific/Gambier</option>
                                        <option value="Pacific/Guadalcanal">Pacific/Guadalcanal</option>
                                        <option value="Pacific/Guam">Pacific/Guam</option>
                                        <option value="Pacific/Honolulu">Pacific/Honolulu</option>
                                        <option value="Pacific/Johnston">Pacific/Johnston</option>
                                        <option value="Pacific/Kiritimati">Pacific/Kiritimati</option>
                                        <option value="Pacific/Kosrae">Pacific/Kosrae</option>
                                        <option value="Pacific/Kwajalein">Pacific/Kwajalein</option>
                                        <option value="Pacific/Majuro">Pacific/Majuro</option>
                                        <option value="Pacific/Marquesas">Pacific/Marquesas</option>
                                        <option value="Pacific/Midway">Pacific/Midway</option>
                                        <option value="Pacific/Nauru">Pacific/Nauru</option>
                                        <option value="Pacific/Niue">Pacific/Niue</option>
                                        <option value="Pacific/Norfolk">Pacific/Norfolk</option>
                                        <option value="Pacific/Noumea">Pacific/Noumea</option>
                                        <option value="Pacific/Pago_Pago">Pacific/Pago_Pago</option>
                                        <option value="Pacific/Palau">Pacific/Palau</option>
                                        <option value="Pacific/Pitcairn">Pacific/Pitcairn</option>
                                        <option value="Pacific/Pohnpei">Pacific/Pohnpei</option>
                                        <option value="Pacific/Ponape">Pacific/Ponape</option>
                                        <option value="Pacific/Port_Moresby">Pacific/Port_Moresby</option>
                                        <option value="Pacific/Rarotonga">Pacific/Rarotonga</option>
                                        <option value="Pacific/Saipan">Pacific/Saipan</option>
                                        <option value="Pacific/Samoa">Pacific/Samoa</option>
                                        <option value="Pacific/Tahiti">Pacific/Tahiti</option>
                                        <option value="Pacific/Tarawa">Pacific/Tarawa</option>
                                        <option value="Pacific/Tongatapu">Pacific/Tongatapu</option>
                                        <option value="Pacific/Truk">Pacific/Truk</option>
                                        <option value="Pacific/Wake">Pacific/Wake</option>
                                        <option value="Pacific/Wallis">Pacific/Wallis</option>
                                        <option value="Pacific/Yap">Pacific/Yap</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="PRC">PRC</option>
                                        <option value="PST8PDT">PST8PDT</option>
                                        <option value="ROC">ROC</option>
                                        <option value="ROK">ROK</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="UCT">UCT</option>
                                        <option value="Universal">Universal</option>
                                        <option value="US/Alaska">US/Alaska</option>
                                        <option value="US/Aleutian">US/Aleutian</option>
                                        <option value="US/Arizona">US/Arizona</option>
                                        <option value="US/Central">US/Central</option>
                                        <option value="US/East-Indiana">US/East-Indiana</option>
                                        <option value="US/Eastern">US/Eastern</option>
                                        <option value="US/Hawaii">US/Hawaii</option>
                                        <option value="US/Indiana-Starke">US/Indiana-Starke</option>
                                        <option value="US/Michigan">US/Michigan</option>
                                        <option value="US/Mountain">US/Mountain</option>
                                        <option value="US/Pacific">US/Pacific</option>
                                        <option value="US/Pacific-New">US/Pacific-New</option>
                                        <option value="US/Samoa">US/Samoa</option>
                                        <option value="UTC">UTC</option>
                                        <option value="W-SU">W-SU</option>
                                        <option value="WET">WET</option>
                                        <option value="Zulu">Zulu</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="notifyAt"> Notify At  </label>
                                    <div class="input-group">
                                        <input type="time" id="notifyAt" name="notifyAt" class="form-control timepicker timepicker-no-seconds" value="">
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

                                        <?php foreach ($group as $gitem){
                                            ?>
                                            <option value="<?php echo $gitem->id;?>"> <?php echo $gitem->name;?> </option>
                                            <?php
                                        }?>
                                    </select>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <h4 class="block"> Email </h4>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="customHeaderText"> Header Text  </label>
                                    <input type="text" class="form-control" id="customHeaderText" name="customHeaderText" placeholder="Following items are due. Please click on the View button to view/change this item" value="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="customFooterText"> Footer Text  </label>
                                    <input type="text" class="form-control" id="customFooterText" name="customFooterText" placeholder="You are recieving this notification since you have enabled email notifications in your account. If you would like to turn off the email notifications, please go to the categories's settings and switch Alert Enabled to Off. If you have any questions, contact us at support@aladdinpro.com" value="">
                                </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="form-actions">
                            <button type="submit" class="btn green"><i class="fa fa-save"></i>  Save  </button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade <?php echo $indexOfTab == '2' ? "active in": "";?>" id="tab_general_group">
                    <input type="hidden" name="generalType" value="2">
                    <input type="hidden" id="selectedGroup" value="<?php echo $selectedGroup; ?>">
                    <input type="hidden" id="selectedGroup1" value="<?php echo $selectedGroup1; ?>">

                    <div class="alert alert-danger hide">
                        <button class="close" data-close="alert"></button>
                        You have some form errors. Please check below.
                    </div>

                    <div class="form-body">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <input type="text" class="form-control" id="groupName">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group ">
                                <button id="btn-add-group" class="btn green"> Add  </button>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-md-6">
                            <div class="form-group ">
                                <select id="groupList" class="form-control">
                                    <?php
                                    foreach ($group as $item){
                                        echo ('<option value="'. $item->id.'">'. $item->name.'</option>');
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group ">
                                <button id="btn-update-group" class="btn green"> Update </button>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group ">
                                <button id="btn-del-group" class="btn green"> Delete  </button>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-md-6">
                            <div class="form-group ">
                                <ul class="list-group">
                                    <?php
                                    foreach ($users as $uitem){
                                        ?>
                                        <li class="list-group-item" style="min-height: 35px;">
                                            <div class="col-md-4">
                                                <?php echo $uitem->name; ?>
                                            </div>
                                            <div class="col-md-4">
                                                <?php echo $uitem->email; ?>
                                            </div>
                                            <input class="col-md-4 chkUser" id="chkUser-<?php echo $uitem->id;?>" type="checkbox" style="box-shadow: none;">
                                        </li>

                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group ">
                                <ul class="list-group">
                                    <?php
                                    foreach ($categories as $uitem){
                                        ?>
                                        <li class="list-group-item" style="min-height: 35px;">
                                            <div class="col-md-4">
                                                <?php echo $uitem->id; ?>
                                            </div>
                                            <div class="col-md-4">
                                                <?php echo $uitem->name; ?>
                                            </div>
                                            <input class="col-md-4 chkCat" id="chkCat-<?php echo $uitem->id;?>" type="checkbox" style="box-shadow: none;">
                                        </li>

                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="clearfix"></div>

                </div>
                <div class="tab-pane fade <?php echo $indexOfTab == '3' ? "active in": "";?>" id="tab_general_custom">
                    <form name="form-notification-settings" class="horizontal-form" role="form" method="POST" action="saveGeneral">
                        <input type="hidden" name="generalType" value="3">
                        <div class="form-body">

                            <h4 class="block"> Dashboard </h4>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="referenceNumberText"> Reference number  </label>
                                    <input type="text" class="form-control" name="referenceNumberText" placeholder="" value="<?php echo $custom['referencenumbertext'];?>">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="descriptionText"> Description  </label>
                                    <input type="text" class="form-control" name="descriptionText" placeholder="" value="<?php echo $custom['descriptiontext'];?>">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="dueonText"> Due on  </label>
                                    <input type="text" class="form-control" name="dueonText" placeholder="" value="<?php echo $custom['dueontext'];?>">
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

<script>

    $( document ).ready(function() {
        showGroup($('#selectedGroup').val());
        $('#alertDocGroupBySelection option[value="'+$('#selectedGroup1').val() + '"]').prop('selected', 'selected').change();
        showNotify($('#selectedGroup1').val());
    });

    function showNotify(id) {

        $.ajax(
            {
                type:"post",
                url: "<?php echo base_url(); ?>main/ajaxGroup",
                data:{
                    id:id,
                    type: 'get'
                },
                success:function(response)
                {

                    var group = JSON.parse(response);

                    $('#notifyAt').val(group.notifyat);
                    $('#customHeaderText').val(group.header);
                    $('#customFooterText').val(group.footer);

//                    console.log(group.timezone);
                    $('#timezoneSelection option[value="'+group.timezone + '"]').prop('selected', 'selected').change();;


                }
            }
        );
    }

    function showGroup(id) {
        $.ajax(
            {
                type:"post",
                url: "<?php echo base_url(); ?>main/ajaxGroup",
                data:{
                    id:id,
                    type: 'get'
                },
                success:function(response)
                {
//                    console.log(response);
                    $(".chkUser").prop('checked', false);
                    $(".chkCat").prop('checked', false);
                    var group = JSON.parse(response);
                    var ids = group.user_ids;
                    if(ids){
                        for( var i=0; i< ids.length; i++){
                            $( "#chkUser-" + ids[i]).prop('checked', true);
                        }
                    }
                    ids = group.category_ids;

                    if(ids){
                        for( var i=0; i< ids.length; i++){
//                            console.log(ids[i]);
                            $( "#chkCat-" + ids[i]).prop('checked', true);
                        }
                    }
                }
            }
        );
    }

    $(function(){
        $( "#btn-add-group" ).click(function(event){
            event.preventDefault();
            var groupName= $("#groupName").val();
            $.ajax(
                {
                    type:"post",
                    url: "<?php echo base_url(); ?>main/ajaxGroup",
                    data:{
                        groupName:groupName,
                        type: 'add'
                    },
                    success:function(response)
                    {
                        alert("Add Success!");
//                        console.log(response);
                        //$(".chkUser").prop('checked', false);
                        //$(".chkCat").prop('checked', false);
                        $('#groupList').append($('<option>', {
                            value: response,
                            text: groupName
                        }));
                    }
                }
            );
        });

        $('#groupList').on('change', function (event) {
            event.preventDefault();
            var optionSelected = $("option:selected", this);
            var valueSelected = this.value;
            $('#selectedGroup').val(valueSelected);
            showGroup(valueSelected);
        });

        $('#alertDocGroupBySelection').on('change', function (event) {
            event.preventDefault();
            var optionSelected = $("option:selected", this);
            var valueSelected = this.value;
            $('#selectedGroup1').val(valueSelected);
            showNotify(valueSelected);
        });

        $( "#btn-update-group" ).click(function(event){
            event.preventDefault();
            var selGroup= $('#selectedGroup').val();
            var userIds = [];
            $( ".chkUser" ).each(function(index) {
                if($( this ).prop('checked')){
                    var id = $( this ).attr('id');
                    var tabId = id.split("-").pop();
                    userIds.push(tabId);
                }
            });
            var catIds = [];
            $( ".chkCat" ).each(function(index) {
                if($( this ).prop('checked')){
                    var id = $( this ).attr('id');
                    var tabId = id.split("-").pop();
                    catIds.push(tabId);
                }
            });

            $.ajax(
                {
                    type:"post",
                    url: "<?php echo base_url(); ?>main/ajaxGroup",
                    data:{
                        selGroup:selGroup,
                        userIds: userIds,
                        catIds: catIds,
                        type: 'update'
                    },
                    success:function(response)
                    {
                        alert("Update Success!");
//                        console.log(response);
                    }
                }
            );

        });

        $( "#btn-del-group" ).click(function(event){
            event.preventDefault();
            var selGroup= $('#selectedGroup').val();

            $.ajax(
                {
                    type:"post",
                    url: "<?php echo base_url(); ?>main/ajaxGroup",
                    data:{
                        selGroup:selGroup,
                        type: 'delete'
                    },
                    success:function(response)
                    {
//                        console.log(response);
                        $('#groupList option[value="'+selGroup + '"]').remove();

                    }
                }
            );

        });


    });
</script>