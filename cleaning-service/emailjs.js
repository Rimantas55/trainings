emailjs.init("MAiRqwA7sphnhWdUz"); // 🔁 Replace with your EmailJS User ID

const form = document.getElementById("contactForm");
const status = document.getElementById("status");

form.addEventListener("submit", function (e) {
    e.preventDefault();
    emailjs
        .sendForm("gmail_cleaning_service", "template_lbvkwco", this) // 🔁 Replace these
        .then(
            () => {
                //status.innerText = "Message sent successfully!";
                form.reset();
            },
            (error) => {
                status.innerText = "Failed to send: " + error.text;
            }
        );
});
