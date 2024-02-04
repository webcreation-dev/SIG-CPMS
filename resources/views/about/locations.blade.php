<!DOCTYPE HTML>
<HTML dir="ltr" lang="fr">
  <!-- Mirrored from www.shipito.com/fr/help/locations by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 13:45:10 GMT -->
  <!-- Added by HTTrack -->
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <!-- /Added by HTTrack -->
  @include('layouts.head-guest')

  <BODY CLASS="light">
    <DIV ID="menu-filler"></DIV>
    <A NAME="page-top" ID="page-top"></A>
    @include('layouts.header-guest')

    <DIV CLASS="main-body">
      <STYLE>
        .top-banner-inner {
          background-image: url(shipito/en/imgs/locations/LocationsTopBanner.png);
          background-size: cover;
          background-position: center top;
        }

        #whs-title {
          font-weight: lighter;
          font-size: 30px;
          margin-bottom: 40px;
          font-weight: 300;
        }

        .top-container H1 {
          font-size: 40px;
          line-height: 45px;
          font-weight: normal;
        }

        .top-container H1.light {
          font-weight: lighter;
        }

        div.top-banner {
          height: 492px;
          max-height: 492px;
        }

        .top-banner .container H1 {
          color: #FFF;
          margin: 70px 0px 0px 70px;
          text-align: left;
          font-size: 40px;
          font-weight: normal;
          line-height: 40px;
        }

        .top-banner .container H2 {
          color: #FFF;
          margin: 34px 0px 0px 70px;
          padding: 0;
          text-align: left;
          font-size: 20px;
          font-weight: normal;
          line-height: 20px;
        }

        .map-tile:hover {
          cursor: pointer;
        }

        .map-div {
          width: 212px;
          margin-left: auto;
          margin-right: auto;
          margin-bottom: 42px;
        }

        div.whs-overview {
          color: #20284D;
          font-size: 18pt;
          text-align: center;
          margin-bottom: 50px;
          margin-top: 50px;
        }

        .map-image {
          width: 150px;
          height: 150px;
          margin-left: auto;
          margin-right: auto;
          vertical-align: top;
          margin-top: -10px;
        }

        .storage-div {
          width: 150px;
          margin-left: auto;
          margin-right: auto;
          margin-bottom: 42px;
          font-size: 12px;
          padding: 0;
          text-align: left;
        }

        .tax-image {
          width: 120px;
          height: 120px;
          margin-left: auto;
          margin-right: auto;
          margin-bottom: 80px;
        }

        .storage-image {
          margin-bottom: 80px;
          margin-left: auto;
          margin-right: auto;
        }

        .tax-image {
          margin-bottom: 42px;
        }

        .map-title {
          font-size: 21px;
          font-weight: normal;
        }

        div.title1 {
          margin-bottom: 30px;
        }

        div.title2 {
          margin-bottom: 42px;
        }

        .map-caption,
        .tax-caption {
          max-width: 300px;
          margin-left: auto;
          margin-right: auto;
          line-height: 25px;
        }

        .tax-caption {
          max-width: 225px;
        }

        #or-block,
        #au-block,
        #jp-block {
          display: none;
        }

        div.warehouse-caption {
          text-align: center;
          font-size: 20px;
          margin-bottom: 80px;
        }

        div.section-caption,
        div.shipmethod-caption {
          text-align: center;
          font-size: 16px;
          margin-bottom: 40px;
          width: 90%;
          margin-left: auto;
          margin-right: auto;
        }

        div.shipmethod-caption {
          margin-bottom: 42px;
        }

        .whs-col {
          padding: 0;
          margin: 0;
        }

        .mobile-image,
        .mobile-only {
          display: none;
        }

        .whs-block {
          margin-bottom: 80px;
        }

        .shipper-div {
          vertical-align: top;
          margin-bottom: 30px;
        }

        .shipper-div-bottom {
          vertical-align: top;
          margin-bottom: 0px;
        }

        .shipper-image {
          width: 128px;
          margin-left: auto;
          margin-right: auto;
        }

        .shipper-name {
          text-align: center;
          font-weight: 300;
          font-size: 16px;
          line-height: 26px;
        }

        .shipmethod-row {
          border-top: 1px solid #D7D7D7;
          border-bottom: 1px solid #D7D7D7;
          width: 90%;
          margin-left: auto;
          margin-right: auto;
        }

        .shipper-row {
          width: 90%;
          margin-left: auto;
          margin-right: auto;
        }

        .storage-text1 {
          position: absolute;
          top: 5%;
          left: 50%;
          transform: translate(-50%, 0);
          -webkit-transform: translate(-50%, 0);
          text-align: left;
          font-weight: 300;
          width: 75%;
          padding: 0px 3px 0px 8px;
        }

        .storage-text2 {
          position: absolute;
          left: 50%;
          transform: translate(-50%, 0);
          -webkit-transform: translate(-50%, 0);
          text-align: left;
          font-weight: 300;
          vertical-align: top;
          width: 75%;
          padding: 0px 3px 0px 8px;
        }

        .storage-text2.not-mobile {
          top: 48%;
        }

        .storage-text2.mobile-only {
          top: 52%;
        }

        @media (min-width:280px) {

          .storage-text1,
          .storage-text2 {
            padding-left: 20px;
            padding-right: 0px;
            width: 100%;
          }

          .side-caption {
            padding-left: 30px;
          }

          .speed-caption {
            padding-bottom: 10px;
          }
        }

        @media (min-width:360px) {

          .storage-text1,
          .storage-text2 {
            padding-left: 3px;
            padding-right: 0px;
            width: 75%;
          }

          .side-caption {
            padding-left: 0px;
            margin-bottom: 10px;
          }
        }

        @media (min-width:412px) {

          .storage-text1,
          .storage-text2 {
            width: 70%;
          }
        }

        @media (min-width:540px) {

          .storage-text1,
          .storage-text2 {
            width: 50%;
          }
        }

        @media (min-width:768px) {

          .storage-text1,
          .storage-text2 {
            padding-left: 6px;
            width: 40%;
          }
        }

        @media (min-width:1024px) {

          .storage-text1,
          .storage-text2 {
            padding-left: 13px;
            width: 90%;
          }

          .side-caption {
            padding-left: 13px;
          }
        }

        @media (min-width:1280px) {

          .storage-text1,
          .storage-text2 {
            padding-left: 13px;
            width: 80%;
          }

          .side-caption {
            padding-left: 0px;
          }
        }

        .days-div,
        .tax-div {
          width: 120px;
          margin-left: auto;
          margin-right: auto;
        }

        .big-days {
          position: absolute;
          font-size: 45px;
          top: 40%;
          left: 50%;
          transform: translate(-50%, 0);
          -webkit-transform: translate(-50%, 0);
          text-align: center;
          font-weight: 300;
        }

        .small-days {
          font-size: 18px;
          font-weight: 300;
          margin-top: 62px;
        }

        .small-pct {
          font-size: 18px;
          font-weight: 300;
          margin-top: -12px;
        }

        div.shipmethod-row {
          margin-bottom: 50px;
        }

        div.shipmethod-row .title1 {
          margin-top: 20px;
          margin-bottom: 20px;
        }

        div.shipmethod-row .title2 {
          margin-bottom: 25px
        }

        div.bigmap {
          vertical-align: middle;
          margin-bottom: 80px;
        }

        div.bigmap .border-right {
          border-right: 1px solid #D7D7D7;
        }

        div.location-box {
          height: 260px;
        }

        div.location-box-rt {
          height: 260px;
          border-right: 1px solid #D7D7D7;
        }

        .row.bigmap-row {
          display: -webkit-box;
          display: -webkit-flex;
          display: -ms-flexbox;
          display: flex;
          flex-wrap: wrap;
        }

        .row.bigmap-row>[class*='col-'] {
          display: flex;
          flex-direction: column;
        }

        div.bigmap .bigmap-image {
          margin-left: auto;
          margin-right: auto;
          vertical-align: center;
          height: 407px;
          padding: 0;
        }

        .speed-caption {
          height: 150px;
          max-height: 150px;
          width: 85%;
          margin-left: auto;
          margin-right: auto;
          padding-bottom: 20px;
          line-height: 25px;
        }

        .scroll {
          white-space: nowrap;
          /* [1] */
          overflow-x: auto;
          /* [2] */
          -webkit-overflow-scrolling: touch;
          /* [3] */
          -ms-overflow-style: -ms-autohiding-scrollbar;
          /* [4] */
        }

        .scroll::-webkit-scrollbar {
          display: none;
        }

        .save-today {
          position: absolute;
          color: #fff;
          font-size: 20px;
          top: 37%;
          left: 50%;
          transform: translate(-50%, 0);
          -webkit-transform: translate(-50%, 0);
          height: 150px;
          white-space: nowrap;
          font-weight: normal;
        }

        .small-usmap {
          margin-top: 20px;
          margin-bottom: 20px;
          width: 190px;
        }

        .save-container {
          height: 138px;
        }

        div.save-today .btn {
          border: 1px solid #fff;
          font-size: 16px;
          padding: 8px 30px;
        }

        div.save-today .btn:hover {
          color: #BE0026 !important;
          background-color: #fff;
        }

        div.save-today .btn:active {
          color: #fff !important;
          background-color: #05C8E8;
        }

        @media (min-width:1025px) {
          .slide-position {
            transform: translateY(-20px);
          }

          .logo-mobile {
            display: none;
          }
        }

        @media (max-width:767px) {
          .slide-position {
            transform: translateY(-25px);
          }

          .logo-desktop {
                display: none;
            }

          body {
            overflow-x: hidden;
          }

          div.location-box {
            height: 325px;
          }

          div.location-box-rt {
            height: 325px;
          }

          div.top-container {
            margin-bottom: 60px;
          }

          #whs-title {
            maegin-bottom: 40px;
          }

          .map-image {
            margin-bottom: 20px;
          }

          .map-caption {
            margin-bottom: 40px;
          }

          div.title1 {
            margin-bottom: 20px;
            font-size: 16px;
          }

          div.section-caption {
            margin-bottom: 40px;
          }

          .not-mobile {
            display: none;
          }

          .mobile-image,
          .mobile-only {
            display: block;
          }

          .whs-col IMG.mobile-image {
            margin-left: auto;
            margin-right: auto;
          }

          div.storage-div {
            margin-bottom: 20px;
          }

          .big-days {
            position: absolute;
            font-size: 35px;
            top: 19%;
            left: 50%;
            transform: translate(-50%, 0);
            -webkit-transform: translate(-50%, 0);
            text-align: center;
            font-weight: 300;
          }

          .small-days {
            font-size: 18px;
            font-weight: 300;
            margin-top: 65px;
          }

          .small-pct {
            font-size: 18px;
            font-weight: 300;
            margin-top: -10px;
          }

          .storage-div {
            margin-bottom: 20px;
          }

          .storage-image {
            margin-bottom: 20px;
            width: 120px;
          }

          .tax-image {
            margin-bottom: 20px;
            width: 120px;
          }

          .tax-caption {
            margin-bottom: 35px;
          }

          .shipmethod-caption {
            font-size: 16px;
          }

          .shipper-div {
            height: 90px;
          }

          .border-top-bottom {
            border-top: 1px solid #C1C1C1;
            border-bottom: 1px solid #C1C1C1;
            font-weight: 300;
            font-size: 18px;
            margin-left: 2px;
            margin-right: 2px;
            padding: 25px 0 25px 0;
            margin-bottom: 20px;
          }

          .days-div,
          .tax-div {
            width: 120px;
          }

          .warehouse-other {
            margin-bottom: 15px;
          }

          .mobile-whs-csl {
            margin-bottom: 0px;
          }

          .mobile-whs-select {
            padding-top: 12px;
            border: 1px solid #D7D7D7;
            text-align: center;
            height: 70px;
            line-height: 23px;
            font-size: 13px;
            margin-bottom: 12px;
            font-weight: 300;
          }

          .mobile-whs-select:hover {
            cursor: pointer;
          }

          #mobile-whs-select-ca {
            border: 1px solid #20284D;
            color: #20284D;
          }

          .whs-csl-image {
            width: 330px;
            height: 330px;
          }

          .side-caption {
            margin-bottom: 20px;
          }

          .save-today {
            font-size: 16px;
            top: 37%;
            left: 50%;
            transform: translate(-50%, 0);
            -webkit-transform: translate(-50%, 0);
            height: 25px;
            white-space: nowrap;
            font-weight: normal;
          }

          .small-usmap {
            width: 150px;
          }

          .save-container {
            height: 120px;
          }

          div.save-today .btn-primary {
            font-size: 14px;
          }

          div.free-storage-mobile {
            margin-top: 0px;
          }
        }
      </STYLE>
      <DIV CLASS="container-fluid top-banner-outer">
        <DIV ID="top-banner" CLASS="container-fluid top-banner-inner">
          <DIV CLASS="container">
            <H1>Nos entrepôts: les sites et leurs avantages </H1>
            <P>Quatre entrepôts distincts pour mieux vous aider à personnaliser votre expérience d'expédition</P>
          </DIV>
        </DIV>
      </DIV>
      <DIV CLASS="container text-center">
        <DIV ID="whs-title">Les entrepôts de Lynia</DIV>
        <DIV CLASS="row">
          <DIV CLASS="col-sm-3 col-xs-12">
            <DIV CLASS="row">
              <DIV CLASS="col-sm-12 col-xs-12">
                <DIV CLASS="text-center map-title title1"> Californie, É.-U. </DIV>
              </DIV>
            </DIV>
            <DIV CLASS="row">
              <DIV CLASS="col-sm-6 col-xs-6 align-top">
                <IMG ID="ca-map" CLASS="img-responsive map-image map-tile not-mobile" SRC="https://www.shipito.com/imgs/locations/CAMapHover.svg" />
                <IMG ID="ca-map" CLASS="img-responsive map-image mobile-only" SRC="https://www.shipito.com/imgs/locations/CAMap.svg" />
              </DIV>
              <DIV CLASS="col-sm-6 col-xs-6 text-left align-top side-caption"> Frais de port les plus bas et livraisons les plus rapides, jusqu‘à 90 jours de stockage avec l‘abonnement premium. </DIV>
            </DIV>
          </DIV>
          <DIV CLASS="col-sm-3 col-xs-12">
            <DIV CLASS="row">
              <DIV CLASS="col-sm-12 col-xs-12">
                <DIV CLASS="text-center map-title title1"> Oregon, É.-U. </DIV>
              </DIV>
            </DIV>
            <DIV CLASS="row">
              <DIV CLASS="col-sm-6 col-xs-6 align-top">
                <IMG ID="or-map" CLASS="img-responsive map-image map-tile not-mobile" SRC="https://www.shipito.com/imgs/locations/ORMap.svg" />
                <IMG ID="or-map" CLASS="img-responsive map-image mobile-only" SRC="https://www.shipito.com/imgs/locations/ORMap.svg" />
              </DIV>
              <DIV CLASS="col-sm-6 col-xs-6 text-left align-top side-caption"> Aucune taxe de vente, jusqu'à 90 jours de stockage pour les membres Premium, entrepôt idéal pour les entreprises. </DIV>
            </DIV>
          </DIV>
          <DIV CLASS="col-sm-3 col-xs-12">
            <DIV CLASS="row">
              <DIV CLASS="col-sm-12 col-xs-12">
                <DIV CLASS="text-center map-title title1"> Rastenfeld, Autriche </DIV>
              </DIV>
            </DIV>
            <DIV CLASS="row">
              <DIV CLASS="col-sm-6 col-xs-6 align-top">
                <IMG ID="au-map" CLASS="img-responsive map-image map-tile not-mobile" SRC="https://www.shipito.com/imgs/locations/AUMap.svg" />
                <IMG ID="au-map" CLASS="img-responsive map-image mobile-only" SRC="https://www.shipito.com/imgs/locations/AUMap.svg" />
              </DIV>
              <DIV CLASS="col-sm-6 col-xs-6 text-left align-top side-caption"> Service rapide vers l'Europe. Vols directs à partir de l‘aéroport de Vienne. Traitement des colis possible le jour même. </DIV>
            </DIV>
          </DIV>
          <DIV CLASS="col-sm-3 col-xs-12">
            <DIV CLASS="row">
              <DIV CLASS="col-sm-12 col-xs-12">
                <DIV CLASS="text-center map-title title1"> Chiba, Japon </DIV>
              </DIV>
            </DIV>
            <DIV CLASS="row">
              <DIV CLASS="col-sm-6 col-xs-6 align-top">
                <IMG ID="jp-map" CLASS="img-responsive map-image map-tile not-mobile" SRC="https://www.shipito.com/imgs/locations/JPMap.svg" />
                <IMG ID="jp-map" CLASS="img-responsive map-image mobile-only" SRC="https://www.shipito.com/imgs/locations/JPMap.svg" />
              </DIV>
              <DIV CLASS="col-sm-6 col-xs-6 text-left align-top side-caption"> Situé près de l'aéroport, c'est l'emplacement d'entrepôt préféré de ceux qui achètent des produits du Japon et les expédient dans le monde entier. </DIV>
            </DIV>
          </DIV>
        </DIV>
      </DIV>
      <DIV CLASS="mobile-only">
        <DIV CLASS="mobile-whs-title" ID="mobile-whs-title-ca">
          <H2 CLASS="section-title">
            <SPAN>Aperçu de notre entrepôt en Californie</SPAN>
          </H2>
        </DIV>
        <DIV CLASS="mobile-whs-title" ID="mobile-whs-title-or" STYLE="display:none;">
          <H2 CLASS="section-title">
            <SPAN>Aperçu de notre entrepôt en Oregon</SPAN>
          </H2>
        </DIV>
        <DIV CLASS="mobile-whs-title" ID="mobile-whs-title-au" STYLE="display:none;">
          <H2 CLASS="section-title">
            <SPAN>Aperçu de notre entrepôt en Autriche</SPAN>
          </H2>
        </DIV>
        <DIV CLASS="mobile-whs-title" ID="mobile-whs-title-jp" STYLE="display:none;">
          <H2 CLASS="section-title">
            <SPAN>Aperçu de notre entrepôt au Japon</SPAN>
          </H2>
        </DIV>
        <DIV CLASS="warehouse-other text-center">Voir d‘autres photos de l‘entrepôt</DIV>
        <TABLE STYLE="width:98%;margin-left:auto; margin-right:auto;">
          <TR>
            <TD STYLE="width:25%;">
              <DIV CLASS="mobile-whs-select" ID="mobile-whs-select-ca" STYLE="margin-left:4px;margin-right:4px;"> Californie <BR /> USA </DIV>
            </TD>
            <TD STYLE="width:25%;">
              <DIV CLASS="mobile-whs-select" ID="mobile-whs-select-or" STYLE="margin-left:4px;margin-right:4px;"> Oregon <BR /> USA </DIV>
            </TD>
            <TD STYLE="width:25%;">
              <DIV CLASS="mobile-whs-select" ID="mobile-whs-select-au" STYLE="margin-left:4px;margin-right:4px;"> Rästenfeld <BR /> Autriche </DIV>
            </TD>
            <TD STYLE="width:25%;">
              <DIV CLASS="mobile-whs-select" ID="mobile-whs-select-jp" STYLE="margin-left:4px; margin-right:4px;"> 千葉県 <BR /> Japon </DIV>
            </TD>
          </TR>
        </TABLE>
        <DIV CLASS="container" STYLE="padding:0px;">
          <DIV CLASS="mobile-whs-csl" ID="mobile-whs-csl-ca">
            <HEADER CLASS="scroll">
              <TABLE STYLE="">
                <TBODY>
                  <TR>
                    <TD>
                      <IMG CLASS="whs-csl-image" SRC="shipito/en/imgs/locations/California1.png" />
                    </TD>
                    <TD>
                      <IMG CLASS="whs-csl-image" SRC="shipito/en/imgs/locations/California2.png" />
                    </TD>
                    <TD>
                      <IMG CLASS="whs-csl-image" SRC="shipito/en/imgs/locations/California3.png" />
                    </TD>
                    <TD>
                      <IMG CLASS="whs-csl-image" SRC="shipito/en/imgs/locations/California4.png" />
                    </TD>
                    <TD>
                      <IMG CLASS="whs-csl-image" SRC="shipito/en/imgs/locations/California5.png" />
                    </TD>
                  </TR>
                </TBODY>
              </TABLE>
            </HEADER>
          </DIV>
          <DIV CLASS="mobile-whs-csl" ID="mobile-whs-csl-or" STYLE="display:none;">
            <HEADER CLASS="scroll">
              <TABLE STYLE="">
                <TBODY>
                  <TR>
                    <TD>
                      <IMG CLASS="whs-csl-image" SRC="shipito/en/imgs/locations/Oregon1.png" />
                    </TD>
                    <TD>
                      <IMG CLASS="whs-csl-image" SRC="shipito/en/imgs/locations/Oregon2.png" />
                    </TD>
                    <TD>
                      <IMG CLASS="whs-csl-image" SRC="shipito/en/imgs/locations/Oregon3-1.jpg" />
                    </TD>
                    <TD>
                      <IMG CLASS="whs-csl-image" SRC="shipito/en/imgs/locations/Oregon4.png" />
                    </TD>
                    <TD>
                      <IMG CLASS="whs-csl-image" SRC="shipito/en/imgs/locations/Oregon5.png" />
                    </TD>
                  </TR>
                </TBODY>
              </TABLE>
            </HEADER>
          </DIV>
          <DIV CLASS="mobile-whs-csl" ID="mobile-whs-csl-au" STYLE="display:none;">
            <HEADER CLASS="scroll">
              <TABLE STYLE="">
                <TBODY>
                  <TR>
                    <TD>
                      <IMG CLASS="whs-csl-image" SRC="shipito/en/imgs/locations/Austria1.png" />
                    </TD>
                    <TD>
                      <IMG CLASS="whs-csl-image" SRC="shipito/en/imgs/locations/Austria2.png" />
                    </TD>
                    <TD>
                      <IMG CLASS="whs-csl-image" SRC="shipito/en/imgs/locations/Austria3.png" />
                    </TD>
                    <TD>
                      <IMG CLASS="whs-csl-image" SRC="shipito/en/imgs/locations/Austria4.png" />
                    </TD>
                    <TD>
                      <IMG CLASS="whs-csl-image" SRC="shipito/en/imgs/locations/Austria5.png" />
                    </TD>
                  </TR>
                </TBODY>
              </TABLE>
            </HEADER>
          </DIV>
          <DIV CLASS="mobile-whs-csl" ID="mobile-whs-csl-jp" STYLE="display:none;">
            <HEADER CLASS="scroll">
              <TABLE STYLE="">
                <TBODY>
                  <TR>
                    <TD>
                      <IMG CLASS="whs-csl-image" SRC="shipito/en/imgs/locations/Japan1.jpg" />
                    </TD>
                    <TD>
                      <IMG CLASS="whs-csl-image" SRC="shipito/en/imgs/locations/Japan2.jpg" />
                    </TD>
                    <TD>
                      <IMG CLASS="whs-csl-image" SRC="shipito/en/imgs/locations/Japan3.jpg" />
                    </TD>
                    <TD>
                      <IMG CLASS="whs-csl-image" SRC="shipito/en/imgs/locations/Japan4.jpg" />
                    </TD>
                    <TD>
                      <IMG CLASS="whs-csl-image" SRC="shipito/en/imgs/locations/Japan5.jpg" />
                    </TD>
                  </TR>
                </TBODY>
              </TABLE>
            </HEADER>
          </DIV>
        </DIV>
      </DIV>
      <DIV CLASS="not-mobile">
        <DIV ID="ca-block" CLASS="whs-block">
          <DIV CLASS="container">
            <DIV CLASS="whs-overview">Aperçu de notre entrepôt en Californie</DIV>
            <DIV CLASS="row whs-row">
              <DIV CLASS="col-sm-6 col-xs-12 whs-col">
                <IMG CLASS="img-responsive not-mobile" SRC="shipito/en/imgs/locations/California1.png" />
                <IMG CLASS="img-responsive mobile-image" SRC="shipito/en/imgs/locations/California1.png" />
              </DIV>
              <DIV CLASS="col-sm-6 whs-col not-mobile">
                <IMG CLASS="img-responsive" SRC="shipito/en/imgs/locations/California2.png" />
              </DIV>
            </DIV>
            <DIV CLASS="row whs-row">
              <DIV CLASS="col-sm-4 whs-col not-mobile">
                <IMG CLASS="img-responsive" SRC="shipito/en/imgs/locations/California3.png" />
              </DIV>
              <DIV CLASS="col-sm-4 whs-col not-mobile">
                <IMG CLASS="img-responsive" SRC="shipito/en/imgs/locations/California4.png" />
              </DIV>
              <DIV CLASS="col-sm-4 whs-col not-mobile">
                <IMG CLASS="img-responsive" SRC="shipito/en/imgs/locations/California5.png" />
              </DIV>
            </DIV>
          </DIV>
        </DIV>
        <DIV ID="or-block" CLASS="whs-block">
          <DIV CLASS="container">
            <DIV CLASS="whs-overview">Aperçu de notre entrepôt en Oregon</DIV>
            <DIV CLASS="row whs-row">
              <DIV CLASS="col-sm-6 col-xs-12 whs-col">
                <IMG CLASS="img-responsive not-mobile" SRC="shipito/en/imgs/locations/Oregon1.png" />
                <IMG CLASS="img-responsive mobile-image" SRC="shipito/en/imgs/locations/Oregon1.png" />
              </DIV>
              <DIV CLASS="col-sm-6 whs-col not-mobile">
                <IMG CLASS="img-responsive" SRC="shipito/en/imgs/locations/Oregon2.png" />
              </DIV>
            </DIV>
            <DIV CLASS="row whs-row">
              <DIV CLASS="col-sm-4 whs-col not-mobile">
                <IMG CLASS="img-responsive" SRC="shipito/en/imgs/locations/Oregon3-1.jpg" />
              </DIV>
              <DIV CLASS="col-sm-4 whs-col not-mobile">
                <IMG CLASS="img-responsive" SRC="shipito/en/imgs/locations/Oregon4.png" />
              </DIV>
              <DIV CLASS="col-sm-4 whs-col not-mobile">
                <IMG CLASS="img-responsive" SRC="shipito/en/imgs/locations/Oregon5.png" />
              </DIV>
            </DIV>
          </DIV>
        </DIV>
        <DIV ID="au-block" CLASS="whs-block">
          <DIV CLASS="container">
            <DIV CLASS="whs-overview">Aperçu de notre entrepôt en Autriche</DIV>
            <DIV CLASS="row whs-row">
              <DIV CLASS="col-sm-6 col-xs-12 whs-col">
                <IMG CLASS="img-responsive not-mobile" SRC="shipito/en/imgs/locations/Austria1.png" />
                <IMG CLASS="img-responsive mobile-image" SRC="shipito/en/imgs/locations/Austria1.png" />
              </DIV>
              <DIV CLASS="col-sm-6 whs-col not-mobile">
                <IMG CLASS="img-responsive" SRC="shipito/en/imgs/locations/Austria2.png" />
              </DIV>
            </DIV>
            <DIV CLASS="row whs-row">
              <DIV CLASS="col-sm-4 whs-col not-mobile">
                <IMG CLASS="img-responsive" SRC="shipito/en/imgs/locations/Austria3.png" />
              </DIV>
              <DIV CLASS="col-sm-4 whs-col not-mobile">
                <IMG CLASS="img-responsive" SRC="shipito/en/imgs/locations/Austria4.png" />
              </DIV>
              <DIV CLASS="col-sm-4 whs-col not-mobile">
                <IMG CLASS="img-responsive" SRC="shipito/en/imgs/locations/Austria5.png" />
              </DIV>
            </DIV>
          </DIV>
        </DIV>
        <DIV ID="jp-block" CLASS="whs-block">
          <DIV CLASS="container">
            <DIV CLASS="whs-overview">Aperçu de notre entrepôt au Japon</DIV>
            <DIV CLASS="row whs-row">
              <DIV CLASS="col-sm-6 col-xs-12 whs-col">
                <IMG CLASS="img-responsive not-mobile" SRC="shipito/en/imgs/locations/Japan1.jpg" />
                <IMG CLASS="img-responsive mobile-image" SRC="shipito/en/imgs/locations/Japan1.jpg" />
              </DIV>
              <DIV CLASS="col-sm-6 whs-col not-mobile">
                <IMG CLASS="img-responsive" SRC="shipito/en/imgs/locations/Japan2.jpg" />
              </DIV>
            </DIV>
            <DIV CLASS="row whs-row">
              <DIV CLASS="col-sm-4 whs-col not-mobile">
                <IMG CLASS="img-responsive" SRC="shipito/en/imgs/locations/Japan3.jpg" />
              </DIV>
              <DIV CLASS="col-sm-4 whs-col not-mobile">
                <IMG CLASS="img-responsive" SRC="shipito/en/imgs/locations/Japan4.jpg" />
              </DIV>
              <DIV CLASS="col-sm-4 whs-col not-mobile">
                <IMG CLASS="img-responsive" SRC="shipito/en/imgs/locations/Japan5.jpg" />
              </DIV>
            </DIV>
          </DIV>
        </DIV>
      </DIV>
      <DIV CLASS="container free-storage-mobile">
        <H2 CLASS="section-title">
          <SPAN>Stockage gratuit</SPAN>
        </H2>
        <DIV CLASS="row">
          <DIV CLASS="col-sm-3 col-xs-6">
            <DIV CLASS="text-center map-title title1 not-mobile"> Californie, É.-U. </DIV>
            <DIV CLASS="days-div">
              <DIV CLASS="big-days">
                <DIV CLASS="small-days">jours</DIV>
              </DIV>
              <IMG CLASS="img-responsive storage-image" SRC="https://www.shipito.com/imgs/locations/90days.svg" />
            </DIV>
            <DIV CLASS="text-center map-title title1 mobile-only"> Californie <BR /> USA </DIV>
          </DIV>
          <DIV CLASS="col-sm-3 col-xs-6">
            <DIV CLASS="text-center map-title title1 not-mobile"> Oregon, É.-U. </DIV>
            <DIV CLASS="days-div">
              <DIV CLASS="big-days">
                <DIV CLASS="small-days">jours</DIV>
              </DIV>
              <IMG CLASS="img-responsive storage-image" SRC="https://www.shipito.com/imgs/locations/90days.svg" />
            </DIV>
            <DIV CLASS="text-center map-title title1 mobile-only"> Oregon <BR /> USA </DIV>
          </DIV>
          <DIV CLASS="col-sm-3 col-xs-6">
            <DIV CLASS="text-center map-title title1 not-mobile"> Rastenfeld, Autriche </DIV>
            <DIV CLASS="days-div">
              <DIV CLASS="big-days">
                <DIV CLASS="small-days">jours</DIV>
              </DIV>
              <IMG CLASS="img-responsive storage-image" SRC="https://www.shipito.com/imgs/locations/90days.svg" />
            </DIV>
            <DIV CLASS="text-center map-title title1 mobile-only"> Rästenfeld <br /> Autriche </DIV>
          </DIV>
          <DIV CLASS="col-sm-3 col-xs-6">
            <DIV CLASS="text-center map-title title1 not-mobile"> Chiba, Japon </DIV>
            <DIV CLASS="days-div">
              <DIV CLASS="big-days">
                <DIV CLASS="small-days">jours</DIV>
              </DIV>
              <IMG CLASS="img-responsive storage-image" SRC="https://www.shipito.com/imgs/locations/90days.svg" />
            </DIV>
            <DIV CLASS="text-center map-title title1 mobile-only"> 千葉県 <br /> Japon </DIV>
          </DIV>
        </DIV>
      </DIV>
      <DIV CLASS="container free-storage-mobile">
        <H2 CLASS="section-title">
          <SPAN>Taxe de vente</SPAN>
        </H2>
        <DIV CLASS="row">
          <DIV CLASS="col-sm-3 col-xs-6">
            <DIV CLASS="text-center map-title title1 not-mobile"> Californie, É.-U. </DIV>
            <DIV CLASS="days-div">
              <DIV CLASS="big-days">
                <DIV CLASS="small-pct">Jusqu'à</DIV>
              </DIV>
              <IMG CLASS="img-responsive storage-image" SRC="https://www.shipito.com/imgs/locations/9pct.svg" />
            </DIV>
            <DIV CLASS="text-center map-title title1 mobile-only"> Californie <BR /> USA </DIV>
          </DIV>
          <DIV CLASS="col-sm-3 col-xs-6">
            <DIV CLASS="text-center map-title title1 not-mobile"> Oregon, É.-U. </DIV>
            <DIV CLASS="days-div">
              <DIV CLASS="big-days"></DIV>
              <IMG CLASS="img-responsive storage-image" SRC="https://www.shipito.com/imgs/locations/0pct.svg" />
            </DIV>
            <DIV CLASS="text-center map-title title1 mobile-only"> Oregon <BR /> USA </DIV>
          </DIV>
          <DIV CLASS="col-sm-3 col-xs-6">
            <DIV CLASS="text-center map-title title1 not-mobile"> Rastenfeld, Autriche </DIV>
            <DIV CLASS="days-div">
              <DIV CLASS="big-days"></DIV>
              <IMG CLASS="img-responsive storage-image" SRC="https://www.shipito.com/imgs/locations/5-20pct.svg" />
            </DIV>
            <DIV CLASS="text-center map-title title1 mobile-only"> Rästenfeld <br /> Autriche </DIV>
          </DIV>
          <DIV CLASS="col-sm-3 col-xs-6">
            <DIV CLASS="text-center map-title title1 not-mobile"> Chiba, Japon </DIV>
            <DIV CLASS="days-div">
              <DIV CLASS="big-days"></DIV>
              <IMG CLASS="img-responsive storage-image" SRC="https://www.shipito.com/imgs/locations/8-10pct.svg" />
            </DIV>
            <DIV CLASS="text-center map-title title1 mobile-only"> 千葉県 <br /> Japon </DIV>
          </DIV>
        </DIV>
      </DIV>
      <DIV CLASS="container">
        <H2 CLASS="section-title">
          <SPAN>Modes de livraison</SPAN>
        </H2>
        <DIV CLASS="shipmethod-caption">Nous travaillons en relation avec les meilleures sociétés de transport à travers le monde afin de vous garantir les meilleures livraisons possibles. Pour plus d‘informations sur les tarifs de livraison, veuillez consulter notre calculateur de frais de port.</DIV>
        <DIV CLASS="not-mobile">
          <DIV CLASS="row shipmethod-row">
            <DIV CLASS="col-sm-3 col-xs-12">
              <DIV CLASS="text-center map-title title1"> Californie, É.-U. </DIV>
            </DIV>
            <DIV CLASS="col-sm-3 col-xs-12">
              <DIV CLASS="text-center map-title title1"> Oregon, É.-U. </DIV>
            </DIV>
            <DIV CLASS="col-sm-3 col-xs-12">
              <DIV CLASS="text-center map-title title1"> Rastenfeld, Autriche </DIV>
            </DIV>
            <DIV CLASS="col-sm-3 col-xs-12">
              <DIV CLASS="text-center map-title title1"> Chiba, Japon </DIV>
            </DIV>
          </DIV>
          <DIV CLASS="row shipper-row">
            <DIV CLASS="col-sm-3 col-xs-12">
              <DIV CLASS="shipper-div">
                <IMG CLASS="img-responsive shipper-image" SRC="shipito/en/imgs/locations/dhl%402x.png" />
                <DIV CLASS="shipper-name">DHL</DIV>
              </DIV>
              <DIV CLASS="shipper-div">
                <IMG CLASS="img-responsive shipper-image" SRC="shipito/en/imgs/locations/usps%402x.png" />
                <DIV CLASS="shipper-name">USPS</DIV>
              </DIV>
              <DIV CLASS="shipper-div">
                <IMG CLASS="img-responsive shipper-image" SRC="shipito/en/imgs/locations/ups%402x.png" />
                <DIV CLASS="shipper-name">UPS</DIV>
              </DIV>
              <DIV CLASS="shipper-div">
                <IMG CLASS="img-responsive shipper-image" SRC="shipito/en/imgs/locations/airmail%402x.png" />
                <DIV CLASS="shipper-name">Airmail</DIV>
              </DIV>
              <DIV CLASS="shipper-div">
                <IMG CLASS="img-responsive shipper-image" SRC="shipito/en/imgs/locations/boxberry%402x.png" />
                <DIV CLASS="shipper-name">Boxberry</DIV>
              </DIV>
              <DIV CLASS="shipper-div">
                <IMG CLASS="img-responsive shipper-image" SRC="shipito/en/imgs/locations/PExpress.png" />
                <DIV CLASS="shipper-name">Pony Express</DIV>
              </DIV>
              <DIV CLASS="shipper-div">
                <IMG CLASS="img-responsive shipper-image" SRC="shipito/en/imgs/locations/post%402x.png" />
                <DIV CLASS="shipper-name">Poste australienne</DIV>
              </DIV>
              <DIV CLASS="shipper-div">
                <IMG CLASS="img-responsive shipper-image" SRC="shipito/en/imgs/locations/aramex%402x.png" />
                <DIV CLASS="shipper-name">Aramex</DIV>
              </DIV>
              <DIV CLASS="shipper-div">
                <IMG CLASS="img-responsive shipper-image" SRC="shipito/en/imgs/locations/sgh%402x.png" />
                <DIV CLASS="shipper-name">Sagawa</DIV>
              </DIV>
              <DIV CLASS="shipper-div">
                <IMG CLASS="img-responsive shipper-image" SRC="https://www.shipito.com/imgs/locations/shipperAsiaDir.svg" />
                <DIV CLASS="shipper-name">Lynia Asie Direct</DIV>
              </DIV>
            </DIV>
            <DIV CLASS="col-sm-3 col-xs-12">
              <DIV CLASS="shipper-div">
                <IMG CLASS="img-responsive shipper-image" SRC="shipito/en/imgs/locations/dhl%402x.png" />
                <DIV CLASS="shipper-name">DHL</DIV>
              </DIV>
              <DIV CLASS="shipper-div">
                <IMG CLASS="img-responsive shipper-image" SRC="shipito/en/imgs/locations/usps%402x.png" />
                <DIV CLASS="shipper-name">USPS</DIV>
              </DIV>
              <DIV CLASS="shipper-div">
                <IMG CLASS="img-responsive shipper-image" SRC="shipito/en/imgs/locations/ups%402x.png" />
                <DIV CLASS="shipper-name">UPS</DIV>
              </DIV>
              <DIV CLASS="shipper-div">
                <IMG CLASS="img-responsive shipper-image" SRC="shipito/en/imgs/locations/airmail%402x.png" />
                <DIV CLASS="shipper-name">Airmail</DIV>
              </DIV>
              <DIV CLASS="shipper-div">
                <IMG CLASS="img-responsive shipper-image" SRC="shipito/en/imgs/locations/boxberry%402x.png" />
                <DIV CLASS="shipper-name">Boxberry</DIV>
              </DIV>
              <DIV CLASS="shipper-div">
                <IMG CLASS="img-responsive shipper-image" SRC="shipito/en/imgs/locations/PExpress.png" />
                <DIV CLASS="shipper-name">Pony Express</DIV>
              </DIV>
              <DIV CLASS="shipper-div">
                <IMG CLASS="img-responsive shipper-image" SRC="shipito/en/imgs/locations/post%402x.png" />
                <DIV CLASS="shipper-name">Poste australienne</DIV>
              </DIV>
              <DIV CLASS="shipper-div">
                <IMG CLASS="img-responsive shipper-image" SRC="shipito/en/imgs/locations/aramex%402x.png" />
                <DIV CLASS="shipper-name">Aramex</DIV>
              </DIV>
              <DIV CLASS="shipper-div">
                <IMG CLASS="img-responsive shipper-image" SRC="shipito/en/imgs/locations/sgh%402x.png" />
                <DIV CLASS="shipper-name">Sagawa</DIV>
              </DIV>
              <DIV CLASS="shipper-div">
                <IMG CLASS="img-responsive shipper-image" SRC="https://www.shipito.com/imgs/locations/shipperAsiaDir.svg" />
                <DIV CLASS="shipper-name">Lynia Asie Direct</DIV>
              </DIV>
            </DIV>
            <DIV CLASS="col-sm-3 col-xs-12">
              <DIV CLASS="shipper-div">
                <IMG CLASS="img-responsive shipper-image" SRC="shipito/en/imgs/locations/austrian%20post%402x.png" />
                <DIV CLASS="shipper-name">Poste autrichienne</DIV>
              </DIV>
              <DIV CLASS="shipper-div">&nbsp;</DIV>
              <DIV CLASS="shipper-div">&nbsp;</DIV>
              <DIV CLASS="shipper-div">&nbsp;</DIV>
              <DIV CLASS="shipper-div">&nbsp;</DIV>
              <DIV CLASS="shipper-div">&nbsp;</DIV>
              <DIV CLASS="shipper-div">&nbsp;</DIV>
              <DIV CLASS="shipper-div">&nbsp;</DIV>
            </DIV>
            <DIV CLASS="col-sm-3 col-xs-12">
              <DIV CLASS="shipper-div">
                <IMG CLASS="img-responsive shipper-image" SRC="shipito/en/imgs/locations/dhl%402x.png" />
                <DIV CLASS="shipper-name">DHL</DIV>
              </DIV>
              <DIV CLASS="shipper-div">
                <IMG CLASS="img-responsive shipper-image" SRC="shipito/en/imgs/locations/ups%402x.png" />
                <DIV CLASS="shipper-name">UPS</DIV>
              </DIV>
              <DIV CLASS="shipper-div">
                <IMG CLASS="img-responsive shipper-image" SRC="https://www.shipito.com/imgs/locations/shipperAsiaDir.svg" />
                <DIV CLASS="shipper-name">Lynia Asie Direct</DIV>
              </DIV>
              <DIV CLASS="shipper-div">&nbsp;</DIV>
              <DIV CLASS="shipper-div">&nbsp;</DIV>
              <DIV CLASS="shipper-div">&nbsp;</DIV>
              <DIV CLASS="shipper-div">&nbsp;</DIV>
              <DIV CLASS="shipper-div">&nbsp;</DIV>
            </DIV>
          </DIV>
        </DIV>
        <DIV CLASS="mobile-only">
          <DIV CLASS="row border-top-bottom">
            <DIV CLASS="col-xs-4 text-center shipmethod-title"> Californie & Oregon <BR /> USA <BR />
            </DIV>
            <DIV CLASS="col-xs-4 text-center shipmethod-title"> Rästenfeld <BR /> Autriche <BR />
            </DIV>
            <DIV CLASS="col-xs-4 text-center shipmethod-title"> 千葉県 <BR /> Japon <BR />
            </DIV>
          </DIV>
          <DIV CLASS="row">
            <DIV CLASS="col-xs-4 text-center">
              <DIV CLASS="col-sm-4 col-xs-12">
                <DIV CLASS="shipper-div">
                  <IMG CLASS="img-responsive shipper-image" SRC="shipito/en/imgs/locations/dhl%402x.png" />
                  <DIV CLASS="shipper-name">DHL</DIV>
                </DIV>
                <DIV CLASS="shipper-div">
                  <IMG CLASS="img-responsive shipper-image" SRC="shipito/en/imgs/locations/usps%402x.png" />
                  <DIV CLASS="shipper-name">USPS</DIV>
                </DIV>
                <DIV CLASS="shipper-div">
                  <IMG CLASS="img-responsive shipper-image" SRC="shipito/en/imgs/locations/fedex%402x.png" />
                  <DIV CLASS="shipper-name">FedEx</DIV>
                </DIV>
                <DIV CLASS="shipper-div">
                  <IMG CLASS="img-responsive shipper-image" SRC="shipito/en/imgs/locations/airmail%402x.png" />
                  <DIV CLASS="shipper-name">Airmail</DIV>
                </DIV>
                <DIV CLASS="shipper-div">
                  <IMG CLASS="img-responsive shipper-image" SRC="shipito/en/imgs/locations/boxberry%402x.png" />
                  <DIV CLASS="shipper-name">Boxberry</DIV>
                </DIV>
                <DIV CLASS="shipper-div">
                  <IMG CLASS="img-responsive shipper-image" SRC="shipito/en/imgs/locations/PExpress.png" />
                  <DIV CLASS="shipper-name">Pony Express</DIV>
                </DIV>
                <DIV CLASS="shipper-div">
                  <IMG CLASS="img-responsive shipper-image" SRC="shipito/en/imgs/locations/post%402x.png" />
                  <DIV CLASS="shipper-name">Poste australienne</DIV>
                </DIV>
                <DIV CLASS="shipper-div">
                  <IMG CLASS="img-responsive shipper-image" SRC="shipito/en/imgs/locations/aramex%402x.png" />
                  <DIV CLASS="shipper-name">Aramex</DIV>
                </DIV>
                <DIV CLASS="shipper-div">
                  <IMG CLASS="img-responsive shipper-image" SRC="shipito/en/imgs/locations/sgh%402x.png" />
                  <DIV CLASS="shipper-name">Sagawa</DIV>
                </DIV>
                <DIV CLASS="shipper-div-bottom">
                  <IMG CLASS="img-responsive shipper-image" SRC="https://www.shipito.com/imgs/locations/shipperAsiaDir.svg" />
                  <DIV CLASS="shipper-name">Lynia Asie Direct</DIV>
                </DIV>
              </DIV>
            </DIV>
            <DIV CLASS="col-xs-4 text-center">
              <DIV CLASS="shipper-div">
                <IMG CLASS="img-responsive shipper-image" SRC="shipito/en/imgs/locations/austrian%20post%402x.png" />
                <DIV CLASS="shipper-name">Poste autrichienne</DIV>
              </DIV>
              <DIV CLASS="shipper-div">
                <IMG CLASS="img-responsive shipper-image" SRC="shipito/en/imgs/locations/fedex%402x.png" />
                <DIV CLASS="shipper-name">FedEx</DIV>
              </DIV>
              <DIV CLASS="shipper-div">&nbsp;</DIV>
              <DIV CLASS="shipper-div">&nbsp;</DIV>
              <DIV CLASS="shipper-div">&nbsp;</DIV>
              <DIV CLASS="shipper-div">&nbsp;</DIV>
              <DIV CLASS="shipper-div">&nbsp;</DIV>
              <DIV CLASS="shipper-div">&nbsp;</DIV>
              <DIV CLASS="shipper-div">&nbsp;</DIV>
            </DIV>
            <DIV CLASS="col-xs-4 text-center">
              <DIV CLASS="shipper-div">
                <IMG CLASS="img-responsive shipper-image" SRC="shipito/en/imgs/locations/dhl%402x.png" />
                <DIV CLASS="shipper-name">DHL</DIV>
              </DIV>
              <DIV CLASS="shipper-div">
                <IMG CLASS="img-responsive shipper-image" SRC="shipito/en/imgs/locations/ups%402x.png" />
                <DIV CLASS="shipper-name">UPS</DIV>
              </DIV>
              <DIV CLASS="shipper-div">
                <IMG CLASS="img-responsive shipper-image" SRC="https://www.shipito.com/imgs/locations/shipperAsiaDir.svg" />
                <DIV CLASS="shipper-name">Lynia Asie Direct</DIV>
              </DIV>
              <DIV CLASS="shipper-div">&nbsp;</DIV>
              <DIV CLASS="shipper-div">&nbsp;</DIV>
              <DIV CLASS="shipper-div">&nbsp;</DIV>
              <DIV CLASS="shipper-div">&nbsp;</DIV>
              <DIV CLASS="shipper-div">&nbsp;</DIV>
              <DIV CLASS="shipper-div">&nbsp;</DIV>
            </DIV>
          </DIV>
        </DIV>
      </DIV>
      <DIV CLASS="container">
        <H2 CLASS="section-title">
          <SPAN>Délais de Livraison</SPAN>
        </H2>
        <DIV CLASS="container bigmap not-mobile">
          <DIV CLASS="row bigmap-row">
            <DIV CLASS="col-sm-6 col-xs-12 border-right">
              <IMG CLASS="img-responsive bigmap-image" STYLE="margin:20px 10px 30px 0px;" SRC="https://www.shipito.com/imgs/locations/USAMap.svg" />
            </DIV>
            <DIV CLASS="col-sm-3 col-xs-12 border-right">
              <IMG CLASS="img-responsive bigmap-image" SRC="https://www.shipito.com/imgs/locations/AUBigMap.svg" />
            </DIV>
            <DIV CLASS="col-sm-3 col-xs-12">
              <IMG CLASS="img-responsive bigmap-image" SRC="https://www.shipito.com/imgs/locations/JPBigMap.svg" />
            </DIV>
          </DIV>
          <DIV CLASS="row">
            <DIV CLASS="col-sm-3 col-xs-12 location-box-rt">
              <DIV CLASS="text-center map-title title1"> Californie, É.-U. </DIV>
              <DIV CLASS="speed-caption"> Plus rapide grâce à la proximité de l‘aéroport de Los Angeles. </DIV>
            </DIV>
            <DIV CLASS="col-sm-3 col-xs-12 location-box-rt">
              <DIV CLASS="text-center map-title title1"> Oregon, É.-U. </DIV>
              <DIV CLASS="speed-caption"> USPS et Airmail sont plus lents de 1 à 3 jours en raison du transport à travers la Californie. Les autres méthodes sont aussi rapides que la Californie. </DIV>
            </DIV>
            <DIV CLASS="col-sm-3 col-xs-12 location-box-rt">
              <DIV CLASS="text-center map-title title1"> Rastenfeld, Autriche </DIV>
              <DIV CLASS="speed-caption"> Plus rapide grâce aux vols directs de l‘aéroport de Vienne et au traitement des colis au centre d‘exportation de Vienne le jour même. </DIV>
            </DIV>
            <DIV CLASS="col-sm-3 col-xs-12 location-box">
              <DIV CLASS="text-center map-title title1"> Chiba, Japon </DIV>
              <DIV CLASS="speed-caption"> Situé près de l'aéroport, c'est l'emplacement d'entrepôt préféré de ceux qui achètent des produits du Japon et les expédient dans le monde entier. </DIV>
            </DIV>
          </DIV>
        </DIV>
      </DIV>
      <DIV CLASS="container bigmap mobile-only">
        <DIV CLASS="row bigmap-row">
          <DIV CLASS="col-sm-12 col-xs-12">
            <IMG CLASS="img-responsive bigmap-image" SRC="https://www.shipito.com/imgs/locations/USAMap.svg" />
          </DIV>
        </DIV>
        <DIV CLASS="row">
          <DIV CLASS="col-sm-6 col-xs-6 location-box-rt">
            <DIV CLASS="text-center map-title title1"> Californie, É.-U. </DIV>
            <DIV CLASS="speed-caption"> Plus rapide grâce à la proximité de l‘aéroport de Los Angeles. </DIV>
          </DIV>
          <DIV CLASS="col-sm-6 col-xs-6">
            <DIV CLASS="text-center map-title title1"> Oregon, É.-U. </DIV>
            <DIV CLASS="speed-caption"> USPS et Airmail sont plus lents de 1 à 3 jours en raison du transport à travers la Californie. Les autres méthodes sont aussi rapides que la Californie. </DIV>
          </DIV>
        </DIV>
        <DIV CLASS="row">
          <DIV CLASS="col-sm-6 col-xs-6 location-box-rt" STYLE="height:475px;">
            <DIV>
              <IMG ID="au-map" CLASS="img-responsive map-image mobile-only" SRC="https://www.shipito.com/imgs/locations/AUMap.svg" />
            </DIV>
            <DIV CLASS="text-center map-title title1"> Rastenfeld, Autriche </DIV>
            <DIV CLASS="speed-caption"> Plus rapide grâce aux vols directs de l‘aéroport de Vienne et au traitement des colis au centre d‘exportation de Vienne le jour même. </DIV>
          </DIV>
          <DIV CLASS="col-sm-6 col-xs-6 location-box" STYLE="height:475px;">
            <DIV>
              <IMG ID="au-map" CLASS="img-responsive map-image mobile-only" SRC="https://www.shipito.com/imgs/locations/JPMap.svg" />
            </DIV>
            <DIV CLASS="text-center map-title title1"> Chiba, Japon </DIV>
            <DIV CLASS="speed-caption"> Situé près de l'aéroport, c'est l'emplacement d'entrepôt préféré de ceux qui achètent des produits du Japon et les expédient dans le monde entier. </DIV>
          </DIV>
        </DIV>
      </DIV>
      <DIV CLASS="signup-banner">
        <DIV CLASS="container">
          <DIV CLASS="text-center">
            <DIV>Commencez à économiser aujourd'hui !</DIV>
          </DIV>
          <DIV CLASS="text-center us-address">
            <DIV>Obtenez une adresse gratuite en France !</DIV>
          </DIV>
          <DIV CLASS="text-center">
            <DIV>
              <A href="#" CLASS="btn">Inscription gratuite</A>
            </DIV>
          </DIV>
        </DIV>
      </DIV>
      <SCRIPT>
        var currentblock = "#ca-block";
        $(".map-tile").hover(function() {
          var imgid = '#' + $(this).attr('id');
          var blockid = imgid.replace('map', 'block');
          if (imgid == '#ca-map') {
            $(imgid).attr('src', 'https://www.shipito.com/imgs/locations/CAMapHover.svg');
            $('#or-map').attr('src', 'https://www.shipito.com/imgs/locations/ORMap.svg');
            $('#au-map').attr('src', 'https://www.shipito.com/imgs/locations/AUMap.svg');
            $('#jp-map').attr('src', 'https://www.shipito.com/imgs/locations/JPMap.svg');
          } else if (imgid == '#or-map') {
            $(imgid).attr('src', 'https://www.shipito.com/imgs/locations/ORMapHover.svg');
            $('#ca-map').attr('src', 'https://www.shipito.com/imgs/locations/CAMap.svg');
            $('#au-map').attr('src', 'https://www.shipito.com/imgs/locations/AUMap.svg');
            $('#jp-map').attr('src', 'https://www.shipito.com/imgs/locations/JPMap.svg');
          } else if (imgid == '#au-map') {
            $(imgid).attr('src', 'https://www.shipito.com/imgs/locations/AUMapHover.svg');
            $('#ca-map').attr('src', 'https://www.shipito.com/imgs/locations/CAMap.svg');
            $('#or-map').attr('src', 'https://www.shipito.com/imgs/locations/ORMap.svg');
            $('#jp-map').attr('src', 'https://www.shipito.com/imgs/locations/JPMap.svg');
          } else if (imgid == '#jp-map') {
            $(imgid).attr('src', 'https://www.shipito.com/imgs/locations/JPMapHover.svg');
            $('#ca-map').attr('src', 'https://www.shipito.com/imgs/locations/CAMap.svg');
            $('#or-map').attr('src', 'https://www.shipito.com/imgs/locations/ORMap.svg');
            $('#au-map').attr('src', 'https://www.shipito.com/imgs/locations/AUMap.svg');
          }
          if (blockid != currentblock) {
            $('.whs-block').hide();
            $(blockid).show();
            currentblock = blockid;
          }
        });
        var currentselect = "#mobile-whs-select-ca";
        $(".mobile-whs-select").click(function() {
          var selectid = '#' + $(this).attr('id');
          var titleid = selectid.replace('select', 'title');
          var cslid = selectid.replace('select', 'csl');
          if (selectid != currentselect) {
            $('.mobile-whs-select').css({
              'color': '#454545',
              'border': '1px solid #D7D7D7'
            });
            $(selectid).css({
              'color': '#20284D',
              'border': '1px solid #20284D'
            });
            $('.mobile-whs-csl').hide();
            $('.mobile-whs-title').hide();
            $(cslid).show();
            $(titleid).show();
            currentselect = selectid;
          }
        });
      </SCRIPT>
    </DIV>
    <FOOTER CLASS="top-footer">
      <DIV CLASS="container">
        <DIV CLASS="row">
          <DIV CLASS="col-md-3 col-xs-6 text-center advantage">
            <SPAN CLASS="advantage-image">
              <IMG SRC="shipito/fr/imgs/navigation/CompetitivePricing.svg">
            </SPAN>
            <SPAN CLASS="advantage-service">La tarification compétitive de Lynia</SPAN>
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
            <A href="#">Lynia Pour Mois</A>
            <A href="#">Lynia Pour les Entreprises</A>
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
            <A href="#">Qu'est-ce que Lynia</A>
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
              <A href="#">
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
            <A href="#">Règles de confidentialité</A> &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp; <A href="#">Conditions Générales</A>
            <BR> Copyright &copy; 2024 Lynia. All rights reserved.
          </DIV>
        </DIV>
      </DIV>
    </FOOTER>
    <A href="#" CLASS="back-to-top-link" TITLE="Retour Vers le Haut">
      <IMG SRC="shipito/fr/imgs/navigation/BackToTop.svg">
    </A>

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
            n.async = !0, n.type = "text/javascript", n.src = "shipito/cdn.livechatinc.com/tracking.js", t.head.appendChild(n)
          }
        };
        !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e
      }(window, document, [].slice))
    </script>
    <noscript>
      <a href="#" rel="nofollow">Chat with us</a>, powered by <a href="#" rel="noopener nofollow" target="_blank">LiveChat</a>
    </noscript>
    <!-- End of LiveChat code -->
    <SCRIPT>
      $(document).ready(function() {
        if ($('#banner-container').length) {
          $('#banner-container').load('/fr/banner-ads?pg=/help/locations');
        }
      });
    </SCRIPT>
  </BODY>
  <!-- Mirrored from www.shipito.com/fr/help/locations by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 13:45:50 GMT -->
</HTML>
<!--- Copyright 2024 GlobalAccess All Rights Reserved -->
<!--- Web Server 3088 -->
