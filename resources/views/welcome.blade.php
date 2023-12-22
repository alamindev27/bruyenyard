@extends('layouts.app')
@section('head')
<link rel="preload" href="https://kei.fi/_next/static/css/cb1939d20b63ae52.css" as="style" />
    <link rel="stylesheet" href="https://kei.fi/_next/static/css/cb1939d20b63ae52.css" data-n-g="" />
    <script defer="" nomodule="" src="https://kei.fi/_next/static/chunks/polyfills-5cd94c89d3acac5f.js"></script>
    <script src="https://kei.fi/_next/static/chunks/webpack-794177397f1991ee.js" defer=""></script>
    <script src="https://kei.fi/_next/static/chunks/framework-79bce4a3a540b080.js" defer=""></script>
    <script src="https://kei.fi/_next/static/chunks/main-b3b481cc6b10eb96.js" defer=""></script>
    <script src="https://kei.fi/_next/static/chunks/pages/_app-3ea180e4bd588cf7.js" defer=""></script>
    <script src="https://kei.fi/_next/static/chunks/ea88be26-ee05959878d4f439.js" defer=""></script>
    <script src="https://kei.fi/_next/static/chunks/5652-67563ded3de087ae.js" defer=""></script>
    <script src="https://kei.fi/_next/static/chunks/938-6381d5bd056d6ef3.js" defer=""></script>
    <script src="https://kei.fi/_next/static/chunks/9232-5ee68317845e233c.js" defer=""></script>
    <script src="https://kei.fi/_next/static/chunks/6460-bc02038edb02b3d1.js" defer=""></script>
    <script src="https://kei.fi/_next/static/chunks/7058-66b9a04fec25d7d9.js" defer=""></script>
    <script src="https://kei.fi/_next/static/chunks/3795-12610902c00a8595.js" defer=""></script>
    <script src="https://kei.fi/_next/static/chunks/6066-e6c3fa0c2a0266a1.js" defer=""></script>
    <script src="https://kei.fi/_next/static/chunks/9887-c0cf61dc80472437.js" defer=""></script>
    <script src="https://kei.fi/_next/static/chunks/9464-423401fc1005dc63.js" defer=""></script>
    <script src="https://kei.fi/_next/static/chunks/2323-8d55235df7070357.js" defer=""></script>
    <script src="https://kei.fi/_next/static/chunks/143-dd7455e986a7ff70.js" defer=""></script>
    <script src="https://kei.fi/_next/static/chunks/3212-186e780f6b7bd027.js" defer=""></script>
    <script src="https://kei.fi/_next/static/chunks/8608-37dffa61dcab6030.js" defer=""></script>
    <script src="https://kei.fi/_next/static/chunks/5718-caebb20df881449e.js" defer=""></script>
    <script src="https://kei.fi/_next/static/chunks/935-6757dae2b68fd1a6.js" defer=""></script>
    <script src="https://kei.fi/_next/static/chunks/pages/index-358bca85cfa2aaae.js" defer=""></script>
    <script src="https://kei.fi/_next/static/w7d6o3FiiPdIgnIV99MxJ/_buildManifest.js" defer=""></script>
    <script src="https://kei.fi/_next/static/w7d6o3FiiPdIgnIV99MxJ/_ssgManifest.js" defer=""></script>
    <script src="https://kei.fi/_next/static/w7d6o3FiiPdIgnIV99MxJ/_middlewareManifest.js" defer=""></script>

    <style data-emotion="css-global 0"></style>
    <style data-emotion="css-global 1mrohcd">




        #__next {
            width: 100%;
            height: 100%;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }

        input[type=number]::-webkit-outer-spin-button {
            margin: 0;
            -webkit-appearance: none;
        }

        input[type=number]::-webkit-inner-spin-button {
            margin: 0;
            -webkit-appearance: none;
        }

        img {
            display: block;
            max-width: 100%;
        }
    </style>
    <style data-emotion="css-global 3f0yuw">
        #__next .SnackbarContainer-top {
            top: 104px;
        }

        #__next .SnackbarContent-root {
            width: 100%;
            padding: 8px;
            margin: 2px 0px;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.16);
            border-radius: 8px;
            color: #444444;
            background-color: #FFFFFF;
        }

        #__next .SnackbarContent-root.SnackbarItem-variantSuccess,
        #__next .SnackbarContent-root.SnackbarItem-variantKei,
        #__next .SnackbarContent-root.SnackbarItem-variantError,
        #__next .SnackbarContent-root.SnackbarItem-variantWarning,
        #__next .SnackbarContent-root.SnackbarItem-variantInfo {
            color: #fff;
            background-color: rgba(33, 33, 35, 0.8);
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
        }

        @media (min-width:900px) {
            #__next .SnackbarContent-root {
                min-width: 240px;
            }
        }

        #__next .SnackbarItem-message {
            padding: 0 !important;
            font-weight: 600;
        }

        #__next .SnackbarItem-action {
            margin-right: 0;
            color: #919EAB;
        }

        #__next .SnackbarItem-action svg {
            width: 20px;
            height: 20px;
        }
    </style>
    <style data-emotion="css-global 18225oq">
        #nprogress {
            pointer-events: none;
        }

        #nprogress .bar {
            top: 0;
            left: 0;
            height: 2px;
            width: 100%;
            position: fixed;
            z-index: 10001;
            background-color: #F328A5;
            box-shadow: 0 0 2px #F328A5;
        }

        #nprogress .peg {
            right: 0;
            opacity: 1;
            width: 100px;
            height: 100%;
            display: block;
            position: absolute;
            -webkit-transform: rotate(3deg) translate(0px, -4px);
            -moz-transform: rotate(3deg) translate(0px, -4px);
            -ms-transform: rotate(3deg) translate(0px, -4px);
            transform: rotate(3deg) translate(0px, -4px);
            box-shadow: 0 0 10px #F328A5, 0 0 5px #F328A5;
        }
    </style>
    <style data-emotion="css-global 1prfaxn">
        @-webkit-keyframes mui-auto-fill {
            from {
                display: block;
            }
        }

        @keyframes mui-auto-fill {
            from {
                display: block;
            }
        }

        @-webkit-keyframes mui-auto-fill-cancel {
            from {
                display: block;
            }
        }

        @keyframes mui-auto-fill-cancel {
            from {
                display: block;
            }
        }
    </style>
    <style
        data-emotion="css 1v3cy0q 1v4mc04 8fl15p e7e29r xn45tj 1lgdyz7 1jjaul2 i9gxme vxcmzt 1r7i4g2 nyy7xe 1ab1jlb g21x1j 383kz4 1uds6oo 19do3tw 16i1iy4 1d0g14s g4vw5z dcj0gv 1mjknqg 1r943mm 1p6q931 wlxgza 1l5a5xv 18mdalc 1veo4if 1k3cjm3 118vazd t33axg 1bdrn49 1z20wc iutdk5 14osoki 7mo9pa 1508eb2 1ck01ax 1uvrq28 is5fry t79nkx 1vh5oz1 12flte3 161v56j 1llarwq 6b1w3y a3ax9i 102q7ah udjd5t 1njo4ry 12n1tnb 1ndfabi 7ymj9g 1c1qfqd e9dgot hp7hz7 uxb6yx jps4a5 1du8er9 c4gk5q 1m9lt6q 1lycjuy 1nkm53p 1w5z9kh 193reav 123ifv3 1h198yb msnw8f 12jvsrx o18jye xffizs 174vvho u6y7m0 sayxxi gg4vpm 2bpofu 1s2tjuv qi8af6 tgxzvy ijthju 1u7xclc nqlg3w hdw1oc acwcvw fbneus 1wvcg5 1it74ey 8s2iv2 1v36jc4 15ta10h pibc0v 1e1umif 1q47tnl eisnlk 70qvj9 o92162 11kq1wa 1n4b8yv 78t8io 8fo6ms qtq9ox yfdw57 1s6e1gy 1ehk0dr fc12yp yehhoi o1f978 gffp4m otod5t 13m3kkv 8ndqk9 6rm91l 1dsn0hv 1ou2xas ob0qoi 1qae61w 187rau0 1vbb00j 1dnn977 1v3haxt 1bhf6ae 115vcbu 1fjvxyd 19w8rfp 92r017 e9ah65 72m8qr vni5v1 1jojg8y 5b1el9 1pd8wfh 15q5ihe 1tvcwwz 1unt6zn 1h6ef2j irqkq y5vfzn 6944k6 1yee2u4 aod2g5 ss18fm 3u8pn1 5va6o1 1ckjfdm 1ozdpsf ck2x66 1z0sa0g pt151d 920k2u 1iwbhwe 17sfuwu 1ton084 1hwoua8 nsejin 1ex0eha b817iv 79elbk tv7ddg 16wg1yk jwsme6 gdfrs0 rz6rsj 80o7he 1kyb0ls jacoez 12gojhg 1x2m2td lp00tf cji8j0 az22mu rydq41 ojzf1b 1n8o67v lvyk9z 40ou10 1uqf6b7 16fty60 1uprze6 1e6zq3e 1x2vd8o 883to6 qiuk6x dv46pi 13atvhh h353i7 1eijo0r 1mf4aeg mw3ilg fhlf6n 13z5pxf 1pwdjni agx226 1tt1tl8 vzd2er 12mn81y 11xaa63 1bxzykf eer42b dzzs3k rekocn 1ewx4e2 1e0f7lv 134jb2s iqsrj2 1n88y7j 1ih4dy 504fyg 1l7ickv 10xvqi1 1k9zjpz 1w7x0ur 1kz41lt tc2uw2 1sr47hl 75yem8 n0q0km og8hp1 y5jild 3q1abv sfya7u oitifm 1vx9537 o1awyq m446mp 27oabl j4il3z g5acnm 12iyu6 r2l8x4 4xqn0p qfi9jk dgk44y 1xp5gtn givhcp 17w2iuo 1xjzoa1 mopclk 1mski5t y4oa43 yc6rxs wl6wwm 1ixmrho 1qcswho 1k7fnjh u5e0n4 1w548o0 19yxh80 7m3mwn awg5oa 1lyol7h 1q7hod6 18mn3gn 1bzium8 po40pw liuz95 q9avxn zjt97b 1becghl c3h1ly 1kib8ld 1xa1zif 3f9u40 sgahln arr5kk 1tya36t 1pk2qjv 1xzmnk8 15s1yg 1x9krrq v2c2jy 1wvw4ea 10xoff6 1www8z 1vu2drr aspsdy uwwqev 1fxj0ld 9u7l1b zshu8i 134cgfj 1hinhva 14zdu0y wnseow b95ya 124wjlw d5eemb 1aqwz3l 143g9om 4rrmk5 k9b0vi 11a7ezw iyjm1n r2694s v35u83 1oco7li 1vq7ir4 1i421fg 1m3o5th 1uxl9yx 1ynuzr3 181au20 5ob8ms ocxkhk 1odq9g0 tx2awk 1takryw 11pzi0o 1dtae1r 1h1tpa5 1rr4qq7 1d8losz ickvhw 1qz9l9x 1jz040 mclfx3 5aoioh 3ipggq 1m5aou2 14zsc3r 1qdyvok 120dout 1y7h07z xwpd2b 19knho2 1busfs0 1xa36h5 amzkqc 1x76mex">
        .css-1v3cy0q {
            z-index: 1000;
            width: 100vw;
            height: 100vh;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            position: fixed;
            left: 0;
            right: 0;
            bottom: 0;
            top: 0;
            -webkit-backdrop-filter: blur(6px);
            backdrop-filter: blur(6px);
            background-color: rgba(255, 255, 255, 0.2);
        }

        .css-1v4mc04 {
            -webkit-animation: spin 1.5s linear infinite;
            animation: spin 1.5s linear infinite;
            width: 75px;
            height: 75px;
        }

        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                transform: rotate(360deg);
            }

            100% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                transform: rotate(0deg);
            }
        }

        @keyframes spin {
            0% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                transform: rotate(360deg);
            }

            100% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                transform: rotate(0deg);
            }
        }

        .css-8fl15p {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            min-height: 100%;
            background-color: #fff;
        }

        .css-e7e29r {
            background-color: #212123;
            color: #fff;
            -webkit-transition: box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            box-shadow: 0px 2px 4px -1px rgba(0, 0, 0, 0.2), 0px 4px 5px 0px rgba(0, 0, 0, 0.14), 0px 1px 10px 0px rgba(0, 0, 0, 0.12);
            background-image: linear-gradient(rgba(255, 255, 255, 0.09), rgba(255, 255, 255, 0.09));
            background-image: none;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
            box-sizing: border-box;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            position: fixed;
            z-index: 1100;
            top: 0;
            left: auto;
            right: 0;
            box-shadow: none;
            background: transparent;
        }

        @media print {
            .css-e7e29r {
                position: absolute;
            }
        }

        .css-xn45tj {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            min-height: 56px;
            height: 72px;
            -webkit-transition: height 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, background-color 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: height 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, background-color 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }

        @media (min-width:0px) and (orientation: landscape) {
            .css-xn45tj {
                min-height: 48px;
            }
        }

        @media (min-width:600px) {
            .css-xn45tj {
                min-height: 64px;
            }
        }

        @media (min-width:900px) {
            .css-xn45tj {
                height: 126px;
            }
        }

        .css-xn45tj .navBtn {
            color: #F328A5;
        }

        @media (max-width:599.95px) {
            .css-xn45tj .navBtn {
                display: none;
            }
        }

        .css-xn45tj .navBtn.navBtn--whitepaper {
            border: 2px solid #F328A5;
            padding: 0.5rem 2.5rem;
        }

        .css-xn45tj .navBtn.navBtn--card {
            padding: 0.6rem 2.5rem;
            color: white;
            margin-left: 1rem;
        }

        .css-xn45tj .rounded {
            border-radius: 30px;
        }

        .css-1lgdyz7 {
            width: 100%;
            margin-left: auto;
            box-sizing: border-box;
            margin-right: auto;
            display: block;
            padding-left: 16px;
            padding-right: 16px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
        }

        @media (min-width:600px) {
            .css-1lgdyz7 {
                padding-left: 24px;
                padding-right: 24px;
            }
        }

        @media (min-width:1200px) {
            .css-1lgdyz7 {
                max-width: 1200px;
            }
        }

        @media (min-width:0px) {
            .css-1lgdyz7 {
                padding: 0.8rem;
            }
        }

        .css-1jjaul2 {
            width: 175px;
            height: 46px;
            cursor: pointer;
        }

        .css-i9gxme {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .css-vxcmzt {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
        }

        .css-1r7i4g2 {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            position: relative;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
            background-color: transparent;
            outline: 0;
            border: 0;
            margin: 0;
            border-radius: 0;
            padding: 0;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            vertical-align: middle;
            -moz-appearance: none;
            -webkit-appearance: none;
            -webkit-text-decoration: none;
            text-decoration: none;
            color: inherit;
            text-align: center;
            -webkit-flex: 0 0 auto;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            font-size: 1.5rem;
            padding: 8px;
            border-radius: 50%;
            overflow: visible;
            color: #919EAB;
            -webkit-transition: background-color 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: background-color 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            margin-left: 8px;
            color: #0B0B0B;
        }

        .css-1r7i4g2::-moz-focus-inner {
            border-style: none;
        }

        .css-1r7i4g2.Mui-disabled {
            pointer-events: none;
            cursor: default;
        }

        @media print {
            .css-1r7i4g2 {
                -webkit-print-color-adjust: exact;
                color-adjust: exact;
            }
        }

        .css-1r7i4g2:hover {
            background-color: rgba(145, 158, 171, 0.08);
        }

        @media (hover: none) {
            .css-1r7i4g2:hover {
                background-color: transparent;
            }
        }

        .css-1r7i4g2.Mui-disabled {
            background-color: transparent;
            color: rgba(145, 158, 171, 0.8);
        }

        .css-nyy7xe {
            background: url("img/main-bg.jpg") no-repeat;
            -webkit-background-size: contain;
            background-size: contain;
            -webkit-background-position: top;
            background-position: top;
            height: 100%;
        }

        @media (min-width:1500px) {
            .css-nyy7xe {
                -webkit-background-size: cover;
                background-size: cover;
            }
        }

        .css-1ab1jlb {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .css-g21x1j {
            height: 100%;
            width: 100%;
            position: absolute;
            overflow: hidden;
        }

        @media (min-width:0px) {
            .css-g21x1j {
                display: none;
            }
        }

        @media (min-width:2000px) {
            .css-g21x1j {
                display: block;
            }
        }

        .css-383kz4 {
            height: 100%;
            width: 100%;
            position: absolute;
            margin-top: -120rem;
        }

        @media (min-width:0px) {
            .css-383kz4 {
                display: none;
            }
        }

        @media (min-width:2000px) {
            .css-383kz4 {
                display: block;
            }
        }

        .css-1uds6oo {
            height: 100%;
            width: 100%;
            position: relative;
        }

        .css-19do3tw {
            position: absolute;
            width: 5rem;
            z-index: 1;
            left: 14%;
            top: 25rem;
        }

        .css-16i1iy4 {
            -webkit-animation: spin 5s linear infinite;
            animation: spin 5s linear infinite;
            position: absolute;
            object-fit: contain;
            width: 100%;
        }

        @media (min-width:0px) {
            .css-16i1iy4 {
                display: none;
            }
        }

        @media (min-width:2000px) {
            .css-16i1iy4 {
                display: block;
            }
        }

        .css-1d0g14s {
            position: absolute;
            width: 5rem;
            z-index: 1;
            right: 14%;
            top: 70rem;
        }

        .css-g4vw5z {
            position: absolute;
            width: 5rem;
            z-index: 1;
            right: 7%;
            top: 130rem;
        }

        .css-dcj0gv {
            position: absolute;
            width: 5rem;
            z-index: 1;
            left: 15%;
            top: 150rem;
        }

        .css-1mjknqg {
            position: absolute;
            width: 5rem;
            z-index: 1;
            right: 19%;
            top: 190rem;
        }

        .css-1r943mm {
            position: absolute;
            width: 5rem;
            z-index: 1;
            right: 19%;
            top: 330rem;
        }

        .css-1p6q931 {
            position: absolute;
            width: 5rem;
            z-index: 1;
            left: 8%;
            top: 450rem;
        }

        .css-wlxgza {
            position: absolute;
            width: 5rem;
            z-index: 1;
            right: 9%;
            top: 510rem;
        }

        .css-1l5a5xv {
            position: absolute;
            width: 5rem;
            z-index: 1;
            right: 18%;
            top: 640rem;
        }

        .css-18mdalc {
            position: absolute;
            width: 5rem;
            z-index: 1;
            left: 18%;
            top: 690rem;
        }

        .css-1veo4if {
            position: absolute;
            width: 5rem;
            z-index: 1;
            left: 11%;
            top: 730rem;
        }

        .css-1k3cjm3 {
            position: absolute;
            width: 5rem;
            z-index: 1;
            left: 8%;
            top: 800rem;
        }

        .css-118vazd {
            position: absolute;
            width: 5rem;
            z-index: 1;
            right: 16%;
            top: 810rem;
        }

        .css-t33axg {
            position: absolute;
            width: 5rem;
            z-index: 1;
            left: 9%;
            top: 900rem;
        }

        .css-1bdrn49 {
            position: absolute;
            width: 5rem;
            z-index: 1;
            right: 9%;
            top: 940rem;
        }

        .css-1z20wc {
            position: absolute;
            width: 5rem;
            z-index: 1;
            left: 9%;
            top: 960rem;
        }

        .css-iutdk5 {
            position: absolute;
            width: 5rem;
            z-index: 1;
            right: 12%;
            top: 1000rem;
        }

        .css-14osoki {
            position: absolute;
            width: 5rem;
            z-index: 1;
            left: 8%;
            top: 1060rem;
        }

        .css-7mo9pa {
            position: absolute;
            width: 5rem;
            z-index: 1;
            right: 14%;
            top: 1120rem;
        }

        .css-1508eb2 {
            height: 100%;
            width: 100%;
            position: absolute;
            margin-top: 50rem;
        }

        @media (min-width:0px) {
            .css-1508eb2 {
                display: none;
            }
        }

        @media (min-width:2000px) {
            .css-1508eb2 {
                display: block;
            }
        }

        .css-1ck01ax {
            position: absolute;
            width: 10rem;
            z-index: 2;
            left: 8%;
            top: 60rem;
        }

        .css-1uvrq28 {
            -webkit-animation: spin 15s linear infinite;
            animation: spin 15s linear infinite;
            position: absolute;
            object-fit: contain;
            width: 100%;
        }

        @media (min-width:0px) {
            .css-1uvrq28 {
                display: none;
            }
        }

        @media (min-width:2000px) {
            .css-1uvrq28 {
                display: block;
            }
        }

        .css-is5fry {
            position: absolute;
            width: 10rem;
            z-index: 2;
            left: 8%;
            top: 100rem;
        }

        .css-t79nkx {
            position: absolute;
            width: 10rem;
            z-index: 2;
            right: 15%;
            top: 90rem;
        }

        .css-1vh5oz1 {
            position: absolute;
            width: 10rem;
            z-index: 2;
            left: 12%;
            top: 180rem;
        }

        .css-12flte3 {
            position: absolute;
            width: 10rem;
            z-index: 2;
            left: 12%;
            top: 240rem;
        }

        .css-161v56j {
            position: absolute;
            width: 10rem;
            z-index: 2;
            left: 12%;
            top: 300rem;
        }

        .css-1llarwq {
            position: absolute;
            width: 10rem;
            z-index: 2;
            left: 12%;
            top: 390rem;
        }

        .css-6b1w3y {
            position: absolute;
            width: 10rem;
            z-index: 2;
            left: 9%;
            top: 420rem;
        }

        .css-a3ax9i {
            position: absolute;
            width: 10rem;
            z-index: 2;
            right: 15%;
            top: 440rem;
        }

        .css-102q7ah {
            position: absolute;
            width: 10rem;
            z-index: 2;
            left: 15%;
            top: 490rem;
        }

        .css-udjd5t {
            position: absolute;
            width: 10rem;
            z-index: 2;
            right: 12%;
            top: 570rem;
        }

        .css-1njo4ry {
            position: absolute;
            width: 10rem;
            z-index: 2;
            left: 14%;
            top: 650rem;
        }

        .css-12n1tnb {
            position: absolute;
            width: 10rem;
            z-index: 2;
            right: 13%;
            top: 680rem;
        }

        .css-1ndfabi {
            position: absolute;
            width: 10rem;
            z-index: 2;
            left: 11%;
            top: 700rem;
        }

        .css-7ymj9g {
            height: 100%;
            width: 100%;
            position: absolute;
            margin-top: 280rem;
        }

        @media (min-width:0px) {
            .css-7ymj9g {
                display: none;
            }
        }

        @media (min-width:2000px) {
            .css-7ymj9g {
                display: block;
            }
        }

        .css-1c1qfqd {
            position: absolute;
            width: 20rem;
            z-index: 3;
            right: 5%;
            top: 0rem;
        }

        .css-e9dgot {
            -webkit-animation: spin 45s linear infinite;
            animation: spin 45s linear infinite;
            position: absolute;
            object-fit: contain;
            width: 100%;
        }

        @media (min-width:0px) {
            .css-e9dgot {
                display: none;
            }
        }

        @media (min-width:2000px) {
            .css-e9dgot {
                display: block;
            }
        }

        .css-hp7hz7 {
            position: absolute;
            width: 12rem;
            z-index: 3;
            right: 7%;
            top: 140rem;
        }

        .css-uxb6yx {
            position: absolute;
            width: 20rem;
            z-index: 3;
            right: 6%;
            top: 220rem;
        }

        .css-jps4a5 {
            position: absolute;
            width: 20rem;
            z-index: 3;
            right: 7%;
            top: 360rem;
        }

        .css-1du8er9 {
            position: absolute;
            width: 20rem;
            z-index: 3;
            left: 8%;
            top: 430rem;
        }

        .css-c4gk5q {
            padding-top: 150px;
            position: relative;
            background-color: landing.background.default;
            overflow: hidden;
            min-height: 650px;
        }

        .css-c4gk5q .welcomeText {
            position: absolute;
        }

        .css-c4gk5q .wrapper {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            min-height: 500px;
            gap: 1rem;
        }

        @media (max-width:999.95px) {
            .css-c4gk5q .wrapper {
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
                min-height: 900px;
            }
        }

        @media (max-width:599.95px) {
            .css-c4gk5q .wrapper {
                gap: 3rem;
            }
        }

        @-webkit-keyframes tiltedFloat {
            0% {
                -webkit-transform: translatey(0px);
                -moz-transform: translatey(0px);
                -ms-transform: translatey(0px);
                transform: translatey(0px);
            }

            50% {
                -webkit-transform: translatey(-10px) rotateZ(10deg);
                -moz-transform: translatey(-10px) rotateZ(10deg);
                -ms-transform: translatey(-10px) rotateZ(10deg);
                transform: translatey(-10px) rotateZ(10deg);
            }

            100% {
                -webkit-transform: translatey(0px);
                -moz-transform: translatey(0px);
                -ms-transform: translatey(0px);
                transform: translatey(0px);
            }
        }

        @keyframes tiltedFloat {
            0% {
                -webkit-transform: translatey(0px);
                -moz-transform: translatey(0px);
                -ms-transform: translatey(0px);
                transform: translatey(0px);
            }

            50% {
                -webkit-transform: translatey(-10px) rotateZ(10deg);
                -moz-transform: translatey(-10px) rotateZ(10deg);
                -ms-transform: translatey(-10px) rotateZ(10deg);
                transform: translatey(-10px) rotateZ(10deg);
            }

            100% {
                -webkit-transform: translatey(0px);
                -moz-transform: translatey(0px);
                -ms-transform: translatey(0px);
                transform: translatey(0px);
            }
        }

        .css-c4gk5q .coin {
            -webkit-animation: tiltedFloat 4s ease-in-out infinite;
            animation: tiltedFloat 4s ease-in-out infinite;
            position: absolute;
        }

        .css-c4gk5q .rightWrapper {
            position: relative;
        }

        .css-c4gk5q .rightWrapper .coinRight {
            -webkit-animation-delay: 2500ms;
            animation-delay: 2500ms;
            bottom: 200px;
            right: -60px;
        }

        @media (max-width:899.95px) {
            .css-c4gk5q .rightWrapper .coinRight {
                display: none;
            }
        }

        @media (max-width:1199.95px) {
            .css-c4gk5q .rightWrapper {
                width: 40%;
            }
        }

        @media (max-width:999.95px) {
            .css-c4gk5q .rightWrapper {
                width: 100%;
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-justify-content: center;
                justify-content: center;
            }
        }

        .css-1m9lt6q {
            width: 100%;
            margin-left: auto;
            box-sizing: border-box;
            margin-right: auto;
            display: block;
            padding-left: 16px;
            padding-right: 16px;
        }

        @media (min-width:600px) {
            .css-1m9lt6q {
                padding-left: 24px;
                padding-right: 24px;
            }
        }

        @media (min-width:1200px) {
            .css-1m9lt6q {
                max-width: 1200px;
            }
        }

        .css-1lycjuy {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            font-weight: 500;
        }

        @media (min-width:0px) {
            .css-1lycjuy {
                font-size: 0.875rem;
            }
        }

        @media (min-width:900px) {
            .css-1lycjuy {
                font-size: 1.5rem;
            }
        }

        .css-1nkm53p {
            background-image: linear-gradient(97.99deg, #F328A5 0%, #9322D0 101.11%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .css-1w5z9kh {
            position: relative;
            min-height: 30rem;
        }

        @media (min-width:1000px) {
            .css-1w5z9kh {
                -webkit-flex: 1;
                -ms-flex: 1;
                flex: 1;
                min-height: 16rem;
            }
        }

        @media (max-width:599.95px) {
            .css-1w5z9kh {
                min-height: 25rem;
            }
        }

        @media (max-width:399.95px) {
            .css-1w5z9kh {
                min-height: 20rem;
            }
        }

        @-webkit-keyframes float {
            0% {
                -webkit-transform: translatey(0px);
                -moz-transform: translatey(0px);
                -ms-transform: translatey(0px);
                transform: translatey(0px);
            }

            50% {
                -webkit-transform: translatey(-10px);
                -moz-transform: translatey(-10px);
                -ms-transform: translatey(-10px);
                transform: translatey(-10px);
            }

            100% {
                -webkit-transform: translatey(0px);
                -moz-transform: translatey(0px);
                -ms-transform: translatey(0px);
                transform: translatey(0px);
            }
        }

        @keyframes float {
            0% {
                -webkit-transform: translatey(0px);
                -moz-transform: translatey(0px);
                -ms-transform: translatey(0px);
                transform: translatey(0px);
            }

            50% {
                -webkit-transform: translatey(-10px);
                -moz-transform: translatey(-10px);
                -ms-transform: translatey(-10px);
                transform: translatey(-10px);
            }

            100% {
                -webkit-transform: translatey(0px);
                -moz-transform: translatey(0px);
                -ms-transform: translatey(0px);
                transform: translatey(0px);
            }
        }

        .css-1w5z9kh .heroBox {
            position: absolute;
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -webkit-animation: float 4s ease-in-out infinite;
            animation: float 4s ease-in-out infinite;
        }

        @media (max-width:599.95px) {
            .css-1w5z9kh .heroBox {
                padding-top: 2rem;
            }
        }

        .css-1w5z9kh .heroBox.third {
            top: 180px;
            right: 40px;
            -webkit-animation-delay: 2000ms;
            animation-delay: 2000ms;
        }

        @media (max-width:599.95px) {
            .css-1w5z9kh .heroBox.third {
                top: 100px;
                right: -2%;
                max-width: 90%;
            }
        }

        .css-1w5z9kh .heroBox.second {
            top: 0;
            left: -40px;
            -webkit-animation-delay: 1000ms;
            animation-delay: 1000ms;
        }

        @media (max-width:599.95px) {
            .css-1w5z9kh .heroBox.second {
                left: -30px;
                top: -10px;
                width: 120%;
            }
        }

        .css-1w5z9kh .heroBox.front {
            top: 5px;
            left: 0;
        }

        @media (max-width:599.95px) {
            .css-1w5z9kh .heroBox.front {
                left: 4%;
                top: 30px;
                min-width: 10%;
                width: 93%;
                max-width: 23rem;
            }
        }

        .css-1w5z9kh .coinLeft {
            top: 380px;
            left: 30px;
            -webkit-animation-delay: 400ms;
            animation-delay: 400ms;
            -webkit-animation: tiltedFloat 6s ease-in-out infinite;
            animation: tiltedFloat 6s ease-in-out infinite;
        }

        @media (max-width:599.95px) {
            .css-1w5z9kh .coinLeft {
                top: 80%;
                left: -20px;
                width: 3rem;
                z-index: 2;
            }
        }

        .css-1w5z9kh .coinCenter {
            top: 60px;
            right: 90px;
            -webkit-animation-delay: 2400ms;
            animation-delay: 2400ms;
        }

        @media (max-width:599.95px) {
            .css-1w5z9kh .coinCenter {
                top: 11%;
                right: 2%;
                width: 2.5rem;
            }
        }

        .css-193reav {
            width: 100%;
            height: 100%;
        }

        @media (min-width:0px) {
            .css-193reav {
                -webkit-transform: scale(1.35, 1.50);
                -moz-transform: scale(1.35, 1.50);
                -ms-transform: scale(1.35, 1.50);
                transform: scale(1.35, 1.50);
            }
        }

        @media (min-width:600px) {
            .css-193reav {
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
            }
        }

        .css-123ifv3 {
            should-forward-prop: (prop)=>prop !=='isPresaleOn';
            position: absolute;
            top: 50%;
            left: 48%;
            width: 60%;
            -webkit-transform: translate(-50%, -54%);
            -moz-transform: translate(-50%, -54%);
            -ms-transform: translate(-50%, -54%);
            transform: translate(-50%, -54%);
        }

        @media (max-width:599.95px) {
            .css-123ifv3 {
                width: 90%;
                -webkit-transform: translate(-50%, -46%);
                -moz-transform: translate(-50%, -46%);
                -ms-transform: translate(-50%, -46%);
                transform: translate(-50%, -46%);
                padding: 1rem 0.5rem 0.5rem;
            }
        }

        .css-1h198yb {
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            opacity: 0.5;
        }

        .css-msnw8f {
            max-width: 29rem;
            width: 100%;
            height: 35rem;
            background-color: transparent;
            z-index: 1;
            position: relative;
            margin: 0 auto;
        }

        .css-12jvsrx {
            width: 100%;
            border-radius: 1rem 1rem 0 0;
            background-color: #F7F7F7;
        }

        .css-12jvsrx button {
            border-radius: 1rem 1rem 0 0;
            padding: 0.6rem 3rem;
            font-size: 1rem;
            font-weight: 400;
            color: grey;
        }

        .css-12jvsrx button:hover {
            background-color: #e7e3e3;
        }

        .css-12jvsrx button.active {
            color: #F328A5;
            border-radius: 1rem 1rem 0 0;
            padding: 0.6rem 3rem;
            font-size: 1rem;
            font-weight: 700;
            background-color: white;
        }

        .css-o18jye {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            position: relative;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
            background-color: transparent;
            outline: 0;
            border: 0;
            margin: 0;
            border-radius: 0;
            padding: 0;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            vertical-align: middle;
            -moz-appearance: none;
            -webkit-appearance: none;
            -webkit-text-decoration: none;
            text-decoration: none;
            color: inherit;
            font-weight: 700;
            line-height: 1.7142857142857142;
            font-size: 0.875rem;
            text-transform: capitalize;
            font-family: Space Grotesk, sans-serif;
            min-width: 64px;
            padding: 6px 8px;
            border-radius: 8px;
            -webkit-transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            color: #F328A5;
            width: 50%;
        }

        .css-o18jye::-moz-focus-inner {
            border-style: none;
        }

        .css-o18jye.Mui-disabled {
            pointer-events: none;
            cursor: default;
        }

        @media print {
            .css-o18jye {
                -webkit-print-color-adjust: exact;
                color-adjust: exact;
            }
        }

        .css-o18jye:hover {
            -webkit-text-decoration: none;
            text-decoration: none;
            background-color: rgba(243, 40, 165, 0.08);
        }

        @media (hover: none) {
            .css-o18jye:hover {
                background-color: transparent;
            }
        }

        .css-o18jye.Mui-disabled {
            color: rgba(145, 158, 171, 0.8);
        }

        .css-o18jye:hover {
            box-shadow: none;
        }

        .css-xffizs {
            min-height: 450px;
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            border-radius: 0 0 1rem 1rem;
            background-color: white;
            box-shadow: 12px 12px 51px 0px rgba(0, 0, 0, 0.08);
        }

        .css-174vvho {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 1rem;
            color: black;
            position: relative;
            padding: 2rem 2rem;
        }

        @media (max-width:599.95px) {
            .css-174vvho {
                width: 100%;
                padding: 1rem;
            }
        }

        .css-174vvho .rate {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            width: 100%;
            box-shadow: 12px 12px 47px 0px #F6E6F2;
            padding: 0.6rem;
            border-radius: 2.875rem;
        }

        .css-174vvho .paymentChipContainer {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .css-174vvho .paymentChipContainer button {
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            font-size: 1rem;
            font-weight: 500;
        }

        .css-174vvho .paymentChipContainer .inactive {
            color: black;
            border: 1px solid #D0D5DD;
        }

        @media (max-width:599.95px) {
            .css-174vvho .paymentChipContainer {
                -webkit-box-flex-wrap: wrap;
                -webkit-flex-wrap: wrap;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            }
        }

        .css-174vvho .paymentChip {
            padding: 1.4rem 1rem;
            border-radius: 2rem;
            color: black;
            font-weight: 700;
            border: 1px solid #EBA4FF;
            font-size: 1rem;
        }

        .css-174vvho .paymentChip svg {
            color: black;
        }

        .css-174vvho .activeChip {
            color: white;
            background: linear-gradient(130deg, #FFB25B 0%, #FF6D33 100%);
            box-shadow: 3px 4px 30px 0px #FF8E46;
        }

        .css-174vvho .activeChip svg {
            color: white;
        }

        .css-174vvho .suffix {
            background-color: #F4F6F8;
            border-radius: 0.5rem;
            color: black;
        }

        .css-174vvho .label {
            font-weight: 500;
            color: #454F5B;
        }

        .css-174vvho .label .highlight {
            font-weight: 700;
            color: black;
        }

        .css-u6y7m0 {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            position: relative;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
            background-color: transparent;
            outline: 0;
            border: 0;
            margin: 0;
            border-radius: 0;
            padding: 0;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            vertical-align: middle;
            -moz-appearance: none;
            -webkit-appearance: none;
            -webkit-text-decoration: none;
            text-decoration: none;
            color: inherit;
            font-weight: 700;
            line-height: 1.7142857142857142;
            font-size: 0.9375rem;
            text-transform: capitalize;
            font-family: Space Grotesk, sans-serif;
            min-width: 64px;
            padding: 7px 21px;
            border-radius: 8px;
            -webkit-transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            border: 1px solid rgba(243, 40, 165, 0.5);
            color: #F328A5;
            height: 48px;
        }

        .css-u6y7m0::-moz-focus-inner {
            border-style: none;
        }

        .css-u6y7m0.Mui-disabled {
            pointer-events: none;
            cursor: default;
        }

        @media print {
            .css-u6y7m0 {
                -webkit-print-color-adjust: exact;
                color-adjust: exact;
            }
        }

        .css-u6y7m0:hover {
            -webkit-text-decoration: none;
            text-decoration: none;
            background-color: rgba(243, 40, 165, 0.08);
            border: 1px solid #F328A5;
        }

        @media (hover: none) {
            .css-u6y7m0:hover {
                background-color: transparent;
            }
        }

        .css-u6y7m0.Mui-disabled {
            color: rgba(145, 158, 171, 0.8);
            border: 1px solid rgba(145, 158, 171, 0.24);
        }

        .css-u6y7m0:hover {
            box-shadow: none;
        }

        .css-sayxxi {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            position: relative;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
            background-color: transparent;
            outline: 0;
            border: 0;
            margin: 0;
            border-radius: 0;
            padding: 0;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            vertical-align: middle;
            -moz-appearance: none;
            -webkit-appearance: none;
            -webkit-text-decoration: none;
            text-decoration: none;
            color: inherit;
            font-weight: 700;
            line-height: 1.7142857142857142;
            font-size: 0.9375rem;
            text-transform: capitalize;
            font-family: Space Grotesk, sans-serif;
            min-width: 64px;
            padding: 7px 21px;
            border-radius: 8px;
            -webkit-transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            border: 1px solid rgba(243, 40, 165, 0.5);
            color: #F328A5;
            height: 48px;
            opacity: 1;
        }

        .css-sayxxi::-moz-focus-inner {
            border-style: none;
        }

        .css-sayxxi.Mui-disabled {
            pointer-events: none;
            cursor: default;
        }

        @media print {
            .css-sayxxi {
                -webkit-print-color-adjust: exact;
                color-adjust: exact;
            }
        }

        .css-sayxxi:hover {
            -webkit-text-decoration: none;
            text-decoration: none;
            background-color: rgba(243, 40, 165, 0.08);
            border: 1px solid #F328A5;
        }

        @media (hover: none) {
            .css-sayxxi:hover {
                background-color: transparent;
            }
        }

        .css-sayxxi.Mui-disabled {
            color: rgba(145, 158, 171, 0.8);
            border: 1px solid rgba(145, 158, 171, 0.24);
        }

        .css-sayxxi:hover {
            box-shadow: none;
        }

        .css-gg4vpm {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
        }

        .css-2bpofu {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            font-weight: 700;
        }

        .css-1s2tjuv {
            line-height: 1.4375em;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            color: #fff;
            box-sizing: border-box;
            position: relative;
            cursor: text;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
            position: relative;
            border-radius: 8px;
            padding-right: 14px;
            color: black;
            border: 1px solid #DFE3E8;
            border-radius: 0.5rem;
            padding: 0.2rem 0.2rem 0.2rem 0;
            margin-top: 0.4rem;
        }

        .css-1s2tjuv.Mui-disabled {
            color: #637381;
            cursor: default;
        }

        .css-1s2tjuv:hover .MuiOutlinedInput-notchedOutline {
            border-color: #fff;
        }

        @media (hover: none) {
            .css-1s2tjuv:hover .MuiOutlinedInput-notchedOutline {
                border-color: rgba(255, 255, 255, 0.23);
            }
        }

        .css-1s2tjuv.Mui-focused .MuiOutlinedInput-notchedOutline {
            border-color: #F328A5;
            border-width: 2px;
        }

        .css-1s2tjuv.Mui-error .MuiOutlinedInput-notchedOutline {
            border-color: #FF4842;
        }

        .css-1s2tjuv.Mui-disabled .MuiOutlinedInput-notchedOutline {
            border-color: rgba(145, 158, 171, 0.8);
        }

        .css-qi8af6 {
            font: inherit;
            letter-spacing: inherit;
            color: currentColor;
            padding: 4px 0 5px;
            border: 0;
            box-sizing: content-box;
            background: none;
            height: 1.4375em;
            margin: 0;
            -webkit-tap-highlight-color: transparent;
            display: block;
            min-width: 0;
            width: 100%;
            -webkit-animation-name: mui-auto-fill-cancel;
            animation-name: mui-auto-fill-cancel;
            -webkit-animation-duration: 10ms;
            animation-duration: 10ms;
            padding-top: 1px;
            padding: 8.5px 14px;
            padding-right: 0;
        }

        .css-qi8af6::-webkit-input-placeholder {
            color: currentColor;
            opacity: 0.5;
            -webkit-transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }

        .css-qi8af6::-moz-placeholder {
            color: currentColor;
            opacity: 0.5;
            -webkit-transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }

        .css-qi8af6:-ms-input-placeholder {
            color: currentColor;
            opacity: 0.5;
            -webkit-transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }

        .css-qi8af6::-ms-input-placeholder {
            color: currentColor;
            opacity: 0.5;
            -webkit-transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }

        .css-qi8af6:focus {
            outline: 0;
        }

        .css-qi8af6:invalid {
            box-shadow: none;
        }

        .css-qi8af6::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .css-qi8af6::-webkit-input-placeholder {
            opacity: 0 !important;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .css-qi8af6::-moz-placeholder {
            opacity: 0 !important;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .css-qi8af6:-ms-input-placeholder {
            opacity: 0 !important;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .css-qi8af6::-ms-input-placeholder {
            opacity: 0 !important;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .css-qi8af6:focus::-webkit-input-placeholder {
            opacity: 0.5;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .css-qi8af6:focus::-moz-placeholder {
            opacity: 0.5;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .css-qi8af6:focus:-ms-input-placeholder {
            opacity: 0.5;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .css-qi8af6:focus::-ms-input-placeholder {
            opacity: 0.5;
        }

        .css-qi8af6.Mui-disabled {
            opacity: 1;
            -webkit-text-fill-color: #637381;
        }

        .css-qi8af6:-webkit-autofill {
            -webkit-animation-duration: 5000s;
            animation-duration: 5000s;
            -webkit-animation-name: mui-auto-fill;
            animation-name: mui-auto-fill;
        }

        .css-qi8af6:-webkit-autofill {
            -webkit-box-shadow: 0 0 0 100px #266798 inset;
            -webkit-text-fill-color: #fff;
            caret-color: #fff;
            border-radius: inherit;
        }

        .css-tgxzvy {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            height: 0.01em;
            max-height: 2em;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            white-space: nowrap;
            color: #919EAB;
            margin-left: 8px;
            min-width: 3rem;
        }

        .css-ijthju {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            position: relative;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
            background-color: transparent;
            outline: 0;
            border: 0;
            margin: 0;
            border-radius: 0;
            padding: 0;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            vertical-align: middle;
            -moz-appearance: none;
            -webkit-appearance: none;
            -webkit-text-decoration: none;
            text-decoration: none;
            color: inherit;
            text-align: center;
            -webkit-flex: 0 0 auto;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            font-size: 1.5rem;
            padding: 8px;
            border-radius: 50%;
            overflow: visible;
            color: #919EAB;
            -webkit-transition: background-color 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: background-color 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            padding: 5px;
            font-size: 1.125rem;
            max-height: 50px;
            padding: 0.5rem;
            pointer-events: all;
            margin-right: 1rem;
            text-align: center;
        }

        .css-ijthju::-moz-focus-inner {
            border-style: none;
        }

        .css-ijthju.Mui-disabled {
            pointer-events: none;
            cursor: default;
        }

        @media print {
            .css-ijthju {
                -webkit-print-color-adjust: exact;
                color-adjust: exact;
            }
        }

        .css-ijthju:hover {
            background-color: rgba(145, 158, 171, 0.08);
        }

        @media (hover: none) {
            .css-ijthju:hover {
                background-color: transparent;
            }
        }

        .css-ijthju.Mui-disabled {
            background-color: transparent;
            color: rgba(145, 158, 171, 0.8);
        }

        .css-1u7xclc {
            width: 1.3rem;
            min-width: 1.3rem;
            height: 1.2rem;
        }

        .css-nqlg3w {
            text-align: left;
            position: absolute;
            bottom: 0;
            right: 0;
            top: -5px;
            left: 0;
            margin: 0;
            padding: 0 8px;
            pointer-events: none;
            border-radius: inherit;
            border-style: solid;
            border-width: 1px;
            overflow: hidden;
            min-width: 0%;
            border-color: rgba(255, 255, 255, 0.23);
        }

        .css-hdw1oc {
            float: unset;
            overflow: hidden;
            padding: 0;
            line-height: 11px;
            -webkit-transition: width 150ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
            transition: width 150ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
        }

        .css-acwcvw {
            margin-bottom: 1rem;
        }

        .css-fbneus {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            height: 0.01em;
            max-height: 2em;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            white-space: nowrap;
            color: #919EAB;
            margin-left: 8px;
            padding-top: 1.2rem;
            padding-bottom: 1.2rem;
            padding-left: 0.6rem;
            padding-right: 0.6rem;
            width: 2.5rem;
        }

        .css-1wvcg5 {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            position: relative;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
            background-color: transparent;
            outline: 0;
            border: 0;
            margin: 0;
            border-radius: 0;
            padding: 0;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            vertical-align: middle;
            -moz-appearance: none;
            -webkit-appearance: none;
            -webkit-text-decoration: none;
            text-decoration: none;
            color: inherit;
            font-weight: 700;
            line-height: 1.7142857142857142;
            font-size: 0.9375rem;
            text-transform: capitalize;
            font-family: Space Grotesk, sans-serif;
            min-width: 64px;
            padding: 8px 22px;
            border-radius: 8px;
            -webkit-transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            color: #fff;
            background-color: #F328A5;
            box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
            box-shadow: 0 8px 16px 0 rgba(243, 40, 165, 0.24);
            height: 48px;
        }

        .css-1wvcg5::-moz-focus-inner {
            border-style: none;
        }

        .css-1wvcg5.Mui-disabled {
            pointer-events: none;
            cursor: default;
        }

        @media print {
            .css-1wvcg5 {
                -webkit-print-color-adjust: exact;
                color-adjust: exact;
            }
        }

        .css-1wvcg5:hover {
            -webkit-text-decoration: none;
            text-decoration: none;
            background-color: #9322D0;
            box-shadow: 0px 2px 4px -1px rgba(0, 0, 0, 0.2), 0px 4px 5px 0px rgba(0, 0, 0, 0.14), 0px 1px 10px 0px rgba(0, 0, 0, 0.12);
        }

        @media (hover: none) {
            .css-1wvcg5:hover {
                background-color: #F328A5;
            }
        }

        .css-1wvcg5:active {
            box-shadow: 0px 5px 5px -3px rgba(0, 0, 0, 0.2), 0px 8px 10px 1px rgba(0, 0, 0, 0.14), 0px 3px 14px 2px rgba(0, 0, 0, 0.12);
        }

        .css-1wvcg5.Mui-focusVisible {
            box-shadow: 0px 3px 5px -1px rgba(0, 0, 0, 0.2), 0px 6px 10px 0px rgba(0, 0, 0, 0.14), 0px 1px 18px 0px rgba(0, 0, 0, 0.12);
        }

        .css-1wvcg5.Mui-disabled {
            color: rgba(145, 158, 171, 0.8);
            box-shadow: none;
            background-color: rgba(145, 158, 171, 0.24);
        }

        .css-1wvcg5:hover {
            box-shadow: none;
        }

        .css-1it74ey {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            width: 1em;
            height: 1em;
            display: inline-block;
            fill: currentColor;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -webkit-transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            font-size: 1.5rem;
        }

        .css-1it74ey color {
            accent: #F6E6F2;
            lighter: #EBD6FD;
            light: #B985F4;
            main: #F328A5;
            dark: #9322D0;
            darker: #431068;
            contrast-text: #fff;
        }

        .css-8s2iv2 {
            cursor: pointer;
            -webkit-animation: float 4s linear infinite;
            animation: float 4s linear infinite;
        }

        @media (min-width:0px) {
            .css-8s2iv2 {
                margin: 0rem auto 2rem auto;
            }
        }

        @media (min-width:900px) {
            .css-8s2iv2 {
                margin: 1rem auto 5rem auto;
                opacity: 0;
            }
        }

        .css-1v36jc4 {
            background: white;
            border-radius: 1rem;
            height: 8.5rem;
            padding: 1rem;
            color: black;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            width: 100%;
            margin-bottom: 4rem;
            position: relative;
            overflow: hidden;
        }

        @media (min-width:900px) {
            .css-1v36jc4 {
                opacity: 0;
            }
        }

        .css-1v36jc4 .highlight {
            color: #F328A5;
            font-weight: 700;
        }

        @media (max-width:899.95px) {
            .css-1v36jc4 {
                -webkit-align-items: flex-start;
                -webkit-box-align: flex-start;
                -ms-flex-align: flex-start;
                align-items: flex-start;
                height: 26rem;
                padding: 2rem;
            }
        }

        .css-15ta10h {
            position: absolute;
            bottom: -1.5rem;
            width: 8rem;
        }

        @media (min-width:0px) {
            .css-15ta10h {
                left: -10px;
            }
        }

        .css-pibc0v {
            position: absolute;
            right: 1rem;
            bottom: -2.5rem;
            width: 8rem;
        }

        .css-1e1umif {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            gap: 1rem;
            z-index: 2;
        }

        @media (min-width:0px) {
            .css-1e1umif {
                width: -webkit-fit-content;
                width: -moz-fit-content;
                width: fit-content;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
            }
        }

        @media (min-width:900px) {
            .css-1e1umif {
                width: 50rem;
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
                opacity: 0;
            }
        }

        .css-1q47tnl {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 0.3rem;
        }

        .css-eisnlk {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            font-size: 2rem;
            font-weight: 700;
            line-height: 1;
        }

        @media (min-width:0px) {
            .css-eisnlk {
                text-align: center;
            }
        }

        @media (min-width:900px) {
            .css-eisnlk {
                text-align: left;
            }
        }

        .css-70qvj9 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .css-o92162 {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
        }

        @media (min-width:0px) {
            .css-o92162 {
                text-align: center;
            }
        }

        @media (min-width:900px) {
            .css-o92162 {
                text-align: left;
            }
        }

        .css-11kq1wa {
            margin: 0;
            color: #F328A5;
            -webkit-text-decoration: none;
            text-decoration: none;
            cursor: pointer;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .css-11kq1wa:hover {
            -webkit-text-decoration: underline;
            text-decoration: underline;
        }

        .css-1n4b8yv {
            position: relative;
            width: 100%;
            margin-left: auto;
            box-sizing: border-box;
            margin-right: auto;
            display: block;
            padding-left: 16px;
            padding-right: 16px;
            color: black;
        }

        @media (min-width:0px) {
            .css-1n4b8yv {
                padding-top: 2rem;
            }
        }

        @media (min-width:900px) {
            .css-1n4b8yv {
                padding-top: 4rem;
            }
        }

        @media (min-width:2000px) {
            .css-1n4b8yv {
                padding-top: 16rem;
            }
        }

        @media (min-width:600px) {
            .css-1n4b8yv {
                padding-left: 24px;
                padding-right: 24px;
            }
        }

        @media (min-width:1200px) {
            .css-1n4b8yv {
                max-width: 1200px;
            }
        }

        .css-78t8io {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            text-align: center;
            font-weight: 500;
            color: #667085;
        }

        @media (min-width:0px) {
            .css-78t8io {
                font-size: 1.25;
            }
        }

        @media (min-width:900px) {
            .css-78t8io {
                font-size: 2rem;
            }
        }

        .css-8fo6ms {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-flex-wrap: wrap;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        @media (min-width:0px) {
            .css-8fo6ms {
                gap: 1rem;
                padding: 1rem;
            }
        }

        @media (min-width:900px) {
            .css-8fo6ms {
                gap: 3.5rem;
                padding: 2rem;
            }
        }

        .css-qtq9ox {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            width: 20%;
        }

        .css-yfdw57 {
            width: 80%;
            min-width: 4.5rem;
        }

        .css-1s6e1gy {
            min-width: 4.5rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            width: 20%;
        }

        .css-1ehk0dr {
            max-width: 70%;
            width: 80%;
            min-width: 4.5rem;
        }

        .css-fc12yp {
            margin-top: 96px;
            margin-bottom: 10rem;
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            color: black;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            padding-top: 6rem;
        }

        @media (max-width:799.95px) {
            .css-fc12yp {
                margin-top: 16px;
                margin-bottom: 2rem;
                gap: 5rem;
                -webkit-flex-direction: column-reverse;
                -ms-flex-direction: column-reverse;
                flex-direction: column-reverse;
                height: -webkit-fit-content;
                height: -moz-fit-content;
                height: fit-content;
                padding-top: 0rem;
            }
        }

        @media (max-width:599.95px) {
            .css-fc12yp {
                gap: 1rem;
            }
        }

        @media (min-width:2000px) {
            .css-fc12yp {
                margin-top: 16rem;
                margin-bottom: 12rem;
            }
        }

        .css-yehhoi {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            gap: 1rem;
            max-width: 550px;
        }

        @media (min-width:0px) {
            .css-yehhoi {
                padding-left: 0px;
            }
        }

        .css-o1f978 {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            font-weight: 700;
            line-height: 1;
            position: relative;
        }

        @media (min-width:0px) {
            .css-o1f978 {
                font-size: 2rem;
            }
        }

        @media (min-width:900px) {
            .css-o1f978 {
                font-size: 3.75rem;
            }
        }

        .css-gffp4m {
            width: 3rem;
            object-fit: contain;
            position: absolute;
            left: -3rem;
            top: -1rem;
        }

        @media (max-width:599.95px) {
            .css-gffp4m {
                left: 85%;
                top: 0;
            }
        }

        .css-otod5t {
            margin-top: 1rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            gap: 1rem;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .css-13m3kkv {
            height: 3rem;
            min-width: 3rem;
            color: black;
            background-color: white;
            border-radius: 50%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
        }

        .css-8ndqk9 {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            line-height: 1.2;
        }

        @media (min-width:0px) {
            .css-8ndqk9 {
                font-size: 0.875rem;
            }
        }

        @media (min-width:900px) {
            .css-8ndqk9 {
                font-size: 1.25rem;
            }
        }

        @media (min-width:2000px) {
            .css-8ndqk9 {
                font-size: 1.75rem;
            }
        }

        .css-6rm91l {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            line-height: 1.2;
        }

        @media (min-width:0px) {
            .css-6rm91l {
                font-size: 0.875rem;
            }
        }

        @media (min-width:900px) {
            .css-6rm91l {
                font-size: 1.25rem;
            }
        }

        .css-1dsn0hv {
            position: relative;
            -webkit-flex-basis: 550px;
            -ms-flex-preferred-size: 550px;
            flex-basis: 550px;
            margin: 2rem 0;
        }

        @media (max-width:599.95px) {
            .css-1dsn0hv {
                width: 100%;
                max-height: 20rem;
            }
        }

        @media (max-width:399.95px) {
            .css-1dsn0hv {
                max-height: 15rem;
            }
        }

        @media (max-width:899.95px) {
            .css-1dsn0hv {
                -webkit-flex-basis: 400px;
                -ms-flex-preferred-size: 400px;
                flex-basis: 400px;
            }
        }

        .css-1dsn0hv .card {
            position: absolute;
            max-width: 90%;
            -webkit-animation: float 4s ease-in-out infinite;
            animation: float 4s ease-in-out infinite;
        }

        .css-1dsn0hv .card.card-silver {
            left: 4%;
            max-width: 70%;
            bottom: 0%;
            -webkit-animation-delay: 400ms;
            animation-delay: 400ms;
        }

        .css-1dsn0hv .card.card-black {
            left: -5%;
            bottom: -5%;
            -webkit-animation-delay: 1200ms;
            animation-delay: 1200ms;
        }

        .css-1dsn0hv .card.card-gold {
            left: 13%;
            bottom: 14%;
            -webkit-animation-delay: 1800ms;
            animation-delay: 1800ms;
        }

        @media (max-width:899.95px) {
            .css-1dsn0hv .card.card-silver {
                left: 0%;
            }

            .css-1dsn0hv .card.card-black {
                left: -9%;
            }

            .css-1dsn0hv .card.card-gold {
                left: 9%;
            }
        }

        .css-1dsn0hv .coin {
            width: 10%;
            position: absolute;
            left: 50%;
            -webkit-animation: tiltedFloat 6s ease-in-out infinite;
            animation: tiltedFloat 6s ease-in-out infinite;
        }

        .css-1dsn0hv .coin.coin-left {
            left: 10%;
            bottom: 70%;
        }

        .css-1dsn0hv .coin.coin-right {
            width: 18%;
            left: 69%;
            bottom: 0%;
            -webkit-animation-delay: 1000ms;
            animation-delay: 1000ms;
        }

        .css-1dsn0hv .hand {
            width: 35%;
            position: absolute;
            bottom: 5%;
        }

        @media (max-width:599.95px) {
            .css-1dsn0hv .hand {
                left: 0;
            }
        }

        @media (min-width:900px) {
            .css-1ou2xas {
                opacity: 0;
            }
        }

        .css-ob0qoi {
            height: 58rem;
            padding: 3rem 0;
            max-width: 100rem;
            width: 100%;
            margin: 0 auto;
            position: relative;
        }

        @media (max-width:599.95px) {
            .css-ob0qoi {
                padding: 0;
                height: 35rem;
                margin-top: 6rem;
            }
        }

        @media (min-width:2000px) {
            .css-ob0qoi {
                margin-top: 10rem;
                margin-bottom: 10rem;
            }
        }

        .css-1qae61w {
            padding: 4rem;
            width: 100%;
            overflow: hidden;
            height: 50rem;
        }

        @media (max-width:599.95px) {
            .css-1qae61w {
                padding: 1.5rem;
            }
        }

        .css-187rau0 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            gap: 1rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            gap: 1rem;
        }

        @media (min-width:0px) {
            .css-187rau0 {
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
            }
        }

        @media (min-width:0px) {
            .css-187rau0 {
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
            }
        }

        .css-1vbb00j {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            font-weight: 700;
            line-height: 1;
            position: relative;
        }

        @media (min-width:0px) {
            .css-1vbb00j {
                font-size: 2rem;
                text-align: center;
            }
        }

        @media (min-width:900px) {
            .css-1vbb00j {
                font-size: 3rem;
            }
        }

        @media (min-width:1200px) {
            .css-1vbb00j {
                font-size: 3.75rem;
            }
        }

        .css-1dnn977 {
            width: 3rem;
            height: 4rem;
            position: absolute;
            right: 0rem;
            top: 0rem;
        }

        @media (max-width:899.95px) {
            .css-1dnn977 {
                width: 2rem;
                height: 2rem;
                left: unset;
                right: 0rem;
                top: 0rem;
            }
        }

        .css-1v3haxt {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            color: #0b0b0b;
            max-width: 30rem;
            font-weight: 400;
        }

        @media (min-width:0px) {
            .css-1v3haxt {
                font-size: 0.875rem;
                text-align: center;
            }
        }

        @media (min-width:900px) {
            .css-1v3haxt {
                font-size: 1.25rem;
            }
        }

        .css-1bhf6ae {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            position: relative;
            width: 100%;
        }

        @media (min-width:0px) {
            .css-1bhf6ae {
                margin-top: 10rem;
            }
        }

        @media (min-width:900px) {
            .css-1bhf6ae {
                margin-top: 15rem;
            }
        }

        @-webkit-keyframes outerMove {
            0% {
                offset-distance: 0%;
                z-index: 1;
            }

            25% {
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
                z-index: 1;
            }

            50% {
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
                z-index: 1;
            }

            51% {
                z-index: 0;
            }

            75% {
                -webkit-transform: scale(0.5);
                -moz-transform: scale(0.5);
                -ms-transform: scale(0.5);
                transform: scale(0.5);
                z-index: 0;
            }

            100% {
                offset-distance: 100%;
                z-index: 0;
            }
        }

        @keyframes outerMove {
            0% {
                offset-distance: 0%;
                z-index: 1;
            }

            25% {
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
                z-index: 1;
            }

            50% {
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
                z-index: 1;
            }

            51% {
                z-index: 0;
            }

            75% {
                -webkit-transform: scale(0.5);
                -moz-transform: scale(0.5);
                -ms-transform: scale(0.5);
                transform: scale(0.5);
                z-index: 0;
            }

            100% {
                offset-distance: 100%;
                z-index: 0;
            }
        }

        @-webkit-keyframes innerMove {
            0% {
                offset-distance: 0%;
                z-index: 0;
            }

            25% {
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
                z-index: 0;
            }

            59% {
                z-index: 0;
            }

            60% {
                z-index: 1;
            }

            75% {
                -webkit-transform: scale(0.5);
                -moz-transform: scale(0.5);
                -ms-transform: scale(0.5);
                transform: scale(0.5);
                z-index: 1;
            }

            100% {
                offset-distance: 100%;
                z-index: 1;
            }
        }

        @keyframes innerMove {
            0% {
                offset-distance: 0%;
                z-index: 0;
            }

            25% {
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
                z-index: 0;
            }

            59% {
                z-index: 0;
            }

            60% {
                z-index: 1;
            }

            75% {
                -webkit-transform: scale(0.5);
                -moz-transform: scale(0.5);
                -ms-transform: scale(0.5);
                transform: scale(0.5);
                z-index: 1;
            }

            100% {
                offset-distance: 100%;
                z-index: 1;
            }
        }

        @-webkit-keyframes centerFloat {
            0% {
                -webkit-transform: translate(-50%, 0px);
                -moz-transform: translate(-50%, 0px);
                -ms-transform: translate(-50%, 0px);
                transform: translate(-50%, 0px);
            }

            50% {
                -webkit-transform: translate(-50%, -10px);
                -moz-transform: translate(-50%, -10px);
                -ms-transform: translate(-50%, -10px);
                transform: translate(-50%, -10px);
            }

            100% {
                -webkit-transform: translate(-50%, 0px);
                -moz-transform: translate(-50%, 0px);
                -ms-transform: translate(-50%, 0px);
                transform: translate(-50%, 0px);
            }
        }

        @keyframes centerFloat {
            0% {
                -webkit-transform: translate(-50%, 0px);
                -moz-transform: translate(-50%, 0px);
                -ms-transform: translate(-50%, 0px);
                transform: translate(-50%, 0px);
            }

            50% {
                -webkit-transform: translate(-50%, -10px);
                -moz-transform: translate(-50%, -10px);
                -ms-transform: translate(-50%, -10px);
                transform: translate(-50%, -10px);
            }

            100% {
                -webkit-transform: translate(-50%, 0px);
                -moz-transform: translate(-50%, 0px);
                -ms-transform: translate(-50%, 0px);
                transform: translate(-50%, 0px);
            }
        }

        @-webkit-keyframes scaleShadow {
            0% {
                -webkit-transform: translateX(-50%) scaleX(1);
                -moz-transform: translateX(-50%) scaleX(1);
                -ms-transform: translateX(-50%) scaleX(1);
                transform: translateX(-50%) scaleX(1);
            }

            50% {
                -webkit-transform: translateX(-50%) scaleX(0.8);
                -moz-transform: translateX(-50%) scaleX(0.8);
                -ms-transform: translateX(-50%) scaleX(0.8);
                transform: translateX(-50%) scaleX(0.8);
            }

            100% {
                -webkit-transform: translateX(-50%) scaleX(1);
                -moz-transform: translateX(-50%) scaleX(1);
                -ms-transform: translateX(-50%) scaleX(1);
                transform: translateX(-50%) scaleX(1);
            }
        }

        @keyframes scaleShadow {
            0% {
                -webkit-transform: translateX(-50%) scaleX(1);
                -moz-transform: translateX(-50%) scaleX(1);
                -ms-transform: translateX(-50%) scaleX(1);
                transform: translateX(-50%) scaleX(1);
            }

            50% {
                -webkit-transform: translateX(-50%) scaleX(0.8);
                -moz-transform: translateX(-50%) scaleX(0.8);
                -ms-transform: translateX(-50%) scaleX(0.8);
                transform: translateX(-50%) scaleX(0.8);
            }

            100% {
                -webkit-transform: translateX(-50%) scaleX(1);
                -moz-transform: translateX(-50%) scaleX(1);
                -ms-transform: translateX(-50%) scaleX(1);
                transform: translateX(-50%) scaleX(1);
            }
        }

        .css-115vcbu {
            position: absolute;
            top: -1.5rem;
            min-width: 1600px;
        }

        .css-1fjvxyd {
            position: absolute;
            top: 1.5rem;
            min-width: 716px;
        }

        .css-19w8rfp {
            position: absolute;
            min-width: 1208px;
        }

        .css-92r017 {
            position: absolute;
            left: 50%;
            -webkit-animation: scaleShadow 3s linear infinite;
            animation: scaleShadow 3s linear infinite;
            -webkit-transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            transform: translateX(-50%);
        }

        @media (min-width:0px) {
            .css-92r017 {
                top: 2.5rem;
                width: 14rem;
            }
        }

        @media (min-width:600px) {
            .css-92r017 {
                top: 5rem;
            }
        }

        @media (min-width:900px) {
            .css-92r017 {
                top: 2rem;
                width: 23rem;
            }
        }

        .css-e9ah65 {
            position: absolute;
            top: 1.5rem;
            min-width: 716px;
            width: 716px;
        }

        @media (max-width:899.95px) {
            .css-e9ah65 {
                min-width: 426px;
                width: 426px;
            }
        }

        .css-72m8qr {
            position: absolute;
            offset-rotate: 0deg;
            -webkit-animation: innerMove 20s linear infinite;
            animation: innerMove 20s linear infinite;
            offset-path: path("M714.015 73.5196C714.015 78.216 711.703 82.9118 707.064 87.5693C702.421 92.2297 695.52 96.7751 686.541 101.136C668.586 109.857 642.538 117.738 610.266 124.368C545.739 137.623 456.549 145.83 358 145.83C259.451 145.83 170.26 137.623 105.734 124.368C73.4618 117.738 47.4137 109.857 29.4588 101.136C20.4791 96.7751 13.5781 92.2297 8.93571 87.5693C4.29624 82.9118 1.98424 78.216 1.98424 73.5196C1.98424 68.8231 4.29624 64.1274 8.93571 59.4699C13.5781 54.8095 20.4791 50.2641 29.4588 45.9028C47.4137 37.1824 73.4618 29.3008 105.734 22.6713C170.26 9.4158 259.451 1.20933 358 1.20933C456.549 1.20933 545.739 9.4158 610.266 22.6713C642.538 29.3008 668.586 37.1824 686.541 45.9028C695.52 50.2641 702.421 54.8095 707.064 59.4699C711.703 64.1274 714.015 68.8231 714.015 73.5196Z");
            -webkit-animation-delay: -10000ms !important;
            animation-delay: -10000ms !important;
        }

        @media (max-width:599.95px) {
            .css-72m8qr {
                -webkit-animation: innerMove 10s linear infinite;
                animation: innerMove 10s linear infinite;
                offset-path: path("M424.968 44.6607C424.968 47.4569 423.591 50.2527 420.829 53.0258C418.065 55.8005 413.956 58.5068 408.61 61.1035C397.919 66.2955 382.411 70.9882 363.196 74.9353C324.777 82.8276 271.674 87.7136 212.999 87.7136C154.323 87.7136 101.22 82.8276 62.8017 74.9353C43.5872 70.9882 28.0784 66.2955 17.3882 61.1035C12.0418 58.5068 7.93296 55.8005 5.16895 53.0258C2.40664 50.2527 1.03009 47.4569 1.03009 44.6607C1.03009 41.8645 2.40664 39.0686 5.16895 36.2956C7.93296 33.5208 12.0418 30.8145 17.3882 28.2179C28.0784 23.0258 43.5872 18.3332 62.8017 14.386C101.22 6.49379 154.323 1.60773 212.999 1.60773C271.674 1.60773 324.777 6.49379 363.196 14.386C382.411 18.3332 397.919 23.0258 408.61 28.2179C413.956 30.8145 418.065 33.5208 420.829 36.2956C423.591 39.0686 424.968 41.8645 424.968 44.6607Z");
            }
        }

        .css-vni5v1 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        @media (min-width:0px) {
            .css-vni5v1 {
                margin-top: -5rem;
            }
        }

        @media (min-width:600px) {
            .css-vni5v1 {
                margin-top: -7.2rem;
            }
        }

        .css-1jojg8y {
            height: 6rem;
            width: 6rem;
            border-radius: 50%;
            box-shadow: 0px 0px 26px rgba(145, 158, 171, 0.16);
            background-color: white;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
        }

        @media (max-width:599.95px) {
            .css-1jojg8y {
                height: 4rem;
                width: 4rem;
            }
        }

        .css-5b1el9 {
            width: 1px;
            height: 1rem;
            background-color: #FFD8F0;
        }

        .css-1pd8wfh {
            border-radius: 50%;
            width: 0.5rem;
            height: 0.5rem;
            background-color: #F328A5;
        }

        .css-15q5ihe {
            position: absolute;
            offset-rotate: 0deg;
            -webkit-animation: innerMove 20s linear infinite;
            animation: innerMove 20s linear infinite;
            offset-path: path("M714.015 73.5196C714.015 78.216 711.703 82.9118 707.064 87.5693C702.421 92.2297 695.52 96.7751 686.541 101.136C668.586 109.857 642.538 117.738 610.266 124.368C545.739 137.623 456.549 145.83 358 145.83C259.451 145.83 170.26 137.623 105.734 124.368C73.4618 117.738 47.4137 109.857 29.4588 101.136C20.4791 96.7751 13.5781 92.2297 8.93571 87.5693C4.29624 82.9118 1.98424 78.216 1.98424 73.5196C1.98424 68.8231 4.29624 64.1274 8.93571 59.4699C13.5781 54.8095 20.4791 50.2641 29.4588 45.9028C47.4137 37.1824 73.4618 29.3008 105.734 22.6713C170.26 9.4158 259.451 1.20933 358 1.20933C456.549 1.20933 545.739 9.4158 610.266 22.6713C642.538 29.3008 668.586 37.1824 686.541 45.9028C695.52 50.2641 702.421 54.8095 707.064 59.4699C711.703 64.1274 714.015 68.8231 714.015 73.5196Z");
            -webkit-animation-delay: -20000ms !important;
            animation-delay: -20000ms !important;
        }

        @media (max-width:599.95px) {
            .css-15q5ihe {
                -webkit-animation: innerMove 10s linear infinite;
                animation: innerMove 10s linear infinite;
                offset-path: path("M424.968 44.6607C424.968 47.4569 423.591 50.2527 420.829 53.0258C418.065 55.8005 413.956 58.5068 408.61 61.1035C397.919 66.2955 382.411 70.9882 363.196 74.9353C324.777 82.8276 271.674 87.7136 212.999 87.7136C154.323 87.7136 101.22 82.8276 62.8017 74.9353C43.5872 70.9882 28.0784 66.2955 17.3882 61.1035C12.0418 58.5068 7.93296 55.8005 5.16895 53.0258C2.40664 50.2527 1.03009 47.4569 1.03009 44.6607C1.03009 41.8645 2.40664 39.0686 5.16895 36.2956C7.93296 33.5208 12.0418 30.8145 17.3882 28.2179C28.0784 23.0258 43.5872 18.3332 62.8017 14.386C101.22 6.49379 154.323 1.60773 212.999 1.60773C271.674 1.60773 324.777 6.49379 363.196 14.386C382.411 18.3332 397.919 23.0258 408.61 28.2179C413.956 30.8145 418.065 33.5208 420.829 36.2956C423.591 39.0686 424.968 41.8645 424.968 44.6607Z");
            }
        }

        .css-1tvcwwz {
            sx: 2rem;
        }

        @media (min-width:0px) {
            .css-1tvcwwz {
                width: 2rem;
            }
        }

        @media (min-width:900px) {
            .css-1tvcwwz {
                width: 3rem;
                height: 3rem;
            }
        }

        .css-1unt6zn {
            position: absolute;
            min-width: 1208px;
            width: 1208px;
        }

        @media (max-width:899.95px) {
            .css-1unt6zn {
                min-width: 720px;
                width: 720px;
            }
        }

        .css-1h6ef2j {
            position: absolute;
            offset-rotate: 0deg;
            -webkit-animation: outerMove 20s linear infinite;
            animation: outerMove 20s linear infinite;
            offset-path: path("M1206.35 125.037C1206.35 133.271 1202.32 141.418 1194.4 149.409C1186.47 157.402 1174.73 165.162 1159.52 172.586C1129.1 187.433 1085.01 200.831 1030.45 212.094C921.348 234.615 770.574 248.553 604 248.553C437.426 248.553 286.652 234.615 177.547 212.094C122.986 200.831 78.9001 187.433 48.48 172.586C33.2678 165.162 21.5271 157.402 13.6031 149.409C5.68216 141.418 1.64512 133.271 1.64512 125.037C1.64512 116.804 5.68216 108.657 13.6031 100.666C21.5271 92.6729 33.2678 84.9125 48.48 77.4884C78.9001 62.6422 122.986 49.2439 177.547 37.9813C286.652 15.4596 437.426 1.52183 604 1.52183C770.574 1.52183 921.348 15.4596 1030.45 37.9813C1085.01 49.2439 1129.1 62.6422 1159.52 77.4884C1174.73 84.9125 1186.47 92.6729 1194.4 100.666C1202.32 108.657 1206.35 116.804 1206.35 125.037Z");
            -webkit-animation-delay: -4000ms !important;
            animation-delay: -4000ms !important;
        }

        @media (max-width:599.95px) {
            .css-1h6ef2j {
                -webkit-animation: outerMove 10s linear infinite;
                animation: outerMove 10s linear infinite;
                offset-path: path("M718.636 74.3799C718.636 79.2819 716.233 84.1329 711.517 88.8903C706.799 93.6495 699.809 98.2699 690.751 102.69C672.639 111.529 646.391 119.507 613.906 126.212C548.946 139.622 459.176 147.92 359.999 147.92C260.823 147.92 171.053 139.622 106.092 126.212C73.6073 119.507 47.3591 111.529 29.2472 102.69C20.19 98.2699 13.1997 93.6495 8.48181 88.8903C3.76575 84.1329 1.36213 79.2819 1.36213 74.3799C1.36213 69.4778 3.76575 64.6268 8.48181 59.8695C13.1997 55.1103 20.19 50.4898 29.2472 46.0695C47.3591 37.2303 73.6073 29.253 106.092 22.5473C171.053 9.13811 260.823 0.839664 359.999 0.839664C459.176 0.839664 548.946 9.13811 613.906 22.5473C646.391 29.253 672.639 37.2303 690.751 46.0695C699.809 50.4898 706.799 55.1103 711.517 59.8695C716.233 64.6268 718.636 69.4778 718.636 74.3799Z");
            }
        }

        .css-irqkq {
            position: absolute;
            offset-rotate: 0deg;
            -webkit-animation: outerMove 20s linear infinite;
            animation: outerMove 20s linear infinite;
            offset-path: path("M1206.35 125.037C1206.35 133.271 1202.32 141.418 1194.4 149.409C1186.47 157.402 1174.73 165.162 1159.52 172.586C1129.1 187.433 1085.01 200.831 1030.45 212.094C921.348 234.615 770.574 248.553 604 248.553C437.426 248.553 286.652 234.615 177.547 212.094C122.986 200.831 78.9001 187.433 48.48 172.586C33.2678 165.162 21.5271 157.402 13.6031 149.409C5.68216 141.418 1.64512 133.271 1.64512 125.037C1.64512 116.804 5.68216 108.657 13.6031 100.666C21.5271 92.6729 33.2678 84.9125 48.48 77.4884C78.9001 62.6422 122.986 49.2439 177.547 37.9813C286.652 15.4596 437.426 1.52183 604 1.52183C770.574 1.52183 921.348 15.4596 1030.45 37.9813C1085.01 49.2439 1129.1 62.6422 1159.52 77.4884C1174.73 84.9125 1186.47 92.6729 1194.4 100.666C1202.32 108.657 1206.35 116.804 1206.35 125.037Z");
            -webkit-animation-delay: -8000ms !important;
            animation-delay: -8000ms !important;
        }

        @media (max-width:599.95px) {
            .css-irqkq {
                -webkit-animation: outerMove 10s linear infinite;
                animation: outerMove 10s linear infinite;
                offset-path: path("M718.636 74.3799C718.636 79.2819 716.233 84.1329 711.517 88.8903C706.799 93.6495 699.809 98.2699 690.751 102.69C672.639 111.529 646.391 119.507 613.906 126.212C548.946 139.622 459.176 147.92 359.999 147.92C260.823 147.92 171.053 139.622 106.092 126.212C73.6073 119.507 47.3591 111.529 29.2472 102.69C20.19 98.2699 13.1997 93.6495 8.48181 88.8903C3.76575 84.1329 1.36213 79.2819 1.36213 74.3799C1.36213 69.4778 3.76575 64.6268 8.48181 59.8695C13.1997 55.1103 20.19 50.4898 29.2472 46.0695C47.3591 37.2303 73.6073 29.253 106.092 22.5473C171.053 9.13811 260.823 0.839664 359.999 0.839664C459.176 0.839664 548.946 9.13811 613.906 22.5473C646.391 29.253 672.639 37.2303 690.751 46.0695C699.809 50.4898 706.799 55.1103 711.517 59.8695C716.233 64.6268 718.636 69.4778 718.636 74.3799Z");
            }
        }

        .css-y5vfzn {
            position: absolute;
            offset-rotate: 0deg;
            -webkit-animation: outerMove 20s linear infinite;
            animation: outerMove 20s linear infinite;
            offset-path: path("M1206.35 125.037C1206.35 133.271 1202.32 141.418 1194.4 149.409C1186.47 157.402 1174.73 165.162 1159.52 172.586C1129.1 187.433 1085.01 200.831 1030.45 212.094C921.348 234.615 770.574 248.553 604 248.553C437.426 248.553 286.652 234.615 177.547 212.094C122.986 200.831 78.9001 187.433 48.48 172.586C33.2678 165.162 21.5271 157.402 13.6031 149.409C5.68216 141.418 1.64512 133.271 1.64512 125.037C1.64512 116.804 5.68216 108.657 13.6031 100.666C21.5271 92.6729 33.2678 84.9125 48.48 77.4884C78.9001 62.6422 122.986 49.2439 177.547 37.9813C286.652 15.4596 437.426 1.52183 604 1.52183C770.574 1.52183 921.348 15.4596 1030.45 37.9813C1085.01 49.2439 1129.1 62.6422 1159.52 77.4884C1174.73 84.9125 1186.47 92.6729 1194.4 100.666C1202.32 108.657 1206.35 116.804 1206.35 125.037Z");
            -webkit-animation-delay: -12000ms !important;
            animation-delay: -12000ms !important;
        }

        @media (max-width:599.95px) {
            .css-y5vfzn {
                -webkit-animation: outerMove 10s linear infinite;
                animation: outerMove 10s linear infinite;
                offset-path: path("M718.636 74.3799C718.636 79.2819 716.233 84.1329 711.517 88.8903C706.799 93.6495 699.809 98.2699 690.751 102.69C672.639 111.529 646.391 119.507 613.906 126.212C548.946 139.622 459.176 147.92 359.999 147.92C260.823 147.92 171.053 139.622 106.092 126.212C73.6073 119.507 47.3591 111.529 29.2472 102.69C20.19 98.2699 13.1997 93.6495 8.48181 88.8903C3.76575 84.1329 1.36213 79.2819 1.36213 74.3799C1.36213 69.4778 3.76575 64.6268 8.48181 59.8695C13.1997 55.1103 20.19 50.4898 29.2472 46.0695C47.3591 37.2303 73.6073 29.253 106.092 22.5473C171.053 9.13811 260.823 0.839664 359.999 0.839664C459.176 0.839664 548.946 9.13811 613.906 22.5473C646.391 29.253 672.639 37.2303 690.751 46.0695C699.809 50.4898 706.799 55.1103 711.517 59.8695C716.233 64.6268 718.636 69.4778 718.636 74.3799Z");
            }
        }

        .css-6944k6 {
            position: absolute;
            offset-rotate: 0deg;
            -webkit-animation: outerMove 20s linear infinite;
            animation: outerMove 20s linear infinite;
            offset-path: path("M1206.35 125.037C1206.35 133.271 1202.32 141.418 1194.4 149.409C1186.47 157.402 1174.73 165.162 1159.52 172.586C1129.1 187.433 1085.01 200.831 1030.45 212.094C921.348 234.615 770.574 248.553 604 248.553C437.426 248.553 286.652 234.615 177.547 212.094C122.986 200.831 78.9001 187.433 48.48 172.586C33.2678 165.162 21.5271 157.402 13.6031 149.409C5.68216 141.418 1.64512 133.271 1.64512 125.037C1.64512 116.804 5.68216 108.657 13.6031 100.666C21.5271 92.6729 33.2678 84.9125 48.48 77.4884C78.9001 62.6422 122.986 49.2439 177.547 37.9813C286.652 15.4596 437.426 1.52183 604 1.52183C770.574 1.52183 921.348 15.4596 1030.45 37.9813C1085.01 49.2439 1129.1 62.6422 1159.52 77.4884C1174.73 84.9125 1186.47 92.6729 1194.4 100.666C1202.32 108.657 1206.35 116.804 1206.35 125.037Z");
            -webkit-animation-delay: -16000ms !important;
            animation-delay: -16000ms !important;
        }

        @media (max-width:599.95px) {
            .css-6944k6 {
                -webkit-animation: outerMove 10s linear infinite;
                animation: outerMove 10s linear infinite;
                offset-path: path("M718.636 74.3799C718.636 79.2819 716.233 84.1329 711.517 88.8903C706.799 93.6495 699.809 98.2699 690.751 102.69C672.639 111.529 646.391 119.507 613.906 126.212C548.946 139.622 459.176 147.92 359.999 147.92C260.823 147.92 171.053 139.622 106.092 126.212C73.6073 119.507 47.3591 111.529 29.2472 102.69C20.19 98.2699 13.1997 93.6495 8.48181 88.8903C3.76575 84.1329 1.36213 79.2819 1.36213 74.3799C1.36213 69.4778 3.76575 64.6268 8.48181 59.8695C13.1997 55.1103 20.19 50.4898 29.2472 46.0695C47.3591 37.2303 73.6073 29.253 106.092 22.5473C171.053 9.13811 260.823 0.839664 359.999 0.839664C459.176 0.839664 548.946 9.13811 613.906 22.5473C646.391 29.253 672.639 37.2303 690.751 46.0695C699.809 50.4898 706.799 55.1103 711.517 59.8695C716.233 64.6268 718.636 69.4778 718.636 74.3799Z");
            }
        }

        .css-1yee2u4 {
            position: absolute;
            offset-rotate: 0deg;
            -webkit-animation: outerMove 20s linear infinite;
            animation: outerMove 20s linear infinite;
            offset-path: path("M1206.35 125.037C1206.35 133.271 1202.32 141.418 1194.4 149.409C1186.47 157.402 1174.73 165.162 1159.52 172.586C1129.1 187.433 1085.01 200.831 1030.45 212.094C921.348 234.615 770.574 248.553 604 248.553C437.426 248.553 286.652 234.615 177.547 212.094C122.986 200.831 78.9001 187.433 48.48 172.586C33.2678 165.162 21.5271 157.402 13.6031 149.409C5.68216 141.418 1.64512 133.271 1.64512 125.037C1.64512 116.804 5.68216 108.657 13.6031 100.666C21.5271 92.6729 33.2678 84.9125 48.48 77.4884C78.9001 62.6422 122.986 49.2439 177.547 37.9813C286.652 15.4596 437.426 1.52183 604 1.52183C770.574 1.52183 921.348 15.4596 1030.45 37.9813C1085.01 49.2439 1129.1 62.6422 1159.52 77.4884C1174.73 84.9125 1186.47 92.6729 1194.4 100.666C1202.32 108.657 1206.35 116.804 1206.35 125.037Z");
            -webkit-animation-delay: -20000ms !important;
            animation-delay: -20000ms !important;
        }

        @media (max-width:599.95px) {
            .css-1yee2u4 {
                -webkit-animation: outerMove 10s linear infinite;
                animation: outerMove 10s linear infinite;
                offset-path: path("M718.636 74.3799C718.636 79.2819 716.233 84.1329 711.517 88.8903C706.799 93.6495 699.809 98.2699 690.751 102.69C672.639 111.529 646.391 119.507 613.906 126.212C548.946 139.622 459.176 147.92 359.999 147.92C260.823 147.92 171.053 139.622 106.092 126.212C73.6073 119.507 47.3591 111.529 29.2472 102.69C20.19 98.2699 13.1997 93.6495 8.48181 88.8903C3.76575 84.1329 1.36213 79.2819 1.36213 74.3799C1.36213 69.4778 3.76575 64.6268 8.48181 59.8695C13.1997 55.1103 20.19 50.4898 29.2472 46.0695C47.3591 37.2303 73.6073 29.253 106.092 22.5473C171.053 9.13811 260.823 0.839664 359.999 0.839664C459.176 0.839664 548.946 9.13811 613.906 22.5473C646.391 29.253 672.639 37.2303 690.751 46.0695C699.809 50.4898 706.799 55.1103 711.517 59.8695C716.233 64.6268 718.636 69.4778 718.636 74.3799Z");
            }
        }

        .css-aod2g5 {
            position: absolute;
            left: 50%;
            z-index: 11;
            -webkit-animation: centerFloat 3s ease-in-out infinite;
            animation: centerFloat 3s ease-in-out infinite;
            -webkit-transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            transform: translateX(-50%);
        }

        @media (min-width:0px) {
            .css-aod2g5 {
                margin-top: -7rem;
                width: 12rem;
            }
        }

        @media (min-width:900px) {
            .css-aod2g5 {
                margin-top: -13rem;
                width: 20rem;
            }
        }

        .css-ss18fm {
            color: black;
            position: relative;
            width: 100%;
            margin-left: auto;
            box-sizing: border-box;
            margin-right: auto;
            display: block;
            padding-left: 16px;
            padding-right: 16px;
        }

        @media (min-width:600px) {
            .css-ss18fm {
                padding-left: 24px;
                padding-right: 24px;
            }
        }

        @media (min-width:1200px) {
            .css-ss18fm {
                max-width: 1200px;
            }
        }

        .css-3u8pn1 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            gap: 3rem;
        }

        @media (min-width:0px) {
            .css-3u8pn1 {
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
                padding-top: 2rem;
            }
        }

        @media (min-width:900px) {
            .css-3u8pn1 {
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
                padding-top: 5rem;
            }
        }

        .css-5va6o1 {
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            margin-top: 3rem;
            object-fit: contain;
        }

        @media (min-width:0px) {
            .css-5va6o1 {
                max-width: 100%;
                margin-left: 0;
            }
        }

        @media (min-width:900px) {
            .css-5va6o1 {
                max-width: 50%;
                margin-left: -3rem;
                opacity: 0;
            }
        }

        .css-1ckjfdm {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            gap: 1.5rem;
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
        }

        .css-1ozdpsf {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            font-weight: 700;
            line-height: 1;
        }

        @media (min-width:900px) {
            .css-1ozdpsf {
                opacity: 0;
            }
        }

        @media (min-width:0px) {
            .css-1ozdpsf {
                font-size: 2rem;
            }
        }

        @media (min-width:900px) {
            .css-1ozdpsf {
                font-size: 3.75rem;
            }
        }

        .css-ck2x66 {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            font-weight: 400;
            line-height: 1.4;
        }

        @media (min-width:900px) {
            .css-ck2x66 {
                opacity: 0;
            }
        }

        @media (min-width:0px) {
            .css-ck2x66 {
                font-size: 0.875rem;
            }
        }

        @media (min-width:900px) {
            .css-ck2x66 {
                font-size: 1.25rem;
            }
        }

        .css-1z0sa0g {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            position: relative;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
            background-color: transparent;
            outline: 0;
            border: 0;
            margin: 0;
            border-radius: 0;
            padding: 0;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            vertical-align: middle;
            -moz-appearance: none;
            -webkit-appearance: none;
            -webkit-text-decoration: none;
            text-decoration: none;
            color: inherit;
            font-weight: 700;
            line-height: 1.7142857142857142;
            font-size: 0.875rem;
            text-transform: capitalize;
            font-family: Space Grotesk, sans-serif;
            min-width: 64px;
            padding: 6px 16px;
            border-radius: 8px;
            -webkit-transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            color: #fff;
            background-color: #F328A5;
            box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
            box-shadow: 0 8px 16px 0 rgba(243, 40, 165, 0.24);
            width: -webkit-fit-content;
            width: -moz-fit-content;
            width: fit-content;
            font-size: 1rem;
            margin-bottom: 1rem;
        }

        .css-1z0sa0g::-moz-focus-inner {
            border-style: none;
        }

        .css-1z0sa0g.Mui-disabled {
            pointer-events: none;
            cursor: default;
        }

        @media print {
            .css-1z0sa0g {
                -webkit-print-color-adjust: exact;
                color-adjust: exact;
            }
        }

        .css-1z0sa0g:hover {
            -webkit-text-decoration: none;
            text-decoration: none;
            background-color: #9322D0;
            box-shadow: 0px 2px 4px -1px rgba(0, 0, 0, 0.2), 0px 4px 5px 0px rgba(0, 0, 0, 0.14), 0px 1px 10px 0px rgba(0, 0, 0, 0.12);
        }

        @media (hover: none) {
            .css-1z0sa0g:hover {
                background-color: #F328A5;
            }
        }

        .css-1z0sa0g:active {
            box-shadow: 0px 5px 5px -3px rgba(0, 0, 0, 0.2), 0px 8px 10px 1px rgba(0, 0, 0, 0.14), 0px 3px 14px 2px rgba(0, 0, 0, 0.12);
        }

        .css-1z0sa0g.Mui-focusVisible {
            box-shadow: 0px 3px 5px -1px rgba(0, 0, 0, 0.2), 0px 6px 10px 0px rgba(0, 0, 0, 0.14), 0px 1px 18px 0px rgba(0, 0, 0, 0.12);
        }

        .css-1z0sa0g.Mui-disabled {
            color: rgba(145, 158, 171, 0.8);
            box-shadow: none;
            background-color: rgba(145, 158, 171, 0.24);
        }

        .css-1z0sa0g:hover {
            box-shadow: none;
        }

        .css-pt151d {
            display: inherit;
            margin-right: -4px;
            margin-left: 8px;
        }

        .css-pt151d>*:nth-of-type(1) {
            font-size: 20px;
        }

        .css-920k2u {
            box-sizing: border-box;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex-wrap: wrap;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            width: 100%;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            margin-top: -1rem;
            width: calc(100% + 1rem);
            margin-left: -1rem;
        }

        .css-920k2u>.MuiGrid-item {
            padding-top: 1rem;
        }

        .css-920k2u>.MuiGrid-item {
            padding-left: 1rem;
        }

        .css-1iwbhwe {
            box-sizing: border-box;
            margin: 0;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-flex-basis: 50%;
            -ms-flex-preferred-size: 50%;
            flex-basis: 50%;
            -webkit-box-flex: 0;
            -webkit-flex-grow: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            max-width: 50%;
        }

        @media (min-width:600px) {
            .css-1iwbhwe {
                -webkit-flex-basis: 50%;
                -ms-flex-preferred-size: 50%;
                flex-basis: 50%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 50%;
            }
        }

        @media (min-width:900px) {
            .css-1iwbhwe {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        @media (min-width:1200px) {
            .css-1iwbhwe {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        @media (min-width:1500px) {
            .css-1iwbhwe {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        @media (min-width:2000px) {
            .css-1iwbhwe {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        .css-17sfuwu {
            box-shadow: 0px 8px 24px 0px rgba(11, 11, 11, 0.05);
            background-color: white;
            gap: 0.5rem;
            border-radius: 1rem;
        }

        @media (min-width:0px) {
            .css-17sfuwu {
                padding: 1rem;
                height: 11rem;
            }
        }

        @media (min-width:900px) {
            .css-17sfuwu {
                padding: 1.5rem;
                opacity: 0;
            }
        }

        .css-1ton084 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            gap: 0.5rem;
        }

        @media (min-width:0px) {
            .css-1ton084 {
                -webkit-flex-direction: column-reverse;
                -ms-flex-direction: column-reverse;
                flex-direction: column-reverse;
            }
        }

        .css-1hwoua8 {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            line-height: 1.2;
            font-weight: 500;
        }

        @media (min-width:0px) {
            .css-1hwoua8 {
                font-size: 1rem;
            }
        }

        @media (min-width:900px) {
            .css-1hwoua8 {
                font-size: 1.25rem;
            }
        }

        @media (min-width:0px) {
            .css-nsejin {
                max-width: 1.2rem;
            }
        }

        @media (min-width:900px) {
            .css-nsejin {
                max-width: 1.5rem;
            }
        }

        .css-1ex0eha {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            margin-top: 0.5rem;
            line-height: 1.4;
        }

        @media (min-width:0px) {
            .css-1ex0eha {
                font-size: 0.8rem;
            }
        }

        @media (min-width:900px) {
            .css-1ex0eha {
                font-size: 0.875rem;
            }
        }

        .css-b817iv {
            width: 100%;
            margin-left: auto;
            box-sizing: border-box;
            margin-right: auto;
            display: block;
            padding-left: 16px;
            padding-right: 16px;
        }

        @media (min-width:600px) {
            .css-b817iv {
                padding-left: 24px;
                padding-right: 24px;
            }
        }

        @media (min-width:1200px) {
            .css-b817iv {
                max-width: 1200px;
            }
        }

        @media (min-width:600px) {
            .css-b817iv {
                padding-top: 4rem;
            }
        }

        @media (min-width:2000px) {
            .css-b817iv {
                padding-top: 16rem;
            }
        }

        .css-79elbk {
            position: relative;
        }

        .css-tv7ddg {
            height: -webkit-fit-content;
            height: -moz-fit-content;
            height: fit-content;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            max-width: 80rem;
            color: black;
        }

        @media (min-width:0px) {
            .css-tv7ddg {
                gap: 1rem;
                margin: 0 auto;
            }
        }

        @media (min-width:900px) {
            .css-tv7ddg {
                gap: 5rem;
            }
        }

        @media (min-width:2000px) {
            .css-tv7ddg {
                margin: -30vh auto;
            }
        }

        .css-16wg1yk {
            position: -webkit-sticky;
            position: sticky;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        @media (min-width:0px) {
            .css-16wg1yk {
                top: calc(50vh - 20rem);
                height: 40rem;
            }
        }

        @media (min-width:900px) {
            .css-16wg1yk {
                top: 0;
                height: 100vh;
            }
        }

        .css-jwsme6 {
            width: 0.375rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            background-color: #F7F7F7;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            position: relative;
        }

        @media (min-width:0px) {
            .css-jwsme6 {
                height: 20rem;
                margin-right: 5rem;
            }
        }

        @media (min-width:600px) {
            .css-jwsme6 {
                margin-right: 6rem;
            }
        }

        @media (min-width:900px) {
            .css-jwsme6 {
                height: 24rem;
                margin-right: 8rem;
            }
        }

        .css-gdfrs0 {
            position: relative;
            margin-top: -0.4rem;
        }

        .css-rz6rsj {
            cursor: pointer;
            width: 0.8rem;
            height: 0.8em;
            background-color: #F328A5;
            border-radius: 100%;
            z-index: 1;
            border: 0.125rem solid white;
            cursor: pointer;
        }

        .css-80o7he {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            position: absolute;
            color: #F328A5;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-user-select: none;
        }

        @media (min-width:0px) {
            .css-80o7he {
                left: 1rem;
                font-size: 0.8rem;
                margin-top: -1.5rem;
                width: 4rem;
            }
        }

        @media (min-width:600px) {
            .css-80o7he {
                font-size: 0.8rem;
                width: 6rem;
            }
        }

        @media (min-width:900px) {
            .css-80o7he {
                left: 2rem;
                font-size: 1rem;
                margin-top: -2rem;
                width: 8rem;
            }
        }

        .css-1kyb0ls {
            cursor: pointer;
            width: 0.8rem;
            height: 0.8em;
            background-color: #D0D5DD;
            border-radius: 100%;
            z-index: 1;
            border: 0.125rem solid white;
            cursor: pointer;
        }

        .css-jacoez {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            position: absolute;
            color: black;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-user-select: none;
        }

        @media (min-width:0px) {
            .css-jacoez {
                left: 1rem;
                font-size: 0.8rem;
                margin-top: -1.5rem;
                width: 4rem;
            }
        }

        @media (min-width:600px) {
            .css-jacoez {
                font-size: 0.8rem;
                width: 6rem;
            }
        }

        @media (min-width:900px) {
            .css-jacoez {
                left: 2rem;
                font-size: 1rem;
                margin-top: -2rem;
                width: 8rem;
            }
        }

        .css-12gojhg {
            position: relative;
            margin-bottom: -0.4rem;
        }

        .css-1x2m2td {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            width: calc(100% - 100px);
        }

        @media (min-width:0px) {
            .css-1x2m2td {
                gap: 0;
            }
        }

        @media (min-width:600px) {
            .css-1x2m2td {
                gap: 5rem;
            }
        }

        .css-lp00tf {
            margin-top: 2rem;
            width: 100%;
        }

        .css-cji8j0 {
            height: 100vh;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            gap: 4rem;
        }

        @media (max-width:899.95px) {
            .css-cji8j0 {
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
                gap: 1rem;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-justify-content: center;
                justify-content: center;
            }
        }

        @media (max-width:599.95px) {
            .css-cji8j0 {
                height: 40rem;
            }
        }

        .css-az22mu {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            max-width: 30rem;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
        }

        @media (min-width:900px) {
            .css-az22mu {
                opacity: 0;
            }
        }

        .css-rydq41 {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            font-weight: 700;
            line-height: 1;
        }

        @media (min-width:0px) {
            .css-rydq41 {
                font-size: 1.5rem;
                margin-bottom: 0.8rem;
            }
        }

        @media (min-width:600px) {
            .css-rydq41 {
                font-size: 3.25rem;
                margin-bottom: 2rem;
            }
        }

        .css-ojzf1b {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            line-height: 1.6;
        }

        @media (min-width:0px) {
            .css-ojzf1b {
                font-size: 0.8rem;
            }
        }

        @media (min-width:600px) {
            .css-ojzf1b {
                font-size: 1.25rem;
            }
        }

        .css-1n8o67v {
            width: 100%;
            max-width: 30rem;
        }

        @media (min-width:0px) {
            .css-1n8o67v {
                padding: 0;
            }
        }

        @media (min-width:900px) {
            .css-1n8o67v {
                padding: 0 2rem;
                opacity: 0;
            }
        }

        .css-lvyk9z {
            background-image: url('img/kpay/apply-card-bg.png');
            -webkit-background-size: cover;
            background-size: cover;
            background-repeat: no-repeat;
            width: 20rem;
            height: 30rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 2rem 2rem;
            color: white;
            gap: 1.25rem;
            border-radius: 1rem;
            position: relative;
            margin-right: 1rem;
            margin-top: 2rem;
        }

        @media (max-width:1249.95px) {
            .css-lvyk9z {
                margin-right: 3rem;
            }
        }

        @media (max-width:899.95px) {
            .css-lvyk9z {
                width: 100%;
                margin: 0;
                height: 15rem;
                max-width: 100%;
                gap: 0.5rem;
            }
        }

        .css-40ou10 {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            cursor: pointer;
            font-weight: 700;
            line-height: 1;
            text-align: center;
        }

        @media (min-width:0px) {
            .css-40ou10 {
                font-size: 2rem;
            }
        }

        @media (min-width:900px) {
            .css-40ou10 {
                font-size: 2.75rem;
            }
        }

        .css-1uqf6b7 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            padding: 0.2rem 0.5rem;
            gap: 0.25rem;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            border-radius: 1rem;
            background: rgba(255, 255, 255, 0.20);
            -webkit-backdrop-filter: blur(5px);
            backdrop-filter: blur(5px);
        }

        .css-16fty60 {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            font-size: 0.875rem;
            font-weight: 700;
        }

        .css-1uprze6 {
            height: 0.875rem;
            width: 2.5rem;
            border-radius: 3rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            font-weight: 700;
            font-size: 0.625rem;
            gap: 0.12rem;
            background: linear-gradient(151deg, #FFB25B -8.84%, #FF6D33 131.45%);
        }

        .css-1e6zq3e {
            height: 0.5rem;
            width: 0.5rem;
            border-radius: 100%;
            background-color: white;
        }

        .css-1x2vd8o {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            font-size: 0.875rem;
            font-weight: 500;
            line-height: 1;
            text-align: center;
        }

        .css-883to6 {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            position: relative;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
            background-color: transparent;
            outline: 0;
            border: 0;
            margin: 0;
            border-radius: 0;
            padding: 0;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            vertical-align: middle;
            -moz-appearance: none;
            -webkit-appearance: none;
            -webkit-text-decoration: none;
            text-decoration: none;
            color: inherit;
            font-weight: 700;
            line-height: 1.7142857142857142;
            font-size: 0.875rem;
            text-transform: capitalize;
            font-family: Space Grotesk, sans-serif;
            min-width: 64px;
            padding: 5px 15px;
            border-radius: 8px;
            -webkit-transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            border: 1px solid rgba(255, 255, 255, 0.23);
            color: inherit;
            border-color: currentColor;
            border: 1px solid rgba(145, 158, 171, 0.32);
            cursor: pointer;
            border-color: white;
            z-index: 1;
        }

        .css-883to6::-moz-focus-inner {
            border-style: none;
        }

        .css-883to6.Mui-disabled {
            pointer-events: none;
            cursor: default;
        }

        @media print {
            .css-883to6 {
                -webkit-print-color-adjust: exact;
                color-adjust: exact;
            }
        }

        .css-883to6:hover {
            -webkit-text-decoration: none;
            text-decoration: none;
            background-color: rgba(255, 255, 255, 0.08);
        }

        @media (hover: none) {
            .css-883to6:hover {
                background-color: transparent;
            }
        }

        .css-883to6.Mui-disabled {
            color: rgba(145, 158, 171, 0.8);
            border: 1px solid rgba(145, 158, 171, 0.24);
        }

        .css-883to6:hover {
            box-shadow: none;
        }

        .css-883to6:hover {
            background-color: rgba(145, 158, 171, 0.08);
        }

        .css-qiuk6x {
            position: absolute;
            bottom: 0%;
            left: 38%;
            width: 145%;
            max-width: 200%;
            -webkit-transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            transform: translateX(-50%);
        }

        @media (min-width:0px) {
            .css-qiuk6x {
                display: none;
            }
        }

        @media (min-width:900px) {
            .css-qiuk6x {
                display: block;
            }
        }

        .css-dv46pi {
            background-image: url('img/kpay/seamless-bg.jpg');
            -webkit-background-size: cover;
            background-size: cover;
            background-repeat: no-repeat;
            -webkit-background-position: top;
            background-position: top;
            width: 20rem;
            height: 30rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 2rem 2rem;
            color: white;
            gap: 1.25rem;
            border-radius: 1rem;
            position: relative;
            margin-right: 1rem;
            margin-top: 2rem;
        }

        @media (max-width:899.95px) {
            .css-dv46pi {
                margin: 0 auto;
            }
        }

        @media (max-width:599.95px) {
            .css-dv46pi {
                width: 95%;
                margin: 0;
                height: 15rem;
                max-width: 100%;
                gap: 0.5rem;
            }
        }

        .css-13atvhh {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            cursor: pointer;
            font-weight: 700;
            line-height: 1;
            text-align: center;
        }

        @media (min-width:0px) {
            .css-13atvhh {
                font-size: 1.5rem;
            }
        }

        @media (min-width:900px) {
            .css-13atvhh {
                font-size: 2.75rem;
            }
        }

        .css-h353i7 {
            background-image: url('img/kpay/purchase-bg.jpg');
            -webkit-background-size: cover;
            background-size: cover;
            background-repeat: no-repeat;
            width: 20rem;
            height: 30rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 2rem 2rem;
            color: white;
            gap: 1.25rem;
            border-radius: 1rem;
            position: relative;
            margin-right: 1rem;
            margin-top: 2rem;
        }

        @media (max-width:899.95px) {
            .css-h353i7 {
                width: 95%;
                height: 15rem;
                max-width: 100%;
                gap: 0.5rem;
                margin: 0;
            }
        }

        .css-1eijo0r {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            cursor: pointer;
            font-weight: 700;
            line-height: 1;
        }

        @media (min-width:0px) {
            .css-1eijo0r {
                font-size: 2rem;
            }
        }

        @media (min-width:900px) {
            .css-1eijo0r {
                font-size: 2.75rem;
            }
        }

        .css-1mf4aeg {
            background-image: url('img/kpay/manage-bg.jpg');
            -webkit-background-size: cover;
            background-size: cover;
            background-repeat: no-repeat;
            width: 20rem;
            height: 30rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 2rem 2rem;
            color: white;
            gap: 1.25rem;
            border-radius: 1rem;
            position: relative;
            margin-right: 1rem;
            margin-top: 2rem;
        }

        @media (max-width:1249.95px) {
            .css-1mf4aeg {
                margin-right: 3rem;
            }
        }

        @media (max-width:899.95px) {
            .css-1mf4aeg {
                width: 95%;
                height: 15rem;
                max-width: 100%;
                gap: 0.5rem;
                margin: 0;
            }
        }

        .css-mw3ilg {
            background-image: url('img/kpay/secure-bg.jpg');
            -webkit-background-size: cover;
            background-size: cover;
            background-repeat: no-repeat;
            width: 20rem;
            height: 30rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 2rem 2rem;
            color: white;
            gap: 1.25rem;
            border-radius: 1rem;
            position: relative;
            margin-right: 1rem;
            margin-top: 2rem;
        }

        @media (max-width:899.95px) {
            .css-mw3ilg {
                width: 95%;
                height: 15rem;
                max-width: 100%;
                gap: 0.5rem;
                margin: 0;
            }
        }

        .css-fhlf6n {
            width: 3rem;
            height: 4rem;
            position: absolute;
            right: 3rem;
            top: 15rem;
        }

        .css-13z5pxf {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            gap: 3rem;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        @media (min-width:0px) {
            .css-13z5pxf {
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
                padding-top: 8rem;
            }
        }

        @media (min-width:900px) {
            .css-13z5pxf {
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
                padding-top: 8rem;
            }
        }

        @media (min-width:2000px) {
            .css-13z5pxf {
                padding-top: 18rem;
            }
        }

        .css-1pwdjni {
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            object-fit: contain;
        }

        @media (min-width:0px) {
            .css-1pwdjni {
                max-width: 100%;
            }
        }

        @media (min-width:900px) {
            .css-1pwdjni {
                max-width: 40%;
                opacity: 0;
            }
        }

        .css-agx226 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 2.5rem;
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
        }

        .css-1tt1tl8 {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            sx: 0.875rem;
            font-weight: 400;
            line-height: 1.4;
        }

        @media (min-width:900px) {
            .css-1tt1tl8 {
                opacity: 0;
            }
        }

        @media (min-width:900px) {
            .css-1tt1tl8 {
                font-size: 1.25rem;
            }
        }

        .css-vzd2er {
            box-sizing: border-box;
            margin: 0;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-flex-basis: 50%;
            -ms-flex-preferred-size: 50%;
            flex-basis: 50%;
            -webkit-box-flex: 0;
            -webkit-flex-grow: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            max-width: 50%;
            color: #6B22A2;
        }

        @media (min-width:900px) {
            .css-vzd2er {
                opacity: 0;
            }
        }

        @media (min-width:600px) {
            .css-vzd2er {
                -webkit-flex-basis: 50%;
                -ms-flex-preferred-size: 50%;
                flex-basis: 50%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 50%;
            }
        }

        @media (min-width:900px) {
            .css-vzd2er {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        @media (min-width:1200px) {
            .css-vzd2er {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        @media (min-width:1500px) {
            .css-vzd2er {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        @media (min-width:2000px) {
            .css-vzd2er {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        .css-12mn81y {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            gap: 0.3rem;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .css-11xaa63 {
            border-radius: 100%;
            height: 1rem;
            width: 1rem;
            border: 1px solid #6B22A2;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .css-1bxzykf {
            border-radius: 100%;
            background-color: #6B22A2;
            height: 0.5rem;
            width: 0.5rem;
        }

        .css-eer42b {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            font-weight: 700;
            margin-left: 1.3rem;
        }

        .css-dzzs3k {
            box-sizing: border-box;
            margin: 0;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-flex-basis: 50%;
            -ms-flex-preferred-size: 50%;
            flex-basis: 50%;
            -webkit-box-flex: 0;
            -webkit-flex-grow: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            max-width: 50%;
            color: #3D1464;
        }

        @media (min-width:900px) {
            .css-dzzs3k {
                opacity: 0;
            }
        }

        @media (min-width:600px) {
            .css-dzzs3k {
                -webkit-flex-basis: 50%;
                -ms-flex-preferred-size: 50%;
                flex-basis: 50%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 50%;
            }
        }

        @media (min-width:900px) {
            .css-dzzs3k {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        @media (min-width:1200px) {
            .css-dzzs3k {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        @media (min-width:1500px) {
            .css-dzzs3k {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        @media (min-width:2000px) {
            .css-dzzs3k {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        .css-rekocn {
            border-radius: 100%;
            height: 1rem;
            width: 1rem;
            border: 1px solid #3D1464;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .css-1ewx4e2 {
            border-radius: 100%;
            background-color: #3D1464;
            height: 0.5rem;
            width: 0.5rem;
        }

        .css-1e0f7lv {
            box-sizing: border-box;
            margin: 0;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-flex-basis: 50%;
            -ms-flex-preferred-size: 50%;
            flex-basis: 50%;
            -webkit-box-flex: 0;
            -webkit-flex-grow: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            max-width: 50%;
            color: #E050A7;
        }

        @media (min-width:900px) {
            .css-1e0f7lv {
                opacity: 0;
            }
        }

        @media (min-width:600px) {
            .css-1e0f7lv {
                -webkit-flex-basis: 50%;
                -ms-flex-preferred-size: 50%;
                flex-basis: 50%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 50%;
            }
        }

        @media (min-width:900px) {
            .css-1e0f7lv {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        @media (min-width:1200px) {
            .css-1e0f7lv {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        @media (min-width:1500px) {
            .css-1e0f7lv {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        @media (min-width:2000px) {
            .css-1e0f7lv {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        .css-134jb2s {
            border-radius: 100%;
            height: 1rem;
            width: 1rem;
            border: 1px solid #E050A7;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .css-iqsrj2 {
            border-radius: 100%;
            background-color: #E050A7;
            height: 0.5rem;
            width: 0.5rem;
        }

        .css-1n88y7j {
            box-sizing: border-box;
            margin: 0;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-flex-basis: 50%;
            -ms-flex-preferred-size: 50%;
            flex-basis: 50%;
            -webkit-box-flex: 0;
            -webkit-flex-grow: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            max-width: 50%;
            color: #F19D5B;
        }

        @media (min-width:900px) {
            .css-1n88y7j {
                opacity: 0;
            }
        }

        @media (min-width:600px) {
            .css-1n88y7j {
                -webkit-flex-basis: 50%;
                -ms-flex-preferred-size: 50%;
                flex-basis: 50%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 50%;
            }
        }

        @media (min-width:900px) {
            .css-1n88y7j {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        @media (min-width:1200px) {
            .css-1n88y7j {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        @media (min-width:1500px) {
            .css-1n88y7j {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        @media (min-width:2000px) {
            .css-1n88y7j {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        .css-1ih4dy {
            border-radius: 100%;
            height: 1rem;
            width: 1rem;
            border: 1px solid #F19D5B;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .css-504fyg {
            border-radius: 100%;
            background-color: #F19D5B;
            height: 0.5rem;
            width: 0.5rem;
        }

        .css-1l7ickv {
            box-sizing: border-box;
            margin: 0;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-flex-basis: 50%;
            -ms-flex-preferred-size: 50%;
            flex-basis: 50%;
            -webkit-box-flex: 0;
            -webkit-flex-grow: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            max-width: 50%;
            color: #31E4E7;
        }

        @media (min-width:900px) {
            .css-1l7ickv {
                opacity: 0;
            }
        }

        @media (min-width:600px) {
            .css-1l7ickv {
                -webkit-flex-basis: 50%;
                -ms-flex-preferred-size: 50%;
                flex-basis: 50%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 50%;
            }
        }

        @media (min-width:900px) {
            .css-1l7ickv {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        @media (min-width:1200px) {
            .css-1l7ickv {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        @media (min-width:1500px) {
            .css-1l7ickv {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        @media (min-width:2000px) {
            .css-1l7ickv {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        .css-10xvqi1 {
            border-radius: 100%;
            height: 1rem;
            width: 1rem;
            border: 1px solid #31E4E7;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .css-1k9zjpz {
            border-radius: 100%;
            background-color: #31E4E7;
            height: 0.5rem;
            width: 0.5rem;
        }

        .css-1w7x0ur {
            box-sizing: border-box;
            margin: 0;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-flex-basis: 50%;
            -ms-flex-preferred-size: 50%;
            flex-basis: 50%;
            -webkit-box-flex: 0;
            -webkit-flex-grow: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            max-width: 50%;
            color: #85A9F1;
        }

        @media (min-width:900px) {
            .css-1w7x0ur {
                opacity: 0;
            }
        }

        @media (min-width:600px) {
            .css-1w7x0ur {
                -webkit-flex-basis: 50%;
                -ms-flex-preferred-size: 50%;
                flex-basis: 50%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 50%;
            }
        }

        @media (min-width:900px) {
            .css-1w7x0ur {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        @media (min-width:1200px) {
            .css-1w7x0ur {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        @media (min-width:1500px) {
            .css-1w7x0ur {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        @media (min-width:2000px) {
            .css-1w7x0ur {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        .css-1kz41lt {
            border-radius: 100%;
            height: 1rem;
            width: 1rem;
            border: 1px solid #85A9F1;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .css-tc2uw2 {
            border-radius: 100%;
            background-color: #85A9F1;
            height: 0.5rem;
            width: 0.5rem;
        }

        .css-1sr47hl {
            box-sizing: border-box;
            margin: 0;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-flex-basis: 50%;
            -ms-flex-preferred-size: 50%;
            flex-basis: 50%;
            -webkit-box-flex: 0;
            -webkit-flex-grow: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            max-width: 50%;
            color: #5383EC;
        }

        @media (min-width:900px) {
            .css-1sr47hl {
                opacity: 0;
            }
        }

        @media (min-width:600px) {
            .css-1sr47hl {
                -webkit-flex-basis: 50%;
                -ms-flex-preferred-size: 50%;
                flex-basis: 50%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 50%;
            }
        }

        @media (min-width:900px) {
            .css-1sr47hl {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        @media (min-width:1200px) {
            .css-1sr47hl {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        @media (min-width:1500px) {
            .css-1sr47hl {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        @media (min-width:2000px) {
            .css-1sr47hl {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        .css-75yem8 {
            border-radius: 100%;
            height: 1rem;
            width: 1rem;
            border: 1px solid #5383EC;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .css-n0q0km {
            border-radius: 100%;
            background-color: #5383EC;
            height: 0.5rem;
            width: 0.5rem;
        }

        .css-og8hp1 {
            color: black;
            overflow: hidden;
            width: 100%;
            margin-left: auto;
            box-sizing: border-box;
            margin-right: auto;
            display: block;
            padding-left: 16px;
            padding-right: 16px;
        }

        @media (min-width:600px) {
            .css-og8hp1 {
                padding-left: 24px;
                padding-right: 24px;
            }
        }

        @media (min-width:1200px) {
            .css-og8hp1 {
                max-width: 1200px;
            }
        }

        @media (min-width:0px) {
            .css-og8hp1 {
                padding: 6rem 1rem;
            }
        }

        @media (min-width:900px) {
            .css-og8hp1 {
                padding: 12rem 0;
            }
        }

        @media (min-width:2000px) {
            .css-og8hp1 {
                padding: 22rem 0 16rem 0;
            }
        }

        .css-y5jild {
            border-radius: 1.25rem;
        }

        .css-3q1abv {
            border-radius: 1.25rem 1.25rem 0 0;
            text-align: center;
            color: white;
            padding: 0.75rem 1.5rem;
            font-weight: 700;
            font-size: 1.25rem;
            text-transform: uppercase;
            background: linear-gradient(99deg, #F328A5 -11.67%, #9322D0 120.63%);
        }

        @media (min-width:900px) {
            .css-3q1abv {
                margin-right: 0.5rem;
                opacity: 0;
            }
        }

        .css-sfya7u {
            width: 100%;
            overflow-x: auto;
        }

        @media (min-width:900px) {
            .css-sfya7u {
                padding-right: 0.5rem;
                overflow: hidden;
            }
        }

        .css-oitifm {
            display: table;
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
        }

        .css-oitifm caption {
            line-height: 1.5714285714285714;
            font-size: 0.875rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            padding: 16px;
            color: rgba(255, 255, 255, 0.5);
            text-align: left;
            caption-side: bottom;
        }

        .css-oitifm .MuiTableCell-root {
            border: 1px solid #F7F7F7;
            background-color: white;
            font-weight: 500;
        }

        @media (min-width:900px) {
            .css-oitifm .MuiTableRow-root {
                opacity: 0;
            }
        }

        .css-1vx9537 {
            color: inherit;
            display: table-row;
            vertical-align: middle;
            outline: 0;
            background: rgba(144, 33, 204, 0.1);
        }

        .css-1vx9537.MuiTableRow-hover:hover {
            background-color: rgba(145, 158, 171, 0.08);
        }

        .css-1vx9537.Mui-selected {
            background-color: rgba(243, 40, 165, 0.16);
        }

        .css-1vx9537.Mui-selected:hover {
            background-color: rgba(243, 40, 165, 0.24);
        }

        .css-1vx9537 .MuiTableCell-root {
            background-color: transparent;
        }

        .css-o1awyq {
            line-height: 1.5714285714285714;
            font-size: 0.875rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            display: table-cell;
            vertical-align: inherit;
            border-bottom: 1px solid rgba(46, 50, 54, 1);
            text-align: left;
            padding: 16px;
            min-width: 10rem;
        }

        .css-m446mp {
            line-height: 1.5714285714285714;
            font-size: 0.875rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            display: table-cell;
            vertical-align: inherit;
            border-bottom: 1px solid rgba(46, 50, 54, 1);
            text-align: left;
            padding: 16px;
        }

        .css-27oabl {
            color: inherit;
            display: table-row;
            vertical-align: middle;
            outline: 0;
        }

        .css-27oabl.MuiTableRow-hover:hover {
            background-color: rgba(145, 158, 171, 0.08);
        }

        .css-27oabl.Mui-selected {
            background-color: rgba(243, 40, 165, 0.16);
        }

        .css-27oabl.Mui-selected:hover {
            background-color: rgba(243, 40, 165, 0.24);
        }

        .css-j4il3z {
            line-height: 1.5714285714285714;
            font-size: 0.875rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            display: table-cell;
            vertical-align: inherit;
            border-bottom: 1px solid rgba(46, 50, 54, 1);
            text-align: left;
            padding: 16px;
            border-radius: 0 0 1.25rem 0;
        }

        .css-g5acnm {
            color: inherit;
            display: table-row;
            vertical-align: middle;
            outline: 0;
            box-shadow: 0px 8px 24px 0px rgba(11, 11, 11, 0.05);
            border-radius: 0 0 1.25rem 0;
        }

        .css-g5acnm.MuiTableRow-hover:hover {
            background-color: rgba(145, 158, 171, 0.08);
        }

        .css-g5acnm.Mui-selected {
            background-color: rgba(243, 40, 165, 0.16);
        }

        .css-g5acnm.Mui-selected:hover {
            background-color: rgba(243, 40, 165, 0.24);
        }

        .css-12iyu6 {
            color: inherit;
            display: table-row;
            vertical-align: middle;
            outline: 0;
        }

        .css-12iyu6.MuiTableRow-hover:hover {
            background-color: rgba(145, 158, 171, 0.08);
        }

        .css-12iyu6.Mui-selected {
            background-color: rgba(243, 40, 165, 0.16);
        }

        .css-12iyu6.Mui-selected:hover {
            background-color: rgba(243, 40, 165, 0.24);
        }

        .css-12iyu6 .MuiTableCell-root {
            should-forward-prop: (prop)=>prop !=='rowColor';
            background: rgba(255, 155, 78, 0.10);
            font-weight: 700;
        }

        .css-r2l8x4 {
            color: inherit;
            display: table-row;
            vertical-align: middle;
            outline: 0;
        }

        .css-r2l8x4.MuiTableRow-hover:hover {
            background-color: rgba(145, 158, 171, 0.08);
        }

        .css-r2l8x4.Mui-selected {
            background-color: rgba(243, 40, 165, 0.16);
        }

        .css-r2l8x4.Mui-selected:hover {
            background-color: rgba(243, 40, 165, 0.24);
        }

        .css-r2l8x4 .MuiTableCell-root {
            background: rgba(243, 40, 165, 0.10);
            color: #F328A5;
            font-weight: 700;
        }

        .css-4xqn0p {
            line-height: 1.5714285714285714;
            font-size: 0.875rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            display: table-cell;
            vertical-align: inherit;
            border-bottom: 1px solid rgba(46, 50, 54, 1);
            text-align: left;
            padding: 16px;
            border-radius: 0 0 0 1.25rem;
        }

        .css-qfi9jk {
            line-height: 1.5714285714285714;
            font-size: 0.875rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            display: table-cell;
            vertical-align: inherit;
            border-bottom: 1px solid rgba(46, 50, 54, 1);
            text-align: left;
            padding: 16px;
            border-radius: 0 0 1.25rem 0;
        }

        .css-dgk44y {
            position: relative;
            width: 100%;
            margin-left: auto;
            box-sizing: border-box;
            margin-right: auto;
            display: block;
            padding-left: 16px;
            padding-right: 16px;
        }

        @media (min-width:600px) {
            .css-dgk44y {
                padding-left: 24px;
                padding-right: 24px;
            }
        }

        @media (min-width:1200px) {
            .css-dgk44y {
                max-width: 1200px;
            }
        }

        @media (min-width:0px) {
            .css-dgk44y {
                padding: 0;
            }
        }

        .css-1xp5gtn {
            box-sizing: border-box;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex-wrap: wrap;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            width: 100%;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            margin-top: 2rem;
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            color: black;
            overflow: hidden;
        }

        @media (min-width:900px) {
            .css-1xp5gtn {
                margin-top: -16px;
            }

            .css-1xp5gtn>.MuiGrid-item {
                padding-top: 16px;
            }
        }

        @media (min-width:900px) {
            .css-1xp5gtn {
                width: calc(100% + 16px);
                margin-left: -16px;
            }

            .css-1xp5gtn>.MuiGrid-item {
                padding-left: 16px;
            }
        }

        .css-1xp5gtn .leftWrapper {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .css-1xp5gtn .rightWrapper {
            padding-top: 40px;
        }

        .css-1xp5gtn .rightWrapper .description {
            font-weight: 400;
        }

        @media (max-width:899.95px) {
            .css-1xp5gtn .rightWrapper {
                padding-top: 16px;
            }
        }

        .css-givhcp {
            position: absolute;
            top: 4rem;
            left: 32%;
            width: 2rem;
            height: 2rem;
        }

        @media (min-width:900px) {
            .css-givhcp {
                opacity: 0;
            }
        }

        @media (max-width:599.95px) {
            .css-givhcp {
                width: 1rem;
                height: 1rem;
                top: 2rem;
                left: 20%;
            }
        }

        .css-17w2iuo {
            position: absolute;
            width: 3rem;
            object-fit: contain;
            top: 0rem;
            left: 65%;
        }

        @media (min-width:900px) {
            .css-17w2iuo {
                opacity: 0;
            }
        }

        @media (max-width:599.95px) {
            .css-17w2iuo {
                width: 10%;
                height: 10%;
                top: -1rem;
                left: 78%;
            }
        }

        .css-1xjzoa1 {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            font-weight: 700;
            color: black;
            text-align: center;
        }

        @media (min-width:900px) {
            .css-1xjzoa1 {
                opacity: 0;
            }
        }

        @media (min-width:0px) {
            .css-1xjzoa1 {
                font-size: 2rem;
                margin-bottom: 2rem;
            }
        }

        @media (min-width:900px) {
            .css-1xjzoa1 {
                font-size: 3.75rem;
                margin-bottom: 3.75rem;
            }
        }

        .css-mopclk {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            padding-top: 2rem;
            width: 100%;
            gap: 1rem;
            max-height: 40rem;
        }

        @media (min-width:0px) {
            .css-mopclk {
                padding: 0px;
            }
        }

        @media (min-width:900px) {
            .css-mopclk {
                padding: 1rem 0 1rem 1rem;
            }
        }

        .css-1mski5t {
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            box-shadow: 4px 4px 50px 0px rgba(0, 0, 0, 0.10);
            color: black;
            border-radius: 1.25rem;
            height: -webkit-fit-content;
            height: -moz-fit-content;
            height: fit-content;
            background: linear-gradient(180deg, #B77A54 -11.05%, rgba(233, 210, 188, 0.82) 21.48%, rgba(255, 174, 94, 0.00) 100%);
        }

        @media (min-width:0px) {
            .css-1mski5t {
                min-width: 240px;
                max-width: 240px;
                margin: 0 0.5rem;
            }
        }

        @media (min-width:600px) {
            .css-1mski5t {
                min-width: 200px;
                margin: 0 auto;
            }
        }

        @media (min-width:900px) {
            .css-1mski5t {
                max-width: 240px;
                margin: 0 1rem 0 0;
                opacity: 0;
            }
        }

        @media (min-width:1200px) {
            .css-1mski5t {
                margin: 0px;
            }
        }

        .css-y4oa43 {
            width: 100%;
            height: 10rem;
            position: relative;
            border-radius: 1rem 1rem 0 0;
            overflow: hidden;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
        }

        .css-yc6rxs {
            height: 100px;
            width: 100px;
        }

        .css-wl6wwm {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            color: black;
            padding: 1.5rem;
            border-radius: 1.25rem;
            margin-top: -1rem;
            position: relative;
            z-index: 2;
            background: white;
        }

        .css-1ixmrho {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            color: black;
            font-size: 1.5rem;
            text-transform: uppercase;
            font-weight: 700;
            line-height: 1;
        }

        .css-1qcswho {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            color: #F328A5;
            font-size: 1.25rem;
            font-weight: 700;
        }

        .css-1k7fnjh {
            margin: 0;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            border-width: 0;
            border-style: solid;
            border-color: rgba(145, 158, 171, 0.24);
            border-bottom-width: thin;
            margin-top: 1rem;
            margin-bottom: 1rem;
            opacity: 0.5;
            background-color: #F7F7F7;
        }

        .css-u5e0n4 {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            display: inline;
            font-size: 0.8rem;
            font-weight: 300;
        }

        .css-1w548o0 {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            display: inline;
            font-size: 0.8rem;
            font-weight: 700;
        }

        .css-19yxh80 {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            font-size: 0.6rem;
            font-weight: 300;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            gap: 0.3rem;
        }

        .css-7m3mwn {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            display: inline;
            font-size: 0.8rem;
            font-weight: 700;
            color: transparent;
            background: black;
            -webkit-background-clip: text;
        }

        .css-awg5oa {
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            box-shadow: 4px 4px 50px 0px rgba(0, 0, 0, 0.10);
            color: black;
            border-radius: 1.25rem;
            height: -webkit-fit-content;
            height: -moz-fit-content;
            height: fit-content;
            background: linear-gradient(180deg, #9B9B9B -17.57%, rgba(212, 212, 212, 0.82) 16.87%, rgba(255, 255, 255, 0.00) 100%);
        }

        @media (min-width:0px) {
            .css-awg5oa {
                min-width: 240px;
                max-width: 240px;
                margin: 0 0.5rem;
            }
        }

        @media (min-width:600px) {
            .css-awg5oa {
                min-width: 200px;
                margin: 0 auto;
            }
        }

        @media (min-width:900px) {
            .css-awg5oa {
                max-width: 240px;
                margin: 0 1rem 0 0;
                opacity: 0;
            }
        }

        @media (min-width:1200px) {
            .css-awg5oa {
                margin: 0px;
            }
        }

        .css-1lyol7h {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            display: inline;
            font-size: 0.8rem;
            font-weight: 700;
            color: transparent;
            background: #19C785;
            -webkit-background-clip: text;
        }

        .css-1q7hod6 {
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            box-shadow: 4px 4px 50px 0px rgba(0, 0, 0, 0.10);
            color: black;
            border-radius: 1.25rem;
            height: -webkit-fit-content;
            height: -moz-fit-content;
            height: fit-content;
            background: linear-gradient(180deg, #FF7C3E -17.57%, #FFDBCA 16.87%, rgba(255, 255, 255, 0.00) 100%);
        }

        @media (min-width:0px) {
            .css-1q7hod6 {
                min-width: 240px;
                max-width: 240px;
                margin: 0 0.5rem;
            }
        }

        @media (min-width:600px) {
            .css-1q7hod6 {
                min-width: 200px;
                margin: 0 auto;
            }
        }

        @media (min-width:900px) {
            .css-1q7hod6 {
                max-width: 240px;
                margin: 0 1rem 0 0;
                opacity: 0;
            }
        }

        @media (min-width:1200px) {
            .css-1q7hod6 {
                margin: 0px;
            }
        }

        .css-18mn3gn {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            display: inline;
            font-size: 0.8rem;
            font-weight: 700;
            color: transparent;
            background: linear-gradient(34deg, #35B2D9 0%, #1E80DB 100%);
            -webkit-background-clip: text;
        }

        .css-1bzium8 {
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            box-shadow: 4px 4px 50px 0px rgba(0, 0, 0, 0.10);
            color: black;
            border-radius: 1.25rem;
            height: -webkit-fit-content;
            height: -moz-fit-content;
            height: fit-content;
            background: linear-gradient(180deg, #C08F2B -17.57%, #FFF3DC 16.87%, rgba(255, 255, 255, 0.00) 100%);
        }

        @media (min-width:0px) {
            .css-1bzium8 {
                min-width: 240px;
                max-width: 240px;
                margin: 0 0.5rem;
            }
        }

        @media (min-width:600px) {
            .css-1bzium8 {
                min-width: 200px;
                margin: 0 auto;
            }
        }

        @media (min-width:900px) {
            .css-1bzium8 {
                max-width: 240px;
                margin: 0 1rem 0 0;
                opacity: 0;
            }
        }

        @media (min-width:1200px) {
            .css-1bzium8 {
                margin: 0px;
            }
        }

        .css-po40pw {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            display: inline;
            font-size: 0.8rem;
            font-weight: 700;
            color: transparent;
            background: linear-gradient(27deg, #E742F5 0%, #AE0689 100%);
            -webkit-background-clip: text;
        }

        .css-liuz95 {
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            box-shadow: 4px 4px 50px 0px rgba(0, 0, 0, 0.10);
            color: black;
            border-radius: 1.25rem;
            height: -webkit-fit-content;
            height: -moz-fit-content;
            height: fit-content;
            background: linear-gradient(180deg, #F24DF2 -17.57%, #4A2644 48.56%);
        }

        @media (min-width:0px) {
            .css-liuz95 {
                min-width: 240px;
                max-width: 240px;
                margin: 0 0.5rem;
            }
        }

        @media (min-width:600px) {
            .css-liuz95 {
                min-width: 200px;
                margin: 0 auto;
            }
        }

        @media (min-width:900px) {
            .css-liuz95 {
                max-width: 240px;
                margin: 0 1rem 0 0;
                opacity: 0;
            }
        }

        @media (min-width:1200px) {
            .css-liuz95 {
                margin: 0px;
            }
        }

        .css-q9avxn {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            color: white;
            padding: 1.5rem;
            border-radius: 1.25rem;
            margin-top: -1rem;
            position: relative;
            z-index: 2;
            background: #212123;
        }

        .css-zjt97b {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            color: white;
            font-size: 1.5rem;
            text-transform: uppercase;
            font-weight: 700;
            line-height: 1;
        }

        .css-1becghl {
            margin: 0;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            border-width: 0;
            border-style: solid;
            border-color: rgba(145, 158, 171, 0.24);
            border-bottom-width: thin;
            margin-top: 1rem;
            margin-bottom: 1rem;
            opacity: 0.5;
            background-color: #344054;
        }

        .css-c3h1ly {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            display: inline;
            font-size: 0.8rem;
            font-weight: 700;
            color: transparent;
            background: white;
            -webkit-background-clip: text;
        }

        .css-1kib8ld {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            display: inline;
            font-size: 0.8rem;
            font-weight: 700;
            color: transparent;
            background: linear-gradient(270deg, #FF6D33 0%, #FFB25B 100%);
            -webkit-background-clip: text;
        }

        .css-1xa1zif {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            gap: 1rem;
            margin-top: 4rem;
        }

        @media (min-width:0px) {
            .css-1xa1zif {
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
            }
        }

        @media (min-width:900px) {
            .css-1xa1zif {
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
                opacity: 0;
            }
        }

        .css-3f9u40 {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            font-weight: 400;
            padding-left: 1rem;
            padding-right: 1rem;
            line-height: 1.2;
        }

        @media (min-width:0px) {
            .css-3f9u40 {
                font-size: 0.875rem;
                max-width: calc(100% - 2rem);
                text-align: center;
            }
        }

        @media (min-width:900px) {
            .css-3f9u40 {
                font-size: 1.25rem;
                max-width: 30rem;
                text-align: left;
            }
        }

        .css-sgahln {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            position: relative;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
            background-color: transparent;
            outline: 0;
            border: 0;
            margin: 0;
            border-radius: 0;
            padding: 0;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            vertical-align: middle;
            -moz-appearance: none;
            -webkit-appearance: none;
            -webkit-text-decoration: none;
            text-decoration: none;
            color: inherit;
            font-weight: 700;
            line-height: 1.7142857142857142;
            font-size: 0.875rem;
            text-transform: capitalize;
            font-family: Space Grotesk, sans-serif;
            min-width: 64px;
            padding: 6px 16px;
            border-radius: 8px;
            -webkit-transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            -webkit-text-decoration: none;
            text-decoration: none;
            padding: 8px 40px;
            border-radius: 30px;
            color: #fff;
            background: linear-gradient(97.99deg, #F328A5 0%, #9322D0);
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
            font-size: 1rem;
        }

        .css-sgahln::-moz-focus-inner {
            border-style: none;
        }

        .css-sgahln.Mui-disabled {
            pointer-events: none;
            cursor: default;
        }

        @media print {
            .css-sgahln {
                -webkit-print-color-adjust: exact;
                color-adjust: exact;
            }
        }

        .css-sgahln:hover {
            -webkit-text-decoration: none;
            text-decoration: none;
            background-color: rgba(255, 255, 255, 0.08);
        }

        @media (hover: none) {
            .css-sgahln:hover {
                background-color: transparent;
            }
        }

        .css-sgahln.Mui-disabled {
            color: rgba(145, 158, 171, 0.8);
        }

        .css-sgahln:hover {
            box-shadow: none;
        }

        .css-sgahln:hover {
            background: linear-gradient(07.99deg, #F328A5 0%, #9322D0);
        }

        @media (min-width:900px) and (max-width:1199.95px) {
            .css-sgahln {
                padding: 8px 16px;
            }
        }

        .css-arr5kk {
            position: relative;
            width: 100%;
            margin-left: auto;
            box-sizing: border-box;
            margin-right: auto;
            display: block;
            padding-left: 16px;
            padding-right: 16px;
        }

        @media (min-width:0px) {
            .css-arr5kk {
                padding: 6rem 0;
            }
        }

        @media (min-width:900px) {
            .css-arr5kk {
                padding: 6rem 0;
            }
        }

        @media (min-width:600px) {
            .css-arr5kk {
                padding-left: 24px;
                padding-right: 24px;
            }
        }

        @media (min-width:1200px) {
            .css-arr5kk {
                max-width: 1200px;
            }
        }

        .css-1tya36t {
            box-sizing: border-box;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex-wrap: wrap;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            width: 100%;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            margin-top: -16px;
            width: calc(100% + 16px);
            margin-left: -16px;
            margin-top: 96px;
            position: relative;
        }

        .css-1tya36t>.MuiGrid-item {
            padding-top: 16px;
        }

        .css-1tya36t>.MuiGrid-item {
            padding-left: 16px;
        }

        .css-1tya36t .leftWrapper {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .css-1tya36t .rightWrapper {
            padding-top: 40px;
        }

        .css-1tya36t .rightWrapper .description {
            font-weight: 400;
        }

        @media (max-width:899.95px) {
            .css-1tya36t .rightWrapper {
                padding-top: 16px;
            }
        }

        .css-1pk2qjv {
            text-align: center;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            width: 100%;
        }

        .css-1xzmnk8 {
            margin: 0;
            font-weight: 700;
            line-height: 1.3333333333333333;
            font-size: 2rem;
            font-family: Space Grotesk, sans-serif;
            position: relative;
        }

        @media (min-width:600px) {
            .css-1xzmnk8 {
                font-size: 2.5rem;
            }
        }

        @media (min-width:900px) {
            .css-1xzmnk8 {
                font-size: 2.75rem;
            }
        }

        @media (min-width:1200px) {
            .css-1xzmnk8 {
                font-size: 3rem;
            }
        }

        @media (min-width:0px) {
            .css-1xzmnk8 {
                font-size: 2rem;
            }
        }

        @media (min-width:900px) {
            .css-1xzmnk8 {
                font-size: 3.75rem;
            }
        }

        .css-15s1yg {
            position: absolute;
            width: 3rem;
            height: 5rem;
            left: -3rem;
            top: -2rem;
        }

        .css-1x9krrq {
            padding-top: 2.5rem;
        }

        @media (min-width:0px) {
            .css-1x9krrq {
                margin-top: 8px;
            }
        }

        @media (min-width:900px) {
            .css-1x9krrq {
                margin-top: 24px;
            }
        }

        .css-v2c2jy {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            position: relative;
        }

        .css-1wvw4ea {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            ld: 5rem;
            height: 16rem;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            margin-top: -0.25rem;
        }

        @media (min-width:600px) {
            .css-1wvw4ea {
                gap: 3rem;
            }
        }

        @media (min-width:900px) {
            .css-1wvw4ea {
                gap: 3.5rem;
            }
        }

        .css-10xoff6 {
            padding: 0.3rem;
            width: 100%;
            box-shadow: 0px 8px 24px 0px rgba(11, 11, 11, 0.05);
            border-radius: 1.25rem;
            background-image: linear-gradient(to left bottom, rgba(243, 40, 165, 0.45)0%, white 50%);
        }

        @media (min-width:0px) {
            .css-10xoff6 {
                height: 18rem;
                max-height: 18rem;
                min-height: 18rem;
                max-width: 25rem;
            }
        }

        @media (min-width:900px) {
            .css-10xoff6 {
                height: 20rem;
                max-height: 20rem;
                min-height: 20rem;
                max-width: 20rem;
            }
        }

        .css-1www8z {
            background-color: white;
            border-radius: 1rem;
            height: 100%;
            gap: 1rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        @media (min-width:0px) {
            .css-1www8z {
                padding: 1.1rem;
            }
        }

        @media (min-width:900px) {
            .css-1www8z {
                padding: 1.7rem;
                -webkit-align-items: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }
        }

        .css-1vu2drr {
            width: 4rem;
            padding: 0.3rem;
            border-radius: 100%;
            background-image: linear-gradient(97.99deg, #F328A5 0%, #9322D0 101.11%);
        }

        .css-aspsdy {
            background-color: white;
            border-radius: 100%;
            padding: 0.6rem;
        }

        .css-uwwqev {
            width: 100%;
            height: 100%;
        }

        .css-1fxj0ld {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1;
        }

        @media (min-width:900px) {
            .css-1fxj0ld {
                text-align: center;
            }
        }

        .css-9u7l1b {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            color: black;
        }

        @media (min-width:900px) {
            .css-9u7l1b {
                text-align: center;
            }
        }

        .css-zshu8i {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            position: relative;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
            background-color: transparent;
            outline: 0;
            border: 0;
            margin: 0;
            border-radius: 0;
            padding: 0;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            vertical-align: middle;
            -moz-appearance: none;
            -webkit-appearance: none;
            -webkit-text-decoration: none;
            text-decoration: none;
            color: inherit;
            font-weight: 700;
            line-height: 1.7142857142857142;
            font-size: 0.875rem;
            text-transform: capitalize;
            font-family: Space Grotesk, sans-serif;
            min-width: 64px;
            padding: 6px 8px;
            border-radius: 8px;
            -webkit-transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            color: #F328A5;
            width: -webkit-fit-content;
            width: -moz-fit-content;
            width: fit-content;
            padding: 0px;
            line-height: 1.4;
            font-weight: 700;
            font-size: 1rem;
        }

        .css-zshu8i::-moz-focus-inner {
            border-style: none;
        }

        .css-zshu8i.Mui-disabled {
            pointer-events: none;
            cursor: default;
        }

        @media print {
            .css-zshu8i {
                -webkit-print-color-adjust: exact;
                color-adjust: exact;
            }
        }

        .css-zshu8i:hover {
            -webkit-text-decoration: none;
            text-decoration: none;
            background-color: rgba(243, 40, 165, 0.08);
        }

        @media (hover: none) {
            .css-zshu8i:hover {
                background-color: transparent;
            }
        }

        .css-zshu8i.Mui-disabled {
            color: rgba(145, 158, 171, 0.8);
        }

        .css-zshu8i:hover {
            box-shadow: none;
        }

        .css-134cgfj {
            border-radius: 100% 0 0 100%;
            height: 16rem;
            width: 16rem;
            padding: 0.25rem 0rem 0.25rem 0.25rem;
            position: relative;
            background: linear-gradient(to right, #F328A5 0%, transparent 95%);
        }

        @media (max-width:1119.95px) {
            .css-134cgfj {
                background: linear-gradient(to right, #F328A5 0%, transparent 70%);
            }
        }

        @media (max-width:1069.95px) {
            .css-134cgfj {
                background: linear-gradient(to right, #F328A5 0%, transparent 50%);
            }
        }

        .css-1hinhva {
            border-radius: 100% 0 0 100%;
            height: 100%;
            width: 100%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            z-index: 2;
            position: relative;
            background: white;
        }

        .css-14zdu0y {
            border-radius: 100%;
            margin-left: -1rem;
            margin-right: 0;
            height: 2rem;
            width: 2rem;
            min-width: 2rem;
            border: 3px solid #F328A5;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            background-color: white;
        }

        .css-wnseow {
            border-radius: 100%;
            background-color: #F328A5;
            height: 0.9rem;
            width: 0.9rem;
        }

        .css-b95ya {
            background-color: #F328A5;
            padding: 0.6rem 1rem;
            border-radius: 2rem;
            font-weight: 500;
            width: -webkit-fit-content;
            width: -moz-fit-content;
            width: fit-content;
            font-size: 1.2rem;
            margin-left: 1rem;
            margin-right: 1rem;
            line-height: 1.4;
        }

        .css-124wjlw {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            ld: 5rem;
            height: 16rem;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-flex-direction: row-reverse;
            -ms-flex-direction: row-reverse;
            flex-direction: row-reverse;
            margin-top: -0.25rem;
        }

        @media (min-width:600px) {
            .css-124wjlw {
                gap: 3rem;
            }
        }

        @media (min-width:900px) {
            .css-124wjlw {
                gap: 3.5rem;
            }
        }

        .css-d5eemb {
            padding: 0.3rem;
            width: 100%;
            box-shadow: 0px 8px 24px 0px rgba(11, 11, 11, 0.05);
            border-radius: 1.25rem;
            background-image: linear-gradient(to right bottom, rgba(243, 40, 165, 0.45)0%, white 50%);
        }

        @media (min-width:0px) {
            .css-d5eemb {
                height: 18rem;
                max-height: 18rem;
                min-height: 18rem;
                max-width: 25rem;
            }
        }

        @media (min-width:900px) {
            .css-d5eemb {
                height: 20rem;
                max-height: 20rem;
                min-height: 20rem;
                max-width: 20rem;
            }
        }

        .css-1aqwz3l {
            border-radius: 0 100% 100% 0;
            height: 16rem;
            width: 16rem;
            padding: 0.25rem 0.25rem 0.25rem 0rem;
            position: relative;
            background: linear-gradient(to left, #F328A5 0%, transparent 95%);
        }

        @media (max-width:1119.95px) {
            .css-1aqwz3l {
                background: linear-gradient(to left, #F328A5 0%, transparent 70%);
            }
        }

        @media (max-width:1069.95px) {
            .css-1aqwz3l {
                background: linear-gradient(to left, #F328A5 0%, transparent 50%);
            }
        }

        .css-143g9om {
            border-radius: 0 100% 100%0;
            height: 100%;
            width: 100%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-flex-direction: row-reverse;
            -ms-flex-direction: row-reverse;
            flex-direction: row-reverse;
            z-index: 2;
            position: relative;
            background: white;
        }

        .css-4rrmk5 {
            border-radius: 100%;
            margin-left: 0;
            margin-right: -1rem;
            height: 2rem;
            width: 2rem;
            min-width: 2rem;
            border: 3px solid #F328A5;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            background-color: white;
        }

        .css-k9b0vi {
            height: 50%;
            width: 100%;
            position: absolute;
            overflow: hidden;
            left: 0;
            bottom: 0;
            z-index: 1;
            -webkit-transform: rotateX(-180deg);
            -moz-transform: rotateX(-180deg);
            -ms-transform: rotateX(-180deg);
            transform: rotateX(-180deg);
        }

        .css-11a7ezw {
            height: 16rem;
            width: 16rem;
            border-radius: 100% 0 0 100%;
            background: linear-gradient(to right, #D0D5DD 0%, #D0D5DD 50%, transparent 100%);
        }

        @media (max-width:1119.95px) {
            .css-11a7ezw {
                background: linear-gradient(to right, #D0D5DD 0%, #eaedf4 65%, transparent 70%);
            }
        }

        @media (max-width:1069.95px) {
            .css-11a7ezw {
                background: linear-gradient(to right, #D0D5DD 0%, #eaedf4 45%, transparent 50%);
            }
        }

        .css-iyjm1n {
            border-radius: 0 100% 100% 0;
            height: 16rem;
            width: 16rem;
            padding: 0.25rem 0.25rem 0.25rem 0rem;
            position: relative;
            background: linear-gradient(to left, #D0D5DD 0%, transparent 95%);
        }

        @media (max-width:1119.95px) {
            .css-iyjm1n {
                background: linear-gradient(to left, #D0D5DD 0%, transparent 70%);
            }
        }

        @media (max-width:1069.95px) {
            .css-iyjm1n {
                background: linear-gradient(to left, #D0D5DD 0%, transparent 50%);
            }
        }

        .css-r2694s {
            border-radius: 100%;
            margin-left: 0;
            margin-right: -1rem;
            height: 2rem;
            width: 2rem;
            min-width: 2rem;
            border: 3px solid #D0D5DD;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            background-color: white;
        }

        .css-v35u83 {
            border-radius: 100%;
            background-color: #D0D5DD;
            height: 0.9rem;
            width: 0.9rem;
        }

        .css-1oco7li {
            background-color: #D0D5DD;
            padding: 0.6rem 1rem;
            border-radius: 2rem;
            font-weight: 500;
            width: -webkit-fit-content;
            width: -moz-fit-content;
            width: fit-content;
            font-size: 1.2rem;
            margin-left: 1rem;
            margin-right: 1rem;
            line-height: 1.4;
        }

        .css-1vq7ir4 {
            position: relative;
            width: 100%;
            margin-left: auto;
            box-sizing: border-box;
            margin-right: auto;
            display: block;
            padding-left: 16px;
            padding-right: 16px;
        }

        @media (min-width:600px) {
            .css-1vq7ir4 {
                padding-left: 24px;
                padding-right: 24px;
            }
        }

        @media (min-width:1200px) {
            .css-1vq7ir4 {
                max-width: 1200px;
            }
        }

        .css-1i421fg {
            box-sizing: border-box;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex-wrap: wrap;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            width: 100%;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            margin-top: -16px;
            width: calc(100% + 16px);
            margin-left: -16px;
            margin-top: 128px;
            margin-bottom: 128px;
            position: relative;
            overflow: hidden;
            padding-top: 1rem;
        }

        .css-1i421fg>.MuiGrid-item {
            padding-top: 16px;
        }

        .css-1i421fg>.MuiGrid-item {
            padding-left: 16px;
        }

        @media (max-width:599.95px) {
            .css-1i421fg {
                margin-top: 48px;
                margin-bottom: 48px;
            }
        }

        .css-1m3o5th {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            width: 100%;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 4rem;
        }

        @media (min-width:0px) {
            .css-1m3o5th {
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
            }
        }

        @media (min-width:900px) {
            .css-1m3o5th {
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
            }
        }

        .css-1uxl9yx {
            position: absolute;
            width: 3rem;
            height: 5rem;
            left: 8rem;
            object-fit: contain;
        }

        @media (min-width:900px) {
            .css-1uxl9yx {
                opacity: 0;
            }
        }

        @media (max-width:599.95px) {
            .css-1uxl9yx {
                left: 65%;
                top: -0.8rem;
            }
        }

        .css-1ynuzr3 {
            margin: 0;
            font-weight: 700;
            line-height: 1.3333333333333333;
            font-size: 2rem;
            font-family: Space Grotesk, sans-serif;
        }

        @media (min-width:600px) {
            .css-1ynuzr3 {
                font-size: 2.5rem;
            }
        }

        @media (min-width:900px) {
            .css-1ynuzr3 {
                font-size: 2.75rem;
            }
        }

        @media (min-width:1200px) {
            .css-1ynuzr3 {
                font-size: 3rem;
            }
        }

        .css-181au20 {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            color: #444444;
            margin-left: auto;
        }

        @media (min-width:0px) {
            .css-181au20 {
                font-size: 0.875rem;
                text-align: center;
            }
        }

        @media (min-width:900px) {
            .css-181au20 {
                font-size: 1.25rem;
                text-align: left;
            }
        }

        .css-5ob8ms {
            box-sizing: border-box;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex-wrap: wrap;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            width: 100%;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            margin-top: -1.8rem;
            width: calc(100% + 1.8rem);
            margin-left: -1.8rem;
        }

        .css-5ob8ms>.MuiGrid-item {
            padding-top: 1.8rem;
        }

        .css-5ob8ms>.MuiGrid-item {
            padding-left: 1.8rem;
        }

        @media (min-width:0px) {
            .css-5ob8ms {
                padding-left: 1rem;
            }
        }

        @media (min-width:900px) {
            .css-5ob8ms {
                padding-left: 0;
            }
        }

        .css-ocxkhk {
            box-sizing: border-box;
            margin: 0;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-flex-basis: 100%;
            -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
            -webkit-box-flex: 0;
            -webkit-flex-grow: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            max-width: 100%;
            color: black;
        }

        @media (min-width:900px) {
            .css-ocxkhk {
                opacity: 0;
            }
        }

        @media (min-width:600px) {
            .css-ocxkhk {
                -webkit-flex-basis: 50%;
                -ms-flex-preferred-size: 50%;
                flex-basis: 50%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 50%;
            }
        }

        @media (min-width:900px) {
            .css-ocxkhk {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        @media (min-width:1200px) {
            .css-ocxkhk {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        @media (min-width:1500px) {
            .css-ocxkhk {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        @media (min-width:2000px) {
            .css-ocxkhk {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        .css-1odq9g0 {
            background-color: #EFEFEF;
            padding: 2rem 1.5rem;
            height: 24rem;
            position: relative;
            border-radius: 1.25rem;
            overflow: hidden;
        }

        .css-tx2awk {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            font-size: 1.875rem;
            font-weight: 700;
            line-height: 1;
        }

        .css-1takryw {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            font-size: 1.25rem;
            font-weight: 700;
            color: #F328A5;
            line-height: 1;
            margin-top: 0.6rem;
        }

        .css-11pzi0o {
            width: 80%;
            position: absolute;
            left: 0;
            bottom: 0;
            object-fit: contain;
        }

        .css-1dtae1r {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 0.5rem;
            -webkit-align-items: flex-end;
            -webkit-box-align: flex-end;
            -ms-flex-align: flex-end;
            align-items: flex-end;
            height: 16.5rem;
            position: absolute;
            right: 1rem;
            top: 6rem;
        }

        .css-1h1tpa5 {
            height: 2.5rem;
            width: 2.5rem;
            background-color: #0B0B0B;
            border-radius: 100%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            color: white;
            font-size: 1.4rem;
        }

        .css-1rr4qq7 {
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
        }

        .css-1d8losz {
            position: relative;
            overflow: hidden;
            padding: 4rem 0 2rem;
            height: 28rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            color: black;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
        }

        @media (max-width:899.95px) {
            .css-1d8losz {
                height: -webkit-fit-content;
                height: -moz-fit-content;
                height: fit-content;
            }
        }

        .css-ickvhw {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            gap: 2rem;
        }

        @media (min-width:0px) {
            .css-ickvhw {
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
            }
        }

        @media (min-width:900px) {
            .css-ickvhw {
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
            }
        }

        .css-1qz9l9x {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 1rem;
        }

        @media (min-width:0px) {
            .css-1qz9l9x {
                max-width: 100%;
            }
        }

        @media (min-width:900px) {
            .css-1qz9l9x {
                max-width: 24%;
            }
        }

        .css-1jz040 {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            font-weight: 400;
        }

        .css-mclfx3 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }

        @media (min-width:0px) {
            .css-mclfx3 {
                gap: 20%;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                -webkit-justify-content: flex-start;
                justify-content: flex-start;
                width: 100%;
            }
        }

        @media (min-width:600px) {
            .css-mclfx3 {
                -webkit-box-pack: space-evenly;
                -ms-flex-pack: space-evenly;
                -webkit-justify-content: space-evenly;
                justify-content: space-evenly;
            }
        }

        @media (min-width:900px) {
            .css-mclfx3 {
                gap: 5rem;
                width: -webkit-fit-content;
                width: -moz-fit-content;
                width: fit-content;
            }
        }

        .css-5aoioh {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 1.25rem;
        }

        .css-3ipggq {
            background-image: linear-gradient(97.99deg, #F328A5 0%, #9322D0 101.11%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 700;
        }

        .css-1m5aou2 {
            margin: 0;
            color: #F328A5;
            -webkit-text-decoration: none;
            text-decoration: none;
            font-size: 1rem;
            line-height: 1.4;
            cursor: pointer;
            font-weight: 500;
            color: #0B0B0B;
            -webkit-transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }

        .css-1m5aou2:hover {
            -webkit-text-decoration: underline;
            text-decoration: underline;
        }

        .css-1m5aou2[disabled] {
            opacity: 0.5;
            cursor: default;
            pointer-events: none;
        }

        .css-1m5aou2:hover {
            opacity: 0.48;
            -webkit-text-decoration: none;
            text-decoration: none;
        }

        .css-14zsc3r {
            border-radius: 1rem;
            padding: 1.6rem;
            color: white;
            -webkit-background-size: cover;
            background-size: cover;
            background-image: url("img/join-now-bg.png");
            cursor: pointer;
        }

        @media (min-width:0px) {
            .css-14zsc3r {
                width: 100%;
            }
        }

        @media (min-width:600px) {
            .css-14zsc3r {
                height: 12rem;
                -webkit-background-position: top left;
                background-position: top left;
            }
        }

        @media (min-width:900px) {
            .css-14zsc3r {
                width: 40%;
                height: 16rem;
                opacity: 0;
                -webkit-background-position: top right;
                background-position: top right;
            }
        }

        .css-1qdyvok {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            -webkit-align-items: flex-start;
            -webkit-box-align: flex-start;
            -ms-flex-align: flex-start;
            align-items: flex-start;
        }

        .css-120dout {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            font-weight: 700;
            font-size: 1.5rem;
            line-height: 1.4;
            position: relative;
            width: -webkit-fit-content;
            width: -moz-fit-content;
            width: fit-content;
        }

        .css-1y7h07z {
            position: absolute;
            right: -1.5rem;
            top: -0.5em;
            width: 1.6rem;
            height: 1.6rem;
        }

        .css-xwpd2b {
            padding: 0.2rem 0.5rem;
            gap: 0.25rem;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: -webkit-fit-content;
            width: -moz-fit-content;
            width: fit-content;
            border-radius: 1rem;
            background: rgba(255, 255, 255, 0.20);
            -webkit-backdrop-filter: blur(5px);
            backdrop-filter: blur(5px);
        }

        @media (min-width:0px) {
            .css-xwpd2b {
                display: none;
            }
        }

        @media (min-width:600px) {
            .css-xwpd2b {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
            }
        }

        .css-19knho2 {
            height: 0.875rem;
            width: 2.5rem;
            border-radius: 3rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            font-weight: 700;
            font-size: 0.625rem;
            background: linear-gradient(151deg, #FFB25B -8.84%, #FF6D33 131.45%);
        }

        .css-1busfs0 {
            margin: 0;
            line-height: 1.6;
            font-size: 1rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            font-weight: 400;
            font-size: 0.875rem;
            line-height: 1.4;
            max-width: 10rem;
            margin-top: 0.5rem;
        }

        .css-1xa36h5 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        @media (min-width:900px) {
            .css-1xa36h5 {
                opacity: 0;
            }
        }

        @media (max-width:899.95px) {
            .css-1xa36h5 {
                font-size: 0.875rem;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
                margin-top: 16px;
                margin-bottom: 16px;
            }
        }

        .css-amzkqc {
            margin: 0;
            line-height: 1.5714285714285714;
            font-size: 0.875rem;
            font-family: Space Grotesk, sans-serif;
            font-weight: 400;
            color: #616161;
        }

        .css-1x76mex {
            margin: 0;
            color: #F328A5;
            -webkit-text-decoration: none;
            text-decoration: none;
            margin-left: 16px;
        }

        .css-1x76mex:hover {
            -webkit-text-decoration: underline;
            text-decoration: underline;
        }





        @media only screen and (min-width: 380px) and (max-width: 767px) {

            .css-aod2g5 {
                margin-top: -11rem !important;
                width: 9rem !important;
            }

            .css-19w8rfp {
                min-width: 379px !important;
                top: -68px !important;
            }

            .css-92r017 {
                top: -2.5rem !important;
                width: 8rem !important;
            }

            .css-1fjvxyd {
                top: -2.5rem !important;
                min-width: 292px !important;
            }

        }

    </style>

    <style>
        .clock {
            width: 100%;
            /* position: relative; */
            color: #fff;
            padding: 10px 0px;

        }
        .min-clock {
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .flex-basis p {
            font-size: 40px;
            margin-bottom: 14px;
            padding: 5px;
            text-align: center;
        }





    </style>
@endsection
@section('content')

{{-- <section class="crypten-features-area">
    <div class="container-fluid">
        <div class="row">
            <div class="MuiBox-root css-ob0qoi">
                <div class="MuiBox-root css-1qae61w">
                    <div class="MuiBox-root MuiBox-root css-187rau0" sx="[object Object]">
                        <p class="MuiTypography-root MuiTypography-body1 css-1vbb00j">
                            <span style="opacity: 1; transform: none;">
                                <span class="css-1nkm53p">Automatically Trade<br> More than 200+ Assets</span>
                            </span>
                            <img src="/img/stars.png" class="css-1dnn977" style="opacity: 1; transform: none;">
                        </p>
                            <p class="MuiTypography-root MuiTypography-body1 css-1v3haxt">
                                <span style="opacity: 1; transform: none;">Select the assets you want to accumulate and grow your portfolio regardless of the market conditions 24hrs a day.</span>
                            </p>
                        </div>
                        <div class="MuiBox-root css-1bhf6ae">
                            <img class="MuiBox-root css-115vcbu" src="/img/kpay/external-path.svg">
                            <img class="MuiBox-root css-1fjvxyd" src="/img/kpay/inner-path.svg">
                            <img class="MuiBox-root css-19w8rfp" src="/img/kpay/outer-path.svg">
                            <img class="MuiBox-root css-92r017" src="/img/kpay/card-shadow.png">
                            <div class="MuiBox-root css-e9ah65">
                                <div class="MuiBox-root css-72m8qr">
                                    <div class="MuiBox-root css-vni5v1">
                                        <div class="MuiBox-root css-1jojg8y">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="MuiBox-root css-y2t66j iconify iconify--logos" sx="[object Object]" width="0.62em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 417"><path fill="#343434" d="m127.961 0l-2.795 9.5v275.668l2.795 2.79l127.962-75.638z"></path><path fill="#8C8C8C" d="M127.962 0L0 212.32l127.962 75.639V154.158z"></path><path fill="#3C3C3B" d="m127.961 312.187l-1.575 1.92v98.199l1.575 4.601l128.038-180.32z"></path><path fill="#8C8C8C" d="M127.962 416.905v-104.72L0 236.585z"></path><path fill="#141414" d="m127.961 287.958l127.96-75.637l-127.96-58.162z"></path><path fill="#393939" d="m.001 212.321l127.96 75.637V154.159z"></path></svg>
                                        </div>
                                        <div class="MuiBox-root css-5b1el9"></div>
                                            <div class="MuiBox-root css-1pd8wfh"></div>
                                        </div>
                                    </div>
                                    <div class="MuiBox-root css-15q5ihe">
                                        <div class="MuiBox-root css-vni5v1">
                                            <div class="MuiBox-root css-1jojg8y">
                                                <img class="MuiBox-root css-1tvcwwz" src="/img/usdt-icon.svg" alt="usdt">
                                            </div>
                                            <div class="MuiBox-root css-5b1el9"></div>
                                            <div class="MuiBox-root css-1pd8wfh"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="MuiBox-root css-1unt6zn">
                                    <div class="MuiBox-root css-1h6ef2j">
                                        <div class="MuiBox-root css-vni5v1">
                                            <div class="MuiBox-root css-1jojg8y">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="MuiBox-root css-y2t66j iconify iconify--logos" sx="[object Object]" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 256"><defs><linearGradient id="iconifyReact4" x1="49.973%" x2="49.973%" y1="-.024%" y2="99.99%"><stop offset="0%" stop-color="#F9AA4B"></stop><stop offset="100%" stop-color="#F7931A"></stop></linearGradient></defs><path fill="url(#iconifyReact4)" d="M252.171 158.954c-17.102 68.608-86.613 110.314-155.123 93.211c-68.61-17.102-110.316-86.61-93.213-155.119C20.937 28.438 90.347-13.268 158.957 3.835c68.51 17.002 110.317 86.51 93.214 155.119Z"></path><path fill="#FFF" d="M188.945 112.05c2.5-17-10.4-26.2-28.2-32.3l5.8-23.1l-14-3.5l-5.6 22.5c-3.7-.9-7.5-1.8-11.3-2.6l5.6-22.6l-14-3.5l-5.7 23c-3.1-.7-6.1-1.4-9-2.1v-.1l-19.4-4.8l-3.7 15s10.4 2.4 10.2 2.5c5.7 1.4 6.7 5.2 6.5 8.2l-6.6 26.3c.4.1.9.2 1.5.5c-.5-.1-1-.2-1.5-.4l-9.2 36.8c-.7 1.7-2.5 4.3-6.4 3.3c.1.2-10.2-2.5-10.2-2.5l-7 16.1l18.3 4.6c3.4.9 6.7 1.7 10 2.6l-5.8 23.3l14 3.5l5.8-23.1c3.8 1 7.6 2 11.2 2.9l-5.7 23l14 3.5l5.8-23.3c24 4.5 42 2.7 49.5-19c6.1-17.4-.3-27.5-12.9-34.1c9.3-2.1 16.2-8.2 18-20.6Zm-32.1 45c-4.3 17.4-33.7 8-43.2 5.6l7.7-30.9c9.5 2.4 40.1 7.1 35.5 25.3Zm4.4-45.3c-4 15.9-28.4 7.8-36.3 5.8l7-28c7.9 2 33.4 5.7 29.3 22.2Z"></path></svg>
                                            </div>
                                            <div class="MuiBox-root css-5b1el9"></div>
                                            <div class="MuiBox-root css-1pd8wfh"></div>
                                        </div>
                                    </div>
                                    <div class="MuiBox-root css-irqkq">
                                        <div class="MuiBox-root css-vni5v1">
                                            <div class="MuiBox-root css-1jojg8y">
                                                <img class="MuiBox-root css-1tvcwwz" src="/img/tron-logo.svg" alt="tron">
                                            </div>
                                            <div class="MuiBox-root css-5b1el9"></div>
                                            <div class="MuiBox-root css-1pd8wfh"></div>
                                        </div>
                                    </div>
                                    <div class="MuiBox-root css-y5vfzn">
                                        <div class="MuiBox-root css-vni5v1">
                                            <div class="MuiBox-root css-1jojg8y">
                                                <img class="MuiBox-root css-1tvcwwz" src="/img/shib-logo.svg" alt="shib">
                                            </div>
                                            <div class="MuiBox-root css-5b1el9"></div>
                                            <div class="MuiBox-root css-1pd8wfh"></div>
                                        </div>
                                    </div>
                                    <div class="MuiBox-root css-6944k6">
                                        <div class="MuiBox-root css-vni5v1">
                                            <div class="MuiBox-root css-1jojg8y">
                                                <img class="MuiBox-root css-1tvcwwz" src="/img/sol-logo.svg" alt="sol">
                                            </div>
                                                <div class="MuiBox-root css-5b1el9"></div>
                                                <div class="MuiBox-root css-1pd8wfh"></div>
                                            </div>
                                        </div>
                                        <div class="MuiBox-root css-1yee2u4">
                                            <div class="MuiBox-root css-vni5v1">
                                                <div class="MuiBox-root css-1jojg8y">
                                                    <img class="MuiBox-root css-1tvcwwz" src="/img/okb-logo.svg" alt="okb">
                                                </div>
                                                <div class="MuiBox-root css-5b1el9"></div>
                                                <div class="MuiBox-root css-1pd8wfh"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <img class="MuiBox-root css-aod2g5" src="/img/kpay/floating-card.png"></div>
                                </div>
                            </div>
        </div>
    </div>
</section> --}}

    <section class="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <div class="MuiBox-root css-ob0qoi">
                        <div class="MuiBox-root css-1qae61w">
                            <div class="MuiBox-root css-1bhf6ae">
                                <img class="MuiBox-root css-1fjvxyd" src="{{ asset('assets/frontend') }}/img/kpay/inner-path.svg">
                                <img class="MuiBox-root css-19w8rfp" src="{{ asset('assets/frontend') }}/img/kpay/outer-path.svg">
                                <img class="MuiBox-root css-92r017" src="{{ asset('assets/frontend') }}/img/kpay/card-shadow.png">
                                <div class="MuiBox-root css-e9ah65">
                                    <div class="MuiBox-root css-72m8qr">
                                        <div class="MuiBox-root css-vni5v1">
                                            <div class="MuiBox-root css-1jojg8y"><svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                    role="img" class="MuiBox-root css-y2t66j iconify iconify--logos"
                                                    sx="[object Object]" width="0.62em" height="1em"
                                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 417">
                                                    <path fill="#343434"
                                                        d="m127.961 0l-2.795 9.5v275.668l2.795 2.79l127.962-75.638z"></path>
                                                    <path fill="#8C8C8C" d="M127.962 0L0 212.32l127.962 75.639V154.158z">
                                                    </path>
                                                    <path fill="#3C3C3B"
                                                        d="m127.961 312.187l-1.575 1.92v98.199l1.575 4.601l128.038-180.32z">
                                                    </path>
                                                    <path fill="#8C8C8C" d="M127.962 416.905v-104.72L0 236.585z"></path>
                                                    <path fill="#141414" d="m127.961 287.958l127.96-75.637l-127.96-58.162z">
                                                    </path>
                                                    <path fill="#393939" d="m.001 212.321l127.96 75.637V154.159z"></path>
                                                </svg></div>
                                            <div class="MuiBox-root css-5b1el9"></div>
                                            <div class="MuiBox-root css-1pd8wfh"></div>
                                        </div>
                                    </div>
                                    <div class="MuiBox-root css-15q5ihe">
                                        <div class="MuiBox-root css-vni5v1">
                                            <div class="MuiBox-root css-1jojg8y"><img class="MuiBox-root css-1tvcwwz"
                                                    src="{{ asset('assets/frontend') }}/img/usdt-icon.svg" alt="usdt"></div>
                                            <div class="MuiBox-root css-5b1el9"></div>
                                            <div class="MuiBox-root css-1pd8wfh"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="MuiBox-root css-1unt6zn">
                                    <div class="MuiBox-root css-1h6ef2j">
                                        <div class="MuiBox-root css-vni5v1">
                                            <div class="MuiBox-root css-1jojg8y"><svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                    role="img" class="MuiBox-root css-y2t66j iconify iconify--logos"
                                                    sx="[object Object]" width="1em" height="1em"
                                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 256">
                                                    <defs>
                                                        <linearGradient id="iconifyReact0" x1="49.973%" x2="49.973%"
                                                            y1="-.024%" y2="99.99%">
                                                            <stop offset="0%" stop-color="#F9AA4B"></stop>
                                                            <stop offset="100%" stop-color="#F7931A"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <path fill="url(#iconifyReact0)"
                                                        d="M252.171 158.954c-17.102 68.608-86.613 110.314-155.123 93.211c-68.61-17.102-110.316-86.61-93.213-155.119C20.937 28.438 90.347-13.268 158.957 3.835c68.51 17.002 110.317 86.51 93.214 155.119Z">
                                                    </path>
                                                    <path fill="#FFF"
                                                        d="M188.945 112.05c2.5-17-10.4-26.2-28.2-32.3l5.8-23.1l-14-3.5l-5.6 22.5c-3.7-.9-7.5-1.8-11.3-2.6l5.6-22.6l-14-3.5l-5.7 23c-3.1-.7-6.1-1.4-9-2.1v-.1l-19.4-4.8l-3.7 15s10.4 2.4 10.2 2.5c5.7 1.4 6.7 5.2 6.5 8.2l-6.6 26.3c.4.1.9.2 1.5.5c-.5-.1-1-.2-1.5-.4l-9.2 36.8c-.7 1.7-2.5 4.3-6.4 3.3c.1.2-10.2-2.5-10.2-2.5l-7 16.1l18.3 4.6c3.4.9 6.7 1.7 10 2.6l-5.8 23.3l14 3.5l5.8-23.1c3.8 1 7.6 2 11.2 2.9l-5.7 23l14 3.5l5.8-23.3c24 4.5 42 2.7 49.5-19c6.1-17.4-.3-27.5-12.9-34.1c9.3-2.1 16.2-8.2 18-20.6Zm-32.1 45c-4.3 17.4-33.7 8-43.2 5.6l7.7-30.9c9.5 2.4 40.1 7.1 35.5 25.3Zm4.4-45.3c-4 15.9-28.4 7.8-36.3 5.8l7-28c7.9 2 33.4 5.7 29.3 22.2Z">
                                                    </path>
                                                </svg></div>
                                            <div class="MuiBox-root css-5b1el9"></div>
                                            <div class="MuiBox-root css-1pd8wfh"></div>
                                        </div>
                                    </div>
                                    <div class="MuiBox-root css-irqkq">
                                        <div class="MuiBox-root css-vni5v1">
                                            <div class="MuiBox-root css-1jojg8y"><img class="MuiBox-root css-1tvcwwz"
                                                    src="{{ asset('assets/frontend') }}/img/tron-logo.svg" alt="tron"></div>
                                            <div class="MuiBox-root css-5b1el9"></div>
                                            <div class="MuiBox-root css-1pd8wfh"></div>
                                        </div>
                                    </div>
                                    <div class="MuiBox-root css-y5vfzn">
                                        <div class="MuiBox-root css-vni5v1">
                                            <div class="MuiBox-root css-1jojg8y"><img class="MuiBox-root css-1tvcwwz"
                                                    src="{{ asset('assets/frontend') }}/img/shib-logo.svg" alt="shib"></div>
                                            <div class="MuiBox-root css-5b1el9"></div>
                                            <div class="MuiBox-root css-1pd8wfh"></div>
                                        </div>
                                    </div>
                                    <div class="MuiBox-root css-6944k6">
                                        <div class="MuiBox-root css-vni5v1">
                                            <div class="MuiBox-root css-1jojg8y"><img class="MuiBox-root css-1tvcwwz"
                                                    src="{{ asset('assets/frontend') }}/img/sol-logo.svg" alt="sol"></div>
                                            <div class="MuiBox-root css-5b1el9"></div>
                                            <div class="MuiBox-root css-1pd8wfh"></div>
                                        </div>
                                    </div>
                                    <div class="MuiBox-root css-1yee2u4">
                                        <div class="MuiBox-root css-vni5v1">
                                            <div class="MuiBox-root css-1jojg8y"><img class="MuiBox-root css-1tvcwwz"
                                                    src="{{ asset('assets/frontend') }}/img/okb-logo.svg" alt="okb"></div>
                                            <div class="MuiBox-root css-5b1el9"></div>
                                            <div class="MuiBox-root css-1pd8wfh"></div>
                                        </div>
                                    </div>
                                </div><img class="MuiBox-root css-aod2g5" src="{{ asset('assets/default/3D View.png') }}">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>




    <!--====== BANNER PART START ======-->
    <section class="banner-area bg_cover" style="background-image: url({{ asset('assets/frontend/images/banner-bg.jpg') }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-8">
                    <div class="banner-content text-center">
                        <h1 class="title">Introducing The First Global Cryptofunding Platform</h1>
                        <ul>
                            <li><a class="main-btn main-btn-2" href="#">Whitepaper </a></li>
                            <li><a class="main-btn" href="{{ route('user.cryptopayment.index') }}"> buy Coin</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="social">
            <ul>
                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fab fa-github"></i></a></li>

            </ul>
        </div> --}}
    </section>

    <!--====== BANNER PART ENDS ======-->

    <!--====== CRYPTEN FEATURES PART START ======-->

    <section class="crypten-features-area">
        <div class="container-fluid">
            <div class="row">
                @foreach ($featues as $data)
                    <div class="col-4">
                        <div class="crypten-features-item text-center mt-30">
                            <img src="{{ asset($data->icon) }}" alt="icon" class="mx-auto">
                            <h3 class="title">{{ $data->heading }}</h3>
                            <p>{{$data->text}}</p>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-lg-4">
                    <div class="crypten-features-item text-center mt-30">
                        <img src="{{ asset('assets') }}/frontend/images/icon/features-icon-2.png" alt="icon" class="mx-auto">
                        <h3 class="title">Provably Fair</h3>
                        <p>A versatile framework combining Ethereum-based technology with powerful tools and
                            applications.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="crypten-features-item text-center mt-30 item-3">
                        <img src="{{ asset('assets') }}/frontend/images/icon/features-icon-3.png" alt="icon" class="mx-auto">
                        <h3 class="title">Trusted Globally</h3>
                        <p>A versatile framework combining Ethereum-based technology with powerful tools and
                            applications.</p>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>




    <!--====== CRYPTEN FEATURES PART ENDS ======-->

    <!--====== CRYPTEN TRADE PART START ======-->

    <section class="crypten-trade-area pt-190">
        <div class="item-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="crypten-trade-thumb">
                            <video src="{{ asset('assets/default/pexels-mikhail-nilov-6563866 (720p).mp4') }}" autoplay="on" controls class="rounded w-100"></video>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="crypten-trade-content">
                            <span>what is crypten</span>
                            <h3 class="title">A Secure Platform for ICO and Cryptocurrency Trade</h3>
                            <p>Crypten is one of the highly rated secure platfrom for ICO and any type of in hendrerit
                                justo quisque quis rhons exeget semper semlamat lobortis velit estibulum ante ipsum
                                primis in faucibus.</p>
                            <div class="trade-item mt-30">
                                <img src="{{ asset('assets') }}/frontend/images/icon/trade-icon-1.png" alt="">
                                <h5 class="title">Our Mission</h5>
                                <p>We’ve always been on the vestibulum fermentum veli non placerat aecenase in hen
                                    quisque quis.</p>
                            </div>
                            <div class="trade-item mt-30">
                                <img src="{{ asset('assets') }}/frontend/images/icon/trade-icon-2.png" alt="">
                                <h5 class="title">Our Vision</h5>
                                <p>We’ve always been on the vestibulum fermentum veli non placerat aecenase in hen
                                    quisque quis.</p>
                            </div>
                            <div class="trade-item mt-30">
                                <img src="{{ asset('assets') }}/frontend/images/icon/trade-icon-3.png" alt="">
                                <h5 class="title">The Future</h5>
                                <p>We’ve always been on the vestibulum fermentum veli non placerat aecenase in hen
                                    quisque quis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="crypten-color">
                <img src="{{ asset('assets') }}/frontend/images/shape/color-bg.png" alt="">
            </div>
        </div>
    </section>



    <section class="token-sale-area">
        <div class="container">
            <div class="row justify-content-center">

                @if (setting()->take_sale_count_status == 'on')
                    <div class="clock px-2 py-3 rounded" style="background: linear-gradient(0deg, rgba(165,11,250,1) 0%, rgba(46,65,219,1) 100%)">
                        <div class="row">
                            <div class="col-lg-6 text-center text-lg-start mb-3 mb-lg-0">
                                <h3 class="title text-white">Token Sale Rounds</h3>
                                <h4 class="mb-0 text-white font-weight-light">token sale </h4>
                            </div>
                            <div class="col-lg-6">
                                <div class="min-clock">
                                    <div class="flex-basis border mx-2" style="border-radius: 10px">
                                        <p id="days" class="text-white my-1 my-md-2 takeSaleBox2">:</p>
                                    </div>

                                    <div class="flex-basis border mx-2" style="border-radius: 10px">
                                        <p id="hours" class="text-white my-1 my-md-2 takeSaleBox2"></p>
                                    </div>

                                    <div class="flex-basis border mx-2" style="border-radius: 10px">
                                        <p id="minutes" class="text-white my-1 my-md-2 takeSaleBox2"></p>
                                    </div>

                                    <div class="flex-basis border mx-2" style="border-radius: 10px">
                                        <p id="seconds" class="text-white my-1 my-md-2 takeSaleBox2"></p>
                                    </div>
                                </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="container">
            <div class="row token-sale-active">
                @foreach ($counters as $counter)
                    <div class="col-lg-3">
                        <div class="token-sale-item mt-30 text-center">
                            <div class="circle-1">
                                <strong></strong>
                            </div>
                            <span>{{ $counter->name }}</span>
                            <p>{{ $counter->bonus_amount }}% bonus</p>
                            <div class="item">
                                <ul>
                                    <li>{{ Carbon\Carbon::parse($counter->start_date)->format('d M') }}</li>
                                    <li>{{ Carbon\Carbon::parse($counter->end_date)->format('d M') }}</li>
                                </ul>
                                <ul>
                                    <li>{{ Carbon\Carbon::parse($counter->start_date)->format('Y') }}</li>
                                    <li>{{ Carbon\Carbon::parse($counter->end_date)->format('Y') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="banefits-color-2">
            <img src="{{ asset('assets') }}/frontend/images/shape/color-bg-4.png" alt="">
        </div>
    </section>

    <section class="team-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <span>Our Senior Management</span>
                        <h3 class="title">Our Team</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($teams as $team)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="team-item mt-40">
                            <div class="team-thumb">
                                <img src="{{ asset($team->image) }}" alt="{{ $team->name }}">
                            </div>
                            <div class="team-content">
                                <ul>
                                    @if ($team->fb)
                                        <li>
                                            <a href="{{ $team->fb }}" style="font-size: 30px">
                                                <i class="fab fa-facebook-square"></i>
                                            </a>
                                        </li>
                                    @endif
                                    @if ($team->li)
                                        <li>
                                            <a href="{{ $team->li }}" style="font-size: 30px">
                                                <i class="fab fa-linkedin"></i>
                                            </a>
                                        </li>
                                    @endif
                                    @if ($team->ins)
                                        <li>
                                            <a href="{{ $team->ins }}" style="font-size: 30px">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                    @endif
                                    @if ($team->wa)
                                        <li>
                                            <a href="https://wa.me/+88{{ $team->wa }}" style="font-size: 30px">
                                                <i class="fab fa-whatsapp"></i>
                                            </a>
                                        </li>
                                    @endif
                                    @if ($team->git)
                                        <li>
                                            <a href="{{ $team->git }}" style="font-size: 30px">
                                                <i class="fab fa-github"></i>
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                                <h4 class="title">{{ $team->name }}</h4>
                                <span>{{ $team->designation }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mt-75 pb-30">
                        <h3 class="title">Meet Our Advisors</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item mt-40">
                        <div class="team-thumb">
                            <img src="{{ asset('assets') }}/frontend/images/team-9.jpg" alt="team">
                        </div>
                        <div class="team-content">
                            <ul>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            </ul>
                            <h4 class="title">Maria Dokshina</h4>
                            <span>Co-founder, ceo</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item mt-40">
                        <div class="team-thumb">
                            <img src="{{ asset('assets') }}/frontend/images/team-10.jpg" alt="team">
                        </div>
                        <div class="team-content">
                            <ul>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            </ul>
                            <h4 class="title">Alexander Nuikin</h4>
                            <span>Project Manager</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item mt-40">
                        <div class="team-thumb">
                            <img src="{{ asset('assets') }}/frontend/images/team-11.jpg" alt="team">
                        </div>
                        <div class="team-content">
                            <ul>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            </ul>
                            <h4 class="title">Nadia Cherkasova</h4>
                            <span>Head of Community</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item mt-40">
                        <div class="team-thumb">
                            <img src="{{ asset('assets') }}/frontend/images/team-12.jpg" alt="team">
                        </div>
                        <div class="team-content">
                            <ul>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            </ul>
                            <h4 class="title">Bdtayev Valery</h4>
                            <span>PR Director</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item mt-40">
                        <div class="team-thumb">
                            <img src="{{ asset('assets') }}/frontend/images/team-13.jpg" alt="team">
                        </div>
                        <div class="team-content ">
                            <ul>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            </ul>
                            <h4 class="title">Nikita Shilenko</h4>
                            <span>PR Director</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item mt-40">
                        <div class="team-thumb">
                            <img src="{{ asset('assets') }}/frontend/images/team-14.jpg" alt="team">
                        </div>
                        <div class="team-content">
                            <ul>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            </ul>
                            <h4 class="title">Oleg Gaidukov</h4>
                            <span>Technical Officer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item mt-40">
                        <div class="team-thumb">
                            <img src="{{ asset('assets') }}/frontend/images/team-15.jpg" alt="team">
                        </div>
                        <div class="team-content">
                            <ul>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            </ul>
                            <h4 class="title">Bogdan Dupak</h4>
                            <span>Front-end</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item mt-40">
                        <div class="team-thumb">
                            <img src="{{ asset('assets') }}/frontend/images/team-16.jpg" alt="team">
                        </div>
                        <div class="team-content">
                            <ul>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            </ul>
                            <h4 class="title">Polina Sukhanova</h4>
                            <span>Community Hero</span>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="banefits-color-2">
            <img src="{{ asset('assets') }}/frontend/images/shape/color-bg-4.png" alt="">
        </div>
    </section>


    <section class="contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <span>get in touch</span>
                        <h3 class="title">Contact</h3>
                        <ul>
                            <li>
                                <a href="mailto:info@crypten.com">
                                    <img src="{{ asset('assets') }}/frontend/images/icon/icon-8.png" alt="icon"> support@bruyenyard.com
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form action="#">
                        <div class="contact-box">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-box mt-10">
                                        <input type="text" placeholder="Name" style="background: linear-gradient(0deg, rgba(165,11,250,1) 0%, rgba(46,65,219,1) 100%)">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-box mt-10">
                                        <input type="text" placeholder="Email Address" style="background: linear-gradient(0deg, rgba(165,11,250,1) 0%, rgba(46,65,219,1) 100%)">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-box mt-10">
                                        <input type="text" placeholder="Phone" style="background: linear-gradient(0deg, rgba(165,11,250,1) 0%, rgba(46,65,219,1) 100%)">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-box mt-10">
                                        <input type="text" placeholder="Subject" style="background: linear-gradient(0deg, rgba(165,11,250,1) 0%, rgba(46,65,219,1) 100%)">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-box mt-10 text-center">
                                        <textarea name="#" id="#" cols="30" rows="10" placeholder="Message" style="background: linear-gradient(0deg, rgba(165,11,250,1) 0%, rgba(46,65,219,1) 100%)"></textarea>
                                        <button type="submit" class="main-btn">send message <i
                                                class="fal fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="banefits-color-2">
            <img src="{{ asset('assets') }}/frontend/images/shape/color-bg-4.png" alt="">
        </div>
    </section>

    <!--====== CONTACT PART ENDS ======-->
@endsection
@section('scripts')
<script>
        setInterval(function time() {
            var endDateString = "{{ setting()->take_sale_count }}";
            var endDate = new Date(endDateString);

            var now = new Date();
            var timeDifference = endDate - now;

            var days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
            var hours = Math.floor(timeDifference / (1000 * 60 * 60));
            var min = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
            var sec = Math.floor((timeDifference % (1000 * 60)) / 1000);

            if ((days + '').length == 1) {
                days = '0' + days;
            }
            if ((hours + '').length == 1) {
                hours = '0' + hours;
            }
            if ((min + '').length == 1) {
                min = '0' + min;
            }

            if ((sec + '').length == 1) {
                sec = '0' + sec;
            }

            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = min;
            document.getElementById("seconds").innerHTML = sec;
        }, 500);
</script>
@endsection
