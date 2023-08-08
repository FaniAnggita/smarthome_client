const switchSmartFanForm = document.getElementById("switchSmartFanForm");
const switchSmartFanForm2 = document.getElementById("switchSmartFanForm2");
const fanSpeedForm = document.getElementById("fanSpeedForm");
const shakeFanFrom = document.getElementById("shakeFanFrom");
const scheduleFormSmartFan = document.getElementById("scheduleFormSmartFan");

function switchSmartFan(device_id, toggleCheckbox) {
  const action = toggleCheckbox.checked ? "on" : "off";
  const url = "http://localhost:3000/api/fan/smartFanSwitch";

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

switchSmartFanForm.addEventListener("change", () => {
  const checkbox = document.getElementById("switchSmartFan");
  switchSmartFan("vdevo168619174656789", checkbox);
});
switchSmartFanForm2.addEventListener("change", () => {
  const checkbox = document.getElementById("switchSmartFan2");
  switchSmartFan("vdevo168619174656789", checkbox);
});

function sendSpeedFan(deviceId, speed) {
  const parseSpeed = speed;
  const url = "http://localhost:3000/api/fan/smartFanSpeed";

  axios
    .post(url, {
      device_id: deviceId,
      action: parseSpeed,
    })
    .then((response) => {
      console.log(response.data.message);
    })
    .catch((error) => {
      console.error("Error:", error.response.data.error);
    });
}

fanSpeedForm.addEventListener("change", () => {
  const speed = document.getElementById("fanSpeed").value;
  sendSpeedFan("vdevo168619174656789", speed);
});

function smartLampShake(device_id, shake) {
  const shakeMode = shake.value;

  const url = "http://localhost:3000/api/fan/smartFanShake";

  axios
    .post(url, {
      device_id: device_id,
      shakeMode: shakeMode,
    })
    .then((response) => {
      console.log(response.data.message);
    })
    .catch((error) => {
      console.error("Error:", error.response.data.error);
    });
}
shakeFanFrom.addEventListener("change", () => {
  const shakeMode = document.getElementById("shakeFan");
  smartLampShake("vdevo168619174656789", shakeMode);
});

function sendScheduleDataSmartFan(
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

scheduleFormSmartFan.addEventListener("change", () => {
  const deviceId = "vdevo168619174656789";
  const statusTimeOn = document.getElementById("statusTimeOnSmartFan").value;
  const timeOn = document.getElementById("timeOnSmartFan").value;
  const statusTimeOff = document.getElementById("statusTimeOffSmartFan").value;
  const timeOff = document.getElementById("timeOffSmartFan").value;
  sendScheduleDataSmartFan(
    deviceId,
    statusTimeOn,
    timeOn,
    statusTimeOff,
    timeOff
  );
});

function getStatusSmartFan(deviceId) {
  const toggleCheckbox = document.getElementById("switchSmartFan");
  const toggleCheckbox2 = document.getElementById("switchSmartFan2");
  const inputSpeed = document.getElementById("fanSpeed");
  const iconSmartFan = document.querySelectorAll(".iconSmartFan");
  const selectShake = document.getElementById("shakeFan");

  const url = `http://localhost:3000/api/fan/smartFanStatusHandler`;

  return axios
    .post(url, { device_id: deviceId }) // Send the device_id as a POST parameter
    .then((response) => {
      const statusData = response.data.result;
      const switch_fan = statusData[0].value;
      const fanSpeed = statusData[1].value;
      const shakeFan = statusData[2].value;
      updateCheckboxStatus(switch_fan, toggleCheckbox, toggleCheckbox2);
      updateSpeedFan(inputSpeed, fanSpeed);
      updateSmartFanIcon(switch_fan, iconSmartFan);
      updateShakeSmartFan(shakeFan, selectShake);
    })
    .catch((error) => {
      // console.error('Error:', error.response.data.error);
    })
    .finally(() => {
      setTimeout(() => getStatusSmartFan(deviceId), 5000);
    });
}

function updateCheckboxStatusSmartFan(
  switch_fan,
  toggleCheckbox,
  toggleCheckbox2
) {
  if (switch_fan) {
    toggleCheckbox.checked = true;
    toggleCheckbox2.checked = true;
  } else {
    toggleCheckbox.checked = false;
    toggleCheckbox2.checked = false;
  }
}

function updateSpeedFan(value, speed) {
  speed.value = value;
}

function updateSmartFanIcon(switch_fan, iconSmartFan) {
  if (switch_fan) {
    // lampIcon.classList.add("text-warning");
    iconSmartFan.forEach(function (element) {
      element.classList.add("text-primary");
    });
  } else {
    // lampIcon.classList.remove("text-primary");
    iconSmartFan.forEach(function (element) {
      element.classList.remove("text-primary");
    });
  }
}

function updateShakeSmartFan(shakeFan, selectShake) {
  if (shakeFan) {
    selectShake.value = 1;
  } else {
    selectShake.value = 2;
  }
}

function updateScheduleSmartFan(
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

function getScheduleDataSmartFan(deviceId) {
  const statusTimeOn = document.getElementById("statusTimeOnSmartFan");
  const statusTimeOff = document.getElementById("statusTimeOffSmartFan");
  const inputTimeOn = document.getElementById("timeOnSmartFan");
  const inputTimeOff = document.getElementById("timeOffSmartFan");

  const url = "http://localhost:3000/api/fan/fanStatusScheduleHandler";

  const requestData = {
    device_id: deviceId,
  };

  axios
    .post(url, requestData)
    .then((response) => {
      const { time_on, time_off } = response.data;

      updateScheduleSmartFan(
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
      setTimeout(() => getScheduleDataSmartFan(deviceId), 5000);
    });
}
getScheduleDataSmartFan("vdevo168619174656789");
getStatusSmartFan("vdevo168619174656789");
