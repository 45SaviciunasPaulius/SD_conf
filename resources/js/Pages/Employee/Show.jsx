import { Link } from "@inertiajs/react";
import { useTranslation } from "react-i18next";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";

export default function EmployeeShow({ conference, users }) {
    const { t } = useTranslation();
    return (
        <AuthenticatedLayout className="flex flex-col justify-center m-20 w-full ">
            <div className="self-center mb-10">
                <Link
                    href="/employee/conferences"
                    className="pr-3 underline text-amber-800 font-medium text-xl"
                >
                    {t("All conferences")}
                </Link>
            </div>
            {
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
                    <p>
                        {t("Status: ")}
                        {conference.status}
                    </p>
                    <p className="w-200 flex self-center pt-5">
                        {conference.description}
                    </p>
                </div>
            }
            <div className="w-300 bg-amber-200 rounded shadow p-3 self-center m-5">
                <h3 className="text-center text-2xl font-medium">
                    {t("Registered Users")}
                </h3>

                {users && users.length > 0 ? (
                    <div className="flex flex-row flex-wrap m-2">
                        {users.map((user) => (
                            <div
                                key={user.id}
                                className="bg-amber-300 rounded shadow m-1 p-1 w-90"
                            >
                                <h2 className="font-medium">
                                    {user.name} {user.surname}
                                </h2>
                                <p>{user.email}</p>
                            </div>
                        ))}
                    </div>
                ) : (
                    <p className="text-center text-neutral-600">
                        {t("No users registered yet.")}
                    </p>
                )}
            </div>
        </AuthenticatedLayout>
    );
}
