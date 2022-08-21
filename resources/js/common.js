import {ping} from "./ping";

export const languageSelects = document.querySelectorAll(".language-select");
languageSelects.forEach((languageSelect) => {
    languageSelect.addEventListener('click', (e) => {
        // 419対策
        ping();
        axios.post('/language', {
            'language': e.target.getAttribute('data-language'),
        })
            .then(res => {
                location.reload();
            }).catch(err => {
                console.error(err);
        });
    });
});
