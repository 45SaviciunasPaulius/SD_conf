import { Link } from "@inertiajs/react";

export default function Main() {
    return (
        <div>
            <div className="text-center text-xl m-5">
                <h2 className="font-medium">Project's author:</h2>
                <p>Paulius Savičiūnas</p>
                <p>PIT-23-NL</p>
            </div>
            <div className="grid grid-cols-3 place-items-center m-10">
                <Link
                    href="/client/conferences"
                    className="bg-amber-200 w-30 h-20 flex rounded items-center justify-center hover:bg-amber-300"
                >
                    Client
                </Link>
                <Link
                    href="/employee"
                    className="bg-amber-200 w-30 h-20 flex rounded items-center justify-center hover:bg-amber-300"
                >
                    Employee
                </Link>
                <Link
                    href="/admin"
                    className="bg-amber-200 w-30 h-20 flex rounded items-center justify-center hover:bg-amber-300"
                >
                    Admin
                </Link>
            </div>
        </div>
    );
}
