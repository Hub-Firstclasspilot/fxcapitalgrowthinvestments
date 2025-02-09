"use strict";
$(document).ready(function () {
    togglemenu();
    if ($("body").hasClass("layout-6") || $("body").hasClass("layout-7")) {
        togglemenulayout();
    }
    menuhrres();
    var e = $(window)[0].innerWidth;
    $('[data-toggle="tooltip"]').tooltip();
    $('[data-toggle="popover"]').popover();
    $(".to-do-list input[type=checkbox]").on("click", function () {
        if ($(this).prop("checked")) {
            $(this).parent().addClass("done-task");
        } else {
            $(this).parent().removeClass("done-task");
        }
    });
    $(".mobile-menu").on("click", function () {
        var g = $(this);
        g.toggleClass("on");
    });
    $("#mobile-collapse").on("click", function () {
        $(".pcoded-navbar:not(.theme-horizontal)").toggleClass("navbar-collapsed");
    });
    $(".search-btn").on("click", function () {
        var g = $(this);
        $(".main-search").addClass("open");
        if (e <= 991) {
            $(".main-search .form-control").css({ width: "90px" });
        } else {
            $(".main-search .form-control").css({ width: "150px" });
        }
    });
    $(".search-close").on("click", function () {
        var g = $(this);
        $(".main-search").removeClass("open");
        $(".main-search .form-control").css({ width: "0" });
    });
    $("#search-friends").on("keyup", function () {
        var h = $(this).val().toLowerCase();
        $(".header-user-list .userlist-box .media-body .chat-header").each(function () {
            var g = $(this).text().toLowerCase();
            $(this).closest(".userlist-box")[g.indexOf(h) !== -1 ? "show" : "hide"]();
        });
    });
    $("#m-search").on("keyup", function () {
        var i = $(this).val().toLowerCase();
        var h = $(this).val().length;
        $(".pcoded-inner-navbar > li").each(function () {
            var g = $(this).attr("data-username");
            if (g) {
                var j = g.toLowerCase();
            }
            if (j) {
                var k = j.indexOf(i);
                if (k !== -1) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
                if (h > 0) {
                    $(".pcoded-menu-caption").hide();
                } else {
                    $(".pcoded-menu-caption").show();
                }
            }
        });
    });
    $(".displayChatbox").on("click", function () {
        $(".header-user-list").toggleClass("open");
    });
    $(".header-user-list .userlist-box").on("click", function () {
        $(".header-chat").addClass("open");
        $(".header-user-list").toggleClass("msg-open");
    });
    $(".h-back-user-list").on("click", function () {
        $(".header-chat").removeClass("open");
        $(".header-user-list").removeClass("msg-open");
    });
    $(".h-close-text").on("click", function () {
        $(".header-chat").removeClass("open");
        $(".header-user-list").removeClass("open");
        $(".header-user-list").removeClass("msg-open");
    });
    $(".btn-attach").click(function () {
        $(".chat-attach").trigger("click");
    });
    $(".h-send-chat").on("keyup", function (g) {
        c(g);
    });
    $(".btn-send").on("click", function (g) {
        b(g);
    });
    if (e <= 991) {
        $(".main-search").addClass("open");
        $(".main-search .form-control").css({ width: "120px" });
    }
    if ($(".main-friend-cont")[0]) {
        $(".main-friend-cont").each(function () {
            var g = new PerfectScrollbar(this, { wheelSpeed: 0.5, swipeEasing: 0, suppressScrollX: !0, wheelPropagation: 1, minScrollbarLength: 40 });
        });
    }
    if ($(".main-chat-cont")[0]) {
        var a = new PerfectScrollbar(".main-chat-cont", { wheelSpeed: 0.5, swipeEasing: 0, suppressScrollX: !0, wheelPropagation: 1, minScrollbarLength: 40 });
    }
    if ($(".noti-body")[0]) {
        var a = new PerfectScrollbar(".notification  .noti-body", { wheelSpeed: 0.5, swipeEasing: 0, suppressScrollX: !0, wheelPropagation: 1, minScrollbarLength: 40 });
    }
    if (!$(".pcoded-navbar").hasClass("theme-horizontal")) {
        var e = $(window)[0].innerWidth;
        if ($(".navbar-content")[0]) {
            if (e < 992 || $(".pcoded-navbar").hasClass("menupos-static")) {
                var a = new PerfectScrollbar(".navbar-content", { wheelSpeed: 0.5, swipeEasing: 0, suppressScrollX: !0, wheelPropagation: 1, minScrollbarLength: 40 });
            } else {
                var a = new PerfectScrollbar(".navbar-content", { wheelSpeed: 0.5, swipeEasing: 0, suppressScrollX: !0, wheelPropagation: 1, minScrollbarLength: 40 });
            }
        }
    }
    function c(g) {
        if (g.which == 13) {
            b(g);
        }
    }
    function b(g) {
        $(".header-chat .main-friend-chat").append(
            '<div class="media chat-messages"><div class="media-body chat-menu-reply"><div class=""><p class="chat-cont">' +
                $(".h-send-chat").val() +
                '</p></div><p class="chat-time">now</p></div><a class="media-right photo-table" href="#!"><img class="media-object img-radius img-radius m-t-5" src="../assets/images/user/avatar-1.jpg" alt="Generic placeholder image"></a></div>'
        );
        d($(".h-send-chat").val());
        f();
        $(".h-send-chat").val(null);
    }
    function d(g) {
        setTimeout(function () {
            $(".header-chat .main-friend-chat").append(
                '<div class="media chat-messages typing"><a class="media-left photo-table" href="#!"><img class="media-object img-radius img-radius m-t-5" src="../assets/images/user/avatar-2.jpg" alt="Generic placeholder image"></a><div class="media-body chat-menu-content"><div class="rem-msg"><p class="chat-cont">Typing . . .</p></div><p class="chat-time">now</p></div></div>'
            );
            f();
        }, 1500);
        setTimeout(function () {
            document.getElementsByClassName("rem-msg")[0].innerHTML = "<p class='chat-cont'>hello dear you write</p> <p class='chat-cont'>" + g + "</p>";
            $(".rem-msg").removeClass("rem-msg");
            $(".typing").removeClass("typing");
            f();
        }, 3000);
    }
    function f() {
        var g = $(".header-chat .main-friend-chat");
        $(".main-chat-cont.scroll-div").scrollTop(g.outerHeight());
    }
    $(".card-option .close-card").on("click", function () {
        var g = $(this);
        g.parents(".card").addClass("anim-close-card");
        g.parents(".card").animate({ "margin-bottom": "0" });
        setTimeout(function () {
            g.parents(".card").children(".card-block").slideToggle();
            g.parents(".card").children(".card-body").slideToggle();
            g.parents(".card").children(".card-header").slideToggle();
            g.parents(".card").children(".card-footer").slideToggle();
        }, 600);
        setTimeout(function () {
            g.parents(".card").remove();
        }, 1500);
    });
    $(".card-option .reload-card").on("click", function () {
        var g = $(this);
        g.parents(".card").addClass("card-load");
        g.parents(".card").append('<div class="card-loader"><i class="pct-loader1 anim-rotate"></div>');
        setTimeout(function () {
            g.parents(".card").children(".card-loader").remove();
            g.parents(".card").removeClass("card-load");
        }, 3000);
    });
    $(".card-option .minimize-card").on("click", function () {
        var i = $(this);
        var g = $(i.parents(".card"));
        var h = $(g).children(".card-block").slideToggle();
        var h = $(g).children(".card-body").slideToggle();
        if (!g.hasClass("full-card")) {
            $(g).css("height", "auto");
        }
        $(this).children("a").children("span").toggle();
    });
    $(".card-option .full-card").on("click", function () {
        var m = $(this);
        var h = $(m.parents(".card"));
        h.toggleClass("full-card");
        $(this).children("a").children("span").toggle();
        if (h.hasClass("full-card")) {
            $("body").css("overflow", "hidden");
            $("html,body").animate({ scrollTop: 0 }, 1000);
            var o = $(h, this);
            var n = o.offset();
            var g = n.left;
            var j = n.top;
            var k = $(window).height();
            var i = $(window).width();
            h.animate({ marginLeft: g - g * 2, marginTop: j - j * 2, width: i, height: k });
        } else {
            $("body").css("overflow", "");
            h.removeAttr("style");
            setTimeout(function () {
                $("html,body").animate({ scrollTop: $(h).offset().top - 70 }, 500);
            }, 400);
        }
    });
    setTimeout(function () {
        $(".loader-bg").fadeOut("slow", function () {
            $(this).remove();
        });
    }, 400);
});
$(window).resize(function () {
    togglemenu();
    menuhrres();
    if ($("body").hasClass("layout-6") || $("body").hasClass("layout-7")) {
        togglemenulayout();
    }
});
function menuhrres() {
    var a = $(window)[0].innerWidth;
    if (a < 992) {
        setTimeout(function () {
            $(".sidenav-horizontal-wrapper").addClass("sidenav-horizontal-wrapper-dis").removeClass("sidenav-horizontal-wrapper");
            $(".theme-horizontal").addClass("theme-horizontal-dis").removeClass("theme-horizontal");
        }, 400);
    } else {
        setTimeout(function () {
            $(".sidenav-horizontal-wrapper-dis").addClass("sidenav-horizontal-wrapper").removeClass("sidenav-horizontal-wrapper-dis");
            $(".theme-horizontal-dis").addClass("theme-horizontal").removeClass("theme-horizontal-dis");
        }, 400);
    }
    setTimeout(function () {
        if ($(".pcoded-navbar").hasClass("theme-horizontal-dis")) {
            $(".sidenav-horizontal-wrapper-dis").css({ height: "100%", position: "relative" });
            if ($(".sidenav-horizontal-wrapper-dis")[0]) {
                var b = new PerfectScrollbar(".sidenav-horizontal-wrapper-dis", { wheelSpeed: 0.5, swipeEasing: 0, suppressScrollX: !0, wheelPropagation: 1, minScrollbarLength: 40 });
            }
        }
    }, 1000);
}
var ost = 0;
$(window).scroll(function () {
    var b = $(window)[0].innerWidth;
    if (b >= 768) {
        var a = $(this).scrollTop();
        if (a == 400) {
            $(".theme-horizontal").addClass("top-nav-collapse");
        } else {
            if (a > ost && 400 < ost) {
                $(".theme-horizontal").addClass("top-nav-collapse").removeClass("default");
            } else {
                $(".theme-horizontal").addClass("default").removeClass("top-nav-collapse");
            }
        }
        ost = a;
    }
});
function togglemenu() {
    var a = $(window)[0].innerWidth;
    if ($(".pcoded-navbar").hasClass("theme-horizontal") == false) {
        if (a <= 1200 && a >= 992) {
            $(".pcoded-navbar:not(.theme-horizontal)").addClass("navbar-collapsed");
        }
        if (a < 992) {
            $(".pcoded-navbar:not(.theme-horizontal)").removeClass("navbar-collapsed");
        }
    }
}
function toggleFullScreen() {
    var b = $(window).height() - 10;
    if (!document.fullscreenElement && !document.mozFullScreenElement && !document.webkitFullscreenElement) {
        if (document.documentElement.requestFullscreen) {
            document.documentElement.requestFullscreen();
        } else {
            if (document.documentElement.mozRequestFullScreen) {
                document.documentElement.mozRequestFullScreen();
            } else {
                if (document.documentElement.webkitRequestFullscreen) {
                    document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
                }
            }
        }
    } else {
        if (document.cancelFullScreen) {
            document.cancelFullScreen();
        } else {
            if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            } else {
                if (document.webkitCancelFullScreen) {
                    document.webkitCancelFullScreen();
                }
            }
        }
    }
    $(".full-screen > i").toggleClass("icon-maximize");
    $(".full-screen > i").toggleClass("icon-minimize");
}
$.fn.pcodedmenu = function (a) {
    var b = this.attr("id");
    var c = { themelayout: "vertical", MenuTrigger: "click", SubMenuTrigger: "click" };
    var a = $.extend({}, c, a);
    var d = {
        PcodedMenuInit: function () {
            d.HandleMenuTrigger();
            d.HandleSubMenuTrigger();
            d.HandleOffset();
        },
        HandleSubMenuTrigger: function () {
            var g = $(window);
            var e = g.width();
            if ($(".pcoded-navbar").hasClass("theme-horizontal") == true || $(".pcoded-navbar").hasClass("theme-horizontal-dis") == true) {
                if ((e >= 992 && $("body").hasClass("layout-6")) || (e >= 992 && $("body").hasClass("layout-7"))) {
                    var f = $("body[class*='layout-6'] .theme-horizontal .pcoded-inner-navbar .pcoded-submenu > li.pcoded-hasmenu, body[class*='layout-7'] .theme-horizontal .pcoded-inner-navbar .pcoded-submenu > li.pcoded-hasmenu");
                    f.off("click")
                        .off("mouseenter mouseleave")
                        .hover(
                            function () {
                                $(this).addClass("pcoded-trigger").addClass("active");
                            },
                            function () {
                                $(this).removeClass("pcoded-trigger").removeClass("active");
                            }
                        );
                } else {
                    if ($("body").hasClass("layout-6") || $("body").hasClass("layout-7")) {
                        if ($(".pcoded-navbar").hasClass("theme-horizontal-dis")) {
                            var f = $(".pcoded-navbar.theme-horizontal-dis .pcoded-inner-navbar .pcoded-submenu > li.pcoded-hasmenu");
                            f.off("click")
                                .off("mouseenter mouseleave")
                                .hover(
                                    function () {
                                        $(this).addClass("pcoded-trigger").addClass("active");
                                    },
                                    function () {
                                        $(this).removeClass("pcoded-trigger").removeClass("active");
                                    }
                                );
                        }
                        if (!$(".pcoded-navbar").hasClass("theme-horizontal-dis")) {
                            var f = $(".pcoded-navbar:not(.theme-horizontal-dis) .pcoded-inner-navbar .pcoded-submenu > li > .pcoded-submenu > li");
                            f.off("mouseenter mouseleave")
                                .off("click")
                                .on("click", function () {
                                    var h = $(this).closest(".pcoded-submenu").length;
                                    if (h === 0) {
                                        if ($(this).hasClass("pcoded-trigger")) {
                                            $(this).removeClass("pcoded-trigger");
                                            $(this).children(".pcoded-submenu").slideUp();
                                        } else {
                                            $(".pcoded-submenu > li > .pcoded-submenu > li.pcoded-trigger").children(".pcoded-submenu").slideUp();
                                            $(this).closest(".pcoded-inner-navbar").find("li.pcoded-trigger").removeClass("pcoded-trigger");
                                            $(this).addClass("pcoded-trigger");
                                            $(this).children(".pcoded-submenu").slideDown();
                                        }
                                    } else {
                                        if ($(this).hasClass("pcoded-trigger")) {
                                            $(this).removeClass("pcoded-trigger");
                                            $(this).children(".pcoded-submenu").slideUp();
                                        } else {
                                            $(".pcoded-submenu > li > .pcoded-submenu > li.pcoded-trigger").children(".pcoded-submenu").slideUp();
                                            $(this).closest(".pcoded-submenu").find("li.pcoded-trigger").removeClass("pcoded-trigger");
                                            $(this).addClass("pcoded-trigger");
                                            $(this).children(".pcoded-submenu").slideDown();
                                        }
                                    }
                                });
                            $(".pcoded-inner-navbar .pcoded-submenu > li > .pcoded-submenu > li").on("click", function (h) {
                                h.stopPropagation();
                                var i = $(this).closest(".pcoded-submenu").length;
                                if (i === 0) {
                                    if ($(this).hasClass("pcoded-trigger")) {
                                        $(this).removeClass("pcoded-trigger");
                                        $(this).children(".pcoded-submenu").slideUp();
                                    } else {
                                        $(".pcoded-hasmenu li.pcoded-trigger").children(".pcoded-submenu").slideUp();
                                        $(this).closest(".pcoded-inner-navbar").find("li.pcoded-trigger").removeClass("pcoded-trigger");
                                        $(this).addClass("pcoded-trigger");
                                        $(this).children(".pcoded-submenu").slideDown();
                                    }
                                } else {
                                    if ($(this).hasClass("pcoded-trigger")) {
                                        $(this).removeClass("pcoded-trigger");
                                        $(this).children(".pcoded-submenu").slideUp();
                                    } else {
                                        $(".pcoded-hasmenu li.pcoded-trigger").children(".pcoded-submenu").slideUp();
                                        $(this).closest(".pcoded-submenu").find("li.pcoded-trigger").removeClass("pcoded-trigger");
                                        $(this).addClass("pcoded-trigger");
                                        $(this).children(".pcoded-submenu").slideDown();
                                    }
                                }
                            });
                        }
                    } else {
                        if (e >= 992) {
                            var f = $(".pcoded-navbar.theme-horizontal .pcoded-inner-navbar .pcoded-submenu > li.pcoded-hasmenu");
                            f.off("click")
                                .off("mouseenter mouseleave")
                                .hover(
                                    function () {
                                        $(this).addClass("pcoded-trigger").addClass("active");
                                    },
                                    function () {
                                        $(this).removeClass("pcoded-trigger").removeClass("active");
                                    }
                                );
                        } else {
                            var f = $(".pcoded-navbar.theme-horizontal-dis .pcoded-inner-navbar .pcoded-submenu > li > .pcoded-submenu > li");
                            f.off("mouseenter mouseleave")
                                .off("click")
                                .on("click", function () {
                                    var h = $(this).closest(".pcoded-submenu").length;
                                    if (h === 0) {
                                        if ($(this).hasClass("pcoded-trigger")) {
                                            $(this).removeClass("pcoded-trigger");
                                            $(this).children(".pcoded-submenu").slideUp();
                                        } else {
                                            $(".pcoded-submenu > li > .pcoded-submenu > li.pcoded-trigger").children(".pcoded-submenu").slideUp();
                                            $(this).closest(".pcoded-inner-navbar").find("li.pcoded-trigger").removeClass("pcoded-trigger");
                                            $(this).addClass("pcoded-trigger");
                                            $(this).children(".pcoded-submenu").slideDown();
                                        }
                                    } else {
                                        if ($(this).hasClass("pcoded-trigger")) {
                                            $(this).removeClass("pcoded-trigger");
                                            $(this).children(".pcoded-submenu").slideUp();
                                        } else {
                                            $(".pcoded-submenu > li > .pcoded-submenu > li.pcoded-trigger").children(".pcoded-submenu").slideUp();
                                            $(this).closest(".pcoded-submenu").find("li.pcoded-trigger").removeClass("pcoded-trigger");
                                            $(this).addClass("pcoded-trigger");
                                            $(this).children(".pcoded-submenu").slideDown();
                                        }
                                    }
                                });
                        }
                    }
                }
            }
            switch (a.SubMenuTrigger) {
                case "click":
                    $(".pcoded-navbar .pcoded-hasmenu").removeClass("is-hover");
                    $(".pcoded-inner-navbar .pcoded-submenu > li > .pcoded-submenu > li").on("click", function (h) {
                        h.stopPropagation();
                        var i = $(this).closest(".pcoded-submenu").length;
                        if (i === 0) {
                            if ($(this).hasClass("pcoded-trigger")) {
                                $(this).removeClass("pcoded-trigger");
                                $(this).children(".pcoded-submenu").slideUp();
                            } else {
                                $(".pcoded-submenu > li > .pcoded-submenu > li.pcoded-trigger").children(".pcoded-submenu").slideUp();
                                $(this).closest(".pcoded-inner-navbar").find("li.pcoded-trigger").removeClass("pcoded-trigger");
                                $(this).addClass("pcoded-trigger");
                                $(this).children(".pcoded-submenu").slideDown();
                            }
                        } else {
                            if ($(this).hasClass("pcoded-trigger")) {
                                $(this).removeClass("pcoded-trigger");
                                $(this).children(".pcoded-submenu").slideUp();
                            } else {
                                $(".pcoded-submenu > li > .pcoded-submenu > li.pcoded-trigger").children(".pcoded-submenu").slideUp();
                                $(this).closest(".pcoded-submenu").find("li.pcoded-trigger").removeClass("pcoded-trigger");
                                $(this).addClass("pcoded-trigger");
                                $(this).children(".pcoded-submenu").slideDown();
                            }
                        }
                    });
                    $(".pcoded-submenu > li").on("click", function (h) {
                        h.stopPropagation();
                        var i = $(this).closest(".pcoded-submenu").length;
                        if (i === 0) {
                            if ($(this).hasClass("pcoded-trigger")) {
                                $(this).removeClass("pcoded-trigger");
                                $(this).children(".pcoded-submenu").slideUp();
                            } else {
                                $(".pcoded-hasmenu li.pcoded-trigger").children(".pcoded-submenu").slideUp();
                                $(this).closest(".pcoded-inner-navbar").find("li.pcoded-trigger").removeClass("pcoded-trigger");
                                $(this).addClass("pcoded-trigger");
                                $(this).children(".pcoded-submenu").slideDown();
                            }
                        } else {
                            if ($(this).hasClass("pcoded-trigger")) {
                                $(this).removeClass("pcoded-trigger");
                                $(this).children(".pcoded-submenu").slideUp();
                            } else {
                                $(".pcoded-hasmenu li.pcoded-trigger").children(".pcoded-submenu").slideUp();
                                $(this).closest(".pcoded-submenu").find("li.pcoded-trigger").removeClass("pcoded-trigger");
                                $(this).addClass("pcoded-trigger");
                                $(this).children(".pcoded-submenu").slideDown();
                            }
                        }
                    });
                    break;
            }
        },
        HandleMenuTrigger: function () {
            var g = $(window);
            var e = g.width();
            if (e >= 992) {
                if ($(".pcoded-navbar").hasClass("theme-horizontal") == true) {
                    if ((e >= 768 && $("body").hasClass("layout-6")) || (e >= 768 && $("body").hasClass("layout-7"))) {
                        var f = $("body[class*='layout-6'] .theme-horizontal .pcoded-inner-navbar > li,body[class*='layout-7'] .theme-horizontal .pcoded-inner-navbar > li ");
                        f.off("click")
                            .off("mouseenter mouseleave")
                            .hover(
                                function () {
                                    $(this).addClass("pcoded-trigger").addClass("active");
                                    if ($(".pcoded-submenu", this).length) {
                                        var p = $(".pcoded-submenu:first", this);
                                        var o = p.offset();
                                        var i = o.left;
                                        var h = p.width();
                                        var n = $(window).height();
                                        var k = $(window).width();
                                        var m = i + h <= k;
                                        if (!m) {
                                            var j = $(".sidenav-inner").attr("style");
                                            $(".sidenav-inner").css({ "margin-left": parseInt(j.slice(12, j.length - 3)) - 80 });
                                            $(".sidenav-horizontal-prev").removeClass("disabled");
                                        } else {
                                            $(this).removeClass("edge");
                                        }
                                    }
                                },
                                function () {
                                    $(this).removeClass("pcoded-trigger").removeClass("active");
                                }
                            );
                    } else {
                        if ($("body").hasClass("layout-6") || $("body").hasClass("layout-7")) {
                            if ($(".pcoded-navbar").hasClass("theme-horizontal-dis")) {
                                var f = $(".pcoded-navbar.theme-horizontal-dis .pcoded-inner-navbar > li");
                                f.off("click")
                                    .off("mouseenter mouseleave")
                                    .hover(
                                        function () {
                                            $(this).addClass("pcoded-trigger").addClass("active");
                                            if ($(".pcoded-submenu", this).length) {
                                                var p = $(".pcoded-submenu:first", this);
                                                var o = p.offset();
                                                var i = o.left;
                                                var h = p.width();
                                                var n = $(window).height();
                                                var k = $(window).width();
                                                var m = i + h <= k;
                                                if (!m) {
                                                    var j = $(".sidenav-inner").attr("style");
                                                    $(".sidenav-inner").css({ "margin-left": parseInt(j.slice(12, j.length - 3)) - 80 });
                                                    $(".sidenav-horizontal-prev").removeClass("disabled");
                                                } else {
                                                    $(this).removeClass("edge");
                                                }
                                            }
                                        },
                                        function () {
                                            $(this).removeClass("pcoded-trigger").removeClass("active");
                                        }
                                    );
                            }
                            if (!$(".pcoded-navbar").hasClass("theme-horizontal-dis")) {
                                var f = $(".pcoded-navbar:not(.theme-horizontal-dis) .pcoded-inner-navbar > li");
                                f.off("mouseenter mouseleave")
                                    .off("click")
                                    .on("click", function () {
                                        if ($(this).hasClass("pcoded-trigger")) {
                                            $(this).removeClass("pcoded-trigger");
                                            $(this).children(".pcoded-submenu").slideUp();
                                        } else {
                                            $("li.pcoded-trigger").children(".pcoded-submenu").slideUp();
                                            $(this).closest(".pcoded-inner-navbar").find("li.pcoded-trigger").removeClass("pcoded-trigger");
                                            $(this).addClass("pcoded-trigger");
                                            $(this).children(".pcoded-submenu").slideDown();
                                        }
                                    });
                            }
                        } else {
                            var f = $(".theme-horizontal .pcoded-inner-navbar > li");
                            f.off("click")
                                .off("mouseenter mouseleave")
                                .hover(
                                    function () {
                                        $(this).addClass("pcoded-trigger").addClass("active");
                                        if ($(".pcoded-submenu", this).length) {
                                            var p = $(".pcoded-submenu:first", this);
                                            var o = p.offset();
                                            var i = o.left;
                                            var h = p.width();
                                            var n = $(window).height();
                                            var k = $(window).width();
                                            var m = i + h <= k;
                                            if (!m) {
                                                var j = $(".sidenav-inner").attr("style");
                                                $(".sidenav-inner").css({ "margin-left": parseInt(j.slice(12, j.length - 3)) - 80 });
                                                $(".sidenav-horizontal-prev").removeClass("disabled");
                                            } else {
                                                $(this).removeClass("edge");
                                            }
                                        }
                                    },
                                    function () {
                                        $(this).removeClass("pcoded-trigger").removeClass("active");
                                    }
                                );
                        }
                    }
                }
            } else {
                var f = $(".pcoded-navbar.theme-horizontal-dis .pcoded-inner-navbar > li");
                f.off("mouseenter mouseleave")
                    .off("click")
                    .on("click", function () {
                        if ($(this).hasClass("pcoded-trigger")) {
                            $(this).removeClass("pcoded-trigger");
                            $(this).children(".pcoded-submenu").slideUp();
                        } else {
                            $("li.pcoded-trigger").children(".pcoded-submenu").slideUp();
                            $(this).closest(".pcoded-inner-navbar").find("li.pcoded-trigger").removeClass("pcoded-trigger");
                            $(this).addClass("pcoded-trigger");
                            $(this).children(".pcoded-submenu").slideDown();
                        }
                    });
            }
            switch (a.MenuTrigger) {
                case "click":
                    $(".pcoded-navbar").removeClass("is-hover");
                    $(".pcoded-inner-navbar > li:not(.pcoded-menu-caption) ").on("click", function () {
                        if ($(this).hasClass("pcoded-trigger")) {
                            $(this).removeClass("pcoded-trigger");
                            $(this).children(".pcoded-submenu").slideUp();
                        } else {
                            $("li.pcoded-trigger").children(".pcoded-submenu").slideUp();
                            $(this).closest(".pcoded-inner-navbar").find("li.pcoded-trigger").removeClass("pcoded-trigger");
                            $(this).addClass("pcoded-trigger");
                            $(this).children(".pcoded-submenu").slideDown();
                        }
                    });
                    break;
            }
        },
        HandleOffset: function () {
            switch (a.themelayout) {
                case "horizontal":
                    var e = a.SubMenuTrigger;
                    if (e === "hover") {
                        $("li.pcoded-hasmenu").on("mouseenter mouseleave", function (k) {
                            if ($(".pcoded-submenu", this).length) {
                                var n = $(".pcoded-submenu:first", this);
                                var m = n.offset();
                                var g = m.left;
                                var f = n.width();
                                var j = $(window).height();
                                var h = $(window).width();
                                var i = g + f <= h;
                                if (!i) {
                                    $(this).addClass("edge");
                                } else {
                                    $(this).removeClass("edge");
                                }
                            }
                        });
                    } else {
                        $("li.pcoded-hasmenu").on("click", function (k) {
                            k.preventDefault();
                            if ($(".pcoded-submenu", this).length) {
                                var n = $(".pcoded-submenu:first", this);
                                var m = n.offset();
                                var g = m.left;
                                var f = n.width();
                                var j = $(window).height();
                                var h = $(window).width();
                                var i = g + f <= h;
                                if (!i) {
                                    $(this).toggleClass("edge");
                                }
                            }
                        });
                    }
                    break;
                default:
            }
        },
    };
    d.PcodedMenuInit();
};
$("#pcoded").pcodedmenu({ MenuTrigger: "click", SubMenuTrigger: "click" });
$("#mobile-collapse,#mobile-collapse1").click(function (b) {
    var a = $(window)[0].innerWidth;
    if (a < 992) {
        $(".pcoded-navbar").toggleClass("mob-open");
        b.stopPropagation();
    }
});
$(window).ready(function () {
    var a = $(window)[0].innerWidth;
    $(".pcoded-navbar").on("click tap", function (b) {
        b.stopPropagation();
    });
    $(".pcoded-main-container,.pcoded-header").on("click", function () {
        if (a < 992) {
            if ($(".pcoded-navbar").hasClass("mob-open") == true) {
                $(".pcoded-navbar").removeClass("mob-open");
                $("#mobile-collapse,#mobile-collapse1").removeClass("on");
            }
        }
    });
    $("#mobile-header").on("click", function () {
        $(".navbar-collapse,.m-header").slideToggle();
    });
});
$(".pcoded-navbar .close").on("click", function () {
    var a = $(this);
    a.parents(".card").fadeOut("slow").remove();
});
$(".layout-1 .sidemenu a").on("click", function () {
    var a = $(this);
    a.parents("li").siblings().removeClass("active");
    a.parents("li").addClass("active");
    $(".side-content .sidelink").slideUp();
    $(".side-content .sidelink." + a.attr("data-cont")).slideDown();
});
$(".layout-1 .toggle-sidemenu").on("click", function () {
    var a = $(this);
    $(".pcoded-navbar").toggleClass("hide-sidemenu");
});
$("#mobile-collapse1").click(function (b) {
    var a = $(window)[0].innerWidth;
    if ($("body").hasClass("layout-6") || $("body").hasClass("layout-7")) {
        setTimeout(function () {
            if (a <= 992) {
                $(".pcoded-navbar:not(.theme-horizontal-dis)").removeClass("mob-open");
            }
            if (a > 992) {
                $(".pcoded-navbar:not(.theme-horizontal)").toggleClass("mob-open");
                b.stopPropagation();
            }
        }, 100);
    }
});
$("#show-toggle").on("click", function () {
    $(".pcoded-navbar:not(.theme-horizontal-dis)").toggleClass("mob-open-h");
});
if ($("body").hasClass("layout-6") || $("body").hasClass("layout-7")) {
    if ($(".navbar-content")[0]) {
        var px = new PerfectScrollbar(".navbar-content", { wheelSpeed: 0.5, swipeEasing: 0, suppressScrollX: !0, wheelPropagation: 1, minScrollbarLength: 40 });
    }
}
$(".pcoded-main-container,.pcoded-header,.pcoded-navbar.theme-horizontal").on("click", function () {
    var a = $(window)[0].innerWidth;
    if ($("body").hasClass("layout-6") || $("body").hasClass("layout-7")) {
        if (a > 992) {
            if ($(".pcoded-navbar").hasClass("mob-open") == true) {
                $(".pcoded-navbar").removeClass("mob-open");
                $("#mobile-collapse,#mobile-collapse1").removeClass("on");
            }
        }
    }
});
function togglemenulayout() {
    var a = $(window)[0].innerWidth;
    if ($("body").hasClass("layout-6") || $("body").hasClass("layout-7")) {
        if (a <= 1200 && a >= 992) {
            $(".pcoded-navbar:not(.theme-horizontal)").addClass("navbar-collapsed");
        }
        if (a < 992) {
            $(".pcoded-navbar:not(.theme-horizontal)").removeClass("navbar-collapsed");
        }
    }
}
$("body.layout-8 .pcoded-navbar .dropdown-toggle").on("click", function () {
    $(this).siblings(".dropdown-menu").addClass("show");
});
$(document).mouseup(function (b) {
    var a = $("body.layout-8 .pcoded-navbar .dropdown-menu");
    if (!a.is(b.target) && a.has(b.target).length === 0) {
        a.removeClass("show");
    }
});
$(".layout-9 .sidemenu a").on("click", function () {
    var a = $(this);
    a.parents("li").siblings().removeClass("active");
    a.parents("li").addClass("active");
    $(".side-content .sidelink").slideUp(1);
    $(".side-content .sidelink." + a.attr("data-cont")).slideDown(1);
});
var vw = $(window)[0].innerWidth;
if (vw < 992) {
    if ($(".page-wrapper>.page-header")[0]) {
        $(".pcoded-header > .collapse:not(.show)>.mr-auto").css("display", "none");
        $(".pcoded-header > .collapse:not(.show)>.ml-auto").css("display", "block");
        $(".pcoded-header > .container> .collapse:not(.show)>.mr-auto").css("display", "none");
        $(".pcoded-header > .container> .collapse:not(.show)>.ml-auto").css("display", "block");
        if ($(".pcoded-header > .container> .collapse")[0]) {
            console.log("hii");
            $(".pcoded-header > .container> .collapse:not(.show)").append('<a href="#!" class="mob-toggler"></a>');
        }
    } else {
        $(".pcoded-header > .collapse:not(.show)").append('<a href="#!" class="mob-toggler"></a>');
    }
}
if ($(".pcoded-header .page-header")[0]) {
    var dt = $(".pcoded-main-container .page-header").clone();
    $(".pcoded-header .page-header").html(dt);
    $(".pcoded-main-container .page-header").remove();
}
if ($(".page-header-title h5")[0]) {
    var page = $(".page-header-title h5").html();
    $(document).attr("title", "Flash Able - " + page);
}
$(".pcoded-header > .collapse:not(.show) .mob-toggler").click(function () {
    $(".pcoded-header > .collapse:not(.show) > ul").slideToggle(1);
});
$(".pcoded-header > .container>.collapse:not(.show) .mob-toggler").click(function () {
    $(".pcoded-header > .container> .collapse:not(.show) > ul").slideToggle(1);
});
if (vw >= 992) {
    $(".layout-14 .pcoded-inner-navbar > li.pcoded-hasmenu").unbind("click");
}
$(".layout-14 .pcoded-inner-navbar > li.pcoded-hasmenu").on("mouseenter", function () {
    if (vw >= 992) {
        clrpop();
        $(".navbar-wrapper").append('<div class="navbar-popup"></div>');
        var d = $(this);
        var g = $(".navbar-popup");
        var b = d.children(".pcoded-submenu").clone();
        g.addClass("pcoded-inner-navbar");
        g.html(b);
        var i = $(d, this);
        var c = i.offset();
        var e = c.left;
        var n = c.top;
        var m = i.width();
        var f = $(window).height();
        var k = $(window).width();
        var h = $(window).scrollTop();
        var a = g.innerHeight();
        g.show();
        console.log(h);
        if (f <= n + a - h) {
            g.addClass("vedge");
            g.animate({ top: n - 240 - h }, 1);
        } else {
            g.removeClass("vedge");
            g.animate({ top: n - 8 - h }, 1);
        }
        $(".navbar-popup > .pcoded-submenu").css({ "max-height": "300px", position: "relative" });
        var j = new PerfectScrollbar(".navbar-popup > .pcoded-submenu", { wheelSpeed: 0.5, swipeEasing: 0, suppressScrollX: !0, wheelPropagation: 1, minScrollbarLength: 40 });
        $(".navbar-popup .pcoded-submenu > li").on("click", function (l) {
            l.stopPropagation();
            var o = $(this).closest(".pcoded-submenu").length;
            if (o === 0) {
                if ($(this).hasClass("pcoded-trigger")) {
                    $(this).removeClass("pcoded-trigger");
                    $(this).children(".pcoded-submenu").slideUp();
                } else {
                    $(".pcoded-hasmenu li.pcoded-trigger").children(".pcoded-submenu").slideUp();
                    $(this).closest(".pcoded-inner-navbar").find("li.pcoded-trigger").removeClass("pcoded-trigger");
                    $(this).addClass("pcoded-trigger");
                    $(this).children(".pcoded-submenu").slideDown();
                }
            } else {
                if ($(this).hasClass("pcoded-trigger")) {
                    $(this).removeClass("pcoded-trigger");
                    $(this).children(".pcoded-submenu").slideUp();
                } else {
                    $(".pcoded-hasmenu li.pcoded-trigger").children(".pcoded-submenu").slideUp();
                    $(this).closest(".pcoded-submenu").find("li.pcoded-trigger").removeClass("pcoded-trigger");
                    $(this).addClass("pcoded-trigger");
                    $(this).children(".pcoded-submenu").slideDown();
                }
            }
        });
    }
});
function clrpop() {
    $(".navbar-popup").remove();
}
$(".layout-14 .pcoded-navbar").on("mouseleave", function () {
    clrpop();
});
$(".layout-14 .pcoded-inner-navbar > li:not(.pcoded-hasmenu)").on("mouseenter", function () {
    clrpop();
});
$(".pcoded-navbar .pcoded-inner-navbar a").each(function () {
    var b = window.location.href.split(/[?#]/)[0];
    if (!$("body").hasClass("layout-14")) {
        if (this.href == b && $(this).attr("href") != "") {
            $(this).parent("li").addClass("active");
            if (!$(".pcoded-navbar").hasClass("theme-horizontal")) {
                $(this).parent("li").parent().parent(".pcoded-hasmenu").addClass("active").addClass("pcoded-trigger");
                $(this).parent("li").parent().parent(".pcoded-hasmenu").parent().parent(".pcoded-hasmenu").addClass("active").addClass("pcoded-trigger");
            }
            if ($("body").hasClass("layout-7") || $("body").hasClass("layout-6")) {
                $(this).parent("li").parent().parent(".pcoded-hasmenu").addClass("active").addClass("pcoded-trigger");
                $(this).parent("li").parent().parent(".pcoded-hasmenu").parent().parent(".pcoded-hasmenu").addClass("active").addClass("pcoded-trigger");
                $(".theme-horizontal .pcoded-inner-navbar").find("li.pcoded-trigger").removeClass("pcoded-trigger");
            }
            $(this).parent("li").parent().parent(".sidelink").addClass("active");
            $(this).parent("li").parent().parent().parent().parent(".sidelink").addClass("active");
            $(this).parent("li").parent().parent().parent().parent().parent().parent(".sidelink").addClass("active");
            if ($("body").hasClass("layout-1") || $("body").hasClass("layout-9")) {
                var a = $(".sidelink.active").attr("class");
                a = a.replace("sidelink", "");
                a = a.replace("active", "");
                $(".sidemenu  .nav-link[data-cont=" + a.trim() + "]")
                    .parent()
                    .addClass("active");
            }
        }
    }
});
