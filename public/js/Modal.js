const modalContainer = document.querySelector(".modalWrapper");
const modal = document.querySelector(".modalWrapper .modal");
const modalTitle = document.querySelector(".modalWrapper .modal .modalTitle");
const modalBody = document.querySelector(".modalWrapper .modal .modalContent");
const modalButton = document.querySelector(
    ".modalWrapper .modal .boutonContainer button"
);

/**
 *
 * @param {string} modalTitleContent Le titre du modal
 * @param {string} ModalBodyContent Le contenu du modal
 * @param {string} buttonContent Contenu du modal
 */
export const Modal = (
    modalTitleContent = null,
    ModalBodyContent = null,
    buttonContent = null,
    type = "default"
) => {
    modalContainer.style.display = null;
    modalTitle.innerHTML = modalTitleContent;
    modalBody.innerHTML = ModalBodyContent;
    buttonContent ? (modalButton.innerHTML = buttonContent) : "OK";
    modalContainer.classList.add("apparait");

    document
        .querySelector(".modalWrapper .boutonContainer button")
        .addEventListener("click", closeModal);
    modalContainer.addEventListener("click", closeModal);
    if (type != "middle") {
        modal.style.animationName = "apparait";
    } else {
        modal.style.animationName = "apparaitMiddle";
    }
    modal.addEventListener("click", function (event) {
        event.stopPropagation();
    });
};

function closeModal() {
    modalContainer.classList.remove("apparait");
    modal.style.animationName = "disparait";
    setTimeout(() => {
        modalContainer.style.display = "none";
    }, 200);
    clearTimeout();
}
