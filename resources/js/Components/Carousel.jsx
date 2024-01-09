import React, { useState, useEffect } from 'react';

const Carousel = () => {
    const [currentSlide, setCurrentSlide] = useState(0);
    const slides = ['Slide 1', 'Slide 2', 'Slide 3'];

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
