let topTimeline = gsap.timeline({ paused: true });
let navTimeLine = gsap.timeline({ paused: true });

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
    .fromTo(
        ".burger-fries",
        {
            x: 200,
            ease: "ease-in"
        },
        {
            x: 0,
            ease: "slow",
            duration: 1
        }
    );

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
    );

setTimeout(() => {
    topTimeline.play();
    navTimeLine.play();
}, 1000);
