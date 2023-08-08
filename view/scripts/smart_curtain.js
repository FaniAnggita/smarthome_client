const formSmartCurtain = document.getElementById("formSmartCurtain");
const formSmartCurtain2 = document.getElementById("formSmartCurtain2");
const workModeSmartCurtain = document.getElementById("workModeSmartCurtain");
const scheduleFormSmartCurtain = document.getElementById(
  "scheduleFormSmartCurtain"
);

function switchSmartCurtain(device_id, toggleCheckbox) {
  const action = toggleCheckbox.checked ? "open" : "close";
  const url = "http://localhost:3000/api/curtain/smartCurtainSwitch";

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
formSmartCurtain.addEventListener("change", () => {
  const checkbox = document.getElementById("smartCurtainCheck");
  switchSmartCurtain("vdevo168612454069218", checkbox);
});
formSmartCurtain2.addEventListener("change", () => {
  const checkbox = document.getElementById("smartCurtainCheck2");
  switchSmartCurtain("vdevo168612454069218", checkbox);
});

function smartCurtainWorkMode(device_id, workModeSelect) {
  const workModeValue = workModeSelect.value;

  const url = "http://localhost:3000/api/curtain/smartCurtainWorkModeHandler";

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

function getStatussmartCurtain(deviceId) {
  const toggleCheckbox = document.getElementById("smartCurtainCheck");
  const toggleCheckbox2 = document.getElementById("smartCurtainCheck2");
  const icon = document.querySelectorAll(".iconSmartCurtain");
  const selectWorkMode = document.getElementById("workModeSmartCurtainSelect");

  const url = `http://localhost:3000/api/curtain/smartCurtainStatusHandler`;

  return axios
    .post(url, { device_id: deviceId }) // Send the device_id as a POST parameter
    .then((response) => {
      const statusData = response.data.result;
      const control = statusData[0].value;
      updateCheckboxStatusSmartCurtain(
        control,
        toggleCheckbox,
        toggleCheckbox2
      );
      updateIconSmartCurtain(control, icon);
      updateWorkModeSmartCurtain(control, selectWorkMode);
    })
    .catch((error) => {})
    .finally(() => {
      setTimeout(() => getStatussmartCurtain(deviceId), 5000);
    });
}

function updateIconSmartCurtain(control, icon) {
  if (control === "open") {
    // lampIcon.classList.add("text-warning");
    icon.forEach(function (element) {
      element.classList.add("text-warning");
    });
  } else {
    // lampIcon.classList.remove("text-warning");
    icon.forEach(function (element) {
      element.classList.remove("text-warning");
    });
  }
}

function updateCheckboxStatusSmartCurtain(
  control,
  toggleCheckbox,
  toggleCheckbox2
) {
  if (control === "open") {
    toggleCheckbox.checked = true;
    toggleCheckbox2.checked = true;
  } else {
    toggleCheckbox.checked = false;
    toggleCheckbox2.checked = false;
  }
}

function updateWorkModeSmartCurtain(workMode, selectWorkMode) {
  if (workMode === "open") {
    selectWorkMode.value = 1;
  } else if (workMode === "close") {
    selectWorkMode.value = 2;
  } else {
    selectWorkMode.value = 3;
  }
}
function sendScheduleDataSmartCurtain(
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
function updateScheduleSmartCurtain(
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

function getScheduleDataSmartCurtain(deviceId) {
  const statusTimeOn = document.getElementById("statusTimeOnSmartCurtain");
  const statusTimeOff = document.getElementById("statusTimeOffSmartCurtain");
  const inputTimeOn = document.getElementById("timeOnSmartCurtain");
  const inputTimeOff = document.getElementById("timeOffSmartCurtain");

  const url = "http://localhost:3000/api/curtain/curtainStatusScheduleHandler";

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
      setTimeout(() => getScheduleDataSmartCurtain(deviceId), 5000);
    });
}

workModeSmartCurtain.addEventListener("change", () => {
  const workMode = document.getElementById("workModeSmartCurtainSelect");
  smartCurtainWorkMode("vdevo168612454069218", workMode);
});

getStatussmartCurtain("vdevo168612454069218");

scheduleFormSmartCurtain.addEventListener("change", () => {
  const deviceId = "vdevo168612454069218";
  const statusTimeOn = document.getElementById(
    "statusTimeOnSmartCurtain"
  ).value;
  const timeOn = document.getElementById("timeOnSmartCurtain").value;
  const statusTimeOff = document.getElementById(
    "statusTimeOffSmartCurtain"
  ).value;
  const timeOff = document.getElementById("timeOffSmartCurtain").value;
  sendScheduleDataSmartCurtain(
    deviceId,
    statusTimeOn,
    timeOn,
    statusTimeOff,
    timeOff
  );
});

getScheduleDataSmartCurtain("vdevo168612454069218");
