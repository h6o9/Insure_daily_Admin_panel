if (idElementNotNull("insurance-calculator-container")) {
    let c = "Car",
        a = "Day",
        N = "",
        t = 0;
    const e = [{
            day: {
                one: "14.55",
                two: "20.14",
                three: "24.58"
            }
        }, {
            week: {
                one: "33.57",
                two: "55.82",
                three: "86.16"
            }
        }, {
            month: {
                one: "108.26",
                two: "184.18",
                three: "292.62"
            }
        }],
        f = [{
            day: {
                one: "15.59",
                two: "18.92",
                three: "24.18"
            }
        }, {
            week: {
                one: "55.68",
                two: "97.71",
                three: "157.83"
            }
        }, {
            month: {
                one: "174.09",
                two: "310.85",
                three: "368.88"
            }
        }],
        g = [{
            day: {
                one: "13.46",
                two: "22.86",
                three: "29.57"
            }
        }, {
            week: {
                one: "40.89",
                two: "49.97",
                three: "58.55"
            }
        }, {
            month: {
                one: "70.81",
                two: "106.43",
                three: "144.12"
            }
        }];

    function openCalculator(e, t) {
        c = t;
        let n, o, l;
        for (getVehicleType(h.textContent = t), o = document.getElementsByClassName("tabcontent"), n = 0; n < o.length; n++) o[n].style.display = "none";
        for (l = document.getElementsByClassName("tablinks"), n = 0; n < l.length; n++) l[n].className = l[n].className.replace(" active-link", "");
        document.getElementById(t).style.display = "block", e.currentTarget.className += " active-link"
    }
    if (classElementNotNull("tabcontent")) {
        const x = document.querySelector(".tabcontent");
        x.style.display = "block"
    }
    const h = document.querySelector(".show-vehicle"),
        i = document.querySelectorAll(".calendar"),
        j = document.querySelector(".total-price"),
        k = document.querySelector(".van-price"),
        l = document.querySelector(".learner-price"),
        m = document.querySelectorAll(".num-of-hour"),
        n = document.querySelector(".num-of-week"),
        o = document.querySelectorAll(".insuranceHour").children,
        p = document.querySelectorAll(".insuranceDuration");
    classElementNotNull("tablinks") && addEventListener("load", () => {
        loadScript()
    });
    let s = document.querySelector(".tab").firstElementChild.classList.value;

    function loadScript() {
        veh = "Car", document.getElementById(veh).style.display = "block", document.querySelector(".tablinks").className += " active-link", getVehicleType(veh);
        let e = s.split(" ");
        e.includes("active-link") && document.querySelector(".tab").firstElementChild.classList.remove("active-link"), document.querySelector(".tab").firstElementChild.classList.add("active-link")
    }

    function getVehicleType(t) {
        let n = "";

        function o(t) {
            for (let e = 0; e < t.length; e++) {
                const n = t[e];
                n.firstElementChild.classList.contains("active-link") && n.firstElementChild.classList.remove("active-link")
            }
        }
        if ("Car" === t) {
            const v = e;
            var r, c = document.querySelectorAll(".ul")[0].children,
                a = document.querySelectorAll(".ul")[1].children;
            o(c);
            for (let e = 0; e < c.length; e++) {
                const w = c[e];
                0 == e && (r = w.children[0].attributes[0].value, n = r, w.children[0].classList.add("active-link"), calendar = r)
            }
            o(a);
            for (let e = 0; e < a.length; e++) {
                const x = a[e];
                0 == e && x.children[0].classList.add("active-link")
            }

            function i(e) {
                e && (j.textContent = "" + N + v[0].day.one)
            }
            i(n)
        }
        if ("Van" === t) {
            const S = f;
            var s, d = document.querySelectorAll(".ul")[2].children,
                u = document.querySelectorAll(".ul")[3].children;
            o(d);
            for (let e = 0; e < d.length; e++) {
                const L = d[e];
                0 == e && (s = L.children[0].attributes[0].value, n = s, L.children[0].classList.add("active-link"), calendar = s)
            }
            o(u);
            for (let e = 0; e < u.length; e++) {
                const q = u[e];
                0 == e && (q.children[0].classList.add("active-link"), q.children[0].attributes[0].value)
            }

            function i(e) {
                e && (k.textContent = "" + N + S[0].day.one)
            }
            i(n)
        }
        if ("Learner" === t) {
            const b = g;
            var h, m, y = document.querySelectorAll(".ul")[4].children,
                C = document.querySelectorAll(".ul")[5].children;
            o(y);
            for (let e = 0; e < y.length; e++) {
                const p = y[e];
                0 == e && (h = p.children[0].attributes[0].value, p.children[0].classList.add("active-link"), calendar = h)
            }
            o(C);
            for (let e = 0; e < C.length; e++) {
                const E = C[e];
                0 == e && (m = E.children[0].attributes[0].value, n = m, E.children[0].classList.add("active-link"), calendar = m)
            }

            function i(e) {
                e && (l.textContent = +("" + N + b[0].day.one))
            }
            i(n)
        }
    }
    const r = t => {
        for (let e = 0; e < t.length; e++) t[e].classList.contains("active-link") && getHour(t[e].dataset.duration)
    };

    function removeActiveLink(t) {
        for (let e = 0; e < t.length; e++) t[e].classList.remove("active-link")
    }
    for (let e = 0; e < i.length; e++) i[e].addEventListener("click", e => {
        removeActiveLink(i), a = e.target.textContent.toString(), calendar = a, e.currentTarget.className += " active-link", r(m)
    });

    function getHour(t) {
        "Car" === c && ("Day" === a ? "one" === t ? j.textContent = "" + e[0].day.one : "two" === t ? j.textContent = "" + e[0].day.two : "three" === t && (j.textContent = "" + e[0].day.three) : "Car" === c && "Week" === a ? "one" === t ? j.textContent = "" + e[1].week.one : "two" === t ? j.textContent = "" + e[1].week.two : "three" === t && (j.textContent = "" + e[1].week.three) : "Car" === c && "Month" === a ? "one" === t ? j.textContent = "" + e[2].month.one : "two" === t ? j.textContent = "" + e[2].month.two : "three" === t && (j.textContent = "" + e[2].month.three) : alert("Please select Days")), "Van" === c && ("Day" === a ? "one" === t ? k.textContent = "" + f[0].day.one : "two" === t ? k.textContent = "" + f[0].day.two : "three" === t && (k.textContent = "" + f[0].day.three) : "Week" === a ? "one" === t ? k.textContent = "" + f[1].week.one : "two" === t ? k.textContent = "" + f[1].week.two : "three" === t && (k.textContent = "" + f[1].week.three) : "Month" === a ? "one" === t ? k.textContent = "" + f[2].month.one : "two" === t ? k.textContent = "" + f[2].month.two : "three" === t && (k.textContent = "" + f[2].month.three) : alert("Please select Days")), "Learner" === c && ("Day" === a ? "one" === t ? l.textContent = "" + g[0].day.one : "two" === t ? l.textContent = "" + g[0].day.two : "three" === t && (l.textContent = "" + g[0].day.three) : "Week" === a ? "one" === t ? l.textContent = "" + g[1].week.one : "two" === t ? l.textContent = "" + g[1].week.two : "three" === t && (l.textContent = "" + g[1].week.three) : "Month" === a ? "one" === t ? l.textContent = "" + g[2].month.one : "two" === t ? l.textContent = "" + g[2].month.two : "three" === t && (l.textContent = "" + g[2].month.three) : alert("Please select Days"))
    }
    for (let e = 0; e < m.length; e++) m[e].addEventListener("click", e => {
        var t = e.target.dataset.duration;
        removeActiveLink(m), e.currentTarget.className += " active-link", getHour(t, e)
    })
}

displayHiddenDetailsFromId("#catalog_buttons", "short_team_insurance");

function setCookie(e, t, o) {
    var i = new Date;
    i.setTime(i.getTime() + 24 * o * 60 * 60 * 1e3);
    i = "expires=" + i.toUTCString();
    document.cookie = e + "=" + t + ";" + i + ";path=/"
}

function getCookie(e) {
    for (var t = e + "=", o = decodeURIComponent(document.cookie).split(";"), i = 0; i < o.length; i++) {
        for (var n = o[i];
            " " == n.charAt(0);) n = n.substring(1);
        if (0 == n.indexOf(t)) return n.substring(t.length, n.length)
    }
    return ""
}
window.addEventListener("load", function() {
    "" === getCookie("privacy_policy") && (setCookie("privacy_policy", "applied", 7), document.getElementById("cookie").style.display = "block", setTimeout(function() {
        document.getElementById("cookie").style.display = "none"
    }, 3e3))
});

function faqs(e) {
    e.target.parentElement.classList.contains("faq_block") ? e.target.parentElement.classList.contains("extended") ? e.target.parentElement.classList.remove("extended") : e.target.parentElement.classList.add("extended") : e.target.parentElement.parentElement.parentElement.classList.contains("extended") ? e.target.parentElement.parentElement.parentElement.classList.remove("extended") : e.target.parentElement.parentElement.classList.add("extended")
}
createEventListener(".faq_block", "click", faqs);
if (null != document.getElementById("get_quote_page"))
    for (var icons = document.querySelectorAll(".icons"), i = 0; i < icons.length; i++) {
        var parentId = icons[i].parentElement.getAttribute("id");
        displayDetailsFromId(parentId, !0)
    }

function idElementNotNull(e) {
    return null != document.getElementById(e)
}

function classElementNotNull(e) {
    return null != document.querySelectorAll("." + e)
}

function tagElementNotNull(e) {
    return null != document.querySelectorAll(e)
}

function showHideElement(e, t) {
    idElementNotNull(e) && idElementNotNull(t) && document.getElementById(e).addEventListener("click", function(e) {
        e.preventDefault(), "block" === document.getElementById(t).style.display ? document.getElementById(t).style.display = "none" : document.getElementById(t).style.display = "block"
    })
}

function toggleElement(e, t, l) {
    var n;
    idElementNotNull(e) && idElementNotNull(t) && (e = document.getElementById(e), n = document.getElementById(t), e.addEventListener("click", function() {
        n.classList.toggle(l)
    }))
}

function getItemIdFromList(e, n) {
    if (null != document.querySelector(e))
        for (var t = document.querySelectorAll(e + " li a"), n = n, l = 0; l < t.length; l++) t[l].addEventListener("click", function(e) {
            e.preventDefault(), document.getElementById(n).classList.remove("active"), null != document.querySelector("#" + n + "_details .details") && document.querySelector("#" + n + "_details .details").classList.replace("active_offer_button", "not_active_offer_button"), this.classList.add("active"), null != document.querySelector("#" + this.id + "_details .details") && document.querySelector("#" + this.id + "_details .details").classList.replace("not_active_offer_button", "active_offer_button"), n = this.id;
            var t = window.innerHeight,
                l = document.getElementById(this.id + "_details"),
                e = 40;
            null != l && t > l.offsetHeight && (e = (t - l.offsetHeight) / 2), null != l && (l = l.getBoundingClientRect().top + window.scrollY, window.scroll({
                top: l - e,
                behavior: "smooth"
            }))
        })
}

function displayHiddenDetailsFromId(e, t) {
    if (null != document.querySelector(e))
        for (var l = document.querySelectorAll(e + " li a"), t = t, n = 0; n < l.length; n++) l[n].addEventListener("click", function(e) {
            e.preventDefault(), document.getElementById(t).classList.remove("active"), document.querySelector("#" + t + "_details").style.display = "none", this.classList.add("active"), document.querySelector("#" + this.id + "_details").style.display = "block", t = this.id
        })
}

function displayDetailsFromId(e, t) {
    var l, n;
    idElementNotNull(e) && (l = document.getElementById(e), n = document.getElementById(e + "_details"), l.addEventListener("click", function(e) {
        e.preventDefault(), "" == n.style.display || "none" == n.style.display ? (n.style.display = "block", 1 == t && (l.firstElementChild.classList.add("close_icon"), l.firstElementChild.classList.remove("info_icon"))) : (n.style.display = "none", 1 == t && (l.firstElementChild.classList.add("info_icon"), l.firstElementChild.classList.remove("close_icon")))
    }))
}

function radioButtonsYesAndNo(e) {
    if (null != document.getElementsByClassName(e))
        for (var t = document.getElementsByClassName(e), l = 0; l < t.length; l++) t[l].addEventListener("click", function() {
            for (var e = 0; e < t.length; e++) t[e].classList.remove("active"), t[e].nextSibling.nextSibling.removeAttribute("checked");
            !1 !== this.nextSibling.nextSibling.checked && "" !== this.nextSibling.nextSibling.checked || (this.nextSibling.nextSibling.setAttribute("checked", "checked"), this.classList.add("active"))
        })
}

function removeSpace(e) {
    var t = document.getElementById(e),
        e = t.value.split(" ").join("");
    return t.value = e
}

function createEventListener(e, t, l, n = !1) {
    var o = e.includes("#");
    if (0 == n)
        if (0 == o) {
            const i = document.querySelectorAll("" + e);
            for (let e = 0; e < i.length; e++) i[e].addEventListener(t, e => {
                l && "function" == typeof l && l(e)
            })
        } else {
            const s = document.querySelector("" + e);
            s.addEventListener(t, e => {
                l && "function" == typeof l && l(e)
            })
        }
    else {
        const c = document.querySelector("" + e);
        for (let e = 0; e < c.children.length; e++) c.children[e].addEventListener(t, e => {
            l && "function" == typeof l && l(e)
        })
    }
}

function fetchBlogs(e, t, l, a, u, m, y, f = "moreBlogsButton") {
    const g = l;
    fetch("" + e + t + `/${l}/` + a, {
        redirect: "follow"
    }).then(e => e.json()).then(t => {
        const e = null != document.getElementById(f) ? document.getElementById(f) : "";
        if (console.log(e), "" != e && (t.length > g ? e.style.display = "block" : e.style.display = "none"), 0 < t.length)
            for (let e = 0; e < t.length; e++) {
                var l = t[e].Name,
                    n = "" != t[e].UrlBuilderCategory ? t[e].UrlBuilderCategory + "/" : "",
                    o = "" != t[e].UrlBuilderSubCategory ? t[e].UrlBuilderSubCategory + "/" : "",
                    i = t[e].Url,
                    s = t[e].Image,
                    c = t[e].ImageAlt,
                    d = t[e].CreateByFullName,
                    r = new Date(parseInt(t[e].CreatedOn.substr(6))),
                    o = "blog/" + n + o + i,
                    i = (e, t, l = "en-UK") => new Intl.DateTimeFormat(l, t).format(e),
                    r = `${i(r, { weekday: "short" })} ${i(r, { day: "numeric" })}-${i(r, { month: "short" })}-` + i(r, {
                        year: "2-digit"
                    });
                console.log(), y.insertAdjacentHTML("beforeend", `<li style="${1 == m ? "width:100% ; float:left; padding:10px; margin-bottom: 0; border-bottom: 1px solid #e4e4e4;" : ""}">
						<a href="/${o}" ${1 == m ? "" : 'class="fl col_100 bs_grey200_77 ba_2_grey200 b_sbb br_5"'} >
							${1 == u ? "" != s ? `<img src="/${s}" alt="${c}" />` : "" : ""}

					<div ${1 != u ? "" : 'class="fl col_100 m_5"'} >
						<p class="col_100 fl" style="${1 != u ? "" : "min-height:60px"};display: -webkit-box; overflow: hidden; -webkit-line-clamp: 2; line-clamp: 2; -webkit-box-orient: vertical;">${l}</p>
						${1 == a ? `<address class="d_i">${d} - <time class="d_i">${r}</time></address>` : ""}
					</div>

						</a>
					</li>`)
            }
    }).catch(e => {
        console.error("Error:", e)
    })
}

function fetchBlogList(e, t, l, s, c = "moreBlogsButton") {
    const d = l;
    fetch("" + e + t + `/${l}/0`, {
        redirect: "follow"
    }).then(e => e.json()).then(t => {
        const e = null != document.getElementById(c) ? document.getElementById(c) : "";
        if (console.log(e), "" != e && (t.length > d ? e.style.display = "block" : e.style.display = "none"), 0 < t.length)
            for (let e = 0; e < t.length; e++) {
                var l = t[e].Name,
                    n = "" != t[e].UrlBuilderCategory ? t[e].UrlBuilderCategory + "/" : "",
                    o = "" != t[e].UrlBuilderSubCategory ? t[e].UrlBuilderSubCategory + "/" : "",
                    i = t[e].Url;
                s.insertAdjacentHTML("beforeend", `<li style="margin-bottom:0">
						<a href="/${"blog/" + n + o + i}">${l}</a>
					</li>`)
            }
    }).catch(e => {
        console.error("Error:", e)
    })
}
if (idElementNotNull("menu_btn") && tagElementNotNull("nav")) {
    const a = document.getElementById("menu_btn"),
        b = document.getElementById("header_nav"),
        c = document.querySelectorAll("#header_nav ul li .a");
    a.addEventListener("click", () => {
        b.classList.toggle("active"), a.classList.toggle("active")
    }), c.forEach(t => {
        t.addEventListener("click", () => {
            if (t.parentElement.classList.contains("active")) t.parentElement.classList.remove("active");
            else {
                for (var e = 0; e < c.length; e++) c[e].parentElement.classList.contains("active") && c[e].parentElement.classList.remove("active");
                t.parentElement.classList.add("active")
            }
        })
    })
}

function homePageQuoteButtonController() {
    const e = document.getElementById("quote_btn"),
        n = () => {
            idElementNotNull("home_block") && (window.innerWidth < 615 && window.scrollY < 400 ? e.classList.add("d_n") : e.classList.remove("d_n"))
        };
    n(), window.addEventListener("scroll", () => {
        n()
    })
}

function homePagePosition() {
    var e, n = document.getElementById("home_block"),
        t = document.getElementsByTagName("header")[0];
    window.innerHeight > n.firstElementChild.clientHeight && window.innerHeight < 950 && 900 < window.innerWidth ? (e = window.innerHeight - n.firstElementChild.clientHeight, n.style.padding = (e - t.clientHeight) / 2 + "px 0") : n.style.padding = "20px 0"
}
idElementNotNull("home_block") && (homePagePosition(), homePageQuoteButtonController(), window.addEventListener("resize", function() {
    homePagePosition()
}));
document.addEventListener("DOMContentLoaded", function() {
    let e = [].slice.call(document.querySelectorAll("img.lazy")),
        t = !1;

    function n() {
        !1 === t && (t = !0, setTimeout(function() {
            e.forEach(function(t) {
                t.getBoundingClientRect().top <= window.innerHeight && 0 <= t.getBoundingClientRect().bottom && "none" !== getComputedStyle(t).display && (t.src = t.dataset.src, t.srcset = t.dataset.srcset, t.classList.remove("lazy"), e = e.filter(function(e) {
                    return e !== t
                }), 0 === e.length && (document.removeEventListener("scroll", n), window.removeEventListener("resize", n), window.removeEventListener("orientationchange", n)))
            }), t = !1
        }, 200))
    }
    document.addEventListener("scroll", n), window.addEventListener("resize", n), window.addEventListener("orientationchange", n)
});

function loadPartialView(e) {
    idElementNotNull(e) && fetch("partials/" + e).then(t => {
        t.text().then(t => {
            document.getElementById(e).innerHTML = t
        })
    })
}
if (classElementNotNull("load_partial")) {
    const d = document.querySelectorAll(".load_partial");
    d.forEach(t => {
        null != t.getAttribute("id") && loadPartialView(t.getAttribute("id")), console.log(t.getAttribute("id"))
    })
}
getItemIdFromList("#recovery_buttons", "excess_protect"), getItemIdFromList("#short_term_buttons", "temporary_car_insurance");
if (classElementNotNull("pop_up")) {
    var closePopUp = document.getElementsByClassName("close_pop_up"),
        popUp = document.getElementsByClassName("pop_up"),
        closeIcons = document.getElementsByClassName("close_icon");

    function changeCloseIcon() {
        for (var e = 0; e < closeIcons.length; e++) closeIcons[e].classList.add("info_icon"), closeIcons[e].classList.remove("close_icon")
    }
    for (var i = 0; i < closePopUp.length; i++) closePopUp[i].addEventListener("click", function() {
        for (var e = 0; e < popUp.length; e++) popUp[e].style.display = "none", changeCloseIcon()
    });
    for (i = 0; i < popUp.length; i++) popUp[i].addEventListener("click", function() {
        this.style.display = "none", changeCloseIcon()
    })
}