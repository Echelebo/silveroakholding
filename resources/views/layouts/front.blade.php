<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!doctype html>
<html lang="en-US">

<!-- Mirrored from demokit.creativemox.com/capwise/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 May 2025 14:11:57 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title> {{ $page_title }} | {{ $siteName }}</title>
    <meta name='robots' content='max-image-preview:large' />
    <style>
        img:is([sizes="auto" i], [sizes^="auto," i]) {
            contain-intrinsic-size: 3000px 1500px
        }
    </style>
    <link rel="alternate" type="application/rss+xml" title="Capwise &raquo; Feed" href="feed/index.html" />
    <link rel="alternate" type="application/rss+xml" title="Capwise &raquo; Comments Feed" href="comments/feed/index.html" />
    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.1.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.1.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/demokit.creativemox.com\/capwise\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.8.1"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
                    case "emoji":
                        return !n(e, "\ud83d\udc26\u200d\ud83d\udd25", "\ud83d\udc26\u200b\ud83d\udd25")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function() {
                    n.DOMReady = !0
                }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
    </script>
    <style id='wp-emoji-styles-inline-css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style id='global-styles-inline-css'>
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :root {
            --wp--style--global--content-size: 800px;
            --wp--style--global--wide-size: 1200px;
        }

        :where(body) {
            margin: 0;
        }

        .wp-site-blocks>.alignleft {
            float: left;
            margin-right: 2em;
        }

        .wp-site-blocks>.alignright {
            float: right;
            margin-left: 2em;
        }

        .wp-site-blocks>.aligncenter {
            justify-content: center;
            margin-left: auto;
            margin-right: auto;
        }

        :where(.wp-site-blocks)>* {
            margin-block-start: 24px;
            margin-block-end: 0;
        }

        :where(.wp-site-blocks)> :first-child {
            margin-block-start: 0;
        }

        :where(.wp-site-blocks)> :last-child {
            margin-block-end: 0;
        }

        :root {
            --wp--style--block-gap: 24px;
        }

        :root :where(.is-layout-flow)> :first-child {
            margin-block-start: 0;
        }

        :root :where(.is-layout-flow)> :last-child {
            margin-block-end: 0;
        }

        :root :where(.is-layout-flow)>* {
            margin-block-start: 24px;
            margin-block-end: 0;
        }

        :root :where(.is-layout-constrained)> :first-child {
            margin-block-start: 0;
        }

        :root :where(.is-layout-constrained)> :last-child {
            margin-block-end: 0;
        }

        :root :where(.is-layout-constrained)>* {
            margin-block-start: 24px;
            margin-block-end: 0;
        }

        :root :where(.is-layout-flex) {
            gap: 24px;
        }

        :root :where(.is-layout-grid) {
            gap: 24px;
        }

        .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        body {
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
        }

        a:where(:not(.wp-element-button)) {
            text-decoration: underline;
        }

        :root :where(.wp-element-button, .wp-block-button__link) {
            background-color: #32373c;
            border-width: 0;
            color: #fff;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
            padding: calc(0.667em + 2px) calc(1.333em + 2px);
            text-decoration: none;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='template-kit-export-css' href='wp-content/plugins/template-kit-export/assets/public/template-kit-export-public982a.css?ver=1.0.23' media='all' />
    <link rel='stylesheet' id='hello-elementor-css' href='wp-content/themes/hello-elementor/style.min5589.css?ver=3.4.1' media='all' />
    <link rel='stylesheet' id='hello-elementor-theme-style-css' href='wp-content/themes/hello-elementor/theme.min5589.css?ver=3.4.1' media='all' />
    <link rel='stylesheet' id='hello-elementor-header-footer-css' href='wp-content/themes/hello-elementor/header-footer.min5589.css?ver=3.4.1' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css' href='wp-content/plugins/elementor/assets/css/frontend.min89ce.css?ver=3.28.4' media='all' />
    <link rel='stylesheet' id='elementor-post-8-css' href='wp-content/uploads/sites/9/elementor/css/post-86870.css?ver=1745578304' media='all' />
    <link rel='stylesheet' id='widget-image-css' href='wp-content/plugins/elementor/assets/css/widget-image.min89ce.css?ver=3.28.4' media='all' />
    <link rel='stylesheet' id='widget-nav-menu-css' href='wp-content/plugins/elementor-pro/assets/css/widget-nav-menu.min1b64.css?ver=3.28.1' media='all' />
    <link rel='stylesheet' id='widget-heading-css' href='wp-content/plugins/elementor/assets/css/widget-heading.min89ce.css?ver=3.28.4' media='all' />
    <link rel='stylesheet' id='widget-icon-box-css' href='wp-content/plugins/elementor/assets/css/widget-icon-box.min89ce.css?ver=3.28.4' media='all' />
    <link rel='stylesheet' id='widget-icon-list-css' href='wp-content/plugins/elementor/assets/css/widget-icon-list.min89ce.css?ver=3.28.4' media='all' />
    <link rel='stylesheet' id='e-animation-pop-css' href='wp-content/plugins/elementor/assets/lib/animations/styles/e-animation-pop.min89ce.css?ver=3.28.4' media='all' />
    <link rel='stylesheet' id='widget-social-icons-css' href='wp-content/plugins/elementor/assets/css/widget-social-icons.min89ce.css?ver=3.28.4' media='all' />
    <link rel='stylesheet' id='e-apple-webkit-css' href='wp-content/plugins/elementor/assets/css/conditionals/apple-webkit.min89ce.css?ver=3.28.4' media='all' />
    <link rel='stylesheet' id='e-animation-fadeInUp-css' href='wp-content/plugins/elementor/assets/lib/animations/styles/fadeInUp.min89ce.css?ver=3.28.4' media='all' />
    <link rel='stylesheet' id='e-animation-fadeIn-css' href='wp-content/plugins/elementor/assets/lib/animations/styles/fadeIn.min89ce.css?ver=3.28.4' media='all' />
    <link rel='stylesheet' id='e-animation-rotateIn-css' href='wp-content/plugins/elementor/assets/lib/animations/styles/rotateIn.min89ce.css?ver=3.28.4' media='all' />
    <link rel='stylesheet' id='e-animation-zoomIn-css' href='wp-content/plugins/elementor/assets/lib/animations/styles/zoomIn.min89ce.css?ver=3.28.4' media='all' />
    <link rel='stylesheet' id='mediaelement-css' href='wp-includes/js/mediaelement/mediaelementplayer-legacy.min1f61.css?ver=4.2.17' media='all' />
    <link rel='stylesheet' id='wp-mediaelement-css' href='wp-includes/js/mediaelement/wp-mediaelement.min0899.css?ver=6.8.1' media='all' />
    <link rel='stylesheet' id='e-animation-fadeInLeft-css' href='wp-content/plugins/elementor/assets/lib/animations/styles/fadeInLeft.min89ce.css?ver=3.28.4' media='all' />
    <link rel='stylesheet' id='e-animation-fadeInRight-css' href='wp-content/plugins/elementor/assets/lib/animations/styles/fadeInRight.min89ce.css?ver=3.28.4' media='all' />
    <link rel='stylesheet' id='widget-counter-css' href='wp-content/plugins/elementor/assets/css/widget-counter.min89ce.css?ver=3.28.4' media='all' />
    <link rel='stylesheet' id='widget-rating-css' href='wp-content/plugins/elementor/assets/css/widget-rating.min89ce.css?ver=3.28.4' media='all' />
    <link rel='stylesheet' id='widget-divider-css' href='wp-content/plugins/elementor/assets/css/widget-divider.min89ce.css?ver=3.28.4' media='all' />
    <link rel='stylesheet' id='e-animation-slideInLeft-css' href='wp-content/plugins/elementor/assets/lib/animations/styles/slideInLeft.min89ce.css?ver=3.28.4' media='all' />
    <link rel='stylesheet' id='e-animation-slideInRight-css' href='wp-content/plugins/elementor/assets/lib/animations/styles/slideInRight.min89ce.css?ver=3.28.4' media='all' />
    <link rel='stylesheet' id='e-animation-fadeInDown-css' href='wp-content/plugins/elementor/assets/lib/animations/styles/fadeInDown.min89ce.css?ver=3.28.4' media='all' />
    <link rel='stylesheet' id='e-motion-fx-css' href='wp-content/plugins/elementor-pro/assets/css/modules/motion-fx.min1b64.css?ver=3.28.1' media='all' />
    <link rel='stylesheet' id='widget-nested-accordion-css' href='wp-content/plugins/elementor/assets/css/widget-nested-accordion.min89ce.css?ver=3.28.4' media='all' />
    <link rel='stylesheet' id='swiper-css' href='wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5' media='all' />
    <link rel='stylesheet' id='e-swiper-css' href='wp-content/plugins/elementor/assets/css/conditionals/e-swiper.min89ce.css?ver=3.28.4' media='all' />
    <link rel='stylesheet' id='widget-testimonial-carousel-css' href='wp-content/plugins/elementor-pro/assets/css/widget-testimonial-carousel.min1b64.css?ver=3.28.1' media='all' />
    <link rel='stylesheet' id='widget-carousel-module-base-css' href='wp-content/plugins/elementor-pro/assets/css/widget-carousel-module-base.min1b64.css?ver=3.28.1' media='all' />
    <link rel='stylesheet' id='elementor-post-681-css' href='wp-content/uploads/sites/9/elementor/css/post-681737e.css?ver=1745836159' media='all' />
    <link rel='stylesheet' id='elementor-post-38-css' href='wp-content/uploads/sites/9/elementor/css/post-38e601.css?ver=1745582415' media='all' />
    <link rel='stylesheet' id='elementor-post-51-css' href='wp-content/uploads/sites/9/elementor/css/post-5196e4.css?ver=1745610569' media='all' />
    <link rel='stylesheet' id='skb-cife-materialdesign_icon-css' href='wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/materialdesignicons.mincb18.css?ver=1.0.9' media='all' />
    <link rel='stylesheet' id='skb-cife-simpleline_icon-css' href='wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/simple-line-iconscb18.css?ver=1.0.9' media='all' />
    <link rel='stylesheet' id='ekit-widget-styles-css' href='wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles9d52.css?ver=3.5.1' media='all' />
    <link rel='stylesheet' id='ekit-responsive-css' href='wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsive9d52.css?ver=3.5.1' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Manrope%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CInter%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CBarlow%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CLexend%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.8.1' media='all' />
    <link rel='stylesheet' id='elementor-icons-skb_cife-materialdesign-icon-css' href='wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/materialdesignicons.mincb18.css?ver=1.0.9' media='all' />
    <link rel='stylesheet' id='elementor-icons-ekiticons-css' href='wp-content/plugins/elementskit-lite/modules/elementskit-icon-pack/assets/css/ekiticons9d52.css?ver=3.5.1' media='all' />
    <link rel='stylesheet' id='elementor-icons-skb_cife-simple_line-icon-css' href='wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/simple-line-iconscb18.css?ver=1.0.9' media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script src="wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
    <script src="wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script>
    <script src="wp-content/plugins/template-kit-export/assets/public/template-kit-export-public982a.js?ver=1.0.23" id="template-kit-export-js"></script>
    <link rel="https://api.w.org/" href="wp-json/index.html" />
    <link rel="alternate" title="JSON" type="application/json" href="wp-json/wp/v2/pages/681.json" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <meta name="generator" content="WordPress 6.8.1" />
    <link rel="canonical" href="index.html" />
    <link rel='shortlink' href='index.html' />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="wp-json/oembed/1.0/embeda441.json?url=https%3A%2F%2Fdemokit.creativemox.com%2Fcapwise%2F" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="wp-json/oembed/1.0/embed1a6e?url=https%3A%2F%2Fdemokit.creativemox.com%2Fcapwise%2F&amp;format=xml" />
    <script>
        document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
    </script>
    <style>
        .no-js img.lazyload {
            display: none;
        }

        figure.wp-block-image img.lazyloading {
            min-width: 150px;
        }

        .lazyload,
        .lazyloading {
            opacity: 0;
        }

        .lazyloaded {
            opacity: 1;
            transition: opacity 400ms;
            transition-delay: 0ms;
        }
    </style>
    <meta name="generator" content="Elementor 3.28.4; features: e_font_icon_svg, additional_custom_breakpoints, e_element_cache; settings: css_print_method-external, google_font-enabled, font_display-auto">
    <style>
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }

        @media screen and (max-height: 1024px) {

            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }

        @media screen and (max-height: 640px) {

            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }
    </style>
</head>

<body class="home wp-singular page-template page-template-elementor_header_footer page page-id-681 wp-embed-responsive wp-theme-hello-elementor hello-elementor-default elementor-default elementor-template-full-width elementor-kit-8 elementor-page elementor-page-681">


    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

    <div data-elementor-type="header" data-elementor-id="38" class="elementor elementor-38 elementor-location-header" data-elementor-post-type="elementor_library">
        <div class="elementor-element elementor-element-7240710 e-flex e-con-boxed e-con e-parent" data-id="7240710" data-element_type="container">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-7e633be e-con-full e-flex e-con e-child" data-id="7e633be" data-element_type="container">
                    <div class="elementor-element elementor-element-0a381cc elementor-widget elementor-widget-image" data-id="0a381cc" data-element_type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <a href="https://demokit.creativemox.com/capwise">
                                <img data-src="https://demokit.creativemox.com/capwise/wp-content/uploads/sites/9/2025/04/logo_capwise_u.png" title="logo_capwise_u" alt="logo_capwise_u" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload" /> </a>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-2495823 e-con-full e-flex e-con e-child" data-id="2495823" data-element_type="container">
                    <div class="elementor-element elementor-element-b4929b7 elementor-nav-menu--stretch elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu" data-id="b4929b7" data-element_type="widget" data-settings="{&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;svg class=\&quot;e-font-icon-svg e-fas-angle-down\&quot; viewBox=\&quot;0 0 320 512\&quot; xmlns=\&quot;http:\/\/www.w3.org\/2000\/svg\&quot;&gt;&lt;path d=\&quot;M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z\&quot;&gt;&lt;\/path&gt;&lt;\/svg&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;full_width&quot;:&quot;stretch&quot;,&quot;layout&quot;:&quot;horizontal&quot;,&quot;toggle&quot;:&quot;burger&quot;}" data-widget_type="nav-menu.default">
                        <div class="elementor-widget-container">
                            <nav aria-label="Menu" class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-none">
                                <ul id="menu-1-b4929b7" class="elementor-nav-menu">
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-25"><a href="homepage/index.html" class="elementor-item">Homepage</a>
                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-26"><a href="homepage-2/index.html" class="elementor-sub-item">Homepage 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-27"><a href="about-us/index.html" class="elementor-item">About us</a></li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-29"><a href="services/index.html" class="elementor-item">Services</a>
                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-32"><a href="detail-service/index.html" class="elementor-sub-item">Detail service</a></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-30"><a href="pricing-plan/index.html" class="elementor-sub-item">Pricing plan</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-36"><a href="contact-us/index.html" class="elementor-item">Contact us</a></li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-37"><a href="#" class="elementor-item elementor-item-anchor">Pages</a>
                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-31"><a href="portfolio/index.html" class="elementor-sub-item">Portfolio</a></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-28"><a href="our-team/index.html" class="elementor-sub-item">Our Team</a></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-33"><a href="indexbb2b.html?elementor_library=capwise-blog-archive" class="elementor-sub-item">Blog Archive</a></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-34"><a href="key-economic-indicators-every-trader-should-watch-closely/index.html" class="elementor-sub-item">Single post</a></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-35"><a href="index45cd.html?elementor_library=capwise-error-404" class="elementor-sub-item">Error 404</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle" aria-expanded="false">
                                <svg aria-hidden="true" role="presentation" class="elementor-menu-toggle__icon--open e-font-icon-svg e-fas-bars" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path>
                                </svg><svg aria-hidden="true" role="presentation" class="elementor-menu-toggle__icon--close e-font-icon-svg e-fas-times" viewBox="0 0 352 512" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path>
                                </svg>
                            </div>
                            <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" aria-hidden="true">
                                <ul id="menu-2-b4929b7" class="elementor-nav-menu">
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-25"><a href="homepage/index.html" class="elementor-item" tabindex="-1">Homepage</a>
                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-26"><a href="homepage-2/index.html" class="elementor-sub-item" tabindex="-1">Homepage 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-27"><a href="about-us/index.html" class="elementor-item" tabindex="-1">About us</a></li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-29"><a href="services/index.html" class="elementor-item" tabindex="-1">Services</a>
                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-32"><a href="detail-service/index.html" class="elementor-sub-item" tabindex="-1">Detail service</a></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-30"><a href="pricing-plan/index.html" class="elementor-sub-item" tabindex="-1">Pricing plan</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-36"><a href="contact-us/index.html" class="elementor-item" tabindex="-1">Contact us</a></li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-37"><a href="#" class="elementor-item elementor-item-anchor" tabindex="-1">Pages</a>
                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-31"><a href="portfolio/index.html" class="elementor-sub-item" tabindex="-1">Portfolio</a></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-28"><a href="our-team/index.html" class="elementor-sub-item" tabindex="-1">Our Team</a></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-33"><a href="indexbb2b.html?elementor_library=capwise-blog-archive" class="elementor-sub-item" tabindex="-1">Blog Archive</a></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-34"><a href="key-economic-indicators-every-trader-should-watch-closely/index.html" class="elementor-sub-item" tabindex="-1">Single post</a></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-35"><a href="index45cd.html?elementor_library=capwise-error-404" class="elementor-sub-item" tabindex="-1">Error 404</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-7866c00 elementor-hidden-mobile elementor-widget elementor-widget-button" data-id="7866c00" data-element_type="widget" data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a class="elementor-button elementor-button-link elementor-size-sm" href="#">
                                    <span class="elementor-button-content-wrapper">
                                        <span class="elementor-button-text">Get Started</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @yield('contents')

    <div data-elementor-type="footer" data-elementor-id="51" class="elementor elementor-51 elementor-location-footer" data-elementor-post-type="elementor_library">
        <div class="elementor-element elementor-element-e41b51c e-flex e-con-boxed e-con e-parent" data-id="e41b51c" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-a35144d e-con-full e-flex e-con e-child" data-id="a35144d" data-element_type="container">
                    <div class="elementor-element elementor-element-c902c65 elementor-widget elementor-widget-image" data-id="c902c65" data-element_type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <img data-src="https://demokit.creativemox.com/capwise/wp-content/uploads/sites/9/2025/04/logo_capwise_u.png" title="logo_capwise_u" alt="logo_capwise_u" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload" />
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-a9125aa elementor-widget elementor-widget-heading" data-id="a9125aa" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-heading-title elementor-size-default">Precision trading, expert planning, smarter financial outcomes.

                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-f8a089b elementor-view-stacked elementor-position-left elementor-mobile-position-left elementor-vertical-align-middle elementor-shape-circle elementor-widget elementor-widget-icon-box" data-id="f8a089b" data-element_type="widget" data-widget_type="icon-box.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-icon-box-wrapper">

                                <div class="elementor-icon-box-icon">
                                    <span class="elementor-icon">
                                        <i aria-hidden="true" class="icons icon-earphones"></i> </span>
                                </div>

                                <div class="elementor-icon-box-content">

                                    <div class="elementor-icon-box-title">
                                        <span>
                                            Free Consultations </span>
                                    </div>

                                    <p class="elementor-icon-box-description">
                                        (888) 4000-2424 </p>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-b40ad24 e-con-full e-flex e-con e-child" data-id="b40ad24" data-element_type="container">
                    <div class="elementor-element elementor-element-5be6403 elementor-widget elementor-widget-heading" data-id="5be6403" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h5 class="elementor-heading-title elementor-size-default">Services</h5>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-7b691e4 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="7b691e4" data-element_type="widget" data-widget_type="icon-list.default">
                        <div class="elementor-widget-container">
                            <ul class="elementor-icon-list-items">
                                <li class="elementor-icon-list-item">
                                    <a href="#">

                                        <span class="elementor-icon-list-text">Portfolio Management</span>
                                    </a>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <a href="#">

                                        <span class="elementor-icon-list-text">Investment Planning</span>
                                    </a>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <a href="#">

                                        <span class="elementor-icon-list-text">Wealth Advisory</span>
                                    </a>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <a href="#">

                                        <span class="elementor-icon-list-text">Risk Assessment</span>
                                    </a>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <a href="#">

                                        <span class="elementor-icon-list-text">Trading Execution</span>
                                    </a>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <a href="#">

                                        <span class="elementor-icon-list-text">Market Insights</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-0cefe51 e-con-full e-flex e-con e-child" data-id="0cefe51" data-element_type="container">
                    <div class="elementor-element elementor-element-dd46627 elementor-widget elementor-widget-heading" data-id="dd46627" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h5 class="elementor-heading-title elementor-size-default">Support</h5>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-7d73531 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="7d73531" data-element_type="widget" data-widget_type="icon-list.default">
                        <div class="elementor-widget-container">
                            <ul class="elementor-icon-list-items">
                                <li class="elementor-icon-list-item">
                                    <a href="#">

                                        <span class="elementor-icon-list-text">Help Center</span>
                                    </a>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <a href="#">

                                        <span class="elementor-icon-list-text">My Accounts</span>
                                    </a>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <a href="#">

                                        <span class="elementor-icon-list-text">Customer Support</span>
                                    </a>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <a href="#">

                                        <span class="elementor-icon-list-text">FAQs</span>
                                    </a>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <a href="#">

                                        <span class="elementor-icon-list-text">Trading Guidelines</span>
                                    </a>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <a href="#">

                                        <span class="elementor-icon-list-text">Report an Issue</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-9d86e61 e-con-full e-flex e-con e-child" data-id="9d86e61" data-element_type="container">
                    <div class="elementor-element elementor-element-b48fece elementor-widget elementor-widget-heading" data-id="b48fece" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h5 class="elementor-heading-title elementor-size-default">Company</h5>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-b4e6145 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="b4e6145" data-element_type="widget" data-widget_type="icon-list.default">
                        <div class="elementor-widget-container">
                            <ul class="elementor-icon-list-items">
                                <li class="elementor-icon-list-item">
                                    <a href="#">

                                        <span class="elementor-icon-list-text">About Us</span>
                                    </a>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <a href="#">

                                        <span class="elementor-icon-list-text">Our Team</span>
                                    </a>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <a href="#">

                                        <span class="elementor-icon-list-text">Careers</span>
                                    </a>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <a href="#">

                                        <span class="elementor-icon-list-text">Press & Media</span>
                                    </a>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <a href="#">

                                        <span class="elementor-icon-list-text">Legal Notice</span>
                                    </a>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <a href="#">

                                        <span class="elementor-icon-list-text">Privacy Policy</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-0b8538d e-flex e-con-boxed e-con e-child" data-id="0b8538d" data-element_type="container">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-7772745 elementor-shape-circle elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons" data-id="7772745" data-element_type="widget" data-widget_type="social-icons.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-social-icons-wrapper elementor-grid">
                                    <span class="elementor-grid-item">
                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-f elementor-animation-pop elementor-repeater-item-4d8ed6e" target="_blank">
                                            <span class="elementor-screen-only">Facebook-f</span>
                                            <svg class="e-font-icon-svg e-fab-facebook-f" viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
                                            </svg> </a>
                                    </span>
                                    <span class="elementor-grid-item">
                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-animation-pop elementor-repeater-item-490cb2a" target="_blank">
                                            <span class="elementor-screen-only">Instagram</span>
                                            <svg class="e-font-icon-svg e-fab-instagram" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                                            </svg> </a>
                                    </span>
                                    <span class="elementor-grid-item">
                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-animation-pop elementor-repeater-item-dc53ddc" target="_blank">
                                            <span class="elementor-screen-only">Twitter</span>
                                            <svg class="e-font-icon-svg e-fab-twitter" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                                            </svg> </a>
                                    </span>
                                    <span class="elementor-grid-item">
                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-animation-pop elementor-repeater-item-ee8196f" target="_blank">
                                            <span class="elementor-screen-only">Youtube</span>
                                            <svg class="e-font-icon-svg e-fab-youtube" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path>
                                            </svg> </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-bf4393e elementor-widget elementor-widget-heading" data-id="bf4393e" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-heading-title elementor-size-default">Copyright © 2025 Capwise, All rights reserved. Present by Moxcreative</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="speculationrules">
        {"prefetch":[{"source":"document","where":{"and":[{"href_matches":"\/capwise\/*"},{"not":{"href_matches":["\/capwise\/wp-*.php","\/capwise\/wp-admin\/*","\/capwise\/wp-content\/uploads\/sites\/9\/*","\/capwise\/wp-content\/*","\/capwise\/wp-content\/plugins\/*","\/capwise\/wp-content\/themes\/hello-elementor\/*","\/capwise\/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
    <script>
        const lazyloadRunObserver = () => {
            const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
            const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        let lazyloadBackground = entry.target;
                        if (lazyloadBackground) {
                            lazyloadBackground.classList.add('e-lazyloaded');
                        }
                        lazyloadBackgroundObserver.unobserve(entry.target);
                    }
                });
            }, {
                rootMargin: '200px 0px 200px 0px'
            });
            lazyloadBackgrounds.forEach((lazyloadBackground) => {
                lazyloadBackgroundObserver.observe(lazyloadBackground);
            });
        };
        const events = [
            'DOMContentLoaded',
            'elementor/lazyload/observe',
        ];
        events.forEach((event) => {
            document.addEventListener(event, lazyloadRunObserver);
        });
    </script>
    <script src="wp-content/themes/hello-elementor/assets/js/hello-frontend.min5589.js?ver=3.4.1" id="hello-theme-frontend-js"></script>
    <script src="wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.min1576.js?ver=1.2.1" id="smartmenus-js"></script>
    <script id="mediaelement-core-js-before">
        var mejsL10n = {
            "language": "en",
            "strings": {
                "mejs.download-file": "Download File",
                "mejs.install-flash": "You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/",
                "mejs.fullscreen": "Fullscreen",
                "mejs.play": "Play",
                "mejs.pause": "Pause",
                "mejs.time-slider": "Time Slider",
                "mejs.time-help-text": "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.",
                "mejs.live-broadcast": "Live Broadcast",
                "mejs.volume-help-text": "Use Up\/Down Arrow keys to increase or decrease volume.",
                "mejs.unmute": "Unmute",
                "mejs.mute": "Mute",
                "mejs.volume-slider": "Volume Slider",
                "mejs.video-player": "Video Player",
                "mejs.audio-player": "Audio Player",
                "mejs.captions-subtitles": "Captions\/Subtitles",
                "mejs.captions-chapters": "Chapters",
                "mejs.none": "None",
                "mejs.afrikaans": "Afrikaans",
                "mejs.albanian": "Albanian",
                "mejs.arabic": "Arabic",
                "mejs.belarusian": "Belarusian",
                "mejs.bulgarian": "Bulgarian",
                "mejs.catalan": "Catalan",
                "mejs.chinese": "Chinese",
                "mejs.chinese-simplified": "Chinese (Simplified)",
                "mejs.chinese-traditional": "Chinese (Traditional)",
                "mejs.croatian": "Croatian",
                "mejs.czech": "Czech",
                "mejs.danish": "Danish",
                "mejs.dutch": "Dutch",
                "mejs.english": "English",
                "mejs.estonian": "Estonian",
                "mejs.filipino": "Filipino",
                "mejs.finnish": "Finnish",
                "mejs.french": "French",
                "mejs.galician": "Galician",
                "mejs.german": "German",
                "mejs.greek": "Greek",
                "mejs.haitian-creole": "Haitian Creole",
                "mejs.hebrew": "Hebrew",
                "mejs.hindi": "Hindi",
                "mejs.hungarian": "Hungarian",
                "mejs.icelandic": "Icelandic",
                "mejs.indonesian": "Indonesian",
                "mejs.irish": "Irish",
                "mejs.italian": "Italian",
                "mejs.japanese": "Japanese",
                "mejs.korean": "Korean",
                "mejs.latvian": "Latvian",
                "mejs.lithuanian": "Lithuanian",
                "mejs.macedonian": "Macedonian",
                "mejs.malay": "Malay",
                "mejs.maltese": "Maltese",
                "mejs.norwegian": "Norwegian",
                "mejs.persian": "Persian",
                "mejs.polish": "Polish",
                "mejs.portuguese": "Portuguese",
                "mejs.romanian": "Romanian",
                "mejs.russian": "Russian",
                "mejs.serbian": "Serbian",
                "mejs.slovak": "Slovak",
                "mejs.slovenian": "Slovenian",
                "mejs.spanish": "Spanish",
                "mejs.swahili": "Swahili",
                "mejs.swedish": "Swedish",
                "mejs.tagalog": "Tagalog",
                "mejs.thai": "Thai",
                "mejs.turkish": "Turkish",
                "mejs.ukrainian": "Ukrainian",
                "mejs.vietnamese": "Vietnamese",
                "mejs.welsh": "Welsh",
                "mejs.yiddish": "Yiddish"
            }
        };
    </script>
    <script src="wp-includes/js/mediaelement/mediaelement-and-player.min1f61.js?ver=4.2.17" id="mediaelement-core-js"></script>
    <script src="wp-includes/js/mediaelement/mediaelement-migrate.min0899.js?ver=6.8.1" id="mediaelement-migrate-js"></script>
    <script id="mediaelement-js-extra">
        var _wpmejsSettings = {
            "pluginPath": "\/capwise\/wp-includes\/js\/mediaelement\/",
            "classPrefix": "mejs-",
            "stretching": "responsive",
            "audioShortcodeLibrary": "mediaelement",
            "videoShortcodeLibrary": "mediaelement"
        };
    </script>
    <script src="wp-includes/js/mediaelement/wp-mediaelement.min0899.js?ver=6.8.1" id="wp-mediaelement-js"></script>
    <script src="wp-content/plugins/elementor/assets/lib/jquery-numerator/jquery-numerator.min3958.js?ver=0.2.1" id="jquery-numerator-js"></script>
    <script src="wp-content/plugins/elementor/assets/lib/swiper/v8/swiper.min94a4.js?ver=8.4.5" id="swiper-js"></script>
    <script src="wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-script9d52.js?ver=3.5.1" id="elementskit-framework-js-frontend-js"></script>
    <script id="elementskit-framework-js-frontend-js-after">
        var elementskit = {
            resturl: 'https://demokit.creativemox.com/capwise/wp-json/elementskit/v1/',
        }
    </script>
    <script src="wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scripts9d52.js?ver=3.5.1" id="ekit-widget-scripts-js"></script>
    <script src="wp-content/plugins/wp-smushit/app/assets/js/smush-lazy-load.min110d.js?ver=3.18.1" id="smush-lazy-load-js"></script>
    <script src="wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min1b64.js?ver=3.28.1" id="elementor-pro-webpack-runtime-js"></script>
    <script src="wp-content/plugins/elementor/assets/js/webpack.runtime.min89ce.js?ver=3.28.4" id="elementor-webpack-runtime-js"></script>
    <script src="wp-content/plugins/elementor/assets/js/frontend-modules.min89ce.js?ver=3.28.4" id="elementor-frontend-modules-js"></script>
    <script src="wp-includes/js/dist/hooks.min4fdd.js?ver=4d63a3d491d11ffd8ac6" id="wp-hooks-js"></script>
    <script src="wp-includes/js/dist/i18n.minc33c.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>
    <script id="wp-i18n-js-after">
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
    </script>
    <script id="elementor-pro-frontend-js-before">
        var ElementorProFrontendConfig = {
            "ajaxurl": "https:\/\/demokit.creativemox.com\/capwise\/wp-admin\/admin-ajax.php",
            "nonce": "b320775733",
            "urls": {
                "assets": "https:\/\/demokit.creativemox.com\/capwise\/wp-content\/plugins\/elementor-pro\/assets\/",
                "rest": "https:\/\/demokit.creativemox.com\/capwise\/wp-json\/"
            },
            "settings": {
                "lazy_load_background_images": true
            },
            "popup": {
                "hasPopUps": false
            },
            "shareButtonsNetworks": {
                "facebook": {
                    "title": "Facebook",
                    "has_counter": true
                },
                "twitter": {
                    "title": "Twitter"
                },
                "linkedin": {
                    "title": "LinkedIn",
                    "has_counter": true
                },
                "pinterest": {
                    "title": "Pinterest",
                    "has_counter": true
                },
                "reddit": {
                    "title": "Reddit",
                    "has_counter": true
                },
                "vk": {
                    "title": "VK",
                    "has_counter": true
                },
                "odnoklassniki": {
                    "title": "OK",
                    "has_counter": true
                },
                "tumblr": {
                    "title": "Tumblr"
                },
                "digg": {
                    "title": "Digg"
                },
                "skype": {
                    "title": "Skype"
                },
                "stumbleupon": {
                    "title": "StumbleUpon",
                    "has_counter": true
                },
                "mix": {
                    "title": "Mix"
                },
                "telegram": {
                    "title": "Telegram"
                },
                "pocket": {
                    "title": "Pocket",
                    "has_counter": true
                },
                "xing": {
                    "title": "XING",
                    "has_counter": true
                },
                "whatsapp": {
                    "title": "WhatsApp"
                },
                "email": {
                    "title": "Email"
                },
                "print": {
                    "title": "Print"
                },
                "x-twitter": {
                    "title": "X"
                },
                "threads": {
                    "title": "Threads"
                }
            },
            "facebook_sdk": {
                "lang": "en_US",
                "app_id": ""
            },
            "lottie": {
                "defaultAnimationUrl": "https:\/\/demokit.creativemox.com\/capwise\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"
            }
        };
    </script>
    <script src="wp-content/plugins/elementor-pro/assets/js/frontend.min1b64.js?ver=3.28.1" id="elementor-pro-frontend-js"></script>
    <script src="wp-includes/js/jquery/ui/core.minb37e.js?ver=1.13.3" id="jquery-ui-core-js"></script>
    <script id="elementor-frontend-js-before">
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close",
                "a11yCarouselPrevSlideMessage": "Previous slide",
                "a11yCarouselNextSlideMessage": "Next slide",
                "a11yCarouselFirstSlideMessage": "This is the first slide",
                "a11yCarouselLastSlideMessage": "This is the last slide",
                "a11yCarouselPaginationBulletMessage": "Go to slide"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                },
                "hasCustomBreakpoints": false
            },
            "version": "3.28.4",
            "is_static": false,
            "experimentalFeatures": {
                "e_font_icon_svg": true,
                "additional_custom_breakpoints": true,
                "container": true,
                "theme_builder_v2": true,
                "hello-theme-header-footer": true,
                "nested-elements": true,
                "editor_v2": true,
                "e_element_cache": true,
                "home_screen": true,
                "launchpad-checklist": true
            },
            "urls": {
                "assets": "https:\/\/demokit.creativemox.com\/capwise\/wp-content\/plugins\/elementor\/assets\/",
                "ajaxurl": "https:\/\/demokit.creativemox.com\/capwise\/wp-admin\/admin-ajax.php",
                "uploadUrl": "http:\/\/demokit.creativemox.com\/capwise\/wp-content\/uploads\/sites\/9"
            },
            "nonces": {
                "floatingButtonsClickTracking": "bfdf2b7d56"
            },
            "swiperClass": "swiper",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "body_background_background": "classic",
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description",
                "hello_header_logo_type": "title",
                "hello_header_menu_layout": "horizontal",
                "hello_footer_logo_type": "logo"
            },
            "post": {
                "id": 681,
                "title": "Capwise",
                "excerpt": "",
                "featuredImage": false
            }
        };
    </script>
    <script src="wp-content/plugins/elementor/assets/js/frontend.min89ce.js?ver=3.28.4" id="elementor-frontend-js"></script>
    <script src="wp-content/plugins/elementor-pro/assets/js/elements-handlers.min1b64.js?ver=3.28.1" id="pro-elements-handlers-js"></script>
    <script src="wp-content/plugins/elementskit-lite/widgets/init/assets/js/animate-circle.min9d52.js?ver=3.5.1" id="animate-circle-js"></script>
    <script id="elementskit-elementor-js-extra">
        var ekit_config = {
            "ajaxurl": "https:\/\/demokit.creativemox.com\/capwise\/wp-admin\/admin-ajax.php",
            "nonce": "17488eeb01"
        };
    </script>
    <script src="wp-content/plugins/elementskit-lite/widgets/init/assets/js/elementor9d52.js?ver=3.5.1" id="elementskit-elementor-js"></script>



    {{-- logout --}}
    <script>
        $(document).on('click', '.logout', function(e) {
            html = `
                <div class="mt-5 h-72 ts-gray-3 p-2 rounded-lg flex justify-center items-center">
                    <div>
                        <h2 class="text-white text-center">Do you really want to Logout?</h2>
                        <form action="{{ route('user.logout') }}" class="mt-5 gen-form" data-action="redirect" data-url="{{ url('/') }}">
                            @csrf
                            <button type="submit" class="mt-5 bg-red-500 text-white px-2 py-1 rounded-full text-xs hover:scale-110 transition-all uppercase" type="submit">Yes,  Logout</button>
                        </form>

                    </div>
                </div>
                `;
            Swal.fire({
                html: html,
                toast: false,
                background: 'rgb(7, 3, 12, 0)',
                showConfirmButton: false,
                showCloseButton: true,
                allowEscapeKey: false, // Prevent closing by escape key
                allowOutsideClick: false, // Prevent closing by clicking backdrop
                willClose: () => {
                    //delete the previously generated qrcode
                    // $('#single_wallet_qrcode').html('');
                }
            });
        });
    </script>

    {{-- all script placements --}}




    <!-- Include SweetAlert2 JavaScript file -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>

    <script src="{{ asset('assets/scripts/cs.js') }}"></script>
    <script src="{{ asset('assets/scripts/main.js') }}"></script>

</body>

</html>