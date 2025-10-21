import { ReactNode } from "react";
import Preloader from "./Preloader";
import ScrollToTop from "./ScrollToTop";

interface MasterProps {
    children: ReactNode;
}

export default function Master({ children }: MasterProps) {
    return (
        <div>
            <Preloader />
            <div className="main-content">{children}</div>
            <ScrollToTop />
        </div>
    );
}
