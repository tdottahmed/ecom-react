import Card from "./Product/Card";

export default function Deals() {
    return (
        <section className="deals-weeek pt-80 overflow-hidden">
            <div className="container container-lg">
                <div className="border border-gray-100 p-24 rounded-16">
                    <div className="section-heading mb-24">
                        <div className="flex-between flex-wrap gap-8">
                            <h5 className="mb-0 wow bounceInLeft">
                                Deal of The Week
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
                                        id="deal-week-prev"
                                        className="slick-prev slick-arrow flex items-center justify-center rounded-[50%] border border-gray-100 hover-border-neutral-600 text-xl hover-bg-neutral-600 hover-text-white transition-1"
                                    >
                                        <i className="ph ph-caret-left"></i>
                                    </button>{" "}
                                    <button
                                        type="button"
                                        id="deal-week-next"
                                        className="slick-next slick-arrow flex items-center justify-center rounded-[50%] border border-gray-100 hover-border-neutral-600 text-xl hover-bg-neutral-600 hover-text-white transition-1"
                                    >
                                        <i className="ph ph-caret-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="deal-week-box rounded-16 overflow-hidden flex-between relative z-[1] mb-24">
                        <img
                            src="./frontend/marketpro/images/week-deal-bg.png"
                            alt="Image"
                            className="absolute inset-block-start-0 inset-block-start-0 w-full h-full z-[-1] object-fit-cover"
                        />
                        <div
                            className="xl:block hidden ps-32 flex-shrink-0"
                            data-aos="zoom-in"
                        >
                            <img
                                src="./frontend/marketpro/images/week-deal-img1.png"
                                alt="Image"
                            />
                        </div>
                        <div className="deal-week-box__content px-sm-4 block w-full text-center">
                            <h6 className="mb-20 wow bounceIn">
                                Apple AirPods Max, Over Ear Headphones
                            </h6>
                            <div className="countdown mt-20" id="countdown4">
                                <ul className="countdown-list style-four flex items-center justify-center flex-wrap">
                                    <li className="countdown-list__item flex items-center flex-col text-sm font-[500] text-white rounded-[50%] bg-neutral-600">
                                        <span className="days"></span>Days
                                    </li>
                                    <li className="countdown-list__item flex items-center flex-col text-sm font-[500] text-white rounded-[50%] bg-neutral-600">
                                        <span className="hours"></span>Hour
                                    </li>
                                    <li className="countdown-list__item flex items-center flex-col text-sm font-[500] text-white rounded-[50%] bg-neutral-600">
                                        <span className="minutes"></span>Min
                                    </li>
                                    <li className="countdown-list__item flex items-center flex-col text-sm font-[500] text-white rounded-[50%] bg-neutral-600">
                                        <span className="seconds"></span>Sec
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div
                            className="xl:block hidden flex-shrink-0 pe-xl-5"
                            data-aos="zoom-in"
                        >
                            <div className="me-xxl-5">
                                <img
                                    src="./frontend/marketpro/images/week-deal-img2.png"
                                    alt="Image"
                                />
                            </div>
                        </div>
                    </div>
                    <div className="deals-week-slider arrow-style-two">
                        {[...Array(8)].map((_, i) => (
                            <Card key={i} />
                        ))}
                    </div>
                </div>
            </div>
        </section>
    );
}
