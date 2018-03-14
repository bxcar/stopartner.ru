// @copyright MegaGroup © 2012 - 2016, megagroup.ru
(function (o, n, i, c, _o, _n) {
  'use strict';
  var v = '3.6.187',
    ls = o.getElementById('onicon_loader'),
    bs = o.createElement(_o),
    loader = o.createElement('a');
  loader.href = ls.src;
  var eh = o.createElement(_o),
    q = function (s) {
        var r = {}, p;
        s = s.substring(s.indexOf('?') + 1).split('&');
        for (var m = s.length - 1; m >= 0; m--) {
          p = s[m].split('=');
          r[n(p[0])] = n(p[1]);
        }
        return r;
      }(loader.search) || {};

  if (q.site_id in ['4edf4d7e1ab7881b10000065']) {
    _n = 'cp1.onicon.ru';
  }

  var _static_ = 'server' in q ? q.server : _n;

  q.v = v;
  eh.type = c;
  eh.charset = 'utf-8';
  eh.src = "https://cp.onicon.ru/js/min/bugsnag-2.min.js";
  eh.setAttribute('data-apikey', '6f7256255a32d9bf89e0c33f70e5803a');
  eh.setAttribute('data-appversion', v);
  window.ONICON_LOADER_SCRIPT = ls;
  if (ls == null) return;
  if ('Onicon' in window || location.href.indexOf('onicon_disable') != -1) return;
  bs.type = c;
  bs.async = true;
  bs.id = 'onicon_bootstrap';
  bs.src = location.protocol + '//' + _static_ + '/js/min/bootstrap.min.js?v=' + v;
  bs.charset = 'utf-8';
  o.getElementsByTagName('head')[0].appendChild(bs);
  //o.getElementsByTagName('head')[0].appendChild(eh); // Disable Bugsnag
  window._onc_ld_q = q;
  window._onc_ld_l = loader;
}(document, decodeURIComponent, {}.indexOf, 'text/javascript', 'script', 'cp.onicon.ru'));
