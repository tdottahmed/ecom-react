export default function Categories() {
    return (
        <>
            <div className="category on-hover-item bg-main-600 text-white">
                <button
                    type="button"
                    className="category__button flex items-center gap-8 font-[500] p-16 border-r border-l border-gray-100 text-white"
                >
                    <span className="icon text-2xl sm:flex hidden">
                        <i className="ph ph-dots-nine"></i>
                    </span>{" "}
                    <span className="md:flex hidden">All</span> Categories{" "}
                    <span className="arrow-icon text-xl flex">
                        <i className="ph ph-caret-down"></i>
                    </span>
                </button>
                <div className="responsive-dropdown on-hover-dropdown common-dropdown nav-submenu p-0 submenus-submenu-wrapper">
                    <button
                        type="button"
                        className="close-responsive-dropdown rounded-[50%] text-xl absolute right-0 inset-block-start-0 mt-4 me-8 xl:hidden flex"
                    >
                        <i className="ph ph-x"></i>
                    </button>
                    <div className="logo px-16 xl:hidden block">
                        <a href="index.html" className="link">
                            <img
                                src="./frontend/marketpro/images/logo.png"
                                alt="Logo"
                            />
                        </a>
                    </div>
                    <ul className="scroll-sm p-0 py-8 w-300 max-h-400 overflow-y-auto">
                        <li className="has-submenus-submenu">
                            <a
                                href="#"
                                className="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"
                            >
                                <span className="text-xl flex">
                                    <i className="ph ph-carrot"></i>
                                </span>{" "}
                                <span>Vegetables &amp; Fruit</span>{" "}
                                <span className="icon text-md flex ms-auto">
                                    <i className="ph ph-caret-right"></i>
                                </span>
                            </a>
                            <div className="submenus-submenu py-16">
                                <h6 className="text-lg px-16 submenus-submenu__title">
                                    Vegetables &amp; Fruit
                                </h6>
                                <ul className="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                    <li>
                                        <a href="shop.html">
                                            Potato &amp; Tomato
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop.html">
                                            Cucumber &amp; Capsicum
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Leafy Vegetables</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Root Vegetables</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Beans &amp; Okra</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">
                                            Cabbage &amp; Cauliflower
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop.html">
                                            Gourd &amp; Drumstick
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Specialty</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li className="has-submenus-submenu">
                            <a
                                href="#"
                                className="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"
                            >
                                <span className="text-xl flex">
                                    <i className="ph ph-brandy"></i>
                                </span>{" "}
                                <span>Beverages</span>{" "}
                                <span className="icon text-md flex ms-auto">
                                    <i className="ph ph-caret-right"></i>
                                </span>
                            </a>
                            <div className="submenus-submenu py-16">
                                <h6 className="text-lg px-16 submenus-submenu__title">
                                    Beverages
                                </h6>
                                <ul className="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                    <li>
                                        <a href="shop.html">
                                            Soda &amp; Cocktail Mix
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop.html">
                                            Sports &amp; Energy Drinks
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop.html">
                                            Non Alcoholic Drinks
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Packaged Water</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Spring Water</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Flavoured Water</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li className="has-submenus-submenu">
                            <a
                                href="#"
                                className="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"
                            >
                                <span className="text-xl flex">
                                    <i className="ph ph-brandy"></i>
                                </span>{" "}
                                <span>Meats &amp; Seafood</span>{" "}
                                <span className="icon text-md flex ms-auto">
                                    <i className="ph ph-caret-right"></i>
                                </span>
                            </a>
                            <div className="submenus-submenu py-16">
                                <h6 className="text-lg px-16 submenus-submenu__title">
                                    Meats &amp; Seafood
                                </h6>
                                <ul className="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                    <li>
                                        <a href="shop.html">Fresh Meat</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Frozen Meat</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Marinated Meat</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">
                                            Fresh &amp; Frozen Meat
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li className="has-submenus-submenu">
                            <a
                                href="#"
                                className="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"
                            >
                                <span className="text-xl flex">
                                    <i className="ph ph-brandy"></i>
                                </span>{" "}
                                <span>Breakfast &amp; Dairy</span>{" "}
                                <span className="icon text-md flex ms-auto">
                                    <i className="ph ph-caret-right"></i>
                                </span>
                            </a>
                            <div className="submenus-submenu py-16">
                                <h6 className="text-lg px-16 submenus-submenu__title">
                                    Breakfast &amp; Dairy
                                </h6>
                                <ul className="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                    <li>
                                        <a href="shop.html">
                                            Oats &amp; Porridge
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Kids Cereal</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Muesli</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Flakes</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">
                                            Granola &amp; Cereal Bars
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Instant Noodles</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li className="has-submenus-submenu">
                            <a
                                href="#"
                                className="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"
                            >
                                <span className="text-xl flex">
                                    <i className="ph ph-brandy"></i>
                                </span>{" "}
                                <span>Frozen Foods</span>{" "}
                                <span className="icon text-md flex ms-auto">
                                    <i className="ph ph-caret-right"></i>
                                </span>
                            </a>
                            <div className="submenus-submenu py-16">
                                <h6 className="text-lg px-16 submenus-submenu__title">
                                    Frozen Foods
                                </h6>
                                <ul className="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                    <li>
                                        <a href="shop.html">Instant Noodles</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Hakka Noodles</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Cup Noodles</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Vermicelli</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Instant Pasta</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li className="has-submenus-submenu">
                            <a
                                href="#"
                                className="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"
                            >
                                <span className="text-xl flex">
                                    <i className="ph ph-brandy"></i>
                                </span>{" "}
                                <span>Biscuits &amp; Snacks</span>{" "}
                                <span className="icon text-md flex ms-auto">
                                    <i className="ph ph-caret-right"></i>
                                </span>
                            </a>
                            <div className="submenus-submenu py-16">
                                <h6 className="text-lg px-16 submenus-submenu__title">
                                    Biscuits &amp; Snacks
                                </h6>
                                <ul className="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                    <li>
                                        <a href="shop.html">Salted Biscuits</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">
                                            Marie, Health, Digestive
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop.html">
                                            Cream Biscuits &amp; Wafers
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop.html">
                                            Glucose &amp; Milk biscuits
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Cookies</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li className="has-submenus-submenu">
                            <a
                                href="#"
                                className="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"
                            >
                                <span className="text-xl flex">
                                    <i className="ph ph-brandy"></i>
                                </span>{" "}
                                <span>Grocery &amp; Staples</span>{" "}
                                <span className="icon text-md flex ms-auto">
                                    <i className="ph ph-caret-right"></i>
                                </span>
                            </a>
                            <div className="submenus-submenu py-16">
                                <h6 className="text-lg px-16 submenus-submenu__title">
                                    Grocery &amp; Staples
                                </h6>
                                <ul className="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                    <li>
                                        <a href="#">
                                            Lemon, Ginger &amp; Garlic
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Indian &amp; Exotic Herbs
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Orangic Vegetables</a>
                                    </li>
                                    <li>
                                        <a href="#">Orangic Fruits</a>
                                    </li>
                                    <li>
                                        <a href="#">Orangic Dry Fruits</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Orangic Dals &amp; pulses
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Orangic Millet &amp; Flours
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </>
    );
}
