import { Link, usePage } from "@inertiajs/react";
import { useTranslation } from "react-i18next";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";

export default function ConferencesIndex({ conferences }) {
    const { t } = useTranslation();
    const { errors } = usePage().props;

    return (
        <AuthenticatedLayout className="flex flex-col">
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
            {errors?.delete && (
                <div className="text-red-500 mt-2 text-center mb-3 font-medium">
                    {errors.delete}
                </div>
            )}
            <div className="flex flex-wrap gap-10 justify-center">
                {conferences.map((c) => (
                    <div
                        key={c.id}
                        className={`w-100 h-30 rounded shadow p-3 ${
                            new Date(c.date) >=
                            new Date(new Date().setHours(0, 0, 0, 0))
                                ? "bg-amber-200"
                                : "bg-neutral-400"
                        }`}
                    >
                        <h3 className="font-medium">{c.title}</h3>

                        <p className="text-neutral-600">
                            {c.date} - {c.location}
                        </p>
                        {/* 
                        <p>
                            {t("Status: ")}
                            {c.status}
                        </p> */}

                        {new Date(c.date) >=
                            new Date(new Date().setHours(0, 0, 0, 0)) && (
                            <>
                                <Link
                                    href={`/admin/conferences/${c.id}/edit`}
                                    className="pr-3 underline text-amber-800 font-medium"
                                >
                                    {t("Edit")}
                                </Link>

                                <Link
                                    href={`/admin/conferences/${c.id}`}
                                    method="delete"
                                    as="button"
                                    className="pr-3 underline text-red-500 font-medium cursor-pointer"
                                >
                                    {t("Delete")}
                                </Link>
                            </>
                        )}
                    </div>
                ))}
            </div>
        </AuthenticatedLayout>
    );
}
