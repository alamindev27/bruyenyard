! function() {
    "use strict";
    var e = function() {
        var e = setTimeout;

        function n() {}

        function t(e) {
            if (!(this instanceof t)) throw new TypeError("Promises must be constructed via new");
            if ("function" != typeof e) throw new TypeError("not a function");
            this._state = 0, this._handled = !1, this._value = void 0, this._deferreds = [], c(e, this)
        }

        function i(e, n) {
            for (; 3 === e._state;) e = e._value;
            0 !== e._state ? (e._handled = !0, t._immediateFn((function() {
                var t = 1 === e._state ? n.onFulfilled : n.onRejected;
                if (null !== t) {
                    var i;
                    try {
                        i = t(e._value)
                    } catch (e) {
                        return void o(n.promise, e)
                    }
                    r(n.promise, i)
                } else(1 === e._state ? r : o)(n.promise, e._value)
            }))) : e._deferreds.push(n)
        }

        function r(e, n) {
            try {
                if (n === e) throw new TypeError("A promise cannot be resolved with itself.");
                if (n && ("object" == typeof n || "function" == typeof n)) {
                    var i = n.then;
                    if (n instanceof t) return e._state = 3, e._value = n, void a(e);
                    if ("function" == typeof i) return void c((r = i, u = n, function() {
                        r.apply(u, arguments)
                    }), e)
                }
                e._state = 1, e._value = n, a(e)
            } catch (n) {
                o(e, n)
            }
            var r, u
        }

        function o(e, n) {
            e._state = 2, e._value = n, a(e)
        }

        function a(e) {
            2 === e._state && 0 === e._deferreds.length && t._immediateFn((function() {
                e._handled || t._unhandledRejectionFn(e._value)
            }));
            for (var n = 0, r = e._deferreds.length; r > n; n++) i(e, e._deferreds[n]);
            e._deferreds = null
        }

        function u(e, n, t) {
            this.onFulfilled = "function" == typeof e ? e : null, this.onRejected = "function" == typeof n ? n : null, this.promise = t
        }

        function c(e, n) {
            var t = !1;
            try {
                e((function(e) {
                    t || (t = !0, r(n, e))
                }), (function(e) {
                    t || (t = !0, o(n, e))
                }))
            } catch (e) {
                if (t) return;
                t = !0, o(n, e)
            }
        }
        t.prototype.catch = function(e) {
            return this.then(null, e)
        }, t.prototype.then = function(e, t) {
            var r = new this.constructor(n);
            return i(this, new u(e, t, r)), r
        }, t.prototype.finally = function(e) {
            var n = this.constructor;
            return this.then((function(t) {
                return n.resolve(e()).then((function() {
                    return t
                }))
            }), (function(t) {
                return n.resolve(e()).then((function() {
                    return n.reject(t)
                }))
            }))
        }, t.all = function(e) {
            return new t((function(n, t) {
                if (!e || void 0 === e.length) throw new TypeError("Promise.all accepts an array");
                var i = Array.prototype.slice.call(e);
                if (0 === i.length) return n([]);
                var r = i.length;

                function o(e, a) {
                    try {
                        if (a && ("object" == typeof a || "function" == typeof a)) {
                            var u = a.then;
                            if ("function" == typeof u) return void u.call(a, (function(n) {
                                o(e, n)
                            }), t)
                        }
                        i[e] = a, 0 == --r && n(i)
                    } catch (e) {
                        t(e)
                    }
                }
                for (var a = 0; i.length > a; a++) o(a, i[a])
            }))
        }, t.resolve = function(e) {
            return e && "object" == typeof e && e.constructor === t ? e : new t((function(n) {
                n(e)
            }))
        }, t.reject = function(e) {
            return new t((function(n, t) {
                t(e)
            }))
        }, t.race = function(e) {
            return new t((function(n, t) {
                for (var i = 0, r = e.length; r > i; i++) e[i].then(n, t)
            }))
        }, t._immediateFn = "function" == typeof setImmediate && function(e) {
            setImmediate(e)
        } || function(n) {
            e(n, 0)
        }, t._unhandledRejectionFn = function(e) {
            void 0 !== console && console && console.warn("Possible Unhandled Promise Rejection:", e)
        };
        var s = t;
        return /native code/.test(window.Promise) ? window.Promise : s
    }();

    function n(e, n) {
        return e + n
    }
    var t = {}.hasOwnProperty;

    function i(e, n) {
        return t.call(n, e)
    }

    function r() {
        return (r = Object.assign || function(e) {
            for (var n = arguments.length, t = Array(n > 1 ? n - 1 : 0), r = 1; n > r; r++) t[r - 1] = arguments[r];
            return t.forEach((function(n) {
                for (var t in n) i(t, n) && (e[t] = n[t])
            })), e
        }).apply(void 0, arguments)
    }

    function o(e) {
        return Array.isArray(e)
    }

    function a(e) {
        return "object" == typeof e && null !== e && !o(e)
    }

    function u(e) {
        if ("keys" in Object && "function" == typeof Object.keys) return Object.keys(e);
        var n = [];
        for (var t in e) Object.prototype.hasOwnProperty.call(e, t) && n.push(t);
        return n
    }

    function c(e, n) {
        return u(n).reduce((function(t, i) {
            return t[i] = e(n[i]), t
        }), {})
    }

    function s(e) {
        return o(e) ? e.map(s) : a(e) ? c(s, e) : e
    }

    function d(e) {
        return o(e) ? e.filter((function(e) {
            return null != e && !Number.isNaN(e)
        })) : Object.keys(e).reduce((function(n, t) {
            var i = e[t];
            return null == i || Number.isNaN(i) || (n[t] = i), n
        }), {})
    }

    function l(e, n) {
        for (var t = 0; n.length > t; t++) {
            var i = n[t];
            if (e(i)) return i
        }
    }

    function f(e, n) {
        for (var t = n.length - 1; t >= 0; t--)
            if (e(n[t])) return n[t]
    }

    function p(e) {
        return e
    }

    function m(e, n) {
        return u(n).forEach((function(t) {
            e(n[t], t)
        }))
    }

    function v() {
        return Math.random().toString(36).substring(2)
    }

    function h(e) {
        var n = v();
        return i(n, e) ? h(e) : n
    }

    function g(e, n, t) {
        var i = function(e, n) {
            for (var t = "string" == typeof e ? e.split(".") : e, i = 0, r = n; r && t.length > i;) r = r[t[i++]];
            return r
        }(n, t);
        return null != i ? i : e
    }

    function _(e, n) {
        return -1 !== n.indexOf(e)
    }

    function w(e) {
        return 0 === (o(e) ? e : Object.keys(e)).length
    }

    function y(e) {
        return !e
    }

    function b(e) {
        return !!e
    }

    function k(e) {
        return e.length > 0 ? e[e.length - 1] : void 0
    }

    function I(e, n) {
        return u(n).reduce((function(t, i) {
            return Object.defineProperty(t, e(i), {
                value: n[i],
                enumerable: !0
            }), t
        }), {})
    }

    function C(e, n) {
        if (w(n)) return e;
        var t = {};
        return m((function(r, u) {
            if (i(u, n))
                if (a(e[u]) && a(n[u])) t[u] = C(e[u], n[u]);
                else if (o(e[u]) && o(n[u])) {
                var c = Math.max(e[u].length, n[u].length);
                t[u] = Array(c);
                for (var s = 0; c > s; s++) s in n[u] ? t[u][s] = n[u][s] : s in e[u] && (t[u][s] = e[u][s])
            } else t[u] = n[u];
            else t[u] = e[u]
        }), e), m((function(e, r) {
            i(r, t) || (t[r] = n[r])
        }), n), t
    }

    function E(e) {
        if (0 === e.length) return {};
        var n = e[0];
        return e.slice(1).reduce((function(e, n) {
            return C(e, n)
        }), n)
    }

    function L(e) {
        return function(e, n) {
            var t = {};
            return function() {
                var r = e.apply(void 0, arguments);
                if (i(r, t)) return t[r];
                var o = n.apply(void 0, arguments);
                return t[r] = o, o
            }
        }(p, e)
    }

    function x() {}

    function A(e, n) {
        return e.reduce((function(e, t) {
            return e[t] = n[t], e
        }), {})
    }

    function z() {
        return (z = Object.assign || function(e) {
            for (var n = 1; arguments.length > n; n++) {
                var t = arguments[n];
                for (var i in t) Object.prototype.hasOwnProperty.call(t, i) && (e[i] = t[i])
            }
            return e
        }).apply(this, arguments)
    }

    function O(e, n) {
        return e === n ? 0 !== e || 0 !== n || 1 / e == 1 / n : e != e && n != n
    }

    function T(e, n) {
        if (O(e, n)) return !0;
        if ("object" != typeof e || null === e || "object" != typeof n || null === n) return !1;
        var t = Object.keys(e);
        if (t.length !== Object.keys(n).length) return !1;
        for (var r = 0; t.length > r; r++)
            if (!i(t[r], n) || !O(e[t[r]], n[t[r]])) return !1;
        return !0
    }

    function P(e) {
        return e.reduce(n, 0)
    }

    function S(e) {
        return Array.prototype.slice.call(e)
    }

    function M(e) {
        return u(e).map((function(n) {
            return [n, e[n]]
        }))
    }
    var j = function(e, n) {
            m((function(e, t) {
                n.style[t] = e
            }), e)
        },
        N = function(e, n) {
            m((function(e, t) {
                "style" !== t ? n.setAttribute(t, e) : j(e, n)
            }), e)
        },
        D = function() {
            return !!document.documentElement.currentStyle
        },
        q = function(e, n) {
            var t = window.getComputedStyle(n),
                r = "border-box" === t.boxSizing,
                o = A(e, t);
            D() && r && i("width", o) && null !== o.width && (o.width = P([o.width, t.paddingLeft, t.paddingRight, t.borderLeftWidth, t.borderRightWidth].map(parseFloat)) + "px");
            D() && r && i("height", o) && null !== o.height && (o.height = P([o.height, t.paddingTop, t.paddingBottom, t.borderTopWidth, t.borderBottomWidth].map(parseFloat)) + "px");
            return o
        };

    function F() {
        return new e((function(e) {
            ! function n() {
                document.body ? e(document.body) : setTimeout(n, 100)
            }()
        }))
    }

    function W(e) {
        var n = e.parentNode;
        n && n.removeChild(e)
    }
    var B = function(e, n) {
            var t = document.createElement(e);
            return N(n, t), t
        },
        H = function(e) {
            return M(e).map((function(e) {
                return e.map(encodeURIComponent).join("=")
            })).join("&")
        },
        R = function(e) {
            return function(e) {
                return e.reduce((function(e, n) {
                    return e[n[0]] = n[1], e
                }), {})
            }(e.split("&").filter(Boolean).map((function(e) {
                return e.split("=").map((function(e) {
                    return decodeURIComponent(e.replace("+", "%20"))
                }))
            })).map((function(e) {
                return 2 === e.length ? e : [e[0], ""]
            })))
        },
        V = /(?:[^:]+:\/\/)?([^/\s]+)/;
    var G = /[^:]+:\/\/[^(/|?)\s]+/,
        U = function(e) {
            var n = e.match(G);
            return n && n[0]
        },
        Y = /.*?\?([^#]+)/,
        J = function(e) {
            var n = e.match(Y);
            return n ? "?" + n[1] : ""
        },
        X = function(e) {
            return e.replace(/^\?/, "")
        },
        $ = function(e) {
            if (null === U(e)) return R(X(e));
            var n = X(J(e));
            return n ? R(n) : {}
        },
        K = /^(?:https?:)?\/\/[^/]+\/([^?#]+)/,
        Q = function(e) {
            var n = e.match(K);
            return "/" + (n && n[1] || "")
        },
        Z = function(e) {
            return e.replace(/\w/g, "$&[\\r\\n\\t]*")
        },
        ee = (RegExp("^[\0-]*(" + Z("javascript") + "|" + Z("data") + "):", "i"), /^((http(s)?:)?\/\/)/),
        ne = function(e, n) {
            if (-1 === e.indexOf("?")) return e;
            var t = $(e);
            if (w(t)) return e;
            if (Object.keys(t).every((function(e) {
                    return !n.includes(e)
                }))) return e;
            n.forEach((function(e) {
                return delete t[e]
            }));
            var i = function(e, n) {
                if (0 === Object.keys(n).length) return e;
                var t = U(e),
                    i = Q(e),
                    r = J(e) ? $(e) : {};
                return "" + t + i + "?" + H(z({}, r, n))
            }(e.split("?")[0], t);
            return e.indexOf("#") > -1 ? i + "#" + e.split("#")[1] : i
        },
        te = function(e) {
            return "https://" + function(e) {
                return e.replace(ee, "")
            }(e)
        },
        ie = function(e) {
            return function(n, t) {
                if (0 === n) {
                    if ("function" != typeof e) return t(0, (function() {})), void t(2);
                    var i, r = !1;
                    t(0, (function(e) {
                        r || (r = 2 === e) && "function" == typeof i && i()
                    })), r || (i = e((function(e) {
                        r || t(1, e)
                    }), (function(e) {
                        r || void 0 === e || (r = !0, t(2, e))
                    }), (function() {
                        r || (r = !0, t(2))
                    })))
                }
            }
        },
        re = function(e) {
            return function(n, t) {
                var i, r;
                0 === n && e(0, (function(e, n) {
                    if (0 === e) i = n, t(0, o);
                    else if (1 === e) {
                        var a = n;
                        r && r(2), a(0, (function(e, n) {
                            0 === e ? (r = n)(1) : 1 === e ? t(1, n) : 2 === e && n ? (i && i(2), t(2, n)) : 2 === e && (i ? (r = void 0, i(1)) : t(2))
                        }))
                    } else 2 === e && n ? (r && r(2), t(2, n)) : 2 === e && (r ? i = void 0 : t(2))
                }));

                function o(e, n) {
                    1 === e && (r || i)(1, n), 2 === e && (r && r(2), i && i(2))
                }
            }
        },
        oe = function(e, n) {
            return e === n
        };

    function ae(e) {
        return void 0 === e && (e = oe),
            function(n) {
                return function(t, i) {
                    if (0 === t) {
                        var r, o, a = !1;
                        n(0, (function(n, t) {
                            0 === n && (o = t), 1 === n ? a && e(r, t) ? o(1) : (a = !0, r = t, i(1, t)) : i(n, t)
                        }))
                    }
                }
            }
    }
    var ue = function(e) {
            return function(n) {
                return function(t, i) {
                    var r;
                    0 === t && n(0, (function(n, t) {
                        0 === n ? (r = t, i(n, t)) : 1 === n ? e(t) ? i(n, t) : r(1) : i(n, t)
                    }))
                }
            }
        },
        ce = function(e) {
            return function(n) {
                var t;
                n(0, (function(n, i) {
                    0 === n && (t = i), 1 === n && e(i), 1 !== n && 0 !== n || t(1)
                }))
            }
        },
        se = function(e, n, t) {
            return function(i, r) {
                if (0 === i) {
                    var o = !1,
                        a = function(e) {
                            r(1, e)
                        };
                    r(0, (function(i) {
                        2 === i && (o = !0, e.removeEventListener(n, a, t))
                    })), o || e.addEventListener(n, a, t)
                }
            }
        };
    var de = function() {
        for (var e = arguments.length, n = Array(e), t = 0; e > t; t++) n[t] = arguments[t];
        return function(e, t) {
            if (0 === e)
                for (var i = n.length, r = Array(i), o = 0, a = 0, u = function(e) {
                        if (0 !== e)
                            for (var n = 0; i > n; n++) r[n] && r[n](e)
                    }, c = function(e) {
                        n[e](0, (function(n, c) {
                            0 === n ? (r[e] = c, 1 == ++o && t(0, u)) : 2 === n ? (r[e] = void 0, ++a === i && t(2)) : t(n, c)
                        }))
                    }, s = 0; i > s; s++) c(s)
        }
    };

    function le(e, n) {
        return ie((function(t) {
            return e.on(n, t),
                function() {
                    e.off(n, t)
                }
        }))
    }! function(e) {
        var n, t = e.Symbol;
        "function" == typeof t ? t.observable ? n = t.observable : (n = t("observable"), t.observable = n) : n = "@@observable"
    }("undefined" != typeof self ? self : "undefined" != typeof window ? window : "undefined" != typeof global ? global : "undefined" != typeof module ? module : Function("return this")());
    var fe = function() {
            for (var e = arguments.length, n = Array(e), t = 0; e > t; t++) n[t] = arguments[t];
            for (var i = n[0], r = 1, o = n.length; o > r; r++) i = n[r](i);
            return i
        },
        pe = function(e) {
            return function(n) {
                return function(t, i) {
                    var r;
                    0 === t && n(0, (function(n, t) {
                        0 === n ? (r = t, i(0, (function(e, n) {
                            0 !== e && r(e, n)
                        })), i(1, e)) : i(n, t)
                    }))
                }
            }
        },
        me = function(e) {
            return function(n) {
                return function(t, i) {
                    0 === t && n(0, (function(n, t) {
                        i(n, 1 === n ? e(t) : t)
                    }))
                }
            }
        };

    function ve(e) {
        return function(n) {
            return re(me(e)(n))
        }
    }
    var he = function() {};

    function ge(e, n) {
        0 === e && n(0, he)
    }

    function _e() {
        for (var e = arguments.length, n = Array(e), t = 0; e > t; t++) n[t] = arguments[t];
        return function(e, t) {
            if (0 === e) {
                var i = !1;
                for (t(0, (function(e) {
                        2 === e && (i = !0, n.length = 0)
                    })); 0 !== n.length;) t(1, n.shift());
                i || t(2)
            }
        }
    }

    function we(e) {
        return function(n, t) {
            if (0 === n) {
                var i, r, o, a = 0;
                e(0, (function(e, n) {
                    if (0 === e && (o = n), 1 === e) {
                        var u = [r, n];
                        i = u[0], r = u[1], 2 > ++a ? o(1) : t(1, [i, r])
                    } else t(e, n)
                }))
            }
        }
    }
    var ye = function() {},
        be = {};

    function ke(e) {
        var n, t, i = [],
            r = !1,
            o = be;
        return function(a, u) {
            if (0 === a) {
                if (o !== be) return u(0, ye), r && u(1, t), void u(2, o);
                i.push(u);
                var c = function(e, t) {
                    if (2 !== e) o === be && n(e, t);
                    else {
                        var r = i.indexOf(u); - 1 !== r && i.splice(r, 1)
                    }
                };
                1 !== i.length ? (u(0, c), r && o === be && u(1, t)) : e(0, (function(e, a) {
                    if (0 === e) return n = a, void u(0, c);
                    1 === e && (r = !0, t = a);
                    var s = i.slice(0);
                    2 === e && (o = a, i = null), s.forEach((function(n) {
                        n(e, a)
                    }))
                }))
            }
        }
    }
    var Ie = function(e) {
            return function(n) {
                return function(t, i) {
                    if (0 === t) {
                        var r, o = 0;
                        n(0, (function(n, t) {
                            0 === n ? (r = t, i(n, t)) : 1 === n && e > o ? (o++, r(1)) : i(n, t)
                        }))
                    }
                }
            }
        },
        Ce = function(e) {
            return void 0 === e && (e = {}),
                function(n) {
                    "function" == typeof e && (e = {
                        next: e
                    });
                    var t, i = e.next,
                        r = e.error,
                        o = e.complete;
                    n(0, (function(e, n) {
                        0 === e && (t = n), 1 === e && i && i(n), 1 !== e && 0 !== e || t(1), 2 === e && !n && o && o(), 2 === e && n && r && r(n)
                    }));
                    return function() {
                        t && t(2)
                    }
                }
        },
        Ee = function(e) {
            return function(n) {
                return function(t, i) {
                    if (0 === t) {
                        var r, o = 0;
                        n(0, (function(n, t) {
                            0 === n ? (r = t, i(0, a)) : 1 === n ? e > o && (o++, i(n, t), o === e && (i(2), r(2))) : i(n, t)
                        }))
                    }

                    function a(n, t) {
                        e > o && r(n, t)
                    }
                }
            }
        },
        Le = {},
        xe = function(e) {
            return function(n) {
                return function(t, i) {
                    if (0 === t) {
                        var r, o, a = !1,
                            u = Le;
                        n(0, (function(n, t) {
                            if (0 === n) return r = t, e(0, (function(e, n) {
                                if (0 !== e) return 1 === e ? (u = void 0, o(2), r(2), void(a && i(2))) : void(2 === e && (o = null, n && (u = n, r(2), a && i(e, n))));
                                (o = n)(1)
                            })), a = !0, i(0, (function(e, n) {
                                u === Le && (2 === e && o && o(2), r(e, n))
                            })), void(u !== Le && i(2, u));
                            2 === n && o(2), i(n, t)
                        }))
                    }
                }
            }
        };

    function Ae(n) {
        return new e((function(e, t) {
            Ce({
                next: e,
                error: t,
                complete: function() {
                    var e = Error("No elements in sequence.");
                    e.code = "NO_ELEMENTS", t(e)
                }
            })(function(e) {
                return function(n, t) {
                    if (0 === n) {
                        var i, r, o = !1,
                            a = !1;
                        e(0, (function(e, n) {
                            return 0 === e ? (i = n, void t(0, (function(e, n) {
                                2 === e && (a = !0), i(e, n)
                            }))) : 1 === e ? (o = !0, r = n, void i(1)) : void(2 === e && !n && o && (t(1, r), a) || t(e, n))
                        }))
                    }
                }
            }(n))
        }))
    }
    var ze = function(e, n, t) {
            return e(t = {
                path: n,
                exports: {},
                require: function(e, n) {
                    return function() {
                        throw Error("Dynamic requires are not currently supported by @rollup/plugin-commonjs")
                    }()
                }
            }, t.exports), t.exports
        }((function(e, n) {
            function t(e, n) {
                return e === n
            }

            function i(e, n, t) {
                if (null === n || null === t || n.length !== t.length) return !1;
                for (var i = n.length, r = 0; i > r; r++)
                    if (!e(n[r], t[r])) return !1;
                return !0
            }

            function r(e) {
                var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : t,
                    r = null,
                    o = null;
                return function() {
                    return i(n, r, arguments) || (o = e.apply(null, arguments)), r = arguments, o
                }
            }

            function o(e) {
                var n = Array.isArray(e[0]) ? e[0] : e;
                if (!n.every((function(e) {
                        return "function" == typeof e
                    }))) {
                    var t = n.map((function(e) {
                        return typeof e
                    })).join(", ");
                    throw Error("Selector creators expect all input-selectors to be functions, instead received the following types: [" + t + "]")
                }
                return n
            }

            function a(e) {
                for (var n = arguments.length, t = Array(n > 1 ? n - 1 : 0), i = 1; n > i; i++) t[i - 1] = arguments[i];
                return function() {
                    for (var n = arguments.length, i = Array(n), a = 0; n > a; a++) i[a] = arguments[a];
                    var u = 0,
                        c = i.pop(),
                        s = o(i),
                        d = e.apply(void 0, [function() {
                            return u++, c.apply(null, arguments)
                        }].concat(t)),
                        l = r((function() {
                            for (var e = [], n = s.length, t = 0; n > t; t++) e.push(s[t].apply(null, arguments));
                            return d.apply(null, e)
                        }));
                    return l.resultFunc = c, l.recomputations = function() {
                        return u
                    }, l.resetRecomputations = function() {
                        return u = 0
                    }, l
                }
            }
            n.__esModule = !0, n.defaultMemoize = r, n.createSelectorCreator = a, n.createStructuredSelector = function(e) {
                var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : u;
                if ("object" != typeof e) throw Error("createStructuredSelector expects first argument to be an object where each property is a selector, instead received a " + typeof e);
                var t = Object.keys(e);
                return n(t.map((function(n) {
                    return e[n]
                })), (function() {
                    for (var e = arguments.length, n = Array(e), i = 0; e > i; i++) n[i] = arguments[i];
                    return n.reduce((function(e, n, i) {
                        return e[t[i]] = n, e
                    }), {})
                }))
            };
            var u = n.createSelector = a(r)
        })),
        Oe = function(e, n) {
            if (!(e instanceof n)) throw new TypeError("Cannot call a class as a function")
        },
        Te = function() {
            function e() {
                Oe(this, e), this._cache = {}
            }
            return e.prototype.set = function(e, n) {
                this._cache[e] = n
            }, e.prototype.get = function(e) {
                return this._cache[e]
            }, e.prototype.remove = function(e) {
                delete this._cache[e]
            }, e.prototype.clear = function() {
                this._cache = {}
            }, e
        }();
    (function() {
        function e() {
            var n = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {},
                t = n.cacheSize;
            if (Oe(this, e), void 0 === t) throw Error("Missing the required property `cacheSize`.");
            if (!Number.isInteger(t) || 0 >= t) throw Error("The `cacheSize` property must be a positive integer value.");
            this._cache = {}, this._cacheOrdering = [], this._cacheSize = t
        }
        e.prototype.set = function(e, n) {
            (this._cache[e] = n, this._cacheOrdering.push(e), this._cacheOrdering.length > this._cacheSize) && this.remove(this._cacheOrdering[0])
        }, e.prototype.get = function(e) {
            return this._cache[e]
        }, e.prototype.remove = function(e) {
            var n = this._cacheOrdering.indexOf(e);
            n > -1 && this._cacheOrdering.splice(n, 1), delete this._cache[e]
        }, e.prototype.clear = function() {
            this._cache = {}, this._cacheOrdering = []
        }
    })(),
    function() {
        function e() {
            var n = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {},
                t = n.cacheSize;
            if (Oe(this, e), void 0 === t) throw Error("Missing the required property `cacheSize`.");
            if (!Number.isInteger(t) || 0 >= t) throw Error("The `cacheSize` property must be a positive integer value.");
            this._cache = {}, this._cacheOrdering = [], this._cacheSize = t
        }
        e.prototype.set = function(e, n) {
            (this._cache[e] = n, this._registerCacheHit(e), this._cacheOrdering.length > this._cacheSize) && this.remove(this._cacheOrdering[0])
        }, e.prototype.get = function(e) {
            return this._registerCacheHit(e), this._cache[e]
        }, e.prototype.remove = function(e) {
            this._deleteCacheHit(e), delete this._cache[e]
        }, e.prototype.clear = function() {
            this._cache = {}, this._cacheOrdering = []
        }, e.prototype._registerCacheHit = function(e) {
            this._deleteCacheHit(e), this._cacheOrdering.push(e)
        }, e.prototype._deleteCacheHit = function(e) {
            var n = this._cacheOrdering.indexOf(e);
            n > -1 && this._cacheOrdering.splice(n, 1)
        }
    }();

    function Pe() {
        for (var e = arguments.length, n = Array(e), t = 0; e > t; t++) n[t] = arguments[t];
        var i = Te;
        return function(e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
                r = void 0,
                o = void 0;
            "function" == typeof t ? (console.warn('[re-reselect] Deprecation warning: "selectorCreator" argument is discouraged and will be removed in the upcoming major release. Please use "options.selectorCreator" instead.'), r = new i, o = t) : (r = t.cacheObject || new i, o = t.selectorCreator || ze.createSelector);
            var a = function() {
                var t = e.apply(void 0, arguments);
                if ("string" == typeof t || "number" == typeof t) {
                    var i = r.get(t);
                    return void 0 === i && (i = o.apply(void 0, n), r.set(t, i)), i.apply(void 0, arguments)
                }
            };
            return a.getMatchingSelector = function() {
                var n = e.apply(void 0, arguments);
                return r.get(n)
            }, a.removeMatchingSelector = function() {
                var n = e.apply(void 0, arguments);
                r.remove(n)
            }, a.clearCache = function() {
                r.clear()
            }, a.resultFunc = n[n.length - 1], a
        }
    }
    var Se = function(e, n) {
            return n
        },
        Me = function(e, n) {
            return function(e) {
                return e.entities.chats.byIds
            }(e)[n]
        },
        je = Pe([function(e, n) {
            return Me(e, n).events.orderedIds
        }, function(e, n) {
            return Me(e, n).events.byIds
        }], (function(e, n) {
            return e.map((function(e) {
                return n[e]
            }))
        }))(Se),
        Ne = Pe([Me, je], (function(e, n) {
            return z({}, e, {
                events: n
            })
        }))(Se),
        De = function(e) {
            return e.entities.users.byIds
        },
        qe = function(e) {
            return De(e)[function(e) {
                return e.session.id
            }(e)]
        },
        Fe = function(e, n) {
            return De(e)[n]
        },
        We = function(e) {
            return qe(e).id
        },
        Be = (Pe([je, We], (function(e, n) {
            return f((function(e) {
                return e.delivered && e.author === n
            }), e)
        }))(Se), Pe([je, We], (function(e, n) {
            return f((function(e) {
                return e.seen && e.author === n
            }), e)
        }))(Se), {
            boosters: !0,
            form: !0,
            system_message: !0
        });
    ze.createSelector([je, function(e) {
        return qe(e).id
    }], (function(e, n) {
        return function(e, n, t) {
            for (var i = n; i >= 0; i--)
                if (e(t[i])) return i;
            return -1
        }((function(e) {
            return e.author === n && "message" === e.type && !(e.properties && "file" === e.properties.serverType) || !0 === e.seen && !Be[e.type] && !!e.serverId
        }), (t = e).length - 1, t);
        var t
    })), Pe([function(e, n) {
        return Me(e, n).participants
    }, De], (function(e, n) {
        return e.map((function(e) {
            return n[e]
        }))
    }))(Se);

    function He(e, n) {
        return void 0 === n ? e.application : e.application[n]
    }

    function Re(e, n) {
        if (null == e) return {};
        var t, i, r = {},
            o = Object.keys(e);
        for (i = 0; o.length > i; i++) 0 > n.indexOf(t = o[i]) && (r[t] = e[t]);
        return r
    }
    var Ve = "application/x-postmate-v1+json",
        Ge = 0,
        Ue = {
            handshake: 1,
            "handshake-reply": 1,
            call: 1,
            emit: 1,
            reply: 1,
            request: 1
        },
        Ye = function(e, n) {
            return ("string" != typeof n || e.origin === n) && (!!e.data && ("object" == typeof e.data && ("postmate" in e.data && (e.data.type === Ve && !!Ue[e.data.postmate]))))
        },
        Je = function() {
            function e(e) {
                var n = this;
                this.parent = e.parent, this.frame = e.frame, this.child = e.child, this.childOrigin = e.childOrigin, this.events = {}, this.listener = function(e) {
                    if (!Ye(e, n.childOrigin)) return !1;
                    var t = ((e || {}).data || {}).value || {},
                        i = t.name;
                    "emit" === e.data.postmate && i in n.events && n.events[i].call(n, t.data)
                }, this.parent.addEventListener("message", this.listener, !1)
            }
            var n = e.prototype;
            return n.get = function(e) {
                var n = this;
                return new $e.Promise((function(t) {
                    var i = ++Ge;
                    n.parent.addEventListener("message", (function e(r) {
                        r.data.uid === i && "reply" === r.data.postmate && (n.parent.removeEventListener("message", e, !1), t(r.data.value))
                    }), !1), n.child.postMessage({
                        postmate: "request",
                        type: Ve,
                        property: e,
                        uid: i
                    }, n.childOrigin)
                }))
            }, n.call = function(e, n) {
                this.child.postMessage({
                    postmate: "call",
                    type: Ve,
                    property: e,
                    data: n
                }, this.childOrigin)
            }, n.on = function(e, n) {
                this.events[e] = n
            }, n.destroy = function() {
                window.removeEventListener("message", this.listener, !1), this.frame.parentNode.removeChild(this.frame)
            }, e
        }(),
        Xe = function() {
            function e(e) {
                var n = this;
                this.model = e.model, this.parent = e.parent, this.parentOrigin = e.parentOrigin, this.child = e.child, this.child.addEventListener("message", (function(e) {
                    if (Ye(e, n.parentOrigin)) {
                        var t = e.data,
                            i = t.property,
                            r = t.uid,
                            o = t.data;
                        "call" !== e.data.postmate ? function(e, n) {
                            var t = "function" == typeof e[n] ? e[n]() : e[n];
                            return $e.Promise.resolve(t)
                        }(n.model, i).then((function(n) {
                            return e.source.postMessage({
                                property: i,
                                postmate: "reply",
                                type: Ve,
                                uid: r,
                                value: n
                            }, e.origin)
                        })) : i in n.model && "function" == typeof n.model[i] && n.model[i].call(n, o)
                    }
                }))
            }
            return e.prototype.emit = function(e, n) {
                this.parent.postMessage({
                    postmate: "emit",
                    type: Ve,
                    value: {
                        name: e,
                        data: n
                    }
                }, this.parentOrigin)
            }, e
        }(),
        $e = function() {
            function e(e) {
                var n = e.container,
                    t = void 0 === n ? void 0 !== t ? t : document.body : n,
                    i = e.model,
                    r = e.url,
                    o = e.iframeAllowedProperties;
                return this.parent = window, this.frame = document.createElement("iframe"), o && (this.frame.allow = o), t.appendChild(this.frame), this.child = this.frame.contentWindow || this.frame.contentDocument.parentWindow, this.model = i || {}, this.sendHandshake(r)
            }
            return e.prototype.sendHandshake = function(n) {
                var t, i = this,
                    r = function(e) {
                        var n = document.createElement("a");
                        n.href = e;
                        var t = n.protocol.length > 4 ? n.protocol : window.location.protocol,
                            i = n.host.length ? "80" === n.port || "443" === n.port ? n.hostname : n.host : window.location.host;
                        return n.origin || t + "//" + i
                    }(n),
                    o = 0;
                return new e.Promise((function(e, a) {
                    i.parent.addEventListener("message", (function n(o) {
                        return !!Ye(o, r) && ("handshake-reply" === o.data.postmate ? (clearInterval(t), i.parent.removeEventListener("message", n, !1), i.childOrigin = o.origin, e(new Je(i))) : a("Failed handshake"))
                    }), !1);
                    var u = function() {
                            o++, i.child.postMessage({
                                postmate: "handshake",
                                type: Ve,
                                model: i.model
                            }, r), 5 === o && clearInterval(t)
                        },
                        c = function() {
                            u(), t = setInterval(u, 500)
                        };
                    i.frame.attachEvent ? i.frame.attachEvent("onload", c) : i.frame.addEventListener("load", c), i.frame.src = n
                }))
            }, e
        }();
    $e.debug = !1, $e.Promise = function() {
        try {
            return window ? window.Promise : e
        } catch (e) {
            return null
        }
    }(), $e.Model = function() {
        function e(e) {
            return this.child = window, this.model = e, this.parent = this.child.parent, this.sendHandshakeReply()
        }
        return e.prototype.sendHandshakeReply = function() {
            var e = this;
            return new $e.Promise((function(n, t) {
                e.child.addEventListener("message", (function i(r) {
                    if (r.data.postmate) {
                        if ("handshake" === r.data.postmate) {
                            e.child.removeEventListener("message", i, !1), r.source.postMessage({
                                postmate: "handshake-reply",
                                type: Ve
                            }, r.origin), e.parentOrigin = r.origin;
                            var o = r.data.model;
                            return o && Object.keys(o).forEach((function(n) {
                                e.model[n] = o[n]
                            })), n(new Xe(e))
                        }
                        return t("Handshake Reply Failed")
                    }
                }), !1)
            }))
        }, e
    }();
    var Ke = function() {
        var e, n = {
                all: e = e || new Map,
                on: function(n, t) {
                    var i = e.get(n);
                    i ? i.push(t) : e.set(n, [t])
                },
                off: function(n, t) {
                    var i = e.get(n);
                    i && (t ? i.splice(i.indexOf(t) >>> 0, 1) : e.set(n, []))
                },
                emit: function(n, t) {
                    var i = e.get(n);
                    i && i.slice().map((function(e) {
                        e(t)
                    })), (i = e.get("*")) && i.slice().map((function(e) {
                        e(n, t)
                    }))
                }
            },
            t = n.all,
            i = Re(n, ["all"]);
        return z({}, i, {
            off: function(e, n) {
                e ? i.off(e, n) : t.clear()
            },
            once: function(e, n) {
                i.on(e, (function t(r, o) {
                    i.off(e, t), n(r, o)
                }))
            }
        })
    };
    $e.Promise = e;
    var Qe = function(n) {
        var t = n.methods,
            i = Re(n, ["methods"]);
        return new $e(i).then((function(n) {
            var i = n.on,
                o = n.call,
                a = function() {
                    for (var e = arguments.length, t = Array(e), i = 0; e > i; i++) t[i] = arguments[i];
                    return o.apply(n, t)
                },
                u = Ke(),
                c = {},
                s = {};
            return t.resolveRemoteCall = function(e) {
                var n = e.id,
                    t = e.value,
                    i = s[n];
                delete s[n], i(t)
            }, n.on = function(e, t) {
                u.on(e, t), c[e] || (c[e] = !0, function() {
                    for (var e = arguments.length, t = Array(e), r = 0; e > r; r++) t[r] = arguments[r];
                    i.apply(n, t)
                }(e, (function(n) {
                    u.emit(e, n)
                })))
            }, n.off = u.off, n.on("remote-call", (function(e) {
                var i = e.id,
                    r = e.method,
                    o = "function" == typeof t[r] ? t[r].apply(n, e.args) : void 0;
                o && "function" == typeof o.then ? o.then((function(e) {
                    a("resolveRemoteCall", {
                        id: i,
                        value: e
                    })
                })) : a("resolveRemoteCall", {
                    id: i,
                    value: o
                })
            })), n.emit = function(e, n) {
                a("emitEvent", {
                    event: e,
                    data: n
                })
            }, n._emit = u.emit, n.call = function(n) {
                for (var t = arguments.length, i = Array(t > 1 ? t - 1 : 0), r = 1; t > r; r++) i[r - 1] = arguments[r];
                return new e((function(e) {
                    var t = h(s);
                    s[t] = e, a("remoteCall", {
                        id: t,
                        method: n,
                        args: i
                    })
                }))
            }, r(n, t)
        }))
    };

    function Ze(e, n) {
        return null != n && null != e && "object" == typeof n && "object" == typeof e ? en(n, e) : e
    }

    function en(e, n) {
        var t;
        if (Array.isArray(e)) {
            t = e.slice(0, n.length);
            for (var r = 0; n.length > r; r++) void 0 !== n[r] && (t[r] = Ze(n[r], t[r]))
        } else
            for (var o in t = z({}, e), n) i(o, n) && (void 0 === n[o] ? delete t[o] : t[o] = Ze(n[o], t[o]));
        return t
    }
    var nn = function(n) {
            return new e((function(e) {
                n.on("state", (function t(i) {
                    n.off("state", t), n.state = i, e(i)
                })), n.on("state_diff", (function(e) {
                    n.state = en(n.state, e)
                })), n.on("store_event", (function(e) {
                    n._emit(e[0], e[1])
                })), n.call("startStateSync")
            }))
        },
        tn = "chat-widget",
        rn = "chat-widget-minimized",
        on = "LiveChat chat widget",
        an = "OpenWidget widget",
        un = {
            opacity: 0,
            visibility: "hidden",
            zIndex: -1
        },
        cn = {
            opacity: 1,
            visibility: "visible",
            zIndex: 2147483639
        },
        sn = {
            id: tn + "-container",
            style: z({}, un, {
                position: "fixed",
                bottom: 0,
                width: 0,
                height: 0,
                maxWidth: "100%",
                maxHeight: "100%",
                minHeight: 0,
                minWidth: 0,
                backgroundColor: "transparent",
                border: 0,
                overflow: "hidden"
            })
        },
        dn = (z({}, sn.style), {
            id: "livechat-eye-catcher",
            style: {
                position: "fixed",
                visibility: "visible",
                zIndex: 2147483639,
                background: "transparent",
                border: 0,
                padding: "10px 10px 0 0",
                float: "left",
                marginRight: "-10px",
                webkitBackfaceVisibility: "hidden"
            }
        }),
        ln = {
            style: {
                position: "absolute",
                display: "none",
                top: "-5px",
                right: "-5px",
                width: "16px",
                lineHeight: "16px",
                textAlign: "center",
                cursor: "pointer",
                textDecoration: "none",
                color: "#000",
                fontSize: "20px",
                fontFamily: "Arial, sans-serif",
                borderRadius: "50%",
                backgroundColor: "rgba(255, 255, 255, 0.5)"
            }
        },
        fn = {
            id: "livechat-eye-catcher-img",
            style: {
                display: "block",
                overflow: "hidden",
                cursor: "pointer"
            }
        },
        pn = {
            alt: "",
            style: {
                display: "block",
                border: 0,
                float: "right"
            }
        },
        mn = {
            position: "absolute",
            top: "0px",
            left: "0px",
            bottom: "0px",
            right: "0px"
        },
        vn = {
            allowtransparency: !0,
            id: tn,
            name: tn,
            title: on,
            scrolling: "no",
            style: {
                width: "100%",
                height: "100%",
                "min-height": "0px",
                "min-width": "0px",
                margin: "0px",
                padding: "0px",
                "background-image": "none",
                "background-position-x": "0%",
                "background-position-y": "0%",
                "background-size": "initial",
                "background-attachment": "scroll",
                "background-origin": "initial",
                "background-clip": "initial",
                "background-color": "rgba(0, 0, 0, 0)",
                "border-width": "0px",
                float: "none",
                "color-scheme": "normal"
            }
        },
        hn = z({}, vn, {
            id: rn,
            name: rn
        }),
        gn = e.resolve(),
        _n = function(e) {
            gn.then(e)
        },
        wn = function(e) {
            return _n((function() {
                throw e
            }))
        },
        yn = function(e) {
            return function(n) {
                var t = window.LC_API || {};
                if ("function" == typeof n && n(t), "function" == typeof t[e]) try {
                    t[e]()
                } catch (e) {
                    wn(e)
                }
            }
        },
        bn = function(e, n) {
            if (!e) return !0;
            var t = function(e) {
                var n = e.match(V);
                return n && n[1]
            }(n);
            return !!t && [].concat(e, ["livechatinc.com", "lc.chat"]).some((function(e) {
                var n = t.length - e.length;
                return -1 !== t.indexOf(e, n) && (t.length === e.length || "." === t.charAt(n - 1))
            }))
        },
        kn = [],
        In = function(e) {
            30 > kn.length || (kn = kn.slice(1));
            for (var n = arguments.length, t = Array(n > 1 ? n - 1 : 0), i = 1; n > i; i++) t[i - 1] = arguments[i];
            kn.push({
                name: e,
                args: t
            })
        },
        Cn = "always visible",
        En = "always hide",
        Ln = "hide until it gets activated";

    function xn(e, n, t) {
        return function(i) {
            var r, o = (void 0 === i ? {} : i).prettyPrint,
                a = void 0 === o || o,
                c = n.analytics.googleAnalytics.trackerName,
                s = !bn(t.allowedDomains, document.location.href),
                d = [
                    ["window.open", !/native code/.test(window.open)],
                    ["document.domain", window.location.hostname !== document.domain],
                    ["window.frames", window.frames !== window],
                    ["JSON.stringify", !/native code/.test(window.JSON.stringify)],
                    ["JSON.parse", !/native code/.test(window.JSON.parse)],
                    ["Object.keys", !/native code/.test(Object.keys)],
                    ["console.log", !/native code/.test(console.log)]
                ].filter((function(e) {
                    return e[1]
                })).map((function(e) {
                    return e[0]
                })),
                l = u(vn.style).some((function(n) {
                    return e.frame.style.getPropertyValue(n) !== vn.style[n]
                })),
                f = function(e) {
                    var n = "";
                    return {
                        desktopVisibility: n = e.initiallyHidden ? e.disabledMinimized ? En : Ln : Cn,
                        mobileVisibility: e.hasCustomMobileSettings ? e.hiddenOnMobile ? En : e.initiallyHiddenOnMobile ? e.disabledMinimizedOnMobile ? En : Ln : Cn : n
                    }
                }(t.__unsafeProperties.group),
                p = f.desktopVisibility,
                m = f.mobileVisibility,
                v = [{
                    msg: "language: " + t.__unsafeProperties.group.language
                }, {
                    msg: "region: " + t.region
                }, {
                    msg: "license number: " + window.__lc.license
                }, {
                    msg: "group id: " + e.state.application.group
                }, {
                    msg: "hidden: " + (e.state.application.hidden ? "yes" : "no")
                }, {
                    msg: "tracker name: " + c
                }, {
                    msg: "desktop visibility: " + p,
                    isNotStandard: p !== Cn
                }, {
                    msg: "mobile visibility: " + m,
                    isNotStandard: m !== Cn
                }, {
                    msg: "chat between groups: " + (window.__lc.chat_between_groups ? "yes" : "no")
                }, {
                    msg: "is iframe inline style modified: " + (l ? "yes" : "no"),
                    isNotStandard: l
                }, {
                    msg: "is current domain not allowed by the allowed domains: " + (s ? "yes" : "no"),
                    isNotStandard: s
                }, {
                    msg: "overrides: " + (d.length > 0 ? d.join(",\n") : "none"),
                    isNotStandard: d.length > 0
                }, {
                    msg: "call history: " + (kn.length > 0 ? kn.map((function(e) {
                        return e.name + "(" + e.args.join(", ") + ")"
                    })).join(",\n") : "none"),
                    isNotStandard: kn.length > 0
                }];
            if (!a) return v;
            var h = v.filter((function(e) {
                    return e.isNotStandard
                })),
                g = v.filter((function(e) {
                    return !e.isNotStandard
                })),
                _ = [].concat(h, g);
            return -1 !== d.indexOf("console.log") ? _.map((function(e) {
                return e.msg
            })).join("\n\n") : ((r = console).log.apply(r, [_.map((function(e) {
                return "%c" + e.msg
            })).join("\n\n")].concat(_.map((function(e) {
                return e.isNotStandard ? "color: red;" : ""
            })))), "")
        }
    }

    function An(e) {
        for (var n = arguments.length, t = Array(n > 1 ? n - 1 : 0), i = 1; n > i; i++) t[i - 1] = arguments[i];
        return function() {
            "function" == typeof e && e.apply(void 0, t)
        }
    }

    function zn(e, n, t) {
        return fe(le(e, t), ce((function(e) {
            return _n(An(n[t], e))
        })))
    }

    function On(e) {
        return E(e.filter(Boolean).map((function(e) {
            var n;
            return (n = {})[e.name] = e.value + "", n
        })))
    }

    function Tn(e, n) {
        var t, r = l((function(e) {
            return !e[1]
        }), M((t = n, ["name", "email"].reduce((function(e, n) {
            return i(n, t) && (e[n] = t[n]), e
        }), {}))));
        if (r) {
            var o = r[1];
            console.error("[LiveChatWidget] Customer " + r[0] + " cannot be set to " + ("" === o ? "empty string" : o))
        } else e.call("storeMethod", ["requestUpdateUser", We(e.state), n])
    }

    function Pn(e, n) {
        e.call("storeMethod", ["requestSetUserProperties", We(e.state), n])
    }

    function Sn(e) {
        return null != e ? e + "" : null
    }
    var Mn = function(e, n) {
        return He(e, "visibility").state === n
    };

    function jn(e, n) {
        return re((t = function() {
            return fe(le(e, "state_diff"), me((function() {
                return e.state
            })), pe(e.state), me(n), ae(T), xe(le(e, "unbind")))
        }, function(e, n) {
            if (0 === e) {
                var i = !1;
                n(0, (function(e) {
                    2 === e && (i = !0)
                })), n(1, t()), i || n(2)
            }
        }));
        var t
    }
    var Nn = function(e, n) {
        return fe(jn(e, n), Ie(1))
    };

    function Dn(e) {
        return fe(jn(e, (function(e) {
            return He(e, "availability")
        })), ue(b))
    }
    var qn = "liveChatChatId";

    function Fn(e) {
        return fe(jn(e, (function(e) {
            return Ne(e, qn).active
        })), Ie(1), ve((function(n) {
            return n ? fe(jn(e, (function(e) {
                return Ne(e, qn).properties.currentAgent
            })), ue(Boolean), me((function() {
                return n
            })), Ee(1)) : _e(n)
        })))
    }

    function Wn(e, n) {
        return fe(le(e, "state_diff"), me((function() {
            return He(e.state, "readyState")
        })), ue((function(e) {
            return e === n
        })), Ee(1), ke)
    }
    var Bn = "not_ready",
        Hn = "ready",
        Rn = "bootstrapped",
        Vn = Object.freeze({
            __proto__: null,
            FRA_A: "fra-a",
            FRA_B: "fra-b",
            FRA: "fra",
            DAL: "dal"
        });

    function Gn(e, n) {
        return fe(Wn(e, Hn), ve(n))
    }

    function Un(e, n) {
        return fe(Wn(e, Rn), ve(n))
    }

    function Yn(e, n) {
        return fe(jn(e, (function(e) {
            return He(e, "invitation")
        })), me((function(e) {
            return e[n]
        })), ue(b), we, ue((function(e) {
            return e[1].length > e[0].length
        })), me((function(e) {
            return k(e[1])
        })))
    }
    var Jn = function(e) {
            return e.actingAsDirectLink || e.isInCustomContainer
        },
        Xn = "liveChatChatId",
        $n = function(e) {
            for (var n = arguments.length, t = Array(n > 1 ? n - 1 : 0), i = 1; n > i; i++) t[i - 1] = arguments[i];
            return _n(An.apply(void 0, [e].concat(t)))
        };

    function Kn(e, n, t) {
        window.LC_API = window.LC_API || {};
        var i = window.LC_API;
        fe(function(e) {
            return fe(jn(e, (function(e) {
                return Mn(e, "maximized")
            })), ue(b))
        }(e), ce((function() {
            return $n(i.on_chat_window_opened)
        }))), fe(Un(e, (function() {
            return function(e) {
                return fe(jn(e, (function(e) {
                    return Mn(e, "minimized")
                })), Ie(1), ue(b))
            }(e)
        })), ce((function() {
            return $n(i.on_chat_window_minimized)
        }))), fe(function(e) {
            return fe(jn(e, (function(e) {
                return Mn(e, "hidden")
            })), ue(b))
        }(e), ce((function() {
            return $n(i.on_chat_window_hidden)
        }))), fe(Dn(e), ce((function(e) {
            return $n(i.on_chat_state_changed, {
                state: "online" === e ? "online_for_chat" : "offline"
            })
        }))), fe(Un(e, (function() {
            return Fn(e)
        })), ue(b), ce((function() {
            return $n(i.on_chat_started, {
                agent_name: Fe(e.state, Ne(e.state, Xn).properties.currentAgent).name
            })
        }))), fe(Un(e, (function() {
            return Fn(e)
        })), ue(y), ce((function() {
            return $n(i.on_chat_ended)
        }))), fe(Un(e, (function() {
            return le(e, "on_message")
        })), ce((function(e) {
            return $n(i.on_message, e)
        }))), fe(le(e, "widget_resize"), ce((function(e) {
            return $n(i.on_widget_resize, e.size)
        }))), fe(function(e) {
            return fe(le(e, "add_event"), ue((function(e) {
                return e.event.properties.invitation
            })), me((function(n) {
                var t = n.event;
                return {
                    event: t,
                    author: Fe(e.state, t.author)
                }
            })))
        }(e), ce((function(e) {
            var n = e.author,
                t = e.event,
                r = t.properties;
            $n(i.on_message, {
                text: r.text,
                timestamp: t.timestamp,
                invitation: !0,
                user_type: "agent",
                agent_login: n.id,
                agent_name: n.name,
                received_first_time: r.receivedFirstTime
            })
        }))), zn(e, i, "on_postchat_survey_submitted"), zn(e, i, "on_prechat_survey_submitted"), zn(e, i, "on_rating_comment_submitted"), zn(e, i, "on_rating_submitted"), zn(e, i, "on_ticket_created"), i.set_custom_variables = function(n) {
            In("LC_API.set_custom_variables", n), Pn(e, On(n))
        }, i.update_custom_variables = function(n) {
            In("LC_API.update_custom_variables", n), Tn(e, {
                properties: On(n)
            })
        }, i.set_visitor_name = function(n) {
            In("LC_API.set_visitor_name", n), Tn(e, {
                name: Sn(n)
            })
        }, i.set_visitor_email = function(n) {
            In("LC_API.set_visitor_email", n), Tn(e, {
                email: Sn(n)
            })
        }, i.open_chat_window = i.show_full_view = i.open_mobile_window = function() {
            In("LC_API.open_chat_window"), e.maximize()
        }, i.minimize_chat_window = function() {
            In("LC_API.minimize_chat_window"), Jn(n) || e.minimize()
        }, i.hide_eye_catcher = function() {
            In("LC_API.hide_eye_catcher"), e.call("hideEyeCatcher")
        }, i.hide_chat_window = function() {
            In("LC_API.hide_chat_window"), Jn(n) || e.hide()
        }, i.agents_are_available = function() {
            return In("LC_API.agents_are_available"), "online" === He(e.state, "availability")
        }, i.chat_window_maximized = function() {
            return In("LC_API.chat_window_maximized"), Mn(e.state, "maximized")
        }, i.chat_window_minimized = function() {
            return In("LC_API.chat_window_minimized"), Mn(e.state, "minimized")
        }, i.chat_window_hidden = function() {
            return In("LC_API.chat_window_hidden"), Mn(e.state, "hidden")
        }, i.visitor_queued = function() {
            return In("LC_API.visitor_queued"), Ne(e.state, Xn).properties.queued
        }, i.chat_running = function() {
            return In("LC_API.chat_running"), Ne(e.state, Xn).active
        }, i.visitor_engaged = function() {
            return In("LC_API.visitor_engaged"), i.visitor_queued() || i.chat_running() || !!Ne(e.state, Xn).properties.fakeAgentMessageId
        }, i.get_window_type = function() {
            return In("LC_API.get_window_type"), "embedded"
        }, i.close_chat = function() {
            In("LC_API.close_chat"), e.call("storeMethod", ["requestUpdateChat", Xn, {
                active: !1
            }])
        }, i.diagnose = xn(e, n, t), i.get_last_visit_timestamp = function() {
            return He(e.state).clientLastVisitTimestamp
        }, i.get_visits_number = function() {
            return He(e.state).clientVisitNumber
        }, i.get_page_views_number = function() {
            return He(e.state).clientPageViewsCount
        }, i.get_chats_number = function() {
            return He(e.state).clientChatNumber
        }, i.get_visitor_id = function() {
            return qe(e.state).serverId
        }, i.get_chat_id = function() {
            return Ne(e.state, Xn).serverId
        }, i.trigger_sales_tracker = function(e, n) {
            var t = o(n) ? n : [];
            "string" == typeof e && "" !== e && i.set_custom_variables([].concat(t, [{
                name: "__sales_tracker_" + e,
                value: "1"
            }]))
        }, i.scriptTagVersion = function() {
            return "LiveChatWidget" in window ? window.LiveChatWidget._v : "1.0"
        }, ["on", "off", "call", "get"].forEach((function(e) {
            i[e] = function() {
                var n = "LiveChatWidget" in window ? 'call it on the new "LiveChatWidget" global object.' : "upgrade your snippet code. You can do it by going to: https://my.livechatinc.com/settings/code";
                console.warn('[LiveChatWidget] In order to use "' + e + '" function you need to ' + n)
            }
        })), i.disable_sounds = x
    }
    var Qn = {
            handler: null,
            setHandler: function(e) {
                this.handler = e
            },
            navigate: function(e) {
                var n = this;
                _n((function() {
                    window.location.origin === U(e) && "function" == typeof n.handler ? n.handler(Q(e)) : window.open(e, "_blank")
                }))
            }
        },
        Zn = "liveChatChatId",
        et = function(e) {
            var n, t = e.trackerId,
                i = e.variables;
            return z({}, c(String, void 0 === i ? {} : i), ((n = {})["__sales_tracker_" + t] = "1", n))
        },
        nt = function(e) {
            var n = e.id;
            return z({
                uniqueId: e.uniqueId
            }, n && {
                id: n
            })
        },
        tt = function(e, n) {
            return g(null, "properties", f((function(e) {
                return e.properties.uniqueId === n
            }), je(e.state, Zn)))
        },
        it = function(e) {
            return n = function(e) {
                if ("call" !== e[0]) return "other";
                switch (e[1][0]) {
                    case "set_customer_email":
                        return "email";
                    case "set_customer_name":
                        return "name";
                    case "set_session_variables":
                    case "trigger_sales_tracker":
                    case "update_session_variables":
                        return "fields";
                    case "destroy":
                    case "hide":
                    case "maximize":
                    case "minimize":
                        return "visibility"
                }
            }, Object.keys(t = e).reduce((function(e, i) {
                var r = t[i],
                    o = n(r);
                return e[o] = e[o] || [], e[o].push(r), e
            }), {});
            var n, t
        };

    function rt(e, n, t) {
        var i, r = Ke(),
            o = window.LiveChatWidget || window.OpenWidget,
            a = function(e, n) {
                var t;
                return (t = {
                    get: g,
                    call: w,
                    on: m,
                    once: v,
                    off: r.off
                })[e].apply(t, n)
            },
            u = function(e, n) {
                return _n((function() {
                    return r.emit(e, n)
                }))
            },
            d = function(e) {
                void 0 === e && (e = []);
                var n = k(e);
                if (n) {
                    var t = n[1];
                    w(t[0], t[1])
                }
            },
            f = it(o._q);

        function p(n, t, i) {
            switch (t) {
                case "new_event":
                case "form_submitted":
                case "greeting_hidden":
                case "rating_submitted":
                case "visibility_changed":
                case "greeting_displayed":
                case "availability_changed":
                case "customer_status_changed":
                case "rich_message_button_clicked":
                    return void r[n](t, i);
                case "ready":
                    return void(He(e.state, "readyState") !== Bn ? _n((function() {
                        return i({
                            state: h("state"),
                            customerData: h("customer_data")
                        })
                    })) : r[n](t, i));
                default:
                    return void console.error('[LiveChatWidget] callback "' + t + '" does not exist.')
            }
        }

        function m(e, n) {
            In("LiveChatWidget.on", "'" + e + "'", n), p("on", e, n)
        }

        function v(e, n) {
            In("LiveChatWidget.once", "'" + e + "'", n), p("once", e, n)
        }

        function h(n) {
            switch (n) {
                case "state":
                    var t = He(e.state);
                    return {
                        availability: t.availability,
                        visibility: t.visibility.state
                    };
                case "chat_data":
                    var i = Ne(e.state, Zn),
                        r = i.properties;
                    return {
                        chatId: i.serverId || null,
                        threadId: (i.active || r.ended) && r.lastThread || null
                    };
                case "customer_data":
                    var o = qe(e.state),
                        a = o.serverId,
                        u = o.name,
                        c = o.email,
                        d = o.properties,
                        f = He(e.state).isReturning,
                        p = Ne(e.state, Zn),
                        m = p.active,
                        v = p.properties,
                        h = v.queued,
                        g = v.fakeAgentMessageId,
                        _ = l((function(e) {
                            return e.id === g
                        }), p.events);
                    return {
                        name: u,
                        email: c,
                        isReturning: f,
                        sessionVariables: d,
                        id: a,
                        status: h ? "queued" : m ? "chatting" : _ && _.properties.invitation ? "invited" : "browsing"
                    };
                case "features":
                    return s(He(e.state).config.features);
                default:
                    return void console.error('[LiveChatWidget] property "' + n + '" not exists.')
            }
        }

        function g(e) {
            return In("LiveChatWidget.get", "'" + e + "'"), h(e)
        }

        function w(t, i) {
            switch (In.apply(void 0, ["LiveChatWidget.call", "'" + t + "'"].concat(i)), t) {
                case "hide":
                case "maximize":
                case "minimize":
                    if (Jn(n)) return;
                    return void e[t](i);
                case "destroy":
                    return e.kill(), delete window.__lc_inited, delete window.LC_API, void delete window.LiveChatWidget;
                case "set_session_variables":
                    return void Pn(e, c(String, i));
                case "set_customer_name":
                    return void Tn(e, {
                        name: Sn(i)
                    });
                case "set_customer_email":
                    return void Tn(e, {
                        email: Sn(i)
                    });
                case "update_session_variables":
                    return void Tn(e, {
                        properties: c(String, i)
                    });
                case "trigger_sales_tracker":
                    return void Pn(e, et(i));
                case "hide_greeting":
                    return void e.call("hideGreeting");
                case "set_navigation_handler":
                    return void Qn.setHandler(i);
                default:
                    return void console.error('[LiveChatWidget] method "' + t + '" not exists.')
            }
        }
        void 0 === (i = f.other) && (i = []), i.forEach((function(e) {
                a(e[0], e[1])
            })), d(f.visibility), d(f.name), d(f.email),
            function(e) {
                var n, t = (void 0 === (n = e) && (n = []), n.reduce((function(e, n) {
                        var t = n[1],
                            i = t[1];
                        switch (t[0]) {
                            case "set_session_variables":
                                return e.mode = "set", e.properties = i, e;
                            case "trigger_sales_tracker":
                                return e.mode = "set", e.properties = et(i), e;
                            case "update_session_variables":
                                return "none" === e.mode && (e.mode = "update"), e.properties = z({}, e.properties, i), e
                        }
                    }), {
                        mode: "none"
                    })),
                    i = t.mode;
                "none" !== i && w(i + "_session_variables", t.properties)
            }(f.fields), o._q = [], o._h = a, o.scriptTagVersion = function() {
                return o._v
            }, o.diagnose = xn(e, n, t), fe(Wn(e, Rn), ce((function() {
                var e;
                e = function(e) {
                    return "function" == typeof e && _n((function() {
                        return e(o)
                    }))
                }, Array.isArray(window.__lc_onready) && (window.__lc_onready.forEach(e), window.__lc_onready = {
                    push: e
                }), u("ready", {
                    state: h("state"),
                    customerData: h("customer_data")
                })
            }))), fe(Un(e, (function() {
                return Dn(e)
            })), ce((function(e) {
                return u("availability_changed", {
                    availability: e
                })
            }))), fe(Un(e, (function() {
                return Nn(e, (function() {
                    return h("state").visibility
                }))
            })), ce((function(e) {
                u("visibility_changed", {
                    visibility: e
                })
            }))), fe(Un(e, (function() {
                return Nn(e, (function() {
                    return h("customer_data").status
                }))
            })), ce((function(e) {
                return u("customer_status_changed", {
                    status: e
                })
            }))), fe(Un(e, (function() {
                return Yn(e, "hiddenIds")
            })), me((function(n) {
                return tt(e, n)
            })), ue(b), ce((function(e) {
                return u("greeting_hidden", nt(e))
            }))), fe(Un(e, (function() {
                return Yn(e, "displayedIds")
            })), me((function(n) {
                return tt(e, n)
            })), ue(b), ce((function(e) {
                return u("greeting_displayed", nt(e))
            }))), fe(le(e, "on_rating_submitted"), ce((function(e) {
                return u("rating_submitted", e)
            }))), fe(de(le(e, "add_event"), le(e, "send_event")), ue((function(e) {
                return _(e.event.type, ["message", "emoji", "rich_message", "file"])
            })), me((function(n) {
                var t = n.event,
                    i = t.timestamp,
                    r = t.properties,
                    o = Fe(e.state, t.author),
                    a = !0 === r.invitation;
                return z({
                    timestamp: i,
                    type: t.type,
                    author: {
                        id: o.serverId,
                        type: o.id === We(e.state) ? "customer" : "agent"
                    }
                }, a && {
                    greeting: nt(r)
                })
            })), ce((function(e) {
                return u("new_event", e)
            }))), fe(de(fe(le(e, "send_event"), me((function(e) {
                var n = e.event,
                    t = n.type,
                    i = n.properties;
                if ("rich_message_postback" === t) return {
                    postbackId: "postback" in i ? i.postback.id : i.id,
                    eventId: i.eventId
                };
                if ("message" === t && i.triggeredBy) {
                    var r = i.triggeredBy;
                    return {
                        postbackId: r.button.postbackId,
                        eventId: r.event
                    }
                }
                return null
            })), ue(b)), fe(le(e, "rich_greeting_button_clicked"), me((function(e) {
                var n = e.event;
                return {
                    eventId: n.id,
                    postbackId: e.button.postbackId,
                    greeting: nt(n.properties)
                }
            })))), ce((function(e) {
                return u("rich_message_button_clicked", e)
            }))), fe(de(fe(le(e, "on_ticket_created"), me((function() {
                return "ticket"
            }))), fe(le(e, "on_prechat_survey_submitted"), me((function() {
                return "prechat"
            }))), fe(le(e, "on_postchat_survey_submitted"), me((function() {
                return "postchat"
            })))), ce((function(e) {
                return u("form_submitted", {
                    type: e
                })
            })))
    }
    var ot = function() {
            return window.GoogleAnalyticsObject || "ga"
        },
        at = function(e) {
            var n = e.event,
                t = e.label,
                i = e.nonInteraction,
                r = e.trackerName,
                o = window[ot()];
            o && "function" == typeof o && o([r, "send"].filter(Boolean).join("."), {
                hitType: "event",
                eventCategory: "LiveChat",
                eventAction: n,
                eventLabel: t,
                nonInteraction: i
            })
        },
        ut = {
            ga: at,
            gaAll: function(e) {
                var n = window[ot()];
                if (n && "function" == typeof n.getAll) {
                    var t = n.getAll();
                    o(t) && t.forEach((function(n) {
                        at(z({}, e, {
                            trackerName: n && "function" == typeof n.get ? n.get("name") : null
                        }))
                    }))
                }
            },
            gaq: function(e) {
                var n = window._gaq;
                n && "function" == typeof n.push && n.push(["_trackEvent", "LiveChat", e.event, e.label, null, e.nonInteraction])
            },
            gtm: function(e) {
                var n = window.dataLayer;
                n && "function" == typeof n.push && n.push({
                    event: "LiveChat",
                    eventCategory: "LiveChat",
                    eventAction: e.event,
                    eventLabel: e.label,
                    nonInteraction: e.nonInteraction
                })
            },
            pageTracker: function(e) {
                var n = window.pageTracker;
                n && "function" == typeof n._trackEvent && n._trackEvent("LiveChat", e.event, e.label, null, e.nonInteraction)
            },
            urchinTracker: function(e) {
                var n = window.urchinTracker;
                n && "function" == typeof n && n(e.event)
            },
            gtag: function(e) {
                var n = window.gtag;
                n && "function" == typeof n && n("event", e.event, {
                    event_category: "LiveChat",
                    event_label: e.label,
                    non_interaction: e.nonInteraction
                })
            }
        },
        ct = function(e) {
            var n = e.version,
                t = e.sendToAll;
            if (n && "function" == typeof ut[n]) return t && "ga" === n ? "gaAll" : n;
            if ("object" == typeof window.pageTracker && "function" == typeof window.pageTracker._trackEvent) return "pageTracker";
            if ("function" == typeof window.urchinTracker) return "urchinTracker";
            if ("function" == typeof window.gtag) return "gtag";
            if (!e.omitGtm && "object" == typeof window.dataLayer && "function" == typeof window.dataLayer.push) return "gtm";
            if ("object" == typeof window._gaq) return "gaq";
            if (window.GoogleAnalyticsObject && "string" == typeof window.GoogleAnalyticsObject) return t ? "gaAll" : "ga";
            if ("function" == typeof window.ga) {
                var i = !1;
                if (window.ga((function(e) {
                        i = "object" == typeof e
                    })), i) return t ? "gaAll" : "ga"
            }
            return null
        },
        st = {
            Chat: "LiveChat Chat started",
            "Automated greeting": "LiveChat Automated greeting displayed",
            "Ticket form": "LiveChat Ticket form displayed",
            "Ticket form filled in": "LiveChat Ticket form filled in",
            "Pre-chat survey": "LiveChat Pre-chat survey displayed",
            "Pre-chat survey filled in": "LiveChat Pre-chat survey filled in",
            "Post-chat survey": "LiveChat Post-chat survey displayed",
            "Post-chat survey filled in": "LiveChat Post-chat survey filled in"
        },
        dt = function() {
            return window.mixpanel && "function" == typeof window.mixpanel.track && "function" == typeof window.mixpanel.register
        },
        lt = {
            googleAnalytics: function(e) {
                var n = e.trackerName;
                return n ? ut[n] : null
            },
            kissmetrics: function() {
                return null
            },
            mixpanel: function() {
                if (!dt()) return null;
                return function(e) {
                    var n = e.event,
                        t = e.eventData,
                        i = e.persistentData;
                    if (dt()) {
                        var r = window.mixpanel;
                        i && (r.register(i), !dt()) || n in st && r.track(st[n], t)
                    }
                }
            }
        },
        ft = function(e, n) {
            var t = n.analytics,
                i = Object.keys(t).filter((function(e) {
                    return t[e].enabled
                })).map((function(e) {
                    var n = t[e],
                        i = lt[e];
                    try {
                        return i(n)
                    } catch (e) {
                        return wn(e), null
                    }
                })).filter(Boolean);
            if (0 !== i.length) {
                var r = function(n, t) {
                    var r = void 0 === t ? {} : t,
                        o = r.group,
                        a = void 0 === o ? He(e.state, "group") : o,
                        u = r.nonInteraction,
                        c = void 0 !== u && u,
                        s = r.eventData,
                        d = void 0 === s ? {} : s,
                        l = r.persistentData,
                        f = void 0 === l ? null : l,
                        p = r.useDataAsLabel,
                        m = 0 !== a ? "Group ID: " + a : "(no group)",
                        v = void 0 !== p && p ? M(d).map((function(e) {
                            return e[0] + ": " + e[1]
                        })).join(", ") : m;
                    i.forEach((function(e) {
                        try {
                            e({
                                event: n,
                                nonInteraction: c,
                                label: v,
                                eventData: z({}, d, {
                                    group: m
                                }),
                                persistentData: f
                            })
                        } catch (e) {
                            wn(e)
                        }
                    }))
                };
                fe(jn(e, (function(e) {
                    return He(e, "readyState")
                })), ue((function(e) {
                    return e === Hn
                })), Ee(1), ve((function() {
                    return Fn(e)
                })), ue(Boolean), ce((function() {
                    var n = qe(e.state);
                    r("Chat", {
                        eventData: {
                            email: n.email,
                            name: n.name
                        },
                        persistentData: {
                            "performed chat": !0
                        }
                    })
                }))), e.on("add_event", (function(e) {
                    var n = e.event.properties;
                    n.invitation && n.receivedFirstTime && r("Automated greeting", {
                        nonInteraction: !0
                    })
                })), e.on("on_chat_booster_launched", (function(e) {
                    var n = e.title;
                    r("Chat Booster Launched: " + n, {
                        eventData: {
                            appId: e.id,
                            title: n
                        }
                    })
                })), e.on("on_prechat_survey_submitted", (function() {
                    r("Pre-chat survey filled in")
                })), e.on("on_postchat_survey_submitted", (function() {
                    r("Post-chat survey filled in")
                })), e.on("on_ticket_created", (function(e) {
                    r("Ticket form filled in", {
                        eventData: {
                            email: e.visitor_email
                        }
                    })
                })), e.on("rich_greeting_button_clicked", (function(e) {
                    r("Rich greeting button clicked", {
                        eventData: {
                            buttonText: e.button.text,
                            greetingId: e.event.properties.id
                        },
                        useDataAsLabel: !0
                    })
                })), ["prechat", "postchat", "ticket", "offline"].forEach((function(n) {
                    var t;
                    fe(de(le(e, "set_default_view"), le(e, "set_current_view")), ue((function(e) {
                        return e.viewInfo && "Chat" === e.viewInfo.view && e.viewInfo.default === n
                    })), xe(le(e, "unbind")), (t = function() {
                        var t, i, r, o, a = {
                                prechat: ["on_prechat_survey_submitted", "Pre-chat survey"],
                                postchat: ["on_postchat_survey_submitted", "Post-chat survey"],
                                ticket: ["on_ticket_created", "Ticket form"],
                                offline: ["on_ticket_created", "Ticket form"]
                            }[n],
                            u = a[0];
                        return fe(function() {
                            for (var e = arguments.length, n = Array(e), t = 0; e > t; t++) n[t] = arguments[t];
                            return function(e, t) {
                                if (0 === e) {
                                    var i = n.length;
                                    if (0 === i) return t(0, (function() {})), void t(2);
                                    var r, o = 0,
                                        a = function(e, n) {
                                            r(e, n)
                                        };
                                    ! function e() {
                                        o !== i ? n[o](0, (function(n, i) {
                                            0 === n ? (r = i, 0 === o ? t(0, a) : r(1)) : 2 === n && i ? t(2, i) : 2 === n ? (o++, e()) : t(n, i)
                                        })) : t(2)
                                    }()
                                }
                            }
                        }(_e(a[1]), ge), (t = fe(jn(e, (function(e) {
                            return Mn(e, "maximized")
                        })), ue(Boolean)), o = void 0 === (r = (void 0 === i ? {} : i).size) ? 100 : r, function(e) {
                            return function(n, i) {
                                var r = [];
                                if (0 === n) {
                                    var a, u, c = !1;
                                    e(0, (function(e, n) {
                                        if (0 === e && (a = n, t(0, (function(e, n) {
                                                if (0 === e)(u = n)(1);
                                                else if (1 === e) {
                                                    c = !0, u(2);
                                                    var t = r.slice();
                                                    r.length = 0, t.forEach((function(e) {
                                                        return i(1, e)
                                                    }))
                                                }
                                            }))), 1 === e) return c ? void i(1, n) : (r.push(n), r.length > o && r.shift(), void a(1));
                                        i(e, n)
                                    }))
                                }
                            }
                        }), xe(le(e, u)))
                    }, function(e) {
                        return function(n, i) {
                            if (0 === n) {
                                var r, o = null,
                                    a = function(e, n) {
                                        if (0 !== e) return 1 === e ? (i(1, n), void o(1)) : void(2 === e && (o = null));
                                        (o = n)(1)
                                    },
                                    u = function(e, n) {
                                        2 === e && null !== o && o(2, n), r(e, n)
                                    };
                                e(0, (function(e, n) {
                                    if (0 === e) return r = n, void i(0, u);
                                    if (1 !== e) {
                                        if (2 === e) {
                                            if (i(2, n), null === o) return;
                                            o(2, n)
                                        }
                                    } else {
                                        if (null !== o) return;
                                        t(n)(0, a)
                                    }
                                }))
                            }
                        }
                    }), ce((function(e) {
                        r(e)
                    })))
                }))
            }
        },
        pt = /\.(\w+)$/i,
        mt = new Audio,
        vt = {
            mp3: "audio/mpeg",
            ogg: "audio/ogg"
        },
        ht = function(e) {
            var n, t = (n = e.match(pt)) ? n[1].toLowerCase() : "";
            return t in vt && "" !== mt.canPlayType(vt[t])
        },
        gt = function(n) {
            return new e((function(e, t) {
                var i = new Audio(n);
                i.onloadeddata = function() {
                    e(i)
                }, i.onerror = t
            }))
        },
        _t = function(n) {
            var t, i = n.play();
            return (t = i) && "function" == typeof t.then ? i : e.resolve()
        },
        wt = function(e) {
            return "function" == typeof e.start && "function" == typeof e.stop
        },
        yt = function(e) {
            wt(e) ? e.start(0) : e.noteOn(0)
        },
        bt = function() {
            var n = new(window.AudioContext || window.webkitAudioContext),
                t = !0,
                i = [],
                r = function(t) {
                    return new e((function(e, i) {
                        n.decodeAudioData(t, e, i)
                    }))
                },
                o = function(t) {
                    return {
                        play: function() {
                            var i = n.createBufferSource();
                            return i.connect(n.destination), i.buffer = t, {
                                playback: new e((function(e, t) {
                                    if (i.onended = function() {
                                            return e()
                                        }, yt(i), "running" !== n.state) {
                                        var r = Error("Playback failed, AudioContext is in incorrect state '" + n.state + "'");
                                        r.name = "PlaybackError", t(r)
                                    }
                                })),
                                stop: function() {
                                    ! function(e) {
                                        wt(e) ? e.stop(0) : e.noteOff(0)
                                    }(i)
                                }
                            }
                        }
                    }
                };
            return {
                preload: function(n) {
                    return function(n) {
                        return new e((function(e, t) {
                            var i = new XMLHttpRequest;
                            i.onload = function() {
                                e(i.response)
                            }, i.onerror = t, i.open("GET", n), i.responseType = "arraybuffer", i.send()
                        }))
                    }(n).then(r).then(o)
                },
                playSound: function(e) {
                    var n = e.play();
                    return t && i.push(n), n.playback
                },
                unlock: function() {
                    return new e((function(e) {
                        document.addEventListener("click", (function r() {
                            var o, a;
                            document.removeEventListener("click", r, !0), t && (i.forEach((function(e) {
                                e.stop()
                            })), i = [], t = !1), n.resume(), o = n.createBuffer(1, 1, 22050), (a = n.createBufferSource()).buffer = o, a.connect(n.destination), yt(a), e()
                        }), !0)
                    }))
                }
            }
        },
        kt = function() {
            return "function" == typeof window.webkitAudioContext || "function" == typeof window.AudioContext ? (n = bt(), {
                play: function(e) {
                    var i = t(e).then(n.playSound);
                    return i.catch(x), i
                },
                preload: t = L((function(e) {
                    var t = n.preload(e);
                    return t.catch(x), t
                })),
                unlock: function() {
                    return n.unlock()
                }
            }) : function() {
                var n = L(gt);
                return {
                    play: function(e) {
                        return n(e).then(_t)
                    },
                    preload: n,
                    unlock: function() {
                        return e.resolve()
                    }
                }
            }();
            var n, t
        },
        It = function(e) {
            return Object.keys(e).reduce((function(n, t) {
                var i, r = l((function(e) {
                    return ht(e)
                }), o(i = e[t]) ? i : [i]);
                return n[t] = r, n
            }), {})
        },
        Ct = "new_message",
        Et = function() {
            var e, n, t, i, r = ((e = {}).new_message = ["https://cdn.livechatinc.com/widget/static/media/new_message.34190d36.ogg", "https://cdn.livechatinc.com/widget/static/media/new_message.f3efb3d2.mp3"], n = e, t = kt(), i = It(n), {
                play: function(e) {
                    t.play(i[e]).then(x, x)
                },
                preload: function(e) {
                    t.preload(i[e]).then(x, x)
                },
                unlock: function() {
                    return t.unlock()
                }
            });
            return r.unlock().then((function() {
                return e = 2e3, n = function(e) {
                        r.play(e)
                    }, t = 0,
                    function() {
                        var i = Date.now();
                        e > i - t || (t = Date.now(), n.apply(void 0, arguments))
                    };
                var e, n, t
            }))
        },
        Lt = function(e, n) {
            return void 0 === n && (n = !1), n && e.__unsafeProperties.group.hasCustomMobileSettings
        },
        xt = function(e, n) {
            var t = e.__unsafeProperties.group;
            return Lt(e, n) ? t.screenPositionOnMobile : t.screenPosition
        },
        At = function(e, n) {
            var t = e.__unsafeProperties.group;
            return Lt(e, n) ? {
                x: t.offsetXOnMobile,
                y: t.offsetYOnMobile
            } : {
                x: t.offsetX,
                y: t.offsetY
            }
        },
        zt = function(e) {
            return !!e && /native code/.test(e + "")
        },
        Ot = function() {
            return _(navigator.platform, ["iPad Simulator", "iPhone Simulator", "iPod Simulator", "iPad", "iPhone", "iPod"]) && _("Version/15", navigator.userAgent)
        },
        Tt = function() {
            return /mobile/gi.test(navigator.userAgent) && !("MacIntel" === navigator.platform && _("iPad", navigator.userAgent))
        },
        Pt = function() {
            return _("Chrome", navigator.userAgent)
        },
        St = function() {
            return /Firefox/.test(navigator.userAgent)
        },
        Mt = function(e, n) {
            var t = function() {
                    n() || j(un, e)
                },
                i = function() {
                    n() || j(cn, e)
                };
            if ("onbeforeprint" in window) window.addEventListener("beforeprint", t), window.addEventListener("afterprint", i);
            else if (zt(window.matchMedia)) {
                var r = window.matchMedia("print");
                r && r.addListener((function(e) {
                    e.matches ? t() : i()
                }))
            }
        },
        jt = function(e, n, t) {
            var i = n.__unsafeProperties.group.eyeCatcher;
            if (i.enabled && ! function(e, n) {
                    var t = e.__unsafeProperties.group;
                    return Lt(e, n) ? t.disabledMinimizedOnMobile : t.disabledMinimized
                }(n)) {
                var r, o, a = function(e) {
                        var n = He(e);
                        return n.eyeCatcher.hidden || "minimized" !== n.visibility.state || "online" !== n.availability || n.readyState === Bn
                    },
                    u = function() {
                        r && (W(r), r = null), clearTimeout(o)
                    },
                    c = function() {
                        var r, o = B("div", dn),
                            c = xt(n);
                        j(((r = {
                            bottom: i.y + "px"
                        })[c] = i.x + "px", r), o);
                        var s, d = B("div", ln);
                        15 > i.x && "right" === c && j(((s = {})[c] = 10 - i.x + "px", s), d);
                        d.innerHTML = "&times;";
                        var l = B("div", fn),
                            f = z({}, pn, {
                                src: i.src,
                                alt: t.embedded_chat_now
                            });
                        i.srcset && (f.srcset = M(i.srcset).map((function(e) {
                            return e[1] + " " + e[0]
                        })).join(", "));
                        var p = B("img", f);
                        return l.appendChild(p), p.addEventListener("load", (function() {
                            j({
                                width: p.width + "px",
                                height: p.height + "px"
                            }, p)
                        })), p.addEventListener("error", u), o.appendChild(d), o.appendChild(l), Mt(o, (function() {
                            return a(e.state)
                        })), document.body.appendChild(o), zt(window.matchMedia) && window.matchMedia("(hover: none)").matches ? j({
                            display: "block"
                        }, d) : (o.addEventListener("mouseover", (function() {
                            j({
                                display: "block"
                            }, d)
                        })), o.addEventListener("mouseout", (function() {
                            j({
                                display: "none"
                            }, d)
                        }))), o.addEventListener("click", (function(n) {
                            n.stopPropagation(), n.preventDefault(), e.maximize()
                        })), d.addEventListener("mouseover", (function() {
                            j({
                                color: "#444"
                            }, d)
                        })), d.addEventListener("mouseout", (function() {
                            j({
                                color: "#000"
                            }, d)
                        })), d.addEventListener("click", (function(n) {
                            n.preventDefault(), n.stopPropagation(), e.call("hideEyeCatcher")
                        })), o
                    };
                fe(jn(e, a), Ce({
                    next: function(e) {
                        e ? u() : o = setTimeout((function() {
                            r = c()
                        }), 430)
                    },
                    complete: u
                }))
            }
        },
        Nt = function(e) {
            e.innerHTML = ""
        },
        Dt = function(e, n) {
            var t = document.querySelectorAll(".livechat_button"),
                i = _(n.groupId, n.onlineGroupIds || []);
            [].forEach.call(t, (function(t) {
                var r = t.getAttribute("data-id"),
                    o = l((function(e) {
                        return e.id === r
                    }), n.buttons);
                if (o) {
                    var a = g("#", "0.href", t);
                    "image" === o.type ? function(e, n) {
                        var t = e.text,
                            i = e.url,
                            r = e.src;
                        Nt(n);
                        var o = B("a", {
                                href: i
                            }),
                            a = B("img", {
                                src: r,
                                alt: t,
                                title: t
                            });
                        o.appendChild(a), n.appendChild(o)
                    }({
                        url: a,
                        text: t.textContent,
                        src: i ? o.onlineValue : o.offlineValue
                    }, t) : function(e, n) {
                        var t = e.text,
                            i = e.url;
                        Nt(n);
                        var r = B("a", {
                            href: i
                        });
                        r.appendChild(document.createTextNode(t)), n.appendChild(r)
                    }({
                        url: a,
                        text: i ? o.onlineValue : o.offlineValue
                    }, t), t.children[0].addEventListener("click", (function(n) {
                        n.preventDefault(), e.maximize()
                    }))
                }
            }))
        },
        qt = function(e) {
            return e.replace(/\?+$/, "")
        },
        Ft = function() {
            return {
                title: document.title,
                url: qt(document.location + ""),
                referrer: document.referrer
            }
        },
        Wt = function(e) {
            var n;
            fe((n = 2e3, function(e, t) {
                if (0 === e) {
                    var i = 0,
                        r = setInterval((function() {
                            t(1, i++)
                        }), n);
                    t(0, (function(e) {
                        2 === e && clearInterval(r)
                    }))
                }
            }), me(Ft), ae((function(e, n) {
                return e.url === n.url
            })), xe(le(e, "unbind")), ce((function(n) {
                e.call("storeMethod", ["setApplicationState", {
                    page: n
                }])
            })))
        };
    var Bt = function(e) {
            fe(Gn(e, (function() {
                return le(e, "add_event")
            })), ue((function(e) {
                var n = e.event;
                return "custom" === n.type && n.properties.customId && -1 !== n.properties.customId.indexOf("cyber-finger-snapshot-request-")
            })), ce((function(n) {
                var t, i = n.event.properties.customId.replace("cyber-finger-snapshot-request-", "");
                try {
                    var r = (t = (void 0)[0], JSON.stringify(t));
                    e.call("storeMethod", ["emit", "send_snapshot", {
                        snapshot: r,
                        requestId: i,
                        screen: {
                            width: window.innerWidth,
                            height: window.innerHeight,
                            scrollY: window.pageYOffset,
                            scrollX: window.pageXOffset
                        }
                    }])
                } catch (e) {}
            })))
        },
        Ht = window.Wix,
        Rt = function() {
            return new e((function(e) {
                Ht.getSiteInfo((function(n) {
                    var t = n.url,
                        i = n.referrer || n.referer || "";
                    n.baseUrl && -1 === t.indexOf(n.baseUrl) && (t = n.baseUrl), e({
                        title: n.pageTitle,
                        referrer: i,
                        url: t
                    })
                }))
            }))
        },
        Vt = function(e) {
            var n, t, i, r;
            fe((n = function() {
                return !!document.hasFocus && document.hasFocus()
            }, t = function(e, t) {
                if (0 === e) {
                    var i = !1;
                    t(0, (function(e) {
                        2 === e && (i = !0)
                    })), t(1, n()), i || t(2)
                }
            }, i = me((function() {
                return !0
            }))(se(window, "focus")), r = me((function() {
                return !1
            }))(se(window, "blur")), de(t, i, r)), xe(le(e, "unbind")), ce((function(n) {
                e.emit("focus", n)
            })))
        };

    function Gt() {
        return e = /^Mac/, null != window.navigator && e.test(window.navigator.platform);
        var e
    }
    var Ut = function(e) {
        var n = !1;

        function t(t) {
            n = !0,
                function(e) {
                    return !(e.metaKey || !Gt() && e.altKey || e.ctrlKey || "Control" === e.key || "Shift" === e.key || "Meta" === e.key || "Alt-Meta" === e.key)
                }(t) && e.call("setInteractionModality", "keyboard")
        }

        function i(t) {
            e.call("setInteractionModality", "pointer"), "mousedown" !== t.type && "pointerdown" !== t.type || (n = !0)
        }

        function r(t) {
            t.target !== window && t.target !== document && (n || e.call("setInteractionModality", "keyboard"), n = !1)
        }

        function o() {
            n = !1
        }
        return document.addEventListener("keydown", t, !0), document.addEventListener("keyup", t, !0), window.addEventListener("focus", r, !0), window.addEventListener("blur", o, !1), "undefined" != typeof PointerEvent ? (document.addEventListener("pointerdown", i, !0), document.addEventListener("pointermove", i, !0), document.addEventListener("pointerup", i, !0)) : (document.addEventListener("mousedown", i, !0), document.addEventListener("mousemove", i, !0), document.addEventListener("mouseup", i, !0)),
            function() {
                document.removeEventListener("keydown", t, !0), document.removeEventListener("keyup", t, !0), window.removeEventListener("focus", r, !0), window.removeEventListener("blur", o, !1), "undefined" != typeof PointerEvent ? (document.removeEventListener("pointerdown", i, !0), document.removeEventListener("pointermove", i, !0), document.removeEventListener("pointerup", i, !0)) : (document.removeEventListener("mousedown", i, !0), document.removeEventListener("mousemove", i, !0), document.removeEventListener("mouseup", i, !0))
            }
    };

    function Yt(e) {
        if ("Google Inc." === navigator.vendor && "Win32" === navigator.platform) {
            var n, t, i, r = e.frame,
                o = (n = 100, t = function() {
                    j(q(["width"], r), r), requestAnimationFrame((function() {
                        j({
                            width: vn.style.width
                        }, r)
                    }))
                }, function() {
                    clearTimeout(i);
                    for (var e = arguments.length, r = Array(e), o = 0; e > o; o++) r[o] = arguments[o];
                    i = setTimeout.apply(void 0, [t, n].concat(r))
                });
            document.addEventListener("scroll", o);
            e.on("unbind", (function n() {
                e.off("unbind", n), document.removeEventListener("scroll", o)
            }))
        }
    }
    var Jt = {
            position: Ot() ? "absolute" : "fixed",
            height: Ot() ? "calc(100vh - env(safe-area-inset-bottom))" : "100%",
            width: "100%",
            top: 0,
            right: 0,
            bottom: 0,
            left: 0,
            overflowY: "hidden"
        },
        Xt = function(e) {
            var n = document.querySelector('meta[name="viewport"]') || function() {
                    var e = B("meta", {
                        name: "viewport"
                    });
                    return document.getElementsByTagName("head")[0].appendChild(e), e
                }(),
                t = null,
                i = function() {
                    var e, i = n.content,
                        r = (e = document.body, Object.keys(Jt).reduce((function(n, t) {
                            return n[t] = e.style[t], n
                        }), {})),
                        o = document.documentElement.scrollTop;
                    return n.content = "width=device-width, initial-scale=1.0, maximum-scale=1.0", j(Jt, document.body),
                        function() {
                            t = null, j(r, document.body), n.content = i, document.documentElement.scrollTop = o
                        }
                };
            Mn(e.state, "maximized") && (t = i()), fe(jn(e, (function(e) {
                return Mn(e, "maximized")
            })), we, Ce({
                next: function(e) {
                    e[1] ? t = i() : t()
                },
                complete: function() {
                    t && t()
                }
            }))
        },
        $t = Tt(),
        Kt = function(e, n) {
            if (e.iframeAddress) return e.iframeAddress;
            if (window.__ow) return "https://cdn.livechatinc.com/widget/openwidget.html";
            var t = "https://secure" + ((1520 === e.licenseId ? "-lc" : "") + ".livechatinc.com");
            return n.region && (t = t.replace("secure", "secure-" + n.region)), t + "/customer/action/open_chat"
        },
        Qt = function(e, n, t) {
            var i = !!e.customContainer;
            return {
                page: n,
                license: e.licenseId,
                region: t.region,
                group: t.groupId,
                requestedGroup: e.requestedGroupId,
                customer: e.customer,
                hidden: !(e.actingAsDirectLink || i) && function(e) {
                    var n = e.__unsafeProperties.group;
                    return $t && n.hasCustomMobileSettings ? n.initiallyHiddenOnMobile : n.initiallyHidden
                }(t),
                uniqueGroups: e.uniqueGroups,
                analytics: {
                    googleAnalytics: {
                        enabled: !!t.integrations.analytics,
                        trackerName: ct(e.gaParams)
                    },
                    kissmetrics: {
                        enabled: !!t.integrations.kissmetrics
                    },
                    mixpanel: {
                        enabled: !!t.integrations.mixpanel
                    }
                },
                actingAsDirectLink: e.actingAsDirectLink,
                initMaximized: e.initMaximized,
                isInCustomContainer: i,
                clientLimitExceeded: t.clientLimitExceeded,
                integrationName: e.integrationName,
                iframeAddress: Kt(e, t)
            }
        },
        Zt = function() {
            var e = "lc_get_time_" + v();
            window.performance && "function" == typeof window.performance.mark && window.performance.mark(e);
            var n = performance.getEntriesByName(e)[0].startTime;
            return performance.clearMarks(e), n
        },
        ei = function() {
            if ("undefined" == typeof PerformanceObserver) return null;
            var n = Zt(),
                t = [],
                i = new PerformanceObserver((function(e) {
                    t.push.apply(t, e.getEntries())
                }));
            i.observe({
                entryTypes: ["longtask"]
            });
            var r = function() {
                var e, i = k(t);
                return i ? (e = i, Zt() - e.startTime + e.duration) : Zt() - n
            };
            return {
                disconnect: function() {
                    return i.disconnect()
                },
                getLongTasks: function() {
                    return [].concat(t)
                },
                waitForIdle: function(n) {
                    return new e((function(e) {
                        ! function o() {
                            t.push.apply(t, i.takeRecords());
                            var a = r();
                            n > a ? setTimeout(o, Math.ceil(n - a)) : e()
                        }()
                    }))
                }
            }
        },
        ni = function(n) {
            void 0 === n && (n = "first-contentful-paint");
            var t, i = ei();
            return i ? (t = n, new e((function(e) {
                var n = performance.getEntriesByName(t);
                if (w(n))
                    if ("undefined" != typeof PerformanceObserver) {
                        var i = setTimeout((function() {
                                r.disconnect(), e(null)
                            }), 6e4),
                            r = new PerformanceObserver((function(n) {
                                var o = l((function(e) {
                                    return e.name === t
                                }), n.getEntries());
                                o && (r.disconnect(), clearTimeout(i), e(o))
                            }));
                        r.observe({
                            entryTypes: ["paint"]
                        })
                    } else e(null);
                else e(n[0])
            }))).then((function(e) {
                return e ? i.waitForIdle(5e3).then((function() {
                    return i.disconnect(), i.getLongTasks()
                })) : null
            })) : e.resolve(null)
        },
        ti = function(e) {
            var n = performance.getEntriesByName(e);
            return 1 !== n.length ? null : n[0]
        },
        ii = function(e, n) {
            return e && n ? Math.abs(n.startTime - e.startTime) : null
        },
        ri = function(e) {
            if (!e) return null;
            var n = performance.getEntriesByType("navigation");
            return e.startTime - (w(n) ? performance.timing.domContentLoadedEventStart - performance.timing.navigationStart : n[0].domContentLoadedEventStart)
        },
        oi = function() {
            if (!Math.floor(1e3 * Math.random())) {
                var e = ni().then((function(e) {
                    return e ? P(e.filter((function(e) {
                        return _(".livechatinc.com", e.attribution[0].containerSrc)
                    })).map((function(e) {
                        return e.duration
                    }))) : null
                }));
                return {
                    getLogs: function() {
                        return e.then((function(e) {
                            var n, t = 1 !== (n = performance.getEntriesByType("resource").filter((function(e) {
                                    return /livechatinc\.com\/(.+\/)?tracking.js/.test(e.name)
                                }))).length ? null : n[0],
                                i = ti("lc_bridge_init"),
                                r = ti("lc_bridge_ready");
                            return c((function(e) {
                                return e && Number(e.toFixed(2))
                            }), {
                                timeFromTrackingStart: ii(t, r),
                                timeFromBridgeInit: ii(i, r),
                                timeFromDomContentLoaded: ri(r),
                                totalBlockingTimeContributedToOurScript: e
                            })
                        }))
                    }
                }
            }
        };

    function ai(n, t) {
        return t = t || {}, new e((function(i, r) {
            var o = new XMLHttpRequest,
                a = [],
                u = [],
                c = {},
                s = function n() {
                    return {
                        ok: 2 == (o.status / 100 | 0),
                        statusText: o.statusText,
                        status: o.status,
                        url: o.responseURL,
                        text: function() {
                            return e.resolve(o.responseText)
                        },
                        json: function() {
                            return e.resolve(o.responseText).then(JSON.parse)
                        },
                        blob: function() {
                            return e.resolve(new Blob([o.response]))
                        },
                        clone: n,
                        headers: {
                            keys: function() {
                                return a
                            },
                            entries: function() {
                                return u
                            },
                            get: function(e) {
                                return c[e.toLowerCase()]
                            },
                            has: function(e) {
                                return e.toLowerCase() in c
                            }
                        }
                    }
                };
            for (var d in o.open(t.method || "get", n, !0), o.onload = function() {
                    o.getAllResponseHeaders().replace(/^(.*?):[^\S\n]*([\s\S]*?)$/gm, (function(e, n, t) {
                        a.push(n = n.toLowerCase()), u.push([n, t]), c[n] = c[n] ? c[n] + "," + t : t
                    })), i(s())
                }, o.onerror = r, o.withCredentials = "include" == t.credentials, t.headers) o.setRequestHeader(d, t.headers[d]);
            o.send(t.body || null)
        }))
    }
    var ui = {};

    function ci(n, t) {
        var i = void 0 === t ? {} : t,
            r = i.query,
            o = void 0 === r ? {} : r,
            a = i.jsonpParam,
            u = void 0 === a ? "jsonp" : a,
            c = i.callbackName;
        return new e((function(e, t) {
            F().then((function(i) {
                var r, a = document.createElement("script"),
                    s = c || h(ui);
                ui[s] = !0;
                var d = "__" + s;
                window[d] = function(n) {
                    delete ui[s], delete window[d], W(a), e(n)
                }, a.src = n + "?" + H(z({}, o, ((r = {})[u] = d, r))), a.addEventListener("error", (function() {
                    setTimeout((function() {
                        return t(Error("JSONP request failed."))
                    }), 100)
                })), i.appendChild(a)
            }))
        }))
    }
    var si, di = "__test_storage_support__",
        li = "@@test",
        fi = function(e) {
            void 0 === e && (e = "local");
            try {
                var n = "session" === e ? window.sessionStorage : window.localStorage;
                return n.setItem(di, li), n.getItem(di) !== li ? !1 : (n.removeItem(di), !0)
            } catch (e) {
                return !1
            }
        },
        pi = function() {
            var e = Object.create(null);
            return {
                getItem: function(n) {
                    var t = e[n];
                    return "string" == typeof t ? t : null
                },
                setItem: function(n, t) {
                    e[n] = t
                },
                removeItem: function(n) {
                    delete e[n]
                },
                clear: function() {
                    e = Object.create(null)
                }
            }
        }(),
        mi = (fi() && window, Object.freeze({
            success: !0
        }), (si = {}).CONNECTION_LOST = "Connection lost.", si.MISDIRECTED_CONNECTION = "Connected to wrong region.", function(e) {
            return e.map((function(e) {
                switch (e.type) {
                    case "group_chooser":
                        return z({}, e, {
                            options: e.options.map((function(e) {
                                var n = e.group_id;
                                return z({}, Re(e, ["group_id"]), {
                                    groupId: n
                                })
                            }))
                        });
                    case "rating":
                        var n = e.comment_label;
                        return z({}, Re(e, ["comment_label"]), {
                            commentLabel: n
                        });
                    default:
                        return e
                }
            }))
        }),
        vi = function(e) {
            var n, t;
            return {
                id: e.id,
                fields: !("id" in e.fields[0]) ? (n = e.fields, t = n.map((function(e, n) {
                    return z({}, e, {
                        id: n + ""
                    })
                })), mi(t)) : mi(e.fields)
            }
        },
        hi = /\.([a-z]{1,})$/i,
        gi = function(e) {
            var n = e.__priv,
                t = {
                    enabled: !0,
                    x: parseInt(n.group["embedded_chat.eye_grabber.x"]) + 15,
                    y: parseInt(n.group["embedded_chat.eye_grabber.y"]),
                    src: te(n.group["embedded_chat.eye_grabber.path"])
                };
            if (-1 !== t.src.indexOf("/default/eyeCatchers/")) {
                var i = t.src.match(hi)[1];
                t.srcset = {
                    "1x": t.src,
                    "2x": t.src.replace(RegExp("\\." + i, "i"), "-2x." + i)
                }
            }
            return t
        },
        _i = function(e, n) {
            var t, i, r = "get_dynamic_configuration" === e ? "v3.6" : "v3.4";
            return "https://api" + ((i = (t = n).region) && "dal" !== i ? "-" + i : "") + function(e) {
                return 1520 === e ? ".staging" : ""
            }(t.licenseId) + ".livechatinc.com/" + r + "/customer/action/" + e
        },
        wi = function e(n) {
            return ci(_i("get_dynamic_configuration", n), {
                query: z({
                    license_id: n.licenseId,
                    client_id: null != "c5e4f61e1a6c3b1521b541bc5c5a2ac5" ? "c5e4f61e1a6c3b1521b541bc5c5a2ac5" : "",
                    url: ne(n.url, ["cw_configurator"])
                }, "number" == typeof n.groupId && {
                    group_id: n.groupId
                }, n.channelType && {
                    channel_type: n.channelType
                }, n.skipCodeInstallationTracking && {
                    test: 1
                })
            }).then((function(t) {
                if (t.error) switch (t.error.type) {
                    case "misdirected_request":
                        return e(z({}, n, {
                            region: t.error.data.region
                        }));
                    default:
                        var i = Error(t.error.message);
                        throw i.code = t.error.type.toUpperCase(), i
                }
                if ("livechat" !== t.default_widget) {
                    var r = Error("The 'default_widget' is not 'livechat', but instead: '" + t.default_widget + "'");
                    throw r.code = "DEFAULT_WIDGET_NOT_LIVECHAT", r.organizationId = t.organization_id, r.defaultWidget = t.default_widget, r
                }
                if (!t.livechat_active) {
                    if ("direct_link" === n.channelType) {
                        var o = H({
                            utm_source: "expired_chat_link",
                            utm_medium: "referral",
                            utm_campaign: "lc_" + n.licenseId
                        });
                        window.location.replace("https://www.livechat.com/powered-by-livechat/?" + o)
                    }
                    var a = Error("License expired");
                    throw a.code = "LICENSE_EXPIRED", a
                }
                if (!t.livechat.domain_allowed) {
                    var u = Error("Current domain is not added to the allowlist.");
                    throw u.code = "DOMAIN_NOT_ALLOWED", u
                }
                return {
                    organizationId: (c = t).organization_id,
                    groupId: c.livechat.group_id,
                    clientLimitExceeded: c.livechat.client_limit_exceeded,
                    configVersion: c.livechat.config_version,
                    localizationVersion: c.livechat.localization_version,
                    onlineGroupIds: c.livechat.online_group_ids || [],
                    region: n.region || null
                };
                var c
            }))
        },
        yi = function(e) {
            var n, t, i = "feade1d6c3f17748ae4c8d917a1e1068",
                r = !!(null == (n = e.properties.group[i]) ? void 0 : n.forwardTicketFormToHelpdesk),
                o = null == (t = e.properties.license[i]) ? void 0 : t.hdLicenseID;
            return "number" == typeof o && o > -1 && (r || "1" === e.__priv.license["helpdesk.inbound_forwarding"])
        },
        bi = function(e) {
            var n, t = e.buttons,
                i = e.allowed_domains,
                r = e.prechat_form,
                o = e.ticket_form,
                a = e.__priv,
                u = e.properties,
                c = Re(e, ["buttons", "allowed_domains", "prechat_form", "ticket_form", "__priv", "properties"]),
                s = "0" === a.group.tickets_enabled,
                d = !!!a.disable_native_tickets && !!o,
                l = yi(e),
                f = s || l || d;
            return z({}, c, r && {
                prechatForm: vi(r)
            }, f && o && {
                ticketForm: vi(o)
            }, {
                properties: u,
                buttons: t.map((function(e) {
                    return "image" === e.type ? {
                        id: e.id,
                        type: e.type,
                        onlineValue: te(e.online_value),
                        offlineValue: te(e.offline_value)
                    } : {
                        id: e.id,
                        type: e.type,
                        onlineValue: e.online_value,
                        offlineValue: e.offline_value
                    }
                }))
            }, i && {
                allowedDomains: i
            }, {
                __unsafeProperties: z({}, a.s && {
                    s: !0
                }, {
                    group: {
                        chatBoosters: a.group.chat_boosters,
                        disabledMinimized: "1" === a.group["chat_window.disable_minimized"],
                        disabledMinimizedOnMobile: "1" === a.group["chat_window.mobile_disable_minimized"],
                        disabledOnMobile: "1" === a.group["chat_window.hide_on_mobile"],
                        eyeCatcher: "1" === a.group["embedded_chat.display_eye_catcher"] ? gi(e) : {
                            enabled: !1
                        },
                        hasAgentAvatarsEnabled: "1" === a.group["chat_window.display_avatar"],
                        hasCustomMobileSettings: "1" === a.group["chat_window.custom_mobile_settings"],
                        hasHiddenTrademark: "1" === a.group["chat_window.hide_trademark"],
                        hasSoundsEnabled: "0" === a.group["chat_window.disable_sounds"],
                        initiallyHidden: "1" === a.group["chat_window.hide_on_init"] || "1" === a.group["chat_window.disable_minimized"],
                        initiallyHiddenOnMobile: "1" === a.group["chat_window.mobile_hide_on_init"] || "1" === a.group["chat_window.mobile_disable_minimized"],
                        hideOnInit: "1" === a.group["chat_window.hide_on_init"],
                        language: a.group.language,
                        linksUnfurlingEnabled: "1" === a.group.links_unfurling,
                        logo: "1" === a.group["chat_window.display_logo"] ? {
                            enabled: !0,
                            src: a.group["chat_window.logo_path"]
                        } : {
                            enabled: !1
                        },
                        minimizedType: a.group["chat_window.theme.minimized"],
                        minimizedTypeOnMobile: a.group["chat_window.mobile_minimized_theme"],
                        offlineMessagesEnabled: s,
                        offsetX: parseInt(a.group["chat_window.offset_x"]),
                        offsetXOnMobile: parseInt(a.group["chat_window.mobile_offset_x"]),
                        offsetY: parseInt(a.group["chat_window.offset_y"]),
                        offsetYOnMobile: parseInt(a.group["chat_window.mobile_offset_y"]),
                        prechatFormAfterGreetingEnabled: "1" === a.group.pre_chat_survey_after_greeting,
                        ratingEnabled: "1" === a.group["rate_me.enabled"],
                        screenPosition: a.group["chat_window.screen_position"],
                        screenPositionOnMobile: a.group["chat_window.mobile_screen_position"],
                        transcriptButtonEnabled: "1" === a.group["chat_window.display_transcript_button"],
                        theme: {
                            name: a.group["chat_window.new_theme.name"],
                            variant: a.group["chat_window.new_theme.variant"] || "light",
                            customJson: a.group["chat_window.new_theme.custom_json"],
                            agentbarBackgroundColor: a.group["chat_window.new_theme.agentbar_background_color"],
                            agentbarText: a.group["chat_window.new_theme.agentbar_text"],
                            agentMessageColorBackground: a.group["chat_window.new_theme.agent_message_color_background"],
                            agentMessageColorText: a.group["chat_window.new_theme.agent_message_color_text"],
                            backgroundColor: a.group["chat_window.new_theme.background_color"],
                            ctaColor: a.group["chat_window.new_theme.cta_color"],
                            minimizedColorBackground: a.group["chat_window.new_theme.minimized_color_background"],
                            minimizedColorIcon: a.group["chat_window.new_theme.minimized_color_icon"],
                            minimizedColorText: a.group["chat_window.new_theme.minimized_color_text"],
                            systemMessageColor: a.group["chat_window.new_theme.system_message_color"],
                            titlebarBackgroundColor: a.group["chat_window.new_theme.titlebar_background_color"],
                            titlebarText: a.group["chat_window.new_theme.titlebar_text"],
                            visitorMessageColorBackground: a.group["chat_window.new_theme.visitor_message_color_background"],
                            visitorMessageColorText: a.group["chat_window.new_theme.visitor_message_color_text"]
                        }
                    },
                    license: {
                        creditCardMaskingEnabled: "1" === a.license.mask_credit_cards,
                        nonProfit: "1" === a.license.non_profit,
                        licenseinboundForwardingToHelpdeskEnabled: "1" === a.license["helpdesk.inbound_forwarding"]
                    },
                    helpdeskIntegrationEnabled: l,
                    ticketFormMode: (n = e, yi(n) ? "helpdesk" : "0" === n.__priv.group.tickets_enabled ? "offline_message" : "livechat")
                })
            })
        },
        ki = function(e) {
            var n = "https://api.openwidget.com/v1.0/configuration/" + e,
                t = {};
            if ("f870dbd6-2928-4412-b6a9-cd4c8328b151" === e) try {
                var i, r, o = "",
                    a = window.location.pathname + window.location.search;
                if (-1 === document.cookie.indexOf("openwidget_v")) o = v(), document.cookie = "openwidget_v=" + o + "; max-age=31536000; path=/";
                else o = null != (i = null == (r = document.cookie.split("; ").find((function(e) {
                    return e.startsWith("openwidget_v")
                }))) ? void 0 : r.split("=")[1]) ? i : "";
                t = {
                    v: o,
                    p: a
                }
            } catch (e) {}
            var u = function(t) {
                return ci(n, {
                    callbackName: "ow_config",
                    query: t
                }).then((function(n) {
                    var t = n.staticConfig,
                        i = n.localization;
                    return z({}, Re(n, ["staticConfig", "localization"]), bi(t), {
                        localization: I((function(e) {
                            return e.toLowerCase()
                        }), i),
                        organizationId: e
                    })
                }))
            };
            return u(t).catch((function() {
                return u({})
            }))
        },
        Ii = function(e) {
            var n, t, i, r = e.allowVideoConferencing,
                o = e.allowClipboardWrite,
                a = e.allowDisplayCapture,
                c = [];
            if (e.allowAutoplay && !St() && c.push("autoplay;"), a && c.push("display-capture *;"), r) {
                var s = {
                    "display-capture *;": !Pt() || (i = navigator.userAgent.match(/Chrom(e|ium)\/([0-9]+)\./), (i ? parseInt(i[2], 10) : 0) >= 94),
                    "picture-in-picture *;": "PictureInPictureEvent" in window,
                    "fullscreen *;": "function" == typeof Element.prototype.requestFullscreen
                };
                c = [].concat(c, ["microphone *;", "camera *;"], Object.keys((n = Boolean, u(t = s).reduce((function(e, i) {
                    return n(t[i]) && (e[i] = t[i]), e
                }), {}))))
            }
            return o && !St() && c.push("clipboard-write *;"), c.join(" ")
        },
        Ci = "data-lc-focus",
        Ei = "data-lc-event",
        Li = "data-lc-prop";

    function xi(e, n) {
        var t = "undefined" != typeof Symbol && e[Symbol.iterator] || e["@@iterator"];
        if (t) return (t = t.call(e)).next.bind(t);
        if (Array.isArray(e) || (t = function(e, n) {
                if (!e) return;
                if ("string" == typeof e) return Ai(e, n);
                var t = Object.prototype.toString.call(e).slice(8, -1);
                "Object" === t && e.constructor && (t = e.constructor.name);
                if ("Map" === t || "Set" === t) return Array.from(e);
                if ("Arguments" === t || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(t)) return Ai(e, n)
            }(e)) || n && e && "number" == typeof e.length) {
            t && (e = t);
            var i = 0;
            return function() {
                return e.length > i ? {
                    done: !1,
                    value: e[i++]
                } : {
                    done: !0
                }
            }
        }
        throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
    }

    function Ai(e, n) {
        (null == n || n > e.length) && (n = e.length);
        for (var t = 0, i = Array(n); n > t; t++) i[t] = e[t];
        return i
    }
    var zi = x;
    var Oi = function(e) {
            fe(function(e, n) {
                return ie((function(t) {
                    var i = new MutationObserver(t);
                    return i.observe(e, n),
                        function() {
                            i.disconnect()
                        }
                }))
            }(document.body, {
                childList: !0,
                subtree: !0
            }), me(Ft), ae((function(e, n) {
                return e.url === n.url
            })), xe(le(e, "unbind")), ce((function(n) {
                e.call("storeMethod", ["setApplicationState", {
                    page: n
                }])
            })))
        },
        Ti = ["maximize", "minimize"],
        Pi = {
            maximize: [{
                name: "feature",
                values: u({
                    faq: "FAQ",
                    "form-contact": "Form-contact",
                    "form-feedback": "Form-feedback",
                    "form-bugreport": "Form-bugreport"
                })
            }],
            minimize: null
        },
        Si = function(e, n) {
            var t = e.target;
            if (t instanceof Element) {
                var i = t.closest("[data-openwidget-action]");
                if (i) {
                    var r = i.getAttribute("data-openwidget-action");
                    if (r)
                        if (function(e) {
                                return _(e, Ti)
                            }(r)) {
                            var o = function(e, n) {
                                var t = {},
                                    i = Pi[n];
                                return i && i.forEach((function(n) {
                                    var i = e.getAttribute("data-openwidget-" + n.name);
                                    i && (t[n.name] = i)
                                })), t
                            }(i, r);
                            (function(e, n) {
                                var t = Pi[e],
                                    i = function(i) {
                                        var r, o = null == (r = t.find((function(e) {
                                                return e.name === i
                                            }))) ? void 0 : r.values,
                                            a = n[i];
                                        if (!o || !_(a, o)) return console.error("OpenWidget: You cannot combine " + a + ' feature with "' + e + '" method. You can only use: ' + o), {
                                            v: !1
                                        }
                                    };
                                for (var r in n) {
                                    var o = i(r);
                                    if ("object" == typeof o) return o.v
                                }
                                return !0
                            })(r, o) && n[r](o)
                        } else console.error('OpenWidget: Action "' + r + '" is not allowed. Allowed actions: ' + Ti.join(", "));
                    else console.error("OpenWidget: Action attribute value not found.")
                }
            }
        },
        Mi = Tt(),
        ji = function(e) {
            return Mi ? {
                width: "100%",
                height: "100%"
            } : "modern" === e.__unsafeProperties.group.theme.name ? {
                width: "400px",
                height: "465px"
            } : {
                width: "392px",
                height: "714px"
            }
        },
        Ni = function(e, n) {
            return Object.keys(e.properties.license).some((function(t) {
                return e.properties.license[t][n]
            }))
        },
        Di = function(e, n, t) {
            var i, r, o, a = At(n, Mi);
            return !e && t ? ((r = {})[xt(n, Mi)] = "0", r.bottom = a.y + "px", r.maxHeight = "100%", r) : Mi && e ? ((o = {})[xt(n, Mi)] = "0", o.bottom = "0", o.maxHeight = "100%", o) : ((i = {})[xt(n, Mi)] = a.x + "px", i.bottom = a.y + "px", i.maxHeight = "calc(100% - " + a.y + "px)", i)
        },
        qi = function(e) {
            return e.style.setProperty("transition", "none", "important")
        },
        Fi = function(e, n) {
            var t, i = B("div", sn),
                r = At(e, Mi),
                o = Di(n, e),
                a = ji(e);
            return j(z(((t = {
                width: a.width,
                height: a.height
            })[xt(e, Mi)] = r.x + "px", t), o), i), i
        },
        Wi = function(n, t, i, r, o, a) {
            var u, c, s = H(d(z({
                    license_id: t.license,
                    group: t.group,
                    embedded: 1,
                    widget_version: 3,
                    unique_groups: Number(t.uniqueGroups)
                }, !!r && {
                    custom_identity_provider: 1
                }, !!o && {
                    features: o
                }, "openwidget" === a ? {
                    organizationId: t.organizationId
                } : {}))),
                f = {
                    kill: function() {
                        this._emit("widget_resize", {
                            size: {
                                width: "0px",
                                height: "0px"
                            }
                        }), this.unbind(), n.custom || W(n.element)
                    },
                    applyHiddenStyles: function() {
                        j(un, n.element)
                    },
                    isFocused: function() {
                        return !!document.hasFocus && document.hasFocus()
                    },
                    resize: function(e) {
                        var t = void 0 === e ? {} : e,
                            r = {
                                width: t.width,
                                height: t.height
                            },
                            o = Di(t.maximized, i, t.ignoreHorizontalOffset);
                        j(z({}, r, o), n.element);
                        var a = q(["width", "height"], n.element);
                        this._emit("widget_resize", {
                            size: r,
                            computedSize: a
                        })
                    },
                    show: function() {
                        j(cn, n.element)
                    },
                    hide: function() {
                        this.call("hide")
                    },
                    focusMinimized: function() {
                        var e = document.getElementById(rn);
                        if (e && e.contentDocument) {
                            var n = e.contentDocument.querySelector("button");
                            n && n.focus()
                        }
                    },
                    minimize: function() {
                        this.call("minimize")
                    },
                    maximize: function(e) {
                        var n = this,
                            t = document.activeElement,
                            i = window.event && window.event.isTrusted ? window.event.type : null;
                        t.addEventListener("blur", (function e() {
                            t.removeEventListener("blur", e), n.emit("host_focus_shifted")
                        })), "openwidget" === a && e ? this.call("maximize", i, e) : this.call("maximize", i)
                    },
                    unbind: function() {
                        var e = this;
                        this.hide(), this.destroy(), this._emit("unbind"), this.off(), this.call = x, Object.keys(f).forEach((function(n) {
                            e[n] = x
                        }))
                    },
                    callIdentityProvider: function(e) {
                        return null == r ? void 0 : r[e]()
                    },
                    applyFramesStyle: function(e) {
                        var n = e.minimizedFrameStyle,
                            t = e.maximizedFrameStyle,
                            i = document.getElementById(tn),
                            r = document.getElementById(rn);
                        i && j(t, i), r && j(n, r)
                    },
                    renderCrossFrameMarkup: function(e) {
                        var t = this,
                            i = e[0],
                            r = e[1],
                            o = document.getElementById(rn);
                        o || (o = document.createElement("iframe"), N(z({}, hn, {
                                title: "openwidget" === a ? an : on
                            }), o), n.element.appendChild(o), o.contentDocument.fonts.ready.then((function() {
                                return t.emit("minimized_frame_fonts_ready")
                            })).catch(x)),
                            function(e, n, t, i) {
                                var r, o = t.contentDocument,
                                    a = null != (r = i.state.application.language) ? r : "en";
                                if (null === o) throw Error("Parameter `frame` needs to be inserted into any document before rendering");
                                Pt() ? (o.documentElement.lang = a, o.head.innerHTML = e, o.body.innerHTML = n) : (o.open(), o.write('\n\t\t\t<!DOCTYPE html>\n\t\t\t<html lang="' + a + '">\n\t\t\t\t<head>' + e + "</head>\n\t\t\t\t<body>" + n + "</body>\n\t\t\t</html>\n\t\t"), o.close());
                                for (var u, c = o.documentElement, s = xi(S(c.querySelectorAll("[" + Ei + "]"))); !(u = s()).done;) {
                                    var d = u.value,
                                        l = d.getAttribute(Ei);
                                    if ("string" == typeof l)
                                        for (var f, p = function() {
                                                var e = f.value.split(":"),
                                                    n = e[0],
                                                    t = e[1];
                                                if (!n || !t) return "continue";
                                                d.removeAttribute(Ei), d.addEventListener(n, (function(e) {
                                                    var n, r, o, a, u, c, s, d, l, f;
                                                    e.stopPropagation();
                                                    var p = {
                                                        type: e.type,
                                                        bubbles: !0,
                                                        isTrusted: e.isTrusted,
                                                        cancelBubble: e.cancelBubble,
                                                        cancelable: e.cancelable,
                                                        composed: e.composed,
                                                        defaultPrevented: e.defaultPrevented,
                                                        eventPhase: e.eventPhase,
                                                        timeStamp: e.timeStamp,
                                                        currentTarget: {
                                                            value: null == (n = e.currentTarget) ? void 0 : n.value,
                                                            checked: null == (r = e.currentTarget) ? void 0 : r.checked,
                                                            disabled: null == (o = e.currentTarget) ? void 0 : o.disabled,
                                                            draggable: null == (a = e.currentTarget) ? void 0 : a.draggable,
                                                            hidden: null == (u = e.currentTarget) ? void 0 : u.hidden
                                                        },
                                                        target: {
                                                            value: null == (c = e.target) ? void 0 : c.value,
                                                            checked: null == (s = e.target) ? void 0 : s.checked,
                                                            disabled: null == (d = e.target) ? void 0 : d.disabled,
                                                            draggable: null == (l = e.target) ? void 0 : l.draggable,
                                                            hidden: null == (f = e.target) ? void 0 : f.hidden
                                                        }
                                                    };
                                                    i.call("crossFrameEvent", t, JSON.stringify(p))
                                                }))
                                            }, m = xi(l.split(";")); !(f = m()).done;) p()
                                }
                                var v = c.querySelector("[" + Ci + "]");
                                v && (v.removeAttribute(Ci), v.focus(), "INPUT" === v.nodeName) && v.setSelectionRange(v.value.length, v.value.length);
                                for (var h, g = [], _ = function() {
                                        var e = h.value,
                                            n = e.getAttribute(Li);
                                        if ("string" != typeof n) return "continue";
                                        e.removeAttribute(Li);
                                        var t = n.split(":"),
                                            i = t[0],
                                            r = t[1];
                                        g.push((function(n) {
                                            var t, o, a = null == (t = n.views) || null == (o = t.minimized) ? void 0 : o[r.replace("!", "")];
                                            "string" == typeof a && (a = a.trim()), "disabled" === i && (a = r.includes("!") ? !a : !!a), "boolean" == typeof a ? e.toggleAttribute(i, a) : a ? e.setAttribute(i, a) : e.removeAttribute(i)
                                        }))
                                    }, w = xi(S(c.querySelectorAll("[" + Li + "]"))); !(h = w()).done;) _();
                                g.forEach((function(e) {
                                    return e(i.state)
                                })), i.off("state_diff", zi), i.on("state_diff", zi = function(e) {
                                    var n;
                                    (null == e || null == (n = e.views) ? void 0 : n.minimized) && g.forEach((function(n) {
                                        return n(e)
                                    }))
                                })
                            }(i, r, o, this)
                    },
                    getMinimizedDimensions: function() {
                        var e = document.getElementById(rn).contentDocument.querySelector('[role="main"]');
                        return q(["width", "height"], e)
                    },
                    callElementMethod: function(e) {
                        var n, t, i = e[0],
                            r = e[1],
                            o = e.slice(2);
                        null == (n = document.getElementById(rn).contentDocument.querySelector(i)) || null == (t = n[r]) || t.call.apply(t, [n].concat(o))
                    },
                    getElementProperties: function(e) {
                        var n = e[0],
                            t = e[1],
                            i = document.getElementById(rn),
                            r = i && i.contentDocument.querySelector(n);
                        return r ? A(t, r) : {}
                    }
                },
                p = t.iframeAddress + "?" + s,
                m = new MutationObserver((function(e) {
                    return e.forEach((function(e) {
                        var t = l((function(e) {
                            return "IFRAME" === e.tagName && e.getAttribute("src") === p
                        }), e.addedNodes);
                        t && function(e, n, t) {
                            N(z({}, vn, {
                                title: "openwidget" === t ? an : on
                            }), n), e.custom || j(mn, n)
                        }(n, t, a)
                    }))
                }));
            return m.observe(n.element, {
                childList: !0
            }), new Qe({
                container: n.element,
                url: p,
                methods: f,
                iframeAllowedProperties: Ii({
                    allowAutoplay: !0,
                    allowVideoConferencing: Ni(i, "microphone"),
                    allowClipboardWrite: Ni(i, "clipboard_write"),
                    allowDisplayCapture: 1520 === t.license || !1
                }),
                model: z({}, t, {
                    fullWidth: null == (u = n.size) ? void 0 : u.width,
                    fullHeight: null == (c = n.size) ? void 0 : c.height,
                    serverConfig: i,
                    parentWidth: window.innerWidth,
                    parentHeight: window.innerHeight
                })
            }).then((function(n) {
                return e.all([n, nn(n)])
            })).then((function(e) {
                var n = e[0];
                return m.disconnect(), n
            }))
        },
        Bi = function(e, n, t, i, r, o) {
            e.call("storeMethod", ["setLocalization", i]), Ut(e), t.custom || Mt(t.element, (function() {
                    return Mn(e.state, "hidden")
                })), Mi || "wix" === n.integrationName || jt(e, r, i), qi(e.frame),
                function(e, n, t) {
                    Kn(e, n, t), ("LiveChatWidget" in window || "OpenWidget" in window) && rt(e, n, t)
                }(e, n, r), ft(e, n), fe(Gn(e, (function() {
                    return function(e) {
                        var n = !1;
                        e.on("iframe_sound_unlocked", (function() {
                            return n = !0
                        })), Et().then((function(t) {
                            n || (e.emit("bridge_sound_unlocked"), e.on("add_event", (function(n) {
                                var i = n.event;
                                He(e.state, "muted") || function(e, n) {
                                    return "system" !== e.author && !e.properties.welcomeMessage && e.author !== n && "custom" !== e.type
                                }(i, We(e.state)) && t(Ct)
                            })))
                        }))
                    }(e), ge
                })), ce(x)), "wix" === n.integrationName ? function(e) {
                    Ht.addEventListener(Ht.Events.PAGE_NAVIGATION, (function() {
                        Rt().then((function(n) {
                            return e.call("storeMethod", ["setApplicationState", {
                                page: n
                            }])
                        }))
                    }))
                }(e) : (Wt(e), "openwidget" === o && (Oi(e), function(e) {
                    var n = function(n) {
                        return Si(n, e)
                    };
                    fe(jn(e, (function(e) {
                        return e.application.readyState
                    })), ue((function(e) {
                        return e === Hn
                    })), Ee(1), ce((function() {
                        document.addEventListener("click", n)
                    }))), fe(le(e, "unbind"), ce((function() {
                        document.removeEventListener("click", n)
                    })))
                }(e))), Vt(e), n.actingAsDirectLink || t.custom || function(e) {
                    fe(jn(e, (function(e) {
                        return Mn(e, "hidden")
                    })), Ie(1), ce((function(n) {
                        n ? e.applyHiddenStyles() : e.show()
                    })))
                }(e), Yt(e),
                function(e) {
                    var n = function() {
                        setTimeout((function() {
                            document.addEventListener("touchstart", x), setTimeout((function() {
                                document.removeEventListener("touchstart", x)
                            }), 500)
                        }), 500)
                    };
                    window.addEventListener("orientationchange", n), e.on("unbind", (function t() {
                        e.off("unbind", t), window.removeEventListener("orientationchange", n)
                    }))
                }(e), Dt(e, r), Mi && Xt(e), Bt(e), e.on("rich_greeting_button_clicked", (function(e) {
                    var n = e.button;
                    "url" === n.type && Qn.navigate(n.value)
                })), e.on("open_in_new_tab", (function(e) {
                    Qn.navigate(e)
                }))
        },
        Hi = function(n) {
            return wi(n).then((function(t) {
                var i;
                return e.all([t, (i = {
                    organizationId: t.organizationId,
                    licenseId: n.licenseId,
                    groupId: t.groupId,
                    region: t.region,
                    version: t.configVersion
                }, ci(_i("get_configuration", i), {
                    callbackName: "lc_static_config",
                    query: z({
                        organization_id: i.organizationId,
                        version: i.version
                    }, "number" == typeof i.groupId && {
                        group_id: i.groupId
                    })
                }).then((function(e) {
                    return bi(e)
                })))]).then((function(e) {
                    return z({}, e[0], e[1])
                }))
            }))
        },
        Ri = function(n, t) {
            window.performance && "function" == typeof window.performance.mark && window.performance.mark("lc_bridge_init");
            var i = !1,
                r = n;
            window.LC_API = window.LC_API || {}, window.LC_API.is_loaded = function() {
                return i
            };
            var o = t.region,
                a = t.organizationId,
                u = t.requestedGroupId,
                c = t.integrationName,
                s = t.customIdentityProviderInitializer,
                l = z({
                    licenseId: t.licenseId,
                    skipCodeInstallationTracking: t.skipCodeInstallationTracking,
                    channelType: t.actingAsDirectLink ? "direct_link" : "code",
                    url: qt(document.location + "")
                }, "number" == typeof u && {
                    groupId: u
                }, "string" == typeof o && {
                    region: o
                }),
                f = "livechat" === r ? Hi(l).catch((function(e) {
                    if ("DEFAULT_WIDGET_NOT_LIVECHAT" === e.code && "openwidget" === e.defaultWidget) return r = e.defaultWidget, window.__ow = window.__ow || {}, window.__ow.organizationId = e.organizationId, window.OpenWidget = z({}, window.LiveChatWidget), ki(e.organizationId);
                    throw e
                })) : ki(a);
            e.all([f, "wix" === c ? Rt() : Ft(), F()]).then((function(n) {
                var o = n[0],
                    u = n[1],
                    c = n[2];
                if (bn(o.allowedDomains, window.top === window ? window.location.hostname : document.referrer)) {
                    if (!Mi || !o.__unsafeProperties.group.disabledOnMobile || t.actingAsDirectLink) {
                        var l = oi(),
                            f = function(e) {
                                if (null === e) return null;
                                var n = e();
                                return "object" != typeof n || "function" != typeof n.getToken || "function" != typeof n.getFreshToken || "function" != typeof n.hasToken || "function" != typeof n.invalidate ? (console.error("custom_identity_provider() does not return proper handlers. ({getFreshToken: () => Promise<Token>, getToken: () => Promise<Token>, hasToken: () => Promise<boolean>, invalidate: () => Promise<void> })"), null) : n
                            }(s),
                            p = Qt(t, u, o),
                            m = function(e, n) {
                                return e.customContainer ? {
                                    custom: !0,
                                    element: e.customContainer
                                } : {
                                    custom: !1,
                                    element: Fi(n, e.actingAsDirectLink),
                                    size: ji(n)
                                }
                            }(t, o),
                            v = {},
                            h = !1,
                            g = yn("on_before_load"),
                            _ = yn("on_after_load");
                        g((function(e) {
                            e.disable_sounds = x, e.mobile_is_detected = function() {
                                return Mi
                            }, e.chat_running = function() {
                                return !1
                            }, e.visitor_engaged = function() {
                                return !1
                            }, e.agents_are_available = function() {
                                return -1 !== o.onlineGroupIds.indexOf(o.groupId)
                            }, e.get_window_type = function() {
                                return "embedded"
                            }, e.hide_chat_window = Jn(p) ? x : function() {
                                return h = !0
                            }, e.set_visitor_name = function(e) {
                                return v.name = Sn(e)
                            }, e.set_visitor_email = function(e) {
                                return v.email = Sn(e)
                            }, e.set_custom_variables = function(e) {
                                return v.properties = e ? On(e) : {}
                            }, e.update_custom_variables = function(e) {
                                e && (v.properties = z({}, v.properties, On(e)))
                            }
                        }));
                        var w, y = z({}, p, o.licenseId && {
                            license: o.licenseId
                        }, {
                            customer: z({}, p.customer, v),
                            hidden: p.hidden || h
                        }, a ? {
                            organizationId: a
                        } : {
                            organizationId: o.organizationId
                        });
                        m.custom || c.appendChild(m.element), window.performance && "function" == typeof window.performance.mark && window.performance.mark("lc_bind_child"), e.all([Wi(m, y, o, f, null, r), "openwidget" === r ? e.resolve(o.localization) : (w = {
                            organizationId: y.organizationId,
                            licenseId: y.license,
                            groupId: y.group,
                            region: y.region,
                            version: o.localizationVersion,
                            language: o.__unsafeProperties.group.language
                        }, ci(_i("get_localization", w), {
                            callbackName: "lc_localization",
                            query: z({
                                organization_id: w.organizationId,
                                version: w.version,
                                language: w.language
                            }, "number" == typeof w.groupId && {
                                group_id: w.groupId
                            })
                        }).then((function(e) {
                            return I((function(e) {
                                return e.toLowerCase()
                            }), e)
                        })))]).then((function(e) {
                            var n = e[0],
                                t = e[1];
                            return m.custom || qi(m.element), Bi(n, y, m, t, o, r), fe(jn(n, (function(e) {
                                return He(e, "readyState")
                            })), ue((function(e) {
                                return e === Hn
                            })), Ee(1), me((function() {
                                return n
                            })), Ae)
                        })).then((function(e) {
                            window.performance && "function" == typeof window.performance.mark && window.performance.mark("lc_bridge_ready"), l && l.getLogs().then((function(n) {
                                e.call("logInfo", "loading_time_measured", d(n))
                            })), _((function() {
                                return i = !0
                            })), "openwidget" === r || Math.floor(10 * Math.random()) || setTimeout((function() {
                                (function(e) {
                                    return ai(_i("get_localization", e) + "?" + H(z({
                                        organization_id: e.organizationId,
                                        version: e.version,
                                        language: e.language
                                    }, "number" == typeof e.groupId && {
                                        group_id: e.groupId
                                    }))).then((function(e) {
                                        return e.json()
                                    })).then((function(e) {
                                        return I((function(e) {
                                            return e.toLowerCase()
                                        }), e)
                                    }))
                                })({
                                    organizationId: y.organizationId,
                                    licenseId: p.license,
                                    groupId: p.group,
                                    region: p.region,
                                    version: o.localizationVersion,
                                    language: o.__unsafeProperties.group.language
                                }).catch((function() {
                                    e.call("logInfo", "potential_csp_problem", {
                                        url: window.location + ""
                                    })
                                }))
                            }), 1e4)
                        }))
                    }
                } else console.log("[LiveChat] Current domain is not added to the allowed domains. LiveChat has been disabled.")
            })).catch((function(e) {
                switch (null == e ? void 0 : e.code) {
                    case "ACCESS_NOT_RESOLVED":
                    case "CUSTOMER_BANNED":
                        return void console.warn("[LiveChat] " + e.message);
                    default:
                        throw e
                }
            }))
        };

    function Vi() {
        F().then((function(e) {
            var n = document.createElement("iframe");
            j({
                display: "none"
            }, n), e.appendChild(n), St() && (n.contentDocument.open(), n.contentDocument.close());
            var t = n.contentDocument.head;
            ["https://cdn.livechatinc.com/widget/static/js/runtime-configurator.56e2cdc8.js", "https://cdn.livechatinc.com/widget/static/js/1.f27a73f2.chunk.js", "https://cdn.livechatinc.com/widget/static/js/0.20694fc3.chunk.js", "https://cdn.livechatinc.com/widget/static/js/configurator.2140d260.chunk.js"].forEach((function(e) {
                ! function(e, n) {
                    var t = document.createElement("script");
                    N({
                        src: n,
                        charset: "utf-8"
                    }, t), e.appendChild(t)
                }(t, e)
            }))
        }))
    }
    var Gi = function(e) {
            return function(e) {
                return "number" == typeof e && e >= 0
            }(t = "string" == typeof(n = void 0 !== e.group ? e.group : e.skill) ? parseInt(n, 10) : n) ? t : null;
            var n, t
        },
        Ui = function(e, n) {
            var t = {
                name: null,
                email: null,
                properties: {}
            };
            if ("object" == typeof e && e) {
                var i = e.name,
                    r = e.email;
                "string" == typeof i && (t.name = i), "string" == typeof r && (t.email = r)
            }
            return Array.isArray(n) && (t.properties = On(n)), t
        },
        Yi = function(e) {
            if (e.wix) return "wix";
            if ("string" == typeof e.integration_name) return e.integration_name;
            if ("google_tag_manager" in window) try {
                if (void 0 !== Array.from(document.getElementsByTagName("script")).find((function(e) {
                        var n;
                        return null == (n = e.textContent) ? void 0 : n.startsWith("window.__lc")
                    }))) return "potentially_gtm"
            } catch (e) {}
            return null
        },
        Ji = function() {
            return e = "cw_configurator", n = window.location.search, $(n)[e] || fi("session") && !!window.sessionStorage.getItem("cw_configurator");
            var e, n
        };
    window.__lc_inited || function() {
        if (window.__lc_inited = !0, "msCrypto" in window) console.error("[LiveChat] We no longer support Internet Explorer");
        else if (3 === [1].reduce((function(e, n) {
                return e + n
            }), 2)) {
            var e, n, t = (e = window.__lc, {
                licenseId: parseInt(e.license),
                requestedGroupId: Gi(e),
                uniqueGroups: !1 === e.chat_between_groups,
                customer: Ui(e.visitor, e.params),
                skipCodeInstallationTracking: 1 === e.test,
                integrationName: Yi(e),
                actingAsDirectLink: !0 === e.direct_link,
                initMaximized: !0 === e.init_maximized,
                customContainer: e.custom_container || null,
                gaParams: {
                    version: "string" == typeof e.ga_version ? e.ga_version : null,
                    omitGtm: !!e.ga_omit_gtm,
                    sendToAll: !!e.ga_send_to_all_trackers
                },
                customIdentityProviderInitializer: "function" == typeof e.custom_identity_provider ? e.custom_identity_provider : null,
                iframeAddress: null,
                region: _(e.region, (n = Vn, u(n).map((function(e) {
                    return n[e]
                })))) ? e.region + "" : null
            });
            t.actingAsDirectLink || !Ji() ? Ri("livechat", t) : Vi()
        } else console.error("[LiveChat] This site has overriden Array.prototype.reduce (for example by using Prototype library) to a version that is not compatible with Web standards. LiveChat code couldn't be initialized because of this.")
    }()
}();