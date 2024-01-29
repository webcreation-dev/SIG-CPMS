<!DOCTYPE html>
<!-- saved from url=(0052)https://www.shipito.com/fr/account/expected-packages -->
<html dir="ltr" lang="fr">
    @include('layouts.head-auth')

  <body cz-shortcut-listen="true" class="" style="">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5NGCCHV" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="menu-filler" class="with-tabs"></div>
    <a name="page-top" id="page-top" class="with-tabs"></a>

    @include('layouts.header')

    <div id="responsive-package-search-wrapper" class="hide-lg collapsed">
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
              <a href="/packages-action-required" >
                <i class="icon-packages-in-warehouse"></i>
                <br class="hide-lg"> Colis dans l'entrepôt </a>
            </div>
            <div class="col-sm-3 col-xs-3">
              <a href="/packages-in-transit" >
                <i class="icon-sent-packages"></i>
                <br class="hide-lg"> Colis Expédiés </a>
            </div>
            <div class="col-sm-3 col-xs-3">
              <a href="/packages-add-ship">
                <i class="icon-expected-package" class="ACTIVE"></i>
                <br class="hide-lg"> Colis attendus </a>
            </div>
            <div class="col-sm-3 col-xs-3">
              <a href="/purchase-add-articles">
                <i class="icon-assisted-purchase"></i>
                <br class="hide-lg"> Achat Assisté </a>
            </div>
          </div>
        </div>
    </div>
    <div id="page-content" class="page-content">
      <div class="main-body">
        <div class="container package-list">
          <div class="row">
            <div class="col-sm-6 col-xs-12 text-left">
              <h2>Colis attendus</h2>
            </div>
            <div class="col-sm-6 col-xs-12 text-right text-center-sm">
              <a href="/purchase-articles" id="add-package-btn" class="btn btn-primary" onclick="return gaPopUpDisplay(this);">
                <i class="fa fa-plus fa-fw"></i> Ajouter un colis </a>
              <a href="https://www.shipito.com/fr/account/support-tickets/open-new?crmticket.tickettype=20" id="missing-package-btn" class="btn btn-default" onclick="return gaPopUpDisplay(this);">Signaler un Colis Manquant</a>
            </div>
          </div>
          <br>
          <br>
        </div>
      </div>
    </div>
    <script>
      $('.btn-cancel-mailout').click(function(evt) {
        if (!confirm('Etes-vous sûr(e) de vouloir annuler l\'envoi automatique de ce colis?')) {
          evt.preventDefault();
          return false;
        }
      });
    </script>

    @include('layouts.footer-auth')

    <div class="modal popup fade" id="popup" role="dialog" style="display: none;">
      <div class="modal-dialog modal-lg">
        <div class="modal-content" id="popupcontent">
          <form method="POST" action="https://www.shipito.com/servlet/Account" name="createform" id="createform" enctype="multipart/form-data">
            <input type="HIDDEN" name="act" value="CRMTicket.create">
            <input type="HIDDEN" name="cmscountry" value="us">
            <input type="HIDDEN" name="cmslanguage" value="fr">
            <input type="HIDDEN" name="gasv" value="2924807557820894208">
            <input type="HIDDEN" name="postingpageurl" value="/fr/account/support-tickets/open-new?crmticket.tickettype=20">
            <div class="modal-header">
              <button type="BUTTON" data-dismiss="modal" data-bs-dismiss="modal" class="close">
                <i class="icon-close"></i>
              </button>
              <h2> Ouvrir un Nouveau Ticket d'Assistance </h2>
            </div>
            <div class="modal-body">
              <div id="disclaimer">
                <p> Dû au volume important de colis arrivant à notre entrepôt, l'ajout d'un colis à votre compte peut prendre jusqu'à 1 jour ouvré une fois réceptionné. Si votre colis a été livré il y a plus de 24 heures, vous pouvez ouvrir un ticket pour nous en informer. </p>
                <div class="row">
                  <div class="col-xs-12 text-center">
                    <button type="BUTTON" class="btn btn-default" id="open-ticket-button" title="Ouvrir un Ticket">Ouvrir un Ticket</button>
                  </div>
                </div>
              </div>
              <div id="open-ticket" style="display: none;">
                <div class="form-group">
                  <label for="crmticket.tickettype">Que souhaitez-vous faire?</label>
                  <br>
                  <div class="radio">
                    <label>
                      <input type="RADIO" name="crmticket.tickettype" value="50" onclick="return formvalidator.formUpdated(this.form, this);" required="REQUIRED">
                      <span class="custom-radio-btn"></span>Poser une question sur le site internet </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="RADIO" name="crmticket.tickettype" value="20" onclick="return formvalidator.formUpdated(this.form, this);" required="REQUIRED" checked="">
                      <span class="custom-radio-btn"></span>Signaler un colis qui n'a pas été reçu dans l'Entrepôt Shipito </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="RADIO" name="crmticket.tickettype" value="30" onclick="return formvalidator.formUpdated(this.form, this);" required="REQUIRED">
                      <span class="custom-radio-btn"></span>Signaler un colis qui n'a pas été livré à votre domicile </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="RADIO" name="crmticket.tickettype" value="40" onclick="return formvalidator.formUpdated(this.form, this);" required="REQUIRED">
                      <span class="custom-radio-btn"></span>Signaler un colis endommagé lors de son acheminement à votre domicile </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="RADIO" name="crmticket.tickettype" value="70" onclick="return formvalidator.formUpdated(this.form, this);" required="REQUIRED">
                      <span class="custom-radio-btn"></span>Obtenir de l'aide concernant les paiements </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="RADIO" name="crmticket.tickettype" value="500" onclick="return formvalidator.formUpdated(this.form, this);" required="REQUIRED">
                      <span class="custom-radio-btn"></span>Poser une question générale </label>
                  </div>
                </div>
                <div class="well" id="missing-package-instructions"> Si un colis aurait dû être livré à l'un de nos entrepôts mais n'apparaît pas dans votre compte, merci de nous fournir les informations suivantes afin de nous permettre de le localiser: <br>
                  <ul>
                    <li>Le nom du vendeur/site internet sur lequel vous avez effectué vos achats</li>
                    <li>Le transporteur et/ou le # de suivi du colis</li>
                    <li>L'entrepôt Shipito vers lequel le colis a été envoyé</li>
                    <li>La date de livraison du colis à l'entrepôt</li>
                  </ul>
                </div>
                <div class="well" id="undelivered-package-instructions" style="display: none;"> Si l’un de vos colis n’a pas été livré à votre domicile dans le délai imparti, merci de bien vouloir nous indiquer les informations suivantes: <ul>
                    <li>Le # de Commande/Envoi associé à votre colis</li>
                    <li>La date à laquelle votre colis aurait dû vous être livré</li>
                  </ul> Nous nous mettrons en relation avec le transporteur afin de localiser votre colis. </div>
                <div class="well" id="damaged-package-instructions" style="display: none;"> Si votre colis a été livré endommagé à votre domicile et que vous avez souscrit une Assurance Dommages, merci de nous fournir les informations suivantes: <ul>
                    <li>Le numéro d'Envoi/de Commande associé au colis</li>
                    <li>La date à laquelle le colis a été livré</li>
                    <li>Une description détaillée des dommages (joindre une photo si possible)</li>
                  </ul> Nous traiterons votre réclamation et vous rembourserons le cas échéant. </div>
                <div id="warehouse-id">
                  <div class="form-group">
                    <label for="crmticket.warehouseid">Entrepôt</label>
                    <select name="crmticket.warehouseid" class="form-control" onchange="return formvalidator.formUpdated(this.form, this);" onkeypress="return formvalidator.checkFormat(this, event);">
                      <option value="-1" selected="True">--- Aucun ---</option>
                      <option value="8">Chiba, Japan</option>
                      <option value="6">Rastenfeld, Austria</option>
                      <option value="7">Torrance, California</option>
                      <option value="1">Tualatin, Oregon</option>
                    </select>
                  </div>
                </div>
                <div id="tracking-number">
                  <div class="form-group">
                    <label for="crmticket.trackingnumber">Numéro de Suivi</label>
                    <input type="TEXT" name="crmticket.trackingnumber" class="form-control" maxlength="100" onchange="return formvalidator.formUpdated(this.form, this);" onkeypress="return formvalidator.checkFormat(this, event);">
                  </div>
                </div>
                <div id="delivery-date">
                  <div class="form-group">
                    <label for="crmticket.reporteddeliverydate">Date de Livraison à l'entrepôt</label>
                    <div class="input-group ga-date-input">
                      <input type="TEXT" name="crmticket.reporteddeliverydate" value="01/28/2024" id="crmticketreporteddeliverydate" class="form-control">
                      <span class="input-group-btn">
                        <button type="BUTTON" class="btn btn-default" id="crmticketreporteddeliverydatebtn">
                          <i class="fa fa-calendar"></i>
                        </button>
                      </span>
                      <script>
                        $('#crmticketreporteddeliverydate').datepicker({
                          format: 'mm/dd/yyyy',
                          autoclose: true
                        });
                        $('#crmticketreporteddeliverydatebtn').click(function(e) {
                          $('#crmticketreporteddeliverydate').datepicker('show');
                          e.preventDefault();
                        });
                      </script>
                    </div>
                  </div>
                </div>
                <div id="order-id" style="display: none;">
                  <div class="form-group">
                    <label for="crmticket.orderid">N° Envoi/Commande</label>
                    <select name="crmticket.orderid" class="form-control" onchange="return formvalidator.formUpdated(this.form, this);" onkeypress="return formvalidator.checkFormat(this, event);">
                      <option value="-1" selected="True">--- Aucun ---</option>
                    </select>
                  </div>
                </div>
                <div id="incoming-package-id" style="display: none;">
                  <div class="form-group">
                    <label for="crmticket.incomingpackageid">Colis Entrant</label>
                    <select name="crmticket.incomingpackageid" class="form-control" onchange="return formvalidator.formUpdated(this.form, this);" onkeypress="return formvalidator.checkFormat(this, event);">
                      <option value="-1" selected="True">--- Aucun ---</option>
                    </select>
                  </div>
                </div>
                <div id="initial-message">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="form-group">
                        <label for="crmmessage.subject">Sujet</label>
                        <input type="TEXT" name="crmmessage.subject" class="form-control" placeholder="Sujet de votre demande" maxlength="100" onchange="return formvalidator.formUpdated(this.form, this);" onkeypress="return formvalidator.checkFormat(this, event);" required="REQUIRED">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="form-group">
                        <label for="crmmessage.content">Détails</label>
                        <br>
                        <textarea name="crmmessage.content" class="form-control tall-text-area" placeholder="Merci de fournir des informations précises à propos de votre question/demande." onchange="return formvalidator.formUpdated(this.form, this);" onkeypress="return formvalidator.checkFormat(this, event);" required="REQUIRED"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <label>Pièce(s) jointe(s)</label>
                    </div>
                  </div>
                  <div class="row" id="attachments">
                    <div id="attachment-field">
                      <div class="col-xs-12">
                        <div class="input-group">
                          <span class="input-group-addon input-group-text"></span>
                          <input type="FILE" name="crmmessageattachment.attachmentfile" class="form-control" onchange="return formvalidator.formUpdated(this.form, this);" onkeypress="return formvalidator.checkFormat(this, event);">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer text-right">
              <button type="BUTTON" data-dismiss="modal" data-bs-dismiss="modal" class="btn btn-default" id="close-window-button" title="Fermer la fenêtre">Fermer la fenêtre</button>
              <button type="SUBMIT" class="btn btn-primary" id="submit-button" title="Envoyer le Ticket" style="display: none;">Envoyer le Ticket</button>
            </div>
          </form>
          <script>
            $('#disclaimer').show();
            $('#open-ticket').hide();
            $('#submit-button').hide();
            $('#open-ticket-button').click(function(evt) {
              evt.preventDefault();
              $('#disclaimer').hide();
              $('#open-ticket').show();
              $('#submit-button').show();
            });
          </script>
          <script>
            formvalidator.makeRequired(document.forms['createform'], 'crmticket.tickettype');
            formvalidator.makeRequired(document.forms['createform'], 'crmmessage.subject');
            formvalidator.makeRequired(document.forms['createform'], 'crmmessage.content');
            formvalidator.addUpdateHandler(document.forms['createform'], function(f, sender) {
              var type = getRadioValue(f, 'crmticket.tickettype');
              if (type == 20) {
                $('#missing-package-instructions').show();
                $('#undelivered-package-instructions').hide();
                $('#damaged-package-instructions').hide();
                $('#tracking-number').show();
                $('#delivery-date').show();
                $('#warehouse-id').show();
                $('#order-id').hide();
                $('#incoming-package-id').hide();
                $('#initial-message').show();
              } else if (type == 30) {
                $('#missing-package-instructions').hide();
                $('#undelivered-package-instructions').show();
                $('#damaged-package-instructions').hide();
                $('#tracking-number').hide();
                $('#delivery-date').hide();
                $('#warehouse-id').hide();
                $('#order-id').show();
                $('#incoming-package-id').hide();
                $('#initial-message').show();
              } else if (type == 40) {
                $('#tracking-number').hide();
                $('#delivery-date').hide();
                $('#missing-package-instructions').hide();
                $('#undelivered-package-instructions').hide();
                $('#damaged-package-instructions').show();
                $('#warehouse-id').hide();
                $('#order-id').show();
                $('#incoming-package-id').hide();
                $('#initial-message').show();
              } else if (type == 50) {
                $('#tracking-number').hide();
                $('#delivery-date').hide();
                $('#missing-package-instructions').hide();
                $('#undelivered-package-instructions').hide();
                $('#damaged-package-instructions').hide();
                $('#warehouse-id').hide();
                $('#order-id').hide();
                $('#incoming-package-id').hide();
                $('#initial-message').show();
              } else if (type == 60) {
                $('#tracking-number').hide();
                $('#delivery-date').hide();
                $('#missing-package-instructions').hide();
                $('#undelivered-package-instructions').hide();
                $('#damaged-package-instructions').hide();
                $('#warehouse-id').hide();
                $('#order-id').hide();
                $('#incoming-package-id').hide();
                $('#initial-message').show();
              } else if (type == 70) {
                $('#tracking-number').hide();
                $('#delivery-date').hide();
                $('#missing-package-instructions').hide();
                $('#undelivered-package-instructions').hide();
                $('#damaged-package-instructions').hide();
                $('#warehouse-id').hide();
                $('#order-id').hide();
                $('#incoming-package-id').hide();
                $('#initial-message').show();
              } else if (type == 500) {
                $('#tracking-number').hide();
                $('#delivery-date').hide();
                $('#missing-package-instructions').hide();
                $('#undelivered-package-instructions').hide();
                $('#damaged-package-instructions').hide();
                $('#warehouse-id').hide();
                $('#order-id').hide();
                $('#incoming-package-id').show();
                $('#initial-message').show();
              } else if (type == -1) {
                $('#tracking-number').hide();
                $('#delivery-date').hide();
                $('#missing-package-instructions').hide();
                $('#undelivered-package-instructions').hide();
                $('#damaged-package-instructions').hide();
                $('#warehouse-id').hide();
                $('#order-id').hide();
                $('#incoming-package-id').hide();
                $('#initial-message').hide();
              }
              if ((sender != null) && (sender.name == 'crmmessageattachment.attachmentfile')) {
                if (sender.value) {
                  var newhtml = $('#attachment-field').html();
                  $('#attachments').append(newhtml);
                }
              }
              return true;
            });
            formvalidator.addValidationHandler(document.forms['createform'], function(f) {
              var type = getRadioValue(f, 'crmticket.tickettype');
              if (type == 20) {
                var cd = f.elements['crmticket.reporteddeliverydate'].value;
                var today = '01/28/2024';
                var yesterday = '01/27/2024';
                if ((cd == today) || (cd == yesterday)) {
                  $('#disclaimer').show();
                  $('#open-ticket').hide();
                  $('#submit-button').hide();
                  return cancelFormSubmission();
                }
              }
              return true;
            });
            formvalidator.setThrobberMessage(document.forms['createform'], 'Envoi de votre demande');
            $('FORM').off('submit', bsValidateForm);
            $('FORM').submit(bsValidateForm);
            $('.submitbutton').off('click', bsSubmitForm);
            $('.expandtextareabtn').off('click', bsExpandTextArea);
            $('.submitbutton').click(bsSubmitForm);
            formvalidator.initializeForms();
          </script>
          <script>
            initializeWidgets();
            formvalidator.initializeForms();
          </script>
          <!--- Copyright 2024 GlobalAccess All Rights Reserved -->
          <!--- Web Server 3095 -->
        </div>
      </div>
    </div>

  </body>
</html>
