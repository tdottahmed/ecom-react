export default function BannerCarousel() {
    return (
        <>
            <div className="banner-item-two-wrapper rounded-24 overflow-hidden relative arrow-center flex-grow mb-0">
                <img
                    src="./frontend/marketpro/images/banner-two-bg.png"
                    alt="Image"
                    className="banner-img absolute inset-block-start-0 inset-inline-start-0 w-full h-full z-[-1] object-fit-cover rounded-24"
                />
                <div className="banner-item-two__slider">
                    <div className="banner-item-two">
                        <div className="banner-item-two__content">
                            <span className="text-white mb-8 h6 wow bounceInDown">
                                Starting at only $250
                            </span>
                            <h2 className="banner-item-two__title bounce text-white wow bounceInLeft">
                                Get The Sound You Love For Less
                            </h2>
                            <a
                                href="shop.html"
                                className="btn btn-outline-white inline-flex items-center rounded-[50rem] gap-8 mt-48 wow bounceInUp"
                            >
                                Shop Now
                                <span className="icon text-xl flex">
                                    <i className="ph ph-shopping-cart-simple"></i>
                                </span>
                            </a>
                        </div>
                        <div
                            className="banner-item-two__thumb absolute bottom-0 wow bounceInUp"
                            data-wow-duration="1s"
                            data-tilt
                            data-tilt-max="12"
                            data-tilt-speed="500"
                            data-tilt-perspective="5000"
                            data-tilt-scale="1.06"
                        >
                            <img
                                src="./frontend/marketpro/images/banner-two-img.png"
                                alt="Image"
                            />
                        </div>
                    </div>
                    <div className="banner-item-two">
                        <div className="banner-item-two__content">
                            <span className="text-white mb-8 h6 wow bounceInDown">
                                Starting at only $250
                            </span>
                            <h2 className="banner-item-two__title bounce text-white wow bounceInLeft">
                                Get The Sound You Love For Less
                            </h2>
                            <a
                                href="shop.html"
                                className="btn btn-outline-white inline-flex items-center rounded-[50rem] gap-8 mt-48 wow bounceInUp"
                            >
                                Shop Now
                                <span className="icon text-xl flex">
                                    <i className="ph ph-shopping-cart-simple"></i>
                                </span>
                            </a>
                        </div>
                        <div
                            className="banner-item-two__thumb absolute bottom-0 wow bounceInUp"
                            data-wow-duration="1s"
                            data-tilt
                            data-tilt-max="12"
                            data-tilt-speed="500"
                            data-tilt-perspective="5000"
                            data-tilt-scale="1.06"
                        >
                            <img
                                src="./frontend/marketpro/images/banner-two-img2.png"
                                alt="Image"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
}
