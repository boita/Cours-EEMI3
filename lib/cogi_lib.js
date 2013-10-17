function getQuerystring(key, default_) {
	if (default_==null) 
		default_=""; 
	key = key.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
	var regex = new RegExp("[\\?&]"+key+"=([^&#]*)");
	var qs = regex.exec(window.location.href);
	if(qs == null)
		return default_;
	else
		return qs[1];
}

function setCookie(sName, sValue, iExpire) {
        var today = new Date(), expires = new Date();
        expires.setTime(today.getTime() + iExpire);
        document.cookie = sName + "=" + encodeURIComponent(sValue) + ";expires=" + expires.toGMTString();
}

function getCookie(sName) {
        var oRegex = new RegExp("(?:; )?" + sName + "=([^;]*);?");
  
        if (oRegex.test(document.cookie)) {
                return decodeURIComponent(RegExp["$1"]);
        } else {
                return null;
        }
}