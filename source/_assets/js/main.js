// FAQ questions - dynamically generated Alpine Accordion
window.faq = [
{
    question: "When are The Awards taking place?",
    answer: [
    "The 2021 Safety & Health Excellence Awards will be held on 13th October 2021 and commences at 19:00. The bar will close at 12:00"
    ]
},
{
    question: "How can I attend?",
    answer: [
    "Tickets are available via the \"Registering to attend\" option in the main menu ."  
    ]
},
{
    question: "Question 3",
    answer: [
    "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
    ]
},
{
    question: "Question 4",
    answer: [
    "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
    ]
},
{
    question: "Question 5",
    answer: [
    "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
    ]
},
];

// Sponsor Carousel 
import Splide from '@splidejs/splide';
new Splide( '.splide', {
    type        : 'loop',
    speed       : '500',
    perPage     : 6,
    perMove     : 1,
    autoplay    : true,
    pauseOnHover: false,
    arrows      : false,
} ).mount();