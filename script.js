const smoothScrollTrigger = document.querySelectorAll('a[href^="#"]');
for (let i = 0; i < smoothScrollTrigger.length; i++) {
  smoothScrollTrigger[i].addEventListener("click", (e) => {
    toggleMenu();
    e.preventDefault();
    let href = smoothScrollTrigger[i].getAttribute("href");
    let targetElement = document.getElementById(href.replace("#", ""));
    const rect = targetElement.getBoundingClientRect().top;
    const offset = window.pageYOffset;
    const gap = 100;
    const target = rect + offset - gap;
    window.scrollTo({
      top: target,
      behavior: "smooth",
    });
  });
}

/** ハンバーガーメニュー */
const hamburger = document.getElementById("js-hamburger");
const nav = document.getElementById("js-nav");
const bg = document.getElementById("js-background");

const toggleMenu = function () {
  if (hamburger.classList.contains("active") === true) {
    hamburger.classList.remove("active");
    nav.classList.remove("active");
    bg.classList.remove("active");
    document.querySelector("html").style.removeProperty("overflow");
    document.querySelector("html").style.removeProperty("height");
    document.querySelector("body").style.removeProperty("overflow");
    document.querySelector("body").style.removeProperty("height");
  } else {
    hamburger.classList.add("active");
    nav.classList.add("active");
    bg.classList.add("active");
    document.querySelector("html").style.overflow = "auto";
    document.querySelector("html").style.height = "100%";
    document.querySelector("body").style.overflow = "auto";
    document.querySelector("body").style.height = "100%";
  }
};

hamburger.addEventListener("click", () => toggleMenu());
bg.addEventListener("click", () => toggleMenu());
