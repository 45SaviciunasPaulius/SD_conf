import { Link } from "@inertiajs/react";
import MainLayout from "../../../Layouts/MainLayout";
import { useTranslation } from "react-i18next";

export default function ConferencesIndex({ conferences }) {
    const { t } = useTranslation();
    return (
        <MainLayout className="flex flex-col">
            <h3 className="text-center text-3xl font-medium mt-10">
                {t("Conferences")}
            </h3>
            <Link
                href="/admin"
                className="underline text-amber-800 font-medium text-xl text-center m-3"
            >
                {t("Admin panel")}
            </Link>
            <Link
                href="/admin/conferences/create"
                className="pr-3 underline text-amber-800 font-medium self-center mb-10 text-lg"
            >
                {t("Create new conference")}
            </Link>
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
                        {c.status == "planned" && (
                            <>
                                <Link
                                    href={`/admin/conferences/${c.id}/edit`}
                                    className="pr-3 underline text-amber-800 font-medium self-center "
                                >
                                    {t("Edit")}
                                </Link>

                                <Link className="pr-3 underline text-red-500 font-medium self-center ">
                                    {t("Delete")}
                                </Link>
                            </>
                        )}
                    </div>
                ))}
            </div>
        </MainLayout>
    );
}
