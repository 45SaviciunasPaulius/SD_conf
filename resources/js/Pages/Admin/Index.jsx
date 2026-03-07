import { Link } from "@inertiajs/react";
import MainLayout from "../../Layouts/MainLayout";

export default function AdminIndex() {
    return (
        <MainLayout>
            <div className="grid grid-cols-2 place-items-center m-20">
                <Link
                    href="/admin/users"
                    className="text-4xl bg-amber-500 w-80 h-80 flex rounded items-center justify-center hover:bg-amber-600 shadow-2xl font-medium"
                >
                    Users
                </Link>
                <Link
                    href="/admin/conferences"
                    className="text-4xl bg-amber-500 w-80 h-80 flex rounded items-center justify-center hover:bg-amber-600 shadow-2xl font-medium"
                >
                    Conferences
                </Link>
            </div>
        </MainLayout>
    );
}
