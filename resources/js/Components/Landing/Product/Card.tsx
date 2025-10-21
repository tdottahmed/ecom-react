export default function Card() {
    return (
        <div data-aos="fade-up" data-aos-duration="200">
            <div className="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                <a
                    href="product-details-two.html"
                    className="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"
                >
                    <span className="product-card__badge bg-main-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">
                        Sold
                    </span>
                    <img
                        src="./frontend/marketpro/images/product-two-img1.png"
                        alt="Product"
                        className="!w-auto max-w-[unset]"
                    />
                </a>

                <div className="product-card__content mt-16">
                    <div className="flex items-center gap-6">
                        <span className="text-xs font-[500] text-gray-500">
                            4.8
                        </span>
                        <span className="text-15 font-[500] text-warning-600 flex">
                            <i className="ph-fill ph-star"></i>
                        </span>
                        <span className="text-xs font-[500] text-gray-500">
                            (17k)
                        </span>
                    </div>

                    <h6 className="title text-lg font-[600] mt-12 mb-8">
                        <a
                            href="product-details-two.html"
                            className="link text-line-2"
                        >
                            Taylor Farms Broccoli Florets Vegetables
                        </a>
                    </h6>

                    <div className="flex items-center gap-4">
                        <span className="text-tertiary-600 text-md flex">
                            <i className="ph-fill ph-storefront"></i>
                        </span>
                        <span className="text-gray-500 text-xs">
                            By Lucky Supermarket
                        </span>
                    </div>

                    <div className="mt-8">
                        <div
                            className="w-full bg-color-three rounded-[50rem] h-4 overflow-hidden"
                            role="progressbar"
                            aria-label="Basic example"
                            aria-valuenow={35}
                            aria-valuemin={0}
                            aria-valuemax={100}
                        >
                            <div
                                className="bg-tertiary-600 rounded-[50rem] h-4"
                                style={{ width: "35%" }}
                            ></div>
                        </div>
                        <span className="text-gray-900 text-xs font-[500] mt-8 block">
                            Sold: 18/35
                        </span>
                    </div>

                    <div className="product-card__price my-20">
                        <span className="text-gray-400 text-md font-[600] line-through">
                            $28.99
                        </span>{" "}
                        <span className="text-heading text-md font-[600]">
                            $14.99{" "}
                            <span className="text-gray-500 font-normal">
                                /Qty
                            </span>
                        </span>
                    </div>

                    <a
                        href="cart.html"
                        className="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                    >
                        Add To Cart <i className="ph ph-shopping-cart"></i>
                    </a>
                </div>
            </div>
        </div>
    );
}
