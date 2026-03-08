import { Link } from "@inertiajs/react";
import { useTranslation } from "react-i18next";

export default function Main() {
    const { t, i18n } = useTranslation();
    return (
        <div>
            <div className="text-center text-3xl m-5">
                <h2 className="font-medium">{t("Project's author:")}</h2>
                <p>{t("Paulius Savičiūnas")}</p>
                <p>{t("PIT-23-NL")}</p>
            </div>
            <div className="grid grid-cols-3 place-items-center m-20">
                <Link
                    href="/client/conferences"
                    className="text-4xl bg-amber-500 w-80 h-80 flex rounded items-center justify-center hover:bg-amber-600 shadow-2xl font-medium"
                >
                    {t("Client")}
                </Link>
                <Link
                    href="/employee/conferences"
                    className="text-4xl bg-amber-500 w-80 h-80 flex rounded items-center justify-center hover:bg-amber-600 shadow-2xl font-medium"
                >
                    {t("Employee")}
                </Link>
                <Link
                    href="/admin"
                    className="text-4xl bg-amber-500 w-80 h-80 flex rounded items-center justify-center hover:bg-amber-600 shadow-2xl font-medium"
                >
                    {t("Admin")}
                </Link>
            </div>
        </div>
    );
}
