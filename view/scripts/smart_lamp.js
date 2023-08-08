// Living Room
const lampForm = document.getElementById("lampForm");
const lampForm2 = document.getElementById("lampForm2");
const workModeLivingRoom = document.getElementById("workMode");
const colorForm = document.getElementById("colorForm");
const brightForm = document.getElementById("brightForm");
const scheduleForm = document.getElementById("scheduleForm");

// Dining Room
const lampFormDiningRoomForm = document.getElementById("lampFormDiningRoom");
const diningRoomCheckForm = document.getElementById("diningRoomCheckForm");
const workModeDiningRoom = document.getElementById("workModeDiningRoom");
const brightFormDiningRoom = document.getElementById("brightFormDiningRoom");
const colorFormDiningRoom = document.getElementById("colorFormDiningRoom");
const scheduleFormDiningRoom = document.getElementById(
  "scheduleFormDiningRoom"
);

// Kitchen
const lampFormKitchen = document.getElementById("lampFormKitchen");
const kitchenCheckForm = document.getElementById("kitchenCheckForm");
const workModeKitchen = document.getElementById("workModeKitchen");
const brightFormKitchen = document.getElementById("brightFormKitchen");
const colorFormKitchen = document.getElementById("colorFormKitchen");
const scheduleFormKitchen = document.getElementById("scheduleFormKitchen");

// Garden
const gardenCheckForm = document.getElementById("gardenCheckForm");

// front door
const frontDoorCheckForm = document.getElementById("frontDoorCheckForm");

function switchDevice(device_id, toggleCheckbox) {
  const action = toggleCheckbox.checked ? "on" : "off";
  const url = "http://localhost:3000/api/lamp/switch";

  axios
    .post(url, {
      device_id,
      action,
    })
    .then((response) => {
      console.log(response.data.message);
    })
    .catch((error) => {
      console.error("Error:", error.response.data.error);
    });
}

function sendWorkModeData(device_id, workModeSelect) {
  const workModeValue = workModeSelect.value;

  const url = "http://localhost:3000/api/lamp/workModeHandler";

  axios
    .post(url, {
      device_id: device_id,
      workMode: workModeValue,
    })
    .then((response) => {
      console.log(response.data.message);
    })
    .catch((error) => {
      console.error("Error:", error.response.data.error);
    });
}

function sendBrightnessData(deviceId, brightness) {
  const parseBright = parseInt(brightness);
  const url = "http://localhost:3000/api/lamp/bright";

  axios
    .post(url, {
      device_id: deviceId,
      action: parseBright,
    })
    .then((response) => {
      console.log(response.data.message);
    })
    .catch((error) => {
      console.error("Error:", error.response.data.error);
    });
}

function sendColorData(deviceId, color) {
  const { h, s, v } = hexToHsv(color);
  const url = "http://localhost:3000/api/lamp/color";

  axios
    .post(url, {
      device_id: deviceId,
      h,
      s,
      v,
    })
    .then((response) => {
      console.log(response.data.message);
    })
    .catch((error) => {
      console.error("Error:", error.response.data.error);
    });
}

function sendScheduleData(
  deviceId,
  statusTimeOn,
  timeOn,
  statusTimeOff,
  timeOff
) {
  const url = "http://localhost:3000/api/lamp/schedule";

  const requestData = {
    device_id: deviceId,
    statusTimeOn,
    timeOn,
    statusTimeOff,
    timeOff,
  };

  axios
    .post(url, requestData)
    .then((response) => {
      console.log(response.data.message);
    })
    .catch((error) => {
      console.error("Error:", error.response.data.error);
    });
}

function getStatusSmartLampLivingRoom(deviceId) {
  const toggleCheckbox = document.getElementById("toggleCheckbox");
  const toggleCheckbox2 = document.getElementById("livingRoomCheck");
  const lampIconHome = document.querySelectorAll(".lampIconHome");
  const selectWorkMode = document.getElementById("smart-lamp-color-mode");
  const brightForm = document.getElementById("brightForm");
  const colorForm = document.getElementById("colorForm");
  const brightInput = document.getElementById("bright");
  const colorInput = document.getElementById("color");

  const url = `http://localhost:3000/api/lamp/status`;

  return axios
    .post(url, { device_id: deviceId }) // Send the device_id as a POST parameter
    .then((response) => {
      const statusData = response.data.result;
      const switch_led_value = statusData[0].value;
      const workMode = statusData[1].value;
      const color_value = JSON.parse(statusData[4].value);
      const bright_value = JSON.parse(statusData[2].value);
      updateCheckboxStatus(switch_led_value, toggleCheckbox, toggleCheckbox2);
      updateLampColor(switch_led_value, lampIconHome);
      updateWorkMode(workMode, selectWorkMode, brightForm, colorForm);
      updateColorForm(color_value, colorInput);
      updateBrightForm(bright_value, brightInput);

      // // return switch_led_value;
      // console.log(workMode);
    })
    .catch((error) => {
      // console.error('Error:', error.response.data.error);
    })
    .finally(() => {
      setTimeout(() => getStatusSmartLampLivingRoom(deviceId), 5000);
    });
}

function getStatusSmartLampDiningRoom(deviceId) {
  const toggleCheckbox = document.getElementById("toggleCheckboxDiningRoom");
  const toggleCheckbox2 = document.getElementById("diningRoomCheck");
  const lampIconHome = document.querySelectorAll(".lampIconDiningRoom");
  const selectWorkMode = document.getElementById("smartLampWorkModeDiningRoom");
  const brightForm = document.getElementById("brightFormDiningRoom");
  const colorForm = document.getElementById("colorFormDiningRoom");
  const brightInput = document.getElementById("brightDiningRoom");
  const colorInput = document.getElementById("colorDiningRoom");

  const url = `http://localhost:3000/api/lamp/status`;

  return axios
    .post(url, { device_id: deviceId }) // Send the device_id as a POST parameter
    .then((response) => {
      const statusData = response.data.result;
      const switch_led_value = statusData[0].value;
      const workMode = statusData[1].value;
      const color_value = JSON.parse(statusData[4].value);
      const bright_value = JSON.parse(statusData[2].value);
      updateCheckboxStatus(switch_led_value, toggleCheckbox, toggleCheckbox2);
      updateLampColor(switch_led_value, lampIconHome);
      updateWorkMode(workMode, selectWorkMode, brightForm, colorForm);
      updateColorForm(color_value, colorInput);
      updateBrightForm(bright_value, brightInput);

      // // return switch_led_value;
      // console.log(workMode);
    })
    .catch((error) => {
      // console.error('Error:', error.response.data.error);
    })
    .finally(() => {
      setTimeout(() => getStatusSmartLampDiningRoom(deviceId), 5000);
    });
}

function getStatusSmartLampKitchen(deviceId) {
  const toggleCheckbox = document.getElementById("toggleCheckboxKitchen");
  const toggleCheckbox2 = document.getElementById("kitchenCheck");
  const lampIconHome = document.querySelectorAll(".lampIconKitchen");
  const selectWorkMode = document.getElementById("smartLampWorkModeKitchen");
  const brightForm = document.getElementById("brightFormKitchen");
  const colorForm = document.getElementById("colorFormKitchen");
  const brightInput = document.getElementById("brightKitchen");
  const colorInput = document.getElementById("colorKitchen");

  const url = `http://localhost:3000/api/lamp/status`;

  return axios
    .post(url, { device_id: deviceId }) // Send the device_id as a POST parameter
    .then((response) => {
      const statusData = response.data.result;
      const switch_led_value = statusData[0].value;
      const workMode = statusData[1].value;
      const color_value = JSON.parse(statusData[4].value);
      const bright_value = JSON.parse(statusData[2].value);
      updateCheckboxStatus(switch_led_value, toggleCheckbox, toggleCheckbox2);
      updateLampColor(switch_led_value, lampIconHome);
      updateWorkMode(workMode, selectWorkMode, brightForm, colorForm);
      updateColorForm(color_value, colorInput);
      updateBrightForm(bright_value, brightInput);

      // // return switch_led_value;
      // console.log(workMode);
    })
    .catch((error) => {
      // console.error('Error:', error.response.data.error);
    })
    .finally(() => {
      setTimeout(() => getStatusSmartLampKitchen(deviceId), 5000);
    });
}
function getStatusSmartLampGarden(deviceId) {
  const toggleCheckbox = document.getElementById("gardenCheck");
  const lampIconHome = document.querySelectorAll(".lampIconGarden");

  const url = `http://localhost:3000/api/lamp/status`;

  return axios
    .post(url, { device_id: deviceId }) // Send the device_id as a POST parameter
    .then((response) => {
      const statusData = response.data.result;
      const switch_led_value = statusData[0].value;
      updateCheckboxStatus(switch_led_value, toggleCheckbox, false);
      updateLampColor(switch_led_value, lampIconHome);
    })
    .catch((error) => {})
    .finally(() => {
      setTimeout(() => getStatusSmartLampGarden(deviceId), 5000);
    });
}

function getStatusSmartLampFrontDoor(deviceId) {
  const toggleCheckbox = document.getElementById("frontDoorCheck");
  const lampIconHome = document.querySelectorAll(".lampIconFrontDoor");

  const url = `http://localhost:3000/api/lamp/status`;

  return axios
    .post(url, { device_id: deviceId }) // Send the device_id as a POST parameter
    .then((response) => {
      const statusData = response.data.result;
      const switch_led_value = statusData[0].value;
      updateCheckboxStatus(switch_led_value, toggleCheckbox, false);
      updateLampColor(switch_led_value, lampIconHome);
    })
    .catch((error) => {})
    .finally(() => {
      setTimeout(() => getStatusSmartLampFrontDoor(deviceId), 5000);
    });
}

function updateLampColor(switch_led_value, lampIconHome) {
  if (switch_led_value) {
    // lampIcon.classList.add("text-warning");
    lampIconHome.forEach(function (element) {
      element.classList.add("text-warning");
    });
  } else {
    // lampIcon.classList.remove("text-warning");
    lampIconHome.forEach(function (element) {
      element.classList.remove("text-warning");
    });
  }
}

function updateCheckboxStatus(
  switch_led_value,
  toggleCheckbox,
  toggleCheckbox2
) {
  toggleCheckbox.checked = switch_led_value;
  toggleCheckbox2.checked = switch_led_value;
}

function updateWorkMode(workMode, selectWorkMode, brightForm, colorForm) {
  if (workMode === "white") {
    selectWorkMode.value = 2;
    brightForm.style.display = "";
    colorForm.style.display = "none";
  } else {
    selectWorkMode.value = 1;
    colorForm.style.display = "";
    brightForm.style.display = "none";
  }
}

function updateColorForm(color_value, colorInput) {
  const { h, s, v } = color_value;
  const hex = hsvToHex(h, s, v);
  colorInput.value = hex;
}

function updateBrightForm(bright_value, brightInput) {
  brightInput.value = bright_value;
}

function updateSchedule(
  time_on,
  time_off,
  statusTimeOn,
  statusTimeOff,
  inputTimeOn,
  inputTimeOff
) {
  if (time_on === null) {
    statusTimeOn.value = 2;
  } else {
    statusTimeOn.value = 1;
    // Memisahkan jam dan menit dari time_on
    const [onHoursOn, onMinutesOn] = time_on.split(":");
    inputTimeOn.defaultValue = onHoursOn + ":" + onMinutesOn;
  }

  if (time_off === null) {
    statusTimeOff.value = 2;
  } else {
    statusTimeOff.value = 1;
    // Memisahkan jam dan menit dari time_on
    const [onHoursOff, onMinutesOff] = time_off.split(":");
    inputTimeOff.defaultValue = onHoursOff + ":" + onMinutesOff;
  }
}

// status schedule smart lamp living room
function getScheduleData(deviceId) {
  const statusTimeOn = document.getElementById("statusTimeOn");
  const statusTimeOff = document.getElementById("statusTimeOff");
  const inputTimeOn = document.getElementById("timeOn");
  const inputTimeOff = document.getElementById("timeOff");

  const url = "http://localhost:3000/api/lamp/statusSchedule";

  const requestData = {
    device_id: deviceId,
  };

  axios
    .post(url, requestData)
    .then((response) => {
      const { time_on, time_off } = response.data;

      updateSchedule(
        time_on,
        time_off,
        statusTimeOn,
        statusTimeOff,
        inputTimeOn,
        inputTimeOff
      );
      // console.log(time_on);
    })
    .catch((error) => {
      // console.error("Error:", error.response.data.error);
    })
    .finally(() => {
      setTimeout(() => getScheduleData(deviceId), 5000);
    });
}
// status schedule smart lamp dining room
function getScheduleSmartLampDiningRoom(deviceId) {
  const statusTimeOn = document.getElementById("statusTimeOnDiningRoom");
  const statusTimeOff = document.getElementById("statusTimeOffDiningRoom");
  const inputTimeOn = document.getElementById("timeOnDiningRoom");
  const inputTimeOff = document.getElementById("timeOffDiningRoom");

  const url = "http://localhost:3000/api/lamp/statusSchedule";

  const requestData = {
    device_id: deviceId,
  };

  axios
    .post(url, requestData)
    .then((response) => {
      const { time_on, time_off } = response.data;

      updateSchedule(
        time_on,
        time_off,
        statusTimeOn,
        statusTimeOff,
        inputTimeOn,
        inputTimeOff
      );
      // console.log(time_on);
    })
    .catch((error) => {
      // console.error("Error:", error.response.data.error);
    })
    .finally(() => {
      setTimeout(() => getScheduleSmartLampDiningRoom(deviceId), 5000);
    });
}

// status schedule smart lamp kitchen
function getScheduleSmartLampKitchen(deviceId) {
  const statusTimeOn = document.getElementById("statusTimeOnKitchen");
  const statusTimeOff = document.getElementById("statusTimeOffKitchen");
  const inputTimeOn = document.getElementById("timeOnKitchen");
  const inputTimeOff = document.getElementById("timeOffKitchen");

  const url = "http://localhost:3000/api/lamp/statusSchedule";

  const requestData = {
    device_id: deviceId,
  };

  axios
    .post(url, requestData)
    .then((response) => {
      const { time_on, time_off } = response.data;

      updateSchedule(
        time_on,
        time_off,
        statusTimeOn,
        statusTimeOff,
        inputTimeOn,
        inputTimeOff
      );
      // console.log(time_on);
    })
    .catch((error) => {
      // console.error("Error:", error.response.data.error);
    })
    .finally(() => {
      setTimeout(() => getScheduleSmartLampKitchen(deviceId), 5000);
    });
}

function hexToHsv(hex) {
  const bigint = parseInt(hex.substr(1), 16);
  const r = (bigint >> 16) & 255;
  const g = (bigint >> 8) & 255;
  const b = bigint & 255;
  return rgbToHsv(r, g, b);
}

function hsvToHex(h, s, v) {
  const { r, g, b } = hsvToRgb(h, s, v);
  return rgbToHex(r, g, b);
}

function rgbToHsv(r, g, b) {
  r /= 255;
  g /= 255;
  b /= 255;
  const max = Math.max(r, g, b);
  const min = Math.min(r, g, b);
  let h, s, v;

  if (max === min) {
    h = 0;
  } else if (max === r) {
    h = 60 * ((g - b) / (max - min));
  } else if (max === g) {
    h = 60 * (2 + (b - r) / (max - min));
  } else {
    h = 60 * (4 + (r - g) / (max - min));
  }

  if (h < 0) {
    h += 360;
  }

  v = max;
  s = max === 0 ? 0 : (max - min) / max;

  return {
    h,
    s,
    v,
  };
}

function rgbToHex(r, g, b) {
  const hexR = r.toString(16).padStart(2, "0");
  const hexG = g.toString(16).padStart(2, "0");
  const hexB = b.toString(16).padStart(2, "0");
  return `#${hexR}${hexG}${hexB}`;
}

function hsvToRgb(h, s, v) {
  let r, g, b;
  const i = Math.floor(h / 60);
  const f = h / 60 - i;
  const p = v * (1 - s);
  const q = v * (1 - f * s);
  const t = v * (1 - (1 - f) * s);

  switch (i % 6) {
    case 0:
      r = v;
      g = t;
      b = p;
      break;
    case 1:
      r = q;
      g = v;
      b = p;
      break;
    case 2:
      r = p;
      g = v;
      b = t;
      break;
    case 3:
      r = p;
      g = q;
      b = v;
      break;
    case 4:
      r = t;
      g = p;
      b = v;
      break;
    case 5:
      r = v;
      g = p;
      b = q;
      break;
  }

  return {
    r: Math.round(r * 255),
    g: Math.round(g * 255),
    b: Math.round(b * 255),
  };
}

// Living Room
lampForm.addEventListener("change", () => {
  const checkbox = document.getElementById("toggleCheckbox");
  switchDevice("vdevo168550291747733", checkbox);
});

lampForm2.addEventListener("change", () => {
  const checkbox = document.getElementById("livingRoomCheck");
  switchDevice("vdevo168550291747733", checkbox);
});

workModeLivingRoom.addEventListener("change", () => {
  const workMode = document.getElementById("smart-lamp-color-mode");
  sendWorkModeData("vdevo168550291747733", workMode);
});

brightForm.addEventListener("change", () => {
  const brightness = document.getElementById("bright").value;
  sendBrightnessData("vdevo168550291747733", brightness);
});

colorForm.addEventListener("change", () => {
  const color = document.getElementById("color").value;
  sendColorData("vdevo168550291747733", color);
});

scheduleForm.addEventListener("change", () => {
  const deviceId = "vdevo168550291747733";
  const statusTimeOn = document.getElementById("statusTimeOn").value;
  const timeOn = document.getElementById("timeOn").value;
  const statusTimeOff = document.getElementById("statusTimeOff").value;
  const timeOff = document.getElementById("timeOff").value;
  sendScheduleData(deviceId, statusTimeOn, timeOn, statusTimeOff, timeOff);
});
getStatusSmartLampLivingRoom("vdevo168550291747733");
getScheduleData("vdevo168550291747733");

// Dining Room
lampFormDiningRoomForm.addEventListener("change", () => {
  const checkbox = document.getElementById("toggleCheckboxDiningRoom");
  switchDevice("vdevo168935226621309", checkbox);
});

diningRoomCheckForm.addEventListener("change", () => {
  const checkbox = document.getElementById("diningRoomCheck");
  switchDevice("vdevo168935226621309", checkbox);
});

workModeDiningRoom.addEventListener("change", () => {
  const workMode = document.getElementById("smartLampWorkModeDiningRoom");
  sendWorkModeData("vdevo168935226621309", workMode);
});

brightFormDiningRoom.addEventListener("change", () => {
  const brightness = document.getElementById("brightDiningRoom").value;
  sendBrightnessData("vdevo168935226621309", brightness);
});

colorFormDiningRoom.addEventListener("change", () => {
  const color = document.getElementById("colorDiningRoom").value;
  sendColorData("vdevo168935226621309", color);
});

scheduleFormDiningRoom.addEventListener("change", () => {
  const deviceId = "vdevo168935226621309";
  const statusTimeOn = document.getElementById("statusTimeOnDiningRoom").value;
  const timeOn = document.getElementById("timeOnDiningRoom").value;
  const statusTimeOff = document.getElementById(
    "statusTimeOffDiningRoom"
  ).value;
  const timeOff = document.getElementById("timeOffDiningRoom").value;
  sendScheduleData(deviceId, statusTimeOn, timeOn, statusTimeOff, timeOff);
});

getStatusSmartLampDiningRoom("vdevo168935226621309");
getScheduleSmartLampDiningRoom("vdevo168935226621309");

// Kitchen
lampFormKitchen.addEventListener("change", () => {
  const checkbox = document.getElementById("toggleCheckboxKitchen");
  switchDevice("vdevo169059823445741", checkbox);
});

kitchenCheckForm.addEventListener("change", () => {
  const checkbox = document.getElementById("kitchenCheck");
  switchDevice("vdevo169059823445741", checkbox);
});

workModeKitchen.addEventListener("change", () => {
  const workMode = document.getElementById("smartLampWorkModeKitchen");
  sendWorkModeData("vdevo169059823445741", workMode);
});

brightFormKitchen.addEventListener("change", () => {
  const brightness = document.getElementById("brightKitchen").value;
  sendBrightnessData("vdevo169059823445741", brightness);
});

colorFormKitchen.addEventListener("change", () => {
  const color = document.getElementById("colorKitchen").value;
  sendColorData("vdevo169059823445741", color);
});

scheduleFormKitchen.addEventListener("change", () => {
  const deviceId = "vdevo169059823445741";
  const statusTimeOn = document.getElementById("statusTimeOnKitchen").value;
  const timeOn = document.getElementById("timeOnKitchen").value;
  const statusTimeOff = document.getElementById("statusTimeOffKitchen").value;
  const timeOff = document.getElementById("timeOffKitchen").value;
  sendScheduleData(deviceId, statusTimeOn, timeOn, statusTimeOff, timeOff);
});

getStatusSmartLampKitchen("vdevo169059823445741");
getScheduleSmartLampKitchen("vdevo169059823445741");

// Garden
gardenCheckForm.addEventListener("change", () => {
  const checkbox = document.getElementById("gardenCheck");
  switchDevice("vdevo169060588651874", checkbox);
});

getStatusSmartLampGarden("vdevo169060588651874");

//  front door
frontDoorCheckForm.addEventListener("change", () => {
  const checkbox = document.getElementById("frontDoorCheck");
  switchDevice("vdevo169138255778159", checkbox);
});

getStatusSmartLampFrontDoor("vdevo169138255778159");
