const tabsContainer = document.querySelector(".nav_table");
const tabs = document.querySelectorAll(".nav_table_link")
const tabsContent = document.querySelectorAll('.profile_table_table')
tabsContainer.addEventListener("click", function (e) {
    const clicked = e.target.closest(".nav_table_link");
    console.log(clicked);
    if (!clicked) return;
    tabs.forEach((t) => t.classList.remove("active_nav_profile_link"));
    tabsContent.forEach((c) => c.classList.remove("active_profile"));
    clicked.classList.add("active_nav_profile_link");
    document
      .querySelector(`.profile_table-${clicked.dataset.tab}`)
      .classList.add("active_profile");
  });