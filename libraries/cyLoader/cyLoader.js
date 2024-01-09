/* fetch(guide_builder_vars.assets_path + "widgets/widgets.js")
  .then((response) => response.text())
  .then((data) => {
    const widgetsData = eval(data);
    const widgetData = widgetsData.find((widget) => widget.name === widgetName);
    if (widgetData) {
    } else {
      console.log("No widget found");
    }
  })
  .catch((error) => {
    console.error("Error fetching widgets data:", error);
  }); */

const loaders = [
  {
    name: "article-heading",
    content: `
            <div class="cy-loader active loader-one" id="cy-loader" data-widget-name="loader-one"></div>
          `,
  },
  {
    name: "article-img",
    content: `
            <div class="cy-loader active loader-two" id="cy-loader" data-widget-name="loader-two">
                
            </div>
          `,
  },
];

function cyLoader(targetElement, showLoader, loaderType) {
  const targetDiv = document.querySelector(targetElement);

  if (showLoader == "on") {
    const loaderContainer = document.createElement("div");
    loaderContainer.classList.add("loader", "active");

    const pageSpinner = document.createElement("div");
    pageSpinner.classList.add("page-spinner");

    for (let i = 0; i < 6; i++) {
      const spinnerDot = document.createElement("div");
      pageSpinner.appendChild(spinnerDot);
    }

    loaderContainer.appendChild(pageSpinner);
    targetDiv.appendChild(loaderContainer);
  } else if (showLoader == "off") {
    const loaderContainer = targetDiv.querySelector(".loader.active");

    if (loaderContainer) {
      targetDiv.removeChild(loaderContainer);
    }
  }
}
