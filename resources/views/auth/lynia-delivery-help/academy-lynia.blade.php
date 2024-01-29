<!DOCTYPE html>
<!-- saved from url=(0058)https://www.shipito.com/fr/account/help/shipito-university -->
<html dir="ltr" lang="fr">
    @include('layouts.head-auth')

<body cz-shortcut-listen="true">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5NGCCHV" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="menu-filler" class="with-tabs"></div>
    <a name="page-top" id="page-top" class="with-tabs"></a> @include('layouts.header') <div id="responsive-package-search-wrapper" class="hide-lg collapsed">
      <form method="POST" action="https://www.shipito.com/fr/account/incoming-packages/search" name="responsivepackagesearchform" id="responsivepackagesearchform" class="form-inline">
        <div class="form-group">
          <div class="input-group input-group-lg">
            <input type="text" name="incomingpackage.keyword" id="responsive-package-search-input" class="form-control collapsed" placeholder="Recherche de colis">
            <span class="input-group-btn">
              <button type="BUTTON" class="btn" id="responsive-package-search-btn">
                <i class="icon-search"></i>
              </button>
              <button type="BUTTON" class="btn" id="responsive-package-search-close-btn">
                <i class="icon-times"></i>
              </button>
            </span>
          </div>
        </div>
      </form>
    </div>
    <div class="my-packages-wrapper">
      <div class="container my-packages">
        <div class="row">
          <div class="col-sm-3 col-xs-3">
            <a href="https://www.shipito.com/fr/account/incoming-packages/action-required">
              <i class="icon-packages-in-warehouse"></i>
              <br class="hide-lg"> Colis dans l'entrepôt </a>
          </div>
          <div class="col-sm-3 col-xs-3">
            <a href="https://www.shipito.com/fr/account/sent-packages">
              <i class="icon-sent-packages"></i>
              <br class="hide-lg"> Colis Expédiés </a>
          </div>
          <div class="col-sm-3 col-xs-3">
            <a href="https://www.shipito.com/fr/account/expected-packages">
              <i class="icon-expected-package"></i>
              <br class="hide-lg"> Colis attendus </a>
          </div>
          <div class="col-sm-3 col-xs-3">
            <a href="https://www.shipito.com/fr/account/assisted-purchase">
              <i class="icon-assisted-purchase"></i>
              <br class="hide-lg"> Achat Assisté </a>
          </div>
        </div>
      </div>
    </div>
    <div id="page-content" class="page-content">
      <style type="text/css">
        .top-banner-outer {
          background-color: #6499CF;
          max-height: 200px;
          border-bottom: solid 10px #6499CF;
          margin-bottom: 50px;
        }

        .top-banner-inner {
          max-height: 190px;
          background-image: url("files/UniversityBanner.svg");
          background-size: 90% auto;
          background-position: center bottom;
          background-repeat: no-repeat;
        }

        .top-banner-inner H1 {
          margin: 0px 0px 0px 0px;
          line-height: 190px;
          vertical-align: middle;
          text-align: center;
          color: #FFFFFF;
        }

        .university-logo {
          width: 180px;
          height: auto;
          margin-bottom: 50px;
        }

        .list-tabs {
          margin-top: 50px;
        }

        .scroll-wrapper {
          border-bottom: solid 1px #00A9CE;
          width: 100%;
          max-width: 100%;
          overflow-x: auto;
        }

        TABLE.my-tabs {
          width: 100%;
          table-layout: fixed;
        }

        TABLE.my-tabs TD {
          padding: 20px;
          vertical-align: middle;
          text-align: center;
          cursor: pointer;
          text-transform: uppercase;
        }

        TABLE.my-tabs TD.active {
          border-bottom: solid 2px #00A9CE;
          color: #00A9CE;
        }

        .video-link {
          cursor: pointer;
        }

        .video-link DIV {
          padding: 10px;
        }

        .clear-it {
          clear: both;
        }

        .video-link DIV.caption {
          font-size: 20px;
          font-weight: 300;
        }

        .video-link DIV.date {
          font-size: 16px;
          font-weight: 300;
        }

        @media (max-width :767px) {
          .top-banner-outer {
            height: 280px;
          }

          .top-banner-inner {
            height: 280px;
            background-image: url("/fr/imgs/university/bannerm.svg");
            background-size: 90% auto;
            background-position: center bottom;
          }

          .top-banner-inner H1 {
            line-height: 100px;
          }

          TABLE.my-tabs {
            width: auto;
          }

          TABLE.my-tabs TD {
            white-space: nowrap;
            vertical-align: middle;
          }

          TABLE.my-tabs TD:first-of-type {
            padding-left: 0px;
          }

          TABLE.my-tabs TD:last-of-type {
            padding-right: 0px;
          }
        }
      </style>
      <div class="container-fluid top-banner-outer">
        <div class="container top-banner-inner">
          <h1>Académie Shipito </h1>
        </div>
      </div>
      <section class="container">
        <div class="text-center">
          <img src="files/ShipitoUniversityLogo.svg" border="0" class="university-logo">
        </div>
        <p> L’Académie Shipito est une banque d’informations qui a pour but d’aider votre navigation sur notre site et l’envoi de vos colis. Chaque courte vidéo vous en apprend davantage sur le fonctionnement de Shipito et sur la navigation dans votre compte. </p>
        <p> Vous trouverez ci-dessous une série de vidéos vous montrant comment utiliser votre compte Shipito pour faire vos achats aux États-Unis, ainsi qu'un lien vers notre <a href="https://www.shipito.com/fr/help/faq" target="_blank"> Foire Aux Questions </a> et la liste des articles dont l’envoi est <a href="https://www.shipito.com/fr/help/tutorials/prohibited-items" target="_blank"> interdit ou soumis à des restrictions </a>. Grâce à toutes ces informations concernant la façon d’utiliser votre compte Shipito, vous pouvez commencer vos achats et vos envois en toute sérénité. Pour toutes suggestions concernant une prochaine vidéo, contactez-nous à <a href="mailto:Marketing@shipito.com"> Marketing@shipito.com </a>. </p>
        <div class="list-tabs">
          <div class="scroll-wrapper">
            <table class="my-tabs">
              <tbody>
                <tr>
                  <td class="active" data-toggle="tab" data-target="#ltx1">Débuter</td>
                  <td data-toggle="tab" data-target="#ltx2">Aide</td>
                  <td data-toggle="tab" data-target="#ltx3">Colis, Paiement et Services</td>
                  <td data-toggle="tab" data-target="#ltx4">Récompenses et affiliations</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="tab-content">
            <div id="ltx1" class="tab-pane fade in active">
              <div class="row">
                <div class="hide-sm clear-it"></div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=1IYcrFzV9g4">
                  <div class="text-center">
                    <img src="files/Prohibited_Limited.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Directives concernant les envois interdits ou soumis à des restrictions</div>
                  <div class="date">2021-03-29</div>
                </div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=W7l0Wv81bRo">
                  <div class="text-center">
                    <img src="files/best_deal.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Comment bénéficier des meilleures offres de Shipito</div>
                  <div class="date">2021-03-29</div>
                </div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=bp4nqCXOel4">
                  <div class="text-center">
                    <img src="files/Phone_Number.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Comment créer un numéro de téléphone international</div>
                  <div class="date">2021-03-29</div>
                </div>
                <div class="hide-sm clear-it"></div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=JQObxYA3XqI">
                  <div class="text-center">
                    <img src="files/Start_Shopping.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Comment commencer vos achats aux États-Unis</div>
                  <div class="date">2021-03-29</div>
                </div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=fApzS0Mcjtg">
                  <div class="text-center">
                    <img src="files/Complete_Purchase.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Comment effectuer vos achats aux États-Unis</div>
                  <div class="date">2021-03-29</div>
                </div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=kLqf_OB8gQ8">
                  <div class="text-center">
                    <img src="files/Free_Address.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Comment obtenir une adresse américaine gratuite</div>
                  <div class="date">2021-03-29</div>
                </div>
                <div class="hide-sm clear-it"></div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=0f52neL4g-M">
                  <div class="text-center">
                    <img src="files/Shipito_address.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Comment retrouver votre adresse Shipito</div>
                  <div class="date">2021-03-29</div>
                </div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=7uBcOSguY4c">
                  <div class="text-center">
                    <img src="files/home_address.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Comment ajouter l’adresse de votre domicile</div>
                  <div class="date">2021-03-29</div>
                </div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=PTgg49ucS3M">
                  <div class="text-center">
                    <img src="files/Customs_declaration.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Comment remplir le formulaire de douane</div>
                  <div class="date">2021-03-29</div>
                </div>
                <div class="hide-sm clear-it"></div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=8gB6Pg-c6Is">
                  <div class="text-center">
                    <img src="files/Unblock_websites.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Débloquez GRATUITEMENT les sites internet bloqués ou censurés dans votre pays grâce à HOLA!</div>
                  <div class="date">2021-03-29</div>
                </div>
              </div>
            </div>
            <div id="ltx2" class="tab-pane fade">
              <div class="row">
                <div class="hide-sm clear-it"></div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=4cy8-5f-YwQ">
                  <div class="text-center">
                    <img src="files/Assisted_Purchase.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Comment planifier un service d’aide à l’achat</div>
                  <div class="date">2021-03-29</div>
                </div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://youtu.be/kdoV5ighVpU">
                  <div class="text-center">
                    <img src="files/Shipito_Notifications.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Que sont les notifications de Shipito?</div>
                  <div class="date">2021-03-29</div>
                </div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=-65-RXPY6qI">
                  <div class="text-center">
                    <img src="files/Call_Shipito_Support.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Comment appeler le service client de Shipito</div>
                  <div class="date">2021-03-29</div>
                </div>
                <div class="hide-sm clear-it"></div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=-_DZvC3cKmM">
                  <div class="text-center">
                    <img src="files/membership_plan.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Comment changer votre abonnement Shipito</div>
                  <div class="date">2021-03-29</div>
                </div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=dJkLPJVCWcs">
                  <div class="text-center">
                    <img src="files/assisted_purchase_is_completed.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Comment savoir quand le service d’aide à l’achat est terminé</div>
                  <div class="date">2021-03-29</div>
                </div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://youtu.be/DH2a4HQhHQA">
                  <div class="text-center">
                    <img src="files/Form_1583.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Comment remplir le formulaire 1583</div>
                  <div class="date">2021-03-29</div>
                </div>
                <div class="hide-sm clear-it"></div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=EuYBPW0cfV0">
                  <div class="text-center">
                    <img src="files/Live_Chat.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Comment contacter Shipito via le chat en direct</div>
                  <div class="date">2021-03-29</div>
                </div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=oIZ0rrnZf5Q">
                  <div class="text-center">
                    <img src="files/support_ticket.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Comment créer un ticket d’assistance</div>
                  <div class="date">2021-03-29</div>
                </div>
              </div>
            </div>
            <div id="ltx3" class="tab-pane fade">
              <div class="row">
                <div class="hide-sm clear-it"></div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=xHvpCIIo594">
                  <div class="text-center">
                    <img src="files/Verify_Your_Card.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Comment ajouter et vérifier votre carte bancaire avec Shipito</div>
                  <div class="date">2021-03-29</div>
                </div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=DN5Nkys7HQk">
                  <div class="text-center">
                    <img src="files/Fast_MailOut.jpg.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Qu'est-ce que le Fast Mail Out (envoi rapide) de Shipito?</div>
                  <div class="date">2021-03-29</div>
                </div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=8GGpmF77TYM">
                  <div class="text-center">
                    <img src="files/package_preferences.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Comment faire des économies en spécifiant vos préférences pour les colis entrants</div>
                  <div class="date">2021-03-29</div>
                </div>
                <div class="hide-sm clear-it"></div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=OPRyvaxFcRI">
                  <div class="text-center">
                    <img src="files/Return_Package.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Comment retourner un colis au magasin</div>
                  <div class="date">2021-03-29</div>
                </div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=J0Ef7QvqTTA">
                  <div class="text-center">
                    <img src="files/store_my_package.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Quelle est la durée du temps de stockage</div>
                  <div class="date">2021-03-29</div>
                </div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=XQnLHWQMeoY">
                  <div class="text-center">
                    <img src="files/Storag_Time.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Comment acheter plus de temps de stockage pour mon colis Shipito</div>
                  <div class="date">2021-03-29</div>
                </div>
                <div class="hide-sm clear-it"></div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=aUNj_tSh7CE">
                  <div class="text-center">
                    <img src="files/Shipping_Calculator.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Comment utiliser le calculateur de frais d’envoi de Shipito</div>
                  <div class="date">2021-03-29</div>
                </div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=kQI4XHCMrzc">
                  <div class="text-center">
                    <img src="files/Split_Package.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Comment diviser un colis en plusieurs </div>
                  <div class="date">2021-03-29</div>
                </div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=97inO15s-EU">
                  <div class="text-center">
                    <img src="files/USUnlocked.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Comment créer une carte virtuelle prépayée avec US Unlocked</div>
                  <div class="date">2021-03-29</div>
                </div>
                <div class="hide-sm clear-it"></div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=j2ybNo77Pgk">
                  <div class="text-center">
                    <img src="files/consolidation.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Comment faire la demande d’un regroupement de colis</div>
                  <div class="date">2021-03-29</div>
                </div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=VLjplOf18gk">
                  <div class="text-center">
                    <img src="files/Package_Storage.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Stockage des colis chez Shipito</div>
                  <div class="date">2021-03-29</div>
                </div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=7ayV57hQKmU">
                  <div class="text-center">
                    <img src="files/Additional_Service.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Comment ajouter un Service Supplémentaire pour votre colis</div>
                  <div class="date">2021-03-29</div>
                </div>
                <div class="hide-sm clear-it"></div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=uv32h61u_cA">
                  <div class="text-center">
                    <img src="files/Ship_Package.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Comment expédier un colis</div>
                  <div class="date">2021-03-29</div>
                </div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=CYjfU-Eq72M">
                  <div class="text-center">
                    <img src="files/Track_Package.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Comment faire le suivi de vos colis</div>
                  <div class="date">2021-03-29</div>
                </div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=03XEYtsQgrU">
                  <div class="text-center">
                    <img src="files/mq2.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Comment fonctionnent les remboursements</div>
                  <div class="date">2021-04-29</div>
                </div>
                <div class="hide-sm clear-it"></div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=-NO6XBF-62w">
                  <div class="text-center">
                    <img src="files/mq1.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Comment fonctionnent les remboursements avec la carte de crédit</div>
                  <div class="date">2021-04-29</div>
                </div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=xlyHEg7XbNE">
                  <div class="text-center">
                    <img src="files/mq2 (1).jpg" class="img-responsive">
                  </div>
                  <div class="caption">Comment fonctionnent les remboursements avec Boleto</div>
                  <div class="date">2021-04-29</div>
                </div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=xm_F6mxJtfI&amp;t=6s">
                  <div class="text-center">
                    <img src="files/mq1 (1).jpg" class="img-responsive">
                  </div>
                  <div class="caption">Que sont les marchandises dangereuses et comment les expédier</div>
                  <div class="date">2021-04-29</div>
                </div>
                <div class="hide-sm clear-it"></div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=5rP7t-wPBh4&amp;t=10s">
                  <div class="text-center">
                    <img src="files/mq1 (2).jpg" class="img-responsive">
                  </div>
                  <div class="caption">Comment fonctionnent les remboursements avec PayPal</div>
                  <div class="date">2021-04-29</div>
                </div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=2ITmmLkcCCY">
                  <div class="text-center">
                    <img src="files/mq2 (2).jpg" class="img-responsive">
                  </div>
                  <div class="caption">Comment fonctionnent les remboursements avec Bitcoin</div>
                  <div class="date">2021-04-29</div>
                </div>
              </div>
            </div>
            <div id="ltx4" class="tab-pane fade">
              <div class="row">
                <div class="hide-sm clear-it"></div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=JMmikj9nHvA">
                  <div class="text-center">
                    <img src="files/Referral_program.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Qu'est-ce que le programme de parrainage de Shipito?</div>
                  <div class="date">2021-03-29</div>
                </div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=lqyObMekZ6U">
                  <div class="text-center">
                    <img src="files/Affiliate_Program.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Comment gagner de l'argent avec le programme d'affiliation de Shipito</div>
                  <div class="date">2021-03-29</div>
                </div>
                <div class="col-xs-12 col-sm-4 video-link" data-content="https://www.youtube.com/watch?v=C9VPfi6tzVQ">
                  <div class="text-center">
                    <img src="files/Shipito_Member_Rewards.jpg" class="img-responsive">
                  </div>
                  <div class="caption">Qu'est-ce que le programme de récompenses de Shipito?</div>
                  <div class="date">2021-03-29</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="container">
        <h2 class="section-title">
          <span>Questions fréquemment posées</span>
        </h2>
        <p class="text-center"> Nous avons conçu une liste de réponses aux questions les plus fréquemment posées. Pour trouver la réponse à vos questions, cliquez sur l'icône de la catégorie correspondante. </p>
        <div class="faq-items">
          <a href="https://www.shipito.com/fr/help/faq/getting-started" class="topic">
            <div class="icon">
              <img src="files/GetStarted.svg" border="0">
            </div>
            <div class="content">
              <h2>Par où commencer</h2>
              <p>Découvrez comment devenir un abonné Shipito.</p>
            </div>
          </a>
          <a href="https://www.shipito.com/fr/help/faq/packages" class="topic">
            <div class="icon">
              <img src="files/Packages.svg" border="0">
            </div>
            <div class="content">
              <h2>Colis</h2>
              <p>Renseignements concernant le traitement des colis et les entrepôts.</p>
            </div>
          </a>
          <a href="https://www.shipito.com/fr/help/tutorials/prohibited-items" class="topic">
            <div class="icon">
              <img src="files/Prohibited.svg" border="0">
            </div>
            <div class="content">
              <h2>Liste des produits interdits</h2>
              <p>Important! Avant de commencer vos achats, vérifiez ce qui peut être expédié vers votre pays ou pas.</p>
            </div>
          </a>
          <a href="https://www.shipito.com/fr/help/faq/account-navigation" class="topic">
            <div class="icon">
              <img src="files/AccountNav.svg" border="0">
            </div>
            <div class="content">
              <h2>Interface du compte</h2>
              <p>Familiarisez-vous avec votre compte et les abonnements.</p>
            </div>
          </a>
          <a href="https://www.shipito.com/fr/help/faq/carrier-tracking" class="topic">
            <div class="icon">
              <img src="files/Tracking.svg" border="0">
            </div>
            <div class="content">
              <h2>Envoi et suivi</h2>
              <p>Découvrez comment obtenir les mises à jour du suivi et de la livraison de votre colis.</p>
            </div>
          </a>
          <div class="break"></div>
          <a href="https://www.shipito.com/fr/help/faq/customs" class="topic">
            <div class="icon">
              <img src="files/Customs.svg" border="0">
            </div>
            <div class="content">
              <h2>Douanes, droits de douanes et taxes</h2>
              <p>En savoir plus sur les exigences douanières, les formulaires EEI, les droits et taxes à payer.</p>
            </div>
          </a>
          <a href="https://www.shipito.com/fr/help/faq/services" class="topic">
            <div class="icon">
              <img src="files/Services.svg" border="0">
            </div>
            <div class="content">
              <h2>Services</h2>
              <p>Découvrez tous les services disponibles pour vos envois.</p>
            </div>
          </a>
          <a href="https://www.shipito.com/fr/help/faq/payments" class="topic">
            <div class="icon">
              <img src="files/Payments.svg" border="0">
            </div>
            <div class="content">
              <h2>Paiements</h2>
              <p>Quels modes de paiement et devises sont acceptés par Shipito?</p>
            </div>
          </a>
          <a href="https://www.shipito.com/fr/help/faq/claims" class="topic">
            <div class="icon">
              <img src="files/Claims.svg" border="0">
            </div>
            <div class="content">
              <h2>Réclamations, assurance et remboursements</h2>
              <p>Signalez perte, vol ou dommages.</p>
            </div>
          </a>
          <a href="https://www.shipito.com/fr/help/faq/affiliate-faq" class="topic">
            <div class="icon">
              <img src="files/AffiliateIcon.svg" border="0">
            </div>
            <div class="content">
              <h2>Affilié</h2>
              <p>Rejoignez le programme d’affiliation de Shipito et découvrez comment gagner de l’argent à chaque nouvelle recommandation!</p>
            </div>
          </a>
        </div>
      </section>
      <script>
        $(document).ready(function(evt) {
          $('.video-link').click(function(evt) {
            var url = $(this).attr('data-content');
            window.open(url);
          });
          $('.my-tabs TD').click(function(evt) {
            $(this).closest('.my-tabs').find('TD').removeClass('active');
            $(this).addClass('active');
          });
        });
      </script>
    </div>
    @include('layouts.footer-auth')
  </body>
</html>
