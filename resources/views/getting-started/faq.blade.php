




<!DOCTYPE HTML>
<HTML dir = "ltr" lang = "fr">

<!-- Mirrored from www.shipito.com/fr/help/faq by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 13:44:25 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
@include('layouts.head-guest')
<BODY>
<DIV ID = "menu-filler"></DIV>
<A NAME = "page-top" ID = "page-top"></A>
@include('layouts.header-guest')
<DIV CLASS = "main-body">

<STYLE TYPE = "text/css">
.top-banner-outer {
   background-color: #000000;
   height: 300px;
   background-image: url("shipito/fr/imgs/help/faq/BannerPhoto1200.jpg");
   background-position: center top;
   background-size: auto 100%;
   background-repeat: no-repeat;
   margin-bottom: 45px;
}
.top-banner-inner H1 {
   line-height: 300px;
   margin: 0px;
   padding: 0px;
   text-align: center;
}
.topics {
   margin-top: 10px;
   margin-bottom: 100px;
}

.topics A.square  {
  border: solid 1px #D7D7D7;
  margin: 30px;
  padding: 20px 10px 0px 10px;
  color: #808080;
  font-size: 18px;
  text-align: center;
  display: block;
}

.topics A.square IMG {
  width: 100px;
  height: 100px;
  margin-bottom: 20px;
  transition: all 0.25s ease-in-out;
}

.topics A.square DIV.content {
  height: 130px;
}
.topics A.square H2 {
  font-size: 18px;
  margin-top: 0px;
}
.topics A.square P {
  font-size: 16px;
}

.topics A.square:HOVER {
  border: solid 1px #20284D;
  color: #20284D;
  text-decoration: none;
}
.topics A.square:HOVER IMG {
  -ms-transform: scale(1.1111); /* IE 9 */
  -webkit-transform: scale(1.1111); /* Safari */
  transform: scale(1.1111); /* Standard syntax */
}
.topics A.square:HOVER P {
  color: #808080;
}

@media ( min-width :1201px) {
.top-banner-outer {
   background-image: url("shipito/fr/imgs/help/faq/BannerPhoto.jpg");
   }
}
@media ( max-width :767px) {
 .top-banner-outer {
   background-image: url("shipito/fr/imgs/help/faq/MobileBanner.jpg");
   height: 250px;
   margin-bottom: 45px;
  }
 .top-banner-inner {
   height: 250px;
 }

 .top-banner-inner H1 {
   margin: 40px 15px 0px 15px;
   padding: 0px;
   text-align: left;
   line-height: 40px;
  }
  .disclaimer {
     margin-top: 40px;
     margin-bottom: 50px;
  }
 .topics A.square  {
   margin: 3px -12px 3px -12px;
   padding: 5px;
   font-size: 14px;
 }
 .topics A.square IMG {
   margin-bottom: 10px;
 }
 .topics A.square DIV.content {
    height: 160px;
 }
}
</STYLE>

<DIV CLASS = "container-fluid top-banner-outer">
 <DIV CLASS = "container top-banner-inner">
  <H1>En quoi pouvons-nous vous aider ?</H1>
 </DIV>
</DIV>
<DIV CLASS = "container">
 <DIV CLASS = "col-xs-12 text-center faq-search-form">
  <FORM METHOD = "POST" ACTION = "https://www.shipito.com/fr/help/faq/search" NAME = "searchform">
<INPUT TYPE = "HIDDEN" NAME = "act" VALUE = "CMSHelpTopic../faq/search"/>
<INPUT TYPE = "HIDDEN" NAME = "cmscountry" VALUE = "us"/>
<INPUT TYPE = "HIDDEN" NAME = "cmslanguage" VALUE = "fr"/>
<INPUT TYPE = "HIDDEN" NAME = "postingpageurl" VALUE = "/fr/help/faq"/>
<INPUT TYPE = "HIDDEN" NAME = "cmshelptopic.cmshelptopicid" VALUE = "1"/>

   <DIV CLASS = "input-group">
    <INPUT TYPE = "TEXT" NAME = "keyword" CLASS = "form-control" PLACEHOLDER = "Trouvez de l'aide. Entrez un terme de recherche ici." onChange = "return formvalidator.formUpdated(this.form, this);" onKeyPress = "return formvalidator.checkFormat(this, event);"/>
    <SPAN CLASS = "input-group-btn">
     <BUTTON TYPE = "SUBMIT" CLASS = "btn btn-primary" TITLE = "Recherche"><I CLASS = "icon-search"></I></BUTTON>
    </SPAN>
   </DIV>
  </FORM>
 </DIV>
</DIV>
<DIV CLASS = "container">
 <DIV CLASS = "row">
  <DIV CLASS = "col-xs-12 text-center">
   <P>
    Lynia Delivery Express, c'est comme avoir un ami outre atlantique qui s'occupe de l'envoi de vos colis.
   </P>
  </DIV>
 </DIV>
 <DIV CLASS = "topics">


  <DIV CLASS = "row">

   <DIV CLASS = "col-xs-6 col-md-4">
    <A href="/getting-started" CLASS = "square">
     <IMG SRC = "shipito/fr/imgs/help/1.svg" BORDER = "0">
     <DIV CLASS = "content">
      <H2>Par où commencer</H2>
      <P>Learn how to become a Lynia Delivery Express member</P>
     </DIV>
    </A>
   </DIV>



   <DIV CLASS = "col-xs-6 col-md-4">
    <A href="/packages" CLASS = "square">
     <IMG SRC = "shipito/fr/imgs/help/2.svg" BORDER = "0">
     <DIV CLASS = "content">
      <H2>Colis</H2>
      <P>Where you will find package and warehouse processing info </P>
     </DIV>
    </A>
   </DIV>



   <DIV CLASS = "col-xs-6 col-md-4">
    <A href="/prohibited-items" CLASS = "square">
     <IMG SRC = "shipito/fr/imgs/help/3.svg" BORDER = "0">
     <DIV CLASS = "content">
      <H2>Liste des produits interdits</H2>
      <P>Important! Learn what can be shipped to your country before you shop.</P>
     </DIV>
    </A>
   </DIV>



   <DIV CLASS = "col-xs-6 col-md-4">
    <A href="/account-navigation" CLASS = "square">
     <IMG SRC = "shipito/fr/imgs/help/4.svg" BORDER = "0">
     <DIV CLASS = "content">
      <H2>Interface du compte</H2>
      <P>Comprenez le fonctionnement de votre compte et familiarisez-vous avec les différentes options d'adhésion.</P>
     </DIV>
    </A>
   </DIV>



   <DIV CLASS = "col-xs-6 col-md-4">
    <A href="/carrier-tracking" CLASS = "square">
     <IMG SRC = "shipito/fr/imgs/help/5.svg" BORDER = "0">
     <DIV CLASS = "content">
      <H2>Expédition, suivi et retours</H2>
      <P>Découvrez comment obtenir des mises à jour sur le suivi et la livraison des colis.</P>
     </DIV>
    </A>
   </DIV>



   <DIV CLASS = "col-xs-6 col-md-4">
    <A href="/customs" CLASS = "square">
     <IMG SRC = "shipito/fr/imgs/help/6.svg" BORDER = "0">
     <DIV CLASS = "content">
      <H2>Douanes, droits et TPS</H2>
      <P>Obtenez des instructions concernant les exigences douanières, les formulaires EEI, les droits et taxes à payer.</P>
     </DIV>
    </A>
   </DIV>



   <DIV CLASS = "col-xs-6 col-md-4">
    <A href="/services" CLASS = "square">
     <IMG SRC = "shipito/fr/imgs/help/8.svg" BORDER = "0">
     <DIV CLASS = "content">
      <H2>Services</H2>
      <P>Apprenez-en plus sur les services disponibles pour vos envois.</P>
     </DIV>
    </A>
   </DIV>



   <DIV CLASS = "col-xs-6 col-md-4">
    <A href="/payments" CLASS = "square">
     <IMG SRC = "shipito/fr/imgs/help/9.svg" BORDER = "0">
     <DIV CLASS = "content">
      <H2>Paiements</H2>
      <P>Quels sont les moyens de paiement et monnaies locales acceptés par Lynia Delivery Express?</P>
     </DIV>
    </A>
   </DIV>



   <DIV CLASS = "col-xs-6 col-md-4">
    <A href="/claims" CLASS = "square">
     <IMG SRC = "shipito/fr/imgs/help/11.svg" BORDER = "0">
     <DIV CLASS = "content">
      <H2>Réclamations, assurance et remboursements</H2>
      <P>Signaler un colis perdu, volé ou endommagé.</P>
     </DIV>
    </A>
   </DIV>



   <DIV CLASS = "col-xs-6 col-md-4">
    <A href="/affiliate-faq" CLASS = "square">
     <IMG SRC = "shipito/fr/imgs/help/AffiliateIcon.svg" BORDER = "0">
     <DIV CLASS = "content">
      <H2>FAQ sur le partenariat</H2>
      <P>Join the Lynia Delivery Express affiliate program and learn how earn money for each new member you refer! </P>
     </DIV>
    </A>
   </DIV>



   <DIV CLASS = "col-xs-6 col-md-4">
    <A href="/lynia-membership-faq" CLASS = "square">
     <IMG SRC = "shipito/fr/imgs/help/packages.svg" BORDER = "0">
     <DIV CLASS = "content">
      <H2>À propos des récompenses pour les membres Lynia Delivery Express
</H2>
      <P>Earn discounts and benefits by signing up for an Annual Membership </P>
     </DIV>
    </A>
   </DIV>

  </DIV>


 </DIV>
 <DIV CLASS = "container hide-lg disclaimer">
  <P CLASS = "text-center">
       Pour toute question relative à votre compte, veuillez contacter
<BR><A HREF = "mailto:support@shipito.com">support@shipito.com</A>

  </P>
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
    $('#banner-container').load('/fr/banner-ads?pg=/help/faq');
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

<!-- Mirrored from www.shipito.com/fr/help/faq by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 13:44:47 GMT -->
</HTML>
<!--- Copyright 2024 GlobalAccess All Rights Reserved -->
<!--- Web Server 3088 -->

