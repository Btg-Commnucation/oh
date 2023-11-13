import { submitForm, TCustomFormEvent } from "./submitForm.ts";
import "@splidejs/splide/css";
import Splide from "@splidejs/splide";

const menuToggle = document.getElementById("menuToggler");
const photographie = document.getElementById("photographie");

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
  }).mount();
}
