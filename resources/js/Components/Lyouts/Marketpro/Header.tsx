import MainNav from "./Partials/MainNav";
import MobileMenu from "./Partials/MobileMenu";
import StickyNav from "./Partials/StickyNav";

export default function Header() {
    return (
        <>
            <MobileMenu />
            <MainNav />
            <StickyNav />
        </>
    );
}
