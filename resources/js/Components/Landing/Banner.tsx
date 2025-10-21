import BannerCarousel from "./Partials/BannerCarousel";

export default function Banner() {
    return (
        <div>
            <div className="banner-two">
                <div className="container container-lg">
                    <div className="banner-two-wrapper flex items-start">
                        <BannerCarousel />
                    </div>
                </div>
            </div>
        </div>
    );
}
