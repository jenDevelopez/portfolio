window.cookieconsent.initialise({
    "palette": {
      "popup": {
        "background": "#efefef",
        "text": "#404040"
      },
      "button": {
        "background": "#f1d600"
      }
    },
    "theme": "classic",
    "type": "opt-in",
    "content": {
      "message": "Escola de Fotografia de Barcelona utilitza cookies analítiques de tercers. Necessitem el seu consentiment explícit per poder utilitzar-les.",
      "deny": "Rebutja",
      "allow": "Accepta",
      "link": "Política de cookies",
      "href": "politica-de-cookies.html",
      "policy": "Consentimiento de cookies",
    },
    onInitialise: function(status) {
      if(status == cookieconsent.status.allow) myScripts();
    },
    onStatusChange: function(status) {
      if (this.hasConsented()) myScripts();
      else {
          deleteCookies(this.options.cookie.name);
          location.reload();
      }
    }
  });
  function deleteCookies(cookieconsent_name) {
      var keep = [cookieconsent_name, "DYNSRV"];

      document.cookie.split(';').forEach(function(c) {
          c = c.split('=')[0].trim();
          if (!~keep.indexOf(c))
              document.cookie = c + '=;' + 'expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/';
      });
  };