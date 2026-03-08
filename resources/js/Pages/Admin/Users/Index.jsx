import { Link } from "@inertiajs/react";
import MainLayout from "../../../Layouts/MainLayout";
import { useTranslation } from "react-i18next";

export default function UsersIndex({ users }) {
    const { t } = useTranslation();
    return (
        <MainLayout className="flex flex-col">
            <h2 className="font-medium text-2xl text-center m-5">{t("All Users")}</h2>
            <Link
                href="/admin"
                className="underline text-amber-800 font-medium text-xl text-center"
            >
                {t("Admin panel")}
            </Link>
            <div className="flex flex-row m-2 justify-center">
                {users.map((user) => (
                    <div
                        key={user.id}
                        className="bg-amber-300 rounded shadow m-1 p-1 w-90 "
                    >
                        <h2 className="font-medium">
                            {user.name} {user.surname}
                        </h2>
                        <p>{user.email}</p>
                        <Link
                            href={`/admin/users/${user.id}/edit`}
                            className="pr-3 underline text-amber-800 font-medium"
                        >
                            {t("Edit")}
                        </Link>
                    </div>
                ))}
            </div>
        </MainLayout>
    );
}
