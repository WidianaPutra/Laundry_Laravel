import "./bootstrap";
import "aos/dist/aos.css";
import Typed from "typed.js";
import AOS from "aos";

AOS.init();

new Typed("#title", {
    strings: ["Atelier Laundry"],
    showCursor: false,
    typeSpeed: 60,
    startDelay: 200,
});

new Typed("#value_tagline", {
    strings: ["Kepuasan anda <br> adalah prioritas kami"],
    showCursor: false,
    typeSpeed: 50,
    startDelay: 800,
});
