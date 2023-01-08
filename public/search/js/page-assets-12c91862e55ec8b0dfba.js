"use strict";
(self.webpackChunkcsn_showroom_searchpage_web =
    self.webpackChunkcsn_showroom_searchpage_web || []).push([
    [529],
    {
        7233: function (e, t, i) {
            var o = i(3830),
                r = i(8268);
            class s {
                init() {
                    (this.readArea = document.querySelector(
                        '[data-role="postcode-selector-read"]'
                    )),
                        (this.editArea = document.querySelector(
                            '[data-role="postcode-selector-edit"]'
                        )),
                        (this.btnCancel = document.querySelector(
                            '[data-role="postcode-selector-edit-cancel"]'
                        )),
                        (this.btnSave = document.querySelector(
                            '[data-role="postcode-selector-edit-save"]'
                        )),
                        (this.postCode = document.querySelector(
                            '[data-role="txt-postcode-selector"]'
                        )),
                        (this.notifier = document.querySelector(
                            '[data-role="postcode-selector-update-notifier"]'
                        )),
                        this.readArea
                            .querySelector("label")
                            .addEventListener("click", (e) => {
                                this.toggle(e);
                            }),
                        this.btnCancel.addEventListener("click", (e) => {
                            this.toggle(e);
                        }),
                        this.btnSave.addEventListener("click", (e) => {
                            this.save(e);
                        });
                }
                toggle(e) {
                    this.readArea.classList.toggle("d-none"),
                        this.editArea.classList.toggle("d-none"),
                        e.preventDefault();
                }
                notify(e) {
                    (this.notifier.value = e),
                        this.notifier.dispatchEvent(new Event("change"));
                }
                save(e) {
                    if (!this.editArea.checkValidity()) return;
                    this.btnSave.classList.toggle("d-none"),
                        this.btnCancel.classList.toggle("d-none");
                    let t = this.editArea.getAttribute("data-url"),
                        i = { postcode: this.postCode.value };
                    this.notify("loading"),
                        $.ajax({
                            type: "POST",
                            url: t,
                            async: !1,
                            contentType: "application/json",
                            data: JSON.stringify(i),
                            headers: {
                                RequestVerificationToken: $(
                                    'input:hidden[name="__RequestVerificationToken"]'
                                ).val(),
                            },
                            success: (e) => {
                                this.notify("done");
                            },
                            error: (e) => {
                                alert("An error occurred"), console.log(e);
                            },
                        }),
                        e.preventDefault();
                }
            }
            class n {
                init() {
                    document
                        .querySelectorAll('[data-role="autocomplete-dropdown"]')
                        .forEach((e) => {
                            e.querySelector(
                                '[data-role="autocomplete-dropdown-txt"]'
                            ).addEventListener("click", (t) => {
                                t.stopPropagation(),
                                    e
                                        .querySelector("ul")
                                        .classList.toggle("d-none");
                            });
                        }),
                        document.addEventListener("click", (e) => {
                            document
                                .querySelectorAll(
                                    '[data-role="autocomplete-dropdown"] ul'
                                )
                                .forEach((e) => e.classList.add("d-none"));
                        });
                }
            }
            function a(e, t, i) {
                return (
                    t in e
                        ? Object.defineProperty(e, t, {
                              value: i,
                              enumerable: !0,
                              configurable: !0,
                              writable: !0,
                          })
                        : (e[t] = i),
                    e
                );
            }
            class l {
                constructor() {
                    a(this, "getTextWidth", (e, t) => {
                        let i = document.createElement("span");
                        return (
                            (i.style.cssText = `font:${t};white-space:nowrap;visibility:hidden;`),
                            (i.textContent = e),
                            document.body.appendChild(i),
                            i.offsetWidth
                        );
                    }),
                        a(this, "init", () => {
                            let e = document.querySelector(
                                '[data-role="hero-link"]'
                            );
                            if (e) {
                                const t = '12px "Open Sans"';
                                let i = e.querySelector("label"),
                                    o = e.querySelector(
                                        '[data-role="link-icon"]'
                                    ),
                                    r = this.getTextWidth(i.textContent, t),
                                    s = e.getAttribute("target");
                                (e.style.width = r + 120 + "px"),
                                    new Promise((e) => {
                                        setTimeout(() => {
                                            i.classList.add("hasBorder"),
                                                (i.style.width = r + "px"),
                                                e();
                                        }, 1e3);
                                    }).then(() => {
                                        setTimeout(() => {
                                            i.classList.remove("hasBorder");
                                            let e = {
                                                container: o,
                                                renderer: "svg",
                                                loop: !1,
                                                autoplay: !0,
                                                path:
                                                    "_blank" === s
                                                        ? "https://resource.csnstatic.com/commercial/cmp-showroom-searchpage/externalLinkAnimation.json"
                                                        : "https://resource.csnstatic.com/commercial/cmp-showroom-searchpage/internalLinkAnimation.json",
                                            };
                                            lottie.loadAnimation(e);
                                        }, 1e3);
                                    });
                            }
                        });
                }
            }
            function d(e, t, i) {
                return (
                    t in e
                        ? Object.defineProperty(e, t, {
                              value: i,
                              enumerable: !0,
                              configurable: !0,
                              writable: !0,
                          })
                        : (e[t] = i),
                    e
                );
            }
            class c {
                constructor() {
                    d(this, "removeContent", (e) => {
                        if (e)
                            for (; e.firstChild; ) e.removeChild(e.firstChild);
                    }),
                        d(this, "insertVideo", (e) => {
                            if (e) {
                                var t = e.getAttribute("data-videoUrl"),
                                    i = document.createElement("video");
                                if (
                                    ((i.controls = !1),
                                    (i.muted = !0),
                                    (i.autoplay = !0),
                                    (i.loop = !0),
                                    i.setAttribute(
                                        "playsinline",
                                        "playsinline"
                                    ),
                                    e.appendChild(i),
                                    Hls.isSupported())
                                ) {
                                    var o = new Hls();
                                    return (
                                        (o.config.capLevelToPlayerSize = !0),
                                        o.loadSource(t),
                                        o.attachMedia(i),
                                        void o.on(
                                            Hls.Events.MANIFEST_PARSED,
                                            () => {
                                                i.play();
                                            }
                                        )
                                    );
                                }
                                i.src = t;
                            }
                        }),
                        d(this, "initVideo", () => {
                            const e = document.querySelector(
                                '[data-role="tile-video"]'
                            );
                            this.removeContent(e), this.insertVideo(e);
                        });
                }
            }
            i(4449);
            const h = new (class {
                constructor() {
                    var e, t;
                    (t = () => {
                        document
                            .querySelector(
                                '[data-role="postcode-selector-update-notifier"]'
                            )
                            .addEventListener("change", (e) => {
                                if ("loading" === e.target.value)
                                    return void this.showLoading();
                                const t = e.target.dataset.baseUrl,
                                    i = e.target.dataset.queryParams;
                                this.updateAllSections(e.target.href, t, i);
                            });
                    }),
                        (e = "postcodeUpdatedWatcher") in this
                            ? Object.defineProperty(this, e, {
                                  value: t,
                                  enumerable: !0,
                                  configurable: !0,
                                  writable: !0,
                              })
                            : (this[e] = t);
                }
                init() {
                    this.initProperties(),
                        this.initIECompibility(),
                        this.filterClickListener(),
                        this.filterNavTriggerListener(),
                        this.pagingClickListener(),
                        this.updateCount(),
                        this.heroManager.initVideo(),
                        this.advertPlatform.loadAdverts(),
                        this.postcodeSelector.init(),
                        this.autoComplete.init(),
                        this.postcodeUpdatedWatcher(),
                        this.heroAd.init(),
                        this.tileVideo.initVideo();
                }
                initProperties() {
                    (this.hero = document.querySelector('[data-role="hero"]')),
                        (this.filter = document.querySelector(
                            '[data-role="filter"]'
                        )),
                        (this.filterNavTriggers = document.querySelectorAll(
                            '[data-role="filter-nav-trigger"]'
                        )),
                        (this.filterContent = document.querySelector(
                            '[data-role="filter-content"]'
                        )),
                        (this.results = document.querySelector(
                            '[data-role="results"]'
                        )),
                        (this.prefix =
                            "/_showroomSearchPage/api/v1/refresh/carsales/"),
                        (this.sections = [
                            { element: this.hero, field: "hero" },
                            { element: this.filterContent, field: "filter" },
                            { element: this.results, field: "searchResults" },
                        ]),
                        (this.isIE = window.document.documentMode),
                        (this.heroManager = new o.V()),
                        (this.advertPlatform = new r.K()),
                        (this.postcodeSelector = new s()),
                        (this.autoComplete = new n()),
                        (this.heroAd = new l()),
                        (this.tileVideo = new c());
                }
                initIECompibility() {
                    window.NodeList &&
                        !NodeList.prototype.forEach &&
                        (NodeList.prototype.forEach = Array.prototype.forEach);
                }
                filterNavTriggerListener() {
                    this.filterNavTriggers.forEach((e) => {
                        e.addEventListener("click", (e) => {
                            e.preventDefault(),
                                e.stopPropagation(),
                                this.filter.classList.toggle("on"),
                                document
                                    .querySelector("body")
                                    .classList.toggle("site-nav-opened");
                        });
                    });
                }
                filterClickListener() {
                    this.isIE ||
                        this.filterContent.addEventListener(
                            "click",
                            (e) => {
                                if (
                                    e.target.matches(
                                        "aside a[href], aside a[href] *"
                                    )
                                ) {
                                    e.preventDefault();
                                    const t = e.target.closest("a"),
                                        i = t.dataset.baseUrl,
                                        o = t.dataset.queryParams;
                                    this.updateAllSections(t.href, i, o);
                                }
                            },
                            !1
                        );
                }
                pagingClickListener() {
                    this.isIE ||
                        this.results.addEventListener(
                            "click",
                            (e) => {
                                if (e.target.matches('[data-role="paging"]')) {
                                    e.preventDefault();
                                    const t = e.target.dataset.baseUrl,
                                        i = e.target.dataset.queryParams;
                                    this.updateAllSections(e.target.href, t, i);
                                }
                            },
                            !1
                        );
                }
                showLoading() {
                    this.sections.forEach((e) => {
                        e.element.classList.add("loading");
                    });
                }
                hideLoading() {
                    this.sections.forEach((e) => {
                        e.element.classList.remove("loading");
                    });
                }
                updateAllSections(e, t, i) {
                    this.showLoading();
                    const o = i
                        ? `${this.prefix}?baseUrl=${encodeURIComponent(t)}&${i}`
                        : `${this.prefix}?baseUrl=${encodeURIComponent(t)}`;
                    window
                        .fetch(o, {
                            method: "GET",
                            credentials: "same-origin",
                            headers: {
                                RequestVerificationToken: $(
                                    'input:hidden[name="__RequestVerificationToken"]'
                                ).val(),
                            },
                        })
                        .then((e) => {
                            if (!e.ok)
                                throw new Error(`Failed to refresh url: ${o}`);
                            return e.json();
                        })
                        .then((t) => {
                            this.sections.forEach((e) => {
                                e.element.innerHTML = t[e.field];
                            }),
                                this.hideLoading(),
                                window.history.pushState(
                                    { url: e },
                                    t.title,
                                    e
                                ),
                                (document.title = t.title),
                                (window.google_advert_targeting_tags =
                                    t.advertPageTargeting),
                                this.autoComplete.init(),
                                this.updateCount(),
                                this.heroManager.initVideo(),
                                this.advertPlatform.loadAdverts(),
                                this.postcodeSelector.init(),
                                this.postcodeUpdatedWatcher(),
                                this.scrollTo(this.results),
                                this.heroAd.init(),
                                this.tileVideo.initVideo(),
                                this.updateTrackers();
                        })
                        .catch((r) => {
                            "undefined" != typeof newrelic &&
                                newrelic.noticeError(r, {
                                    fetchUrl: o,
                                    url: e,
                                    baseUrl: t,
                                    queryParams: i,
                                }),
                                console.error(r),
                                this.hideLoading();
                        });
                }
                updateCount() {
                    const e = document.querySelector(
                            '[data-role="filter-info"]'
                        ),
                        t = e.getAttribute("data-filters-count"),
                        i = e.getAttribute("data-results-count"),
                        o = t > 0 ? `(${t})` : "";
                    (document.querySelector(
                        '[data-role="filter-count"]'
                    ).innerHTML = `Filter ${o}`),
                        (document.querySelector(
                            '[data-role="btn-show-cars-results-count"]'
                        ).innerHTML = i);
                }
                scrollTo(e, t = -300) {
                    window.scroll({
                        behavior: "smooth",
                        left: 0,
                        top: e.offsetTop + t,
                    });
                }
                onResize() {
                    this.heroManager.onResize();
                }
                updateTrackers() {
                    window.CsnInsightsEventTracker &&
                        window.CsnInsights &&
                        window.CsnInsightsEventTracker.sendPageView(
                            window.CsnInsights.metaData,
                            window.location.pathname
                        );
                }
            })();
            window.addEventListener("load", () => h.init()),
                window.addEventListener("resize", () => h.onResize());
        },
        4449: function (e, t, i) {
            i.r(t);
        },
    },
    function (e) {
        e.O(0, [821], function () {
            return 7233, e((e.s = 7233));
        }),
            e.O();
    },
]);
//# sourceMappingURL=page-assets-12c91862e55ec8b0dfba.js.map
