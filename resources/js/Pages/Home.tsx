import Banner from "@/Components/Landing/Banner";
import Deals from "@/Components/Landing/Deals";
import PromoBanner from "@/Components/Landing/PromoBanner";
import TopSellingProducts from "@/Components/Landing/TopSellingProducts";
import Header from "@/Components/Lyouts/Marketpro/Header";
import Master from "@/Components/Lyouts/Marketpro/Master";

function Home() {
    return (
        <>
            <Master>
                <Header />
                <Banner />
                <PromoBanner />
                <Deals />
                <TopSellingProducts />
            </Master>
        </>
    );
}

export default Home;
