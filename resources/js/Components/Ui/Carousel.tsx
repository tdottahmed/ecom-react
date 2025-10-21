import React, { useRef, useEffect, ReactNode } from "react";
import { Swiper, SwiperSlide } from "swiper/react";
import { Navigation, Autoplay } from "swiper/modules";
import { Swiper as SwiperType } from "swiper";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/autoplay";

interface BreakpointConfig {
    [key: number]: {
        slidesPerView: number;
        spaceBetween?: number;
    };
}

interface CarouselProps {
    items: ReactNode[];
    prevButtonId: string;
    nextButtonId: string;
    slidesPerView?: BreakpointConfig;
    spaceBetween?: number;
    autoplay?: boolean;
    loop?: boolean;
    className?: string;
}

const Carousel: React.FC<CarouselProps> = ({
    items,
    prevButtonId,
    nextButtonId,
    slidesPerView = {
        640: { slidesPerView: 2 },
        768: { slidesPerView: 3 },
        1024: { slidesPerView: 4 },
        1280: { slidesPerView: 3 },
    },
    spaceBetween = 16,
    autoplay = true,
    loop = true,
    className = "",
}) => {
    const navigationPrevRef = useRef<HTMLButtonElement>(null);
    const navigationNextRef = useRef<HTMLButtonElement>(null);
    const swiperRef = useRef<SwiperType | null>(null);

    useEffect(() => {
        const prevButton = document.getElementById(prevButtonId);
        const nextButton = document.getElementById(nextButtonId);

        const handlePrevClick = () => {
            if (swiperRef.current) {
                swiperRef.current.slidePrev();
            }
        };

        const handleNextClick = () => {
            if (swiperRef.current) {
                swiperRef.current.slideNext();
            }
        };

        if (prevButton) {
            prevButton.addEventListener("click", handlePrevClick);
        }

        if (nextButton) {
            nextButton.addEventListener("click", handleNextClick);
        }

        return () => {
            if (prevButton) {
                prevButton.removeEventListener("click", handlePrevClick);
            }
            if (nextButton) {
                nextButton.removeEventListener("click", handleNextClick);
            }
        };
    }, [prevButtonId, nextButtonId]);

    const defaultSlidesPerView = 1;

    return (
        <div
            className={`top-selling-product-slider arrow-style-two ${className}`}
        >
            <Swiper
                modules={[Navigation, Autoplay]}
                spaceBetween={spaceBetween}
                slidesPerView={defaultSlidesPerView}
                autoplay={
                    autoplay
                        ? {
                              delay: 4000,
                              disableOnInteraction: false,
                              pauseOnMouseEnter: true,
                          }
                        : false
                }
                loop={loop}
                navigation={{
                    prevEl: navigationPrevRef.current,
                    nextEl: navigationNextRef.current,
                }}
                breakpoints={slidesPerView}
                onSwiper={(swiper: SwiperType) => {
                    swiperRef.current = swiper;
                    setTimeout(() => {
                        if (
                            swiper.params.navigation &&
                            typeof swiper.params.navigation !== "boolean"
                        ) {
                            swiper.params.navigation.prevEl =
                                navigationPrevRef.current;
                            swiper.params.navigation.nextEl =
                                navigationNextRef.current;
                        }
                        swiper.navigation.init();
                        swiper.navigation.update();
                    });
                }}
                className="top-selling-swiper"
            >
                {items.map((item, index) => (
                    <SwiperSlide key={index}>{item}</SwiperSlide>
                ))}
            </Swiper>

            {/* Hidden navigation refs for Swiper */}
            <button
                ref={navigationPrevRef}
                className="hidden"
                aria-hidden="true"
            />
            <button
                ref={navigationNextRef}
                className="hidden"
                aria-hidden="true"
            />
        </div>
    );
};

export default Carousel;
