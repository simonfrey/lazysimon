/*
 * lazy-simon.js
 *
 *  Minimal effort 350 byte JavaScript library to lazy load all <img> on your website
 *
 * License: MIT (https://lazy.simon-frey.eu/mit.txt)
 */
o = new IntersectionObserver(
  (a, s) => {
    a.forEach(e => {
      if (e.isIntersecting) {
        e.target.src = e.target.dataset.l;
        s.unobserve(e.target);
      }
    });
  },
  {
    root: null,
    rootMargin: "0px",
    threshold: 0.5
  }
);
d = document.querySelectorAll("img");
for (i = d.length - 1; i >= 0; i--) {
  e = d[i];
  e.dataset.l = e.src;
  e.src =
    "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mN89xQAAscB1RY/sEQAAAAASUVORK5CYII=";
  o.observe(e);
}