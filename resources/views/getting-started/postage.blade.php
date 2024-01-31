<!DOCTYPE HTML>
<HTML dir = "ltr" lang = "fr">

<!-- Mirrored from www.shipito.com/fr/help/postage by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 13:44:47 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
@include('layouts.head-guest')
<BODY>
<DIV ID = "menu-filler"></DIV>
<A NAME = "page-top" ID = "page-top"></A>
@include('layouts.header-guest')
<DIV CLASS = "main-body">


<STYLE TYPE = "text/css">
.top-banner-outer {
   background-image: url("shipito/fr/imgs/shipmethods/Banner%20Image.jpg");
   background-size: auto 300px;
   background-position: center center;
   background-repeat: no-repeat;
   height: 300px;
   margin-bottom: 50px;
}

.top-banner-inner H1 {
   margin: 0px;
   text-align: center;
   line-height: 300px;
   vertical-align: middle;
}

.details .st-country-pick-list {
   max-width: 400px;
   margin-bottom: 50px;
}

.details P {
   line-height: 26px;
   margin-bottom: 26px;
}
P.allpackages {
   margin-bottom: 80px;
}

.details H2.section-title {
   margin-top: 80px;
}

.section-title A {
   color: #000000;
   text-decoration: none;
}

.shipmethod-title IMG { max-height: 50px; max-width: 150px; }

.bottom-button {
  margin-top: 40px;
  margin-bottom: 80px;
  padding-top: 40px;
  border-top: solid 1px #C1C1C1;
}

.shipmethod-title SPAN.shipmethod-caret {
  float: right;
  margin-top: -15px;
  display: inline-block;
  width: 30px;
  height: 30px;
  background-image: url("shipito/fr/imgs/navigation/DownArrow.svg");
  background-size: 20px 20px;
  background-repeat: no-repeat;
  background-position: center center;
}
.shipmethod-title.open SPAN.shipmethod-caret {
  background-image: url("shipito/fr/imgs/navigation/UpArrow.svg");
}

.shipmethod-header {
  background-position: left top;
  background-repeat: no-repeat;
  background-size: 50px auto;
  padding-left: 60px;
  min-height: 120px;
  color: #000000;
}

.shipmethod-header LABEL {
  color: #00A9CE;
  display: block;
  margin-bottom: 5px;
  font-weight: 300;
  font-size: 18px;
}

.btn-row {
  margin-top: 34px;
  margin-bottom: 20px;
}

.shipmethod-notes {
  background-image: url("shipito/fr/imgs/shipmethods/Note.svg");
}
.shipmethod-max-size {
  background-image: url("shipito/fr/imgs/shipmethods/Size.svg");
}
.shipmethod-tracking {
  background-image: url("shipito/fr/imgs/shipmethods/Tracking.svg");
}
.shipmethod-max-weight {
  background-image: url("shipito/fr/imgs/shipmethods/Weight.svg");
}
.shipmethod-max-size UL.blue-bullets LI {
  margin-bottom: 4px;
  color: #000000;
}
.collapse UL.blue-bullets LI {
  margin-bottom: 4px;
}
.shipmethod-max-size UL.blue-bullets {
  margin-top: 0px;
}

.shipmethod-max-size UL.blue-bullets LI SMALL {
  font-size: 100%;
  color: #808080;
}

.shipping-method .btn, .details-btn {
  text-transform: uppercase;
  padding: 15px 35px 15px 35px;
  font-size: 14px;
}
A.more-info {
   display: inline-block;
   height: 30px;
   width: 30px;
}
.more-info IMG {
   max-height: 22px;
   margin-top: -5px;
}

.popover {
  border-color: #00A9CE;
  font-family: Montserrat, sans-serif;
  width: 280px;
  height: 200px;
  background-image: url("shipito/fr/imgs/shipmethods/Dimbox_French.jpg");
  background-size: 260px 180px;
  background-position: center center;
  background-repeat: no-repeat;
}
.popover.top > .arrow {
  border-top-color: #00A9CE !important;
}

.popover-content {
  color: #535353;
}

.ca-row { margin-top: 10px; }

@media (max-width:767px) {
  BODY {
    cursor: pointer;
  }
  .shipping-method {
    padding: 0px 0px 0px 15px;
  }
 DIV.section-title.shipmethod-title {
    margin-left: -15px;
    margin-right: -15px;
    padding-top: 20px;
 }
 .shipmethod-title SPAN.title-content {
   font-size: 20px;
   padding: 0px;
 }
 .shipmethod-title IMG {
   max-height: 30px;
 }
 .shipmethod-title SPAN.shipmethod-caret {
   margin-top: 5px;
 }
 .btn-row {
   margin-top: 4px;
   margin-bottom: 40px;
 }
 .bottom-button {
   margin-bottom: 20px;
 }
 .shipmethod-header {
   min-height: auto;
 }
 .details H2.section-title {
   margin-top: 40px;
 }
}
</STYLE>


<DIV CLASS = "container-fluid top-banner-outer">
 <DIV CLASS = "container top-banner-inner">
  <H1>Modes d’expédition</H1>
 </DIV>
</DIV>

<DIV CLASS = "container details">
 <DIV CLASS = "row">
  <DIV CLASS = "col-xs-12">
   <CENTER><UL CLASS = "st-country-pick-list form-control"
 data-action = "link"
 data-url = ""
 data-element = "countrycode"
 data-element-content = "code"
>
 <LI CLASS = "dropdown st-selected-country" data-current = "US">
  <A CLASS = "dropdown-toggle st-country st-country-US" data-toggle = "dropdown">
   <SPAN CLASS = "st-selected-country-name">États-Unis</SPAN>
   <SPAN CLASS = "ga-caret"></SPAN>
  </A>
  <UL CLASS = "dropdown-menu">
  <LI><INPUT TYPE = "TEXT" CLASS = "form-control st-country-filter"></LI>
  <LI><A CLASS = "st-country-option st-country-AF" data-country-code = "AF" data-country-name = "Afghanistan" data-country-name-local = "Afghanistan" data-country-id = "121">Afghanistan</A></LI>
  <LI><A CLASS = "st-country-option st-country-ZA" data-country-code = "ZA" data-country-name = "South Africa" data-country-name-local = "Afrique du Sud" data-country-id = "30">Afrique du Sud</A></LI>
  <LI><A CLASS = "st-country-option st-country-AL" data-country-code = "AL" data-country-name = "Albania" data-country-name-local = "Albanie" data-country-id = "154">Albanie</A></LI>
  <LI><A CLASS = "st-country-option st-country-DZ" data-country-code = "DZ" data-country-name = "Algeria" data-country-name-local = "Algérie" data-country-id = "23">Algérie</A></LI>
  <LI><A CLASS = "st-country-option st-country-DE" data-country-code = "DE" data-country-name = "Germany" data-country-name-local = "Allemagne" data-country-id = "172">Allemagne</A></LI>
  <LI><A CLASS = "st-country-option st-country-AD" data-country-code = "AD" data-country-name = "Andorra" data-country-name-local = "Andorre" data-country-id = "155">Andorre</A></LI>
  <LI><A CLASS = "st-country-option st-country-AO" data-country-code = "AO" data-country-name = "Angola" data-country-name-local = "Angola" data-country-id = "16">Angola</A></LI>
  <LI><A CLASS = "st-country-option st-country-AI" data-country-code = "AI" data-country-name = "Anguilla" data-country-name-local = "Anguilla" data-country-id = "45">Anguilla</A></LI>
  <LI><A CLASS = "st-country-option st-country-AQ" data-country-code = "AQ" data-country-name = "Antarctica" data-country-name-local = "Antarctique" data-country-id = "94">Antarctique</A></LI>
  <LI><A CLASS = "st-country-option st-country-AG" data-country-code = "AG" data-country-name = "Antigua and Barbuda" data-country-name-local = "Antigua-et-Barbuda" data-country-id = "46">Antigua-et-Barbuda</A></LI>
  <LI><A CLASS = "st-country-option st-country-SA" data-country-code = "SA" data-country-name = "Saudi Arabia" data-country-name-local = "Arabie Saoudite" data-country-id = "189">Arabie Saoudite</A></LI>
  <LI><A CLASS = "st-country-option st-country-AR" data-country-code = "AR" data-country-name = "Argentina" data-country-name-local = "Argentine" data-country-id = "80">Argentine</A></LI>
  <LI><A CLASS = "st-country-option st-country-AM" data-country-code = "AM" data-country-name = "Armenia" data-country-name-local = "Arménie" data-country-id = "95">Arménie</A></LI>
  <LI><A CLASS = "st-country-option st-country-AW" data-country-code = "AW" data-country-name = "Aruba" data-country-name-local = "Aruba" data-country-id = "47">Aruba</A></LI>
  <LI><A CLASS = "st-country-option st-country-AU" data-country-code = "AU" data-country-name = "Australia" data-country-name-local = "Australie" data-country-id = "194">Australie</A></LI>
  <LI><A CLASS = "st-country-option st-country-AT" data-country-code = "AT" data-country-name = "Austria" data-country-name-local = "Autriche" data-country-id = "169">Autriche</A></LI>
  <LI><A CLASS = "st-country-option st-country-AZ" data-country-code = "AZ" data-country-name = "Azerbaijan" data-country-name-local = "Azerbaïdjan" data-country-id = "96">Azerbaïdjan</A></LI>
  <LI><A CLASS = "st-country-option st-country-BS" data-country-code = "BS" data-country-name = "Bahamas" data-country-name-local = "Bahamas" data-country-id = "48">Bahamas</A></LI>
  <LI><A CLASS = "st-country-option st-country-BH" data-country-code = "BH" data-country-name = "Bahrain" data-country-name-local = "Bahreïn" data-country-id = "180">Bahreïn</A></LI>
  <LI><A CLASS = "st-country-option st-country-BD" data-country-code = "BD" data-country-name = "Bangladesh" data-country-name-local = "Bangladesh" data-country-id = "122">Bangladesh</A></LI>
  <LI><A CLASS = "st-country-option st-country-BB" data-country-code = "BB" data-country-name = "Barbados" data-country-name-local = "Barbade" data-country-id = "49">Barbade</A></LI>
  <LI><A CLASS = "st-country-option st-country-BE" data-country-code = "BE" data-country-name = "Belgium" data-country-name-local = "Belgique" data-country-id = "170">Belgique</A></LI>
  <LI><A CLASS = "st-country-option st-country-BM" data-country-code = "BM" data-country-name = "Bermuda" data-country-name-local = "Bermudes" data-country-id = "76">Bermudes</A></LI>
  <LI><A CLASS = "st-country-option st-country-BT" data-country-code = "BT" data-country-name = "Bhutan" data-country-name-local = "Bhoutan" data-country-id = "123">Bhoutan</A></LI>
  <LI><A CLASS = "st-country-option st-country-BY" data-country-code = "BY" data-country-name = "Belarus" data-country-name-local = "Biélorussie" data-country-id = "132">Biélorussie</A></LI>
  <LI><A CLASS = "st-country-option st-country-BO" data-country-code = "BO" data-country-name = "Bolivia" data-country-name-local = "Bolivie" data-country-id = "81">Bolivie</A></LI>
  <LI><A CLASS = "st-country-option st-country-BQ" data-country-code = "BQ" data-country-name = "Bonaire, Sint Eustatius & Saba" data-country-name-local = "Bonaire, Saint Eustache & Saba" data-country-id = "235">Bonaire, Saint Eustache & Saba</A></LI>
  <LI><A CLASS = "st-country-option st-country-BA" data-country-code = "BA" data-country-name = "Bosnia and Herzegovina" data-country-name-local = "Bosnie Herzégovine" data-country-id = "156">Bosnie Herzégovine</A></LI>
  <LI><A CLASS = "st-country-option st-country-BW" data-country-code = "BW" data-country-name = "Botswana" data-country-name-local = "Botswana" data-country-id = "27">Botswana</A></LI>
  <LI><A CLASS = "st-country-option st-country-BN" data-country-code = "BN" data-country-name = "Brunei Darussalam" data-country-name-local = "Bruneï Darussalam" data-country-id = "111">Bruneï Darussalam</A></LI>
  <LI><A CLASS = "st-country-option st-country-BR" data-country-code = "BR" data-country-name = "Brazil" data-country-name-local = "Brésil" data-country-id = "82">Brésil</A></LI>
  <LI><A CLASS = "st-country-option st-country-BG" data-country-code = "BG" data-country-name = "Bulgaria" data-country-name-local = "Bulgarie" data-country-id = "136">Bulgarie</A></LI>
  <LI><A CLASS = "st-country-option st-country-BF" data-country-code = "BF" data-country-name = "Burkina Faso" data-country-name-local = "Burkina Faso" data-country-id = "33">Burkina Faso</A></LI>
  <LI><A CLASS = "st-country-option st-country-BI" data-country-code = "BI" data-country-name = "Burundi" data-country-name-local = "Burundi" data-country-id = "1">Burundi</A></LI>
  <LI><A CLASS = "st-country-option st-country-BZ" data-country-code = "BZ" data-country-name = "Belize" data-country-name-local = "Bélize" data-country-id = "68">Bélize</A></LI>
  <LI><A CLASS = "st-country-option st-country-BJ" data-country-code = "BJ" data-country-name = "Benin" data-country-name-local = "Bénin" data-country-id = "32">Bénin</A></LI>
  <LI><A CLASS = "st-country-option st-country-KH" data-country-code = "KH" data-country-name = "Cambodia" data-country-name-local = "Cambodge" data-country-id = "112">Cambodge</A></LI>
  <LI><A CLASS = "st-country-option st-country-CM" data-country-code = "CM" data-country-name = "Cameroon" data-country-name-local = "Cameroun" data-country-id = "17">Cameroun</A></LI>
  <LI><A CLASS = "st-country-option st-country-CA" data-country-code = "CA" data-country-name = "Canada" data-country-name-local = "Canada" data-country-id = "77">Canada</A></LI>
  <LI><A CLASS = "st-country-option st-country-CV" data-country-code = "CV" data-country-name = "Cape Verde" data-country-name-local = "Cap-Vert" data-country-id = "34">Cap-Vert</A></LI>
  <LI><A CLASS = "st-country-option st-country-CL" data-country-code = "CL" data-country-name = "Chile" data-country-name-local = "Chili" data-country-id = "83">Chili</A></LI>
  <LI><A CLASS = "st-country-option st-country-CN" data-country-code = "CN" data-country-name = "China" data-country-name-local = "Chine" data-country-id = "103">Chine</A></LI>
  <LI><A CLASS = "st-country-option st-country-CY" data-country-code = "CY" data-country-name = "Cyprus" data-country-name-local = "Chypre" data-country-id = "129">Chypre</A></LI>
  <LI><A CLASS = "st-country-option st-country-VA" data-country-code = "VA" data-country-name = "Vatican City" data-country-name-local = "Cité du Vatican" data-country-id = "232">Cité du Vatican</A></LI>
  <LI><A CLASS = "st-country-option st-country-CO" data-country-code = "CO" data-country-name = "Colombia" data-country-name-local = "Colombie" data-country-id = "84">Colombie</A></LI>
  <LI><A CLASS = "st-country-option st-country-KM" data-country-code = "KM" data-country-name = "Comoros" data-country-name-local = "Comores" data-country-id = "223">Comores</A></LI>
  <LI><A CLASS = "st-country-option st-country-CG" data-country-code = "CG" data-country-name = "Congo" data-country-name-local = "Congo" data-country-id = "19">Congo</A></LI>
  <LI><A CLASS = "st-country-option st-country-CD" data-country-code = "CD" data-country-name = "Congo-Kinshasa" data-country-name-local = "Congo-Kinshasa" data-country-id = "20">Congo-Kinshasa</A></LI>
  <LI><A CLASS = "st-country-option st-country-KR" data-country-code = "KR" data-country-name = "Korea" data-country-name-local = "Corée" data-country-id = "109">Corée</A></LI>
  <LI><A CLASS = "st-country-option st-country-CR" data-country-code = "CR" data-country-name = "Costa Rica" data-country-name-local = "Costa Rica" data-country-id = "69">Costa Rica</A></LI>
  <LI><A CLASS = "st-country-option st-country-HR" data-country-code = "HR" data-country-name = "Croatia" data-country-name-local = "Croatie" data-country-id = "157">Croatie</A></LI>
  <LI><A CLASS = "st-country-option st-country-CW" data-country-code = "CW" data-country-name = "Curacao" data-country-name-local = "Curacao" data-country-id = "218">Curacao</A></LI>
  <LI><A CLASS = "st-country-option st-country-CI" data-country-code = "CI" data-country-name = "Cote d'Ivoire" data-country-name-local = "Côte d'Ivoire" data-country-id = "35">Côte d'Ivoire</A></LI>
  <LI><A CLASS = "st-country-option st-country-DK" data-country-code = "DK" data-country-name = "Denmark" data-country-name-local = "Danemark" data-country-id = "142">Danemark</A></LI>
  <LI><A CLASS = "st-country-option st-country-DJ" data-country-code = "DJ" data-country-name = "Djibouti" data-country-name-local = "Djibouti" data-country-id = "219">Djibouti</A></LI>
  <LI><A CLASS = "st-country-option st-country-DM" data-country-code = "DM" data-country-name = "Dominica" data-country-name-local = "Dominique" data-country-id = "53">Dominique</A></LI>
  <LI><A CLASS = "st-country-option st-country-SV" data-country-code = "SV" data-country-name = "El Salvador" data-country-name-local = "El Salvador" data-country-id = "70">El Salvador</A></LI>
  <LI><A CLASS = "st-country-option st-country-ES" data-country-code = "ES" data-country-name = "Spain" data-country-name-local = "Espagne" data-country-id = "168">Espagne</A></LI>
  <LI><A CLASS = "st-country-option st-country-EE" data-country-code = "EE" data-country-name = "Estonia" data-country-name-local = "Estonie" data-country-id = "143">Estonie</A></LI>
  <LI><A CLASS = "st-country-option st-country-FJ" data-country-code = "FJ" data-country-name = "Fiji" data-country-name-local = "Fidji" data-country-id = "197">Fidji</A></LI>
  <LI><A CLASS = "st-country-option st-country-FI" data-country-code = "FI" data-country-name = "Finland" data-country-name-local = "Finlande" data-country-id = "145">Finlande</A></LI>
  <LI><A CLASS = "st-country-option st-country-FR" data-country-code = "FR" data-country-name = "France" data-country-name-local = "France" data-country-id = "171">France</A></LI>
  <LI><A CLASS = "st-country-option st-country-GA" data-country-code = "GA" data-country-name = "Gabon" data-country-name-local = "Gabon" data-country-id = "21">Gabon</A></LI>
  <LI><A CLASS = "st-country-option st-country-GM" data-country-code = "GM" data-country-name = "Gambia" data-country-name-local = "Gambie" data-country-id = "36">Gambie</A></LI>
  <LI><A CLASS = "st-country-option st-country-GH" data-country-code = "GH" data-country-name = "Ghana" data-country-name-local = "Ghana" data-country-id = "37">Ghana</A></LI>
  <LI><A CLASS = "st-country-option st-country-GI" data-country-code = "GI" data-country-name = "Gibraltar" data-country-name-local = "Gibraltar" data-country-id = "158">Gibraltar</A></LI>
  <LI><A CLASS = "st-country-option st-country-GD" data-country-code = "GD" data-country-name = "Grenada" data-country-name-local = "Grenade" data-country-id = "55">Grenade</A></LI>
  <LI><A CLASS = "st-country-option st-country-GL" data-country-code = "GL" data-country-name = "Greenland" data-country-name-local = "Groenland" data-country-id = "78">Groenland</A></LI>
  <LI><A CLASS = "st-country-option st-country-GR" data-country-code = "GR" data-country-name = "Greece" data-country-name-local = "Grèce" data-country-id = "159">Grèce</A></LI>
  <LI><A CLASS = "st-country-option st-country-GP" data-country-code = "GP" data-country-name = "Guadeloupe" data-country-name-local = "Guadeloupe" data-country-id = "56">Guadeloupe</A></LI>
  <LI><A CLASS = "st-country-option st-country-GU" data-country-code = "GU" data-country-name = "Guam" data-country-name-local = "Guam" data-country-id = "202">Guam</A></LI>
  <LI><A CLASS = "st-country-option st-country-GT" data-country-code = "GT" data-country-name = "Guatemala" data-country-name-local = "Guatemala" data-country-id = "71">Guatemala</A></LI>
  <LI><A CLASS = "st-country-option st-country-GG" data-country-code = "GG" data-country-name = "Guernsey" data-country-name-local = "Guernesey" data-country-id = "130">Guernesey</A></LI>
  <LI><A CLASS = "st-country-option st-country-GN" data-country-code = "GN" data-country-name = "Guinea" data-country-name-local = "Guinée" data-country-id = "38">Guinée</A></LI>
  <LI><A CLASS = "st-country-option st-country-GQ" data-country-code = "GQ" data-country-name = "Equatorial Guinea" data-country-name-local = "Guinée Équatoriale" data-country-id = "221">Guinée Équatoriale</A></LI>
  <LI><A CLASS = "st-country-option st-country-GW" data-country-code = "GW" data-country-name = "Guinea-Bissau" data-country-name-local = "Guinée-Bissau" data-country-id = "222">Guinée-Bissau</A></LI>
  <LI><A CLASS = "st-country-option st-country-GY" data-country-code = "GY" data-country-name = "Guyana" data-country-name-local = "Guyana" data-country-id = "88">Guyana</A></LI>
  <LI><A CLASS = "st-country-option st-country-GF" data-country-code = "GF" data-country-name = "French Guiana" data-country-name-local = "Guyane française" data-country-id = "87">Guyane française</A></LI>
  <LI><A CLASS = "st-country-option st-country-GE" data-country-code = "GE" data-country-name = "Georgia" data-country-name-local = "Géorgie" data-country-id = "97">Géorgie</A></LI>
  <LI><A CLASS = "st-country-option st-country-HT" data-country-code = "HT" data-country-name = "Haiti" data-country-name-local = "Haïti" data-country-id = "57">Haïti</A></LI>
  <LI><A CLASS = "st-country-option st-country-HN" data-country-code = "HN" data-country-name = "Honduras" data-country-name-local = "Honduras" data-country-id = "72">Honduras</A></LI>
  <LI><A CLASS = "st-country-option st-country-HK" data-country-code = "HK" data-country-name = "Hong Kong" data-country-name-local = "Hong Kong" data-country-id = "104">Hong Kong</A></LI>
  <LI><A CLASS = "st-country-option st-country-HU" data-country-code = "HU" data-country-name = "Hungary" data-country-name-local = "Hongrie" data-country-id = "138">Hongrie</A></LI>
  <LI><A CLASS = "st-country-option st-country-MP" data-country-code = "MP" data-country-name = "Northern Mariana Islands (Saipan)" data-country-name-local = "Iles Mariannes septentrionales (Saipan)" data-country-id = "238">Iles Mariannes septentrionales (Saipan)</A></LI>
  <LI><A CLASS = "st-country-option st-country-IN" data-country-code = "IN" data-country-name = "India" data-country-name-local = "Inde" data-country-id = "124">Inde</A></LI>
  <LI><A CLASS = "st-country-option st-country-ID" data-country-code = "ID" data-country-name = "Indonesia" data-country-name-local = "Indonésie" data-country-id = "113">Indonésie</A></LI>
  <LI><A CLASS = "st-country-option st-country-IQ" data-country-code = "IQ" data-country-name = "Iraq" data-country-name-local = "Irak" data-country-id = "181">Irak</A></LI>
  <LI><A CLASS = "st-country-option st-country-IE" data-country-code = "IE" data-country-name = "Ireland" data-country-name-local = "Irlande" data-country-id = "147">Irlande</A></LI>
  <LI><A CLASS = "st-country-option st-country-IS" data-country-code = "IS" data-country-name = "Iceland" data-country-name-local = "Islande" data-country-id = "146">Islande</A></LI>
  <LI><A CLASS = "st-country-option st-country-IL" data-country-code = "IL" data-country-name = "Israel" data-country-name-local = "Israël" data-country-id = "182">Israël</A></LI>
  <LI><A CLASS = "st-country-option st-country-IT" data-country-code = "IT" data-country-name = "Italy" data-country-name-local = "Italie" data-country-id = "160">Italie</A></LI>
  <LI><A CLASS = "st-country-option st-country-JM" data-country-code = "JM" data-country-name = "Jamaica" data-country-name-local = "Jamaïque" data-country-id = "58">Jamaïque</A></LI>
  <LI><A CLASS = "st-country-option st-country-JP" data-country-code = "JP" data-country-name = "Japan" data-country-name-local = "Japon" data-country-id = "105">Japon</A></LI>
  <LI><A CLASS = "st-country-option st-country-JE" data-country-code = "JE" data-country-name = "Jersey" data-country-name-local = "Jersey" data-country-id = "131">Jersey</A></LI>
  <LI><A CLASS = "st-country-option st-country-JO" data-country-code = "JO" data-country-name = "Jordan" data-country-name-local = "Jordanie" data-country-id = "183">Jordanie</A></LI>
  <LI><A CLASS = "st-country-option st-country-KZ" data-country-code = "KZ" data-country-name = "Kazakhstan" data-country-name-local = "Kazakhstan" data-country-id = "98">Kazakhstan</A></LI>
  <LI><A CLASS = "st-country-option st-country-KE" data-country-code = "KE" data-country-name = "Kenya" data-country-name-local = "Kenya" data-country-id = "3">Kenya</A></LI>
  <LI><A CLASS = "st-country-option st-country-KG" data-country-code = "KG" data-country-name = "Kyrgyzstan" data-country-name-local = "Kirghizistan" data-country-id = "99">Kirghizistan</A></LI>
  <LI><A CLASS = "st-country-option st-country-KI" data-country-code = "KI" data-country-name = "Kiribati" data-country-name-local = "Kiribati" data-country-id = "203">Kiribati</A></LI>
  <LI><A CLASS = "st-country-option st-country-XK" data-country-code = "XK" data-country-name = "Kosovo" data-country-name-local = "Kosovo" data-country-id = "233">Kosovo</A></LI>
  <LI><A CLASS = "st-country-option st-country-KW" data-country-code = "KW" data-country-name = "Kuwait" data-country-name-local = "Koweït" data-country-id = "184">Koweït</A></LI>
  <LI><A CLASS = "st-country-option st-country-LA" data-country-code = "LA" data-country-name = "Laos" data-country-name-local = "Laos" data-country-id = "114">Laos</A></LI>
  <LI><A CLASS = "st-country-option st-country-LS" data-country-code = "LS" data-country-name = "Lesotho" data-country-name-local = "Lesotho" data-country-id = "28">Lesotho</A></LI>
  <LI><A CLASS = "st-country-option st-country-LV" data-country-code = "LV" data-country-name = "Latvia" data-country-name-local = "Lettonie" data-country-id = "149">Lettonie</A></LI>
  <LI><A CLASS = "st-country-option st-country-LB" data-country-code = "LB" data-country-name = "Lebanon" data-country-name-local = "Liban" data-country-id = "185">Liban</A></LI>
  <LI><A CLASS = "st-country-option st-country-LY" data-country-code = "LY" data-country-name = "Libya" data-country-name-local = "Libye" data-country-id = "215">Libye</A></LI>
  <LI><A CLASS = "st-country-option st-country-LR" data-country-code = "LR" data-country-name = "Liberia" data-country-name-local = "Libéria" data-country-id = "39">Libéria</A></LI>
  <LI><A CLASS = "st-country-option st-country-LI" data-country-code = "LI" data-country-name = "Liechtenstein" data-country-name-local = "Liechtenstein" data-country-id = "173">Liechtenstein</A></LI>
  <LI><A CLASS = "st-country-option st-country-LT" data-country-code = "LT" data-country-name = "Lithuania" data-country-name-local = "Lituanie" data-country-id = "150">Lituanie</A></LI>
  <LI><A CLASS = "st-country-option st-country-LU" data-country-code = "LU" data-country-name = "Luxembourg" data-country-name-local = "Luxembourg" data-country-id = "174">Luxembourg</A></LI>
  <LI><A CLASS = "st-country-option st-country-MO" data-country-code = "MO" data-country-name = "Macau" data-country-name-local = "Macao" data-country-id = "106">Macao</A></LI>
  <LI><A CLASS = "st-country-option st-country-MK" data-country-code = "MK" data-country-name = "Macedonia" data-country-name-local = "Macédoine" data-country-id = "161">Macédoine</A></LI>
  <LI><A CLASS = "st-country-option st-country-MG" data-country-code = "MG" data-country-name = "Madagascar" data-country-name-local = "Madagascar" data-country-id = "4">Madagascar</A></LI>
  <LI><A CLASS = "st-country-option st-country-MY" data-country-code = "MY" data-country-name = "Malaysia" data-country-name-local = "Malaisie" data-country-id = "115">Malaisie</A></LI>
  <LI><A CLASS = "st-country-option st-country-MW" data-country-code = "MW" data-country-name = "Malawi" data-country-name-local = "Malawi" data-country-id = "5">Malawi</A></LI>
  <LI><A CLASS = "st-country-option st-country-MV" data-country-code = "MV" data-country-name = "Maldives" data-country-name-local = "Maldives" data-country-id = "125">Maldives</A></LI>
  <LI><A CLASS = "st-country-option st-country-ML" data-country-code = "ML" data-country-name = "Mali" data-country-name-local = "Mali" data-country-id = "40">Mali</A></LI>
  <LI><A CLASS = "st-country-option st-country-MT" data-country-code = "MT" data-country-name = "Malta" data-country-name-local = "Malte" data-country-id = "162">Malte</A></LI>
  <LI><A CLASS = "st-country-option st-country-MA" data-country-code = "MA" data-country-name = "Morocco" data-country-name-local = "Maroc" data-country-id = "24">Maroc</A></LI>
  <LI><A CLASS = "st-country-option st-country-MQ" data-country-code = "MQ" data-country-name = "Martinique" data-country-name-local = "Martinique" data-country-id = "59">Martinique</A></LI>
  <LI><A CLASS = "st-country-option st-country-MU" data-country-code = "MU" data-country-name = "Mauritius" data-country-name-local = "Maurice" data-country-id = "6">Maurice</A></LI>
  <LI><A CLASS = "st-country-option st-country-MR" data-country-code = "MR" data-country-name = "Mauritania" data-country-name-local = "Mauritanie" data-country-id = "224">Mauritanie</A></LI>
  <LI><A CLASS = "st-country-option st-country-YT" data-country-code = "YT" data-country-name = "Mayotte" data-country-name-local = "Mayotte" data-country-id = "7">Mayotte</A></LI>
  <LI><A CLASS = "st-country-option st-country-MX" data-country-code = "MX" data-country-name = "Mexico" data-country-name-local = "Mexique" data-country-id = "73">Mexique</A></LI>
  <LI><A CLASS = "st-country-option st-country-FM" data-country-code = "FM" data-country-name = "Micronesia" data-country-name-local = "Micronésie" data-country-id = "205">Micronésie</A></LI>
  <LI><A CLASS = "st-country-option st-country-MD" data-country-code = "MD" data-country-name = "Moldova" data-country-name-local = "Moldavie" data-country-id = "133">Moldavie</A></LI>
  <LI><A CLASS = "st-country-option st-country-MC" data-country-code = "MC" data-country-name = "Monaco" data-country-name-local = "Monaco" data-country-id = "175">Monaco</A></LI>
  <LI><A CLASS = "st-country-option st-country-MN" data-country-code = "MN" data-country-name = "Mongolia" data-country-name-local = "Mongolie" data-country-id = "107">Mongolie</A></LI>
  <LI><A CLASS = "st-country-option st-country-MS" data-country-code = "MS" data-country-name = "Montserrat" data-country-name-local = "Montserrat" data-country-id = "60">Montserrat</A></LI>
  <LI><A CLASS = "st-country-option st-country-ME" data-country-code = "ME" data-country-name = "Montenegro" data-country-name-local = "Monténégro" data-country-id = "163">Monténégro</A></LI>
  <LI><A CLASS = "st-country-option st-country-MZ" data-country-code = "MZ" data-country-name = "Mozambique" data-country-name-local = "Mozambique" data-country-id = "8">Mozambique</A></LI>
  <LI><A CLASS = "st-country-option st-country-NA" data-country-code = "NA" data-country-name = "Namibia" data-country-name-local = "Namibie" data-country-id = "29">Namibie</A></LI>
  <LI><A CLASS = "st-country-option st-country-NR" data-country-code = "NR" data-country-name = "Nauru" data-country-name-local = "Nauru" data-country-id = "225">Nauru</A></LI>
  <LI><A CLASS = "st-country-option st-country-NI" data-country-code = "NI" data-country-name = "Nicaragua" data-country-name-local = "Nicaragua" data-country-id = "74">Nicaragua</A></LI>
  <LI><A CLASS = "st-country-option st-country-NE" data-country-code = "NE" data-country-name = "Niger" data-country-name-local = "Niger" data-country-id = "41">Niger</A></LI>
  <LI><A CLASS = "st-country-option st-country-NG" data-country-code = "NG" data-country-name = "Nigeria" data-country-name-local = "Nigeria" data-country-id = "42">Nigeria</A></LI>
  <LI><A CLASS = "st-country-option st-country-NU" data-country-code = "NU" data-country-name = "Niue" data-country-name-local = "Niue" data-country-id = "210">Niue</A></LI>
  <LI><A CLASS = "st-country-option st-country-NO" data-country-code = "NO" data-country-name = "Norway" data-country-name-local = "Norvège" data-country-id = "151">Norvège</A></LI>
  <LI><A CLASS = "st-country-option st-country-NC" data-country-code = "NC" data-country-name = "New Caledonia" data-country-name-local = "Nouvelle Calédonie" data-country-id = "198">Nouvelle Calédonie</A></LI>
  <LI><A CLASS = "st-country-option st-country-NZ" data-country-code = "NZ" data-country-name = "New Zealand" data-country-name-local = "Nouvelle-Zélande" data-country-id = "196">Nouvelle-Zélande</A></LI>
  <LI><A CLASS = "st-country-option st-country-NP" data-country-code = "NP" data-country-name = "Nepal" data-country-name-local = "Népal" data-country-id = "126">Népal</A></LI>
  <LI><A CLASS = "st-country-option st-country-OM" data-country-code = "OM" data-country-name = "Oman" data-country-name-local = "Oman" data-country-id = "186">Oman</A></LI>
  <LI><A CLASS = "st-country-option st-country-UG" data-country-code = "UG" data-country-name = "Uganda" data-country-name-local = "Ouganda" data-country-id = "13">Ouganda</A></LI>
  <LI><A CLASS = "st-country-option st-country-UZ" data-country-code = "UZ" data-country-name = "Uzbekistan" data-country-name-local = "Ouzbékistan" data-country-id = "102">Ouzbékistan</A></LI>
  <LI><A CLASS = "st-country-option st-country-PK" data-country-code = "PK" data-country-name = "Pakistan" data-country-name-local = "Pakistan" data-country-id = "127">Pakistan</A></LI>
  <LI><A CLASS = "st-country-option st-country-PW" data-country-code = "PW" data-country-name = "Palau" data-country-name-local = "Palaos" data-country-id = "206">Palaos</A></LI>
  <LI><A CLASS = "st-country-option st-country-PA" data-country-code = "PA" data-country-name = "Panama" data-country-name-local = "Panama" data-country-id = "75">Panama</A></LI>
  <LI><A CLASS = "st-country-option st-country-PG" data-country-code = "PG" data-country-name = "Papua New Guinea" data-country-name-local = "Papouasie-Nouvelle-Guinée" data-country-id = "199">Papouasie-Nouvelle-Guinée</A></LI>
  <LI><A CLASS = "st-country-option st-country-PY" data-country-code = "PY" data-country-name = "Paraguay" data-country-name-local = "Paraguay" data-country-id = "89">Paraguay</A></LI>
  <LI><A CLASS = "st-country-option st-country-NL" data-country-code = "NL" data-country-name = "Netherlands" data-country-name-local = "Pays-Bas" data-country-id = "176">Pays-Bas</A></LI>
  <LI><A CLASS = "st-country-option st-country-PH" data-country-code = "PH" data-country-name = "Philippines" data-country-name-local = "Philippines" data-country-id = "117">Philippines</A></LI>
  <LI><A CLASS = "st-country-option st-country-PL" data-country-code = "PL" data-country-name = "Poland" data-country-name-local = "Pologne" data-country-id = "139">Pologne</A></LI>
  <LI><A CLASS = "st-country-option st-country-PF" data-country-code = "PF" data-country-name = "French Polynesia" data-country-name-local = "Polynésie française" data-country-id = "209">Polynésie française</A></LI>
  <LI><A CLASS = "st-country-option st-country-PT" data-country-code = "PT" data-country-name = "Portugal" data-country-name-local = "Portugal" data-country-id = "164">Portugal</A></LI>
  <LI><A CLASS = "st-country-option st-country-PR" data-country-code = "PR" data-country-name = "Puerto Rico" data-country-name-local = "Puerto Rico" data-country-id = "62">Puerto Rico</A></LI>
  <LI><A CLASS = "st-country-option st-country-PE" data-country-code = "PE" data-country-name = "Peru" data-country-name-local = "Pérou" data-country-id = "90">Pérou</A></LI>
  <LI><A CLASS = "st-country-option st-country-QA" data-country-code = "QA" data-country-name = "Qatar" data-country-name-local = "Qatar" data-country-id = "188">Qatar</A></LI>
  <LI><A CLASS = "st-country-option st-country-RO" data-country-code = "RO" data-country-name = "Romania" data-country-name-local = "Roumanie" data-country-id = "140">Roumanie</A></LI>
  <LI><A CLASS = "st-country-option st-country-GB" data-country-code = "GB" data-country-name = "United Kingdom" data-country-name-local = "Royaume-Uni" data-country-id = "153">Royaume-Uni</A></LI>
  <LI><A CLASS = "st-country-option st-country-RU" data-country-code = "RU" data-country-name = "Russian Federation" data-country-name-local = "Russie" data-country-id = "134">Russie</A></LI>
  <LI><A CLASS = "st-country-option st-country-RW" data-country-code = "RW" data-country-name = "Rwanda" data-country-name-local = "Rwanda" data-country-id = "228">Rwanda</A></LI>
  <LI><A CLASS = "st-country-option st-country-CF" data-country-code = "CF" data-country-name = "Central African Republic" data-country-name-local = "République Centrafricaine" data-country-id = "217">République Centrafricaine</A></LI>
  <LI><A CLASS = "st-country-option st-country-DO" data-country-code = "DO" data-country-name = "Dominican Republic" data-country-name-local = "République Dominicaine" data-country-id = "54">République Dominicaine</A></LI>
  <LI><A CLASS = "st-country-option st-country-CZ" data-country-code = "CZ" data-country-name = "Czech Republic" data-country-name-local = "République tchèque" data-country-id = "137">République tchèque</A></LI>
  <LI><A CLASS = "st-country-option st-country-RE" data-country-code = "RE" data-country-name = "Reunion" data-country-name-local = "Réunion" data-country-id = "9">Réunion</A></LI>
  <LI><A CLASS = "st-country-option st-country-MF" data-country-code = "MF" data-country-name = "Saint Martin" data-country-name-local = "Saint Martin" data-country-id = "214">Saint Martin</A></LI>
  <LI><A CLASS = "st-country-option st-country-BL" data-country-code = "BL" data-country-name = "Saint Barthelemy" data-country-name-local = "Saint-Barthélemy" data-country-id = "216">Saint-Barthélemy</A></LI>
  <LI><A CLASS = "st-country-option st-country-KN" data-country-code = "KN" data-country-name = "Saint Kitts and Nevis" data-country-name-local = "Saint-Christophe-et-Niévès" data-country-id = "63">Saint-Christophe-et-Niévès</A></LI>
  <LI><A CLASS = "st-country-option st-country-SM" data-country-code = "SM" data-country-name = "San Marino" data-country-name-local = "Saint-Marin" data-country-id = "165">Saint-Marin</A></LI>
  <LI><A CLASS = "st-country-option st-country-SX" data-country-code = "SX" data-country-name = "Sint Maarten" data-country-name-local = "Saint-Martin" data-country-id = "234">Saint-Martin</A></LI>
  <LI><A CLASS = "st-country-option st-country-PM" data-country-code = "PM" data-country-name = "Saint Pierre and Miquelon" data-country-name-local = "Saint-Pierre-et-Miquelon" data-country-id = "226">Saint-Pierre-et-Miquelon</A></LI>
  <LI><A CLASS = "st-country-option st-country-VC" data-country-code = "VC" data-country-name = "Saint Vincent and Grenadines" data-country-name-local = "Saint-Vincent-et-les-Grenadines" data-country-id = "64">Saint-Vincent-et-les-Grenadines</A></LI>
  <LI><A CLASS = "st-country-option st-country-SH" data-country-code = "SH" data-country-name = "Saint Helena" data-country-name-local = "Sainte-Hélène" data-country-id = "236">Sainte-Hélène</A></LI>
  <LI><A CLASS = "st-country-option st-country-LC" data-country-code = "LC" data-country-name = "Saint Lucia" data-country-name-local = "Sainte-Lucie" data-country-id = "213">Sainte-Lucie</A></LI>
  <LI><A CLASS = "st-country-option st-country-WS" data-country-code = "WS" data-country-name = "Samoa" data-country-name-local = "Samoa" data-country-id = "211">Samoa</A></LI>
  <LI><A CLASS = "st-country-option st-country-AS" data-country-code = "AS" data-country-name = "American Samoa" data-country-name-local = "Samoa Américaines" data-country-id = "207">Samoa Américaines</A></LI>
  <LI><A CLASS = "st-country-option st-country-ST" data-country-code = "ST" data-country-name = "Sao Tome and Principe" data-country-name-local = "Sao Tomé-et-Principe" data-country-id = "22">Sao Tomé-et-Principe</A></LI>
  <LI><A CLASS = "st-country-option st-country-RS" data-country-code = "RS" data-country-name = "Serbia" data-country-name-local = "Serbie" data-country-id = "166">Serbie</A></LI>
  <LI><A CLASS = "st-country-option st-country-SC" data-country-code = "SC" data-country-name = "Seychelles" data-country-name-local = "Seychelles" data-country-id = "10">Seychelles</A></LI>
  <LI><A CLASS = "st-country-option st-country-SL" data-country-code = "SL" data-country-name = "Sierra Leone" data-country-name-local = "Sierra Leone" data-country-id = "230">Sierra Leone</A></LI>
  <LI><A CLASS = "st-country-option st-country-SG" data-country-code = "SG" data-country-name = "Singapore" data-country-name-local = "Singapour" data-country-id = "118">Singapour</A></LI>
  <LI><A CLASS = "st-country-option st-country-SK" data-country-code = "SK" data-country-name = "Slovakia" data-country-name-local = "Slovaquie" data-country-id = "141">Slovaquie</A></LI>
  <LI><A CLASS = "st-country-option st-country-SI" data-country-code = "SI" data-country-name = "Slovenia" data-country-name-local = "Slovénie" data-country-id = "167">Slovénie</A></LI>
  <LI><A CLASS = "st-country-option st-country-SO" data-country-code = "SO" data-country-name = "Somalia" data-country-name-local = "Somalie" data-country-id = "11">Somalie</A></LI>
  <LI><A CLASS = "st-country-option st-country-LK" data-country-code = "LK" data-country-name = "Sri Lanka" data-country-name-local = "Sri Lanka" data-country-id = "128">Sri Lanka</A></LI>
  <LI><A CLASS = "st-country-option st-country-CH" data-country-code = "CH" data-country-name = "Switzerland" data-country-name-local = "Suisse" data-country-id = "177">Suisse</A></LI>
  <LI><A CLASS = "st-country-option st-country-SR" data-country-code = "SR" data-country-name = "Suriname" data-country-name-local = "Suriname" data-country-id = "91">Suriname</A></LI>
  <LI><A CLASS = "st-country-option st-country-SE" data-country-code = "SE" data-country-name = "Sweden" data-country-name-local = "Suède" data-country-id = "152">Suède</A></LI>
  <LI><A CLASS = "st-country-option st-country-SZ" data-country-code = "SZ" data-country-name = "Swaziland" data-country-name-local = "Swaziland" data-country-id = "31">Swaziland</A></LI>
  <LI><A CLASS = "st-country-option st-country-SN" data-country-code = "SN" data-country-name = "Senegal" data-country-name-local = "Sénégal" data-country-id = "43">Sénégal</A></LI>
  <LI><A CLASS = "st-country-option st-country-TJ" data-country-code = "TJ" data-country-name = "Tajikistan" data-country-name-local = "Tadjikistan" data-country-id = "100">Tadjikistan</A></LI>
  <LI><A CLASS = "st-country-option st-country-TZ" data-country-code = "TZ" data-country-name = "Tanzania" data-country-name-local = "Tanzanie" data-country-id = "12">Tanzanie</A></LI>
  <LI><A CLASS = "st-country-option st-country-TW" data-country-code = "TW" data-country-name = "Taiwan" data-country-name-local = "Taïwan" data-country-id = "110">Taïwan</A></LI>
  <LI><A CLASS = "st-country-option st-country-TD" data-country-code = "TD" data-country-name = "Chad" data-country-name-local = "Tchad" data-country-id = "18">Tchad</A></LI>
  <LI><A CLASS = "st-country-option st-country-TH" data-country-code = "TH" data-country-name = "Thailand" data-country-name-local = "Thaïlande" data-country-id = "119">Thaïlande</A></LI>
  <LI><A CLASS = "st-country-option st-country-TL" data-country-code = "TL" data-country-name = "Timor-Leste" data-country-name-local = "Timor-Leste" data-country-id = "231">Timor-Leste</A></LI>
  <LI><A CLASS = "st-country-option st-country-TG" data-country-code = "TG" data-country-name = "Togo" data-country-name-local = "Togo" data-country-id = "44">Togo</A></LI>
  <LI><A CLASS = "st-country-option st-country-TO" data-country-code = "TO" data-country-name = "Tonga" data-country-name-local = "Tonga" data-country-id = "212">Tonga</A></LI>
  <LI><A CLASS = "st-country-option st-country-TT" data-country-code = "TT" data-country-name = "Trinidad and Tobago" data-country-name-local = "Trinité-et-Tobago" data-country-id = "65">Trinité-et-Tobago</A></LI>
  <LI><A CLASS = "st-country-option st-country-TA" data-country-code = "TA" data-country-name = "Tristan da Cunha" data-country-name-local = "Tristan da Cunha" data-country-id = "241">Tristan da Cunha</A></LI>
  <LI><A CLASS = "st-country-option st-country-TN" data-country-code = "TN" data-country-name = "Tunisia" data-country-name-local = "Tunisie" data-country-id = "26">Tunisie</A></LI>
  <LI><A CLASS = "st-country-option st-country-TM" data-country-code = "TM" data-country-name = "Turkmenistan" data-country-name-local = "Turkménistan" data-country-id = "101">Turkménistan</A></LI>
  <LI><A CLASS = "st-country-option st-country-TR" data-country-code = "TR" data-country-name = "Turkey" data-country-name-local = "Turquie" data-country-id = "191">Turquie</A></LI>
  <LI><A CLASS = "st-country-option st-country-TV" data-country-code = "TV" data-country-name = "Tuvalu" data-country-name-local = "Tuvalu" data-country-id = "239">Tuvalu</A></LI>
  <LI><A CLASS = "st-country-option st-country-UA" data-country-code = "UA" data-country-name = "Ukraine" data-country-name-local = "Ukraine" data-country-id = "135">Ukraine</A></LI>
  <LI><A CLASS = "st-country-option st-country-UY" data-country-code = "UY" data-country-name = "Uruguay" data-country-name-local = "Uruguay" data-country-id = "92">Uruguay</A></LI>
  <LI><A CLASS = "st-country-option st-country-VU" data-country-code = "VU" data-country-name = "Vanuatu" data-country-name-local = "Vanuatu" data-country-id = "201">Vanuatu</A></LI>
  <LI><A CLASS = "st-country-option st-country-VE" data-country-code = "VE" data-country-name = "Venezuela" data-country-name-local = "Venezuela" data-country-id = "93">Venezuela</A></LI>
  <LI><A CLASS = "st-country-option st-country-VN" data-country-code = "VN" data-country-name = "Vietnam" data-country-name-local = "Viêt-Nam" data-country-id = "120">Viêt-Nam</A></LI>
  <LI><A CLASS = "st-country-option st-country-WF" data-country-code = "WF" data-country-name = "Wallis and Futuna" data-country-name-local = "Wallis-et-Futuna" data-country-id = "242">Wallis-et-Futuna</A></LI>
  <LI><A CLASS = "st-country-option st-country-YE" data-country-code = "YE" data-country-name = "Yemen" data-country-name-local = "Yémen" data-country-id = "193">Yémen</A></LI>
  <LI><A CLASS = "st-country-option st-country-ZM" data-country-code = "ZM" data-country-name = "Zambia" data-country-name-local = "Zambie" data-country-id = "14">Zambie</A></LI>
  <LI><A CLASS = "st-country-option st-country-ZW" data-country-code = "ZW" data-country-name = "Zimbabwe" data-country-name-local = "Zimbabwe" data-country-id = "15">Zimbabwe</A></LI>
  <LI><A CLASS = "st-country-option st-country-EG" data-country-code = "EG" data-country-name = "Egypt" data-country-name-local = "Égypte" data-country-id = "178">Égypte</A></LI>
  <LI><A CLASS = "st-country-option st-country-AE" data-country-code = "AE" data-country-name = "United Arab Emirates" data-country-name-local = "Émirats arabes unis" data-country-id = "192">Émirats arabes unis</A></LI>
  <LI><A CLASS = "st-country-option st-country-EC" data-country-code = "EC" data-country-name = "Ecuador" data-country-name-local = "Équateur" data-country-id = "85">Équateur</A></LI>
  <LI><A CLASS = "st-country-option st-country-ER" data-country-code = "ER" data-country-name = "Eritrea" data-country-name-local = "Érythrée" data-country-id = "220">Érythrée</A></LI>
  <LI><A CLASS = "st-country-option st-country-US" data-country-code = "US" data-country-name = "United States of America" data-country-name-local = "États-Unis" data-country-id = "79">États-Unis</A></LI>
  <LI><A CLASS = "st-country-option st-country-ET" data-country-code = "ET" data-country-name = "Ethiopia" data-country-name-local = "Éthiopie" data-country-id = "2">Éthiopie</A></LI>
  <LI><A CLASS = "st-country-option st-country-CX" data-country-code = "CX" data-country-name = "Christmas Island" data-country-name-local = "Île Christmas" data-country-id = "195">Île Christmas</A></LI>
  <LI><A CLASS = "st-country-option st-country-IM" data-country-code = "IM" data-country-name = "Isle of Man" data-country-name-local = "Île de Man" data-country-id = "148">Île de Man</A></LI>
  <LI><A CLASS = "st-country-option st-country-AC" data-country-code = "AC" data-country-name = "Ascension Island" data-country-name-local = "Île de l'Ascension" data-country-id = "240">Île de l'Ascension</A></LI>
  <LI><A CLASS = "st-country-option st-country-KY" data-country-code = "KY" data-country-name = "Cayman Islands" data-country-name-local = "Îles Caïmans" data-country-id = "51">Îles Caïmans</A></LI>
  <LI><A CLASS = "st-country-option st-country-CK" data-country-code = "CK" data-country-name = "Cook Islands" data-country-name-local = "Îles Cook" data-country-id = "208">Îles Cook</A></LI>
  <LI><A CLASS = "st-country-option st-country-FK" data-country-code = "FK" data-country-name = "Falkland Islands" data-country-name-local = "Îles Falkland " data-country-id = "86">Îles Falkland </A></LI>
  <LI><A CLASS = "st-country-option st-country-FO" data-country-code = "FO" data-country-name = "Faroe Islands" data-country-name-local = "Îles Féroé" data-country-id = "144">Îles Féroé</A></LI>
  <LI><A CLASS = "st-country-option st-country-MH" data-country-code = "MH" data-country-name = "Marshall Islands" data-country-name-local = "Îles Marshall" data-country-id = "204">Îles Marshall</A></LI>
  <LI><A CLASS = "st-country-option st-country-PN" data-country-code = "PN" data-country-name = "Pitcairn Islands" data-country-name-local = "Îles Pitcairn" data-country-id = "227">Îles Pitcairn</A></LI>
  <LI><A CLASS = "st-country-option st-country-SB" data-country-code = "SB" data-country-name = "Solomon Islands" data-country-name-local = "Îles Salomon" data-country-id = "200">Îles Salomon</A></LI>
  <LI><A CLASS = "st-country-option st-country-TC" data-country-code = "TC" data-country-name = "Turks and Caicos Islands" data-country-name-local = "Îles Turques-et-Caïques" data-country-id = "66">Îles Turques-et-Caïques</A></LI>
  <LI><A CLASS = "st-country-option st-country-VG" data-country-code = "VG" data-country-name = "British Virgin Islands" data-country-name-local = "Îles Vierges britanniques" data-country-id = "50">Îles Vierges britanniques</A></LI>
  <LI><A CLASS = "st-country-option st-country-VI" data-country-code = "VI" data-country-name = "U.S. Virgin Islands" data-country-name-local = "Îles Vierges des États-Unis" data-country-id = "67">Îles Vierges des États-Unis</A></LI>
  </UL>
 </LI>
</UL>
</CENTER>
  </DIV>
 </DIV>

 <P>
  Lynia Delivery Express propose des modes de livraison à la pointe de l’industrie. Nos prestataires varient selon les pays et selon l’entrepôt. Le <A href="#">calculateur de frais d’expédition</A> vous permet de connaître toutes les options disponibles pour votre pays. Cette page donne un aperçu de tous nos prestataires et de leurs restrictions respectives.
 </P>
 <P>
  Bien que certaines de nos restrictions à l'exportation puissent être plus strictes que les restrictions à l'importation de votre pays d'origine, nous devons les respecter. Les règles et les conditions de chaque transporteurs ou expéditeurs seront également appliquées à tout colis expédié par nos soins. Vous pouvez également vous reporter à la page des articles soumis à des exigences d'expédition spécifiques. Bien que certaines de nos restrictions à l'exportation puissent être plus strictes que les restrictions à l'importation de votre pays d'origine, nous opérons dans le cadre des réglementations d'expédition américaines. Les règles et les conditions de chaque transporteurs ou expéditeurs seront également appliquées à tout colis expédié par nos soins. Vous pouvez également consulter notre page des <A href="#">articles interdits ou soumis à des restrictions</A> pour les articles soumis à des exigences d'expédition spécifiques.
 </P>

 <H2 CLASS = "section-title"
>
 <SPAN>Conditions d’envoi pour tous les colis</SPAN>
</H2>

 <P CLASS = "allpackages">
  Tous colis contenants des articles dont la valeur dépasse 2500 USD doivent être expédiés avec DHL en raison de la complexité des régulations et des déclarations en vigueur (normes EEI concernant l’exportation d’articles électroniques et SED pour les déclarations d’exportation) pour tout article dont la valeur dépasse 2500 USD. Nous pouvons remplir le formulaire EEI pour vous pour un montant de 40 USD.
<br><br>
<b>REMARQUE : Tous les colis envoyés depuis notre entrepôt de Tualatin sont transférés à l'entrepôt de Torrance pour y être traités. Il y a un délai de transit de 3 jours ouvrables entre Tualatin et Torrance. Ce délai de livraison de 3 jours ouvrables s'ajoute au délai de livraison indiqué.</b>
 </P>




  <DIV CLASS = "shipping-method">
   <H2 CLASS = "section-title shipmethod-title">
    <SPAN>
      <IMG SRC = "shipito/fr/imgs/shipmethods/UPS_logo2.svg" CLASS="ups-logo"> UPS Worldwide Saver
    </SPAN>
   </H2>
   <DIV CLASS = "row">
    <DIV CLASS = "col-sm-12 col-md-4 shipmethod-header shipmethod-notes">
     <LABEL>Remarques rapides</LABEL>
     <P>
      Économique et relativement rapide, et vous pouvez garder l'esprit tranquille grâce à son propre service de dédouanement.
     </P>
    </DIV>
    <DIV CLASS = "col-sm-12 col-md-4 shipmethod-header shipmethod-max-size">
     <LABEL>
       Taille maximum (L, I, H)
       <A CLASS = "more-info" data-toggle="popover" data-trigger = "hover" data-placement = "top" data-content="&nbsp;"><IMG SRC = "shipito/fr/imgs/navigation/ExclamationMark.svg"></A>
     </LABEL>
     <UL CLASS = "blue-bullets">
      <LI>La longueur (côté le plus long du colis) et la circonférence [(2 x largeur) + (2 x hauteur)] combinées ne doivent pas dépasser 130 "<SMALL> (330 cm) </SMALL> à moins qu'il ne soit expédié dans la catégorie des colis volumineux.</LI>
      <LI> Il s’agit d’un colis volumineux quand la longueur (partie longue du colis) et la circonférence [(2 x largeur) + (2 x hauteur)] combinées dépassent 130" (330 cm) avec un maximum de 165" (419 cm). La longueur ne doit pas dépasser 108" (274 cm).
      <BR>*Des frais pour colis volumineux sont appliqués. Cliquez ici pour ' voir plus' d’informations concernant les tarifs.</LI>
     </UL>
    </DIV>
    <DIV CLASS = "col-xs-6 col-sm-6 col-md-2 shipmethod-header shipmethod-tracking">
     <LABEL>Suivi</LABEL>
     <P>
      Oui, UPS Quantum View Notify
     </P>
    </DIV>
    <DIV CLASS = "col-xs-6 col-sm-6 col-md-2 shipmethod-header shipmethod-max-weight">
     <LABEL>Poids maximum</LABEL>
     <P>
      150 livres <SMALL>(68 kg)</SMALL>
     </P>
    </DIV>
   </DIV>
   <DIV CLASS = "row btn-row">
    <DIV CLASS = "col-xs-12 text-center">
     <A CLASS = "btn btn-secondary btn-lg shipmethod-details-btn" data-toggle = "collapse" data-target = "#upswwsavermail">Afficher plus de contenu</A>
    </DIV>
   </DIV>
   <DIV CLASS = "collapse" ID = "upswwsavermail">
        <P>
    Pour ceux qui souhaitent une livraison rapide et qui sont prêts à payer un peu plus cher, UPS Worldwide Saver est le meilleur choix. Avec une livraison le jour ouvrable suivant pour le Canada, et sous deux jours ouvrables pour le Mexique, l’Amérique latine et l’Europe, vous pouvez compter sur UPS pour acheminer rapidement votre colis à destination. Les colis expédiés vers le Moyen-Orient, l‘Europe et l’Asie prennent généralement plus de 3 jours (ouvrables) pour arriver. Le dédouanement est inclus dans toutes les estimations de livraison.
     </P>
    <P>
    La livraison à jour défini et le suivi sont également inclus dans ce service. Grâce aux notifications de suivi UPS Quantum View Notify, vous pouvez choisir de recevoir soit par e-mail soit par SMS les mises à jour de l'expédition tout au long du processus de livraison.
    </P>
    <P>
   À l'arrivée dans le pays de destination, les colis passent le service de dédouanement en interne et sont ensuite livrés au domicile du destinataire via [UPS]. Veuillez consulter notre page des <A href="#"> Interdictions et Restrictions </A> avant d'acheter vos articles.
    </P>
    <P>
    La taille maximale de l'emballage à expédier ne doit généralement pas dépasser 130 pouces (330 cm) (longueur + circonférence, en sachant que la circonférence est égale à  2 x largeur plus 2 x hauteur) avec une longueur maximale de 108 pouces (274 cm) et un poids maximum de 150 livres (68 kg). Veuillez consulter le service client pour toutes questions plus spécifiques. En cas de colis manquant, il est recommandé de contacter en premier lieu votre bureau de douane local .
    </P>
   Douanes, droits de douanes et autres frais :
     <UL CLASS = "blue-bullets">
		<LI> Tous les colis sont soumis aux frais de douane et de droits de douane du pays de destination. </LI>
		<LI> Des frais de service UPS sont appliqués lorsque des frais de douane et de droits de douane sont collectés.</LI>
		<LI> Tous les colis dont la longueur max est supérieure ou égale à 40 pouces (101 cm) entraîneront des frais DIM supplémentaires de 50 USD.</LI>
		<LI> Tous les colis dont le poids dépasse 70 livres (31,75 kg) entraîneront des frais de surpoids de 15 USD.</LI>
	</UL>
    <p><b>Taxe pour marchandises dangereuses :</b><br>la taxe pour marchandises dangereuses est de 95 USD pour UPS. À cela s’ajoute les frais de traitement et d’envoi.</p>
   </DIV>
  </DIV>



  <DIV CLASS = "shipping-method">
   <H2 CLASS = "section-title shipmethod-title">
    <SPAN>
      <IMG SRC = "shipito/fr/imgs/shipmethods/UPS_logo2.svg" CLASS="ups-logo"> UPS Ground Residentiel
    </SPAN>
   </H2>
   <DIV CLASS = "row">
    <DIV CLASS = "col-sm-12 col-md-4 shipmethod-header shipmethod-notes">
     <LABEL>Remarques rapides</LABEL>
     <P>
      L'une des méthodes d'expédition les plus fiables et les plus économiques aux États-Unis.

     </P>
    </DIV>
    <DIV CLASS = "col-sm-12 col-md-4 shipmethod-header shipmethod-max-size">
     <LABEL>
       Taille maximum (L, I, H)
       <A CLASS = "more-info" data-toggle="popover" data-trigger = "hover" data-placement = "top" data-content="&nbsp;"><IMG SRC = "shipito/fr/imgs/navigation/ExclamationMark.svg"></A>
     </LABEL>
     <UL CLASS = "blue-bullets">
      <LI>La longueur (côté le plus long du colis) et la circonférence [(2 x largeur) + (2 x hauteur)] combinées ne doivent pas dépasser 130 "<SMALL> (330 cm) </SMALL> à moins qu'il ne soit expédié dans la catégorie des colis volumineux.</LI>
      <LI>      Il s’agit d’un colis volumineux quand la longueur (partie longue du colis) et la circonférence [(2 x largeur) + (2 x hauteur)] combinées dépassent 130 pouces (330 cm) avec un maximum de 165 pouces (419 cm) ou bien si sa longueur dépasse 96 pouces (243 cm). La longueur de chaque colis ne doit pas dépasser 108 pouces (274 cm).
      <BR>*Des frais pour colis volumineux sont appliqués. Cliquez ici pour ' voir plus' d’informations concernant les tarifs.</LI>
     </UL>
    </DIV>
    <DIV CLASS = "col-xs-6 col-sm-6 col-md-2 shipmethod-header shipmethod-tracking">
     <LABEL>Suivi</LABEL>
     <P>
      Oui, UPS Quantum View Notify
     </P>
    </DIV>
    <DIV CLASS = "col-xs-6 col-sm-6 col-md-2 shipmethod-header shipmethod-max-weight">
     <LABEL>Poids maximum</LABEL>
     <P>
      150 livres <SMALL>(68 kg)</SMALL>
     </P>
    </DIV>
   </DIV>
   <DIV CLASS = "row btn-row">
    <DIV CLASS = "col-xs-12 text-center">
     <A CLASS = "btn btn-secondary btn-lg shipmethod-details-btn" data-toggle = "collapse" data-target = "#upsgroundmail">Afficher plus de contenu</A>
    </DIV>
   </DIV>
   <DIV CLASS = "collapse" ID = "upsgroundmail">
        <P>
    UPS Ground Residential est le moyen le plus économique d'expédier vos colis lorsque la rapidité n'est pas une priorité. Quelle que soit sa destination au sein des 50 États et à Porto Rico, votre colis arrivera dans un délai de 1 à 5 jours.
     </P>
    <P>
   La livraison à jour défini et le suivi sont également inclus dans ce service. Grâce aux notifications de suivi UPS Quantum View Notify, vous pouvez choisir de recevoir soit par e-mail soit par SMS les mises à jour de l'expédition tout au long du processus de livraison.
    </P>
    <P>
     La taille maximale de l'emballage à expédier ne doit généralement pas dépasser 165 pouces (419 cm) (longueur + circonférence, en sachant que la circonférence est égale à  2 x largeur plus 2 x hauteur) avec une longueur maximale de 108 pouces (274 cm) et un poids maximum de 150 livres (68 kg). Veuillez consulter le service client pour toutes questions plus spécifiques. Veuillez consulter notre page des <A href="#"> Interdictions et Restrictions </A> avant d'acheter vos articles.
    </P>
    Frais supplémentaires :
     <UL CLASS = "blue-bullets">
     	<LI>Tous les colis dont la longueur max est supérieure ou égale à 96 pouces (243,84 cm) entraîneront des frais DIM supplémentaires de 100 USD.</LI>
     	<LI>Tous les colis dont le poids dépasse 50 livres (22,6 kg) entraîneront des frais de surpoids de 24 USD.</LI>
	</UL>
    <p><b>Taxe pour marchandises dangereuses :</b><br>la taxe pour marchandises dangereuses est de 37 USD pour UPS. À cela s’ajoute les frais de traitement et d’envoi.</p>
   </DIV>
  </DIV>



  <DIV CLASS = "shipping-method">
   <H2 CLASS = "section-title shipmethod-title">
    <SPAN>
      <IMG SRC = "shipito/fr/imgs/shipmethods/UPS_logo2.svg" CLASS="ups-logo"> UPS 2nd Day Air
    </SPAN>
   </H2>
   <DIV CLASS = "row">
    <DIV CLASS = "col-sm-12 col-md-4 shipmethod-header shipmethod-notes">
     <LABEL>Remarques rapides</LABEL>
     <P>
      Rapide, fiable avec suivi inclus, UPS 2nd Day Air livre partout au sein des 50 États et à Porto Rico.
     </P>
    </DIV>
    <DIV CLASS = "col-sm-12 col-md-4 shipmethod-header shipmethod-max-size">
     <LABEL>
       Taille maximum (L, I, H)
       <A CLASS = "more-info" data-toggle="popover" data-trigger = "hover" data-placement = "top" data-content="&nbsp;"><IMG SRC = "shipito/fr/imgs/navigation/ExclamationMark.svg"></A>
     </LABEL>
     <UL CLASS = "blue-bullets">
      <LI>La longueur (côté le plus long du colis) et la circonférence [(2 x largeur) + (2 x hauteur)] combinées ne doivent pas dépasser 130 "<SMALL> (330 cm) </SMALL> à moins qu'il ne soit expédié dans la catégorie des colis volumineux.</LI>
      <LI>       Il s’agit d’un colis volumineux quand la longueur (partie longue du colis) et la circonférence [(2 x largeur) + (2 x hauteur)] combinées dépassent 130 pouces (330 cm) avec un maximum de 165 pouces (419 cm) ou bien si sa longueur dépasse 96 pouces (243 cm). La longueur de chaque colis ne doit pas dépasser 108 pouces (274 cm).
      <BR>*Des frais pour colis volumineux sont appliqués. Cliquez ici pour ' voir plus' d’informations concernant les tarifs.</LI>
     </UL>
    </DIV>
    <DIV CLASS = "col-xs-6 col-sm-6 col-md-2 shipmethod-header shipmethod-tracking">
     <LABEL>Suivi</LABEL>
     <P>
      Oui, UPS Quantum View Notify
     </P>
    </DIV>
    <DIV CLASS = "col-xs-6 col-sm-6 col-md-2 shipmethod-header shipmethod-max-weight">
     <LABEL>Poids maximum</LABEL>
     <P>
      150 livres <SMALL>(68 kg)</SMALL>
     </P>
    </DIV>
   </DIV>
   <DIV CLASS = "row btn-row">
    <DIV CLASS = "col-xs-12 text-center">
     <A CLASS = "btn btn-secondary btn-lg shipmethod-details-btn" data-toggle = "collapse" data-target = "#ups2daymail">Afficher plus de contenu</A>
    </DIV>
   </DIV>
   <DIV CLASS = "collapse" ID = "ups2daymail">
        <P>
   UPS 2nd Day Air est une option ultra-rapide pour ceux dont la rapidité et la traçabilité sont la principale préoccupation. Quelle que soit sa destination au sein des 50 États et à Porto Rico, votre colis arrivera dans un délai de 2 jours.
     </P>
    <P>
   La livraison à jour défini et le suivi sont également inclus dans ce service. Grâce aux notifications de suivi UPS Quantum View Notify, vous pouvez choisir de recevoir soit par e-mail soit par SMS les mises à jour de l'expédition tout au long du processus de livraison.
    </P>
    <P>
    La taille maximale de l'emballage à expédier ne doit généralement pas dépasser 165 pouces (419 cm) (longueur + circonférence, en sachant que la circonférence est égale à  2 x largeur plus 2 x hauteur) avec une longueur maximale de 108 pouces (274 cm) et un poids maximum de 150 livres (68 kg). Veuillez consulter le service client pour toutes questions plus spécifiques. Veuillez consulter notre page des <A href="#"> Interdictions et Restrictions </A> avant d'acheter vos articles.
    </P>
    Frais supplémentaires :
     <UL CLASS = "blue-bullets">
     	<LI>Tous les colis dont la longueur max est supérieure ou égale à 96 pouces (243,84 cm) entraîneront des frais DIM supplémentaires de 100 USD.</LI>
     	<LI>Tous les colis dont le poids dépasse 50 livres (22,6 kg) entraîneront des frais de surpoids de 24 USD.</LI>
	</UL>
    <p><b>Taxe pour marchandises dangereuses:</b><br>la taxe pour marchandises dangereuses est de 37 USD pour UPS. À cela s’ajoute les frais de traitement et d’envoi.</p>
   </DIV>
  </DIV>















  <DIV CLASS = "shipping-method">
   <H2 CLASS = "section-title shipmethod-title">
    <SPAN>
      <IMG SRC = "shipito/fr/imgs/shipmethods/Preferred%20Carrier.svg"> Colis US Premium
    </SPAN>
   </H2>
   <DIV CLASS = "row">
    <DIV CLASS = "col-sm-12 col-md-4 shipmethod-header shipmethod-notes">
     <LABEL>Remarques rapides</LABEL>
     <P>
          Livraison en 5 à 9 jours ouvrables, la souscription à une assurance dommages / perte est recommandée
     </P>
    </DIV>
    <DIV CLASS = "col-sm-12 col-md-4 shipmethod-header shipmethod-max-size">
     <LABEL>
       Taille maximum (L, I, H)
       <A CLASS = "more-info" data-toggle="popover" data-trigger = "hover" data-placement = "top" data-content="&nbsp;"><IMG SRC = "shipito/fr/imgs/navigation/ExclamationMark.svg"></A>
     </LABEL>
     <UL CLASS = "blue-bullets">
      <LI>Longueur + (2x largeur) + (2x hauteur) doit être < 108 inches <SMALL>(274 cm)</SMALL></LI>
      <LI>La longueur maximale est généralement de 36 inches <SMALL>(91 cm)</SMALL></LI>
     </UL>
    </DIV>
    <DIV CLASS = "col-xs-6 col-sm-6 col-md-2 shipmethod-header shipmethod-tracking">
     <LABEL>Suivi</LABEL>
     <P>
      Oui, après avoir contacté le centre de traitement
     </P>
    </DIV>
    <DIV CLASS = "col-xs-6 col-sm-6 col-md-2 shipmethod-header shipmethod-max-weight">
     <LABEL>Poids maximum</LABEL>
     <P>
      70 livres <SMALL>(31 kg)</SMALL>
     </P>
    </DIV>
   </DIV>
   <DIV CLASS = "row btn-row">
    <DIV CLASS = "col-xs-12 text-center">
     <A CLASS = "btn btn-secondary btn-lg shipmethod-details-btn" data-toggle = "collapse" data-target = "#premiumparcelmail">Afficher plus de contenu</A>
    </DIV>
   </DIV>
   <DIV CLASS = "collapse" ID = "premiumparcelmail">
        <P>
    Service de courriers/colis express fiable, avec suivi, basé aux États-Unis. Excellente option pour tous vos colis expédiés à partir des États-Unis. Les colis localisés à Tualatin sont transférés et traités à Torrance. Le temps de transit entre Tualatin et Torrance est de 2 à 3 jours ouvrables. La longueur maximale du paquet est en principe de 36 pouces. Pas plus de deux piles au lithium par paquet. Veuillez contacter le service client pour toute question plus spécifique concernant l'expédition d'un article.
    </P>

   </DIV>
  </DIV>



  <DIV CLASS = "shipping-method">
   <H2 CLASS = "section-title shipmethod-title">
    <SPAN>
      <IMG SRC = "shipito/fr/imgs/shipmethods/DHL_Express.svg"> DHL
    </SPAN>
   </H2>
   <DIV CLASS = "row">
    <DIV CLASS = "col-sm-12 col-md-4 shipmethod-header shipmethod-notes">
     <LABEL>Remarques rapides</LABEL>
     <P>
      Rapide et fiable, nous recommandons l’achat d’une assurance contre les dégâts et pertes
     </P>
    </DIV>
    <DIV CLASS = "col-sm-12 col-md-4 shipmethod-header shipmethod-max-size">
     <LABEL>
       Taille maximum (L, I, H)
       <A CLASS = "more-info" data-toggle="popover" data-trigger = "hover" data-placement = "top" data-content="&nbsp;"><IMG SRC = "shipito/fr/imgs/navigation/ExclamationMark.svg"></A>
     </LABEL>
     <UL CLASS = "blue-bullets">
      <LI>Colis de 48 x 32 x 32 pouces <SMALL>(120 x 80 x 80 cm)</SMALL></LI>
     </UL>
    </DIV>
    <DIV CLASS = "col-xs-6 col-sm-6 col-md-2 shipmethod-header shipmethod-tracking">
     <LABEL>Suivi</LABEL>
     <P>
      Oui
     </P>
    </DIV>
    <DIV CLASS = "col-xs-6 col-sm-6 col-md-2 shipmethod-header shipmethod-max-weight">
     <LABEL>Poids maximum</LABEL>
     <P>
      155 livres <SMALL>(70 kg)</SMALL>
     </P>
    </DIV>
   </DIV>
   <DIV CLASS = "row btn-row">
    <DIV CLASS = "col-xs-12 text-center">
     <A CLASS = "btn btn-secondary btn-lg shipmethod-details-btn" data-toggle = "collapse" data-target = "#dhlmail">Afficher plus de contenu</A>
    </DIV>
   </DIV>
   <DIV CLASS = "collapse" ID = "dhlmail">
    <P>
     Service assez rapide et fiable avec un bon suivi dans la plupart des cas. La longueur maximale d'un colis est de 108 pouces.  Notre contrat avec DHL ne garantit pas la rapidité de la livraison. Les délais de livraison sont un guide et non un absolu.
    </P>
    <P>
      DHL tentera de vous contacter concernant le paiement des droits de douane ou des taxes dans votre pays.  Vous devrez procéder vous-même au dédouanement ou autoriser DHL à le faire pour vous.  Le dédouanement sera effectué par votre agence DHL locale.  Pour accélérer le processus, suivez le mouvement de votre colis sur le site Web de DHL en utilisant le numéro de suivi qui vous a été communiqué lors de l'envoi. Lorsque vous constatez que votre colis est arrivé dans votre pays, contactez DHL.
    </P>
    <P>
       Si DHL n'a pas de nouvelles de vous dans les 5 jours suivant l'arrivée dans votre pays, votre colis peut être renvoyé ou détruit.  En raison du coût élevé du renvoi d'un colis (généralement le triple de nos tarifs), nous vous recommandons vivement de suivre votre colis entrant et de contacter DHL plutôt que de compter sur eux pour vous contacter.  Contactez le service clientèle si vous avez des questions concernant le service DHL pour les palettes. La limite de poids des palettes est de 300 kg et leurs dimensions ne peuvent pas dépasser 120 x 120 x 160 cm
    </P>
<p><b>Frais de transport de marchandises dangereuses:</b><br>Les frais de transport de marchandises dangereuses sont de 50 $ pour DHL, plus les frais de traitement et d'expédition.</p>
   </DIV>
  </DIV>


































  <DIV CLASS = "shipping-method">
   <H2 CLASS = "section-title shipmethod-title">
    <SPAN>
      <IMG SRC = "shipito/fr/imgs/shipmethods/Lynia Delivery ExpressAsiaDirect.svg"> Lynia Delivery Express Asie Direct
    </SPAN>
   </H2>
   <DIV CLASS = "row">
    <DIV CLASS = "col-sm-12 col-md-4 shipmethod-header shipmethod-notes">
     <LABEL>Remarques rapides</LABEL>
     <P>
      ECMS Notes Here
     </P>
    </DIV>
    <DIV CLASS = "col-sm-12 col-md-4 shipmethod-header shipmethod-max-size">
     <LABEL>
       Taille maximum (L, I, H)
       <A CLASS = "more-info" data-toggle="popover" data-trigger = "hover" data-placement = "top" data-content="&nbsp;"><IMG SRC = "shipito/fr/imgs/navigation/ExclamationMark.svg"></A>
     </LABEL>
     <UL CLASS = "blue-bullets">
      <LI>Dimensions here</SMALL></LI>
      <LI>More Dimensions here</SMALL></LI>
     </UL>
    </DIV>
    <DIV CLASS = "col-xs-6 col-sm-6 col-md-2 shipmethod-header shipmethod-tracking">
     <LABEL>Suivi</LABEL>
     <P>
      Oui
     </P>
    </DIV>
    <DIV CLASS = "col-xs-6 col-sm-6 col-md-2 shipmethod-header shipmethod-max-weight">
     <LABEL>Poids maximum</LABEL>
     <P>
      MAX WEIGHT lbs <SMALL>(max weight kg)</SMALL>
     </P>
    </DIV>
   </DIV>
   <DIV CLASS = "row btn-row">
    <DIV CLASS = "col-xs-12 text-center">
     <A CLASS = "btn btn-secondary btn-lg shipmethod-details-btn" data-toggle = "collapse" data-target = "#ecmsmail">Afficher plus de contenu</A>
    </DIV>
   </DIV>
   <DIV CLASS = "collapse" ID = "ecmsmail">

    <P>
    Details here
    </P>

   </DIV>
  </DIV>






  <DIV CLASS = "shipping-method">
   <H2 CLASS = "section-title shipmethod-title">
    <SPAN>
      Livraison de plusieurs colis (MPS)
    </SPAN>
   </H2>
   <DIV CLASS = "row">
    <DIV CLASS = "col-sm-12 col-md-4 shipmethod-header shipmethod-notes">
     <LABEL>Remarques rapides</LABEL>
     <P>
      Davantage d’économies lorsque DHL ou UPS livrent plusieurs colis à la même adresse.
     </P>
    </DIV>
    <DIV CLASS = "col-sm-12 col-md-4 shipmethod-header shipmethod-max-size">
     <LABEL>
       Taille maximum (L, I, H)
       <A CLASS = "more-info" data-toggle="popover" data-trigger = "hover" data-placement = "top" data-content="&nbsp;"><IMG SRC = "shipito/fr/imgs/navigation/ExclamationMark.svg"></A>
     </LABEL>
     <UL CLASS = "blue-bullets">
      <LI>Veuillez consulter les sections concernant DHL et UPS pour connaître la taille maximale.</LI>
     </UL>
    </DIV>
    <DIV CLASS = "col-xs-6 col-sm-6 col-md-2 shipmethod-header shipmethod-tracking">
     <LABEL>Suivi</LABEL>
     <P>
      Oui
     </P>
    </DIV>
    <DIV CLASS = "col-xs-6 col-sm-6 col-md-2 shipmethod-header shipmethod-max-weight">
     <LABEL>Poids maximum</LABEL>
     <P>
      Veuillez consulter les sections concernant DHL et UPS pour connaître le poids maximal.
     </P>
    </DIV>
   </DIV>
   <DIV CLASS = "row btn-row">
    <DIV CLASS = "col-xs-12 text-center">
     <A CLASS = "btn btn-secondary btn-lg shipmethod-details-btn" data-toggle = "collapse" data-target = "#mpsmail">Afficher plus de contenu</A>
    </DIV>
   </DIV>
   <DIV CLASS = "collapse" ID = "mpsmail">
    <P>
     Vous obtenez des réductions plus importantes lors de l’envoi de deux colis ou plus en simultané par DHL et UPS. Des réductions pouvant aller jusqu’à 30 voire 40 %.
    </P>
    <P>
     Remarque: DHL fournit un seul et même numéro de suivi lors de l’envoi de plusieurs colis en simultané.
    </P>

   </DIV>
  </DIV>
  <DIV CLASS = "row bottom-button">
   <DIV CLASS = "col-xs-12 text-center">
    <BUTTON TYPE = "BUTTON" CLASS = "btn btn-secondary btn-lg details-btn" TITLE = "Afficher les détails">Afficher les détails</BUTTON>
   </DIV>
  </DIV>



</DIV>
<DIV CLASS = "signup-banner">
 <DIV CLASS = "container">
   <DIV CLASS = "text-center">
    <DIV>Économisez dès aujourd’hui !</DIV>
   </DIV>
   <DIV CLASS = "text-center us-address">
    <DIV>Obtenez une adresse gratuite aux États-Unis !</DIV>
   </DIV>
   <DIV CLASS = "text-center">
   <DIV><A href="#" CLASS = "btn">Inscription gratuite</A></DIV>
  </DIV>
 </DIV>
</DIV>



<SCRIPT>
$('.details-btn').click(function (evt){
	   if ($(this).html().indexOf('Afficher les détails') != -1)
	   {
		   $('.details .collapse').collapse("show");
		   $('.shipmethod-details-btn').html('Afficher moins de contenu');
		   $(this).html('Masquer tout le contenu supplémentaire');
	   }
	   else
	   {
		   $('.details .collapse').collapse("hide");
		   $('.shipmethod-details-btn').html('Afficher plus de contenu');
		   $(this).html('Afficher les détails');
	   }
	});
$('.shipmethod-details-btn').click(function() {
	   if ($(this).html().indexOf('Afficher plus de contenu') != -1)
		   $(this).html('Afficher moins de contenu');
	   else
		   $(this).html('Afficher plus de contenu');
	});

</SCRIPT>
<SCRIPT>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover({ html : true });
});
</SCRIPT>
</DIV>
<FOOTER CLASS = "top-footer">
 <DIV CLASS = "container">
  <DIV CLASS = "row">
   <DIV CLASS = "col-md-3 col-xs-6 text-center advantage">
    <SPAN CLASS = "advantage-image"><IMG SRC = "shipito/fr/imgs/navigation/CompetitivePricing.svg"></SPAN>
    <SPAN CLASS = "advantage-service">La tarification compétitive de Lynia Delivery Express</SPAN>
    <SPAN CLASS = "advantage-description">Nos prix hautement compétitifs vous permettent d’économiser sur les frais d’expédition.</SPAN>
   </DIV>
   <DIV CLASS = "col-md-3 col-xs-6 text-center advantage">
    <SPAN CLASS = "advantage-image"><IMG SRC = "shipito/fr/imgs/navigation/InternationalDelivery.svg"></SPAN>
    <SPAN CLASS = "advantage-service">Livraison internationale</SPAN>
    <SPAN CLASS = "advantage-description">Nos offres sont parmi les meilleures pour les envois internationaux</SPAN>
   </DIV>
   <DIV CLASS = "col-md-3 col-xs-6 text-center advantage">
    <SPAN CLASS = "advantage-image"><IMG SRC = "shipito/fr/imgs/navigation/SecurePayment.svg"></SPAN>
    <SPAN CLASS = "advantage-service">Modes de paiement sécurisés</SPAN>
    <SPAN CLASS = "advantage-description">Effectuer vos paiements en toute sérénité grâce à nos systèmes Safe Pay</SPAN>
   </DIV>
   <DIV CLASS = "col-md-3 col-xs-6 text-center advantage">
    <SPAN CLASS = "advantage-image"><IMG SRC = "shipito/fr/imgs/navigation/ShopSafely.svg"></SPAN>
    <SPAN CLASS = "advantage-service">Achetez en toute sécurité</SPAN>
    <SPAN CLASS = "advantage-description">Avec nous, votre compte est constamment protégé</SPAN>
   </DIV>
  </DIV>
 </DIV>
</FOOTER>
<FOOTER CLASS = "bottom-footer">
 <DIV CLASS = "container">
  <DIV CLASS = "row hide-sm">
   <DIV CLASS = "col-md-3 col-xs-6">
    <LABEL>Nos services</LABEL>
    <A href="#">Lynia Delivery Express Pour Mois</A>
    <A href="#">Lynia Delivery Express Pour les Entreprises</A>
   </DIV>
   <DIV CLASS = "col-md-3 col-xs-6">
    <LABEL>Débuter</LABEL>
    <A href="#">Comment ça Marche</A>
    <A href="#">Tarifs et Options</A>
    <A href="#">FAQs</A>
    <A href="#">Modes de livraison</A>
    <A href="#">Que puis-je expédier ?</A>
   </DIV>
   <DIV CLASS = "col-md-3 col-xs-6">
    <LABEL>À Propos de Nous</LABEL>
    <A href="#">Qu'est-ce que Lynia Delivery Express</A>
    <A href="#">Emplacements des entrepôts</A>
    <A href="#">Blog</A>
    <A href="#">Actualités</A>
    <A href="#">Commentaires des clients</A>
    <A href="#">Programme d’Affiliation</A>
    <A href="#">Vendeurs directs</A>
    <A href="#">US Unlocked</A>
   </DIV>
   <DIV CLASS = "col-md-3 col-xs-6">
    <LABEL>Prenez Contact Avec Nous</LABEL>
    <DIV CLASS = "contact"><A href="#"><I CLASS = "icon-contact-us"></I> Prenez Contact Avec Nous</A></DIV>
    <DIV CLASS = "contact"><A HREF = "mailto:support@shipito.com"><IMG SRC = "shipito/fr/imgs/navigation/email.svg" HEIGHT = "20" WIDTH = "20" CLASS = "hide-sm"><IMG SRC = "shipito/fr/imgs/navigation/email_m.svg" HEIGHT = "20" WIDTH = "20" CLASS = "hide-lg"> support@shipito.com</A></DIV>
    <DIV CLASS = "contact"><I CLASS = "icon-live-chat"></I> Chat en direct (Heure du Pacifique):<BR>En semaine: 6h à 18h<BR>Samedi: 6h à 15h<BR>Dimanche: Fermé</DIV>
   </DIV>
  </DIV>
  <DIV CLASS = "row">
   <DIV CLASS = "col-xs-12 col-sm-6 pull-right sm-icons sm-icons-fr text-right">
    <LABEL>&nbsp;</LABEL>
     <A href="#" TARGET = "_blank"><I CLASS = "icon-facebook"></I></A>
     <A href="#" TARGET = "_blank"><I CLASS = "icon-twitter"></I></A>
     <A href="#" TARGET = "_blank"><I CLASS = "icon-youtube"></I></A>
     <A href="#" TARGET = "_blank"><I CLASS = "icon-instagram"></I></A>
   </DIV>
  </DIV>
  <DIV CLASS = "row">
   <DIV CLASS = "col-xs-12 text-center privacy">
    <A href="#">Règles de confidentialité</A>
    &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
   <A href="#">Conditions Générales</A>
    <BR>
    Copyright &copy; 2024 Lynia Delivery Express. All rights reserved.
   </DIV>
  </DIV>
 </DIV>
</FOOTER>



<a href="#page-top" class="back-to-top-link" title="Retour Vers le Haut">
    <img src="files/BackToTop.svg">
  </a>
  <div data-id="PP9Nh3EYw-7" class="livechat_button desktop">
    <a href="#" onclick="LiveChatWidget.call(&#39;maximize&#39;);return false;" title="Logiciel de discussion en direct">
      <img src="files/saved_resource" alt="LiveChat" title="LiveChat">
    </a>
  </div>
  <!-- Start of LiveChat (www.livechat.com) code -->
  <script>
    window.__lc = window.__lc || {};
    window.__lc.license = 3392252;;
    (function(n, t, c) {
      function i(n) {
        return e._h ? e._h.apply(null, n) : e._q.push(n)
      }
      var e = {
        _q: [],
        _h: null,
        _v: "2.0",
        on: function() {
          i(["on", c.call(arguments)])
        },
        once: function() {
          i(["once", c.call(arguments)])
        },
        off: function() {
          i(["off", c.call(arguments)])
        },
        get: function() {
          if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
          return i(["get", c.call(arguments)])
        },
        call: function() {
          i(["call", c.call(arguments)])
        },
        init: function() {
          var n = t.createElement("script");
          n.async = !0, n.type = "text/javascript", n.src = "https://cdn.livechatinc.com/tracking.js", t.head.appendChild(n)
        }
      };
      !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e
    }(window, document, [].slice))
  </script>
  <noscript>
    <a href="#" rel="noopener nofollow" target="_blank">LiveChat</a>
  </noscript>


<SCRIPT>
$(document).ready(function() {
  if ($('#banner-container').length) {
    $('#banner-container').load('/fr/banner-ads?pg=/help/postage');
  }
});
</SCRIPT>
<SCRIPT>
var $ = jQuery.noConflict();
$(document).ready(function() {



  $('FORM').submit(bsValidateForm);
  $('.submitbutton').click(bsSubmitForm);
  formvalidator.initializeForms();
});
</SCRIPT>
</BODY>

<!-- Mirrored from www.shipito.com/fr/help/postage by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 13:44:55 GMT -->
</HTML>
<!--- Copyright 2024 GlobalAccess All Rights Reserved -->
<!--- Web Server 3088 -->

