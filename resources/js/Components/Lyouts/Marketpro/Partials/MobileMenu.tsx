export default function MobileMenu() {
    return (
        <div>
            <div className="mobile-menu scroll-sm xl:hidden block">
                <button type="button" className="close-button">
                    <i className="ph ph-x"></i>
                </button>
                <div className="mobile-menu__inner">
                    <a href="index.html" className="mobile-menu__logo">
                        <img
                            src="./frontend/marketpro/images/logo.png"
                            alt="Logo"
                        />
                    </a>
                    <div className="mobile-menu__menu">
                        <ul className="nav-menu flex items-center nav-menu--mobile">
                            <li className="on-hover-item nav-menu__item has-submenu activePage">
                                <a
                                    href="#"
                                    className="nav-menu__link"
                                >
                                    Home
                                </a>
                                <ul className="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                                    <li className="common-dropdown__item nav-submenu__item activePage">
                                        <a
                                            href="index.html"
                                            className="common-dropdown__link nav-submenu__link hover-bg-neutral-100"
                                        >
                                            Home Grocery
                                        </a>
                                    </li>
                                    <li className="common-dropdown__item nav-submenu__item">
                                        <a
                                            href="index-two.html"
                                            className="common-dropdown__link nav-submenu__link hover-bg-neutral-100"
                                        >
                                            Home Electronics
                                        </a>
                                    </li>
                                    <li className="common-dropdown__item nav-submenu__item">
                                        <a
                                            href="index-three.html"
                                            className="common-dropdown__link nav-submenu__link hover-bg-neutral-100"
                                        >
                                            Home Fashion
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li className="on-hover-item nav-menu__item has-submenu">
                                <a
                                    href="#"
                                    className="nav-menu__link"
                                >
                                    Shop
                                </a>
                                <ul className="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                                    <li className="common-dropdown__item nav-submenu__item">
                                        <a
                                            href="shop.html"
                                            className="common-dropdown__link nav-submenu__link hover-bg-neutral-100"
                                        >
                                            Shop
                                        </a>
                                    </li>
                                    <li className="common-dropdown__item nav-submenu__item">
                                        <a
                                            href="product-details.html"
                                            className="common-dropdown__link nav-submenu__link hover-bg-neutral-100"
                                        >
                                            Shop Details
                                        </a>
                                    </li>
                                    <li className="common-dropdown__item nav-submenu__item">
                                        <a
                                            href="product-details-two.html"
                                            className="common-dropdown__link nav-submenu__link hover-bg-neutral-100"
                                        >
                                            Shop Details Two
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li className="on-hover-item nav-menu__item has-submenu">
                                <span className="badge-notification bg-warning-600 text-white text-sm py-2 px-8 rounded-4">
                                    New
                                </span>{" "}
                                <a
                                    href="#"
                                    className="nav-menu__link"
                                >
                                    Pages
                                </a>
                                <ul className="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                                    <li className="common-dropdown__item nav-submenu__item">
                                        <a
                                            href="cart.html"
                                            className="common-dropdown__link nav-submenu__link hover-bg-neutral-100"
                                        >
                                            Cart
                                        </a>
                                    </li>
                                    <li className="common-dropdown__item nav-submenu__item">
                                        <a
                                            href="wishlist.html"
                                            className="common-dropdown__link nav-submenu__link hover-bg-neutral-100"
                                        >
                                            Wishlist
                                        </a>
                                    </li>
                                    <li className="common-dropdown__item nav-submenu__item">
                                        <a
                                            href="checkout.html"
                                            className="common-dropdown__link nav-submenu__link hover-bg-neutral-100"
                                        >
                                            Checkout
                                        </a>
                                    </li>
                                    <li className="common-dropdown__item nav-submenu__item">
                                        <a
                                            href="become-seller.html"
                                            className="common-dropdown__link nav-submenu__link hover-bg-neutral-100"
                                        >
                                            Become Seller
                                        </a>
                                    </li>
                                    <li className="common-dropdown__item nav-submenu__item">
                                        <a
                                            href="account.html"
                                            className="common-dropdown__link nav-submenu__link hover-bg-neutral-100"
                                        >
                                            Account
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li className="on-hover-item nav-menu__item has-submenu">
                                <span className="badge-notification bg-tertiary-600 text-white text-sm py-2 px-8 rounded-4">
                                    New
                                </span>{" "}
                                <a
                                    href="#"
                                    className="nav-menu__link"
                                >
                                    Vendors
                                </a>
                                <ul className="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                                    <li className="common-dropdown__item nav-submenu__item">
                                        <a
                                            href="vendor.html"
                                            className="common-dropdown__link nav-submenu__link hover-bg-neutral-100"
                                        >
                                            Vendors
                                        </a>
                                    </li>
                                    <li className="common-dropdown__item nav-submenu__item">
                                        <a
                                            href="vendor-details.html"
                                            className="common-dropdown__link nav-submenu__link hover-bg-neutral-100"
                                        >
                                            Vendor Details
                                        </a>
                                    </li>
                                    <li className="common-dropdown__item nav-submenu__item">
                                        <a
                                            href="vendor-two.html"
                                            className="common-dropdown__link nav-submenu__link hover-bg-neutral-100"
                                        >
                                            Vendors Two
                                        </a>
                                    </li>
                                    <li className="common-dropdown__item nav-submenu__item">
                                        <a
                                            href="vendor-two-details.html"
                                            className="common-dropdown__link nav-submenu__link hover-bg-neutral-100"
                                        >
                                            Vendors Two Details
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li className="on-hover-item nav-menu__item has-submenu">
                                <a
                                    href="#"
                                    className="nav-menu__link"
                                >
                                    Blog
                                </a>
                                <ul className="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                                    <li className="common-dropdown__item nav-submenu__item">
                                        <a
                                            href="blog.html"
                                            className="common-dropdown__link nav-submenu__link hover-bg-neutral-100"
                                        >
                                            Blog
                                        </a>
                                    </li>
                                    <li className="common-dropdown__item nav-submenu__item">
                                        <a
                                            href="blog-details.html"
                                            className="common-dropdown__link nav-submenu__link hover-bg-neutral-100"
                                        >
                                            Blog Details
                                        </a>
                                    </li>
                                </ul>
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
            </div>
        </div>
    );
}
