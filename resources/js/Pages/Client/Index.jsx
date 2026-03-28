import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import MainLayout from "../../Layouts/MainLayout";
import { useForm, usePage } from "@inertiajs/react";
import { Link } from "@inertiajs/react";
import { useTranslation } from "react-i18next";

export default function ClientIndex({ conferences }) {
    const { t } = useTranslation();
    const { post, processing } = useForm();

    const handleRegister = (id) => {
        post(`/client/conferences/${id}/register`);
    };

    return (
        <AuthenticatedLayout>
            <h3 className="text-center text-3xl font-medium m-10">
                {t("Conferences")}
            </h3>

            <div className="flex flex-wrap gap-10 justify-center">
                {conferences.map((c) => (
                    <div
                        key={c.id}
                        className="w-100 h-25 bg-amber-200 rounded shadow p-3"
                    >
                        <h3 className="font-medium">{c.title}</h3>
                        <p className="text-neutral-600">
                            {c.date} - {c.location}
                        </p>
                        <h3 className="font-medium">{c.lectors}</h3>
                        <Link
                            href={`/client/conferences/${c.id}`}
                            className="pr-3 underline text-amber-800 font-medium"
                        >
                            {t("View")}
                        </Link>

                        <button
                            onClick={() => handleRegister(c.id)}
                            disabled={processing}
                            className="pr-3 underline text-amber-800 font-medium cursor-pointer"
                        >
                            {t("Register")}
                        </button>
                    </div>
                ))}
            </div>
        </AuthenticatedLayout>
    );
}
