import React from "react";
import ReactDOM from "react-dom";

function Candidato() {
    return (
        <div className="py-6">
            <ul className="flex ml-8">
                <li className="mr-3">
                    <a
                        className="inline-block border border-blue-500 rounded py-1 px-3 bg-blue-500 text-white"
                        id="presidente"
                        href="#"
                    >
                        Presidentes
                    </a>
                </li>
                <li className="mr-3">
                    <a
                        className="inline-block border border-white rounded hover:border-gray-200 text-blue-500 hover:bg-gray-200 py-1 px-3"
                        href="#"
                    >
                        Vicepresidentes
                    </a>
                </li>
                <li className="mr-3">
                    <a
                        className="inline-block border border-white rounded hover:border-gray-200 text-blue-500 hover:bg-gray-200 py-1 px-3"
                        href="#"
                    >
                        Alcaldes
                    </a>
                </li>
            </ul>
        </div>
    );
}

export default Candidato;

if (document.getElementById("candidatos")) {
    ReactDOM.render(<Candidato />, document.getElementById("candidatos"));
}
