import { Link } from "@inertiajs/react";
import MainLayout from "../../Layouts/MainLayout";
import { useTranslation } from "react-i18next";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";

export default function EmployeeIndex({ conferences }) {
    const { t } = useTranslation();
    return (
        <AuthenticatedLayout>
            <h3 className="text-center text-3xl font-medium m-10">
                {t("Conferences")}
            </h3>
            <div className="flex flex-wrap gap-10 justify-center">
                {conferences.map((c) => (
                    <div
                        key={c.id}
                        className={`w-100 h-30  rounded shadow p-3 ${c.status === "planned" ? "bg-amber-200" : "bg-neutral-400"}`}
                    >
                        <h3 className="font-medium">{c.title}</h3>
                        <p className="text-neutral-600">
                            {c.date} - {c.location}
                        </p>
                        <p>{t("Status: ")}{c.status}</p>

                        <Link
                            href={`/employee/conferences/${c.id}`}
                            className="pr-3 underline text-amber-800 font-medium"
                        >
                            {t("View")}
                        </Link>
                    </div>
                ))}
            </div>
        </AuthenticatedLayout>
    );
}
