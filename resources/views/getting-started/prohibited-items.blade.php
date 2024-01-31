<!DOCTYPE HTML>
<HTML dir="ltr" lang="fr">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  @include('layouts.head-guest')

  <BODY CLASS="light">
    <DIV ID="menu-filler"></DIV>
    <A NAME="page-top" ID="page-top"></A>

    @include('layouts.header-guest')

    <DIV CLASS="main-body">
      <STYLE>
        .popover {
          width: 400px;
          max-width: 400px;
          position: absolute;
        }

        #country-list-comment {
          width: 75%;
          margin-left: auto;
          margin-right: auto;
          margin-bottom: 30px;
        }

        @media (max-width: 767px) {
          .popover {
            width: 325px;
            max-width: 325px;
          }

          #country-list-comment {
            width: 95%;
            margin-bottom: 0px;
          }

          .country-map {
            margin-bottom: 0px;
          }
        }

        @media (max-width: 320px) {
          .popover {
            width: 285px;
            max-width: 285px;
          }
        }
      </STYLE>
      <DIV ID="outer-top-banner" CLASS="container-fluid top-banner-outer">
        <DIV ID="inner-top-banner" CLASS="top-banner-inner">
          <DIV CLASS="container">
            <H1 CLASS="light">Interdits et faisant l’objet de restrictions <BR CLASS="mobile-only" />Directives d’envoi </H1>
            <P>Guide d’articles non expédiables des États-Unis, ou non admissibles dans votre pays ou dont l’envoi fait l’objet de restrictions. Examinez-la attentivement avant de commencer vos achats.</P>
          </DIV>
        </DIV>
      </DIV>
      <DIV CLASS="container country-box" ID="country-container">
        <DIV ID="instruction">
          <div class="selector" data-toggle-class="catch">
            <DIV ID="select-country">Sélectionnez le pays de destination des articles afin de vérifier ceux qui ne peuvent pas être expédiés.</DIV>
            <DIV CLASS="row">
              <DIV CLASS="not-mobile">
                <DIV CLASS="col-sm-2"></DIV>
              </DIV>
              <DIV CLASS="countryselect col-sm-8 col-xs-12">
                <FORM ACTION="#" NAME="selectcountryform">
                  <INPUT TYPE="HIDDEN" NAME="restricteditem.country" CLASS="countrydropdown" VALUE="US">
                  <DIV CLASS="dropdown dropdown-input country-dropdown">
                    <BUTTON CLASS="btn dropdown-toggle sc-country-btn st-country-US" data-toggle="dropdown" data-bs-toggle="dropdown">États-Unis <SPAN CLASS="ga-caret"></SPAN>
                    </BUTTON>
                    <UL CLASS="dropdown-menu st-countries">
                      <LI>
                        <INPUT TYPE="text" CLASS="form-control" ID="sc-country-lookup">
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-AF" data-value="AF" data-full-name="Afghanistan" data-full-name-local="Afghanistan" data-country-code="AF" data-variable="restricteditem.country">Afghanistan</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-ZA" data-value="ZA" data-full-name="South Africa" data-full-name-local="Afrique du Sud" data-country-code="ZA" data-variable="restricteditem.country">Afrique du Sud</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-AL" data-value="AL" data-full-name="Albania" data-full-name-local="Albanie" data-country-code="AL" data-variable="restricteditem.country">Albanie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-DZ" data-value="DZ" data-full-name="Algeria" data-full-name-local="Algérie" data-country-code="DZ" data-variable="restricteditem.country">Algérie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-DE" data-value="DE" data-full-name="Germany" data-full-name-local="Allemagne" data-country-code="DE" data-variable="restricteditem.country">Allemagne</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-AD" data-value="AD" data-full-name="Andorra" data-full-name-local="Andorre" data-country-code="AD" data-variable="restricteditem.country">Andorre</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-AO" data-value="AO" data-full-name="Angola" data-full-name-local="Angola" data-country-code="AO" data-variable="restricteditem.country">Angola</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-AI" data-value="AI" data-full-name="Anguilla" data-full-name-local="Anguilla" data-country-code="AI" data-variable="restricteditem.country">Anguilla</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-AQ" data-value="AQ" data-full-name="Antarctica" data-full-name-local="Antarctique" data-country-code="AQ" data-variable="restricteditem.country">Antarctique</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-AG" data-value="AG" data-full-name="Antigua and Barbuda" data-full-name-local="Antigua-et-Barbuda" data-country-code="AG" data-variable="restricteditem.country">Antigua-et-Barbuda</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-SA" data-value="SA" data-full-name="Saudi Arabia" data-full-name-local="Arabie Saoudite" data-country-code="SA" data-variable="restricteditem.country">Arabie Saoudite</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-AR" data-value="AR" data-full-name="Argentina" data-full-name-local="Argentine" data-country-code="AR" data-variable="restricteditem.country">Argentine</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-AM" data-value="AM" data-full-name="Armenia" data-full-name-local="Arménie" data-country-code="AM" data-variable="restricteditem.country">Arménie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-AW" data-value="AW" data-full-name="Aruba" data-full-name-local="Aruba" data-country-code="AW" data-variable="restricteditem.country">Aruba</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-AU" data-value="AU" data-full-name="Australia" data-full-name-local="Australie" data-country-code="AU" data-variable="restricteditem.country">Australie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-AT" data-value="AT" data-full-name="Austria" data-full-name-local="Autriche" data-country-code="AT" data-variable="restricteditem.country">Autriche</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-AZ" data-value="AZ" data-full-name="Azerbaijan" data-full-name-local="Azerbaïdjan" data-country-code="AZ" data-variable="restricteditem.country">Azerbaïdjan</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-BS" data-value="BS" data-full-name="Bahamas" data-full-name-local="Bahamas" data-country-code="BS" data-variable="restricteditem.country">Bahamas</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-BH" data-value="BH" data-full-name="Bahrain" data-full-name-local="Bahreïn" data-country-code="BH" data-variable="restricteditem.country">Bahreïn</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-BD" data-value="BD" data-full-name="Bangladesh" data-full-name-local="Bangladesh" data-country-code="BD" data-variable="restricteditem.country">Bangladesh</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-BB" data-value="BB" data-full-name="Barbados" data-full-name-local="Barbade" data-country-code="BB" data-variable="restricteditem.country">Barbade</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-BE" data-value="BE" data-full-name="Belgium" data-full-name-local="Belgique" data-country-code="BE" data-variable="restricteditem.country">Belgique</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-BM" data-value="BM" data-full-name="Bermuda" data-full-name-local="Bermudes" data-country-code="BM" data-variable="restricteditem.country">Bermudes</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-BT" data-value="BT" data-full-name="Bhutan" data-full-name-local="Bhoutan" data-country-code="BT" data-variable="restricteditem.country">Bhoutan</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-BY" data-value="BY" data-full-name="Belarus" data-full-name-local="Biélorussie" data-country-code="BY" data-variable="restricteditem.country">Biélorussie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-BO" data-value="BO" data-full-name="Bolivia" data-full-name-local="Bolivie" data-country-code="BO" data-variable="restricteditem.country">Bolivie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-BQ" data-value="BQ" data-full-name="Bonaire, Sint Eustatius & Saba" data-full-name-local="Bonaire, Saint Eustache & Saba" data-country-code="BQ" data-variable="restricteditem.country">Bonaire, Saint Eustache & Saba</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-BA" data-value="BA" data-full-name="Bosnia and Herzegovina" data-full-name-local="Bosnie Herzégovine" data-country-code="BA" data-variable="restricteditem.country">Bosnie Herzégovine</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-BW" data-value="BW" data-full-name="Botswana" data-full-name-local="Botswana" data-country-code="BW" data-variable="restricteditem.country">Botswana</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-BN" data-value="BN" data-full-name="Brunei Darussalam" data-full-name-local="Bruneï Darussalam" data-country-code="BN" data-variable="restricteditem.country">Bruneï Darussalam</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-BR" data-value="BR" data-full-name="Brazil" data-full-name-local="Brésil" data-country-code="BR" data-variable="restricteditem.country">Brésil</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-BG" data-value="BG" data-full-name="Bulgaria" data-full-name-local="Bulgarie" data-country-code="BG" data-variable="restricteditem.country">Bulgarie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-BF" data-value="BF" data-full-name="Burkina Faso" data-full-name-local="Burkina Faso" data-country-code="BF" data-variable="restricteditem.country">Burkina Faso</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-BI" data-value="BI" data-full-name="Burundi" data-full-name-local="Burundi" data-country-code="BI" data-variable="restricteditem.country">Burundi</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-BZ" data-value="BZ" data-full-name="Belize" data-full-name-local="Bélize" data-country-code="BZ" data-variable="restricteditem.country">Bélize</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-BJ" data-value="BJ" data-full-name="Benin" data-full-name-local="Bénin" data-country-code="BJ" data-variable="restricteditem.country">Bénin</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-KH" data-value="KH" data-full-name="Cambodia" data-full-name-local="Cambodge" data-country-code="KH" data-variable="restricteditem.country">Cambodge</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-CM" data-value="CM" data-full-name="Cameroon" data-full-name-local="Cameroun" data-country-code="CM" data-variable="restricteditem.country">Cameroun</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-CA" data-value="CA" data-full-name="Canada" data-full-name-local="Canada" data-country-code="CA" data-variable="restricteditem.country">Canada</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-CV" data-value="CV" data-full-name="Cape Verde" data-full-name-local="Cap-Vert" data-country-code="CV" data-variable="restricteditem.country">Cap-Vert</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-CL" data-value="CL" data-full-name="Chile" data-full-name-local="Chili" data-country-code="CL" data-variable="restricteditem.country">Chili</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-CN" data-value="CN" data-full-name="China" data-full-name-local="Chine" data-country-code="CN" data-variable="restricteditem.country">Chine</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-CY" data-value="CY" data-full-name="Cyprus" data-full-name-local="Chypre" data-country-code="CY" data-variable="restricteditem.country">Chypre</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-VA" data-value="VA" data-full-name="Vatican City" data-full-name-local="Cité du Vatican" data-country-code="VA" data-variable="restricteditem.country">Cité du Vatican</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-CO" data-value="CO" data-full-name="Colombia" data-full-name-local="Colombie" data-country-code="CO" data-variable="restricteditem.country">Colombie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-KM" data-value="KM" data-full-name="Comoros" data-full-name-local="Comores" data-country-code="KM" data-variable="restricteditem.country">Comores</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-CG" data-value="CG" data-full-name="Congo" data-full-name-local="Congo" data-country-code="CG" data-variable="restricteditem.country">Congo</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-CD" data-value="CD" data-full-name="Congo-Kinshasa" data-full-name-local="Congo-Kinshasa" data-country-code="CD" data-variable="restricteditem.country">Congo-Kinshasa</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-KR" data-value="KR" data-full-name="Korea" data-full-name-local="Corée" data-country-code="KR" data-variable="restricteditem.country">Corée</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-CR" data-value="CR" data-full-name="Costa Rica" data-full-name-local="Costa Rica" data-country-code="CR" data-variable="restricteditem.country">Costa Rica</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-HR" data-value="HR" data-full-name="Croatia" data-full-name-local="Croatie" data-country-code="HR" data-variable="restricteditem.country">Croatie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-CW" data-value="CW" data-full-name="Curacao" data-full-name-local="Curacao" data-country-code="CW" data-variable="restricteditem.country">Curacao</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-CI" data-value="CI" data-full-name="Cote d'Ivoire" data-full-name-local="Côte d'Ivoire" data-country-code="CI" data-variable="restricteditem.country">Côte d'Ivoire</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-DK" data-value="DK" data-full-name="Denmark" data-full-name-local="Danemark" data-country-code="DK" data-variable="restricteditem.country">Danemark</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-DJ" data-value="DJ" data-full-name="Djibouti" data-full-name-local="Djibouti" data-country-code="DJ" data-variable="restricteditem.country">Djibouti</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-DM" data-value="DM" data-full-name="Dominica" data-full-name-local="Dominique" data-country-code="DM" data-variable="restricteditem.country">Dominique</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-SV" data-value="SV" data-full-name="El Salvador" data-full-name-local="El Salvador" data-country-code="SV" data-variable="restricteditem.country">El Salvador</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-ES" data-value="ES" data-full-name="Spain" data-full-name-local="Espagne" data-country-code="ES" data-variable="restricteditem.country">Espagne</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-EE" data-value="EE" data-full-name="Estonia" data-full-name-local="Estonie" data-country-code="EE" data-variable="restricteditem.country">Estonie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-FJ" data-value="FJ" data-full-name="Fiji" data-full-name-local="Fidji" data-country-code="FJ" data-variable="restricteditem.country">Fidji</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-FI" data-value="FI" data-full-name="Finland" data-full-name-local="Finlande" data-country-code="FI" data-variable="restricteditem.country">Finlande</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-FR" data-value="FR" data-full-name="France" data-full-name-local="France" data-country-code="FR" data-variable="restricteditem.country">France</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-GA" data-value="GA" data-full-name="Gabon" data-full-name-local="Gabon" data-country-code="GA" data-variable="restricteditem.country">Gabon</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-GM" data-value="GM" data-full-name="Gambia" data-full-name-local="Gambie" data-country-code="GM" data-variable="restricteditem.country">Gambie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-GH" data-value="GH" data-full-name="Ghana" data-full-name-local="Ghana" data-country-code="GH" data-variable="restricteditem.country">Ghana</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-GI" data-value="GI" data-full-name="Gibraltar" data-full-name-local="Gibraltar" data-country-code="GI" data-variable="restricteditem.country">Gibraltar</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-GD" data-value="GD" data-full-name="Grenada" data-full-name-local="Grenade" data-country-code="GD" data-variable="restricteditem.country">Grenade</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-GL" data-value="GL" data-full-name="Greenland" data-full-name-local="Groenland" data-country-code="GL" data-variable="restricteditem.country">Groenland</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-GR" data-value="GR" data-full-name="Greece" data-full-name-local="Grèce" data-country-code="GR" data-variable="restricteditem.country">Grèce</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-GP" data-value="GP" data-full-name="Guadeloupe" data-full-name-local="Guadeloupe" data-country-code="GP" data-variable="restricteditem.country">Guadeloupe</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-GU" data-value="GU" data-full-name="Guam" data-full-name-local="Guam" data-country-code="GU" data-variable="restricteditem.country">Guam</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-GT" data-value="GT" data-full-name="Guatemala" data-full-name-local="Guatemala" data-country-code="GT" data-variable="restricteditem.country">Guatemala</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-GG" data-value="GG" data-full-name="Guernsey" data-full-name-local="Guernesey" data-country-code="GG" data-variable="restricteditem.country">Guernesey</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-GN" data-value="GN" data-full-name="Guinea" data-full-name-local="Guinée" data-country-code="GN" data-variable="restricteditem.country">Guinée</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-GQ" data-value="GQ" data-full-name="Equatorial Guinea" data-full-name-local="Guinée Équatoriale" data-country-code="GQ" data-variable="restricteditem.country">Guinée Équatoriale</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-GW" data-value="GW" data-full-name="Guinea-Bissau" data-full-name-local="Guinée-Bissau" data-country-code="GW" data-variable="restricteditem.country">Guinée-Bissau</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-GY" data-value="GY" data-full-name="Guyana" data-full-name-local="Guyana" data-country-code="GY" data-variable="restricteditem.country">Guyana</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-GF" data-value="GF" data-full-name="French Guiana" data-full-name-local="Guyane française" data-country-code="GF" data-variable="restricteditem.country">Guyane française</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-GE" data-value="GE" data-full-name="Georgia" data-full-name-local="Géorgie" data-country-code="GE" data-variable="restricteditem.country">Géorgie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-HT" data-value="HT" data-full-name="Haiti" data-full-name-local="Haïti" data-country-code="HT" data-variable="restricteditem.country">Haïti</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-HN" data-value="HN" data-full-name="Honduras" data-full-name-local="Honduras" data-country-code="HN" data-variable="restricteditem.country">Honduras</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-HK" data-value="HK" data-full-name="Hong Kong" data-full-name-local="Hong Kong" data-country-code="HK" data-variable="restricteditem.country">Hong Kong</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-HU" data-value="HU" data-full-name="Hungary" data-full-name-local="Hongrie" data-country-code="HU" data-variable="restricteditem.country">Hongrie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-MP" data-value="MP" data-full-name="Northern Mariana Islands (Saipan)" data-full-name-local="Iles Mariannes septentrionales (Saipan)" data-country-code="MP" data-variable="restricteditem.country">Iles Mariannes septentrionales (Saipan)</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-IN" data-value="IN" data-full-name="India" data-full-name-local="Inde" data-country-code="IN" data-variable="restricteditem.country">Inde</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-ID" data-value="ID" data-full-name="Indonesia" data-full-name-local="Indonésie" data-country-code="ID" data-variable="restricteditem.country">Indonésie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-IQ" data-value="IQ" data-full-name="Iraq" data-full-name-local="Irak" data-country-code="IQ" data-variable="restricteditem.country">Irak</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-IE" data-value="IE" data-full-name="Ireland" data-full-name-local="Irlande" data-country-code="IE" data-variable="restricteditem.country">Irlande</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-IS" data-value="IS" data-full-name="Iceland" data-full-name-local="Islande" data-country-code="IS" data-variable="restricteditem.country">Islande</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-IL" data-value="IL" data-full-name="Israel" data-full-name-local="Israël" data-country-code="IL" data-variable="restricteditem.country">Israël</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-IT" data-value="IT" data-full-name="Italy" data-full-name-local="Italie" data-country-code="IT" data-variable="restricteditem.country">Italie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-JM" data-value="JM" data-full-name="Jamaica" data-full-name-local="Jamaïque" data-country-code="JM" data-variable="restricteditem.country">Jamaïque</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-JP" data-value="JP" data-full-name="Japan" data-full-name-local="Japon" data-country-code="JP" data-variable="restricteditem.country">Japon</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-JE" data-value="JE" data-full-name="Jersey" data-full-name-local="Jersey" data-country-code="JE" data-variable="restricteditem.country">Jersey</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-JO" data-value="JO" data-full-name="Jordan" data-full-name-local="Jordanie" data-country-code="JO" data-variable="restricteditem.country">Jordanie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-KZ" data-value="KZ" data-full-name="Kazakhstan" data-full-name-local="Kazakhstan" data-country-code="KZ" data-variable="restricteditem.country">Kazakhstan</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-KE" data-value="KE" data-full-name="Kenya" data-full-name-local="Kenya" data-country-code="KE" data-variable="restricteditem.country">Kenya</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-KG" data-value="KG" data-full-name="Kyrgyzstan" data-full-name-local="Kirghizistan" data-country-code="KG" data-variable="restricteditem.country">Kirghizistan</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-KI" data-value="KI" data-full-name="Kiribati" data-full-name-local="Kiribati" data-country-code="KI" data-variable="restricteditem.country">Kiribati</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-XK" data-value="XK" data-full-name="Kosovo" data-full-name-local="Kosovo" data-country-code="XK" data-variable="restricteditem.country">Kosovo</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-KW" data-value="KW" data-full-name="Kuwait" data-full-name-local="Koweït" data-country-code="KW" data-variable="restricteditem.country">Koweït</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-LA" data-value="LA" data-full-name="Laos" data-full-name-local="Laos" data-country-code="LA" data-variable="restricteditem.country">Laos</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-LS" data-value="LS" data-full-name="Lesotho" data-full-name-local="Lesotho" data-country-code="LS" data-variable="restricteditem.country">Lesotho</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-LV" data-value="LV" data-full-name="Latvia" data-full-name-local="Lettonie" data-country-code="LV" data-variable="restricteditem.country">Lettonie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-LB" data-value="LB" data-full-name="Lebanon" data-full-name-local="Liban" data-country-code="LB" data-variable="restricteditem.country">Liban</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-LY" data-value="LY" data-full-name="Libya" data-full-name-local="Libye" data-country-code="LY" data-variable="restricteditem.country">Libye</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-LR" data-value="LR" data-full-name="Liberia" data-full-name-local="Libéria" data-country-code="LR" data-variable="restricteditem.country">Libéria</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-LI" data-value="LI" data-full-name="Liechtenstein" data-full-name-local="Liechtenstein" data-country-code="LI" data-variable="restricteditem.country">Liechtenstein</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-LT" data-value="LT" data-full-name="Lithuania" data-full-name-local="Lituanie" data-country-code="LT" data-variable="restricteditem.country">Lituanie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-LU" data-value="LU" data-full-name="Luxembourg" data-full-name-local="Luxembourg" data-country-code="LU" data-variable="restricteditem.country">Luxembourg</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-MO" data-value="MO" data-full-name="Macau" data-full-name-local="Macao" data-country-code="MO" data-variable="restricteditem.country">Macao</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-MK" data-value="MK" data-full-name="Macedonia" data-full-name-local="Macédoine" data-country-code="MK" data-variable="restricteditem.country">Macédoine</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-MG" data-value="MG" data-full-name="Madagascar" data-full-name-local="Madagascar" data-country-code="MG" data-variable="restricteditem.country">Madagascar</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-MY" data-value="MY" data-full-name="Malaysia" data-full-name-local="Malaisie" data-country-code="MY" data-variable="restricteditem.country">Malaisie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-MW" data-value="MW" data-full-name="Malawi" data-full-name-local="Malawi" data-country-code="MW" data-variable="restricteditem.country">Malawi</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-MV" data-value="MV" data-full-name="Maldives" data-full-name-local="Maldives" data-country-code="MV" data-variable="restricteditem.country">Maldives</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-ML" data-value="ML" data-full-name="Mali" data-full-name-local="Mali" data-country-code="ML" data-variable="restricteditem.country">Mali</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-MT" data-value="MT" data-full-name="Malta" data-full-name-local="Malte" data-country-code="MT" data-variable="restricteditem.country">Malte</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-MA" data-value="MA" data-full-name="Morocco" data-full-name-local="Maroc" data-country-code="MA" data-variable="restricteditem.country">Maroc</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-MQ" data-value="MQ" data-full-name="Martinique" data-full-name-local="Martinique" data-country-code="MQ" data-variable="restricteditem.country">Martinique</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-MU" data-value="MU" data-full-name="Mauritius" data-full-name-local="Maurice" data-country-code="MU" data-variable="restricteditem.country">Maurice</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-MR" data-value="MR" data-full-name="Mauritania" data-full-name-local="Mauritanie" data-country-code="MR" data-variable="restricteditem.country">Mauritanie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-YT" data-value="YT" data-full-name="Mayotte" data-full-name-local="Mayotte" data-country-code="YT" data-variable="restricteditem.country">Mayotte</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-MX" data-value="MX" data-full-name="Mexico" data-full-name-local="Mexique" data-country-code="MX" data-variable="restricteditem.country">Mexique</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-FM" data-value="FM" data-full-name="Micronesia" data-full-name-local="Micronésie" data-country-code="FM" data-variable="restricteditem.country">Micronésie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-MD" data-value="MD" data-full-name="Moldova" data-full-name-local="Moldavie" data-country-code="MD" data-variable="restricteditem.country">Moldavie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-MC" data-value="MC" data-full-name="Monaco" data-full-name-local="Monaco" data-country-code="MC" data-variable="restricteditem.country">Monaco</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-MN" data-value="MN" data-full-name="Mongolia" data-full-name-local="Mongolie" data-country-code="MN" data-variable="restricteditem.country">Mongolie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-MS" data-value="MS" data-full-name="Montserrat" data-full-name-local="Montserrat" data-country-code="MS" data-variable="restricteditem.country">Montserrat</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-ME" data-value="ME" data-full-name="Montenegro" data-full-name-local="Monténégro" data-country-code="ME" data-variable="restricteditem.country">Monténégro</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-MZ" data-value="MZ" data-full-name="Mozambique" data-full-name-local="Mozambique" data-country-code="MZ" data-variable="restricteditem.country">Mozambique</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-NA" data-value="NA" data-full-name="Namibia" data-full-name-local="Namibie" data-country-code="NA" data-variable="restricteditem.country">Namibie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-NR" data-value="NR" data-full-name="Nauru" data-full-name-local="Nauru" data-country-code="NR" data-variable="restricteditem.country">Nauru</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-NI" data-value="NI" data-full-name="Nicaragua" data-full-name-local="Nicaragua" data-country-code="NI" data-variable="restricteditem.country">Nicaragua</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-NE" data-value="NE" data-full-name="Niger" data-full-name-local="Niger" data-country-code="NE" data-variable="restricteditem.country">Niger</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-NG" data-value="NG" data-full-name="Nigeria" data-full-name-local="Nigeria" data-country-code="NG" data-variable="restricteditem.country">Nigeria</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-NU" data-value="NU" data-full-name="Niue" data-full-name-local="Niue" data-country-code="NU" data-variable="restricteditem.country">Niue</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-NO" data-value="NO" data-full-name="Norway" data-full-name-local="Norvège" data-country-code="NO" data-variable="restricteditem.country">Norvège</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-NC" data-value="NC" data-full-name="New Caledonia" data-full-name-local="Nouvelle Calédonie" data-country-code="NC" data-variable="restricteditem.country">Nouvelle Calédonie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-NZ" data-value="NZ" data-full-name="New Zealand" data-full-name-local="Nouvelle-Zélande" data-country-code="NZ" data-variable="restricteditem.country">Nouvelle-Zélande</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-NP" data-value="NP" data-full-name="Nepal" data-full-name-local="Népal" data-country-code="NP" data-variable="restricteditem.country">Népal</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-OM" data-value="OM" data-full-name="Oman" data-full-name-local="Oman" data-country-code="OM" data-variable="restricteditem.country">Oman</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-UG" data-value="UG" data-full-name="Uganda" data-full-name-local="Ouganda" data-country-code="UG" data-variable="restricteditem.country">Ouganda</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-UZ" data-value="UZ" data-full-name="Uzbekistan" data-full-name-local="Ouzbékistan" data-country-code="UZ" data-variable="restricteditem.country">Ouzbékistan</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-PK" data-value="PK" data-full-name="Pakistan" data-full-name-local="Pakistan" data-country-code="PK" data-variable="restricteditem.country">Pakistan</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-PW" data-value="PW" data-full-name="Palau" data-full-name-local="Palaos" data-country-code="PW" data-variable="restricteditem.country">Palaos</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-PA" data-value="PA" data-full-name="Panama" data-full-name-local="Panama" data-country-code="PA" data-variable="restricteditem.country">Panama</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-PG" data-value="PG" data-full-name="Papua New Guinea" data-full-name-local="Papouasie-Nouvelle-Guinée" data-country-code="PG" data-variable="restricteditem.country">Papouasie-Nouvelle-Guinée</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-PY" data-value="PY" data-full-name="Paraguay" data-full-name-local="Paraguay" data-country-code="PY" data-variable="restricteditem.country">Paraguay</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-NL" data-value="NL" data-full-name="Netherlands" data-full-name-local="Pays-Bas" data-country-code="NL" data-variable="restricteditem.country">Pays-Bas</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-PH" data-value="PH" data-full-name="Philippines" data-full-name-local="Philippines" data-country-code="PH" data-variable="restricteditem.country">Philippines</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-PL" data-value="PL" data-full-name="Poland" data-full-name-local="Pologne" data-country-code="PL" data-variable="restricteditem.country">Pologne</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-PF" data-value="PF" data-full-name="French Polynesia" data-full-name-local="Polynésie française" data-country-code="PF" data-variable="restricteditem.country">Polynésie française</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-PT" data-value="PT" data-full-name="Portugal" data-full-name-local="Portugal" data-country-code="PT" data-variable="restricteditem.country">Portugal</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-PR" data-value="PR" data-full-name="Puerto Rico" data-full-name-local="Puerto Rico" data-country-code="PR" data-variable="restricteditem.country">Puerto Rico</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-PE" data-value="PE" data-full-name="Peru" data-full-name-local="Pérou" data-country-code="PE" data-variable="restricteditem.country">Pérou</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-QA" data-value="QA" data-full-name="Qatar" data-full-name-local="Qatar" data-country-code="QA" data-variable="restricteditem.country">Qatar</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-RO" data-value="RO" data-full-name="Romania" data-full-name-local="Roumanie" data-country-code="RO" data-variable="restricteditem.country">Roumanie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-GB" data-value="GB" data-full-name="United Kingdom" data-full-name-local="Royaume-Uni" data-country-code="GB" data-variable="restricteditem.country">Royaume-Uni</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-RU" data-value="RU" data-full-name="Russian Federation" data-full-name-local="Russie" data-country-code="RU" data-variable="restricteditem.country">Russie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-RW" data-value="RW" data-full-name="Rwanda" data-full-name-local="Rwanda" data-country-code="RW" data-variable="restricteditem.country">Rwanda</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-CF" data-value="CF" data-full-name="Central African Republic" data-full-name-local="République Centrafricaine" data-country-code="CF" data-variable="restricteditem.country">République Centrafricaine</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-DO" data-value="DO" data-full-name="Dominican Republic" data-full-name-local="République Dominicaine" data-country-code="DO" data-variable="restricteditem.country">République Dominicaine</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-CZ" data-value="CZ" data-full-name="Czech Republic" data-full-name-local="République tchèque" data-country-code="CZ" data-variable="restricteditem.country">République tchèque</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-RE" data-value="RE" data-full-name="Reunion" data-full-name-local="Réunion" data-country-code="RE" data-variable="restricteditem.country">Réunion</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-MF" data-value="MF" data-full-name="Saint Martin" data-full-name-local="Saint Martin" data-country-code="MF" data-variable="restricteditem.country">Saint Martin</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-BL" data-value="BL" data-full-name="Saint Barthelemy" data-full-name-local="Saint-Barthélemy" data-country-code="BL" data-variable="restricteditem.country">Saint-Barthélemy</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-KN" data-value="KN" data-full-name="Saint Kitts and Nevis" data-full-name-local="Saint-Christophe-et-Niévès" data-country-code="KN" data-variable="restricteditem.country">Saint-Christophe-et-Niévès</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-SM" data-value="SM" data-full-name="San Marino" data-full-name-local="Saint-Marin" data-country-code="SM" data-variable="restricteditem.country">Saint-Marin</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-SX" data-value="SX" data-full-name="Sint Maarten" data-full-name-local="Saint-Martin" data-country-code="SX" data-variable="restricteditem.country">Saint-Martin</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-PM" data-value="PM" data-full-name="Saint Pierre and Miquelon" data-full-name-local="Saint-Pierre-et-Miquelon" data-country-code="PM" data-variable="restricteditem.country">Saint-Pierre-et-Miquelon</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-VC" data-value="VC" data-full-name="Saint Vincent and Grenadines" data-full-name-local="Saint-Vincent-et-les-Grenadines" data-country-code="VC" data-variable="restricteditem.country">Saint-Vincent-et-les-Grenadines</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-SH" data-value="SH" data-full-name="Saint Helena" data-full-name-local="Sainte-Hélène" data-country-code="SH" data-variable="restricteditem.country">Sainte-Hélène</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-LC" data-value="LC" data-full-name="Saint Lucia" data-full-name-local="Sainte-Lucie" data-country-code="LC" data-variable="restricteditem.country">Sainte-Lucie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-WS" data-value="WS" data-full-name="Samoa" data-full-name-local="Samoa" data-country-code="WS" data-variable="restricteditem.country">Samoa</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-AS" data-value="AS" data-full-name="American Samoa" data-full-name-local="Samoa Américaines" data-country-code="AS" data-variable="restricteditem.country">Samoa Américaines</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-ST" data-value="ST" data-full-name="Sao Tome and Principe" data-full-name-local="Sao Tomé-et-Principe" data-country-code="ST" data-variable="restricteditem.country">Sao Tomé-et-Principe</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-RS" data-value="RS" data-full-name="Serbia" data-full-name-local="Serbie" data-country-code="RS" data-variable="restricteditem.country">Serbie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-SC" data-value="SC" data-full-name="Seychelles" data-full-name-local="Seychelles" data-country-code="SC" data-variable="restricteditem.country">Seychelles</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-SL" data-value="SL" data-full-name="Sierra Leone" data-full-name-local="Sierra Leone" data-country-code="SL" data-variable="restricteditem.country">Sierra Leone</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-SG" data-value="SG" data-full-name="Singapore" data-full-name-local="Singapour" data-country-code="SG" data-variable="restricteditem.country">Singapour</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-SK" data-value="SK" data-full-name="Slovakia" data-full-name-local="Slovaquie" data-country-code="SK" data-variable="restricteditem.country">Slovaquie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-SI" data-value="SI" data-full-name="Slovenia" data-full-name-local="Slovénie" data-country-code="SI" data-variable="restricteditem.country">Slovénie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-SO" data-value="SO" data-full-name="Somalia" data-full-name-local="Somalie" data-country-code="SO" data-variable="restricteditem.country">Somalie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-LK" data-value="LK" data-full-name="Sri Lanka" data-full-name-local="Sri Lanka" data-country-code="LK" data-variable="restricteditem.country">Sri Lanka</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-CH" data-value="CH" data-full-name="Switzerland" data-full-name-local="Suisse" data-country-code="CH" data-variable="restricteditem.country">Suisse</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-SR" data-value="SR" data-full-name="Suriname" data-full-name-local="Suriname" data-country-code="SR" data-variable="restricteditem.country">Suriname</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-SE" data-value="SE" data-full-name="Sweden" data-full-name-local="Suède" data-country-code="SE" data-variable="restricteditem.country">Suède</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-SZ" data-value="SZ" data-full-name="Swaziland" data-full-name-local="Swaziland" data-country-code="SZ" data-variable="restricteditem.country">Swaziland</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-SN" data-value="SN" data-full-name="Senegal" data-full-name-local="Sénégal" data-country-code="SN" data-variable="restricteditem.country">Sénégal</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-TJ" data-value="TJ" data-full-name="Tajikistan" data-full-name-local="Tadjikistan" data-country-code="TJ" data-variable="restricteditem.country">Tadjikistan</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-TZ" data-value="TZ" data-full-name="Tanzania" data-full-name-local="Tanzanie" data-country-code="TZ" data-variable="restricteditem.country">Tanzanie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-TW" data-value="TW" data-full-name="Taiwan" data-full-name-local="Taïwan" data-country-code="TW" data-variable="restricteditem.country">Taïwan</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-TD" data-value="TD" data-full-name="Chad" data-full-name-local="Tchad" data-country-code="TD" data-variable="restricteditem.country">Tchad</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-TH" data-value="TH" data-full-name="Thailand" data-full-name-local="Thaïlande" data-country-code="TH" data-variable="restricteditem.country">Thaïlande</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-TL" data-value="TL" data-full-name="Timor-Leste" data-full-name-local="Timor-Leste" data-country-code="TL" data-variable="restricteditem.country">Timor-Leste</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-TG" data-value="TG" data-full-name="Togo" data-full-name-local="Togo" data-country-code="TG" data-variable="restricteditem.country">Togo</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-TO" data-value="TO" data-full-name="Tonga" data-full-name-local="Tonga" data-country-code="TO" data-variable="restricteditem.country">Tonga</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-TT" data-value="TT" data-full-name="Trinidad and Tobago" data-full-name-local="Trinité-et-Tobago" data-country-code="TT" data-variable="restricteditem.country">Trinité-et-Tobago</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-TA" data-value="TA" data-full-name="Tristan da Cunha" data-full-name-local="Tristan da Cunha" data-country-code="TA" data-variable="restricteditem.country">Tristan da Cunha</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-TN" data-value="TN" data-full-name="Tunisia" data-full-name-local="Tunisie" data-country-code="TN" data-variable="restricteditem.country">Tunisie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-TM" data-value="TM" data-full-name="Turkmenistan" data-full-name-local="Turkménistan" data-country-code="TM" data-variable="restricteditem.country">Turkménistan</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-TR" data-value="TR" data-full-name="Turkey" data-full-name-local="Turquie" data-country-code="TR" data-variable="restricteditem.country">Turquie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-TV" data-value="TV" data-full-name="Tuvalu" data-full-name-local="Tuvalu" data-country-code="TV" data-variable="restricteditem.country">Tuvalu</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-UA" data-value="UA" data-full-name="Ukraine" data-full-name-local="Ukraine" data-country-code="UA" data-variable="restricteditem.country">Ukraine</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-UY" data-value="UY" data-full-name="Uruguay" data-full-name-local="Uruguay" data-country-code="UY" data-variable="restricteditem.country">Uruguay</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-VU" data-value="VU" data-full-name="Vanuatu" data-full-name-local="Vanuatu" data-country-code="VU" data-variable="restricteditem.country">Vanuatu</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-VE" data-value="VE" data-full-name="Venezuela" data-full-name-local="Venezuela" data-country-code="VE" data-variable="restricteditem.country">Venezuela</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-VN" data-value="VN" data-full-name="Vietnam" data-full-name-local="Viêt-Nam" data-country-code="VN" data-variable="restricteditem.country">Viêt-Nam</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-WF" data-value="WF" data-full-name="Wallis and Futuna" data-full-name-local="Wallis-et-Futuna" data-country-code="WF" data-variable="restricteditem.country">Wallis-et-Futuna</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-YE" data-value="YE" data-full-name="Yemen" data-full-name-local="Yémen" data-country-code="YE" data-variable="restricteditem.country">Yémen</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-ZM" data-value="ZM" data-full-name="Zambia" data-full-name-local="Zambie" data-country-code="ZM" data-variable="restricteditem.country">Zambie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-ZW" data-value="ZW" data-full-name="Zimbabwe" data-full-name-local="Zimbabwe" data-country-code="ZW" data-variable="restricteditem.country">Zimbabwe</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-EG" data-value="EG" data-full-name="Egypt" data-full-name-local="Égypte" data-country-code="EG" data-variable="restricteditem.country">Égypte</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-AE" data-value="AE" data-full-name="United Arab Emirates" data-full-name-local="Émirats arabes unis" data-country-code="AE" data-variable="restricteditem.country">Émirats arabes unis</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-EC" data-value="EC" data-full-name="Ecuador" data-full-name-local="Équateur" data-country-code="EC" data-variable="restricteditem.country">Équateur</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-ER" data-value="ER" data-full-name="Eritrea" data-full-name-local="Érythrée" data-country-code="ER" data-variable="restricteditem.country">Érythrée</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-US" data-value="US" data-full-name="United States of America" data-full-name-local="États-Unis" data-country-code="US" data-variable="restricteditem.country">États-Unis</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-ET" data-value="ET" data-full-name="Ethiopia" data-full-name-local="Éthiopie" data-country-code="ET" data-variable="restricteditem.country">Éthiopie</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-CX" data-value="CX" data-full-name="Christmas Island" data-full-name-local="Île Christmas" data-country-code="CX" data-variable="restricteditem.country">Île Christmas</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-IM" data-value="IM" data-full-name="Isle of Man" data-full-name-local="Île de Man" data-country-code="IM" data-variable="restricteditem.country">Île de Man</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-AC" data-value="AC" data-full-name="Ascension Island" data-full-name-local="Île de l'Ascension" data-country-code="AC" data-variable="restricteditem.country">Île de l'Ascension</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-KY" data-value="KY" data-full-name="Cayman Islands" data-full-name-local="Îles Caïmans" data-country-code="KY" data-variable="restricteditem.country">Îles Caïmans</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-CK" data-value="CK" data-full-name="Cook Islands" data-full-name-local="Îles Cook" data-country-code="CK" data-variable="restricteditem.country">Îles Cook</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-FK" data-value="FK" data-full-name="Falkland Islands" data-full-name-local="Îles Falkland " data-country-code="FK" data-variable="restricteditem.country">Îles Falkland </A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-FO" data-value="FO" data-full-name="Faroe Islands" data-full-name-local="Îles Féroé" data-country-code="FO" data-variable="restricteditem.country">Îles Féroé</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-MH" data-value="MH" data-full-name="Marshall Islands" data-full-name-local="Îles Marshall" data-country-code="MH" data-variable="restricteditem.country">Îles Marshall</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-PN" data-value="PN" data-full-name="Pitcairn Islands" data-full-name-local="Îles Pitcairn" data-country-code="PN" data-variable="restricteditem.country">Îles Pitcairn</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-SB" data-value="SB" data-full-name="Solomon Islands" data-full-name-local="Îles Salomon" data-country-code="SB" data-variable="restricteditem.country">Îles Salomon</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-TC" data-value="TC" data-full-name="Turks and Caicos Islands" data-full-name-local="Îles Turques-et-Caïques" data-country-code="TC" data-variable="restricteditem.country">Îles Turques-et-Caïques</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-VG" data-value="VG" data-full-name="British Virgin Islands" data-full-name-local="Îles Vierges britanniques" data-country-code="VG" data-variable="restricteditem.country">Îles Vierges britanniques</A>
                      </LI>
                      <LI>
                        <A CLASS="field-selector sc-country-option st-country-VI" data-value="VI" data-full-name="U.S. Virgin Islands" data-full-name-local="Îles Vierges des États-Unis" data-country-code="VI" data-variable="restricteditem.country">Îles Vierges des États-Unis</A>
                      </LI>
                    </UL>
                  </DIV>
                </FORM>
              </DIV>
              <DIV CLASS="not-mobile">
                <DIV CLASS="col-sm-2">&nbsp;</DIV>
              </DIV>
            </DIV>
            <div class="new-country-filter the-session-country bfh-selectbox bfh-countries" data-country="US" data-blank="false" data-flags="true" data-filter="true" data-available="AF,AL,DZ,AS,AD,AO,AI,AQ,AG,AR,AM,AW,AU,AT,AZ,BS,BH,BD,BB,BY,BE,BZ,BJ,BM,BT,BO,BA,BW,BR,VG,BN,BG,BF,BI,KH,CM,CA,CV,KY,TD,CL,CN,CO,CG,CD,CR,CI,HR,CU,CY,CZ,DK,DM,DO,EC,EG,SV,EE,ET,FK,FO,FJ,FI,FR,GF,PF,GA,GM,GE,DE,GH,GI,GR,GL,GD,GP,GU,GT,GG,GN,GY,HT,HN,HK,HU,IS,IN,ID,IR,IQ,IE,IM,IL,IT,JM,JP,JE,JO,KZ,KE,KI,KW,KG,LA,LV,LB,LS,LR,LI,LT,LU,MO,MK,MG,MW,MY,MV,ML,MT,MH,MQ,MU,MX,FM,MD,MC,MN,ME,MS,MA,MZ,NA,NP,NL,AN,NC,NZ,NI,NE,NG,KP,NO,OM,PK,PW,PS,PA,PG,PY,PE,PH,PL,PT,PR,QA,RE,RO,RU,KN,VC,WS,SM,ST,SA,SN,RS,SC,SG,SK,SI,SB,SO,ZA,KR,SS,ES,LK,SR,SZ,SE,CH,SY,TW,TJ,TZ,TH,TG,TO,TT,TN,TR,TM,TC,VI,UG,UA,AE,GB,UY,US,UZ,VU,VE,VN,YE,ZM,ZW"></div>
          </DIV>
        </DIV>
      </DIV>
      <DIV CLASS="container" ID="category-header">
        <H2 CLASS="section-title">
          <SPAN>Articles interdits et faisant l’objet de restrictions</SPAN>
        </H2>
        <DIV class="container mobile-only">
          <DIV CLASS="row mobile-bullets">
            <DIV CLASS="col-xs-1">
              <i CLASS="fa fa-circle"></i>
            </DIV>
            <DIV CLASS="col-xs-11 text-left">Les lois diffèrent d’un pays à l’autre</DIV>
            <DIV CLASS="col-xs-1">
              <i CLASS="fa fa-circle"></i>
            </DIV>
            <DIV CLASS="col-xs-11 text-left">La responsabilité de savoir ce qui est expédiable dans votre pays vous incombe</DIV>
            <DIV CLASS="col-xs-1">
              <i CLASS="fa fa-circle"></i>
            </DIV>
            <DIV CLASS="col-xs-11 text-left">Appuyez sur les icônes pour afficher des exemples</DIV>
            <DIV CLASS="col-xs-1">
              <i CLASS="fa fa-circle"></i>
            </DIV>
            <DIV CLASS="col-xs-11 text-left">Les articles interdits ne peuvent pas être expédiés</DIV>
            <DIV CLASS="col-xs-1">
              <i CLASS="fa fa-circle"></i>
            </DIV>
            <DIV CLASS="col-xs-11 text-left">Les articles soumis à des restrictions sont expédiables selon certaines limites</DIV>
            <DIV CLASS="col-xs-1">
              <i CLASS="fa fa-circle"></i>
            </DIV>
            <DIV CLASS="col-xs-11 text-left">Adressez vos question à <A HREF="mailto:Support@shipto.com">Support@shipito.com</A>
            </DIV>
          </DIV>
        </DIV>
        <DIV ID="aware-content-down" CLASS="aware-content not-mobile"> Veuillez prendre note de ce qui suit <I CLASS="fa fa-angle-down"></I>
        </DIV>
        <DIV ID="aware-content-up" CLASS="aware-content not-mobile"> Veuillez prendre note de ce qui suit <I CLASS="fa fa-angle-up"></I>
        </DIV>
        <DIV ID="laws-content" CLASS="laws not-mobile">
          <DIV CLASS="row">
            <DIV CLASS="col-xs-12">
              <P>Les lois diffèrent d’un pays à l’autre. La liste ci-dessous contient des articles qui ne peuvent pas être expédiés ou bien alors selon des méthodes et/ou une quantité limitées. Sachez que cette liste n’est pas exhaustive et que ces restrictions changent constamment. Nous faisons de notre mieux pour mettre cette page à jour lorsque nos prestataires nous informent de changements, mais il est de votre responsabilité de vérifier que les articles que vous achetez sont conformes aux restrictions gouvernementales ainsi que celles imposées par les transporteurs.</P>
              <P>Pour votre commodité, nous fournissons des exemples dans chaque catégorie d’articles. Cliquez ou appuyez simplement sur les icônes. N’oubliez pas que les articles interdits ne peuvent pas être expédiés. Les options des articles soumis à des restrictions sont limitées quant à la quantité ou à la nature du produit. Ces articles peuvent nécessiter des formulaires spéciaux ou des frais supplémentaires. Avant de procéder à l’achat, veuillez adresser vos questions concernant un article à <A HREF="mailto:Support@shipto.com">Support@shipito.com</A>. </P>
            </DIV>
          </DIV>
        </DIV>
      </DIV>
      <DIV class="container" ID="category-grid"></DIV>
      <DIV CLASS="container">
        <H2 CLASS="section-title">
          <SPAN>Envoi d’alcool</SPAN>
        </H2>
        <DIV CLASS="wine-explain" STYLE="margin-bottom:20px;"> Lynia Delivery Express peut expédier de l'alcool depuis nos entrepôts d'Autriche ou du Japon vers certains pays du monde. Veuillez consulter les listes ci-dessus et ci-dessous pour confirmer si l'alcool peut être expédié vers votre pays. </DIV>
        <DIV CLASS="row">
          <DIV CLASS="col-sm-12 whs-header"> Entrepôts de Lynia Delivery Express </DIV>
        </DIV>
        <DIV CLASS="hide-sm">
          <DIV CLASS="row">
            <DIV CLASS="col-sm-3 col-xs-3 whs-header">Californie, États-Unis</DIV>
            <DIV CLASS="col-sm-3 col-xs-3 whs-header">Oregon, États-Unis</DIV>
            <DIV CLASS="col-sm-3 col-xs-3 whs-header">Rastenfeld, Autriche</DIV>
            <DIV CLASS="col-sm-3 col-xs-3 whs-header">Chiba, Japon</DIV>
          </DIV>
          <DIV CLASS="row">
            <DIV CLASS="col-sm-3 col-xs-3 whs-header">
              <IMG CLASS="checkx" SRC="shipito/fr/imgs/prohibited/X.svg" />
            </DIV>
            <DIV CLASS="col-sm-3 col-xs-3 whs-header">
              <IMG CLASS="checkx" SRC="shipito/fr/imgs/prohibited/X.svg" />
            </DIV>
            <DIV CLASS="col-sm-3 col-xs-3 whs-header">
              <IMG CLASS="checkx" SRC="shipito/fr/imgs/prohibited/Checkmark.svg" />
            </DIV>
            <DIV CLASS="col-sm-3 col-xs-3 whs-header">
              <IMG CLASS="checkx" SRC="shipito/fr/imgs/prohibited/Checkmark.svg" />
            </DIV>
          </DIV>
          <DIV CLASS="us-au-maps">
            <DIV CLASS="row">
              <DIV CLASS="col-xs-6 map-left">
                <IMG CLASS="img-responsive" SRC="shipito/fr/imgs/prohibited/AlcoholProhibitionUSA_Rev%20(1).svg" />
              </DIV>
              <DIV CLASS="col-xs-3 text-center">
                <IMG CLASS="image-responsive au-map" SRC="shipito/fr/imgs/prohibited/AlcoholProhibitionAustria_Rev.svg" />
              </DIV>
              <DIV CLASS="col-xs-3 text-center">
                <IMG CLASS="image-responsive au-map" SRC="shipito/fr/imgs/prohibited/AlcoholProhibitionJapan.svg" />
              </DIV>
            </DIV>
          </DIV>
        </DIV>
        <DIV CLASS="hide-lg">
          <DIV CLASS="row">
            <DIV CLASS="col-xs-6 whs-header">Californie, États-Unis</DIV>
            <DIV CLASS="col-xs-6 whs-header">Oregon, États-Unis</DIV>
          </DIV>
          <DIV CLASS="row">
            <DIV CLASS="col-xs-6 whs-header">
              <IMG CLASS="checkx" SRC="shipito/fr/imgs/prohibited/X.svg" />
            </DIV>
            <DIV CLASS="col-xs-6 whs-header">
              <IMG CLASS="checkx" SRC="shipito/fr/imgs/prohibited/X.svg" />
            </DIV>
          </DIV>
          <DIV CLASS="row">
            <DIV CLASS="col-xs-12">
              <IMG CLASS="img-responsive" SRC="shipito/fr/imgs/prohibited/AlcoholProhibitionUSA_Rev%20(1).svg" />
            </DIV>
          </DIV>
          <DIV CLASS="row">
            <DIV CLASS="col-xs-6 whs-header2 text-center">Rastenfeld, Autriche</DIV>
            <DIV CLASS="col-xs-6 whs-header2 text-center">Chiba, Japon</DIV>
          </DIV>
          <DIV CLASS="row">
            <DIV CLASS="col-xs-6 whs-header">
              <IMG CLASS="checkx" SRC="shipito/fr/imgs/prohibited/Checkmark.svg" />
            </DIV>
            <DIV CLASS="col-xs-6 whs-header">
              <IMG CLASS="checkx" SRC="shipito/fr/imgs/prohibited/Checkmark.svg" />
            </DIV>
          </DIV>
          <DIV CLASS="row">
            <DIV CLASS="col-xs-6">
              <IMG CLASS="img-responsive" SRC="shipito/fr/imgs/prohibited/AlcoholProhibitionAustria_Rev.svg" />
            </DIV>
            <DIV CLASS="col-xs-6">
              <IMG CLASS="img-responsive" SRC="shipito/fr/imgs/prohibited/AlcoholProhibitionJapan.svg" />
            </DIV>
          </DIV>
        </DIV>
        <HR CLASS="vbar" />
        <DIV CLASS="wine-header"> Pays interdisant l’alcool </DIV>
        <DIV ID="country-list-comment">
          <P> Vous trouverez ci-dessous la liste des pays qui interdisent l'alcool en provenance des États-Unis. Les entrepôts d'Autriche et du Japon peuvent ou non être en mesure d'expédier vers certains de ces pays. </P>
        </DIV>
        <DIV STYLE="width:85%; margin-left:auto; margin-right:auto;" CLASS="not-mobile">
          <DIV CLASS="row">
            <DIV CLASS="country col-sm-3" ID="ccol_1_1">&nbsp;</DIV>
            <DIV CLASS="country col-sm-3" ID="ccol_2_1">&nbsp;</DIV>
            <DIV CLASS="country col-sm-3" ID="ccol_3_1">&nbsp;</DIV>
            <DIV CLASS="country col-sm-3" ID="ccol_4_1">&nbsp;</DIV>
          </DIV>
          <DIV CLASS="row">
            <DIV CLASS="country col-sm-3" ID="ccol_1_2">&nbsp;</DIV>
            <DIV CLASS="country col-sm-3" ID="ccol_2_2">&nbsp;</DIV>
            <DIV CLASS="country col-sm-3" ID="ccol_3_2">&nbsp;</DIV>
            <DIV CLASS="country col-sm-3" ID="ccol_4_2">&nbsp;</DIV>
          </DIV>
          <DIV CLASS="row">
            <DIV CLASS="country col-sm-3" ID="ccol_1_3">&nbsp;</DIV>
            <DIV CLASS="country col-sm-3" ID="ccol_2_3">&nbsp;</DIV>
            <DIV CLASS="country col-sm-3" ID="ccol_3_3">&nbsp;</DIV>
            <DIV CLASS="country col-sm-3" ID="ccol_4_3">&nbsp;</DIV>
          </DIV>
          <DIV CLASS="row">
            <DIV CLASS="country col-sm-3" ID="ccol_1_4">&nbsp;</DIV>
            <DIV CLASS="country col-sm-3" ID="ccol_2_4">&nbsp;</DIV>
            <DIV CLASS="country col-sm-3" ID="ccol_3_4">&nbsp;</DIV>
            <DIV CLASS="country col-sm-3" ID="ccol_4_4">&nbsp;</DIV>
          </DIV>
          <DIV CLASS="row">
            <DIV CLASS="country col-sm-3" ID="ccol_1_5">&nbsp;</DIV>
            <DIV CLASS="country col-sm-3" ID="ccol_2_5">&nbsp;</DIV>
            <DIV CLASS="country col-sm-3" ID="ccol_3_5">&nbsp;</DIV>
            <DIV CLASS="country col-sm-3" ID="ccol_4_5">&nbsp;</DIV>
          </DIV>
          <DIV CLASS="row">
            <DIV CLASS="country col-sm-3" ID="ccol_1_6">&nbsp;</DIV>
            <DIV CLASS="country col-sm-3" ID="ccol_2_6">&nbsp;</DIV>
            <DIV CLASS="country col-sm-3" ID="ccol_3_6">&nbsp;</DIV>
            <DIV CLASS="country col-sm-3" ID="ccol_4_6">&nbsp;</DIV>
          </DIV>
          <DIV CLASS="row">
            <DIV CLASS="country col-sm-3" ID="ccol_1_7">&nbsp;</DIV>
            <DIV CLASS="country col-sm-3" ID="ccol_2_7">&nbsp;</DIV>
            <DIV CLASS="country col-sm-3" ID="ccol_3_7">&nbsp;</DIV>
            <DIV CLASS="country col-sm-3" ID="ccol_4_7">&nbsp;</DIV>
          </DIV>
          <DIV CLASS="row">
            <DIV CLASS="country col-sm-3" ID="ccol_1_8">&nbsp;</DIV>
            <DIV CLASS="country col-sm-3" ID="ccol_2_8">&nbsp;</DIV>
            <DIV CLASS="country col-sm-3" ID="ccol_3_8">&nbsp;</DIV>
            <DIV CLASS="country col-sm-3" ID="ccol_4_8">&nbsp;</DIV>
          </DIV>
          <DIV CLASS="row">
            <DIV CLASS="country col-sm-3" ID="ccol_1_9">&nbsp;</DIV>
            <DIV CLASS="country col-sm-3" ID="ccol_2_9">&nbsp;</DIV>
            <DIV CLASS="country col-sm-3" ID="ccol_3_9">&nbsp;</DIV>
            <DIV CLASS="country col-sm-3" ID="ccol_4_9">&nbsp;</DIV>
          </DIV>
          <DIV CLASS="row">
            <DIV CLASS="country col-sm-3" ID="ccol_1_10">&nbsp;</DIV>
            <DIV CLASS="country col-sm-3" ID="ccol_2_10">&nbsp;</DIV>
            <DIV CLASS="country col-sm-3" ID="ccol_3_10">&nbsp;</DIV>
            <DIV CLASS="country col-sm-3" ID="ccol_4_10">&nbsp;</DIV>
          </DIV>
        </DIV>
        <DIV CLASS="country-map"></DIV>
        <DIV STYLE="margin-left:auto; margin-right:auto;margin-bottom:100px;" CLASS="mobile-only">
          <DIV CLASS="row">
            <DIV CLASS="country col-xs-4" ID="mccol_1_">&nbsp;</DIV>
            <DIV CLASS="country col-xs-4" ID="mccol_2_">&nbsp;</DIV>
            <DIV CLASS="country col-xs-4" ID="mccol_3_">&nbsp;</DIV>
          </DIV>
          <DIV CLASS="row">
            <DIV CLASS="country col-xs-4" ID="mccol_1_1">&nbsp;</DIV>
            <DIV CLASS="country col-xs-4" ID="mccol_2_1">&nbsp;</DIV>
            <DIV CLASS="country col-xs-4" ID="mccol_3_1">&nbsp;</DIV>
          </DIV>
          <DIV CLASS="row">
            <DIV CLASS="country col-xs-4" ID="mccol_1_2">&nbsp;</DIV>
            <DIV CLASS="country col-xs-4" ID="mccol_2_2">&nbsp;</DIV>
            <DIV CLASS="country col-xs-4" ID="mccol_3_2">&nbsp;</DIV>
          </DIV>
          <DIV CLASS="row">
            <DIV CLASS="country col-xs-4" ID="mccol_1_3">&nbsp;</DIV>
            <DIV CLASS="country col-xs-4" ID="mccol_2_3">&nbsp;</DIV>
            <DIV CLASS="country col-xs-4" ID="mccol_3_3">&nbsp;</DIV>
          </DIV>
          <DIV CLASS="row">
            <DIV CLASS="country col-xs-4" ID="mccol_1_4">&nbsp;</DIV>
            <DIV CLASS="country col-xs-4" ID="mccol_2_4">&nbsp;</DIV>
            <DIV CLASS="country col-xs-4" ID="mccol_3_4">&nbsp;</DIV>
          </DIV>
          <DIV CLASS="row">
            <DIV CLASS="country col-xs-4" ID="mccol_1_5">&nbsp;</DIV>
            <DIV CLASS="country col-xs-4" ID="mccol_2_5">&nbsp;</DIV>
            <DIV CLASS="country col-xs-4" ID="mccol_3_5">&nbsp;</DIV>
          </DIV>
          <DIV CLASS="row">
            <DIV CLASS="country col-xs-4" ID="mccol_1_6">&nbsp;</DIV>
            <DIV CLASS="country col-xs-4" ID="mccol_2_6">&nbsp;</DIV>
            <DIV CLASS="country col-xs-4" ID="mccol_3_6">&nbsp;</DIV>
          </DIV>
          <DIV CLASS="row">
            <DIV CLASS="country col-xs-4" ID="mccol_1_7">&nbsp;</DIV>
            <DIV CLASS="country col-xs-4" ID="mccol_2_7">&nbsp;</DIV>
            <DIV CLASS="country col-xs-4" ID="mccol_3_7">&nbsp;</DIV>
          </DIV>
          <DIV CLASS="row">
            <DIV CLASS="country col-xs-4" ID="mccol_1_8">&nbsp;</DIV>
            <DIV CLASS="country col-xs-4" ID="mccol_2_8">&nbsp;</DIV>
            <DIV CLASS="country col-xs-4" ID="mccol_3_8">&nbsp;</DIV>
          </DIV>
          <DIV CLASS="row">
            <DIV CLASS="country col-xs-4" ID="mccol_1_9">&nbsp;</DIV>
            <DIV CLASS="country col-xs-4" ID="mccol_2_9">&nbsp;</DIV>
            <DIV CLASS="country col-xs-4" ID="mccol_3_9">&nbsp;</DIV>
          </DIV>
          <DIV CLASS="row">
            <DIV CLASS="country col-xs-4" ID="mccol_1_10">&nbsp;</DIV>
            <DIV CLASS="country col-xs-4" ID="mccol_2_10">&nbsp;</DIV>
            <DIV CLASS="country col-xs-4" ID="mccol_3_10">&nbsp;</DIV>
          </DIV>
          <DIV CLASS="row">
            <DIV CLASS="country col-xs-4" ID="mccol_1_11">&nbsp;</DIV>
            <DIV CLASS="country col-xs-4" ID="mccol_2_11">&nbsp;</DIV>
            <DIV CLASS="country col-xs-4" ID="mccol_3_11">&nbsp;</DIV>
          </DIV>
          <DIV CLASS="row">
            <DIV CLASS="country col-xs-4" ID="mccol_1_12">&nbsp;</DIV>
            <DIV CLASS="country col-xs-4" ID="mccol_2_12">&nbsp;</DIV>
            <DIV CLASS="country col-xs-4" ID="mccol_3_12">&nbsp;</DIV>
          </DIV>
        </DIV>
      </DIV>
      <SCRIPT SRC="shipito/scripts/main.js"></SCRIPT>
      <SCRIPT>
        var countries = ['Afghanistan', 'Gambie', 'Qatar', 'Algérie', 'Groenland', 'Russie', 'Samoa Américaines', 'Guam', 'Arabie Saoudite', 'Arménie', 'Irak', 'Sénégal', 'Bahreïn', 'Koweït', 'Somalie', 'Bangladesh', 'Libéria', 'Turquie', 'Biélorussie', 'Libye', 'Ukraine', 'Brunei', 'Îles Marshall', 'Viêt-Nam', 'Burkina Faso', 'Mauritanie', 'Yémen', 'Cap-Vert', 'Népal', 'Comores', 'Nigeria', 'Curacao', 'Oman', 'Djibouti', 'Pakistan'];
        loadCountries();
        var tileson = false;
        var lastpopid = "";
        var startf = document.forms['selectcountryform'];
        var startvalue = startf.elements['restricteditem.country'].value;
        loadTiles(startvalue, false);
        $('.field-selector').click(function(evt) {
              evt.preventDefault();
              var fieldname = $(this).attr('data-variable');
              var value = $(this).attr('data-value');
              var caption = $(this).html();
              $(this).closest('UL').siblings('BUTTON').html(caption + '  < SPAN CLASS = "ga-caret" > < /SPAN>');
                var classname = $(this).attr('class');
                if (classname.indexOf('sc-country-option') != -1) {
                  var newclassname = 'btn dropdown-toggle sc-country-btn st-country-' + value;
                  $(this).closest('UL').siblings('BUTTON').attr('class', newclassname);
                  var f = document.forms['selectcountryform'];
                  f.elements['restricteditem.country'].value = value;
                }
                for (var i = 0; i < document.forms.length; i++) {
                  var f = document.forms[i];
                  var el = f.elements[fieldname];
                  if (el) {
                    el.value = value;
                    loadTiles(value, true);
                    tileson = true;
                  }
                }
              }); $('#sc-country-lookup').click(function(evt) {
              evt.stopPropagation();
            }); $('#sc-country-lookup').keyup(function(evt) {
              evt.stopPropagation();
              var lookup = $(evt.target).val();
              lookup = lookup.toUpperCase();
              var numfound = 0;
              var singleel = null;
              $('.sc-country-option').each(function() {
                var fullname = $(this).attr('data-full-name').toUpperCase();
                var fullnamelocal = $(this).attr('data-full-name-local').toUpperCase();
                var abb = $(this).attr('data-country-code').toUpperCase();
                if ((fullname.indexOf(lookup) == 0) || (fullnamelocal.indexOf(lookup) == 0) || ((lookup.length == 2) && (lookup == abb))) {
                  $(this).show();
                  numfound++;
                  singleel = $(this);
                } else $(this).hide();
              });
            }); $('#instruction').slideDown(700); $('#aware-content-down').click(function() {
              $(this).hide();
              $('#aware-content-up').show();
              $("#laws-content").slideDown();
            }); $('#aware-content-up').click(function() {
              $(this).hide();
              $('#aware-content-down').show();
              $("#laws-content").slideUp();
            });

            function loadCountries() {
              countries.sort();
              var colcnt = 1;
              var mcolcnt = 1;
              var ccnt = 1;
              var mccnt = 1;
              for (i = 0; i < countries.length; i++) {
                var countrydivid = "ccol_" + colcnt + "_" + ccnt;
                var mcountrydivid = "mccol_" + mcolcnt + "_" + mccnt;
                $('#' + countrydivid).html(countries[i]);
                $('#' + mcountrydivid).html(countries[i]);
                ccnt++;
                mccnt++;
                if (ccnt > 10) {
                  ccnt = 1;
                  colcnt++;
                }
                if (mccnt > 12) {
                  mccnt = 1;
                  mcolcnt++;
                }
              }
            }

            function loadTiles(country, hideaware) {
              // Kill the hover
              $('.category-link').unbind("mouseenter mouseleave");
              if (tileson) {
                $('#category-grid').fadeOut('slow');
              }
              if (hideaware) $('#aware-content-up').hide();
              /*
		   else
		   {
				$('#inner-top-banner').slideUp();
				$('#outer-top-banner').css({'height':'60px', 'background' : '#696C85'});
		   }
		   */
              var url = 'prohibited-items/country-specific?filter.country=' + country;
              $('#category-grid').load(url);
              if ($(document).width() > 767) {
                if (hideaware) {
                  $('#laws-content').fadeOut('slow', function() {
                    $('#category-grid').fadeIn('show');
                  });
                  $('#aware-content-down').show();
                } else $('#category-grid').fadeIn('show');
              } else {
                $('#category-grid').fadeIn('slow');
              }
              if (tileson) {
                if ($(window).width() <= 767) $(document).scrollTop($("#instruction").offset().top + 300);
                else $(document).scrollTop($("#instruction").offset().top - 150);
              }
              tileson = true;
            }
      </SCRIPT>
    </DIV>
    <FOOTER CLASS="top-footer">
      <DIV CLASS="container">
        <DIV CLASS="row">
          <DIV CLASS="col-md-3 col-xs-6 text-center advantage">
            <SPAN CLASS="advantage-image">
              <IMG SRC="shipito/fr/imgs/navigation/CompetitivePricing.svg">
            </SPAN>
            <SPAN CLASS="advantage-service">La tarification compétitive de Lynia Delivery Express</SPAN>
            <SPAN CLASS="advantage-description">Nos prix hautement compétitifs vous permettent d’économiser sur les frais d’expédition.</SPAN>
          </DIV>
          <DIV CLASS="col-md-3 col-xs-6 text-center advantage">
            <SPAN CLASS="advantage-image">
              <IMG SRC="shipito/fr/imgs/navigation/InternationalDelivery.svg">
            </SPAN>
            <SPAN CLASS="advantage-service">Livraison internationale</SPAN>
            <SPAN CLASS="advantage-description">Nos offres sont parmi les meilleures pour les envois internationaux</SPAN>
          </DIV>
          <DIV CLASS="col-md-3 col-xs-6 text-center advantage">
            <SPAN CLASS="advantage-image">
              <IMG SRC="shipito/fr/imgs/navigation/SecurePayment.svg">
            </SPAN>
            <SPAN CLASS="advantage-service">Modes de paiement sécurisés</SPAN>
            <SPAN CLASS="advantage-description">Effectuer vos paiements en toute sérénité grâce à nos systèmes Safe Pay</SPAN>
          </DIV>
          <DIV CLASS="col-md-3 col-xs-6 text-center advantage">
            <SPAN CLASS="advantage-image">
              <IMG SRC="shipito/fr/imgs/navigation/ShopSafely.svg">
            </SPAN>
            <SPAN CLASS="advantage-service">Achetez en toute sécurité</SPAN>
            <SPAN CLASS="advantage-description">Avec nous, votre compte est constamment protégé</SPAN>
          </DIV>
        </DIV>
      </DIV>
    </FOOTER>
    <FOOTER CLASS="bottom-footer">
      <DIV CLASS="container">
        <DIV CLASS="row hide-sm">
          <DIV CLASS="col-md-3 col-xs-6">
            <LABEL>Nos services</LABEL>
            <A href="#">Lynia Delivery Express Pour Mois</A>
            <A href="#">Lynia Delivery Express Pour les Entreprises</A>
          </DIV>
          <DIV CLASS="col-md-3 col-xs-6">
            <LABEL>Débuter</LABEL>
            <A href="#">Comment ça Marche</A>
            <A href="#">Tarifs et Options</A>
            <A href="#">FAQs</A>
            <A href="#">Modes de livraison</A>
            <A href="#">Que puis-je expédier ?</A>
          </DIV>
          <DIV CLASS="col-md-3 col-xs-6">
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
          <DIV CLASS="col-md-3 col-xs-6">
            <LABEL>Prenez Contact Avec Nous</LABEL>
            <DIV CLASS="contact">
              <A href="#">
                <I CLASS="icon-contact-us"></I> Prenez Contact Avec Nous </A>
            </DIV>
            <DIV CLASS="contact">
              <A HREF="mailto:support@shipito.com">
                <IMG SRC="shipito/fr/imgs/navigation/email.svg" HEIGHT="20" WIDTH="20" CLASS="hide-sm">
                <IMG SRC="shipito/fr/imgs/navigation/email_m.svg" HEIGHT="20" WIDTH="20" CLASS="hide-lg"> support@shipito.com </A>
            </DIV>
            <DIV CLASS="contact">
              <I CLASS="icon-live-chat"></I> Chat en direct (Heure du Pacifique): <BR>En semaine: 6h à 18h <BR>Samedi: 6h à 15h <BR>Dimanche: Fermé
            </DIV>
          </DIV>
        </DIV>
        <DIV CLASS="row">
          <DIV CLASS="col-xs-12 col-sm-6 pull-right sm-icons sm-icons-fr text-right">
            <LABEL>&nbsp;</LABEL>
            <A href="#" TARGET="_blank">
              <I CLASS="icon-facebook"></I>
            </A>
            <A href="#" TARGET="_blank">
              <I CLASS="icon-twitter"></I>
            </A>
            <A href="#" TARGET="_blank">
              <I CLASS="icon-youtube"></I>
            </A>
            <A href="#" TARGET="_blank">
              <I CLASS="icon-instagram"></I>
            </A>
          </DIV>
        </DIV>
        <DIV CLASS="row">
          <DIV CLASS="col-xs-12 text-center privacy">
            <A href="#">Conditions Générales</A>
            <BR> Copyright &copy; 2024 Lynia Delivery Express. All rights reserved.
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
          $('#banner-container').load('/fr/banner-ads?pg=/help/tutorials/prohibited-items');
        }
      });
    </SCRIPT>
  </BODY>
  <!-- Mirrored from www.shipito.com/fr/help/tutorials/prohibited-items by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 13:45:01 GMT -->
</HTML>
<!--- Copyright 2024 GlobalAccess All Rights Reserved -->
<!--- Web Server 3088 -->
