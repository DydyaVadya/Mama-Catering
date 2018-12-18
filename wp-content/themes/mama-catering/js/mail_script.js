$(document).ready(function() {
  function hasLodash(str) {
    str = str || "";
    return !!str.match(/\_/);
  }
  $(".gallery-column-left").html(
    $(".gallery-item:nth-child(3), .gallery-item:nth-child(4)")
  );
  $(".gallery-column-right").html($(".gallery-item:nth-child(5)"));
  $(".event-item-info .main-btn").click(function() {
    var event_data = $(this)
      .closest(".event-item-info")
      .find("h4 span")
      .text();
    $("#get-calculate form.get-calculate").attr("data-event", event_data);
  });
  $(".event-item-info .event-btn a").click(function() {
    var menu_data = $(this)
      .closest(".event-item-info")
      .find("h4 span")
      .text();
    $("#menu-example .menu-example-container").attr("data-modal", menu_data);
  });
  $(".option-chosen .main-btn").click(function() {
    var event_data = $(this)
      .closest(".example-item-text")
      .find("h4")
      .text();
    $("#get-calculate form.get-calculate").attr("data-event", event_data);
  });
  $(".option-chosen a").click(function() {
    var menu_data = $(this)
      .closest(".example-item-text")
      .find("h4")
      .text();
    $("#menu-example .menu-example-container").attr("data-modal", menu_data);
  });
  $(".option-chosen button").click(function() {
    var box_data = $(this)
      .closest(".example-item-text")
      .find(" h4")
      .text();
    var box_price = $(this)
      .closest(".example-item-option")
      .find(".item-price-info:first-child p:last-child")
      .text();
    var box_weight = $(this)
      .closest(".example-item-option")
      .find(".item-price-info:last-child p:last-child")
      .text();
    $("#food-box-modal .get-calculate").attr("data-dox", box_data);
    $("#food-box-modal .get-calculate").attr("data-price", box_price);
    $("#food-box-modal .get-calculate").attr("data-weight", box_weight);
  });
});
function callme(form) {
  if (
    !$(form)
      .find("button")
      .hasClass("disabled")
  ) {
    if (form.length) {
      var error = false;
      var phone = $(form)
        .find("input[name=tel]")
        .val();
      var data_processing = $(form).find("input[name=processing]");
      var data_event = $(form).attr("data-event");
      if (!phone || phone.length < 8) {
        error = true;
        $(form)
          .find("input[name=tel]")
          .parents("label")
          .addClass("error");
        setTimeout(function() {
          $(form)
            .find("input[name=tel]")
            .parents("label")
            .removeClass("error");
        }, 2000);
        return false;
      }
      if (!data_processing.is(":checked")) {
        error = true;
        $(form)
          .find("input[name=processing]")
          .parents("label")
          .addClass("error");
        setTimeout(function() {
          $(form)
            .find("input[name=processing]")
            .parents("label")
            .removeClass("error");
        }, 2000);
        return false;
      }
      if (!error) {
        $(form)
          .find("button")
          .addClass("disabled");
        $.ajax({
          url: "/wp-admin/admin-ajax.php",
          type: "post",
          data: { action: "callme", phone: phone, event: data_event },
          dataType: "json",
          success: function(data) {
            dataLayer.push({'event': 'zayavka1'});
            if (data.success) {
              $(form)
                .get(0)
                .reset();
              $("#get-calculate").iziModal("close");
              $("#thanks").iziModal("open");
              $(form)
                .find("button")
                .removeClass("disabled");
            }
          }
        });
      }
    }
  }
}
function getmenu(form) {
  if (
    !$(form)
      .find("button")
      .hasClass("disabled")
  ) {
    if (form.length) {
      var error = false;
      var menuphone = $(form)
        .find("input[name=tel]")
        .val();
      var menufor = $(form)
        .closest(".modal")
        .find(".menu-example-container")
        .attr("data-modal");
      if (!menuphone || menuphone.length < 8) {
        error = true;
        $(form)
          .find("input[name=tel]")
          .parents("label")
          .addClass("error");
        setTimeout(function() {
          $(form)
            .find("input[name=tel]")
            .parents("label")
            .removeClass("error");
        }, 2000);
        return false;
      }
      console.log(menufor);
      if (!error) {
        $(form)
          .find("button")
          .addClass("disabled");
        $.ajax({
          url: "/wp-admin/admin-ajax.php",
          type: "post",
          data: { action: "getmenu", menuphone: menuphone, menu: menufor },
          dataType: "json",
          success: function(data) {
            dataLayer.push({'event': 'zayavka2'});
            if (data.success) {
              $(form)
                .get(0)
                .reset();
              $("#menu-example").iziModal("close");
              $("#thanks").iziModal("open");
              $(form)
                .find("button")
                .removeClass("disabled");
            }
          }
        });
      }
    }
  }
}
function getbox(form) {
  if (
    !$(form)
      .find("button")
      .hasClass("disabled")
  ) {
    if (form.length) {
      var tags = new Array();
      var error = false;
      var chosen = false;
      var boxphone = $(form)
        .find("input[name=tel]")
        .val();
      if (!boxphone || boxphone.length < 8) {
        error = true;
        $(form)
          .find("input[name=tel]")
          .parents("label")
          .addClass("error");
        setTimeout(function() {
          $(form)
            .find("input[name=tel]")
            .parents("label")
            .removeClass("error");
        }, 2000);
        return false;
      } 
      $(form)
        .find("input[type=checkbox]")
        .each(function() {
          if ($(this).prop("checked") == true) {
            chosen = true;
            var name = $(this).val(),
              price = $(this)
                .closest(".box-price-data")
                .find(".box-price-info p")
                .text();
			  quantity = $(this)
                .closest(".box-price-data")
                .find(".quantity-box input")
                .val();
				if(quantity == ''){
					quantity = 1;
				}
            tags.push(name, quantity + ' шт', price + ' за один бокс');
          }
        });
      var dataTags = tags.join(", ");
      if (!chosen) {
        $(".confirm-box").addClass("error");
        error = true;
      }
      if (!error) {
        $(form)
          .find("button")
          .addClass("disabled");
        $.ajax({
          url: "/wp-admin/admin-ajax.php",
          type: "post",
          data: { action: "getbox", boxphone: boxphone, box: dataTags },
          dataType: "json",
          success: function(data) {
            dataLayer.push({'event': 'zayavka3'});
            if (data.success) {
              $(form)
                .get(0)
                .reset();
              $("#chosen-box").iziModal("close");
              $("#thanks").iziModal("open");
              $(form)
                .find("button")
                .removeClass("disabled");
            }
          }
        });
		$(".quantity-box input").width("");
      } 
    }
  }
}
function orbox(form) {
  if (
    !$(form)
      .find("button")
      .hasClass("disabled")
  ) {
    if (form.length) {
      var error = false;
      var phone = $(form)
        .find("input[name=tel]")
        .val();
      var data_processing = $(form).find("input[name=processing]");
      var boxname = $(form).attr("data-dox");
      var boxprice = $(form).attr("data-price");
      var boxweight = $(form).attr("data-weight");
      if (!phone || phone.length < 8) {
        error = true;
        $(form)
          .find("input[name=tel]")
          .parents("label")
          .addClass("error");
        setTimeout(function() {
          $(form)
            .find("input[name=tel]")
            .parents("label")
            .removeClass("error");
        }, 2000);
        return false;
      }
      if (!data_processing.is(":checked")) {
        error = true;
        $(form)
          .find("input[name=processing]")
          .parents("label")
          .addClass("error");
        setTimeout(function() {
          $(form)
            .find("input[name=processing]")
            .parents("label")
            .removeClass("error");
        }, 2000);
        return false;
      }
      if (!error) {
        $(form)
          .find("button")
          .addClass("disabled");
        $.ajax({
          url: "/wp-admin/admin-ajax.php",
          type: "post",
          data: {
            action: "orbox",
            boxphone: phone,
            boxname: boxname,
            boxprice: boxprice,
            boxweight: boxweight
          },
          dataType: "json",
          success: function(data) {
            dataLayer.push({'event': 'zayavka4'});
            if (data.success) {
              $(form)
                .get(0)
                .reset();
              $("#food-box-modal").iziModal("close");
              $("#thanks").iziModal("open");
              $(form)
                .find("button")
                .removeClass("disabled");
            }
          }
        });
      }
    }
  }
}
