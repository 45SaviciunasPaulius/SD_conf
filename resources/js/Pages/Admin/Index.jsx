import { Link } from "@inertiajs/react";
import MainLayout from "../../Layouts/MainLayout";
import { useTranslation } from "react-i18next";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";

export default function AdminIndex() {
    const { t } = useTranslation();
    return (
        <AuthenticatedLayout>
            <div className="grid grid-cols-2 place-items-center m-20">
                <Link
                    href="/admin/users"
                    className="text-4xl bg-amber-500 w-80 h-80 flex rounded items-center justify-center hover:bg-amber-600 shadow-2xl font-medium"
                >
                    {t("Users")}
                </Link>
                <Link
                    href="/admin/conferences"
                    className="text-4xl bg-amber-500 w-80 h-80 flex rounded items-center justify-center hover:bg-amber-600 shadow-2xl font-medium"
                >
                    {t("Conferences")}
                </Link>
            </div>
        </AuthenticatedLayout>
    );
}
