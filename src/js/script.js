let highlighted;
if (window.location.href.indexOf(`periode=1`) > - 1) {
  highlighted = document.querySelector(`.subNav2`);
} else {
  if (window.location.href.indexOf(`periode=2`) > - 1) {
    highlighted = document.querySelector(`.subNav3`);
  } else {
    highlighted = document.querySelector(`.subNav1`);
  }
}
highlighted.classList.add(`subNavMenuItems__item--highlighted`);

function convertToDueTone(color1, color2) {
  const matrix = document.querySelector(`feColorMatrix`);
  let value = [];
  value = value.concat(
  [color1[0] / 256 - color2[0] / 256, 0, 0, 0, color2[0] / 256]);
  value = value.concat(
  [color1[1] / 256 - color2[1] / 256, 0, 0, 0, color2[1] / 256]);
  value = value.concat(
  [color1[2] / 256 - color2[2] / 256, 0, 0, 0, color2[2] / 256]);
  value = value.concat([0, 0, 0, 1, 0]);
  matrix.setAttribute(`values`, value.join(` `));
}

// RED
//convertToDueTone([240, 14, 46], [25, 37, 80]);

// GREEN
convertToDueTone([67, 196, 162], [74, 33, 49]);
