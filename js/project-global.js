// Popup JS
var openDialogLinks = document.querySelectorAll('a[href="#popup"]');
var myDialog = document.getElementById("popup-block");
var closeDialogButton = document.getElementById("closeDialog");
var formName = myDialog.querySelector('input[name="form_name"]');

openDialogLinks.forEach(function (link) {
  link.addEventListener("click", function (e) {
    e.preventDefault();
    var linkAnchor = link.textContent.trim();
    formName.value = linkAnchor + " popup";
    myDialog.showModal();
  });
});

closeDialogButton.addEventListener("click", function (event) {
  event.preventDefault();
  myDialog.close();
});

// Tabs
$(".tabgroup > div").hide();
$(".tabgroup > div:first-of-type").show();
$(".tabs a").click(function (e) {
  e.preventDefault();
  var $this = $(this),
    tabgroup = "#" + $this.parents(".tabs").data("tabgroup"),
    others = $this.closest("li").siblings().children("a"),
    target = $this.attr("href");
  others.removeClass("active");
  $this.addClass("active");
  $(tabgroup).children("div").hide();
  $(target).show();
});

/* Hide Para
$(document).ready(function () {
  $(".prod_des").each(function () {
    var div = $(this);
    var firstParagraph = div.find("p:first-child");
    var hiddenParagraphs = firstParagraph.nextAll("p");

    hiddenParagraphs.hide();

    var readMoreText = $("<span>")
      .addClass("content_collapse_link")
      .text("Read More »");
    var eclipse = " ";

    firstParagraph.append(eclipse);
    firstParagraph.append(readMoreText);

    readMoreText.click(function () {
      hiddenParagraphs.slideDown();
      $(this).hide();
      eclipse.hide();
    });
  });
});
*/