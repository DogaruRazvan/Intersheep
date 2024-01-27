<!DOCTYPE html>
<html>
<head>
	<title>Register_Company</title>
	<link rel="stylesheet" type="text/css" href="RegisterCompany.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <script src="Login.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    
</head>
<body>
    <div class="t1">Creeaza un cont nou pentru compania ta</div>
    <div class="t2">Recruteaza cei mai buni studenti din oras</div>
    <div class="box">
        
	<div class="main">  
    <form action="insert_company.php" method="post">
        <div class="t5">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ88Oc3--4WLUB6qSv-vDJOkhG8-FpBCZTVlg&usqp=CAU">
            Detaliile companiei
        </div>
        <div class="IdBox">	
		
        <select class="country" type="text" name="tara_comp" required="">
            <option value="ro" selected="selected">RO</option>
                                                                    <option value="at">AT</option>
                                                                    <option value="be">BE</option>
                                                                    <option value="bg">BG</option>
                                                                    <option value="cy">CY</option>
                                                                    <option value="cz">CZ</option>
                                                                    <option value="de">DE</option>
                                                                    <option value="dk">DK</option>
                                                                    <option value="ee">EE</option>
                                                                    <option value="el">EL</option>
                                                                    <option value="es">ES</option>
                                                                    <option value="fi">FI</option>
                                                                    <option value="fr">FR</option>
                                                                    <option value="hr">HR</option>
                                                                    <option value="hu">HU</option>
                                                                    <option value="ie">IE</option>
                                                                    <option value="it">IT</option>
                                                                    <option value="lt">LT</option>
                                                                    <option value="lu">LU</option>
                                                                    <option value="lv">LV</option>
                                                                    <option value="mt">MT</option>
                                                                    <option value="nl">NL</option>
                                                                    <option value="pl">PL</option>
                                                                    <option value="pt">PT</option>
                                                                    <option value="se">SE</option>
                                                                    <option value="si">SI</option>
                                                                    <option value="sk">SK</option>
                                                                    <option value="xi">XI</option>
                                                                    <option value="--">Non-UE</option>
        </select>   
        <input class="CUI" type="text" name="CUI" placeholder="Cod unic de inregistrare (CUI)" required="">
        </div>
        <input class="mail" type="text" name="reg_com" placeholder="Numar de ordine al Registrului Comertului" required="">
        <input class="mail" type="text" name="nume_comp" placeholder="Numele companiei" required="">
        <div class="t5">
            <img src="https://cdn-icons-png.flaticon.com/512/2928/2928883.png">
            Adresa sediu social
        </div>
        <input class="mail" type="text" name="strada" placeholder="Strada, numarul..." required="">
        <div class="IdBox">
            <input class="oras" type="text" name="oras_comp" placeholder="Oras" required="">
            <select class="country2" type="text" name="tara_sediu" required="">
                <option value="1" data-slug="af">Afganistan</option>
                                                                    <option value="181" data-slug="za">Africa de Sud</option>
                                                                    <option value="2" data-slug="al">Albania</option>
                                                                    <option value="3" data-slug="dz">Algeria</option>
                                                                    <option value="5" data-slug="ad">Andorra</option>
                                                                    <option value="6" data-slug="ao">Angola</option>
                                                                    <option value="7" data-slug="ai">Anguilla</option>
                                                                    <option value="8" data-slug="ag">Antigua și Barbuda</option>
                                                                    <option value="171" data-slug="sa">Arabia Saudită</option>
                                                                    <option value="9" data-slug="ar">Argentina</option>
                                                                    <option value="10" data-slug="am">Armenia</option>
                                                                    <option value="11" data-slug="aw">Aruba</option>
                                                                    <option value="12" data-slug="au">Australia</option>
                                                                    <option value="13" data-slug="at">Austria</option>
                                                                    <option value="14" data-slug="az">Azerbaidjan</option>
                                                                    <option value="15" data-slug="bs">Bahamas</option>
                                                                    <option value="16" data-slug="bh">Bahrain</option>
                                                                    <option value="17" data-slug="bd">Bangladesh</option>
                                                                    <option value="18" data-slug="bb">Barbados</option>
                                                                    <option value="19" data-slug="by">Belarus</option>
                                                                    <option value="20" data-slug="be">Belgia</option>
                                                                    <option value="21" data-slug="bz">Belize</option>
                                                                    <option value="22" data-slug="bj">Benin</option>
                                                                    <option value="23" data-slug="bm">Bermuda</option>
                                                                    <option value="24" data-slug="bt">Bhutan</option>
                                                                    <option value="25" data-slug="bo">Bolivia</option>
                                                                    <option value="26" data-slug="ba">Bosnia și Herțegovina</option>
                                                                    <option value="27" data-slug="bw">Botswana</option>
                                                                    <option value="28" data-slug="br">Brazilia</option>
                                                                    <option value="30" data-slug="bn">Brunei</option>
                                                                    <option value="31" data-slug="bg">Bulgaria</option>
                                                                    <option value="32" data-slug="bf">Burkina Faso</option>
                                                                    <option value="33" data-slug="bi">Burundi</option>
                                                                    <option value="34" data-slug="kh">Cambodgia</option>
                                                                    <option value="35" data-slug="cm">Camerun</option>
                                                                    <option value="36" data-slug="ca">Canada</option>
                                                                    <option value="37" data-slug="cv">Capul Verde</option>
                                                                    <option value="52" data-slug="cz">Cehia</option>
                                                                    <option value="41" data-slug="cl">Chile</option>
                                                                    <option value="42" data-slug="cn">China</option>
                                                                    <option value="40" data-slug="td">Ciad</option>
                                                                    <option value="51" data-slug="cy">Cipru</option>
                                                                    <option value="43" data-slug="co">Columbia</option>
                                                                    <option value="44" data-slug="km">Comore</option>
                                                                    <option value="45" data-slug="cg">Congo - Brazzaville</option>
                                                                    <option value="53" data-slug="cd">Congo - Kinshasa</option>
                                                                    <option value="145" data-slug="kp">Coreea de Nord</option>
                                                                    <option value="182" data-slug="kr">Coreea de Sud</option>
                                                                    <option value="47" data-slug="cr">Costa Rica</option>
                                                                    <option value="48" data-slug="ci">Cote d'Ivoire</option>
                                                                    <option value="49" data-slug="hr">Croația</option>
                                                                    <option value="50" data-slug="cu">Cuba</option>
                                                                    <option value="54" data-slug="dk">Danemarca</option>
                                                                    <option value="55" data-slug="dj">Djibouti</option>
                                                                    <option value="56" data-slug="dm">Dominica</option>
                                                                    <option value="59" data-slug="ec">Ecuador</option>
                                                                    <option value="60" data-slug="eg">Egipt</option>
                                                                    <option value="61" data-slug="sv">El Salvador</option>
                                                                    <option value="189" data-slug="ch">Elveția</option>
                                                                    <option value="207" data-slug="ae">Emiratele Arabe Unite</option>
                                                                    <option value="63" data-slug="er">Eritreea</option>
                                                                    <option value="64" data-slug="ee">Estonia</option>
                                                                    <option value="187" data-slug="sz">eSwatini</option>
                                                                    <option value="65" data-slug="et">Etiopia</option>
                                                                    <option value="68" data-slug="fj">Fiji</option>
                                                                    <option value="155" data-slug="ph">Filipine</option>
                                                                    <option value="69" data-slug="fi">Finlanda</option>
                                                                    <option value="70" data-slug="fr">Franța</option>
                                                                    <option value="72" data-slug="ga">Gabon</option>
                                                                    <option value="73" data-slug="gm">Gambia</option>
                                                                    <option value="74" data-slug="ge">Georgia</option>
                                                                    <option value="75" data-slug="de">Germania</option>
                                                                    <option value="76" data-slug="gh">Ghana</option>
                                                                    <option value="77" data-slug="gi">Gibraltar</option>
                                                                    <option value="78" data-slug="gr">Grecia</option>
                                                                    <option value="80" data-slug="gd">Grenada</option>
                                                                    <option value="79" data-slug="gl">Groenlanda</option>
                                                                    <option value="81" data-slug="gu">Guam</option>
                                                                    <option value="82" data-slug="gt">Guatemala</option>
                                                                    <option value="83" data-slug="gn">Guineea</option>
                                                                    <option value="62" data-slug="gq">Guineea Ecuatorială</option>
                                                                    <option value="84" data-slug="gy">Guyana</option>
                                                                    <option value="85" data-slug="ht">Haiti</option>
                                                                    <option value="86" data-slug="hn">Honduras</option>
                                                                    <option value="90" data-slug="in">India</option>
                                                                    <option value="91" data-slug="id">Indonezia</option>
                                                                    <option value="38" data-slug="ky">Insulele Cayman</option>
                                                                    <option value="46" data-slug="ck">Insulele Cook</option>
                                                                    <option value="66" data-slug="fk">Insulele Falkland</option>
                                                                    <option value="67" data-slug="fo">Insulele Feroe</option>
                                                                    <option value="146" data-slug="mp">Insulele Mariane de Nord</option>
                                                                    <option value="122" data-slug="mh">Insulele Marshall</option>
                                                                    <option value="179" data-slug="sb">Insulele Solomon</option>
                                                                    <option value="202" data-slug="tc">Insulele Turks și Caicos</option>
                                                                    <option value="204" data-slug="vi">Insulele Virgine Americane</option>
                                                                    <option value="29" data-slug="vg">Insulele Virgine Britanice</option>
                                                                    <option value="99" data-slug="jo">Iordania</option>
                                                                    <option value="93" data-slug="iq">Irak</option>
                                                                    <option value="92" data-slug="ir">Iran</option>
                                                                    <option value="94" data-slug="ie">Irlanda</option>
                                                                    <option value="89" data-slug="is">Islanda</option>
                                                                    <option value="95" data-slug="il">Israel</option>
                                                                    <option value="96" data-slug="it">Italia</option>
                                                                    <option value="97" data-slug="jm">Jamaica</option>
                                                                    <option value="98" data-slug="jp">Japonia</option>
                                                                    <option value="100" data-slug="kz">Kazahstan</option>
                                                                    <option value="101" data-slug="ke">Kenya</option>
                                                                    <option value="102" data-slug="ki">Kiribati</option>
                                                                    <option value="103" data-slug="kw">Kuweit</option>
                                                                    <option value="104" data-slug="kg">Kârgâzstan</option>
                                                                    <option value="105" data-slug="la">Laos</option>
                                                                    <option value="108" data-slug="ls">Lesotho</option>
                                                                    <option value="106" data-slug="lv">Letonia</option>
                                                                    <option value="107" data-slug="lb">Liban</option>
                                                                    <option value="109" data-slug="lr">Liberia</option>
                                                                    <option value="110" data-slug="ly">Libia</option>
                                                                    <option value="111" data-slug="li">Liechtenstein</option>
                                                                    <option value="112" data-slug="lt">Lituania</option>
                                                                    <option value="113" data-slug="lu">Luxemburg</option>
                                                                    <option value="115" data-slug="mk">Macedonia de Nord</option>
                                                                    <option value="116" data-slug="mg">Madagascar</option>
                                                                    <option value="117" data-slug="mw">Malawi</option>
                                                                    <option value="118" data-slug="my">Malaysia</option>
                                                                    <option value="119" data-slug="mv">Maldive</option>
                                                                    <option value="120" data-slug="ml">Mali</option>
                                                                    <option value="121" data-slug="mt">Malta</option>
                                                                    <option value="132" data-slug="ma">Maroc</option>
                                                                    <option value="123" data-slug="mr">Mauritania</option>
                                                                    <option value="124" data-slug="mu">Mauritius</option>
                                                                    <option value="125" data-slug="mx">Mexic</option>
                                                                    <option value="126" data-slug="fm">Micronezia</option>
                                                                    <option value="128" data-slug="mc">Monaco</option>
                                                                    <option value="129" data-slug="mn">Mongolia</option>
                                                                    <option value="131" data-slug="ms">Montserrat</option>
                                                                    <option value="133" data-slug="mz">Mozambic</option>
                                                                    <option value="130" data-slug="me">Muntenegru</option>
                                                                    <option value="134" data-slug="mm">Myanmar (Birmania)</option>
                                                                    <option value="135" data-slug="na">Namibia</option>
                                                                    <option value="136" data-slug="nr">Nauru</option>
                                                                    <option value="137" data-slug="np">Nepal</option>
                                                                    <option value="141" data-slug="ni">Nicaragua</option>
                                                                    <option value="142" data-slug="ne">Niger</option>
                                                                    <option value="143" data-slug="ng">Nigeria</option>
                                                                    <option value="144" data-slug="nu">Niue</option>
                                                                    <option value="147" data-slug="no">Norvegia</option>
                                                                    <option value="139" data-slug="nc">Noua Caledonie</option>
                                                                    <option value="140" data-slug="nz">Noua Zeelandă</option>
                                                                    <option value="148" data-slug="om">Oman</option>
                                                                    <option value="149" data-slug="pk">Pakistan</option>
                                                                    <option value="150" data-slug="pw">Palau</option>
                                                                    <option value="151" data-slug="pa">Panama</option>
                                                                    <option value="152" data-slug="pg">Papua-Noua Guinee</option>
                                                                    <option value="153" data-slug="py">Paraguay</option>
                                                                    <option value="154" data-slug="pe">Peru</option>
                                                                    <option value="71" data-slug="pf">Polinezia Franceză</option>
                                                                    <option value="156" data-slug="pl">Polonia</option>
                                                                    <option value="157" data-slug="pt">Portugalia</option>
                                                                    <option value="158" data-slug="pr">Puerto Rico</option>
                                                                    <option value="159" data-slug="qa">Qatar</option>
                                                                    <option value="87" data-slug="hk">R.A.S. Hong Kong a Chinei</option>
                                                                    <option value="114" data-slug="mo">R.A.S. Macao, China</option>
                                                                    <option value="208" data-slug="gb">Regatul Unit</option>
                                                                    <option value="39" data-slug="cf">Republica Centrafricană</option>
                                                                    <option value="57" data-slug="do">Republica Dominicană</option>
                                                                    <option value="127" data-slug="md">Republica Moldova</option>
                                                                    <option value="160" data-slug="ro" selected="selected">România</option>
                                                                    <option value="161" data-slug="ru">Rusia</option>
                                                                    <option value="162" data-slug="rw">Rwanda</option>
                                                                    <option value="166" data-slug="pm">Saint-Pierre și Miquelon</option>
                                                                    <option value="164" data-slug="kn">Saint Kitts și Nevis</option>
                                                                    <option value="167" data-slug="vc">Saint Vincent și Grenadinele</option>
                                                                    <option value="168" data-slug="ws">Samoa</option>
                                                                    <option value="4" data-slug="as">Samoa Americană</option>
                                                                    <option value="169" data-slug="sm">San Marino</option>
                                                                    <option value="170" data-slug="st">Sao Tome și Pri­ncipe</option>
                                                                    <option value="172" data-slug="sn">Senegal</option>
                                                                    <option value="173" data-slug="rs">Serbia</option>
                                                                    <option value="174" data-slug="sc">Seychelles</option>
                                                                    <option value="163" data-slug="sh">Sfânta Elena</option>
                                                                    <option value="165" data-slug="lc">Sfânta Lucia</option>
                                                                    <option value="175" data-slug="sl">Sierra Leone</option>
                                                                    <option value="176" data-slug="sg">Singapore</option>
                                                                    <option value="190" data-slug="sy">Siria</option>
                                                                    <option value="177" data-slug="sk">Slovacia</option>
                                                                    <option value="178" data-slug="si">Slovenia</option>
                                                                    <option value="180" data-slug="so">Somalia</option>
                                                                    <option value="183" data-slug="es">Spania</option>
                                                                    <option value="184" data-slug="lk">Sri Lanka</option>
                                                                    <option value="209" data-slug="us">Statele Unite ale Americii</option>
                                                                    <option value="213" data-slug="va">Statul Cetății Vaticanului</option>
                                                                    <option value="185" data-slug="sd">Sudan</option>
                                                                    <option value="188" data-slug="se">Suedia</option>
                                                                    <option value="186" data-slug="sr">Suriname</option>
                                                                    <option value="192" data-slug="tj">Tadjikistan</option>
                                                                    <option value="191" data-slug="tw">Taiwan</option>
                                                                    <option value="193" data-slug="tz">Tanzania</option>
                                                                    <option value="194" data-slug="th">Thailanda</option>
                                                                    <option value="58" data-slug="tl">Timor-Leste</option>
                                                                    <option value="195" data-slug="tg">Togo</option>
                                                                    <option value="196" data-slug="tk">Tokelau</option>
                                                                    <option value="197" data-slug="to">Tonga</option>
                                                                    <option value="198" data-slug="tt">Trinidad și Tobago</option>
                                                                    <option value="199" data-slug="tn">Tunisia</option>
                                                                    <option value="200" data-slug="tr">Turcia</option>
                                                                    <option value="201" data-slug="tm">Turkmenistan</option>
                                                                    <option value="203" data-slug="tv">Tuvalu</option>
                                                                    <option value="206" data-slug="ua">Ucraina</option>
                                                                    <option value="205" data-slug="ug">Uganda</option>
                                                                    <option value="88" data-slug="hu">Ungaria</option>
                                                                    <option value="210" data-slug="uy">Uruguay</option>
                                                                    <option value="211" data-slug="uz">Uzbekistan</option>
                                                                    <option value="212" data-slug="vu">Vanuatu</option>
                                                                    <option value="214" data-slug="ve">Venezuela</option>
                                                                    <option value="215" data-slug="vn">Vietnam</option>
                                                                    <option value="216" data-slug="wf">Wallis și Futuna</option>
                                                                    <option value="217" data-slug="ye">Yemen</option>
                                                                    <option value="218" data-slug="zm">Zambia</option>
                                                                    <option value="219" data-slug="zw">Zimbabwe</option>
                                                                    <option value="138" data-slug="nl">Țările de Jos</option>
                                                            
            </select>
        </div>
        <div class="t5">
            <img src="https://cdn-icons-png.flaticon.com/512/6521/6521996.png">
            Date pentru autentificare pe site
        </div>
        <input class="mail" type="email" name="email_comp" placeholder="E-mail" required="">
        <div class="containerParola">
            <input class="passwordBox" type="password"  name="parola_comp" placeholder="Password" id="myInput" required="">
            <i class="far fa-eye eyeSee" type="checkbox"  style="cursor:pointer;" onclick="myFunction()"></i>
            </div>
            
            <div class="terms">
                <input type="checkbox" required="">
                Pentru a continua te rugam sa confirmi ca esti de acord cu <a class="link"href="">Termenii si conditiile</a> noastre
            </div>
            <button type="submit" value="submit">Register</button>
</form>
	</div>
    </div>
</body>
</html>