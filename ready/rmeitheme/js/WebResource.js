if (typeof window.RadControlsNamespace == "undefined") {
    window.RadControlsNamespace = {};
}
RadControlsNamespace.Alpha = function (O, o, Y, I, A) {
    this.Element = O;
    this.StartValue = o;
    this.EndValue = Y;
    this.Ticker = new RadControlsNamespace.Ticker(this);
    this.Ticker.Configure({Duration: I, FramesCount: A});
    this.Amount = Math.round((Y - o) / A);
};
RadControlsNamespace.Alpha.prototype.Show = function () {
    this.Coef = 1;
    this.Ticker.Start();
    this.Value = this.StartValue;
    this.UpdateOpacity();
};
RadControlsNamespace.Alpha.prototype.Hide = function () {
    this.Coef = -1;
    this.Ticker.Start();
    this.Value = this.EndValue;
    this.UpdateOpacity();
};
RadControlsNamespace.Alpha.prototype.OnTick = function () {
    this.Value += this.Coef * this.Amount;
    this.UpdateOpacity();
};
RadControlsNamespace.Alpha.prototype.OnTickEnd = function () {
    this.Element.style.filter = "";
};
RadControlsNamespace.Alpha.prototype.UpdateOpacity = function () {
    var U = this.Element;
    U.style.filter = "alpha(o\x70\x61\x63ity\x3d" + (this.Value) + "\x29";
    var Z = this.Value / 100;
    U.style.z = Z;
    U.style["\x2dmoz-opaci\x74\x79"] = Z;
    U.style["-khtml-opac\x69\x74y"] = Z;
};
;
if (typeof window.RadControlsNamespace == "undefin\x65\x64") {
    window.RadControlsNamespace = {};
}
if (typeof(window.RadControlsNamespace.Box) == "unde\x66\x69ned" || typeof(window.RadControlsNamespace.Box.Version) == null || window.RadControlsNamespace.Box.Version < 1) {
    window.RadControlsNamespace.Box = {
        Version: 1, GetOuterWidth: function (O) {
            return O.offsetWidth;
        }, GetOuterHeight: function (O) {
            return O.offsetHeight;
        }, SetOuterHeight: function (O, height) {
            if (height <= 0 || height == "") {
                O.style.height = "";
            } else {
                O.style.height = height + "px";
                var X = O.offsetHeight - height;
                var W = height - X;
                if (W > 0) {
                    O.style.height = W + "px";
                } else {
                    O.style.height = "";
                }
            }
        }, SetOuterWidth: function (O, width) {
            if (width <= 0 || width == "") {
                O.style.width = "";
            } else {
                O.style.width = width + "px";
                var X = O.offsetWidth - width;
                var w = width - X;
                if (w > 0) {
                    O.style.width = w + "px";
                } else {
                    O.style.width = "";
                }
            }
        }, GetPropertyValue: function (O, V) {
            var computedStyle = this.GetStyle(O);
            return this.GetStyleValues(computedStyle, V);
        }, GetStyle: function (O) {
            if (document.defaultView && document.defaultView.getComputedStyle) {
                return document.defaultView.getComputedStyle(O, null);
            } else if (O.currentStyle) {
                return O.currentStyle;
            } else {
                return O.style;
            }
        }
    };
}
;
if (typeof window.RadControlsNamespace == "undef\x69\x6e\145\x64") {
    window.RadControlsNamespace = {};
}
if (typeof(window.RadControlsNamespace.Browser) == "un\x64\x65fined" || typeof(window.RadControlsNamespace.Browser.Version) == null || window.RadControlsNamespace.Browser.Version < 1) {
    window.RadControlsNamespace.Browser = {Version: 1};
    window.RadControlsNamespace.Browser.ParseBrowserInfo = function () {
        this.IsMacIE = (navigator.appName == "Microsoft \x49\x6eter\x6e\x65t E\x78plorer") && ((navigator.userAgent.toLowerCase().indexOf("mac") != -1) || (navigator.appVersion.toLowerCase().indexOf("\x6dac") != -1));
        this.IsSafari = (navigator.userAgent.toLowerCase().indexOf("\x73afari") != -1);
        this.IsMozilla = window.netscape && !window.opera;
        this.IsNetscape = /\x4e\x65\x74\x73\x63\x61\x70\x65/.test(navigator.userAgent);
        this.IsOpera = window.opera;
        this.IsOpera9 = window.opera && (parseInt(window.opera.version()) > 8);
        this.IsIE = !this.IsMacIE && !this.IsMozilla && !this.IsOpera && !this.IsSafari;
        this.IsIE7 = /\x4d\x53\x49\x45\x20\x37/.test(navigator.appVersion);
        this.StandardsMode = this.IsSafari || this.IsOpera9 || this.IsMozilla || document.compatMode == "CSS1\x43\x6fmpat";
        this.IsMac = /\x4d\x61\x63/.test(navigator.userAgent);
    };
    RadControlsNamespace.Browser.ParseBrowserInfo();
}
;
if (typeof window.RadControlsNamespace == "\x75\x6edefin\x65\x64") {
    window.RadControlsNamespace = {};
}
if (typeof(window.RadControlsNamespace.DomEventMixin) == "\x75ndefined" || typeof(window.RadControlsNamespace.DomEventMixin.Version) == null || window.RadControlsNamespace.DomEventMixin.Version < 1) {
    RadControlsNamespace.DomEventMixin = {
        Version: 1, Initialize: function (T) {
            T.CreateEventHandler = this.CreateEventHandler;
            T.AttachDomEvent = this.AttachDomEvent;
            T.DetachDomEvent = this.DetachDomEvent;
            T.DisposeDomEventHandlers = this.DisposeDomEventHandlers;
            T.DomEventHandlers = [];
            T.DomEventHandlersHash = {};
            T._domEventHandlingEnabled = true;
            T.EnableDomEventHandling = this.EnableDomEventHandling;
            T.DisableDomEventHandling = this.DisableDomEventHandling;
        }, EnableDomEventHandling: function () {
            this._domEventHandlingEnabled = true;
        }, DisableDomEventHandling: function () {
            this._domEventHandlingEnabled = false;
        }, CreateEventHandler: function (t, S) {
            var R = this;
            return function (e) {
                if (!R._domEventHandlingEnabled && !S) {
                    return false;
                }
                return R[t](e || window.event);
            };
        }, AttachDomEvent: function (O, r, Q, S) {
            var eventHandler = this.CreateEventHandler(Q, S);
            var P = {"\x45\x6c\x65ment": O, "\x4e\x61me": r, "Handler": eventHandler};
            this.DomEventHandlers[this.DomEventHandlers.length] = P;
            this.DomEventHandlersHash[Q] = eventHandler;
            if (O.addEventListener) {
                O.addEventListener(r, eventHandler, false);
            } else if (O.attachEvent) {
                O.attachEvent("on" + r, eventHandler);
            }
        }, DetachDomEvent: function (O, r, eventHandler) {
            if (typeof eventHandler == "\x73tring") {
                eventHandler = this.DomEventHandlersHash[eventHandler];
            }
            if (!O) {
                return;
            }
            if (O.removeEventListener) {
                O.removeEventListener(r, eventHandler, false);
            } else if (O.detachEvent) {
                O.detachEvent("\x6f\x6e" + r, eventHandler);
            }
        }, DisposeDomEventHandlers: function () {
            for (var i = 0; i < this.DomEventHandlers.length; i++) {
                this.DetachDomEvent(this.DomEventHandlers[i].Element, this.DomEventHandlers[i].Name, this.DomEventHandlers[i].Handler);
                this.DomEventHandlers[i].Element = null;
            }
        }
    };
    RadControlsNamespace.DomEvent = {};
    RadControlsNamespace.DomEvent.PreventDefault = function (e) {
        if (!e) return true;
        if (e.preventDefault) {
            e.preventDefault();
        }
        e.returnValue = false;
        return false;
    };
    RadControlsNamespace.DomEvent.StopPropagation = function (e) {
        if (!e) return;
        if (e.stopPropagation) {
            e.stopPropagation();
        } else {
            e.cancelBubble = true;
        }
    };
    RadControlsNamespace.DomEvent.GetTarget = function (e) {
        if (!e) return null;
        return e.target || e.srcElement;
    };
    RadControlsNamespace.DomEvent.GetRelatedTarget = function (e) {
        if (!e) return null;
        return e.relatedTarget || (e.type == "\x6d\x6fuseout" ? e.toElement : e.fromElement);
    };
    RadControlsNamespace.DomEvent.GetKeyCode = function (e) {
        if (!e) return 0;
        return e.which || e.keyCode;
    };
}
;
if (typeof window.RadControlsNamespace == "u\x6e\x64efined") {
    window.RadControlsNamespace = {};
}
if (typeof(window.RadControlsNamespace.Ease) == "u\x6e\x64efined" || typeof(window.RadControlsNamespace.Ease.Version) == null || window.RadControlsNamespace.Ease.Version < .11e1) {
    RadControlsNamespace.Ease = function (O, N, offsetX, offsetY, n, M) {
        this.Element = O;
        if (M) {
            this.Overlay = new RadControlsNamespace.Overlay(O);
        }
        this.OffsetX = offsetX;
        this.OffsetY = offsetY;
        this.Invert = false;
        var parent = this.Element.parentNode;
        this.ExpandConfig = this.MergeConfig(N.ExpandAnimation);
        this.CollapseConfig = this.MergeConfig(N.CollapseAnimation);
        this.Ticker = new RadControlsNamespace.Ticker(this);
        this.Listener = n;
        this.SlideParent = false;
    };
    RadControlsNamespace.Ease.Version = .11e1;
    RadControlsNamespace.Ease.Coef = 0;
    RadControlsNamespace.Ease.prototype = {
        SetSide: function (m) {
            this.InitialSide = m.charAt(0).toUpperCase() + m.substr(1, m.length - 1);
            this.Invert = false;
            if (m == "\x72\x69\x67ht") {
                m = "l\x65\x66t";
                this.Invert = true;
            }
            if (m == "\x62\x6fttom") {
                m = "\x74op";
                this.Invert = true;
            }
            this.Side = m;
            this.Horizontal = m == "\x6c\x65ft";
        }, MergeConfig: function (L) {
            if (!L.Type) {
                L.Type = "OutQuint";
            }
            if (!L.Duration) {
                L.Duration = 200;
            }
            return L;
        }, GetSide: function () {
            return this.InitialSide;
        }, ShowElements: function () {
            this.Element.parentNode.style.display = "\x62lock";
            this.Element.style.display = "block";
            this.Element.parentNode.style.overflow = "\x68idden";
        }, Dispose: function () {
            this.Ticker.Stop();
            this.Element = null;
            if (this.Overlay) {
                this.Overlay.Dispose();
            }
        }, ResetState: function (l) {
            this.ShowElements();
            if (l) {
                var K = (this.Horizontal ? this.Element.offsetWidth : this.Element.offsetHeight);
                if (!this.Invert) {
                    K = -K;
                }
                this.SetPosition(K);
            }
            this.InitialPosition = this.GetPosition();
        }, UpdateContainerSize: function () {
            if (!this.Element.parentNode) {
                return;
            }
            if (!this.Element.offsetWidth || !this.Element.offsetHeight) {
                return;
            }
            if (this.Invert) {
                if (this.Side == "left") {
                    this.Element.parentNode.style.height = this.Element.offsetHeight + "px";
                } else if (this.Side == "top") {
                    this.Element.parentNode.style.width = this.Element.offsetWidth + "px";
                }
                return;
            }
            var top = 0;
            var left = 0;
            if (this.Element.style.top != "") {
                top = Math.max(parseInt(this.Element.style.top), 0);
            }
            if (this.Element.style.left != "") {
                left = Math.max(parseInt(this.Element.style.left), 0);
            }
            if (this.SlideParent) {
                top = parseInt(this.Element.style.top);
                if (isNaN(top)) top = 0;
            }
            if (this.Element.parentNode.style.height != this.Element.offsetHeight + top + "\x70x") {
                this.Element.parentNode.style.height = Math.max(this.Element.offsetHeight + top, 0) + "px";
            }
            if (this.Element.parentNode.style.width != (this.Element.offsetWidth + left) + "\x70x") {
                this.Element.parentNode.style.width = Math.max(this.Element.offsetWidth + left, 0) + "\x70x";
            }
        }, GetSize: function () {
            return this.Horizontal ? this.Element.offsetWidth : this.Element.offsetHeight;
        }, GetPosition: function () {
            if (!this.Element.style[this.Side]) {
                return 0;
            }
            return parseInt(this.Element.style[this.Side]);
        }, SetPosition: function (value) {
            this.Element.style[this.Side] = value + "\x70x";
        }, Out: function () {
            this.ResetState();
            this.Direction = -1;
            if (this.Invert) {
                this.Delta = this.GetSize() - this.GetPosition();
            } else {
                this.Delta = this.GetPosition() - this.GetSize();
            }
            this.Start(this.CollapseConfig);
        }, In: function () {
            this.ResetState(true);
            this.Direction = 1;
            this.Delta = -this.GetPosition();
            this.Start(this.ExpandConfig);
        }, Start: function (k) {
            if (k.Type == "\x4eone") {
                this.UpdateContainerSize();
                this.Ticker.Stop();
                this.ChangePosition(this.InitialPosition + this.Delta);
                if (this.Overlay) {
                    this.Overlay.Update();
                }
                this.UpdateContainerSize();
                this.OnTickEnd();
                return;
            }
            this.Tween = k.Type;
            this.Ticker.Configure(k);
            this.Ticker.Start();
            this.UpdateContainerSize();
        }, ChangePosition: function (J) {
            if (isNaN(J)) return;
            var j, H, h;
            if (this.Invert) {
                if (this.Horizontal) {
                    j = this.Element.offsetWidth;
                    H = "\x77idth";
                    h = this.OffsetX;
                } else {
                    j = this.Element.offsetHeight;
                    H = "height";
                    h = this.OffsetY;
                }
                this.SetPosition(0);
                var G = Math.max(1, j - J) + "px";
                this.Element.parentNode.style[H] = G;
                this.Element.parentNode.style[this.Side] = ((j - J + h) * -1) + "\x70x";
            } else {
                this.Element.style[this.Side] = J + "\x70x";
            }
        }, OnTick: function (time) {
            var J = Math.round(Penner[this.Tween](time, this.InitialPosition, this.Delta, this.Ticker.Duration));
            if (J == this.InitialPosition + this.Delta) {
                this.Ticker.Stop();
                return;
            }
            this.ChangePosition(J);
            this.UpdateContainerSize();
            if (this.Overlay) {
                this.Overlay.Update();
            }
        }, OnTickEnd: function () {
            try {
                if (this.Direction == 0) {
                    return;
                }
                this.ChangePosition(this.InitialPosition + this.Delta);
                if (this.Overlay) {
                    this.Overlay.Update();
                }
                if (this.Direction > 0) {
                    this.Element.parentNode.style.overflow = "visibl\x65";
                    if (this.Listener && this.Listener.OnExpandComplete) {
                        this.Listener.OnExpandComplete();
                    }
                } else {
                    this.Element.parentNode.style.display = "\156\x6f\x6ee";
                    if (this.Listener) {
                        this.Listener.OnCollapseComplete();
                    }
                }
                this.Direction = 0;
            } catch (e) {
            }
        }
    };
}
;var Penner = {};
Penner.Linear = function (g, b, F, f) {
    return F * g / f + b;
};
Penner.InQuad = function (g, b, F, f) {
    return F * (g /= f) * g + b;
};
Penner.OutQuad = function (g, b, F, f) {
    return -F * (g /= f) * (g - 2) + b;
};
Penner.InOutQuad = function (g, b, F, f) {
    if ((g /= f / 2) < 1) return F / 2 * g * g + b;
    return -F / 2 * ((--g) * (g - 2) - 1) + b;
};
Penner.InCubic = function (g, b, F, f) {
    return F * (g /= f) * g * g + b;
};
Penner.OutCubic = function (g, b, F, f) {
    return F * ((g = g / f - 1) * g * g + 1) + b;
};
Penner.InOutCubic = function (g, b, F, f) {
    if ((g /= f / 2) < 1) return F / 2 * g * g * g + b;
    return F / 2 * ((g -= 2) * g * g + 2) + b;
};
Penner.InQuart = function (g, b, F, f) {
    return F * (g /= f) * g * g * g + b;
};
Penner.OutQuart = function (g, b, F, f) {
    return -F * ((g = g / f - 1) * g * g * g - 1) + b;
};
Penner.InOutQuart = function (g, b, F, f) {
    if ((g /= f / 2) < 1) return F / 2 * g * g * g * g + b;
    return -F / 2 * ((g -= 2) * g * g * g - 2) + b;
};
Penner.InQuint = function (g, b, F, f) {
    return F * (g /= f) * g * g * g * g + b;
};
Penner.OutQuint = function (g, b, F, f) {
    return F * ((g = g / f - 1) * g * g * g * g + 1) + b;
};
Penner.InOutQuint = function (g, b, F, f) {
    if ((g /= f / 2) < 1) return F / 2 * g * g * g * g * g + b;
    return F / 2 * ((g -= 2) * g * g * g * g + 2) + b;
};
Penner.InSine = function (g, b, F, f) {
    return -F * Math.cos(g / f * (Math.PI / 2)) + F + b;
};
Penner.OutSine = function (g, b, F, f) {
    return F * Math.sin(g / f * (Math.PI / 2)) + b;
};
Penner.InOutSine = function (g, b, F, f) {
    return -F / 2 * (Math.cos(Math.PI * g / f) - 1) + b;
};
Penner.InExpo = function (g, b, F, f) {
    return (g == 0) ? b : F * Math.pow(2, 10 * (g / f - 1)) + b;
};
Penner.OutExpo = function (g, b, F, f) {
    return (g == f) ? b + F : F * (-Math.pow(2, -10 * g / f) + 1) + b;
};
Penner.InOutExpo = function (g, b, F, f) {
    if (g == 0) return b;
    if (g == f) return b + F;
    if ((g /= f / 2) < 1) return F / 2 * Math.pow(2, 10 * (g - 1)) + b;
    return F / 2 * (-Math.pow(2, -10 * --g) + 2) + b;
};
Penner.InCirc = function (g, b, F, f) {
    return -F * (Math.sqrt(1 - (g /= f) * g) - 1) + b;
};
Penner.OutCirc = function (g, b, F, f) {
    return F * Math.sqrt(1 - (g = g / f - 1) * g) + b;
};
Penner.InOutCirc = function (g, b, F, f) {
    if ((g /= f / 2) < 1) return -F / 2 * (Math.sqrt(1 - g * g) - 1) + b;
    return F / 2 * (Math.sqrt(1 - (g -= 2) * g) + 1) + b;
};
Penner.InElastic = function (g, b, F, f, a, p) {
    if (g == 0) return b;
    if ((g /= f) == 1) return b + F;
    if (!p) p = f * .3;
    if ((!a) || a < Math.abs(F)) {
        a = F;
        var s = p / 4;
    } else var s = p / (2 * Math.PI) * Math.asin(F / a);
    return -(a * Math.pow(2, 10 * (g -= 1)) * Math.sin((g * f - s) * (2 * Math.PI) / p)) + b;
};
Penner.OutElastic = function (g, b, F, f, a, p) {
    if (g == 0) return b;
    if ((g /= f) == 1) return b + F;
    if (!p) p = f * .3;
    if ((!a) || a < Math.abs(F)) {
        a = F;
        var s = p / 4;
    } else var s = p / (2 * Math.PI) * Math.asin(F / a);
    return a * Math.pow(2, -10 * g) * Math.sin((g * f - s) * (2 * Math.PI) / p) + F + b;
};
Penner.InOutElastic = function (g, b, F, f, a, p) {
    if (g == 0) return b;
    if ((g /= f / 2) == 2) return b + F;
    if (!p) p = f * (.3 * .15e1);
    if ((!a) || a < Math.abs(F)) {
        a = F;
        var s = p / 4;
    } else var s = p / (2 * Math.PI) * Math.asin(F / a);
    if (g < 1) return -.5 * (a * Math.pow(2, 10 * (g -= 1)) * Math.sin((g * f - s) * (2 * Math.PI) / p)) + b;
    return a * Math.pow(2, -10 * (g -= 1)) * Math.sin((g * f - s) * (2 * Math.PI) / p) * .5 + F + b;
};
Penner.InBack = function (g, b, F, f, s) {
    if (s == undefined) s = .170158e1;
    return F * (g /= f) * g * ((s + 1) * g - s) + b;
};
Penner.OutBack = function (g, b, F, f, s) {
    if (s == undefined) s = .170158e1;
    return F * ((g = g / f - 1) * g * ((s + 1) * g + s) + 1) + b;
};
Penner.InOutBack = function (g, b, F, f, s) {
    if (s == undefined) s = .170158e1;
    if ((g /= f / 2) < 1) return F / 2 * (g * g * (((s *= (.1525e1)) + 1) * g - s)) + b;
    return F / 2 * ((g -= 2) * g * (((s *= (.1525e1)) + 1) * g + s) + 2) + b;
};
Penner.InBounce = function (g, b, F, f) {
    return F - Penner.OutBounce(f - g, 0, F, f) + b;
};
Penner.OutBounce = function (g, b, F, f) {
    if ((g /= f) < (1 / .275e1)) {
        return F * (.75625e1 * g * g) + b;
    } else if (g < (2 / .275e1)) {
        return F * (.75625e1 * (g -= (.15e1 / .275e1)) * g + .75) + b;
    } else if (g < (.25e1 / .275e1)) {
        return F * (.75625e1 * (g -= (.225e1 / .275e1)) * g + .9375) + b;
    } else {
        return F * (.75625e1 * (g -= (.2625e1 / .275e1)) * g + .984375) + b;
    }
};
Penner.InOutBounce = function (g, b, F, f) {
    if (g < f / 2) return Penner.InBounce(g * 2, 0, F, f) * .5 + b;
    return Penner.OutBounce(g * 2 - f, 0, F, f) * .5 + F * .5 + b;
};
;
if (typeof window.RadControlsNamespace == "u\x6e\x64\145f\x69\x6eed") {
    window.RadControlsNamespace = {};
}
if (typeof(window.RadControlsNamespace.EventMixin) == "undefined" || typeof(window.RadControlsNamespace.EventMixin.Version) == null || window.RadControlsNamespace.EventMixin.Version < 1) {
    RadControlsNamespace.EventMixin = {
        Version: 1, Initialize: function (T) {
            T._listeners = {};
            T._eventsEnabled = true;
            T.AttachEvent = this.AttachEvent;
            T.DetachEvent = this.DetachEvent;
            T.RaiseEvent = this.RaiseEvent;
            T.EnableEvents = this.EnableEvents;
            T.DisableEvents = this.DisableEvents;
        }, DisableEvents: function () {
            this._eventsEnabled = false;
        }, EnableEvents: function () {
            this._eventsEnabled = true;
        }, AttachEvent: function (r, D) {
            if (!this._listeners[r]) {
                this._listeners[r] = [];
            }
            this._listeners[r][this._listeners[r].length] = (RadControlsNamespace.EventMixin.ResolveFunction(D));
        }, DetachEvent: function (r, D) {
            var C = this._listeners[r];
            if (!C) {
                return false;
            }
            var B = RadControlsNamespace.EventMixin.ResolveFunction(D);
            for (var i = 0; i < C.length; i++) {
                if (B == C[i]) {
                    C.splice(i, 1);
                    return true;
                }
            }
            return false;
        }, ResolveFunction: function (o0) {
            if (typeof(o0) == "f\x75nction") {
                return o0;
            } else if (typeof(window[o0]) == "\x66uncti\x6f\x6e") {
                return window[o0];
            } else {
                return new Function("\x76ar Sender\x20\x3d ar\x67\x75me\x6e\x74s[\x30\x5d; v\x61\x72 \x41rgum\x65\156\x74s = a\x72\147u\x6dents[\x31];" + o0);
            }
        }, RaiseEvent: function (r, O0) {
            if (!this._eventsEnabled) {
                return true;
            }
            var l0 = true;
            if (this[r]) {
                var i0 = RadControlsNamespace.EventMixin.ResolveFunction(this[r])(this, O0);
                if (typeof(i0) == "und\x65\x66ined") {
                    i0 = true;
                }
                l0 = l0 && i0;
            }
            if (!this._listeners[r]) return l0;
            for (var i = 0; i < this._listeners[r].length; i++) {
                var D = this._listeners[r][i];
                var i0 = D(this, O0);
                if (typeof(i0) == "\x75ndefined") {
                    i0 = true;
                }
                l0 = l0 && i0;
            }
            return l0;
        }
    };
}
;
if (typeof window.RadControlsNamespace == "undefine\x64") {
    window.RadControlsNamespace = {};
}
if (typeof(window.RadControlsNamespace.JSON) == "\x75\x6edefine\x64" || typeof(window.RadControlsNamespace.JSON.Version) == null || window.RadControlsNamespace.JSON.Version < 1) {
    window.RadControlsNamespace.JSON = {
        Version: 1,
        copyright: "(c)2005 J\x53\x4fN.o\x72\x67",
        license: "h\x74\x74p://ww\x77\x2ecro\x63\x6bf\x6f\162\x64\x2eco\x6d\x2fJS\x4fN/lic\x65nse.h\x74\x6dl",
        stringify: function (Z, I0) {
            var a = [];
            var o1 = arguments[2] || {};

            function e(s) {
                a[a.length] = s;
            }

            function O1(x) {
                var F, i, l1, Z;
                switch (typeof x) {
                    case "\x6fbject":
                        if (x) {
                            if (x instanceof Array) {
                                e("\x5b");
                                l1 = a.length;
                                for (i = 0; i < x.length; i += 1) {
                                    Z = x[i];
                                    if (typeof Z != "\x75ndefined" && typeof Z != "func\x74\x69on") {
                                        if (l1 < a.length) {
                                            e("\x2c");
                                        }
                                        O1(Z);
                                    }
                                }
                                e("]");
                                return "";
                            } else if (typeof x.valueOf == "func\x74\x69on") {
                                e("\x7b");
                                l1 = a.length;
                                for (i in x) {
                                    Z = x[i];
                                    if (I0 && Z == I0[i]) {
                                        continue;
                                    }
                                    var type = typeof Z;
                                    if (type == "\x75ndefined" || type == "fun\x63\x74ion") {
                                        continue;
                                    }
                                    if (type == "object" && !o1[i]) {
                                        continue;
                                    }
                                    if (l1 < a.length) {
                                        e("\x2c");
                                    }
                                    O1(i);
                                    e(":");
                                    O1(Z);
                                }
                                return e("}");
                            }
                        }
                        e("nu\x6c\x6c");
                        return "";
                    case "\156\x75\x6dber":
                        e(isFinite(x) ? +x : "null");
                        return "";
                    case "strin\x67":
                        l1 = x.length;
                        e("\x22");
                        for (i = 0; i < l1; i += 1) {
                            F = x.charAt(i);
                            if (F >= "\x20") {
                                if (F == "\x5c" || F == "\042") {
                                    e("\134");
                                }
                                e(F);
                            } else {
                                switch (F) {
                                    case "\010":
                                        e("\134b");
                                        break;
                                    case "\x0c":
                                        e("\134\x66");
                                        break;
                                    case "\x0a":
                                        e("\134n");
                                        break;
                                    case "\x0d":
                                        e("\x5cr");
                                        break;
                                    case "\x09":
                                        e("\134t");
                                        break;
                                    default:
                                        F = F.charCodeAt();
                                        e("\134u\x30\x30" + Math.floor(F / 16).toString(16) + (F % 16).toString(16));
                                }
                            }
                        }
                        e("\x22");
                        return "";
                    case "boolean":
                        e(String(x));
                        return "";
                    default:
                        e("\x6eull");
                        return "";
                }
            }

            O1(Z, 0);
            return a.join("");
        },
        stringifyHashTable: function (hash, i1, I1) {
            var a = [];
            if (!I1) I1 = [];
            for (var i = 0; i < hash.length; i++) {
                var o2 = this.stringify(hash[i], I1[i]);
                if (o2 == "\x7b}") continue;
                a[a.length] = "\x22" + hash[i][i1] + "\042\x3a" + o2;
            }
            return "{" + a.join(",") + "\x7d";
        },
        parse: function (text) {
            return (/^([\x20\x09\x0d\x0a\x2c\x3a\x7b\x7d\x5b\x5d]|\x22(\x5c[\x22\x5c\x2f\x62\x66\x6e\x72\x74\x75]|[^\x00-\x1f\x22\x5c]+)*\x22|\x2d?\d+(\x2e\d*)?([\x65\x45][\x2b-]?\d+)?|\x74\x72\x75\x65|\x66\x61\x6c\x73\x65|\x6e\x75\x6c\x6c)+$/.test(text)) && eval("(" + text + ")");
        }
    };
}
;
if (typeof window.RadControlsNamespace == "\165ndefin\x65\x64") {
    window.RadControlsNamespace = {};
}
if (typeof(window.RadControlsNamespace.Overlay) == "\x75ndefin\x65\x64" || typeof(window.RadControlsNamespace.Overlay.Version) == null || window.RadControlsNamespace.Overlay.Version < .11e1) {
    window.RadControlsNamespace.Overlay = function (O) {
        if (!this.SupportsOverlay()) {
            return;
        }
        this.Element = O;
        this.Shim = document.createElement("\x49FRAME");
        this.Shim.src = "\x6aavascript:\x27\047\x3b";
        this.Element.parentNode.insertBefore(this.Shim, this.Element);
        if (O.style.zIndex > 0) {
            this.Shim.style.zIndex = O.style.zIndex - 1;
        }
        this.Shim.style.position = "absolute";
        this.Shim.style.border = "0\x70\x78";
        this.Shim.frameBorder = 0;
        this.Shim.style.filter = "\x70\162ogi\x64\x3aDXIm\x61\x67eT\x72ansfor\x6d\056M\x69\143r\x6fsoft\x2eAlpha(\x73\164y\x6ce=0,o\x70\141c\x69ty=0)";
        this.Shim.disabled = "\x64\x69sabled";
    };
    window.RadControlsNamespace.Overlay.Version = .11e1;
    RadControlsNamespace.Overlay.prototype.SupportsOverlay = function () {
        return RadControlsNamespace.Browser.IsIE || (RadControlsNamespace.Browser.IsMozilla && RadControlsNamespace.Browser.IsMac);
    };
    RadControlsNamespace.Overlay.prototype.Update = function () {
        if (!this.SupportsOverlay()) {
            return;
        }
        this.Shim.style.top = this.ToUnit(this.Element.style.top);
        this.Shim.style.left = this.ToUnit(this.Element.style.left);
        this.Shim.style.width = this.Element.offsetWidth + "px";
        this.Shim.style.height = this.Element.offsetHeight + "px";
    };
    RadControlsNamespace.Overlay.prototype.ToUnit = function (value) {
        if (!value) return "\x30px";
        return parseInt(value) + "\x70\170";
    };
    RadControlsNamespace.Overlay.prototype.Dispose = function () {
        if (!this.SupportsOverlay()) {
            return;
        }
        if (this.Shim.parentNode) {
            this.Shim.parentNode.removeChild(this.Shim);
        }
        this.Element = null;
        this.Shim = null;
    };
}
;
if (typeof window.RadMenuNamespace == "\x75\156d\x65\x66ine\x64") {
    window.RadMenuNamespace = {};
}
if (typeof window.RadControlsNamespace == "undefin\x65\x64") {
    window.RadControlsNamespace = {};
}
RadControlsNamespace.AppendStyleSheet = function (O2, l2, i2) {
    if (!i2) {
        return;
    }
    if (!O2) {
        document.write("<" + "link" + " re\x6c\x3d\047\x73tyl\x65\163he\x65t\047\x20type=\047\x74ex\x74/css\x27 href\x3d\047" + i2 + "\047\x20/>");
    } else {
        var I2 = document.createElement("\x4cINK");
        I2.rel = "\x73tyleshee\x74";
        I2.type = "\x74ext/css";
        I2.href = i2;
        document.getElementById(l2 + "\x53tyleSheetH\x6f\x6cder").appendChild(I2);
    }
};
RadMenuNamespace.ItemFlow = {Vertical: 0, Horizontal: 1};
RadMenuNamespace.ExpandDirection = {Auto: 0, Up: 1, Down: 2, Left: 3, Right: 4};
RadMenuNamespace.ExpandDirectionPropertyName = {"1": "botto\x6d", "2": "top", "3": "righ\x74", "\x34": "\x6c\x65ft"};

function RadMenu(l2) {
    var o3 = window[l2];
    if (o3 != null && o3.Dispose) {
        o3.Dispose();
    }
    this.DomElement = document.getElementById(l2);
    this.ChildItemList = RadMenu.GetFirstChildByTagName(this.DomElement, "ul");
    this.StateField = document.getElementById(l2 + "_\x48\151d\x64\x65n");
    this.Items = [];
    this.AllItems = [];
    this.OpenedItem = null;
    this.LastExpandedItem = null;
    this.ExpandAnimation = {};
    this.CollapseAnimation = {};
    this.CollapseDelay = 500;
    this.ExpandDelay = 0;
    this.ID = l2;
    this.Skin = "\x44efault";
    this.RightToLeft = false;
    this.EnableScreenBoundaryDetection = true;
    this.InUpdate = false;
    this.Initialized = false;
    this.State = {};
    this.ItemState = {};
    this.CausesValidation = true;
    this.Flow = RadMenuNamespace.ItemFlow.Horizontal;
    this.ClickToOpen = false;
    this.Enabled = true;
    this.EnableAutoScroll = false;
    this.Clicked = false;
    this.OriginalZIndex = this.DomElement.style.zIndex;
    this.Attributes = {};
    RadControlsNamespace.EventMixin.Initialize(this);
    RadControlsNamespace.DomEventMixin.Initialize(this);
}

RadMenu.JSONIncludeDeep = {"At\x74rib\x75\x74es": true};
RadMenu.CreateState = function (R) {
    R.InitialState = {};
    for (var i in R) {
        var type = typeof R[i];
        if (type == "\x6eumber" || type == "\x73\x74ring" || type == "\x62\x6folean") R.InitialState[i] = R[i];
    }
};
RadMenu.GetFirstChildByTagName = function (parentNode, tagName) {
    var O3 = parentNode.getElementsByTagName(tagName)[0];
    if (O3 && O3.parentNode == parentNode) {
        return O3;
    }
    return null;
};
RadMenu.prototype.RenderInProgress = function () {
    return this.DomElement.offsetWidth == 0;
};
RadMenu.prototype.Detach = function (e) {
    if (!(RadControlsNamespace.Browser.IsIE) || document.readyState == "\x63omplete") {
        document.forms[0].appendChild(this.DomElement);
        this.DomElement.style.position = "\x61bsolute";
        this.Detached = true;
    }
};
RadMenu.prototype.Show = function (e) {
    this.RaiseEvent("O\x6e\x43lientCo\x6e\164\x65\x78t\x53\x68owi\x6e\147", null);
    for (var i in RadMenuNamespace.ContextMenus) {
        RadMenuNamespace.ContextMenus[i].Hide();
    }
    var x = this.MouseEventX(e);
    var y = this.MouseEventY(e);
    return this.ShowAt(x, y);
};
RadMenu.prototype.ShowAt = function (x, y) {
    if (!this.Detached) {
        this.Detach();
    }
    this.ShownAsContext = true;
    this.Ease.ShowElements();
    this.Ease.UpdateContainerSize();
    if (!this.WidthFixed) {
        this.WidthFixed = true;
        this.FixItemWidth(this);
    }
    this.Position(x, y);
    this.Ease.In();
    this.RaiseEvent("OnClie\x6e\x74Cont\x65\x78tSh\x6f\167\x6e", null);
    return false;
};
RadMenu.prototype.Position = function (x, y) {
    var l3 = RadControlsNamespace.Screen.GetViewPortSize();
    x = Math.min(x, l3.width - this.DomElement.offsetWidth);
    y = Math.min(y, l3.height - this.DomElement.offsetHeight);
    if (isNaN(x)) x = 0;
    if (isNaN(y)) y = 0;
    this.DomElement.style.left = x + "px";
    this.DomElement.style.top = y + "\x70x";
};
RadMenu.prototype.MouseEventX = function (e) {
    if (e.pageX) {
        return e.pageX;
    } else if (e.clientX) {
        if (RadControlsNamespace.Browser.StandardsMode) {
            return (e.clientX + document.documentElement.scrollLeft);
        }
        return (e.clientX + document.body.scrollLeft);
    }
};
RadMenu.prototype.MouseEventY = function (e) {
    if (e.pageY) {
        return e.pageY;
    } else if (e.clientY) {
        if (RadControlsNamespace.Browser.StandardsMode) {
            return (e.clientY + document.documentElement.scrollTop);
        }
        return (e.clientY + document.body.scrollTop);
    }
};
RadMenu.prototype.EventSource = function (e) {
    return RadControlsNamespace.DomEvent.GetTarget(e);
};
RadMenu.prototype.Hide = function () {
    if (this.ShownAsContext) {
        this.Ease.Out();
        this.ShownAsContext = false;
        this.RaiseEvent("O\x6eClientCon\x74\x65xtHi\x64\x64e\x6e", null);
    }
};
RadMenu.prototype.Initialize = function (N, i3) {
    this.LoadConfiguration(N);
    this.ItemData = i3;
    this.DetermineDirection();
    this.ApplyRTL();
    if (this.IsContext) {
        this.InitContextMenu();
    }
    this.CreateControlHierarchy(this, 0);
    if (!this.Enabled) {
        this.Disable();
    }
    if (this.Flow == RadMenuNamespace.ItemFlow.Vertical) {
        this.FixRootItemWidth();
    }
    this.RegisterDisposeOnUnload();
    this.AttachEventHandlers();
    this.Initialized = true;
    RadMenu.CreateState(this);
    this.RaiseEvent("\x4fnClien\x74\x4coad", null);
};
RadMenu.prototype.AttachEventHandlers = function () {
    var R = this;
    this.DomElement.RadShow = function () {
        if (R.Flow == RadMenuNamespace.ItemFlow.Vertical) {
            R.FixRootItemWidth();
        }
    };
};
RadMenu.prototype.DetermineDirection = function () {
    var U = this.DomElement;
    while (U.tagName.toLowerCase() != "\x68tml") {
        if (U.dir) {
            this.RightToLeft = (U.dir.toLowerCase() == "\x72\x74l");
            return;
        }
        U = U.parentNode;
    }
    this.RightToLeft = false;
};
RadMenu.prototype.ApplyRTL = function () {
    if (!this.RightToLeft) return;
    this.FixRootItemWidth();
    if (RadControlsNamespace.Browser.IsIE) {
        this.DomElement.dir = "l\x74\x72";
    }
    if (!this.IsContext) {
        this.DomElement.className += "\x20rtl RadMen\x75\x5f" + this.Skin + "\x5f\x72tl";
    } else {
        this.DomElement.className += " rtlconte\x78\x74 Ra\x64\x4denu_" + this.Skin + "_rtl";
    }
};
RadMenu.prototype.InitContextMenu = function () {
    this.Ease = new RadControlsNamespace.Ease(this.ChildItemList, this, 0, 0, null, true);
    this.Flow = RadMenuNamespace.ItemFlow.Vertical;
    this.Ease.SetSide("top");
    if (RadControlsNamespace.Browser.IsOpera) {
        this.AttachDomEvent(document, "\155\x6f\165sed\x6f\x77n", "\x4fnConte\x78\x74Menu");
    } else {
        this.AttachDomEvent(document, "\x63\157nte\x78\x74menu", "OnContex\x74\x4denu");
    }
    this.AttachDomEvent(document, "cl\x69\x63k", "OnDo\x63\x75ment\x43\x6cick");
    if (!RadMenuNamespace.ContextMenus) {
        RadMenuNamespace.ContextMenus = {};
    }
    if (!RadMenuNamespace.ContextElements) {
        RadMenuNamespace.ContextElements = {};
    }
    if (this.ContextMenuElementID) {
        RadMenuNamespace.ContextElements[this.ContextMenuElementID] = true;
    }
    RadMenuNamespace.ContextMenus[this.ID] = this;
};
RadMenu.prototype.OnContextMenu = function (e) {
    if (RadControlsNamespace.Browser.IsOpera) {
        if (e.button != 2) {
            return;
        }
    }
    this.ContextElement = document.getElementById(this.ContextMenuElementID);
    if (this.ContextMenuElementID && !this.ContextElement) {
        return;
    }
    var I3 = this.EventSource(e);
    if (this.ContextElement) {
        if (I3 == this.ContextElement || this.IsChildOf(this.ContextElement, I3)) {
            this.Show(e);
            RadControlsNamespace.DomEvent.PreventDefault(e);
            RadControlsNamespace.DomEvent.StopPropagation(e);
        }
    } else if (!RadMenuNamespace.ContextElements[I3.id]) {
        this.Show(e);
        RadControlsNamespace.DomEvent.PreventDefault(e);
        RadControlsNamespace.DomEvent.StopPropagation(e);
    }
};
RadMenu.prototype.IsChildOf = function (parent, O3) {
    if (O3 == parent) {
        return false;
    }
    while (O3 && (O3 != document.body)) {
        if (O3 == parent) {
            return true;
        }
        try {
            O3 = O3.parentNode;
        } catch (e) {
            return false;
        }
    }
    return false;
};
RadMenu.prototype.OnDocumentClick = function (e) {
    var I3 = this.EventSource(e);
    if (this.IsChildOf(this.DomElement, I3)) {
        if (!this.IsChildOfMenuItem(I3)) {
            return;
        }
    }
    this.Hide();
};
RadMenu.prototype.IsChildOfMenuItem = function (O) {
    if (O.tagName == "\x53P\x41\x4e" && O.className.indexOf("text") > -1) {
        return true;
    }
    if (O.tagName == "\x41" && O.className.indexOf("link") > -1) {
        return true;
    }
    return false;
};
RadMenu.prototype.Enable = function () {
    this.Enabled = true;
    this.DomElement.disabled = "";
    for (var i = 0; i < this.AllItems.length; i++) {
        this.AllItems[i].Enable();
    }
};
RadMenu.prototype.Disable = function () {
    this.Enabled = false;
    this.DomElement.disabled = "\x64isabled";
    for (var i = 0; i < this.AllItems.length; i++) {
        this.AllItems[i].Disable();
    }
};
RadMenu.prototype.Focus = function () {
    this.DomElement.focus();
};
RadMenu.prototype.RegisterDisposeOnUnload = function () {
    if (!RadControlsNamespace.Browser.IsIE) return;
    var R = this;
    this.DisposeHandler = function () {
        R.Dispose();
    };
    window.attachEvent("onunload", this.DisposeHandler);
};
RadMenu.prototype.Dispose = function () {
    for (var i = 0; i < this.AllItems.length; i++) {
        this.AllItems[i].Dispose();
    }
    if (this.Detached && this.DomElement) {
        if (this.DomElement.parentNode) {
            this.DomElement.parentNode.removeChild(this.DomElement);
        }
    }
    if (RadControlsNamespace.Browser.IsIE) {
        window.detachEvent("onunl\x6f\141\x64", this.DisposeHandler);
        this.DisposeHandler = null;
    }
    if (this.DomElement) {
        this.DomElement.RadShow = null;
    }
    this.DomElement = null;
    this.ChildItemList = null;
    this.DisposeDomEventHandlers();
    if (this.IsContext && RadMenuNamespace.ContextMenus) {
        RadMenuNamespace.ContextMenus[this.ID] = null;
    }
};
RadMenu.prototype.CreateMenuItem = function (parent, o4) {
    var item = new RadMenuItem(o4);
    this.AddItemToParent(parent, item);
    return item;
};
RadMenu.prototype.AddItemToParent = function (parent, item) {
    item.Index = parent.Items.length;
    parent.Items[parent.Items.length] = item;
    item.GlobalIndex = this.AllItems.length;
    this.AllItems[this.AllItems.length] = item;
    item.Parent = parent;
    item.Menu = this;
};
RadMenu.prototype.CreateControlHierarchy = function (parent, O4) {
    parent.Level = O4;
    var O = parent.ChildItemList;
    if (!O) {
        return;
    }
    for (var i = 0; i < O.childNodes.length; i++) {
        var l4 = O.childNodes[i];
        if (l4.nodeType == 3) continue;
        var item = this.CreateMenuItem(parent, l4);
        item.Initialize();
        if (O4 == 0) {
            item.PostInitialize();
        }
        this.CreateControlHierarchy(item, O4 + 1);
    }
};
RadMenu.prototype.FixItemWidth = function (item) {
    var i4 = 0;
    var I4 = 0;
    var ul = item.ChildItemList;
    for (var i = 0; i < ul.childNodes.length; i++) {
        var li = ul.childNodes[i];
        if (li.nodeType == 3) continue;
        var O = RadMenu.GetFirstChildByTagName(li, "\x61");
        if (!O) {
            O = li;
        }
        if (this.RightToLeft) {
            var o5 = O.getElementsByTagName("\x69mg")[0];
            if (o5) {
                o5.style.styleFloat = "\x6ceft";
            }
        }
        i4 = Math.max(RadControlsNamespace.Box.GetOuterWidth(O), i4);
        if (this.RightToLeft) {
            var o5 = O.getElementsByTagName("img")[0];
            if (o5) {
                o5.style.styleFloat = "\x72ight";
            }
        }
    }
    for (var i = 0; i < ul.childNodes.length; i++) {
        var li = ul.childNodes[i];
        if (li.nodeType == 3) continue;
        if (RadControlsNamespace.Browser.IsOpera) {
            li.style.cssFloat = "n\x6fne";
        }
        var a = RadMenu.GetFirstChildByTagName(li, "\x61");
        if (a) {
            var O5 = !RadMenu.GetFirstChildByTagName(a, "\x73pan").firstChild;
            if (!RadControlsNamespace.Browser.IsIE || !O5) {
                RadControlsNamespace.Box.SetOuterWidth(a, i4);
            }
        } else {
            li.style.width = i4 + "\x70\170";
        }
    }
    if (RadControlsNamespace.Browser.IsSafari) {
        ul.style.width = RadMenu.GetFirstChildByTagName(ul, "\x6ci").offsetWidth + "px";
    }
};
RadMenu.prototype.FixRootItemWidth = function () {
    var R = this;
    var l5 = function () {
        R.FixItemWidth(R);
    };
    if (this.RenderInProgress() || RadControlsNamespace.Browser.IsOpera || RadControlsNamespace.Browser.IsSafari) {
        if (window.addEventListener) {
            window.addEventListener("lo\x61\x64", l5, false);
        } else {
            window.attachEvent("onload", l5);
        }
    } else {
        l5();
    }
};
RadMenu.prototype.FixListWidth = function (item) {
    if (this.RightToLeft) {
        this.FixItemWidth(item);
    }
    var i5 = 0;
    var ul = item.ChildItemList;
    for (var i = 0; i < ul.childNodes.length; i++) {
        var node = ul.childNodes[i];
        if (node.nodeType == 3) continue;
        i5 += node.offsetWidth;
        node.style.clear = "none";
    }
    ul.style.width = i5 + "\x70x";
};
RadMenu.prototype.LoadConfiguration = function (N) {
    for (var I5 in N) {
        this[I5] = N[I5];
    }
    if (!this.DefaultGroupSettings) {
        this.DefaultGroupSettings = {};
    }
    if (typeof this.DefaultGroupSettings.Flow == "\x75\x6edefine\x64") {
        this.DefaultGroupSettings.Flow = RadMenuNamespace.ItemFlow.Vertical;
    }
    if (typeof this.DefaultGroupSettings.ExpandDirection == "\x75ndefined") {
        this.DefaultGroupSettings.ExpandDirection = RadMenuNamespace.ExpandDirection.Auto;
    }
    if (typeof this.DefaultGroupSettings.OffsetX == "undefined") {
        this.DefaultGroupSettings.OffsetX = 0;
    }
    if (typeof this.DefaultGroupSettings.OffsetY == "un\x64\x65fined") {
        this.DefaultGroupSettings.OffsetY = 0;
    }
};
RadMenu.prototype.Close = function (N) {
    if (this.OpenedItem) {
        this.OpenedItem.Close();
    }
};
RadMenu.prototype.FindItemByText = function (text) {
    for (var i = 0; i < this.AllItems.length; i++) {
        if (this.AllItems[i].Text == text) {
            return this.AllItems[i];
        }
    }
    return null;
};
RadMenu.prototype.FindItemById = function (id) {
    for (var i = 0; i < this.AllItems.length; i++) {
        if (this.AllItems[i].ID == id) {
            return this.AllItems[i];
        }
    }
    return null;
};
RadMenu.prototype.FindItemByValue = function (value) {
    for (var i = 0; i < this.AllItems.length; i++) {
        if (this.AllItems[i].Value == value) {
            return this.AllItems[i];
        }
    }
    return null;
};
RadMenu.prototype.FindItemByUrl = function (o6) {
    for (var i = 0; i < this.AllItems.length; i++) {
        if (this.AllItems[i].NavigateUrl == o6) {
            return this.AllItems[i];
        }
    }
    return null;
};
RadMenu.prototype.SetContextElementID = function (id) {
    if (!RadMenuNamespace.ContextElements) {
        RadMenuNamespace.ContextElements = {};
    }
    if (this.ContextMenuElementID) {
        RadMenuNamespace.ContextElements[this.ContextMenuElementID] = false;
    }
    this.ContextMenuElementID = id;
    RadMenuNamespace.ContextElements[this.ContextMenuElementID] = false;
};
RadMenu.prototype.RecordState = function () {
    if (this.InUpdate || !this.Initialized) {
        return;
    }
    var O6 = RadControlsNamespace.JSON.stringify(this, this.InitialState, RadMenu.JSONIncludeDeep);
    var l6 = [];
    for (var i in this.ItemState) {
        if (this.ItemState[i] == "") continue;
        if (typeof this.ItemState[i] == "function") continue;
        l6[l6.length] = this.ItemState[i];
    }
    this.StateField.value = "{\042State\042\x3a" + O6 + ",\042\x49temState\x22\x3a{" + l6.join(",") + "\x7d}";
};
RadMenu.prototype.PersistClientSideItems = function () {
    for (var i = 0; i < this.AllItems.length; i++) {
        var item = this.AllItems[i];
        if (item.ClientSide) {
            item.RecordState(true);
        }
    }
};
RadMenu.prototype.SetAttribute = function (name, value) {
    this.Attributes[name] = value;
    this.RecordState();
};
RadMenu.prototype.GetAttribute = function (name) {
    return this.Attributes[name];
};
RadMenu.CreateChildItemContainer = function (i6) {
    var I6 = document.createElement("\144\x69\x76");
    I6.className = "slide";
    i6.DomElement.appendChild(I6);
    var o7 = document.createElement("ul");
    if (i6.Flow == RadMenuNamespace.ItemFlow.Horizontal) {
        o7.className = "\x68orizont\x61\x6c gro\x75\x70 l\x65\166e\x6c" + i6.Level;
    } else {
        o7.className = "vert\x69\x63al gr\x6f\x75p le\x76el" + i6.Level;
    }
    I6.appendChild(o7);
};
RadMenu.prototype.AddItem = function (item) {
    var o4 = document.createElement("l\x69");
    o4.className = "\x69tem last";
    var O7 = document.createElement("a");
    O7.className = "\x6cink";
    var l7 = document.createElement("\x73pan");
    l7.className = "tex\x74";
    O7.appendChild(l7);
    o4.appendChild(O7);
    item.SetDomElement(o4);
    var menu = this.Menu || this;
    if (menu != this && this.Items.length == 0) {
        RadMenu.CreateChildItemContainer(this);
        this.InitializeDomElements();
        this.InitializeAnimation();
    }
    this.ChildItemList.appendChild(o4);
    menu.AddItemToParent(this, item);
    item.Level = this.Level + 1;
    var text = item.Text;
    item.Text = "";
    item.ID = this.ID + "\x5fm" + (this.Items.length - 1);
    item.Initialize();
    item.SetText(text);
    if (this.Menu) {
        item.ParentClientID = this.ID;
    }
    O7.href = "#";
    if (this.Items.length > 1) {
        var i7 = this.Items[this.Items.length - 2].DomElement;
        i7.className = i7.className.replace("\x20last", "");
    }
};

function I7(o8) {
    document.body.appendChild(document.createTextNode(o8));
    document.body.appendChild(document.createElement("HR"));
};

function RadMenuItem(o4) {
    if (o4) {
        this.SetDomElement(o4);
    } else {
        this.ClientSide = true;
    }
    this.IsSeparator = false;
    this.AnimationContainer = null;
    this.OpenedItem = null;
    this.FocusedItem = null;
    this.Items = [];
    this.Attributes = {};
    this.Index = -1;
    this.Level = -1;
    this.Parent = null;
    this.Menu = null;
    this.GroupSettings = {};
    this.TimeoutPointer = null;
    this.Templated = false;
    this.NavigateAfterClick = true;
    this.FocusedCssClass = "f\x6f\x63used";
    this.ClickedCssClass = "c\x6c\x69cked";
    this.ExpandedCssClass = "expand\x65\x64";
    this.DisabledCssClass = "di\x73\x61bled";
    this.CssClass = "";
    this.State = RadMenuItemState.Closed;
    this.Focused = false;
    this.Clicked = false;
    this.Enabled = true;
    this.Initialized = false;
}

RadMenuItem.prototype.SetDomElement = function (o4) {
    this.DomElement = o4;
    this.LinkElement = RadMenu.GetFirstChildByTagName(this.DomElement, "\x61");
    if (this.LinkElement == null) {
        this.ID = this.DomElement.id;
        this.TextElement = RadMenu.GetFirstChildByTagName(this.DomElement, "\x73pan");
        this.NavigateUrl = "";
    } else {
        this.ID = this.LinkElement.id;
        this.TextElement = RadMenu.GetFirstChildByTagName(this.LinkElement, "\x73pan");
        this.NavigateUrl = this.LinkElement.href;
    }
};
RadMenuItem.prototype.PostInitializeItems = function () {
    for (var i = 0; i < this.Items.length; i++) {
        this.Items[i].PostInitialize();
    }
};
RadMenuItem.prototype.SetText = function (text) {
    this.PostInitialize();
    this.TextElement.innerHTML = text;
    this.Text = text;
    this.RecordState();
};
RadMenuItem.prototype.SetNavigateUrl = function (o6) {
    this.PostInitialize();
    this.LinkElement.setAttribute("\x68ref", o6);
    this.NavigateUrl = o6;
    this.RecordState();
};
RadMenuItem.prototype.SetValue = function (value) {
    this.PostInitialize();
    this.Value = value;
    this.RecordState();
};
RadMenuItem.prototype.InitializeDomElements = function () {
    if (!this.Templated) {
        this.AnimationContainer = RadMenu.GetFirstChildByTagName(this.DomElement, "\x64iv");
        this.ImageElement = RadMenu.GetFirstChildByTagName(this.LinkElement || this.DomElement, "\x69mg");
        if (this.ImageElement) {
            this.ImageUrl = this.ImageElement.src;
        }
    } else {
        this.TextElement = RadMenu.GetFirstChildByTagName(this.DomElement, "\x64iv");
        this.AnimationContainer = this.TextElement.nextSibling;
    }
    if (this.AnimationContainer) {
        var ul = this.AnimationContainer.getElementsByTagName("ul")[0];
        this.ChildItemList = ul;
        if (this.ChildItemList.parentNode != this.AnimationContainer) {
            this.ScrollWrap = this.ChildItemList.parentNode;
        }
    }
};
RadMenuItem.prototype.InitializeAnimation = function () {
    this.DetermineExpandDirection();
    if (!this.AnimationContainer) {
        return;
    }
    this.Ease = new RadControlsNamespace.Ease(this.ScrollWrap || this.ChildItemList, this.Menu, this.GroupSettings.OffsetX, this.GroupSettings.OffsetY, this, true);
    var O8 = this.GroupSettings.ExpandDirection;
    var l8 = RadMenuNamespace.ExpandDirectionPropertyName[O8];
    this.Ease.SetSide(l8);
    this.TextElement.className = "text expa\x6ed" + this.Ease.GetSide();
    this.AnimationContainer.style.zIndex = this.GlobalIndex + 10;
    this.ChildItemList.style.zIndex = this.GlobalIndex + 10;
    if (this.ScrollWrap) {
        this.CreateScroll();
    }
};
RadMenuItem.prototype.Initialize = function () {
    RadControlsNamespace.DomEventMixin.Initialize(this);
    this.LoadConfiguration();
    this.InitializeDomElements();
    this.InitializeAnimation();
    if (this.TextElement && this.TextElement.firstChild) {
        this.Text = this.TextElement.firstChild.nodeValue;
    }
    this.OriginalZIndex = Math.max(this.DomElement.style.zIndex, this.Menu.OriginalZIndex);
};
RadMenuItem.prototype.PostInitialize = function () {
    if (this.Initialized) {
        return;
    }
    this.AttachEventHandlers();
    this.RenderAccessKey();
    RadMenu.CreateState(this);
    this.UpdateCssClass();
    this.Initialized = true;
};
RadMenuItem.prototype.RenderAccessKey = function () {
    if (this.IsSeparator || this.Templated) {
        return;
    }
    var accessKey = this.LinkElement.accessKey.toLowerCase();
    if (!accessKey) {
        return;
    }
    var text = this.TextElement.firstChild.nodeValue;
    var i8 = text.toLowerCase().indexOf(accessKey);
    if (i8 == -1) {
        return;
    }
    this.TextElement.innerHTML = text.substr(0, i8) + "<u>" + text.substr(i8, 1) + "\x3c/u>" + text.substr(i8 + 1, text.length);
};
RadMenuItem.prototype.CreateScroll = function () {
    this.ScrollWrap.style.zIndex = this.GlobalIndex + 10;
    this.BuildScrollObject(false);
};
RadMenuItem.prototype.BuildScrollObject = function (I8) {
    var o9 = RadMenuNamespace.ItemFlow.Vertical == this.GroupSettings.Flow;
    var options = {PerTabScrolling: false, ScrollButtonsPosition: 1, ScrollPosition: 0};
    this.Scroll = new RadControlsNamespace.Scroll(this.ChildItemList, o9, options);
    this.Scroll.ScrollOnHover = true;
    this.Scroll.LeaveGapsForArrows = false;
    this.Scroll.WrapNeeded = I8;
    if (this.GroupSettings.Flow == RadMenuNamespace.ItemFlow.Vertical) {
        this.Scroll.LeftArrowClass = "topArr\x6f\x77";
        this.Scroll.LeftArrowClassDisabled = "\x74opArrowDi\x73\x61ble\x64";
        this.Scroll.RightArrowClass = "bottomArrow";
        this.Scroll.RightArrowClassDisabled = "b\x6f\x74tomArro\x77\x44isab\x6ced";
    }
};
RadMenuItem.prototype.CreateRuntimeScroll = function (height) {
    if (this.Scroll) {
        this.Scroll.SetHeight(height);
        return;
    }
    this.BuildScrollObject(true);
    this.Scroll.Initialize();
    this.ScrollWrap = this.ChildItemList.parentNode;
    this.Ease.Element = this.ScrollWrap;
    this.Ease.Overlay.Element = this.ScrollWrap;
    this.ScrollWrap.className = "\163\x63rollWrap";
    this.Scroll.SetHeight(height);
};
RadMenuItem.prototype.Dispose = function () {
    if (!this.Initialized) return;
    this.DisposeDomEventHandlers();
    if (this.Ease) {
        this.Ease.Dispose();
    }
    this.DomElement = null;
    this.LinkElement = null;
    this.AnimationContainer = null;
};
RadMenuItem.prototype.Focus = function () {
    if (!this.CanFocus()) {
        return;
    }
    this.PostInitializeItems();
    if (this.Parent.OpenedItem && this.Parent.OpenedItem != this) {
        this.Parent.OpenedItem.Close();
    }
    if (this.Parent.State != RadMenuItemState.Open && this.Parent.Open) {
        this.Parent.Open();
    }
    this.Parent.FocusedItem = this;
    if (!this.Focused && this.LinkElement) {
        this.LinkElement.focus();
    }
    this.CancelMenuClose();
    this.UpdateCssClass();
    this.RaiseEvent("\x4fnClie\x6e\x74Item\x46\x6fcus");
};
RadMenuItem.prototype.Blur = function () {
    if (this.IsSeparator) {
        return;
    }
    if (this.Focused) {
        this.LinkElement.blur();
    }
    this.Parent.FocusedItem = null;
    this.UpdateCssClass();
    this.RaiseEvent("\x4f\x6eClient\x49\x74emB\x6c\x75r");
};
RadMenuItem.prototype.Open = function () {
    this.PostInitializeItems();
    this.Menu.AboutToCollapse = false;
    if (this.Parent != this.Menu && this.Parent.State != RadMenuItemState.Open) {
        this.Parent.Open();
    }
    this.Parent.OpenedItem = this;
    clearTimeout(this.TimeoutPointer);
    if (!this.AnimationContainer) return;
    this.State = RadMenuItemState.Open;
    var O9 = RadControlsNamespace.Screen.GetViewPortSize();
    this.ChildItemList.style.display = "b\x6c\157ck";
    this.Ease.ShowElements();
    if (this.GroupSettings.Flow == RadMenuNamespace.ItemFlow.Vertical) {
        this.Menu.FixItemWidth(this);
    } else {
        this.Menu.FixListWidth(this);
    }
    if (this.Menu.EnableAutoScroll && this.ChildItemList.offsetHeight > O9.height) {
        if (!this.ScrollWrap || this.ScrollWrap.offsetHeight > O9.height) {
            this.CreateRuntimeScroll(O9.height + "\x70x");
            this.Ease.ShowElements();
            this.Ease.UpdateContainerSize();
        }
    }
    this.Ease.SetSide(this.GetEaseSide());
    this.Ease.UpdateContainerSize();
    if (this.Scroll) {
        this.CalculateScrollWrapSize();
        this.Scroll.Initialize();
    }
    this.PositionChildContainer(O9);
    this.Ease.In();
    this.UpdateCssClass();
    this.DomElement.style.zIndex = this.OriginalZIndex + 1000;
    if (!RadControlsNamespace.Browser.IsNetscape) {
        this.Menu.DomElement.style.zIndex = this.Menu.OriginalZIndex + 1000;
    }
    this.CancelMenuClose();
    this.RaiseEvent("OnClientIt\x65\x6dOpe\x6e");
};
RadMenuItem.prototype.GetEaseSide = function () {
    var O8 = this.GroupSettings.ExpandDirection;
    return RadMenuNamespace.ExpandDirectionPropertyName[O8];
};
RadMenuItem.prototype.RaiseEvent = function (r) {
    return this.Menu.RaiseEvent(r, {Item: this});
};
RadMenuItem.prototype.UpdateCssClass = function () {
    if (this.IsSeparator || this.Templated) {
        return;
    }
    var cssClass = "\x6cink " + this.CssClass;
    if (this.Focused) {
        cssClass = cssClass + "\x20" + this.FocusedCssClass;
    }
    if (this.State == RadMenuItemState.Open) {
        cssClass = cssClass + "\040" + this.ExpandedCssClass;
    }
    if (this.Clicked) {
        cssClass = cssClass + "\x20" + this.ClickedCssClass;
    }
    if (!this.Enabled) {
        cssClass = cssClass + " " + this.DisabledCssClass;
    }
    this.LinkElement.className = cssClass;
    this.UpdateImageUrl();
};
RadMenuItem.prototype.UpdateImageUrl = function () {
    if (!this.ImageElement) return;
    var l9 = this.ImageUrl;
    if (this.Hovered && this.ImageOverUrl) {
        l9 = this.ImageOverUrl;
    }
    if (this.State == RadMenuItemState.Open && this.ExpandedImageUrl) {
        l9 = this.ExpandedImageUrl;
    }
    if (!this.Enabled && this.DisabledImageUrl) {
        l9 = this.DisabledImageUrl;
    }
    if (this.Clicked && this.ImageClickedUrl) {
        l9 = this.ImageClickedUrl;
    }
    if (l9 != this.ImageElement.src) {
        this.ImageElement.src = l9;
    }
};
RadMenuItem.prototype.Enable = function () {
    if (this.IsSeparator || this.Templated) {
        return;
    }
    this.LinkElement.disabled = "";
    this.Enabled = true;
    this.EnableDomEventHandling();
    this.UpdateCssClass();
};
RadMenuItem.prototype.Disable = function () {
    if (this.IsSeparator || this.Templated) {
        return;
    }
    this.LinkElement.disabled = "disabled";
    this.Enabled = false;
    this.DisableDomEventHandling();
    this.UpdateCssClass();
};
RadMenuItem.prototype.Close = function () {
    if (this.IsSeparator) {
        return;
    }
    if (this.State == RadMenuItemState.Closed) {
        return;
    }
    if (this.OpenedItem) {
        this.OpenedItem.Close();
    }
    this.Parent.OpenedItem = null;
    clearTimeout(this.TimeoutPointer);
    if (!this.AnimationContainer) return;
    this.State = RadMenuItemState.Closed;
    if (this.Level == 1) {
        this.Menu.AboutToCollapse = true;
    }
    this.Ease.Out();
    this.UpdateCssClass();
    this.DomElement.style.zIndex = this.OriginalZIndex;
    this.HideChildren();
};
RadMenuItem.prototype.OnCollapseComplete = function () {
    if (this.Menu.AboutToCollapse) {
        if (this.Level == 1) {
            this.Menu.DomElement.style.zIndex = this.Menu.OriginalZIndex;
        }
    }
    this.RaiseEvent("OnClie\x6etItemCl\x6f\163\x65");
};
RadMenuItem.prototype.HideChildren = function () {
    for (var i = 0; i < this.Items.length; i++) {
        if (this.Items[i].AnimationContainer) {
            this.Items[i].AnimationContainer.style.display = "none";
        }
    }
};
RadMenuItem.prototype.CalculateScrollWrapSize = function () {
    if (!this.ScrollWrap) {
        return;
    }
    if (!this.ScrollWrap.style.height) {
        this.ScrollWrap.style.height = this.ChildItemList.offsetHeight + "px";
    }
    if (!this.ScrollWrap.style.width) {
        this.ScrollWrap.style.width = this.ChildItemList.offsetWidth + "\x70x";
    }
};
RadMenuItem.prototype.AttachEventHandlers = function () {
    this.AttachDomEvent(this.DomElement, "\x6douseover", "\x4douseOverH\x61\x6edle\x72");
    this.AttachDomEvent(this.DomElement, "\x6douseout", "Mou\x73\x65OutHan\x64\x6cer");
    if (this.IsSeparator || this.Templated) {
        return;
    }
    this.AttachDomEvent(this.LinkElement, "\x63lick", "ClickHa\x6e\x64ler", true);
    this.AttachDomEvent(this.LinkElement, "\x6douseo\x75\x74", "\x48\x52efMou\x73\x65OutH\x61\x6ed\x6c\x65r");
    this.AttachDomEvent(this.LinkElement, "\x6d\x6fuseover", "\x48\x52efMous\x65\x4fver\x48\x61ndl\x65\x72");
    this.AttachDomEvent(this.LinkElement, "mo\x75\x73edown", "\x4douseDownHa\x6e\x64ler");
    this.AttachDomEvent(this.LinkElement, "mouse\x75\x70", "\x4douseUpH\x61\x6edler");
    this.AttachDomEvent(this.LinkElement, "blur", "\x42lurHandl\x65\x72");
    this.AttachDomEvent(this.LinkElement, "\x66ocus", "\x46ocusHa\x6e\x64ler");
    this.AttachDomEvent(this.LinkElement, "\x6beydown", "KeyDownH\x61\x6edler");
};
RadMenuItem.prototype.MouseDownHandler = function (e) {
    this.Clicked = true;
    this.UpdateCssClass();
};
RadMenuItem.prototype.MouseUpHandler = function (e) {
    this.Clicked = false;
    this.UpdateCssClass();
};
RadMenuItem.prototype.HRefMouseOutHandler = function (e) {
    var i9 = RadControlsNamespace.DomEvent.GetRelatedTarget(e);
    if (this.Menu.IsChildOf(this.LinkElement, i9) || i9 == this.LinkElement) {
        return;
    }
    this.Hovered = false;
    this.UpdateImageUrl();
    this.RaiseEvent("OnCl\x69\x65ntMou\x73\x65Out");
};
RadMenuItem.prototype.HRefMouseOverHandler = function (e) {
    var I9 = RadControlsNamespace.DomEvent.GetRelatedTarget(e);
    if (this.Menu.IsChildOf(this.LinkElement, I9) || this.LinkElement == I9) {
        return;
    }
    this.Hovered = true;
    this.UpdateImageUrl();
    this.RaiseEvent("\x4f\156\x43\x6cientM\x6f\x75seO\x76\x65r");
};
RadMenuItem.prototype.KeyDownHandler = function (e) {
    var oa = {left: 37, Oa: 38, right: 39, la: 40, ia: 27};
    var keyCode = RadControlsNamespace.DomEvent.GetKeyCode(e);
    if (keyCode == oa.right) {
        if (this.Menu.RightToLeft) {
            this.HandleLeftArrow();
        } else {
            this.HandleRightArrow();
        }
    } else if (keyCode == oa.left) {
        if (this.Menu.RightToLeft) {
            this.HandleRightArrow();
        } else {
            this.HandleLeftArrow();
        }
    } else if (keyCode == oa.Oa) {
        this.HandleUpArrow();
    } else if (keyCode == oa.la) {
        this.HandleDownArrow();
    } else if (keyCode == oa.ia) {
        if (this.Parent == this.Menu) {
            this.Blur();
        } else {
            this.Parent.Close();
            this.Parent.Focus();
        }
    } else {
        return;
    }
    RadControlsNamespace.DomEvent.PreventDefault(e);
};
RadMenuItem.prototype.FocusHandler = function (e) {
    this.Focused = true;
    this.Focus();
};
RadMenuItem.prototype.ScheduleMenuClose = function (Ia) {
    var menu = this.Menu;
    clearTimeout(this.Menu.CloseTimeout);
    this.Menu.CloseTimeout = setTimeout(function () {
        menu.Close();
        menu.Clicked = false;
    }, Ia);
};
RadMenuItem.prototype.CancelMenuClose = function () {
    clearTimeout(this.Menu.CloseTimeout);
};
RadMenuItem.prototype.BlurHandler = function (e) {
    if (this.LinkElement.offsetWidth) {
        this.ScheduleMenuClose(100);
    }
    this.Focused = false;
    this.Menu.Clicked = false;
    this.Blur();
};
RadMenuItem.prototype.NavigatesToURL = function () {
    if (location.href + "\x23" == this.NavigateUrl || location.href == this.NavigateUrl) {
        return false;
    }
    return (new RegExp("//")).test(this.LinkElement.href);
};
RadMenuItem.prototype.Validate = function () {
    if (!this.Menu.CausesValidation || this.NavigatesToURL()) {
        return true;
    }
    if (typeof(Page_ClientValidate) != "function") {
        return true;
    }
    return Page_ClientValidate(this.Menu.ValidationGroup);
};
RadMenuItem.prototype.ClickHandler = function (e) {
    if (!this.Enabled) {
        return RadControlsNamespace.DomEvent.PreventDefault(e);
    }
    if (!this.RaiseEvent("OnClient\x49temClicki\x6e\x67")) {
        return RadControlsNamespace.DomEvent.PreventDefault(e);
    }
    if (!this.Validate()) {
        return RadControlsNamespace.DomEvent.PreventDefault(e);
    }
    var returnValue = true;
    if (!this.Menu.ClickToOpen) {
        returnValue = true;
    } else if (this.Level > 1) {
        returnValue = true;
    } else {
        if (!this.Menu.Clicked) {
            this.Open();
        } else {
            this.Close();
        }
        this.Menu.Clicked = !this.Menu.Clicked;
    }
    this.RaiseEvent("\x4fnClient\x49\x74emCl\x69\x63k\x65\144");
    if (!this.NavigateAfterClick || !returnValue) {
        RadControlsNamespace.DomEvent.PreventDefault(e);
    }
};
RadMenuItem.prototype.MouseOverHandler = function (e) {
    var I9 = RadControlsNamespace.DomEvent.GetRelatedTarget(e);
    if (this.Menu.IsChildOf(this.DomElement, I9) || this.DomElement == I9) {
        return;
    }
    if (this.Menu.ClickToOpen && !this.Menu.Clicked) {
        return;
    }
    if (this.State == RadMenuItemState.Open || this.State == RadMenuItemState.AboutToOpen) {
        return;
    }
    this.Menu.LastOpenedItem = this;
    if (this.State == RadMenuItemState.AboutToClose) {
        clearTimeout(this.TimeoutPointer);
        this.State = RadMenuItemState.Open;
        return;
    }
    if (this.Parent.OpenedItem) {
        this.Parent.OpenedItem.Close();
    }
    this.Parent.OpenedItem = this;
    this.State = RadMenuItemState.AboutToOpen;
    var R = this;
    var ob = function () {
        R.Open();
    };
    this.TimeoutPointer = setTimeout(ob, this.Menu.ExpandDelay);
};
RadMenuItem.prototype.MouseOutHandler = function (e) {
    var i9 = RadControlsNamespace.DomEvent.GetRelatedTarget(e);
    if ((!i9) || this.Menu.IsChildOf(this.DomElement, i9) || i9 == this.DomElement) {
        return;
    } else {
        try {
            var Ob = i9.parentNode;
        } catch (e) {
            return;
        }
    }
    if (this.State == RadMenuItemState.Closed || this.State == RadMenuItemState.AboutToClose) {
        return;
    }
    if (this.State == RadMenuItemState.AboutToOpen) {
        clearTimeout(this.TimeoutPointer);
        this.State = RadMenuItemState.Closed;
        this.Parent.OpenedItem = null;
        return;
    }
    if (this.Menu.ClickToOpen) {
        return;
    }
    this.State = RadMenuItemState.AboutToClose;
    var R = this;
    var ob = function () {
        R.Close();
    };
    this.TimeoutPointer = setTimeout(ob, this.Menu.CollapseDelay);
};
RadMenuItem.prototype.PositionChildContainer = function (O9) {
    var top = 0;
    var left = 0;
    var O8 = this.GroupSettings.ExpandDirection;
    var l8 = RadMenuNamespace.ExpandDirectionPropertyName[O8];
    var lb = this.DomElement;
    var ib = RadControlsNamespace.Box.GetOuterHeight(lb);
    var Ib = RadControlsNamespace.Box.GetOuterWidth(lb);
    var oc = this.AnimationContainer;
    var Oc = RadControlsNamespace.Box.GetOuterHeight(oc);
    var lc = RadControlsNamespace.Box.GetOuterWidth(oc);
    if (O8 == RadMenuNamespace.ExpandDirection.Down) {
        top = ib;
    } else if (O8 == RadMenuNamespace.ExpandDirection.Right) {
        left = Ib;
    }
    this.SetContainerPosition(left, top);
    var ic = RadControlsNamespace.Screen.GetElementPosition(oc);
    if (this.Menu.RightToLeft) {
        left = Ib - lc;
    }
    if (!this.Menu.EnableScreenBoundaryDetection) {
        this.Ease.SetSide(l8);
        this.TextElement.className = "t\x65x\x74\x20expan\x64" + this.Ease.GetSide();
        return;
    }
    if (RadControlsNamespace.Screen.ElementOverflowsRight(O9, oc) && O8 == RadMenuNamespace.ExpandDirection.Right) {
        O8 = RadMenuNamespace.ExpandDirection.Left;
        l8 = "\x72ight";
        left = 0;
    } else if (ic.x - lc < 0 && O8 == RadMenuNamespace.ExpandDirection.Left) {
        O8 = RadMenuNamespace.ExpandDirection.Right;
        l8 = "\x6c\145\x66\x74";
        left = Ib;
    } else if (ic.y - Oc < 0 && O8 == RadMenuNamespace.ExpandDirection.Up) {
        O8 = RadMenuNamespace.ExpandDirection.Down;
        l8 = "top";
        top = ib;
    } else if (RadControlsNamespace.Screen.ElementOverflowsBottom(O9, oc) && O8 == RadMenuNamespace.ExpandDirection.Down) {
        O8 = RadMenuNamespace.ExpandDirection.Up;
        l8 = "\x62\x6fttom";
        top = ib;
    }
    if (RadControlsNamespace.Screen.ElementOverflowsRight(O9, oc) && (O8 == RadMenuNamespace.ExpandDirection.Down || O8 == RadMenuNamespace.ExpandDirection.Up)) {
        left = O9.width - (ic.x + lc);
    } else if (RadControlsNamespace.Screen.ElementOverflowsBottom(O9, oc)) {
        if (O8 == RadMenuNamespace.ExpandDirection.Left || O8 == RadMenuNamespace.ExpandDirection.Right) {
            top = O9.height - (ic.y + Oc);
        }
    }
    this.SetContainerPosition(left, top);
    this.Ease.SetSide(l8);
    this.TextElement.className = "text expa\x6e\x64" + this.Ease.GetSide();
};
RadMenuItem.prototype.SetContainerPosition = function (left, top) {
    this.AnimationContainer.style.top = (top + this.GroupSettings.OffsetY) + "p\x78";
    this.AnimationContainer.style.left = (left + this.GroupSettings.OffsetX) + "px";
};
RadMenuItem.prototype.SetAttribute = function (name, value) {
    this.PostInitialize();
    this.Attributes[name] = value;
    this.RecordState();
};
RadMenuItem.prototype.SetImageUrl = function (src) {
    this.PostInitialize();
    this.ImageUrl = src;
    this.ImageElement.src = src;
    this.RecordState();
};
RadMenuItem.prototype.SetImageOverUrl = function (src) {
    this.PostInitialize();
    this.ImageOverUrl = src;
    this.RecordState();
};
RadMenuItem.prototype.GetAttribute = function (name) {
    return this.Attributes[name];
};
RadMenuItem.prototype.DetermineExpandDirection = function () {
    if (this.GroupSettings.ExpandDirection != RadMenuNamespace.ExpandDirection.Auto) {
        return;
    }
    if (this.Parent.Flow == RadMenuNamespace.ItemFlow.Vertical) {
        if (this.Menu.RightToLeft) {
            this.GroupSettings.ExpandDirection = RadMenuNamespace.ExpandDirection.Left;
        } else {
            this.GroupSettings.ExpandDirection = RadMenuNamespace.ExpandDirection.Right;
        }
    } else {
        this.GroupSettings.ExpandDirection = RadMenuNamespace.ExpandDirection.Down;
    }
};
RadMenuItem.prototype.LoadConfiguration = function () {
    if (this.Menu.ItemData[this.ID]) {
        for (var I5 in this.Menu.ItemData[this.ID]) {
            this[I5] = this.Menu.ItemData[this.ID][I5];
        }
    }
    var Ic = this.Menu.DefaultGroupSettings;
    if (typeof this.GroupSettings.Flow == "un\x64efined") {
        this.GroupSettings.Flow = Ic.Flow;
    }
    this.Flow = this.GroupSettings.Flow;
    if (typeof this.GroupSettings.ExpandDirection == "undefined") {
        this.GroupSettings.ExpandDirection = Ic.ExpandDirection;
    }
    if (typeof this.GroupSettings.OffsetX == "\x75ndefine\x64") {
        this.GroupSettings.OffsetX = Ic.OffsetX;
    }
    if (typeof this.GroupSettings.OffsetY == "\x75ndefined") {
        this.GroupSettings.OffsetY = Ic.OffsetY;
    }
    if (!this.Enabled) {
        this.Disable();
    }
};
RadMenuItem.prototype.HandleRightArrow = function () {
    if (this.Parent.Flow == RadMenuNamespace.ItemFlow.Horizontal) {
        this.FocusNextItem();
    } else {
        if (this.Items.length && this.GroupSettings.ExpandDirection == RadMenuNamespace.ExpandDirection.Right) {
            this.FocusFirstChild();
        } else if (this.Parent.GroupSettings && this.Parent.GroupSettings.ExpandDirection == RadMenuNamespace.ExpandDirection.Left) {
            this.Parent.Focus();
        } else {
            if (this.Menu.OpenedItem) {
                this.Menu.OpenedItem.GetNextItem().Focus();
            }
        }
    }
};
RadMenuItem.prototype.HandleLeftArrow = function () {
    if (this.Parent.Flow == RadMenuNamespace.ItemFlow.Horizontal) {
        this.FocusPreviousItem();
    } else {
        if (this.Items.length && this.GroupSettings.ExpandDirection == RadMenuNamespace.ExpandDirection.Left) {
            this.FocusFirstChild();
        } else if (this.Parent.GroupSettings && this.Parent.GroupSettings.ExpandDirection == RadMenuNamespace.ExpandDirection.Right) {
            this.Parent.Focus();
        } else {
            if (this.Menu.OpenedItem) {
                this.Menu.OpenedItem.GetPreviousItem().Focus();
            }
        }
    }
};
RadMenuItem.prototype.HandleUpArrow = function () {
    if (this.Parent.Flow == RadMenuNamespace.ItemFlow.Vertical) {
        this.FocusPreviousItem();
    } else {
        this.FocusLastChild();
    }
};
RadMenuItem.prototype.HandleDownArrow = function () {
    if (this.Parent.Flow == RadMenuNamespace.ItemFlow.Vertical) {
        this.FocusNextItem();
    } else {
        this.FocusFirstChild();
    }
};
RadMenuItem.prototype.GetNextItem = function () {
    if (this.Index == this.Parent.Items.length - 1) {
        return this.Parent.Items[0];
    }
    return this.Parent.Items[this.Index + 1];
};
RadMenuItem.prototype.GetPreviousItem = function () {
    if (this.Index == 0) {
        return this.Parent.Items[this.Parent.Items.length - 1];
    }
    return this.Parent.Items[this.Index - 1];
};
RadMenuItem.prototype.CanFocus = function () {
    return (!this.IsSeparator) && this.Enabled;
};
RadMenuItem.prototype.FocusFirstChild = function () {
    if (!this.Items.length) {
        return;
    }
    var item = this.Items[0];
    while (!item.CanFocus()) {
        item = item.GetNextItem();
        if (item == this.Items[0]) {
            return;
        }
    }
    item.Focus();
};
RadMenuItem.prototype.FocusLastChild = function () {
    if (!this.Items.length) {
        return;
    }
    var item = this.Items[this.Items.length - 1];
    while (!item.CanFocus()) {
        item = item.GetPreviousItem();
        if (this.Items.length - 1) {
            return;
        }
    }
    item.Focus();
};
RadMenuItem.prototype.FocusNextItem = function () {
    var item = this.GetNextItem();
    while (!item.CanFocus()) {
        item = item.GetNextItem();
    }
    item.Focus();
};
RadMenuItem.prototype.FocusPreviousItem = function () {
    var item = this.GetPreviousItem();
    while (!item.CanFocus()) {
        item = item.GetPreviousItem();
    }
    item.Focus();
};
RadMenuItem.prototype.RecordState = function (od) {
    if (this.ClientSide && !od) {
        return;
    }
    var Od = RadControlsNamespace.JSON.stringify(this, this.InitialState, RadMenu.JSONIncludeDeep);
    if (Od == "\x7b\x7d") {
        this.Menu.ItemState[this.ID] = "";
    } else {
        this.Menu.ItemState[this.ID] = "\042" + this.ID + "\x22:" + Od;
    }
    this.Menu.RecordState();
};
RadMenuItem.prototype.AddItem = function () {
    this.Menu.AddItem.apply(this, arguments);
    this.Menu.FixItemWidth(this);
};
;

function RadMenuItemState() {
}

RadMenuItemState = {Closed: 0, Open: 1, AboutToClose: 2, AboutToOpen: 3};
;
if (typeof window.RadControlsNamespace == "un\x64\x65\x66ined") {
    window.RadControlsNamespace = {};
}
if (typeof(window.RadControlsNamespace.Screen) == "undefine\x64" || typeof(window.RadControlsNamespace.Screen.Version) == null || window.RadControlsNamespace.Screen.Version < .11e1) {
    window.RadControlsNamespace.Screen = {
        Version: .11e1, GetViewPortSize: function () {
            var width = 0;
            var height = 0;
            var ld = document.body;
            if (RadControlsNamespace.Browser.StandardsMode) {
                ld = document.documentElement;
            }
            if (window.innerWidth) {
                width = window.innerWidth;
                height = window.innerHeight;
            } else {
                width = ld.clientWidth;
                height = ld.clientHeight;
            }
            width += ld.scrollLeft;
            height += ld.scrollTop;
            return {width: width - 6, height: height - 6};
        }, GetElementPosition: function (U) {
            var parent = null;
            var oe = {x: 0, y: 0};
            var box;
            if (U.getBoundingClientRect) {
                box = U.getBoundingClientRect();
                var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
                var scrollLeft = document.documentElement.scrollLeft || document.body.scrollLeft;
                oe.x = box.left + scrollLeft - 2;
                oe.y = box.top + scrollTop - 2;
                return oe;
            } else if (document.getBoxObjectFor) {
                box = document.getBoxObjectFor(U);
                oe.x = box.x - 2;
                oe.y = box.y - 2;
            } else {
                oe.x = U.offsetLeft;
                oe.y = U.offsetTop;
                parent = U.offsetParent;
                if (parent != U) {
                    while (parent) {
                        oe.x += parent.offsetLeft;
                        oe.y += parent.offsetTop;
                        parent = parent.offsetParent;
                    }
                }
            }
            if (window.opera) {
                parent = U.offsetParent;
                while (parent && parent.tagName != "\102\x4fDY" && parent.tagName != "HTML") {
                    oe.x -= parent.scrollLeft;
                    oe.y -= parent.scrollTop;
                    parent = parent.offsetParent;
                }
            } else {
                parent = U.parentNode;
                while (parent && parent.tagName != "\x42ODY" && parent.tagName != "\x48TML") {
                    oe.x -= parent.scrollLeft;
                    oe.y -= parent.scrollTop;
                    parent = parent.parentNode;
                }
            }
            return oe;
        }, ElementOverflowsTop: function (O) {
            return this.GetElementPosition(O).y < 0;
        }, ElementOverflowsLeft: function (O) {
            return this.GetElementPosition(O).x < 0;
        }, ElementOverflowsBottom: function (Oe, O) {
            var le = this.GetElementPosition(O).y + RadControlsNamespace.Box.GetOuterHeight(O);
            return le > Oe.height;
        }, ElementOverflowsRight: function (Oe, O) {
            var ie = this.GetElementPosition(O).x + RadControlsNamespace.Box.GetOuterWidth(O);
            return ie > Oe.width;
        }
    };
}
;
if (typeof window.RadControlsNamespace == "u\x6e\x64\x65fine\x64") {
    window.RadControlsNamespace = {};
}
RadControlsNamespace.ScrollButtonsPosition = {Left: 0, Middle: 1, Right: 2};
RadControlsNamespace.Scroll = function (O, Ie, of) {
    this.Owner = of;
    this.Element = O;
    this.IsVertical = Ie;
    this.ScrollButtonsPosition = of.ScrollButtonsPosition;
    this.ScrollPosition = of.ScrollPosition;
    this.PerTabScrolling = of.PerTabScrolling;
    this.ScrollOnHover = false;
    this.WrapNeeded = false;
    this.LeaveGapsForArrows = true;
    this.LeftArrowClass = "le\x66\x74Arrow";
    this.LeftArrowClassDisabled = "\x6ceftArrowDis\x61\x62led";
    this.RightArrowClass = "\x72ightArrow";
    this.RightArrowClassDisabled = "rightArrowD\x69\x73able\x64";
    this.Initialized = false;
};
RadControlsNamespace.Scroll.Create = function (O, Ie, of) {
    return new RadControlsNamespace.Scroll(O, Ie, of);
};
RadControlsNamespace.Scroll.prototype.Initialize = function () {
    if (this.Initialized) {
        this.ApplyOverflow();
        this.CalculateMinMaxPosition();
        this.EvaluateArrowStatus();
        return false;
    }
    if ((this.Element.offsetWidth == 0 && !this.IsVertical) || (this.Element.offsetHeight == 0 && this.IsVertical)) {
        return false;
    }
    this.Initialized = true;
    this.ScrollAmount = 2;
    this.Direction = 0;
    if (this.WrapNeeded) {
        var Of = this.CreateScrollWrap();
    }
    this.ApplyOverflow();
    this.Element.style.position = "relative";
    this.AttachArrows();
    this.CalculateMinMaxPosition();
    if (this.PerTabScrolling) {
        this.CalculateInitialTab();
    }
    this.AttachScrollMethods();
    this.EvaluateArrowStatus();
    this.AttachEventHandlers();
    this.ScrollTo(this.ScrollPosition);
    this.ApplyOverflow();
    return Of;
};
RadControlsNamespace.Scroll.prototype.ApplyOverflow = function () {
    if (RadControlsNamespace.Browser.IsIE) {
        this.Element.parentNode.style.overflow = "\x76isibl\x65";
        if (this.IsVertical) {
            this.Element.parentNode.style.overflowX = "";
            this.Element.parentNode.style.overflowY = "hi\x64\x64en";
        } else {
            this.Element.parentNode.style.overflowX = "hidden";
            this.Element.parentNode.style.overflowY = "hidden";
        }
    } else {
        this.Element.parentNode.style.overflow = "hidd\x65\x6e";
    }
    if (!this.ScrollNeeded()) {
        this.Element.parentNode.style.overflow = "visi\x62\x6ce";
        this.Element.parentNode.style.overflowX = "visible";
        this.Element.parentNode.style.overflowY = "visible";
    }
};
RadControlsNamespace.Scroll.prototype.ResizeHandler = function () {
    if (this.Disposed) {
        return;
    }
    if (!this.Initialized) {
        this.Initialize();
    }
    if (!this.Initialized) {
        return;
    }
    if (!this.Element.offsetHeight || !this.Element.offsetWidth) {
        return;
    }
    this.CalculateMinMaxPosition();
    if (this.Element.offsetWidth < this.Element.parentNode.offsetWidth) {
        this.ScrollTo(0);
    }
    var If = parseInt(this.IsVertical ? this.Element.style.top : this.Element.style.left);
    if (isNaN(If)) {
        If = 0;
    }
    var R = this;
    this.og = setTimeout(function () {
        if (R.Disposed) {
            return;
        }
        R.ApplyOverflow();
        R.ScrollTo(If);
        R.EvaluateArrowStatus();
    }, 100);
};
RadControlsNamespace.Scroll.prototype.AttachEventHandlers = function () {
    var O = this.Element;
    var R = this;
    this.Og = function () {
        R.ResizeHandler();
    };
    if (window.addEventListener) {
        window.addEventListener("\x72esize", this.Og, false);
    } else {
        window.attachEvent("\x6fnresiz\x65", this.Og);
    }
};
RadControlsNamespace.Scroll.prototype.Dispose = function () {
    this.Disposed = true;
    this.Element = null;
    clearTimeout(this.og);
    if (window.removeEventListener) {
        window.removeEventListener("\x72esize", this.Og, false);
    } else {
        window.detachEvent("\x6fnresize", this.Og);
    }
};
RadControlsNamespace.Scroll.prototype.AttachArrows = function () {
    var lg = this.CreateArrow("&laquo;", 1, this.LeftArrowClass);
    var ig = this.CreateArrow("\x26\x72aquo;", -1, this.RightArrowClass);
    this.LeftArrow = lg;
    this.RightArrow = ig;
    if (this.IsVertical) {
        lg.style.left = "0p\x78";
        ig.style.left = "0px";
        if (this.ScrollButtonsPosition == RadControlsNamespace.ScrollButtonsPosition.Middle) {
            lg.style.top = "0px";
            ig.style.bottom = "\x30px";
        } else if (this.ScrollButtonsPosition == RadControlsNamespace.ScrollButtonsPosition.Left) {
            lg.style.top = "0px";
            ig.style.top = lg.offsetHeight + "\x70x";
        } else {
            ig.style.bottom = "\x30px";
            lg.style.bottom = lg.offsetHeight + "px";
        }
    } else {
        lg.style.top = "\x30px";
        ig.style.top = "\x30px";
        if (this.ScrollButtonsPosition == RadControlsNamespace.ScrollButtonsPosition.Middle) {
            lg.style.left = "-1px";
            ig.style.right = "-1px";
        } else if (this.ScrollButtonsPosition == RadControlsNamespace.ScrollButtonsPosition.Left) {
            lg.style.left = "\x2d1px";
            ig.style.left = (lg.offsetWidth - 1) + "\x70\170";
        } else {
            ig.style.right = "\x2d1px";
            lg.style.right = (ig.offsetWidth - 1) + "\x70x";
        }
    }
};
RadControlsNamespace.Scroll.prototype.CreateArrow = function (Ig, oh, cssClass) {
    var Oh = document.createElement("\x61");
    Oh.href = "#";
    Oh.className = cssClass;
    Oh.innerHTML = "\x26nbsp;";
    Oh.style.zIndex = "\x32000";
    this.Element.parentNode.appendChild(Oh);
    var R = this;
    Oh.ScrollDirection = oh;
    if (this.ScrollOnHover) {
        Oh.onmousedown = function () {
            if (this.disabled) {
                return false;
            }
            R.ScrollAmount = 3;
            return true;
        };
        Oh.onmouseup = function () {
            R.ScrollAmount = 1;
        };
        Oh.onmouseover = function () {
            if (this.disabled) {
                return false;
            }
            R.ScrollAmount = 1;
            R.Scroll(this.ScrollDirection);
            return true;
        };
        Oh.onmouseout = function () {
            R.lh = 0;
            R.Stop();
            return false;
        };
    } else {
        Oh.onmousedown = function () {
            R.Scroll(this.ScrollDirection);
        };
        Oh.onmouseup = function () {
            R.Stop();
        };
    }
    Oh.onclick = function () {
        return false;
    };
    return Oh;
};
RadControlsNamespace.Scroll.prototype.SetHeight = function (value) {
    if (parseInt(value) == 0) {
        return;
    }
    this.Element.parentNode.style.height = value;
    this.Initialize();
};
RadControlsNamespace.Scroll.prototype.SetWidth = function (value) {
    if (parseInt(value) == 0) {
        return;
    }
    this.Element.parentNode.style.width = value;
    this.Initialize();
};
RadControlsNamespace.Scroll.prototype.CreateScrollWrap = function () {
    var Of = document.createElement("div");
    var ih = this.Element.parentNode;
    Of.appendChild(this.Element);
    Of.style.position = "relativ\x65";
    Of.align = "\x6ceft";
    ih.appendChild(Of);
    if (this.IsVertical) {
        Of.style.styleFloat = "l\x65\x66t";
        Of.style.cssFloat = "l\x65\x66t";
        this.Element.style.display = "\x6e\x6fne";
        Of.style.height = Of.parentNode.parentNode.offsetHeight + "\160x";
        this.Element.style.display = "\x62\x6cock";
    } else {
        var Ih = 0;
        for (var i = 0; i < this.Element.childNodes.length; i++) {
            var node = this.Element.childNodes[i];
            if (!node.tagName) continue;
            Ih += node.offsetWidth;
        }
        this.Element.style.width = (Ih + 3) + "\x70\x78";
    }
    return Of;
};
RadControlsNamespace.Scroll.prototype.CalculateMinMaxPosition = function () {
    if (!this.Initialized) {
        return;
    }
    if (this.IsVertical) {
        var oi = this.Element.parentNode.offsetHeight - this.Element.offsetHeight;
        var Oi = this.LeftArrow.offsetHeight;
        var ii = this.RightArrow.offsetHeight;
    } else {
        var oi = this.Element.parentNode.offsetWidth - this.Element.offsetWidth;
        var Oi = this.LeftArrow.offsetWidth;
        var ii = this.RightArrow.offsetWidth;
    }
    if (!this.LeaveGapsForArrows) {
        Oi = 0;
        ii = 0;
    }
    this.MaxScrollPosition = 0;
    this.MinScrollPosition = oi - ii - Oi;
    if (this.ScrollButtonsPosition == RadControlsNamespace.ScrollButtonsPosition.Middle) {
        this.Offset = Oi;
    } else if (this.ScrollButtonsPosition == RadControlsNamespace.ScrollButtonsPosition.Left) {
        this.Offset = Oi + ii;
    } else {
        this.Offset = 0;
    }
};
RadControlsNamespace.Scroll.prototype.CalculateInitialTab = function () {
    var Ii = this.Element.getElementsByTagName("\154\x69");
    if (Ii.length > 0) {
        var i = 0;
        while (this.ScrollPosition < -(this.IsVertical ? Ii[i].offsetTop : Ii[i].offsetLeft)) {
            i++;
        }
        this.CurrentTab = i;
    }
};
RadControlsNamespace.Scroll.prototype.AttachScrollMethods = function () {
    if (this.PerTabScrolling) {
        this.Scroll = RadControlsNamespace.Scroll.StartPerTabScroll;
        this.Stop = RadControlsNamespace.Scroll.StopPerTabScroll;
    } else {
        this.Scroll = RadControlsNamespace.Scroll.StartSmoothScroll;
        this.Stop = RadControlsNamespace.Scroll.StopSmoothScroll;
    }
};
RadControlsNamespace.Scroll.prototype.EvaluateArrowStatus = function () {
    var oj = !(this.ScrollPosition > this.MinScrollPosition);
    var Oj = !(this.ScrollPosition < this.MaxScrollPosition);
    this.RightArrow.disabled = oj;
    this.LeftArrow.disabled = Oj;
    if (Oj) {
        if (this.LeftArrow.className != this.LeftArrowClassDisabled) {
            this.LeftArrow.className = this.LeftArrowClassDisabled;
        }
    } else {
        if (this.LeftArrow.className != this.LeftArrowClass) {
            this.LeftArrow.className = this.LeftArrowClass;
        }
    }
    if (oj) {
        if (this.RightArrow.className != this.RightArrowClassDisabled) {
            this.RightArrow.className = this.RightArrowClassDisabled;
        }
    } else {
        if (this.RightArrow.className != this.RightArrowClass) {
            this.RightArrow.className = this.RightArrowClass;
        }
    }
};
RadControlsNamespace.Scroll.StartSmoothScroll = function (direction) {
    this.Stop();
    this.Direction = direction;
    var R = this;
    var lj = function () {
        R.ScrollBy(R.Direction * R.ScrollAmount);
    };
    lj();
    this.ij = setInterval(lj, 10);
};
RadControlsNamespace.Scroll.prototype.ScrollTo = function (position) {
    position = Math.max(position, this.MinScrollPosition);
    position = Math.min(position, this.MaxScrollPosition);
    position += this.Offset;
    if (this.IsVertical) {
        this.Element.style.top = position + "\160\x78";
    } else {
        this.Element.style.left = position + "\x70\x78";
    }
    this.Owner.ScrollPosition = this.ScrollPosition = position - this.Offset;
    this.EvaluateArrowStatus();
};
RadControlsNamespace.Scroll.prototype.ScrollBy = function (Ij) {
    var ok = this.ScrollPosition;
    this.ScrollTo(ok + Ij);
};
RadControlsNamespace.Scroll.StartPerTabScroll = function (direction) {
    this.Stop();
    var Ii = this.Element.getElementsByTagName("\x6ci");
    var Ok = this.CurrentTab - direction;
    if (Ok < 0 || Ok > Ii.length) {
        return;
    }
    var lk = direction == -1 ? this.CurrentTab : Ok;
    this.CurrentTab = Ok;
    if (this.IsVertical) {
        var ik = Ii[lk].offsetHeight;
    } else {
        var ik = Ii[lk].offsetWidth;
    }
    this.ScrollBy(ik * direction);
    this.EvaluateArrowStatus();
};
RadControlsNamespace.Scroll.prototype.ScrollNeeded = function () {
    return true;
    if (this.IsVertical) {
        return this.Element.offsetHeight > this.Element.parentNode.offsetHeight;
    }
    return this.Element.offsetWidth > this.Element.parentNode.offsetWidth;
};
RadControlsNamespace.Scroll.StopSmoothScroll = function (direction) {
    if (this.OnScrollStop) {
        this.OnScrollStop();
    }
    clearInterval(this.ij);
};
RadControlsNamespace.Scroll.StopPerTabScroll = function (direction) {
    if (this.OnScrollStop) {
        this.OnScrollStop();
    }
};
;
if (typeof window.RadControlsNamespace == "u\x6e\x64efined") {
    window.RadControlsNamespace = {};
}
RadControlsNamespace.Ticker = function (n) {
    this.Listener = n;
    this.IntervalPointer = null;
};
RadControlsNamespace.Ticker.prototype = {
    Configure: function (L) {
        this.Duration = L.Duration;
        this.Interval = 16;
    }, Start: function () {
        clearInterval(this.IntervalPointer);
        this.TimeElapsed = 0;
        var R = this;
        var ob = function () {
            R.Tick();
        };
        this.Tick();
        this.IntervalPointer = setInterval(ob, this.Interval);
    }, Tick: function () {
        this.TimeElapsed += this.Interval;
        this.Listener.OnTick(this.TimeElapsed);
        if (this.TimeElapsed >= this.Duration) {
            this.Stop();
        }
    }, Stop: function () {
        if (this.IntervalPointer) {
            this.Listener.OnTickEnd();
            clearInterval(this.IntervalPointer);
            this.IntervalPointer = null;
        }
    }
};
;
if (typeof(Sys) != "undefined") {
    if (Sys.Application != null && Sys.Application.notifyScriptLoaded != null) {
        Sys.Application.notifyScriptLoaded();
    }
}
if (typeof(Sys) != "undefined") {
    if (Sys.Application != null && Sys.Application.notifyScriptLoaded != null) {
        Sys.Application.notifyScriptLoaded();
    }
}