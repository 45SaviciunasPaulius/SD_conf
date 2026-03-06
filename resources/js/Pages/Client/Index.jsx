import { Link } from "@inertiajs/react";

export default function ClientIndex({ conferences }) {
    return (
        <div>
            <h2>Konferencijos</h2>
            {conferences.map((c) => (
                <div key={c.id} className="border">
                    <h2>{c.title}</h2>
                    <p>
                        {c.date} - {c.location}
                    </p>
                    <Link href={`/client/conferences/${c.id}`}>View</Link>
                    <Link href={`/client/conferences/${c.id}/register`}>
                        Register
                    </Link>
                </div>
            ))}
        </div>
    );
}
