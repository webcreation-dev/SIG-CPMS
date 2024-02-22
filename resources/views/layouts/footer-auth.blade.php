<script>
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
<footer class="bottom-footer">
    <div class="container">
      <div class="row hide-sm">
        <div class="col-md-3 col-xs-6">
          <label>Nos services</label>
          <a href="#" target="_blank">Lynia Delivery Express Pour Mois</a>
          <a href="#" target="_blank">Lynia Delivery Express Pour les Entreprises</a>
        </div>
        <div class="col-md-3 col-xs-6">
          <label>Débuter</label>
          <a href="#" target="_blank">Comment ça Marche</a>
          <a href="#" target="_blank">Tarifs et Options</a>
          <a href="#" target="_blank">FAQs</a>
          <a href="#" target="_blank">Modes de livraison</a>
          <a href="#" target="_blank">Que puis-je expédier ?</a>
        </div>
        <div class="col-md-3 col-xs-6">
          <label>À Propos de Nous</label>
          <a href="#" target="_blank">Qu'est-ce que Lynia Delivery Express</a>
          <a href="#" target="_blank">Emplacements des entrepôts</a>
          <a href="#" target="_blank">Blog</a>
          <a href="#" target="_blank">Actualités</a>
          <a href="#" target="_blank">Commentaires des clients</a>
          <a href="#" target="_blank">Programme d’Affiliation</a>
          <a href="#" target="_blank">Vendeurs directs</a>
          <a href="#" target="_blank">US Unlocked</a>
        </div>
        <div class="col-md-3 col-xs-6">
          <label>Prenez Contact Avec Nous</label>
          <div class="contact">
            <a href="#">
              <i class="icon-contact-us"></i> Prenez Contact Avec Nous </a>
          </div>
          <div class="contact">
            <a href="mailto:support@shipito.com">
              <i class="icon-email"></i> support@shipito.com </a>
          </div>
          <div class="contact">
            <i class="icon-live-chat"></i> Chat en direct (Heure du Pacifique): <br>En semaine: 6h à 18h <br>Samedi: 6h à 15h <br>Dimanche: Fermé
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 text-center privacy">
          <a href="#" target="_blank">Conditions Générales</a>
          <br> Copyright © 2024 Lynia Delivery Express. All rights reserved.
        </div>
      </div>
    </div>
</footer>
  <a href="#" class="back-to-top-link" title="Retour Vers le Haut">
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
  <!-- End of LiveChat code -->
  <script>
    $(document).ready(function() {
      $('.notifications-link').click(function(evt) {
        evt.preventDefault();
      });
      $('.notifications-link').popover({
        container: 'body',
        content: function() {
          return loadPopup($(this).attr('HREF'), 'notificationdiv', 'Chargement. . .');
        },
        placement: 'bottom',
        html: true
      });
    });
  </script>
  <script>
    var $ = jQuery.noConflict();
    $(document).ready(function() {
      formvalidator.addValidationHandler(document.forms['responsivepackagesearchform'], function(f) {
        formvalidator.setAJAXTarget(f, 'newpopup');
        return true;
      });
      $('FORM').submit(bsValidateForm);
      $('.submitbutton').click(bsSubmitForm);
      formvalidator.initializeForms();
    });
  </script>

  <script type="text/javascript" id="">
    (function(d, b, a) {
      (b[a] = b[a] || []).push(function() {
        try {
          b.yaCounter48122048 = new Ya.Metrika({
            id: 48122048,
            clickmap: !0,
            trackLinks: !0,
            accurateTrackBounce: !0,
            webvisor: !0
          })
        } catch (f) {}
      });
      var e = d.getElementsByTagName("script")[0],
        c = d.createElement("script");
      a = function() {
        e.parentNode.insertBefore(c, e)
      };
      c.type = "text/javascript";
      c.async = !0;
      c.src = "https://mc.yandex.ru/metrika/watch.js";
      "[object Opera]" == b.opera ? d.addEventListener("DOMContentLoaded", a, !1) : a()
    })(document, window, "yandex_metrika_callbacks");
  </script>
  <noscript>
    <div>
      <img src="https://mc.yandex.ru/watch/48122048" style="position:absolute; left:-9999px;" alt="">
    </div>
  </noscript>
  <script type="text/javascript" id="">
    (function(a, c, e, f, d, b) {
      a.hj = a.hj || function() {
        (a.hj.q = a.hj.q || []).push(arguments)
      };
      a._hjSettings = {
        hjid: 832713,
        hjsv: 6
      };
      d = c.getElementsByTagName("head")[0];
      b = c.createElement("script");
      b.async = 1;
      b.src = e + a._hjSettings.hjid + f + a._hjSettings.hjsv;
      d.appendChild(b)
    })(window, document, "https://static.hotjar.com/c/hotjar-", ".js?sv\x3d");
  </script>
  <meta name="p:domain_verify" content="fd3a098b328728e62aa6a668ea1a7cd4">
  <script type="text/javascript" id="">
    ! function(d, e, f, a, b, c) {
      d.twq || (a = d.twq = function() {
        a.exe ? a.exe.apply(a, arguments) : a.queue.push(arguments)
      }, a.version = "1.1", a.queue = [], b = e.createElement(f), b.async = !0, b.src = "//static.ads-twitter.com/uwt.js", c = e.getElementsByTagName(f)[0], c.parentNode.insertBefore(b, c))
    }(window, document, "script");
    twq("init", "nzn8k");
    twq("track", "PageView");
  </script>
  <script type="text/javascript" id="">
    var GOOGLE_ANALYTICS_CLIENT_ID = "";
    (function(a, e, f, g, b, c, d) {
      a.GoogleAnalyticsObject = b;
      a[b] = a[b] || function() {
        (a[b].q = a[b].q || []).push(arguments)
      };
      a[b].l = 1 * new Date;
      c = e.createElement(f);
      d = e.getElementsByTagName(f)[0];
      c.async = 1;
      c.src = g;
      d.parentNode.insertBefore(c, d)
    })(window, document, "script", "https://www.google-analytics.com/analytics.js", "ga");
    ga("create", "UA-75847801-1", "auto");
    ga("send", "pageview");
    ga(function(a) {
      GOOGLE_ANALYTICS_CLIENT_ID = a.get("clientId")
    });
  </script>
  <script type="text/javascript" id="">
    ! function(b, e, f, g, a, c, d) {
      b.fbq || (a = b.fbq = function() {
        a.callMethod ? a.callMethod.apply(a, arguments) : a.queue.push(arguments)
      }, b._fbq || (b._fbq = a), a.push = a, a.loaded = !0, a.version = "2.0", a.queue = [], c = e.createElement(f), c.async = !0, c.src = g, d = e.getElementsByTagName(f)[0], d.parentNode.insertBefore(c, d))
    }(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
    fbq("init", "817138459089080");
    fbq("set", "agent", "tmgoogletagmanager", "817138459089080");
    fbq("track", "PageView");
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=817138459089080&amp;ev=PageView&amp;noscript=1">
  </noscript>
  <script type="text/javascript" id="">
    ! function(b, e, f, g, a, c, d) {
      b.fbq || (a = b.fbq = function() {
        a.callMethod ? a.callMethod.apply(a, arguments) : a.queue.push(arguments)
      }, b._fbq || (b._fbq = a), a.push = a, a.loaded = !0, a.version = "2.0", a.queue = [], c = e.createElement(f), c.async = !0, c.src = g, d = e.getElementsByTagName(f)[0], d.parentNode.insertBefore(c, d))
    }(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
    fbq("init", "149975903657596");
    fbq("track", "PageView");
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=149975903657596&amp;ev=PageView&amp;noscript=1">
  </noscript>
  <script type="text/javascript" id="">
    adroll_adv_id = "B4JYUZRHGRD6BGPTSRJRTV";
    adroll_pix_id = "ESRPVYX5RZE2FPHL5RKIIF";
    adroll_version = "2.0";
    (function(a, e, c, d, b) {
      a.__adroll_loaded = !0;
      a.adroll = a.adroll || [];
      a.adroll.f = ["setProperties", "identify", "track"];
      var f = "https://s.adroll.com/j/" + adroll_adv_id + "/roundtrip.js";
      for (b = 0; b < a.adroll.f.length; b++) a.adroll[a.adroll.f[b]] = a.adroll[a.adroll.f[b]] || function(g) {
        return function() {
          a.adroll.push([g, arguments])
        }
      }(a.adroll.f[b]);
      c = e.createElement("script");
      d = e.getElementsByTagName("script")[0];
      c.async = 1;
      c.src = f;
      d.parentNode.insertBefore(c, d)
    })(window, document);
    adroll.track("pageView");
  </script>
  <script type="text/javascript" id="">
    jQuery(".panel-title").click(function() {
      dataLayer.push({
        event: "faq-list",
        name: jQuery(this).text().trim()
      })
    });
  </script>
  <iframe id="_hjSafeContext_65465256" title="_hjSafeContext" tabindex="-1" aria-hidden="true" src="files/saved_resource.html" style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe>
  <div id="chat-widget-container" style="opacity: 0; visibility: hidden; z-index: -1; position: fixed; bottom: 0px; width: 392px; height: 714px; max-width: 100%; max-height: calc(100% + 0px); min-height: 0px; min-width: 0px; background-color: transparent; border: 0px; overflow: hidden; right: 0px; transition: none 0s ease 0s !important;">
    <iframe allow="clipboard-read; clipboard-write; autoplay; microphone *; camera *; display-capture *; picture-in-picture *; fullscreen *;" src="files/open_chat.html" allowtransparency="true" id="chat-widget" name="chat-widget" title="LiveChat chat widget" scrolling="no" style="width: 100%; height: 100%; min-height: 0px; min-width: 0px; margin: 0px; padding: 0px; background-image: none; background-position: 0% 0%; background-size: initial; background-attachment: scroll; background-origin: initial; background-clip: initial; background-color: rgba(0, 0, 0, 0); border-width: 0px; float: none; color-scheme: normal; position: absolute; inset: 0px; transition: none 0s ease 0s !important;"></iframe>
  </div>

  
