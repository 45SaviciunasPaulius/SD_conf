import { Link } from "@inertiajs/react";

export default function ClientShow({ conference }) {
    return (
        <div className="flex justify-center m-20">
            {
                <div
                    key={conference.id}
                    className="w-300 bg-amber-200 rounded shadow p-3 flex flex-col"
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
                    <Link
                        href={`/client/conferences/${conference.id}/register`}
                        className="pr-3 underline text-amber-800 font-medium self-end"
                    >
                        Register
                    </Link>
                </div>
            }
        </div>
    );
}
