import { submitForm, TCustomFormEvent } from "./submitForm.ts";
import "@splidejs/splide/css";
import Splide from "@splidejs/splide";
import handleArticles from "./handleArticles.ts";

const menuToggle = document.getElementById("menuToggler");
const photographie = document.getElementById("photographie");
const articles: NodeListOf<HTMLDivElement> =
  document.querySelectorAll(".article");
const buttons: NodeListOf<HTMLButtonElement> =
  document.querySelectorAll(".buttons");

const entries = document.querySelectorAll(".entry");

if (menuToggle) {
  const menuContainer = document.getElementById("menu-container");
  const close = document.getElementById("close");

  menuToggle.addEventListener("click", () => {
    menuContainer!.classList.add("active");
    document.body.style.overflow = "hidden";
  });

  close!.addEventListener("click", () => {
    menuContainer!.classList.remove("active");
    menuContainer!.classList.add("close");
    document.body.style.overflow = "auto";

    setTimeout(() => {
      menuContainer!.classList.remove("close");
    }, 2000);
  });
}

const form = document.querySelector("form");

if (form) {
  // @ts-ignore
  form.addEventListener("submit", (e: TCustomFormEvent) => submitForm(e));
}

if (photographie) {
  new Splide(".splide", {
    height: "100vh",
    perPage: 1,
    arrow: false,
    paginationDirection: "ttb",
    direction: "ttb",
    wheel: true,
    wheelSleep: 1000,
    releaseWheel: true,
    speed: 1500,
  }).mount();
}

if (articles && buttons.length > 0) {
  console.log(buttons);
  buttons[0].classList.add("active");
  articles[0].classList.add("active");

  buttons.forEach((button) => {
    button.addEventListener("click", () => {
      handleArticles(articles, buttons, button);
    });
  });
}

if (entries.length > 0) {
  const ratio = 0.5;
  const options = {
    root: null,
    rootMargin: "0px",
    threshold: ratio,
  };

  const handleIntersect = function (
    entries: IntersectionObserverEntry[],
    observer: IntersectionObserver
  ) {
    entries.forEach((entry: IntersectionObserverEntry) => {
      if (entry.intersectionRatio > ratio) {
        entry.target.classList.add("reveal-visible");
        observer.unobserve(entry.target);
      }
    });
  };

  const observer = new IntersectionObserver(handleIntersect, options);
  setTimeout(() => {
    observer.observe(document.querySelector(".content-hero-banner")!);
  }, 500);
  entries.forEach((entry) => observer.observe(entry));
}
