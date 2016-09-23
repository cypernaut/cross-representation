        if (localStorage.getItem('language') === null) {
            localStorage.setItem('language', 'en')
        }
    var lang = new Lang();
	lang.dynamic('de', 'js/langpack/de.json');
       	lang.dynamic('es', 'js/langpack/es.json');
	lang.init({
                    defaultLang:  localStorage.getItem('language')
	});
     function getparam(param) {
	var vars = {};
	window.location.href.replace( location.hash, '' ).replace( 
		/[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
		function( m, key, value ) { // callback
			vars[key] = value !== undefined ? value : '';
		}
	);

	if ( param ) {
		return vars[param] ? vars[param] : null;	
	}
	return vars;
}
    
        if(getparam("lang")== "es"){
window.lang.change('es'); 
        };
        if(getparam("lang") == "de"){
  window.lang.change('de');

  };
      if(getparam("lang") == "en"){
  window.lang.change('en');

  };

function setLanguage(language)
{
   console.log(language);
   window.lang.change(language);
   localStorage.setItem('language', language);

}
