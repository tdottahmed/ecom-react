import Categories from "./Categories";

export default function StickyNav() {
    return (
        <div>
            <header className="header bg-white border-b border-gray-100">
                <div className="container container-lg">
                    <nav className="header-inner flex justify-between gap-8">
                        <div className="flex items-center menu-category-wrapper">
                            <Categories />
                            <div className="header-menu xl:block hidden">
                                <ul className="nav-menu flex items-center">
                                    <li className="on-hover-item nav-menu__item activePage">
                                        <a href="#" className="nav-menu__link">
                                            Home
                                        </a>
                                    </li>
                                    <li className="on-hover-item nav-menu__item">
                                        <a href="#" className="nav-menu__link">
                                            Shop
                                        </a>
                                    </li>
                                    <li className="on-hover-item nav-menu__item">
                                        <a href="#" className="nav-menu__link">
                                            Pages
                                        </a>
                                    </li>
                                    <li className="on-hover-item nav-menu__item">
                                        {/* <span className="badge-notification bg-tertiary-600 text-white text-sm py-2 px-8 rounded-4">
                                            New
                                        </span>{" "} */}
                                        <a href="#" className="nav-menu__link">
                                            Vendors
                                        </a>
                                    </li>
                                    <li className="on-hover-item nav-menu__item">
                                        <a href="#" className="nav-menu__link">
                                            Blog
                                        </a>
                                    </li>
                                    <li className="nav-menu__item">
                                        <a
                                            href="contact.html"
                                            className="nav-menu__link"
                                        >
                                            Contact Us
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div className="header-right flex items-center">
                            <div className="select-dropdown-for-home-two xl:block hidden">
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
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div className="me-8 xl:hidden block">
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
                                            <i className="ph-fill ph-shuffle"></i>{" "}
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
                            <button
                                type="button"
                                className="toggle-mobileMenu xl:hidden ms-3n text-gray-800 text-4xl flex"
                            >
                                <i className="ph ph-list"></i>
                            </button>
                        </div>
                    </nav>
                </div>
            </header>
        </div>
    );
}
