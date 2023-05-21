function slider(selector, items, itemsSmall) {
  new Splide(selector, {
    type: "loop",
    star: 2,
    perPage: items,
    gap: 30,
    rewind: false,
    autoplay: false,
    pagination: false,
    breakpoints: {
      1024: {
        perPage: itemsSmall,
      },
      767: {
        perPage: 1,
      },
    },
  }).mount();
}

function circle(id, value, maxValue) {
  Circles.create({
    id,
    radius: 120,
    value,
    maxValue,
    width: 20,
    colors: ["rgba(194,143,51, 0.2)", "#c28f33"],
    duration: 400,
    textClass: "circles-text",
  });
}

function circles() {
  circle("stat-lawyers", 924, 1300);
  circle("stat-cases", 92, 100);
  circle("stat-clients", 240, 300);
  circle("stat-awards", 124, 250);
}
