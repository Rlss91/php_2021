let lastSelected = "";
function setChecked(idx) {
  if (lastSelected) document.getElementById(lastSelected).checked = false;
  document.getElementById(idx).checked = true;
  lastSelected = idx;
}
