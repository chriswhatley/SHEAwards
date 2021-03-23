// FAQ questions - dynamically generated Alpine Accordion
window.faq = [
{
    question: "How much does it cost to enter?",
    answer: [
    "It’s free to enter"
    ]
},
{
    question: "Can I enter two different people or two different products or campaigns to the same category?",
    answer: [
    "Yes. You can enter each category as many times as you like"  
    ]
},
{
    question: "Can I enter the same entry into multiple categories?",
    answer: [
    "Yes, you can provided it meets the specific criteria of each category"
    ]
},
{
    question: "Can sponsors enter?",
    answer: [
    "Sponsors can enter but they can’t enter a category they are sponsoring."
    ]
},
{
    question: "When do entries open for the SHE Awards 2021?",
    answer: [
    "1st May 2021 is the opening date for entries"
    ]
},
{
    question: "When do entries close?",
    answer: [
    "Entries will close on 31st July 2021 at 11:59pm"
    ]
},
{
    question: "How do I enter the Awards?",
    answer: [
    "You enter online via our entries page and select the category you wish to enter. Please make sure you fill in all the entry fields and provide accurate contact information. When entries open on 1 May 2021 you can <a href=\"/nominate\" class=\"text-yellow-500 font-semibold\">enter nominations here</a>"
    ]
},
{
    question: "When will the shortlist be revealed?",
    answer: [
    "We will announce the shortlist in September 2021"
    ]
},
{
    question: "When will the winners be revealed?",
    answer: [
    "The SHE Awards will be hosted digitally on 13 October 2021 as part the of <a href=\"https://www.hsmlive.co.uk\" target=\"_blank\" class=\"text-yellow-500 font-semibold\">Health &amp; Safety Matters Live Digital Conference</a>."
    ]
},
{
    question: "How can I attend the digital awards ceremony?",
    answer: [
    "It’s free to attend and registration will open on 1 July 2021. You will be able to register to attend at <a href=\"https://www.hsmlive.co.uk\" target=\"_blank\" class=\"text-yellow-500 font-semibold\">hsmlive.co.uk</a>"
    ]
},
{
    question: "What should I do if I've got further questions or am unsure if my entry is eligible?",
    answer: [
    "If you have any further questions then please contact us by <a href=\"/contact\" class=\"text-yellow-500 font-semibold\">clicking HERE</a>."
    ]
}
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