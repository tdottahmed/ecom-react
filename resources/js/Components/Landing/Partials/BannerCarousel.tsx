import { useState, useEffect } from "react";
import { motion, AnimatePresence } from "framer-motion";

const slides = [
    {
        id: 1,
        image: "./frontend/marketpro/images/banner-two-bg.png",
        alt: "Premium Audio Equipment",
    },
    {
        id: 2,
        image: "./frontend/marketpro/images/banner-two-bg.png",
        alt: "Studio Quality Sound",
    },
    {
        id: 3,
        image: "./frontend/marketpro/images/banner-two-bg.png",
        alt: "Limited Time Offer",
    },
];

export default function BannerCarousel() {
    const [currentSlide, setCurrentSlide] = useState(0);

    useEffect(() => {
        const interval = setInterval(() => {
            setCurrentSlide((prev) => (prev + 1) % slides.length);
        }, 5000);
        return () => clearInterval(interval);
    }, []);

    const nextSlide = () => {
        setCurrentSlide((prev) => (prev + 1) % slides.length);
    };

    const prevSlide = () => {
        setCurrentSlide((prev) => (prev - 1 + slides.length) % slides.length);
    };

    const goToSlide = (index) => {
        setCurrentSlide(index);
    };

    const slideVariants = {
        enter: { opacity: 0, scale: 1.1 },
        center: {
            opacity: 1,
            scale: 1,
            transition: { duration: 1.2, ease: [0.25, 0.46, 0.45, 0.94] },
        },
        exit: {
            opacity: 0,
            scale: 0.9,
            transition: { duration: 0.8, ease: [0.25, 0.46, 0.45, 0.94] },
        },
    };

    const imageVariants = {
        hover: {
            scale: 1.02,
            transition: {
                duration: 1.5,
                ease: "easeOut",
            },
        },
    };

    return (
        <div className="relative w-full h-[80vh] min-h-[600px] max-h-[800px] rounded-3xl overflow-hidden bg-gray-900">
            {/* Animated Background Overlay */}
            <div className="absolute inset-0 bg-gradient-to-br from-black/40 via-transparent to-black/30 z-10"></div>

            {/* Floating Particles */}
            <div className="absolute inset-0 z-0">
                {[...Array(20)].map((_, i) => (
                    <motion.div
                        key={i}
                        className="absolute w-2 h-2 bg-white/20 rounded-full"
                        style={{
                            left: `${Math.random() * 100}%`,
                            top: `${Math.random() * 100}%`,
                        }}
                        animate={{
                            y: [0, -30, 0],
                            opacity: [0, 1, 0],
                        }}
                        transition={{
                            duration: 3 + Math.random() * 2,
                            repeat: Infinity,
                            delay: Math.random() * 2,
                        }}
                    />
                ))}
            </div>

            <AnimatePresence mode="wait">
                <motion.div
                    key={currentSlide}
                    variants={slideVariants}
                    initial="enter"
                    animate="center"
                    exit="exit"
                    className="absolute inset-0 w-full h-full"
                >
                    <motion.img
                        src={slides[currentSlide].image}
                        alt={slides[currentSlide].alt}
                        variants={imageVariants}
                        whileHover="hover"
                        className="w-full h-full object-cover"
                    />
                </motion.div>
            </AnimatePresence>

            {/* Enhanced Navigation Arrows */}
            <motion.button
                onClick={prevSlide}
                whileHover={{
                    scale: 1.1,
                    backgroundColor: "rgba(255,255,255,0.2)",
                }}
                whileTap={{ scale: 0.9 }}
                className="absolute left-6 top-1/2 transform -translate-y-1/2 z-20 bg-white/10 backdrop-blur-lg rounded-2xl p-5 transition-all duration-300 shadow-2xl border border-white/20"
            >
                <motion.span
                    className="text-white text-3xl font-bold block"
                    whileHover={{ x: -3 }}
                >
                    ‹
                </motion.span>
            </motion.button>

            <motion.button
                onClick={nextSlide}
                whileHover={{
                    scale: 1.1,
                    backgroundColor: "rgba(255,255,255,0.2)",
                }}
                whileTap={{ scale: 0.9 }}
                className="absolute right-6 top-1/2 transform -translate-y-1/2 z-20 bg-white/10 backdrop-blur-lg rounded-2xl p-5 transition-all duration-300 shadow-2xl border border-white/20"
            >
                <motion.span
                    className="text-white text-3xl font-bold block"
                    whileHover={{ x: 3 }}
                >
                    ›
                </motion.span>
            </motion.button>

            {/* Modern Dots Indicator */}
            <div className="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-20 flex space-x-3">
                {slides.map((_, index) => (
                    <motion.button
                        key={index}
                        onClick={() => goToSlide(index)}
                        whileHover={{ scale: 1.4 }}
                        whileTap={{ scale: 0.8 }}
                        className="relative group"
                    >
                        <motion.div
                            className={`w-3 h-3 rounded-full transition-all duration-300 ${
                                index === currentSlide
                                    ? "bg-white"
                                    : "bg-white/40 hover:bg-white/60"
                            }`}
                            animate={{
                                scale: index === currentSlide ? [1, 1.2, 1] : 1,
                            }}
                            transition={{
                                duration: 2,
                                repeat: index === currentSlide ? Infinity : 0,
                            }}
                        />
                        {/* Hover effect */}
                        <div className="absolute inset-0 rounded-full bg-white/20 scale-150 opacity-0 group-hover:opacity-100 transition-opacity duration-300" />
                    </motion.button>
                ))}
            </div>

            {/* Progress Bar */}
            <div className="absolute top-0 left-0 right-0 h-1 bg-white/20 z-20">
                <motion.div
                    key={currentSlide}
                    className="h-full bg-gradient-to-r from-white to-white/80"
                    initial={{ width: "0%" }}
                    animate={{ width: "100%" }}
                    transition={{ duration: 5, ease: "linear" }}
                />
            </div>

            {/* Slide Counter */}
            <motion.div
                initial={{ opacity: 0, x: 20 }}
                animate={{ opacity: 1, x: 0 }}
                className="absolute top-8 right-8 z-20 bg-black/30 backdrop-blur-sm rounded-2xl px-4 py-3 border border-white/10"
            >
                <span className="text-white font-mono text-sm">
                    <span className="text-2xl font-bold">
                        {String(currentSlide + 1).padStart(2, "0")}
                    </span>
                    <span className="text-white/40 mx-2">/</span>
                    <span className="text-white/60">
                        {String(slides.length).padStart(2, "0")}
                    </span>
                </span>
            </motion.div>

            {/* Fullscreen Toggle */}
            <motion.button
                whileHover={{
                    scale: 1.1,
                    backgroundColor: "rgba(255,255,255,0.1)",
                }}
                whileTap={{ scale: 0.9 }}
                className="absolute top-8 left-8 z-20 bg-black/30 backdrop-blur-sm rounded-2xl p-3 border border-white/10"
                onClick={() => document.documentElement.requestFullscreen()}
            >
                <span className="text-white text-lg">⛶</span>
            </motion.button>
        </div>
    );
}
