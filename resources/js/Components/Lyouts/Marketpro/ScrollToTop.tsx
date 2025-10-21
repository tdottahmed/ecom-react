import { useState, useEffect } from "react";
import { RiArrowUpDoubleLine } from "react-icons/ri";

export default function ScrollToTop() {
    const [visible, setVisible] = useState(false);

    const scrollToTop = () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
    };

    useEffect(() => {
        const handleScroll = () => {
            // Show button after 100px scroll (more noticeable on short pages)
            setVisible(window.scrollY > 100);
        };
        window.addEventListener("scroll", handleScroll);
        return () => window.removeEventListener("scroll", handleScroll);
    }, []);

    return (
        <button
            onClick={scrollToTop}
            className={`fixed bottom-6 right-6 z-[9999] w-14 h-14 rounded-full bg-main text-white flex items-center justify-center shadow-lg transform transition-transform duration-300 ${
                visible
                    ? "opacity-100 scale-100"
                    : "opacity-0 scale-0 pointer-events-none"
            }`}
        >
            <RiArrowUpDoubleLine className="text-2xl animate-bounce" />
        </button>
    );
}
