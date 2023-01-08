const searchForm = document.querySelector(".search-form");
const loginForm = document.querySelector(".form-container");
const container = document.querySelector(".container");
const pwShowHide = document.querySelectorAll(".showHidePw");
const pwFields = document.querySelectorAll(".password");
const signUp = document.querySelector(".signup-link");
const login = document.querySelector(".login-link");
const checkbox = document.getElementById("checkbox");


// js code dark/light mode
checkbox.addEventListener('change', () =>{
    document.body.classList.toggle('dark');
});
checkbox.addEventListener('change', () =>{
    document.a.classList.toggle('light');
});

// js code to show/hide form login, register
document.querySelector("#form-btn").onclick = () => {
    loginForm.classList.toggle("active");
}
document.querySelector("#close-btn").onclick = () => {
    loginForm.classList.remove("active");
}

// js code to show/hide password and change icon
pwShowHide.forEach(eyeIcon => {
    eyeIcon.addEventListener("click", () => {
        pwFields.forEach(pwField => {
            if (pwField.type === "password") {
                pwField.type = "text";

                pwShowHide.forEach(icon => {
                    icon.classList.replace("fa-eye-slash", "fa-eye")
                })
            } else {
                pwField.type = "password";

                pwShowHide.forEach(icon => {
                    icon.classList.replace("fa-eye", "fa-eye-slash")
                })
            }
        })
    })
})

// js code to appear signup and login form
signUp.addEventListener("click", () => {
    container.classList.add("active");
});
login.addEventListener("click", () => {
    container.classList.remove("active");
});


// js dropdown search button mobile
document.querySelector("#search-btn").onclick = () => {
    searchForm.classList.toggle("active");
}

window.onscroll = () => {

    searchForm.classList.remove("active");

    if (window.scrollY > 80) {
        document.querySelector(".header .header-2").classList.add("active");
    } else {
        document.querySelector(".header .header-2").classList.remove("active");
    }
}

window.onload = () => {
    if (window.scrollY > 80) {
        document.querySelector(".header .header-2").classList.add("active");
    } else {
        document.querySelector(".header .header-2").classList.remove("active");
    }

}
// slider
var swiper = new Swiper(".cars-slider", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
        delay: 1800,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

var swiper = new Swiper(".brands-slider", {
    spaceBetween: 5,
    loop: true,
    centeredSlides: true,
    autoplay: {
        deplay: 9500,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        400: {
            slidesPerView: 1,
        },
        800: {
            slidesPerView: 1,
        },
    },
});

