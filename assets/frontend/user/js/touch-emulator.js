< !DOCTYPE html >
    <
    html lang = "zh-CN" >
    <
    head >
    <
    meta charset = "utf-8" >
    <
    meta http - equiv = "X-UA-Compatible"
content = "IE=edge" >
    <
    link rel = "shortcut icon"
type = "image/x-icon"
href = "https://www.catly.io/favicon.ico" >
    <
    meta name = "viewport"
content = "width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" >
    <
    title >
    $CATLY - The best Web3 .0 community token. <
    /title>
    <!-- 正式发布的时候使用，开发期间不启用。↓ -->

    <
    script >
    function IsPC() {

        var userAgentInfo = navigator.userAgent;

        var Agents = ["Android", "iPhone",

            "SymbianOS", "Windows Phone",

            "iPad", "iPod"
        ];

        var flagPc = true;

        for (var v = 0; v < Agents.length; v++) {

            if (userAgentInfo.indexOf(Agents[v]) > 0) {

                flagPc = false;

                break;

            }

        }

        return flagPc;

    }



var flagZt = IsPC();

if (flagZt == true) {

    window.location.href = "https://www.catly.io/pc.html"

} else {
    window.location.href = "https://www.catly.io/mobile"

}


//console.log(flag) //true为PC端，false为手机端
<
/script>

<
/head> <
body >

    <
    /body> <
    /html>