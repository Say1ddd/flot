import { Link } from "@inertiajs/react";
import { useEffect, useState } from "react";

export default function Carousel() {
  const [currentSlide, setCurrentSlide] = useState(0);

  const handleSlide = (index) => {
    setCurrentSlide(index);
  };

  useEffect(() => {
    const interval = setInterval(() => {
      const nextSlide = (currentSlide + 1) % 3;
      setCurrentSlide(nextSlide);
    }, 5000);

    return () => clearInterval(interval);
  }, [currentSlide]);

  return (
    <div id="customCarousel" className="custom-carousel">
      <ol className="custom-carousel-indicators">
        {[0, 1, 2].map((index) => (
          <li
            key={index}
            className={index === currentSlide ? "active" : ""}
            onClick={() => handleSlide(index)}
          />
        ))}
      </ol>
      <div className="custom-carousel-inner">
        {[0, 1, 2].map((index) => (
          <div
            key={index}
            className={`custom-carousel-item ${
              index === currentSlide ? "active" : ""
            }`}
          >
            <Link>
              <img
                className="custom-carousel-image"
                src={`.jpg`}
                alt={`Slide ${index + 1}`}
              />
            </Link>
          </div>
        ))}
      </div>
    </div>
  );
}
