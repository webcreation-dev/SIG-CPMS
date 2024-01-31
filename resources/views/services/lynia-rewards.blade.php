<!DOCTYPE HTML>
<HTML dir = "ltr" lang = "fr">

<!-- Mirrored from www.shipito.com/fr/shipito-rewards by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 13:43:43 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
@include('layouts.head-guest')

<BODY CLASS = "landing-page">
<DIV ID = "menu-filler"></DIV>
<A NAME = "page-top" ID = "page-top"></A>
@include('layouts.header-guest')

<DIV CLASS = "main-body">

<STYLE TYPE = "text/css">
.plan-price {
  padding-top: 20px;
}

.top-banner-outer
{
   background: linear-gradient(#777777, #828178);
   margin-bottom: 20px;
}

.top-banner-inner
{
   background-image: url("shipito/fr/imgs/pricing/MobileBanner.svg");
   background-position: right bottom;
}

.membership H2.heading {
  display: block;
  text-align: center;
  font-size: 30px;
  font-weight: 300;
  color: #000000;
  margin: 60px 0px 60px 0px;
}

@media (min-width:768px) {
  .top-banner-outer
  {
     height: 300px;
  }
  .top-banner-inner
  {
     height: 300px;
     padding-right: 450px;
  }
  html[dir="rtl"] .top-banner-inner
  {
     background-position: left bottom;
  }

  .plans-table-head .plan-button .btn {
     margin-bottom: 20px;
  }
  TH.plan-header {
     height: 62px;
  }
}

@media (min-width:992px) {
  .top-banner-inner
  {
     padding-right: 450px;
     background-size: auto 90%;
  }
  html[dir="rtl"] .top-banner-inner
  {
     padding-left: 450px;
     padding-right: 0px;
  }
}

@media (min-width:768px) and (max-width: 991px) {
  .top-banner-inner
  {
     padding-right: 40%;
     background-size: 40% auto;
  }
  html[dir="rtl"] .top-banner-inner
  {
     padding-left: 40%;
     padding-right: 0px;
  }
}

@media (max-width:767px) {
  .top-banner-inner {
    background-size: 90% auto;
  }
  .plans-header-sm-table .plan-price {
    line-height: 22px;
  }
  .white-arrow {
    margin-right: 10px;
    margin-left: -20px;
  }
 }
</STYLE>


<DIV CLASS = "container-fluid top-banner-outer">
 <DIV CLASS = "container top-banner-inner">
  <H1>Faites des économies avec premium. </H1>
  <P>Faites vos achats aux E.U. et faites vous livrer hors taxes. Économisez vos frais d’envoi en regroupant vos colis.
</P>
 </DIV>
</DIV>


<DIV CLASS = "container columns top-steps">

<DIV CLASS = "not-mobile">
  <DIV CLASS = "row">
	  <DIV CLASS = "col-xs-12 col-sm-4 text-center">
	   <IMG SRC = "shipito/fr/imgs/home/step1.svg" CLASS = "step-image img-responsive"/>
	  </DIV>
	  <DIV CLASS = "col-xs-12 col-sm-4 text-center">
	   <IMG SRC = "shipito/fr/imgs/home/step2.svg" CLASS = "step-image img-responsive"/>
	  </DIV>
	  <DIV CLASS = "col-xs-12 col-sm-4 text-center">
	   <IMG SRC = "shipito/fr/imgs/home/step3.svg" CLASS = "step-image img-responsive"/>
	  </DIV>
  </DIV>
  <DIV CLASS = "row">
	  <DIV CLASS = "col-xs-12 col-sm-4 text-center">
	   <DIV CLASS = "step-header">
	     <DIV> 1. Inscrivez-vous et obtenez une adresse aux États-Unis grâce à Lynia Delivery Express</DIV>
	   </DIV>
	  </DIV>
	  <DIV CLASS = "col-xs-12 col-sm-4 text-center">
	   <DIV CLASS = "step-header">
	     <DIV> 2. Achetez dans les boutiques américaines de votre choix et expédiez vos articles à votre nouvelle adresse aux États-Unis.</DIV>
	   </DIV>
	  </DIV>
	  <DIV CLASS = "col-xs-12 col-sm-4 text-center">
	   <DIV CLASS = "step-header">
	     <DIV> 3. Regroupez vos colis pour payer moins cher</DIV>
	   </DIV>
	  </DIV>
  </DIV>
  <DIV CLASS = "row">
	  <DIV CLASS = "col-xs-12 col-sm-4 text-center">
	    <DIV CLASS = "step-description light">Il s‘agit de votre adresse personnelle aux États-Unis. Sans frais d’inscription ou de configuration.    </DIV>
	  </DIV>
	  <DIV CLASS = "col-xs-12 col-sm-4 text-center middle-column">
	    <DIV CLASS = "step-description light">Utilisez votre adresse Lynia Delivery Express aux États-Unis comme adresse de livraison lors de votre commande.</DIV>
	  </DIV>
	  <DIV CLASS = "col-xs-12 col-sm-4 text-center">
	    <DIV CLASS = "step-description light">Achetez sur des sites internet différents et regroupez tous vos colis dans un même emballage pour économiser jusqu’à 80 % sur les frais d’expédition.</DIV>
	  </DIV>
  </DIV>
</DIV>

 <DIV CLASS = "row top-steps-row mobile-only">
  <DIV CLASS = "col-xs-12 col-sm-4 text-center">
   <DIV CLASS = "step-header">
     <DIV> 1. Inscrivez-vous et obtenez une adresse aux États-Unis grâce à Lynia Delivery Express</DIV>
   </DIV>

   <DIV CLASS = "step-description light">
     <DIV CLASS = "row mobile-only">
       <DIV CLASS="col-xs-6">
         <IMG SRC = "shipito/fr/imgs/home/step1.svg" WIDTH="190px" STYLE="margin-left:-30px;" CLASS="mobile-only"/>
       </DIV>
       <DIV CLASS="col-xs-6">
	    Il s‘agit de votre adresse personnelle aux États-Unis. Sans frais d’inscription ou de configuration.
       </DIV>
     </DIV>
   </DIV>
  </DIV>

  <DIV CLASS = "col-xs-12 col-sm-4 text-center middle-column">
   <DIV CLASS = "step-header">
     <DIV> 2. Achetez dans les boutiques américaines de votre choix et expédiez vos articles à votre nouvelle adresse aux États-Unis.</DIV>
   </DIV>

   <DIV CLASS = "step-description light">
     <DIV CLASS = "row mobile-only">
       <DIV CLASS="col-xs-6">
         <IMG SRC = "shipito/fr/imgs/home/step2.svg" WIDTH="190px" STYLE="margin-left:-30px;" CLASS="mobile-only"/>
       </DIV>
       <DIV CLASS="col-xs-6">
	    Utilisez votre adresse Lynia Delivery Express aux États-Unis comme adresse de livraison lors de votre commande.
       </DIV>
     </DIV>
   </DIV>
  </DIV>

  <DIV CLASS = "col-xs-12 col-sm-4 text-center">
   <DIV CLASS = "step-header">
     <DIV> 3. Regroupez vos colis pour payer moins cher</DIV>
   </DIV>

   <DIV CLASS = "step-description light">
     <DIV CLASS = "row mobile-only">
       <DIV CLASS="col-xs-6">
         <IMG SRC = "shipito/fr/imgs/home/step3.svg" WIDTH="190px" STYLE="margin-left:-37px;" CLASS="mobile-only"/>
       </DIV>
       <DIV CLASS="col-xs-6">
	    Achetez sur des sites internet différents et regroupez tous vos colis dans un même emballage pour économiser jusqu’à 80 % sur les frais d’expédition.
       </DIV>
     </DIV>
   </DIV>
  </DIV>
 </DIV>
</DIV>


<DIV CLASS = "container membership">
 <H2 CLASS = "heading">Les abonnements Lynia Delivery Express</H2>


 <DIV CLASS = "sticky-container hide-lg">
 <DIV CLASS = "sticky-header">
 <TABLE CLASS = "plans-header-sm-table hide-lg">
  <THEAD>
   <TR>
    <TH CLASS = "free">
     <DIV CLASS = "plan-type">GRATUIT</DIV>
     <DIV CLASS = "plan-price">$0</DIV>
     <DIV CLASS = "plan-description">&nbsp;</DIV>
     <DIV CLASS = "plan-button"><A href="#" CLASS = "btn sign-up-btn"><font size="-5">ABONNEMENT</font></A></DIV>
    </TH>
    <TH CLASS = "monthly">
     <DIV CLASS = "plan-type">Premium Mensuel</DIV>
     <DIV CLASS = "plan-price">$10<SMALL>/mois</SMALL></DIV>
     <DIV CLASS = "plan-description">Facturation Mensuelle</DIV>
     <DIV CLASS = "plan-button"><A href="#" CLASS = "btn sign-up-btn"><font size="-5">ABONNEMENT</font></A></DIV>
    </TH>
    <TH CLASS = "annual">
     <DIV CLASS = "plan-type">Premium Annuel<BR><SMALL>Meilleure Valeur!</SMALL></DIV>
     <DIV CLASS = "plan-price">$60<SMALL>/An.</SMALL></DIV>
     <DIV CLASS = "plan-description">Facturation Annuelle</DIV>
     <DIV CLASS = "plan-button"><A href="#" CLASS = "btn sign-up-btn"><font size="-5">ABONNEMENT</font></A></DIV>
    </TH>
   </TR>
  </THEAD>
 </TABLE>
  <TABLE CLASS = "plans-table-sm" STYLE="margin-bottom:0px;border-bottom:1px solid #ddd;">
  <THEAD>
   <TR>
     <TD COLSPAN = "4" CLASS = "header-1 text-center"><H3 STYLE = "margin-bottom: 30px;">Caractéristiques</H3></TD>
   </TR>
   <TR>
    <TH CLASS = "header-2 wide" STYLE = "width:58%; padding-left:10px;">
    Services Lynia Delivery Express
    </TH>
    <TH CLASS = "header-2 narrow" STYLE = "width:14%;">
    GRATUIT
    </TH>
    <TH CLASS = "header-2" COLSPAN = "2" STYLE = "width: 28%;">
    Prime (Premium)
    <DIV CLASS = "row">
     <DIV CLASS = "col-xs-6 header-3 monthly"><BR/><BR/>Mensuel</DIV>
     <DIV CLASS = "col-xs-6 header-3 premium"><BR/><BR/>Annuel</DIV>
    </DIV>
    </TH>
   </TR>
   </THEAD>
   <TBODY>
   <TR>
     <TD CLASS = "wide" STYLE="padding-left:10px;width: 58%;">Prestations de service</TD>
     <TD CLASS = "narrow text-center" STYLE = "width:14%;">Détaillant</TD>
     <TD CLASS = "text-center" COLSPAN = "2" STYLE = "width:28%; border-left: 1px solid #DDD; padding-left:0px; padding-right: 0px;">Soldé</TD>
   </TR>
   </TBODY>
 </TABLE>
 </DIV>
  <TABLE CLASS = "plans-table-sm">
   <TBODY>
    <TR>
       <TD CLASS = "wide">Adresse de livraison américaine gratuite </TD>
       <TD CLASS = "narrow border-right checkmark"></TD>
       <TD CLASS = "narrow border-right checkmark"></TD>
       <TD CLASS = "narrow checkmark"></TD>
     </TR>
     <TR>
       <TD CLASS = "wide">Adresse de livraison américaine gratuite</TD>
       <TD CLASS = "narrow border-right checkmark"></TD>
       <TD CLASS = "narrow border-right checkmark"></TD>
       <TD CLASS = "narrow checkmark"></TD>
     </TR>
     <TR>
       <TD CLASS = "wide">Adresse de livraison gratuite au Japon</TD>
       <TD CLASS = "narrow border-right checkmark"></TD>
       <TD CLASS = "narrow border-right checkmark"></TD>
       <TD CLASS = "narrow checkmark"></TD>
     </TR>
     <TR>
       <TD CLASS = "wide">Regrouper les Colis</TD>
       <TD CLASS = "narrow border-right checkmark"></TD>
       <TD CLASS = "narrow border-right checkmark"></TD>
       <TD CLASS = "narrow checkmark"></TD>
     </TR>
     <TR>
       <TD CLASS = "wide">Aide au client par email et par chat</TD>
       <TD CLASS = "narrow border-right checkmark"></TD>
       <TD CLASS = "narrow border-right checkmark"></TD>
       <TD CLASS = "narrow checkmark"></TD>
     </TR>
     <TR>
       <TD CLASS = "wide">Achat exempt des taxes de vente</TD>
       <TD CLASS = "narrow border-right nocheckmark"></TD>
       <TD CLASS = "narrow border-right checkmark"></TD>
       <TD CLASS = "narrow checkmark"></TD>
     </TR>
     <TR>
       <TD CLASS = "wide">Soutien téléphonique <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Les membres platinium et diamond bénéficient d’une ligne téléphonique privilégiée pour parler à un représentant de l’entrepôt pendant les heures d’ouverture au sujet de toutes questions concernant leur compte. ."><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></TD>
       <TD CLASS = "narrow border-right nocheckmark"></TD>
       <TD CLASS = "narrow border-right checkmark"></TD>
       <TD CLASS = "narrow checkmark"></TD>
     </TR>
     <TR>
       <TD CLASS = "wide background-blue">
         <DIV STYLE = "position: relative;">
           <DIV CLASS = "rewards-blue" STYLE="padding:0px;">
             Liste des récompenses des abonnés Lynia Delivery Express
           </DIV>
           <DIV CLASS = "btn-new">
             <SPAN><A ID = "rewards-anchor" HREF = "#rewards"><I CLASS = "white-arrow icon-arrow-down"></I></A></SPAN><SPAN><A HREF = "#rewards" CLASS = "btn btn-secondary btn-sm btn-plan">Nouveau</A></SPAN>
           </DIV>
         </DIV>
       </TD>
       <TD CLASS = "narrow border-right nocheckmark"></TD>
       <TD CLASS = "narrow border-right nocheckmark"></TD>
       <TD CLASS = "narrow checkmark"></TD>
     </TR>
     <TR>
       <TD CLASS = "wide">Service gant blancs* <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Les membres platinium et diamond bénéficient d’un gardien priviligié de leur compte, au sein de chaque entrepôt, chargé de vérifier la parfaite réalisation de toutes les demandes. "><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></TD>
       <TD CLASS = "narrow border-right nocheckmark"></TD>
       <TD CLASS = "narrow border-right nocheckmark"></TD>
       <TD CLASS = "narrow checkmark"></TD>
     </TR>
     <TR>
       <TD CLASS = "wide td-last">Stockage de colis gratuit</TD>
       <TD CLASS = "narrow border-right text-center td-last" STYLE = "vertical-align:top;">7 jours</TD>
       <TD CLASS = "narrow border-right text-center td-last" STYLE = "vertical-align:top;">45 jours</TD>
       <TD CLASS = "narrow text-center td-last" STYLE = "vertical-align:top;">Jusqu’à 60 jours</TD>
     </TR>
   </TBODY>
   </TABLE>
 </DIV>



<DIV CLASS = "sticky-container">
 <DIV CLASS = "sticky-header">
<TABLE CLASS = "table table-bordered plans-table-head hide-sm" STYLE = "border-bottom: none; margin-bottom: 0px;">
  <THEAD>
   <TR>
    <TH CLASS = "plans-header">Des plans</TH>
    <TH CLASS = "free">
     <DIV CLASS = "plan-type">GRATUIT</DIV>
     <DIV CLASS = "plan-price">$0</DIV>
     <DIV CLASS = "plan-description">&nbsp;</DIV>
     <DIV CLASS = "plan-button"><A href="#" CLASS = "btn">Abonnement <br> Gratuit</A></DIV>
    </TH>
    <TH CLASS = "monthly">
     <DIV CLASS = "plan-type">Premium Mensuel</DIV>
     <DIV CLASS = "plan-price">$10<SMALL>/mois</SMALL></DIV>
     <DIV CLASS = "plan-description">Facturation Mensuelle</DIV>
     <DIV CLASS = "plan-button"><A href="#" CLASS = "btn">Abonnement  <br> Premium</A></DIV>
    </TH>
    <TH CLASS = "annual">
     <DIV CLASS = "plan-type">Premium Annuel<BR><SMALL>Meilleure Valeur!</SMALL></DIV>
     <DIV CLASS = "plan-price">$60<SMALL>/An.</SMALL></DIV>
     <DIV CLASS = "plan-description">Facturation Annuelle</DIV>
     <DIV CLASS = "plan-button"><A href="#" CLASS = "btn">Abonnement  <br> Premium</A></DIV>
    </TH>
   </TR>
   <TR>
    <TH CLASS = "plan-header text-left">Prestations de service</TH>
    <TH CLASS = "plan-header">GRATUIT</TH>
    <TH CLASS = "plan-header" COLSPAN = "2">Prime (Premium)</TH>
   </TR>
  </THEAD>
  </TABLE>
  </DIV>

  <TABLE CLASS = "table table-bordered plans-table hide-sm" STYLE = "border-top: none; margin-top: 0px;">
  <TBODY>
   <TR>
    <TD>Adresse de livraison américaine gratuite </TD>
    <TD CLASS = "checkmark"></TD>
    <TD CLASS = "checkmark"></TD>
    <TD CLASS = "checkmark"></TD>
   </TR>
   <TR>
    <TD>Adresse américaine gratuite</TD>
    <TD CLASS = "checkmark"></TD>
    <TD CLASS = "checkmark"></TD>
    <TD CLASS = "checkmark"></TD>
   </TR>
   <TR>
    <TD>Adresse de livraison gratuite au Japon</TD>
    <TD CLASS = "checkmark"></TD>
    <TD CLASS = "checkmark"></TD>
    <TD CLASS = "checkmark"></TD>
   </TR>

   <TR>
    <TD>Regrouper les Colis</TD>
    <TD CLASS = "checkmark"></TD>
    <TD CLASS = "checkmark"></TD>
    <TD CLASS = "checkmark"></TD>
   </TR>
   <TR>
    <TD>Aide au client par email et par chat</TD>
    <TD CLASS = "checkmark"></TD>
    <TD CLASS = "checkmark"></TD>
    <TD CLASS = "checkmark"></TD>
   </TR>
   <TR>
    <TD>Achat exempt des taxes de vente</TD>
    <TD CLASS = "nocheckmark"></TD>
    <TD CLASS = "checkmark"></TD>
    <TD CLASS = "checkmark"></TD>
   </TR>
   <TR>
    <TD>Soutien téléphonique <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Les membres platinium et diamond bénéficient d’une ligne téléphonique privilégiée pour parler à un représentant de l’entrepôt pendant les heures d’ouverture au sujet de toutes questions concernant leur compte. ."><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></TD>
    <TD CLASS = "nocheckmark"></TD>
    <TD CLASS = "checkmark"></TD>
    <TD CLASS = "checkmark"></TD>
   </TR>
   <TR>
    <TD>Liste des récompenses des abonnés Lynia Delivery Express</TD>
    <TD CLASS = "nocheckmark"></TD>
    <TD CLASS = "nocheckmark"></TD>
    <TD CLASS = "checkmark"></TD>
   </TR>
   <TR>
    <TD>Service gant blancs* <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Les membres platinium et diamond bénéficient d’un gardien priviligié de leur compte, au sein de chaque entrepôt, chargé de vérifier la parfaite réalisation de toutes les demandes. "><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></TD>
    <TD CLASS = "nocheckmark"></TD>
    <TD CLASS = "nocheckmark"></TD>
    <TD CLASS = "checkmark"></TD>
   </TR>
   <TR>
    <TD>Stockage de colis gratuit</TD>
    <TD STYLE = "text-align:center;">7 jours</TD>
    <TD STYLE = "text-align:center;">45 jours</TD>
    <TD STYLE = "text-align:center;">Jusqu’à 60 jours</TD>
   </TR>
  </TBODY>
 </TABLE>
 </DIV>

</DIV>

<DIV CLASS = "container">
<A ID = "rewards"></A>
<H2 CLASS = "section-title hide-sm"
 STYLE = "margin-top:30px; margin-bottom:30px;">
 <SPAN>Récompenses des abonnés Lynia Delivery Express</SPAN>
</H2>

 <H3 CLASS = "mobile-title hide-lg text-center">Récompenses des abonnés Lynia Delivery Express</H3>
 <DIV CLASS = "text-center">
  <DIV CLASS = "row">
   <DIV CLASS = "col-xs-12 hide-sm text-center">
    <A href="#" CLASS = "btn btn-secondary get-premium-button">Abonnement  <br> Premium</A>
   </DIV>
   <DIV CLASS = "col-xs-12 hide-lg text-center">
    <A href="#" CLASS = "btn btn-secondary get-premium-button">Abonnement  <br> Premium</A>
   </DIV>
  </DIV>
 </DIV>
</DIV>

<DIV CLASS = "container reward-points">

  <DIV CLASS = "hide-sm">
   <DIV CLASS = "sticky-container">
    <DIV CLASS = "sticky-header">
    <TABLE CLASS = "table table-bordered rewards-table-head">
    <THEAD>
     <TR>
       <TH CLASS = "rewards-header">Niveaux de récompense</TH>
       <TH CLASS = "rewards-level" ID = "level-standard">Standard</TH>
       <TH CLASS = "rewards-level" ID = "level-silver">Argent</TH>
       <TH CLASS = "rewards-level" ID = "level-gold">Or</TH>
       <TH CLASS = "rewards-level" ID = "level-platinum">PLATINE</TH>
       <TH CLASS = "rewards-level" ID = "level-diamond"><I CLASS = "fa fa-star"/></I>&nbsp;&nbsp;Diamant</TH>
     </TR>
    </THEAD>
    </TABLE>
    </DIV>
 <TABLE CLASS = "table table-bordered rewards-table">
   <TBODY>
   <TR>
     <TH CLASS = "r1">Points requis <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Les points s’accumulent grâce aux frais d’expédition et aux références d‘amis. Une fois les critères de récompense atteints, ces points vous font gagner des avantages."><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></TH>
     <TD CLASS = "r1 nocheckmark"></TD>
     <TD CLASS = "r1">10</TD>
     <TD CLASS = "r1">20</TD>
     <TD CLASS = "r1">30</TD>
     <TD CLASS = "r1">100</TD>
   </TR>
   <TR>
     <TH>Aide au client par email et par chat</TH>
     <TD CLASS = "checkmark"></TD>
     <TD CLASS = "checkmark"></TD>
     <TD CLASS = "checkmark"></TD>
     <TD CLASS = "checkmark"></TD>
     <TD CLASS = "checkmark"></TD>
   </TR>
   <TR>
     <TH>Soutien téléphonique <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Les membres platinium et diamond bénéficient d’une ligne téléphonique privilégiée pour parler à un représentant de l’entrepôt pendant les heures d’ouverture au sujet de toutes questions concernant leur compte. ."><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></TH>
     <TD CLASS = "checkmark"></TD>
     <TD CLASS = "checkmark"></TD>
     <TD CLASS = "checkmark"></TD>
     <TD CLASS = "checkmark"></TD>
     <TD CLASS = "checkmark"></TD>
   </TR>
   <TR>
     <TH>Service gant blancs* <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Les membres platinium et diamond bénéficient d’un gardien priviligié de leur compte, au sein de chaque entrepôt, chargé de vérifier la parfaite réalisation de toutes les demandes. "><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></TH>
     <TD CLASS = "nocheckmark"></TD>
     <TD CLASS = "nocheckmark"></TD>
     <TD CLASS = "nocheckmark"></TD>
     <TD CLASS = "checkmark"></TD>
     <TD CLASS = "checkmark"></TD>
   </TR>
   <TR>
     <TH>Services (Regroupement, Photos, etc.)</TH>
     <TD>Soldé</TD>
     <TD>Soldé</TD>
     <TD>Soldé</TD>
     <TD>Soldé</TD>
     <TD>Soldé</TD>
   </TR>
   <TR>
     <TH>Entrepôt Tualatin en Oregon (Hors taxes)</TH>
     <TD CLASS = "checkmark"></TD>
     <TD CLASS = "checkmark"></TD>
     <TD CLASS = "checkmark"></TD>
     <TD CLASS = "checkmark"></TD>
     <TD CLASS = "checkmark"></TD>
   </TR>
   <TR>
     <TH>Avantage gratuit 1 <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Choisissez des réductions de frais d’envoi, de traitement, ou de services spéciaux."><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></TH>
     <TD CLASS = "nocheckmark"></TD>
     <TD CLASS = "checkmark"></TD>
     <TD CLASS = "checkmark"></TD>
     <TD CLASS = "checkmark"></TD>
     <TD CLASS = "checkmark"></TD>
   </TR>
   <TR>
     <TH>Avantage gratuit 2 <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Choisissez des réductions de frais d’envoi, de traitement, ou de services spéciaux."><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></TH>
     <TD CLASS = "nocheckmark"></TD>
     <TD CLASS = "nocheckmark"></TD>
     <TD CLASS = "checkmark"></TD>
     <TD CLASS = "checkmark"></TD>
     <TD CLASS = "checkmark"></TD>
   </TR>
   <TR>
     <TH>Avantage gratuit 3 <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Choisissez des réductions de frais d’envoi, de traitement, ou de services spéciaux."><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></TH>
     <TD CLASS = "nocheckmark"></TD>
     <TD CLASS = "nocheckmark"></TD>
     <TD CLASS = "nocheckmark"></TD>
     <TD CLASS = "checkmark"></TD>
     <TD CLASS = "checkmark"></TD>
   </TR>
   <TR>
     <TH>5% de réduction de frais d'envois**</TH>
     <TD CLASS = "nocheckmark"></TD>
     <TD CLASS = "nocheckmark"></TD>
     <TD CLASS = "nocheckmark"></TD>
     <TD CLASS = "nocheckmark"></TD>
     <TD CLASS = "checkmark"></TD>
   </TR>
   <TR>
     <TH>Stockage</TH>
     <TD>45 jours</TD>
     <TD>45 jours</TD>
     <TD>45 jours</TD>
     <TD>60 jours</TD>
     <TD>60 jours</TD>
     </TR>
     </TBODY>
    </TABLE>
    </DIV>
    <DIV CLASS = "discount-msg" STYLE = "margin-bottom: 15px;">*Le service gants blancs de Lynia Delivery Express est consacré à nos meilleurs clients. Munis d‘un numéro de téléphone et d‘un code d‘accès spéciaux, les abonnés annuels Platinum et Diamond Premium peuvent communiquer directement avec le superviseur de l‘entrepôt. Le superviseur s’assurera personnellement que le paquet reçoit bien tous les services demandés garantissant ainsi un service parfait. Le superviseur sera votre personne de confiance pour l‘exécution de toutes vos demandes de services et d‘envois.</DIV>
    <DIV CLASS = "discount-msg">**Les abonnés Diamond reçoivent 5% de réduction sur leurs envois, à l‘exception des envois en air postal économique et des ePaquet.</DIV>
     <TABLE CLASS = "table points-table">
 <THEAD>
  <TR>
    <TH COLSPAN="7" CLASS = "points-header">
    Gagner des points de fidélité, c’est facile! Voici comment :
    </TH>
  </TR>
 </THEAD>
 <TBODY>
 <TR>
   <TH CLASS = "points-header">points gagnés</TH>
   <TD CLASS = "point-cell points">1</TD>
   <TD CLASS = "point-cell points">1</TD>
   <TD CLASS = "point-cell points">0.5</TD>
   <TD CLASS = "point-cell points">0.5</TD>
   <TD CLASS = "point-cell points">1</TD>
   <TD CLASS = "point-cell points">1</TD>
 </TR>
 <TR>
   <TD>&nbsp;</TD>
   <TD CLASS = "points-img"><IMG SRC = "shipito/fr/imgs/rewards/icons/AnnualMembership.svg" BORDER = "0" CLASS = "img-responsive points-img"></TD>
   <TD CLASS = "points-img"><IMG SRC = "shipito/fr/imgs/rewards/icons/largepackage.svg" BORDER = "0" CLASS = "img-responsive points-img"></TD>
   <TD CLASS = "points-img"><IMG SRC = "shipito/fr/imgs/rewards/icons/smallpackage.svg" BORDER = "0" CLASS = "img-responsive points-img"></TD>
   <TD CLASS = "points-img"><IMG SRC = "shipito/fr/imgs/rewards/icons/Service%202.svg" BORDER = "0" CLASS = "img-responsive points-img"></TD>
   <TD CLASS = "points-img"><IMG SRC = "shipito/fr/imgs/rewards/icons/ReferAFriend1.svg" BORDER = "0" CLASS = "img-responsive points-img"></TD>
   <TD CLASS = "points-img"><IMG SRC = "shipito/fr/imgs/rewards/icons/ReferAFriend2.svg" BORDER = "0" CLASS = "img-responsive points-img"></TD>
 </TR>
 <TR>
   <TH CLASS = "points-header" STYLE="vertical-align:middle;padding:0px 0px 40px 0px;">Prestations de service</TH>
   <TD CLASS = "points-desc">Abonnement Annuel</TD>
   <TD CLASS = "points-desc">Expédition d‘un colis  > 2,268 kg</TD>
   <TD CLASS = "points-desc">Expédition d‘un colis < 2,268 kg</TD>
   <TD CLASS = "points-desc">Achat Assisté</TD>
   <TD CLASS = "points-desc">Parrainage d‘un ami pour l’expédition de son 1<sup>er</sup> colis</TD>
   <TD CLASS = "points-desc desc-right">Parrainage d‘un ami pour un abonnement premium annuel </TD>
 </TR>
 </TBODY>
 </TABLE>
  </DIV>
</DIV>

<DIV CLASS = "hide-lg container reward-points">
    <TABLE CLASS = "rewards-menu">
      <THEAD>
      <TR>
        <TD ID = "_1" CLASS = "reward-select reward-selected">Standard</TD>
        <TD ID = "_2" CLASS = "reward-select">Argent</TD>
        <TD ID = "_3" CLASS = "reward-select">Or</TD>
        <TD ID = "_4" CLASS = "reward-select">PLATINE</TD>
        <TD ID = "_5" CLASS = "reward-select"><I CLASS = "fa fa-star"></I>&nbsp;Diamant</TD>
      </THEAD>
    </TABLE>
    <DIV ID = "reward-cards">
      <DIV CLASS = "reward-card-filler">&nbsp;</DIV>
      <DIV ID = "card_1" CLASS = "reward-card">
        <DIV CLASS = "reward-card-header" ID = "card_standard">Standard</DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Points requis <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Les points s’accumulent grâce aux frais d’expédition et aux références d‘amis. Une fois les critères de récompense atteints, ces points vous font gagner des avantages."><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></DIV>
          <DIV CLASS = "col-xs-4 nocheckmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Aide au client par email et par chat</DIV>
          <DIV CLASS = "col-xs-4 checkmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Soutien téléphonique <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Les membres platinium et diamond bénéficient d’une ligne téléphonique privilégiée pour parler à un représentant de l’entrepôt pendant les heures d’ouverture au sujet de toutes questions concernant leur compte. ."><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></DIV>
          <DIV CLASS = "col-xs-4 nocheckmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Service gant blancs <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Les membres platinium et diamond bénéficient d’un gardien priviligié de leur compte, au sein de chaque entrepôt, chargé de vérifier la parfaite réalisation de toutes les demandes. "><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></DIV>
          <DIV CLASS = "col-xs-4 nocheckmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Services (Regroupement, Photos, etc.)</DIV>
          <DIV CLASS = "col-xs-4 reward-info">Soldé</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Entrepôt Tualatin en Oregon (Hors taxes)</DIV>
          <DIV CLASS = "col-xs-4 checkmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Avantage gratuit 1 <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Choisissez des réductions de frais d’envoi, de traitement, ou de services spéciaux."><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></DIV>
          <DIV CLASS = "col-xs-4 nocheckmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Avantage gratuit 2 <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Choisissez des réductions de frais d’envoi, de traitement, ou de services spéciaux."><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></DIV>
          <DIV CLASS = "col-xs-4 nocheckmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Avantage gratuit 3 <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Choisissez des réductions de frais d’envoi, de traitement, ou de services spéciaux."><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></DIV>
          <DIV CLASS = "col-xs-4 nocheckmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">5% de réduction de frais d'envois**</DIV>
          <DIV CLASS = "col-xs-4 nocheckmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc last">Stockage</DIV>
          <DIV CLASS = "col-xs-4 reward-info last">45 jours</DIV>
        </DIV>
      </DIV>

      <DIV ID = "card_2" CLASS = "reward-card">
        <DIV CLASS = "reward-card-header" ID = "card_silver">Argent </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Points requis <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Les points s’accumulent grâce aux frais d’expédition et aux références d‘amis. Une fois les critères de récompense atteints, ces points vous font gagner des avantages."><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></DIV>
          <DIV CLASS = "col-xs-4 reward-info">10</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Aide au client par email et par chat</DIV>
          <DIV CLASS = "col-xs-4 checkmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Soutien téléphonique <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Les membres platinium et diamond bénéficient d’une ligne téléphonique privilégiée pour parler à un représentant de l’entrepôt pendant les heures d’ouverture au sujet de toutes questions concernant leur compte. ."><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></DIV>
          <DIV CLASS = "col-xs-4 checkmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Service gant blancs <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Les membres platinium et diamond bénéficient d’un gardien priviligié de leur compte, au sein de chaque entrepôt, chargé de vérifier la parfaite réalisation de toutes les demandes. "><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></DIV>
          <DIV CLASS = "col-xs-4 nocheckmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Services (Regroupement, Photos, etc.)</DIV>
          <DIV CLASS = "col-xs-4 reward-info">Soldé</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Entrepôt Tualatin en Oregon (Hors taxes)</DIV>
          <DIV CLASS = "col-xs-4 checkmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Avantage gratuit 1 <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Choisissez des réductions de frais d’envoi, de traitement, ou de services spéciaux."><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></DIV>
          <DIV CLASS = "col-xs-4 checkmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Avantage gratuit 2 <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Choisissez des réductions de frais d’envoi, de traitement, ou de services spéciaux."><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></DIV>
          <DIV CLASS = "col-xs-4 nocheckmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Avantage gratuit 3 <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Choisissez des réductions de frais d’envoi, de traitement, ou de services spéciaux."><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></DIV>
          <DIV CLASS = "col-xs-4 nocheckmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">5% de réduction de frais d'envois**</DIV>
          <DIV CLASS = "col-xs-4 nocheckmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc last">Stockage</DIV>
          <DIV CLASS = "col-xs-4 reward-info last">45 jours</DIV>
        </DIV>
      </DIV>

      <DIV ID = "card_3" CLASS = "reward-card">
        <DIV CLASS = "reward-card-header" ID = "card_gold">Or</DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Points requis <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Les points s’accumulent grâce aux frais d’expédition et aux références d‘amis. Une fois les critères de récompense atteints, ces points vous font gagner des avantages."><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></DIV>
          <DIV CLASS = "col-xs-4 reward-info">20</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Aide au client par email et par chat</DIV>
          <DIV CLASS = "col-xs-4 checkmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Soutien téléphonique <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Les membres platinium et diamond bénéficient d’une ligne téléphonique privilégiée pour parler à un représentant de l’entrepôt pendant les heures d’ouverture au sujet de toutes questions concernant leur compte. ."><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></DIV>
          <DIV CLASS = "col-xs-4 checkmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Service gant blancs <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Les membres platinium et diamond bénéficient d’un gardien priviligié de leur compte, au sein de chaque entrepôt, chargé de vérifier la parfaite réalisation de toutes les demandes. "><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></DIV>
          <DIV CLASS = "col-xs-4 nocheckmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Services (Regroupement, Photos, etc.)</DIV>
          <DIV CLASS = "col-xs-4 reward-info">Soldé</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Entrepôt Tualatin en Oregon (Hors taxes)</DIV>
          <DIV CLASS = "col-xs-4 checkmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Avantage gratuit 1 <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Choisissez des réductions de frais d’envoi, de traitement, ou de services spéciaux."><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></DIV>
          <DIV CLASS = "col-xs-4 nocheckmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Avantage gratuit 2 <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Choisissez des réductions de frais d’envoi, de traitement, ou de services spéciaux."><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></DIV>
          <DIV CLASS = "col-xs-4 checkmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Avantage gratuit 3 <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Choisissez des réductions de frais d’envoi, de traitement, ou de services spéciaux."><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></DIV>
          <DIV CLASS = "col-xs-4 nocheckmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">5% de réduction de frais d'envois**</DIV>
          <DIV CLASS = "col-xs-4 nocheckmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc last">Stockage</DIV>
          <DIV CLASS = "col-xs-4 reward-info last">45 jours</DIV>
        </DIV>
      </DIV>

      <DIV ID = "card_4" CLASS = "reward-card">
        <DIV CLASS = "reward-card-header" ID = "card_platinum">PLATINE</DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Points requis <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Les points s’accumulent grâce aux frais d’expédition et aux références d‘amis. Une fois les critères de récompense atteints, ces points vous font gagner des avantages."><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></DIV>
          <DIV CLASS = "col-xs-4 reward-info">30</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Aide au client par email et par chat</DIV>
          <DIV CLASS = "col-xs-4 checkmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Soutien téléphonique <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Les membres platinium et diamond bénéficient d’une ligne téléphonique privilégiée pour parler à un représentant de l’entrepôt pendant les heures d’ouverture au sujet de toutes questions concernant leur compte. ."><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></DIV>
          <DIV CLASS = "col-xs-4 checkmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Service gant blancs <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Les membres platinium et diamond bénéficient d’un gardien priviligié de leur compte, au sein de chaque entrepôt, chargé de vérifier la parfaite réalisation de toutes les demandes. "><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></DIV>
          <DIV CLASS = "col-xs-4 checkmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Services (Regroupement, Photos, etc.)</DIV>
          <DIV CLASS = "col-xs-4 reward-info">Soldé</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Entrepôt Tualatin en Oregon (Hors taxes)</DIV>
          <DIV CLASS = "col-xs-4 checkmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Avantage gratuit 1 <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Choisissez des réductions de frais d’envoi, de traitement, ou de services spéciaux."><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></DIV>
          <DIV CLASS = "col-xs-4 checkmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Avantage gratuit 2 <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Choisissez des réductions de frais d’envoi, de traitement, ou de services spéciaux."><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></DIV>
          <DIV CLASS = "col-xs-4 checkmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Avantage gratuit 3 <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Choisissez des réductions de frais d’envoi, de traitement, ou de services spéciaux."><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></DIV>
          <DIV CLASS = "col-xs-4 checkmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">5% de réduction de frais d'envois**</DIV>
          <DIV CLASS = "col-xs-4 nocheckmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc last">Stockage</DIV>
          <DIV CLASS = "col-xs-4 reward-info last">60 jours</DIV>
        </DIV>
      </DIV>

      <DIV ID = "card_5" CLASS = "reward-card">
        <DIV CLASS = "reward-card-header" ID = "card_diamond"><I CLASS = "fa fa-star"></I> Diamant</DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Points requis <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Les points s’accumulent grâce aux frais d’expédition et aux références d‘amis. Une fois les critères de récompense atteints, ces points vous font gagner des avantages."><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></DIV>
          <DIV CLASS = "col-xs-4 reward-info">100</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Aide au client par email et par chat</DIV>
          <DIV CLASS = "col-xs-4 checkmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Soutien téléphonique <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Les membres platinium et diamond bénéficient d’une ligne téléphonique privilégiée pour parler à un représentant de l’entrepôt pendant les heures d’ouverture au sujet de toutes questions concernant leur compte. ."><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></DIV>
          <DIV CLASS = "col-xs-4 checkmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Service gant blancs <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Les membres platinium et diamond bénéficient d’un gardien priviligié de leur compte, au sein de chaque entrepôt, chargé de vérifier la parfaite réalisation de toutes les demandes. "><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></DIV>
          <DIV CLASS = "col-xs-4 checkmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Services (Regroupement, Photos, etc.)</DIV>
          <DIV CLASS = "col-xs-4 reward-info">Soldé</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Entrepôt Tualatin en Oregon (Hors taxes)</DIV>
          <DIV CLASS = "col-xs-4 checkmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Avantage gratuit 1 <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Choisissez des réductions de frais d’envoi, de traitement, ou de services spéciaux."><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></DIV>
          <DIV CLASS = "col-xs-4 checkmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Avantage gratuit 2 <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Choisissez des réductions de frais d’envoi, de traitement, ou de services spéciaux."><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></DIV>
          <DIV CLASS = "col-xs-4 checkmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">Avantage gratuit 3 <A HREF = "javascript:void(0);" data-toggle = "tooltip" data-placement = "bottom" TITLE = "Choisissez des réductions de frais d’envoi, de traitement, ou de services spéciaux."><IMG SRC = "shipito/fr/imgs/pricing/Information.svg" BORDER = "0" CLASS = "tool-tip-image"></A></DIV>
          <DIV CLASS = "col-xs-4 checkmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc">5% de réduction de frais d'envois**</DIV>
          <DIV CLASS = "col-xs-4 checkmark">&nbsp;</DIV>
        </DIV>
        <DIV CLASS = "row reward-row">
          <DIV CLASS = "col-xs-8 reward-desc last">Stockage</DIV>
          <DIV CLASS = "col-xs-4 reward-info last">60 jours</DIV>
        </DIV>
      </DIV>
      <DIV CLASS = "reward-card-filler">&nbsp;</DIV>
  </DIV>
  <DIV CLASS = "discount-msg" STYLE = "margin-bottom: 15px;">*Le service gants blancs de Lynia Delivery Express est consacré à nos meilleurs clients. Munis d‘un numéro de téléphone et d‘un code d‘accès spéciaux, les abonnés annuels Platinum et Diamond Premium peuvent communiquer directement avec le superviseur de l‘entrepôt. Le superviseur s’assurera personnellement que le paquet reçoit bien tous les services demandés garantissant ainsi un service parfait. Le superviseur sera votre personne de confiance pour l‘exécution de toutes vos demandes de services et d‘envois.</DIV>
  <DIV CLASS = "discount-msg">**Les abonnés Diamond reçoivent 5% de réduction sur leurs envois, à l‘exception des envois en air postal économique et des ePaquet.</DIV>

  <TABLE CLASS = "table points-table">
 <THEAD>
  <TR>
    <TH COLSPAN="7" CLASS = "points-header">
    Gagner des points de fidélité, c’est facile! Voici comment :
    </TH>
  </TR>
 </THEAD>
 <TBODY>
   <TR>
   <TD>
     <DIV CLASS = "row">
       <DIV CLASS = "col-xs-4 text-center points">1 Point</DIV>
       <DIV CLASS = "col-xs-4 text-center points">1 Point</DIV>
       <DIV CLASS = "col-xs-4 text-center points">0.5 points</DIV>
     </DIV>
     <DIV CLASS = "row">
       <DIV CLASS = "col-xs-4 text-center"><IMG SRC = "shipito/fr/imgs/rewards/icons/AnnualMembership.svg" BORDER = "0" CLASS = "img-responsive points-img"></DIV>
       <DIV CLASS = "col-xs-4 text-center"><IMG SRC = "shipito/fr/imgs/rewards/icons/largepackage.svg" BORDER = "0" CLASS = "img-responsive points-img"></DIV>
       <DIV CLASS = "col-xs-4 text-center"><IMG SRC = "shipito/fr/imgs/rewards/icons/smallpackage.svg" BORDER = "0" CLASS = "img-responsive points-img"></DIV>
     </DIV>
     <DIV CLASS = "row">
       <DIV CLASS = "col-xs-4 text-center points-desc">Abonnement Annuel</DIV>
       <DIV CLASS = "col-xs-4 text-center points-desc">Expédition d‘un colis  > 2,268 kg</DIV>
       <DIV CLASS = "col-xs-4 text-center points-desc">Expédition d‘un colis < 2,268 kg</DIV>
     </DIV>
     <DIV CLASS = "row">
       <DIV CLASS = "col-xs-4 text-center points">0.5 points</DIV>
       <DIV CLASS = "col-xs-4 text-center points">1 Point</DIV>
       <DIV CLASS = "col-xs-4 text-center points">1 Point</DIV>
     </DIV>
     <DIV CLASS = "row">
       <DIV CLASS = "col-xs-4 text-center"><IMG SRC = "shipito/fr/imgs/rewards/icons/Service%202.svg" BORDER = "0" CLASS = "img-responsive points-img"></DIV>
       <DIV CLASS = "col-xs-4 text-center"><IMG SRC = "shipito/fr/imgs/rewards/icons/ReferAFriend1.svg" BORDER = "0" CLASS = "img-responsive points-img"></DIV>
       <DIV CLASS = "col-xs-4 text-center"><IMG SRC = "shipito/fr/imgs/rewards/icons/ReferAFriend2.svg" BORDER = "0" CLASS = "img-responsive points-img"></DIV>
     </DIV>
     <DIV CLASS = "row">
       <DIV CLASS = "col-xs-4 text-center points-desc">Achat Assisté</DIV>
       <DIV CLASS = "col-xs-4 text-center points-desc">Parrainage d‘un ami pour l’expédition de son 1<sup>er</sup> colis</DIV>
       <DIV CLASS = "col-xs-4 text-center points-desc">Parrainage d‘un ami pour un abonnement premium annuel </DIV>
     </DIV>
   </TD>
   </TR>
 </TBODY>
 </TABLE>
</DIV>

<SCRIPT>

$(window).bind("pageshow", function(event) {
    if (event.originalEvent.persisted) {
        window.location.reload()
    }
});
  var NEXT_PAGE = '';
  function followLink() { document.location.href = NEXT_PAGE; }

  var do_scroll = 1;
  $(document).ready(function()
  {
    $('#reward-cards').scroll(function() {
      if (do_scroll == 1)
	  {
		var smallest = 1;
		for (i = 1; i <= 5; i++)
		{
			var width = $('#card_' + i).width();
			var pos = Math.abs($('#card_' + i).position().left);
			var diff = width - pos;
			if ( pos == 0 || ( pos > 0 && diff/width > .5) )
			{
				$('.reward-select').attr('class','reward-select');
				$('#_' + i).attr('class','reward-select reward-selected');
			}
		}
	  }
    });

    $('.reward-select').click(function() {
	  do_scroll = 0;
	  var id = $(this).attr('ID');
	  var position = $('#card' + id).position().left;
	  $('.reward-select').attr('class','reward-select');
	  $(this).attr('class','reward-select reward-selected');
	  $('#reward-cards').animate({scrollLeft: '+=' + position}, 300, 'swing', function() { do_scroll = 1; });
    });

    $('.sign-up-btn').click(function (evt) {
	      $(this).toggleClass('sign-up-btn-active');
	      $(this).html('&nbsp;');
	      NEXT_PAGE = $(this).attr('href');
	      setTimeout(followLink, 1000);
	      return false;
    });
  });
</SCRIPT>

<DIV CLASS = "signup-banner">
 <DIV CLASS = "container">
   <DIV CLASS = "text-center">
    <DIV>Commencez à économiser aujourd'hui !</DIV>
   </DIV>
   <DIV CLASS = "text-center us-address">
    <DIV>Obtenez une adresse gratuite aux États-Unis !</DIV>
   </DIV>
   <DIV CLASS = "text-center">
   <DIV><A href="#" CLASS = "btn">Inscription gratuite</A></DIV>
  </DIV>
 </DIV>
</DIV>


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
    $('#banner-container').load('/fr/banner-ads?pg=/shipito-rewards');
  }
});
</SCRIPT>
</BODY>

<!-- Mirrored from www.shipito.com/fr/shipito-rewards by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 13:43:52 GMT -->
</HTML>
<!--- Copyright 2024 GlobalAccess All Rights Reserved -->
<!--- Web Server 3088 -->
