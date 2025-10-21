export default function PromoBanner() {
    return (
        <section className="promotional-banner mt-32">
            <div className="container container-lg">
                <div className="row g-4">
                    <div
                        className="xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12"
                        data-aos="fade-up"
                        data-aos-duration="600"
                    >
                        <div className="relative rounded-16 overflow-hidden z-[1] p-32">
                            <img
                                src="./frontend/marketpro/images/promo-bg-img1.png"
                                alt="Image"
                                className="absolute inset-block-start-0 inset-inline-start-0 w-full h-full object-fit-cover z-[-1]"
                            />
                            <div className="flex-between flex-wrap gap-16">
                                <div>
                                    <span className="text-heading text-sm mb-8">
                                        Latest Deal
                                    </span>
                                    <h6 className="mb-0">iPhone 15 Pro Max</h6>
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
                                        src="./frontend/marketpro/images/promo-img1.png"
                                        alt="Image"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        className="xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12"
                        data-aos="fade-up"
                        data-aos-duration="800"
                    >
                        <div className="relative rounded-16 overflow-hidden z-[1] p-32">
                            <img
                                src="./frontend/marketpro/images/promo-bg-img2.png"
                                alt="Image"
                                className="absolute inset-block-start-0 inset-inline-start-0 w-full h-full object-fit-cover z-[-1]"
                            />
                            <div className="flex-between flex-wrap gap-16">
                                <div className="">
                                    <span className="text-heading text-sm mb-8">
                                        Get 60% Off
                                    </span>
                                    <h6 className="mb-0">
                                        Instax Mini 11 Camera
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
                                        src="./frontend/marketpro/images/promo-img2.png"
                                        alt="Image"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        className="xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                    >
                        <div className="relative rounded-16 overflow-hidden z-[1] p-32">
                            <img
                                src="./frontend/marketpro/images/promo-bg-img3.png"
                                alt="Image"
                                className="absolute inset-block-start-0 inset-inline-start-0 w-full h-full object-fit-cover z-[-1]"
                            />
                            <div className="flex-between flex-wrap gap-16">
                                <div className="">
                                    <span className="text-heading text-sm mb-8">
                                        Start From $250
                                    </span>
                                    <h6 className="mb-0">Airpod Headphone</h6>
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
                                        src="./frontend/marketpro/images/promo-img3.png"
                                        alt="Image"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    );
}
