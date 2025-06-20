const VISIT_KEY = "sparkleCleanVisit";
const SEVEN_DAYS_MS = /*7 * 24 * 60 * 60 * 1000; */ 1 * 60 * 1000;

function enterWebsite(e) {
    e?.stopPropagation();
    document.getElementById("landingPage").style.display = "none";
    document.getElementById("logo").style.display = "block";
    localStorage.setItem(VISIT_KEY, Date.now().toString());
}

function navigateTo(sectionId) {
    enterWebsite();
    setTimeout(() => {
        document.getElementById(sectionId).scrollIntoView({ behavior: "smooth" });
    }, 50);
}

document.getElementById("landingPage").addEventListener("click", () => enterWebsite());

document.querySelectorAll(".landing-overlay button").forEach((btn) => {
    btn.addEventListener("click", (e) => e.stopPropagation());
});

// Show landing only if it's a new visit or 7+ days passed
window.addEventListener("DOMContentLoaded", () => {
    const lastVisit = localStorage.getItem(VISIT_KEY);
    const now = Date.now();

    if (lastVisit && now - parseInt(lastVisit, 2) < SEVEN_DAYS_MS) {
        enterWebsite(); // skip landing
    }
});

function scrollToTop() {
    window.scrollTo({ top: 0, behavior: "smooth" });
}

const navToggle = document.getElementById("navToggle");
const navLinks = document.getElementById("navLinks");
navToggle.addEventListener("click", () => {
    navToggle.classList.toggle("open");
    navLinks.classList.toggle("active");
    navToggle.setAttribute("aria-expanded", navToggle.classList.contains("open"));
});

function closeMenu() {
    navToggle.classList.remove("open");
    navLinks.classList.remove("active");
    navToggle.setAttribute("aria-expanded", "false");
}




// Set stored language on page load
document.addEventListener("DOMContentLoaded", () => {
    const savedLang = localStorage.getItem("language") || "lt";
    document.getElementById("lang-select").value = savedLang;
    setLanguage(savedLang);

    // Event listener for changing language
    document.getElementById("lang-select").addEventListener("change", toggleLanguage);
});

//calendar selection
const startDateInput = document.getElementById("startDate");
const endDateInput = document.getElementById("endDate");
const output = document.getElementById("output");

const today = new Date().toISOString().split("T")[0];
startDateInput.min = today;
endDateInput.min = today;

startDateInput.addEventListener("change", updateDates);
endDateInput.addEventListener("change", updateDates);

function updateDates() {
    const start = startDateInput.value;
    const end = endDateInput.value || start;

    if (!start) {
        output.textContent = "Start date is required.";
        output.className = "output error";
        return;
    }

    const startDate = new Date(start);
    const endDate = new Date(end);

    if (endDate < startDate) {
        output.textContent = "End date cannot be before start date.";
        output.className = "output error";
        return;
    }

    output.className = "output success";
    output.textContent = start === end ? `Selected Date: ${start}` : `Selected Range: ${start} to ${end}`;

    // Store values
    window.selectedStartDate = start;
    window.selectedEndDate = end;
    console.log("Stored Start Date:", window.selectedStartDate);
    console.log("Stored End Date:", window.selectedEndDate);
}

/*calculation section*/
// Set your fixed prices for each extra service here
const extraServicePrices = {
    0: 30, // Deep Cleaning
    1: 20, // Window Cleaning
    2: 25, // Carpet Shampoo
};

function calculatePrice() {
    const areaInput = document.getElementById("area");
    const area = parseInt(areaInput.value, 10);
    const resultDiv = document.getElementById("result");

    resultDiv.style.opacity = "0";

    if (isNaN(area) || area < 1 || area > 9999) {
        resultDiv.textContent = "Please enter a valid area between 1 and 9999 (whole numbers only).";
        resultDiv.style.color = "#d32f2f";
        resultDiv.style.opacity = "1";
        return;
    }

    let totalPrice = 85; // Base price

    if (area > 45) {
        totalPrice += (area - 45) * 1;
    }

    const extras = document.querySelectorAll(".extra");
    extras.forEach((checkbox, index) => {
        if (checkbox.checked) {
            const extraPrice = extraServicePrices[index] || 0;
            totalPrice += extraPrice;
        }
    });

    resultDiv.style.color = "#2e7d32";
    resultDiv.textContent = `Total Price: €${totalPrice.toFixed(2)} su PVM`;
    resultDiv.style.opacity = "1";
}

function showNotification(message) {
    const notif = document.getElementById("notification");
    document.getElementById("notificationMessage").textContent = message;
    notif.classList.add("show");
}

function hideNotification() {
    document.getElementById("notification").classList.remove("show");
}

document.getElementById("contactForm").addEventListener("submit", function (e) {
    e.preventDefault();
    const name = document.getElementById("contactName").value.trim();
    const email = document.getElementById("contactEmail").value.trim();
    const message = document.getElementById("contactMessage").value.trim();

    if (!name || !email || !message) {
        showNotification("Please fill out all fields.");
        return;
    }

    // Simulated form submission
    setTimeout(() => {
        document.getElementById("contactForm").reset();
        showNotification("Thank you! Your message has been sent.");
    }, 500);
});

// gallery Start
const imageGroups = [
    [
        "https://images.unsplash.com/photo-1607746882042-944635dfe10e",
        "https://images.unsplash.com/photo-1506744038136-46273834b3fb",
        "https://images.unsplash.com/photo-1523987355523-c7b5b9c097f8",
        "https://images.unsplash.com/photo-1483794344563-d27a8d18014e",
        "https://images.unsplash.com/photo-1519681393784-d120267933ba",
    ],
    [
        "https://images.unsplash.com/photo-1494526585095-c41746248156",
        "https://images.unsplash.com/photo-1504384308090-c894fdcc538d",
        "https://images.unsplash.com/photo-1467269204594-9661b134dd2b",
        "https://images.unsplash.com/photo-1519125323398-675f0ddb6308",
        "https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e",
    ],
    [
        "https://images.unsplash.com/photo-1504198266285-165a06b0a5bb",
        "https://images.unsplash.com/photo-1530122037265-a5f1f91d3b99",
        "https://images.unsplash.com/photo-1556761175-129418cb2dfe",
        "https://images.unsplash.com/photo-1498050108023-c5249f4df085",
        "https://images.unsplash.com/photo-1487058792275-0ad4aaf24ca7",
    ],
];

const gallery = document.getElementById("gallery");
let currentGroup = 0;
let currentIndex = 0;

imageGroups.forEach((group, groupIndex) => {
    const card = document.createElement("div");
    card.className = "gallery-card";

    group.slice(0, 4).forEach((src, imgIndex) => {
        const img = document.createElement("img");
        img.src = src + "?w=400&auto=format&fit=crop";
        img.alt = `Gallery image ${groupIndex}-${imgIndex}`;
        img.onclick = () => openLightbox(groupIndex, imgIndex);
        card.appendChild(img);
    });

    gallery.appendChild(card);
});

function openLightbox(groupIdx, imgIdx) {
    currentGroup = groupIdx;
    currentIndex = imgIdx;
    document.getElementById("lightbox").style.display = "flex";
    updateLightboxImage();
}

function updateLightboxImage() {
    const img = imageGroups[currentGroup][currentIndex];
    document.getElementById("lightbox-img").src = img + "?w=1000&auto=format&fit=crop";
}

function closeLightbox() {
    document.getElementById("lightbox").style.display = "none";
}

function nextImage() {
    currentIndex = (currentIndex + 1) % imageGroups[currentGroup].length;
    updateLightboxImage();
}

function prevImage() {
    currentIndex = (currentIndex - 1 + imageGroups[currentGroup].length) % imageGroups[currentGroup].length;
    updateLightboxImage();
}

// gallery End

// testimonial Starts
const container = document.getElementById("testimonialsContainer");
const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");
const cards = document.querySelectorAll(".testimonial-card");

let scrollInterval;
const scrollSpeed = 6000; // Auto-slide interval in milliseconds

// Function to get the number of visible cards based on screen width
function getVisibleCardsCount() {
    const width = window.innerWidth;
    if (width >= 992) {
        return 3; // Large screens: 3 cards
    } else if (width >= 768) {
        return 2; // Medium screens: 2 cards
    } else {
        return 1; // Small screens: 1 card
    }
}

// Function to calculate the scroll amount for one "slide"
function getScrollAmount() {
    const visibleCards = getVisibleCardsCount();
    if (cards.length === 0) return 0;

    const cardWidth = cards[0].offsetWidth; // Width of a single card
    const cardMarginRight = parseFloat(getComputedStyle(cards[0]).marginRight); // Margin of a single card

    // Calculate the total width of one slide (visible cards + their margins)
    return (cardWidth + cardMarginRight) * visibleCards;
}

// Function to scroll the container
function scrollCarousel(direction) {
    const scrollAmount = getScrollAmount();
    if (direction === "next") {
        container.scrollLeft += scrollAmount;
        // If we reach the end, loop back to the beginning
        if (container.scrollLeft + container.clientWidth >= container.scrollWidth - 1) {
            // -1 for slight tolerance
            container.scrollLeft = 0;
        }
    } else {
        container.scrollLeft -= scrollAmount;
        // If we go before the beginning, loop to the end
        if (container.scrollLeft <= 0) {
            container.scrollLeft = container.scrollWidth;
        }
    }
}

// Auto-slide functionality
function startAutoSlide() {
    scrollInterval = setInterval(() => {
        scrollCarousel("next");
    }, scrollSpeed);
}

function stopAutoSlide() {
    clearInterval(scrollInterval);
}

// Event Listeners for Arrows
prevBtn.addEventListener("click", () => {
    stopAutoSlide(); // Stop auto-slide on manual navigation
    scrollCarousel("prev");
    startAutoSlide(); // Restart auto-slide after a brief pause (optional, but good UX)
});

nextBtn.addEventListener("click", () => {
    stopAutoSlide(); // Stop auto-slide on manual navigation
    scrollCarousel("next");
    startAutoSlide(); // Restart auto-slide
});

// Hover to stop auto-slide
container.addEventListener("mouseenter", stopAutoSlide);
container.addEventListener("mouseleave", startAutoSlide);

// Initialize auto-slide when the page loads
document.addEventListener("DOMContentLoaded", () => {
    startAutoSlide();
});

// Recalculate scroll amount on window resize to maintain responsiveness
window.addEventListener("resize", () => {
    // This will ensure the scroll amount is correct if the number of visible cards changes
    // No explicit scroll needed, just ensures future scrolls are correct.
});



