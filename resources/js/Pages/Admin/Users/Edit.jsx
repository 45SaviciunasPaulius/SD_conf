import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import MainLayout from "../../../Layouts/MainLayout";
import { Link, useForm } from "@inertiajs/react";
import { useTranslation } from "react-i18next";

export default function UserEdit({ user }) {
    const { t } = useTranslation();
    const { data, setData, put, processing, errors } = useForm({
        id: user.id,
        name: user.name,
        surname: user.surname,
        email: user.email,
    });

    const handleChange = (e) => {
        setData(e.target.name, e.target.value);
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        put(`/admin/users/${data.id}`);
    };

    return (
        <AuthenticatedLayout>
            <div className="flex justify-center">
                <Link
                    href="/admin/users"
                    className="underline text-amber-800 font-medium text-xl"
                >
                    {t("All users")}
                </Link>
            </div>
            <div className="max-w-md mx-auto mt-10 p-6 bg-amber-200 rounded-xl shadow-md">
                <h1 className="text-2xl font-bold mb-6 text-center">
                    {t("Edit User")}
                </h1>
                <form onSubmit={handleSubmit} className="space-y-5">
                    <div>
                        <label
                            htmlFor="name"
                            className="block text-sm font-medium text-gray-700"
                        >
                            {t("Name")}
                        </label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            value={data.name}
                            onChange={handleChange}
                            className="mt-1 block w-full px-4 py-2 rounded-md shadow-sm outline-none bg-amber-100"
                        />
                        {errors.name && (
                            <div className="text-red-500 text-sm">
                                {errors.name}
                            </div>
                        )}
                    </div>

                    <div>
                        <label
                            htmlFor="surname"
                            className="block text-sm font-medium text-gray-700"
                        >
                            {t("Surname")}
                        </label>
                        <input
                            type="text"
                            id="surname"
                            name="surname"
                            value={data.surname}
                            onChange={handleChange}
                            className="mt-1 block w-full px-4 py-2 rounded-md shadow-sm outline-none bg-amber-100"
                        />
                        {errors.surname && (
                            <div className="text-red-500 text-sm">
                                {errors.surname}
                            </div>
                        )}
                    </div>

                    <div>
                        <label
                            htmlFor="email"
                            className="block text-sm font-medium text-gray-700"
                        >
                            {t("Email")}
                        </label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            value={data.email}
                            onChange={handleChange}
                            className="mt-1 block w-full px-4 py-2 rounded-md shadow-sm outline-none bg-amber-100"
                        />
                        {errors.email && (
                            <div className="text-red-500 text-sm">
                                {errors.email}
                            </div>
                        )}
                    </div>

                    <button
                        type="submit"
                        disabled={processing}
                        className="w-full py-2 px-4 bg-amber-500 hover:bg-amber-600 text-white font-semibold rounded-md shadow-md"
                    >
                        {t("Submit")}
                    </button>
                </form>
            </div>
        </AuthenticatedLayout>
    );
}
