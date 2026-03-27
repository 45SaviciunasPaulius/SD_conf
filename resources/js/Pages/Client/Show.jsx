import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import MainLayout from "../../Layouts/MainLayout";
import { useForm } from "@inertiajs/react";
import { Link } from "@inertiajs/react";
import { useTranslation } from "react-i18next";

export default function ClientShow({ conference }) {
    const { t } = useTranslation();
    const { post, processing } = useForm();

    const handleRegister = () => {
        post(`/client/conferences/${conference.id}/register`);
    };

    return (
        <AuthenticatedLayout className="flex justify-center m-3 flex-col">
            <div className="self-center mb-10">
                <Link
                    href="/client/conferences"
                    className="pr-3 underline text-amber-800 font-medium text-xl"
                >
                    {t("All conferences")}
                </Link>
            </div>

            <div
                key={conference.id}
                className="w-300 bg-amber-200 rounded shadow p-3 flex flex-col self-center"
            >
                <h2 className="text-center text-2xl font-medium">
                    {conference.title}
                </h2>
                <p className="text-center text-neutral-600">
                    {conference.date} - {conference.location}
                </p>
                <p className="w-200 flex self-center pt-5">
                    {conference.description}
                </p>
                <button
                    onClick={handleRegister}
                    disabled={processing}
                    className="pr-3 underline text-amber-800 font-medium self-end cursor-pointer"
                >
                    {t("Register")}
                </button>
            </div>
        </AuthenticatedLayout>
    );
}
