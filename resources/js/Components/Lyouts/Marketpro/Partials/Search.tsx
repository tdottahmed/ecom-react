export default function Search() {
    return (
        <form
            action="#"
            className="flex items-center flex-wrap form-location-wrapper"
        >
            <div className="search-category style-two h-48 search-form md:flex hidden">
                <select
                    className="js-example-basic-single border-gray-200 border-r-0 rounded-none border-0"
                    name="state"
                >
                    <option value="1" selected disabled>
                        All Categories
                    </option>
                    <option value="1">Grocery</option>
                    <option value="1">Breakfast & Dairy</option>
                    <option value="1">Vegetables</option>
                    <option value="1">Milks and Dairies</option>
                    <option value="1">Pet Foods & Toy</option>
                    <option value="1">Breads & Bakery</option>
                    <option value="1">Fresh Seafood</option>
                    <option value="1">Fronzen Foods</option>
                    <option value="1">Noodles & Rice</option>
                    <option value="1">Ice Cream</option>
                </select>
                <div className="search-form__wrapper relative">
                    <input
                        className="search-form__input common-input py-13 ps-16 pe-18 rounded-none border-0"
                        placeholder="Search for a product or brand"
                    />
                </div>
                <button
                    type="submit"
                    className="bg-main-two-600 items-center justify-center text-xl text-white flex-shrink-0 w-48 hover-bg-main-two-700 xl:flex hidden"
                >
                    <i className="ph ph-magnifying-glass"></i>
                </button>
            </div>
        </form>
    );
}
