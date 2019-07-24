function _classCallCheck(t, e) {
    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
}! function(t) {
    t(document).ready(function() {
        var e = document.querySelector(".main-nav__toggle"),
            n = document.querySelector(".main-nav__wrapper--closed");
        e.addEventListener("click", function(t) {
            t.preventDefault(), e.classList.toggle("main-nav__toggle--closed"), n.classList.toggle("main-nav__wrapper--closed")
        }), t(".main-nav__list").on("click", "a", function(e) {
            e.preventDefault();
            var n = t(this).attr("href"),
                a = t(n).offset().top;
            t("body,html").animate({
                scrollTop: a
            }, 500)
        })
    })
}(jQuery), $(function() {
    $(".scrollup").click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 1e3)
    })
});
var TextScramble = function() {
        function t(e) {
            _classCallCheck(this, t), this.el = e, this.chars = "!<>-_\\/[]{}—=+*^?#________", this.update = this.update.bind(this)
        }
        return t.prototype.setText = function(t) {
            var e = this,
                n = this.el.innerText,
                a = Math.max(n.length, t.length),
                r = new Promise(function(t) {
                    return e.resolve = t
                });
            this.queue = [];
            for (var o = 0; o < a; o++) {
                var s = n[o] || "",
                    i = t[o] || "",
                    c = Math.floor(40 * Math.random()),
                    u = c + Math.floor(40 * Math.random());
                this.queue.push({
                    from: s,
                    to: i,
                    start: c,
                    end: u
                })
            }
            return cancelAnimationFrame(this.frameRequest), this.frame = 0, this.update(), r
        }, t.prototype.update = function() {
            for (var t = "", e = 0, n = 0, a = this.queue.length; n < a; n++) {
                var r = this.queue[n],
                    o = r.from,
                    s = r.to,
                    i = r.start,
                    c = r.end,
                    u = r.char;
                this.frame >= c ? (e++, t += s) : this.frame >= i ? ((!u || Math.random() < .28) && (u = this.randomChar(), this.queue[n].char = u), t += '<span class="dud">' + u + "</span>") : t += o
            }
            this.el.innerHTML = t, e === this.queue.length ? this.resolve() : (this.frameRequest = requestAnimationFrame(this.update), this.frame++)
        }, t.prototype.randomChar = function() {
            return this.chars[Math.floor(Math.random() * this.chars.length)]
        }, t
    }(),
    phrases = ["Web-разработка", "HTML5 and CSS3", "Javascript", "Sass and Gulp", "PHP"],
    el = document.querySelector(".main-header__text"),
    fx = new TextScramble(el),
    counter = 0,
    next = function t() {
        fx.setText(phrases[counter]).then(function() {
            setTimeout(t, 800)
        }), counter = (counter + 1) % phrases.length
    };
next(), $(document).ready(function() {
    $(".trigger").on("click", function() {
        return $(".modal-wrapper").toggleClass("open"), $(".page-wrapper").toggleClass("blur-it"), !1
    })
});

/* -----------------------------------------Модальное окно--------------------------*/

$( document ).ready(function() {
  $('.trigger').on('click', function() {
     $('.modal-wrapper').toggleClass('open');
    $('.page-wrapper').toggleClass('blur-it');
     return false;
  });
});


/* -----------------------------------------Модальное окно поиска работы--------------------------*/
var delay_popup = 2000;
setTimeout("document.getElementById('overlay').style.display='block'", delay_popup);