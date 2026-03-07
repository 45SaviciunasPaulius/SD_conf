import { Link } from "@inertiajs/react";

export default function EmployeeShow({ conference, users }) {
    return (
        <div className="flex flex-col justify-center m-20 w-full ">
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
                    <p>Status: {conference.status}</p>
                    <p className="w-200 flex self-center pt-5">
                        {conference.description}
                    </p>
                </div>
            }
            <div className="w-300 bg-amber-200 rounded shadow p-3 self-center m-5">
                <h3 className="text-center text-2xl font-medium">
                    Registered Users
                </h3>

                <div className="flex flex-row m-2">
                    {users.map((user) => (
                        <div
                            key={user.id}
                            className="bg-amber-300 rounded shadow m-1 p-1 w-90 "
                        >
                            <h2 className="font-medium">
                                {user.name} {user.surname}
                            </h2>
                            <p>{user.email}</p>
                        </div>
                    ))}
                </div>
            </div>
        </div>
    );
}
