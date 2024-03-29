const subNavHighlight = () => {
  let $highlighted;
  if (window.location.href.indexOf(`periode=1`) > - 1) {
    $highlighted = document.querySelector(`.subNav2`);
  } else {
    if (window.location.href.indexOf(`periode=2`) > - 1) {
      $highlighted = document.querySelector(`.subNav3`);
    } else {
      $highlighted = document.querySelector(`.subNav1`);
    }
  }
  $highlighted.classList.add(`subNavMenuItems__item--highlighted`);
};

const convertToDueTone = (color1, color2) => {
  const $matrix = document.querySelector(`feColorMatrix`);
  let value = [];
  value = value.concat(
[color1[0] / 256 - color2[0] / 256, 0, 0, 0, color2[0] / 256]);
  value = value.concat(
[color1[1] / 256 - color2[1] / 256, 0, 0, 0, color2[1] / 256]);
  value = value.concat(
[color1[2] / 256 - color2[2] / 256, 0, 0, 0, color2[2] / 256]);
  value = value.concat([0, 0, 0, 1, 0]);
  $matrix.setAttribute(`values`, value.join(` `));
};

if (window.location.href.indexOf(`agenda`) > - 1) {
  subNavHighlight();
}

if (window.location.href.indexOf(`agenda`) > - 1 || window.location.href.indexOf(`index`) > - 1) {
  convertToDueTone([67, 196, 162], [74, 33, 49]);
}



// const img = document.createElement(`img`);
// img.src = `../assets/img/shape_c.svg`;

//$header.appendChild(img);

const randomShapes = () => {
  const viewport = window.innerWidth;
  const numberShapes = Math.round(viewport / 100);
  generateShape(numberShapes);
};

const threeRandom = () => {
  const val = Math.floor((Math.random() * 3) + 1);
  return val;
};

const bottomValue = () => {
  if (window.innerWidth <= `500`) {
    return Math.floor((Math.random() * 80) + 100);
  } else {
    if (window.innerWidth <= `850`) {
      return Math.floor((Math.random() * 180) + 100);
    } else {
      return Math.floor((Math.random() * 380) + 100);
    }
  }

};

const generateShape = numberShapes => {
  const purple =  `#551c2e`;
  const beige =  `#fffce6`;
  const yellow =  `#edd834`;

  console.log(numberShapes);
  for (let i = 0;i < numberShapes;i ++) {
    const svgns = `http://www.w3.org/2000/svg`;
    const xlinkns = `http://www.w3.org/1999/xlink`;
    const $header = document.querySelector(`.svgElements`);
    const use = document.createElementNS(svgns, `use`);
    const svg = document.createElementNS(svgns, `svg`);
    let shape;
    if (threeRandom() === 1) {
      shape = `#shape_t`;
    } else {
      if (threeRandom() === 2) {
        shape = `#shape_c`;
      } else {
        shape = `#shape_r`;
      }
    }
    let color;
    if (threeRandom() === 1) {
      color = purple;
    } else {
      if (threeRandom() === 2) {
        color = beige;
      } else {
        color = yellow;
      }
    }
    use.setAttributeNS(xlinkns, `href`, shape);
    svg.appendChild(use);
    svg.classList.add(`svgElement`);
    svg.style.fill = color;
    svg.style.top = bottomValue();
    svg.style.left = Math.floor((Math.random() * window.innerWidth - 30) + 1);
    svg.style.transform = `rotateZ(${Math.floor((Math.random() * 360) + 1)}deg)`;
    svg.setAttribute(`width`, `30`);
    svg.setAttribute(`height`, `30`);
    $header.appendChild(svg);
  }
};

if (!(window.location.href.indexOf(`agenda`) > - 1)) {
  randomShapes();

  const bg = document.querySelector(`.svgElements`);
  const windowWidth = window.innerWidth / 5;
  const windowHeight = window.innerHeight / 5;

  bg.addEventListener(`mousemove`, e => {
    const mouseX = e.clientX / windowWidth;
    const mouseY = e.clientY / windowHeight;
    bg.style.transform = `translate3D(-${mouseX}%, -${mouseY}%, 0)`;
  });
}
