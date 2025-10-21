// Components/TopSellingProducts.tsx
import React, { useState, useEffect } from "react";
import Card from "./Product/Card";
import Counter from "../Ui/Counter";

const TopSellingProducts: React.FC = () => {
    return (
        <section className="top-selling-products pt-80 overflow-hidden">
            <div className="container container-lg">
                <div className="border border-gray-100 p-24 rounded-16">
                    {/* Header Section */}
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
                                    </button>
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
                        <Counter
                            title="Top Selling Products"
                            subtitle="Fresh Vegetables"
                            endTime={
                                new Date().getTime() + 1000 * 60 * 60 * 24 * 7
                            }
                        />
                    </div>
                </div>
            </div>
        </section>
    );
};

export default TopSellingProducts;
