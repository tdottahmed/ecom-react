import Banner from "@/Components/Landing/Banner";
import Deals from "@/Components/Landing/Deals";
import PromoBanner from "@/Components/Landing/PromoBanner";
import TopSellingProducts from "@/Components/Landing/TopSellingProducts";
import Header from "@/Components/Lyouts/Marketpro/Header";

function Home() {
    return (
        <>
            <Header />
            <Banner />
            <PromoBanner />
            <Deals />
            <TopSellingProducts />
        </>
    );
}

export default Home;
