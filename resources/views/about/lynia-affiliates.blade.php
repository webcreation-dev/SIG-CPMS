<!DOCTYPE HTML>
<HTML dir="ltr" lang="fr">
  <!-- Mirrored from www.shipito.com/fr/shipito-affiliates by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 13:46:00 GMT -->
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
        .top-banner-outer {
          background: linear-gradient(#3781BE, #20284D);
        }

        .top-banner-inner {
          background-image: url("shipito/fr/imgs/affiliate/AffiliateProgram_Banner1.svg");
          background-size: auto 320px;
          background-position: center bottom;
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
          .top-banner-inner {
            background-size: auto 360px;
            background-image: url("shipito/fr/imgs/affiliate/AffiliateProgram_BannerMobile.svg");
          }
        }

        .btn-secondary {
          border: solid 1px #20284D;
        }

        .mobile-only {
          display: none;
        }

        .top-container {
          background: linear-gradient(#3781BE, #20284D);
          padding: 0px;
          margin: 0px 0px 30px 0px;
        }

        .top-container IMG {
          margin: -20px 20px 0px 20px;
          max-height: 335px;
        }

        .top-container H1 {
          color: #FFFFFF;
          margin: 70px 0px 0px 0px;
          padding: 0px;
          text-align: left;
          font-size: 40px;
          font-weight: normal;
          line-height: 40px;
        }

        html[dir="rtl"] .top-container H1 {
          text-align: right;
        }

        .top-container H2 {
          color: #FFFFFF;
          margin: 34px 0px 0px 0px;
          padding: 0px;
          text-align: left;
          font-size: 20px;
          font-weight: normal;
          line-height: 32px;
          font-weight: normal;
        }

        html[dir="rtl"] .top-container H2 {
          text-align: right;
        }

        .flow-chart {
          margin: 0px 0px 100px 0px;
        }

        .flow-chart H2 {
          display: block;
          text-align: center;
          color: #000000;
          font-size: 30px;
        }

        .flow-chart-grid {
          margin: 0px auto;
          background-image: url("shipito/fr/imgs/affiliate/flowchart1.svg");
          background-position: top left;
          background-repeat: no-repeat;
          background-size: 912px 697px;
          width: 912px;
          height: 697px;
          position: relative;
        }

        .flow-chart-grid SPAN {
          display: table-cell;
          vertical-align: middle;
          text-align: center;
          color: #808080;
          font-size: 15px;
          position: absolute;
        }

        .flow-chart-grid .chart-title {
          top: 256px;
          left: 192px;
          width: 480px;
          font-size: 30px;
          line-height: 44px;
          text-transform: uppercase;
          color: #3F4040;
        }

        .flow-chart-grid .chart-title STRONG {
          font-weight: normal;
          color: #20284D;
        }

        .flow-chart-grid .text1 {
          top: 170px;
          left: 240px;
          width: 360px;
        }

        .flow-chart-grid .text2 {
          top: 370px;
          left: 680px;
          width: 230px;
        }

        .flow-chart-grid .text3 {
          top: 650px;
          left: 280px;
          width: 350px;
        }

        .flow-chart-grid .text4 {
          top: 390px;
          left: 15px;
          width: 150px;
        }

        .mobile-flow-chart {
          font-size: 16px;
          color: #808080;
          padding: 40px;
        }

        .mobile-flow-chart IMG {
          margin-top: 20px;
          margin-bottom: 20px;
        }

        .mobile-flow-chart H3 {
          display: block;
          text-align: center;
          font-size: 24px;
          color: #3F4040;
          text-transform: uppercase;
          margin-bottom: 20px;
        }

        .mobile-flow-chart H3 STRONG {
          font-weight: normal;
          color: #20284D;
        }

        .our-affiliates {
          margin: 0px 0px 60px 0px;
        }

        .our-affiliates IMG {
          margin-top: 55px;
          margin-bottom: 80px;
          width: 715px;
          margin: 0px auto;
        }

        .meet-affiliates {
          margin-bottom: 60px;
        }

        .speech-bubble {
          display: table-cell;
          vertical-align: middle;
          width: 260px;
          height: 130px;
          padding: 0px 15px 20px 15px;
          background-image: url("shipito/fr/imgs/affiliate/speechbubble2.svg");
          background-size: 260px 130px;
          background-repeat: no-repeat;
        }

        .speech-bubble SPAN {
          display: inline-block;
          text-align: center;
          font-size: 14px;
          color: #808080;
        }

        .affiliate-image {
          height: 257px;
          text-align: center;
          margin-top: 20px;
          margin-bottom: 20px;
        }

        .affiliate-image IMG {
          height: 257px;
          margin-bottom: 40px;
        }

        .meet-affiliates H4 {
          margin: 20px 0px 40px 0px;
          font-size: 21px;
          color: #000000;
          font-weight: bold;
          text-align: center;
        }

        .testimonial {
          display: block;
          clear: both;
          margin-top: 40px;
          margin-bottom: 40px;
          font-size: 14px;
          line-height: 24px;
          color: #808080;
          text-align: center;
          padding: 0px 15px 0px 15px;
          min-height: 150px;
        }

        .why-join {
          margin-bottom: 10px;
        }

        .why-join H2 {
          color: #000000;
          font-size: 24px;
          margin-bottom: 30px;
          text-align: left;
        }

        .why-join H2.section-title {
          text-align: center;
        }

        html[dir="rtl"] .why-join H2 {
          text-align: right;
        }

        .why-join P {
          margin: 0px 0px 20px 0px;
        }

        .why-join A {
          color: #20284D;
        }

        .why-join UL {
          margin-bottom: 60px;
        }

        .why-join UL LI {
          font-size: 16px;
          line-height: 24px;
          margin-bottom: 10px;
        }

        .bottom-affiliate-links {
          margin-bottom: 100px;
        }

        .bottom-affiliate-links A {
          font-size: 16px;
        }

        .bottom-affiliate-links A.btn {
          text-transform: uppercase;
        }

        @media (min-width:993px) and (max-width:1200px) {
          .top-container {
            margin: 0px 0px 30px 0px;
          }

          .top-container IMG {
            margin-top: 20px;
          }

          .flow-chart-grid {
            background-size: 940px 656px;
            width: 940px;
            height: 656px;
          }

          .flow-chart-grid .chart-title {
            top: 270px;
            left: 200px;
            width: 500px;
            font-size: 30px;
            line-height: 50px;
          }

          .flow-chart-grid .text1 {
            top: 150px;
            left: 270px;
          }

          .flow-chart-grid .text2 {
            top: 350px;
            left: 700px;
          }

          .flow-chart-grid .text3 {
            top: 620px;
            left: 270px;
          }

          .flow-chart-grid .text4 {
            top: 375px;
            left: 10px;
            width: 165px;
          }
        }

        @media (min-width:768px) and (max-width:992px) {
          .flow-chart-grid {
            background-size: 720px 503px;
            width: 720px;
            height: 503px;
          }

          .flow-chart-grid SPAN {
            font-size: 12px;
          }

          .flow-chart-grid .chart-title {
            top: 210px;
            left: 150px;
            width: 400px;
            font-size: 24px;
            line-height: 35px;
          }

          .flow-chart-grid .text1 {
            top: 120px;
            left: 200px;
            width: 250px;
          }

          .flow-chart-grid .text2 {
            top: 270px;
            left: 565px;
            width: 150px;
          }

          .flow-chart-grid .text3 {
            top: 480px;
            left: 170px;
          }

          .flow-chart-grid .text4 {
            top: 280px;
            left: 20px;
            width: 100px;
          }
        }

        @media (max-width:767px) {
          .mobile-only {
            display: block;
          }

          .not-mobile {
            display: none;
          }

          .top-container {
            margin: 0px 0px 30px 0px;
          }

          .top-container IMG {
            margin-top: 10px;
          }

          .top-container H1 {
            margin: 50px 0px 0px 20px;
            font-size: 32px;
            font-weight: normal;
          }

          .top-container H2 {
            margin: 30px 0px 10px 20px;
            padding: 0px;
            text-align: left;
            font-size: 17px;
            font-weight: normal;
            line-height: 28px;
          }
        }
      </STYLE>
      <DIV CLASS="container-fluid top-banner-outer">
        <DIV CLASS="container top-banner-inner">
          <H1>Programme d’Affiliation</H1>
          <P>Intégrer le programme d’affiliation de Lynia</P>
        </DIV>
      </DIV>
      <DIV CLASS="flow-chart">
        <DIV CLASS="container">
          <H2>Programme Affilié Lynia</H2>
          <DIV CLASS="not-mobile">
            <DIV CLASS="flow-chart-grid">
              <SPAN CLASS="chart-title light">Fonctionnement du <STRONG>Programme <BR>d’affiliation de Lynia </STRONG>
              </SPAN>
              <SPAN CLASS="text1 light">Vous recommandez nos services sur votre blog, les réseaux sociaux, votre site Internet, ou à vos proches</SPAN>
              <SPAN CLASS="text2 light">Des visiteurs de votre site, des amis ou des membres de votre famille s’abonnent à Lynia en utilisant votre lien / identifiant affilié / domaine</SPAN>
              <SPAN CLASS="text3 light">Ils envoient leur premier colis en utilisant nos services</SPAN>
              <SPAN CLASS="text4 light">Vous êtes payé</SPAN>
            </DIV>
          </DIV>
          <DIV CLASS="mobile-only mobile-flow-chart">
            <H3 CLASS="light">Fonctionnement du <STRONG>Programme <BR>d’affiliation de Lynia </STRONG>
            </H3>
            <DIV CLASS="row">
              <DIV CLASS="col-xs-12">
                <IMG SRC="shipito/fr/imgs/affiliate/flowchart1m1.svg" CLASS="img-responsive">
              </DIV>
            </DIV>
            <DIV CLASS="row">
              <DIV CLASS="col-xs-6 text-center">Vous recommandez nos services sur votre blog, les réseaux sociaux, votre site Internet, ou à vos proches</DIV>
              <DIV CLASS="col-xs-6 text-center">Des visiteurs de votre site, des amis ou des membres de votre famille s’abonnent à Lynia en utilisant votre lien / identifiant affilié / domaine</DIV>
            </DIV>
            <DIV CLASS="row">
              <DIV CLASS="col-xs-12">
                <IMG SRC="shipito/fr/imgs/affiliate/flowchart1m2.svg" CLASS="img-responsive">
              </DIV>
            </DIV>
            <DIV CLASS="row">
              <DIV CLASS="col-xs-6 text-center" STYLE="padding-right: 15%;">Vous êtes payé.</DIV>
              <DIV CLASS="col-xs-6 text-center">Ils envoient leur premier colis en utilisant nos services</DIV>
            </DIV>
          </DIV>
        </DIV>
      </DIV>
      <DIV CLASS="our-affiliates">
        <DIV CLASS="container">
          <DIV CLASS="row">
            <H2 CLASS="section-title">
              <SPAN>Nos affiliés sont exactement comme vous</SPAN>
            </H2>
          </DIV>
          <DIV CLASS="row">
            <DIV CLASS="col-xs-12 text-center">
              <IMG SRC="shipito/fr/imgs/affiliate/flowchart2.svg" CLASS="img-responsive">
            </DIV>
          </DIV>
        </DIV>
      </DIV>
      <DIV CLASS="meet-affiliates light">
        <DIV CLASS="container">
          <DIV CLASS="row">
            <DIV CLASS="col-xs-12 col-md-6 col-lg-3">
              <CENTER>
                <DIV CLASS="speech-bubble">
                  <SPAN> Je gagne de l’argent quand mes amis expédient des colis avec Lynia </SPAN>
                </DIV>
                <DIV CLASS="affiliate-image">
                  <IMG SRC="shipito/fr/imgs/affiliate/Andrew.svg">
                </DIV>
                <H4>Faites connaissance avec Andrew</H4>
                <DIV CLASS="testimonial"> Lynia offre les meilleures commissions de l’industrie. Plus les utilisateurs que vous avez recrutés expédient, plus vous recevez d’argent. Gagner de l’argent ne peut pas être plus facile. </DIV>
              </CENTER>
            </DIV>
            <DIV CLASS="col-xs-12 col-md-6 col-lg-3">
              <CENTER>
                <DIV CLASS="speech-bubble">
                  <SPAN> Je dirige un blog de mode et maquillage. Mes lecteurs adorent Lynia ! </SPAN>
                </DIV>
                <DIV CLASS="affiliate-image">
                  <IMG SRC="shipito/fr/imgs/affiliate/Anny.svg">
                </DIV>
                <H4>Faites connaissance avec Anny</H4>
                <DIV CLASS="testimonial"> Recevez 10 % de commission, payable dès l’envoi du premier colis de votre client (magasines et lettres exclus). Gagnez des commissions en plus avec l’envoi de leur 5e, 10e et 20e colis. </DIV>
              </CENTER>
            </DIV>
            <DIV CLASS="col-xs-12 col-md-6 col-lg-3">
              <CENTER>
                <DIV CLASS="speech-bubble">
                  <SPAN> Je réalise plus de 2 000 USD par mois grâce à mon forum d’offres commerciales </SPAN>
                </DIV>
                <DIV CLASS="affiliate-image">
                  <IMG SRC="shipito/fr/imgs/affiliate/Bruno.svg">
                </DIV>
                <H4>Faites connaissance avec Bruno</H4>
                <DIV CLASS="testimonial"> Un autre affilié gagne plus de 1 000 USD en faisant la promotion de Lynia sur son application iPhone. Les blogs, forums, applications mobile et groupes sociaux sont tous de bons moyens d’obtenir de nouveaux clients et réaliser des profits lorsqu’ils expédient avec Lynia. </DIV>
              </CENTER>
            </DIV>
            <DIV CLASS="col-xs-12 col-md-6 col-lg-3">
              <CENTER>
                <DIV CLASS="speech-bubble">
                  <SPAN> Je possède une chaîne Youtube pour parler des gadgets de haute technologie </SPAN>
                </DIV>
                <DIV CLASS="affiliate-image">
                  <IMG SRC="shipito/fr/imgs/affiliate/David.svg">
                </DIV>
                <H4>Faites connaissance avec David</H4>
                <DIV CLASS="testimonial"> Beaucoup de vlogueurs et personnes influentes se servent de leurs chaînes pour montrer comment faire de bonnes affaires sur les sites d’achats en ligne Américains. Ils expliquent ensuite aux expéditeurs comment envoyer des colis avec Lynia, gagnant ainsi plus d’argent lorsqu’ils expédient 5, 10, 20 fois. </DIV>
              </CENTER>
            </DIV>
          </DIV>
        </DIV>
      </DIV>
      <DIV CLASS="why-join light">
        <DIV CLASS="container">
          <DIV CLASS="row">
            <H2 CLASS="section-title">
              <SPAN>Raisons d’intégrer notre programme d’affililation</SPAN>
            </H2>
          </DIV>
          <H2>Recommandation du site Lynia.com à des clients</H2>
          <UL>
            <LI>Commission la plus importante de l’industrie</LI>
            <LI>10% de commission sur les frais d’emballage du premier colis que votre client expédie</LI>
            <LI>Commission en plus lorsque vous atteignez certains objectifs</LI>
            <LI>Opportunité de revenu résiduel</LI>
          </UL>
          <H2>Qui peut utiliser notre programme d’affiliation ?</H2>
          <UL>
            <LI>Vous en tant que client, en recommendant vos amis et des membres de votre famille</LI>
            <LI>Les blogueurs</LI>
            <LI>Propriétaires de sites Internet</LI>
            <LI>Commerçants</LI>
          </UL>
          <H2>Comment démarrer</H2>
          <UL>
            <LI> Souscrivez à notre programme d’affiliation ici <BR>
              <IMG SRC="shipito/fr/imgs/affiliate/AffiliatePrograme_How1.png" CLASS="img-responsive not-mobile">
              <IMG SRC="shipito/fr/imgs/affiliate/AffiliateSignUp_Mobile.png" CLASS="img-responsive mobile-only">
              <P> Connectez-vous à votre compte Lynia et accédez à Mon compte/Mon compte affilié/Inscription affilié pour créer mon compte affilié. </P>
            </LI>
          </UL>
          <H2>Notre programme d’affiliation en quelques mots</H2>
          <UL>
            <LI>Bonus spécial si vos clients expédient plusieurs colis : 5 USD de commission pour le 5e colis, 10 USD pour le 10e, et 20 USD pour le 20e colis, pour chaque client</LI>
            <LI>Les liens n’ont pas besoin de l’identité de l’affilié lorsque votre site Iternet est enregistré dans son compte (en se basant sur les renseignements WHOIS)</LI>
            <LI>Pas de traçage par cookies dans le navigateur internet des utilisateurs</LI>
            <LI>Les paiements sont effectués par Paypal, virement bancaire (frais de paiement applicables), ou crédit provenant de votre compte Lynia. Vous pouvez réclamer les paiements directement depuis votre compte</LI>
            <LI>L’activation de notre programme d’affiliation est gratuite</LI>
            <LI>La license de commerce est facultative</LI>
          </UL>
        </DIV>
        <DIV CLASS="container bottom-affiliate-links">
          <DIV CLASS="row">
            <DIV CLASS="col-xs-12 text-left">
              <A href="#">Foire aux questions concernant l’affiliation</A>
            </DIV>
          </DIV>
          <BR>
          <BR>
          <DIV CLASS="row">
            <DIV CLASS="col-xs-12 text-center">
              <A href="#" CLASS="btn btn-secondary btn-lg">Joignez Notre Affilié</A>
            </DIV>
          </DIV>
        </DIV>
      </DIV>
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
          $('#banner-container').load('/fr/banner-ads?pg=/shipito-affiliates');
        }
      });
    </SCRIPT>
  </BODY>
  <!-- Mirrored from www.shipito.com/fr/shipito-affiliates by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 13:46:08 GMT -->
</HTML>
<!--- Copyright 2024 GlobalAccess All Rights Reserved -->
<!--- Web Server 3088 -->
