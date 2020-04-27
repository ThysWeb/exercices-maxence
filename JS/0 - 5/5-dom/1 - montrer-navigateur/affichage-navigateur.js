/** Fonction RetourneNavigateur
 * 
 */
function RetourneNavigateur() {
    var useragent = navigator.userAgent;
    var x = useragent.indexOf("MSIE");
    var nav = "MSIE";

    if (x == -1) {
        x = useragent.indexOf("Firefox");
        nav = "Firefox";

        if (x == -1) {
            x = useragent.indexOf("Chrome");
            nav = "Chrome";

            if (x == -1) {
                x = useragent.indexOf("Opera");
                nav = "Opera";

                if (x == -1) {
                    x = useragent.indexOf("Safari");
                    nav = "Safari";
                }
            }   
        }
    }

    return nav;
}

// Test RetourneNavigateur
alert("Le navigateur est: "+RetourneNavigateur());
alert("Version : "+navigator.appVersion);