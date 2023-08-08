const switchSmartVacuumForm = document.getElementById("switchSmartVacuumForm");
const switchSmartVacuumForm2 = document.getElementById(
  "switchSmartVacuumForm2"
);
const workModeSmartVacuumForm = document.getElementById(
  "workModeSmartVacuumForm"
);
const scheduleFormSmartVacuum = document.getElementById(
  "scheduleFormSmartVacuum"
);

function switchSmartVacuum(device_id, toggleCheckbox) {
  const action = toggleCheckbox.checked ? "on" : "off";
  const url = "http://localhost:3000/api/vacuum/smartVacuumSwitch";

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

function smartVacuumnWorkMode(device_id, workModeSelect) {
  const workModeValue = workModeSelect.value;

  const url = "http://localhost:3000/api//vacuum/smartVacuumWorkMode";

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

function sendScheduleDataSmartVacuum(
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

function getStatusSmartVacuum(deviceId) {
  const toggleCheckbox = document.getElementById("switchSmartVacuum");
  const toggleCheckbox2 = document.getElementById("switchSmartVacuum2");
  const selectWorkMode = document.getElementById("workModeSmartVacuum");
  const iconSmartVacuum = document.querySelectorAll(".iconSmartVacuum");

  const url = `http://localhost:3000/api/vacuum/smartVacuumStatusHandler`;

  return axios
    .post(url, { device_id: deviceId })
    .then((response) => {
      const statusData = response.data.result;
      const power_go = statusData[0].value;
      const mode = statusData[1].value;
      updateCheckboxStatusVacuum(power_go, toggleCheckbox, toggleCheckbox2);
      updateSmartVacuumIcon(power_go, iconSmartVacuum);
      updateWorkModeSmartVacuum(mode, selectWorkMode);
    })
    .catch((error) => {
      // console.error('Error:', error.response.data.error);
    })
    .finally(() => {
      setTimeout(() => getStatusSmartVacuum(deviceId), 5000);
    });
}

function updateCheckboxStatusVacuum(power_go, toggleCheckbox, toggleCheckbox2) {
  if (power_go) {
    toggleCheckbox.checked = true;
    toggleCheckbox2.checked = true;
  } else {
    toggleCheckbox.checked = false;
    toggleCheckbox2.checked = false;
  }
}

function updateSmartVacuumIcon(power_go, iconSmartVacuum) {
  if (power_go) {
    // lampIcon.classList.add("text-warning");
    iconSmartVacuum.forEach(function (element) {
      element.classList.add("text-success");
    });
  } else {
    // lampIcon.classList.remove("text-success");
    iconSmartVacuum.forEach(function (element) {
      element.classList.remove("text-success");
    });
  }
}

function updateWorkModeSmartVacuum(mode, selectWorkMode) {
  if (mode === "smart") {
    selectWorkMode.value = 1;
  } else if (mode === "wall_follow") {
    selectWorkMode.value = 2;
  } else if (mode === "spiral") {
    selectWorkMode.value = 3;
  } else {
    selectWorkMode.value = 4;
  }
}

function updateScheduleSmartVacuum(
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

function getScheduleDataSmartVacuum(deviceId) {
  const statusTimeOn = document.getElementById("statusTimeOnSmartVacuum");
  const statusTimeOff = document.getElementById("statusTimeOffSmartVacuum");
  const inputTimeOn = document.getElementById("timeOnSmartVacuum");
  const inputTimeOff = document.getElementById("timeOffSmartVacuum");

  const url = "http://localhost:3000/api/vacuum/vacuumStatusScheduleHandler";

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
      setTimeout(() => getScheduleDataSmartVacuum(deviceId), 5000);
    });
}

switchSmartVacuumForm.addEventListener("change", () => {
  const checkbox = document.getElementById("switchSmartVacuum");
  switchSmartVacuum("vdevo168612946078577", checkbox);
});
switchSmartVacuumForm2.addEventListener("change", () => {
  const checkbox = document.getElementById("switchSmartVacuum2");
  switchSmartVacuum("vdevo168612946078577", checkbox);
});

workModeSmartVacuumForm.addEventListener("change", () => {
  const workMode = document.getElementById("workModeSmartVacuum");
  smartVacuumnWorkMode("vdevo168612946078577", workMode);
});

scheduleFormSmartVacuum.addEventListener("change", () => {
  const deviceId = "vdevo168612946078577";
  const statusTimeOn = document.getElementById("statusTimeOnSmartVacuum").value;
  const timeOn = document.getElementById("timeOnSmartVacuum").value;
  const statusTimeOff = document.getElementById(
    "statusTimeOffSmartVacuum"
  ).value;
  const timeOff = document.getElementById("timeOffSmartVacuum").value;
  sendScheduleDataSmartVacuum(
    deviceId,
    statusTimeOn,
    timeOn,
    statusTimeOff,
    timeOff
  );
});

getStatusSmartVacuum("vdevo168612946078577");
getScheduleDataSmartVacuum("vdevo168612946078577");
