import React, { useState, useEffect } from 'react';
import '../../css/components/carousel.css';

const Carousel = () => {
    const [currentSlide, setCurrentSlide] = useState(0);
    const slides = [
        'https://source.unsplash.com/random/1600x900',
        'https://source.unsplash.com/random/1600x901',
        'https://source.unsplash.com/random/1600x902'
    ];

    useEffect(() => {
        const interval = setInterval(() => {
            setCurrentSlide((prevSlide) => (prevSlide === slides.length - 1 ? 0 : prevSlide + 1));
        }, 3000);

        
        return () => clearInterval(interval);
    }, []);

    return (
        <div className="carousel">
            {slides.map((slide, index) => (
                <div
                    key={index}
                    className={`slide ${index === currentSlide ? 'active' : ''}`}
                >
                    <img src={slide} alt="Slide" />
                </div>
            ))}
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