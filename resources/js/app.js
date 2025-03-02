import "./bootstrap";
import AOS from "aos";
import "aos/dist/aos.css";

AOS.init();

// document.addEventListener("DOMContentLoaded", function () {
//     setTimeout(() => {
//         document.querySelectorAll("[data-aos]").forEach((el) => {
//             el.classList.remove("aos-animate");
//             el.style.zIndex = "1"; // Set z-index ke level yang lebih rendah setelah animasi
//         });
//     }, 2000); // Tunggu 2 detik untuk memastikan semua animasi selesai
// });

// document.querySelectorAll(".group").forEach((el) => {
//     el.addEventListener("mouseenter", () => {
//         el.style.zIndex = "100";
//     });

//     el.addEventListener("mouseleave", () => {
//         el.style.zIndex = "5"; // Kembalikan ke z-index default
//     });
// });
