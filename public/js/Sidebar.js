export const SideBar = () => {
    const sideBar = document.querySelector(".sidebar");
    const hamberger = document.querySelector("#hamberger");
    hamberger.addEventListener("click", () => {
        sideBar.classList.toggle("MenuShow");
    });
};
