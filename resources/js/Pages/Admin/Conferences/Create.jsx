import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import MainLayout from "../../../Layouts/MainLayout";
import { useForm } from "@inertiajs/react";
import { useTranslation } from "react-i18next";

export default function ConferenceCreate() {
    const { t } = useTranslation();
    const { data, setData, post, processing, errors } = useForm({
        title: "",
        date: "",
        location: "",
        description: "",
        lectors: "",
    });

    const handleChange = (e) => {
        setData(e.target.name, e.target.value);
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        post("/admin/conferences");
    };

    return (
        <AuthenticatedLayout>
            <div className="max-w-md mx-auto mt-10 p-6 bg-amber-200 rounded-xl shadow-md">
                <h1 className="text-2xl font-bold mb-6 text-center">
                    {t("Create Conference")}
                </h1>

                <form onSubmit={handleSubmit} className="space-y-5">
                    <div>
                        <label className="block text-sm font-medium text-gray-700">
                            {t("Title")}
                        </label>
                        <input
                            type="text"
                            name="title"
                            value={data.title}
                            onChange={handleChange}
                            className="mt-1 block w-full px-4 py-2 rounded-md shadow-sm outline-none bg-amber-100"
                        />
                        {errors.title && (
                            <div className="text-red-500 text-sm">
                                {errors.title}
                            </div>
                        )}
                    </div>

                    <div>
                        <label className="block text-sm font-medium text-gray-700">
                            {t("Date")}
                        </label>
                        <input
                            type="date"
                            name="date"
                            value={data.date}
                            onChange={handleChange}
                            className="mt-1 block w-full px-4 py-2 rounded-md shadow-sm outline-none bg-amber-100"
                        />
                        {errors.date && (
                            <div className="text-red-500 text-sm">
                                {errors.date}
                            </div>
                        )}
                    </div>

                    <div>
                        <label className="block text-sm font-medium text-gray-700">
                            {t("Location")}
                        </label>
                        <input
                            type="text"
                            name="location"
                            value={data.location}
                            onChange={handleChange}
                            className="mt-1 block w-full px-4 py-2 rounded-md shadow-sm outline-none bg-amber-100"
                        />
                        {errors.location && (
                            <div className="text-red-500 text-sm">
                                {errors.location}
                            </div>
                        )}
                    </div>

                    <div>
                        <label className="block text-sm font-medium text-gray-700">
                            {t("Description")}
                        </label>
                        <textarea
                            name="description"
                            value={data.description}
                            onChange={handleChange}
                            className="mt-1 block w-full px-4 py-2 rounded-md shadow-sm outline-none bg-amber-100 h-40"
                        />
                        {errors.description && (
                            <div className="text-red-500 text-sm">
                                {errors.description}
                            </div>
                        )}
                    </div>

                    <div>
                        <label className="block text-sm font-medium text-gray-700">
                            {t("Lectors")}
                        </label>
                        <input
                            type="text"
                            name="lectors"
                            value={data.lectors}
                            onChange={handleChange}
                            className="mt-1 block w-full px-4 py-2 rounded-md shadow-sm outline-none bg-amber-100"
                        />
                        {errors.lectors && (
                            <div className="text-red-500 text-sm">
                                {errors.lectors}
                            </div>
                        )}
                    </div>

                    <button
                        type="submit"
                        disabled={processing}
                        className="w-full py-2 px-4 bg-amber-500 hover:bg-amber-600 text-white font-semibold rounded-md shadow-md"
                    >
                        {t("Create")}
                    </button>
                </form>
            </div>
        </AuthenticatedLayout>
    );
}
