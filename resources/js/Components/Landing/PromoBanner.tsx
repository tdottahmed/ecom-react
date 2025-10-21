import { motion } from "framer-motion";

export default function PromoBanner() {
    const cards = [
        { id: 1, delay: 0.2 },
        { id: 2, delay: 0.4 },
        { id: 3, delay: 0.6 },
    ];

    return (
        <section className="promotional-banner mt-32">
            <div className="container container-lg">
                <div className="row g-4">
                    {cards.map((card) => (
                        <motion.div
                            key={card.id}
                            className={`xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12`}
                            initial={{ opacity: 0, y: 50 }}
                            whileInView={{ opacity: 1, y: 0 }}
                            viewport={{ once: true }}
                            transition={{ duration: 0.6, delay: card.delay }}
                        >
                            <div className="relative rounded-16 overflow-hidden z-[1] p-32">
                                <img
                                    src={`./frontend/marketpro/images/promo-bg-img${card.id}.png`}
                                    alt="Image"
                                    className="absolute inset-block-start-0 inset-inline-start-0 w-full h-full object-fit-cover z-[-1]"
                                />
                                <div className="flex-between flex-wrap gap-16">
                                    <div>
                                        <span className="text-heading text-sm mb-8">
                                            {card.id === 1
                                                ? "Latest Deal"
                                                : card.id === 2
                                                ? "Get 60% Off"
                                                : "Start From $250"}
                                        </span>
                                        <h6 className="mb-0">
                                            {card.id === 1
                                                ? "iPhone 15 Pro Max"
                                                : card.id === 2
                                                ? "Instax Mini 11 Camera"
                                                : "Airpod Headphone"}
                                        </h6>
                                        <a
                                            href="shop.html"
                                            className="inline-flex items-center gap-8 mt-16 text-heading text-md font-[500] border border-t-0 border-r-0 border-l-0 border-gray-900 hover-text-main-two-600 hover-border-main-two-600"
                                        >
                                            Shop Now{" "}
                                            <span className="icon text-md flex">
                                                <i className="ph ph-plus"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div className="pe-xxl-4">
                                        <img
                                            src={`./frontend/marketpro/images/promo-img${card.id}.png`}
                                            alt="Image"
                                        />
                                    </div>
                                </div>
                            </div>
                        </motion.div>
                    ))}
                </div>
            </div>
        </section>
    );
}
