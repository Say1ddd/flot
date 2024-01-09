import React, { useState, useEffect } from 'react';
import '../../css/components/carousel.css';

const Carousel = () => {
    const [currentSlide, setCurrentSlide] = useState(0);
    // const slides = ['Slide 1', 'Slide 2', 'Slide 3'];
    const slides = [
        'https://source.unsplash.com/random/800x600',
        'https://source.unsplash.com/random/800x601',
        'https://source.unsplash.com/random/800x602'
    ];

    useEffect(() => {
        const interval = setInterval(() => {
            setCurrentSlide((prevSlide) => (prevSlide === slides.length - 1 ? 0 : prevSlide + 1));
        }, 3000);

        return () => clearInterval(interval);
    }, []);

    return (
        <div className="carousel">
            <div className="slide">{slides[currentSlide]}</div>
            <div className="indicator">
                {slides.map((slide, index) => (
                    <div
                        key={index}
                        className={`indicator-dot ${index === currentSlide ? 'active' : ''}`}
                        onClick={() => setCurrentSlide(index)}
                    ></div>
                ))}
            </div>
        </div>
    );
};

export default Carousel;
