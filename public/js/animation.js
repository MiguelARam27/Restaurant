let topTimeline = gsap.timeline({ paused: true });
let navTimeLine = gsap.timeline({ paused: true });
let infoTimeLine = gsap.timeline();
let menuTimeLine = gsap.timeline();

topTimeline
    .fromTo(
        ".welcome-jumbo",
        {
            opacity: 0,
            ease: "ease-out"
        },
        {
            opacity: 1,
            ease: "ease-out",
            duration: 1.5
        },
        ">-1"
    )
    .fromTo(
        ".welcome-jumbo__title",
        {
            y: -200,
            ease: "ease-in"
        },
        {
            y: 0,
            ease: "ease-in",
            duration: 1
        },
        ">-1"
    )
    .staggerFrom(".burger-fries", 1.25, {
        scale: 0,
        ease: Elastic.easeOut,
        stagger: {
            from: "center",
            amount: 0.25
        }
    });
// .fromTo(
//     ".burger-fries",
//     {
//         x: 200,
//         ease: "ease-in"
//     },
//     {
//         x: 0,
//         ease: "slow",
//         duration: 1
//     }
// );

navTimeLine
    .fromTo(
        ".side-menu",
        {
            opacity: 0,
            ease: "ease-out"
        },
        {
            opacity: 1,
            ease: "ease-out",
            duration: 1.1
        },
        ">-1"
    )
    .fromTo(
        ".logo",
        {
            opacity: 0,
            ease: "ease-out"
        },
        {
            opacity: 1,
            ease: "ease-out",
            duration: 1.5
        },
        ">-1"
    )
    .fromTo(
        ".links li",
        {
            x: -200,
            ease: "ease-in"
        },
        {
            x: 0,
            ease: "slow",
            duration: 1,
            stagger: 0.1
        }
    )
    .fromTo(
        ".social-icons a",
        {
            x: 400,
            ease: "ease-in"
        },
        {
            x: 0,
            ease: "slow",
            duration: 1
        },
        "-=1"
    );

infoTimeLine
    .fromTo(
        ".restaurant-image img",
        {
            opacity: 0,
            x: -200,
            ease: "ease-in"
        },
        {
            opacity: 1,
            x: 0,
            ease: "slow",
            duration: 1
        }
    )
    .fromTo(
        ".paragraphs p",
        {
            x: 400,
            ease: "ease-in"
        },
        {
            x: 0,
            ease: "slow",
            duration: 1,
            stagger: 0.1
        },
        "-=1"
    )
    .fromTo(
        ".info h2",
        {
            x: 400,
            ease: "ease-in"
        },
        {
            x: 0,
            ease: "slow",
            duration: 1,
            stagger: 0.1
        },
        "-=1"
    )
    .fromTo(
        ".about-link",
        {
            opacity: 0,
            ease: "ease-in"
        },
        {
            opacity: 1,
            ease: "eas-in",
            duration: 0.5
        },
        "-=1"
    );

menuTimeLine
    .fromTo(
        "#food-preview",
        {
            opacity: 0,
            ease: "ease-in"
        },
        {
            opacity: 1,
            ease: "eas-in",
            duration: 0.25
        }
    )
    .staggerFrom(".slide", 1.25, {
        scale: 0,
        cycle: {
            y: [-50, 50]
        },
        ease: Elastic.easeOut,
        stagger: {
            from: "center",
            amount: 0.25
        }
    });

let PageController = new ScrollMagic.Controller();

let infoSection = document.getElementById("information");
let infoController = new ScrollMagic.Scene({
    triggerElement: infoSection,
    triggerHook: 0,
    offset: -0.65 * infoSection.offsetHeight
})
    .setTween(infoTimeLine)
    .addTo(PageController);

let menuSection = document.getElementById("food-preview");
let menuController = new ScrollMagic.Scene({
    triggerElement: menuSection,
    triggerHook: 0,
    offset: -0.45 * menuSection.offsetHeight
})
    .setTween(menuTimeLine)
    .addTo(PageController);
setTimeout(() => {
    topTimeline.play();
    navTimeLine.play();
}, 1000);
