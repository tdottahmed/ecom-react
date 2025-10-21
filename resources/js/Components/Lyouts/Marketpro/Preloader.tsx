import { useEffect, useState } from "react";

function Preloader() {
    const [isLoading, setIsLoading] = useState(true);

    useEffect(() => {
        const handleLoad = () => {
            setTimeout(() => setIsLoading(false), 1000);
        };

        if (document.readyState === "complete") {
            handleLoad();
        } else {
            window.addEventListener("load", handleLoad);
        }

        return () => window.removeEventListener("load", handleLoad);
    }, []);

    if (!isLoading) return null;

    return (
        <>
            <div
                className={`preloader fixed inset-0 z-[9999] flex justify-center items-center bg-white transition-all duration-500 ${
                    isLoading ? "opacity-100" : "opacity-0 pointer-events-none"
                }`}
            >
                <img
                    src="./frontend/marketpro/images/preloader.gif"
                    alt="Loading..."
                />
            </div>
            <div className={`overlay ${isLoading ? "block" : "hidden"}`}></div>
            <div
                className={`side-overlay ${isLoading ? "block" : "hidden"}`}
            ></div>
        </>
    );
}

export default Preloader;
