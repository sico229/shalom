export const LangageChanger = () => {
    $("#lowerbar ul li").click((e) => {
        const langue = e.target.getAttribute("data-langue");
        $.post(
            "api/LanguageChanger",
            {
                langue: langue,
            },
            (response) => {
                response && window.location.reload();
            }
        );
    });
};
