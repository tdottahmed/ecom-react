import Search from "./Search";

export default function MainNav() {
    return (
        <div>
            <header className="header-middle style-two bg-color-neutral">
                <div className="container container-lg">
                    <nav className="header-inner flex-between">
                        <div className="logo">
                            <a href="index.html" className="link">
                                <img
                                    src="./frontend/marketpro/images/logo-two.png"
                                    alt="Logo"
                                />
                            </a>
                        </div>
                        <div className="flex items-center md:gap-[16px] max-sm:gap-0">
                            <div className="select-dropdown-for-home-two xl:hidden block">
                                <ul className="header-top__right style-two flex items-center flex-wrap">
                                    <li className="on-hover-item border-right-item border-right-item-sm-space has-submenu arrow-white">
                                        <a
                                            href="#"
                                            className="selected-text text-heading text-sm py-8"
                                        >
                                            Eng
                                        </a>
                                        <ul className="selectable-text-list on-hover-dropdown common-dropdown common-dropdown--sm max-h-200 scroll-sm !px-0 py-8">
                                            <li>
                                                <a
                                                    href="#"
                                                    className="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none"
                                                >
                                                    <img
                                                        src="./frontend/marketpro/images/flag1.png"
                                                        alt="Image"
                                                        className="w-16 h-12 rounded-4 border border-gray-100"
                                                    />
                                                    English
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    href="#"
                                                    className="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none"
                                                >
                                                    <img
                                                        src="./frontend/marketpro/images/flag2.png"
                                                        alt="Image"
                                                        className="w-16 h-12 rounded-4 border border-gray-100"
                                                    />{" "}
                                                    Japan
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    href="#"
                                                    className="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none"
                                                >
                                                    <img
                                                        src="./frontend/marketpro/images/flag3.png"
                                                        alt="Image"
                                                        className="w-16 h-12 rounded-4 border border-gray-100"
                                                    />
                                                    French
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    href="#"
                                                    className="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none"
                                                >
                                                    <img
                                                        src="./frontend/marketpro/images/flag4.png"
                                                        alt="Image"
                                                        className="w-16 h-12 rounded-4 border border-gray-100"
                                                    />
                                                    Germany
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    href="#"
                                                    className="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none"
                                                >
                                                    <img
                                                        src="./frontend/marketpro/images/flag6.png"
                                                        alt="Image"
                                                        className="w-16 h-12 rounded-4 border border-gray-100"
                                                    />
                                                    Bangladesh
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    href="#"
                                                    className="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none"
                                                >
                                                    <img
                                                        src="./frontend/marketpro/images/flag5.png"
                                                        alt="Image"
                                                        className="w-16 h-12 rounded-4 border border-gray-100"
                                                    />{" "}
                                                    South Korea
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li className="on-hover-item border-right-item border-right-item-sm-space has-submenu arrow-white">
                                        <a
                                            href="#"
                                            className="selected-text text-heading text-sm py-8"
                                        >
                                            USD
                                        </a>
                                        <ul className="selectable-text-list on-hover-dropdown common-dropdown common-dropdown--sm max-h-200 scroll-sm px-0 py-8">
                                            <li>
                                                <a
                                                    href="#"
                                                    className="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none"
                                                >
                                                    <img
                                                        src="./frontend/marketpro/images/flag1.png"
                                                        alt="Image"
                                                        className="w-16 h-12 rounded-4 border border-gray-100"
                                                    />{" "}
                                                    USD
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    href="#"
                                                    className="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none"
                                                >
                                                    <img
                                                        src="./frontend/marketpro/images/flag2.png"
                                                        alt="Image"
                                                        className="w-16 h-12 rounded-4 border border-gray-100"
                                                    />{" "}
                                                    Yen
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    href="#"
                                                    className="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none"
                                                >
                                                    <img
                                                        src="./frontend/marketpro/images/flag3.png"
                                                        alt="Image"
                                                        className="w-16 h-12 rounded-4 border border-gray-100"
                                                    />{" "}
                                                    Franc
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    href="#"
                                                    className="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none"
                                                >
                                                    <img
                                                        src="./frontend/marketpro/images/flag4.png"
                                                        alt="Image"
                                                        className="w-16 h-12 rounded-4 border border-gray-100"
                                                    />{" "}
                                                    EURO
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    href="#"
                                                    className="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none"
                                                >
                                                    <img
                                                        src="./frontend/marketpro/images/flag6.png"
                                                        alt="Image"
                                                        className="w-16 h-12 rounded-4 border border-gray-100"
                                                    />{" "}
                                                    BDT
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    href="#"
                                                    className="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none"
                                                >
                                                    <img
                                                        src="./frontend/marketpro/images/flag5.png"
                                                        alt="Image"
                                                        className="w-16 h-12 rounded-4 border border-gray-100"
                                                    />{" "}
                                                    WON
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <Search />
                        </div>
                        <div className="header-right items-center xl:block hidden">
                            <div className="header-two-activities flex items-center flex-wrap gap-32">
                                <button
                                    type="button"
                                    className="items-center search-icon xl:hidden flex gap-4 item-hover-two"
                                >
                                    <span className="text-2xl text-white flex relative item-hover__text">
                                        <i className="ph ph-magnifying-glass"></i>
                                    </span>
                                </button>{" "}
                                <a
                                    href="account.html"
                                    className="flex items-center flex-col gap-8 item-hover-two"
                                >
                                    <span className="text-2xl text-white flex relative item-hover__text">
                                        <i className="ph ph-user"></i>{" "}
                                    </span>
                                    <span className="text-md text-white item-hover__text hidden xl:flex">
                                        Profile
                                    </span>{" "}
                                </a>
                                <a
                                    href="wishlist.html"
                                    className="flex items-center flex-col gap-8 item-hover-two"
                                >
                                    <span className="text-2xl text-white flex relative me-6 mt-6 item-hover__text">
                                        <i className="ph ph-heart"></i>{" "}
                                        <span className="w-16 h-16 flex items-center justify-center rounded-[50%] bg-main-two-600 text-white text-xs absolute top-n6 end-n4">
                                            2
                                        </span>
                                    </span>
                                    <span className="text-md text-white item-hover__text hidden xl:flex">
                                        Wishlist
                                    </span>{" "}
                                </a>
                                <a
                                    href="cart.html"
                                    className="flex items-center flex-col gap-8 item-hover-two"
                                >
                                    <span className="text-2xl text-white flex relative me-6 mt-6 item-hover__text">
                                        <i className="ph-fill ph-shuffle"></i>
                                        <span className="w-16 h-16 flex items-center justify-center rounded-[50%] bg-main-two-600 text-white text-xs absolute top-n6 end-n4">
                                            2
                                        </span>
                                    </span>
                                    <span className="text-md text-white item-hover__text hidden xl:flex">
                                        Compare
                                    </span>{" "}
                                </a>
                                <a
                                    href="cart.html"
                                    className="flex items-center flex-col gap-8 item-hover-two"
                                >
                                    <span className="text-2xl text-white flex relative me-6 mt-6 item-hover__text">
                                        <i className="ph ph-shopping-cart-simple"></i>{" "}
                                        <span className="w-16 h-16 flex items-center justify-center rounded-[50%] bg-main-two-600 text-white text-xs absolute top-n6 end-n4">
                                            2
                                        </span>
                                    </span>
                                    <span className="text-md text-white item-hover__text hidden xl:flex">
                                        Cart
                                    </span>
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
        </div>
    );
}
