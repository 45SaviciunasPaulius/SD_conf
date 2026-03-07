import { Link } from "@inertiajs/react";

export default function Main() {
    return (
        <div>
            <div className="text-center text-3xl m-5">
                <h2 className="font-medium">Project's author:</h2>
                <p>Paulius Savičiūnas</p>
                <p>PIT-23-NL</p>
            </div>
            <div className="grid grid-cols-3 place-items-center m-20">
                <Link
                    href="/client/conferences"
                    className="text-4xl bg-amber-500 w-80 h-80 flex rounded items-center justify-center hover:bg-amber-600 shadow-2xl font-medium"
                >
                    Client
                </Link>
                <Link
                    href="/employee"
                    className="text-4xl bg-amber-500 w-80 h-80 flex rounded items-center justify-center hover:bg-amber-600 shadow-2xl font-medium"
                >
                    Employee
                </Link>
                <Link
                    href="/admin"
                    className="text-4xl bg-amber-500 w-80 h-80 flex rounded items-center justify-center hover:bg-amber-600 shadow-2xl font-medium"
                >
                    Admin
                </Link>
            </div>
        </div>
    );
}
