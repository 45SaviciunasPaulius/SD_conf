import { Link } from "@inertiajs/react";

export default function ClientShow({ conference }) {
    return (
        <div>
            {
                <div key={conference.id} className="border">
                    <h2>{conference.title}</h2>
                    <p>
                        {conference.date} - {conference.location}
                    </p>
                    <Link
                        href={`/client/conferences/${conference.id}/register`}
                    >
                        Register
                    </Link>
                </div>
            }
        </div>
    );
}
