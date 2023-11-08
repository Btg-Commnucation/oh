const menuToggle = document.getElementById("menuToggler");

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
