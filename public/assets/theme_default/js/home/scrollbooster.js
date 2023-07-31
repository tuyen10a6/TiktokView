var viewport = document.querySelector(".ex1 .tbl-main");
var content = viewport.querySelector("ul");
var scrollbar = document.querySelector(".scrollbar__inner");

scrollbar.style.width =
    (document.querySelector(".ex1 .tbl-main").clientWidth /
        document.querySelector(".ex1 .tbl-main").scrollWidth) *
        100 +
    "%";

var scrollbarWidth = scrollbar.clientWidth;

var sb = new ScrollBooster({
    viewport: viewport, // this parameter is required
    content: content, // scrollable element
    mode: "x", // scroll only in horizontal dimension
    onUpdate: function (data) {
        content.style.transform = "translateX(" + -data.position.x + "px)";
        scrollbar.style.transform =
            "translateX(" +
            (data.position.x / (data.content.width - data.viewport.width)) *
                (data.viewport.width -
                    data.viewport.width *
                        (scrollbarWidth / data.viewport.width)) +
            "px)";
    },
});
