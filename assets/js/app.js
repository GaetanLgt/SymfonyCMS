import "../css/app.scss";

import { dropdown } from "bootstrap";

document.addEventListener('DOMContentLoaded', () => {
    enableDropDown();
})

const enableDropDown = () => {
  const dropdownElementList = [].slice.call(
    document.querySelectorAll(".dropdown-toggle")
  );
  dropdownElementList.map(function (dropdownToggleEl) {
    return new dropdown(dropdownToggleEl);
  });
};
