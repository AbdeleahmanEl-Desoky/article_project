// * --------------------------------------------------------------------------------||
// *                            script for video in header                           ||
// * --------------------------------------------------------------------------------||
// Get the video
var video = document.getElementById("myVideo");

// Get the button
var btn = document.getElementById("myBtn");

// Pause and play the video, and change the button text
function myFunction() {
    if (video.paused) {
        video.play();
        btn.innerHTML = "Pause";
    } else {
        video.pause();
        btn.innerHTML = "Play";
    }
}

// * ||--------------------------------------------------------------------------------||
// * ||                  script for view image header after end video                  ||
// * ||--------------------------------------------------------------------------------||

function showImages() {
    var video = document.querySelector(".video");
    var imageCarousel = document.getElementById("carouselExampleIndicators");
    var buttons = document.querySelectorAll(".carousel-item .carousel-buttons");

    // Hide the video
    video.style.display = "none";

    // Show the image carousel
    imageCarousel.style.display = "block";

    // Add 'show' class to each button with a delay for each image
    buttons.forEach(function (button, index) {
        setTimeout(function () {
            button.classList.add("show");
        }, index * 500); // Adjust the delay as needed
    });
}

function executeCommand(buttonNumber) {
    // Replace this function with your desired command execution logic
    console.log("Button " + buttonNumber + " clicked!");
}




// * ||--------------------------------------------------------------------------------||
// * ||                                    for arrow                                   ||
// * ||--------------------------------------------------------------------------------||


document.addEventListener("DOMContentLoaded", function() {
    var scrollToTopBtn = document.getElementById("scrollToTopBtn");

    // Show/hide the scroll-to-top button based on scroll position
    window.addEventListener("scroll", function() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            scrollToTopBtn.classList.add("active");
        } else {
            scrollToTopBtn.classList.remove("active");
        }
    });

    // Scroll to top with smooth animation when the button is clicked
    scrollToTopBtn.addEventListener("click", function() {
        scrollToTop(2000); // 2000 milliseconds (2 seconds) for smooth scroll
    });

    // Function to perform smooth scroll
    function scrollToTop(duration) {
        var start = window.scrollY;
        var startTime = performance.now();

        function scrollStep(timestamp) {
            var currentTime = timestamp || performance.now();
            var timeElapsed = currentTime - startTime;
            var easeInOutCubic = function(t) {
                return t < 0.5 ? 4 * t * t * t : (t - 1) * (2 * t - 2) * (2 * t - 2) + 1;
            };

            window.scrollTo(0, start - start * easeInOutCubic(timeElapsed / duration));

            if (timeElapsed < duration) {
                requestAnimationFrame(scrollStep);
            } else {
                window.scrollTo(0, 0);
            }
        }

        requestAnimationFrame(scrollStep);
    }
});
