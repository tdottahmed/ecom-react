import { useEffect, useState } from "react";

interface CounterProps {
    title: string;
    subtitle: string;
    endTime: number | string; // accept timestamp or ISO string
}

export default function Counter({ title, subtitle, endTime }: CounterProps) {
    const [timeLeft, setTimeLeft] = useState({
        days: 0,
        hours: 0,
        minutes: 0,
        seconds: 0,
    });

    useEffect(() => {
        const interval = setInterval(() => {
            const now = new Date().getTime();
            const end =
                typeof endTime === "number"
                    ? endTime
                    : new Date(endTime).getTime();
            const distance = end - now;

            if (distance <= 0) {
                clearInterval(interval);
                setTimeLeft({ days: 0, hours: 0, minutes: 0, seconds: 0 });
                return;
            }

            setTimeLeft({
                days: Math.floor(distance / (1000 * 60 * 60 * 24)),
                hours: Math.floor((distance / (1000 * 60 * 60)) % 24),
                minutes: Math.floor((distance / (1000 * 60)) % 60),
                seconds: Math.floor((distance / 1000) % 60),
            });
        }, 1000);

        return () => clearInterval(interval);
    }, [endTime]);

    return (
        <div className="relative rounded-16 h-full overflow-hidden p-28 z-[1] text-center">
            <div className="2xl:py-[1.5rem]">
                <h6 className="mb-4 font-[600]">{title}</h6>
                <h5 className="mb-4 font-[600]">{subtitle}</h5>

                {/* Countdown timer display */}
                <div className="flex justify-center gap-4 mb-16 text-sm font-[600]">
                    <span>{timeLeft.days}d</span>:<span>{timeLeft.hours}h</span>
                    :<span>{timeLeft.minutes}m</span>:
                    <span>{timeLeft.seconds}s</span>
                </div>

                <a
                    href="cart.html"
                    className="btn text-heading border-neutral-600 hover-bg-neutral-600 hover-text-white py-16 px-24 flex items-center justify-center rounded-[50rem] gap-8 font-[500]"
                    tabIndex={0}
                >
                    Shop Now{" "}
                    <i className="ph ph-shopping-cart text-xl flex"></i>
                </a>
            </div>
            <div className="lg:block hidden mt-36">
                <img
                    src="./frontend/marketpro/images/deal-img.png"
                    alt="Image"
                />
            </div>
            <img
                src="./frontend/marketpro/images/deal-bg.png"
                alt="Image"
                className="absolute inset-block-start-0 inset-inline-start-0 z-[-1] w-full h-full"
            />
        </div>
    );
}
