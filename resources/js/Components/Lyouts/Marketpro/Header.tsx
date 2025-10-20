import MainNav from "./Partials/MainNav";
import MobileMenu from "./Partials/MobileMenu";
import StickyNav from "./Partials/StickyNav";
import Preloader from "./Preloader";

export default function Header() {
    return (
        <>
            <Preloader />
            <MobileMenu />
            <MainNav />
            <StickyNav />
        </>
    );
}
