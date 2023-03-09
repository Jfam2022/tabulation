const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const containerl = document.querySelector(".containerl");
/**\
 * start login script
   */
 sign_up_btn.addEventListener('click', () => {
    containerl.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener('click', () => {
    containerl.classList.remove("sign-up-mode");
});

/**\
 * end login script
   */