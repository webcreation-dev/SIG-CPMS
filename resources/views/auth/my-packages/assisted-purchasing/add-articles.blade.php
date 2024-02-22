<!DOCTYPE html>
<!-- saved from url=(0065)https://www.shipito.com/fr/account/assisted-purchase/select-items -->
<html dir="ltr" lang="fr">

  @include('layouts.head-auth')

  <body cz-shortcut-listen="true">
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
            <div class="col-sm-4 col-xs-4">
              <a href="/packages-action-required" >
                <i class="icon-packages-in-warehouse"></i>
                <br class="hide-lg"> Colis dans l'entrepôt </a>
            </div>
            <div class="col-sm-4 col-xs-4">
              <a href="/packages-in-transit" >
                <i class="icon-sent-packages"></i>
                <br class="hide-lg"> Colis Expédiés </a>
            </div>
            {{-- <div class="col-sm-3 col-xs-3">
              <a href="/packages-add-ship">
                <i class="icon-expected-package"></i>
                <br class="hide-lg"> Colis attendus </a>
            </div> --}}
            <div class="col-sm-4 col-xs-4">
              <a href="/purchase-add-articles" class="ACTIVE">
                <i class="icon-assisted-purchase"></i>
                <br class="hide-lg"> Achat Assisté </a>
            </div>
          </div>
        </div>
    </div>
    <div id="page-content" class="page-content">
      <style type="text/css">
        #newline {
          display: none;
        }
      </style>
      <div class="main-body">
        <div class="container">
          <div class="hide-lg">
            <br>
            <br>
          </div>
          <div class="edit-form">
            <form method="POST" action="https://www.shipito.com/servlet/Account" name="itemsform">
              <input type="HIDDEN" name="act" value="AssistedPurchase.selectItems">
              <input type="HIDDEN" name="assistedpurchase.assistedpurchaseid" value="283115">
              <input type="HIDDEN" name="cmscountry" value="us">
              <input type="HIDDEN" name="cmslanguage" value="fr">
              <input type="HIDDEN" name="gasv" value="2924807557820894208">
              <input type="HIDDEN" name="postingpageurl" value="/fr/account/assisted-purchase/select-items">
              <h3>Dans quelle boutique souhaitez-vous que nous commandions?</h3>
              <div class="form-group">
                <label for="assistedpurchase.vendorname">Nom du Site</label>
                <input type="TEXT" name="assistedpurchase.vendorname" class="form-control" maxlength="150" onchange="return formvalidator.formUpdated(this.form, this);" onkeypress="return formvalidator.checkFormat(this, event);" required="REQUIRED">
              </div>
              <div class="form-group">
                <label for="assistedpurchase.vendorurl">URL du Site</label>
                <input type="URL" name="assistedpurchase.vendorurl" class="form-control" maxlength="255" onchange="return formvalidator.formUpdated(this.form, this);" onkeypress="return formvalidator.checkFormat(this, event);" required="REQUIRED">
              </div>
              <h3>Indiquez-nous les articles que vous souhaitez que nous commandions</h3>
              <table class="table table-striped table-responsive-x">
                <thead>
                  <tr>
                    <th>Nom de l'Article</th>
                    <th>Options</th>
                    <th>URL de l'Article</th>
                    <th>Prix (unitaire)</th>
                    <th>Quantité</th>
                    <th>
                      <!--  -->
                    </th>
                  </tr>
                </thead>
                <tbody id="apitems"></tbody>
                <tfoot>
                  <tr id="newline">
                    <td data-caption="Nom de l&#39;Article">
                      <input type="TEXT" name="assistedpurchaseline.itemname" class="form-control" maxlength="150" onchange="return formvalidator.formUpdated(this.form, this);" onkeypress="return formvalidator.checkFormat(this, event);" required="REQUIRED">
                    </td>
                    <td data-caption="Options">
                      <input type="TEXT" name="assistedpurchaseline.options" class="form-control" placeholder="Taille, Couleur, etc." maxlength="255" onchange="return formvalidator.formUpdated(this.form, this);" onkeypress="return formvalidator.checkFormat(this, event);">
                    </td>
                    <td data-caption="URL de l&#39;Article">
                      <input type="URL" name="assistedpurchaseline.itemurl" class="form-control" placeholder="URL de cet article" maxlength="255" onchange="return formvalidator.formUpdated(this.form, this);" onkeypress="return formvalidator.checkFormat(this, event);">
                    </td>
                    <td data-caption="Prix (unitaire)">
                      <div class="input-group">
                        <span class="input-group-addon input-group-text">$</span>
                        <input type="TEXT" name="assistedpurchaseline.unitprice_amt" class="form-control text-right floating-point" onchange="return formvalidator.formUpdated(this.form, this);" onkeypress="return formvalidator.checkFormat(this, event);" required="REQUIRED" value="0.00">
                        <input type="HIDDEN" name="assistedpurchaseline.unitprice_code" value="USD">
                      </div>
                    </td>
                    <td data-caption="Quantité">
                      <input type="TEXT" name="assistedpurchaseline.quantityrequested" class="form-control integer-field" onchange="return formvalidator.formUpdated(this.form, this);" onkeypress="return formvalidator.checkFormat(this, event);" required="REQUIRED" value="1">
                    </td>
                    <td data-caption="">
                      <button type="BUTTON" class="btn btn-link removelinebutton">
                        <i class="fa fa-trash fa-fw"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <th colspan="7" class="text-left">
                      <button type="BUTTON" class="btn btn-primary" id="addlinebutton" title="Ajouter une Ligne">
                        <i class="fa fa-plus fa-fw"></i>&nbsp;Ajouter une Ligne </button>
                    </th>
                  </tr>
                  <tr>
                    <th class="text-right" colspan="5">Frais d'Envoi/Traitement Domestique (US)</th>
                    <td>
                      <div class="input-group">
                        <span class="input-group-addon input-group-text">$</span>
                        <input type="TEXT" name="assistedpurchase.domesticshipping_amt" class="form-control text-right floating-point" onchange="return formvalidator.formUpdated(this.form, this);" onkeypress="return formvalidator.checkFormat(this, event);" value="0.00">
                        <input type="HIDDEN" name="assistedpurchase.domesticshipping_code" value="USD">
                      </div>
                    </td>
                    <td>
                      <!--  -->
                    </td>
                  </tr>
                  <tr>
                    <th class="text-right" colspan="5">Taxe Domestique (US)</th>
                    <td>
                      <div class="input-group">
                        <span class="input-group-addon input-group-text">$</span>
                        <input type="TEXT" name="assistedpurchase.domestictax_amt" class="form-control text-right floating-point" onchange="return formvalidator.formUpdated(this.form, this);" onkeypress="return formvalidator.checkFormat(this, event);" value="0.00">
                        <input type="HIDDEN" name="assistedpurchase.domestictax_code" value="USD">
                      </div>
                    </td>
                    <td>
                      <!--  -->
                    </td>
                  </tr>
                  <tr>
                    <th class="text-right" colspan="5">Total</th>
                    <td class="text-right" id="totalpurchases">$ 0.00</td>
                  </tr>
                </tfoot>
              </table>
              <h3>A quel endroit voulez-vous expédier ces articles?</h3>
              <select name="assistedpurchase.warehouseid" class="form-control" onchange="return formvalidator.formUpdated(this.form, this);" onkeypress="return formvalidator.checkFormat(this, event);">
                <option value="7" selected="True">Torrance, California</option>
                <option value="6">Rastenfeld, Austria</option>
              </select>
              <h3>Souhaitez-vous nous communiquer d'autres instructions?</h3>
              <div class="input-group">
                <textarea name="assistedpurchase.instructions" class="form-control" placeholder="Merci de nous indiquer toute instruction complémentaire. Nous ferons de notre mieux pour satisfaire toutes vos exigences dans la limite du raisonnable." onchange="return formvalidator.formUpdated(this.form, this);" onkeypress="return formvalidator.checkFormat(this, event);"></textarea>
                <span class="input-group-addon input-group-text">
                  <button class="btn btn-xs expandtextareabtn" data-formname="itemsform" data-fieldname="assistedpurchase.instructions">
                    <i class="fa fa-arrows-alt fa-fw"></i>
                  </button>
                </span>
              </div>
              <br>
              <div class="text-right">
                <button type="SUBMIT" class="btn btn-primary savebutton" title="Suivant">Suivant</button>
              </div>
            </form>
            <script>
              function updateTotal(f) {
                var total = 0.00;
                var prices = f.elements['assistedpurchaseline.unitprice_amt'];
                var quantities = f.elements['assistedpurchaseline.quantityrequested'];
                for (var i = 0; i < prices.length; i++) {
                  if (prices[i].value != '') {
                    var unitprice = parseFloat(prices[i].value);
                    var qty = parseInt(quantities[i].value);
                    var ext = qty * unitprice;
                    total += ext;
                  }
                }
                total += parseFloat(f.elements['assistedpurchase.domesticshipping_amt'].value);
                total += parseFloat(f.elements['assistedpurchase.domestictax_amt'].value);
                $('#totalpurchases').html('$ ' + aux_fixMoney(total));
              }
              $('#addlinebutton').click(function(evt) {
                    evt.preventDefault();
                    $('#apitems').append(' < TR > ' + $('
                      #newline ').html() + ' < /TR>');
                    }); $('#apitems').on('click', '.removelinebutton', function(evt) {
                    evt.preventDefault();
                    var tr = $(evt.target).closest('TR');
                    $(tr).remove();
                    updateTotal(document.forms['itemsform']);
                  }); $('.savebutton').click(function(evt) {
                    $('#newline').remove();
                    //evt.preventDefault();
                  });
            </script>
          </div>
        </div>
      </div>
    </div>

    @include('layouts.footer-auth')

  </body>
</html>
