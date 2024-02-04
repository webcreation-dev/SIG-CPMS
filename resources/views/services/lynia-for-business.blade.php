



<!DOCTYPE HTML>
<HTML dir = "ltr" lang = "fr">

<!-- Mirrored from www.shipito.com/fr/shipito-for-business by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 13:43:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
@include('layouts.head-guest')

<BODY>
<DIV ID = "menu-filler"></DIV>
<A NAME = "page-top" ID = "page-top"></A>
@include('layouts.header-guest')

<DIV CLASS = "main-body">

<STYLE TYPE = "text/css">
html[dir="rtl"] .select-plan SMALL:first-of-type {
	display: none;
}

.top-banner-outer {
  background-image: url("shipito/fr/imgs/business/BusinessBannerREV.jpg");
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
}


@media (max-width:767px) {
  .top-banner-inner H1 { line-height:40px; }
  .top-banner-outer {
    background-image: url("shipito/fr/imgs/business/BusinessBanner_Mobile.jpg");
  }
 }
 H3 { line-height: 40px; }

.alternating DIV {
   padding: 20px;
   text-align: center;
}
.alternating DIV P {
   margin: 30px 0px 30px 0px;
}
.alternating DIV IMG {
  width: calc(100% + 40px);
  margin: -20px;
}
DIV.lt-grey {
 background-color: #F4F4F4;
}
DIV.dk-grey {
 background-color: #E2E2E2;
}

.circled-number {
   display: block;
   line-height: 30px;
   vertical-align: center;
   font-size: 18px;
   text-align: center;
   margin-bottom: 30px;
}
.circled-number SPAN {
  display: inline-block;
  width: 30px;
  height: 30px;
  border: solid 1px #454545;
  border-radius: 15px;
  margin-right: 5px;
}

.flex-row {
  margin-top: 40px;
}
.flex-row H2, .flex-row H3 {
  display: block;
  text-align: center;
}
.flex-row H2 {
  font-size: 24px;
}
.flex-row H3 {
  font-size: 18px;
  margin: 30px 0px 30px 0px;
}
.flex-row .apis P {
  margin: 40px 0px 40px 0px;

}
.flex-row DIV.btn-container {
  padding: 30px 0px 30px 0px;
  text-align: center;
  left: 0px;
}

@media (min-width:768px) and (max-width:1200px) {
  .alternating DIV {
     padding: 10px;
     text-align: center;
  }
  .alternating DIV IMG {
    width: calc(100% + 20px);
    margin: -10px;
  }
  .alternating DIV P {
     font-size: 12px;
     margin: 10px 0px 10px 0px;
 }
   .circled-number {
     margin-top: 10px;
     margin-bottom: 10px;
  }
}

@media (min-width:768px) {
  .top-banner-inner H1 { line-height:60px; margin-top:0px; }
  .alternating {
    display: flex;
    flex-direction: row;
  }
  .alternating DIV {
    flex-basis: 100%;
  }
  .flex-row {
    display: flex;
  }
  .flex-row > DIV.col-md-4 {
    padding-bottom: 100px;
    position: relative;
  }
  .flex-row DIV.btn-container {
     position: absolute;
     bottom: 0px;
     padding: 30px 0px 30px 0px;
     width: 100%;
  }
}
@media (max-width:767px) {
  .alternating {
    margin: 0px -15px 0px -15px;
  }
  .flex-row  {
    margin-top: 45px;
  }
  .flex-row H3 {
    margin-top: 45px;
    margin-bottom: 40px;
    line-height: 20px;
  }
  .flex-row DIV.btn-container {
     margin: 40px 0px 45px 0px;
     padding: 0px;
  }
  .flex-row IMG.img-responsive {
     margin: 45px 0px 0px 0px;
  }

  .flex-row IMG.img-responsive.no-top-margin {
     margin-top: 0px;
  }

}
.blue {
  background-color: #20284D;
  color: #FFFFFF;
  text-align: center;
  padding: 60px 0px 60px 0px;
}
.blue-bottom {
  margin-bottom: 0px;
  background-color: #20284D;
  color: #FFFFFF;
  padding: 30px;
}
.blue-bottom DIV.globe {
   background-image: url("shipito/fr/imgs/business/Globe.svg");
   background-position: center center;
   background-repeat: no-repeat;
   background-size: auto 90%;
}
.blue-bottom .row > DIV{
   min-height: 120px;
   display: flex;
   align-items: center;
   justify-content: center;
}
@media (min-width:768px) {
 .blue-bottom .row {
    flex-direction: row;
  }
}
@media (max-width:767px) {
 .blue-bottom .row {
    flex-direction: column;
  }
}

.blue .btn.btn-primary, .blue-bottom .btn.btn-primary {
  border: solid 1px #FFFFFF;
  min-width: 50%;
  margin: 30px 0px 30px 0px;
}
.blue A, .blue A:HOVER, .blue A:ACTIVE  {
  color: #FFFFFF;
}
@media (min-width:768px) {
  .blue P {
    text-align: center;
    padding-left: 30%;
    padding-right: 30%;
  }
  TABLE.bullets {
    margin: 0px 60px 0px 60px;
  }
}

TABLE.bullets TD {
  padding: 5px 15px 15px 15px;
}
TABLE.bullets TH, TABLE.bullets TD {
  vertical-align: top;
  font-weight: 300;
}
TABLE.bullets TH{
  padding: 0px 15px 30px 15px;
}

TABLE.bullets TD STRONG {
  color: #20284D;
}
TABLE.bullets TH DIV {
  display: inline-block;
  height: 30px;
  width: 30px;
  background-color: #20284D;
  color: #FFFFFF;
  font-size: 18px;
  text-align: center;
  line-height: 30px;
  vertical-align: middle;
  border-radius: 15px;
}

DIV#movie-div {
  width: 471px;
  height: 265px;
  padding-top: 25px;
  padding-bottom: 25px;
  background-image: url("shipito/fr/imgs/business/fulfill/VideoThumbnailBusiness2.svg");
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
}


DIV.play-btn {
    position: relative;
    z-index: 200;
    margin-top:115px;
    left: 50%;
    transform: translate(-50%,-50%);
    vertical-align:middle;
}
DIV.play-btn IMG { width: 55px; height: 55px;}
DIV#video-text { font-size:24px; margin-left:auto; margin-right: auto; width: 85%; color: #FFF;}

@media (max-width:768px) {
  .top-banner-inner H1 { margin: 0px 0px 10px 0px; }
  .top-banner-inner P { margin: 0px 0px 0px 0px; }
  DIV.play-btn IMG { width: 50px; height: 50px;}
  DIV#movie-div { width: 425px; height: 245px; }
  DIV#video-text { font-size: 18px; }
}

@media (max-width:767px) {
  .blue {
    padding: 30px 30px 30px 30px;
  }
  TABLE.bullets TH {
    padding: 0px 10px 30px 10px;
  }
  TABLE.bullets TD {
    padding: 5px 10px 15px 10px;
  }
  DIV#movie-div {
    margin-top: 0px;
    max-width: 100%;
    max-height: 200px;
    background-image
  }
  div.play-btn {
    margin-top: 80px;
  }
}
@media (max-width:540px) {
  .top-banner-inner H1 { margin: 30px 0px 10px 20px; }
  .top-banner-inner P { margin: 0px 0px 0px 20px; }
  DIV#movie-div {margin-left:auto; margin-right:auto;}
}
@media (max-width:430px) {
  DIV#movie-div { max-height: 220px; }
}
@media (min-width:912px) {
  .top-banner-inner H1 { margin: 0px 0px 10px 0px; }
  .top-banner-inner P { margin: 0px 0px 0px 0px; }
}

@media (min-width:768px) {
  .align-center {
    display:flex;
    align-items:center;
  }
  .row-center {
    position: relative;
    top: 50%;
    transform: translateY(-50%);
  }
}

</STYLE>

<DIV CLASS = "container-fluid top-banner-outer">
 <DIV CLASS = "container top-banner-inner">
   <DIV CLASS="row align-center row-center" STYLE="margin-left:0px; margin-right: 0px;">
     <DIV CLASS="col-md-6 col-sm-12" >
      <H1>Expédition à l'international pour les entreprises en plein essor </H1>
      <P>
       Lynia Delivery Express pour les Entreprises aide les entreprises à se développer à un niveau international grâce à leurs excellents outils et à leurs conseils d’experts à chaque étape du processus.
      </P>
     </DIV>
     <DIV CLASS="col-md-6 col-sm-12 hide-sm">
       <DIV CLASS="text-center" ID = "movie-div">
         <DIV CLASS="play-btn">
           <A href="#" onClick="return gaPopUpDisplay(this);">
       		<IMG SRC="https://www.shipito.com/imgs/home/play.svg"/>
           </A>
         </DIV>
       </DIV>
     </DIV>
   </DIV>
 </DIV>
</DIV>


<SECTION CLASS = "container hide-lg" STYLE="padding:0px;">
 <DIV CLASS="text-center" ID = "movie-div">
   <DIV CLASS="play-btn">
     <A href="#" onClick="return gaPopUpDisplay(this);">
		<IMG STYLE="width:35px;height:35px;" SRC="https://www.shipito.com/imgs/home/play.svg"/>
     </A>
   </DIV>
 </DIV>
</SECTION>

<SECTION CLASS = "container">
 <H2 CLASS = "section-title"><SPAN>Niveaux et frais d'abonnement</SPAN></H2>
 <P CLASS = "text-center">
  L'abonnement business de Lynia Delivery Express offre une tarification simple et transparente conçue pour s'adapter à votre entreprise. Chaque niveau offre des réductions généreuses sur les services essentiels dont vous avez besoin pour expédier des produits à l'international
 </P>
</SECTION>

<DIV CLASS = "container no-pad">
 <TABLE CLASS = "bus-plans">
  <THEAD>
   <TR>
    <TH CLASS = "hide-lg" WIDTH = "40%">Niveaux des Plans D'Affaires</TH>
    <TH CLASS = "hide-sm plan-selector" WIDTH = "40%">
     <FORM METHOD = "POST" ACTION = "https://www.shipito.com/fr/signup-form" NAME = "signupform">
<INPUT TYPE = "HIDDEN" NAME = "act" VALUE = "Customer../signup-form"/>
<INPUT TYPE = "HIDDEN" NAME = "cmscountry" VALUE = "us"/>
<INPUT TYPE = "HIDDEN" NAME = "cmslanguage" VALUE = "fr"/>
<INPUT TYPE = "HIDDEN" NAME = "postingpageurl" VALUE = "/fr/shipito-for-business"/>

     <TABLE CLASS = "select-plan">
      <TBODY>
       <TR>
        <TD>
         <STRONG><SMALL>$</SMALL>99<SMALL>/année</SMALL></STRONG>
         <SPAN><DIV CLASS = "radio"><LABEL><INPUT TYPE = "RADIO" NAME = "customer.registrationcustomertype" VALUE = "70" CLASS = "TEXT" onClick = "return formvalidator.formUpdated(this.form, this);" CHECKED><SPAN CLASS = "custom-radio-btn"></SPAN>Annuel</LABEL></DIV>
</SPAN>
        </TD>
        <TD CLASS = "or">
         ou
        </TD>
        <TD>
         <STRONG><SMALL>$</SMALL>12<SMALL>/mois</SMALL></STRONG>
         <SPAN><DIV CLASS = "radio"><LABEL><INPUT TYPE = "RADIO" NAME = "customer.registrationcustomertype" VALUE = "60" CLASS = "TEXT" onClick = "return formvalidator.formUpdated(this.form, this);"><SPAN CLASS = "custom-radio-btn"></SPAN>Mensuel</LABEL></DIV>
</SPAN>
        </TD>
       </TR>
      </TBODY>
      <TFOOT>
       <TR>
        <TD COLSPAN = "3" ALIGN = "CENTER"><BUTTON TYPE = "SUBMIT" CLASS = "btn btn-secondary btn-lg" TITLE = "SÉLECTIONNEZ">SÉLECTIONNEZ</BUTTON></TD>
       </TR>
      </TFOOT>
     </TABLE>
     </FORM>
    </TH>
    <TH CLASS = "standard" WIDTH = "15%">Standard</TH>
    <TH CLASS = "starter" WIDTH = "15%">Démarrage</TH>
    <TH CLASS = "growth" WIDTH = "15%">Croissance</TH>
    <TH CLASS = "enterprise" WIDTH = "15%">Entreprise</TH>
   </TR>
  </THEAD>
  <TBODY>
   <TR>
    <TH>Envois mensuels</TH>
    <TD>< 10</TD>
    <TD>10</TD>
    <TD>30</TD>
    <TD>50+</TD>
   </TR>
   <TR>
    <TH>Traitement</TH>
    <TD>$2.25</TD>
    <TD>$1.25</TD>
    <TD>$0.75</TD>
    <TD>GRATUIT</TD>
   </TR>
   <TR>
    <TH>Réduction sur l'envoi</TH>
    <TD>-</TD>
    <TD>5%</TD>
    <TD>7%</TD>
    <TD>10%</TD>
   </TR>
   <TR>
    <TH>Stockage gratuit</TH>
    <TD>45 jours</TD>
    <TD>45 jours</TD>
    <TD>60 jours</TD>
    <TD>90 jours</TD>
   </TR>
   <TR>
    <TH>Gestion des Retours</TH>
    <TD COLSPAN = "4">Inclus</TD>
   </TR>
   <TR>
    <TH>Choisir et Emballer</TH>
    <TD COLSPAN = "4">Inclus</TD>
   </TR>
   <TR>
    <TH>Accès API</TH>
    <TD COLSPAN = "4">Inclus</TD>
   </TR>
  </TBODY>
  <TFOOT CLASS = "hide-lg">
   <TR>
    <TD COLSPAN = "5">
     <FORM METHOD = "POST" ACTION = "https://www.shipito.com/fr/signup-form" NAME = "signupform">
<INPUT TYPE = "HIDDEN" NAME = "act" VALUE = "Customer../signup-form"/>
<INPUT TYPE = "HIDDEN" NAME = "cmscountry" VALUE = "us"/>
<INPUT TYPE = "HIDDEN" NAME = "cmslanguage" VALUE = "fr"/>
<INPUT TYPE = "HIDDEN" NAME = "postingpageurl" VALUE = "/fr/shipito-for-business"/>

      <TABLE CLASS = "select-plan">
       <TBODY>
        <TR>
         <TD>
          <STRONG><SMALL>$</SMALL>99<SMALL>/année</SMALL></STRONG>
          <SPAN><DIV CLASS = "radio"><LABEL><INPUT TYPE = "RADIO" NAME = "customer.registrationcustomertype" VALUE = "70" CLASS = "TEXT" onClick = "return formvalidator.formUpdated(this.form, this);" CHECKED><SPAN CLASS = "custom-radio-btn"></SPAN>Annuel</LABEL></DIV>
</SPAN>
         </TD>
         <TD CLASS = "or">
          ou
         </TD>
         <TD>
          <STRONG><SMALL>$</SMALL>12<SMALL>/mois</SMALL></STRONG>
          <SPAN><DIV CLASS = "radio"><LABEL><INPUT TYPE = "RADIO" NAME = "customer.registrationcustomertype" VALUE = "60" CLASS = "TEXT" onClick = "return formvalidator.formUpdated(this.form, this);"><SPAN CLASS = "custom-radio-btn"></SPAN>Mensuel</LABEL></DIV>
</SPAN>
         </TD>
        </TR>
       </TBODY>
       <TFOOT>
        <TR>
         <TD COLSPAN = "3" ALIGN = "CENTER"><BUTTON TYPE = "SUBMIT" CLASS = "btn btn-secondary btn-lg" TITLE = "SÉLECTIONNEZ">SÉLECTIONNEZ</BUTTON></TD>
        </TR>
       </TFOOT>
      </TABLE>
     </FORM>
    </TD>
   </TR>
  </TFOOT>
 </TABLE>
</DIV>

<SECTION CLASS = "container no-border">
 <H2 CLASS = "section-title"><SPAN>Expédition internationale simplifiée pour une livraison directe à vos clients</SPAN></H2>

 <P>
  Que vous commenciez seulement à envisager de vous développer à l'échelle mondiale ou que vous ayez besoin d'une solution plus rentable pour vos opérations actuelles, Lynia Delivery Express Business améliorera très vite vos revenus. Lynia Delivery Express, ça n'est pas juste un autre service d'expédition. C’est le premier de sa catégorie, offrant la plus haute technologie qui soit, un service client multilingue et une adaptation rapide aux nouveaux marchés. La mise en route ne prend que quelques minutes, vous pouvez ainsi vous concentrer sur ce qui compte le plus : la satisfaction de vos clients.
 </P>

 <P>
  Des dizaines d'années d'expérience, des sites d'entrepôt stratégiques et une technologie réactive placent Lynia Delivery Express en première place dans le domaine des services d'expédition à l'international et justifent les milliers d'entreprises dans le monde qui lui font confiance.
 </P>

</SECTION>

<SECTION CLASS = "container no-border" STYLE = "margin-bottom: 0px;">
 <H2 CLASS = "section-title"><SPAN>Des Solutions Logistiques Complètes pour Les Petites et Moyennes Entreprises</SPAN></H2>
 <P CLASS = "text-center">
  Nous offrons des services complets de logistique de tierce partie (3PL) conçus pour les petites et moyennes entreprises qui cherchent à simplifier et à réduire les coûts de leur processus d'exécution des commandes. Avec des taux d'expédition réduits, basés sur le volume, l'entreposage de l'inventaire, la gestion des retours, l'exécution de la cueillette et de l'emballage, et plus encore, un partenariat avec Lynia Delivery Express mettra votre entreprise sur la voie du succès dès le premier jour.
 </P>

 <DIV CLASS = "row flex-row">

  <DIV CLASS = "col-xs-12 col-md-4">
   <CENTER><IMG SRC = "shipito/fr/imgs/landing/verishop/Verishop_1.jpg" BORDER = "0" CLASS = "img-responsive"></CENTER>
   <H3>Expédition</H3>
   <P>
    Le moyen le plus rapide et le plus rentable d'expédier vos produits à l'international. Nous proposons des remises en fonction du volume, la consolidation des commandes, l'accès à plus de 20 transporteurs et services, et bien plus encore.
   </P>
   <DIV CLASS = "btn-container">
    <A href="#" CLASS = "btn btn-lg btn-secondary">Pour commencer</A></CMSLINK>
   </DIV>
  </DIV>

  <DIV CLASS = "col-xs-12 col-md-4">
   <CENTER><IMG SRC = "shipito/fr/imgs/landing/verishop/Verishop_2.jpg" BORDER = "0" CLASS = "img-responsive"></CENTER>
   <H3>Retours</H3>
   <P>
    Collecter et gérer les retours n'a jamais été aussi facile. Lynia Delivery Express automatise l'ensemble du processus, y compris les photos détaillées du contenu, l'inspection des dommages et la redirection des colis, afin que vous puissiez vous concentrer sur la gestion de votre entreprise.
   </P>
   <DIV CLASS = "btn-container">
    <A href="#" CLASS = "btn btn-lg btn-secondary">En savoir plus</A></CMSLINK>
   </DIV>
  </DIV>

  <DIV CLASS = "col-xs-12 col-md-4">
   <CENTER><IMG SRC = "shipito/fr/imgs/landing/verishop/Verishop_3.jpg" BORDER = "0" CLASS = "img-responsive"></CENTER>
   <H3>Exécution Des Commandes</H3>
   <P>
    Lynia Delivery Express est votre partenaire de choix pour la mise en œuvre d'une solution intégrée de traitement des commandes. Lorsque la précision est importante, vous pouvez compter sur nous pour exécuter vos commandes.
   </P>
   <DIV CLASS = "btn-container">
    <A href="#" CLASS = "btn btn-lg btn-secondary">En savoir plus</A></CMSLINK>
   </DIV>
  </DIV>

 </DIV>

 <DIV CLASS = "row flex-row">
  <DIV CLASS = "col-xs-12 col-md-6">
   <IMG SRC = "shipito/fr/imgs/landing/verishop/VerishopAPI%26Intergrations.svg" BORDER = "0" CLASS = "img-responsive no-top-margin">
  </DIV>
  <DIV CLASS = "col-xs-12 col-md-6 apis">
   <H3>Simplifier et Automatiser Vos Expéditions</H3>
   <H2>API & Intégrations</H2>
   <P STYLE = "margin-bottom: 0px;">
    Connectez votre site de commerce électronique à la meilleure solution d'expédition internationale. Tarifs d'expédition à la demande, gestion des commandes, etc.
   </P>

   <DIV CLASS = "btn-container">
    <A href="#" CLASS = "btn btn-lg btn-secondary">En savoir plus</A></CMSLINK>
   </DIV>
  </DIV>
 </DIV>
</SECTION>

<SECTION CLASS = "container">
 <H2 CLASS = "section-title"><SPAN>Comment Fonctionne Lynia Delivery Express pour Entreprise?</SPAN></H2>

 <DIV CLASS = "alternating">
  <DIV><IMG SRC = "shipito/fr/imgs/business/Business1.jpg" BORDER = "0"></DIV>
  <DIV CLASS = "txt dk-grey">
   <H3 CLASS = "circled-number"><SPAN>1</SPAN> Abonnez-vous</H3>
   <P>
    Lynia Delivery Express for Business s'adresse à toutes les tailles d'entreprises et à tous les secteurs. Inscrivez-vous simplement pour devenir membre pour obtenir un accès immédiat à nos quatre emplacements d'entrepôt, ainsi que les prix les plus avantageux de l'industrie et un service client inégalé.
Avec Lynia Delivery Express comme partenaire, la satisfaction de vos clients est garantie et ils feront une expérience qui ira bien au-delà de leurs attentes.
   </P>
  </DIV>
 </DIV>

 <DIV CLASS = "alternating">
  <DIV CLASS = "hide-lg"><IMG SRC = "shipito/fr/imgs/business/Business2.jpg" BORDER = "0"></DIV>
  <DIV CLASS = "txt lt-grey">
   <H3 CLASS = "circled-number"><SPAN>2</SPAN> Expédiez-nous vos produits</H3>
   <P>
    Vous pouvez choisir d'envoyer vos envois vers n'importe quel entrepôt Lynia Delivery Express en fonction de vos besoins. Nous pouvons stocker vos colis ou les expédier dès leur arrivée, c'est vous qui décidez. Notre entrepôt californien offre les tarifs les plus bas et les délais d'expédition les plus rapides que vous puissiez trouver. Notre entrepôt de l'Oregon propose des solutions hors taxes qui s'avèrent utiles lorsque vous travaillez avec des distributeurs tiers. Notre entrepôt en Autriche est parfait pour les services d'expédition rapides aux clients européens. Enfin, l'entrepôt du Japon est une excellente option pour ceux qui achètent et expédient des produits depuis le Japon.
   </P>
  </DIV>
  <DIV CLASS = "hide-sm"><IMG SRC = "shipito/fr/imgs/business/Business2.jpg" BORDER = "0"></DIV>
 </DIV>

 <DIV CLASS = "alternating">
  <DIV><IMG SRC = "shipito/fr/imgs/business/Business3.jpg" BORDER = "0"></DIV>
  <DIV CLASS = "txt dk-grey">
   <H3 CLASS = "circled-number"><SPAN>3</SPAN> Choisissez votre méthode d'envoi</H3>
   <P>
    Chez Lynia Delivery Express, nous suivons vos envois de A à Z. Notre technologie de pointe nous permet de gérer chaque étape du processus de manière proactive. Dès que vos colis arrivent, ils sont immédiatement scannés, photographiés et téléchargés sur votre compte. Il ne vous reste ensuite plus qu'à choisir la méthode d'expédition et les services supplémentaires dont vous pouvez avoir besoin, puis à payer. Nous proposons également plusieurs fonctions automatisées, tels que envois rapides, intégrations de sites internet, etc...
   </P>
  </DIV>
 </DIV>

</SECTION>

<SECTION CLASS = "container-fluid no-pad blue">
 <P>
  Rejoignez les milliers d'entreprises qui font confiance à Lynia Delivery Express pour tous leurs envois à l'international
 </P>
 <P>
  <A href="#" CLASS = "btn btn-primary btn-lg">COMMENCEZ DÈS AUJOURD'HUI</A>
 </P>
 <P>
  Ou e-mail <A HREF = "mailto:business@shipito.com">business@shipito.com</A>
 </P>
</SECTION>

<SECTION CLASS = "container">
 <H2 CLASS = "section-title"><SPAN>Avec Lynia Delivery Express pour les Entreprises, vous beneficiez</SPAN></H2>

 <TABLE CLASS = "bullets">
  <TR>
   <TH><DIV>1</DIV></TH>
   <TD>de l'accès à des transporteurs de renom tels que UPS, DHL, et bien d'autres encore</TD>
  </TR>
  <TR>
   <TH><DIV>2</DIV></TH>
   <TD>de multiples options et vitesses d'envoi</TD>
  </TR>
  <TR>
   <TH><DIV>3</DIV></TH>
   <TD>de réductions sur les services et les frais d'envoi</TD>
  </TR>
  <TR>
   <TH><DIV>4</DIV></TH>
   <TD>d'une industrie de pointe toujours en évolution</TD>
  </TR>
  <TR>
   <TH><DIV>5</DIV></TH>
   <TD>Équipe multilingue du service clientèle parlant couramment <strong>13 langues</strong></TD>
  <TR>
  <TR>
   <TH><DIV>6</TH>
   <TD>de dizaines d'années d'expérience dans le domaine de l'expédition à l'international</TD>
  </TR>
 </TABLE>
</SECTION>

<SECTION CLASS = "container">
 <DIV CLASS = "alternating">
  <DIV><IMG SRC = "shipito/fr/imgs/business/Business4.jpg" BORDER = "0"></DIV>
  <DIV CLASS = "txt dk-grey">
   <H3>Des solutions d'envois personnalisés</H3>
   <P>
    Lynia Delivery Express a l'habitude des demandes d'expédition personnalisées. Nous savons que chaque entreprise est unique. Associons-nous pour atteindre vos objectifs.
   </P>
   <P>
    <A href="#" TARGET = "_blank" CLASS = "btn btn-primary btn-lg">PLANIFIEZ VOS REGROUPEMENTS </A></CMSLINK>
   </P>
   <P>
    Ou e-mail <A HREF = "mailto:business@shipito.com">business@shipito.com</A>
   </P>
  </DIV>
 </DIV>
</SECTION>

<SECTION CLASS = "container-fluid blue-bottom">
 <DIV CLASS = "container">
  <DIV CLASS = "row">
   <DIV CLASS = "col-xs-12 col-sm-4 text-center"><DIV>Solutions d'envoi à l'international</DIV></DIV>
   <DIV CLASS = "col-xs-12 col-sm-4 text-center globe"><DIV>Croissance mondiale rapide</DIV></DIV>
   <DIV CLASS = "col-xs-12 col-sm-4 text-center"><DIV><A href="#" CLASS = "btn btn-primary btn-lg">COMMENCEZ DÈS AUJOURD'HUI</A></CMSLINK></DIV></DIV>
  </DIV>
 </DIV>
</SECTION>

<SCRIPT>
function gaPopUpDisplay(lnk)
{
  	var popup = '<DIV CLASS = \"modal popup fade\" ID = \"popup" role = \"dialog\">'
  		 + '	 <DIV CLASS = \"modal-dialog modal-lg\">'
  		 + '      <DIV CLASS = \"modal-content\" ID = \"popupcontent\">'
  		 + '  	  </DIV>'
  		 + '	 </DIV>'
  		 + '	</DIV>';
  	 if (!document.getElementById('popup'))
  		 $('body').append(popup);
  	 var loading = '	   <DIV CLASS = \"modal-body\">'
  		         + '	    <SPAN>'
  	             + '	     <I CLASS = \"fa fa-spinner fa-spin fa-3x fa-fw\"></I> '
  	             + 'Loading . . .'
  	             + '        </SPAN>'
  	             + '	   </DIV>'
  	             + '	   <DIV CLASS = \"modal-footer\">'
  	             + '        <BUTTON TYPE = \"button\" CLASS = \"btn btn-default\" data-dismiss = \"modal\">Close</BUTTON>'
  	             + '	   </DIV>';

  	   $('#popupcontent').html(loading);
       $('#popup').modal({backdrop: 'static', keyboard: false, show: true});
       $('#popupcontent').load(lnk.href, function( response, status, xhr ) {
      	  if ( status == "error" )
      	  {
      	    var msg = "<H1>ERROR:</H1> ";
      	    $( "#popupcontent" ).html( msg + xhr.status + " " + xhr.statusText);
      	  }
      	  });
      return false;
}
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
    $('#banner-container').load('/fr/banner-ads?pg=/shipito-for-business');
  }
});
</SCRIPT>
</BODY>

<!-- Mirrored from www.shipito.com/fr/shipito-for-business by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 13:44:16 GMT -->
</HTML>
<!--- Copyright 2024 GlobalAccess All Rights Reserved -->
<!--- Web Server 3088 -->

