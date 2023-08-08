// work_mode
$(document).ready(function () {
  // Ambil elemen select work mode
  var workModeSelect = $("#smart-lamp-color-mode");

  // Tampilkan atau sembunyikan elemen colorForm dan brightForm berdasarkan nilai work mode
  workModeSelect.change(function () {
    var selectedValue = $(this).val();

    if (selectedValue === "2") {
      $("#colorForm").hide();
      $("#brightForm").show();
    } else if (selectedValue === "1") {
      $("#colorForm").show();
      $("#brightForm").hide();
    }
  });
});
// work_mode dining room
$(document).ready(function () {
  // Ambil elemen select work mode
  var workModeSelect = $("#smartLampWorkModeDiningRoom");

  // Tampilkan atau sembunyikan elemen colorForm dan brightForm berdasarkan nilai work mode
  workModeSelect.change(function () {
    var selectedValue = $(this).val();

    if (selectedValue === "2") {
      $("#colorFormDiningRoom").hide();
      $("#brightFormDiningRoom").show();
    } else if (selectedValue === "1") {
      $("#colorFormDiningRoom").show();
      $("#brightFormDiningRoom").hide();
    }
  });
});

// work_mode kitchen
$(document).ready(function () {
  // Ambil elemen select work mode
  var workModeSelect = $("#smartLampWorkModeKitchen");

  // Tampilkan atau sembunyikan elemen colorForm dan brightForm berdasarkan nilai work mode
  workModeSelect.change(function () {
    var selectedValue = $(this).val();

    if (selectedValue === "2") {
      $("#colorFormKitchen").hide();
      $("#brightFormKitchen").show();
    } else if (selectedValue === "1") {
      $("#colorFormKitchen").show();
      $("#brightFormKitchen").hide();
    }
  });
});

// smart lamp living room
$(document).ready(function () {
  $("#statusTimeOn").on("change", function () {
    toggleTimeInput("#input-time-on-smart-lamp-on", $(this).val());
  });
  $("#statusTimeOff").on("change", function () {
    toggleTimeInput("#input-time-on-smart-lamp-off", $(this).val());
  });
});

function toggleTimeInput(elementSelector, selectedValue) {
  if (selectedValue === "1") {
    $(elementSelector).show();
  } else {
    $(elementSelector).hide();
  }
}

// smart lamp dining room
$(document).ready(function () {
  $("#statusTimeOnDiningRoom").on("change", function () {
    toggleTimeInput("#input-time-on-DiningRoom", $(this).val());
  });
  $("#statusTimeOffDiningRoom").on("change", function () {
    toggleTimeInput("#input-time-on-smart-lamp-offDiningRoom", $(this).val());
  });
});

function toggleTimeInput(elementSelector, selectedValue) {
  if (selectedValue === "1") {
    $(elementSelector).show();
  } else {
    $(elementSelector).hide();
  }
}

// smart lamp kitchen
$(document).ready(function () {
  $("#statusTimeOnKitchen").on("change", function () {
    toggleTimeInput("#input-time-on-Kitchen", $(this).val());
  });
  $("#statusTimeOffKitchen").on("change", function () {
    toggleTimeInput("#input-time-on-smart-lamp-offKitchen", $(this).val());
  });
});

function toggleTimeInput(elementSelector, selectedValue) {
  if (selectedValue === "1") {
    $(elementSelector).show();
  } else {
    $(elementSelector).hide();
  }
}

// smart curtain
$(document).ready(function () {
  $("#statusTimeOnSmartCurtain").on("change", function () {
    toggleTimeInput("#input-time-on-smart-curtain-on", $(this).val());
  });
  $("#statusTimeOffSmartCurtain").on("change", function () {
    toggleTimeInput("#input-time-on-smart-curtain-off", $(this).val());
  });
});

function toggleTimeInput(elementSelector, selectedValue) {
  if (selectedValue === "1") {
    $(elementSelector).show();
  } else {
    $(elementSelector).hide();
  }
}
// smart fan
$(document).ready(function () {
  $("#statusTimeOnSmartFan").on("change", function () {
    toggleTimeInput("#input-time-on-smart-Fan-on", $(this).val());
  });
  $("#statusTimeOffSmartFan").on("change", function () {
    toggleTimeInput("#input-time-on-smart-Fan-off", $(this).val());
  });
});

function toggleTimeInput(elementSelector, selectedValue) {
  if (selectedValue === "1") {
    $(elementSelector).show();
  } else {
    $(elementSelector).hide();
  }
}
// smart vacuum
$(document).ready(function () {
  $("#statusTimeOnSmartVacuum").on("change", function () {
    toggleTimeInput("#input-time-on-smart-vacuum-on", $(this).val());
  });
  $("#statusTimeOffSmartVacuum").on("change", function () {
    toggleTimeInput("#input-time-on-smart-vacuum-off", $(this).val());
  });
});

function toggleTimeInput(elementSelector, selectedValue) {
  if (selectedValue === "1") {
    $(elementSelector).show();
  } else {
    $(elementSelector).hide();
  }
}
