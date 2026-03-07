import { Link } from "@inertiajs/react";

export default function MainLayout({ children, className }) {
    return (
        <div>
            <nav className="flex flex-row gap-10 justify-end p-4 bg-amber-500 shadow text-xl">
                <p>Name: placeholder</p>
                <Link href="/" className="font-medium">
                    Logout
                </Link>
            </nav>
            <main className={className}>{children}</main>
        </div>
    );
}
