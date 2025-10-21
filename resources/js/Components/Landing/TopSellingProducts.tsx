import Card from "./Product/Card";

export default function TopSellingProducts() {
    return (
        <section className="top-selling-products pt-80 overflow-hidden">
            <div className="container container-lg">
                <div className="border border-gray-100 p-24 rounded-16">
                    <div className="section-heading mb-24">
                        <div className="flex-between flex-wrap gap-8">
                            <h5 className="mb-0 wow bounceInLeft">
                                Top Selling Products
                            </h5>
                            <div className="flex items-center gap-16 wow bounceInRight">
                                <a
                                    href="shop.html"
                                    className="text-sm font-[500] text-gray-700 hover-text-main-600 hover-text-decoration-underline"
                                >
                                    View All Deals
                                </a>
                                <div className="flex items-center gap-8">
                                    <button
                                        type="button"
                                        id="top-selling-prev"
                                        className="slick-prev slick-arrow flex items-center justify-center rounded-[50%] border border-gray-100 hover-border-neutral-600 text-xl hover-bg-neutral-600 hover-text-white transition-1"
                                    >
                                        <i className="ph ph-caret-left"></i>
                                    </button>{" "}
                                    <button
                                        type="button"
                                        id="top-selling-next"
                                        className="slick-next slick-arrow flex items-center justify-center rounded-[50%] border border-gray-100 hover-border-neutral-600 text-xl hover-bg-neutral-600 hover-text-white transition-1"
                                    >
                                        <i className="ph ph-caret-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="row g-12">
                        <div
                            className="lg:w-4/12 flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="zoom-in"
                            data-aos-duration="800"
                        >
                            <div className="relative rounded-16 h-full overflow-hidden p-28 z-[1] text-center">
                                <img
                                    src="./frontend/marketpro/images/deal-bg.png"
                                    alt="Image"
                                    className="absolute inset-block-start-0 inset-inline-start-0 z-[-1] w-full h-full"
                                />
                                <div className="2xl:py-[1.5rem]">
                                    <h6 className="mb-4 font-[600]">
                                        Polaroid Now+ Gen 2 - White
                                    </h6>
                                    <h5 className="mb-40 font-[600]">
                                        Fresh Vegetables
                                    </h5>
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
                            </div>
                        </div>
                        <div className="lg:w-8/12 flex-grow-0 flex-shrink-0 basis-auto">
                            <div className="top-selling-product-slider arrow-style-two">
                                <Card />
                                <Card />
                                <Card />
                                <Card />
                                <Card />
                                <Card />
                                <Card />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    );
}
