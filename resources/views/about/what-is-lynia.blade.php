<!DOCTYPE HTML>
<HTML dir="ltr" lang="fr">
  <!-- Mirrored from www.shipito.com/fr/services/what-is-shipito by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 13:45:02 GMT -->
  <!-- Added by HTTrack -->
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <!-- /Added by HTTrack -->
  @include('layouts.head-guest')

  <BODY>
    <DIV ID="menu-filler"></DIV>
    <A NAME="page-top" ID="page-top"></A>
    @include('layouts.header-guest')

    <DIV CLASS="main-body">
      <SCRIPT SRC="shipito/unpkg.com/aos%402.3.1/dist/aos.js"></SCRIPT>
      <LINK REL="stylesheet" HREF="shipito/styles/v2/aos.css">
      <STYLE TYPE="text/css">
        .top-banner-outer {
            background-image: url("shipito/fr/imgs/whatisshipito/WhatIsShipito.jpg");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .top-section H2 {
          margin: 30px 0px 50px 0px;
          text-align: center;
        }

        .top-section P {
          margin: 50px auto 50px auto;
          text-align: center;
          max-width: 75%;
        }

        .logos {
          margin-bottom: 50px;
        }

        .mission {
          margin-bottom: 80px;
        }

        .mission .row {
          max-width: 75%;
          margin: auto;
        }

        .common-text,
        .light-text {
          font-size: 16px;
          line-height: 1.7em;
        }

        .common-text {
          color: #000;
        }

        .light-text {
          color: #808080;
        }

        .blue-dot,
        .blue-text,
        .col-desc STRONG {
          color: #00A9CE;
          font-weight: 300;
        }

        .blue-dot {
          font-size: 9px;
          max-width: 30px;
          padding-right: 0px;
        }

        .rule-list {
          padding-left: 4px;
          padding-top: 1px;
        }

        .two-column {
          margin-bottom: 40px;
        }

        .col-img {
          min-height: 368px;
          height: 368px;
          background-position: top center;
          background-size: auto 368px;
          background-repeat: no-repeat;
          color: #00A9CE;
          font-size: 22px;
          text-align: center;
          padding-top: 30px;
        }

        .col-desc {
          padding-top: 40px;
        }

        DIV.signup-banner {
          margin-top: 80px;
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
          .top-banner-outer {}

          .top-section H2 {
            margin: 15px 0px 40px 0px;
            text-align: center;
            line-height: 50px;
          }

          .top-section P {
            margin: 40px 0px 50px 0px;
            text-align: left;
            max-width: 100%;
          }

          .mission {
            margin-bottom: 40px;
          }

          .mission .row {
            max-width: 100%;
          }

          DIV.signup-banner {
            margin-top: 50px;
          }
        }
      </STYLE>
      <DIV CLASS="container-fluid top-banner-outer">
        <DIV CLASS="container top-banner-inner">
          <H1>Adresses en France et acheminement du courrier</H1>
        </DIV>
      </DIV>
      <DIV CLASS="container top-section">
        <H2>Achetez en France et faites suivre les colis chez vous</H2>
        <P CLASS="text-center common-text"> De nombreux articles sont moins chers en France mais les vendeurs et les sites Internet ne livrent pas directement à l’étranger. C'est là que Lynia peut intervenir. Lynia vous permet de faire des achats auprès de sites comme eBay, Amazon ou Walmart et de faire envoyer vos achats à nos entrepôts pour que nous vous les expédions. Si vous ne pouvez pas passer commande auprès d’un site Internet, notre service d’aide à l’achat peut vous aider à le faire. Aucune carte de crédit n’est nécessaire car nous acceptons de nombreuses formes de paiement. </P>
      </DIV>
      <DIV CLASS="container logos">
        <DIV CLASS="row">
          <DIV CLASS="col-md-12 hide-sm" data-aos="fade-up">
            <IMG SRC="shipito/fr/imgs/whatisshipito/Logos.png" CLASS="img-responsive">
          </DIV>
          <DIV CLASS="col-md-12 hide-lg" data-aos="fade-up">
            <IMG SRC="shipito/fr/imgs/whatisshipito/Logos_Mobile.png" CLASS="img-responsive">
          </DIV>
        </DIV>
      </DIV>
      <DIV CLASS="container mission" data-aos="fade-up">
        <H2 CLASS="section-title">
          <SPAN>Nos missions</SPAN>
        </H2>
        <DIV CLASS="row light-text">
          <DIV CLASS="col-xs-1 blue-dot">
            <I CLASS="fa fa-circle"></I>
          </DIV>
          <DIV CLASS="col-xs-11 rule-list"> Faciliter l’achat d’articles en ligne en France pour les consommateurs du monde entier </DIV>
        </DIV>
        <DIV CLASS="row light-text">
          <DIV CLASS="col-xs-1 blue-dot">
            <I CLASS="fa fa-circle"></I>
          </DIV>
          <DIV CLASS="col-xs-11 rule-list"> Offrir des services d’emballage et d’expédition rapides, fiables, efficaces et bon marché </DIV>
        </DIV>
        <DIV CLASS="row light-text">
          <DIV CLASS="col-xs-1 blue-dot">
            <I CLASS="fa fa-circle"></I>
          </DIV>
          <DIV CLASS="col-xs-11 rule-list"> Répondre rapidement aux demandes de soutien, chats, e-mails et messages des clients </DIV>
        </DIV>
        <DIV CLASS="row light-text">
          <DIV CLASS="col-xs-1 blue-dot">
            <I CLASS="fa fa-circle"></I>
          </DIV>
          <DIV CLASS="col-xs-11 rule-list"> Assurer une réception rapide de tous les colis entrants dans les suites de clients </DIV>
        </DIV>
        <DIV CLASS="row light-text">
          <DIV CLASS="col-xs-1 blue-dot">
            <I CLASS="fa fa-circle"></I>
          </DIV>
          <DIV CLASS="col-xs-11 rule-list"> Assurer un envoi rapide des colis sortants </DIV>
        </DIV>
        <DIV CLASS="row light-text">
          <DIV CLASS="col-xs-1 blue-dot">
            <I CLASS="fa fa-circle"></I>
          </DIV>
          <DIV CLASS="col-xs-11 rule-list"> Travailler quotidiennement à l’élimination des erreurs </DIV>
        </DIV>
        <DIV CLASS="row light-text">
          <DIV CLASS="col-xs-1 blue-dot">
            <I CLASS="fa fa-circle"></I>
          </DIV>
          <DIV CLASS="col-xs-11 rule-list"> Rendre nos clients satisfaits et heureux, et prêts à recommander nos services à d’autres personnes </DIV>
        </DIV>
        <DIV CLASS="row light-text">
          <DIV CLASS="col-xs-1 blue-dot">
            <I CLASS="fa fa-circle"></I>
          </DIV>
          <DIV CLASS="col-xs-11 rule-list"> Lutter contre les fraudes et être des courtiers dignes de confiance pour les vendeurs </DIV>
        </DIV>
      </DIV>
      <DIV CLASS="container two-column" data-aos="fade-up">
        <DIV CLASS="row">
          <DIV CLASS="col-md-6 col-sm-12 col-img" STYLE="background-image: url(shipito/fr/imgs/whatisshipito/rates.svg);"> Faibles coûts d’expédition </DIV>
          <DIV CLASS="col-md-6 col-sm-12 col-desc">
            <DIV CLASS="row light-text">
              <DIV CLASS="col-xs-1 blue-dot">
                <I CLASS="fa fa-circle"></I>
              </DIV>
              <DIV CLASS="col-xs-11 rule-list"> Consultez nos frais de port! En raison du volume élevé de colis expédiés, nous bénéficions de tarifs préférentiels auprès de nombreux transporteurs courants et de relations nous permettant de proposer des options d’expédition exclusives dans certains pays. </DIV>
            </DIV>
            <DIV CLASS="row light-text">
              <DIV CLASS="col-xs-1 blue-dot">
                <I CLASS="fa fa-circle"></I>
              </DIV>
              <DIV CLASS="col-xs-11 rule-list"> Le regroupement réduit les coûts d’affranchissement par rapport à l’envoi de plusieurs colis. Vous pouvez faire des achats auprès de plusieurs magasins et économiser en les regroupant en un seul colis à expédier. </DIV>
            </DIV>
            <DIV CLASS="row light-text">
              <DIV CLASS="col-xs-1 blue-dot">
                <I CLASS="fa fa-circle"></I>
              </DIV>
              <DIV CLASS="col-xs-11 rule-list"> 4 adresses d'entrepôt, chacune située en Californie, en Oregon (France), en Autriche (UE) et au Japon, vous permettant d'expédier des colis de manière économique. </DIV>
            </DIV>
            <DIV CLASS="row light-text">
              <DIV CLASS="col-xs-1 blue-dot">
                <I CLASS="fa fa-circle"></I>
              </DIV>
              <DIV CLASS="col-xs-11 rule-list"> Les sites Internet ne font payer aucune taxe de vente lorsque vous expédiez à Tualatin, en Oregon. </DIV>
            </DIV>
          </DIV>
        </DIV>
      </DIV>
      <DIV CLASS="container two-column" data-aos="fade-up">
        <DIV CLASS="row">
          <DIV CLASS="col-sm-12 hide-lg col-img" STYLE="background-image: url(shipito/fr/imgs/whatisshipito/pricing.svg);"> Tarification facile </DIV>
          <DIV CLASS="col-md-6 col-sm-12 col-desc">
            <DIV CLASS="row light-text">
              <DIV CLASS="col-xs-1 blue-dot">
                <I CLASS="fa fa-circle"></I>
              </DIV>
              <DIV CLASS="col-xs-11 rule-list">
                <B>45, 60, ou 90 jours de stockage gratuit</B> pour les membres premium contre 7 jours pour les comptes gratuits.
              </DIV>
            </DIV>
            <DIV CLASS="row light-text">
              <DIV CLASS="col-xs-1 blue-dot">
                <I CLASS="fa fa-circle"></I>
              </DIV>
              <DIV CLASS="col-xs-11 rule-list"> Pas de frais mensuels pour <STRONG>les comptes gratuits</STRONG>. Aucun frais de mise en service. Uniquement <STRONG>3.25 euros EUR</STRONG> de frais de traitement par colis. </DIV>
            </DIV>
            <DIV CLASS="row light-text">
              <DIV CLASS="col-xs-1 blue-dot">
                <I CLASS="fa fa-circle"></I>
              </DIV>
              <DIV CLASS="col-xs-11 rule-list">
                </STRONG> L‘abonnement premium vous permet d‘accéder aux prix hors taxes de notre entrepôt et l‘abonnement premium annuel vous fait gagner des points en vue des récompenses pour nos abonnés. </DIV>
            </DIV>
            <DIV CLASS="row light-text">
              <DIV CLASS="col-xs-1 blue-dot">
                <I CLASS="fa fa-circle"></I>
              </DIV>
              <DIV CLASS="col-xs-11 rule-list"> Les magazines et le courrier peuvent être postés pour seulement <STRONG> 3.25 euros EUR de frais de traitement et d‘affranchissement pour les comptes gratuits, et de </STRONG> 2.25 euros EUR de frais de traitement et d‘affranchissement pour les comptes premium. </DIV>
            </DIV>
            <DIV CLASS="row light-text">
              <DIV CLASS="col-xs-1 blue-dot">
                <I CLASS="fa fa-circle"></I>
              </DIV>
              <DIV CLASS="col-xs-11 rule-list">
                <A href="#">Comparez nos services</A>
              </DIV>
            </DIV>
          </DIV>
          <DIV CLASS="col-md-6 hide-sm col-img" STYLE="background-image: url(shipito/fr/imgs/whatisshipito/pricing.svg);"> Tarification facile </DIV>
        </DIV>
      </DIV>
      <DIV CLASS="container two-column" data-aos="fade-up">
        <DIV CLASS="row">
          <DIV CLASS="col-md-6 col-sm-12 col-img" STYLE="background-image: url(shipito/fr/imgs/whatisshipito/logistics.svg);"> Nous résolvons les problèmes <br>de logistique </DIV>
          <DIV CLASS="col-md-6 col-sm-12 col-desc">
            <DIV CLASS="row light-text">
              <DIV CLASS="col-xs-1 blue-dot">
                <I CLASS="fa fa-circle"></I>
              </DIV>
              <DIV CLASS="col-xs-11 rule-list"> Accès 24/7 à votre compte en ligne. Détails de chaque colis, y compris son numéro de suivi.* </DIV>
            </DIV>
            <DIV CLASS="row light-text">
              <DIV CLASS="col-xs-1 blue-dot">
                <I CLASS="fa fa-circle"></I>
              </DIV>
              <DIV CLASS="col-xs-11 rule-list"> Notifications par courriel et directement sur le compte </DIV>
            </DIV>
            <DIV CLASS="row light-text">
              <DIV CLASS="col-xs-1 blue-dot">
                <I CLASS="fa fa-circle"></I>
              </DIV>
              <DIV CLASS="col-xs-11 rule-list"> Possibilité d’achat de photos détaillées du contenu de votre colis. Assurez-vous que tout est en bon état et que rien ne manque. Des photos de l’extérieur des colis sont incluses dans les frais de traitement. </DIV>
            </DIV>
            <DIV CLASS="row light-text">
              <DIV CLASS="col-xs-1 blue-dot">
                <I CLASS="fa fa-circle"></I>
              </DIV>
              <DIV CLASS="col-xs-11 rule-list"> L’assistance clientèle peut vous aider avec le retour et le remboursement des produits qui vous déplaisent. </DIV>
            </DIV>
            <BR>
            <DIV CLASS="row light-text">
              <DIV CLASS="col-xs-1 blue-dot"></DIV>
              <DIV CLASS="col-xs-11 rule-list"> *REMARQUE : Airmail Economy n’offre pas de de suivi et n’utilise pas USPS. </DIV>
            </DIV>
          </DIV>
        </DIV>
      </DIV>
      <DIV CLASS="signup-banner">
        <DIV CLASS="container">
          <DIV CLASS="text-center">
            <DIV>Commencez à économiser aujourd'hui!</DIV>
          </DIV>
          <DIV CLASS="text-center us-address">
            <DIV>Obtenez votre adresse gratuite en France!</DIV>
          </DIV>
          <DIV CLASS="text-center">
            <DIV>
              <A href="#" CLASS="btn">Inscription gratuite</A>
            </DIV>
          </DIV>
        </DIV>
      </DIV>
      <SCRIPT>
        AOS.init({
          offset: 200,
          duration: 500,
          easing: 'ease-in-quad',
          delay: 100,
          disable: 'mobile'
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
          $('#banner-container').load('/fr/banner-ads?pg=/services/what-is-shipito');
        }
      });
    </SCRIPT>
  </BODY>
  <!-- Mirrored from www.shipito.com/fr/services/what-is-shipito by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 13:45:10 GMT -->
</HTML>
<!--- Copyright 2024 GlobalAccess All Rights Reserved -->
<!--- Web Server 3088 -->
