$('.pricing-card-container').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
      {
      breakpoint: 1024,
      settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
      }
      },
      {
      breakpoint: 600,
      settings: {
          slidesToShow: 2,
          slidesToScroll: 2
      }
      },
      {
      breakpoint: 480,
      settings: {
          slidesToShow: 1,
          slidesToScroll: 1
      }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
  ]
});
window.addEventListener("resize", ()=>{
      if(window.innerWidth <= 1250){
          console.log(true)
      }
      console.log(window.innerWidth)
  })
  console.log("first")

document.addEventListener("DOMContentLoaded", () => {
  document.querySelector(".partners-slider-section").style.display = "block";
  setTimeout(() => {
    document.querySelector(".partners-slider-section").style.opacity = "1";
  }, 2000);
});

/* const htmlTemplate = `
  <div class="ct-slider-container">
    <div class="ct-slider"></div>
  </div>
`;

const targetSection = document.getElementById(".partners-slider-section");
targetSection.insertAdjacentHTML("beforeend", htmlTemplate);

document.addEventListener("DOMContentLoaded", function () {
  setTimeout(() => {
    const ctSliderContainer = document.querySelector(".ct-slider-container");
    if (ctSliderContainer) {
      ctSliderContainer.remove();
    }
  }, 2000);
}); */

/* ---------------------------------------------------------------------------------------------- */
/*                               Function For Random Color Generator                              */
/* ---------------------------------------------------------------------------------------------- */

function randomColor(elements, propertyName, predefinedColors = ["#A4CF0E", "#00CCFF", "#F90BAD", "#7164EA", "#F29111", "#42CD83"]) {
  const elementsList = document.querySelectorAll(elements);
  elementsList.forEach((element, index) => {
    const colorIndex = index % predefinedColors.length;
    element.style[propertyName] = predefinedColors[colorIndex];
  });
}

// function randomColor(elements, propertyName, predefinedColors = ["#A4CF0E", "#00CCFF", "#F90BAD", "#7164EA", "#F29111", "#42CD83"]) {
//     const elementsList = document.querySelectorAll(elements);
//     const colorIndex = 0;
//     elementsList.forEach(function(element) {
//         element.style[propertyName] = predefinedColors[colorIndex];
//         colorIndex += 1;
//         if (colorIndex >= predefinedColors.length) {
//             colorIndex = 0;
//         }
//     });
// }

/* ---------------------------------------------------------------------------------------------- */
/*                                     Another Random Color Js                                    */
/* ---------------------------------------------------------------------------------------------- */

function getRandomColor() {
  const letters = "0123456789ABCDEF";
  let color = "#";
  for (let i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}

/* ---------------------------------------------------------------------------------------------- */
/*                                 Generte Random Background Color                                */
/* ---------------------------------------------------------------------------------------------- */

function generateRandomBlob(elements, propertyName, predefinedColors = ["#A4CF0E", "#00CCFF", "#F90BAD", "#7164EA", "#F29111", "#42CD83"]) {
  const elementsList = document.querySelectorAll(elements);
  elementsList.forEach((element) => {
    const randomColor = getRandomColor();
    const randomBlob = `radial-gradient(circle at ${Math.random() * 100}% ${Math.random() * 100}%, ${randomColor} 0%, transparent 70%)`;
    element.style.background = randomBlob;
  });
}

/* ---------------------------------------------------------------------------------------------- */
/*                                   Generate Random Svg Element                                  */
/* ---------------------------------------------------------------------------------------------- */

function getRandomShape() {
  const shapes = ["M38.7,21.9C25.2,45.7,-27.9,46.2,-40.9,22.7C-54,-0.9,-27,-48.5,-0.4,-48.8C26.1,-49,52.2,-1.9,38.7,21.9Z", "M40,28C26.5,51.8,-27.9,46.2,-40.9,22.7C-54,-0.9,-27,-48.5,-0.4,-48.8C26.1,-49,52.2,-1.9,40,28Z", "M37.7,29.5C24.2,53.3,-27.9,46.2,-40.9,22.7C-54,-0.9,-27,-48.5,-0.4,-48.8C26.1,-49,52.2,-1.9,37.7,29.5Z"];
  return shapes[Math.floor(Math.random() * shapes.length)];
}

/* ---------------------------------------------------------------------------------------------- */
/*                                           Random Svg                                           */
/* ---------------------------------------------------------------------------------------------- */

function generateRandomSVG(elements) {
  const elementsList = document.querySelectorAll(elements);
  elementsList.forEach((element) => {
    const randomColor = getRandomColor();
    const randomShape = getRandomShape();
    const svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
    svg.setAttribute("viewBox", "0 0 100 100");
    svg.style.width = "100px";
    svg.style.height = "100px";
    svg.style.opacity = "0.5";

    const path = document.createElementNS("http://www.w3.org/2000/svg", "path");
    path.setAttribute("fill", randomColor);
    path.setAttribute("d", randomShape);
    path.setAttribute("transform", "translate(50 50)");

    svg.appendChild(path);
    element.appendChild(svg);
  });
}

/* ---------------------------------------------------------------------------------------------- */
/*                                   Function For Faqs Accordion                                  */
/* ---------------------------------------------------------------------------------------------- */

const faqs = document.querySelectorAll(".faq-card .faq-card-description");
if (faqs) {
  faqs.forEach((faq) => {
    const lineHeight = parseInt(window.getComputedStyle(faq).lineHeight);
    const containerHeight = faq.clientHeight;
    const lines = Math.round(containerHeight / lineHeight);
    if (lines > 3) {
      faq.parentElement.parentElement.classList.add("have-more-text");
    } else {
      faq.parentElement.parentElement.classList.remove("have-more-text");
    }
  });
}

/* ---------------------------------------------------------------------------------------------- */
/*                                      Dropdown For Nav Menu                                     */
/* ---------------------------------------------------------------------------------------------- */

let navExpandPoint = document.querySelectorAll(".mobile-nav-expand-point");

navExpandPoint.forEach((element) => {
  element.addEventListener("click", (e) => {
    e.target.classList.toggle("active-nav-expand-point");
    var content = e.target.nextElementSibling;
    if (content.style.maxHeight) {
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    }
  });
});

// Scroll To Top Btn
if (document.querySelector(".back-to-top-btn")) {
  document.addEventListener("DOMContentLoaded", function () {
    let backToTopBtn = document.querySelector(".back-to-top-btn");
    let bodyHeight = document.body.clientHeight;
    let scrollThreshold = 0.15;
    window.addEventListener("scroll", function () {
      let scrolledHeight = window.scrollY || window.pageYOffset;
      if (scrolledHeight > bodyHeight * scrollThreshold) {
        backToTopBtn.style.display = "flex";
      } else {
        backToTopBtn.style.display = "none";
      }
    });
  });
}

let mobileNavLinesBtn = document.querySelector("#mobile-nav-lines-btn");
let mobileNavSideBar = document.querySelector(".mobile-nav-sidebar");
let mobileNavSideCloseBtn = document.querySelector(".mobile-nav-close-btn");

mobileNavLinesBtn.addEventListener("click", () => {
  mobileNavSideBar.style.top = "0";
});

mobileNavSideCloseBtn.addEventListener("click", () => {
  mobileNavSideBar.style.top = "-200%";
});
if (document.querySelector(".mobile-nav-translation")) {
  let mobileNavTranslation = document.querySelector(".mobile-nav-translation");
  let mobileNavTranslationExpand = document.querySelector(".mobile-nav-translation-service-expand");
  let mobileNavTranslationExpandBack = document.querySelector(".translation-expand-back-btn");
  let mobileNavTranslationExpandClose = document.querySelector(".mobile-nav-translation-expand-close-btn");
  mobileNavTranslation.addEventListener("click", () => {
    mobileNavSideBar.style.left = "-100%";
    mobileNavTranslationExpand.style.right = "0";
    mobileNavTranslationExpand.style.position = "absolute";
  });
  mobileNavTranslationExpandBack.addEventListener("click", () => {
    mobileNavSideBar.style.left = "0%";
    mobileNavTranslationExpand.style.right = "-100%";
    mobileNavTranslationExpand.style.position = "fixed";
  });
  mobileNavTranslationExpandClose.addEventListener("click", () => {
    mobileNavSideBar.style.left = "-100%";
    mobileNavSideBar.style.top = "-200%";
    mobileNavTranslationExpand.style.position = "fixed";

    setTimeout(() => {
      mobileNavTranslationExpand.style.right = "-100%";
      mobileNavSideBar.style.left = "0";
    }, 200);
  });
}
// Faq Read More Functionality
let faqReadBtn = document.querySelectorAll(".faq-read-btn");

document.addEventListener("click", (e) => {
  // Check if the clicked element is a faq-read-btn
  if (e.target.classList.contains("faq-read-btn")) {
    let parent = e.target.parentElement;
    let moreText = parent.querySelector(".faq-more-text");

    // Hide all other more text and display Read More button
    faqReadBtn.forEach((ele) => {
      let text = ele.parentElement.querySelector(".faq-more-text");
      text.style.display = "none";
      ele.style.display = "inline";
      ele.innerText = "Read More";
    });

    // Display the current more text and hide the Read More button
    moreText.style.display = "inline";
    e.target.style.display = "none";
  } else {
    // Click happened outside the faq-read-btn
    // Hide all more text and display Read More button
    faqReadBtn.forEach((ele) => {
      let text = ele.parentElement.querySelector(".faq-more-text");
      text.style.display = "none";
      ele.style.display = "inline";
      ele.innerText = "Read More";
    });
  }
});

let homePartnerPrevBtn = document.querySelector(".home-partner-card-prev-slide");
let homePartnerNextBtn = document.querySelector(".home-partner-card-next-slide");
let homePricePrevBtn = document.querySelector(".price-card-prev-slide");
let homePriceNextBtn = document.querySelector(".price-card-next-slide");
let homeFeedbackPrevBtn = document.querySelector(".home-feedback-card-prev-slide");
let homeFeedbackNextBtn = document.querySelector(".home-feedback-card-next-slide");
let homeArticleCardPrevBtn = document.querySelector(".home-card-prev-slide");
let homeArticleCardNextBtn = document.querySelector(".home-card-next-slide");

let blogHomeTopPostPrevBtn = document.querySelector(".blog-home-card-prev-slide");
let blogHomeTopPostNextBtn = document.querySelector(".blog-home-card-next-slide");

// Home Partners Next Slide Btn
function partnerNextSlideBtn() {
  if (homePartnerNextBtn.classList.contains("swiper-button-disabled")) {
    homePartnerNextBtn.innerHTML = `<circle cx="28" cy="28" r="28" transform="matrix(-1 0 0 1 56 0.498047)" fill="#383F99"
    fill-opacity="0.08" />
<path
    d="M25.5489 34.2808C25.6717 34.3952 25.7702 34.5332 25.8385 34.6866C25.9069 34.8399 25.9436 35.0054 25.9466 35.1733C25.9495 35.3411 25.9186 35.5078 25.8558 35.6635C25.7929 35.8191 25.6993 35.9605 25.5806 36.0792C25.4619 36.1979 25.3205 36.2915 25.1649 36.3543C25.0092 36.4172 24.8425 36.4481 24.6747 36.4451C24.5069 36.4422 24.3413 36.4054 24.188 36.3371C24.0347 36.2688 23.8967 36.1703 23.7822 36.0475L17.1156 29.3808C16.8815 29.1464 16.75 28.8287 16.75 28.4975C16.75 28.1662 16.8815 27.8485 17.1156 27.6141L23.7822 20.9475C23.8967 20.8247 24.0347 20.7261 24.188 20.6578C24.3413 20.5895 24.5069 20.5528 24.6747 20.5498C24.8425 20.5469 25.0092 20.5777 25.1649 20.6406C25.3205 20.7035 25.4619 20.797 25.5806 20.9157C25.6993 21.0344 25.7929 21.1758 25.8558 21.3315C25.9186 21.4871 25.9495 21.6538 25.9466 21.8217C25.9436 21.9895 25.9069 22.155 25.8385 22.3084C25.7702 22.4617 25.6717 22.5997 25.5489 22.7141L21.0156 27.2475H37.1656C37.4971 27.2475 37.815 27.3792 38.0495 27.6136C38.2839 27.848 38.4156 28.1659 38.4156 28.4975C38.4156 28.829 38.2839 29.1469 38.0495 29.3813C37.815 29.6158 37.4971 29.7475 37.1656 29.7475H21.0156L25.5489 34.2808Z"
    fill="#383F99" />`;
    homePartnerNextBtn.style.transform = "rotate(180deg)";
  }
  if (!homePartnerNextBtn.classList.contains("swiper-button-disabled")) {
    homePartnerNextBtn.innerHTML = `<circle cx="28" cy="28.498" r="28" fill="#383F99" />
    <path
        d="M30.4511 34.2808C30.3283 34.3952 30.2298 34.5332 30.1615 34.6866C30.0931 34.8399 30.0564 35.0054 30.0534 35.1733C30.0505 35.3411 30.0814 35.5078 30.1442 35.6635C30.2071 35.8191 30.3007 35.9605 30.4194 36.0792C30.5381 36.1979 30.6795 36.2915 30.8351 36.3543C30.9908 36.4172 31.1575 36.4481 31.3253 36.4451C31.4931 36.4422 31.6587 36.4054 31.812 36.3371C31.9653 36.2688 32.1033 36.1703 32.2178 36.0475L38.8844 29.3808C39.1185 29.1464 39.25 28.8287 39.25 28.4975C39.25 28.1662 39.1185 27.8485 38.8844 27.6141L32.2178 20.9475C32.1033 20.8247 31.9653 20.7261 31.812 20.6578C31.6587 20.5895 31.4931 20.5528 31.3253 20.5498C31.1575 20.5469 30.9908 20.5777 30.8351 20.6406C30.6795 20.7035 30.5381 20.797 30.4194 20.9157C30.3007 21.0344 30.2071 21.1758 30.1442 21.3315C30.0814 21.4871 30.0505 21.6538 30.0534 21.8217C30.0564 21.9895 30.0931 22.155 30.1615 22.3084C30.2298 22.4617 30.3283 22.5997 30.4511 22.7141L34.9844 27.2475H18.8344C18.5029 27.2475 18.185 27.3792 17.9505 27.6136C17.7161 27.848 17.5844 28.1659 17.5844 28.4975C17.5844 28.829 17.7161 29.1469 17.9505 29.3813C18.185 29.6158 18.5029 29.7475 18.8344 29.7475H34.9844L30.4511 34.2808Z"
        fill="white" />`;
    homePartnerNextBtn.style.transform = "rotate(0deg)";
  }
}
// Home Partners Prev Slide Btn
function partnerPrevSlideBtn() {
  if (homePartnerPrevBtn.classList.contains("swiper-button-disabled")) {
    homePartnerPrevBtn.innerHTML = `<circle cx="28" cy="28" r="28" transform="matrix(-1 0 0 1 56 0.498047)" fill="#383F99"
    fill-opacity="0.08" />
<path
    d="M25.5489 34.2808C25.6717 34.3952 25.7702 34.5332 25.8385 34.6866C25.9069 34.8399 25.9436 35.0054 25.9466 35.1733C25.9495 35.3411 25.9186 35.5078 25.8558 35.6635C25.7929 35.8191 25.6993 35.9605 25.5806 36.0792C25.4619 36.1979 25.3205 36.2915 25.1649 36.3543C25.0092 36.4172 24.8425 36.4481 24.6747 36.4451C24.5069 36.4422 24.3413 36.4054 24.188 36.3371C24.0347 36.2688 23.8967 36.1703 23.7822 36.0475L17.1156 29.3808C16.8815 29.1464 16.75 28.8287 16.75 28.4975C16.75 28.1662 16.8815 27.8485 17.1156 27.6141L23.7822 20.9475C23.8967 20.8247 24.0347 20.7261 24.188 20.6578C24.3413 20.5895 24.5069 20.5528 24.6747 20.5498C24.8425 20.5469 25.0092 20.5777 25.1649 20.6406C25.3205 20.7035 25.4619 20.797 25.5806 20.9157C25.6993 21.0344 25.7929 21.1758 25.8558 21.3315C25.9186 21.4871 25.9495 21.6538 25.9466 21.8217C25.9436 21.9895 25.9069 22.155 25.8385 22.3084C25.7702 22.4617 25.6717 22.5997 25.5489 22.7141L21.0156 27.2475H37.1656C37.4971 27.2475 37.815 27.3792 38.0495 27.6136C38.2839 27.848 38.4156 28.1659 38.4156 28.4975C38.4156 28.829 38.2839 29.1469 38.0495 29.3813C37.815 29.6158 37.4971 29.7475 37.1656 29.7475H21.0156L25.5489 34.2808Z"
    fill="#383F99" />`;
    homePartnerPrevBtn.style.transform = "rotate(360deg)";
  }
  if (!homePartnerPrevBtn.classList.contains("swiper-button-disabled")) {
    homePartnerPrevBtn.innerHTML = `<circle cx="28" cy="28.498" r="28" fill="#383F99" />
    <path
        d="M30.4511 34.2808C30.3283 34.3952 30.2298 34.5332 30.1615 34.6866C30.0931 34.8399 30.0564 35.0054 30.0534 35.1733C30.0505 35.3411 30.0814 35.5078 30.1442 35.6635C30.2071 35.8191 30.3007 35.9605 30.4194 36.0792C30.5381 36.1979 30.6795 36.2915 30.8351 36.3543C30.9908 36.4172 31.1575 36.4481 31.3253 36.4451C31.4931 36.4422 31.6587 36.4054 31.812 36.3371C31.9653 36.2688 32.1033 36.1703 32.2178 36.0475L38.8844 29.3808C39.1185 29.1464 39.25 28.8287 39.25 28.4975C39.25 28.1662 39.1185 27.8485 38.8844 27.6141L32.2178 20.9475C32.1033 20.8247 31.9653 20.7261 31.812 20.6578C31.6587 20.5895 31.4931 20.5528 31.3253 20.5498C31.1575 20.5469 30.9908 20.5777 30.8351 20.6406C30.6795 20.7035 30.5381 20.797 30.4194 20.9157C30.3007 21.0344 30.2071 21.1758 30.1442 21.3315C30.0814 21.4871 30.0505 21.6538 30.0534 21.8217C30.0564 21.9895 30.0931 22.155 30.1615 22.3084C30.2298 22.4617 30.3283 22.5997 30.4511 22.7141L34.9844 27.2475H18.8344C18.5029 27.2475 18.185 27.3792 17.9505 27.6136C17.7161 27.848 17.5844 28.1659 17.5844 28.4975C17.5844 28.829 17.7161 29.1469 17.9505 29.3813C18.185 29.6158 18.5029 29.7475 18.8344 29.7475H34.9844L30.4511 34.2808Z"
        fill="white" />`;
    homePartnerPrevBtn.style.transform = "rotate(180deg)";
  }
}

// Home Price Next Slide Btn
function priceCardNextSlideBtn() {
  if (homePriceNextBtn.classList.contains("swiper-button-disabled")) {
    homePriceNextBtn.innerHTML = `<circle cx="28" cy="28" r="28" transform="matrix(-1 0 0 1 56 0.498047)" fill="#383F99"
    fill-opacity="0.08" />
<path
    d="M25.5489 34.2808C25.6717 34.3952 25.7702 34.5332 25.8385 34.6866C25.9069 34.8399 25.9436 35.0054 25.9466 35.1733C25.9495 35.3411 25.9186 35.5078 25.8558 35.6635C25.7929 35.8191 25.6993 35.9605 25.5806 36.0792C25.4619 36.1979 25.3205 36.2915 25.1649 36.3543C25.0092 36.4172 24.8425 36.4481 24.6747 36.4451C24.5069 36.4422 24.3413 36.4054 24.188 36.3371C24.0347 36.2688 23.8967 36.1703 23.7822 36.0475L17.1156 29.3808C16.8815 29.1464 16.75 28.8287 16.75 28.4975C16.75 28.1662 16.8815 27.8485 17.1156 27.6141L23.7822 20.9475C23.8967 20.8247 24.0347 20.7261 24.188 20.6578C24.3413 20.5895 24.5069 20.5528 24.6747 20.5498C24.8425 20.5469 25.0092 20.5777 25.1649 20.6406C25.3205 20.7035 25.4619 20.797 25.5806 20.9157C25.6993 21.0344 25.7929 21.1758 25.8558 21.3315C25.9186 21.4871 25.9495 21.6538 25.9466 21.8217C25.9436 21.9895 25.9069 22.155 25.8385 22.3084C25.7702 22.4617 25.6717 22.5997 25.5489 22.7141L21.0156 27.2475H37.1656C37.4971 27.2475 37.815 27.3792 38.0495 27.6136C38.2839 27.848 38.4156 28.1659 38.4156 28.4975C38.4156 28.829 38.2839 29.1469 38.0495 29.3813C37.815 29.6158 37.4971 29.7475 37.1656 29.7475H21.0156L25.5489 34.2808Z"
    fill="#383F99" />`;
    homePriceNextBtn.style.transform = "rotate(180deg)";
  }
  if (!homePriceNextBtn.classList.contains("swiper-button-disabled")) {
    homePriceNextBtn.innerHTML = `<circle cx="28" cy="28.498" r="28" fill="#383F99" />
    <path
        d="M30.4511 34.2808C30.3283 34.3952 30.2298 34.5332 30.1615 34.6866C30.0931 34.8399 30.0564 35.0054 30.0534 35.1733C30.0505 35.3411 30.0814 35.5078 30.1442 35.6635C30.2071 35.8191 30.3007 35.9605 30.4194 36.0792C30.5381 36.1979 30.6795 36.2915 30.8351 36.3543C30.9908 36.4172 31.1575 36.4481 31.3253 36.4451C31.4931 36.4422 31.6587 36.4054 31.812 36.3371C31.9653 36.2688 32.1033 36.1703 32.2178 36.0475L38.8844 29.3808C39.1185 29.1464 39.25 28.8287 39.25 28.4975C39.25 28.1662 39.1185 27.8485 38.8844 27.6141L32.2178 20.9475C32.1033 20.8247 31.9653 20.7261 31.812 20.6578C31.6587 20.5895 31.4931 20.5528 31.3253 20.5498C31.1575 20.5469 30.9908 20.5777 30.8351 20.6406C30.6795 20.7035 30.5381 20.797 30.4194 20.9157C30.3007 21.0344 30.2071 21.1758 30.1442 21.3315C30.0814 21.4871 30.0505 21.6538 30.0534 21.8217C30.0564 21.9895 30.0931 22.155 30.1615 22.3084C30.2298 22.4617 30.3283 22.5997 30.4511 22.7141L34.9844 27.2475H18.8344C18.5029 27.2475 18.185 27.3792 17.9505 27.6136C17.7161 27.848 17.5844 28.1659 17.5844 28.4975C17.5844 28.829 17.7161 29.1469 17.9505 29.3813C18.185 29.6158 18.5029 29.7475 18.8344 29.7475H34.9844L30.4511 34.2808Z"
        fill="white" />`;
    homePriceNextBtn.style.transform = "rotate(0deg)";
  }
}

// Home Price Prev Slide Btn
function priceCardPrevSlideBtn() {
  if (homePricePrevBtn.classList.contains("swiper-button-disabled")) {
    homePricePrevBtn.innerHTML = `<circle cx="28" cy="28" r="28" transform="matrix(-1 0 0 1 56 0.498047)" fill="#383F99"
    fill-opacity="0.08" />
<path
    d="M25.5489 34.2808C25.6717 34.3952 25.7702 34.5332 25.8385 34.6866C25.9069 34.8399 25.9436 35.0054 25.9466 35.1733C25.9495 35.3411 25.9186 35.5078 25.8558 35.6635C25.7929 35.8191 25.6993 35.9605 25.5806 36.0792C25.4619 36.1979 25.3205 36.2915 25.1649 36.3543C25.0092 36.4172 24.8425 36.4481 24.6747 36.4451C24.5069 36.4422 24.3413 36.4054 24.188 36.3371C24.0347 36.2688 23.8967 36.1703 23.7822 36.0475L17.1156 29.3808C16.8815 29.1464 16.75 28.8287 16.75 28.4975C16.75 28.1662 16.8815 27.8485 17.1156 27.6141L23.7822 20.9475C23.8967 20.8247 24.0347 20.7261 24.188 20.6578C24.3413 20.5895 24.5069 20.5528 24.6747 20.5498C24.8425 20.5469 25.0092 20.5777 25.1649 20.6406C25.3205 20.7035 25.4619 20.797 25.5806 20.9157C25.6993 21.0344 25.7929 21.1758 25.8558 21.3315C25.9186 21.4871 25.9495 21.6538 25.9466 21.8217C25.9436 21.9895 25.9069 22.155 25.8385 22.3084C25.7702 22.4617 25.6717 22.5997 25.5489 22.7141L21.0156 27.2475H37.1656C37.4971 27.2475 37.815 27.3792 38.0495 27.6136C38.2839 27.848 38.4156 28.1659 38.4156 28.4975C38.4156 28.829 38.2839 29.1469 38.0495 29.3813C37.815 29.6158 37.4971 29.7475 37.1656 29.7475H21.0156L25.5489 34.2808Z"
    fill="#383F99" />`;
    homePricePrevBtn.style.transform = "rotate(360deg)";
  }
  if (!homePricePrevBtn.classList.contains("swiper-button-disabled")) {
    homePricePrevBtn.innerHTML = `<circle cx="28" cy="28.498" r="28" fill="#383F99" />
    <path
        d="M30.4511 34.2808C30.3283 34.3952 30.2298 34.5332 30.1615 34.6866C30.0931 34.8399 30.0564 35.0054 30.0534 35.1733C30.0505 35.3411 30.0814 35.5078 30.1442 35.6635C30.2071 35.8191 30.3007 35.9605 30.4194 36.0792C30.5381 36.1979 30.6795 36.2915 30.8351 36.3543C30.9908 36.4172 31.1575 36.4481 31.3253 36.4451C31.4931 36.4422 31.6587 36.4054 31.812 36.3371C31.9653 36.2688 32.1033 36.1703 32.2178 36.0475L38.8844 29.3808C39.1185 29.1464 39.25 28.8287 39.25 28.4975C39.25 28.1662 39.1185 27.8485 38.8844 27.6141L32.2178 20.9475C32.1033 20.8247 31.9653 20.7261 31.812 20.6578C31.6587 20.5895 31.4931 20.5528 31.3253 20.5498C31.1575 20.5469 30.9908 20.5777 30.8351 20.6406C30.6795 20.7035 30.5381 20.797 30.4194 20.9157C30.3007 21.0344 30.2071 21.1758 30.1442 21.3315C30.0814 21.4871 30.0505 21.6538 30.0534 21.8217C30.0564 21.9895 30.0931 22.155 30.1615 22.3084C30.2298 22.4617 30.3283 22.5997 30.4511 22.7141L34.9844 27.2475H18.8344C18.5029 27.2475 18.185 27.3792 17.9505 27.6136C17.7161 27.848 17.5844 28.1659 17.5844 28.4975C17.5844 28.829 17.7161 29.1469 17.9505 29.3813C18.185 29.6158 18.5029 29.7475 18.8344 29.7475H34.9844L30.4511 34.2808Z"
        fill="white" />`;
    homePricePrevBtn.style.transform = "rotate(180deg)";
  }
}

// Home Feedback Next Slide Btn
function feedbackNextSlideBtn() {
  if (homeFeedbackNextBtn.classList.contains("swiper-button-disabled")) {
    homeFeedbackNextBtn.innerHTML = `<circle cx="28" cy="28" r="28" transform="matrix(-1 0 0 1 56 0.498047)" fill="#383F99"
    fill-opacity="0.08" />
<path
    d="M25.5489 34.2808C25.6717 34.3952 25.7702 34.5332 25.8385 34.6866C25.9069 34.8399 25.9436 35.0054 25.9466 35.1733C25.9495 35.3411 25.9186 35.5078 25.8558 35.6635C25.7929 35.8191 25.6993 35.9605 25.5806 36.0792C25.4619 36.1979 25.3205 36.2915 25.1649 36.3543C25.0092 36.4172 24.8425 36.4481 24.6747 36.4451C24.5069 36.4422 24.3413 36.4054 24.188 36.3371C24.0347 36.2688 23.8967 36.1703 23.7822 36.0475L17.1156 29.3808C16.8815 29.1464 16.75 28.8287 16.75 28.4975C16.75 28.1662 16.8815 27.8485 17.1156 27.6141L23.7822 20.9475C23.8967 20.8247 24.0347 20.7261 24.188 20.6578C24.3413 20.5895 24.5069 20.5528 24.6747 20.5498C24.8425 20.5469 25.0092 20.5777 25.1649 20.6406C25.3205 20.7035 25.4619 20.797 25.5806 20.9157C25.6993 21.0344 25.7929 21.1758 25.8558 21.3315C25.9186 21.4871 25.9495 21.6538 25.9466 21.8217C25.9436 21.9895 25.9069 22.155 25.8385 22.3084C25.7702 22.4617 25.6717 22.5997 25.5489 22.7141L21.0156 27.2475H37.1656C37.4971 27.2475 37.815 27.3792 38.0495 27.6136C38.2839 27.848 38.4156 28.1659 38.4156 28.4975C38.4156 28.829 38.2839 29.1469 38.0495 29.3813C37.815 29.6158 37.4971 29.7475 37.1656 29.7475H21.0156L25.5489 34.2808Z"
    fill="#383F99" />`;
    homeFeedbackNextBtn.style.transform = "rotate(180deg)";
  }
  if (!homeFeedbackNextBtn.classList.contains("swiper-button-disabled")) {
    homeFeedbackNextBtn.innerHTML = `<circle cx="28" cy="28.498" r="28" fill="#383F99" />
    <path
        d="M30.4511 34.2808C30.3283 34.3952 30.2298 34.5332 30.1615 34.6866C30.0931 34.8399 30.0564 35.0054 30.0534 35.1733C30.0505 35.3411 30.0814 35.5078 30.1442 35.6635C30.2071 35.8191 30.3007 35.9605 30.4194 36.0792C30.5381 36.1979 30.6795 36.2915 30.8351 36.3543C30.9908 36.4172 31.1575 36.4481 31.3253 36.4451C31.4931 36.4422 31.6587 36.4054 31.812 36.3371C31.9653 36.2688 32.1033 36.1703 32.2178 36.0475L38.8844 29.3808C39.1185 29.1464 39.25 28.8287 39.25 28.4975C39.25 28.1662 39.1185 27.8485 38.8844 27.6141L32.2178 20.9475C32.1033 20.8247 31.9653 20.7261 31.812 20.6578C31.6587 20.5895 31.4931 20.5528 31.3253 20.5498C31.1575 20.5469 30.9908 20.5777 30.8351 20.6406C30.6795 20.7035 30.5381 20.797 30.4194 20.9157C30.3007 21.0344 30.2071 21.1758 30.1442 21.3315C30.0814 21.4871 30.0505 21.6538 30.0534 21.8217C30.0564 21.9895 30.0931 22.155 30.1615 22.3084C30.2298 22.4617 30.3283 22.5997 30.4511 22.7141L34.9844 27.2475H18.8344C18.5029 27.2475 18.185 27.3792 17.9505 27.6136C17.7161 27.848 17.5844 28.1659 17.5844 28.4975C17.5844 28.829 17.7161 29.1469 17.9505 29.3813C18.185 29.6158 18.5029 29.7475 18.8344 29.7475H34.9844L30.4511 34.2808Z"
        fill="white" />`;
    homeFeedbackNextBtn.style.transform = "rotate(0deg)";
  }
}

// Home Feedback Prev Slide Btn
function feedbackPrevSlideBtn() {
  if (homeFeedbackPrevBtn.classList.contains("swiper-button-disabled")) {
    homeFeedbackPrevBtn.innerHTML = `<circle cx="28" cy="28" r="28" transform="matrix(-1 0 0 1 56 0.498047)" fill="#383F99"
    fill-opacity="0.08" />
<path
    d="M25.5489 34.2808C25.6717 34.3952 25.7702 34.5332 25.8385 34.6866C25.9069 34.8399 25.9436 35.0054 25.9466 35.1733C25.9495 35.3411 25.9186 35.5078 25.8558 35.6635C25.7929 35.8191 25.6993 35.9605 25.5806 36.0792C25.4619 36.1979 25.3205 36.2915 25.1649 36.3543C25.0092 36.4172 24.8425 36.4481 24.6747 36.4451C24.5069 36.4422 24.3413 36.4054 24.188 36.3371C24.0347 36.2688 23.8967 36.1703 23.7822 36.0475L17.1156 29.3808C16.8815 29.1464 16.75 28.8287 16.75 28.4975C16.75 28.1662 16.8815 27.8485 17.1156 27.6141L23.7822 20.9475C23.8967 20.8247 24.0347 20.7261 24.188 20.6578C24.3413 20.5895 24.5069 20.5528 24.6747 20.5498C24.8425 20.5469 25.0092 20.5777 25.1649 20.6406C25.3205 20.7035 25.4619 20.797 25.5806 20.9157C25.6993 21.0344 25.7929 21.1758 25.8558 21.3315C25.9186 21.4871 25.9495 21.6538 25.9466 21.8217C25.9436 21.9895 25.9069 22.155 25.8385 22.3084C25.7702 22.4617 25.6717 22.5997 25.5489 22.7141L21.0156 27.2475H37.1656C37.4971 27.2475 37.815 27.3792 38.0495 27.6136C38.2839 27.848 38.4156 28.1659 38.4156 28.4975C38.4156 28.829 38.2839 29.1469 38.0495 29.3813C37.815 29.6158 37.4971 29.7475 37.1656 29.7475H21.0156L25.5489 34.2808Z"
    fill="#383F99" />`;
    homeFeedbackPrevBtn.style.transform = "rotate(360deg)";
  }
  if (!homeFeedbackPrevBtn.classList.contains("swiper-button-disabled")) {
    homeFeedbackPrevBtn.innerHTML = `<circle cx="28" cy="28.498" r="28" fill="#383F99" />
    <path
        d="M30.4511 34.2808C30.3283 34.3952 30.2298 34.5332 30.1615 34.6866C30.0931 34.8399 30.0564 35.0054 30.0534 35.1733C30.0505 35.3411 30.0814 35.5078 30.1442 35.6635C30.2071 35.8191 30.3007 35.9605 30.4194 36.0792C30.5381 36.1979 30.6795 36.2915 30.8351 36.3543C30.9908 36.4172 31.1575 36.4481 31.3253 36.4451C31.4931 36.4422 31.6587 36.4054 31.812 36.3371C31.9653 36.2688 32.1033 36.1703 32.2178 36.0475L38.8844 29.3808C39.1185 29.1464 39.25 28.8287 39.25 28.4975C39.25 28.1662 39.1185 27.8485 38.8844 27.6141L32.2178 20.9475C32.1033 20.8247 31.9653 20.7261 31.812 20.6578C31.6587 20.5895 31.4931 20.5528 31.3253 20.5498C31.1575 20.5469 30.9908 20.5777 30.8351 20.6406C30.6795 20.7035 30.5381 20.797 30.4194 20.9157C30.3007 21.0344 30.2071 21.1758 30.1442 21.3315C30.0814 21.4871 30.0505 21.6538 30.0534 21.8217C30.0564 21.9895 30.0931 22.155 30.1615 22.3084C30.2298 22.4617 30.3283 22.5997 30.4511 22.7141L34.9844 27.2475H18.8344C18.5029 27.2475 18.185 27.3792 17.9505 27.6136C17.7161 27.848 17.5844 28.1659 17.5844 28.4975C17.5844 28.829 17.7161 29.1469 17.9505 29.3813C18.185 29.6158 18.5029 29.7475 18.8344 29.7475H34.9844L30.4511 34.2808Z"
        fill="white" />`;
    homeFeedbackPrevBtn.style.transform = "rotate(180deg)";
  }
}

// Home Blogs Next Slide Btn
function blogNextSlideBtn() {
  if (homeArticleCardNextBtn.classList.contains("swiper-button-disabled")) {
    homeArticleCardNextBtn.innerHTML = `<circle cx="28" cy="28" r="28" transform="matrix(-1 0 0 1 56 0.498047)" fill="#383F99"
    fill-opacity="0.08" />
<path
    d="M25.5489 34.2808C25.6717 34.3952 25.7702 34.5332 25.8385 34.6866C25.9069 34.8399 25.9436 35.0054 25.9466 35.1733C25.9495 35.3411 25.9186 35.5078 25.8558 35.6635C25.7929 35.8191 25.6993 35.9605 25.5806 36.0792C25.4619 36.1979 25.3205 36.2915 25.1649 36.3543C25.0092 36.4172 24.8425 36.4481 24.6747 36.4451C24.5069 36.4422 24.3413 36.4054 24.188 36.3371C24.0347 36.2688 23.8967 36.1703 23.7822 36.0475L17.1156 29.3808C16.8815 29.1464 16.75 28.8287 16.75 28.4975C16.75 28.1662 16.8815 27.8485 17.1156 27.6141L23.7822 20.9475C23.8967 20.8247 24.0347 20.7261 24.188 20.6578C24.3413 20.5895 24.5069 20.5528 24.6747 20.5498C24.8425 20.5469 25.0092 20.5777 25.1649 20.6406C25.3205 20.7035 25.4619 20.797 25.5806 20.9157C25.6993 21.0344 25.7929 21.1758 25.8558 21.3315C25.9186 21.4871 25.9495 21.6538 25.9466 21.8217C25.9436 21.9895 25.9069 22.155 25.8385 22.3084C25.7702 22.4617 25.6717 22.5997 25.5489 22.7141L21.0156 27.2475H37.1656C37.4971 27.2475 37.815 27.3792 38.0495 27.6136C38.2839 27.848 38.4156 28.1659 38.4156 28.4975C38.4156 28.829 38.2839 29.1469 38.0495 29.3813C37.815 29.6158 37.4971 29.7475 37.1656 29.7475H21.0156L25.5489 34.2808Z"
    fill="#383F99" />`;
    homeArticleCardNextBtn.style.transform = "rotate(180deg)";
  }
  if (!homeArticleCardNextBtn.classList.contains("swiper-button-disabled")) {
    homeArticleCardNextBtn.innerHTML = `    <circle cx="28" cy="28.498" r="28" fill="#383F99" />
    <path
        d="M30.4511 34.2808C30.3283 34.3952 30.2298 34.5332 30.1615 34.6866C30.0931 34.8399 30.0564 35.0054 30.0534 35.1733C30.0505 35.3411 30.0814 35.5078 30.1442 35.6635C30.2071 35.8191 30.3007 35.9605 30.4194 36.0792C30.5381 36.1979 30.6795 36.2915 30.8351 36.3543C30.9908 36.4172 31.1575 36.4481 31.3253 36.4451C31.4931 36.4422 31.6587 36.4054 31.812 36.3371C31.9653 36.2688 32.1033 36.1703 32.2178 36.0475L38.8844 29.3808C39.1185 29.1464 39.25 28.8287 39.25 28.4975C39.25 28.1662 39.1185 27.8485 38.8844 27.6141L32.2178 20.9475C32.1033 20.8247 31.9653 20.7261 31.812 20.6578C31.6587 20.5895 31.4931 20.5528 31.3253 20.5498C31.1575 20.5469 30.9908 20.5777 30.8351 20.6406C30.6795 20.7035 30.5381 20.797 30.4194 20.9157C30.3007 21.0344 30.2071 21.1758 30.1442 21.3315C30.0814 21.4871 30.0505 21.6538 30.0534 21.8217C30.0564 21.9895 30.0931 22.155 30.1615 22.3084C30.2298 22.4617 30.3283 22.5997 30.4511 22.7141L34.9844 27.2475H18.8344C18.5029 27.2475 18.185 27.3792 17.9505 27.6136C17.7161 27.848 17.5844 28.1659 17.5844 28.4975C17.5844 28.829 17.7161 29.1469 17.9505 29.3813C18.185 29.6158 18.5029 29.7475 18.8344 29.7475H34.9844L30.4511 34.2808Z"
        fill="white" />`;
    homeArticleCardNextBtn.style.transform = "rotate(0deg)";
  }
}

// Home Blogs Prev Slide Btn
function blogPrevSlideBtn() {
  if (homeArticleCardPrevBtn.classList.contains("swiper-button-disabled")) {
    homeArticleCardPrevBtn.innerHTML = `<circle cx="28" cy="28" r="28" transform="matrix(-1 0 0 1 56 0.498047)" fill="#383F99"
    fill-opacity="0.08" />
<path
    d="M25.5489 34.2808C25.6717 34.3952 25.7702 34.5332 25.8385 34.6866C25.9069 34.8399 25.9436 35.0054 25.9466 35.1733C25.9495 35.3411 25.9186 35.5078 25.8558 35.6635C25.7929 35.8191 25.6993 35.9605 25.5806 36.0792C25.4619 36.1979 25.3205 36.2915 25.1649 36.3543C25.0092 36.4172 24.8425 36.4481 24.6747 36.4451C24.5069 36.4422 24.3413 36.4054 24.188 36.3371C24.0347 36.2688 23.8967 36.1703 23.7822 36.0475L17.1156 29.3808C16.8815 29.1464 16.75 28.8287 16.75 28.4975C16.75 28.1662 16.8815 27.8485 17.1156 27.6141L23.7822 20.9475C23.8967 20.8247 24.0347 20.7261 24.188 20.6578C24.3413 20.5895 24.5069 20.5528 24.6747 20.5498C24.8425 20.5469 25.0092 20.5777 25.1649 20.6406C25.3205 20.7035 25.4619 20.797 25.5806 20.9157C25.6993 21.0344 25.7929 21.1758 25.8558 21.3315C25.9186 21.4871 25.9495 21.6538 25.9466 21.8217C25.9436 21.9895 25.9069 22.155 25.8385 22.3084C25.7702 22.4617 25.6717 22.5997 25.5489 22.7141L21.0156 27.2475H37.1656C37.4971 27.2475 37.815 27.3792 38.0495 27.6136C38.2839 27.848 38.4156 28.1659 38.4156 28.4975C38.4156 28.829 38.2839 29.1469 38.0495 29.3813C37.815 29.6158 37.4971 29.7475 37.1656 29.7475H21.0156L25.5489 34.2808Z"
    fill="#383F99" />`;
    homeArticleCardPrevBtn.style.transform = "rotate(360deg)";
  }
  if (!homeArticleCardPrevBtn.classList.contains("swiper-button-disabled")) {
    homeArticleCardPrevBtn.innerHTML = `<circle cx="28" cy="28.498" r="28" fill="#383F99" />
    <path
        d="M30.4511 34.2808C30.3283 34.3952 30.2298 34.5332 30.1615 34.6866C30.0931 34.8399 30.0564 35.0054 30.0534 35.1733C30.0505 35.3411 30.0814 35.5078 30.1442 35.6635C30.2071 35.8191 30.3007 35.9605 30.4194 36.0792C30.5381 36.1979 30.6795 36.2915 30.8351 36.3543C30.9908 36.4172 31.1575 36.4481 31.3253 36.4451C31.4931 36.4422 31.6587 36.4054 31.812 36.3371C31.9653 36.2688 32.1033 36.1703 32.2178 36.0475L38.8844 29.3808C39.1185 29.1464 39.25 28.8287 39.25 28.4975C39.25 28.1662 39.1185 27.8485 38.8844 27.6141L32.2178 20.9475C32.1033 20.8247 31.9653 20.7261 31.812 20.6578C31.6587 20.5895 31.4931 20.5528 31.3253 20.5498C31.1575 20.5469 30.9908 20.5777 30.8351 20.6406C30.6795 20.7035 30.5381 20.797 30.4194 20.9157C30.3007 21.0344 30.2071 21.1758 30.1442 21.3315C30.0814 21.4871 30.0505 21.6538 30.0534 21.8217C30.0564 21.9895 30.0931 22.155 30.1615 22.3084C30.2298 22.4617 30.3283 22.5997 30.4511 22.7141L34.9844 27.2475H18.8344C18.5029 27.2475 18.185 27.3792 17.9505 27.6136C17.7161 27.848 17.5844 28.1659 17.5844 28.4975C17.5844 28.829 17.7161 29.1469 17.9505 29.3813C18.185 29.6158 18.5029 29.7475 18.8344 29.7475H34.9844L30.4511 34.2808Z"
        fill="white" />`;
    homeArticleCardPrevBtn.style.transform = "rotate(180deg)";
  }
}
// Blog Home Top Post Next Slide Btn
function blogHomeNextSlideBtn() {
  if (blogHomeTopPostNextBtn.classList.contains("swiper-button-disabled")) {
    blogHomeTopPostNextBtn.innerHTML = `<circle cx="28" cy="28" r="28" transform="matrix(-1 0 0 1 56 0.498047)" fill="#383F99"
    fill-opacity="0.08" />
<path
    d="M25.5489 34.2808C25.6717 34.3952 25.7702 34.5332 25.8385 34.6866C25.9069 34.8399 25.9436 35.0054 25.9466 35.1733C25.9495 35.3411 25.9186 35.5078 25.8558 35.6635C25.7929 35.8191 25.6993 35.9605 25.5806 36.0792C25.4619 36.1979 25.3205 36.2915 25.1649 36.3543C25.0092 36.4172 24.8425 36.4481 24.6747 36.4451C24.5069 36.4422 24.3413 36.4054 24.188 36.3371C24.0347 36.2688 23.8967 36.1703 23.7822 36.0475L17.1156 29.3808C16.8815 29.1464 16.75 28.8287 16.75 28.4975C16.75 28.1662 16.8815 27.8485 17.1156 27.6141L23.7822 20.9475C23.8967 20.8247 24.0347 20.7261 24.188 20.6578C24.3413 20.5895 24.5069 20.5528 24.6747 20.5498C24.8425 20.5469 25.0092 20.5777 25.1649 20.6406C25.3205 20.7035 25.4619 20.797 25.5806 20.9157C25.6993 21.0344 25.7929 21.1758 25.8558 21.3315C25.9186 21.4871 25.9495 21.6538 25.9466 21.8217C25.9436 21.9895 25.9069 22.155 25.8385 22.3084C25.7702 22.4617 25.6717 22.5997 25.5489 22.7141L21.0156 27.2475H37.1656C37.4971 27.2475 37.815 27.3792 38.0495 27.6136C38.2839 27.848 38.4156 28.1659 38.4156 28.4975C38.4156 28.829 38.2839 29.1469 38.0495 29.3813C37.815 29.6158 37.4971 29.7475 37.1656 29.7475H21.0156L25.5489 34.2808Z"
    fill="#383F99" />`;
    blogHomeTopPostNextBtn.style.transform = "rotate(180deg)";
  }
  if (!blogHomeTopPostNextBtn.classList.contains("swiper-button-disabled")) {
    blogHomeTopPostNextBtn.innerHTML = `    <circle cx="28" cy="28.498" r="28" fill="#383F99" />
    <path
        d="M30.4511 34.2808C30.3283 34.3952 30.2298 34.5332 30.1615 34.6866C30.0931 34.8399 30.0564 35.0054 30.0534 35.1733C30.0505 35.3411 30.0814 35.5078 30.1442 35.6635C30.2071 35.8191 30.3007 35.9605 30.4194 36.0792C30.5381 36.1979 30.6795 36.2915 30.8351 36.3543C30.9908 36.4172 31.1575 36.4481 31.3253 36.4451C31.4931 36.4422 31.6587 36.4054 31.812 36.3371C31.9653 36.2688 32.1033 36.1703 32.2178 36.0475L38.8844 29.3808C39.1185 29.1464 39.25 28.8287 39.25 28.4975C39.25 28.1662 39.1185 27.8485 38.8844 27.6141L32.2178 20.9475C32.1033 20.8247 31.9653 20.7261 31.812 20.6578C31.6587 20.5895 31.4931 20.5528 31.3253 20.5498C31.1575 20.5469 30.9908 20.5777 30.8351 20.6406C30.6795 20.7035 30.5381 20.797 30.4194 20.9157C30.3007 21.0344 30.2071 21.1758 30.1442 21.3315C30.0814 21.4871 30.0505 21.6538 30.0534 21.8217C30.0564 21.9895 30.0931 22.155 30.1615 22.3084C30.2298 22.4617 30.3283 22.5997 30.4511 22.7141L34.9844 27.2475H18.8344C18.5029 27.2475 18.185 27.3792 17.9505 27.6136C17.7161 27.848 17.5844 28.1659 17.5844 28.4975C17.5844 28.829 17.7161 29.1469 17.9505 29.3813C18.185 29.6158 18.5029 29.7475 18.8344 29.7475H34.9844L30.4511 34.2808Z"
        fill="white" />`;
    blogHomeTopPostNextBtn.style.transform = "rotate(0deg)";
  }
}

// Blog Home Top Post Prev Slide Btn
function blogHomePrevSlideBtn() {
  if (blogHomeTopPostPrevBtn.classList.contains("swiper-button-disabled")) {
    blogHomeTopPostPrevBtn.innerHTML = `<circle cx="28" cy="28" r="28" transform="matrix(-1 0 0 1 56 0.498047)" fill="#383F99"
    fill-opacity="0.08" />
<path
    d="M25.5489 34.2808C25.6717 34.3952 25.7702 34.5332 25.8385 34.6866C25.9069 34.8399 25.9436 35.0054 25.9466 35.1733C25.9495 35.3411 25.9186 35.5078 25.8558 35.6635C25.7929 35.8191 25.6993 35.9605 25.5806 36.0792C25.4619 36.1979 25.3205 36.2915 25.1649 36.3543C25.0092 36.4172 24.8425 36.4481 24.6747 36.4451C24.5069 36.4422 24.3413 36.4054 24.188 36.3371C24.0347 36.2688 23.8967 36.1703 23.7822 36.0475L17.1156 29.3808C16.8815 29.1464 16.75 28.8287 16.75 28.4975C16.75 28.1662 16.8815 27.8485 17.1156 27.6141L23.7822 20.9475C23.8967 20.8247 24.0347 20.7261 24.188 20.6578C24.3413 20.5895 24.5069 20.5528 24.6747 20.5498C24.8425 20.5469 25.0092 20.5777 25.1649 20.6406C25.3205 20.7035 25.4619 20.797 25.5806 20.9157C25.6993 21.0344 25.7929 21.1758 25.8558 21.3315C25.9186 21.4871 25.9495 21.6538 25.9466 21.8217C25.9436 21.9895 25.9069 22.155 25.8385 22.3084C25.7702 22.4617 25.6717 22.5997 25.5489 22.7141L21.0156 27.2475H37.1656C37.4971 27.2475 37.815 27.3792 38.0495 27.6136C38.2839 27.848 38.4156 28.1659 38.4156 28.4975C38.4156 28.829 38.2839 29.1469 38.0495 29.3813C37.815 29.6158 37.4971 29.7475 37.1656 29.7475H21.0156L25.5489 34.2808Z"
    fill="#383F99" />`;
    blogHomeTopPostPrevBtn.style.transform = "rotate(360deg)";
  }
  if (!blogHomeTopPostPrevBtn.classList.contains("swiper-button-disabled")) {
    blogHomeTopPostPrevBtn.innerHTML = `<circle cx="28" cy="28.498" r="28" fill="#383F99" />
    <path
        d="M30.4511 34.2808C30.3283 34.3952 30.2298 34.5332 30.1615 34.6866C30.0931 34.8399 30.0564 35.0054 30.0534 35.1733C30.0505 35.3411 30.0814 35.5078 30.1442 35.6635C30.2071 35.8191 30.3007 35.9605 30.4194 36.0792C30.5381 36.1979 30.6795 36.2915 30.8351 36.3543C30.9908 36.4172 31.1575 36.4481 31.3253 36.4451C31.4931 36.4422 31.6587 36.4054 31.812 36.3371C31.9653 36.2688 32.1033 36.1703 32.2178 36.0475L38.8844 29.3808C39.1185 29.1464 39.25 28.8287 39.25 28.4975C39.25 28.1662 39.1185 27.8485 38.8844 27.6141L32.2178 20.9475C32.1033 20.8247 31.9653 20.7261 31.812 20.6578C31.6587 20.5895 31.4931 20.5528 31.3253 20.5498C31.1575 20.5469 30.9908 20.5777 30.8351 20.6406C30.6795 20.7035 30.5381 20.797 30.4194 20.9157C30.3007 21.0344 30.2071 21.1758 30.1442 21.3315C30.0814 21.4871 30.0505 21.6538 30.0534 21.8217C30.0564 21.9895 30.0931 22.155 30.1615 22.3084C30.2298 22.4617 30.3283 22.5997 30.4511 22.7141L34.9844 27.2475H18.8344C18.5029 27.2475 18.185 27.3792 17.9505 27.6136C17.7161 27.848 17.5844 28.1659 17.5844 28.4975C17.5844 28.829 17.7161 29.1469 17.9505 29.3813C18.185 29.6158 18.5029 29.7475 18.8344 29.7475H34.9844L30.4511 34.2808Z"
        fill="white" />`;
    blogHomeTopPostPrevBtn.style.transform = "rotate(180deg)";
  }
}

// Partners
if (document.querySelector(".home-partner-card-prev-slide")) {
  homePartnerNextBtn.addEventListener("click", () => {
    partnerNextSlideBtn();
    partnerPrevSlideBtn();
  });
  homePartnerPrevBtn.addEventListener("click", () => {
    partnerNextSlideBtn();
    partnerPrevSlideBtn();
  });
}
// Price
if (document.querySelector(".price-card-prev-slide")) {
  homePriceNextBtn.addEventListener("click", () => {
    priceCardNextSlideBtn();
    priceCardPrevSlideBtn();
  });
  homePricePrevBtn.addEventListener("click", () => {
    priceCardNextSlideBtn();
    priceCardPrevSlideBtn();
  });
}

// Feedback
if (document.querySelector(".home-feedback-card-prev-slide")) {
  homeFeedbackNextBtn.addEventListener("click", () => {
    feedbackNextSlideBtn();
    feedbackPrevSlideBtn();
  });
  homeFeedbackPrevBtn.addEventListener("click", () => {
    feedbackNextSlideBtn();
    feedbackPrevSlideBtn();
  });
}
// Home Article Blogs
if (document.querySelector(".home-card-prev-slide")) {
  homeArticleCardNextBtn.addEventListener("click", () => {
    blogNextSlideBtn();
    blogPrevSlideBtn();
  });
  homeArticleCardPrevBtn.addEventListener("click", () => {
    blogNextSlideBtn();
    blogPrevSlideBtn();
  });
}
// Home Blog Page Top Post
if (document.querySelector(".blog-home-card-prev-slide")) {
  blogHomeTopPostNextBtn.addEventListener("click", () => {
    blogHomeNextSlideBtn();
    blogHomePrevSlideBtn();
  });
  blogHomeTopPostPrevBtn.addEventListener("click", () => {
    blogHomeNextSlideBtn();
    blogHomePrevSlideBtn();
  });
}

/* ---------------------------------------------------------------------------------------------- */
/*                                         Faqs Accordion                                         */
/* ---------------------------------------------------------------------------------------------- */

const faqDescriptions = document.querySelectorAll(".faq-card-description");
if (faqDescriptions) {
  faqDescriptions.forEach((description) => {
    description.addEventListener("click", (e) => {
      if (!description.classList.contains("expanded")) {
        faqDescriptions.forEach((desc) => {
          if (desc !== description && desc.classList.contains("expanded")) {
            desc.classList.remove("expanded");
          }
        });
        description.classList.add("expanded");
      } else {
        description.classList.remove("expanded");
      }
      e.stopPropagation();
    });
  });

  document.addEventListener("click", (e) => {
    faqDescriptions.forEach((description) => {
      if (description.classList.contains("expanded") && !e.target.closest(".faq-card-description")) {
        description.classList.remove("expanded");
      }
    });
  });
}
